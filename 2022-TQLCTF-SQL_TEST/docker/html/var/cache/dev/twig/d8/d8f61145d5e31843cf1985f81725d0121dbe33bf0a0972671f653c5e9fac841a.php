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

/* @WebProfiler/Collector/translation.html.twig */
class __TwigTemplate_264215f9785b61a8ce850017cd52ac639b7ce8be1f41add5ae8b865ec50929d7 extends Template
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
            'messages' => [$this, 'block_messages'],
            'defined_messages' => [$this, 'block_defined_messages'],
            'fallback_messages' => [$this, 'block_fallback_messages'],
            'missing_messages' => [$this, 'block_missing_messages'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/translation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 6))) {
            // line 7
            echo "        ";
            ob_start(function () { return ''; });
            // line 8
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
            echo "
            ";
            // line 9
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 9)) ? ("red") : (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 9)) ? ("yellow") : (""))));
            // line 10
            echo "            ";
            $context["error_count"] = (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 10) + twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 10));
            // line 11
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, ((($context["error_count"] ?? null)) ? (($context["error_count"] ?? null)) : (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countDefines", [], "any", false, false, false, 11))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start(function () { return ''; });
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Default locale</b>
                <span class=\"sf-toolbar-status\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", false, false, false, 18), "-")) : ("-")), "html", null, true);
            echo "
                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 23
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 23)) ? ("red") : (""));
            echo "\">
                    ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 24), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 30
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 30)) ? ("yellow") : (""));
            echo "\">
                    ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 31), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countDefines", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        ";
            // line 41
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 46
        echo "    <span class=\"label label-status-";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 46)) ? ("error") : (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 46)) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 46))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 47
        echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
        echo "</span>
        <strong>Translation</strong>
        ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 49) || twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 49))) {
            // line 50
            echo "            ";
            $context["error_count"] = (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 50) + twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 50));
            // line 51
            echo "            <span class=\"count\">
                <span>";
            // line 52
            echo twig_escape_filter($this->env, ($context["error_count"] ?? null), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 55
        echo "    </span>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 59
        echo "    <h2>Translation</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 63
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", true, true, false, 63)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", false, false, false, 63), "-")) : ("-")), "html", null, true);
        echo "</span>
            <span class=\"label\">Default locale</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 67
        echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "fallbackLocales", [], "any", false, false, false, 67), ", "), "-"), "html", null, true);
        echo "</span>
            <span class=\"label\">Fallback locale";
        // line 68
        echo (((0 !== twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "fallbackLocales", [], "any", false, false, false, 68)), 1))) ? ("s") : (""));
        echo "</span>
        </div>
    </div>

    <h2>Messages</h2>

    ";
        // line 74
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 74))) {
            // line 75
            echo "        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    ";
        } else {
            // line 79
            echo "        ";
            $this->displayBlock('messages', $context, $blocks);
            // line 161
            echo "    ";
        }
        // line 162
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 80
        echo "
        ";
        // line 82
        echo "        ";
        list($context["messages_defined"], $context["messages_missing"], $context["messages_fallback"]) =         [[], [], []];
        // line 83
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 84
            echo "            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, false, 84), twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED")))) {
                // line 85
                echo "                ";
                $context["messages_defined"] = twig_array_merge(($context["messages_defined"] ?? null), [0 => $context["message"]]);
                // line 86
                echo "            ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, false, 86), twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING")))) {
                // line 87
                echo "                ";
                $context["messages_missing"] = twig_array_merge(($context["messages_missing"] ?? null), [0 => $context["message"]]);
                // line 88
                echo "            ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, false, 88), twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK")))) {
                // line 89
                echo "                ";
                $context["messages_fallback"] = twig_array_merge(($context["messages_fallback"] ?? null), [0 => $context["message"]]);
                // line 90
                echo "            ";
            }
            // line 91
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
        <div class=\"sf-tabs\">
            <div class=\"tab ";
        // line 94
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 94), 0))) ? ("active") : (""));
        echo "\">
                <h3 class=\"tab-title\">Defined <span class=\"badge\">";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countDefines", [], "any", false, false, false, 95), "html", null, true);
        echo "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are correctly translated into the given locale.
                    </p>

                    ";
        // line 102
        if (twig_test_empty(($context["messages_defined"] ?? null))) {
            // line 103
            echo "                        <div class=\"empty\">
                            <p>None of the used translation messages are defined for the given locale.</p>
                        </div>
                    ";
        } else {
            // line 107
            echo "                        ";
            $this->displayBlock('defined_messages', $context, $blocks);
            // line 110
            echo "                    ";
        }
        // line 111
        echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Fallback <span class=\"badge ";
        // line 115
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 115)) ? ("status-warning") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 115), "html", null, true);
        echo "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are not available for the given locale
                        but Symfony found them in the fallback locale catalog.
                    </p>

                    ";
        // line 123
        if (twig_test_empty(($context["messages_fallback"] ?? null))) {
            // line 124
            echo "                        <div class=\"empty\">
                            <p>No fallback translation messages were used.</p>
                        </div>
                    ";
        } else {
            // line 128
            echo "                        ";
            $this->displayBlock('fallback_messages', $context, $blocks);
            // line 131
            echo "                    ";
        }
        // line 132
        echo "                </div>
            </div>

            <div class=\"tab ";
        // line 135
        echo (((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 135), 0))) ? ("active") : (""));
        echo "\">
                <h3 class=\"tab-title\">Missing <span class=\"badge ";
        // line 136
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 136)) ? ("status-error") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 136), "html", null, true);
        echo "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are not available for the given locale and cannot
                        be found in the fallback locales. Add them to the translation
                        catalogue to avoid Symfony outputting untranslated contents.
                    </p>

                    ";
        // line 145
        if (twig_test_empty(($context["messages_missing"] ?? null))) {
            // line 146
            echo "                        <div class=\"empty\">
                            <p>There are no messages of this category.</p>
                        </div>
                    ";
        } else {
            // line 150
            echo "                        ";
            $this->displayBlock('missing_messages', $context, $blocks);
            // line 153
            echo "                    ";
        }
        // line 154
        echo "                </div>
            </div>
        </div>

        <script>Sfjs.createFilters();</script>

        ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_defined_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "defined_messages"));

        // line 108
        echo "                            ";
        echo twig_call_macro($macros["helper"], "macro_render_table", [($context["messages_defined"] ?? null)], 108, $context, $this->getSourceContext());
        echo "
                        ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_fallback_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fallback_messages"));

        // line 129
        echo "                            ";
        echo twig_call_macro($macros["helper"], "macro_render_table", [($context["messages_fallback"] ?? null), true], 129, $context, $this->getSourceContext());
        echo "
                        ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 150
    public function block_missing_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "missing_messages"));

        // line 151
        echo "                            ";
        echo twig_call_macro($macros["helper"], "macro_render_table", [($context["messages_missing"] ?? null)], 151, $context, $this->getSourceContext());
        echo "
                        ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 165
    public function macro_render_table($__messages__ = null, $__is_fallback__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "messages" => $__messages__,
            "is_fallback" => $__is_fallback__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 166
            echo "    <table data-filters>
        <thead>
            <tr>
                <th data-filter=\"locale\">Locale</th>
                ";
            // line 170
            if (($context["is_fallback"] ?? null)) {
                // line 171
                echo "                    <th>Fallback locale</th>
                ";
            }
            // line 173
            echo "                <th data-filter=\"domain\">Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 181
                echo "            <tr data-filter-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "locale", [], "any", false, false, false, 181), "html", null, true);
                echo "\" data-filter-domain=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "domain", [], "any", false, false, false, 181), "html", null, true);
                echo "\">
                <td class=\"font-normal text-small nowrap\">";
                // line 182
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "locale", [], "any", false, false, false, 182), "html", null, true);
                echo "</td>
                ";
                // line 183
                if (($context["is_fallback"] ?? null)) {
                    // line 184
                    echo "                    <td class=\"font-normal text-small nowrap\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["message"], "fallbackLocale", [], "any", true, true, false, 184)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["message"], "fallbackLocale", [], "any", false, false, false, 184), "-")) : ("-")), "html", null, true);
                    echo "</td>
                ";
                }
                // line 186
                echo "                <td class=\"font-normal text-small text-bold nowrap\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "domain", [], "any", false, false, false, 186), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small nowrap\">";
                // line 187
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "count", [], "any", false, false, false, 187), "html", null, true);
                echo "</td>
                <td>
                    <span class=\"nowrap\">";
                // line 189
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 189), "html", null, true);
                echo "</span>

                    ";
                // line 191
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["message"], "transChoiceNumber", [], "any", false, false, false, 191))) {
                    // line 192
                    echo "                        <small class=\"newline\">(pluralization is used)</small>
                    ";
                }
                // line 194
                echo "
                    ";
                // line 195
                if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "parameters", [], "any", false, false, false, 195)), 0))) {
                    // line 196
                    echo "                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 196), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-";
                    // line 198
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 198), "html", null, true);
                    echo "\" class=\"hidden\">
                            ";
                    // line 199
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["message"], "parameters", [], "any", false, false, false, 199));
                    foreach ($context['_seq'] as $context["_key"] => $context["parameters"]) {
                        // line 200
                        echo "                                ";
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["parameters"], 1);
                        echo "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 202
                    echo "                        </div>
                    ";
                }
                // line 204
                echo "                </td>
                <td class=\"prewrap\">";
                // line 205
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "translation", [], "any", false, false, false, 205), "html", null, true);
                echo "</td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "        </tbody>
    </table>
