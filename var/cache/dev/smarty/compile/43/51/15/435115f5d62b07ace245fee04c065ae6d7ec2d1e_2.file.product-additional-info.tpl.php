<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:40:28
  from '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaf06ca0a857_93272219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '435115f5d62b07ace245fee04c065ae6d7ec2d1e' => 
    array (
      0 => '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1542012882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beaf06ca0a857_93272219 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
