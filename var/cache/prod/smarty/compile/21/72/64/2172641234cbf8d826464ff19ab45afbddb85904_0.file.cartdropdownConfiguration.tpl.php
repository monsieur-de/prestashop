<?php
/* Smarty version 4.3.4, created on 2024-09-27 09:45:52
  from '/home/justine/Documents/md/prestashop/modules/pscartdropdown/views/templates/admin/tabs/cartdropdownConfiguration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f662b0c68ef2_67723047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2172641234cbf8d826464ff19ab45afbddb85904' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/modules/pscartdropdown/views/templates/admin/tabs/cartdropdownConfiguration.tpl',
      1 => 1704791610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f662b0c68ef2_67723047 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel col-lg-10 right-panel"><?php if ($_smarty_tpl->tpl_vars['submit']->value == 'true') {?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"><i class="material-icons">close</i></span></button>
        <p class="alert-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings saved','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</p>
    </div><?php } elseif ($_smarty_tpl->tpl_vars['submit']->value == 'error') {?>
    <div class="alert alert-danger" role="alert">
        <p class="alert-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error, please try again','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</p>
    </div><?php }?>
    <form method="post" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleAdminLink']->value,'htmlall','UTF-8' ));?>
&page=cartdropdownConfiguration" class="form-horizontal">
        <h3>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CartDropdown Configuration','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>

        </h3>
        <div style="display: flex; justify-content: center; flex-wrap: wrap;">
            <div style="width: 600px">
                <div class="form-group">
                    <div class="control-label col-lg-5 col-md-2 col-xs-5">
                        <label class="labelbutton"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate the Cart Dropdown','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                    </div>
                    <div>
                        <div class="input-group fixed-width-lg"> <span class="switch prestashop-switch fixed-width-lg">
                                        <input class="yes" type="radio" name="CHECKBOX_ACTIVATE" id="checkbox_activate_on"
                                            value="1" <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_ACTIVATE'] == 1) {?>checked="checked" <?php }?>>
                                            <label for="checkbox_activate_on" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'YES','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                                        <input class="no" type="radio" name="CHECKBOX_ACTIVATE" id="checkbox_activate_off"
                                            value="0" <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_ACTIVATE'] == 0) {?>checked="checked" <?php }?>>
                                            <label for="checkbox_activate_off" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'NO','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                                        <a class="slide-button btn"></a>
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-lg-5 col-md-2 col-xs-5">
                        <label class="labelbutton" for="pscartdropdown_input_backgroundcolor"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose the primary color','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                    </div>
                    <div>
                        <div class="input-group fixed-width-lg">
                            <input id="PRIMARY_COLOR_CARTDROPDOWN" type="text" data-hex="true" class="mColorPickerCartDropDownInput" value="<?php if ((isset($_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'quotes' ));
}?>" name="PRIMARY_COLOR_CARTDROPDOWN"
                            />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-lg-5 col-md-2 col-xs-5">
                        <label class="labelbutton"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Keep default theme color for the price','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                    </div>
                    <div>
                        <div class="input-group fixed-width-lg"> <span class="switch prestashop-switch fixed-width-lg">
                                        <input class="yes" type="radio" name="CHECKBOX_BLACKPRICE" id="checkbox_blackprice_on"
                                            value="1" <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_BLACKPRICE'] == 1) {?>checked="checked" <?php }?>>
                                            <label for="checkbox_blackprice_on" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'YES','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                                        <input class="no" type="radio" name="CHECKBOX_BLACKPRICE" id="checkbox_blackprice_off"
                                            value="0" <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_BLACKPRICE'] == 0) {?>checked="checked" <?php }?>>
                                            <label for="checkbox_blackprice_off" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'NO','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                                        <a class="slide-button btn"></a>
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-lg-5 col-md-2 col-xs-5">
                        <label class="labelbutton"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate on Mobile','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                    </div>
                    <div>
                        <div class="input-group fixed-width-lg"> <span class="switch prestashop-switch fixed-width-lg">
                                        <input class="yes" type="radio" name="CHECKBOX_MOBILE" id="checkbox_mobile_on"
                                            value="1" <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_MOBILE'] == 1) {?>checked="checked" <?php }?>>
                                            <label for="checkbox_mobile_on" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'YES','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                                        <input class="no" type="radio" name="CHECKBOX_MOBILE" id="checkbox_mobile_off"
                                            value="0" <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_MOBILE'] == 0) {?>checked="checked" <?php }?>>
                                            <label for="checkbox_mobile_off" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'NO','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                                        <a class="slide-button btn"></a>
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-lg-5 col-md-2 col-xs-5">
                        <label class="labelbutton"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my cart button','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                    </div>
                    <div>
                        <div class="input-group fixed-width-lg"> <span class="switch prestashop-switch fixed-width-lg">
                                        <input class="on" type="radio" name="CHECKBOX_VIEW_CART" id="checkbox_view_cart_on"
                                            value="1" <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_VIEW_CART'] == 1) {?>checked="checked" <?php }?>>
                                            <label for="checkbox_view_cart_on" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ON','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                                        <input class="off" type="radio" name="CHECKBOX_VIEW_CART" id="checkbox_view_cart_off"
                                            value="0" <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_VIEW_CART'] == 0) {?>checked="checked" <?php }?>>
                                            <label for="checkbox_view_cart_off" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OFF','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                                        <a class="slide-button btn"></a>
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-label col-lg-5 col-md-2 col-xs-5">
                        <label class="labelbutton"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check out now','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                    </div>
                    <div>
                        <div class="input-group fixed-width-lg"> <span class="switch prestashop-switch fixed-width-lg">
                                        <input class="on" type="radio" name="CHECKBOX_CHECKOUT_NOW" id="checkbox_checkout_now_on"
                                            value="1" <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_CHECKOUT_NOW'] == 1) {?>checked="checked"
                                            <?php }?>> <label for="checkbox_checkout_now_on" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ON','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                                        <input class="off" type="radio" name="CHECKBOX_CHECKOUT_NOW" id="checkbox_checkout_now_off"
                                            value="0" <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_CHECKOUT_NOW'] == 0) {?>checked="checked"
                                            <?php }?>> <label for="checkbox_checkout_now_off" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OFF','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                                        <a class="slide-button btn"></a>
                                    </span>
                        </div>
                    </div>
                </div>
            </div>            <div class="test" style="width: 500px; height: 600px;">
                <div>
                    <div id="blockcartpreview" style="width: 149px; height: 42px; font-size: 16px; padding: .75rem; <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_ACTIVATE'] == 0) {?>opacity: 0.15<?php }?>">
                        <div class="header" style="text-align:center; ">
                            <span class="hidden-sm-down"><i class="material-icons shopping-cart">shopping_cart</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                            <span class="cart-products-count">(4)</span>
                        </div>
                        <div id="livepreview" class="pscartdropdown live-preview" style="display:block;">
                            <div class="cartdrop-overview">                                 <div class="productcard cart-item-1">
                                    <div class="product-line-grid">
                                        <!--  product left content: image-->
                                        <div class="col-md-3 col-xs-4">
                                            <img class="productimage" src="../modules/pscartdropdown/views/img/1-small_default.jpg" alt="">
                                        </div>
                                        <!--  product left body: description -->
                                        <div class="col-md-5 col-xs-4">
                                            <div class="product-name">
                                                <label id="productnamepreview" class="labelbutton"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hummingbird printed t-shirt','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                                            </div>
                                            <div class="product-price">
                                                <div> <span id="price1">22,94 €</span>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="attributes"> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'S','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</span> - <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'White','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</span>
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
                                </div>                                <div class="productcard cart-item-2">
                                    <div class="product-line-grid">
                                        <!--  product left content: image-->
                                        <div class="col-md-3 col-xs-4">
                                            <img class="productimage" src="../modules/pscartdropdown/views/img/2-small_default.jpg" alt="">
                                        </div>
                                        <!--  product left body: description -->
                                        <div class="col-md-5 col-xs-4">
                                            <div class="product-name">
                                                <label id="productnamepreview" class="labelbutton"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Today is a good day Framed poster','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                                            </div>
                                            <div class="product-price">
                                                <div> <span id="price2">34,80 €</span>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="attributes"> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'40x60cm','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</span>
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
                                </div>                                <div class="productcard cart-item-3">
                                    <div class="product-line-grid">
                                        <!--  product left content: image-->
                                        <div class="col-md-3 col-xs-4">
                                            <img class="productimage" src="../modules/pscartdropdown/views/img/3-small_default.jpg" alt="">
                                        </div>
                                        <!--  product left body: description -->
                                        <div class="col-md-5 col-xs-4">
                                            <div class="product-name">
                                                <label id="productnamepreview" class="labelbutton"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mug The adventure begins','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
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
                                </div>                                <div class="productcard cart-item-4">
                                    <div class="product-line-grid">
                                        <!--  product left content: image-->
                                        <div class="col-md-3 col-xs-4">
                                            <img class="productimage" src="../modules/pscartdropdown/views/img/4-small_default.jpg" alt="">
                                        </div>
                                        <!--  product left body: description -->
                                        <div class="col-md-5 col-xs-4">
                                            <div class="product-name">
                                                <label id="productnamepreview" class="labelbutton"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brown bear cushion','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</label>
                                            </div>
                                            <div class="product-price">
                                                <div> <span id="price4">22,68 €</span>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="attributes"> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'White','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</span>
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
                            </div>                            <div id="total_block_preview" style="bottom: 0; width: 100%; background-color: #fff; bottom: 0; z-index:10">
                                <div style="text-align: center; margin-bottom: 10px;" class="cartdrop-summary-line cartdrop-total"> <span style="color: #7a7a7a; font-size: 0.875rem;" class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total:','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>

                                    <span style="font-weight: bold;color: #232323; font-size: 0.875rem;" class="label">94,70 €</span>
                                    </span>
                                </div>
                                <div class="viewmycart text-sm-center">
                                    <a id="btn_viewcart" href="#" <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_CHECKOUT_NOW'] == 1) {?> class="btnviewcart btn btn-outline-primary btn-block <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_VIEW_CART'] == 0) {?>hidden<?php }?>" style="border-color:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' ));?>
;color:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' ));?>
;"
                                        <?php } else { ?> class="btnviewcart btn btn-primary btn-block" style="border-color:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' ));?>
;color:#fff;background-color:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' ));?>
"
                                        <?php }?>>
                                        <span class="cartdrop-view-cart"><i class="material-icons shopping-cart">shopping_cart</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my cart','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</span>
                                        <span class="cartdrop-products-count">(4)</span>
                                    </a>
                                </div>
                                <div class="checkoutnow text-sm-center">
                                    <a id="btn_checkoutnow" href="#" class="btncheckout btn btn-primary btn-block <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_CHECKOUT_NOW'] == 0) {?>hidden<?php }?>" style="border-color:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' ));?>
; background-color:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' ));?>
"> <span class="checkoutnow-span">
                                <i class="material-icons checkorder">&#xE876;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

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
            <button type="submit" value="1" id="module_form_submit_btn" name="submitCartDropdownConf" class="btn btn-lg btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save Changes','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</button>
        </div>
    </form>
</div>
<?php }
}
