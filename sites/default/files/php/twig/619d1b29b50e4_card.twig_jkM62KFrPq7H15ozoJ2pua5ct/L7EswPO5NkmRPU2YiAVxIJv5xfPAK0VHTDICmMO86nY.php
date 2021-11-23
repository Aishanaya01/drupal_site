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

/* @molecules/card/card.twig */
class __TwigTemplate_869ba394013fd42329998125bab37d033e3bd4c0ad56e3fd911b1e2fe5f99fb3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'card__img' => [$this, 'block_card__img'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        $context["card__base_class"] = "card";
        // line 45
        echo "
<div ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, $this->sandbox->ensureToStringAllowed(($context["card__base_class"] ?? null), 46, $this->source), $this->sandbox->ensureToStringAllowed(($context["card__modifiers"] ?? null), 46, $this->source), $this->sandbox->ensureToStringAllowed(($context["card__blockname"] ?? null), 46, $this->source), $this->sandbox->ensureToStringAllowed(($context["card__extra_classes"] ?? null), 46, $this->source)));
        echo ">
  ";
        // line 48
        echo "  ";
        $this->displayBlock('card__img', $context, $blocks);
        // line 58
        echo "  ";
        // line 59
        echo "  <div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "content", $this->sandbox->ensureToStringAllowed(($context["card__content__modifiers"] ?? null), 59, $this->source), $this->sandbox->ensureToStringAllowed(($context["card__base_class"] ?? null), 59, $this->source)));
        echo ">
    ";
        // line 61
        echo "    ";
        if (($context["card__heading"] ?? null)) {
            // line 62
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 62, $this->source), "html", null, true);
            echo "
      ";
            // line 63
            $this->loadTemplate("@atoms/text/headings/_heading.twig", "@molecules/card/card.twig", 63)->display(twig_array_merge($context, ["heading_base_class" => ((            // line 64
array_key_exists("card__heading__base_class", $context)) ? (_twig_default_filter(($context["card__heading__base_class"] ?? null), "heading")) : ("heading")), "heading_modifiers" =>             // line 65
($context["card__heading__modifiers"] ?? null), "heading_blockname" =>             // line 66
($context["card__base_class"] ?? null), "heading_level" => 2, "heading" =>             // line 68
($context["card__heading"] ?? null), "heading_url" => ((            // line 69
array_key_exists("card__heading__link", $context)) ? (_twig_default_filter(($context["card__heading__link"] ?? null), ($context["card__link__url"] ?? null))) : (($context["card__link__url"] ?? null))), "heading_link_base_class" => ((            // line 70
array_key_exists("card__heading__link_base_class", $context)) ? (_twig_default_filter(($context["card__heading__link_base_class"] ?? null), "heading-link")) : ("heading-link")), "heading_link_blockname" =>             // line 71
($context["card__base_class"] ?? null)]));
            // line 73
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 73, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 75
        echo "    ";
        // line 76
        echo "    ";
        if (($context["card__subheading"] ?? null)) {
            // line 77
            echo "      ";
            $this->loadTemplate("@atoms/text/headings/_heading.twig", "@molecules/card/card.twig", 77)->display(twig_array_merge($context, ["heading_base_class" => ((            // line 78
array_key_exists("card__subheading__base_class", $context)) ? (_twig_default_filter(($context["card__subheading__base_class"] ?? null), "subheading")) : ("subheading")), "heading_modifiers" =>             // line 79
($context["card__subheading__modifiers"] ?? null), "heading_blockname" =>             // line 80
($context["card__base_class"] ?? null), "heading_level" => 3, "heading" =>             // line 82
($context["card__subheading"] ?? null), "heading_url" =>             // line 83
($context["card__subheading__link"] ?? null)]));
            // line 85
            echo "    ";
        }
        // line 86
        echo "    ";
        // line 87
        echo "    ";
        if (($context["card__body"] ?? null)) {
            // line 88
            echo "      ";
            $this->loadTemplate("@atoms/text/text/01-paragraph.twig", "@molecules/card/card.twig", 88)->display(twig_array_merge($context, ["paragraph_base_class" => ((            // line 89
array_key_exists("card__body__base_class", $context)) ? (_twig_default_filter(($context["card__body__base_class"] ?? null), "body")) : ("body")), "paragraph_modifiers" =>             // line 90
($context["card__body__modifiers"] ?? null), "paragraph_blockname" =>             // line 91
($context["card__base_class"] ?? null), "paragraph_content" =>             // line 92
($context["card__body"] ?? null)]));
            // line 94
            echo "    ";
        }
        // line 95
        echo "    ";
        // line 96
        echo "    ";
        if (($context["card__link__url"] ?? null)) {
            // line 97
            echo "      ";
            $this->loadTemplate("@atoms/links/link/link.twig", "@molecules/card/card.twig", 97)->display(twig_array_merge($context, ["link_base_class" => ((            // line 98
array_key_exists("card__link__base_class", $context)) ? (_twig_default_filter(($context["card__link__base_class"] ?? null), "link")) : ("link")), "link_blockname" =>             // line 99
($context["card__base_class"] ?? null), "link_attributes" =>             // line 100
($context["card__link__attributes"] ?? null), "link_content" =>             // line 101
($context["card__link__text"] ?? null), "link_url" =>             // line 102
($context["card__link__url"] ?? null)]));
            // line 104
            echo "    ";
        }
        // line 105
        echo "    ";
        // line 106
        echo "    ";
        if (($context["card__button__url"] ?? null)) {
            // line 107
            echo "      ";
            $this->loadTemplate("@atoms/buttons/button.twig", "@molecules/card/card.twig", 107)->display(twig_array_merge($context, ["button_base_class" => ((            // line 108
array_key_exists("card__button__base_class", $context)) ? (_twig_default_filter(($context["card__button__base_class"] ?? null), "button")) : ("button")), "button_modifiers" =>             // line 109
($context["card__button__modifiers"] ?? null), "button_blockname" =>             // line 110
($context["card__base_class"] ?? null), "button_attributes" =>             // line 111
($context["card__button__attributes"] ?? null), "button_content" =>             // line 112
($context["card__button__content"] ?? null), "button_url" =>             // line 113
($context["card__button__url"] ?? null)]));
            // line 115
            echo "    ";
        }
        // line 116
        echo "  </div>
