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

/* default/template/common/header.twig */
class __TwigTemplate_46c2af61180c59a688203012e44488d8fadaca62dfd667f3f217b853a2697cd5 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/default/extension/rs-plugin/css/settings.css\" media=\"screen\" />

<!-- Bootstrap Core CSS -->
<link href=\"catalog/view/theme/default/stylesheet/bootstrap.min.css\" rel=\"stylesheet\">

<!-- Custom CSS -->
<link href=\"catalog/view/theme/default/stylesheet/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"catalog/view/theme/default/stylesheet/ionicons.min.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/default/stylesheet/main.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/default/stylesheet/style.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/default/stylesheet/responsive.css\" rel=\"stylesheet\">

<!-- JavaScripts -->
<script src=\"catalog/view/javascript/modernizr.js\"></script>

<!-- Online Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>

";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 41
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 41);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 41);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 41);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 44
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 48
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 48);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 48);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 51
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "</head>

<body>

<!-- LOADER -->
<div id=\"loader\">
  <div class=\"position-center-center\">
    <div class=\"ldr\"></div>
  </div>
</div>


";
        // line 65
        echo ($context["menu"] ?? null);
        echo "

<!-- Wrap -->
<div id=\"wrap\"> 
  <!-- Header -->
  <header class=\"header-2\">
    <div class=\"container-fluid\">
      <div class=\"sticky\"> 
        
        <!-- Nav Icon --> 
        <a href=\"#cd-nav\" class=\"cd-nav-trigger\"><span class=\"cd-nav-icon\"></span> 
        
        <!-- Svg Icon --> 
        <svg x=\"0px\" y=\"0px\" width=\"54px\" height=\"54px\" viewBox=\"0 0 54 54\">
        <circle fill=\"transparent\" stroke=\"#2d3a4b\" stroke-width=\"1\" cx=\"27\" cy=\"27\" r=\"25\" stroke-dasharray=\"157 157\" stroke-dashoffset=\"157\"></circle>
        </svg> </a> 
        
        <!-- Logo -->
        <div class=\"logo logo-center\"> <a href=\"#.\"><img class=\"img-responsive\" src=\"catalog/view/theme/default/image/logo-2.png\" alt=\"\" ></a> </div>
        <!-- Navigation -->
        <nav class=\"navbar\"> 
          <!-- Nav Right -->
          <div class=\"nav-right\">
            <ul class=\"navbar-right\">
              
              <!-- USER INFO -->
              <li class=\"dropdown user-acc\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" ><i class=\"icon-user\"></i> </a>
                <ul class=\"dropdown-menu\">
                  <li>
                    <h6>HELLO! Jhon Smith</h6>
                  </li>
                  <li><a href=\"";
        // line 96
        echo ($context["shopping_cart"] ?? null);
        echo "\">";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 97
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 98
        echo ($context["logout"] ?? null);
        echo "\">";
        echo ($context["text_logout"] ?? null);
        echo "</a></li>
                </ul>
              </li>
              
              <!-- USER BASKET -->
              <li class=\"dropdown user-basket\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"><i class=\"icon-basket-loaded\"></i> </a>
                <ul class=\"dropdown-menu\">
                  <li>
                    <div class=\"media-left\">
                      <div class=\"cart-img\"> <a href=\"#\"> <img class=\"media-object img-responsive\" src=\"catalog/view/theme/default/image/cart-img-1.jpg\" alt=\"...\"> </a> </div>
                    </div>
                    <div class=\"media-body\">
                      <h6 class=\"media-heading\">WOOD CHAIR</h6>
                      <span class=\"price\">129.00 USD</span> <span class=\"qty\">QTY: 01</span> </div>
                  </li>
                  <li>
                    <div class=\"media-left\">
                      <div class=\"cart-img\"> <a href=\"#\"> <img class=\"media-object img-responsive\" src=\"catalog/view/theme/default/image/cart-img-2.jpg\" alt=\"...\"> </a> </div>
                    </div>
                    <div class=\"media-body\">
                      <h6 class=\"media-heading\">WOOD STOOL</h6>
                      <span class=\"price\">129.00 USD</span> <span class=\"qty\">QTY: 01</span> </div>
                  </li>
                  <li>
                    <h5 class=\"text-center\">SUBTOTAL: 258.00 USD</h5>
                  </li>
                  <li class=\"margin-0\">
                    <div class=\"row\">
                      <div class=\"col-xs-6\"> <a href=\"shopping-cart.html\" class=\"btn\">VIEW CART</a></div>
                      <div class=\"col-xs-6 \"> <a href=\"checkout.html\" class=\"btn\">CHECK OUT</a></div>
                    </div>
                  </li>
                </ul>
              </li>
              
              <!-- SEARCH BAR -->
              <li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"search-open\"><i class=\" icon-magnifier\"></i></a>
                <div class=\"search-inside animated bounceInUp\"> <i class=\"icon-close search-close\"></i>
                  <div class=\"search-overlay\"></div>
                  <div class=\"position-center-center\">
                    <div class=\"search\">
                      <form>
                        <input type=\"search\" placeholder=\"Search Shop\">
                        <button type=\"submit\"><i class=\"icon-check\"></i></button>
                      </form>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 98,  225 => 97,  219 => 96,  185 => 65,  171 => 53,  163 => 51,  159 => 50,  148 => 48,  144 => 47,  141 => 46,  132 => 44,  128 => 43,  115 => 41,  111 => 40,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
