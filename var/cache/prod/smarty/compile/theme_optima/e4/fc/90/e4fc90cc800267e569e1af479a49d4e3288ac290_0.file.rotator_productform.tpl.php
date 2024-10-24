<?php
/* Smarty version 4.3.4, created on 2024-10-10 10:24:49
  from 'C:\Users\nihmo\prestashop\modules\posrotatorimg\views\templates\admin\rotator_productform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67078f512890f5_74551083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4fc90cc800267e569e1af479a49d4e3288ac290' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\posrotatorimg\\views\\templates\\admin\\rotator_productform.tpl',
      1 => 1727966039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67078f512890f5_74551083 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/css/admin_product.css" rel="stylesheet" type="text/css"/>
<div class="alert alert-info" role="alert">
    <p class="alert-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click on one image below to set it as the rotator image. The cover image is not showing on the list.','mod'=>'posrotatorimg'),$_smarty_tpl ) );?>
</p>
</div>
<div id="product-images-container-sthoverimage" class="m-b-2">
    <div id="product-images-dropzone-sthoverimage" class="panel dropzone ui-sortable col-md-12 dz-started" data-max-size="8">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
        <div class="dz-preview dz-image-preview">
            <div class="dz-image bg" data-id="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['image']->value['base_image_url'];?>
-home_default.<?php echo $_smarty_tpl->tpl_vars['image']->value['format'];?>
');"></div>
            <div class="isRotator<?php if (!$_smarty_tpl->tpl_vars['image']->value['rotator']) {?> hide<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rotator','mod'=>'posrotatorimg'),$_smarty_tpl ) );?>
</div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
jQuery(function($){
    var module_url = '<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
';
    
    $('#product-images-dropzone-sthoverimage .dz-image').click(function(){
        var _this = $(this);
        $.getJSON(module_url+'&ajax=1&action=update_hover&id_image='+_this.data('id'), function(json){
            if (json.r) {
                $('#product-images-dropzone-sthoverimage').find('.isRotator').hide();
                
                if (_this.parent().find('.isRotator').hasClass('hide')) {
                    _this.parent().find('.isRotator').removeClass('hide').show(); 
                } else {
                    _this.parent().find('.isRotator').addClass('hide').hide();    
                }
                
            }
        });
    });
    
});
<?php echo '</script'; ?>
><?php }
}
