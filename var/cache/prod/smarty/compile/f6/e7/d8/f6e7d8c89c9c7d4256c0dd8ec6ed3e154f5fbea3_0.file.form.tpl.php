<?php
/* Smarty version 4.3.4, created on 2024-10-09 22:13:07
  from 'C:\Users\nihmo\prestashop\modules\posthemeoptions\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6706e3d3f3de85_59042368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6e7d8c89c9c7d4256c0dd8ec6ed3e154f5fbea3' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\posthemeoptions\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1727966039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/form/form_group.tpl' => 1,
  ),
),false)) {
function content_6706e3d3f3de85_59042368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\nihmo\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="posthemeoptions">
	<div class="productTabs col-lg-2 col-md-3">
		<ul class="tab nav nav-tabs">
			<?php $_smarty_tpl->_assignInScope('tabk', 0);?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'fvalue', false, 'fkey');
$_smarty_tpl->tpl_vars['fvalue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fkey']->value => $_smarty_tpl->tpl_vars['fvalue']->value) {
$_smarty_tpl->tpl_vars['fvalue']->do_else = false;
?>
				<li class="tab-row">
					<a class="tab-page" id="cart_rule_link_<?php echo $_smarty_tpl->tpl_vars['tabk']->value;?>
" href="javascript:displaythemeeditorTab('<?php echo $_smarty_tpl->tpl_vars['tabk']->value;?>
');">
						<?php if ((isset($_smarty_tpl->tpl_vars['fvalue']->value['form']['legend']['icon']))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['fvalue']->value['form']['legend']['icon'];?>
"></i><?php }?>
						<?php echo $_smarty_tpl->tpl_vars['fvalue']->value['form']['legend']['title'];?>
</a>
				</li>
				<?php $_smarty_tpl->_assignInScope('tabk', $_smarty_tpl->tpl_vars['tabk']->value+1);?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
	<div class="col-lg-10 col-md-9">
		<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['title']))) {?><h3><?php echo $_smarty_tpl->tpl_vars['fields']->value['title'];?>
</h3><?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['tabs']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['tabs']->value)) {?>
			<?php echo '<script'; ?>
 type="text/javascript">
				var helper_tabs = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['tabs']->value ));?>
;
				var unique_field_id = '';
			<?php echo '</script'; ?>
>
		<?php }?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14841190516706e3d3ceb7c6_19826328', "defaultForm");
?>

																	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11879650236706e3d3f328e1_14063775', "after");
?>

																</div>
																<?php echo '<script'; ?>
 type="text/javascript">
																	$(document).ready(function() {
																		$('body').on('click', '.btn-import', function(e) {
																			e.preventDefault();
																			$('.btn-import').addClass('loading');
																			$('.btn-import span').empty();
																			$.ajax({
																				dataType: 'json',
																				url: baseAdminDir,
																				data: {
																					controller: 'AdminPosThemeoptions',
																					ajax: 1,
																					layout: $('.pos-layouts').val(),
																					token: token,
																				},
																				success: function(resp) {
																					if (resp.success) {
																						$('.btn-import').removeClass('loading').addClass('btn-success');
																						$('.btn-import span').text(resp.data.message);
																						setTimeout(() => {
																							window.location.href = window.location.href;
																						}, 1000)
																					} else {
																						$('.btn-import').removeClass('loading').addClass('btn-error');
																						$('.btn-import span').text(resp.data.message);
																					}
																				}
																			})
																		});
																	})
																<?php echo '</script'; ?>
>
																<?php echo '<script'; ?>
 type="text/javascript">
																	function displaythemeeditorTab(tab) {
																		$('.cart_rule_tab').hide();
																		$('.tab-row.active').removeClass('active');
																		$('#cart_rule_' + tab).show();
																		$('#cart_rule_link_' + tab).parent().addClass('active');
																	}
																<?php echo '</script'; ?>
>
																<?php echo '<script'; ?>
 type="text/javascript">
																	//$.fn.mColorPicker.defaults.imageFolder = baseDir + 'img/admin/';
																	displaythemeeditorTab('0');
																<?php echo '</script'; ?>
>
																<?php if ((isset($_smarty_tpl->tpl_vars['tinymce']->value)) && $_smarty_tpl->tpl_vars['tinymce']->value) {?>
																	<?php echo '<script'; ?>
 type="text/javascript">
																		var iso = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso']->value ));?>
';
																		var pathCSS = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( (defined('_THEME_CSS_DIR_') ? constant('_THEME_CSS_DIR_') : null) ));?>
';
																		var ad = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['ad']->value ));?>
';

																		$(document).ready(function() {
																			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13158932166706e3d3f351b4_74633859', "autoload_tinyMCE");
?>

																		});
																	<?php echo '</script'; ?>
>
																<?php }?>
																<?php if ($_smarty_tpl->tpl_vars['firstCall']->value) {?>
																	<?php echo '<script'; ?>
 type="text/javascript">
																		var module_dir = '<?php echo (defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null);?>
';
																		var id_language = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultFormLanguage']->value ));?>
;
																		var languages = new Array();
																		// Multilang field setup must happen before document is ready so that calls to displayFlags() to avoid
																		// precedence conflicts with other document.ready() blocks
																		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
																			languages[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
] = {
																			id_lang: <?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
,
																			iso_code: '<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
',
																			name: '<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
',
																			is_default: '<?php echo $_smarty_tpl->tpl_vars['language']->value['is_default'];?>
'
																			};
																		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																		// we need allowEmployeeFormLang var in ajax request
																		allowEmployeeFormLang = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['allowEmployeeFormLang']->value ));?>
;
																		displayFlags(languages, id_language, allowEmployeeFormLang);

																		$(document).ready(function() {

																			$(".show_checkbox").click(function() {
																				$(this).addClass('hidden')
																				$(this).siblings('.checkbox').removeClass('hidden');
																				$(this).siblings('.hide_checkbox').removeClass('hidden');
																				return false;
																			});
																			$(".hide_checkbox").click(function() {
																				$(this).addClass('hidden')
																				$(this).siblings('.checkbox').addClass('hidden');
																				$(this).siblings('.show_checkbox').removeClass('hidden');
																				return false;
																			});

																			<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value['id_state']))) {?>
																				if ($('#id_country') && $('#id_state')) {
																					ajaxStates(<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['id_state'];?>
);
																					$('#id_country').change(function() {
																						ajaxStates();
																					});
																				}
																			<?php }?>

																			if ($(".datepicker").length > 0)
																				$(".datepicker").datepicker({
																					prevText: '',
																					nextText: '',
																					dateFormat: 'yy-mm-dd'
																				});

																			if ($(".datetimepicker").length > 0)
																				$('.datetimepicker').datetimepicker({
																					prevText: '',
																					nextText: '',
																					dateFormat: 'yy-mm-dd',
																					// Define a custom regional settings in order to use PrestaShop translation tools
																					currentText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Now'),$_smarty_tpl ) );?>
',
																					closeText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Done'),$_smarty_tpl ) );?>
',
																					ampm: false,
																					amNames: ['AM', 'A'],
																					pmNames: ['PM', 'P'],
																					timeFormat: 'hh:mm:ss tt',
																					timeSuffix: '',
																					timeOnlyTitle: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Time','js'=>1),$_smarty_tpl ) );?>
',
																					timeText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Time','js'=>1),$_smarty_tpl ) );?>
',
																					hourText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hour','js'=>1),$_smarty_tpl ) );?>
',
																					minuteText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minute','js'=>1),$_smarty_tpl ) );?>
',
																				});
																			<?php if ((isset($_smarty_tpl->tpl_vars['use_textarea_autosize']->value))) {?>
																				$(".textarea-autosize").autosize();
																			<?php }?>
																		});
																		state_token = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminStates'),$_smarty_tpl ) );?>
';
																		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3483255126706e3d3f3cb05_75276314', "script");
?>

																	<?php echo '</script'; ?>
>
																<?php }?>
															</div>
															<style>
																.pos-layouts {
																	display: inline-block !important;
																	font-size: 14px !important;
																}

																.pos-demos {
																	padding: 10px 15px 10px 13px;
																	-webkit-transition: all 0.5s;
																	transition: all 0.5s;
																	font-weight: 600;
																	text-align: center;
																	display: inline-block;
																	border: 1px solid #bbcdd2;
																	border-radius: 5px;
																	vertical-align: top;
																}

																.btn-import {
																	display: inline-block;
																	width: 390px;
																	padding: 7px 0;
																	margin-top: 15px;
																	border-color: #bbcdd2;
																	font-size: 14px !important;
																}
															</style><?php }
/* {block "legend"} */
class Block_628129696706e3d3d02264_41233748 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<div class="panel-heading">
													<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['image'])) && (isset($_smarty_tpl->tpl_vars['field']->value['title']))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['field']->value['image'];?>
