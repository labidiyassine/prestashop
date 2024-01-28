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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig */
class __TwigTemplate_4d482e33a31d0966dcf93be99ee292878bb072eaa3aabdafc8a9b9ea13eb92bd extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "with_bulk_field", [])) {
            // line 27
            echo "  <div class=\"md-checkbox d-inline-block\">
    <label>
      <input type=\"checkbox\"
             title=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? null), "name", []), "html", null, true);
            echo "\"
             class=\"js-bulk-action-checkbox\"
             name=\"";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["grid"] ?? null), "id", []) . "_") . $this->getAttribute(($context["column"] ?? null), "id", [])), "html", null, true);
            echo "[]\"
             value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "bulk_field", []), [], "array"), "html", null, true);
            echo "\"
      >
      <i class=\"md-checkbox-control\"></i>
    </label>
  </div>";
        }
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "identifier_field", []), [], "array"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 40,  46 => 33,  42 => 32,  37 => 30,  32 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig", "C:\\xampp\\htdocs\\PRESTA\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\identifier.html.twig");
    }
}
