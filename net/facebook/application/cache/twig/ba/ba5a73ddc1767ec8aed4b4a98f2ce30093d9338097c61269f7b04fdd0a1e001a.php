<?php

/* notifications/my_notifications.twig */
class __TwigTemplate_c5779928f59e21210cfaddfcc20e7dfd4c9d1a085b77404d9dc708300c327b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "notifications/my_notifications.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Notifications")), "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, assets("theme/default/css/token-input-facebook.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<input type=\"hidden\" name=\"perPage\" id=\"perPage\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["perPage"]) ? $context["perPage"] : null), "html", null, true);
        echo "\">
<ul class=\"list-group notificationsList\">
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["getNotifications"]) ? $context["getNotifications"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 15
            echo "
";
            // line 16
            if (($this->getAttribute($context["n"], "type", array()) == "success")) {
                // line 17
                echo "\t";
                $context["icon"] = "check-circle";
            } elseif (($this->getAttribute(            // line 18
$context["n"], "type", array()) == "info")) {
                // line 19
                echo "\t";
                $context["icon"] = "info-circle";
            } elseif (($this->getAttribute(            // line 20
$context["n"], "type", array()) == "warning")) {
                // line 21
                echo "\t";
                $context["icon"] = "exclamation-circle";
            } elseif (($this->getAttribute(            // line 22
$context["n"], "type", array()) == "danger")) {
                // line 23
                echo "\t";
                $context["icon"] = "exclamation-triangle";
            } elseif (($this->getAttribute(            // line 24
$context["n"], "type", array()) == "primary")) {
                // line 25
                echo "\t";
                $context["icon"] = "info-circle";
            }
            // line 27
            echo "
<li class=\"list-group-item n-";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "unid", array()), "html", null, true);
            echo " notification\" id=\"notification_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "unid", array()), "html", null, true);
            echo "\">
\t<span class=\"deleteNotification pull-right\" data-id=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "unid", array()), "html", null, true);
            echo "\"><i class=\"fa fa-close fa-fw\" ></i></span>

\t";
            // line 31
            if (($this->getAttribute($context["n"], "is_seen", array()) == 0)) {
                // line 32
                echo "\t\t<span class=\"readNotification pull-right\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "unid", array()), "html", null, true);
                echo "\"  data-status='1'><i class=\"fa fa-circle\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Mark as read")), "html", null, true);
                echo "\"></i></span>
\t";
            } else {
                // line 34
                echo "\t\t<span class=\"readNotification pull-right\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "unid", array()), "html", null, true);
                echo "\"  data-status='0'><i class=\"fa fa-circle-thin\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Mark as unread")), "html", null, true);
                echo "\"></i></span>
\t";
            }
            // line 36
            echo "
\t<i class=\"fa fa-";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo " text-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "type", array()), "html", null, true);
            echo "\"></i>
\t";
            // line 38
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute($context["n"], "title", array()))), "html", null, true);
            echo " - <small class=\"text-muted\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, fromUTC($this->getAttribute($context["n"], "created_at", array()), $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "currentUser", array()), "timezone", array())), ((isset($context["date_format"]) ? $context["date_format"] : null) . " H:i")), "html", null, true);
            echo "</small>
\t<p class=\"nContent\">";
            // line 39
            echo $this->getAttribute($context["n"], "content", array());
            echo "</p>
</li>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "<li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("You don't have any notifications")), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</ul>

 ";
        // line 47
        if ( !twig_test_empty((isset($context["getNotifications"]) ? $context["getNotifications"] : null))) {
            // line 48
            echo "<div class=\"loadMorePreloader\"></div>
<button class=\"loadMoreBtn btn btn-primary full-width\">";
            // line 49
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Old notifications")), "html", null, true);
            echo "</button>
 ";
        }
        // line 51
        echo "
