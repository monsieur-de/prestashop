<?php
/* Smarty version 4.3.4, created on 2024-09-26 15:25:27
  from '/home/justine/Documents/md/prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f560c7e96182_23036471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80c911da8f3800e93d6127e53c32e45fb632f7f6' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/themes/classic/templates/page.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f560c7e96182_23036471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187396732966f560c7e93cf5_36654578', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_110371347666f560c7e940f0_12998110 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_130805903166f560c7e93ed0_86315974 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110371347666f560c7e940f0_12998110', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_209618628966f560c7e955e1_31984505 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_42420076066f560c7e95847_71616697 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_52465962766f560c7e95429_61809678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209618628966f560c7e955e1_31984505', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42420076066f560c7e95847_71616697', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_59996670066f560c7e95d29_21274138 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1675325866f560c7e95bb7_60864953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59996670066f560c7e95d29_21274138', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_187396732966f560c7e93cf5_36654578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_187396732966f560c7e93cf5_36654578',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_130805903166f560c7e93ed0_86315974',
  ),
  'page_title' => 
  array (
    0 => 'Block_110371347666f560c7e940f0_12998110',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_52465962766f560c7e95429_61809678',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_209618628966f560c7e955e1_31984505',
  ),
  'page_content' => 
  array (
    0 => 'Block_42420076066f560c7e95847_71616697',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1675325866f560c7e95bb7_60864953',
  ),
  'page_footer' => 
  array (
    0 => 'Block_59996670066f560c7e95d29_21274138',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130805903166f560c7e93ed0_86315974', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52465962766f560c7e95429_61809678', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1675325866f560c7e95bb7_60864953', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
