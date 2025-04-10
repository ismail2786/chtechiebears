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

/* themes/custom/stayrelive/templates/layout/header.html.twig */
class __TwigTemplate_5e59754b961a880ae02f610807c58f71 extends Template
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
        // line 1
        yield "<header role=\"banner\">
  ";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 2), "html", null, true);
        yield "

  ";
        // line 4
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 4) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 4)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 4))) {
            // line 5
            yield "  <nav class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["nav_classes"] ?? null), "html", null, true);
            yield "\">
    <div class=\"";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["b5_top_container"] ?? null), "html", null, true);
            yield " d-flex\">
      ";
            // line 7
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 7), "html", null, true);
            yield "

      ";
            // line 9
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 9) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 9))) {
                // line 10
                yield "        <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-md-end\" id=\"navbarSupportedContent\">
          ";
                // line 17
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 17), "html", null, true);
                yield "
          ";
                // line 18
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 18), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 21
            yield "    </div>
  </nav>
  ";
        }
        // line 24
        yield "
</header>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "nav_classes", "b5_top_container"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/stayrelive/templates/layout/header.html.twig";
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
        return array (  94 => 24,  89 => 21,  83 => 18,  79 => 17,  70 => 10,  68 => 9,  63 => 7,  59 => 6,  54 => 5,  52 => 4,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header role=\"banner\">
  {{ page.header }}

  {% if page.nav_branding or page.nav_main or page.nav_additional %}
  <nav class=\"{{ nav_classes }}\">
    <div class=\"{{ b5_top_container }} d-flex\">
      {{ page.nav_branding }}

      {% if page.nav_main or page.nav_additional %}
        <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-md-end\" id=\"navbarSupportedContent\">
          {{ page.nav_main }}
          {{ page.nav_additional }}
        </div>
      {% endif %}
    </div>
  </nav>
  {% endif %}

</header>", "themes/custom/stayrelive/templates/layout/header.html.twig", "D:\\xampp\\htdocs\\corporatehousing\\themes\\custom\\stayrelive\\templates\\layout\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 4];
        static $filters = ["escape" => 2];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