"
														alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['title'],'html','UTF-8' ));?>
" /><?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['icon']))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['field']->value['icon'];?>
"></i><?php }?>
													<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

												</div>
											<?php
}
}
/* {/block "legend"} */
/* {block "label"} */
class Block_4094327576706e3d3d1aa67_21234666 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																		<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['label']))) {?>
																			<label
																				class="control-label col-lg-2<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required'] && $_smarty_tpl->tpl_vars['input']->value['type'] != 'radio') {?> required<?php }?>">
																				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['hint']))) {?>
																					<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['hint'], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>
														<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
															<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hint']->value['text'],'html','UTF-8' ));?>

														<?php } else { ?>
															<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hint']->value,'html','UTF-8' ));?>

														<?php }?>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												<?php } else { ?>
													<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['hint'],'html','UTF-8' ));?>

												<?php }?>">
																					<?php }?>
																					<?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>

																					<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['doc']))) {?>
																						<span class="doc_class">
																							<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['input']->value['doc'];?>
">?</a>
																						</span>
																					<?php }?>
																					<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['hint']))) {?>
																					</span>
																				<?php }?>
																			</label>
																		<?php }?>
																	<?php
}
}
/* {/block "label"} */
/* {block "input"} */
class Block_19623127726706e3d3d24338_19426013 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\nihmo\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>


																				<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'text' || $_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?>
																					<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['lang'])) && $_smarty_tpl->tpl_vars['input']->value['lang']) {?>
																						<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
																							<div class="form-group">
																							<?php }?>
																							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
																								<?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']]);?>
																								<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
																									<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
																										<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none" <?php }?>>
																										<div class="col-lg-9">
																										<?php }?>
																										<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?>
																											
																												<?php echo '<script'; ?>
 type="text/javascript">
																													$().ready(function() {
																													var input_id = '




																														
																														<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>





																															
																														<?php } else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>





																															
																														<?php }?>




																														
																														';
																															$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add tag','js'=>1),$_smarty_tpl ) );?>
'});
																																$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
																																$(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
																																});
																																});
																															<?php echo '</script'; ?>
>
																														
																													<?php }?>
																													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
																														<div class="input-group<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
																														<?php }?>
																														<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar']))) {?>
																															<span
																																id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>_counter"
																																class="input-group-addon">
																																<span class="text-count-down"><?php echo $_smarty_tpl->tpl_vars['input']->value['maxchar'];?>
</span>
																															</span>
																														<?php }?>
																														<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['prefix']))) {?>
																															<span class="input-group-addon">
																																<?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

																															</span>
																														<?php }?>
																														<input type="text"
																															id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>"
																															name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
																															class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?> tagify<?php }?>"
																															value="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['string_format'])) && $_smarty_tpl->tpl_vars['input']->value['string_format']) {
if ((isset($_smarty_tpl->tpl_vars['value_text']->value)) && !empty($_smarty_tpl->tpl_vars['value_text']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8' ));
} else {
if ((isset($_smarty_tpl->tpl_vars['input']->value['default_val'])) && !empty($_smarty_tpl->tpl_vars['input']->value['default_val'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['input']->value['default_val']),'html','UTF-8' ));
}
}
} else {
if ((isset($_smarty_tpl->tpl_vars['value_text']->value)) && !empty($_smarty_tpl->tpl_vars['value_text']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8' ));
} else {
if ((isset($_smarty_tpl->tpl_vars['input']->value['default_val'])) && !empty($_smarty_tpl->tpl_vars['input']->value['default_val'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['default_val'],'html','UTF-8' ));
}
}
}?>"
																															onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
																															<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
" <?php }?>
																															<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar']))) {?> data-maxchar="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxchar'];?>
" <?php }?>
																															<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxlength']))) {?> maxlength="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxlength'];?>
" <?php }?>
																															<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['readonly'])) && $_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"
																																<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?>
																															disabled="disabled" <?php }?>
																															<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])) && !$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?>
																															autocomplete="off" <?php }?>
																															<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required"
																																<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])) && $_smarty_tpl->tpl_vars['input']->value['placeholder']) {?>
																															placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
" <?php }?> />
																														<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
																															<span class="input-group-addon">
																																<?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

																															</span>
																														<?php }?>
																														<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
																														</div>
																													<?php }?>
																													<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
																													</div>
																													<div class="col-lg-2">
																														<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1"
																															data-toggle="dropdown">
																															<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

																															<i class="icon-caret-down"></i>
																														</button>
																														<ul class="dropdown-menu">
																															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
																																<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"
																																		tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
																															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																														</ul>
																													</div>
																												</div>
																											<?php }?>
																										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar']))) {?>
																											<?php echo '<script'; ?>
 type="text/javascript">
																												function countDown($source, $target) {
																													var max = $source.attr("data-maxchar");
																													$target.html(max - $source.val().length);

																													$source.keyup(function() {
																														$target.html(max - $source.val().length);
																													});
																												}

																												$(document).ready(function() {
																													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
																														countDown($("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>"), $("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>_counter"));
																													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																												});
																											<?php echo '</script'; ?>
>
																										<?php }?>
																										<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
																										</div>
																									<?php }?>
																								<?php } else { ?>
																									<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?>
																										
																											<?php echo '<script'; ?>
 type="text/javascript">
																												$().ready(function() {
																												var input_id = '




																													
																													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>





																														
																													<?php } else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>





																														
																													<?php }?>




																													
																													';
																														$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add tag'),$_smarty_tpl ) );?>
'});
																															$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
																															$(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
																															});
																															});
																														<?php echo '</script'; ?>
>
																													
																												<?php }?>
																												<?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]);?>
																												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
																													<div class="input-group<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
																													<?php }?>
																													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar']))) {?>
																														<span id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_counter"
																															class="input-group-addon"><span
																																class="text-count-down"><?php echo $_smarty_tpl->tpl_vars['input']->value['maxchar'];?>
</span></span>
																													<?php }?>
																													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['prefix']))) {?>
																														<span class="input-group-addon">
																															<?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

																														</span>
																													<?php }?>
																													<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
																														id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"
																														value="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['string_format'])) && $_smarty_tpl->tpl_vars['input']->value['string_format']) {
if ((isset($_smarty_tpl->tpl_vars['value_text']->value)) && !empty($_smarty_tpl->tpl_vars['value_text']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8' ));
} else {
if ((isset($_smarty_tpl->tpl_vars['input']->value['default_val'])) && !empty($_smarty_tpl->tpl_vars['input']->value['default_val'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['input']->value['default_val']),'html','UTF-8' ));
}
}
} else {
if ((isset($_smarty_tpl->tpl_vars['value_text']->value)) && !empty($_smarty_tpl->tpl_vars['value_text']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8' ));
} else {
if ((isset($_smarty_tpl->tpl_vars['input']->value['default_val'])) && !empty($_smarty_tpl->tpl_vars['input']->value['default_val'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['default_val'],'html','UTF-8' ));
}
}
}?>"
																														class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?> tagify<?php }?>"
																														<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
" <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar']))) {?>
																														data-maxchar="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxchar'];?>
" <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxlength']))) {?>
																													maxlength="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxlength'];?>
" <?php }?>
																													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['readonly'])) && $_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly" <?php }?>
																													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled" <?php }?>
																													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])) && !$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off" <?php }?>
																													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
																													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])) && $_smarty_tpl->tpl_vars['input']->value['placeholder']) {?>
																													placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
" <?php }?> />
																												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
																													<span class="input-group-addon">
																														<?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

																													</span>
																												<?php }?>

																												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
																												</div>
																											<?php }?>
																											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar']))) {?>
																												<?php echo '<script'; ?>
 type="text/javascript">
																													function countDown($source, $target) {
																														var max = $source.attr("data-maxchar");
																														$target.html(max - $source.val().length);

																														$source.keyup(function() {
																															$target.html(max - $source.val().length);
																														});
																													}
																													$(document).ready(function() {
																														countDown($("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"), $("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_counter"));
																													});
																												<?php echo '</script'; ?>
