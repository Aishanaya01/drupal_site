<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @organisms/grid/grid.twig */
class __TwigTemplate_94889a371e3eefbf109ea1c6ff2a7531cbd0989a050dd600d175c0637be6688b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'grid_content' => [$this, 'block_grid_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["grid_base_class"] = ((array_key_exists("grid_base_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["grid_base_class"] ?? null), 1, $this->source), "grid")) : ("grid"));
        // line 2
        echo "
";
        // line 3
        if ( !($context["grid_modifiers"] ?? null)) {
            // line 4
            echo "  ";
            $context["grid_modifiers"] = [];
        }
        // line 6
        echo "
";
        // line 7
        if (($context["page_layout_modifier"] ?? null)) {
            // line 8
            echo "  ";
            $context["grid_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["grid_modifiers"] ?? null), 8, $this->source), [0 => ($context["page_layout_modifier"] ?? null)]);
        }
        // line 10
        echo "
";
        // line 11
        if (($context["grid_type"] ?? null)) {
            // line 12
            echo "  ";
            $context["grid_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["grid_modifiers"] ?? null), 12, $this->source), [0 => ($context["grid_type"] ?? null)]);
        }
        // line 14
        echo "
";
        // line 15
        if (($context["grid_label"] ?? null)) {
            // line 16
            echo "  ";
            $this->loadTemplate("@atoms/text/headings/_heading.twig", "@organisms/grid/grid.twig", 16)->display(twig_array_merge($context, ["heading_level" => 2, "heading" =>             // line 18
($context["grid_label"] ?? null)]));
        }
        // line 21
        echo "<div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, $this->sandbox->ensureToStringAllowed(($context["grid_base_class"] ?? null), 21, $this->source), $this->sandbox->ensureToStringAllowed(($context["grid_modifiers"] ?? null), 21, $this->source), $this->sandbox->ensureToStringAllowed(($context["grid_blockname"] ?? null), 21, $this->source)));
        echo ">
  ";
        // line 22
        $this->displayBlock('grid_content', $context, $blocks);
        // line 27
        echo "</div>
";
    }

    // line 22
    public function block_grid_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
            // line 24
            echo "      ";
            $this->loadTemplate("@organisms/grid/_grid-examples.twig", "@organisms/grid/grid.twig", 24)->display($context);
            // line 25
            echo "    ";
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
        // line 26
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@organisms/grid/grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 26,  116 => 25,  113 => 24,  95 => 23,  91 => 22,  86 => 27,  84 => 22,  79 => 21,  76 => 18,  74 => 16,  72 => 15,  69 => 14,  65 => 12,  63 => 11,  60 => 10,  56 => 8,  54 => 7,  51 => 6,  47 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set grid_base_class = grid_base_class|default('grid') %}

{% if not grid_modifiers %}
  {% set grid_modifiers = [] %}
{% endif %}

{% if page_layout_modifier %}
  {% set grid_modifiers = grid_modifiers|merge([page_layout_modifier]) %}
{% endif %}

{% if grid_type %}
  {% set grid_modifiers = grid_modifiers|merge([grid_type]) %}
{% endif %}

{% if grid_label %}
  {% include \"@atoms/text/headings/_heading.twig\" with {
    \"heading_level\": 2,
    \"heading\": grid_label,
  } %}
{% endif %}
<div {{ bem(grid_base_class, grid_modifiers, grid_blockname) }}>
  {% block grid_content %}
    {% for item in items %}
      {% include \"@organisms/grid/_grid-examples.twig\" %}
    {% endfor %}
  {% endblock %}
</div>
", "@organisms/grid/grid.twig", "C:\\xampp\\htdocs\\drupal_site_3\\themes\\custom\\custom_theme\\components\\03-organisms\\grid\\grid.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 3, "include" => 16, "block" => 22, "for" => 23);
        static $filters = array("default" => 1, "merge" => 8);
        static $functions = array("bem" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'block', 'for'],
                ['default', 'merge'],
                ['bem']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
