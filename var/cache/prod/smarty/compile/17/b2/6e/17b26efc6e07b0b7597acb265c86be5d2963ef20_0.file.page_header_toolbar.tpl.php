<?php
/* Smarty version 3.1.33, created on 2024-01-28 21:33:10
  from 'C:\xampp\htdocs\PRESTA\admin904psibym\themes\new-theme\template\page_header_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_65b6ba069372b2_36018782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17b26efc6e07b0b7597acb265c86be5d2963ef20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PRESTA\\admin904psibym\\themes\\new-theme\\template\\page_header_toolbar.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b6ba069372b2_36018782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="header-toolbar">
  <div class="container-fluid">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28689162665b6ba06919d11_45274923', 'pageBreadcrumb');
?>


    <div class="title-row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122266012465b6ba0691d9d9_96045480', 'pageTitle');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22765744465b6ba06920e26_58572863', 'toolbarBox');
?>

    </div>
  </div>

  <?php if (isset($_smarty_tpl->tpl_vars['headerTabContent']->value) && $_smarty_tpl->tpl_vars['headerTabContent']->value) {?>
    <div class="page-head-tabs" id="head_tabs">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['headerTabContent']->value, 'tabContent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tabContent']->value) {
?>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['tabContent']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['current_tab_level']->value == 3) {?>
    <div class="page-head-tabs" id="head_tabs">
      <ul class="nav nav-pills">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'level_1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['level_1']->value) {
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['level_1']->value['sub_tabs'], 'level_2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['level_2']->value) {
?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['level_2']->value['sub_tabs'], 'level_3');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['level_3']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['level_3']->value['current']) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['level_3']->value['sub_tabs'], 'level_4');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['level_4']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['level_4']->value['active']) {?>
                  <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['level_4']->value['href'];?>
" id="subtab-<?php echo $_smarty_tpl->tpl_vars['level_4']->value['class_name'];?>
" class="nav-link tab <?php if ($_smarty_tpl->tpl_vars['level_4']->value['current']) {?>active current<?php }?>" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level_4']->value['id_tab'];?>
">
                      <?php echo $_smarty_tpl->tpl_vars['level_4']->value['name'];?>

                      <span class="notification-container">
                        <span class="notification-counter"></span>
                      </span>
                    </a>
                  </li>
                <?php }?>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  <?php }?>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayDashboardTop'),$_smarty_tpl ) );?>

</div>
<?php }
/* {block 'pageBreadcrumb'} */
class Block_28689162665b6ba06919d11_45274923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageBreadcrumb' => 
  array (
    0 => 'Block_28689162665b6ba06919d11_45274923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <nav aria-label="Breadcrumb">
        <ol class="breadcrumb">
          <?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name'] != '') {?>
            <li class="breadcrumb-item"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name'] ));?>
</li>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['name'] != '' && $_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name'] != $_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['name'] && $_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['href'] != '') {?>
            <li class="breadcrumb-item active">
              <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['href'] ));?>
" aria-current="page"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['name'] ));?>
</a>
            </li>
          <?php }?>
        </ol>
      </nav>
    <?php
}
}
/* {/block 'pageBreadcrumb'} */
/* {block 'pageTitle'} */
class Block_122266012465b6ba0691d9d9_96045480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_122266012465b6ba0691d9d9_96045480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1 class="title">
            <?php if (is_array($_smarty_tpl->tpl_vars['title']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( end($_smarty_tpl->tpl_vars['title']->value) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));
}?>
          </h1>
      <?php
}
}
/* {/block 'pageTitle'} */
/* {block 'toolbarBox'} */
class Block_22765744465b6ba06920e26_58572863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbarBox' => 
  array (
    0 => 'Block_22765744465b6ba06920e26_58572863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="toolbar-icons">
          <div class="wrapper">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayDashboardToolbarTopMenu'),$_smarty_tpl ) );?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toolbar_btn']->value, 'btn', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['btn']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['k']->value != 'back' && $_smarty_tpl->tpl_vars['k']->value != 'modules-list') {?>
                                <a
                  class="btn btn-primary <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['target']) && $_smarty_tpl->tpl_vars['btn']->value['target']) {?> _blank<?php }?> pointer"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['href'])) {?>
                  id="page-header-desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['imgclass'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['imgclass'] ));
} else {
echo $_smarty_tpl->tpl_vars['k']->value;
}?>"
                  href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['href'] ));?>
"<?php }?>
                  title="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['help'])) {
echo $_smarty_tpl->tpl_vars['btn']->value['help'];
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['desc'] ));
}?>"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js']) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?>
                  onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }
if (isset($_smarty_tpl->tpl_vars['btn']->value['modal_target']) && $_smarty_tpl->tpl_vars['btn']->value['modal_target']) {?>
                  data-target="<?php echo $_smarty_tpl->tpl_vars['btn']->value['modal_target'];?>
"
                  data-toggle="modal"<?php }
if (isset($_smarty_tpl->tpl_vars['btn']->value['help'])) {?>
                  data-toggle="pstooltip"
                  data-placement="bottom"<?php }?>
                >
                  <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="material-icons"><?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
</i><?php }?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['desc'] ));?>

                </a>
              <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list'])) {?>
                            <a
                class="btn btn-outline-secondary <?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['target']) && $_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['target']) {?> _blank<?php }?>"
                id="page-header-desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['imgclass'])) {
echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['imgclass'];
} else { ?>modules-list<?php }?>"
                <?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['href'])) {?>href="<?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['href'];?>
"<?php }?>
                title="<?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['desc'];?>
"
                <?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['js']) && $_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['js']) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['js'];?>
"<?php }?>
              >
                <?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['desc'];?>

              </a>
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['help_link']->value) && $_smarty_tpl->tpl_vars['help_link']->value != false) {?>

              <?php if ($_smarty_tpl->tpl_vars['enableSidebar']->value) {?>
                <a class="btn btn-outline-secondary btn-help btn-sidebar" href="#"
                   title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help'),$_smarty_tpl ) );?>
"
                   data-toggle="sidebar"
                   data-target="#right-sidebar"
                   data-url="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['help_link']->value ));?>
"
                   id="product_form_open_help"
                >
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help'),$_smarty_tpl ) );?>

                </a>
              <?php } else { ?>
                <a class="btn btn-outline-secondary" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['help_link']->value ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help'),$_smarty_tpl ) );?>
">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help'),$_smarty_tpl ) );?>

                </a>
              <?php }?>
            <?php }?>
          </div>
        </div>
      <?php
}
}
/* {/block 'toolbarBox'} */
}
