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

/* @templates/_default.twig */
class __TwigTemplate_6c5d64a8773e1b70525c59a7ffea906511c9e10a635a5e1f08a38236eeb1f032 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["layout_modifiers"] = [];
        // line 2
        echo "
";
        // line 3
        $context["main_base_class"] = ((array_key_exists("main_base_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["main_base_class"] ?? null), 3, $this->source), "main")) : ("main"));
        // line 4
        $context["main_modifiers"] = [];
        // line 5
        echo "
";
        // line 6
        $context["main_content_base_class"] = ((array_key_exists("main_content_base_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["main_content_base_class"] ?? null), 6, $this->source), "main-content")) : ("main-content"));
        // line 7
        $context["main_content_modifiers"] = [];
        // line 8
        echo "
";
        // line 9
        if (($context["sidebar"] ?? null)) {
            // line 10
            echo "  ";
            $context["main_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["main_modifiers"] ?? null), 10, $this->source), [0 => "with-sidebar"]);
            // line 11
            echo "  ";
            $context["main_content_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["main_content_modifiers"] ?? null), 11, $this->source), [0 => "with-sidebar"]);
        }
        // line 13
        echo "
<div ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "layout-container", $this->sandbox->ensureToStringAllowed(($context["layout_modifiers"] ?? null), 14, $this->source)));
        echo ">
  ";
        // line 15
        $this->displayBlock('page_header', $context, $blocks);
        // line 18
        echo "  ";
        $this->displayBlock('page_system', $context, $blocks);
        // line 20
        echo "  <div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, $this->sandbox->ensureToStringAllowed(($context["main_base_class"] ?? null), 20, $this->source), $this->sandbox->ensureToStringAllowed(($context["main_modifiers"] ?? null), 20, $this->source), $this->sandbox->ensureToStringAllowed(($context["main_blockname"] ?? null), 20, $this->source)));
        echo ">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 22
        echo "    ";
        if (($context["sidebar"] ?? null)) {
            // line 23
            echo "      <aside class=\"main-sidebar\" role=\"complementary\">
        ";
            // line 24
            $this->displayBlock('page_sidebar', $context, $blocks);
            // line 25
            echo "      </aside>
    ";
        }
        // line 27
        echo "    <main role=\"main\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, $this->sandbox->ensureToStringAllowed(($context["main_content_base_class"] ?? null), 27, $this->source), $this->sandbox->ensureToStringAllowed(($context["main_content_modifiers"] ?? null), 27, $this->source), $this->sandbox->ensureToStringAllowed(($context["main_content_blockname"] ?? null), 27, $this->source)));
        echo ">
      ";
        // line 28
        $this->displayBlock('page_content', $context, $blocks);
        // line 29
        echo "    </main>
  </div>
  ";
        // line 31
        $this->displayBlock('page_footer', $context, $blocks);
        // line 34
        echo "</div>
";
    }

    // line 15
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        $this->loadTemplate("@organisms/site/site-header/site-header.twig", "@templates/_default.twig", 16)->display($context);
        // line 17
        echo "  ";
    }

    // line 18
    public function block_page_system($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "  ";
    }

    // line 24
    public function block_page_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 28
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 31
    public function block_page_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    ";
        $this->loadTemplate("@organisms/site/site-footer/site-footer.twig", "@templates/_default.twig", 32)->display($context);
        // line 33
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@templates/_default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 33,  154 => 32,  150 => 31,  144 => 28,  138 => 24,  134 => 19,  130 => 18,  126 => 17,  123 => 16,  119 => 15,  114 => 34,  112 => 31,  108 => 29,  106 => 28,  101 => 27,  97 => 25,  95 => 24,  92 => 23,  89 => 22,  84 => 20,  81 => 18,  79 => 15,  75 => 14,  72 => 13,  68 => 11,  65 => 10,  63 => 9,  60 => 8,  58 => 7,  56 => 6,  53 => 5,  51 => 4,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set layout_modifiers = [] %}

{% set main_base_class = main_base_class|default('main') %}
{% set main_modifiers = [] %}

{% set main_content_base_class = main_content_base_class|default('main-content') %}
{% set main_content_modifiers = [] %}

{% if sidebar %}
  {% set main_modifiers = main_modifiers|merge(['with-sidebar']) %}
  {% set main_content_modifiers = main_content_modifiers|merge(['with-sidebar']) %}
{% endif %}

<div {{ bem('layout-container', layout_modifiers) }}>
  {% block page_header %}
    {% include \"@organisms/site/site-header/site-header.twig\" %}
  {% endblock %}
  {% block page_system %}
  {% endblock %}
  <div {{ bem(main_base_class, main_modifiers, main_blockname) }}>
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
    {% if sidebar %}
      <aside class=\"main-sidebar\" role=\"complementary\">
        {% block page_sidebar %}{% endblock %}
      </aside>
    {% endif %}
    <main role=\"main\" {{ bem(main_content_base_class, main_content_modifiers, main_content_blockname) }}>
      {% block page_content %}{% endblock %}
    </main>
  </div>
  {% block page_footer %}
    {% include \"@organisms/site/site-footer/site-footer.twig\" %}
  {% endblock %}
</div>
", "@templates/_default.twig", "C:\\xampp\\htdocs\\drupal_site_3\\themes\\custom\\custom_theme\\components\\04-templates\\_default.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 9, "block" => 15, "include" => 16);
        static $filters = array("default" => 3, "merge" => 10);
        static $functions = array("bem" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
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
