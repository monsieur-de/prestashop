<?php
/* Smarty version 4.3.4, created on 2024-10-08 18:32:06
  from 'C:\Users\nihmo\prestashop\themes\theme_optima\templates\_partials\microdata\head-jsonld.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67055e862c7382_36072092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '880e9b861bc8ddf5d23d316dced28be1e93ab23b' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\themes\\theme_optima\\templates\\_partials\\microdata\\head-jsonld.tpl',
      1 => 1727966040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67055e862c7382_36072092 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name" : "<?php echo $_smarty_tpl->tpl_vars['shop']->value['name'];?>
",
    "url" : "<?php echo $_smarty_tpl->tpl_vars['urls']->value['pages']['index'];?>
",
    "logo": {
      "@type": "ImageObject",
      "url":"<?php echo $_smarty_tpl->tpl_vars['shop']->value['logo'];?>
"
    }
  }
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "isPartOf": {
      "@type": "WebSite",
      "url":  "<?php echo $_smarty_tpl->tpl_vars['urls']->value['pages']['index'];?>
",
      "name": "<?php echo $_smarty_tpl->tpl_vars['shop']->value['name'];?>
"
    },
    "name": "<?php echo $_smarty_tpl->tpl_vars['page']->value['meta']['title'];?>
",
    "url":  "<?php echo $_smarty_tpl->tpl_vars['urls']->value['current_url'];?>
"
  }
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
  <?php echo '<script'; ?>
 type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url" : "<?php echo $_smarty_tpl->tpl_vars['urls']->value['pages']['index'];?>
",
      "image": {
        "@type": "ImageObject",
        "url":"<?php echo $_smarty_tpl->tpl_vars['shop']->value['logo'];?>
"
      },
      "potentialAction": {
        "@type": "SearchAction",
        "target": "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'str_replace' ][ 0 ], array( '--search_term_string--','{search_term_string}',$_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,array('search_query'=>'--search_term_string--')) ));?>
",
        "query-input": "required name=search_term_string"
      }
    }
  <?php echo '</script'; ?>
>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['breadcrumb']->value['links'][1]))) {?>
  <?php echo '<script'; ?>
 type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>
            {
              "@type": "ListItem",
              "position": <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null);?>
,
              "name": "<?php echo $_smarty_tpl->tpl_vars['path']->value['title'];?>
",
              "item": "<?php echo $_smarty_tpl->tpl_vars['path']->value['url'];?>
"
              }<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?>,<?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]
          }
  <?php echo '</script'; ?>
>
<?php }
}
}
