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
{if $cartdropdown_params.CHECKBOX_ACTIVATE eq 1}
<div id="pscarthover_shoppingcart" {if $isMobile eq 1}class="noscroll"{/if} style="display:hidden !important;">
{block name='cartdrop_overview'}
{include file='module:pscartdropdown/views/templates/hook/pscartdropdown_cart_detailed.tpl' cart=$cart}
{/block}
{* price block *}
{block name='cartdrop_totals'}
{include file='module:pscartdropdown/views/templates/hook/pscartdropdown_detailed_totals.tpl' cart=$cart}
{/block}
<style media="screen">
    .blockcart {
    background-color: {$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'} !important;
    touch-action: none !important;
    }
    #header .header-nav .cart-preview .shopping-cart {
        color: #ffffff !important;
        font-size: 22px !important;
    }
    .blockcart .header {
        color: #ffffff;
    }
</style>
</div>
{/if}
{* Use this if you want to send php var to your js *}
{literal}
<script type="text/javascript">
    let frontController = "{/literal}{$frontController|escape:'html':'UTF-8'}{literal}";
    let isMobileCartDropdown = "{/literal}{$isMobile|escape:'html':'UTF-8'}{literal}";
    let BgColor = "{/literal}{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'}{literal}";
    let CheckBoxActivate = "{/literal}{$cartdropdown_params.CHECKBOX_ACTIVATE|escape:'html':'UTF-8'}{literal}";
    let CheckBoxBlackPrice = "{/literal}{$cartdropdown_params.CHECKBOX_BLACKPRICE|escape:'html':'UTF-8'}{literal}";
    let CheckBoxMobile = "{/literal}{$cartdropdown_params.CHECKBOX_MOBILE|escape:'html':'UTF-8'}{literal}";
    let CheckBoxViewCart = "{/literal}{$cartdropdown_params.CHECKBOX_VIEW_CART|escape:'html':'UTF-8'}{literal}";
    let CheckBoxCheckoutNow = "{/literal}{$cartdropdown_params.CHECKBOX_CHECKOUT_NOW|escape:'htmlall':'UTF-8'}{literal}";
</script>
{/literal}
