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

/* @PrestaShop/Admin/Common/Grid/Actions/Row/delete_category.html.twig */
class __TwigTemplate_3713b5e1ba984c8b1163bfe4bf46f2130b41afd9305cf17baac77bc356d4f283 extends \Twig\Template
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
        $context["class"] = "btn tooltip-link js-delete-category-row-action";
        // line 28
        if ($this->getAttribute(($context["attributes"] ?? null), "class", [], "any", true, true)) {
            // line 29
            $context["class"] = ((($context["class"] ?? null) . " ") . $this->getAttribute(($context["attributes"] ?? null), "class", []));
        }
        // line 31
        echo "
<a class=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\"
   href=\"#\"
   data-category-id=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "category_id_field", []), [], "array"), "html", null, true);
        echo "\"
   data-category-delete-url=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "category_delete_route", []));
        echo "\"";
        // line 36
        if ($this->getAttribute(($context["attributes"] ?? null), "tooltip_name", [])) {
            // line 37
            echo "     data-toggle=\"pstooltip\"
     data-placement=\"top\"
     data-original-title=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", []), "html", null, true);
            echo "\"";
        }
        // line 41
        echo ">";
        // line 42
        if ( !twig_test_empty($this->getAttribute(($context["action"] ?? null), "icon", []))) {
            // line 43
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "icon", []), "html", null, true);
            echo "</i>";
        }
        // line 45
        if ( !$this->getAttribute(($context["attributes"] ?? null), "tooltip_name", [])) {
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", []), "html", null, true);
        }
        // line 48
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/delete_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 48,  73 => 46,  71 => 45,  66 => 43,  64 => 42,  62 => 41,  58 => 39,  54 => 37,  52 => 36,  49 => 35,  45 => 34,  40 => 32,  37 => 31,  34 => 29,  32 => 28,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Row/delete_category.html.twig", "C:\\xampp\\htdocs\\PRESTA\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Actions\\Row\\delete_category.html.twig");
    }
}
