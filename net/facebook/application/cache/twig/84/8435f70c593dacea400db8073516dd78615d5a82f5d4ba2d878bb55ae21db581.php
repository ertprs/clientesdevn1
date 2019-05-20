<?php

/* settings/components/add_fb_account.twig */
class __TwigTemplate_6fb4c559d7337509fb13099e5951e9dcd0a7d0a2072b800b3523da871a8c3026 extends Twig_Template
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
        $context["apps"] = array(0 => array("id" => "350685531728", "name" => "Facebook for Android", "link" => ""), 1 => array("id" => "193278124048833", "name" => "HTC sense", "link" => "https://goo.gl/Ep33Jb"));
        // line 5
        echo "
<ul class=\"nav nav-tabs\">
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 8
            echo "  \t\t<li";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                echo " class=\"active\"";
            }
            echo ">
  \t\t\t<a data-toggle=\"tab\" href=\"#";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["compp_"]) ? $context["compp_"] : null), "html", null, true);
            echo "_app_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "name", array()), "html", null, true);
            echo "\"><img src='https://graph.facebook.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
            echo "/picture?redirect=1&height=32&width=32&type=small' width='32' height='32' style='vertical-align:middle;' onerror=\"this.src = '";
            echo twig_escape_filter($this->env, assets("theme/default/images/facebookApp.png"), "html", null, true);
            echo "'\"/>
  \t\t\t</a>
  \t\t</li>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>

<div class=\"tab-content\">
\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 17
            echo "\t  <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["compp_"]) ? $context["compp_"] : null), "html", null, true);
            echo "_app_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
            echo "\" class=\"tab-pane fade in ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                echo "active";
            }
            echo "\">
\t    ";
            // line 18
            if ((($this->getAttribute($context["app"], "id", array()) == "6628568379") || ($this->getAttribute($context["app"], "id", array()) == "350685531728"))) {
                // line 19
                echo "\t\t    <input type=\"text\" name=\"username\" value=\"\" placeholder=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB username/email")), "html", null, true);
                echo "\" id=\"fb_username\" class=\"form-control\">
\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
                // line 20
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB password")), "html", null, true);
                echo "\" id=\"fb_password\" class=\"form-control\">
\t\t\t<button type=\"button\" id=\"\" class=\"btn btn-primary fb_login\" value=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Generate token")), "html", null, true);
                echo "</button>
\t\t\t<br />
\t\t\t<span Class=\"text-danger\"><small>";
                // line 23
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Your Facebook account password will NOT be stored we only use the password to generate a facebook token.")), "html", null, true);
                echo "</small></span>
\t\t\t<div class=\"token_result\"></div>
\t\t";
            } else {
                // line 26
                echo "\t\t    <button type=\"button\" onclick='window.open(\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "link", array()), "html", null, true);
                echo "\", \"main_browser\", \"height=550,width=650\")' class=\"btn btn-primary\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Authorize and copy App URL")), "html", null, true);
                echo "</button> <small> ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SET_VISIBILITY_PUBLIC")), "html", null, true);
                echo "</small>
