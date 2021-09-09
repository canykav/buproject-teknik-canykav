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

/* default/template/extension/module/banner.twig */
class __TwigTemplate_71a3310edffffd404ef2b5f6e78084d70aa03b88ea86231d3c33ab981fa3363f extends \Twig\Template
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
        // line 1
        echo "  <section class=\"home-slider simple-head\" style=\"background-image:url(image/";
        echo twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "image", [], "any", false, false, false, 1);
        echo ")\" data-stellar-background-ratio=\"0.5\"> 
    <!-- Container Fluid -->
    <div class=\"container-fluid\">
      <div class=\"position-center-center\"> 
        <!-- Header Text -->
        <div class=\"col-lg-7 col-lg-offset-5\">
          <h1 class=\"extra-huge-text\">";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "title", [], "any", false, false, false, 7);
        echo "
          </h1>
          <div class=\"text-center\"> <a href=\"";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "link", [], "any", false, false, false, 9);
        echo "\" class=\"btn btn-round margin-top-40\">SHOP NOW</a> </div>
        </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/banner.twig", "");
    }
}
