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

/* @Doctrine/Collector/icon.svg */
class __TwigTemplate_1a4fbfbda4ad7b3c7f8421b906cf1ccdda4fdc0836a22c58a0c3a4daf855105d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/icon.svg"));

        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\" d=\"M5,8h14c1.7,0,3-1.3,3-3s-1.3-3-3-3H5C3.3,2,2,3.3,2,5S3.3,8,5,8z M18,3.6c0.8,0,1.5,0.7,1.5,1.5S18.8,6.6,18,6.6s-1.5-0.7-1.5-1.5S17.2,3.6,18,3.6z M19,9H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,9,19,9z M18,13.6
    c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,13.6,18,13.6z M19,16H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,16,19,16z M18,20.6c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,20.6,18,20.6z\"/>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Doctrine/Collector/icon.svg";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Doctrine/Collector/icon.svg", "/Users/gml/Desktop/安全/CTF/2022/TQLCTF/html/vendor/doctrine/doctrine-bundle/Resources/views/Collector/icon.svg");
    }
}
