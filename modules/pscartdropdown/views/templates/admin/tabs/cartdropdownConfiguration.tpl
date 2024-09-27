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
<div class="panel col-lg-10 right-panel">{if $submit eq 'true'}
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"><i class="material-icons">close</i></span></button>
        <p class="alert-text">{l s='Settings saved' mod='pscartdropdown'}</p>
    </div>{elseif $submit eq 'error'}
    <div class="alert alert-danger" role="alert">
        <p class="alert-text">{l s='Error, please try again' mod='pscartdropdown'}</p>
    </div>{/if}
    <form method="post" action="{$moduleAdminLink|escape:'htmlall':'UTF-8'}&page=cartdropdownConfiguration" class="form-horizontal">
        <h3>
            {l s='CartDropdown Configuration' mod='pscartdropdown'}
        </h3>
        <div style="display: flex; justify-content: center; flex-wrap: wrap;">
            <div style="width: 600px">
                <div class="form-group">
                    <div class="control-label col-lg-5 col-md-2 col-xs-5">
                        <label class="labelbutton">{l s='Activate the Cart Dropdown' mod='pscartdropdown'}</label>
                    </div>
                    <div>
                        <div class="input-group fixed-width-lg"> <span class="switch prestashop-switch fixed-width-lg">
                                        <input class="yes" type="radio" name="CHECKBOX_ACTIVATE" id="checkbox_activate_on"
                                            value="1" {if $cartdropdown_params.CHECKBOX_ACTIVATE eq 1}checked="checked" {/if}>
                                            <label for="checkbox_activate_on" class="radioCheck">{l s='YES' mod='pscartdropdown'}</label>
                                        <input class="no" type="radio" name="CHECKBOX_ACTIVATE" id="checkbox_activate_off"
                                            value="0" {if $cartdropdown_params.CHECKBOX_ACTIVATE eq 0}checked="checked" {/if}>
                                            <label for="checkbox_activate_off" class="radioCheck">{l s='NO' mod='pscartdropdown'}</label>
                                        <a class="slide-button btn"></a>
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-lg-5 col-md-2 col-xs-5">
                        <label class="labelbutton" for="pscartdropdown_input_backgroundcolor">{l s='Choose the primary color' mod='pscartdropdown'}</label>
                    </div>
                    <div>
                        <div class="input-group fixed-width-lg">
                            <input id="PRIMARY_COLOR_CARTDROPDOWN" type="text" data-hex="true" class="mColorPickerCartDropDownInput" value="{if isset($cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN)}{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'quotes'}{/if}" name="PRIMARY_COLOR_CARTDROPDOWN"
                            />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-lg-5 col-md-2 col-xs-5">
                        <label class="labelbutton">{l s='Keep default theme color for the price' mod='pscartdropdown'}</label>
                    </div>
                    <div>
                        <div class="input-group fixed-width-lg"> <span class="switch prestashop-switch fixed-width-lg">
                                        <input class="yes" type="radio" name="CHECKBOX_BLACKPRICE" id="checkbox_blackprice_on"
                                            value="1" {if $cartdropdown_params.CHECKBOX_BLACKPRICE eq 1}checked="checked" {/if}>
                                            <label for="checkbox_blackprice_on" class="radioCheck">{l s='YES' mod='pscartdropdown'}</label>
                                        <input class="no" type="radio" name="CHECKBOX_BLACKPRICE" id="checkbox_blackprice_off"
                                            value="0" {if $cartdropdown_params.CHECKBOX_BLACKPRICE eq 0}checked="checked" {/if}>
                                            <label for="checkbox_blackprice_off" class="radioCheck">{l s='NO' mod='pscartdropdown'}</label>
                                        <a class="slide-button btn"></a>
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-lg-5 col-md-2 col-xs-5">
                        <label class="labelbutton">{l s='Activate on Mobile' mod='pscartdropdown'}</label>
                    </div>
                    <div>
                        <div class="input-group fixed-width-lg"> <span class="switch prestashop-switch fixed-width-lg">
                                        <input class="yes" type="radio" name="CHECKBOX_MOBILE" id="checkbox_mobile_on"
                                            value="1" {if $cartdropdown_params.CHECKBOX_MOBILE eq 1}checked="checked" {/if}>
                                            <label for="checkbox_mobile_on" class="radioCheck">{l s='YES' mod='pscartdropdown'}</label>
                                        <input class="no" type="radio" name="CHECKBOX_MOBILE" id="checkbox_mobile_off"
                                            value="0" {if $cartdropdown_params.CHECKBOX_MOBILE eq 0}checked="checked" {/if}>
                                            <label for="checkbox_mobile_off" class="radioCheck">{l s='NO' mod='pscartdropdown'}</label>
                                        <a class="slide-button btn"></a>
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-lg-5 col-md-2 col-xs-5">
                        <label class="labelbutton">{l s='View my cart button' mod='pscartdropdown'}</label>
                    </div>
                    <div>
                        <div class="input-group fixed-width-lg"> <span class="switch prestashop-switch fixed-width-lg">
                                        <input class="on" type="radio" name="CHECKBOX_VIEW_CART" id="checkbox_view_cart_on"
                                            value="1" {if $cartdropdown_params.CHECKBOX_VIEW_CART eq 1}checked="checked" {/if}>
                                            <label for="checkbox_view_cart_on" class="radioCheck">{l s='ON' mod='pscartdropdown'}</label>
                                        <input class="off" type="radio" name="CHECKBOX_VIEW_CART" id="checkbox_view_cart_off"
                                            value="0" {if $cartdropdown_params.CHECKBOX_VIEW_CART eq 0}checked="checked" {/if}>
                                            <label for="checkbox_view_cart_off" class="radioCheck">{l s='OFF' mod='pscartdropdown'}</label>
                                        <a class="slide-button btn"></a>
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-lg-5 col-md-2 col-xs-5">
                        <label class="labelbutton">{l s='Check out now' mod='pscartdropdown'}</label>
                    </div>
                    <div>
                        <div class="input-group fixed-width-lg"> <span class="switch prestashop-switch fixed-width-lg">
                                        <input class="on" type="radio" name="CHECKBOX_CHECKOUT_NOW" id="checkbox_checkout_now_on"
                                            value="1" {if $cartdropdown_params.CHECKBOX_CHECKOUT_NOW eq 1}checked="checked"
                                            {/if}> <label for="checkbox_checkout_now_on" class="radioCheck">{l s='ON' mod='pscartdropdown'}</label>
                                        <input class="off" type="radio" name="CHECKBOX_CHECKOUT_NOW" id="checkbox_checkout_now_off"
                                            value="0" {if $cartdropdown_params.CHECKBOX_CHECKOUT_NOW eq 0}checked="checked"
                                            {/if}> <label for="checkbox_checkout_now_off" class="radioCheck">{l s='OFF' mod='pscartdropdown'}</label>
                                        <a class="slide-button btn"></a>
                                    </span>
                        </div>
                    </div>
                </div>
            </div>{* live preview *}
            <div class="test" style="width: 500px; height: 600px;">
                <div>
                    <div id="blockcartpreview" style="width: 149px; height: 42px; font-size: 16px; padding: .75rem; {if $cartdropdown_params.CHECKBOX_ACTIVATE eq 0}opacity: 0.15{/if}">
                        <div class="header" style="text-align:center; ">
                            <span class="hidden-sm-down"><i class="material-icons shopping-cart">shopping_cart</i>{l s='Cart' d='Shop.Theme.Actions'}</span>
                            <span class="cart-products-count">(4)</span>
                        </div>
                        <div id="livepreview" class="pscartdropdown live-preview" style="display:block;">
                            <div class="cartdrop-overview">{* start product list *} {* product 1 *}
                                <div class="productcard cart-item-1">
                                    <div class="product-line-grid">
                                        <!--  product left content: image-->
                                        <div class="col-md-3 col-xs-4">
                                            <img class="productimage" src="../modules/pscartdropdown/views/img/1-small_default.jpg" alt="">
                                        </div>
                                        <!--  product left body: description -->
                                        <div class="col-md-5 col-xs-4">
                                            <div class="product-name">
                                                <label id="productnamepreview" class="labelbutton">{l s='Hummingbird printed t-shirt' mod='pscartdropdown'}</label>
                                            </div>
                                            <div class="product-price">
                                                <div> <span id="price1">22,94 €</span>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="attributes"> <span>{l s='S' mod='pscartdropdown'}</span> - <span>{l s='White' mod='pscartdropdown'}</span>
                                            </div>
                                        </div>
                                        <!--  product left body: description -->
                                        <div class="pscartdropdown-product-line-grid-right col-md-4 col-xs-4">
                                            <label class="labelqty">1</label>
                                            <div class="divclosecross col-md-2 col-xs-2">
                                                <div class="cartdrop-line-product-actions">
                                                    <a class="remove-from-cart" rel="nofollow" href="#" data-link-action="delete-from-cart" data-id-product="" data-id-product-attribute="" data-id-customization=""> <i class="material-icons float-xs-left" style="margin-top: 25px; margin-left: 100px;">close</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <hr class="productseparator">
                                </div>{* product 2 *}
                                <div class="productcard cart-item-2">
                                    <div class="product-line-grid">
                                        <!--  product left content: image-->
                                        <div class="col-md-3 col-xs-4">
                                            <img class="productimage" src="../modules/pscartdropdown/views/img/2-small_default.jpg" alt="">
                                        </div>
                                        <!--  product left body: description -->
                                        <div class="col-md-5 col-xs-4">
                                            <div class="product-name">
                                                <label id="productnamepreview" class="labelbutton">{l s='Today is a good day Framed poster' mod='pscartdropdown'}</label>
                                            </div>
                                            <div class="product-price">
                                                <div> <span id="price2">34,80 €</span>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="attributes"> <span>{l s='40x60cm' mod='pscartdropdown'}</span>
                                            </div>
                                        </div>
                                        <!--  product left body: description -->
                                        <div class="pscartdropdown-product-line-grid-right col-md-4 col-xs-4">
                                            <label class="labelqty">1</label>
                                            <div class="divclosecross col-md-2 col-xs-2">
                                                <div class="cartdrop-line-product-actions">
                                                    <a class="remove-from-cart" rel="nofollow" href="#" data-link-action="delete-from-cart" data-id-product="" data-id-product-attribute="" data-id-customization=""> <i class="material-icons float-xs-left" style="margin-top: 25px; margin-left: 100px;">close</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <hr class="productseparator">
                                </div>{* product 3 *}
                                <div class="productcard cart-item-3">
                                    <div class="product-line-grid">
                                        <!--  product left content: image-->
                                        <div class="col-md-3 col-xs-4">
                                            <img class="productimage" src="../modules/pscartdropdown/views/img/3-small_default.jpg" alt="">
                                        </div>
                                        <!--  product left body: description -->
                                        <div class="col-md-5 col-xs-4">
                                            <div class="product-name">
                                                <label id="productnamepreview" class="labelbutton">{l s='Mug The adventure begins' mod='pscartdropdown'}</label>
                                            </div>
                                            <div class="product-price">
                                                <div> <span id="price3">14,28 €</span>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="attributes"></div>
                                        </div>
                                        <!--  product left body: description -->
                                        <div class="pscartdropdown-product-line-grid-right col-md-4 col-xs-4">
                                            <label class="labelqty">1</label>
                                            <div class="divclosecross col-md-2 col-xs-2">
                                                <div class="cartdrop-line-product-actions">
                                                    <a class="remove-from-cart" rel="nofollow" href="#" data-link-action="delete-from-cart" data-id-product="" data-id-product-attribute="" data-id-customization=""> <i class="material-icons float-xs-left" style="margin-top: 25px; margin-left: 100px;">close</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <hr class="productseparator">
                                </div>{* product 4 *}
                                <div class="productcard cart-item-4">
                                    <div class="product-line-grid">
                                        <!--  product left content: image-->
                                        <div class="col-md-3 col-xs-4">
                                            <img class="productimage" src="../modules/pscartdropdown/views/img/4-small_default.jpg" alt="">
                                        </div>
                                        <!--  product left body: description -->
                                        <div class="col-md-5 col-xs-4">
                                            <div class="product-name">
                                                <label id="productnamepreview" class="labelbutton">{l s='Brown bear cushion' mod='pscartdropdown'}</label>
                                            </div>
                                            <div class="product-price">
                                                <div> <span id="price4">22,68 €</span>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="attributes"> <span>{l s='White' mod='pscartdropdown'}</span>
                                            </div>
                                        </div>
                                        <!--  product left body: description -->
                                        <div class="pscartdropdown-product-line-grid-right col-md-4 col-xs-4">
                                            <label class="labelqty">1</label>
                                            <div class="divclosecross col-md-2 col-xs-2">
                                                <div class="cartdrop-line-product-actions">
                                                    <a class="remove-from-cart" rel="nofollow" href="#" data-link-action="delete-from-cart" data-id-product="" data-id-product-attribute="" data-id-customization=""> <i class="material-icons float-xs-left" style="margin-top: 25px; margin-left: 100px;">close</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <hr class="productseparator">
                                </div>
                            </div>{* footer *}
                            <div id="total_block_preview" style="bottom: 0; width: 100%; background-color: #fff; bottom: 0; z-index:10">
                                <div style="text-align: center; margin-bottom: 10px;" class="cartdrop-summary-line cartdrop-total"> <span style="color: #7a7a7a; font-size: 0.875rem;" class="label">{l s='Total:' mod='pscartdropdown'}
                                    <span style="font-weight: bold;color: #232323; font-size: 0.875rem;" class="label">94,70 €</span>
                                    </span>
                                </div>
                                <div class="viewmycart text-sm-center">
                                    <a id="btn_viewcart" href="#" {if $cartdropdown_params.CHECKBOX_CHECKOUT_NOW eq 1} class="btnviewcart btn btn-outline-primary btn-block {if $cartdropdown_params.CHECKBOX_VIEW_CART eq 0}hidden{/if}" style="border-color:{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'};color:{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'};"
                                        {else} class="btnviewcart btn btn-primary btn-block" style="border-color:{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'};color:#fff;background-color:{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'}"
                                        {/if}>
                                        <span class="cartdrop-view-cart"><i class="material-icons shopping-cart">shopping_cart</i>{l s='View my cart' mod='pscartdropdown'}</span>
                                        <span class="cartdrop-products-count">(4)</span>
                                    </a>
                                </div>
                                <div class="checkoutnow text-sm-center">
                                    <a id="btn_checkoutnow" href="#" class="btncheckout btn btn-primary btn-block {if $cartdropdown_params.CHECKBOX_CHECKOUT_NOW eq 0}hidden{/if}" style="border-color:{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'}; background-color:{$cartdropdown_params.PRIMARY_COLOR_CARTDROPDOWN|escape:'html':'UTF-8'}"> <span class="checkoutnow-span">
                                <i class="material-icons checkorder">&#xE876;</i>{l s='Proceed to checkout' d='Shop.Theme.Actions'}
                            </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-top: 45px;"></div>
        <div class="panel-footer" style="text-align: center;">
            <button type="submit" value="1" id="module_form_submit_btn" name="submitCartDropdownConf" class="btn btn-lg btn-primary">{l s='Save Changes' mod='pscartdropdown'}</button>
        </div>
    </form>
</div>