";
            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 208,  590 => 205,  587 => 204,  583 => 202,  574 => 200,  570 => 199,  566 => 198,  560 => 196,  558 => 195,  555 => 194,  551 => 192,  549 => 191,  544 => 189,  539 => 187,  534 => 186,  528 => 184,  526 => 183,  522 => 182,  515 => 181,  498 => 180,  489 => 173,  485 => 171,  483 => 170,  477 => 166,  460 => 165,  450 => 151,  443 => 150,  433 => 129,  426 => 128,  416 => 108,  409 => 107,  396 => 154,  393 => 153,  390 => 150,  384 => 146,  382 => 145,  368 => 136,  364 => 135,  359 => 132,  356 => 131,  353 => 128,  347 => 124,  345 => 123,  332 => 115,  326 => 111,  323 => 110,  320 => 107,  314 => 103,  312 => 102,  302 => 95,  298 => 94,  294 => 92,  288 => 91,  285 => 90,  282 => 89,  279 => 88,  276 => 87,  273 => 86,  270 => 85,  267 => 84,  262 => 83,  259 => 82,  256 => 80,  249 => 79,  241 => 162,  238 => 161,  235 => 79,  229 => 75,  227 => 74,  218 => 68,  214 => 67,  207 => 63,  201 => 59,  194 => 58,  186 => 55,  180 => 52,  177 => 51,  174 => 50,  172 => 49,  167 => 47,  160 => 46,  153 => 45,  143 => 41,  140 => 40,  134 => 37,  125 => 31,  121 => 30,  112 => 24,  108 => 23,  100 => 18,  95 => 15,  93 => 14,  90 => 13,  84 => 11,  81 => 10,  79 => 9,  74 => 8,  71 => 7,  68 => 6,  61 => 5,  53 => 1,  51 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/translation.html.twig", "/Users/gml/Desktop/安全/CTF/2022/TQLCTF/html/vendor/symfony/web-profiler-bundle/Resources/views/Collector/translation.html.twig");
    }
}
