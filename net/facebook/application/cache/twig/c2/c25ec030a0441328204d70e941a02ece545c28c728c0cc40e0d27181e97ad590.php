<?php

/* public/login.twig */
class __TwigTemplate_64d8e494c6c9b4dac6b31ab43b98b60e4133fdf9d5e298df64302d3df72dbe28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_public.twig", "public/login.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts_footer' => array($this, 'block_javascripts_footer'),
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
        echo "\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Login")), "html", null, true);
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
<div class=\"logmod\">
<span class=\"logmod__logo\">
  ";
        // line 11
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo_large", array(), "array"))) {
            // line 12
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, assets("theme/default/images/kp_logo_large.png"), "html", null, true);
            echo "\" alt=\"logo\">
  ";
        } else {
            // line 14
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo_large", array(), "array"), "html", null, true);
            echo "\" alt=\"logo\">
  ";
        }
        // line 16
        echo "</span>
<div class=\"logmod__wrapper\">
  <div class=\"logmod__container\">
    <ul class=\"logmod__tabs\">
      <li data-tabtar=\"lgm-1\" class=\"current\"><a href=\"#\">";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("login")), "html", null, true);
        echo "</a></li>
\t\t\t";
        // line 21
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "users_can_register", array()) != 0)) {
            // line 22
            echo "          <li data-tabtar=\"lgm-2\">
          \t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, base_url("register"), "html", null, true);
            echo "\">
          \t\t";
            // line 24
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SIGNUP")), "html", null, true);
            echo "
          \t</a>
          </li>
  \t\t";
        }
        // line 28
        echo "    </ul>
    <div class=\"logmod__tab-wrapper\">
      <!-- Signin -->
      <div class=\"logmod__tab lgm-1 show\">
        <div class=\"logmod__heading\">
          <span class=\"logmod__heading-subtitle\">
          \t";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ENTER_USERNAME_PASSWORD_TO_SIGN_IN")), "html", null, true);
        echo "
          </span>
          ";
        // line 36
        echo form_open();
        echo "  
          
          ";
        // line 38
        if ( !twig_test_empty(validation_errors())) {
            // line 39
            echo "            <div class=\"alert alert-danger\"> 
                ";
            // line 40
            echo validation_errors();
            echo "
            </div>
          ";
        }
        // line 43
        echo "
          ";
        // line 44
        $this->loadTemplate("blocks/flash_bag.twig", "public/login.twig", 44)->display($context);
        // line 45
        echo "        </div> 
        <div class=\"logmod__form\">
          <form accept-charset=\"utf-8\" action=\"#\" method=\"POST\" class=\"simform signin\">
            <div class=\"sminputs\">
              <div class=\"input full\">
                <label class=\"string optional\" for=\"username\">
                \t";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("USERNAME")), "html", null, true);
        echo "*
                </label>
                <input class=\"string optional\" name=\"username\" maxlength=\"255\" id=\"username\" placeholder=\"";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("USERNAME")), "html", null, true);
        echo "\" type=\"text\" size=\"50\" />
              </div>
            </div>
            <div class=\"sminputs\">
              <div class=\"input full\">
                <label class=\"string optional\" for=\"password\">";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("PASSWORD")), "html", null, true);
        echo "*</label>
                <input class=\"string optional\" maxlength=\"255\" name=\"password\" id=\"password\"  placeholder=\"";
        // line 59
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("PASSWORD")), "html", null, true);
        echo "\" type=\"password\" size=\"50\" />
                <span class=\"hide-password\"><i class='fa fa-eye'></i></span>
              </div>
            </div>

            ";
        // line 64
        if ( !twig_test_empty((isset($context["fb_login_url"]) ? $context["fb_login_url"] : null))) {
            // line 65
            echo "              <div class=\"loginSignUpSeparator\"><span class=\"textInSeparator\" aria-label=\"or\">or</span></div>
              <div class=\"thirdparty-login-box\">
                <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["fb_login_url"]) ? $context["fb_login_url"] : null), "html", null, true);
            echo "\" class=\"social-button facebook\" ><i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i> Login with Facebook</a>
              </div>
            ";
        }
        // line 70
        echo "
            <div class=\"simform__actions\">
              <input type=\"submit\" class=\"submit\" name=\"signin\" id=\"signinBtn\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SIGNIN")), "html", null, true);
        echo "\" />
              <span class=\"simform__actions-sidetext\">
                <input type=\"checkbox\" name=\"remember\" id=\"remember\" class=\"checkbox-style\"/>
                <label for=\"remember\"></label>
                <span class=\"checkboxText\" >";
        // line 76
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("REMEMBER_ME")), "html", null, true);
        echo "</span>
              </span>
              <span class=\"simform__actions-sidetext\">
                <a class=\"special\" role=\"link\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, base_url("account_recovery"), "html", null, true);
        echo "\">
                \t";
        // line 80
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FORGOT_PASSWORD_USERNAME")), "html", null, true);
        echo "
                </a>
              </span>
            </div> 
          </form>
        </div> 
      </div>
    </div>
  </div> 
