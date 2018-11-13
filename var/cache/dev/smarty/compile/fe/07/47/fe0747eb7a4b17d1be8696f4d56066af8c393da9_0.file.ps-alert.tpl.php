<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:22:17
  from '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/medgtranslate/libraries/prestui/ps-alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaec2974f8d3_79453359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe0747eb7a4b17d1be8696f4d56066af8c393da9' => 
    array (
      0 => '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/medgtranslate/libraries/prestui/ps-alert.tpl',
      1 => 1542122532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beaec2974f8d3_79453359 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="riot/tag">
	<ps-alert>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value >= 1.6) {?>

			<div class="alert { opts['alertClass'] }">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<yield/>
			</div>

		<?php } else { ?>

			<div class="{ opts['alertClass'] }">
				<yield/>
				<img class="close" alt="X" src="../img/admin/close.png" onclick={ hide }>
			</div>

			<style scoped>

				div {
					position: relative;
					padding-right: 25px !important;
				}

				img.close {
					margin: 0 !important;
					position: absolute;
					right: 10px;
					top: 15px;
					cursor: pointer;
				}

			</style>

			hide(e) {
				$(e.target).parent().hide()
			}

		<?php }?>

	</ps-alert>
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="riot/tag">
	<ps-alert-success>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 1.5) {?>conf<?php } else { ?>alert alert-success<?php }?>">
			<yield/>
		</ps-alert>

	</ps-alert-success>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="riot/tag">
	<ps-alert-error>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 1.5) {?>error<?php } else { ?>alert alert-danger<?php }?>">
			<yield/>
		</ps-alert>

	</ps-alert-error>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="riot/tag">
	<ps-alert-warn>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 1.5) {?>warn<?php } else { ?>alert alert-warning<?php }?>">
			<yield/>
		</ps-alert>

	</ps-alert-warn>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="riot/tag">
	<ps-alert-hint>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 1.5) {?>hint<?php } else { ?>alert alert-info<?php }?>">
			<yield/>
		</ps-alert>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 1.5) {?>

			<style scoped>
				.hint {
					display: block;
					margin: 0 0 10px 0;
				}
			</style>

		<?php }?>

	</ps-alert-hint>
<?php echo '</script'; ?>
>
<?php }
}
