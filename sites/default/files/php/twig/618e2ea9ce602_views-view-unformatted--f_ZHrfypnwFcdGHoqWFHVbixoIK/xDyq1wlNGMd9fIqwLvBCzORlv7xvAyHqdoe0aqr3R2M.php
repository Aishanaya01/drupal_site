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

/* themes/custom/custom_theme/templates/views/views-view-unformatted--frontpage.html.twig */
class __TwigTemplate_662d9fa9f567fbd3fa6ff7bf335950d04626923993d308e4c95546c706ec0a8e extends \Twig\Template
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
        // line 18
        echo "
";
        // line 19
        $this->loadTemplate("themes/custom/custom_theme/templates/views/views-view-unformatted--frontpage.html.twig", "themes/custom/custom_theme/templates/views/views-view-unformatted--frontpage.html.twig", 19, "293934067")->display(twig_array_merge($context, ["grid_type" => "card", "grid_label" =>         // line 21
($context["title"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "themes/custom/custom_theme/templates/views/views-view-unformatted--frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 21,  42 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}

{% embed \"@organisms/grid/grid.twig\" with {
  grid_type: 'card',
  grid_label: title
} %}
  {% block grid_content %}
    {% for row in rows %}
      {{ row.content }}
    {% endfor %}
  {% endblock %}
{% endembed %}
", "themes/custom/custom_theme/templates/views/views-view-unformatted--frontpage.html.twig", "C:\\xampp\\htdocs\\drupal_site_3\\themes\\custom\\custom_theme\\templates\\views\\views-view-unformatted--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 19);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
                [],
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


/* themes/custom/custom_theme/templates/views/views-view-unformatted--frontpage.html.twig */
class __TwigTemplate_662d9fa9f567fbd3fa6ff7bf335950d04626923993d308e4c95546c706ec0a8e___293934067 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'grid_content' => [$this, 'block_grid_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 19
        return "@organisms/grid/grid.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@organisms/grid/grid.twig", "themes/custom/custom_theme/templates/views/views-view-unformatted--frontpage.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_grid_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/custom_theme/templates/views/views-view-unformatted--frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 27,  166 => 25,  161 => 24,  157 => 23,  146 => 19,  43 => 21,  42 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}

{% embed \"@organisms/grid/grid.twig\" with {
  grid_type: 'card',
  grid_label: title
} %}
  {% block grid_content %}
    {% for row in rows %}
      {{ row.content }}
    {% endfor %}
  {% endblock %}
{% endembed %}
", "themes/custom/custom_theme/templates/views/views-view-unformatted--frontpage.html.twig", "C:\\xampp\\htdocs\\drupal_site_3\\themes\\custom\\custom_theme\\templates\\views\\views-view-unformatted--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 24);
        static $filters = array("escape" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