</div>
";
    }

    // line 48
    public function block_card__img($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "    ";
        if (($context["card__image__src"] ?? null)) {
            // line 50
            echo "      ";
            $this->loadTemplate("@atoms/images/image/responsive-image.twig", "@molecules/card/card.twig", 50)->display(twig_array_merge($context, ["image_blockname" =>             // line 51
($context["card__base_class"] ?? null), "output_image_tag" =>             // line 52
($context["card__image__output_image_tag"] ?? null), "image_src" =>             // line 53
($context["card__image__src"] ?? null), "image_alt" =>             // line 54
($context["card__image__alt"] ?? null)]));
            // line 56
            echo "    ";
        }
        // line 57
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@molecules/card/card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 57,  166 => 56,  164 => 54,  163 => 53,  162 => 52,  161 => 51,  159 => 50,  156 => 49,  152 => 48,  146 => 116,  143 => 115,  141 => 113,  140 => 112,  139 => 111,  138 => 110,  137 => 109,  136 => 108,  134 => 107,  131 => 106,  129 => 105,  126 => 104,  124 => 102,  123 => 101,  122 => 100,  121 => 99,  120 => 98,  118 => 97,  115 => 96,  113 => 95,  110 => 94,  108 => 92,  107 => 91,  106 => 90,  105 => 89,  103 => 88,  100 => 87,  98 => 86,  95 => 85,  93 => 83,  92 => 82,  91 => 80,  90 => 79,  89 => 78,  87 => 77,  84 => 76,  82 => 75,  76 => 73,  74 => 71,  73 => 70,  72 => 69,  71 => 68,  70 => 66,  69 => 65,  68 => 64,  67 => 63,  62 => 62,  59 => 61,  54 => 59,  52 => 58,  49 => 48,  45 => 46,  42 => 45,  40 => 44,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # Available variables:
 # - card__base_class - base classname of the wrapper.
 # - card__modifiers - array of modifiers to add to the base classname of the wrapper.
 # - card__blockname - blockname prepended to the base classname of the wrapper(s) and each component.
 #
 # - card__image__src - the actual image file location.
 # - card__image__alt - (optional) the alt text for screen readers and when the image cannot load.
 # - card__image__output_image_tag - whether to print the picture element or not.
 #
 # - card__content__base_class - base classname of the copy wrapper - defaults to 'heading'.
 # - card__content__modifiers - array of modifiers to add to the base classname of the copy wrapper.
 # - card__content__blockname - blockname prepended to the base classname of the copy wrapper.
 #
 # - card__heading - the content of the title component.
 # - card__heading__link - (optional) the url the title should link to. Defaults to card__link__url.
 # - card__heading__base_class - base classname of the title component. Defaults to \"title\".
 # - card__heading__blockname - blockname to add to the base classname of the title - defaults to card__base_class.
 # - card__heading__modifiers - array of modifiers to add to the base classname of the title.
 # - card__heading__link_base_class - base class to add to the title link - defaults to 'title-link'.
 #
 # - card__subheading - the content of the subtitle component.
 # - card__subheading__link - (optional) the url the subtitle should link to.
 # - card__subheading__base_class - base classname of the subtitle component. Defaults to \"subtitle\".
 # - card__subheading__modifiers - array of modifiers to add to the base classname of the subtitle.
 #
 # - card__body - the content of the body component.
 # - card__body__base_class - base classname of the body component. Defaults to \"body\".
 # - card__body__modifiers - array of modifiers to add to the base classname of the body.
 #
 # - card__link__text - the content of the link component.
 # - card__link__url - the url the link should link to.
 # - card__link__base_class - base classname of the link component. Defaults to \"link\".
 # - card__link__blockname - override link blockname. Defaults to card__base_class.
 # - card__link__attributes - array of attribute,value pairs for the link attribute.
 # - card__link__modifiers - array of modifiers to add to the base classname of the link.
 #
 # - card__button__content - the content of the button component.
 # - card__button__url - the url the button should link to.
 # - card__button__base_class - base classname of the button component. Defaults to \"button\".
 # - card__button__attributes - array of attribute,value pairs for the button attribute.
 # - card__button__modifiers - array of modifiers to add to the base classname of the button.
 #}
{% set card__base_class = 'card' %}

<div {{ bem(card__base_class, card__modifiers, card__blockname, card__extra_classes) }}>
  {# Image #}
  {% block card__img %}
    {% if card__image__src %}
      {% include \"@atoms/images/image/responsive-image.twig\" with {
        image_blockname: card__base_class,
        output_image_tag: card__image__output_image_tag,
        image_src: card__image__src,
        image_alt: card__image__alt,
      } %}
    {% endif %}
  {% endblock %}
  {# Content #}
  <div {{ bem('content', card__content__modifiers, card__base_class) }}>
    {# Heading #}
    {% if card__heading %}
      {{ title_prefix }}
      {% include \"@atoms/text/headings/_heading.twig\" with {
        heading_base_class: card__heading__base_class|default('heading'),
        heading_modifiers: card__heading__modifiers,
        heading_blockname: card__base_class,
        heading_level: 2,
        heading: card__heading,
        heading_url: card__heading__link|default(card__link__url),
        heading_link_base_class: card__heading__link_base_class|default('heading-link'),
        heading_link_blockname: card__base_class,
      } %}
      {{ title_suffix }}
    {% endif %}
    {# Subheading #}
    {% if card__subheading %}
      {% include \"@atoms/text/headings/_heading.twig\" with {
        heading_base_class: card__subheading__base_class|default('subheading'),
        heading_modifiers: card__subheading__modifiers,
        heading_blockname: card__base_class,
        heading_level: 3,
        heading: card__subheading,
        heading_url: card__subheading__link,
      } %}
    {% endif %}
    {# Body #}
    {% if card__body %}
      {% include \"@atoms/text/text/01-paragraph.twig\" with {
        paragraph_base_class: card__body__base_class|default('body'),
        paragraph_modifiers: card__body__modifiers,
        paragraph_blockname: card__base_class,
        paragraph_content: card__body,
      } %}
    {% endif %}
    {# Link #}
    {% if card__link__url %}
      {% include \"@atoms/links/link/link.twig\" with {
        link_base_class: card__link__base_class|default('link'),
        link_blockname: card__base_class,
        link_attributes: card__link__attributes,
        link_content: card__link__text,
        link_url: card__link__url,
      } %}
    {% endif %}
    {# Button #}
    {% if card__button__url %}
      {% include \"@atoms/buttons/button.twig\" with {
        button_base_class: card__button__base_class|default('button'),
        button_modifiers: card__button__modifiers,
        button_blockname: card__base_class,
        button_attributes: card__button__attributes,
        button_content: card__button__content,
        button_url: card__button__url,
      } %}
    {% endif %}
  </div>
</div>
", "@molecules/card/card.twig", "C:\\xampp\\htdocs\\drupal_site_3\\themes\\custom\\custom_theme\\components\\02-molecules\\card\\card.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 44, "block" => 48, "if" => 61, "include" => 63);
        static $filters = array("escape" => 62, "default" => 64);
        static $functions = array("bem" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'include'],
                ['escape', 'default'],
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
