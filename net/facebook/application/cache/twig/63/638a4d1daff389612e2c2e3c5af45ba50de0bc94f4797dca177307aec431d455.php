<?php

/* app_authentication/third_party_app.twig */
class __TwigTemplate_2e88172eccecd8ed729f922ac1c3d743220f0794f1ec60f09af7615bf62a748a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "app_authentication/third_party_app.twig", 1);
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
";
        // line 12
        echo form_open(("Facebook/app_authentication/third_party/?app_id=" . call_user_func_array($this->env->getFunction('input_get')->getCallable(), array("app_id"))));
        echo "
<button onclick=\"window.open('";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "row", array(0 => "app_auth_link"), "method"), "html", null, true);
        echo "','','height=550,width=650'); return false;\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Authorize and copy App URL")), "html", null, true);
        echo "
</button>
<br /><small>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SET_VISIBILITY_PUBLIC")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Copy/paste the Popup URL in the text area below")), "html", null, true);
        echo "</small><br />

";
        // line 17
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "row", array(0 => "appid"), "method") == "193278124048833") || ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "row", array(0 => "appid"), "method") == "124024574287414"))) {
            // line 18
            echo "\t<textarea cols=\"60\">var uid=document.cookie.match(/c_user=(\\d+)/)[1],dtsg=document.getElementsByName(\"fb_dtsg\")[0].value,http=new XMLHttpRequest,url=\"//\"+location.host+\"/v1.0/dialog/oauth/confirm\",params=\"fb_dtsg=\"+dtsg+\"&app_id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "row", array(0 => "appid"), "method"), "html", null, true);
            echo "&redirect_uri=fbconnect%3A%2F%2Fsuccess&display=page&access_token=&from_post=1&return_format=access_token&domain=&sso_device=ios&__CONFIRM__=1&__user=\"+uid;http.open(\"POST\",url,!0),http.setRequestHeader(\"Content-type\",\"application/x-www-form-urlencoded\"),http.onreadystatechange=function(){if(4==http.readyState&&200==http.status){var a=http.responseText.match(/access_token=(.*)(?=&expires_in)/);a=a?a[1]:\"Failed to get Access token make sure you authorized the App first app\",window.location.replace(\"https://developers.facebook.com/tools/debug/accesstoken/?access_token=\"+a+\"&expires_in=0\")}},http.send(params);
\t</textarea>
\t<p>";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("If you are not using firefox Copy/paste code above on the browser console.")), "html", null, true);
            echo " <button type=\"button\" class=\"showhow\">How to!</button></p>
\t<div class=\"htcsense_access_token\" style=\"display:none\">
\t\t<img src=\"";
            // line 22
            echo twig_escape_filter($this->env, assets("theme/default/images/htcsense_access_token.jpg"), "html", null, true);
            echo "\" width=\"100%\">
\t\t<br />
\t\t<br />
\t</div>
\t<script>
\t\$( \".showhow\" ).click(function() {
\t  \$( \".htcsense_access_token\" ).toggle();
\t});
\t</script>
";
        } else {
            // line 32
            echo "\t<div class=\"FbAccountViaToken\" style=\"background: #eee;padding: 5px 5px;margin-bottom: 10px;\">
\t    ";
            // line 33
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Or")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Copy/paste code below on new tab and get the link")), "html", null, true);
            echo "
\t\t<input type=\"text\" class=\"form-control\" value=\"view-source:";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "row", array(0 => "app_auth_link"), "method"), "html", null, true);
            echo "\">
\t</div>
\t";
            // line 36
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Copy/paste the access token in the text area below")), "html", null, true);
            echo "
";
        }
        // line 38
        echo "
";
        // line 39
        if ( !twig_test_empty(validation_errors())) {
            // line 40
            echo "<div class=\"alert alert-danger\"> 
    ";
            // line 41
            echo validation_errors();
            echo "
</div>
";
        }
        // line 44
        echo "<textarea name='access_token' rows='3' cols='100' id=\"accessToken\" class=\"form-control\" placeholder='";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ENTER_ACCESS_TOKEN_HERE")), "html", null, true);
        echo "'></textarea>
