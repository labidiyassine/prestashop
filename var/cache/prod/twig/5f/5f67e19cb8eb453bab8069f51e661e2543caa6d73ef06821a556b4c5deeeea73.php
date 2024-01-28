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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/listing_panel_footer.html.twig */
class __TwigTemplate_8da920be9e5a8fb9a0d9887be4ea046bb33fafc631ca58cc4203a0aaf3a5f996 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "query", []), "has", [0 => "id_category"], "method") &&  !$this->getAttribute(($context["currentCategoryView"] ?? null), "is_home_category", []))) {
            // line 27
            if ($this->getAttribute(($context["currentCategoryView"] ?? null), "id_parent", [])) {
                // line 28
                $context["params"] = ["id_category" => $this->getAttribute(($context["currentCategoryView"] ?? null), "id_parent", [])];
            }
            // line 30
            echo "
  <div class=\"card-footer\">
    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_index", (((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([]))), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
      <i class=\"material-icons\">arrow_back</i>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to list", [], "Admin.Actions"), "html", null, true);
            echo "
    </a>
  </div>";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/listing_panel_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 34,  41 => 32,  37 => 30,  34 => 28,  32 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/listing_panel_footer.html.twig", "C:\\xampp\\htdocs\\PRESTA\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Categories\\Blocks\\listing_panel_footer.html.twig");
    }
}
