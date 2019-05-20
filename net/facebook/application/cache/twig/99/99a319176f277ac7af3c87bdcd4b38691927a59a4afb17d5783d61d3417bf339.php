<?php

/* home/preview.twig */
class __TwigTemplate_cb1da011393dedecbf112e3daae78ed5cce5a65c8f1669b397283da60cc54bcb extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_PREVIEW")), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
\t\t<div class=\"postPreview\">
\t\t\t<div class=\"post\">
\t\t\t\t<div class=\"PreviewPoster\">
\t\t\t\t\t";
        // line 9
        if ( !twig_test_empty($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "fb_id"), "method"))) {
            // line 10
            echo "\t\t\t\t\t<img src='https://graph.facebook.com/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "fb_id"), "method"), "html", null, true);
            echo "/picture?redirect=1&height=40&width=40&type=normal' style='vertical-align:top;'  onerror=\"this.src = 'theme/default/images/facebookUser.jpg'\" />
\t\t\t\t\t";
        } else {
            // line 12
            echo "\t                  <img src='";
            echo twig_escape_filter($this->env, assets("theme/default/images/facebookUser.jpg"), "html", null, true);
            echo "' width='32' height='32' style='vertical-align:middle;' />
\t                ";
        }
        // line 14
        echo "\t\t\t\t\t<span class=\"userFullName\">
\t\t\t\t\t\t";
        // line 15
        if ( !twig_test_empty($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(), "method"))) {
            // line 16
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "firstname"), "method")) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "lastname"), "method"))), "html", null, true);
            echo "
\t\t\t\t\t\t";
        } else {
            // line 18
            echo "\t\t\t\t\t\t\tFacebook User
\t\t\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"postPreviewDetails\">
\t\t\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("NOW")), "html", null, true);
        echo " · 
\t\t\t\t\t\t";
        // line 23
        if ($this->getAttribute((isset($context["fbAccountDefaultApp"]) ? $context["fbAccountDefaultApp"] : null), "row", array(), "method")) {
            // line 24
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbAccountDefaultApp"]) ? $context["fbAccountDefaultApp"] : null), "row", array(0 => "app_name"), "method"), "html", null, true);
            echo "
\t\t\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("APP_NAME")), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t\t<p class=\"message\">
\t\t\t\t\t<span class=\"defaultMessage\" style=\"width: 60%\"></span>\t
\t\t\t\t\t<span class=\"defaultMessage\" style=\"width: 80%\"></span>
\t\t\t\t\t<span class=\"defaultMessage\" style=\"width: 50%\"></span>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 38
        $this->loadTemplate("blocks/ads.twig", "home/preview.twig", 38)->display($context);
        // line 39
        echo "\t</div>
