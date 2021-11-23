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

/* themes/custom/custom_theme/templates/layout/page.html.twig */
class __TwigTemplate_a59c7e2d2d0867e58a021d0459fe8e9f1c17ae4994b495b710bf6bca3916c4a9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_header' => [$this, 'block_page_header'],
            'page_system' => [$this, 'block_page_system'],
            'page_sidebar' => [$this, 'block_page_sidebar'],
            'page_content' => [$this, 'block_page_content'],
            'page_footer' => [$this, 'block_page_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 51
        return "@templates/_default.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 47))) {
            // line 48
            $context["sidebar"] = true;
        }
        // line 51
        $this->parent = $this->loadTemplate("@templates/_default.twig", "themes/custom/custom_theme/templates/layout/page.html.twig", 51);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 52
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 53)) {
            // line 54
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 56
        echo "  ";
    }

    // line 58
    public function block_page_system($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
    ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
    ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
    ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 62, $this->source), "html", null, true);
        echo "
  ";
    }

    // line 65
    public function block_page_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "
  ";
    }

    // line 69
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "
  ";
    }

    // line 73
    public function block_page_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 74)) {
            // line 75
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 77
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/custom_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 77,  127 => 75,  124 => 74,  120 => 73,  113 => 70,  109 => 69,  102 => 66,  98 => 65,  92 => 62,  88 => 61,  84 => 60,  79 => 59,  75 => 58,  71 => 56,  65 => 54,  62 => 53,  58 => 52,  53 => 51,  50 => 48,  48 => 47,  41 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

{% if page.sidebar|render %} {# this may or may not correctly filter sidebar #}
  {% set sidebar = TRUE %}
{% endif %}

{% extends \"@templates/_default.twig\" %}
  {% block page_header %}
    {% if page.header %}
      {{ page.header }}
    {% endif %}
  {% endblock %}

  {% block page_system %}
    {{ page.breadcrumb }}
    {{ page.highlighted }}
    {{ page.help }}
    {{ messages }}
  {% endblock %}

  {% block page_sidebar %}
    {{ page.sidebar }}
  {% endblock %}

  {% block page_content %}
    {{ page.content }}
  {% endblock %}

  {% block page_footer %}
    {% if page.footer %}
      {{ page.footer }}
    {% endif %}
  {% endblock %}
", "themes/custom/custom_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\drupal_site_3\\themes\\custom\\custom_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 47, "set" => 48);
        static $filters = array("render" => 47, "escape" => 54);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['render', 'escape'],
                []
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