>
																											<?php }?>
																										<?php }?>
																									<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'filemanager') {?>
																										<div class="form-group">
																											<div class="col-lg-10">
																												<div class="row">
																													<div class="input-group">
																														<input type="text"
																															value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
"
																															id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" />
																														<span class="input-group-addon"><a
																																href="filemanager/dialog.php?type=1&field_id=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
																																class="js-iframe-upload"
																																data-input-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
"
																																type="button">Select image <i
																																	class="icon-external-link"></i></a></span>
																													</div>
																													<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {?>
																														<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
" alt=""
																															style="max-height: 100px;" />
																													<?php }?>

																												</div>
																											</div>
																										</div>
																										<?php echo '<script'; ?>
>
																											$('.js-iframe-upload').fancybox({
																												'width': 900,
																												'height': 600,
																												'type': 'iframe',
																												'autoScale': false,
																												'autoDimensions': false,
																												'fitToView': false,
																												'autoSize': false,
																												onUpdate: function onUpdate() {
																													var $linkImage = $('.fancybox-iframe').contents().find('a.link');
																													var inputName = $(this.element).data('input-name');
																													$linkImage.data('field_id', inputName);
																													$linkImage.attr('data-field_id', inputName);
																												},
																												afterShow: function afterShow() {
																													var $linkImage = $('.fancybox-iframe').contents().find('a.link');
																													var inputName = $(this.element).data('input-name');
																													$linkImage.data('field_id', inputName);
																													$linkImage.attr('data-field_id', inputName);
																												},
																												beforeClose: function beforeClose() {
																													var $input = $('#' + $(this.element).data("input-name"));
																													var val = $input.val();

																													$input.change();
																												}
																											});
																										<?php echo '</script'; ?>
>
																									<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'textbutton') {?>
																										<?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]);?>
																										<div class="row">
																											<div class="col-lg-9">
																												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar']))) {?>
																													<div class="input-group">
																														<span id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_counter"
																															class="input-group-addon">
																															<span class="text-count-down"><?php echo $_smarty_tpl->tpl_vars['input']->value['maxchar'];?>
</span>
																														</span>
																													<?php }?>
																													<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
																														id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"
																														value="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['string_format'])) && $_smarty_tpl->tpl_vars['input']->value['string_format']) {
if ((isset($_smarty_tpl->tpl_vars['value_text']->value)) && !empty($_smarty_tpl->tpl_vars['value_text']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8' ));
} else {
if ((isset($_smarty_tpl->tpl_vars['input']->value['default_val'])) && !empty($_smarty_tpl->tpl_vars['input']->value['default_val'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['input']->value['default_val']),'html','UTF-8' ));
}
}
} else {
if ((isset($_smarty_tpl->tpl_vars['value_text']->value)) && !empty($_smarty_tpl->tpl_vars['value_text']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8' ));
} else {
if ((isset($_smarty_tpl->tpl_vars['input']->value['default_val'])) && !empty($_smarty_tpl->tpl_vars['input']->value['default_val'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['default_val'],'html','UTF-8' ));
}
}
}?>"
																														class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?> tagify<?php }?>"
																														<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
" <?php }?>
																														<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar']))) {?> data-maxchar="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxchar'];?>
" <?php }?>
																														<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxlength']))) {?> maxlength="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxlength'];?>
" <?php }?>
																														<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['readonly'])) && $_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly" <?php }?>
																														<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled" <?php }?>
																														<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])) && !$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?>
																														autocomplete="off" <?php }?>
																														<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])) && $_smarty_tpl->tpl_vars['input']->value['placeholder']) {?>
																														placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
" <?php }?> />
																													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {
echo $_smarty_tpl->tpl_vars['input']->value['suffix'];
}?>
																													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar']))) {?>
																													</div>
																												<?php }?>
																											</div>
																											<div class="col-lg-2">
																												<button type="button"
																													class="btn btn-default<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'];
}
if ((isset($_smarty_tpl->tpl_vars['input']->value['button']['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['class'];
}?>"
																													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['button']['attributes'], 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
																														<?php if (mb_strtolower((string) $_smarty_tpl->tpl_vars['name']->value, 'UTF-8') != 'class') {?>
																														<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'html','UTF-8' ));?>
" <?php }?>
																													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
																													<?php echo $_smarty_tpl->tpl_vars['input']->value['button']['label'];?>

																												</button>
																											</div>
																										</div>
																										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar']))) {?>
																											<?php echo '<script'; ?>
 type="text/javascript">
																												function countDown($source, $target) {
																													var max = $source.attr("data-maxchar");
																													$target.html(max - $source.val().length);
																													$source.keyup(function() {
																														$target.html(max - $source.val().length);
																													});
																												}
																												$(document).ready(function() {
																													countDown($("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"), $("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_counter"));
																												});
																											<?php echo '</script'; ?>
>
																										<?php }?>
																									<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'image-select') {?>
																										<div
																											class="image-select <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['direction']))) {?> image-select-<?php echo $_smarty_tpl->tpl_vars['input']->value['direction'];
}
if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">

																											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['query'], 'option');
$_smarty_tpl->tpl_vars['option']->index = -1;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->index++;
$__foreach_option_10_saved = $_smarty_tpl->tpl_vars['option'];
?>
																												<input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" type="radio"
																													name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"
																													<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == '') {
if ($_smarty_tpl->tpl_vars['option']->index == 0) {?> checked<?php }
}?>
																													<?php if ($_smarty_tpl->tpl_vars['option']->value['id_option'] == $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {?>checked<?php }?> />
																												<div class="image-option">

																													<label class="image-option-label"
																														for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"></label>
																													<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/posthemeoptions/img/<?php echo $_smarty_tpl->tpl_vars['option']->value['img'];?>
"
																														alt="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
" class="img-responsive" />
																													<span class="image-option-title"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</span>
																												</div>
																											<?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_10_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																										</div>
																									<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select') {?>
																										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['options']['query'])) && !$_smarty_tpl->tpl_vars['input']->value['options']['query'] && (isset($_smarty_tpl->tpl_vars['input']->value['empty_message']))) {?>
																											<?php echo $_smarty_tpl->tpl_vars['input']->value['empty_message'];?>

																											<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['input']) ? $_smarty_tpl->tpl_vars['input']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['required'] = false;
$_smarty_tpl->_assignInScope('input', $_tmp_array);?>
																											<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['input']) ? $_smarty_tpl->tpl_vars['input']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['desc'] = null;
$_smarty_tpl->_assignInScope('input', $_tmp_array);?>
																										<?php } else { ?>
																											<select name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
"
																												class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8' ));
}?> fixed-width-xl"
																												id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id'],'html','utf-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));
}?>"
																												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple']))) {?>multiple="multiple" <?php }?>
																												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?>size="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8' ));?>
" <?php }?>
																												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['onchange']))) {?>onchange="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8' ));?>
" <?php }?>>
																												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['options']['default']))) {?>
																													<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['options']['default']['value'],'html','utf-8' ));?>
">
																														<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['options']['default']['label'],'html','utf-8' ));?>
</option>
																												<?php }?>
																												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']))) {?>
																													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['query'], 'optiongroup');
$_smarty_tpl->tpl_vars['optiongroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->value) {
$_smarty_tpl->tpl_vars['optiongroup']->do_else = false;
?>
																														<optgroup label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['label']];?>
">
																															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['query']], 'option');
$_smarty_tpl->tpl_vars['option']->index = -1;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->index++;
$__foreach_option_12_saved = $_smarty_tpl->tpl_vars['option'];
?>
																																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple']))) {?>
																																		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
																																			<?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"
																																			<?php }?> 
																																			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
																																		<?php } else { ?>
																																			<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"
																																			<?php }?> 
																																		<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['name']];?>
