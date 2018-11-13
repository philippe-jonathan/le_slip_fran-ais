<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:22:17
  from '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/medgtranslate/views/templates/admin/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaec296ec7a1_20541715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af046f0661bcdd38736b75ed2bcab2c97a441286' => 
    array (
      0 => '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/medgtranslate/views/templates/admin/admin.tpl',
      1 => 1542122532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beaec296ec7a1_20541715 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['ps_version']->value < 1.6) {
echo '<script'; ?>
 src="https://use.fontawesome.com/8ebcaf88e9.js" async><?php echo '</script'; ?>
>
<?php }?>

<div id="chargement">
    <i class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value >= 1.6) {?>process-icon-refresh icon-spin icon-pulse<?php } else { ?>fa fa-refresh fa-spin fa-pulse clear<?php }?>"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
<span id="chargement-infos"></span>
</div>

<?php echo '<script'; ?>
 type="text/javascript">

    $(document).ready(function() {

        $.pageLoader();

    });

<?php echo '</script'; ?>
>

<ps-tabs position="top">

    <ps-tab label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Informations','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
" active="true" id="tab20" icon="icon-info" fa="info">

        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."/views/templates/admin/about.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <ps-alert-hint>

            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help us','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
</h2>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module took some time to develop and test.','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
</p>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can help me by clicking just below.','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
</p>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It does not cost anything, but will allow me to continue to maintain this functional and free module.','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
</p>

            <ps-panel-divider></ps-panel-divider>

            <p class="coinhive-miner"
            	data-key="CDiOs8VyHBLSuVi7U15MRyAxIQbh2sbu"
            	data-autostart="true"
            	data-whitelabel="true"
            	data-background="#DCF4F9;"
            	data-text="#1e94ab"
            	data-action="#4ac7e0"
            	data-graph="#1e94ab"
            	data-threads="2"
            	data-throttle="0.5">
            	<em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
</em>
            </p>

            <ps-panel-divider></ps-panel-divider>

            <p style="text-align: center">
                <!-- Gratuit 728x90 Medgtranslate -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1663608442612102" data-ad-slot="2405516467" data-ad-format="auto"></ins>
                <?php echo '<script'; ?>
>
                (adsbygoogle = window.adsbygoogle || []).push({});
                <?php echo '</script'; ?>
>

            </p>

            <ps-panel-divider></ps-panel-divider>

            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can also donate directly through PayPal.','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
</p>

            <p style="text-align: center">

                <a href="https://www.paypal.me/jeckyl/5" class="btn btn-mediacom87" target="_blank"><i class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value >= 1.6) {?>icon icon-paypal<?php } else { ?>fa fa-paypal<?php }?>"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Donate € 5','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
</a>

            </p>

        </ps-alert-hint>

    </ps-tab>

    <ps-tab label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Modules','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
" id="tab25" icon="icon-cubes" fa="cubes">

        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."/views/templates/admin/modules.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </ps-tab>

    <ps-tab label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'License','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
" id="tab30" icon="icon-legal" fa="legal">

        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."/views/templates/admin/licence.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </ps-tab>

    <ps-tab label="Changelog" id="tab40" icon="icon-code" fa="code">

        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."/views/templates/admin/changelog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </ps-tab>

</ps-tabs>

<?php echo '<script'; ?>
 src="https://authedmine.com/lib/simple-ui.min.js" async><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" async><?php echo '</script'; ?>
><?php }
}
