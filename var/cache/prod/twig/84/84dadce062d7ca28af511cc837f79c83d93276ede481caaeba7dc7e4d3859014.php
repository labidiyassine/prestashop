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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/thumbnail_image.html.twig */
class __TwigTemplate_e7e9d6566594a4014c2ebeb8d17f114a4a868dc74894d2fd04877ed4849b8cd7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'category_thumbnail_image' => [$this, 'block_category_thumbnail_image'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->displayBlock('category_thumbnail_image', $context, $blocks);
    }

    public function block_category_thumbnail_image($context, array $blocks = [])
    {
        // line 27
        if (((isset($context["thumbnailImage"]) || array_key_exists("thumbnailImage", $context)) &&  !(null === ($context["thumbnailImage"] ?? null)))) {
            // line 28
            echo "    <div>
      <figure class=\"figure\">
        <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thumbnailImage"] ?? null), "path", []), "html", null, true);
            echo "\" class=\"figure-img img-fluid img-thumbnail\">
        <figcaption class=\"figure-caption\">";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thumbnailImage"] ?? null), "size", []), "html", null, true);
            echo "</figcaption>
      </figure>
    </div>";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/thumbnail_image.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 31,  43 => 30,  39 => 28,  37 => 27,  31 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/thumbnail_image.html.twig", "C:\\xampp\\htdocs\\PRESTA\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Categories\\Blocks\\thumbnail_image.html.twig");
    }
}