</option>
																																<?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_12_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																															</optgroup>
																														<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																													<?php } else { ?>
																														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['query'], 'option');
$_smarty_tpl->tpl_vars['option']->index = -1;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->index++;
$__foreach_option_14_saved = $_smarty_tpl->tpl_vars['option'];
?>
																															<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
																																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
" <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple']))) {?>
																																		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
																																			<?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?> selected="selected" <?php }?>
																																			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
																																			<?php } else { ?> 
																																				<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																																				selected="selected" <?php }?> 
																																			<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
																																	<?php } elseif ($_smarty_tpl->tpl_vars['option']->value == "-") {?>
																																		<option value="">-</option>
																																	<?php } else { ?>
																																		<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple']))) {?>
																																				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
																																					<?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?> selected="selected" <?php }?>
																																					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
																																					<?php } else { ?> 
																																						<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																																						selected="selected" <?php }?> 
																																					<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>

																																			<?php }?>
																																		<?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_14_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																																	<?php }?>
																																</select>
																															<?php }?>
																														<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'radio') {?>
																															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
																																<div class="radio <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
																																	<label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],'html','UTF-8' ));?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
</label>
																																</div>
																																<?php if ((isset($_smarty_tpl->tpl_vars['value']->value['p'])) && $_smarty_tpl->tpl_vars['value']->value['p']) {?><p class="help-block"><?php echo $_smarty_tpl->tpl_vars['value']->value['p'];?>
</p><?php }?>
																															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																														<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'switch') {?>
																															<span class="switch prestashop-switch fixed-width-lg">
																																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
																																	<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?>
																																		id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on" <?php } else { ?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off" 
																																		<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
"
																																		<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"
																																			<?php }
if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled" <?php }?> />
																																		<label <?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );
}?></label>
																																	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																																	<a class="slide-button btn"></a>
																																</span>
																															<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'textarea') {?>
																																<?php $_smarty_tpl->_assignInScope('use_textarea_autosize', true);?>
																																<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['lang'])) && $_smarty_tpl->tpl_vars['input']->value['lang']) {?>
																																	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
																																		<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
																																			<div class="form-group translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
																																				<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?> style="display:none;" <?php }?>>
																																				<div class="col-lg-9">
																																				<?php }?>
																																				<textarea name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
																																					class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])) && $_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}
} else {
if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
} else { ?> textarea-autosize<?php }
}?>"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8' ));?>
</textarea>
																																				<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
																																				</div>
																																				<div class="col-lg-2">
																																					<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1"
																																						data-toggle="dropdown">
																																						<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

																																						<span class="caret"></span>
																																					</button>
																																					<ul class="dropdown-menu">
																																						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
																																							<li>
																																								<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"
																																									tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
																																							</li>
																																						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																																					</ul>
																																				</div>
																																			</div>
																																		<?php }?>
																																	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

																																<?php } else { ?>
																																	<textarea name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
																																		id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"
																																		<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['cols']))) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
" <?php }?>
																																		<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['rows']))) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
" <?php }?>
																																		class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])) && $_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}
} else { ?> textarea-autosize<?php }?>"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
</textarea>
																																<?php }?>
																															<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'customtextarea') {?>
																																<textarea name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
																																	id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"
																																	<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['cols']))) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
" <?php }?>
																																	<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['rows']))) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
" <?php }?>
																																	class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
</textarea>
																															<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'checkbox') {?>
																																<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['expand']))) {?>
																																	<a class="btn btn-default show_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default']) == 'hide') {?> hidden<?php }?>"
																																		href="#">
																																		<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['icon'];?>
"></i>
																																		<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['text'];?>

																																		<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])) && $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'] > 0) {?>
																																			<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
																																		<?php }?>
																																	</a>
																																	<a class="btn btn-default hide_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default']) == 'show') {?> hidden<?php }?>"
																																		href="#">
																																		<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['icon'];?>
"></i>
																																		<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['text'];?>

																																		<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])) && $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'] > 0) {?>
																																			<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
																																		<?php }?>
																																	</a>
																																<?php }?>
																																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values']['query'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
																																	<?php $_smarty_tpl->_assignInScope('id_checkbox', (($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]));?>
																																	<div
																																		class="checkbox<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['expand'])) && strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default']) == 'show') {?> hidden<?php }?>">
																																		<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>" <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['val']))) {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['val'],'html','UTF-8' ));?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value])) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?>checked="checked" <?php }?> /><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>