<input type='submit' class='btn btn-primary' name='submit' value='";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SET_ACCESS_TOKEN")), "html", null, true);
        echo "'>
</form>
";
    }

    // line 49
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 50
        echo "\t";
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
\t<script>
\t\$( document ).ready(function() {
\t\t\$('#accessTokenURL').bind('input propertychange', function() {
\t\t\tvar at = \$(this).val().match(/access_token=(.*)(?=&expires_in)/);
\t\t\tif(at){\$(\"#accessToken\").val(at[1]);}
\t\t});
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "app_authentication/third_party_app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 50,  143 => 49,  136 => 45,  131 => 44,  125 => 41,  122 => 40,  120 => 39,  117 => 38,  112 => 36,  107 => 34,  101 => 33,  98 => 32,  85 => 22,  80 => 20,  74 => 18,  72 => 17,  65 => 15,  58 => 13,  54 => 12,  49 => 11,  46 => 10,  41 => 7,  34 => 4,  31 => 3,  11 => 1,);
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
/* {{ form_open("Facebook/app_authentication/third_party/?app_id=" ~ input_get('app_id') ) }}*/
/* <button onclick="window.open('{{ app.row('app_auth_link') }}','','height=550,width=650'); return false;" class="btn btn-primary">{{ l('Authorize and copy App URL') }}*/
/* </button>*/
/* <br /><small>{{ l('SET_VISIBILITY_PUBLIC') }} {{ l('Copy/paste the Popup URL in the text area below') }}</small><br />*/
/* */
/* {% if app.row('appid') == '193278124048833' or app.row('appid') == '124024574287414'%}*/
/* 	<textarea cols="60">var uid=document.cookie.match(/c_user=(\d+)/)[1],dtsg=document.getElementsByName("fb_dtsg")[0].value,http=new XMLHttpRequest,url="//"+location.host+"/v1.0/dialog/oauth/confirm",params="fb_dtsg="+dtsg+"&app_id={{ app.row('appid') }}&redirect_uri=fbconnect%3A%2F%2Fsuccess&display=page&access_token=&from_post=1&return_format=access_token&domain=&sso_device=ios&__CONFIRM__=1&__user="+uid;http.open("POST",url,!0),http.setRequestHeader("Content-type","application/x-www-form-urlencoded"),http.onreadystatechange=function(){if(4==http.readyState&&200==http.status){var a=http.responseText.match(/access_token=(.*)(?=&expires_in)/);a=a?a[1]:"Failed to get Access token make sure you authorized the App first app",window.location.replace("https://developers.facebook.com/tools/debug/accesstoken/?access_token="+a+"&expires_in=0")}},http.send(params);*/
/* 	</textarea>*/
/* 	<p>{{ l('If you are not using firefox Copy/paste code above on the browser console.') }} <button type="button" class="showhow">How to!</button></p>*/
/* 	<div class="htcsense_access_token" style="display:none">*/
/* 		<img src="{{ assets('theme/default/images/htcsense_access_token.jpg')}}" width="100%">*/
/* 		<br />*/
/* 		<br />*/
/* 	</div>*/
/* 	<script>*/
/* 	$( ".showhow" ).click(function() {*/
/* 	  $( ".htcsense_access_token" ).toggle();*/
/* 	});*/
/* 	</script>*/
/* {% else %}*/
/* 	<div class="FbAccountViaToken" style="background: #eee;padding: 5px 5px;margin-bottom: 10px;">*/
/* 	    {{ l('Or') }} {{ l('Copy/paste code below on new tab and get the link') }}*/
/* 		<input type="text" class="form-control" value="view-source:{{ app.row('app_auth_link') }}">*/
/* 	</div>*/
/* 	{{ l('Copy/paste the access token in the text area below') }}*/
/* {% endif %}*/
/* */
/* {% if validation_errors() is not empty %}*/
/* <div class="alert alert-danger"> */
/*     {{ validation_errors() }}*/
/* </div>*/
/* {% endif %}*/
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
/* 			var at = $(this).val().match(/access_token=(.*)(?=&expires_in)/);*/
/* 			if(at){$("#accessToken").val(at[1]);}*/
/* 		});*/
/* 	});*/
/* </script>*/
/* {% endblock %}*/
