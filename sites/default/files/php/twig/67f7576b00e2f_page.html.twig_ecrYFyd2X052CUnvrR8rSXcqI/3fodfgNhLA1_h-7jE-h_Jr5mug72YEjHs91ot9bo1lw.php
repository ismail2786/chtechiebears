<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/stayrelive/templates/layout/page.html.twig */
class __TwigTemplate_a0b7d1f49ce4be5814b16b41833b0526 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        $context["nav_classes"] = ((("navbar navbar-expand-lg" . (((        // line 47
($context["b5_navbar_schema"] ?? null) != "none")) ? ((" navbar-" . ($context["b5_navbar_schema"] ?? null))) : (" "))) . (((        // line 48
($context["b5_navbar_schema"] ?? null) != "none")) ? ((((($context["b5_navbar_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 49
($context["b5_navbar_bg_schema"] ?? null) != "none")) ? ((" bg-" . ($context["b5_navbar_bg_schema"] ?? null))) : (" ")));
        // line 51
        yield "
";
        // line 53
        $context["footer_classes"] = (((" " . (((        // line 54
($context["b5_footer_schema"] ?? null) != "none")) ? ((" footer-" . ($context["b5_footer_schema"] ?? null))) : (" "))) . (((        // line 55
($context["b5_footer_schema"] ?? null) != "none")) ? ((((($context["b5_footer_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 56
($context["b5_footer_bg_schema"] ?? null) != "none")) ? ((" bg-" . ($context["b5_footer_bg_schema"] ?? null))) : (" ")));
        // line 58
        yield "
<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 61
        yield "
  ";
        // line 62
        yield from $this->loadTemplate((($context["directory"] ?? null) . "/templates/layout/header.html.twig"), "themes/custom/stayrelive/templates/layout/page.html.twig", 62)->unwrap()->yield($context);
        yield " 

  ";
        // line 65
        $context["sidebar_first_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 65) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 65))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 67
        yield "
  ";
        // line 69
        $context["sidebar_second_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 69) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 69))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 71
        yield "
  ";
        // line 73
        $context["content_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 73) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 73))) ? ("col-12 col-lg-6") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 73) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 73))) ? ("col-12 col-lg-9") : ("col-12"))));
        // line 75
        yield "

  <div class=\"";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["b5_top_container"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 78
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 78)) {
            // line 79
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 79), "html", null, true);
            yield "
    ";
        }
        // line 81
        yield "    <div class=\"row g-0\">
      ";
        // line 82
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 82)) {
            // line 83
            yield "        <div class=\"order-2 order-lg-1 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_classes"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 84), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 87
        yield "      <div class=\"order-1 order-lg-2 ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_classes"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 88
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 88), "html", null, true);
        yield "
      </div>
      ";
        // line 90
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 90)) {
            // line 91
            yield "        <div class=\"order-3 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_classes"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 92), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 95
        yield "    </div>
  </div>

</main>

";
        // line 100
        yield from $this->loadTemplate((($context["directory"] ?? null) . "/templates/layout/footer.html.twig"), "themes/custom/stayrelive/templates/layout/page.html.twig", 100)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["b5_navbar_schema", "b5_navbar_bg_schema", "b5_footer_schema", "b5_footer_bg_schema", "directory", "page", "b5_top_container"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/stayrelive/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  143 => 100,  136 => 95,  130 => 92,  125 => 91,  123 => 90,  118 => 88,  113 => 87,  107 => 84,  102 => 83,  100 => 82,  97 => 81,  91 => 79,  89 => 78,  85 => 77,  81 => 75,  79 => 73,  76 => 71,  74 => 69,  71 => 67,  69 => 65,  64 => 62,  61 => 61,  57 => 58,  55 => 56,  54 => 55,  53 => 54,  52 => 53,  49 => 51,  47 => 49,  46 => 48,  45 => 47,  44 => 46,);
    }

    public function getSourceContext(): Source
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
{%
set nav_classes = 'navbar navbar-expand-lg' ~
  (b5_navbar_schema != 'none' ? \" navbar-#{b5_navbar_schema}\" : ' ') ~
  (b5_navbar_schema != 'none' ? (b5_navbar_schema == 'dark' ? ' text-light' : ' text-dark' ) : ' ') ~
  (b5_navbar_bg_schema != 'none' ? \" bg-#{b5_navbar_bg_schema}\" : ' ')
%}

{%
set footer_classes = ' ' ~
  (b5_footer_schema != 'none' ? \" footer-#{b5_footer_schema}\" : ' ') ~
  (b5_footer_schema != 'none' ? (b5_footer_schema == 'dark' ? ' text-light' : ' text-dark' ) : ' ') ~
  (b5_footer_bg_schema != 'none' ? \" bg-#{b5_footer_bg_schema}\" : ' ')
%}

<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

  {% include directory ~ '/templates/layout/header.html.twig' %} 

  {%
  set sidebar_first_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-sm-6 col-lg-3' : 'col-12 col-lg-3'
  %}

  {%
  set sidebar_second_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-sm-6 col-lg-3' : 'col-12 col-lg-3'
  %}

  {%
  set content_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-lg-6' : ((page.sidebar_first or page.sidebar_second) ? 'col-12 col-lg-9' : 'col-12' )
   %}


  <div class=\"{{ b5_top_container }}\">
    {% if page.breadcrumb %}
      {{ page.breadcrumb }}
    {% endif %}
    <div class=\"row g-0\">
      {% if page.sidebar_first %}
        <div class=\"order-2 order-lg-1 {{ sidebar_first_classes }}\">
          {{ page.sidebar_first }}
        </div>
      {% endif %}
      <div class=\"order-1 order-lg-2 {{ content_classes }}\">
        {{ page.content }}
      </div>
      {% if page.sidebar_second %}
        <div class=\"order-3 {{ sidebar_second_classes }}\">
          {{ page.sidebar_second }}
        </div>
      {% endif %}
    </div>
  </div>

</main>

{% include directory ~ '/templates/layout/footer.html.twig' %}
", "themes/custom/stayrelive/templates/layout/page.html.twig", "D:\\xampp\\htdocs\\corporatehousing\\themes\\custom\\stayrelive\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 46, "include" => 62, "if" => 78];
        static $filters = ["escape" => 77];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
                ['escape'],
                [],
                $this->source
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
