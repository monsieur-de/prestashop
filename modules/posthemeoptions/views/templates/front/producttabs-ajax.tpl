{if $carousel_active}
    {if $specific_layout}
        <div class="tab-specific-layout">
            <div class="tabproduct-first-content">
                {foreach from=$products item="product" name="producttab"}
                    <article class="thumbnail-container product-miniature js-product-miniature style_product2" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" >
                        <div class="img_block">
                        {block name='product_thumbnail'}
                            {if $product.cover}
                            <a href="{$product.url}" class="thumbnail product-thumbnail">
                            <img class="first-image lazyload"
                                data-src = "{$product.cover.bySize.home_default.url}" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                                alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
                                data-full-size-image-url = "{$product.cover.large.url}"
                            >
                            {hook h="rotatorImg" product=$product}	
                            </a>
                            {else}
                            <a href="{$product.url}" class="thumbnail product-thumbnail">
                                <img src="{$urls.no_picture_image.bySize.home_default.url}" />
                            </a>
                            {/if}
                        {/block}
                            <ul class="add-to-links">
                                <li>
                                    {hook h='displayProductListFunctionalButtons' product=$product}
                                </li>
                                {assign var='displayProductListCompare' value={hook h='displayProductListCompare'} }
                                {if $displayProductListCompare}
                                <li class="compare">	
                                    <a href="#" class="poscompare-add compare-button js-poscompare-add"  data-id_product="{$product.id_product|intval}"   onclick="posCompare.addCompare($(this),{$product.id_product|intval},'{$product.name}','{$product.cover.bySize.home_default.url}'); return false;" title="{l s='Add to compare' d='Shop.Theme.Actions'}"><span>{l s='compare' d='Shop.Theme.Actions'}</span></a>
                                </li>
                                {/if}
                                <li class="quick-view-item">
                                    {block name='quick_view'}
                                    <a class="js-quick-view quick-view" href="#" data-link-action="quickview" title="{l s='Quick view' d='Shop.Theme.Actions'}">
                                    <span>{l s='Quick view' d='Shop.Theme.Actions'}</span>
                                    </a>
                                    {/block}
                                </li>
                                
                            </ul> 
                        
                            {block name='product_flags'}
                            <ul class="product-flag">
                            {foreach from=$product.flags item=flag}
                                <li class="{$flag.type}"><span>{$flag.label}</span></li>
                            {/foreach}
                            </ul>
                            {/block}
                        </div>
                        <div class="product_desc">
                            <div class="inner_desc">
                                
                                {if isset($product.id_manufacturer) && $show_brand}
                                <div class="manufacturer"><a href="{url entity='manufacturer' id=$product.id_manufacturer }">{Manufacturer::getnamebyid($product.id_manufacturer)}</a></div>
                                {/if}
                                {block name='product_name'}
                                <h3 ><a href="{$product.url}" class="product_name {if $name_length ==0 }one_line{/if}" title="{$product.name}">{$product.name|truncate:50:'...'}</a></h3> 
                                {/block}
                                {if $show_rating}
                                {block name='product_reviews'}
                                    <div class="hook-reviews">
                                    {hook h='displayProductListReviews' product=$product}
                                    </div>
                                {/block}
                                {/if}
                                {block name='product_price_and_shipping'}
                                {if $product.show_price}
                                    <div class="product-price-and-shipping">
                                    {if $product.has_discount}
                                        {hook h='displayProductPriceBlock' product=$product type="old_price"}
                                        <span class="regular-price" aria-label="{l s='Regular price' d='Shop.Theme.Catalog'}">{$product.regular_price}</span>
                                    {/if}

                                    {hook h='displayProductPriceBlock' product=$product type="before_price"}

                                    <span class="price {if $product.has_discount}price-sale{/if}" aria-label="{l s='Price' d='Shop.Theme.Catalog'}">
                                        {capture name='custom_price'}{hook h='displayProductPriceBlock' product=$product type='custom_price' hook_origin='products_list'}{/capture}
                                        {if '' !== $smarty.capture.custom_price}
                                        {$smarty.capture.custom_price nofilter}
                                        {else}
                                        {$product.price}
                                        {/if}
                                    </span>
                                        
                                    {hook h='displayProductPriceBlock' product=$product type='unit_price'}

                                    {hook h='displayProductPriceBlock' product=$product type='weight'}
                                    {if $product.has_discount}
                                        {if $product.discount_type === 'percentage'}
                                        <span class="discount-percentage discount-product">{$product.discount_percentage}</span>
                                        {elseif $product.discount_type === 'amount'}
                                        <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>
                                        {/if}
                                    {/if}
                                    </div>
                                {/if}
                                {/block}
                                <div class="cart">
                                    {include file='catalog/_partials/customize/button-cart.tpl' product=$product}
                                </div>
                            </div>
                        
                            <div class="variant-links">
                            {block name='product_variants'}
                            {if $product.main_variants}
                            {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
                            {/if}
                            {/block} 
                            </div>
                        
                        </div>
                    </article>
                {if $smarty.foreach.producttab.index == 0} {break} {/if}
                {/foreach}  
            </div>
            <div class="tabproduct-second-content">
                <div class="tabproduct-second-inner">
                <div class="slick-slider-block {$tab_class}" data-slider_options="{$slick_options}" data-slider_responsive="{$slick_responsive}">
                    {foreach from=$products item="product" name="producttab"}
                    {if $smarty.foreach.producttab.index > 0}
                    <div class="slick-slide1">
                            {include file="$theme_template_path" product=$product}
                    </div>
                    {/if}
                    {/foreach}
                    
                </div>
                <div class="slick-custom-navigation"></div>
                </div>
            </div>
        </div>
    {else}
        <div class="slick-slider-block {$tab_class}" data-slider_options="{$slick_options}" data-slider_responsive="{$slick_responsive}">
        {foreach from=$products item="product"}
            <div class="slick-slide1">
                    {include file="$theme_template_path" product=$product}
            </div>
        {/foreach}
        </div>
        <div class="slick-custom-navigation"></div>
    {/if}
{else}
    <div class="product-grid">
        {foreach from=$products item="product"}
        <div class="col-xl-{$columns_desktop} col-md-{$columns_tablet} col-xs-{$columns_mobile}">
            {include file="$theme_template_path" product=$product}
        </div>
        {/foreach}
    </div>
{/if}