/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */
$(document).ready(function() {
    if (isMobileCartDropdown == 0 && document.body.clientWidth > 640) {
        $("#pscarthover_shoppingcart").appendTo("#_desktop_cart");
    }
    let cart_block = new HoverWatcher('#header .blockcart');
    let shopping_cart = new HoverWatcher('#pscarthover_shoppingcart');
    let shop_block = new HoverWatcher('#wrapper');
    let clicked = false;
    let clickedqty = false;
    let nbProducts = 0;

    $(document).on('touchend', '#close_cartdropdown_mobile', function() {
        $("#pscarthover_shoppingcart").slideUp(500);
    });
    if (isMobileCartDropdown == 1 && CheckBoxMobile == 1) {
        $(document).on('touchend', '.blockcart', function(event) {
            event.preventDefault();
            $("#pscarthover_shoppingcart").slideDown(500);
        });
    }

    $(document).on('click', '.remove-from-cart', function() {
        let id_product = $(this).attr('data-id-product');
        clicked = true;
        $('.cart-item-' + id_product).fadeTo("slow", 0.00, function() {
            $(this).slideUp(500, function() {
                $(this).remove();
            });
        });
    });
    if (isMobileCartDropdown == 0) {
        $(document).on('click', '.js-decrease-product-quantity', function() {
            let qty = $(this).parent().parent().find('.js-cart-line-product-quantity').attr('value');
            if (qty == "1") {
                let id_product = $(this).parent().parent().find('.js-cart-line-product-quantity').attr('data-product-id');
                $('.cart-item-' + id_product).fadeTo("slow", 0.00, function() {
                    $(this).slideUp(500, function() {
                        $(this).remove();
                    });
                });
            }
            clickedqty = true;
        });
    }
    if (isMobileCartDropdown == 0) {
        $(document).on('mouseover', '.blockcart', function() {
            if (nbProducts || prestashop.cart.products_count)
            $("#pscarthover_shoppingcart").not(":animated").slideDown(500);
        });
        $(document).on('mouseleave', '.blockcart', function() {
            setTimeout(function() {
                if (!shopping_cart.isHoveringOver() && !cart_block.isHoveringOver())
                $("#pscarthover_shoppingcart").not(":animated").slideUp(500);
            }, 400);
        });

        $("#pscarthover_shoppingcart").hover(
            function() {},
            function() {
                setTimeout(function() {
                    if (!shopping_cart.isHoveringOver() && !cart_block.isHoveringOver() || prestashop.cart.products_count < 0)
                    $("#pscarthover_shoppingcart").slideUp(900);
                }, 400);
            }
        );
    }

    prestashop.on(
        'updateCart',
        function(event) {
            prestashop.cart = event.reason.cart;
            let getCartViewUrl = $('.js-cartdrop').data('refresh-url');
            if (!getCartViewUrl) {
                return;
            }
            let requestData = {};
            if (event && event.reason) {
                requestData = {
                    id_product_attribute: event.reason.idProductAttribute,
                    id_product: event.reason.idProduct
                };
            }
            $.post(getCartViewUrl, requestData).then((resp) => {
                nbProducts = resp.nbProducts;
                //if product is deleted add 1 sec delay
                if (clicked == true || clickedqty == true) {
                    setTimeout(function() {
                        $('.cartdrop-detailed-totals').replaceWith(resp.cartdrop_detailed_totals);
                        $('.cartdrop-detailed-actions').replaceWith(resp.cartdrop_detailed_actions);
                        $('.cartdrop-overview').replaceWith(resp.cartdrop_detailed);
                        $('#product_customization_id').val(0);
                        $('.js-cart-line-product-quantity').each((index, input) => {
                            let $input = $(input);
                            $input.attr('value', $input.val());
                        });
                        prestashop.emit('updatedCart', {
                            eventType: 'updateCart',
                            resp: resp
                        });
                    }, 900)
                    clicked = false;
                    clickedqty = false;
                } else {
                    $('.cartdrop-detailed-totals').replaceWith(resp.cartdrop_detailed_totals);
                    $('.cartdrop-detailed-actions').replaceWith(resp.cartdrop_detailed_actions);
                    $('.cartdrop-overview').replaceWith(resp.cartdrop_detailed);

                    $('#product_customization_id').val(0);

                    $('.js-cart-line-product-quantity').each((index, input) => {
                        let $input = $(input);
                        $input.attr('value', $input.val());
                    });
                    prestashop.emit('updatedCart', {
                        eventType: 'updateCart',
                        resp: resp
                    });
                }
            }).fail((resp) => {
                prestashop.emit('handleError', {
                    eventType: 'updateCart',
                    resp: resp
                })
            });
        }
    );
});

function HoverWatcher(selector) {
    this.hovering = false;
    let self = this;

    this.isHoveringOver = function() {
        return self.hovering;
    }

    $(selector).hover(function() {
        self.hovering = true;
    }, function() {
        self.hovering = false;
    })
}
