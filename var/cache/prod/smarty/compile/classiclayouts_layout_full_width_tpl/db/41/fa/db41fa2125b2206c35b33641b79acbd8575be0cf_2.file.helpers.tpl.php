<?php
/* Smarty version 4.3.4, created on 2024-09-27 09:49:04
  from '/home/justine/Documents/md/prestashop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f663704278f3_23129718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db41fa2125b2206c35b33641b79acbd8575be0cf' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f663704278f3_23129718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/justine/Documents/md/prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/db/41/fa/db41fa2125b2206c35b33641b79acbd8575be0cf_2.file.helpers.tpl.php',
    'uid' => 'db41fa2125b2206c35b33641b79acbd8575be0cf',
    'call_name' => 'smarty_template_function_renderLogo_213230554766f66370426491_50193616',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_213230554766f66370426491_50193616 */
if (!function_exists('smarty_template_function_renderLogo_213230554766f66370426491_50193616')) {
function smarty_template_function_renderLogo_213230554766f66370426491_50193616(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_213230554766f66370426491_50193616 */
}
