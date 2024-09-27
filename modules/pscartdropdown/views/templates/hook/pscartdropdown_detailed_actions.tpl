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
{block name='cartdrop_detailed_actions'}
<div class="checkoutnow cartdrop-summary-line">
    {if $cart.minimalPurchaseRequired}
    <div class="alert alert-warning" role="alert">
        {$cart.minimalPurchaseRequired}
    </div>
    <div class="text-sm-center">
        <button style="opacity: 0.30 !important" type="button" class="btncheckout btn btn-primary btn-block disabled" disabled>{l s='Proceed to checkout' d='Shop.Theme.Actions'}</button>
    </div>
    {elseif empty($cart.products) }
    <div class="text-sm-center">
        <button style="opacity: 0.30 !important" type="button" class="btncheckout btn btn-primary btn-block disabled" disabled>{l s='Proceed to checkout' d='Shop.Theme.Actions'}</button>
    </div>
    {else}
    <div class="text-sm-center">
        <a href="{$urls.pages.order}" class="btncheckout btn btn-primary btn-block" style="color: #fff; background-color:{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'}">
        <i class="material-icons checkorder">&#xE876;</i>
        {l s='Proceed to checkout' d='Shop.Theme.Actions'}</a>
    </div>
    {/if}
</div>
{/block}
