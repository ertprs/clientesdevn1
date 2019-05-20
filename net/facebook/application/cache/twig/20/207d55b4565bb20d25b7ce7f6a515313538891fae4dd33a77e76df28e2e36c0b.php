<?php

/* settings/tabs.twig */
class __TwigTemplate_2257d9cb2e1d2571b4092710e2c7059f298c404e0dd36c424abcabf29975e79e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul class=\"nav nav-tabs\">
\t<li class='";
        // line 2
        if (((isset($context["current_page"]) ? $context["current_page"] : null) == "user_settings")) {
            echo "active";
        }
        echo "'>
\t\t<a href='";
        // line 3
        echo twig_escape_filter($this->env, base_url("settings"), "html", null, true);
        echo "' >
\t\t\t<i class='fa fa-fw fa-user'></i>
\t\t\t<span class=\"hidden-xs\">";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Profile")), "html", null, true);
        echo "</span>
\t\t</a>
\t</li>

\t<li class='";
        // line 9
        if (((isset($context["current_page"]) ? $context["current_page"] : null) == "general_settings")) {
            echo "active";
        }
        echo "'>
\t\t<a href='";
        // line 10
        echo twig_escape_filter($this->env, base_url("settings/general_settings"), "html", null, true);
        echo "' >
\t\t\t<i class='fa fa-fw fa-tasks'></i>
\t\t\t<span class=\"hidden-xs\">";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("General settings")), "html", null, true);
        echo "</span>
\t\t</a>
\t</li>

\t<li class='";
        // line 16
        if (((isset($context["current_page"]) ? $context["current_page"] : null) == "publish_settings")) {
            echo "active";
        }
        echo "'>
\t\t<a href='";
        // line 17
        echo twig_escape_filter($this->env, base_url("settings/publish_settings"), "html", null, true);
        echo "' >
\t\t\t<i class='fa fa-fw fa-clipboard'></i>
\t\t\t<span class=\"hidden-xs\">";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Publish settings")), "html", null, true);
        echo "</span>
\t\t</a>
\t</li>

\t<li class='";
        // line 23
        if (((isset($context["current_page"]) ? $context["current_page"] : null) == "fb_accounts")) {
            echo "active";
        }
        echo "'>
\t\t<a href='";
        // line 24
        echo twig_escape_filter($this->env, base_url("settings/fb_accounts"), "html", null, true);
        echo "' >
\t\t\t<i class='fa fa-fw fa-facebook'></i>
\t\t\t<span class=\"hidden-xs\">";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook accounts")), "html", null, true);
        echo "</span>
\t\t</a>
\t</li>

\t<li class='";
        // line 30
        if (((isset($context["current_page"]) ? $context["current_page"] : null) == "fbapps")) {
            echo "active";
        }
        echo "'>
\t\t<a href='";
        // line 31
        echo twig_escape_filter($this->env, base_url("settings/fbapps"), "html", null, true);
        echo "' >
\t\t\t<i class='fa fa-fw fa-plug'></i>
\t\t\t<span class=\"hidden-xs\">";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook Apps")), "html", null, true);
        echo "</span>
\t\t</a>
\t</li>

\t";
        // line 37
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method") == true)) {
            // line 38
            echo "\t\t<li class='";
            if (((isset($context["current_page"]) ? $context["current_page"] : null) == "app_settings")) {
                echo "active";
            }
            echo "'>
\t\t\t<a href='";
            // line 39
            echo twig_escape_filter($this->env, base_url("settings/app_settings"), "html", null, true);
            echo "' ><i class='fa fa-fw fa-cogs'></i> 
\t\t\t\t<span class=\"hidden-xs\">";
            // line 40
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("App settings")), "html", null, true);
            echo "</span>
\t\t\t</a>

\t\t\t";
            // line 43
            if (((isset($context["current_page"]) ? $context["current_page"] : null) == "app_settings")) {
                // line 44
                echo "\t\t\t<ul class=\"sub-menu hidden-xs\">
                <li>
                \t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, base_url("settings/app_settings#general"), "html", null, true);
                echo "\">
\t    \t\t\t\t<i class=\"fa fa-cog\"></i>
\t    \t\t\t\t<span class=\"hidden-xs\">";
                // line 48
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("General")), "html", null, true);
                echo "</span>
\t    \t\t\t</a>
\t    \t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"";
                // line 52
                echo twig_escape_filter($this->env, base_url("settings/app_settings#publish_settings"), "html", null, true);
                echo "\">
    \t\t\t\t\t<i class=\"fa fa-fw fa-clipboard\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t<span class=\"hidden-xs\">";
                // line 54
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Publish settings")), "html", null, true);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, base_url("settings/app_settings#theme_settings"), "html", null, true);
                echo "\">
\t\t\t\t\t    <i class=\"fa fa-fw fa-paint-brush\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t<span class=\"hidden-xs\">";
                // line 60
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Theme settings")), "html", null, true);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"";
                // line 64
                echo twig_escape_filter($this->env, base_url("settings/app_settings#ads_settings"), "html", null, true);
                echo "\">
