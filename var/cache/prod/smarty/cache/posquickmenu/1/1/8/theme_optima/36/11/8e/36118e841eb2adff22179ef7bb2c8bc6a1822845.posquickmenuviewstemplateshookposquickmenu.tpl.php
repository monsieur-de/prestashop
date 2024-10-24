<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:27
  from 'module:posquickmenuviewstemplateshookposquickmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1b264e15_47206103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15df06e3f3c3f7bb81fbe41ffa62f0889fa72c4f' => 
    array (
      0 => 'module:posquickmenuviewstemplateshookposquickmenu.tpl',
      1 => 1727966039,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6704df1b264e15_47206103 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="quickmenu-mobile">
    <div class="quickmenu-mobile-wrapper">
                                    <div class="quickmenu-item quickmenu-link" >
                    <div class="block-icon">
                                                                                    <img class="svg pack1 invisible" src="/prestashop/modules/posquickmenu/views/img/reassurance/pack1/House.svg">
                                                                        </div>
                    <div class="block-title">Home</div>                </div>
                        
                                    <div class="quickmenu-item quickmenu-cart"  onclick="window.open('http://localhost/prestashop/panier?action=show','_self')">
                    <div class="block-icon">
                                                                                    <img class="svg pack1 invisible" src="/prestashop/modules/posquickmenu/views/img/reassurance/pack1/FullShoppingCart.svg">
                                                                            <span class="qm-count" id="qmcart-count"></span>
                    </div>
                    <div class="block-title">Cart</div>
                </div>
                        
                                    <div class="quickmenu-item quickmenu-custom">
                    <div class="block-icon">
                                                                                    <img class="svg pack1 invisible" src="/prestashop/modules/posquickmenu/views/img/reassurance/pack1/Tools.svg">
                                                                        </div>
                                        <div class="block-title">Custom content</div>
                                        <div class="quickmenu-item_content">
                                                    &lt;p&gt;This is custom content&lt;/p&gt;
                                            </div>
                </div>
                        
            </div>
</div>
<?php }
}
