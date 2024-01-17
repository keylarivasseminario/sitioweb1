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

/* @particles/custom.html.twig */
class __TwigTemplate_e0de9c3f8ccf18d6e09b846bc40bd100 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/custom.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context["html"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "twig", [], "any", false, false, false, 4)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "theme", [], "any", false, false, false, 4), "compile", [0 => twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "html", [], "any", false, false, false, 4)], "method", false, false, false, 4)) : (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "html", [], "any", false, false, false, 4)));
        // line 5
        echo "    ";
        echo $this->extensions['Gantry\Component\Twig\TwigExtension']->htmlFilter(((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "filter", [], "any", false, false, false, 5)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "platform", [], "any", false, false, false, 5), "filter", [0 => ($context["html"] ?? null)], "method", false, false, false, 5)) : (($context["html"] ?? null))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@particles/custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/custom.html.twig", "C:\\xampp\\htdocs\\sitioweb1\\media\\gantry5\\engines\\nucleus\\particles\\custom.html.twig");
    }
}
