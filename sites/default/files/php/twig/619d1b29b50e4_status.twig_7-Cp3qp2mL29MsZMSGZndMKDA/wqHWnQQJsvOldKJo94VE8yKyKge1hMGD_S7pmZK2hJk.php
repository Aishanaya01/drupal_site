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

/* @molecules/status/status.twig */
class __TwigTemplate_3bb847a3c15f148b09ed25c90b8faef9942c4e2cf51487dfbbac3166b84f0dfe extends \Twig\Template
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
        // line 24
        $context["status__base_class"] = "status";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 26
            echo "  <div aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["type"], 26, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 26, $this->source), "aria-label"), "html", null, true);
            echo ">
    ";
            // line 27
            if (($context["type"] == "error")) {
                // line 28
                echo "      <div role=\"alert\">
    ";
            }
            // line 30
            echo "      ";
            if ($context["type"]) {
                // line 31
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["type"], 31, $this->source), "html", null, true);
                echo "</h2>
      ";
            }
            // line 33
            echo "      <ul ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "list", [], $this->sandbox->ensureToStringAllowed(($context["status__base_class"] ?? null), 33, $this->source)));
            echo ">
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 35
                echo "          <li ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, $this->sandbox->ensureToStringAllowed(($context["status__base_class"] ?? null), 35, $this->source), [0 => $context["type"]]));
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 35, $this->source), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "      </ul>
    ";
            // line 38
            if (($context["type"] == "error")) {
                // line 39
                echo "      </div>
    ";
            }
            // line 41
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@molecules/status/status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 41,  92 => 39,  90 => 38,  87 => 37,  76 => 35,  72 => 34,  67 => 33,  61 => 31,  58 => 30,  54 => 28,  52 => 27,  45 => 26,  41 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - display: (optional) May have a value of 'status' or 'error' when only
 *   displaying messages of that specific type.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 */
#}
{% set status__base_class = 'status' %}
{% for type, messages in message_list %}
  <div aria-label=\"{{ type }}\"{{ attributes|without('aria-label') }}>
    {% if type == 'error' %}
      <div role=\"alert\">
    {% endif %}
      {% if type %}
        <h2 class=\"visually-hidden\">{{ type }}</h2>
      {% endif %}
      <ul {{ bem('list', [], status__base_class)}}>
        {% for message in messages %}
          <li {{ bem(status__base_class, [type])}}>{{ message }}</li>
        {% endfor %}
      </ul>
    {% if type == 'error' %}
      </div>
    {% endif %}
  </div>
{% endfor %}
", "@molecules/status/status.twig", "C:\\xampp\\htdocs\\drupal_site_3\\themes\\custom\\custom_theme\\components\\02-molecules\\status\\status.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24, "for" => 25, "if" => 27);
        static $filters = array("escape" => 26, "without" => 26);
        static $functions = array("bem" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'without'],
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