\t\t\t\t\t    <i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"hidden-xs\">";
                // line 66
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Ads Settings")), "html", null, true);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"";
                // line 70
                echo twig_escape_filter($this->env, base_url("settings/app_settings#social_login"), "html", null, true);
                echo "\">
\t\t\t\t\t    <i class=\"fa fa-facebook fa-fw\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t<span class=\"hidden-xs\">";
                // line 72
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Social login")), "html", null, true);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"";
                // line 76
                echo twig_escape_filter($this->env, base_url("settings/app_settings#advanced_settings"), "html", null, true);
                echo "\">
\t\t\t\t\t    <i class=\"fa fa-fw fa-cogs\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t<span class=\"hidden-xs\">";
                // line 78
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Advanced settings")), "html", null, true);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"";
                // line 82
                echo twig_escape_filter($this->env, base_url("settings/app_settings#mail_settings"), "html", null, true);
                echo "\">
\t\t\t\t\t    <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"hidden-xs\">";
                // line 84
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Mail settings")), "html", null, true);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
            </ul>
            ";
            }
            // line 89
            echo "
\t\t</li>
\t\t<li class='";
            // line 91
            if (((isset($context["current_page"]) ? $context["current_page"] : null) == "roles")) {
                echo "active";
            }
            echo "'>
\t\t\t<a href='";
            // line 92
            echo twig_escape_filter($this->env, base_url("settings/roles"), "html", null, true);
            echo "' >
\t\t\t\t<i class='fa fa-fw fa-users'></i>
\t\t\t\t<span class=\"hidden-xs\">";
            // line 94
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Roles")), "html", null, true);
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t<li class='";
            // line 97
            if (((isset($context["current_page"]) ? $context["current_page"] : null) == "modules_manager")) {
                echo "active";
            }
            echo "'>
\t\t\t<a href='";
            // line 98
            echo twig_escape_filter($this->env, base_url("settings/modules_manager"), "html", null, true);
            echo "' >
\t\t\t\t<i class=\"fa fa-th-large\" aria-hidden=\"true\"></i>
\t\t\t\t<span class=\"hidden-xs\">";
            // line 100
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Modules manager")), "html", null, true);
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            // line 103
            if ((isset($context["enable_proxy"]) ? $context["enable_proxy"] : null)) {
                // line 104
                echo "\t\t<li class='";
                if (((isset($context["current_page"]) ? $context["current_page"] : null) == "Proxies_manager")) {
                    echo "active";
                }
                echo "'>
\t\t\t<a href='";
                // line 105
                echo twig_escape_filter($this->env, base_url("settings/proxies_manager"), "html", null, true);
                echo "' >
\t\t\t\t<i class=\"fa fa-list\" aria-hidden=\"true\"></i>
\t\t\t\t<span class=\"hidden-xs\">";
                // line 107
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Proxies manager")), "html", null, true);
                echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            }
            // line 111
            echo "\t";
        }
        // line 112
        echo "
