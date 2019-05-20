<?php

/* public/account_recovery.twig */
class __TwigTemplate_0e132abff05d4d02a597f78a7de8fb5ec801af1901293730a43ff861a44c0d28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_public.twig", "public/account_recovery.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_public.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Account recovery")), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-12\">
    ";
        // line 12
        echo form_open("/account_recovery", "class='form-recover'");
        echo "
      <h2 class=\"form-recover-heading\">
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\">
        ";
        // line 15
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo_large", array(), "array"))) {
            // line 16
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, assets("theme/default/images/kp_logo_large.png"), "html", null, true);
            echo "\" alt=\"logo\">
        ";
        } else {
            // line 18
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo_large", array(), "array"), "html", null, true);
            echo "\" alt=\"logo\">
        ";
        }
        // line 20
        echo "        </a>
      </h2>
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FIND_ACCOUNT")), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 27
        if ( !twig_test_empty(validation_errors())) {
            // line 28
            echo "            <div class=\"alert alert-danger\"> 
                ";
            // line 29
            echo validation_errors();
            echo "
            </div>
          ";
        }
        // line 32
        echo "          ";
        $this->loadTemplate("blocks/flash_bag.twig", "public/account_recovery.twig", 32)->display($context);
        // line 33
        echo "          <label for=\"email\"  class=\"sr-only\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("EMAIL")), "html", null, true);
        echo "</label>
           <div class=\"form-group\">
            ";
        // line 35
        echo form_input(array("name" => "email", "id" => "email", "type" => "email", "class" => "form-control", "placeholder" => call_user_func_array($this->env->getFunction('l')->getCallable(), array("Enter your email"))), set_value("email"));
        // line 44
        echo "
          </div>


          <input name=\"recover\" class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FIND_ACCOUNT")), "html", null, true);
        echo "\" />
        </div>
      </div>
    </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "public/account_recovery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 48,  107 => 44,  105 => 35,  99 => 33,  96 => 32,  90 => 29,  87 => 28,  85 => 27,  79 => 24,  73 => 20,  67 => 18,  61 => 16,  59 => 15,  55 => 14,  50 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "base_public.twig" %}*/
/* */
/* {% block title %}*/
/*   {{ l('Account recovery') }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {{ parent() }}*/
/* <div class="container">*/
/*   <div class="row">*/
/*     <div class="col-md-12">*/
/*     {{ form_open("/account_recovery","class='form-recover'") }}*/
/*       <h2 class="form-recover-heading">*/
/*         <a href="{{ base_url() }}">*/
/*         {% if app_settings['site_logo_large'] is empty %}*/
/*           <img src="{{ assets('theme/default/images/kp_logo_large.png') }}" alt="logo">*/
/*         {% else %}*/
/*           <img src="{{ app_settings['site_logo_large'] }}" alt="logo">*/
/*         {% endif %}*/
/*         </a>*/
/*       </h2>*/
/*       <div class="panel panel-primary">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title">{{ l('FIND_ACCOUNT') }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           {% if validation_errors() is not empty %}*/
/*             <div class="alert alert-danger"> */
/*                 {{ validation_errors() }}*/
/*             </div>*/
/*           {% endif %}*/
/*           {% include "blocks/flash_bag.twig" %}*/
/*           <label for="email"  class="sr-only">{{ l('EMAIL') }}</label>*/
/*            <div class="form-group">*/
/*             {{ form_input(*/
/*               {*/
/*                 'name': 'email',*/
/*                 'id':'email',*/
/*                 'type':'email',*/
/*                 'class':'form-control',*/
/*                 'placeholder': l('Enter your email')*/
/*               },*/
/*               set_value('email'))*/
/*             }}*/
/*           </div>*/
/* */
/* */
/*           <input name="recover" class="btn btn-lg btn-primary btn-block" type="submit" value="{{ l('FIND_ACCOUNT') }}" />*/
/*         </div>*/
/*       </div>*/
/*     </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
