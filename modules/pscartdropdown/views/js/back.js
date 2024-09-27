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
$(document).ready(function(){
    let mainColor = document.getElementById('PRIMARY_COLOR_CARTDROPDOWN').value;
    document.getElementById('blockcartpreview').style.backgroundColor = mainColor;//bg btn cart
    if ($("input[name='CHECKBOX_VIEW_CART']:checked").val() == 1) {
        if ($("input[name='CHECKBOX_CHECKOUT_NOW']:checked").val() == 0) {
        }
    }
    if ($("input[name='CHECKBOX_CHECKOUT_NOW']:checked").val() == 1) {
        document.getElementById('btn_checkoutnow').style.backgroundColor = mainColor;//btn 2
        document.getElementById('btn_checkoutnow').style.borderColor = mainColor;//btn 2
    }
    if ($("input[name='CHECKBOX_BLACKPRICE']:checked").val() == 0) {
        document.getElementById('price1').style.color = mainColor;
        document.getElementById('price2').style.color = mainColor;
        document.getElementById('price3').style.color = mainColor;
        document.getElementById('price4').style.color = mainColor;
    }

    $(".btn-outline-primary").hover(function() {
        document.getElementsByClassName('btn-outline-primary')[0].style.backgroundColor = mainColor;//btn 2
        document.getElementsByClassName('btn-outline-primary')[0].style.color = '#fff';//btn 2
    }, function() {
        document.getElementsByClassName('btn-outline-primary')[0].style.backgroundColor = '';//btn 2
        document.getElementsByClassName('btn-outline-primary')[0].style.color = mainColor;//btn 2
    });
$('input[type=radio][name=CHECKBOX_VIEW_CART]').change(function() {
    if ($("input[name='CHECKBOX_CHECKOUT_NOW']:checked").val() == 0) {
        document.getElementById("checkbox_checkout_now_on").checked = true;
        document.getElementById("btn_checkoutnow").classList.remove('hidden');
    }
    if ($("input[name='CHECKBOX_VIEW_CART']:checked").val() == 0) {
        document.getElementById("btn_viewcart").classList.add('hidden');
    }
    if ($("input[name='CHECKBOX_VIEW_CART']:checked").val() == 1) {
        document.getElementById("btn_viewcart").classList.remove('hidden');
        if ($("input[name='CHECKBOX_CHECKOUT_NOW']:checked").val() == 1) {
            document.getElementById("btn_viewcart").classList.remove('btn-primary');
            document.getElementById("btn_viewcart").classList.add('btn-primary-outline');
            $('#btn_viewcart').css("background-color", '');
            $('#btn_viewcart').css("color", mainColor);
            $('#btn_viewcart').css("border-color", mainColor);
        }
    }
});

$('input[type=radio][name=CHECKBOX_CHECKOUT_NOW]').change(function() {
    if ($("input[name='CHECKBOX_VIEW_CART']:checked").val() == 0) {
        document.getElementById("checkbox_view_cart_on").checked = true;
        document.getElementById("btn_viewcart").classList.remove('hidden');
    }
    if ($("input[name='CHECKBOX_CHECKOUT_NOW']:checked").val() == 0) {
        document.getElementById("btn_checkoutnow").classList.add('hidden');
        if ($("input[name='CHECKBOX_VIEW_CART']:checked").val() == 1) {
            document.getElementById("btn_viewcart").classList.remove('btn-primary-outline');
            document.getElementById("btn_viewcart").classList.add('btn-primary');
            $('#btn_viewcart').css("background-color", mainColor);
            $('#btn_viewcart').css("color", '');
            if ($("input[name='CHECKBOX_CHECKOUT_NOW']:checked").val() == 0) {
            }
        }

    }
    if ($("input[name='CHECKBOX_CHECKOUT_NOW']:checked").val() == 1) {
        document.getElementById("btn_checkoutnow").classList.remove('hidden');
        if ($("input[name='CHECKBOX_VIEW_CART']:checked").val() == 1) {
            document.getElementById("btn_viewcart").classList.remove('btn-primary');
            document.getElementById("btn_viewcart").classList.add('btn-primary-outline');
            $('#btn_viewcart').css("background-color", '');
            $('#btn_viewcart').css("color", mainColor);
            $('#btn_checkoutnow').css("background-color", mainColor);
            $('#btn_checkoutnow').css("border-color", mainColor);
        }
    }
});
$('input[type=radio][name=CHECKBOX_BLACKPRICE]').change(function() {
    if ($("input[name='CHECKBOX_BLACKPRICE']:checked").val() == 0) {
        $('#price1').css("color", mainColor);
        $('#price2').css("color", mainColor);
        $('#price3').css("color", mainColor);
        $('#price4').css("color", mainColor);
    }
    if ($("input[name='CHECKBOX_BLACKPRICE']:checked").val() == 1) {
        $('#price1').css("color", '');
        $('#price2').css("color", '');
        $('#price3').css("color", '');
        $('#price4').css("color", '');
    }
});

$('input[type=radio][name=CHECKBOX_ACTIVATE]').change(function() {

    if ($("input[name='CHECKBOX_ACTIVATE']:checked").val() == 0) {
        document.getElementById("blockcartpreview").style.opacity = 0.15;
    }
    if ($("input[name='CHECKBOX_ACTIVATE']:checked").val() == 1) {
        document.getElementById("blockcartpreview").style.opacity = 1;

    }
});

$(document).on('change', '.mColorPicker', function() {
    let newColor = $(this).val();
    mainColor = newColor;
    document.getElementById('blockcartpreview').style.backgroundColor = newColor;//bg btn cart
    if ($("input[name='CHECKBOX_VIEW_CART']:checked").val() == 1) {
        if ($("input[name='CHECKBOX_CHECKOUT_NOW']:checked").val() == 1) {
            document.getElementById('btn_viewcart').style.color = newColor;//btn 1
            document.getElementById('btn_viewcart').style.borderColor = newColor;//btn 1
        }
        else {
            document.getElementById('btn_viewcart').style.backgroundColor = newColor;//btn 1
            document.getElementById('btn_viewcart').style.borderColor = newColor;//btn 1
        }
    }
    if ($("input[name='CHECKBOX_CHECKOUT_NOW']:checked").val() == 1) {
        document.getElementById('btn_checkoutnow').style.backgroundColor = newColor;//btn 2
        document.getElementById('btn_checkoutnow').style.borderColor = newColor;//btn 2
    }
    if ($("input[name='CHECKBOX_BLACKPRICE']:checked").val() == 0) {
        document.getElementById('price1').style.color = newColor;
        document.getElementById('price2').style.color = newColor;
        document.getElementById('price3').style.color = newColor;
        document.getElementById('price4').style.color = newColor;
    }
});
});
