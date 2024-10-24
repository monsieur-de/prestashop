<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:40
  from 'C:\Users\nihmo\prestashop\modules\posproductcomments\views\templates\hook\posproductcomments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df2831b265_03700941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abce90faf6452c510f670518c2a2a9b40a8999c3' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\posproductcomments\\views\\templates\\hook\\posproductcomments.tpl',
      1 => 1727966038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df2831b265_03700941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\nihmo\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\Users\\nihmo\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
echo '<script'; ?>
 type="text/javascript">
   var posproductcomments_controller_url = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['posproductcomments_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
';
   var confirm_report_message = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure that you want to report this comment?','mod'=>'posproductcomments','js'=>1),$_smarty_tpl ) );?>
';
   var secure_key = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['secure_key']->value, ENT_QUOTES, 'UTF-8');?>
';
   var posproductcomments_url_rewrite = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['posproductcomments_url_rewriting_activated']->value, ENT_QUOTES, 'UTF-8');?>
';
   var productcomment_added = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment has been added!','mod'=>'posproductcomments','js'=>1),$_smarty_tpl ) );?>
';
   var productcomment_added_moderation = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment has been submitted and will be available once approved by a moderator.','mod'=>'posproductcomments','js'=>1),$_smarty_tpl ) );?>
';
   var productcomment_title = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New comment','mod'=>'posproductcomments','js'=>1),$_smarty_tpl ) );?>
';
   var productcomment_ok = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','mod'=>'posproductcomments','js'=>1),$_smarty_tpl ) );?>
';
   var moderation_active = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['moderation_active']->value, ENT_QUOTES, 'UTF-8');?>
;
<?php echo '</script'; ?>
>
<div id="product_comments_block_tab" class="tab-pane fade in"> 
  <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
  <h2 class="reviews-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer Reviews','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</h2>
  <div class="reviews-header flex-layout space-between center-vertical">
  	<div class="rating_aggregate">
		<div class="star_content clearfix">
			<span class="rating_star" style="width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['avg_percent']->value, ENT_QUOTES, 'UTF-8');?>
%;"></span> 
		</div>
		<?php if ($_smarty_tpl->tpl_vars['nbComments']->value == 1) {?>
			<span class="nb-comments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Based on %s review','sprintf'=>array($_smarty_tpl->tpl_vars['nbComments']->value),'mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</span>
		<?php } else { ?>
			<span class="nb-comments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Based on %s reviews','sprintf'=>array($_smarty_tpl->tpl_vars['nbComments']->value),'mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</span>
		<?php }?>
	</div>
	<?php if ((!$_smarty_tpl->tpl_vars['too_early']->value && ($_smarty_tpl->tpl_vars['logged']->value || $_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
		<a id="new_comment_tab_btn" class="open-comment-form btn btn-secondary" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
 !</a>
	<?php }?>
  </div>
  <div class="reviews-content">
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
	  <?php if ($_smarty_tpl->tpl_vars['comment']->value['content']) {?>
	  <div class="comment clearfix">
		 <div class="comment_author">
			
			<div class="star_content clearfix">
			   <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			   <?php if ($_smarty_tpl->tpl_vars['comment']->value['grade'] <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
			   <div class="star"></div>
			   <?php } else { ?>
			   <div class="star star_on"></div>
			   <?php }?>
			   <?php
}
}
?>
			</div>
			<h4 class="title_block"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comment']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h4>
		 </div>
		 <div class="comment_details">
			<p><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'nl2br' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['content'],'html','UTF-8' )) )), ENT_QUOTES, 'UTF-8');?>
</p>
			<div class="comment_author_infos">
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'by','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</span>
			   <span class="author-reviews"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['customer_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
			   <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'on','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</span>
			   <span><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['date_add']), ENT_QUOTES, 'UTF-8');?>
