<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:35:36
  from '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/admin638rn6s3s/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaef48394c85_42996995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '663660009f26361b52d0c6fc4b7beea605783f77' => 
    array (
      0 => '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/admin638rn6s3s/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1542012881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beaef48394c85_42996995 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13701753605beaef48394134_06790280', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_13701753605beaef48394134_06790280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_13701753605beaef48394134_06790280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