\t\t\t
\t\t\t";
                // line 28
                if (($this->getAttribute($context["app"], "id", array()) == "193278124048833")) {
                    // line 29
                    echo "\t\t\t\t<textarea cols=\"60\">var uid=document.cookie.match(/c_user=(\\d+)/)[1],dtsg=document.getElementsByName(\"fb_dtsg\")[0].value,http=new XMLHttpRequest,url=\"//\"+location.host+\"/v1.0/dialog/oauth/confirm\",params=\"fb_dtsg=\"+dtsg+\"&app_id=193278124048833&redirect_uri=fbconnect%3A%2F%2Fsuccess&display=page&access_token=&from_post=1&return_format=access_token&domain=&sso_device=ios&__CONFIRM__=1&__user=\"+uid;http.open(\"POST\",url,!0),http.setRequestHeader(\"Content-type\",\"application/x-www-form-urlencoded\"),http.onreadystatechange=function(){if(4==http.readyState&&200==http.status){var a=http.responseText.match(/access_token=(.*)(?=&expires_in)/);a=a?a[1]:\"Failed to get Access token make sure you authorized the App first app\",window.location.replace(\"https://developers.facebook.com/tools/debug/accesstoken/?access_token=\"+a+\"&expires_in=0\")}},http.send(params);</textarea>
\t\t\t\t<p>";
                    // line 30
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("If you are not using firefox Copy/paste code above on the browser console. and press Enter")), "html", null, true);
                    echo " <button type=\"button\" class=\"btn ";
                    echo twig_escape_filter($this->env, (isset($context["compp_"]) ? $context["compp_"] : null), "html", null, true);
                    echo "_showhow\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("How to")), "html", null, true);
                    echo "!</button></p>
\t\t\t\t<div class=\"";
                    // line 31
                    echo twig_escape_filter($this->env, (isset($context["compp_"]) ? $context["compp_"] : null), "html", null, true);
                    echo "_htcsense_access_token\" style=\"display:none\">
\t\t\t\t\t<img src=\"";
                    // line 32
                    echo twig_escape_filter($this->env, assets("theme/default/images/htcsense_access_token.jpg"), "html", null, true);
                    echo "\" width=\"100%\">
