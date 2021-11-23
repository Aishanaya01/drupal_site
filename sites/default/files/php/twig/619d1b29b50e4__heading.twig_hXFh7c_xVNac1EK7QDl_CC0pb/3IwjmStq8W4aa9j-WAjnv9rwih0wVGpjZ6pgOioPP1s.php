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

/* @atoms/text/headings/_heading.twig */
class __TwigTemplate_edd5aacc9a71023bcfe77ec753737927202eb93a125c98830fefb905d0868dd1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        $context["heading_base_class"] = ((array_key_exists("heading_base_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["heading_base_class"] ?? null), 19, $this->source), ("h" . $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null), 19, $this->source)))) : (("h" . $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null), 19, $this->source))));
        // line 20
        echo "
<h";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null), 21, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, $this->sandbox->ensureToStringAllowed(($context["heading_base_class"] ?? null), 21, $this->source), $this->sandbox->ensureToStringAllowed(($context["heading_modifiers"] ?? null), 21, $this->source), $this->sandbox->ensureToStringAllowed(($context["heading_blockname"] ?? null), 21, $this->source)));
        echo ">
  ";
        // line 22
        if (($context["heading_url"] ?? null)) {
            // line 23
            echo "    ";
            $this->loadTemplate("@atoms/links/link/link.twig", "@atoms/text/headings/_heading.twig", 23)->display(twig_array_merge($context, ["link_content" =>             // line 24
($context["heading"] ?? null), "link_url" =>             // line 25
($context["heading_url"] ?? null), "link_attributes" =>             // line 26
($context["heading_link_attributes"] ?? null), "link_base_class" =>             // line 27
($context["heading_link_base_class"] ?? null), "link_modifiers" =>             // line 28
($context["heading_link_modifiers"] ?? null), "link_blockname" => ((            // line 29
array_key_exists("heading_link_blockname", $context)) ? (_twig_default_filter(($context["heading_link_blockname"] ?? null), ($context["heading_base_class"] ?? null))) : (($context["heading_base_class"] ?? null)))]));
            // line 31
            echo "  ";
        } else {
            // line 32
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 32, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 34
        echo "</h";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null), 34, $this->source), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "@atoms/text/headings/_heading.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 34,  64 => 32,  61 => 31,  59 => 29,  58 => 28,  57 => 27,  56 => 26,  55 => 25,  54 => 24,  52 => 23,  50 => 22,  44 => 21,  41 => 20,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * Available variables:
 * - heading_level - the header level 1-6 (produces h1, h2, etc.)
 *
 * - heading_base_class - the base class
 * - heading_modifiers - array of modifiers to add to the base classname
 * - heading_blockname - blockname prepended to the base classname
 *
 * - heading - the content of the heading (typically text)
 *
 * - heading_url - (optional) the url the heading should poing to
 * - heading_link_attributes - key/value attributes to pass to link
 * - heading_link_base_class - override the link base class
 * - heading_link_modifiers - override the link modifiers
 * - heading_link_blockname - override the link block name (defaults to heading_base_class)
 */
#}
{% set heading_base_class = heading_base_class|default('h' ~ heading_level) %}

<h{{ heading_level }} {{ bem(heading_base_class, heading_modifiers, heading_blockname) }}>
  {% if heading_url %}
    {% include \"@atoms/links/link/link.twig\" with {
      \"link_content\": heading,
      \"link_url\": heading_url,
      \"link_attributes\": heading_link_attributes,
      \"link_base_class\": heading_link_base_class,
      \"link_modifiers\": heading_link_modifiers,
      \"link_blockname\": heading_link_blockname|default(heading_base_class),
    } %}
  {% else %}
    {{ heading }}
  {% endif %}
</h{{ heading_level }}>
", "@atoms/text/headings/_heading.twig", "C:\\xampp\\htdocs\\drupal_site_3\\themes\\custom\\custom_theme\\components\\01-atoms\\text\\headings\\_heading.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 19, "if" => 22, "include" => 23);
        static $filters = array("default" => 19, "escape" => 21);
        static $functions = array("bem" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['default', 'escape'],
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
