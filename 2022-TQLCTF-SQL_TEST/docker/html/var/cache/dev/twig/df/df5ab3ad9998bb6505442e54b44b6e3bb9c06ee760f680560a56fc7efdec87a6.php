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

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_0cfcecfd77cf9fd8282bbea73a388fc229e376b6ce0be4992013b7c6b4fa0ca0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "counterrors", [], "any", false, false, false, 6) || twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "countdeprecations", [], "any", false, false, false, 6)) || twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "countwarnings", [], "any", false, false, false, 6))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "counterrors", [], "any", false, false, false, 8)) ? ("red") : (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "countwarnings", [], "any", false, false, false, 8)) ? ("yellow") : ("none"))));
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "counterrors", [], "any", false, false, false, 10)) ? (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "counterrors", [], "any", false, false, false, 10)) : ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "countdeprecations", [], "any", false, false, false, 10) + twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "countwarnings", [], "any", false, false, false, 10)))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 16
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "counterrors", [], "any", false, false, false, 16)) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 16), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 21
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "countwarnings", [], "any", false, false, false, 21)) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 21), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 26
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 26, $this->source); })()), "countdeprecations", [], "any", false, false, false, 26)) ? ("none") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 26), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            echo "
        ";
            // line 30
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 30, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 30, $this->source); })())]);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 35
        echo "    <span class=\"label label-status-";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 35, $this->source); })()), "counterrors", [], "any", false, false, false, 35)) ? ("error") : (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 35, $this->source); })()), "countwarnings", [], "any", false, false, false, 35)) ? ("warning") : ("none"))));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 35, $this->source); })()), "logs", [], "any", false, false, false, 35))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 36
        echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>
        ";
        // line 38
        if (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "counterrors", [], "any", false, false, false, 38) || twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "countdeprecations", [], "any", false, false, false, 38)) || twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "countwarnings", [], "any", false, false, false, 38))) {
            // line 39
            echo "            <span class=\"count\">
                <span>";
            // line 40
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "counterrors", [], "any", false, false, false, 40)) ? (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "counterrors", [], "any", false, false, false, 40)) : ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "countdeprecations", [], "any", false, false, false, 40) + twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "countwarnings", [], "any", false, false, false, 40)))), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 43
        echo "    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Log Messages</h2>

    ";
        // line 49
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source); })()), "processedLogs", [], "any", false, false, false, 49))) {
            // line 50
            echo "        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        ";
            $context["has_error_logs"] = (1 === twig_compare(twig_length_filter($this->env, twig_array_filter($this->env, twig_array_column(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "processedLogs", [], "any", false, false, false, 54), "type"), function ($__type__) use ($context, $macros) { $context["type"] = $__type__; return (0 === twig_compare("error", (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 54, $this->source); })()))); })), 0));
            // line 55
            echo "        ";
            $context["has_deprecation_logs"] = (1 === twig_compare(twig_length_filter($this->env, twig_array_filter($this->env, twig_array_column(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 55, $this->source); })()), "processedLogs", [], "any", false, false, false, 55), "type"), function ($__type__) use ($context, $macros) { $context["type"] = $__type__; return (0 === twig_compare("deprecation", (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 55, $this->source); })()))); })), 0));
            // line 56
            echo "
        ";
            // line 57
            $context["filters"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 57, $this->source); })()), "filters", [], "any", false, false, false, 57);
            // line 58
            echo "        <div class=\"log-filters\">
            <div id=\"log-filter-type\" class=\"log-filter\">
                <ul class=\"tab-navigation\">
                    <li class=\"";
            // line 61
            echo ((( !(isset($context["has_error_logs"]) || array_key_exists("has_error_logs", $context) ? $context["has_error_logs"] : (function () { throw new RuntimeError('Variable "has_error_logs" does not exist.', 61, $this->source); })()) &&  !(isset($context["has_deprecation_logs"]) || array_key_exists("has_deprecation_logs", $context) ? $context["has_deprecation_logs"] : (function () { throw new RuntimeError('Variable "has_deprecation_logs" does not exist.', 61, $this->source); })()))) ? ("active") : (""));
            echo "\">
                        <input ";
            // line 62
            echo ((( !(isset($context["has_error_logs"]) || array_key_exists("has_error_logs", $context) ? $context["has_error_logs"] : (function () { throw new RuntimeError('Variable "has_error_logs" does not exist.', 62, $this->source); })()) &&  !(isset($context["has_deprecation_logs"]) || array_key_exists("has_deprecation_logs", $context) ? $context["has_deprecation_logs"] : (function () { throw new RuntimeError('Variable "has_deprecation_logs" does not exist.', 62, $this->source); })()))) ? ("checked") : (""));
            echo " type=\"radio\" id=\"filter-log-type-all\" name=\"filter-log-type\" value=\"all\">
                        <label for=\"filter-log-type-all\">All messages</label>
                    </li>

                    <li class=\"";
            // line 66
            echo (((isset($context["has_error_logs"]) || array_key_exists("has_error_logs", $context) ? $context["has_error_logs"] : (function () { throw new RuntimeError('Variable "has_error_logs" does not exist.', 66, $this->source); })())) ? ("active") : (""));
            echo "\">
                        <input ";
            // line 67
            echo (((isset($context["has_error_logs"]) || array_key_exists("has_error_logs", $context) ? $context["has_error_logs"] : (function () { throw new RuntimeError('Variable "has_error_logs" does not exist.', 67, $this->source); })())) ? ("checked") : (""));
            echo " type=\"radio\" id=\"filter-log-type-error\" name=\"filter-log-type\" value=\"error\">
                        <label for=\"filter-log-type-error\">
                            Errors
                            <span class=\"badge status-";
            // line 70
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "counterrors", [], "any", false, false, false, 70)) ? ("error") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 70), 0)) : (0)), "html", null, true);
            echo "</span>
                        </label>
                    </li>

                    <li class=\"";
            // line 74
            echo ((( !(isset($context["has_error_logs"]) || array_key_exists("has_error_logs", $context) ? $context["has_error_logs"] : (function () { throw new RuntimeError('Variable "has_error_logs" does not exist.', 74, $this->source); })()) && (isset($context["has_deprecation_logs"]) || array_key_exists("has_deprecation_logs", $context) ? $context["has_deprecation_logs"] : (function () { throw new RuntimeError('Variable "has_deprecation_logs" does not exist.', 74, $this->source); })()))) ? ("active") : (""));
            echo "\">
                        <input ";
            // line 75
            echo ((( !(isset($context["has_error_logs"]) || array_key_exists("has_error_logs", $context) ? $context["has_error_logs"] : (function () { throw new RuntimeError('Variable "has_error_logs" does not exist.', 75, $this->source); })()) && (isset($context["has_deprecation_logs"]) || array_key_exists("has_deprecation_logs", $context) ? $context["has_deprecation_logs"] : (function () { throw new RuntimeError('Variable "has_deprecation_logs" does not exist.', 75, $this->source); })()))) ? ("checked") : (""));
            echo " type=\"radio\" id=\"filter-log-type-deprecation\" name=\"filter-log-type\" value=\"deprecation\">
                        <label for=\"filter-log-type-deprecation\">
                            Deprecations
                            <span class=\"badge status-";
            // line 78
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "countdeprecations", [], "any", false, false, false, 78)) ? ("warning") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 78), 0)) : (0)), "html", null, true);
            echo "</span>
                        </label>
                    </li>
                </ul>
            </div>

            <details id=\"log-filter-priority\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">";
            // line 86
            echo twig_include($this->env, $context, "@WebProfiler/Icon/filter.svg");
            echo "</span>
                    Level (<span class=\"filter-active-num\">";
            // line 87
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 87, $this->source); })()), "priority", [], "any", false, false, false, 87)) - 1), "html", null, true);
            echo "</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <a href=\"#\" class=\"select-all\">Select All</a>
                        <a href=\"#\" class=\"select-none\">Select None</a>
                    </div>

                    ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 96, $this->source); })()), "priority", [], "any", false, false, false, 96));
            foreach ($context['_seq'] as $context["label"] => $context["value"]) {
                // line 97
                echo "                        <div class=\"log-filter-option\">
                            <input ";
                // line 98
                echo (((0 !== twig_compare("debug", $context["value"]))) ? ("checked") : (""));
                echo " type=\"checkbox\" id=\"filter-log-level-";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" name=\"filter-log-level-";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">
                            <label for=\"filter-log-level-";
                // line 99
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                </div>
            </details>

            <details id=\"log-filter-channel\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">";
            // line 107
            echo twig_include($this->env, $context, "@WebProfiler/Icon/filter.svg");
            echo "</span>
                    Channel (<span class=\"filter-active-num\">";
            // line 108
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 108, $this->source); })()), "channel", [], "any", false, false, false, 108)) - 1), "html", null, true);
            echo "</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <a href=\"#\" class=\"select-all\">Select All</a>
                        <a href=\"#\" class=\"select-none\">Select None</a>
                    </div>

                    ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 117, $this->source); })()), "channel", [], "any", false, false, false, 117));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 118
                echo "                        <div class=\"log-filter-option\">
                            <input ";
                // line 119
                echo (((0 !== twig_compare("event", $context["value"]))) ? ("checked") : (""));
                echo " type=\"checkbox\" id=\"filter-log-channel-";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" name=\"filter-log-channel-";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">
                            <label for=\"filter-log-channel-";
                // line 120
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["value"]), "html", null, true);
                echo "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                </div>
            </details>
        </div>

        <table class=\"logs\">
            <colgroup>
                <col width=\"140px\">
                <col>
            </colgroup>

            <thead>
                <th>Time</th>
                <th>Message</th>
            </thead>

            <tbody>
                ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 139, $this->source); })()), "processedLogs", [], "any", false, false, false, 139));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 140
                echo "                    ";
                $context["css_class"] = (((0 === twig_compare("error", twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 140)))) ? ("error") : (((((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 141
$context["log"], "priorityName", [], "any", false, false, false, 141), "WARNING")) || (0 === twig_compare("deprecation", twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 141))))) ? ("warning") : ((((0 === twig_compare("silenced", twig_get_attribute($this->env, $this->source,                 // line 142
$context["log"], "type", [], "any", false, false, false, 142)))) ? ("silenced") : (""))))));
                // line 144
                echo "                    <tr class=\"log-status-";
                echo twig_escape_filter($this->env, (isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new RuntimeError('Variable "css_class" does not exist.', 144, $this->source); })()), "html", null, true);
                echo "\" data-type=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 144), "html", null, true);
                echo "\" data-priority=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "priority", [], "any", false, false, false, 144), "html", null, true);
                echo "\" data-channel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, false, 144), "html", null, true);
                echo "\" style=\"";
                echo ((((0 === twig_compare("event", twig_get_attribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, false, 144))) || (0 === twig_compare("DEBUG", twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 144))))) ? ("display: none") : (""));
                echo "\">
                        <td class=\"log-timestamp\">
                            <time title=\"";
                // line 146
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 146), "r"), "html", null, true);
                echo "\" datetime=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 146), "c"), "html", null, true);
                echo "\">
                                ";
                // line 147
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 147), "H:i:s.v"), "html", null, true);
                echo "
                            </time>

                            ";
                // line 150
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 150), [0 => "error", 1 => "deprecation", 2 => "silenced"]) || (0 === twig_compare("WARNING", twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 150))))) {
                    // line 151
                    echo "                                <span class=\"log-type-badge badge badge-";
                    echo twig_escape_filter($this->env, (isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new RuntimeError('Variable "css_class" does not exist.', 151, $this->source); })()), "html", null, true);
                    echo "\">
                                    ";
                    // line 152
                    if (((0 === twig_compare("error", twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 152))) || (0 === twig_compare("WARNING", twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 152))))) {
                        // line 153
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 153)), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 155
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 155)), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 157
                    echo "                                </span>
                            ";
                }
                // line 159
                echo "                        </td>

                        <td class=\"font-normal\">
                            ";
                // line 162
                echo twig_call_macro($macros["helper"], "macro_render_log_message", ["debug", twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 162), $context["log"]], 162, $context, $this->getSourceContext());
                echo "
                        </td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "            </tbody>
        </table>

        <div class=\"no-logs-message empty\">
            <p>There are no log messages.</p>
        </div>

        <script>Sfjs.initializeLogsTable();</script>
    ";
        }
        // line 175
        echo "
    ";
        // line 176
        $context["compilerLogTotal"] = 0;
        // line 177
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 177, $this->source); })()), "compilerLogs", [], "any", false, false, false, 177));
        foreach ($context['_seq'] as $context["_key"] => $context["logs"]) {
            // line 178
            echo "        ";
            $context["compilerLogTotal"] = ((isset($context["compilerLogTotal"]) || array_key_exists("compilerLogTotal", $context) ? $context["compilerLogTotal"] : (function () { throw new RuntimeError('Variable "compilerLogTotal" does not exist.', 178, $this->source); })()) + twig_length_filter($this->env, $context["logs"]));
            // line 179
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "
    <details class=\"container-compilation-logs\">
        <summary>
            <h4>Container Compilation Logs <span class=\"text-muted\">(";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["compilerLogTotal"]) || array_key_exists("compilerLogTotal", $context) ? $context["compilerLogTotal"] : (function () { throw new RuntimeError('Variable "compilerLogTotal" does not exist.', 183, $this->source); })()), "html", null, true);
        echo ")</span></h4>
            <p class=\"text-muted\">Log messages generated during the compilation of the service container.</p>
        </summary>

        ";
        // line 187
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 187, $this->source); })()), "compilerLogs", [], "any", false, false, false, 187))) {
            // line 188
            echo "            <div class=\"empty\">
                <p>There are no compiler log messages.</p>
            </div>
        ";
        } else {
            // line 192
            echo "            <table class=\"container-logs\">
                <thead>
                <tr>
                    <th>Messages</th>
                    <th class=\"full-width\">Class</th>
                </tr>
                </thead>

                <tbody>
                ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 201, $this->source); })()), "compilerLogs", [], "any", false, false, false, 201));
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
            foreach ($context['_seq'] as $context["class"] => $context["logs"]) {
                // line 202
                echo "                    <tr>
                        <td class=\"font-normal text-right\">";
                // line 203
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["logs"]), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">
                            ";
                // line 205
                $context["context_id"] = ("context-compiler-" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 205));
                // line 206
                echo "
                            <a class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#";
                // line 207
                echo twig_escape_filter($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 207, $this->source); })()), "html", null, true);
                echo "\" data-toggle-alt-content=\"";
                echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                echo "</a>

                            <div id=\"";
                // line 209
                echo twig_escape_filter($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 209, $this->source); })()), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                <ul class=\"break-long-words\">
                                    ";
                // line 211
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["logs"]);
                foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                    // line 212
                    echo "                                        <li>";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "message", [], "any", false, false, false, 212));
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 214
                echo "                                </ul>
                            </div>
                        </td>
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
            unset($context['_seq'], $context['_iterated'], $context['class'], $context['logs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "                </tbody>
            </table>
        ";
        }
        // line 222
        echo "    </details>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 225
    public function macro_render_log_message($__category__ = null, $__log_index__ = null, $__log__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "category" => $__category__,
            "log_index" => $__log_index__,
            "log" => $__log__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_log_message"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 226
            echo "    ";
            $context["has_context"] = (twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", true, true, false, 226) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 226, $this->source); })()), "context", [], "any", false, false, false, 226)));
            // line 227
            echo "    ";
            $context["has_trace"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, true, false, 227), "exception", [], "any", false, true, false, 227), "trace", [], "any", true, true, false, 227);
            // line 228
            echo "
    ";
            // line 229
            if ( !(isset($context["has_context"]) || array_key_exists("has_context", $context) ? $context["has_context"] : (function () { throw new RuntimeError('Variable "has_context" does not exist.', 229, $this->source); })())) {
                // line 230
                echo "        ";
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 230, $this->source); })()), "message", [], "any", false, false, false, 230));
                echo "
    ";
            } else {
                // line 232
                echo "        ";
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 232, $this->source); })()), "message", [], "any", false, false, false, 232), twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 232, $this->source); })()), "context", [], "any", false, false, false, 232));
                echo "
    ";
            }
            // line 234
            echo "
    <div class=\"log-metadata\">
        ";
            // line 236
            if (twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 236, $this->source); })()), "channel", [], "any", false, false, false, 236)) {
                // line 237
                echo "            <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 237, $this->source); })()), "channel", [], "any", false, false, false, 237), "html", null, true);
                echo "</span>
        ";
            }
            // line 239
            echo "
        ";
            // line 240
            if ((twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "errorCount", [], "any", true, true, false, 240) && (1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 240, $this->source); })()), "errorCount", [], "any", false, false, false, 240), 1)))) {
                // line 241
                echo "            <span class=\"log-num-occurrences\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 241, $this->source); })()), "errorCount", [], "any", false, false, false, 241), "html", null, true);
                echo " times</span>
        ";
            }
            // line 243
            echo "
        ";
            // line 244
            if ((isset($context["has_context"]) || array_key_exists("has_context", $context) ? $context["has_context"] : (function () { throw new RuntimeError('Variable "has_context" does not exist.', 244, $this->source); })())) {
                // line 245
                echo "            ";
                $context["context_id"] = ((("context-" . (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 245, $this->source); })())) . "-") . (isset($context["log_index"]) || array_key_exists("log_index", $context) ? $context["log_index"] : (function () { throw new RuntimeError('Variable "log_index" does not exist.', 245, $this->source); })()));
                // line 246
                echo "            <span><a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo twig_escape_filter($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 246, $this->source); })()), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide context\">Show context</a></span>
        ";
            }
            // line 248
            echo "
        ";
            // line 249
            if ((isset($context["has_trace"]) || array_key_exists("has_trace", $context) ? $context["has_trace"] : (function () { throw new RuntimeError('Variable "has_trace" does not exist.', 249, $this->source); })())) {
                // line 250
                echo "            ";
                $context["trace_id"] = ((("trace-" . (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 250, $this->source); })())) . "-") . (isset($context["log_index"]) || array_key_exists("log_index", $context) ? $context["log_index"] : (function () { throw new RuntimeError('Variable "log_index" does not exist.', 250, $this->source); })()));
                // line 251
                echo "            <span><a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo twig_escape_filter($this->env, (isset($context["trace_id"]) || array_key_exists("trace_id", $context) ? $context["trace_id"] : (function () { throw new RuntimeError('Variable "trace_id" does not exist.', 251, $this->source); })()), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</a></span>

            <div id=\"";
                // line 253
                echo twig_escape_filter($this->env, (isset($context["trace_id"]) || array_key_exists("trace_id", $context) ? $context["trace_id"] : (function () { throw new RuntimeError('Variable "trace_id" does not exist.', 253, $this->source); })()), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 254
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 254, $this->source); })()), "context", [], "any", false, false, false, 254), "exception", [], "any", false, false, false, 254), "trace", [], "any", false, false, false, 254), 1);
                echo "
            </div>
        ";
            }
            // line 257
            echo "
        ";
            // line 258
            if ((isset($context["has_context"]) || array_key_exists("has_context", $context) ? $context["has_context"] : (function () { throw new RuntimeError('Variable "has_context" does not exist.', 258, $this->source); })())) {
                // line 259
                echo "            <div id=\"";
                echo twig_escape_filter($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 259, $this->source); })()), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 260
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 260, $this->source); })()), "context", [], "any", false, false, false, 260), 1);
                echo "
            </div>
        ";
            }
            // line 263
            echo "
        ";
            // line 264
            if ((isset($context["has_trace"]) || array_key_exists("has_trace", $context) ? $context["has_trace"] : (function () { throw new RuntimeError('Variable "has_trace" does not exist.', 264, $this->source); })())) {
                // line 265
                echo "            <div id=\"";
                echo twig_escape_filter($this->env, (isset($context["trace_id"]) || array_key_exists("trace_id", $context) ? $context["trace_id"] : (function () { throw new RuntimeError('Variable "trace_id" does not exist.', 265, $this->source); })()), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 266
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 266, $this->source); })()), "context", [], "any", false, false, false, 266), "exception", [], "any", false, false, false, 266), "trace", [], "any", false, false, false, 266), 1);
                echo "
            </div>
        ";
            }
            // line 269
            echo "    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  778 => 269,  772 => 266,  767 => 265,  765 => 264,  762 => 263,  756 => 260,  751 => 259,  749 => 258,  746 => 257,  740 => 254,  736 => 253,  730 => 251,  727 => 250,  725 => 249,  722 => 248,  716 => 246,  713 => 245,  711 => 244,  708 => 243,  702 => 241,  700 => 240,  697 => 239,  691 => 237,  689 => 236,  685 => 234,  679 => 232,  673 => 230,  671 => 229,  668 => 228,  665 => 227,  662 => 226,  641 => 225,  630 => 222,  625 => 219,  607 => 214,  598 => 212,  594 => 211,  589 => 209,  580 => 207,  577 => 206,  575 => 205,  570 => 203,  567 => 202,  550 => 201,  539 => 192,  533 => 188,  531 => 187,  524 => 183,  519 => 180,  513 => 179,  510 => 178,  505 => 177,  503 => 176,  500 => 175,  489 => 166,  471 => 162,  466 => 159,  462 => 157,  456 => 155,  450 => 153,  448 => 152,  443 => 151,  441 => 150,  435 => 147,  429 => 146,  415 => 144,  413 => 142,  412 => 141,  410 => 140,  393 => 139,  375 => 123,  364 => 120,  354 => 119,  351 => 118,  347 => 117,  335 => 108,  331 => 107,  324 => 102,  313 => 99,  303 => 98,  300 => 97,  296 => 96,  284 => 87,  280 => 86,  267 => 78,  261 => 75,  257 => 74,  248 => 70,  242 => 67,  238 => 66,  231 => 62,  227 => 61,  222 => 58,  220 => 57,  217 => 56,  214 => 55,  211 => 54,  205 => 50,  203 => 49,  199 => 47,  189 => 46,  178 => 43,  172 => 40,  169 => 39,  167 => 38,  162 => 36,  155 => 35,  145 => 34,  132 => 30,  129 => 29,  121 => 26,  111 => 21,  101 => 16,  97 => 14,  95 => 13,  92 => 12,  87 => 10,  82 => 9,  79 => 8,  76 => 7,  73 => 6,  63 => 5,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
        {% set icon %}
            {% set status_color = collector.counterrors ? 'red' : collector.countwarnings ? 'yellow' : 'none' %}
            {{ include('@WebProfiler/Icon/logger.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.counterrors ? 'red' }}\">{{ collector.counterrors|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countwarnings ? 'yellow' }}\">{{ collector.countwarnings|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countdeprecations ? 'none' }}\">{{ collector.countdeprecations|default(0) }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.counterrors ? 'error' : collector.countwarnings ? 'warning' : 'none' }} {{ collector.logs is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/logger.svg') }}</span>
        <strong>Logs</strong>
        {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
            <span class=\"count\">
                <span>{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Log Messages</h2>

    {% if collector.processedLogs is empty %}
        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    {% else %}
        {% set has_error_logs = collector.processedLogs|column('type')|filter(type => 'error' == type)|length > 0 %}
        {% set has_deprecation_logs = collector.processedLogs|column('type')|filter(type => 'deprecation' == type)|length > 0 %}

        {% set filters = collector.filters %}
        <div class=\"log-filters\">
            <div id=\"log-filter-type\" class=\"log-filter\">
                <ul class=\"tab-navigation\">
                    <li class=\"{{ not has_error_logs and not has_deprecation_logs ? 'active' }}\">
                        <input {{ not has_error_logs and not has_deprecation_logs ? 'checked' }} type=\"radio\" id=\"filter-log-type-all\" name=\"filter-log-type\" value=\"all\">
                        <label for=\"filter-log-type-all\">All messages</label>
                    </li>

                    <li class=\"{{ has_error_logs ? 'active' }}\">
                        <input {{ has_error_logs ? 'checked' }} type=\"radio\" id=\"filter-log-type-error\" name=\"filter-log-type\" value=\"error\">
                        <label for=\"filter-log-type-error\">
                            Errors
                            <span class=\"badge status-{{ collector.counterrors ? 'error' }}\">{{ collector.counterrors|default(0) }}</span>
                        </label>
                    </li>

                    <li class=\"{{ not has_error_logs and has_deprecation_logs ? 'active' }}\">
                        <input {{ not has_error_logs and has_deprecation_logs ? 'checked' }} type=\"radio\" id=\"filter-log-type-deprecation\" name=\"filter-log-type\" value=\"deprecation\">
                        <label for=\"filter-log-type-deprecation\">
                            Deprecations
                            <span class=\"badge status-{{ collector.countdeprecations ? 'warning' }}\">{{ collector.countdeprecations|default(0) }}</span>
                        </label>
                    </li>
                </ul>
            </div>

            <details id=\"log-filter-priority\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">{{ include('@WebProfiler/Icon/filter.svg') }}</span>
                    Level (<span class=\"filter-active-num\">{{ filters.priority|length - 1 }}</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <a href=\"#\" class=\"select-all\">Select All</a>
                        <a href=\"#\" class=\"select-none\">Select None</a>
                    </div>

                    {% for label, value in filters.priority %}
                        <div class=\"log-filter-option\">
                            <input {{ 'debug' != value ? 'checked' }} type=\"checkbox\" id=\"filter-log-level-{{ value }}\" name=\"filter-log-level-{{ value }}\" value=\"{{ value }}\">
                            <label for=\"filter-log-level-{{ value }}\">{{ label }}</label>
                        </div>
                    {% endfor %}
                </div>
            </details>

            <details id=\"log-filter-channel\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">{{ include('@WebProfiler/Icon/filter.svg') }}</span>
                    Channel (<span class=\"filter-active-num\">{{ filters.channel|length - 1 }}</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <a href=\"#\" class=\"select-all\">Select All</a>
                        <a href=\"#\" class=\"select-none\">Select None</a>
                    </div>

                    {% for value in filters.channel %}
                        <div class=\"log-filter-option\">
                            <input {{ 'event' != value ? 'checked' }} type=\"checkbox\" id=\"filter-log-channel-{{ value }}\" name=\"filter-log-channel-{{ value }}\" value=\"{{ value }}\">
                            <label for=\"filter-log-channel-{{ value }}\">{{ value|title }}</label>
                        </div>
                    {% endfor %}
                </div>
            </details>
        </div>

        <table class=\"logs\">
            <colgroup>
                <col width=\"140px\">
                <col>
            </colgroup>

            <thead>
                <th>Time</th>
                <th>Message</th>
            </thead>

            <tbody>
                {% for log in collector.processedLogs %}
                    {% set css_class = 'error' == log.type ? 'error'
                        : (log.priorityName == 'WARNING' or 'deprecation' == log.type) ? 'warning'
                        : 'silenced' == log.type ? 'silenced'
                    %}
                    <tr class=\"log-status-{{ css_class }}\" data-type=\"{{ log.type }}\" data-priority=\"{{ log.priority }}\" data-channel=\"{{ log.channel }}\" style=\"{{ 'event' == log.channel or 'DEBUG' == log.priorityName ? 'display: none' }}\">
                        <td class=\"log-timestamp\">
                            <time title=\"{{ log.timestamp|date('r') }}\" datetime=\"{{ log.timestamp|date('c') }}\">
                                {{ log.timestamp|date('H:i:s.v') }}
                            </time>

                            {% if log.type in ['error', 'deprecation', 'silenced'] or 'WARNING' == log.priorityName %}
                                <span class=\"log-type-badge badge badge-{{ css_class }}\">
                                    {% if 'error' == log.type or 'WARNING' == log.priorityName %}
                                        {{ log.priorityName|lower }}
                                    {% else %}
                                        {{ log.type|lower }}
                                    {% endif %}
                                </span>
                            {% endif %}
                        </td>

                        <td class=\"font-normal\">
                            {{ helper.render_log_message('debug', loop.index, log) }}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <div class=\"no-logs-message empty\">
            <p>There are no log messages.</p>
        </div>

        <script>Sfjs.initializeLogsTable();</script>
    {% endif %}

    {% set compilerLogTotal = 0 %}
    {% for logs in collector.compilerLogs %}
        {% set compilerLogTotal = compilerLogTotal + logs|length %}
    {% endfor %}

    <details class=\"container-compilation-logs\">
        <summary>
            <h4>Container Compilation Logs <span class=\"text-muted\">({{ compilerLogTotal }})</span></h4>
            <p class=\"text-muted\">Log messages generated during the compilation of the service container.</p>
        </summary>

        {% if collector.compilerLogs is empty %}
            <div class=\"empty\">
                <p>There are no compiler log messages.</p>
            </div>
        {% else %}
            <table class=\"container-logs\">
                <thead>
                <tr>
                    <th>Messages</th>
                    <th class=\"full-width\">Class</th>
                </tr>
                </thead>

                <tbody>
                {% for class, logs in collector.compilerLogs %}
                    <tr>
                        <td class=\"font-normal text-right\">{{ logs|length }}</td>
                        <td class=\"font-normal\">
                            {% set context_id = 'context-compiler-' ~ loop.index %}

                            <a class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"{{ class }}\">{{ class }}</a>

                            <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                <ul class=\"break-long-words\">
                                    {% for log in logs %}
                                        <li>{{ profiler_dump_log(log.message) }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </details>
{% endblock %}

{% macro render_log_message(category, log_index, log) %}
    {% set has_context = log.context is defined and log.context is not empty %}
    {% set has_trace = log.context.exception.trace is defined %}

    {% if not has_context %}
        {{ profiler_dump_log(log.message) }}
    {% else %}
        {{ profiler_dump_log(log.message, log.context) }}
    {% endif %}

    <div class=\"log-metadata\">
        {% if log.channel %}
            <span class=\"badge\">{{ log.channel }}</span>
        {% endif %}

        {% if log.errorCount is defined and log.errorCount > 1 %}
            <span class=\"log-num-occurrences\">{{ log.errorCount }} times</span>
        {% endif %}

        {% if has_context %}
            {% set context_id = 'context-' ~ category ~ '-' ~ log_index %}
            <span><a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</a></span>
        {% endif %}

        {% if has_trace %}
            {% set trace_id = 'trace-' ~ category ~ '-' ~ log_index %}
            <span><a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ trace_id }}\" data-toggle-alt-content=\"Hide trace\">Show trace</a></span>

            <div id=\"{{ trace_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context.exception.trace, maxDepth=1) }}
            </div>
        {% endif %}

        {% if has_context %}
            <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context, maxDepth=1) }}
            </div>
        {% endif %}

        {% if has_trace %}
            <div id=\"{{ trace_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context.exception.trace, maxDepth=1) }}
            </div>
        {% endif %}
    </div>
{% endmacro %}
", "@WebProfiler/Collector/logger.html.twig", "/Users/gml/Desktop/安全/CTF/2022/TQLCTF/html/vendor/symfony/web-profiler-bundle/Resources/views/Collector/logger.html.twig");
    }
}
