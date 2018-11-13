<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:22:17
  from '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/medgtranslate/views/templates/admin/modules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaec296fd986_50666405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3a0db2d2f4d3dc9b80d8dfac72d72084e5df45a' => 
    array (
      0 => '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/medgtranslate/views/templates/admin/modules.tpl',
      1 => 1542122532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beaec296fd986_50666405 (Smarty_Internal_Template $_smarty_tpl) {
?>

<ps-alert-hint class="medAddonsMarket">

    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you like this module?','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
</p>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get other ones directly on','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
</p>
    <p><a href="https://www.prestatoolbox.<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso_domain']->value,'htmlall','UTF-8' ));?>
/1_mediacom87?utm_source=module&utm_medium=cpc&utm_campaign=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'htmlall','UTF-8' ));?>
" target="_blank" title="PrestaToolBox Market Place"><img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
prestatoolbox.png" alt="PrestaToolBox Market Place" class="img-responsive" /></a></p>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or on','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
</p>
    <p><a href="https://addons.prestashop.com/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso_code']->value,'htmlall','UTF-8' ));?>
/2_community-developer?contributor=322" target="_blank" title="Prestashop Addons Market Place"><img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
prestashop-addons-logo.png" alt="Prestashop Addons Market Place" class="img-responsive" /></a></p>

</ps-alert-hint><?php }
}
