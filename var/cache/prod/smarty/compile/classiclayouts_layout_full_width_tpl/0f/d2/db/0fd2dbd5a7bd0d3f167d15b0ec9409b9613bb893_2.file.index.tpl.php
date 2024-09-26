<?php
/* Smarty version 4.3.4, created on 2024-09-26 15:25:27
  from '/home/justine/Documents/md/prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f560c7e90618_64621108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fd2dbd5a7bd0d3f167d15b0ec9409b9613bb893' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/themes/classic/templates/index.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f560c7e90618_64621108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161045946366f560c7e8cb35_60472957', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_187917366066f560c7e8ce80_75750666 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_112883798966f560c7e8d528_82325795 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_55674614866f560c7e8d399_47437213 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112883798966f560c7e8d528_82325795', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_161045946366f560c7e8cb35_60472957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_161045946366f560c7e8cb35_60472957',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_187917366066f560c7e8ce80_75750666',
  ),
  'page_content' => 
  array (
    0 => 'Block_55674614866f560c7e8d399_47437213',
  ),
  'hook_home' => 
  array (
    0 => 'Block_112883798966f560c7e8d528_82325795',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187917366066f560c7e8ce80_75750666', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55674614866f560c7e8d399_47437213', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