</ul>
";
        // line 114
        $this->loadTemplate("blocks/ads.twig", "settings/tabs.twig", 114)->display($context);
    }

    public function getTemplateName()
    {
        return "settings/tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 114,  284 => 112,  281 => 111,  274 => 107,  269 => 105,  262 => 104,  260 => 103,  254 => 100,  249 => 98,  243 => 97,  237 => 94,  232 => 92,  226 => 91,  222 => 89,  214 => 84,  209 => 82,  202 => 78,  197 => 76,  190 => 72,  185 => 70,  178 => 66,  173 => 64,  166 => 60,  161 => 58,  154 => 54,  149 => 52,  142 => 48,  137 => 46,  133 => 44,  131 => 43,  125 => 40,  121 => 39,  114 => 38,  112 => 37,  105 => 33,  100 => 31,  94 => 30,  87 => 26,  82 => 24,  76 => 23,  69 => 19,  64 => 17,  58 => 16,  51 => 12,  46 => 10,  40 => 9,  33 => 5,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="nav nav-tabs">*/
/* 	<li class='{% if current_page == 'user_settings' %}active{% endif %}'>*/
/* 		<a href='{{ base_url('settings') }}' >*/
/* 			<i class='fa fa-fw fa-user'></i>*/
/* 			<span class="hidden-xs">{{ l('Profile') }}</span>*/
/* 		</a>*/
/* 	</li>*/
/* */
/* 	<li class='{% if current_page == 'general_settings' %}active{% endif %}'>*/
/* 		<a href='{{ base_url('settings/general_settings') }}' >*/
/* 			<i class='fa fa-fw fa-tasks'></i>*/
/* 			<span class="hidden-xs">{{ l('General settings') }}</span>*/
/* 		</a>*/
/* 	</li>*/
/* */
/* 	<li class='{% if current_page == 'publish_settings' %}active{% endif %}'>*/
/* 		<a href='{{ base_url('settings/publish_settings') }}' >*/
/* 			<i class='fa fa-fw fa-clipboard'></i>*/
/* 			<span class="hidden-xs">{{ l('Publish settings') }}</span>*/
/* 		</a>*/
/* 	</li>*/
/* */
/* 	<li class='{% if current_page == 'fb_accounts' %}active{% endif %}'>*/
/* 		<a href='{{ base_url('settings/fb_accounts') }}' >*/
/* 			<i class='fa fa-fw fa-facebook'></i>*/
/* 			<span class="hidden-xs">{{ l('Facebook accounts') }}</span>*/
/* 		</a>*/
/* 	</li>*/
/* */
/* 	<li class='{% if current_page == 'fbapps' %}active{% endif %}'>*/
/* 		<a href='{{ base_url('settings/fbapps') }}' >*/
/* 			<i class='fa fa-fw fa-plug'></i>*/
/* 			<span class="hidden-xs">{{ l('Facebook Apps') }}</span>*/
/* 		</a>*/
/* 	</li>*/
/* */
/* 	{% if user.hasPermission('admin') == true %}*/
/* 		<li class='{% if current_page == 'app_settings' %}active{% endif %}'>*/
/* 			<a href='{{ base_url('settings/app_settings') }}' ><i class='fa fa-fw fa-cogs'></i> */
/* 				<span class="hidden-xs">{{ l('App settings') }}</span>*/
/* 			</a>*/
/* */
/* 			{% if current_page == 'app_settings' %}*/
/* 			<ul class="sub-menu hidden-xs">*/
/*                 <li>*/
/*                 	<a data-toggle="collapse" data-parent="#accordion" href="{{ base_url('settings/app_settings#general') }}">*/
/* 	    				<i class="fa fa-cog"></i>*/
/* 	    				<span class="hidden-xs">{{ l("General")}}</span>*/
/* 	    			</a>*/
/* 	    		</li>*/
/* 				<li>*/
/* 					<a data-toggle="collapse" data-parent="#accordion" href="{{ base_url('settings/app_settings#publish_settings') }}">*/
/*     					<i class="fa fa-fw fa-clipboard" aria-hidden="true"></i> */
/* 						<span class="hidden-xs">{{ l('Publish settings') }}</span>*/
/* 					</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a data-toggle="collapse" data-parent="#accordion" href="{{ base_url('settings/app_settings#theme_settings') }}">*/
/* 					    <i class="fa fa-fw fa-paint-brush" aria-hidden="true"></i> */
/* 						<span class="hidden-xs">{{ l('Theme settings') }}</span>*/
/* 					</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a data-toggle="collapse" data-parent="#accordion" href="{{ base_url('settings/app_settings#ads_settings') }}">*/
/* 					    <i class="fa fa-bullhorn" aria-hidden="true"></i>*/
/* 						<span class="hidden-xs">{{ l('Ads Settings') }}</span>*/
/* 					</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a data-toggle="collapse" data-parent="#accordion" href="{{ base_url('settings/app_settings#social_login') }}">*/
/* 					    <i class="fa fa-facebook fa-fw" aria-hidden="true"></i> */
/* 						<span class="hidden-xs">{{ l('Social login') }}</span>*/
/* 					</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a data-toggle="collapse" data-parent="#accordion" href="{{ base_url('settings/app_settings#advanced_settings') }}">*/
/* 					    <i class="fa fa-fw fa-cogs" aria-hidden="true"></i> */
/* 						<span class="hidden-xs">{{ l('Advanced settings') }}</span>*/
/* 					</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a data-toggle="collapse" data-parent="#accordion" href="{{ base_url('settings/app_settings#mail_settings') }}">*/
/* 					    <i class="fa fa-envelope" aria-hidden="true"></i>*/
/* 						<span class="hidden-xs">{{ l('Mail settings') }}</span>*/
/* 					</a>*/
/* 				</li>*/
/*             </ul>*/
/*             {% endif %}*/
/* */
/* 		</li>*/
/* 		<li class='{% if current_page == 'roles' %}active{% endif %}'>*/
/* 			<a href='{{ base_url('settings/roles') }}' >*/
/* 				<i class='fa fa-fw fa-users'></i>*/
/* 				<span class="hidden-xs">{{ l('Roles') }}</span>*/
/* 			</a>*/
/* 		</li>*/
/* 		<li class='{% if current_page == 'modules_manager' %}active{% endif %}'>*/
/* 			<a href='{{ base_url('settings/modules_manager') }}' >*/
/* 				<i class="fa fa-th-large" aria-hidden="true"></i>*/
/* 				<span class="hidden-xs">{{ l('Modules manager') }}</span>*/
/* 			</a>*/
/* 		</li>*/
/* 		{% if enable_proxy %}*/
/* 		<li class='{% if current_page == 'Proxies_manager' %}active{% endif %}'>*/
/* 			<a href='{{ base_url('settings/proxies_manager') }}' >*/
/* 				<i class="fa fa-list" aria-hidden="true"></i>*/
/* 				<span class="hidden-xs">{{ l('Proxies manager') }}</span>*/
/* 			</a>*/
/* 		</li>*/
/* 		{% endif %}*/
/* 	{% endif %}*/
/* */
/* </ul>*/
/* {% include "blocks/ads.twig" %}*/
/* */
