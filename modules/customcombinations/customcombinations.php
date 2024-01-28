<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class CustomCombinations extends Module
{
    public function __construct()
    {
        $this->name = 'customcombinations';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Your Name';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Custom Combinations');
        $this->description = $this->l('Display specific product combinations on the category page.');
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayFooterProduct');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayFooterProduct($params)
    {
        $product = $params['product'];
        $combinations = $this->getProductCombinations($product['id_product']);
        $combinationColors = array();

        foreach ($combinations as $combination) {
            if (isset($combination['attribute_color'])) {
                $combinationColors[] = $combination['attribute_color'];
            }
        }

        $this->context->smarty->assign('combinationColors', $combinationColors);

        return $this->display(__FILE__, 'views/templates/hook/hookProductList.tpl');
    }

    private function getProductCombinations($productId)
    {
        $product = new Product($productId);
        $combinations = $product->getAttributesResume(Context::getContext()->language->id);

        return $combinations;
    }
}