</div>
";
    }

    // line 92
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 93
        echo "  ";
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
  <script type=\"text/javascript\">
  var LoginModalController = {
    tabsElementName: \".logmod__tabs li\",
    tabElementName: \".logmod__tab\",
    inputElementsName: \".logmod__form .input\",
    hidePasswordName: \".hide-password\",
    
    inputElements: null,
    tabsElement: null,
    tabElement: null,
    hidePassword: null,
    
    activeTab: null,
    tabSelection: 0, // 0 - first, 1 - second
    
    findElements: function () {
        var base = this;
        
        base.tabsElement = \$(base.tabsElementName);
        base.tabElement = \$(base.tabElementName);
        base.inputElements = \$(base.inputElementsName);
        base.hidePassword = \$(base.hidePasswordName);
        
        return base;
    },
    
   
    addClickEvents: function () {
      var base = this;
        
        base.hidePassword.on(\"click\", function (e) {
            var \$this = \$(this),
                \$pwInput = \$this.prev(\"input\");
            
            if (\$pwInput.attr(\"type\") == \"password\") {
                \$pwInput.attr(\"type\", \"text\");
                \$this.html(\"<i class='fa fa-eye-slash'></i>\");
            } else {
                \$pwInput.attr(\"type\", \"password\");
                \$this.html(\"<i class='fa fa-eye'></i>\");
            }
        });
        base.inputElements.find(\"label\").on(\"click\", function (e) {
           var \$this = \$(this),
               \$input = \$this.next(\"input\"); 
            \$input.focus();
        });     
        return base;
    },
   
    initialize: function () {
        var base = this;        
        base.findElements().addClickEvents();
    }
};
\$(document).ready(function() {LoginModalController.initialize();});
</script>
";
    }

    public function getTemplateName()
    {
        return "public/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 93,  205 => 92,  190 => 80,  186 => 79,  180 => 76,  173 => 72,  169 => 70,  163 => 67,  159 => 65,  157 => 64,  149 => 59,  145 => 58,  137 => 53,  132 => 51,  124 => 45,  122 => 44,  119 => 43,  113 => 40,  110 => 39,  108 => 38,  103 => 36,  98 => 34,  90 => 28,  83 => 24,  79 => 23,  76 => 22,  74 => 21,  70 => 20,  64 => 16,  58 => 14,  52 => 12,  50 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "base_public.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ l("Login") }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {{ parent() }}*/
/* <div class="logmod">*/
/* <span class="logmod__logo">*/
/*   {% if app_settings['site_logo_large'] is empty %}*/
/*     <img src="{{ assets('theme/default/images/kp_logo_large.png') }}" alt="logo">*/
/*   {% else %}*/
/*     <img src="{{ app_settings['site_logo_large'] }}" alt="logo">*/
/*   {% endif %}*/
/* </span>*/
/* <div class="logmod__wrapper">*/
/*   <div class="logmod__container">*/
/*     <ul class="logmod__tabs">*/
/*       <li data-tabtar="lgm-1" class="current"><a href="#">{{ l("login") }}</a></li>*/
/* 			{% if app_settings.users_can_register != 0 %}*/
/*           <li data-tabtar="lgm-2">*/
/*           	<a href="{{ base_url('register') }}">*/
/*           		{{ l("SIGNUP") }}*/
/*           	</a>*/
/*           </li>*/
/*   		{% endif %}*/
/*     </ul>*/
/*     <div class="logmod__tab-wrapper">*/
/*       <!-- Signin -->*/
/*       <div class="logmod__tab lgm-1 show">*/
/*         <div class="logmod__heading">*/
/*           <span class="logmod__heading-subtitle">*/
/*           	{{ l("ENTER_USERNAME_PASSWORD_TO_SIGN_IN") }}*/
/*           </span>*/
/*           {{ form_open() }}  */
/*           */
/*           {% if validation_errors() is not empty %}*/
/*             <div class="alert alert-danger"> */
/*                 {{ validation_errors() }}*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% include "blocks/flash_bag.twig" %}*/
/*         </div> */
/*         <div class="logmod__form">*/
/*           <form accept-charset="utf-8" action="#" method="POST" class="simform signin">*/
/*             <div class="sminputs">*/
/*               <div class="input full">*/
/*                 <label class="string optional" for="username">*/
/*                 	{{ l("USERNAME") }}**/
/*                 </label>*/
/*                 <input class="string optional" name="username" maxlength="255" id="username" placeholder="{{ l("USERNAME") }}" type="text" size="50" />*/
/*               </div>*/
/*             </div>*/
/*             <div class="sminputs">*/
/*               <div class="input full">*/
/*                 <label class="string optional" for="password">{{ l("PASSWORD") }}*</label>*/
/*                 <input class="string optional" maxlength="255" name="password" id="password"  placeholder="{{ l("PASSWORD") }}" type="password" size="50" />*/
/*                 <span class="hide-password"><i class='fa fa-eye'></i></span>*/
/*               </div>*/
/*             </div>*/
/* */
/*             {% if fb_login_url is not empty %}*/
/*               <div class="loginSignUpSeparator"><span class="textInSeparator" aria-label="or">or</span></div>*/
/*               <div class="thirdparty-login-box">*/
/*                 <a href="{{fb_login_url}}" class="social-button facebook" ><i class="fa fa-facebook-official" aria-hidden="true"></i> Login with Facebook</a>*/
/*               </div>*/
/*             {% endif %}*/
/* */
/*             <div class="simform__actions">*/
/*               <input type="submit" class="submit" name="signin" id="signinBtn" value="{{ l("SIGNIN") }}" />*/
/*               <span class="simform__actions-sidetext">*/
/*                 <input type="checkbox" name="remember" id="remember" class="checkbox-style"/>*/
/*                 <label for="remember"></label>*/
/*                 <span class="checkboxText" >{{ l("REMEMBER_ME") }}</span>*/
/*               </span>*/
/*               <span class="simform__actions-sidetext">*/
/*                 <a class="special" role="link" href="{{ base_url('account_recovery') }}">*/
/*                 	{{ l("FORGOT_PASSWORD_USERNAME") }}*/
/*                 </a>*/
/*               </span>*/
/*             </div> */
/*           </form>*/
/*         </div> */
/*       </div>*/
/*     </div>*/
/*   </div> */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts_footer  %}*/
/*   {{ parent() }}*/
/*   <script type="text/javascript">*/
/*   var LoginModalController = {*/
/*     tabsElementName: ".logmod__tabs li",*/
/*     tabElementName: ".logmod__tab",*/
/*     inputElementsName: ".logmod__form .input",*/
/*     hidePasswordName: ".hide-password",*/
/*     */
/*     inputElements: null,*/
/*     tabsElement: null,*/
/*     tabElement: null,*/
/*     hidePassword: null,*/
/*     */
/*     activeTab: null,*/
/*     tabSelection: 0, // 0 - first, 1 - second*/
/*     */
/*     findElements: function () {*/
/*         var base = this;*/
/*         */
/*         base.tabsElement = $(base.tabsElementName);*/
/*         base.tabElement = $(base.tabElementName);*/
/*         base.inputElements = $(base.inputElementsName);*/
/*         base.hidePassword = $(base.hidePasswordName);*/
/*         */
/*         return base;*/
/*     },*/
/*     */
/*    */
/*     addClickEvents: function () {*/
/*       var base = this;*/
/*         */
/*         base.hidePassword.on("click", function (e) {*/
/*             var $this = $(this),*/
/*                 $pwInput = $this.prev("input");*/
/*             */
/*             if ($pwInput.attr("type") == "password") {*/
/*                 $pwInput.attr("type", "text");*/
/*                 $this.html("<i class='fa fa-eye-slash'></i>");*/
/*             } else {*/
/*                 $pwInput.attr("type", "password");*/
/*                 $this.html("<i class='fa fa-eye'></i>");*/
/*             }*/
/*         });*/
/*         base.inputElements.find("label").on("click", function (e) {*/
/*            var $this = $(this),*/
/*                $input = $this.next("input"); */
/*             $input.focus();*/
/*         });     */
/*         return base;*/
/*     },*/
/*    */
/*     initialize: function () {*/
/*         var base = this;        */
/*         base.findElements().addClickEvents();*/
/*     }*/
/* };*/
/* $(document).ready(function() {LoginModalController.initialize();});*/
/* </script>*/
/* {% endblock %}*/
