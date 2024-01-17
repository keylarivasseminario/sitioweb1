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

/* @particles/contentcubes.html.twig */
class __TwigTemplate_a8859aff4bdb43f77335dbdf7a359ff6 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/contentcubes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div class=\"g-contentcubes ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "css", [], "any", false, false, false, 5), "class", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title", [], "any", false, false, false, 6)) {
            echo "<h2 class=\"g-title\">";
            echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title", [], "any", false, false, false, 6);
            echo "</h2>";
        }
        // line 7
        echo "
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "items", [], "any", false, false, false, 8)) {
            // line 9
            echo "        <div class=\"cube-items-wrapper\">

            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "items", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "                <div class=\"item image-position-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "imageposition", [], "any", false, false, false, 12), "html", null, true);
                echo " cube-row g-grid\">
                    <div class=\"g-block size-50\">
                        ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "                            <div class=\"cube-image-wrapper\">
                                <img src=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc(twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 16)));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 16));
                    echo "\" class=\"cube-image\" />
                            </div>
                        ";
                }
                // line 19
                echo "                    </div>

                    <div class=\"g-block size-50\">
                        <div class=\"cube-content-wrapper\">
                            ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                                <div class=\"item-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 24));
                    echo "</div>
                            ";
                }
                // line 26
                echo "
                            <div class=\"item-title\">
                                ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "                                <a target=\"";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["item"], "buttontarget", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "buttontarget", [], "any", false, false, false, 29), "_self")) : ("_self")));
                    echo "\" class=\"item-link ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "buttonclass", [], "any", false, false, false, 29));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 29));
                    echo "\">
                                    ";
                }
                // line 31
                echo "
                                    ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 32));
                echo "

                                    ";
                // line 34
                if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "                                    <span class=\"item-link-text\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "linktext", [], "any", false, false, false, 35);
                    echo "</span>
                                </a>
                                ";
                }
                // line 38
                echo "                            </div>

                            ";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["item"], "tags", [], "any", false, false, false, 40)) {
                    // line 41
                    echo "                                <div class=\"item-tags\">

                                    ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "tags", [], "any", false, false, false, 43));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 44
                        echo "                                        <span class=\"tag\">
                                            <a target=\"";
                        // line 45
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tag"], "target", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tag"], "target", [], "any", false, false, false, 45), "_self")) : ("_self")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "link", [], "any", false, false, false, 45));
                        echo "\">
                                                ";
                        // line 46
                        if (twig_get_attribute($this->env, $this->source, $context["tag"], "icon", [], "any", false, false, false, 46)) {
                            echo "<i class=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "icon", [], "any", false, false, false, 46), "html", null, true);
                            echo "\"></i> ";
                        }
                        // line 47
                        echo "                                                ";
                        echo twig_get_attribute($this->env, $this->source, $context["tag"], "text", [], "any", false, false, false, 47);
                        echo "
                                            </a>
                                        </span>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "
                                </div>
                            ";
                }
                // line 54
                echo "                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
        </div>
    ";
        }
        // line 61
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/contentcubes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 61,  196 => 58,  187 => 54,  182 => 51,  171 => 47,  165 => 46,  159 => 45,  156 => 44,  152 => 43,  148 => 41,  146 => 40,  142 => 38,  135 => 35,  133 => 34,  128 => 32,  125 => 31,  115 => 29,  113 => 28,  109 => 26,  103 => 24,  101 => 23,  95 => 19,  87 => 16,  84 => 15,  82 => 14,  76 => 12,  72 => 11,  68 => 9,  66 => 8,  63 => 7,  57 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/contentcubes.html.twig", "C:\\xampp\\htdocs\\sitioweb1\\templates\\g5_helium\\particles\\contentcubes.html.twig");
    }
}
