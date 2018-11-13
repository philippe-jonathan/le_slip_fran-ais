<?php
/* Smarty version 3.1.33, created on 2018-11-12 11:43:08
  from '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/ps_mainmenu/views/templates/admin/_configure/helpers/list/list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be9593c6db8a9_51173944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '340931930a0876b0dc1410f679afa165d01aab4d' => 
    array (
      0 => '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/ps_mainmenu/views/templates/admin/_configure/helpers/list/list_content.tpl',
      1 => 1542012882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be9593c6db8a9_51173944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8003413345be9593c6d7b00_06900295', "td_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_content.tpl");
}
/* {block "td_content"} */
class Block_8003413345be9593c6d7b00_06900295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'td_content' => 
  array (
    0 => 'Block_8003413345be9593c6d7b00_06900295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (isset($_smarty_tpl->tpl_vars['params']->value['type']) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'link') {?>
		<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'html','UTF-8' ));?>
" target="_blank"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'html','UTF-8' ));?>
</a>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "td_content"} */
}
