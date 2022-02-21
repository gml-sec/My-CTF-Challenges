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

/* @WebProfiler/Router/panel.html.twig */
class __TwigTemplate_2430e9448d87e41bcc96607bd4b8ccc5d32748583b9b37df5cdda8ca6c72a70b extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Router/panel.html.twig"));

        // line 1
        echo "<h2>Routing</h2>

<div class=\"metrics\">
    <div class=\"metric\">
        <span class=\"value\">";
        // line 5
        ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "route", [], "any", false, false, false, 5)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "route", [], "any", false, false, false, 5), "html", null, true))) : (print ("(none)")));
        echo "</span>
        <span class=\"label\">Matched route</span>
    </div>
</div>

";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "route", [], "any", false, false, false, 10)) {
            // line 11
            echo "    <h3>Route Parameters</h3>

    ";
            // line 13
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "routeParams", [], "any", false, false, false, 13))) {
                // line 14
                echo "        <div class=\"empty\">
            <p>No parameters.</p>
        </div>
    ";
            } else {
                // line 18
                echo "        ";
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "routeParams", [], "any", false, false, false, 18), "labels" => [0 => "Name", 1 => "Value"]], false);
                echo "
    ";
            }
        }
        // line 21
        echo "
";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "redirect", [], "any", false, false, false, 22)) {
            // line 23
            echo "    <h3>Route Redirection</h3>

    <p>This page redirects to:</p>
    <div class=\"card break-long-words\">
        ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "targetUrl", [], "any", false, false, false, 27), "html", null, true);
            echo "
        ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "targetRoute", [], "any", false, false, false, 28)) {
                echo "<span class=\"text-muted\">(route: \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "targetRoute", [], "any", false, false, false, 28), "html", null, true);
                echo "\")</span>";
            }
            // line 29
            echo "    </div>
";
        }
        // line 31
        echo "
<h3>Route Matching Logs</h3>

<div class=\"card\">
    <strong>Path to match:</strong> <code>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "pathinfo", [], "any", false, false, false, 35), "html", null, true);
        echo "</code>
</div>

<table id=\"router-logs\">
    <thead>
        <tr>
            <th>#</th>
            <th>Route name</th>
            <th>Path</th>
            <th>Log</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["traces"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 49
            echo "        <tr class=\"";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, false, 49), 1))) ? ("status-warning") : ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, false, 49), 2))) ? ("status-success") : (""))));
            echo "\">
            <td class=\"font-normal text-muted nowrap\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
            <td class=\"break-long-words\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "name", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
            <td class=\"break-long-words\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "path", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
            <td class=\"font-normal\">
                ";
            // line 54
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, false, 54), 1))) {
                // line 55
                echo "                    Path almost matches, but
                    <span class=\"newline\">";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "log", [], "any", false, false, false, 56), "html", null, true);
                echo "</span>
                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 57
$context["trace"], "level", [], "any", false, false, false, 57), 2))) {
                // line 58
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "log", [], "any", false, false, false, 58), "html", null, true);
                echo "
                ";
            } else {
                // line 60
                echo "                    Path does not match
                ";
            }
            // line 62
            echo "            </td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </tbody>
</table>

<p class=\"help\">
    Note: These matching logs are based on the current router configuration,
    which might differ from the configuration used when profiling this request.
</p>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Router/panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 65,  178 => 62,  174 => 60,  168 => 58,  166 => 57,  162 => 56,  159 => 55,  157 => 54,  152 => 52,  148 => 51,  144 => 50,  139 => 49,  122 => 48,  106 => 35,  100 => 31,  96 => 29,  90 => 28,  86 => 27,  80 => 23,  78 => 22,  75 => 21,  68 => 18,  62 => 14,  60 => 13,  56 => 11,  54 => 10,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Router/panel.html.twig", "/Users/gml/Desktop/安全/CTF/2022/TQLCTF/html/vendor/symfony/web-profiler-bundle/Resources/views/Router/panel.html.twig");
    }
}