</label>
																																</div>
																															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																														<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'change-password') {?>
																															<div class="row">
																																<div class="col-lg-12">
																																	<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change" class="btn btn-default">
																																		<i class="icon-lock"></i>
																																		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change password...'),$_smarty_tpl ) );?>

																																	</button>
																																	<div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container" class="form-password-change well hide">
																																		<div class="form-group">
																																			<label for="old_passwd" class="control-label col-lg-2 required">
																																				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current password'),$_smarty_tpl ) );?>

																																			</label>
																																			<div class="col-lg-10">
																																				<div class="input-group fixed-width-lg">
																																					<span class="input-group-addon">
																																						<i class="icon-unlock"></i>
																																					</span>
																																					<input type="password" id="old_passwd" name="old_passwd"
																																						class="form-control" value="" required="required"
																																						autocomplete="off">
																																				</div>
																																			</div>
																																		</div>
																																		<hr />
																																		<div class="form-group">
																																			<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="required control-label col-lg-2">
																																				<span class="label-tooltip" data-toggle="tooltip" data-html="true"
																																					title=""
																																					data-original-title="Password should be at least 8 characters long.">
																																					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New password'),$_smarty_tpl ) );?>

																																				</span>
																																			</label>
																																			<div class="col-lg-9">
																																				<div class="input-group fixed-width-lg">
																																					<span class="input-group-addon">
																																						<i class="icon-key"></i>
																																					</span>
																																					<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
																																						class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>" value=""
																																						required="required" autocomplete="off" />
																																				</div>
																																				<span id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output"></span>
																																			</div>
																																		</div>
																																		<div class="form-group">
																																			<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="required control-label col-lg-2">
																																				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm password'),$_smarty_tpl ) );?>

																																			</label>
																																			<div class="col-lg-4">
																																				<div class="input-group fixed-width-lg">
																																					<span class="input-group-addon">
																																						<i class="icon-key"></i>
																																					</span>
																																					<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2"
																																						class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>" value=""
																																						autocomplete="off" />
																																				</div>
																																			</div>
																																		</div>
																																		<div class="form-group">
																																			<div class="col-lg-10 col-lg-offset-2">
																																				<input type="text" class="form-control fixed-width-md pull-left"
																																					id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field" disabled="disabled">
																																				<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn"
																																					class="btn btn-default">
																																					<i class="icon-random"></i>
																																					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Generate password'),$_smarty_tpl ) );?>

																																				</button>
																																			</div>
																																		</div>
																																		<div class="form-group">
																																			<div class="col-lg-10 col-lg-offset-2">
																																				<p class="checkbox">
																																					<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-checkbox-mail">
																																						<input name="passwd_send_email"
																																							id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-checkbox-mail" type="checkbox"
																																							checked="checked">
																																						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send me this new password by Email'),$_smarty_tpl ) );?>

																																					</label>
																																				</p>
																																			</div>
																																		</div>
																																		<div class="row">
																																			<div class="col-lg-12">
																																				<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn"
																																					class="btn btn-default">
																																					<i class="icon-remove"></i>
																																					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

																																				</button>
																																			</div>
																																		</div>
																																	</div>
																																</div>
																															</div>
																															<?php echo '<script'; ?>
>
																																$(function() {
																																	var $oldPwd = $('#old_passwd');
																																	var $passwordField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
');
																																	var $output = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output');
																																	var $generateBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn');
																																	var $generateField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field');
																																	var $cancelBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn');

																																	var feedback = [
																																		{ badge: 'text-danger', text: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Invalid",'js'=>1),$_smarty_tpl ) );?>
' },
																																		{ badge: 'text-warning', text: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Okay",'js'=>1),$_smarty_tpl ) );?>
' },
																																		{ badge: 'text-success', text: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Good",'js'=>1),$_smarty_tpl ) );?>
' },
																																		{ badge: 'text-success', text: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Fabulous",'js'=>1),$_smarty_tpl ) );?>
' }
																																	];
																																	$.passy.requirements.length.min = 8;
																																	$.passy.requirements.characters = 'DIGIT';
																																	$passwordField.passy(function(strength, valid) {
																																		$output.text(feedback[strength].text);
																																		$output.removeClass('text-danger').removeClass('text-warning').removeClass(
																																			'text-success');
																																		$output.addClass(feedback[strength].badge);
																																		if (valid) {
																																			$output.show();
																																		} else {
																																			$output.hide();
																																		}
																																	});
																																	var $container = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container');
																																	var $changeBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change');
																																	var $confirmPwd = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2');

																																	$changeBtn.on('click', function() {
																																		$container.removeClass('hide');
																																		$changeBtn.addClass('hide');
																																	});
																																	$generateBtn.click(function() {
																																		$generateField.passy('generate', 8);
																																		var generatedPassword = $generateField.val();
																																		$passwordField.val(generatedPassword);
																																		$confirmPwd.val(generatedPassword);
																																	});
																																	$cancelBtn.on('click', function() {
																																		$container.find("input").val("");
																																		$container.addClass('hide');
																																		$changeBtn.removeClass('hide');
																																	});

																																	$.validator.addMethod('password_same', function(value, element) {
																																		return $passwordField.val() == $confirmPwd.val();
																																		}, '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Invalid password confirmation",'js'=>1),$_smarty_tpl ) );?>
');

																																		$('#employee_form').validate({
																																					rules: {
																																						"email": {
																																							email: true
																																						},
																																						"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" : {
																																						minlength: 8
																																					},
																																					"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2": {
																																					password_same: true
																																				},
																																				"old_passwd": {},
																																			},
																																			// override jquery validate plugin defaults for bootstrap 3
																																			highlight: function(element) {
																																				$(element).closest('.form-group').addClass('has-error');
																																			},
																																			unhighlight: function(element) {
																																				$(element).closest('.form-group').removeClass('has-error');
																																			},
																																			errorElement: 'span',
																																			errorClass: 'help-block',
																																			errorPlacement: function(error, element) {
																																				if (element.parent('.input-group').length) {
																																					error.insertAfter(element.parent());
																																				} else {
																																					error.insertAfter(element);
																																				}
																																			}
																																	});
																																});
																															<?php echo '</script'; ?>
>
																														<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'password') {?>
																															<div class="input-group fixed-width-lg">
																																<span class="input-group-addon">
																																	<i class="icon-key"></i>
																																</span>
																																<input type="password" id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"
																																	name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>"
																																	value=""
																																	<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])) && !$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?>autocomplete="off" <?php }?>
																																	<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?> />
																															</div>

																														<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'birthday') {?>
																															<div class="form-group">
																																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options'], 'select', false, 'key');
$_smarty_tpl->tpl_vars['select']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['select']->value) {
$_smarty_tpl->tpl_vars['select']->do_else = false;
?>
																																	<div class="col-lg-2">
																																		<select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
																																			class="fixed-width-lg<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
																																			<option value="">-</option>
																																			<?php if ($_smarty_tpl->tpl_vars['key']->value == 'months') {?>
																																																																								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['select']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
																																					<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value == $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"
																																						<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl ) );?>
</option>
																																				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																																			<?php } else { ?>
																																				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['select']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
																																					<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value == $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"
																																						<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
																																				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																																			<?php }?>
																																		</select>
																																	</div>
																																<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																															</div>
																														<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'group') {?>
																															<?php $_smarty_tpl->_assignInScope('groups', $_smarty_tpl->tpl_vars['input']->value['values']);?>
																															<?php $_smarty_tpl->_subTemplateRender('file:helpers/form/form_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
																														<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'shop') {?>
																															<?php echo $_smarty_tpl->tpl_vars['input']->value['html'];?>

																														<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'categories') {?>
																															<?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

																														<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file') {?>
																															<?php echo $_smarty_tpl->tpl_vars['input']->value['file'];?>

																														<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'categories_select') {?>
																															<?php echo $_smarty_tpl->tpl_vars['input']->value['category_tree'];?>

																														<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'asso_shop' && (isset($_smarty_tpl->tpl_vars['asso_shop']->value)) && $_smarty_tpl->tpl_vars['asso_shop']->value) {?>
																															<?php echo $_smarty_tpl->tpl_vars['asso_shop']->value;?>

																														<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'color2') {?>
																															<div class="row">
																																<div class="input-group">
																																	<span class="c_<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"></span>
																																	<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
																																		value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
" class="" />
																																</div>

																															</div>
																														<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select2') {?>
																															<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['options']['query'])) && !$_smarty_tpl->tpl_vars['input']->value['options']['query'] && (isset($_smarty_tpl->tpl_vars['input']->value['empty_message']))) {?>
																																<?php echo $_smarty_tpl->tpl_vars['input']->value['empty_message'];?>

																																<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['input']) ? $_smarty_tpl->tpl_vars['input']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['required'] = false;
$_smarty_tpl->_assignInScope('input', $_tmp_array);?>
																																<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['input']) ? $_smarty_tpl->tpl_vars['input']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['desc'] = null;
$_smarty_tpl->_assignInScope('input', $_tmp_array);?>
																															<?php } else { ?>
																																<select name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
"
																																	class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8' ));
}?>"
																																	id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id'],'html','utf-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));
}?>"
																																	<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple']))) {?>multiple="multiple" <?php }?>
																																	<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?>size="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8' ));?>
" <?php }?>
																																	<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['onchange']))) {?>onchange="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8' ));?>
" <?php }?>>
																																	<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['options']['default']))) {?>
																																		<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['options']['default']['value'],'html','utf-8' ));?>
">
																																			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['options']['default']['label'],'html','utf-8' ));?>
</option>
																																	<?php }?>
																																	<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']))) {?>
																																		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['query'], 'optiongroup');
$_smarty_tpl->tpl_vars['optiongroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->value) {
$_smarty_tpl->tpl_vars['optiongroup']->do_else = false;
?>
																																			<optgroup label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['label']];?>
">
																																				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['query']], 'option');
$_smarty_tpl->tpl_vars['option']->index = -1;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->index++;
$__foreach_option_26_saved = $_smarty_tpl->tpl_vars['option'];
?>
																																					<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple']))) {?>
																																							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
																																								<?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"
																																								<?php }?> 
																																								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
																																							<?php } else { ?>
																																								<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"
																																								<?php }?> 
																																							<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['name']];?>
</option>
																																					<?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_26_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																																				</optgroup>
																																			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																																		<?php } else { ?>
																																			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['query'], 'option');
$_smarty_tpl->tpl_vars['option']->index = -1;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->index++;
$__foreach_option_28_saved = $_smarty_tpl->tpl_vars['option'];
?>
																																				<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
																																					<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
" <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple']))) {?>
																																							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
																																								<?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?> selected="selected" <?php }?>
																																								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
																																								<?php } else { ?> 
																																									<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																																									selected="selected" <?php }?> 
																																								<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
																																						<?php } elseif ($_smarty_tpl->tpl_vars['option']->value == "-") {?>
																																							<option value="">-</option>
																																						<?php } else { ?>
																																							<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple']))) {?>
																																									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
																																										<?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?> selected="selected" <?php }?>
																																										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
																																										<?php } else { ?> 
																																											<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																																											selected="selected" <?php }?> 
																																										<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>

																																								<?php }?>
																																							<?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_28_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																																						<?php }?>
																																					</select>
																																				<?php }?>
																																				<?php echo '<script'; ?>
