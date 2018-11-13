<?php
/* Smarty version 3.1.33, created on 2018-11-12 12:05:53
  from '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/admin638rn6s3s/themes/new-theme/template/components/layout/information_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be95e915e8e36_23505980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bad0ec4c93529533e469eb955094f87f6477e23' => 
    array (
      0 => '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/admin638rn6s3s/themes/new-theme/template/components/layout/information_messages.tpl',
      1 => 1542012881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be95e915e8e36_23505980 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['informations']->value) && count($_smarty_tpl->tpl_vars['informations']->value) && $_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
}
