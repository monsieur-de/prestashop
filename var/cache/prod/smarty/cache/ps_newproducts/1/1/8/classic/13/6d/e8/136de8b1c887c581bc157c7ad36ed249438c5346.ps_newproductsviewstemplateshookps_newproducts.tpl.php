<?php
/* Smarty version 4.3.4, created on 2024-09-27 09:49:23
  from 'module:ps_newproductsviewstemplateshookps_newproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f66383096685_88708674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8df44403a47041b050fac755e17268c2a7c3e7' => 
    array (
      0 => 'module:ps_newproductsviewstemplateshookps_newproducts.tpl',
      1 => 1708963242,
      2 => 'module',
    ),
    'cc6fe183442bfa27e5b25e5a02a6dc6256cbb0f6' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/themes/classic/templates/catalog/_partials/productlist.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
    'a737b0c5bc61618f05b7c780680319e813e34299' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/themes/classic/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
    'a886ea03a6df77815c838b695aad2e0e85b25722' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_66f66383096685_88708674 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="featured-products clearfix mt-3">
  <h2 class="h2 products-section-title text-uppercase">
    Nouveaux produits
  </h2>
  

<div class="products">
            
<div class="js-product product col-xs-12 col-sm-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="0">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="http://localhost/prestashop/accueil/1-splendor.html" class="thumbnail product-thumbnail">
              <picture>
                                                <img
                  src="http://localhost/prestashop/1-home_default/splendor.jpg"
                  alt="Splendor"
                  loading="lazy"
                  data-full-size-image-url="http://localhost/prestashop/1-large_default/splendor.jpg"
                  width="250"
                  height="250"
                />
              </picture>
            </a>
                  

        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Aperçu rapide
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h3 class="h3 product-title"><a href="http://localhost/prestashop/accueil/1-splendor.html" content="http://localhost/prestashop/accueil/1-splendor.html">Splendor</a></h3>
                  

        
                      <div class="product-price-and-shipping">
              
              

              <span class="price" aria-label="Prix">
                                                  35,90 €
                              </span>

              

              
            </div>
                  

        
          
<div class="product-list-reviews" data-id="1" data-url="http://localhost/prestashop/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>

        
      </div>

      
    <ul class="product-flags js-product-flags">
                    <li class="product-flag new">Nouveau</li>
            </ul>

    </div>
  </article>
</div>

    </div>
  <a class="all-product-link float-xs-left float-md-right h4" href="http://localhost/prestashop/nouveaux-produits">
    Tous les nouveaux produits<i class="material-icons">&#xE315;</i>
  </a>
</section>

<?php }
}
