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

/* @particles/owlcarousel.html.twig */
class __TwigTemplate_e8ad471a57410c717a8278d4b5ebb7f1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/owlcarousel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "class", [], "any", false, false, false, 5));
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
        <div id=\"g-owlcarousel-";
        // line 8
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-owlcarousel owl-carousel ";
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "imageOverlay", [], "any", false, false, false, 8) == "enable")) {
            echo "has-color-overlay";
        }
        echo "\">

            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "items", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                ";
            if ( !twig_get_attribute($this->env, $this->source, $context["item"], "disable", [], "any", false, false, false, 11)) {
                // line 12
                echo "                    <div class=\"g-owlcarousel-item ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, false, 12));
                echo "\">
                        <div class=\"g-owlcarousel-item-wrapper\">
                            <div class=\"g-owlcarousel-item-img\">
                                <img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc(twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 15)));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 15));
                echo "\" />
                            </div>
                            <div class=\"g-owlcarousel-item-content-container\">
                                <div class=\"g-owlcarousel-item-content-wrapper\">
                                    <div class=\"g-owlcarousel-item-content\">
                                        ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "                                            <h1 class=\"g-owlcarousel-item-title\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 21);
                    echo "</h1>";
                }
                // line 22
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "desc", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                                            <h2 class=\"g-owlcarousel-item-desc\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "desc", [], "any", false, false, false, 23);
                    echo "</h2>";
                }
                // line 24
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                                            <div class=\"g-owlcarousel-item-link\">
                                                <a target=\"_self\" class=\"g-owlcarousel-item-button button ";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "buttonclass", [], "any", false, false, false, 26));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 26));
                    echo "\">
                                                    ";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "linktext", [], "any", false, false, false, 27);
                    echo "
                                                </a>
                                            </div>
                                        ";
                }
                // line 31
                echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 37
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        </div>
    </div>

";
    }

    // line 44
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "    ";
        twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "load", [0 => "jquery"], "method", false, false, false, 45);
        // line 46
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc("gantry-theme://js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function () {
            jQuery('#g-owlcarousel-";
        // line 49
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').owlCarousel({
                items: 1,
                rtl: ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "page", [], "any", false, false, false, 51), "direction", [], "any", false, false, false, 51) == "rtl")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                loop: true,
                ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nav", [], "any", false, false, false, 53) == "enable")) {
            // line 54
            echo "                nav: true,
                navText: ['";
            // line 55
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "prevText", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "prevText", [], "any", false, false, false, 55), "<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>")) : ("<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>")), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nextText", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nextText", [], "any", false, false, false, 55), "<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>")) : ("<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>")), "js"), "html", null, true);
            echo "'],
                ";
        } else {
            // line 57
            echo "                nav: false,
                ";
        }
        // line 59
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dots", [], "any", false, false, false, 59) == "enable")) {
            // line 60
            echo "                dots: true,
                ";
        } else {
            // line 62
            echo "                dots: false,
                ";
        }
        // line 64
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "autoplay", [], "any", false, false, false, 64) == "enable")) {
            // line 65
            echo "                autoplay: true,
                autoplayTimeout: ";
            // line 66
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "autoplaySpeed", [], "any", true, true, false, 66)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "autoplaySpeed", [], "any", false, false, false, 66), "5000")) : ("5000")), "html", null, true);
            echo ",
                ";
        } else {
            // line 68
            echo "                autoplay: false,
                ";
        }
        // line 70
        echo "            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@particles/owlcarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 70,  222 => 68,  217 => 66,  214 => 65,  211 => 64,  207 => 62,  203 => 60,  200 => 59,  196 => 57,  189 => 55,  186 => 54,  184 => 53,  175 => 51,  170 => 49,  163 => 46,  160 => 45,  156 => 44,  148 => 38,  142 => 37,  134 => 31,  127 => 27,  121 => 26,  118 => 25,  115 => 24,  110 => 23,  107 => 22,  102 => 21,  100 => 20,  90 => 15,  83 => 12,  80 => 11,  76 => 10,  67 => 8,  64 => 7,  58 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/owlcarousel.html.twig", "C:\\xampp\\htdocs\\sitioweb1\\templates\\g5_helium\\particles\\owlcarousel.html.twig");
    }
}
