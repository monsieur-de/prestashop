<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:28
  from 'C:\Users\nihmo\prestashop\modules\posthemeoptions\views\templates\front\links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1cc54f73_22007205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0e8172e17ce76a8fbe94f0d97e2984380869d70' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\posthemeoptions\\views\\templates\\front\\links.tpl',
      1 => 1727966039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1cc54f73_22007205 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pos-links-widget">
	<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>	
	<h2 class="links-widget-title hidden-sm-down">
		<?php if ($_smarty_tpl->tpl_vars['title_url']->value['url']) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_url']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
			<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
		<?php if ($_smarty_tpl->tpl_vars['title_url']->value) {?></a><?php }?>
	</h2>
	
    <h2 class="links-widget-title hidden-md-up" data-target="#footer_linkslist_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse" aria-expanded="false">
        <?php if ($_smarty_tpl->tpl_vars['title_url']->value['url']) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_url']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
			<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
		<?php if ($_smarty_tpl->tpl_vars['title_url']->value) {?></a><?php }?>
		<span class="navbar-toggler collapse-icons">
			<i class="material-icons add">&#xE313;</i>
			<i class="material-icons remove">&#xE316;</i>
		</span>
    </h2>
	<?php }?>
	<ul id="footer_linkslist_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if (!$_smarty_tpl->tpl_vars['title']->value) {?>not-title-links<?php }?> links-widget-content collapse">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
		<li>
			<?php if ($_smarty_tpl->tpl_vars['link']->value['title']) {?>
				<?php if ($_smarty_tpl->tpl_vars['link']->value['type_link'] == 'custom') {?>
					<?php if ($_smarty_tpl->tpl_vars['link']->value['title'] && $_smarty_tpl->tpl_vars['link']->value['custom_link']['url']) {?>
						<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['custom_link']['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
					<?php }?>
				<?php } elseif ($_smarty_tpl->tpl_vars['link']->value['type_link'] == 'static') {?>
					<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['static_link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
				<?php } else { ?>
					<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['page_link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
				<?php }?>
			<?php } else { ?>
				<span>Title missed</span>
			<?php }?>
		</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div><?php }
}
