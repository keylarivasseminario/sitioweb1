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

/* @gantry-admin/pages/menu/edit.html.twig */
class __TwigTemplate_c8ab6b3a2328fa1a6808d46488cbe142 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'gantry' => [$this, 'block_gantry'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($context["ajax"] ?? null) - ($context["suffix"] ?? null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/menu/edit.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "route", [0 => "menu/edit", 1 => ($context["id"] ?? null), 2 => "validate"], "method", false, false, false, 4), "html", null, true);
        echo "\">
    <div class=\"card settings-block\">
        <h4>
            <span data-title-editable=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "settings", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "\" class=\"title\">
                ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "settings", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "
            </span>
            <i class=\"fa fa-pencil fa-pencil-alt font-small\" aria-hidden=\"true\" tabindex=\"0\" aria-label=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->transFilter("GANTRY5_PLATFORM_EDIT_TITLE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "settings", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10)), "html", null, true);
        echo "\" data-title-edit=\"\"></i>
            ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blueprints"] ?? null), "form", [], "any", false, false, false, 11), "fields", [], "any", false, false, false, 11), "enabled", [], "any", false, false, false, 11)) {
            // line 12
            echo "            ";
            $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/menu/edit.html.twig", 12)->display(twig_array_merge($context, ["default" => true, "name" => "enabled", "field" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blueprints"] ?? null), "form", [], "any", false, false, false, 12), "fields", [], "any", false, false, false, 12), "enabled", [], "any", false, false, false, 12), "value" => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "enabled", [], "any", false, false, false, 12)]));
            // line 13
            echo "            ";
        }
        // line 14
        echo "        </h4>
        <div class=\"inner-params\">
            ";
        // line 16
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/menu/edit.html.twig", 16)->display(twig_array_merge($context, ["blueprints" => twig_get_attribute($this->env, $this->source, ($context["blueprints"] ?? null), "form", [], "any", false, false, false, 16), "data" => ($context["data"] ?? null), "skip" => [0 => "enabled", 1 => "settings.title"]]));
        // line 17
        echo "        </div>
    </div>
    <div class=\"g-modal-actions\">
        ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "authorize", [0 => "menu.edit", 1 => ($context["id"] ?? null)], "method", false, false, false, 20)) {
            // line 21
            echo "        ";
            // line 22
            echo "        <button class=\"button button-primary\" type=\"submit\">";
            echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->transFilter("GANTRY5_PLATFORM_APPLY"), "html", null, true);
            echo "</button>
        <button class=\"button button-primary\" data-apply-and-save=\"\">";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->transFilter("GANTRY5_PLATFORM_APPLY_SAVE"), "html", null, true);
            echo "</button>
        ";
        }
        // line 25
        echo "        <button class=\"button g5-dialog-close\">";
        echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/menu/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  97 => 23,  92 => 22,  90 => 21,  88 => 20,  83 => 17,  81 => 16,  77 => 14,  74 => 13,  71 => 12,  69 => 11,  65 => 10,  60 => 8,  56 => 7,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/pages/menu/edit.html.twig", "C:\\xampp\\htdocs\\sitioweb1\\administrator\\components\\com_gantry5\\templates\\pages\\menu\\edit.html.twig");
    }
}
