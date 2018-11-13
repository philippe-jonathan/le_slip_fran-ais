<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:14:02
  from '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/admin638rn6s3s/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaea3a2db225_71785818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6903b78214df14280db43d861fdb774d37387665' => 
    array (
      0 => '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/admin638rn6s3s/themes/default/template/content.tpl',
      1 => 1542012881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beaea3a2db225_71785818 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
