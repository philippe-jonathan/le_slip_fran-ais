<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:23:03
  from '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/medgtranslate/views/templates/hook/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaec57b5cd68_52841636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac3576ae45650b6d248a1d4d2d186ca906f75b60' => 
    array (
      0 => '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/medgtranslate/views/templates/hook/footer.tpl',
      1 => 1542122532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beaec57b5cd68_52841636 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="clearBoth col-xs-12 col-sm-2">
    <div id="google_translate_element"></div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: '<?php if (isset($_smarty_tpl->tpl_vars['lang_iso']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');
}?>', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
<?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"><?php echo '</script'; ?>
>
<?php }
}
