<?php

/* settings/app_settings.twig */
class __TwigTemplate_3b47520e93fa1b9553aa3d893c4e775ef08c3063f29572a5ae342a32fedbba0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "settings/app_settings.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts_footer' => array($this, 'block_javascripts_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_dashboard.twig";
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("App settings")), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 9
        if ( !twig_test_empty(validation_errors())) {
            // line 10
            echo "<div class=\"alert alert-danger\"> 
    ";
            // line 11
            echo validation_errors();
            echo "
</div>
";
        }
        // line 14
        echo form_open();
        echo "
<div class=\"settings\">
\t<div class=\"row\">
\t\t<div class=\"tabbable tabs-left\">
\t\t\t<div class=\"col-xs-12 col-sm-3 settingsTabs\">
\t\t\t\t";
        // line 19
        $context["current_page"] = "app_settings";
        // line 20
        echo "\t\t\t\t";
        $this->loadTemplate("settings/tabs.twig", "settings/app_settings.twig", 20)->display($context);
        // line 21
        echo "\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-9 settingsContent\">
\t\t\t\t<div class=\"tab-content panel-group\">
\t\t\t\t\t<h4 class=\"tab-title\"><i class=\"fa fa-cogs\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("App settings")), "html", null, true);
        echo "</h4>
\t\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t\t";
        // line 26
        $this->loadTemplate("settings/components/app_settings/general.twig", "settings/app_settings.twig", 26)->display($context);
        // line 27
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("settings/components/app_settings/publish_settings.twig", "settings/app_settings.twig", 27)->display($context);
        // line 28
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("settings/components/app_settings/theme_settings.twig", "settings/app_settings.twig", 28)->display($context);
        // line 29
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("settings/components/app_settings/ads_settings.twig", "settings/app_settings.twig", 29)->display($context);
        // line 30
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("settings/components/app_settings/social_login.twig", "settings/app_settings.twig", 30)->display($context);
        // line 31
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("settings/components/app_settings/advanced_settings.twig", "settings/app_settings.twig", 31)->display($context);
        // line 32
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("settings/components/app_settings/mail_settings.twig", "settings/app_settings.twig", 32)->display($context);
        // line 33
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</form>

";
        // line 42
        $context["box_id"] = "fbapp";
        // line 43
        $context["delete_msg"] = call_user_func_array($this->env->getFunction('l')->getCallable(), array("Are you sure you want to delete the app?"));
        // line 44
        $this->loadTemplate("blocks/delete_modal.twig", "settings/app_settings.twig", 44)->display($context);
        // line 45
        echo "
";
    }

    // line 49
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 50
        echo "\t";
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
\t<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, assets("theme/default/js/helpers.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/jscolor.min.js"), "html", null, true);
        echo "\"></script>

