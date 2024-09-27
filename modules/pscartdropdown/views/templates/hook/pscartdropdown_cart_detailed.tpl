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
{block name='cartdrop_detailed_product'}
<div class="cartdrop-overview js-cartdrop" data-refresh-url="{url entity='module' name='pscartdropdown' controller='FrontAjaxCartDropdown' params=['ajax' => true, 'action' => 'refresh']}">
    {if $cart.products}
    {foreach from=$cart.products name="products" item="product"}
    <div class="productcard cart-item-{$product.id_product}">
        {block name='cart_detailed_product_line'}
        {include file='module:pscartdropdown/views/templates/hook/pscartdropdown_detailed_product_line.tpl' product=$product}
        {/block}
        <hr class="productseparator">
    </div>
    {if is_array($product.customizations) && $product.customizations|count >1}
    <hr>
    {/if}
    {/foreach}
    {/if}
</div>
{/block}
