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

/* @WebProfiler/Icon/notifier.svg */
class __TwigTemplate_38ce8306bc5a07cff2b940fd290afd8f26aaf3c3c2d1a52dfb1b71b17b348d40 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/notifier.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M11.23,4.8c-3,.83-5.07,3.18-5.07,5.9H7.39c0-2.21,1.77-4,4.17-4.72ZM7.49,0A12.22,12.22,0,0,0,0,11.59H2.07A10.14,10.14,0,0,1,8.23,2Zm8.24,2a10.14,10.14,0,0,1,6.16,9.64H24A12.24,12.24,0,0,0,16.47,0ZM4.41,15.64V10.7a7.57,7.57,0,0,1,15.14,0v4.94l3.3,4.4H1.11Zm4.45,5.3A3.06,3.06,0,0,0,11.92,24H12a3.07,3.07,0,0,0,3.07-3.06Z\"/></svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/notifier.svg";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Icon/notifier.svg", "/Users/gml/Desktop/安全/CTF/2022/TQLCTF/html/vendor/symfony/web-profiler-bundle/Resources/views/Icon/notifier.svg");
    }
}
