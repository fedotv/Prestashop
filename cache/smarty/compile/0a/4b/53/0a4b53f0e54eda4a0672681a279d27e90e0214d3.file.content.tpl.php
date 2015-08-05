<?php /* Smarty version Smarty-3.1.19, created on 2015-08-05 16:25:08
         compiled from "/var/www/html/3DPrintShop/admin607/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148908398455c21cc4a07116-25262501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a4b53f0e54eda4a0672681a279d27e90e0214d3' => 
    array (
      0 => '/var/www/html/3DPrintShop/admin607/themes/default/template/content.tpl',
      1 => 1436343200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148908398455c21cc4a07116-25262501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55c21cc4a23347_97973900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c21cc4a23347_97973900')) {function content_55c21cc4a23347_97973900($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
