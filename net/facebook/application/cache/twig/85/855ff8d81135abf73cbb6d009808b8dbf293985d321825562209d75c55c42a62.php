<?php

/* home/details.twig */
class __TwigTemplate_2ad6d2d7d88530eee7242e4e6342f2c14762c3c4c24bec93d99c67dbe014b2a5 extends Twig_Template
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
        echo "<div class=\"panel panel-default postingDetailsPanel\">
  <div class=\"panel-body\">
    <div class=\"postingDetails\">
\t\t";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Groups")), "html", null, true);
        echo " : <strong class=\"groupsCount\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "GroupsCount", array(), "method"), "html", null, true);
        echo "</strong> | 
\t\t";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Pages")), "html", null, true);
        echo " : <strong class=\"pagesCount\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "PagesCount", array(), "method"), "html", null, true);
        echo "</strong> 
\t\t
\t\t";
        // line 7
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "enable_instant_post", array(), "array") == 1)) {
            // line 8
            echo "\t\t\t|
\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ELAPSED")), "html", null, true);
            echo " : <strong><span class=\"totalPostTime\">-</span></strong> | 
\t\t\t";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("TIME_LEFT")), "html", null, true);
            echo " : <strong><span class=\"leftTime\">-</span></strong>
\t\t";
        }
        // line 12
        echo "\t</div>
\t";
        // line 13
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "enable_instant_post", array(), "array") == 1)) {
            // line 14
            echo "\t<div class=\"controls\">
\t\t<button id=\"pauseButton\" class=\"btn btn-primary\" onclick=\"postPause()\" disabled>
\t\t\t<i class=\"fa fa-pause\" aria-hidden=\"true\"></i> ";
            // line 16
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("PAUSE")), "html", null, true);
            echo " 
\t\t</button>
\t\t
\t\t<button id=\"resumeButton\" class=\"btn btn-primary\"  onclick=\"postResume()\" disabled>
\t\t\t<i class=\"fa fa-play\" aria-hidden=\"true\"></i> ";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("RESUME")), "html", null, true);
            echo "
\t\t</button>
\t</div>
\t";
        }
        // line 24
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "home/details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  67 => 20,  60 => 16,  56 => 14,  54 => 13,  51 => 12,  46 => 10,  42 => 9,  39 => 8,  37 => 7,  30 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="panel panel-default postingDetailsPanel">*/
/*   <div class="panel-body">*/
/*     <div class="postingDetails">*/
/* 		{{ l('Groups') }} : <strong class="groupsCount">{{ fbaccount.GroupsCount() }}</strong> | */
/* 		{{ l('Pages') }} : <strong class="pagesCount">{{ fbaccount.PagesCount() }}</strong> */
/* 		*/
/* 		{% if app_settings['enable_instant_post'] == 1 %}*/
/* 			|*/
/* 			{{ l('ELAPSED') }} : <strong><span class="totalPostTime">-</span></strong> | */
/* 			{{ l('TIME_LEFT') }} : <strong><span class="leftTime">-</span></strong>*/
/* 		{% endif %}*/
/* 	</div>*/
/* 	{% if app_settings['enable_instant_post'] == 1 %}*/
/* 	<div class="controls">*/
/* 		<button id="pauseButton" class="btn btn-primary" onclick="postPause()" disabled>*/
/* 			<i class="fa fa-pause" aria-hidden="true"></i> {{ l('PAUSE') }} */
/* 		</button>*/
/* 		*/
/* 		<button id="resumeButton" class="btn btn-primary"  onclick="postResume()" disabled>*/
/* 			<i class="fa fa-play" aria-hidden="true"></i> {{ l('RESUME') }}*/
/* 		</button>*/
/* 	</div>*/
/* 	{% endif %}*/
/*   </div>*/
/* </div>*/
