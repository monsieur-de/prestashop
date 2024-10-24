<?php
/* Smarty version 4.3.4, created on 2024-10-08 18:32:06
  from 'C:\Users\nihmo\prestashop\modules\creativeelements\views\templates\front\builder_wrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67055e86187a18_43113810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67edb86cb1d5df800fecadc6c0ba212704e5d309' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\creativeelements\\views\\templates\\front\\builder_wrapper.tpl',
      1 => 1727966038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67055e86187a18_43113810 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
.elementor-section.elementor-section-boxed > .elementor-container {
	max-width: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( Configuration::get('elementor_container_width') )), ENT_QUOTES, 'UTF-8');?>
px; }
</style>
<div id="elementor" class="elementor elementor-edit-mode"></div>
<?php }
}
