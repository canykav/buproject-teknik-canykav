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

/* default/template/common/footer.twig */
class __TwigTemplate_5ec88d0860d8c011c063bc1fa46843d96b278ddaf5a8dab28a063baa347e7f61 extends \Twig\Template
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
        echo "<footer>
      <div class=\"container\"> 
        
        <!-- ABOUT Location -->
        <div class=\"col-md-3\">
          <div class=\"about-footer\"> <img class=\"margin-bottom-30\" src=\"catalog/view/theme/default/image/logo-foot.png\" alt=\"\" >
            <p><i class=\"icon-pointer\"></i>";
        // line 7
        echo ($context["address"] ?? null);
        echo "</p>
            <p><i class=\"icon-call-end\"></i> ";
        // line 8
        echo ($context["telephone"] ?? null);
        echo "</p>
            <p><i class=\"icon-envelope\"></i> ";
        // line 9
        echo ($context["email"] ?? null);
        echo "</p>
          </div>
        </div>
        
        <!-- HELPFUL LINKS -->
        <div class=\"col-md-3\">
          <h6>HELPFUL LINKS</h6>
          <ul class=\"link\">
            <li><a href=\"#.\"> Products</a></li>
            <li><a href=\"#.\"> Find a Store</a></li>
            <li><a href=\"#.\"> Features</a></li>
            <li><a href=\"#.\"> Privacy Policy</a></li>
            <li><a href=\"#.\"> Blog</a></li>
            <li><a href=\"#.\"> Press Kit </a></li>
          </ul>
        </div>
        
        <!-- SHOP -->
        <div class=\"col-md-3\">
          <h6>SHOP</h6>
          <ul class=\"link\">
          ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 31
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 31);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 31);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "          <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 34
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          </ul>
        </div>
        
        <!-- MY ACCOUNT -->
        <div class=\"col-md-3\">
           <h6>";
        // line 40
        echo ($context["text_account"] ?? null);
        echo "</h6>
        <ul class=\"link\">
          <li><a href=\"";
        // line 42
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 43
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 44
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 45
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
        </div>
        
        <!-- Rights -->
        <div class=\"rights\">
          <p>";
        // line 51
        echo ($context["powered"] ?? null);
        echo " All right reserved. </p>
          <div class=\"scroll\"> <a href=\"#wrap\" class=\"go-up\"><i class=\"lnr lnr-arrow-up\"></i></a> </div>
        </div>
      </div>
    </footer>
</div>

<script src=\"catalog/view/javascript/jquery-1.11.3.min.js\"></script> 
<script src=\"catalog/view/javascript/bootstrap.min.js\"></script> 
<script src=\"catalog/view/javascript/own-menu.js\"></script> 
<script src=\"catalog/view/javascript/jquery.lighter.js\"></script> 
<script src=\"catalog/view/javascript/owl.carousel.min.js\"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type=\"text/javascript\" src=\"catalog/view/theme/default/extension/rs-plugin/js/jquery.tp.t.min.js\"></script> 
<script type=\"text/javascript\" src=\"catalog/view/theme/default/extension/rs-plugin/js/jquery.tp.min.js\"></script> 
<script src=\"catalog/view/javascript/main.js\"></script>

";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 70
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 70);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 70);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 70);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 73
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 75,  186 => 73,  182 => 72,  169 => 70,  165 => 69,  144 => 51,  133 => 45,  127 => 44,  121 => 43,  115 => 42,  110 => 40,  99 => 34,  92 => 33,  81 => 31,  77 => 30,  53 => 9,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
