<?php
/* Smarty version 3.1.33, created on 2024-01-28 22:29:30
  from 'C:\xampp\htdocs\PRESTA\modules\subcategory\views\templates\hook\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_65b6c73abbe427_33146701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6a8bafbf2c6150cb4288b6f4e6977e67f10c4c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PRESTA\\modules\\subcategory\\views\\templates\\hook\\slider.tpl',
      1 => 1706382887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b6c73abbe427_33146701 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<?php echo '<script'; ?>
 src="https://unpkg.com/swiper@8/swiper-bundle.min.js"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['subcategories']->value) {?>
    <style>
        .swiper-container {
            width: 100%;
            overflow: hidden;
        }

        .swiper-wrapper {
            display: flex;
        }

        .swiper-slide {
            width: 100px; 
            height: 100px; 
            margin: 10px 50px; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 50px; 
        }

        .swiper-slide img {
            border-radius: 50%; 
            object-fit: cover; 
            width: 100%;
            height: 100%;
            border: 3px solid #D3D3D3; 
        }

        .swiper-slide .subcategory-name {
            margin-top: 5px;
            margin-bottom: 5px; 
        }

        .swiper-slide .product-count {
            font-size: 12px;
            color: #666;
        }
    </style>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
?>
                <div class="swiper-slide">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                    <div class="subcategory-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
                    <div style="margin-bottom:50px" class="product-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['productCount'], ENT_QUOTES, 'UTF-8');?>
 products</div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <?php echo '<script'; ?>
>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            spaceBetween: 10, /* Adjust the space between slides */
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
        delay: 2000, // Delay between each slide in milliseconds
        disableOnInteraction: false, 
    }
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
