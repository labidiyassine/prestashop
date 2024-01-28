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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig */
class __TwigTemplate_a79db3610fb7fd8a606629ec7122fa9f413dce5c87b5371471097f734c131182 extends \Twig\Template
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
        // line 25
        echo "
<div class=\"card\">
  <div class=\"card-block\">
    <nav>
      <ol class=\"breadcrumb\">";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentCategoryView"] ?? null), "breadcrumb_tree", []));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 31
            echo "          <li class=\"breadcrumb-item\">";
            // line 32
            if ((($this->getAttribute($context["category"], "id_parent", []) == 0) && ($context["isSingleShopContext"] ?? null))) {
                // line 33
                if (($this->getAttribute($context["category"], "id_category", []) == $this->getAttribute(($context["currentCategoryView"] ?? null), "id", []))) {
                    // line 34
                    echo "                <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                    echo "</span>
                <a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_edit", ["categoryId" => $this->getAttribute($context["category"], "id_category", [])]), "html", null, true);
                    echo "\">
                  <i style=\"font-size: 16px;\" class=\"material-icons\">edit</i>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                    echo "
                </a>";
                } else {
                    // line 40
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_index");
                    echo "\">";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                    echo "
                </a>";
                }
            } elseif (($this->getAttribute(            // line 44
$context["category"], "id_category", []) == $this->getAttribute(($context["currentCategoryView"] ?? null), "id", []))) {
                // line 45
                echo "              <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                echo "</span>
              <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_edit", ["categoryId" => $this->getAttribute($context["category"], "id_category", [])]), "html", null, true);
                echo "\">
                <i style=\"font-size: 16px;\" class=\"material-icons\">edit</i>";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                echo "
              </a>";
            } else {
                // line 51
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_index", ["categoryId" => $this->getAttribute($context["category"], "id_category", [])]), "html", null, true);
                echo "\">";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                echo "
              </a>";
            }
            // line 55
            echo "          </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "      </ol>
    </nav>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 57,  94 => 55,  89 => 52,  85 => 51,  80 => 48,  76 => 46,  71 => 45,  69 => 44,  64 => 41,  60 => 40,  55 => 37,  51 => 35,  46 => 34,  44 => 33,  42 => 32,  40 => 31,  36 => 30,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig", "C:\\xampp\\htdocs\\PRESTA\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Categories\\Blocks\\breadcrumb.html.twig");
    }
}
