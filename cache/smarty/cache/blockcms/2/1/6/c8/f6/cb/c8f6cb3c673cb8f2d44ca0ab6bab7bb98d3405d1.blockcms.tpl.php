<?php /*%%SmartyHeaderCode:128324034155c21c960724b9-99973331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8f6cb3c673cb8f2d44ca0ab6bab7bb98d3405d1' => 
    array (
      0 => '/var/www/html/3DPrintShop/themes/default-bootstrap/modules/blockcms/blockcms.tpl',
      1 => 1436343200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128324034155c21c960724b9-99973331',
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_key' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'show_price_drop' => 0,
    'PS_CATALOG_MODE' => 0,
    'show_new_products' => 0,
    'show_best_sales' => 0,
    'display_stores_footer' => 0,
    'show_contact' => 0,
    'contact_url' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'show_sitemap' => 0,
    'footer_text' => 0,
    'display_poweredby' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55c21c963745f7_27103339',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c21c963745f7_27103339')) {function content_55c21c963745f7_27103339($_smarty_tpl) {?>
	<!-- MODULE Block footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Information</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="http://localhost:8081/index.php?controller=prices-drop" title="Specials">
						Specials
					</a>
				</li>
									<li class="item">
				<a href="http://localhost:8081/index.php?controller=new-products" title="New products">
					New products
				</a>
			</li>
										<li class="item">
					<a href="http://localhost:8081/index.php?controller=best-sales" title="Best sellers">
						Best sellers
					</a>
				</li>
										<li class="item">
					<a href="http://localhost:8081/index.php?controller=stores" title="Our stores">
						Our stores
					</a>
				</li>
									<li class="item">
				<a href="http://localhost:8081/index.php?controller=contact" title="Contact us">
					Contact us
				</a>
			</li>
															<li class="item">
						<a href="http://localhost:8081/index.php?id_cms=3&amp;controller=cms&amp;id_lang=1" title="Terms and conditions of use">
							Terms and conditions of use
						</a>
					</li>
																<li class="item">
						<a href="http://localhost:8081/index.php?id_cms=4&amp;controller=cms&amp;id_lang=1" title="About us">
							About us
						</a>
					</li>
													<li>
				<a href="http://localhost:8081/index.php?controller=sitemap" title="Sitemap">
					Sitemap
				</a>
			</li>
					</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			&copy; 2015 <a class="_blank" href="http://www.prestashop.com">Ecommerce software by PrestaShop™</a>
		</div>
	</section>
		<!-- /MODULE Block footer -->
<?php }} ?>