>
																																					$select = $('select[name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
"]');
																																					$select.select2({
																																							tags: false,
																																							createTag: function(params) {
																																								return {
																																									id: params.term,
																																									text: params.term,
																																									newOption: false
																																								};
																																							},
																																							templateResult: function(data) {
																																								var $result = $('<span>').text(data.text);

																																								if (data.newOption) {
																																									$result.append(" <i>(custom)</i>");
																																								}
																																								return $result;
																																							}
																																						}).val($select.val())
																																						.trigger('change.select2');
																																				<?php echo '</script'; ?>
>
																																			<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'posthemes') {?>
																																				<div class="form-group">
																																					<div class="row">
																																						<select class="pos-layouts fixed-width-xxl">
																																							<option value="autopart1">Autopart 1</option>
																																							<option value="autopart2">Autopart 2</option>
																																							<option value="autopart3">Autopart 3</option>
																																							<option value="autopart4">Autopart 4</option>
																																							<option value="bag1">Bag 1</option>
																																							<option value="bag2">Bag 2</option>
																																							<option value="bag3">Bag 3</option>
																																							<option value="bag4">Bag 4</option>
																																							<option value="barber1">Barber 1</option>
																																							<option value="barber2">Barber 2</option>
																																							<option value="barber3">Barber 3</option>
																																							<option value="barber4">Barber 4</option>
																																							<option value="book1">Book 1</option>
																																							<option value="book2">Book 2</option>
																																							<option value="book3">Book 3</option>
																																							<option value="book4">Book 4</option>
																																							<option value="cosmetic1">Cosmetic 1</option>
																																							<option value="cosmetic2">Cosmetic 2</option>
																																							<option value="cosmetic3">Cosmetic 3</option>
																																							<option value="cosmetic4">Cosmetic 4</option>
																																							<option value="decoration1">Decoration 1</option>
																																							<option value="decoration2">Decoration 2</option>
																																							<option value="decoration3">Decoration 3</option>
																																							<option value="decoration4">Decoration 4</option>
																																							<option value="digital1">Digital 1</option>
																																							<option value="digital2">Digital 2</option>
																																							<option value="digital3">Digital 3</option>
																																							<option value="digital4">Digital 4</option>
																																							<option value="fashion1">Fashion 1</option>
																																							<option value="fashion2">Fashion 2</option>
																																							<option value="fashion3">Fashion 3</option>
																																							<option value="fashion4">Fashion 4</option>
																																							<option value="fashion5">Fashion 5</option>
																																							<option value="fashion6">Fashion 6</option>
																																							<option value="fashion7">Fashion 7</option>
																																							<option value="fashion8">Fashion 8</option>
																																							<option value="furniture1">Furniture 1</option>
																																							<option value="furniture2">Furniture 2</option>
																																							<option value="furniture3">Furniture 3</option>
																																							<option value="furniture4">Furniture 4</option>
																																							<option value="flower1">Flower 1</option>
																																							<option value="flower2">Flower 2</option>
																																							<option value="flower3">Flower 3</option>
																																							<option value="flower4">Flower 4</option>
																																							<option value="food1">Food 1</option>
																																							<option value="food2">Food 2</option>
																																							<option value="handmade1">Handmade 1</option>
																																							<option value="handmade2">Handmade 2</option>
																																							<option value="handmade3">Handmade 3</option>
																																							<option value="handmade4">Handmade 4</option>
																																							<option value="jewelry1">Jewelry 1</option>
																																							<option value="jewelry2">Jewelry 2</option>
																																							<option value="jewelry3">Jewelry 3</option>
																																							<option value="jewelry4">Jewelry 4</option>
																																							<option value="kitchen1">Kitchen 1</option>
																																							<option value="kitchen2">Kitchen 2</option>
																																							<option value="kitchen3">Kitchen 3</option>
																																							<option value="kitchen4">Kitchen 4</option>
																																							<option value="marketplace1">Marketplace 1</option>
																																							<option value="marketplace2">Marketplace 2</option>
																																							<option value="marketplace3">Marketplace 3</option>
																																							<option value="marketplace4">Marketplace 4</option>	
																																							<option value="medical1">Medical 1</option>
																																							<option value="medical2">Medical 2</option>	
																																							<option value="medical3">Medical 3</option>
																																							<option value="medical4">Medical 4</option>
																																							<option value="organic1">Organic 1</option>
																																							<option value="organic2">Organic 2</option>
																																							<option value="organic3">Organic 3</option>
																																							<option value="organic4">Organic 4</option>
																																							<option value="pet1">Pet 1</option>
																																							<option value="pet2">Pet 2</option>
																																							<option value="pet3">Pet 3</option>
																																							<option value="pet4">Pet 4</option>
																																							<option value="plant1">Plant 1</option>
																																							<option value="plant2">Plant 2</option>
																																							<option value="plant3">Plant 3</option>
																																							<option value="plant4">Plant 4</option>
																																							<option value="shoes1">Shoes 1</option>
																																							<option value="shoes2">Shoes 2</option>
																																							<option value="shoes3">Shoes 3</option>
																																							<option value="shoes4">Shoes 4</option>
																																							<option value="sport1">Sport 1</option>
																																							<option value="sport2">Sport 2</option>
																																							<option value="sport3">Sport 3</option>
																																							<option value="sport4">Sport 4</option>
																																							<option value="tools1">Tools 1</option>
																																							<option value="tools2">Tools 2</option>
																																							<option value="tools3">Tools 3</option>
																																							<option value="tools4">Tools 4</option>
																																							<option value="toy1">Toy 1</option>
																																							<option value="toy2">Toy 2</option>
																																							<option value="toy3">Toy 3</option>
																																							<option value="toy4">Toy 4</option>
																																							<option value="wine1">Wine 1</option>
																																							<option value="wine2">Wine 2</option>
																																							<option value="wine3">Wine 3</option>
																																							<option value="wine4">Wine 4</option>
																																							<option value="watches1">Watches 1</option>
																																							<option value="watches2">Watches 2</option>
																																							<option value="watches3">Watches 3</option>
																																							<option value="watches4">Watches 4</option>
																																						</select>
																																						</select>
																																						<a href="https://ecolife.posthemes.com/" class="pos-demos" target="_blank">View
																																							our list demo</a>
																																						<div class="import-processing"></div>
																																						<button class="btn-import"><span>Import</span></button>
																																					</div>
																																					<?php echo '<script'; ?>
>
																																						$select = $('select.pos-layouts');
																																						$select.select2({
																																								tags: false,
																																								createTag: function(params) {
																																									return {
																																										id: params.term,
																																										text: params.term,
																																										newOption: false
																																									};
																																								},
																																								templateResult: function(data) {
																																									var $result = $('<span>').text(data.text);

																																									if (data.newOption) {
																																										$result.append(" <i>(custom)</i>");
																																									}
																																									return $result;
																																								}
																																							}).val($select.val())
																																							.trigger('change.select2');
																																					<?php echo '</script'; ?>
>
																																				</div>
																																			<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'support') {?>
																																				<div class="support-section">
																																					<div id="support" class="support-div">
																																						<h4>Support</h4>
																																						<p>When you face problems or need to ask anything about the theme, you can
																																							contact our support email: <span class="email">posthemes@gmail.com</span>
																																					</div>
																																					<div id="custom" class="support-div">
																																						<h4>Customwork</h4>
																																						<p>When need to make a customized work, you can contact the developer email:
																																							<span class="email">posthemes.development@gmail.com</span>
																																						<div id="questions">
																																							<h4>Frequently Asked Questions</h4>
																																							<p class="question"><strong>Q. How much do you usually charge?</strong></p>
																																							<p class="answer"><strong>A.</strong> Every project is unique, and the quote
																																								depends on the requirements &amp; complexity of the project. The price
																																								per hour is from 20$/hour</p>
																																							<p class="question"><strong>Q. What are the payment terms?</strong></p>
																																							<p class="answer"><strong>A.</strong> Payment is 50% upfront and 50% on the
																																								completion of the project.</p>
																																							<p class="question"><strong>Q. How long will it take to complete my
																																									project?</strong></p>
																																							<p class="answer"><strong>A. </strong>The completion time of customwork will
																																								depend on various factors like the complexity of design, the number of
																																								pages, and functions . Therefore, we can tell you the turnaround time
																																								only after understanding your requirements. Usually it takes us 7 to 14
																																								days for coding to perfection.</p>
																																							<p class="question"><strong>Q. What methods of payment do we
																																									accept?</strong></p>
																																							<p class="answer"><strong>A.</strong>We accept payment via Paypal only</p>
																																							<p class="question"><strong>Q. Do you offer support after a project is
																																									completed?</strong></p>
																																							<p class="answer"><strong>A.</strong> Bug fixes and minor tweaks are always
																																								included in support. Additions and sizable changes will be quoted
																																								separately.</p>
																																							<p class="question"><strong>Q. How do you handle the refunds?</strong></p>
																																							<p class="answer"><strong>A.</strong> We issue the refund only in the
																																								following situations:</p>
																																							<ul class="text-list">
																																								<li>If we fail to deliver the project on time.</li>
																																								<li>If you withdraw the project before it gets started.</li>
																																								<li>If you are not satisfied with the final result and our attempts to
																																									meet your needs are not successful.</li>
																																							</ul>
																																							<p><strong>Note:</strong> We will not issue a refund after the final zip is
																																								delivered. The final zip will be delivered only when you are completely
																																								satisfied with our work.</p>
																																						</div>
																																					</div>
																																				</div>
																																			<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'date') {?>
																																				<div class="row">
																																					<div class="input-group col-lg-4">
																																						<input id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>" type="text"
																																							data-hex="true" <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
																																							<?php } else { ?>class="datepicker" 
																																							<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
																																							value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
" />
																																						<span class="input-group-addon">
																																							<i class="icon-calendar-empty"></i>
																																						</span>
																																					</div>
																																				</div>
																																			<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'datetime') {?>
																																				<div class="row">
																																					<div class="input-group col-lg-4">
																																						<input id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>" type="text"
																																							data-hex="true" <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
" 
																																							<?php } else { ?>
																																							class="datetimepicker" <?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
																																							value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
" />
																																						<span class="input-group-addon">
																																							<i class="icon-calendar-empty"></i>
																																						</span>
																																					</div>
																																				</div>
																																			<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'free') {?>
																																				<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>

																																			<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'html') {?>
																																				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['html_content']))) {?>
																																					<?php echo $_smarty_tpl->tpl_vars['input']->value['html_content'];?>

																																				<?php } else { ?>
																																					<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>

																																				<?php }?>
																																			<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'wrapper_open' || $_smarty_tpl->tpl_vars['input']->value['type'] == 'wrapper_close') {?>
																																				<div></div>
																																			<?php }?>

																																		<?php
}
}
/* {/block "input"} */
/* {block "description"} */
class Block_14890778726706e3d3ec87a4_45567727 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																																			<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['desc'])) && !empty($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
																																				<p class="help-block">
																																					<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
																																						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['desc'], 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
																																							<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
																																								<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
																																							<?php } else { ?>
																																								<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
																																							<?php }?>
																																						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																																					<?php } else { ?>
																																						<?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>

																																					<?php }?>
																																				</p>
																																			<?php }?>
																																		<?php
}
}
/* {/block "description"} */
/* {block "field"} */
class Block_5143104416706e3d3d22645_13793924 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																		<div
																			class="col-lg-<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['col']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['col'] ));
} else { ?>10<?php }?> <?php if (!(isset($_smarty_tpl->tpl_vars['input']->value['label']))) {?>col-lg-offset-2<?php }?>">
																			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19623127726706e3d3d24338_19426013', "input", $this->tplIndex);
