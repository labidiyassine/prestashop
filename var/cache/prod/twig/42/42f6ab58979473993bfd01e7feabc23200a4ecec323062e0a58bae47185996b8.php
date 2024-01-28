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

/* @PrestaShop/Admin/TwigTemplateForm/material.html.twig */
class __TwigTemplate_8cf00afec2e0dbb35e94b532f76dc87b389b949b8e5bb531980b99d04c8af881 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'material_choice_tree_widget' => [$this, 'block_material_choice_tree_widget'],
            'material_choice_tree_item_widget' => [$this, 'block_material_choice_tree_item_widget'],
            'material_choice_tree_item_checkbox_widget' => [$this, 'block_material_choice_tree_item_checkbox_widget'],
            'material_choice_tree_item_radio_widget' => [$this, 'block_material_choice_tree_item_radio_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->displayBlock('material_choice_tree_widget', $context, $blocks);
        // line 49
        $this->displayBlock('material_choice_tree_item_widget', $context, $blocks);
        // line 70
        $this->displayBlock('material_choice_tree_item_checkbox_widget', $context, $blocks);
        // line 89
        $this->displayBlock('material_choice_tree_item_radio_widget', $context, $blocks);
    }

    // line 26
    public function block_material_choice_tree_widget($context, array $blocks = [])
    {
        // line 27
        echo "<div class=\"material-choice-tree-container js-choice-tree-container\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
  <div class=\"choice-tree-actions\">
    <span class=\"form-control-label js-toggle-choice-tree-action\"
          data-expanded-text=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "\"
          data-expanded-icon=\"expand_more\"
          data-collapsed-text=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        echo "\"
          data-collapsed-icon=\"expand_less\"
          data-action=\"expand\"
    >
      <i class=\"material-icons\">expand_more</i>
      <span class=\"js-toggle-text\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "</span>
    </span>
  </div>

  <ul class=\"choice-tree\">";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices_tree"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 43
            $this->displayBlock("material_choice_tree_item_widget", $context, $blocks);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  </ul>
</div>";
    }

    // line 49
    public function block_material_choice_tree_item_widget($context, array $blocks = [])
    {
        // line 50
        $context["has_children"] = $this->getAttribute(($context["choice"] ?? null), ($context["choice_children"] ?? null), [], "array", true, true);
        // line 51
        echo "
  <li class=\"";
        // line 52
        if ($this->getAttribute(($context["choice"] ?? null), "has_selected_children", [])) {
            echo "expanded";
        } elseif (($context["has_children"] ?? null)) {
            echo "collapsed";
        }
        echo "\">";
        // line 53
        if (($context["multiple"] ?? null)) {
            // line 54
            $this->displayBlock("material_choice_tree_item_checkbox_widget", $context, $blocks);
        } else {
            // line 56
            $this->displayBlock("material_choice_tree_item_radio_widget", $context, $blocks);
        }
        // line 59
        if (($context["has_children"] ?? null)) {
            // line 60
            echo "      <ul>";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["choice"] ?? null), ($context["choice_children"] ?? null), [], "array"));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 62
                $context["choice"] = $context["item"];
                // line 63
                $this->displayBlock("material_choice_tree_item_widget", $context, $blocks);
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "      </ul>";
        }
        // line 67
        echo "  </li>";
    }

    // line 70
    public function block_material_choice_tree_item_checkbox_widget($context, array $blocks = [])
    {
        // line 71
        echo "  <div class=\"checkbox js-input-wrapper\">
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        <input type=\"checkbox\"";
        // line 75
        if ( !(null === $this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"))) {
            // line 76
            echo "                 name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
            echo "[]\"
                 value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), "html", null, true);
            echo "\"";
            // line 78
            if (twig_in_filter($this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), ($context["selected_values"] ?? null))) {
                echo "checked";
            }
        }
        // line 80
        if ((($context["disabled"] ?? null) || twig_in_filter($this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), ($context["disabled_values"] ?? null)))) {
            echo "disabled";
        }
        // line 81
        echo "        >
        <i class=\"md-checkbox-control\"></i>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["choice"] ?? null), ($context["choice_label"] ?? null), [], "array"), "html", null, true);
        echo "
      </label>
    </div>
  </div>";
    }

    // line 89
    public function block_material_choice_tree_item_radio_widget($context, array $blocks = [])
    {
        // line 90
        echo "  <div class=\"radio js-input-wrapper\">
    <label>
      <input type=\"radio\"
             name=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
        echo "\"
             value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), "html", null, true);
        echo "\"";
        // line 95
        if (twig_in_filter($this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), ($context["selected_values"] ?? null))) {
            echo "checked";
        }
        // line 96
        if ((($context["disabled"] ?? null) || twig_in_filter($this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), ($context["disabled_values"] ?? null)))) {
            echo "disabled";
        }
        // line 97
        echo "      >";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["choice"] ?? null), ($context["choice_label"] ?? null), [], "array"), "html", null, true);
        echo "
    </label>
  </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/material.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  240 => 98,  238 => 97,  234 => 96,  230 => 95,  227 => 94,  223 => 93,  218 => 90,  215 => 89,  207 => 83,  204 => 81,  200 => 80,  195 => 78,  192 => 77,  187 => 76,  185 => 75,  180 => 71,  177 => 70,  173 => 67,  170 => 65,  156 => 63,  154 => 62,  137 => 61,  135 => 60,  133 => 59,  130 => 56,  127 => 54,  125 => 53,  118 => 52,  115 => 51,  113 => 50,  110 => 49,  105 => 45,  91 => 43,  74 => 42,  67 => 37,  59 => 32,  54 => 30,  47 => 27,  44 => 26,  40 => 89,  38 => 70,  36 => 49,  34 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "C:\\xampp\\htdocs\\PRESTA\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\material.html.twig");
    }
}
