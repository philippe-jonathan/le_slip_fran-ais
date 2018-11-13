<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:22:17
  from '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/medgtranslate/libraries/prestui/ps-tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaec29718570_12705549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80341776deec92bfb637a6731e483a45fb4e106e' => 
    array (
      0 => '/home/philippe/Documents/Simplon/public/prestashop_1.7.4.4/modules/medgtranslate/libraries/prestui/ps-tabs.tpl',
      1 => 1542122532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beaec29718570_12705549 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="riot/tag">

    <ps-tab>

        <ps-panel if={ opts.panel != 'false' } icon="{ this.icon }"  header="{ this.header }" img="{ opts.img }" fa="{ opts.fa }">
            <yield/>
        </ps-panel>

        <div if={ opts.panel == 'false' }>
            <yield />
        </div>

        <?php if ($_smarty_tpl->tpl_vars['ps_version']->value >= 1.6) {?>

            <style scoped>

                .panel {
                    border-top-left-radius: 0 !important;
                    border-top-right-radius: 0 !important;
                }

            </style>

        <?php } else { ?>

            <style scoped>

                :scope {
                    display: none;
                }

                :scope.active {
                    display: block;
                }

            </style>

        <?php }?>

        if (this.parent && this.parent.opts.position != 'top') {
            this.header = opts.label;
            this.icon = opts.icon;
        }
        $(this.root).addClass('tab-pane')
        if (this.opts.active == 'true')
            $(this.root).addClass('active')

    </ps-tab>

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="riot/tag">

  <ps-tabs>

        <?php if ($_smarty_tpl->tpl_vars['ps_version']->value >= 1.6) {?>

            <div class="row">

                <div class="{ col-md-2: this.opts.position == 'left', col-md-12: this.opts.position != 'left' }">
                    <ul class="{ nav: true, list-group: this.opts.position == 'left', nav-tabs: this.opts.position != 'left' }">
                        <li class="{ list-group-item: this.parent.opts.position == 'left', active: tab.opts.active == 'true' }" each={ tab in this.tabs }>
                            <a href="#{ tab.opts.id }" data-toggle="tab"><i class="{ tab.opts.icon }" if={ tab.opts.icon }></i> { tab.opts.label } <span if={ tab.opts.badge } class="badge pull-right">{ tab.opts.badge }</span></a>
                        </li>
                    </ul>
                </div>

                <div class="{ tab-content: true, col-md-10: this.opts.position == 'left', col-md-12: this.opts.position != 'left' }">
                    <yield/>
                </div>

                <div class="clearfix"></div>
            </div>

        <?php } else { ?>

            <div class="tabs-container">

                <ul class="{ tabs-navigation: true, tabs-navigation-left: this.opts.position == 'left', tabs-navigation-top: this.opts.position != 'left' }">
                        <li each={ tab in this.tabs } class={ active: tab.opts.active == 'true' }>
                            <a href="#{ tab.opts.id }" onclick={ changeTab }>
                            <img src="{ tab.opts.img }" if={ !tab.opts.fa } /><i class="fa fa-{ tab.opts.fa }" if={ tab.opts.fa }></i> { tab.opts.label } <span if={ tab.opts.badge } class="badge pull-right">{ tab.opts.badge }</span>
                            </a>
                        </li>
                </ul>

                <div class="{ tabs-content: true, tabs-content-left: this.opts.position == 'left', tabs-content-top: this.opts.position != 'left' }">
                    <yield/>
                </div>

                <div class="clearfix"></div>

            </div>

        <?php }?>

        this.on('mount', function() {
            this.tabs = this.tags['ps-tab'];
            this.update();
        })

        // Only PS 1.5
        changeTab(event) {
            // Change active tab
            $(this.root).find('> .tabs-container > ul > li.active').removeClass('active')
            $(event.target).closest('li').addClass('active')

            // Change active tab content
            $(this.root).find('> .tabs-container > .tabs-content > .active').removeClass('active')
            id_target = $(event.target).closest('a').attr('href')
            $(this.root).find('> .tabs-container > .tabs-content > ' + id_target).addClass('active')

            event.preventDefault();

            return false
        }

        <?php if ($_smarty_tpl->tpl_vars['ps_version']->value >= 1.6) {?>

            <style scoped>

                li.list-group-item {
                    padding: 0 !important;
                }

                li.list-group-item a {
                    color: #555;
                }

                li.list-group-item:hover {
                    background-color: #f5f5f5;
                }

                li.list-group-item.active a {
                    color: white;
                }

                .nav.list-group li a {
                    text-overflow: ellipsis;
                    white-space: nowrap;
                    overflow: hidden;
                }

                .nav li a .badge {
                    margin-top: -3px;
                    margin-left: 5px;
                }

                .nav.list-group li a .badge {
                    position: absolute;
                    right: 8px;
                    top: 12px;
                }

            </style>

        <?php } else { ?>

            <style scoped>

                .tabs-container {
                    margin: 20px 0;
                }

                .tabs-content-left {
                    margin-left: 200px;
                }

                .tabs-navigation li {
                    background: #fafafa;
                }

                .tabs-navigation li:hover {
                    background: #F1F3F9;
                }

                .tabs-navigation li a {
                    color: #666;
                    cursor: pointer;
                    padding: 10px 15px;
                    display: block;
                    line-height: 18px;
                }

                .tabs-navigation li a img {
                    margin-top: -4px;
                    max-width: 16px;
                    max-height: 16px;
                }

                .tabs-navigation li a .badge {
                    background: #EBEDF4;
                    border: 1px solid #EBEDF4;
                    padding: 2px 5px;
                    margin-top: -3px;
                    margin-right: -5px;
                    float: right;
                    margin-left: 10px;
                }

                .tabs-navigation li.active {
                    background: #EBEDF4;
                }

                .tabs-navigation li.active a {
                    color: black;
                    font-weight: bold;
                }

                .tabs-navigation li.active a .badge {
                    border-color: #CCCED7;
                    background: #fafafa;
                }

                .tabs-navigation.tabs-navigation-top {
                    margin-bottom: -1px;
                }

                .tabs-navigation.tabs-navigation-top li {
                    border: 1px solid #CCCED7;
                    border-right: none;
                    display: inline-block;
                }

                .tabs-navigation.tabs-navigation-top li.active {
                    border-bottom: 1px solid #EBEDF4;
                }

                .tabs-navigation.tabs-navigation-top li:last-child {
                    border-right: 1px solid #CCCED7;
                }

                .tabs-navigation.tabs-navigation-left {
                    float: left;
                    border: 1px solid #CCCED7;
                    width: 180px;
                    margin-top: 11px;
                }

                .tabs-navigation.tabs-navigation-left li {
                    border-bottom: 1px solid #CCCED7;
                }

                .tabs-navigation.tabs-navigation-left li:last-child {
                    border-bottom: none;
                }

                .tabs-navigation.tabs-navigation-left li a {
                    text-overflow: ellipsis;
                    white-space: nowrap;
                    overflow: hidden;
                    position: relative;
                }

                .tabs-navigation.tabs-navigation-left li a .badge {
                    float: none;
                    position: absolute;
                    right: 12px;
                    top: 10px;
                }

            </style>

        <?php }?>

  </ps-tabs>

<?php echo '</script'; ?>
>
<?php }
}