\t\t\t\t</div>
\t\t\t\t<script>
\t\t\t\t\$(function(){
\t\t\t\t\t\$( \".";
                    // line 36
                    echo twig_escape_filter($this->env, (isset($context["compp_"]) ? $context["compp_"] : null), "html", null, true);
                    echo "_showhow\" ).click(function() {
\t\t\t\t\t  \$( \".";
                    // line 37
                    echo twig_escape_filter($this->env, (isset($context["compp_"]) ? $context["compp_"] : null), "html", null, true);
                    echo "_htcsense_access_token\" ).toggle();
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t</script>\t
\t\t\t";
                } else {
                    // line 42
                    echo "\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"view-source:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "link", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Copy/paste code below on new tab and get the link")), "html", null, true);
                    echo "
\t\t\t";
                }
                // line 44
                echo "
\t\t";
            }
            // line 46
            echo "\t  </div>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</div>

";
        // line 51
        echo "
<textarea name='accessToken' rows='3' cols='100' id=\"accessToken\" class=\"form-control\" placeholder='";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Access token Here")), "html", null, true);
        echo "'></textarea>";
    }

    public function getTemplateName()
    {
        return "settings/components/add_fb_account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 52,  209 => 51,  205 => 48,  190 => 46,  186 => 44,  178 => 42,  170 => 37,  166 => 36,  159 => 32,  155 => 31,  147 => 30,  144 => 29,  142 => 28,  132 => 26,  126 => 23,  119 => 21,  115 => 20,  110 => 19,  108 => 18,  97 => 17,  80 => 16,  75 => 13,  49 => 9,  42 => 8,  25 => 7,  21 => 5,  19 => 1,);
    }
}
/* {% set apps = [*/
/* 	{'id':'350685531728','name':'Facebook for Android','link':''},*/
/* 	{'id':'193278124048833','name':'HTC sense','link':'https://goo.gl/Ep33Jb'},*/
/* ]%}*/
/* */
/* <ul class="nav nav-tabs">*/
/* 	{% for app in apps %}*/
/*   		<li{% if loop.index == 1 %} class="active"{% endif %}>*/
/*   			<a data-toggle="tab" href="#{{ compp_}}_app_{{ app.id }}" title="{{ app.name }}"><img src='https://graph.facebook.com/{{ app.id }}/picture?redirect=1&height=32&width=32&type=small' width='32' height='32' style='vertical-align:middle;' onerror="this.src = '{{ assets('theme/default/images/facebookApp.png') }}'"/>*/
/*   			</a>*/
/*   		</li>*/
/*   {% endfor %}*/
/* </ul>*/
/* */
/* <div class="tab-content">*/
/* 	{% for app in apps %}*/
/* 	  <div id="{{ compp_}}_app_{{ app.id }}" class="tab-pane fade in {% if loop.index == 1 %}active{% endif %}">*/
/* 	    {% if app.id == "6628568379" or app.id == "350685531728" %}*/
/* 		    <input type="text" name="username" value="" placeholder="{{ l('FB username/email') }}" id="fb_username" class="form-control">*/
/* 			<input type="password" name="password" value="" placeholder="{{ l('FB password') }}" id="fb_password" class="form-control">*/
/* 			<button type="button" id="" class="btn btn-primary fb_login" value="{{ app.id }}">{{ l('Generate token') }}</button>*/
/* 			<br />*/
/* 			<span Class="text-danger"><small>{{ l('Your Facebook account password will NOT be stored we only use the password to generate a facebook token.') }}</small></span>*/
/* 			<div class="token_result"></div>*/
/* 		{% else %}*/
/* 		    <button type="button" onclick='window.open("{{ app.link }}", "main_browser", "height=550,width=650")' class="btn btn-primary">{{ l('Authorize and copy App URL') }}</button> <small> {{ l('SET_VISIBILITY_PUBLIC') }}</small>*/
/* 			*/
/* 			{% if app.id == "193278124048833" %}*/
/* 				<textarea cols="60">var uid=document.cookie.match(/c_user=(\d+)/)[1],dtsg=document.getElementsByName("fb_dtsg")[0].value,http=new XMLHttpRequest,url="//"+location.host+"/v1.0/dialog/oauth/confirm",params="fb_dtsg="+dtsg+"&app_id=193278124048833&redirect_uri=fbconnect%3A%2F%2Fsuccess&display=page&access_token=&from_post=1&return_format=access_token&domain=&sso_device=ios&__CONFIRM__=1&__user="+uid;http.open("POST",url,!0),http.setRequestHeader("Content-type","application/x-www-form-urlencoded"),http.onreadystatechange=function(){if(4==http.readyState&&200==http.status){var a=http.responseText.match(/access_token=(.*)(?=&expires_in)/);a=a?a[1]:"Failed to get Access token make sure you authorized the App first app",window.location.replace("https://developers.facebook.com/tools/debug/accesstoken/?access_token="+a+"&expires_in=0")}},http.send(params);</textarea>*/
/* 				<p>{{ l('If you are not using firefox Copy/paste code above on the browser console. and press Enter') }} <button type="button" class="btn {{ compp_}}_showhow">{{l('How to')}}!</button></p>*/
/* 				<div class="{{ compp_}}_htcsense_access_token" style="display:none">*/
/* 					<img src="{{ assets('theme/default/images/htcsense_access_token.jpg')}}" width="100%">*/
/* 				</div>*/
/* 				<script>*/
/* 				$(function(){*/
/* 					$( ".{{ compp_}}_showhow" ).click(function() {*/
/* 					  $( ".{{ compp_}}_htcsense_access_token" ).toggle();*/
/* 					});*/
/* 				});*/
/* 				</script>	*/
/* 			{% else %}*/
/* 				<input type="text" class="form-control" value="view-source:{{ app.link }}">{{ l('Copy/paste code below on new tab and get the link') }}*/
/* 			{% endif %}*/
/* */
/* 		{% endif %}*/
/* 	  </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
/* {#<textarea name='accessTokenURL' id='accessTokenURL' rows='3' cols='100' class="form-control" placeholder='{{ l('PASTE_APP_AUTH_LINK') }}'></textarea>#}*/
/* */
/* <textarea name='accessToken' rows='3' cols='100' id="accessToken" class="form-control" placeholder='{{ l('Access token Here') }}'></textarea>*/
