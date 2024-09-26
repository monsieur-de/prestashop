<?php
/* Smarty version 4.3.4, created on 2024-09-26 10:56:43
  from '/opt/lampp/htdocs/prestashop/themes/classic/templates/layouts/layout-error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f521cbc87531_26993877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd44aeac028d9ed3d9e046eace63fefa4529013e4' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/themes/classic/templates/layouts/layout-error.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
  ),
),false)) {
function content_66f521cbc87531_26993877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91819360766f521cbc85648_48195779', 'head_seo');
?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85687105866f521cbc860c2_80616681', 'head_icons');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76874834266f521cbc86b08_29303566', 'stylesheets');
?>


  </head>

  <body>

    <div id="layout-error">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146665649666f521cbc872e5_35595552', 'content');
?>

    </div>

  </body>

</html>
<?php }
/* {block 'head_seo_title'} */
class Block_189303623766f521cbc85836_19152802 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_54893275666f521cbc85af1_72455653 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_104295421966f521cbc85d38_66434439 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_seo'} */
class Block_91819360766f521cbc85648_48195779 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_91819360766f521cbc85648_48195779',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_189303623766f521cbc85836_19152802',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_54893275666f521cbc85af1_72455653',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_104295421966f521cbc85d38_66434439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189303623766f521cbc85836_19152802', 'head_seo_title', $this->tplIndex);
?>
</title>
      <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54893275666f521cbc85af1_72455653', 'head_seo_description', $this->tplIndex);
?>
">
      <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104295421966f521cbc85d38_66434439', 'head_seo_keywords', $this->tplIndex);
?>
">
    <?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_icons'} */
class Block_85687105866f521cbc860c2_80616681 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_85687105866f521cbc860c2_80616681',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
     <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
   <?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_76874834266f521cbc86b08_29303566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_76874834266f521cbc86b08_29303566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
?>
    <?php
}
}
/* {/block 'stylesheets'} */
/* {block 'content'} */
class Block_146665649666f521cbc872e5_35595552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_146665649666f521cbc872e5_35595552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <p>Hello world! This is HTML5 Boilerplate.</p>
      <?php
}
}
/* {/block 'content'} */
}