</span>
			</div>
			<ul>
			   <?php if ($_smarty_tpl->tpl_vars['comment']->value['total_advice'] > 0) {?>
			   <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$d out of %2$d people found this review useful.','sprintf'=>array($_smarty_tpl->tpl_vars['comment']->value['total_useful'],$_smarty_tpl->tpl_vars['comment']->value['total_advice']),'mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</li>
			   <?php }?>
			   <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
			   <?php if (!$_smarty_tpl->tpl_vars['comment']->value['customer_advice']) {?>
			   <li class="usefulness"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Was this comment useful to you?','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
<button class="usefulness_btn btn-secondary" data-is-usefull="1" data-id-product-comment="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comment']->value['id_product_comment'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'yes','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</button><button class="usefulness_btn btn-secondary" data-is-usefull="0" data-id-product-comment="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comment']->value['id_product_comment'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'no','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</button></li>
			   <?php }?>
			   <?php if (!$_smarty_tpl->tpl_vars['comment']->value['customer_report']) {?>
			   <li><span class="report_btn" data-id-product-comment="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comment']->value['id_product_comment'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report abuse','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</span></li>
			   <?php }?>
			   <?php }?>
			</ul>
		 </div>
	  </div>
	  <?php }?>
	  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
  <?php } else { ?>
	  <?php if ((!$_smarty_tpl->tpl_vars['too_early']->value && ($_smarty_tpl->tpl_vars['logged']->value || $_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
	  <p class="align_center">
		 <a id="new_comment_tab_btn" class="btn btn-secondary" data-toggle="modal" data-target="#myModal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Be the first to write your review','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
 !</a>
	  </p>
	  <?php } else { ?>
	  <p class="align_center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customer reviews for the moment.','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</p>
	  <?php }?>
  <?php }?>	
</div>


<!-- Trigger the modal with a button -->
<!-- Modal -->
<div class="modal fade" id="pos-product-comment-modal" role="dialog">
  <div class="modal-dialog">
     <!-- Modal content-->
     <div class="modal-content">
        <div class="modal-body">
            <div id="new_comment_form">
              <form id="id_new_comment_form" action="#">
					<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</h2>
					<div class="row">
						<?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value) {?>
						 <div class="product clearfix">
							<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productcomment_cover_image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->name,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
							<div class="product_desc">
							   <p class="product_name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8');?>
</p>
							</div>
						 </div>
						 <?php }?>
						 <div class="new_comment_form_content">
							<div id="new_comment_form_error" class="error" style="display:none;padding:15px 25px">
							   <ul></ul>
							</div>
							<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['criterions']->value) > 0) {?>
							<ul id="criterions_list">
							   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['criterions']->value, 'criterion');
$_smarty_tpl->tpl_vars['criterion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->do_else = false;
?>
							   <li>
								  <label><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</label>
								  <div class="star_content">
									 <input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
]" value="1" />
									 <input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
]" value="2" />
									 <input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
]" value="3" />
									 <input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
]" value="4" />
									 <input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
]" value="5" checked="checked" />
								  </div>
								  <div class="clearfix"></div>
							   </li>
							   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
							<?php }?>
							<label for="comment_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title for your review','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
							<input id="comment_title" name="title" class="form-control" type="text" value=""/>
							<?php if ($_smarty_tpl->tpl_vars['allow_guests']->value == true && !$_smarty_tpl->tpl_vars['logged']->value) {?>
							<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your name','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
							<input id="commentCustomerName" class="form-control" name="customer_name" type="text" value=""/>
							<?php }?>
	
							<label for="content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your review','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
							<textarea id="content" class="form-control" name="content"></textarea> 
							<div id="new_comment_form_footer">
							   <input id="id_product_comment_send" class="form-control" name="id_product" type="hidden" value='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_product_comment_form']->value, ENT_QUOTES, 'UTF-8');?>
' />
							   <p class=" required" style="margin-bottom:10px;"><sup>*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required fields','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</p>
								<p class="button_comment">							
									<button type="button" class="closefb btn btn-secondary" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</span>
									</button>
									<button id="submitNewMessage" class ="btn btn-secondary" name="submitMessage" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</button>
								</p>
							   <div class="clearfix"></div>
							</div>
						 </div>
					</div>					
              </form>
              <!-- /end new_comment_form_content -->
            </div>
            <div id="result_comment" style="display: none; text-align: center;">
            	<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thank you for the reviews ! Your comment is submitted','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</h4>
            </div>
        </div>
     </div>
  </div>
</div>

<?php }
}
