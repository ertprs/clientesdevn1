<?php

/* settings/components/app_settings/advanced_settings.twig */
class __TwigTemplate_b3b0d23b47402d4da110286784894d030ee722b4c95beaff5513588396298a35 extends Twig_Template
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
  <h4 class=\"panel-title\">
    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#advanced_settings\">
    <i class=\"fa fa-fw fa-cogs\" aria-hidden=\"true\"></i> 
\t<span>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Advanced settings")), "html", null, true);
        echo "</span></a>
  </h4>
</div>
<div id=\"advanced_settings\" class=\"panel-collapse collapse\">
\t<div class=\"panel-body\">
\t\t
\t\t<div class=\"input-group\">
\t\t\t<label for=\"head_js\">";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Head javascript")), "html", null, true);
        echo " <small>( You can use this field to inject Javascript code on the head of the page, This code will be available on all pages)</small></label>
\t\t\t<span class='text-danger'> This field is for advanced users only, make sure your javascript code dose not contain any errors</span>
\t\t\t<textarea name=\"head_js\" class=\"form-control\" id=\"head_js\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Head javascript")), "html", null, true);
        echo "\" >";
        echo call_user_func_array($this->env->getFunction('unescape')->getCallable(), array($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "head_js", array(), "array")));
        echo "</textarea> 
\t\t</div>

\t\t<div class=\"input-group\">
\t\t\t<label for=\"footer_js\">";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Footer javascript")), "html", null, true);
        echo " <small>( You can use this field to inject Javascript code on the footer of the page, This code will be available on all pages</small></label>
\t\t\t<span class='text-danger'> This field is for advanced users only, make sure your javascript code dose not contain any errors</span>
\t\t\t<textarea name=\"footer_js\" class=\"form-control\" id=\"footer_js\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Footer javascript")), "html", null, true);
        echo "\" >";
        echo call_user_func_array($this->env->getFunction('unescape')->getCallable(), array($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "footer_js", array(), "array")));
        echo "</textarea> 
\t\t</div>

\t\t<div class=\"input-group\">
\t\t\t";
        // line 25
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("maintenance_mode")))) {
            // line 26
            echo "\t\t\t\t";
            $context["maintenance_mode"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("maintenance_mode")) == "on")) ? ("checked") : (""));
            // line 27
            echo "\t\t\t";
        } else {
            // line 28
            echo "\t\t\t\t";
            $context["maintenance_mode"] = ((($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "maintenance_mode", array(), "array") == 1)) ? ("checked") : (""));
            // line 29
            echo "\t\t\t";
        }
        // line 30
        echo "\t\t\t<label class=\"switch\">
\t\t\t\t<input type=\"checkbox\" id=\"maintenance_mode\" name=\"maintenance_mode\"  class='checkbox-style' aria-label=\"New users must confirm their email address\" ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["maintenance_mode"]) ? $context["maintenance_mode"] : null), "html", null, true);
        echo "/>
\t\t\t\t<span class=\"slider round\"></span>
\t\t\t</label>
\t\t\t<label for=\"maintenance_mode\" class=\"input-text\">";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Active Maintenance Mode")), "html", null, true);
        echo "</label>
\t\t</div>

\t\t<input type=\"submit\" name=\"save\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE_CHANGES")), "html", null, true);
        echo "\" class=\"btn btn-primary\" />

\t\t<h4 class=\"tab-title\"><i class=\"fa fa-cogs\"></i> ";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("App Cache")), "html", null, true);
        echo " <a href=\"#\"  onclick=\"return false;\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("If you made any change to the templates files (.twig files) you need to clear the cache in order to see the changes you made")), "html", null, true);
        echo "\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></a></h4>
\t\t<div class=\"input-group\">
\t\t\t<button type=\"button\" class=\"btn btn-danger\" id=\"clearCache\">
\t\t\t\t<span class=\"clearCacheIcon\">
\t\t\t\t\t<i class=\"fa fa-refresh fa-spin fa-fw\"></i>
\t\t\t\t\t<span class=\"sr-only\">Loading...</span>
\t\t\t\t</span>
\t\t\t\t";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Clear the cache")), "html", null, true);
        echo "
