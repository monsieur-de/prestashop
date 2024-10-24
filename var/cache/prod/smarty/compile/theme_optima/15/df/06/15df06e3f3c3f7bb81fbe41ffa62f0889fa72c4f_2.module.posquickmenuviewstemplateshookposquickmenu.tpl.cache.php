<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:27
  from 'module:posquickmenuviewstemplateshookposquickmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1b24a455_67864466',
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
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1b24a455_67864466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16474176196704df1b224191_36220153';
?>
<div class="quickmenu-mobile">
    <div class="quickmenu-mobile-wrapper">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block', false, 'key', 'blocks', array (
));
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['block']->value['type_content'] == 2) {?>
                <div class="quickmenu-item quickmenu-wishlist" <?php if ($_smarty_tpl->tpl_vars['wishlist_url']->value) {?> onclick="window.open('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist_url']->value, ENT_QUOTES, 'UTF-8');?>
','_self')"<?php }?>>
                    <div class="block-icon">
                        <?php if ($_smarty_tpl->tpl_vars['block']->value['icon'] != 'undefined') {?>
                            <?php if ($_smarty_tpl->tpl_vars['block']->value['icon']) {?>
                                <img class="svg <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['pack'], ENT_QUOTES, 'UTF-8');?>
 invisible" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['icon'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['custom_icon']) {?>
                                <img <?php if ($_smarty_tpl->tpl_vars['block']->value['is_svg']) {?>class="svg <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['pack'], ENT_QUOTES, 'UTF-8');?>
 invisible" <?php }?>src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['custom_icon'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php }?>
                        <?php }?>
                        <span class="qm-count" id="qmwishlist-count"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['block']->value['title'] && $_smarty_tpl->tpl_vars['show_text']->value) {?><div class="block-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>

                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type_content'] == 3) {?>
                <div class="quickmenu-item quickmenu-compare" <?php if ($_smarty_tpl->tpl_vars['wishlist_url']->value) {?> onclick="window.open('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['compare_url']->value, ENT_QUOTES, 'UTF-8');?>
','_self')"<?php }?>>
                    <div class="block-icon">
                        <?php if ($_smarty_tpl->tpl_vars['block']->value['icon'] != 'undefined') {?>
                            <?php if ($_smarty_tpl->tpl_vars['block']->value['icon']) {?>
                                <img class="svg <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['pack'], ENT_QUOTES, 'UTF-8');?>
 invisible" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['icon'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['custom_icon']) {?>
                                <img <?php if ($_smarty_tpl->tpl_vars['block']->value['is_svg']) {?>class="svg <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['pack'], ENT_QUOTES, 'UTF-8');?>
 invisible" <?php }?>src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['custom_icon'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php }?>
                        <?php }?>
                        <span class="qm-count" id="qmcompare-count"></span>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['block']->value['title'] && $_smarty_tpl->tpl_vars['show_text']->value) {?><div class="block-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>

                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type_content'] == 4) {?>
                <div class="quickmenu-item quickmenu-cart" <?php if ($_smarty_tpl->tpl_vars['wishlist_url']->value) {?> onclick="window.open('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
','_self')"<?php }?>>
                    <div class="block-icon">
                        <?php if ($_smarty_tpl->tpl_vars['block']->value['icon'] != 'undefined') {?>
                            <?php if ($_smarty_tpl->tpl_vars['block']->value['icon']) {?>
                                <img class="svg <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['pack'], ENT_QUOTES, 'UTF-8');?>
 invisible" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['icon'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['custom_icon']) {?>
                                <img <?php if ($_smarty_tpl->tpl_vars['block']->value['is_svg']) {?>class="svg <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['pack'], ENT_QUOTES, 'UTF-8');?>
 invisible" <?php }?>src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['custom_icon'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php }?>
                        <?php }?>
                        <span class="qm-count" id="qmcart-count"></span>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['block']->value['title'] && $_smarty_tpl->tpl_vars['show_text']->value) {?><div class="block-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>

                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type_content'] == 1 || $_smarty_tpl->tpl_vars['block']->value['type_content'] == 5) {?>
                <div class="quickmenu-item quickmenu-link" <?php if (!empty($_smarty_tpl->tpl_vars['block']->value['link'])) {?>  onclick="window.open('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['link'], ENT_QUOTES, 'UTF-8');?>
','_self')"<?php }?>>
                    <div class="block-icon">
                        <?php if ($_smarty_tpl->tpl_vars['block']->value['icon'] != 'undefined') {?>
                            <?php if ($_smarty_tpl->tpl_vars['block']->value['icon']) {?>
                                <img class="svg <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['pack'], ENT_QUOTES, 'UTF-8');?>
 invisible" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['icon'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['custom_icon']) {?>
                                <img <?php if ($_smarty_tpl->tpl_vars['block']->value['is_svg']) {?>class="svg <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['pack'], ENT_QUOTES, 'UTF-8');?>
 invisible" <?php }?>src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['custom_icon'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php }?>
                        <?php }?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['block']->value['title'] && $_smarty_tpl->tpl_vars['show_text']->value) {?><div class="block-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
                </div>
            <?php } else { ?>
                <div class="quickmenu-item quickmenu-custom">
                    <div class="block-icon">
                        <?php if ($_smarty_tpl->tpl_vars['block']->value['icon'] != 'undefined') {?>
                            <?php if ($_smarty_tpl->tpl_vars['block']->value['icon']) {?>
                                <img class="svg <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['pack'], ENT_QUOTES, 'UTF-8');?>
 invisible" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['icon'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['custom_icon']) {?>
                                <img <?php if ($_smarty_tpl->tpl_vars['block']->value['is_svg']) {?>class="svg <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['pack'], ENT_QUOTES, 'UTF-8');?>
 invisible" <?php }?>src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['custom_icon'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php }?>
                        <?php }?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['block']->value['title'] && $_smarty_tpl->tpl_vars['show_text']->value) {?>
                    <div class="block-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div>
                    <?php }?>
                    <div class="quickmenu-item_content">
                        <?php if (!empty($_smarty_tpl->tpl_vars['block']->value['html_content'])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['block']->value['html_content'];?>

                        <?php }?>
                    </div>
                </div>
            <?php }?>
            
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
}
