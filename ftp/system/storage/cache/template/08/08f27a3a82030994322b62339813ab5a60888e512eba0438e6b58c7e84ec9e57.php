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
class __TwigTemplate_795998330d5707832f12306a489ed430f508d4b2dc82830fdb2f18667b5179c2 extends \Twig\Template
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
        echo "    <div class=\"swiper-viewport\">
        <div id=\"banner";
        // line 2
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
          <div class=\"swiper-wrapper\">";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "          <section class=\"home-slider simple-head\" style=\"background-image:url(image/";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 4);
            echo ")\" data-stellar-background-ratio=\"0.5\"> 
            <!-- Container Fluid -->
            <div class=\"container-fluid\">
              <div class=\"position-center-center\"> 
                <!-- Header Text -->
                <div class=\"col-lg-7 col-lg-offset-5\"> <span class=\"price\"><small>\$</small>299</span>
                  <h4>";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "name", [], "any", false, false, false, 10);
            echo "</h4>
                  <h1 class=\"extra-huge-text\">";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 11);
            echo "
                  </h1>
                  <div class=\"text-center\"> <a href=\"";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 13);
            echo "\" class=\"btn btn-round margin-top-40\">SHOP NOW</a> </div>
                </div>
          </section>
        </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </div>
    </div>

<!--
<div class=\"swiper-viewport\">
  <div id=\"banner";
        // line 22
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\">";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 24
            echo "      <div class=\"swiper-slide\">";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 24)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 24);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 24);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 24);
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 24);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 24);
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>
  </div>
</div>-->
<script type=\"text/javascript\"><!--
\$('#banner";
        // line 29
        echo ($context["module"] ?? null);
        echo "').swiper({
\teffect: 'fade',
\tautoplay: 1500,
    autoplayDisableOnInteraction: false
});
--></script> ";
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
        return array (  121 => 29,  115 => 25,  92 => 24,  88 => 23,  84 => 22,  77 => 17,  67 => 13,  62 => 11,  58 => 10,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/banner.twig", "");
    }
}