\t\t\t</button>
\t\t\t<span class=\"clearMessage\"></span>
\t\t</div>
\t</div>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "settings/components/app_settings/advanced_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 46,  98 => 39,  93 => 37,  87 => 34,  81 => 31,  78 => 30,  75 => 29,  72 => 28,  69 => 27,  66 => 26,  64 => 25,  55 => 21,  50 => 19,  41 => 15,  36 => 13,  26 => 6,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* <div class="panel-heading">*/
/*   <h4 class="panel-title">*/
/*     <a data-toggle="collapse" data-parent="#accordion" href="#advanced_settings">*/
/*     <i class="fa fa-fw fa-cogs" aria-hidden="true"></i> */
/* 	<span>{{ l('Advanced settings') }}</span></a>*/
/*   </h4>*/
/* </div>*/
/* <div id="advanced_settings" class="panel-collapse collapse">*/
/* 	<div class="panel-body">*/
/* 		*/
/* 		<div class="input-group">*/
/* 			<label for="head_js">{{ l('Head javascript') }} <small>( You can use this field to inject Javascript code on the head of the page, This code will be available on all pages)</small></label>*/
/* 			<span class='text-danger'> This field is for advanced users only, make sure your javascript code dose not contain any errors</span>*/
/* 			<textarea name="head_js" class="form-control" id="head_js" placeholder="{{ l('Head javascript') }}" >{{ unescape(app_settings["head_js"])|raw }}</textarea> */
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			<label for="footer_js">{{ l('Footer javascript') }} <small>( You can use this field to inject Javascript code on the footer of the page, This code will be available on all pages</small></label>*/
/* 			<span class='text-danger'> This field is for advanced users only, make sure your javascript code dose not contain any errors</span>*/
/* 			<textarea name="footer_js" class="form-control" id="footer_js" placeholder="{{ l('Footer javascript') }}" >{{ unescape(app_settings["footer_js"])|raw }}</textarea> */
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			{% if input_post("maintenance_mode") is not empty %}*/
/* 				{% set maintenance_mode = input_post("maintenance_mode") == 'on' ? "checked" : "" %}*/
/* 			{% else %}*/
/* 				{% set maintenance_mode = app_settings["maintenance_mode"] == 1 ? "checked" : "" %}*/
/* 			{% endif %}*/
/* 			<label class="switch">*/
/* 				<input type="checkbox" id="maintenance_mode" name="maintenance_mode"  class='checkbox-style' aria-label="New users must confirm their email address" {{ maintenance_mode }}/>*/
/* 				<span class="slider round"></span>*/
/* 			</label>*/
/* 			<label for="maintenance_mode" class="input-text">{{ l('Active Maintenance Mode') }}</label>*/
/* 		</div>*/
/* */
/* 		<input type="submit" name="save" value="{{ l('SAVE_CHANGES') }}" class="btn btn-primary" />*/
/* */
/* 		<h4 class="tab-title"><i class="fa fa-cogs"></i> {{ l('App Cache') }} <a href="#"  onclick="return false;" data-toggle="kp_tooltip" data-placement="top" title="{{ l('If you made any change to the templates files (.twig files) you need to clear the cache in order to see the changes you made') }}"><i class="fa fa-question-circle" aria-hidden="true"></i></a></h4>*/
/* 		<div class="input-group">*/
/* 			<button type="button" class="btn btn-danger" id="clearCache">*/
/* 				<span class="clearCacheIcon">*/
/* 					<i class="fa fa-refresh fa-spin fa-fw"></i>*/
/* 					<span class="sr-only">Loading...</span>*/
/* 				</span>*/
/* 				{{ l('Clear the cache') }}*/
/* 			</button>*/
/* 			<span class="clearMessage"></span>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* </div>*/
