<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:28
  from 'module:posproductcommentsviewstemplateshookposproductcomments_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1c8d4216_01919160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b2308002302f86421477e858f918b43b6fcdf9a' => 
    array (
      0 => 'module:posproductcommentsviewstemplateshookposproductcomments_reviews.tpl',
      1 => 1727966038,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1c8d4216_01919160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19907981476704df1c8c5c86_01777212';
?>

<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
	<div class="star_content clearfix">
		<span class="rating_star" style="width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['avg_percent']->value, ENT_QUOTES, 'UTF-8');?>
%;"></span>
		<?php if ((isset($_smarty_tpl->tpl_vars['nbComments']->value)) && $_smarty_tpl->tpl_vars['nbComments']->value > 0) {?>
        <meta itemprop="worstRating" content = "0" />
        <meta itemprop="ratingValue" content = "<?php if ((isset($_smarty_tpl->tpl_vars['ratings']->value['avg']))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( round((float) $_smarty_tpl->tpl_vars['ratings']->value['avg'], (int) 1, (int) 1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( round((float) $_smarty_tpl->tpl_vars['averageTotal']->value, (int) 1, (int) 1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" />
        <meta itemprop="bestRating" content = "5" />
        <?php }?>
	</div>
	<?php if ((isset($_smarty_tpl->tpl_vars['nbComments']->value)) && $_smarty_tpl->tpl_vars['nbComments']->value > 0) {?>
	<span class="nb-comments"><span itemprop="reviewCount"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nbComments']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review(s)','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</span>
	<?php }?>
</div>


<?php }
}
