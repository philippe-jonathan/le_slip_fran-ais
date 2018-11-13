<?php
/* Smarty version 3.1.33, created on 2018-11-12 13:47:29
  from '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/admin638rn6s3s/themes/default/template/controllers/order_preferences/helpers/options/options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be976616c49d2_50625460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b064be073cc86e0957a412f4edfdfd1c86b56a2' => 
    array (
      0 => '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/admin638rn6s3s/themes/default/template/controllers/order_preferences/helpers/options/options.tpl',
      1 => 1542012881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be976616c49d2_50625460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_722815105be976616c3c45_23847694', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "after"} */
class Block_722815105be976616c3c45_23847694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_722815105be976616c3c45_23847694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">changeCMSActivationAuthorization();<?php echo '</script'; ?>
><?php
}
}
/* {/block "after"} */
}
