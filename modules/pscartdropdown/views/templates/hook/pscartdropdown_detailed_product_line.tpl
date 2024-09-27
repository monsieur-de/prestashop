{**
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
 *}
<div class="product-line-grid">
    <!--  product left content: image-->
    <div class="col-md-3 col-xs-4">
        <img class="productimage" src="{$product.cover.bySize.small_default.url}" alt="{$product.name|escape:'quotes'}">
    </div>
    <!--  product left body: description -->
    <div class="col-md-5 col-xs-6">
        <div>
            <a class="label" style="color: #363a41 !important;font-weight: bold;" href="{$product.url}">{$product.name}</a>
        </div>
        <div class="product-price h5 {if $product.has_discount}has-discount{/if}">
            {if $product.has_discount}
            <div class="product-discount">
                <span class="regular-price">{$product.regular_price}</span>
                {if $product.discount_type === 'percentage'}
                <span class="discount discount-percentage">
                -{$product.discount_percentage_absolute}
                </span>
                {else}
                <span class="discount discount-amount">
                -{$product.discount_to_display}
                </span>
                {/if}
            </div>
            {/if}
            <div>
                <span style="{if $cartdropdown_params.CHECKBOX_BLACKPRICE eq 0}color:{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'} {/if}">{$product.price}</span>
                {if $product.unit_price_full}
                <div>{$product.unit_price_full}</div>
                {/if}
            </div>
        </div>
        <br/>
        <div class="attributes">
            {foreach from=$product.attributes name="attributes" item="value"}
            <span style="color: #414141 !important">{$value} {if not $smarty.foreach.attributes.last} - {/if}
            </span>
            {/foreach}
        </div>
    </div>
    <!--  product left body: description -->
    <div class="pscartdropdown-product-line-grid-right col-lg-3 col-md-4 col-xs-4">
	{if $isMobile eq 0}
        {if isset($product.is_gift) && $product.is_gift}
        <span class="gift-quantity">{$product.quantity}</span>
        {else}
        <input
            class="js-cart-line-product-quantity"
            data-down-url="{$product.down_quantity_url}"
            data-up-url="{$product.up_quantity_url}"
            data-update-url="{$product.update_quantity_url}"
            data-product-id="{$product.id_product}"
            type="text"
            value="{$product.quantity}"
            name="product-quantity-spin"
            min="{$product.minimal_quantity}"
            />
        {/if}
	{/if}
        <div class="divclosecross col-md-2 col-xs-2">
            <div class="cartdrop-line-product-actions">
                <a
                    class                       = "pscartdropdowncross remove-from-cart"
                    rel                         = "nofollow"
                    href                        = "{$product.remove_from_cart_url}"
                    data-link-action            = "delete-from-cart"
                    data-id-product             = "{$product.id_product|escape:'javascript'}"
                    data-id-product-attribute   = "{$product.id_product_attribute|escape:'javascript'}"
                    data-id-customization   	  = "{$product.id_customization|escape:'javascript'}"
                    >
                {if !isset($product.is_gift) || !$product.is_gift}
                <i class="material-icons float-xs-left">close</i>
                {/if}
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
