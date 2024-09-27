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
{block name='cartdrop_detailed_totals'}
<div id="total_block" class="cartdrop-detailed-totals card-block">
    <div style="text-align: center; margin-bottom: 10px;" class="cartdrop-summary-line cartdrop-total">
        <span style="color: #7a7a7a" class="label">{$cart.totals.total.label} {$cart.labels.tax_short}: <span style="font-weight: bold;" class="label">{$cart.totals.total.value}</span></span>
    </div>
    {if $cartdropdown_params.CHECKBOX_VIEW_CART eq 1}
    <div class="viewmycart text-sm-center">
        <a href="{$cart_url}"
        {if $cartdropdown_params.CHECKBOX_CHECKOUT_NOW eq 1}
        class="btnviewcart btn btn-outline-primary btn-block"
        onmouseover="this.style.background='{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'}';this.style.color='#FFF';"
        onmouseout="this.style.background='';this.style.color='{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'}';"
        style="background: transparent; border-color:{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'}; color:{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'};"
        {else}
        class="btn btn-primary btn-block" style="color: #fff;background-color:{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'}"
        {/if}>
        <i class="material-icons shopping-cart-dropdown">shopping_cart</i>
        <span>{l s='View my cart' mod='pscartdropdown'}</span>
        <span class="cartdrop-products-count">({$cart.products_count})</span>
        </a>
    </div>
    {/if}
    {* button block *}
    {if $cartdropdown_params.CHECKBOX_CHECKOUT_NOW eq 1}
    {block name='cartdrop_actions'}
    {include file='module:pscartdropdown/views/templates/hook/pscartdropdown_detailed_actions.tpl' cart=$cart}
    {/block}
    {/if}
    {* mobile button only *}
    {if $cartdropdown_params.CHECKBOX_MOBILE eq 1 && $isMobile eq 1}
    <div class="mobileclose">
        <a style="color:{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'}" id="close_cartdropdown_mobile" href="#">
        <i style="font-size: 36px;" class="material-icons">close</i>
        </a>
    </div>
    {/if}
    {* if the cart contains more than 3 different product *}
    {if $cart.products|@count > 3}
    <style media="screen">

    #total_block {
        -moz-box-shadow: 0px -3px 6px 1px #ccc;
        -webkit-box-shadow: 0px -3px 6px 1px #ccc;
        -o-box-shadow: 0px -3px 6px 1px #ccc;
        box-shadow: 0px -3px 6px 1px #ccc;
    }
</style>

{/if}
</div>
{/block}