?>
																																		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14890778726706e3d3ec87a4_45567727', "description", $this->tplIndex);
?>

																																	</div>

																																<?php
}
}
/* {/block "field"} */
/* {block "input_row"} */
class Block_14703296436706e3d3d06ed6_04277948 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] != 'wrapper_open' && $_smarty_tpl->tpl_vars['input']->value['type'] != 'wrapper_close') {?>
															<div class="form-group <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];
if ((isset($_smarty_tpl->tpl_vars['input']->value['form_group_class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['form_group_class'];
}
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'hidden') {?> hide<?php }?>"
																<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'id_state') {?> id="contains_states" 
																	<?php if (!$_smarty_tpl->tpl_vars['contains_states']->value) {?>
																		style="display:none;" <?php }
}
if ((isset($_smarty_tpl->tpl_vars['tabs']->value)) && (isset($_smarty_tpl->tpl_vars['input']->value['tab']))) {?>
																	data-tab-id="<?php echo $_smarty_tpl->tpl_vars['input']->value['tab'];?>
" <?php }?>>
																<?php }?>
																<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'hidden') {?>
																	<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
																		value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
" />
																<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'infoheading') {?>
																	<div class="infoheading_class col-sm-12 <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['colorclass']))) {
echo $_smarty_tpl->tpl_vars['input']->value['colorclass'];
}?> "
																		data-name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" style=" background: #eee;">
																		<h4 class="infoheading_label col-lg-offset-2" style="font-size:18px;"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>

																		</h4>
																		<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['sublabel']))) {?>
																			<span class="infoheading_sublabel"><?php echo $_smarty_tpl->tpl_vars['input']->value['sublabel'];?>
</span>
																		<?php }?>
																	</div>
																<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'infoheadingsmall') {?>
																	<div class="infoheadingsmall_class col-sm-12 <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['colorclass']))) {
echo $_smarty_tpl->tpl_vars['input']->value['colorclass'];
}?> "
																		data-name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
																		<h4 class="infoheadingsmall_label"
																			style="font-size:16px; border-bottom:1px solid #ccc;font-weight: 600;padding-bottom: 5px;">
																			<?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
</h4>
																		<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['sublabel']))) {?>
																			<span class="infoheadingsmall_sublabel"><?php echo $_smarty_tpl->tpl_vars['input']->value['sublabel'];?>
</span>
																		<?php }?>
																	</div>
																<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'wrapper_open') {?>
																	<div class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
">
																	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'wrapper_close') {?>
																	</div>
																<?php } else { ?>
																	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4094327576706e3d3d1aa67_21234666', "label", $this->tplIndex);
?>


																	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5143104416706e3d3d22645_13793924', "field", $this->tplIndex);
?>
																															<?php }?>
																															<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] != 'wrapper_open' && $_smarty_tpl->tpl_vars['input']->value['type'] != 'wrapper_close') {?>
																															</div>
																														<?php }?>
																													<?php
}
}
/* {/block "input_row"} */
/* {block "other_input"} */
class Block_592539846706e3d3ee4324_12348461 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "other_input"} */
/* {block "footer"} */
class Block_13630399796706e3d3ee51e5_27176201 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\nihmo\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

																										<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'form_submit_btn', null, null);
echo smarty_function_counter(array('name'=>'form_submit_btn'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
																										<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) || (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']))) {?>
																											<div class="panel-footer">
																												<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) && !empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
																													<button type="submit" value="1"
																														id="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'];
} else {
echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn<?php }
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'form_submit_btn') > 1) {?>_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'form_submit_btn')-1) ));
}?>"
																														name="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'];
} else {
echo $_smarty_tpl->tpl_vars['submit_action']->value;
}
if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay'])) && $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']) {?>AndStay<?php }?>"
																														class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'];
} else { ?>btn btn-default pull-right<?php }?>">
																														<i
																															class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'];
} else { ?>process-icon-save<?php }?>"></i>
																														<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'];?>

																													</button>
																												<?php }?>
																												<?php if ((isset($_smarty_tpl->tpl_vars['show_cancel_button']->value)) && $_smarty_tpl->tpl_vars['show_cancel_button']->value) {?>
																													<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['back_url']->value,'html','UTF-8' ));?>
" class="btn btn-default"
																														onclick="window.history.back();">
																														<i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

																													</a>
																												<?php }?>
																												<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']))) {?>
																													<button type="reset"
																														id="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'];
} else {
echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_reset_btn<?php }?>"
																														class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'];
} else { ?>btn btn-default<?php }?>">
																														<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon']))) {?><i
																															class="<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'];?>
"></i> <?php }?>
																														<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['title'];?>

																													</button>
																												<?php }?>
																												<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']))) {?>
																													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'], 'btn', false, 'k');
$_smarty_tpl->tpl_vars['btn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->do_else = false;
?>
																														<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['href'])) && trim($_smarty_tpl->tpl_vars['btn']->value['href']) != '') {?>
																															<a href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['id']))) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
" <?php }?>
																																class="btn btn-default<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>"
																																<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
" <?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['icon']))) {?><i
																																class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
"></i> <?php }
echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</a>
																													<?php } else { ?>
																														<button type="<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['type']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['type'];
} else { ?>button<?php }?>"
																															<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['id']))) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
" <?php }?>
																															class="btn btn-default<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>"
																															name="<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['name']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['name'];
} else { ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;
}?>"
																															<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