</div>
<script type=\"text/javascript\">
function videoPostPreview(){
\tresetPostPreview();
\tvar videoBlock = \"<div class='previewVideoType'>\";

\t\tif(\$.trim(\$(\"#video\").val()) != \"\"){
\t\t\tvar videoLink = spin(\$(\"#video\").val());
\t\t\tif(IsYoutubeVideo(videoLink)){
\t\t\t\tvar videoID = \$(\"#video\").val().match(/^.*(?:(?:youtu\\.be\\/|v\\/|vi\\/|u\\/\\w\\/|embed\\/)|(?:(?:watch)?\\?v(?:i)?=|\\&v(?:i)?=))([^#\\&\\?]*).*/)[1];
\t\t\t\t
\t\t\t\tvar regexp = /^(?:https?:\\/\\/)?(?:www\\.)?(?:youtu\\.be\\/|youtube\\.com\\/(?:embed\\/|v\\/|watch\\?v=|watch\\?.+&v=))((\\w|-){11})(?:\\S+)?\$/;
\t  \t\t\t
\t  \t\t\t\$(\"#postVideoDetails .input-group\").removeClass(\"inputError\");

\t  \t\t\tif(!regexp.test(\$(\"#video\").val())){
\t  \t\t\t\t\$(\"#postVideoDetails .input-group\").addClass(\"inputError\");
\t  \t\t\t\talertBox(\"";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Invalid Youtube video link")), "html", null, true);
        echo "\",\"danger\",false,true,true);
\t  \t\t\t}

\t\t\t\tvideoBlock += \"<iframe src='https://www.youtube.com/embed/\"+videoID+\"' width='100%' height='300px' frameborder='0' allowfullscreen='allowfullscreen'></iframe>\";
\t\t\t}else{
\t\t\t\tvideoBlock += \"<video controls><source src='\"+videoLink+\"'></source></video>\";
\t\t\t}
\t\t}
\t\tvideoBlock += \"</div>\";
\t\$('.postPreview').append(videoBlock);
}
</script>";
    }

    public function getTemplateName()
    {
        return "home/preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 57,  97 => 39,  95 => 38,  83 => 28,  77 => 26,  71 => 24,  69 => 23,  65 => 22,  61 => 20,  57 => 18,  51 => 16,  49 => 15,  46 => 14,  40 => 12,  34 => 10,  32 => 9,  23 => 3,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title">{{ l("POST_PREVIEW") }}</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/* 		<div class="postPreview">*/
/* 			<div class="post">*/
/* 				<div class="PreviewPoster">*/
/* 					{% if fbaccountDetails.row('fb_id') is not empty %}*/
/* 					<img src='https://graph.facebook.com/{{ fbaccountDetails.row('fb_id') }}/picture?redirect=1&height=40&width=40&type=normal' style='vertical-align:top;'  onerror="this.src = 'theme/default/images/facebookUser.jpg'" />*/
/* 					{% else %}*/
/* 	                  <img src='{{ assets('theme/default/images/facebookUser.jpg') }}' width='32' height='32' style='vertical-align:middle;' />*/
/* 	                {% endif %}*/
/* 					<span class="userFullName">*/
/* 						{% if fbaccountDetails.row() is not empty %}*/
/* 							{{ fbaccountDetails.row('firstname')|capitalize ~ " " ~ fbaccountDetails.row('lastname')|capitalize }}*/
/* 						{% else %}*/
/* 							Facebook User*/
/* 						{% endif %}*/
/* 					</span>*/
/* 					<span class="postPreviewDetails">*/
/* 						{{ l("NOW") }} · */
/* 						{% if fbAccountDefaultApp.row() %}*/
/* 								{{ fbAccountDefaultApp.row('app_name') }}*/
/* 						{% else %}*/
/* 							{{ l("APP_NAME") }}*/
/* 						{% endif %}*/
/* 					</span>*/
/* 					<div class="clear"></div>*/
/* 				</div>*/
/* 				<p class="message">*/
/* 					<span class="defaultMessage" style="width: 60%"></span>	*/
/* 					<span class="defaultMessage" style="width: 80%"></span>*/
/* 					<span class="defaultMessage" style="width: 50%"></span>*/
/* 				</p>*/
/* 			</div>*/
/* 		</div>*/
/* 		{% include "blocks/ads.twig" %}*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* function videoPostPreview(){*/
/* 	resetPostPreview();*/
/* 	var videoBlock = "<div class='previewVideoType'>";*/
/* */
/* 		if($.trim($("#video").val()) != ""){*/
/* 			var videoLink = spin($("#video").val());*/
/* 			if(IsYoutubeVideo(videoLink)){*/
/* 				var videoID = $("#video").val().match(/^.*(?:(?:youtu\.be\/|v\/|vi\/|u\/\w\/|embed\/)|(?:(?:watch)?\?v(?:i)?=|\&v(?:i)?=))([^#\&\?]*).*//* )[1];*/
/* 				*/
/* 				var regexp = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;*/
/* 	  			*/
/* 	  			$("#postVideoDetails .input-group").removeClass("inputError");*/
/* */
/* 	  			if(!regexp.test($("#video").val())){*/
/* 	  				$("#postVideoDetails .input-group").addClass("inputError");*/
/* 	  				alertBox("{{l('Invalid Youtube video link')}}","danger",false,true,true);*/
/* 	  			}*/
/* */
/* 				videoBlock += "<iframe src='https://www.youtube.com/embed/"+videoID+"' width='100%' height='300px' frameborder='0' allowfullscreen='allowfullscreen'></iframe>";*/
/* 			}else{*/
/* 				videoBlock += "<video controls><source src='"+videoLink+"'></source></video>";*/
/* 			}*/
/* 		}*/
/* 		videoBlock += "</div>";*/
/* 	$('.postPreview').append(videoBlock);*/
/* }*/
/* </script>*/
