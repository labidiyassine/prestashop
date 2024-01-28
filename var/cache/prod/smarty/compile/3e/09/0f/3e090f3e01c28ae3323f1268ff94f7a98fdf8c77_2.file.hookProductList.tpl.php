<?php
/* Smarty version 3.1.33, created on 2024-01-28 22:33:46
  from 'C:\xampp\htdocs\PRESTA\modules\customcombinations\views\templates\hook\hookProductList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_65b6c83a4f56c2_78440663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e090f3e01c28ae3323f1268ff94f7a98fdf8c77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PRESTA\\modules\\customcombinations\\views\\templates\\hook\\hookProductList.tpl',
      1 => 1706469494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b6c83a4f56c2_78440663 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['combinationColors']->value) && !empty($_smarty_tpl->tpl_vars['combinationColors']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['combinationColors']->value, 'color');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
?>
        <div class="product-combination">
            <p>Color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
</p>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