" <?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['icon']))) {?><i
																															class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
"></i> <?php }
echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</button>
																												<?php }?>
																											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																										<?php }?>
																									</div>
																								<?php }?>
																							<?php
}
}
/* {/block "footer"} */
/* {block "fieldset"} */
class Block_6134704066706e3d3cfdc79_66995714 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\nihmo\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'fieldset_name', null, null);
echo smarty_function_counter(array('name'=>'fieldset_name'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<div class="panel"
									id="fieldset_<?php echo $_smarty_tpl->tpl_vars['f']->value;
if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count')) {?>_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count') ));
}
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'fieldset_name') > 1) {?>_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'fieldset_name')-1) ));
}?>">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fieldset']->value['form'], 'field', false, 'key');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>

										<?php if ($_smarty_tpl->tpl_vars['key']->value == 'legend') {?>
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_628129696706e3d3d02264_41233748', "legend", $this->tplIndex);
?>

										<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'description' && $_smarty_tpl->tpl_vars['field']->value) {?>
											<!-- <div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div> -->
										<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'input') {?>
											<div class="form-wrapper">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value, 'input');
$_smarty_tpl->tpl_vars['input']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['input']->do_else = false;
?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14703296436706e3d3d06ed6_04277948', "input_row", $this->tplIndex);
?>

																												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminForm','fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl ) );?>

																												<?php if ((isset($_smarty_tpl->tpl_vars['name_controller']->value))) {?>
																													<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( $_smarty_tpl->tpl_vars['name_controller']->value ));?>
Form<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
																													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl ) );?>

																												<?php } elseif ((isset($_GET['controller']))) {?>
																													<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'htmlentities' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( $_GET['controller'] )) ));?>
Form<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
																													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl ) );?>

																												<?php }?>
																											</div><!-- /.form-wrapper -->
																										<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'desc') {?>
																											<div class="alert alert-info col-lg-offset-3">
																												<?php if (is_array($_smarty_tpl->tpl_vars['field']->value)) {?>
																													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value, 'p', false, 'k');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
																														<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
																															<span<?php if ((isset($_smarty_tpl->tpl_vars['p']->value['id']))) {?> id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
																															<?php } else { ?>
																																<?php echo $_smarty_tpl->tpl_vars['p']->value;?>

																																<?php if ((isset($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['k']->value+1]))) {?><br /><?php }?>
																															<?php }?>
																														<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																													<?php } else { ?>
																														<?php echo $_smarty_tpl->tpl_vars['field']->value;?>

																													<?php }?>
																											</div>
																										<?php }?>
																										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_592539846706e3d3ee4324_12348461', "other_input", $this->tplIndex);
?>

																									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13630399796706e3d3ee51e5_27176201', "footer", $this->tplIndex);
?>

																						</div>
																					<?php
}
}
/* {/block "fieldset"} */
/* {block "other_fieldsets"} */
class Block_20893065576706e3d3f30cb1_91787508 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "other_fieldsets"} */
/* {block "defaultForm"} */
class Block_14841190516706e3d3ceb7c6_19826328 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'defaultForm' => 
  array (
    0 => 'Block_14841190516706e3d3ceb7c6_19826328',
  ),
  'fieldset' => 
  array (
    0 => 'Block_6134704066706e3d3cfdc79_66995714',
  ),
  'legend' => 
  array (
    0 => 'Block_628129696706e3d3d02264_41233748',
  ),
  'input_row' => 
  array (
    0 => 'Block_14703296436706e3d3d06ed6_04277948',
  ),
  'label' => 
  array (
    0 => 'Block_4094327576706e3d3d1aa67_21234666',
  ),
  'field' => 
  array (
    0 => 'Block_5143104416706e3d3d22645_13793924',
  ),
  'input' => 
  array (
    0 => 'Block_19623127726706e3d3d24338_19426013',
  ),
  'description' => 
  array (
    0 => 'Block_14890778726706e3d3ec87a4_45567727',
  ),
  'other_input' => 
  array (
    0 => 'Block_592539846706e3d3ee4324_12348461',
  ),
  'footer' => 
  array (
    0 => 'Block_13630399796706e3d3ee51e5_27176201',
  ),
  'other_fieldsets' => 
  array (
    0 => 'Block_20893065576706e3d3f30cb1_91787508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\nihmo\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

			<?php if ((isset($_smarty_tpl->tpl_vars['identifier_bk']->value)) && $_smarty_tpl->tpl_vars['identifier_bk']->value == $_smarty_tpl->tpl_vars['identifier']->value) {?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'identifier_count', null, null);?>
					<?php echo smarty_function_counter(array('name'=>'identifier_count'),$_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php }?>
			<?php $_smarty_tpl->_assignInScope('identifier_bk', $_smarty_tpl->tpl_vars['identifier']->value ,false ,2);?>
			<?php if ((isset($_smarty_tpl->tpl_vars['table_bk']->value)) && $_smarty_tpl->tpl_vars['table_bk']->value == $_smarty_tpl->tpl_vars['table']->value) {?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'table_count', null, null);?>
					<?php echo smarty_function_counter(array('name'=>'table_count'),$_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php }?>
			<?php $_smarty_tpl->_assignInScope('table_bk', $_smarty_tpl->tpl_vars['table']->value ,false ,2);?>
			<form
				id="<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'],'html','UTF-8' ));
} else {
if ($_smarty_tpl->tpl_vars['table']->value == null) {?>configuration_form<?php } else {
echo $_smarty_tpl->tpl_vars['table']->value;?>
_form<?php }
if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'table_count') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'table_count')) {?>_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'table_count') ));
}
}?>"
				class="defaultForm form-horizontal<?php if ((isset($_smarty_tpl->tpl_vars['name_controller']->value)) && $_smarty_tpl->tpl_vars['name_controller']->value) {?> <?php echo $_smarty_tpl->tpl_vars['name_controller']->value;
}?>"
				<?php if ((isset($_smarty_tpl->tpl_vars['current']->value)) && $_smarty_tpl->tpl_vars['current']->value) {?>
					action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current']->value,'html','UTF-8' ));
if ((isset($_smarty_tpl->tpl_vars['token']->value)) && $_smarty_tpl->tpl_vars['token']->value) {?>&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));
}?>"
					<?php }?> method="post" enctype="multipart/form-data" <?php if ((isset($_smarty_tpl->tpl_vars['style']->value))) {?> style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
" <?php }?> novalidate>
					<?php if ($_smarty_tpl->tpl_vars['form_id']->value) {?>
						<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
"
							id="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;
if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count')) {?>_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count') ));
}?>"
							value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?>
						<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
" value="1" />
					<?php }?>
					<?php $_smarty_tpl->_assignInScope('tabkey', 0);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'fieldset', false, 'f');
$_smarty_tpl->tpl_vars['fieldset']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value => $_smarty_tpl->tpl_vars['fieldset']->value) {
$_smarty_tpl->tpl_vars['fieldset']->do_else = false;
?>
						<div id="cart_rule_<?php echo $_smarty_tpl->tpl_vars['tabkey']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
 panel cart_rule_tab xprttheme_editor">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6134704066706e3d3cfdc79_66995714', "fieldset", $this->tplIndex);
?>

																					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20893065576706e3d3f30cb1_91787508', "other_fieldsets", $this->tplIndex);
?>

																				</div>
																				<?php $_smarty_tpl->_assignInScope('tabkey', $_smarty_tpl->tpl_vars['tabkey']->value+1);?>
																			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																		</form>
																	<?php
}
}
/* {/block "defaultForm"} */
/* {block "after"} */
class Block_11879650236706e3d3f328e1_14063775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_11879650236706e3d3f328e1_14063775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "after"} */
/* {block "autoload_tinyMCE"} */
class Block_13158932166706e3d3f351b4_74633859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'autoload_tinyMCE' => 
  array (
    0 => 'Block_13158932166706e3d3f351b4_74633859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																				tinySetup({
																					editor_selector: "autoload_rte"
																				});
																			<?php
}
}
/* {/block "autoload_tinyMCE"} */
/* {block "script"} */
class Block_3483255126706e3d3f3cb05_75276314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_3483255126706e3d3f3cb05_75276314',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
}
