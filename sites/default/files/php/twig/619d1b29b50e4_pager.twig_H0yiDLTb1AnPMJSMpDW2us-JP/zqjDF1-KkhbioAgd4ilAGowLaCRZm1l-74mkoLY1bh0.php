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

/* @molecules/pager/pager.twig */
class __TwigTemplate_6ded7b2de8a270d9a7b76bde7f8322511b87981fdae0d625d4b119363dd46863 extends \Twig\Template
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
        // line 32
        $context["pager__base_class"] = "pager";
        // line 33
        echo "
";
        // line 34
        if (($context["items"] ?? null)) {
            // line 35
            echo "  <nav ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null), 35, $this->source)));
            echo " role=\"navigation\" aria-labelledby=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 35, $this->source), "html", null, true);
            echo "\">
    <h4 id=\"";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 36, $this->source), "html", null, true);
            echo "\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "visually-hidden"));
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
    <ul ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "items", [], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null), 37, $this->source), [0 => "js-pager__items"]));
            echo ">
      ";
            // line 39
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 39)) {
                // line 40
                echo "        <li ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "item", [0 => "first"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null), 40, $this->source)));
                echo ">
          <a ";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "link", [0 => "first"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null), 41, $this->source)));
                echo " href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "href", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "attributes", [], "any", false, false, true, 41), 41, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span ";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "visually-hidden"));
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 43), "text", [], "any", true, true, true, 43)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 43), "text", [], "any", false, false, true, 43), 43, $this->source), t("« First"))) : (t("« First"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 47
            echo "      ";
            // line 48
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 48)) {
                // line 49
                echo "        <li ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "item", [0 => "prev"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null), 49, $this->source)));
                echo ">
          <a ";
                // line 50
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "link", [0 => "prev"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null), 50, $this->source)));
                echo " href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 50), "href", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 50), "attributes", [], "any", false, false, true, 50), 50, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span ";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "visually-hidden"));
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 52), "text", [], "any", true, true, true, 52)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 52), "text", [], "any", false, false, true, 52), 52, $this->source), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 56
            echo "      ";
            // line 57
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 57)) {
                // line 58
                echo "        <li ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "item", [0 => "ellipsis"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null), 58, $this->source)));
                echo " role=\"presentation\">&hellip;</li>
      ";
            }
            // line 60
            echo "      ";
            // line 61
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 61));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 62
                echo "        ";
                $context["current_class"] = (((($context["current"] ?? null) == $context["key"])) ? (" is-active") : (""));
                // line 63
                echo "        <li ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "item", [], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null), 63, $this->source), [0 => ($context["current_class"] ?? null)]));
                echo ">
          ";
                // line 64
                $context["title"] = (((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Go to page @key", ["@key" => $context["key"]])));
                // line 65
                echo "          <a ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "link", [], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null), 65, $this->source), [0 => ($context["current_class"] ?? null)]));
                echo " href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 65, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 65), 65, $this->source), "href", "title"), "html", null, true);
                echo ">
            <span ";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "visually-hidden"));
                echo ">
              ";
                // line 67
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page "))));
                echo "
            </span>";
                // line 69
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 69, $this->source), "html", null, true);
                // line 70
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "      ";
            // line 74
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 74)) {
                // line 75
                echo "        <li ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "item", [0 => "ellipsis"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null), 75, $this->source)));
                echo " role=\"presentation\">&hellip;</li>
      ";
            }
            // line 77
            echo "      ";
            // line 78
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 78)) {
                // line 79
                echo "        <li ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "item", [0 => "next"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null), 79, $this->source)));
                echo ">
          <a ";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "link", [0 => "next"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null), 80, $this->source)));
                echo " href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 80), "href", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 80), "attributes", [], "any", false, false, true, 80), 80, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span ";
                // line 81
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "visually-hidden"));
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 82
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 82), "text", [], "any", true, true, true, 82)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 82), "text", [], "any", false, false, true, 82), 82, $this->source), t("Next ›"))) : (t("Next ›"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 86
            echo "      ";
            // line 87
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 87)) {
                // line 88
                echo "        <li ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "item", [0 => "last"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null), 88, $this->source)));
                echo ">
          <a ";
                // line 89
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "link", [0 => "last"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null), 89, $this->source)));
                echo " href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 89), "href", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 89), "attributes", [], "any", false, false, true, 89), 89, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span ";
                // line 90
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "visually-hidden"));
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 91
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 91), "text", [], "any", true, true, true, 91)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 91), "text", [], "any", false, false, true, 91), 91, $this->source), t("Last »"))) : (t("Last »"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 95
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "@molecules/pager/pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 95,  256 => 91,  250 => 90,  240 => 89,  235 => 88,  232 => 87,  230 => 86,  223 => 82,  217 => 81,  207 => 80,  202 => 79,  199 => 78,  197 => 77,  191 => 75,  188 => 74,  186 => 73,  178 => 70,  176 => 69,  172 => 67,  168 => 66,  157 => 65,  155 => 64,  150 => 63,  147 => 62,  142 => 61,  140 => 60,  134 => 58,  131 => 57,  129 => 56,  122 => 52,  116 => 51,  106 => 50,  101 => 49,  98 => 48,  96 => 47,  89 => 43,  83 => 42,  73 => 41,  68 => 40,  65 => 39,  61 => 37,  53 => 36,  46 => 35,  44 => 34,  41 => 33,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a pager.
 *
 * Available variables:
 * - items: List of pager items.
 *   The list is keyed by the following elements:
 *   - first: Item for the first page; not present on the first page of results.
 *   - previous: Item for the previous page; not present on the first page
 *     of results.
 *   - next: Item for the next page; not present on the last page of results.
 *   - last: Item for the last page; not present on the last page of results.
 *   - pages: List of pages, keyed by page number.
 *   Sub-sub elements:
 *   items.first, items.previous, items.next, items.last, and each item inside
 *   items.pages contain the following elements:
 *   - href: URL with appropriate query parameters for the item.
 *   - attributes: A keyed list of HTML attributes for the item.
 *   - text: The visible text used for the item link, such as \"‹ Previous\"
 *     or \"Next ›\".
 * - current: The page number of the current page.
 * - ellipses: If there are more pages than the quantity allows, then an
 *   ellipsis before or after the listed pages may be present.
 *   - previous: Present if the currently visible list of pages does not start
 *     at the first page.
 *   - next: Present if the visible list of pages ends before the last page.
 *
 * @see template_preprocess_pager()
 */
#}
{% set pager__base_class = 'pager' %}

{% if items %}
  <nav {{ bem(pager__base_class) }} role=\"navigation\" aria-labelledby=\"{{ heading_id }}\">
    <h4 id=\"{{ heading_id }}\" {{ bem('visually-hidden') }}>{{ 'Pagination'|t }}</h4>
    <ul {{ bem('items', [], pager__base_class, ['js-pager__items']) }}>
      {# Print first item. #}
      {% if items.first %}
        <li {{ bem('item', ['first'], pager__base_class) }}>
          <a {{ bem('link', ['first'], pager__base_class) }} href=\"{{ items.first.href }}\" title=\"{{ 'Go to first page'|t }}\" {{ items.first.attributes|without('href', 'title', 'rel') }}>
            <span {{ bem('visually-hidden') }}>{{ 'First page'|t }}</span>
            <span aria-hidden=\"true\">{{ items.first.text|default('« First'|t) }}</span>
          </a>
        </li>
      {% endif %}
      {# Print previous item if we are not on the first page. #}
      {% if items.previous %}
        <li {{ bem('item', ['prev'], pager__base_class) }}>
          <a {{ bem('link', ['prev'], pager__base_class) }} href=\"{{ items.previous.href }}\" title=\"{{ 'Go to previous page'|t }}\" rel=\"prev\"{{ items.previous.attributes|without('href', 'title', 'rel') }}>
            <span {{ bem('visually-hidden') }}>{{ 'Previous page'|t }}</span>
            <span aria-hidden=\"true\">{{ items.previous.text|default('‹ Previous'|t) }}</span>
          </a>
        </li>
      {% endif %}
      {# Add an ellipsis if there are further previous pages. #}
      {% if ellipses.previous %}
        <li {{ bem('item', ['ellipsis'], pager__base_class) }} role=\"presentation\">&hellip;</li>
      {% endif %}
      {# Now generate the actual pager piece. #}
      {% for key, item in items.pages %}
        {% set current_class = current == key ? ' is-active' : '' %}
        <li {{ bem('item', [], pager__base_class, [current_class]) }}>
          {% set title = current == key ? 'Current page'|t : 'Go to page @key'|t({'@key': key}) %}
          <a {{ bem('link', [], pager__base_class, [current_class]) }} href=\"{{ item.href }}\" title=\"{{ title }}\"{{ item.attributes|without('href', 'title') }}>
            <span {{ bem('visually-hidden') }}>
              {{ current == key ? 'Current page'|t : 'Page '|t }}
            </span>
            {{- key -}}
          </a>
        </li>
      {% endfor %}
      {# Add an ellipsis if there are further next pages. #}
      {% if ellipses.next %}
        <li {{ bem('item', ['ellipsis'], pager__base_class) }} role=\"presentation\">&hellip;</li>
      {% endif %}
      {# Print next item if we are not on the last page. #}
      {% if items.next %}
        <li {{ bem('item', ['next'], pager__base_class) }}>
          <a {{ bem('link', ['next'], pager__base_class) }} href=\"{{ items.next.href }}\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\"{{ items.next.attributes|without('href', 'title', 'rel') }}>
            <span {{ bem('visually-hidden') }}>{{ 'Next page'|t }}</span>
            <span aria-hidden=\"true\">{{ items.next.text|default('Next ›'|t) }}</span>
          </a>
        </li>
      {% endif %}
      {# Print last item. #}
      {% if items.last %}
        <li {{ bem('item', ['last'], pager__base_class) }}>
          <a {{ bem('link', ['last'], pager__base_class) }} href=\"{{ items.last.href }}\" title=\"{{ 'Go to last page'|t }}\" {{ items.last.attributes|without('href', 'title', 'rel') }}>
            <span {{ bem('visually-hidden') }}>{{ 'Last page'|t }}</span>
            <span aria-hidden=\"true\">{{ items.last.text|default('Last »'|t) }}</span>
          </a>
        </li>
      {% endif %}
    </ul>
  </nav>
{% endif %}
", "@molecules/pager/pager.twig", "C:\\xampp\\htdocs\\drupal_site_3\\themes\\custom\\custom_theme\\components\\02-molecules\\pager\\pager.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 32, "if" => 34, "for" => 61);
        static $filters = array("escape" => 35, "t" => 36, "without" => 41, "default" => 43);
        static $functions = array("bem" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 't', 'without', 'default'],
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
