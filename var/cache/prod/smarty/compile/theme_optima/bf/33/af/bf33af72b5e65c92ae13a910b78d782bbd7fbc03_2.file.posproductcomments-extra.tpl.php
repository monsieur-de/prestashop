<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:40
  from 'C:\Users\nihmo\prestashop\modules\posproductcomments\views\templates\hook\posproductcomments-extra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df28085938_41637046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf33af72b5e65c92ae13a910b78d782bbd7fbc03' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\posproductcomments\\views\\templates\\hook\\posproductcomments-extra.tpl',
      1 => 1727966038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df28085938_41637046 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php if (((($_smarty_tpl->tpl_vars['nbComments_extra']->value == 0 && $_smarty_tpl->tpl_vars['too_early']->value == false && ($_smarty_tpl->tpl_vars['logged']->value || $_smarty_tpl->tpl_vars['allow_guests']->value)) || ($_smarty_tpl->tpl_vars['nbComments_extra']->value != 0)))) {?>
<div id="product_comments_block_extra" class="no-print" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
	<?php if ($_smarty_tpl->tpl_vars['nbComments_extra']->value != 0) {?>
		<div class="comments_note clearfix">
			<div class="star_content clearfix">
				<span class="rating_star" style="width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['avg_percent']->value, ENT_QUOTES, 'UTF-8');?>
%;"></span>
				<meta itemprop="worstRating" content = "0" />
				<meta itemprop="ratingValue" content = "<?php if ((isset($_smarty_tpl->tpl_vars['ratings']->value['avg']))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( round((float) $_smarty_tpl->tpl_vars['ratings']->value['avg'], (int) 1, (int) 1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( round((float) $_smarty_tpl->tpl_vars['averageTotal_extra']->value, (int) 1, (int) 1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" />
				<meta itemprop="bestRating" content = "5" />
			</div>
		</div> <!-- .comments_note -->
	<?php }?>

	<ul class="comments_advices">
		<?php if ($_smarty_tpl->tpl_vars['nbComments_extra']->value != 0) {?>
			<li>
				<a href="#product_comments_block_tab" class="reviews" >
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read reviews','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
 (<span itemprop="reviewCount"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nbComments_extra']->value, ENT_QUOTES, 'UTF-8');?>
</span>)
				</a>
			</li>
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['too_early']->value == false && ($_smarty_tpl->tpl_vars['logged']->value || $_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
			<li>
				<a class="open-comment-form">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write a review','mod'=>'posproductcomments'),$_smarty_tpl ) );?>

				</a>
			</li>
		<?php }?>
	</ul>
</div>
<?php }?>
<!--  /Module ProductComments -->
<?php }
}
