<?php
/* Smarty version 4.3.4, created on 2024-09-26 10:56:43
  from '/opt/lampp/htdocs/prestashop/themes/classic/templates/errors/maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f521cbc834a2_83350730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25162eddf3851fa46cae3d216ca43dcb5d0d08ce' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/themes/classic/templates/errors/maintenance.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f521cbc834a2_83350730 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84200868766f521cbc81092_14371184', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-error.tpl');
}
/* {block 'page_header_logo'} */
class Block_69023773866f521cbc81443_06197196 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="logo"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo" loading="lazy"></div>
        <?php
}
}
/* {/block 'page_header_logo'} */
/* {block 'hook_maintenance'} */
class Block_140744422266f521cbc81b87_74906199 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

        <?php
}
}
/* {/block 'hook_maintenance'} */
/* {block 'page_title'} */
class Block_44718452466f521cbc82207_25898713 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'ll be back soon.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_163332834866f521cbc82084_07972972 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44718452466f521cbc82207_25898713', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_75240475166f521cbc812b0_86815102 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69023773866f521cbc81443_06197196', 'page_header_logo', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140744422266f521cbc81b87_74906199', 'hook_maintenance', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163332834866f521cbc82084_07972972', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_1062865966f521cbc82c04_07494268 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['maintenance_text']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_94517088066f521cbc82a91_58601788 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content page-maintenance">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1062865966f521cbc82c04_07494268', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_153320482866f521cbc830e7_51733975 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_84200868766f521cbc81092_14371184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_84200868766f521cbc81092_14371184',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_75240475166f521cbc812b0_86815102',
  ),
  'page_header_logo' => 
  array (
    0 => 'Block_69023773866f521cbc81443_06197196',
  ),
  'hook_maintenance' => 
  array (
    0 => 'Block_140744422266f521cbc81b87_74906199',
  ),
  'page_header' => 
  array (
    0 => 'Block_163332834866f521cbc82084_07972972',
  ),
  'page_title' => 
  array (
    0 => 'Block_44718452466f521cbc82207_25898713',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_94517088066f521cbc82a91_58601788',
  ),
  'page_content' => 
  array (
    0 => 'Block_1062865966f521cbc82c04_07494268',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_153320482866f521cbc830e7_51733975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75240475166f521cbc812b0_86815102', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94517088066f521cbc82a91_58601788', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153320482866f521cbc830e7_51733975', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
