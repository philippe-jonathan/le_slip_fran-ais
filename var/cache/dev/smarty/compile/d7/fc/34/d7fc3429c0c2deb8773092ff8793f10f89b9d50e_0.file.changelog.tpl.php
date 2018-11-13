<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:22:17
  from '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/medgtranslate/views/templates/admin/changelog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaec297075d6_10888336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7fc3429c0c2deb8773092ff8793f10f89b9d50e' => 
    array (
      0 => '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/medgtranslate/views/templates/admin/changelog.tpl',
      1 => 1542122532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beaec297075d6_10888336 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="medChangelog">

    <ps-panel header="1.1.0 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>'2018-04-16','full'=>0),$_smarty_tpl ) );?>
">

        <ul>
            <li>Reordering the code to fix a Chrome bug</li>
        </ul>

    </ps-panel>

    <ps-panel header="1.0.0 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>'2018-04-05','full'=>0),$_smarty_tpl ) );?>
">

        <ul>
            <li>Initial commit</li>
        </ul>

    </ps-panel>

</div>
<?php }
}