";
    }

    // line 54
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 55
        echo "\t";
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">


    \$(document).ready(function(){
        if(window.location.hash != \"\") {
            \$( \"#notification_\" + window.location.hash.substring(10) ).collapse(\"show\");
            \$( window.location.hash ).css( \"border\", \"3px solid rgba(51, 122, 183, 0.60)\" );
            \$('html, body').animate({
              scrollTop: \$( window.location.hash ).offset().top - 43
            }, 500);
        }
    });
    


\t\$(\".loadMoreBtn\").on(\"click\",searchLoadMore);

\tfunction searchLoadMore(){
\t\tkp_preloader(\"on\",\".loadMorePreloader\");
\t\t\$.ajax({
\t      url: '";
        // line 76
        echo twig_escape_filter($this->env, base_url("my_notifications/load_more/"), "html", null, true);
        echo "'+\$(\"#perPage\").val(),
\t      type: 'GET',
\t      contentType: 'application/x-www-form-urlencoded',
\t      success: function( data, textStatus, jQxhr ){
\t        if(data.status == \"ok\"){

\t        \tvar icons = {
\t        \t\t'success':'check-circle',
\t        \t\t'info':'info-circle',
\t        \t\t'warning':'exclamation-circle',
\t        \t\t'danger':'exclamation-triangle',
\t        \t\t'primary':'info-circle',
\t        \t}

\t        \thtml = \"\";

\t        \tObject.keys(data.notifications).forEach(function(key) {
\t\t\t\t\thtml += \"<li class='list-group-item n-\"+data.notifications[key].unid+\" notification'>\";
\t\t\t\t\thtml += \"<span class='deleteNotification pull-right' data-id='\"+data.notifications[key].unid+\"' aria-label='close'><i class='fa fa-close fa-fw' aria-hidden='true'></i></span>\";

\t\t\t\t\tif(data.notifications[key].is_seen == 0){
\t\t\t\t\t\thtml += \"<span class='readNotification pull-right' data-id='\"+data.notifications[key].unid+\"' data-status='1'><i class='fa fa-circle' title='";
        // line 97
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Mark as read")), "html", null, true);
        echo "'></i></span>\";
\t\t\t\t\t}else{
\t\t\t\t\t\thtml += \"<span class='readNotification pull-right' data-id='\"+data.notifications[key].unid+\"'  data-status='0'><i class='fa fa-circle-thin' title='";
        // line 99
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Mark as unread")), "html", null, true);
        echo "'></i></span>\";
\t\t\t\t\t}

\t\t\t\t\thtml += \"<i class='fa fa-\"+icons[data.notifications[key].type]+\" text-\"+data.notifications[key].type+\"'></i> \";
\t\t\t\t\thtml += data.notifications[key].title;
\t\t\t\t\thtml += \"<small class='text-muted'> \"+data.notifications[key].created_at+\"</small>\";
\t\t\t\t\thtml += \"<p class='nContent'>\"+data.notifications[key].content+\"</p>\";
\t\t\t\t\thtml += \"</li>\";
\t\t\t\t});

\t        \tif(data.notifications.length == 0){
\t        \t\t\$(\"#perPage\").val(0);
\t        \t\t\$(\".loadMoreBtn\").hide();
\t        \t}else{
\t        \t\t\$(\"#perPage\").val(data.next);
\t        \t}

\t        \t\$(\".notificationsList\").append(html);

\t        }else{
\t        \talertBox(data.message,\"danger\",false,false,false);
\t        }
\t      },
\t      error: function( jqXhr, textStatus, errorThrown ){ 
\t      \tconsole.log(errorThrown);
\t      \talertBox(\"";
        // line 124
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",false,false,false);
\t      },
\t      complete: function(){
\t      \tkp_preloader(\"off\",\".loadMorePreloader\");
\t      }
\t    });
\t}

\t\$(document).on(\"click\",\".notification .deleteNotification\",function(){
\t\tvar notification = \$(this).data(\"id\");
\t\t\$.ajax({
\t      url: '";
        // line 135
        echo twig_escape_filter($this->env, base_url("my_notifications/delete/"), "html", null, true);
        echo "'+notification,
\t      type: 'GET',
\t      contentType: 'application/x-www-form-urlencoded',
\t      success: function( data, textStatus, jQxhr ){
\t        if(data.status == \"ok\"){
\t        \t\$(\".notification.n-\"+notification).css('background-color', \"#e89997\");
\t        \t\$(\".notification.n-\"+notification).fadeOut(500, function(){ \$(this).remove();});
\t        }
\t      },
\t      error: function( jqXhr, textStatus, errorThrown ){ 
\t      \tconsole.log(errorThrown);
\t      \talertBox(\"";
        // line 146
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",false,false,false);
\t      },
\t      complete: function(){}
\t    });
\t});

\t\$(document).on(\"click\",\".notification .readNotification\",function(){
\t\tvar notification = \$(this).data(\"id\");
\t\tvar notificationStatus = \$(this).data(\"status\");
\t\t\$.ajax({
\t      url: '";
        // line 156
        echo twig_escape_filter($this->env, base_url("my_notifications/read_status/"), "html", null, true);
        echo "'+notification+\"/\"+notificationStatus,
\t      type: 'GET',
\t      contentType: 'application/x-www-form-urlencoded',
\t      success: function( data, textStatus, jQxhr ){
\t        if(data.status == \"ok\"){
\t        \t\$(\".n-\"+notification+\" .readNotification i\").toggleClass(\"fa-circle\");
\t        \t\$(\".n-\"+notification+\" .readNotification i\").toggleClass(\"fa-circle-thin\");
\t        }
\t      },
\t      error: function( jqXhr, textStatus, errorThrown ){ 
\t      \tconsole.log(errorThrown);
\t      \talertBox(\"";
        // line 167
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",false,false,false);
\t      },
\t      complete: function(){}
\t    });
\t});

\t</script>
";
    }

    public function getTemplateName()
    {
        return "notifications/my_notifications.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 167,  307 => 156,  294 => 146,  280 => 135,  266 => 124,  238 => 99,  233 => 97,  209 => 76,  184 => 55,  181 => 54,  176 => 51,  171 => 49,  168 => 48,  166 => 47,  162 => 45,  153 => 43,  144 => 39,  138 => 38,  132 => 37,  129 => 36,  121 => 34,  113 => 32,  111 => 31,  106 => 29,  100 => 28,  97 => 27,  93 => 25,  91 => 24,  88 => 23,  86 => 22,  83 => 21,  81 => 20,  78 => 19,  76 => 18,  73 => 17,  71 => 16,  68 => 15,  63 => 14,  58 => 12,  54 => 11,  51 => 10,  45 => 7,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}{{ l('Notifications') }}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link href="{{ assets('theme/default/css/token-input-facebook.css') }}" rel="stylesheet" type="text/css" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {{ parent() }}*/
/* <input type="hidden" name="perPage" id="perPage" value="{{perPage}}">*/
/* <ul class="list-group notificationsList">*/
/* {% for n in getNotifications %}*/
/* */
/* {% if n.type == "success" %}*/
/* 	{% set icon = "check-circle" %}*/
/* {% elseif n.type == "info" %}*/
/* 	{% set icon = "info-circle" %}*/
/* {% elseif n.type == "warning" %}*/
/* 	{% set icon = "exclamation-circle" %}*/
/* {% elseif n.type == "danger" %}*/
/* 	{% set icon = "exclamation-triangle" %}*/
/* {% elseif n.type == "primary" %}*/
/* 	{% set icon = "info-circle" %}*/
/* {% endif %}*/
/* */
/* <li class="list-group-item n-{{n.unid}} notification" id="notification_{{n.unid}}">*/
/* 	<span class="deleteNotification pull-right" data-id="{{ n.unid }}"><i class="fa fa-close fa-fw" ></i></span>*/
/* */
/* 	{% if n.is_seen == 0 %}*/
/* 		<span class="readNotification pull-right" data-id="{{ n.unid }}"  data-status='1'><i class="fa fa-circle" title="{{l('Mark as read')}}"></i></span>*/
/* 	{% else %}*/
/* 		<span class="readNotification pull-right" data-id="{{ n.unid }}"  data-status='0'><i class="fa fa-circle-thin" title="{{l('Mark as unread')}}"></i></span>*/
/* 	{% endif %}*/
/* */
/* 	<i class="fa fa-{{icon}} text-{{n.type}}"></i>*/
/* 	{{ l(n.title) }} - <small class="text-muted">{{ fromUTC(n.created_at,user.currentUser.timezone)|date(date_format ~ ' H:i') }}</small>*/
/* 	<p class="nContent">{{ n.content|raw  }}</p>*/
/* </li>*/
/* */
/* {% else %}*/
/* <li class="list-group-item">{{l("You don't have any notifications")}}</li>*/
/* {% endfor %}*/
/* </ul>*/
/* */
/*  {% if getNotifications is not empty %}*/
/* <div class="loadMorePreloader"></div>*/
/* <button class="loadMoreBtn btn btn-primary full-width">{{l("Old notifications")}}</button>*/
/*  {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/* 	{{ parent() }}*/
/* 	<script type="text/javascript">*/
/* */
/* */
/*     $(document).ready(function(){*/
/*         if(window.location.hash != "") {*/
/*             $( "#notification_" + window.location.hash.substring(10) ).collapse("show");*/
/*             $( window.location.hash ).css( "border", "3px solid rgba(51, 122, 183, 0.60)" );*/
/*             $('html, body').animate({*/
/*               scrollTop: $( window.location.hash ).offset().top - 43*/
/*             }, 500);*/
/*         }*/
/*     });*/
/*     */
/* */
/* */
/* 	$(".loadMoreBtn").on("click",searchLoadMore);*/
/* */
/* 	function searchLoadMore(){*/
/* 		kp_preloader("on",".loadMorePreloader");*/
/* 		$.ajax({*/
/* 	      url: '{{ base_url("my_notifications/load_more/") }}'+$("#perPage").val(),*/
/* 	      type: 'GET',*/
/* 	      contentType: 'application/x-www-form-urlencoded',*/
/* 	      success: function( data, textStatus, jQxhr ){*/
/* 	        if(data.status == "ok"){*/
/* */
/* 	        	var icons = {*/
/* 	        		'success':'check-circle',*/
/* 	        		'info':'info-circle',*/
/* 	        		'warning':'exclamation-circle',*/
/* 	        		'danger':'exclamation-triangle',*/
/* 	        		'primary':'info-circle',*/
/* 	        	}*/
/* */
/* 	        	html = "";*/
/* */
/* 	        	Object.keys(data.notifications).forEach(function(key) {*/
/* 					html += "<li class='list-group-item n-"+data.notifications[key].unid+" notification'>";*/
/* 					html += "<span class='deleteNotification pull-right' data-id='"+data.notifications[key].unid+"' aria-label='close'><i class='fa fa-close fa-fw' aria-hidden='true'></i></span>";*/
/* */
/* 					if(data.notifications[key].is_seen == 0){*/
/* 						html += "<span class='readNotification pull-right' data-id='"+data.notifications[key].unid+"' data-status='1'><i class='fa fa-circle' title='{{l('Mark as read')}}'></i></span>";*/
/* 					}else{*/
/* 						html += "<span class='readNotification pull-right' data-id='"+data.notifications[key].unid+"'  data-status='0'><i class='fa fa-circle-thin' title='{{l('Mark as unread')}}'></i></span>";*/
/* 					}*/
/* */
/* 					html += "<i class='fa fa-"+icons[data.notifications[key].type]+" text-"+data.notifications[key].type+"'></i> ";*/
/* 					html += data.notifications[key].title;*/
/* 					html += "<small class='text-muted'> "+data.notifications[key].created_at+"</small>";*/
/* 					html += "<p class='nContent'>"+data.notifications[key].content+"</p>";*/
/* 					html += "</li>";*/
/* 				});*/
/* */
/* 	        	if(data.notifications.length == 0){*/
/* 	        		$("#perPage").val(0);*/
/* 	        		$(".loadMoreBtn").hide();*/
/* 	        	}else{*/
/* 	        		$("#perPage").val(data.next);*/
/* 	        	}*/
/* */
/* 	        	$(".notificationsList").append(html);*/
/* */
/* 	        }else{*/
/* 	        	alertBox(data.message,"danger",false,false,false);*/
/* 	        }*/
/* 	      },*/
/* 	      error: function( jqXhr, textStatus, errorThrown ){ */
/* 	      	console.log(errorThrown);*/
/* 	      	alertBox("{{ l('Unable to complete your request') }}","danger",false,false,false);*/
/* 	      },*/
/* 	      complete: function(){*/
/* 	      	kp_preloader("off",".loadMorePreloader");*/
/* 	      }*/
/* 	    });*/
/* 	}*/
/* */
/* 	$(document).on("click",".notification .deleteNotification",function(){*/
/* 		var notification = $(this).data("id");*/
/* 		$.ajax({*/
/* 	      url: '{{ base_url("my_notifications/delete/") }}'+notification,*/
/* 	      type: 'GET',*/
/* 	      contentType: 'application/x-www-form-urlencoded',*/
/* 	      success: function( data, textStatus, jQxhr ){*/
/* 	        if(data.status == "ok"){*/
/* 	        	$(".notification.n-"+notification).css('background-color', "#e89997");*/
/* 	        	$(".notification.n-"+notification).fadeOut(500, function(){ $(this).remove();});*/
/* 	        }*/
/* 	      },*/
/* 	      error: function( jqXhr, textStatus, errorThrown ){ */
/* 	      	console.log(errorThrown);*/
/* 	      	alertBox("{{ l('Unable to complete your request') }}","danger",false,false,false);*/
/* 	      },*/
/* 	      complete: function(){}*/
/* 	    });*/
/* 	});*/
/* */
/* 	$(document).on("click",".notification .readNotification",function(){*/
/* 		var notification = $(this).data("id");*/
/* 		var notificationStatus = $(this).data("status");*/
/* 		$.ajax({*/
/* 	      url: '{{ base_url("my_notifications/read_status/") }}'+notification+"/"+notificationStatus,*/
/* 	      type: 'GET',*/
/* 	      contentType: 'application/x-www-form-urlencoded',*/
/* 	      success: function( data, textStatus, jQxhr ){*/
/* 	        if(data.status == "ok"){*/
/* 	        	$(".n-"+notification+" .readNotification i").toggleClass("fa-circle");*/
/* 	        	$(".n-"+notification+" .readNotification i").toggleClass("fa-circle-thin");*/
/* 	        }*/
/* 	      },*/
/* 	      error: function( jqXhr, textStatus, errorThrown ){ */
/* 	      	console.log(errorThrown);*/
/* 	      	alertBox("{{ l('Unable to complete your request') }}","danger",false,false,false);*/
/* 	      },*/
/* 	      complete: function(){}*/
/* 	    });*/
/* 	});*/
/* */
/* 	</script>*/
/* {% endblock %}*/
