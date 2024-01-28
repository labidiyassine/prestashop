<?php
/* Smarty version 3.1.33, created on 2024-01-28 21:05:46
  from 'C:\xampp\htdocs\PRESTA\themes\classic\templates\checkout\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_65b6b39ae7c2e3_52298225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '471f03c9d01a1fdf68b55f1c0cc29f394fa766e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PRESTA\\themes\\classic\\templates\\checkout\\_partials\\footer.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b6b39ae7c2e3_52298225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61728709765b6b39ae7acf1_91922371', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_61728709765b6b39ae7acf1_91922371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_61728709765b6b39ae7acf1_91922371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
