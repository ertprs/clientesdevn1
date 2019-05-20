<?php

/* home/fb_status_presets.twig */
class __TwigTemplate_58beeb0ec813ceeeff8f8810b77770f9696446f4237275e70615cb629445d905 extends Twig_Template
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
        echo "<style type=\"text/css\">
\t.fb_presets ul{padding: 0;margin: 0;list-style: none;}
\t.fbp {
\t    width: 25px;
\t    height: 25px;
\t    float: left;
\t    margin: 2px 3px;
\t    border-radius: 5px;
\t    border: 1px solid #ddd;
\t    cursor: pointer;
\t    background-image: url(";
        // line 11
        echo twig_escape_filter($this->env, assets(("theme/default/images/fbpresets/fbpresets.png?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo ");
\t}
\t.fb_presets{margin-top: 5px;overflow: auto;}
\t.fbp-1887542564794370{background-color: rgb(183, 55, 73);}
\t.fbp-1881421442117417{background-color: #111;}
\t.fbp-324777221272701{background-image: linear-gradient(45deg, #00f4ff 0%, #1137ad 100%);}
\t.fbp-1365883126823705{background-color: #0073ff;}
\t.fbp-814910605325191{background-image: linear-gradient(45deg, #f8f023 0%, #05ae35 100%);}
\t.fbp-249307305544279{background-image: linear-gradient(45deg, #ff0047 0%, #2c34c7 100%);}
\t.fbp-362672934129151{background-color: #ff3d00;}
\t.fbp-127281214508877{background-position: center 224px;}
\t.fbp-1943057695973225{background-position: center 192px;}
\t.fbp-112865389425474{background-position: center 160px;}
\t.fbp-126877221295325{background-position: center 128px;}
\t.fbp-623911921148129{background-position: center 96px;}
\t.fbp-1705020913127345{background-position: center 64px;}
\t.fbp-1200070923437550{background-position: center 32px;}
\t.fbp-357109954713249{background-position: center 256px;}
\t.fbp-816008591908985{background-position: center 280px;}
\t.fbp-425789167806189{background-position: -20px 312px;}


\t.fbp-1903718606535395{background-color: rgba(226,1,59,1.00);}
\t.fbp-1288458721262047{background-color: rgba(95,102,115,1.00);}


\t.fbpb-1288458721262047{background-color: rgba(95,102,115,1.00) !important;}


\t.fbpb-1887542564794370{background-color: rgb(183, 55, 73) !important;}
\t.fbpb-1881421442117417{background-color: #111 !important;}
\t.fbpb-324777221272701{background-image: linear-gradient(45deg, #00f4ff 0%, #1137ad 100%) !important;}
\t.fbpb-1365883126823705{background-color: #0073ff !important;}
\t.fbpb-814910605325191{background-image: linear-gradient(45deg, #f8f023 0%, #05ae35 100%) !important;}
\t.fbpb-249307305544279{background-image: linear-gradient(45deg, #ff0047 0%, #2c34c7 100%) !important;}

\t.fbpb-362672934129151{background-color: #ff3d00 !important;}
\t.fbpb-1903718606535395{background-color: rgba(226,1,59,1.00) !important;}

\t.fbpb-127281214508877{background-image: url(";
        // line 50
        echo twig_escape_filter($this->env, assets("theme/default/images/fbpresets/127281214508877.jpg"), "html", null, true);
        echo ");}
\t.fbpb-1943057695973225{background-image: url(";
        // line 51
        echo twig_escape_filter($this->env, assets("theme/default/images/fbpresets/1943057695973225.jpg"), "html", null, true);
        echo ");}
\t.fbpb-112865389425474{background-image: url(";
        // line 52
        echo twig_escape_filter($this->env, assets("theme/default/images/fbpresets/112865389425474.jpg"), "html", null, true);
        echo ");}
\t.fbpb-126877221295325{background-image: url(";
        // line 53
        echo twig_escape_filter($this->env, assets("theme/default/images/fbpresets/126877221295325.jpg"), "html", null, true);
        echo ");}
\t.fbpb-623911921148129{background-image: url(";
        // line 54
        echo twig_escape_filter($this->env, assets("theme/default/images/fbpresets/623911921148129.jpg"), "html", null, true);
        echo ");}
\t.fbpb-1705020913127345{background-image: url(";
        // line 55
        echo twig_escape_filter($this->env, assets("theme/default/images/fbpresets/1705020913127345.jpg"), "html", null, true);
        echo ");}
\t.fbpb-1200070923437550{background-image: url(";
        // line 56
        echo twig_escape_filter($this->env, assets("theme/default/images/fbpresets/1200070923437550.jpg"), "html", null, true);
        echo ");}
\t.fbpb-357109954713249{background-image: url(";
        // line 57
        echo twig_escape_filter($this->env, assets("theme/default/images/fbpresets/357109954713249.jpg"), "html", null, true);
        echo ");}
\t.fbpb-816008591908985{background-image: url(";
        // line 58
        echo twig_escape_filter($this->env, assets("theme/default/images/fbpresets/816008591908985.jpg"), "html", null, true);
        echo ");}
\t.fbpb-425789167806189{background-image: url(";
        // line 59
        echo twig_escape_filter($this->env, assets("theme/default/images/fbpresets/425789167806189.jpg"), "html", null, true);
        echo ");}


\t.fbpb .emojionearea-editor{
\t    text-align: center;
\t    color: white !important;
\t    font-size: 21px;
\t    height: 270px;
\t    padding: 20% 20px 0px 20px;
\t    line-height: 20px;
\t}
\t.fbpb {background-position: center;background-size: 100%;border: none !important;}
\t.emojionearea .emojionearea-button {background: white;border-radius: 10px;}
</style>
<input type=\"hidden\" name=\"fb_preset_id\" id=\"fb_preset_id\" value=\"";
        // line 73
        if (twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("fb_preset_id")))) {
            echo "0";
        } else {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("fb_preset_id")), "html", null, true);
        }
        echo "\" />
<div class=\"fb_presets\">
\t<ul>
\t\t<li class=\"fbp fbp-0\" data-psid=\"0\"></li>
\t\t<li class=\"fbp fbp-1903718606535395\" data-psid=\"1903718606535395\"></li>
\t\t<li class=\"fbp fbp-1887542564794370\" data-psid=\"1887542564794370\"></li>
\t\t<li class=\"fbp fbp-1881421442117417\" data-psid=\"1881421442117417\"></li>
\t\t<li class=\"fbp fbp-324777221272701\" data-psid=\"324777221272701\"></li>
\t\t<li class=\"fbp fbp-1365883126823705\" data-psid=\"1365883126823705\"></li>
\t\t<li class=\"fbp fbp-814910605325191\" data-psid=\"814910605325191\"></li>
\t\t<li class=\"fbp fbp-362672934129151\" data-psid=\"362672934129151\"></li>
\t\t<li class=\"fbp fbp-249307305544279\" data-psid=\"249307305544279\"></li>
\t\t<li class=\"fbp fbp-1288458721262047\" data-psid=\"1288458721262047\"></li>

\t\t<li class=\"fbp fbp-127281214508877\" data-psid=\"127281214508877\"></li>
\t\t<li class=\"fbp fbp-1943057695973225\" data-psid=\"1943057695973225\"></li>
\t\t<li class=\"fbp fbp-112865389425474\" data-psid=\"112865389425474\"></li>
\t\t<li class=\"fbp fbp-126877221295325\" data-psid=\"126877221295325\"></li>
\t\t<li class=\"fbp fbp-623911921148129\" data-psid=\"623911921148129\"></li>
\t\t<li class=\"fbp fbp-1705020913127345\" data-psid=\"1705020913127345\"></li>
\t\t<li class=\"fbp fbp-1200070923437550\" data-psid=\"1200070923437550\"></li>
\t\t<li class=\"fbp fbp-357109954713249\" data-psid=\"357109954713249\"></li>
\t\t<li class=\"fbp fbp-816008591908985\" data-psid=\"816008591908985\"></li>
\t\t<li class=\"fbp fbp-425789167806189\" data-psid=\"425789167806189\"></li>
\t\t
\t</ul>
</div>

<script type=\"text/javascript\">
\t\$(\".fb_presets .fbp\").on(\"click\",function() {
\t\tvar textEditor = \$(\".emojionearea\");
\t\ttextEditor.removeClass();
\t\ttextEditor.addClass(\"emojionearea\");
\t\ttextEditor.addClass(\"form-control\");
\t\t\$(\"#fb_preset_id\").val(0); 
\t\tif(\$(this).data(\"psid\")!=0 && \$.trim(\$(\".emojionearea-editor\").text()).length <= 130){
\t\t\t\$(\"#fb_preset_id\").val(\$(this).data(\"psid\")); 
\t\t\ttextEditor.addClass(\"fbpb\");
\t\t\ttextEditor.addClass(\"fbpb-\"+\$(this).data(\"psid\"));\t
\t\t}

\t\tif(\$.trim(\$(\".emojionearea-editor\").text()).length > 130){
\t\t\talertBox('";
        // line 115
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("The status is content is too long, Status background cannot be used with longer than 130 characters.")), "html", null, true);
        echo "',\"danger\",false,true);
\t\t}
\t})

\t";
        // line 119
        if (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("fb_preset_id")) != "") && (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("fb_preset_id")) != 0))) {
            // line 120
            echo "\t\$(window).bind(\"load\", function() {
\t   \tvar textEditor = \$(\".emojionearea\");
\t\ttextEditor.addClass(\"fbpb\");
\t\ttextEditor.addClass(\"fbpb-";
            // line 123
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("fb_preset_id")), "html", null, true);
            echo "\");
\t});
\t";
        }
        // line 126
        echo "
\t// Preview instant update (message)
\t\$('#message,.emojionearea-editor').bind('input propertychange change', function() {

\t\tif(\$(\"#postForm #postType\").val()!=\"message\"){return false;}

\t\t";
        // line 142
        echo "\t});


\t\$( \".postTypeMessage\" ).click(function() {
\t\tif(\$(\"#fb_preset_id\").val() != \"\" && \$(\"#fb_preset_id\").val() !=0 && \$.trim(\$(\".emojionearea-editor\").text()).length <= 130){
\t\t\tvar textEditor = \$(\".emojionearea\");
\t\t\ttextEditor.addClass(\"fbpb\");
\t\t\ttextEditor.addClass(\"fbpb-\"+\$(\"#fb_preset_id\").val());\t
\t\t}
\t\t\$(\".fb_presets\").show();
\t});
\t
\t// postTypeLink click event when click (define post type and make current post type active) 
\t\$( \".postTypeLink,.postTypeImage,.postTypeVideo\" ).click(function() {
\t\t\$(\".fb_presets\").hide();
\t\tvar textEditor = \$(\".emojionearea\");
\t\ttextEditor.removeClass(\"fbpb\");
\t\ttextEditor.removeClass(\"fbpb-\"+\$(\"#fb_preset_id\").val());
\t});

</script>";
    }

    public function getTemplateName()
    {
        return "home/fb_status_presets.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 142,  195 => 126,  189 => 123,  184 => 120,  182 => 119,  175 => 115,  126 => 73,  109 => 59,  105 => 58,  101 => 57,  97 => 56,  93 => 55,  89 => 54,  85 => 53,  81 => 52,  77 => 51,  73 => 50,  31 => 11,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	.fb_presets ul{padding: 0;margin: 0;list-style: none;}*/
/* 	.fbp {*/
/* 	    width: 25px;*/
/* 	    height: 25px;*/
/* 	    float: left;*/
/* 	    margin: 2px 3px;*/
/* 	    border-radius: 5px;*/
/* 	    border: 1px solid #ddd;*/
/* 	    cursor: pointer;*/
/* 	    background-image: url({{assets('theme/default/images/fbpresets/fbpresets.png?v=' ~ assets_version)}});*/
/* 	}*/
/* 	.fb_presets{margin-top: 5px;overflow: auto;}*/
/* 	.fbp-1887542564794370{background-color: rgb(183, 55, 73);}*/
/* 	.fbp-1881421442117417{background-color: #111;}*/
/* 	.fbp-324777221272701{background-image: linear-gradient(45deg, #00f4ff 0%, #1137ad 100%);}*/
/* 	.fbp-1365883126823705{background-color: #0073ff;}*/
/* 	.fbp-814910605325191{background-image: linear-gradient(45deg, #f8f023 0%, #05ae35 100%);}*/
/* 	.fbp-249307305544279{background-image: linear-gradient(45deg, #ff0047 0%, #2c34c7 100%);}*/
/* 	.fbp-362672934129151{background-color: #ff3d00;}*/
/* 	.fbp-127281214508877{background-position: center 224px;}*/
/* 	.fbp-1943057695973225{background-position: center 192px;}*/
/* 	.fbp-112865389425474{background-position: center 160px;}*/
/* 	.fbp-126877221295325{background-position: center 128px;}*/
/* 	.fbp-623911921148129{background-position: center 96px;}*/
/* 	.fbp-1705020913127345{background-position: center 64px;}*/
/* 	.fbp-1200070923437550{background-position: center 32px;}*/
/* 	.fbp-357109954713249{background-position: center 256px;}*/
/* 	.fbp-816008591908985{background-position: center 280px;}*/
/* 	.fbp-425789167806189{background-position: -20px 312px;}*/
/* */
/* */
/* 	.fbp-1903718606535395{background-color: rgba(226,1,59,1.00);}*/
/* 	.fbp-1288458721262047{background-color: rgba(95,102,115,1.00);}*/
/* */
/* */
/* 	.fbpb-1288458721262047{background-color: rgba(95,102,115,1.00) !important;}*/
/* */
/* */
/* 	.fbpb-1887542564794370{background-color: rgb(183, 55, 73) !important;}*/
/* 	.fbpb-1881421442117417{background-color: #111 !important;}*/
/* 	.fbpb-324777221272701{background-image: linear-gradient(45deg, #00f4ff 0%, #1137ad 100%) !important;}*/
/* 	.fbpb-1365883126823705{background-color: #0073ff !important;}*/
/* 	.fbpb-814910605325191{background-image: linear-gradient(45deg, #f8f023 0%, #05ae35 100%) !important;}*/
/* 	.fbpb-249307305544279{background-image: linear-gradient(45deg, #ff0047 0%, #2c34c7 100%) !important;}*/
/* */
/* 	.fbpb-362672934129151{background-color: #ff3d00 !important;}*/
/* 	.fbpb-1903718606535395{background-color: rgba(226,1,59,1.00) !important;}*/
/* */
/* 	.fbpb-127281214508877{background-image: url({{assets('theme/default/images/fbpresets/127281214508877.jpg')}});}*/
/* 	.fbpb-1943057695973225{background-image: url({{assets('theme/default/images/fbpresets/1943057695973225.jpg')}});}*/
/* 	.fbpb-112865389425474{background-image: url({{assets('theme/default/images/fbpresets/112865389425474.jpg')}});}*/
/* 	.fbpb-126877221295325{background-image: url({{assets('theme/default/images/fbpresets/126877221295325.jpg')}});}*/
/* 	.fbpb-623911921148129{background-image: url({{assets('theme/default/images/fbpresets/623911921148129.jpg')}});}*/
/* 	.fbpb-1705020913127345{background-image: url({{assets('theme/default/images/fbpresets/1705020913127345.jpg')}});}*/
/* 	.fbpb-1200070923437550{background-image: url({{assets('theme/default/images/fbpresets/1200070923437550.jpg')}});}*/
/* 	.fbpb-357109954713249{background-image: url({{assets('theme/default/images/fbpresets/357109954713249.jpg')}});}*/
/* 	.fbpb-816008591908985{background-image: url({{assets('theme/default/images/fbpresets/816008591908985.jpg')}});}*/
/* 	.fbpb-425789167806189{background-image: url({{assets('theme/default/images/fbpresets/425789167806189.jpg')}});}*/
/* */
/* */
/* 	.fbpb .emojionearea-editor{*/
/* 	    text-align: center;*/
/* 	    color: white !important;*/
/* 	    font-size: 21px;*/
/* 	    height: 270px;*/
/* 	    padding: 20% 20px 0px 20px;*/
/* 	    line-height: 20px;*/
/* 	}*/
/* 	.fbpb {background-position: center;background-size: 100%;border: none !important;}*/
/* 	.emojionearea .emojionearea-button {background: white;border-radius: 10px;}*/
/* </style>*/
/* <input type="hidden" name="fb_preset_id" id="fb_preset_id" value="{% if  input_post("fb_preset_id") is empty %}0{% else %}{{ input_post("fb_preset_id") }}{% endif %}" />*/
/* <div class="fb_presets">*/
/* 	<ul>*/
/* 		<li class="fbp fbp-0" data-psid="0"></li>*/
/* 		<li class="fbp fbp-1903718606535395" data-psid="1903718606535395"></li>*/
/* 		<li class="fbp fbp-1887542564794370" data-psid="1887542564794370"></li>*/
/* 		<li class="fbp fbp-1881421442117417" data-psid="1881421442117417"></li>*/
/* 		<li class="fbp fbp-324777221272701" data-psid="324777221272701"></li>*/
/* 		<li class="fbp fbp-1365883126823705" data-psid="1365883126823705"></li>*/
/* 		<li class="fbp fbp-814910605325191" data-psid="814910605325191"></li>*/
/* 		<li class="fbp fbp-362672934129151" data-psid="362672934129151"></li>*/
/* 		<li class="fbp fbp-249307305544279" data-psid="249307305544279"></li>*/
/* 		<li class="fbp fbp-1288458721262047" data-psid="1288458721262047"></li>*/
/* */
/* 		<li class="fbp fbp-127281214508877" data-psid="127281214508877"></li>*/
/* 		<li class="fbp fbp-1943057695973225" data-psid="1943057695973225"></li>*/
/* 		<li class="fbp fbp-112865389425474" data-psid="112865389425474"></li>*/
/* 		<li class="fbp fbp-126877221295325" data-psid="126877221295325"></li>*/
/* 		<li class="fbp fbp-623911921148129" data-psid="623911921148129"></li>*/
/* 		<li class="fbp fbp-1705020913127345" data-psid="1705020913127345"></li>*/
/* 		<li class="fbp fbp-1200070923437550" data-psid="1200070923437550"></li>*/
/* 		<li class="fbp fbp-357109954713249" data-psid="357109954713249"></li>*/
/* 		<li class="fbp fbp-816008591908985" data-psid="816008591908985"></li>*/
/* 		<li class="fbp fbp-425789167806189" data-psid="425789167806189"></li>*/
/* 		*/
/* 	</ul>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/* 	$(".fb_presets .fbp").on("click",function() {*/
/* 		var textEditor = $(".emojionearea");*/
/* 		textEditor.removeClass();*/
/* 		textEditor.addClass("emojionearea");*/
/* 		textEditor.addClass("form-control");*/
/* 		$("#fb_preset_id").val(0); */
/* 		if($(this).data("psid")!=0 && $.trim($(".emojionearea-editor").text()).length <= 130){*/
/* 			$("#fb_preset_id").val($(this).data("psid")); */
/* 			textEditor.addClass("fbpb");*/
/* 			textEditor.addClass("fbpb-"+$(this).data("psid"));	*/
/* 		}*/
/* */
/* 		if($.trim($(".emojionearea-editor").text()).length > 130){*/
/* 			alertBox('{{l("The status is content is too long, Status background cannot be used with longer than 130 characters.")}}',"danger",false,true);*/
/* 		}*/
/* 	})*/
/* */
/* 	{% if input_post("fb_preset_id") != "" and input_post("fb_preset_id") != 0 %}*/
/* 	$(window).bind("load", function() {*/
/* 	   	var textEditor = $(".emojionearea");*/
/* 		textEditor.addClass("fbpb");*/
/* 		textEditor.addClass("fbpb-{{ input_post('fb_preset_id') }}");*/
/* 	});*/
/* 	{% endif %}*/
/* */
/* 	// Preview instant update (message)*/
/* 	$('#message,.emojionearea-editor').bind('input propertychange change', function() {*/
/* */
/* 		if($("#postForm #postType").val()!="message"){return false;}*/
/* */
/* 		{#if($("#fb_preset_id").val() != "" && $("#fb_preset_id").val() != 0){*/
/* 			var textEditor = $(".emojionearea");*/
/* 			if($.trim($(".emojionearea-editor").text()).length > 130 ){*/
/* 				textEditor.removeClass("fbpb");*/
/* 				textEditor.removeClass("fbpb-"+$("#fb_preset_id").val());*/
/* 			}else{*/
/* 				textEditor.addClass("fbpb");*/
/* 				textEditor.addClass("fbpb-"+$("#fb_preset_id").val());*/
/* 			}*/
/* 		}#}*/
/* 	});*/
/* */
/* */
/* 	$( ".postTypeMessage" ).click(function() {*/
/* 		if($("#fb_preset_id").val() != "" && $("#fb_preset_id").val() !=0 && $.trim($(".emojionearea-editor").text()).length <= 130){*/
/* 			var textEditor = $(".emojionearea");*/
/* 			textEditor.addClass("fbpb");*/
/* 			textEditor.addClass("fbpb-"+$("#fb_preset_id").val());	*/
/* 		}*/
/* 		$(".fb_presets").show();*/
/* 	});*/
/* 	*/
/* 	// postTypeLink click event when click (define post type and make current post type active) */
/* 	$( ".postTypeLink,.postTypeImage,.postTypeVideo" ).click(function() {*/
/* 		$(".fb_presets").hide();*/
/* 		var textEditor = $(".emojionearea");*/
/* 		textEditor.removeClass("fbpb");*/
/* 		textEditor.removeClass("fbpb-"+$("#fb_preset_id").val());*/
/* 	});*/
/* */
/* </script>*/
