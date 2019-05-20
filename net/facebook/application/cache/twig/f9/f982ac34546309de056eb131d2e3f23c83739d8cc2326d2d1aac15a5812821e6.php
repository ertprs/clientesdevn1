<?php

/* app_authentication/third_party_app_using_pw.twig */
class __TwigTemplate_66d763f0b68d893b7c4a0d47280c0929f11a474e8aa0e16d3f667704714232be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "app_authentication/third_party_app_using_pw.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook App authentication")), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"alertBox\"></div>
<input type=\"text\" name=\"username\" value=\"\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB username/email")), "html", null, true);
        echo "\" id=\"fb_username\" class=\"form-control\">
<input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB password")), "html", null, true);
        echo "\" id=\"fb_password\" class=\"form-control\">
<button type=\"button\" id=\"fb_login\" class=\"btn btn-primary\">";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Generate token")), "html", null, true);
        echo "</button>
<p Class=\"text-danger\"><small>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Your Facebook account password will NOT be stored we only use the password to generate a facebook token.")), "html", null, true);
        echo "</small></p>
<div class=\"token_result\"></div>
";
        // line 18
        if ( !twig_test_empty(validation_errors())) {
            // line 19
            echo "<div class=\"alert alert-danger\"> 
    ";
            // line 20
            echo validation_errors();
            echo "
</div>
";
        }
        // line 23
        echo form_open(("Facebook/app_authentication/third_party/?app_id=" . call_user_func_array($this->env->getFunction('input_get')->getCallable(), array("app_id"))));
        echo "
<textarea name='access_token' rows='3' cols='100' id=\"accessToken\" class=\"form-control\" placeholder='";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ENTER_ACCESS_TOKEN_HERE")), "html", null, true);
        echo "'></textarea>
<input type='submit' class='btn btn-primary' name='submit' value='";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SET_ACCESS_TOKEN")), "html", null, true);
        echo "'>
