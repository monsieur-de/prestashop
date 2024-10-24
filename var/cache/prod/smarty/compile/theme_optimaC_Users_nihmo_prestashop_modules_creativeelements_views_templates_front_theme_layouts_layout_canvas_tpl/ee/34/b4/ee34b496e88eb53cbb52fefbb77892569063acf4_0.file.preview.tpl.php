<?php
/* Smarty version 4.3.4, created on 2024-10-08 18:32:06
  from 'C:\Users\nihmo\prestashop\modules\creativeelements\views\templates\front\preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67055e86202027_85451489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee34b496e88eb53cbb52fefbb77892569063acf4' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\creativeelements\\views\\templates\\front\\preview.tpl',
      1 => 1727966038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67055e86202027_85451489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209706961567055e861dbaa5_81353905', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_container'} */
class Block_209706961567055e861dbaa5_81353905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_209706961567055e861dbaa5_81353905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['ce_content']->value))) {?>
		<?php echo cefilter($_smarty_tpl->tpl_vars['ce_content']->value['content']);?>

	<?php } else { ?>
		<?php echo cefilter($_smarty_tpl->tpl_vars['ce_template']->value['content']);?>

	<?php }
}
}
/* {/block 'page_content_container'} */
}
