<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Catalog/Categories/create.html.twig */
class __TwigTemplate_0d4fdfed259ea66f1426f70e4050c47b3c3aab5985a34084ee32dd3d5654cba7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 28
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/create.html.twig", 28);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new", [], "Admin.Actions");
        // line 28
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        // line 31
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col\">";
        // line 33
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/create.html.twig", 33)->display($context);
        // line 34
        echo "    </div>
  </div>";
    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        // line 39
        $this->displayParentBlock("javascripts", $context, $blocks);
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/javascripts.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/create.html.twig", 41)->display($context);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 41,  59 => 39,  56 => 38,  51 => 34,  49 => 33,  46 => 31,  43 => 30,  39 => 28,  37 => 26,  22 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/create.html.twig", "C:\\xampp\\htdocs\\PRESTA\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Categories\\create.html.twig");
    }
}