</form>
";
    }

    // line 29
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 30
        echo "\t";
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
\t<script>
\t\$( document ).ready(function() {
\t\t\$('#accessTokenURL').bind('input propertychange', function() {
\t\t\tvar at = \$(this).val().match(/\"access_token\":\"(.*)(?=\",\"machine_id)/);
\t\t\tif(at){\$(\"#accessToken\").val(at[1]);}
\t\t});

\t\t\$(\"#fb_login\").click(function(){
\t\t\t\t\$('.alertBox').html(\"\");
\t\t\t\t\$.ajax({
\t\t\t\t\turl: '";
        // line 41
        echo twig_escape_filter($this->env, base_url(("facebook/generate_token/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "row", array(0 => "appid"), "method"))), "html", null, true);
        echo "',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\t\tdata: {
\t\t\t\t\t\tusername: \$('#fb_username').val(), 
\t\t\t\t\t\tpassword: \$('#fb_password').val(),
\t\t\t\t\t\t";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t\t\t},
\t\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t\t  if(data.status == \"ok\"){
\t\t\t\t\t    \$(\".token_result\").html(\"<iframe width='100%' height='100' src='\"+data.fb_url+\"'></iframe>\");
\t\t\t\t\t  }else{
\t\t\t\t\t  \tif(data.message !== null && typeof data.message === 'object'){ 
\t\t                \thtmlData = \"<ul>\";
\t\t                    Object.keys(data.message).forEach(function(key) {
\t\t                      htmlData += \"<li>\" + data.message[key] + \"</li>\";
\t\t                      });
\t\t                    htmlData += \"</ul>\";
\t\t               \t}else{
\t\t                    htmlData = data.message;
\t\t            \t}
\t\t\t\t\t    alertBox(htmlData,'danger','.alertBox',false,true,false);
\t\t\t\t\t  }
\t\t\t\t\t},
\t\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t\t  console.log(errorThrown);
\t\t\t\t\t  alertBox('";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Failed to generate Facebook token, try again")), "html", null, true);
        echo "','danger','.alertBox',true);
\t\t\t\t\t},
\t\t\t        complete: function() {
\t\t\t          // Re-enable send btn
\t\t\t          \$(\"#addFbAccountBtn\").prop('disabled', false);
\t\t\t          kp_preloader(\"off\",\"#addNewFbAccount .modal-body\");
\t\t\t        }
\t\t\t\t});
\t\t\t});
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "app_authentication/third_party_app_using_pw.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 68,  126 => 48,  116 => 41,  101 => 30,  98 => 29,  91 => 25,  87 => 24,  83 => 23,  77 => 20,  74 => 19,  72 => 18,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  49 => 11,  46 => 10,  41 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ l("Facebook App authentication") }}*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* <div class="alertBox"></div>*/
/* <input type="text" name="username" value="" placeholder="{{ l('FB username/email') }}" id="fb_username" class="form-control">*/
/* <input type="password" name="password" value="" placeholder="{{ l('FB password') }}" id="fb_password" class="form-control">*/
/* <button type="button" id="fb_login" class="btn btn-primary">{{ l('Generate token') }}</button>*/
/* <p Class="text-danger"><small>{{ l('Your Facebook account password will NOT be stored we only use the password to generate a facebook token.') }}</small></p>*/
/* <div class="token_result"></div>*/
/* {% if validation_errors() is not empty %}*/
/* <div class="alert alert-danger"> */
/*     {{ validation_errors() }}*/
/* </div>*/
/* {% endif %}*/
/* {{ form_open("Facebook/app_authentication/third_party/?app_id=" ~ input_get('app_id') ) }}*/
/* <textarea name='access_token' rows='3' cols='100' id="accessToken" class="form-control" placeholder='{{ l('ENTER_ACCESS_TOKEN_HERE') }}'></textarea>*/
/* <input type='submit' class='btn btn-primary' name='submit' value='{{ l('SET_ACCESS_TOKEN') }}'>*/
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/* 	{{ parent() }}*/
/* 	<script>*/
/* 	$( document ).ready(function() {*/
/* 		$('#accessTokenURL').bind('input propertychange', function() {*/
/* 			var at = $(this).val().match(/"access_token":"(.*)(?=","machine_id)/);*/
/* 			if(at){$("#accessToken").val(at[1]);}*/
/* 		});*/
/* */
/* 		$("#fb_login").click(function(){*/
/* 				$('.alertBox').html("");*/
/* 				$.ajax({*/
/* 					url: '{{ base_url("facebook/generate_token/" ~ app.row('appid')) }}',*/
/* 					dataType: 'json',*/
/* 					type: 'post',*/
/* 					contentType: 'application/x-www-form-urlencoded',*/
/* 					data: {*/
/* 						username: $('#fb_username').val(), */
/* 						password: $('#fb_password').val(),*/
/* 						{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 					},*/
/* 					success: function( data, textStatus, jQxhr ){*/
/* 					  if(data.status == "ok"){*/
/* 					    $(".token_result").html("<iframe width='100%' height='100' src='"+data.fb_url+"'></iframe>");*/
/* 					  }else{*/
/* 					  	if(data.message !== null && typeof data.message === 'object'){ */
/* 		                	htmlData = "<ul>";*/
/* 		                    Object.keys(data.message).forEach(function(key) {*/
/* 		                      htmlData += "<li>" + data.message[key] + "</li>";*/
/* 		                      });*/
/* 		                    htmlData += "</ul>";*/
/* 		               	}else{*/
/* 		                    htmlData = data.message;*/
/* 		            	}*/
/* 					    alertBox(htmlData,'danger','.alertBox',false,true,false);*/
/* 					  }*/
/* 					},*/
/* 					error: function( jqXhr, textStatus, errorThrown ){ */
/* 					  console.log(errorThrown);*/
/* 					  alertBox('{{ l("Failed to generate Facebook token, try again") }}','danger','.alertBox',true);*/
/* 					},*/
/* 			        complete: function() {*/
/* 			          // Re-enable send btn*/
/* 			          $("#addFbAccountBtn").prop('disabled', false);*/
/* 			          kp_preloader("off","#addNewFbAccount .modal-body");*/
/* 			        }*/
/* 				});*/
/* 			});*/
/* 	});*/
/* </script>*/
/* {% endblock %}*/
