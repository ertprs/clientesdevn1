<?php

/* install/step2.twig */
class __TwigTemplate_8becbb04199336bd73cc7424daa335e6ceeb003aeffbde36eaa7f5e10197eb48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("install/base.twig", "install/step2.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "install/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page"] = "Install";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Kingposter Installation
";
    }

    // line 10
    public function block_mainContent($context, array $blocks = array())
    {
        // line 11
        echo "\t";
        echo form_open();
        echo "
\t<div class=\"panel pv panel-default\">
      <div class=\"panel-heading\">
      \t<h4>Product Verification</h4>
      </div>
      <div class=\"panel-body\">
        ";
        // line 17
        if ( !twig_test_empty(validation_errors())) {
            // line 18
            echo "          <div class=\"alert alert-danger\">
                ";
            // line 19
            echo validation_errors();
            echo "
            </div>
        ";
        }
        // line 21
        echo " 
        ";
        // line 22
        $this->loadTemplate("blocks/flash_bag.twig", "install/step2.twig", 22)->display($context);
        // line 23
        echo "      \t<p class=\"m-a-0\">Please Enter your purchase code to continue</p>
\t\t    <span><a href=\"https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-\" target=\"_blank\">How to find my purchase code?</a></span>
      \t<input type=\"text\" class=\"form-control m-t-1\" name=\"purchaseCode\" value=\"\" placeholder=\"Enter your purchase code\">
        <br />
      \t<input type=\"submit\" name=\"verify\" value=\"Verify\" class=\"btn btn-primary m-t-1 w-100 pull-right\">
      </div>
  \t</div>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "install/step2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  67 => 22,  64 => 21,  58 => 19,  55 => 18,  53 => 17,  43 => 11,  40 => 10,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends "install/base.twig" %}*/
/* */
/* {% set page = 'Install' %}*/
/* */
/* {% block title %}*/
/*   Kingposter Installation*/
/* {% endblock %}*/
/* */
/* */
/* {% block mainContent %}*/
/* 	{{ form_open()}}*/
/* 	<div class="panel pv panel-default">*/
/*       <div class="panel-heading">*/
/*       	<h4>Product Verification</h4>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         {% if validation_errors() is not empty %}*/
/*           <div class="alert alert-danger">*/
/*                 {{ validation_errors() }}*/
/*             </div>*/
/*         {% endif %} */
/*         {% include "blocks/flash_bag.twig" %}*/
/*       	<p class="m-a-0">Please Enter your purchase code to continue</p>*/
/* 		    <span><a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-" target="_blank">How to find my purchase code?</a></span>*/
/*       	<input type="text" class="form-control m-t-1" name="purchaseCode" value="" placeholder="Enter your purchase code">*/
/*         <br />*/
/*       	<input type="submit" name="verify" value="Verify" class="btn btn-primary m-t-1 w-100 pull-right">*/
/*       </div>*/
/*   	</div>*/
/* 	</form>*/
/* {% endblock %}*/
