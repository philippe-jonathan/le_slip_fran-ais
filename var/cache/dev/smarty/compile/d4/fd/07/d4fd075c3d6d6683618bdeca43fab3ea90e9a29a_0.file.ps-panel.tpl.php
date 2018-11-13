<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:22:17
  from '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/medgtranslate/libraries/prestui/ps-panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaec297230f0_49829590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4fd075c3d6d6683618bdeca43fab3ea90e9a29a' => 
    array (
      0 => '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/medgtranslate/libraries/prestui/ps-panel.tpl',
      1 => 1542122532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beaec297230f0_49829590 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="riot/tag">
    <ps-panel-footer>
        <div class="panel-footer">
            <yield/>
        </div>

        <style scoped>

            <?php if ($_smarty_tpl->tpl_vars['ps_version']->value >= 1.6) {?>

                .btn.pull-right {
                    margin-left: 5px;
                }
                .btn.pull-left {
                    margin-right: 5px;
                }

                a.btn i {
                    display: block;
                    width: 30px;
                    height: 30px;
                    margin: 0 auto;
                    font-size: 28px;
                    background: transparent;
                    background-size: 26px;
                    background-position: center
                }

            <?php } else { ?>

                .panel-footer {
                    margin: 20px -13px 0px;
                    background: rgba(182, 182, 182, 0.1);
                    display: block;
                    border-top: 1px solid rgba(160, 160, 160, 0.19);
                    height: 80px;
                    position: relative;
                    bottom: -13px;
                }

                .btn {
                    margin: 0;
                    background: none;
                    border: none;
                    padding: 0 20px;
                    outline: none;
                    cursor: pointer;
                    font-size: 11px;
                    text-align: center;
                    height: 100%;
                    line-height: normal;
                }

                .btn.pull-right {
                    border-left: 1px solid rgba(160, 160, 160, 0.19);
                    float: right;
                }

                .btn.pull-left {
                    border-right: 1px solid rgba(160, 160, 160, 0.19);
                    float: left;
                }

                .btn:hover {
                    background: rgba(182, 182, 182, 0.1);
                }

                .btn img {
                    display: block;
                    padding: 0;
                    margin-bottom: 5px;
                    margin-left: auto;
                    margin-right: auto;
                }

            <?php }?>

        </style>
    </ps-panel-footer>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="riot/tag">
    <ps-panel-footer-submit>

        <?php if ($_smarty_tpl->tpl_vars['ps_version']->value >= 1.6) {?>

            <button type="submit" class="btn btn-default pull-{ opts.direction }" name="{ opts.name }">
                <i class="{ opts.icon }"></i> { opts.title }
            </button>

        <?php } else { ?>

            <button type="submit" class="btn pull-{ opts.direction }" name="{ opts.name }">
                <img src="{ opts.img }" if={ !opts.fa } /><i class="fa fa-{ opts.fa }" if={ opts.fa }></i> { opts.title }
            </button>

            <style scoped>

                button i.fa {
                    display: block;
                    font-size: 2.5em;
                    margin-bottom: 5px;
                    color: #585a69;
                }

            </style>

        <?php }?>

    </ps-panel-footer-submit>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="riot/tag">
    <ps-panel-footer-link>

        <?php if ($_smarty_tpl->tpl_vars['ps_version']->value >= 1.6) {?>

            <a class="btn btn-default pull-{ opts.direction }" href="{ opts.href }" target="{ opts.newTab == 'true' ? '_blank' : '' }">
                <i class="{ opts.icon }"></i> { opts.title }
            </a>

        <?php } else { ?>

            <a class="btn pull-{ opts.direction }" href="{ opts.href }" target="{ opts.newTab == 'true' ? '_blank' : '' }">
                <img src="{ opts.img }" if={ !opts.fa } /><i class="fa fa-{ opts.fa }" if={ opts.fa }></i> { opts.title }
            </a>

            <style scoped>

                a img {
                    margin-top: 15px;
                }

                a i.fa {
                    display: block;
                    font-size: 2.5em;
                    margin-bottom: 5px;
                    color: #585a69;
                    margin-top: 18px;
                }

            </style>

        <?php }?>

    </ps-panel-footer-link>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="riot/tag">
    <ps-panel>

        <?php if ($_smarty_tpl->tpl_vars['ps_version']->value >= 1.6) {?>

            <div class="panel">
                <div class="panel-heading" if={ opts.icon || opts.header }>
                        <i class="{ opts.icon }" if={ opts.icon }></i> { opts.header }
                </div>

                <yield/>

            </div>

        <?php } else { ?>

            <fieldset>
                <legend if={ opts.header }>
                    <img src="{ opts.img }" if={ !opts.fa } /><i class="fa fa-{ opts.fa }" if={ opts.fa }></i> { opts.header }
                </legend>

                <yield/>

            </fieldset>

            <style scoped>

                fieldset {
                    margin-bottom: 20px;
                    margin-left: auto;
                    margin-right: auto;
                }

            </style>

        <?php }?>

    </ps-panel>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="riot/tag">
    <ps-panel-divider>

        <?php if ($_smarty_tpl->tpl_vars['ps_version']->value >= 1.6) {?>
            <hr/>
        <?php } else { ?>
            <div class="separation"></div>
        <?php }?>

    </ps-panel-divider>
<?php echo '</script'; ?>
>
<?php }
}
