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

/* default/template/common/menu.twig */
class __TwigTemplate_f0f40fe4d9b746aecdb0ad0d8b6aefb5d07de3d84de225e64e30cce69e8a29b3 extends \Twig\Template
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
        echo "  <!-- Nav Popup -->
  <div id=\"cd-nav\" class=\"cd-nav\">
    <div class=\"cd-navigation-wrapper\">
      <div class=\"position-center-center\">
        <div class=\"col-sm-5\">
          
          <!-- Nav -->
          <nav>
            <ul class=\"cd-primary-nav\">
              <li class=\"active\"> <a href=\"";
        // line 10
        echo ($context["home"] ?? null);
        echo "\">";
        echo ($context["text_home"] ?? null);
        echo " </a></li>
              <li> <a href=\"about-us_01.html\">About </a> </li>
              <li class=\"drop-menu\"> <a href=\"#\" class=\"title collapsed\" data-toggle=\"collapse\" data-target=\"#down-1\"> shop </a>
                  <div class=\"collapse\" id=\"down-1\">
                    <div class=\"well\">
                      <ul>
                      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
            echo "                        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 17);
            echo "</a></li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                      </ul>
                    </div>
                  </div>
                </li>
              <li> <a href=\"blog-list_01.html\"> Blog</a> </li>
              <li> <a href=\"";
        // line 24
        echo ($context["contact"] ?? null);
        echo "\"> ";
        echo ($context["text_contact"] ?? null);
        echo "</a> </li>
              </ul>
          </nav>
          
          <!-- Social Icons -->
          <ul class=\"social_icons\">
            <li><a href=\"#.\"><i class=\"icon-social-facebook\"></i></a></li>
            <li><a href=\"#.\"><i class=\"icon-social-twitter\"></i></a></li>
            <li><a href=\"#.\"><i class=\"icon-social-tumblr\"></i></a></li>
            <li><a href=\"#.\"><i class=\"icon-social-youtube\"></i></a></li>
            <li><a href=\"#.\"><i class=\"icon-social-dribbble\"></i></a></li>
          </ul>             
        </div>
        
        <!-- Right Section -->
        <div class=\"col-sm-7\">
      </div>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  74 => 19,  63 => 17,  59 => 16,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