\t<script>
\t    // Delete a user
\t\t\$( \"#clearCache\" ).click(function(){
\t\t  \tif(confirm(\"";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Are you sure you want to clear the cache?")), "html", null, true);
        echo "\")){
\t\t  \t\t\$(\".clearCacheIcon\").show();
\t\t\t    \$.ajax({
\t\t\t\t    url: '";
        // line 60
        echo twig_escape_filter($this->env, base_url("settings/app_settings/clear_cache"), "html", null, true);
        echo "',
\t\t\t\t    dataType: 'json',
\t\t\t\t    type: 'post',
\t\t\t\t    contentType: 'application/x-www-form-urlencoded',
\t\t\t\t    data: {
\t\t\t\t    \t";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
\t\t\t\t    },
\t\t\t\t    success: function( data, textStatus, jQxhr ){
\t\t\t\t        if(data.status == \"success\"){
\t\t\t\t         \talertBox(\"";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Cache has been cleared!")), "html", null, true);
        echo "\",\"success\",\".clearMessage\",true,true);
\t\t\t\t        }
\t\t\t\t        \t
\t\t\t\t        \$(\".clearCacheIcon\").hide();
\t\t\t\t        
\t\t\t\t    },
\t\t\t\t    error: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t        \$(\".clearCacheIcon\").hide();
\t\t\t\t        console.log(errorThrown);
\t\t\t\t    }
\t\t\t  \t});
\t\t\t}
\t\t});
\t</script>

";
    }

    public function getTemplateName()
    {
        return "settings/app_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 69,  157 => 65,  149 => 60,  143 => 57,  135 => 52,  131 => 51,  126 => 50,  123 => 49,  118 => 45,  116 => 44,  114 => 43,  112 => 42,  102 => 33,  99 => 32,  96 => 31,  93 => 30,  90 => 29,  87 => 28,  84 => 27,  82 => 26,  77 => 24,  72 => 21,  69 => 20,  67 => 19,  59 => 14,  53 => 11,  50 => 10,  48 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ l('App settings') }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* {% if validation_errors() is not empty %}*/
/* <div class="alert alert-danger"> */
/*     {{ validation_errors() }}*/
/* </div>*/
/* {% endif %}*/
/* {{ form_open() }}*/
/* <div class="settings">*/
/* 	<div class="row">*/
/* 		<div class="tabbable tabs-left">*/
/* 			<div class="col-xs-12 col-sm-3 settingsTabs">*/
/* 				{% set current_page = 'app_settings' %}*/
/* 				{% include "settings/tabs.twig" %}*/
/* 			</div>*/
/* 			<div class="col-xs-12 col-sm-9 settingsContent">*/
/* 				<div class="tab-content panel-group">*/
/* 					<h4 class="tab-title"><i class="fa fa-cogs"></i> {{ l('App settings') }}</h4>*/
/* 					<div class="panel-group" id="accordion">*/
/* 						{% include 'settings/components/app_settings/general.twig' %}*/
/* 						{% include 'settings/components/app_settings/publish_settings.twig' %}*/
/* 						{% include 'settings/components/app_settings/theme_settings.twig' %}*/
/* 						{% include 'settings/components/app_settings/ads_settings.twig' %}*/
/* 						{% include 'settings/components/app_settings/social_login.twig' %}*/
/* 						{% include 'settings/components/app_settings/advanced_settings.twig' %}*/
/* 						{% include 'settings/components/app_settings/mail_settings.twig' %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </form>*/
/* */
/* {# Box variables #}*/
/* {% set box_id = "fbapp" %}*/
/* {% set delete_msg = l("Are you sure you want to delete the app?") %}*/
/* {% include "blocks/delete_modal.twig" %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts_footer %}*/
/* 	{{ parent() }}*/
/* 	<script src="{{ assets('theme/default/js/helpers.js') }}"></script>*/
/* 	<script src="{{ assets('theme/default/js/libs/jscolor.min.js') }}"></script>*/
/* */
/* 	<script>*/
/* 	    // Delete a user*/
/* 		$( "#clearCache" ).click(function(){*/
/* 		  	if(confirm("{{ l('Are you sure you want to clear the cache?')}}")){*/
/* 		  		$(".clearCacheIcon").show();*/
/* 			    $.ajax({*/
/* 				    url: '{{ base_url("settings/app_settings/clear_cache") }}',*/
/* 				    dataType: 'json',*/
/* 				    type: 'post',*/
/* 				    contentType: 'application/x-www-form-urlencoded',*/
/* 				    data: {*/
/* 				    	{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/* 				    },*/
/* 				    success: function( data, textStatus, jQxhr ){*/
/* 				        if(data.status == "success"){*/
/* 				         	alertBox("{{ l('Cache has been cleared!') }}","success",".clearMessage",true,true);*/
/* 				        }*/
/* 				        	*/
/* 				        $(".clearCacheIcon").hide();*/
/* 				        */
/* 				    },*/
/* 				    error: function( jqXhr, textStatus, errorThrown ){ */
/* 				        $(".clearCacheIcon").hide();*/
/* 				        console.log(errorThrown);*/
/* 				    }*/
/* 			  	});*/
/* 			}*/
/* 		});*/
/* 	</script>*/
/* */
/* {% endblock %}*/
