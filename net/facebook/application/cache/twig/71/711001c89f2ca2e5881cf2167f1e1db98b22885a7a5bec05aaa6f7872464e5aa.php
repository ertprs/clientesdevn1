<?php

/* settings/publish_settings.twig */
class __TwigTemplate_55bc35b66e53bf2780b979cb4a6344786172834c2b88fe0f8713e932abc97941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "settings/publish_settings.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Publish settings")), "html", null, true);
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
<form method='POST' class=\"settings\" novalidate>
\t<div class=\"row\">
\t\t<div class=\"tabbable tabs-left\">
\t\t\t<div class=\"col-xs-12 col-sm-3 settingsTabs\">
\t\t\t\t";
        // line 13
        $context["current_page"] = "publish_settings";
        // line 14
        echo "\t\t\t\t";
        $this->loadTemplate("settings/tabs.twig", "settings/publish_settings.twig", 14)->display($context);
        // line 15
        echo "\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-9 settingsContent\">
\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t";
        // line 19
        echo form_open();
        echo "

\t\t\t\t\t<h4 class=\"tab-title\"><i class=\"fa fa-clipboard\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Publish settings")), "html", null, true);
        echo "</h4>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t";
        // line 24
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("openGroupOnly")))) {
            // line 25
            echo "\t\t\t\t\t\t\t";
            $context["openGroupOnlyChecked"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("openGroupOnly")) == "on")) ? ("checked") : (""));
            // line 26
            echo "\t\t\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t\t\t";
            $context["openGroupOnlyChecked"] = ((($this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "openGroupOnly"), "method") == 1)) ? ("checked") : (""));
            // line 28
            echo "\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"checkbox-style\" id=\"openGroupOnly\" name=\"openGroupOnly\" aria-label=\"Post to open group only\" ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["openGroupOnlyChecked"]) ? $context["openGroupOnlyChecked"] : null), "html", null, true);
        echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"openGroupOnly\" class=\"input-text\">";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SHOW_OPEN_GROUPS_ONLY")), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t";
        // line 37
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("uniquePost")))) {
            // line 38
            echo "\t\t\t\t\t\t\t";
            $context["uniquePost"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("uniquePost")) == "on")) ? ("checked") : (""));
            // line 39
            echo "\t\t\t\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t\t\t\t";
            $context["uniquePost"] = ((($this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "uniquePost"), "method") == 1)) ? ("checked") : (""));
            // line 41
            echo "\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"checkbox-style\" id=\"uniquePost\" name=\"uniquePost\" aria-label=\"Unique post\" ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["uniquePost"]) ? $context["uniquePost"] : null), "html", null, true);
        echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"uniquePost\" class=\"input-text\">";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("UNIQUE_POST")), "html", null, true);
        echo " <a href=\"#\"  onclick=\"return false;\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("UNIQUE_POST_TEXT")), "html", null, true);
        echo "\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></a></label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t";
        // line 50
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("uniqueLink")))) {
            // line 51
            echo "\t\t\t\t\t\t\t";
            $context["uniqueLink"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("uniqueLink")) == "on")) ? ("checked") : (""));
            // line 52
            echo "\t\t\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t\t\t";
            $context["uniqueLink"] = ((($this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "uniqueLink"), "method") == 1)) ? ("checked") : (""));
            // line 54
            echo "\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"checkbox-style\" id=\"uniqueLink\" name=\"uniqueLink\" aria-label=\"Unique post\" ";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["uniqueLink"]) ? $context["uniqueLink"] : null), "html", null, true);
        echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"uniqueLink\" class=\"input-text\">";
        // line 59
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("UNIQUE_LINK")), "html", null, true);
        echo " <a href=\"#\"  onclick=\"return false;\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("UNIQUE_LINK_TEXT")), "html", null, true);
        echo "\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></a></label>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 62
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "enable_link_customize", array()) == 1)) {
            // line 63
            echo "\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t";
            // line 64
            if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("enable_link_customization")))) {
                // line 65
                echo "\t\t\t\t\t\t\t";
                $context["enable_link_customization"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("enable_link_customization")) == "on")) ? ("checked") : (""));
                // line 66
                echo "\t\t\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t\t\t\t";
                $context["enable_link_customization"] = ((($this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "enable_link_customization"), "method") == 1)) ? ("checked") : (""));
                // line 68
                echo "\t\t\t\t\t\t";
            }
            // line 69
            echo "
\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"checkbox-style\" id=\"enable_link_customization\" name=\"enable_link_customization\" aria-label=\"Unique post\" ";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["enable_link_customization"]) ? $context["enable_link_customization"] : null), "html", null, true);
            echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"enable_link_customization\" class=\"input-text\">";
            // line 74
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Enable link customization")), "html", null, true);
            echo " <a href=\"#\"  onclick=\"return false;\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Enable this option to be able to customize the sub link fields")), "html", null, true);
            echo "\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></a></label>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t
\t\t\t\t\t<label for=\"postInterval\">";
        // line 78
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_INTERVAL")), "html", null, true);
        echo " (<small>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("IN_SECONDS")), "html", null, true);
        echo "</small>)</label>
\t\t\t\t\t<select name='postInterval' id=\"postInterval\"  class=\"form-control\">
\t\t\t\t\t\t";
        // line 80
        $context["minInterval"] = ((($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "min_interval", array()) < 10)) ? (10) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "min_interval", array())));
        // line 81
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["minInterval"]) ? $context["minInterval"] : null), 1500));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 82
            echo "\t\t\t\t\t\t\t";
            $context["currentUserInterval"] = (( !twig_test_empty($this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "postInterval"), "method"))) ? ($this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "postInterval"), "method")) : ((isset($context["minInterval"]) ? $context["minInterval"] : null)));
            // line 83
            echo "\t\t\t\t\t\t\t";
            if (((isset($context["currentUserInterval"]) ? $context["currentUserInterval"] : null) == $context["i"])) {
                // line 84
                echo "\t\t\t\t\t\t\t\t<option value='";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "' selected==\"selected\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Sec")), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            } else {
                // line 86
                echo "\t\t\t\t\t\t\t\t<option value='";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Sec")), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 88
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<label for=\"postApp\">";
        // line 90
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB_APP")), "html", null, true);
        echo "</label>
\t\t\t\t\t<select name='postApp' id=\"postApp\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t";
        // line 93
        $context["selected"] = ((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("scheduledPostApp"))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("scheduledPostApp"))) : ($this->getAttribute((isset($context["fbAccountDefaultApp"]) ? $context["fbAccountDefaultApp"] : null), "row", array(0 => "id"), "method")));
        // line 94
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fbAccountApps"]) ? $context["fbAccountApps"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 95
            echo "\t\t\t\t\t\t\t";
            $context["s"] = ((((isset($context["selected"]) ? $context["selected"] : null) == $this->getAttribute($context["app"], "appid", array()))) ? ("selected") : (""));
            // line 96
            echo "\t\t\t\t\t\t\t<option value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "appid", array()), "html", null, true);
            echo "' ";
            echo twig_escape_filter($this->env, (isset($context["s"]) ? $context["s"] : null), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "app_name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t\t\t\t</select>
\t\t\t\t\t
\t\t\t\t\t<input type=\"submit\" name=\"save\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE_CHANGES")), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "settings/publish_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 100,  284 => 98,  271 => 96,  268 => 95,  263 => 94,  261 => 93,  255 => 90,  252 => 89,  246 => 88,  236 => 86,  226 => 84,  223 => 83,  220 => 82,  215 => 81,  213 => 80,  206 => 78,  203 => 77,  195 => 74,  189 => 71,  185 => 69,  182 => 68,  179 => 67,  176 => 66,  173 => 65,  171 => 64,  168 => 63,  166 => 62,  158 => 59,  152 => 56,  149 => 55,  146 => 54,  143 => 53,  140 => 52,  137 => 51,  135 => 50,  126 => 46,  120 => 43,  117 => 42,  114 => 41,  111 => 40,  108 => 39,  105 => 38,  103 => 37,  96 => 33,  90 => 30,  87 => 29,  84 => 28,  81 => 27,  78 => 26,  75 => 25,  73 => 24,  67 => 21,  62 => 19,  56 => 15,  53 => 14,  51 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ l('Publish settings') }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* <form method='POST' class="settings" novalidate>*/
/* 	<div class="row">*/
/* 		<div class="tabbable tabs-left">*/
/* 			<div class="col-xs-12 col-sm-3 settingsTabs">*/
/* 				{% set current_page = 'publish_settings' %}*/
/* 				{% include "settings/tabs.twig" %}*/
/* 			</div>*/
/* 			<div class="col-xs-12 col-sm-9 settingsContent">*/
/* 				<div class="tab-content">*/
/* */
/* 					{{ form_open() }}*/
/* */
/* 					<h4 class="tab-title"><i class="fa fa-clipboard"></i> {{ l('Publish settings') }}</h4>*/
/* */
/* 					<div class="input-group">*/
/* 						{% if input_post("openGroupOnly") is not empty %}*/
/* 							{% set openGroupOnlyChecked = input_post("openGroupOnly") == 'on' ? "checked" : "" %}*/
/* 						{% else %}*/
/* 							{% set openGroupOnlyChecked = userOptions.row('openGroupOnly') == 1 ? "checked" : "" %}*/
/* 						{% endif %}*/
/* 						<label class="switch">*/
/* 							<input type="checkbox" class="checkbox-style" id="openGroupOnly" name="openGroupOnly" aria-label="Post to open group only" {{ openGroupOnlyChecked }} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="openGroupOnly" class="input-text">{{ l('SHOW_OPEN_GROUPS_ONLY') }}</label>*/
/* 					</div>*/
/* */
/* 					<div class="input-group">*/
/* 						{% if input_post("uniquePost") is not empty %}*/
/* 							{% set uniquePost = input_post("uniquePost") == 'on' ? "checked" : "" %}*/
/* 						{% else %}*/
/* 							{% set uniquePost = userOptions.row('uniquePost') == 1 ? "checked" : "" %}*/
/* 						{% endif %}*/
/* 						<label class="switch">*/
/* 							<input type="checkbox" class="checkbox-style" id="uniquePost" name="uniquePost" aria-label="Unique post" {{ uniquePost }} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="uniquePost" class="input-text">{{ l('UNIQUE_POST') }} <a href="#"  onclick="return false;" data-toggle="kp_tooltip" data-placement="top" title="{{ l('UNIQUE_POST_TEXT') }}"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>*/
/* 					</div>*/
/* */
/* 					<div class="input-group">*/
/* 						{% if input_post("uniqueLink") is not empty %}*/
/* 							{% set uniqueLink = input_post("uniqueLink") == 'on' ? "checked" : "" %}*/
/* 						{% else %}*/
/* 							{% set uniqueLink = userOptions.row('uniqueLink') == 1 ? "checked" : "" %}*/
/* 						{% endif %}*/
/* 						<label class="switch">*/
/* 							<input type="checkbox" class="checkbox-style" id="uniqueLink" name="uniqueLink" aria-label="Unique post" {{ uniqueLink }} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="uniqueLink" class="input-text">{{ l('UNIQUE_LINK') }} <a href="#"  onclick="return false;" data-toggle="kp_tooltip" data-placement="top" title="{{ l('UNIQUE_LINK_TEXT') }}"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>*/
/* 					</div>*/
/* */
/* 					{% if app_settings.enable_link_customize == 1 %}*/
/* 					<div class="input-group">*/
/* 						{% if input_post("enable_link_customization") is not empty %}*/
/* 							{% set enable_link_customization = input_post("enable_link_customization") == 'on' ? "checked" : "" %}*/
/* 						{% else %}*/
/* 							{% set enable_link_customization = userOptions.row('enable_link_customization') == 1 ? "checked" : "" %}*/
/* 						{% endif %}*/
/* */
/* 						<label class="switch">*/
/* 							<input type="checkbox" class="checkbox-style" id="enable_link_customization" name="enable_link_customization" aria-label="Unique post" {{ enable_link_customization }} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="enable_link_customization" class="input-text">{{ l('Enable link customization') }} <a href="#"  onclick="return false;" data-toggle="kp_tooltip" data-placement="top" title="{{ l('Enable this option to be able to customize the sub link fields') }}"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					*/
/* 					<label for="postInterval">{{ l('POST_INTERVAL') }} (<small>{{ l('IN_SECONDS') }}</small>)</label>*/
/* 					<select name='postInterval' id="postInterval"  class="form-control">*/
/* 						{% set minInterval = app_settings.min_interval < 10 ? 10 : app_settings.min_interval %}*/
/* 						{% for i in minInterval ..1500 %}*/
/* 							{% set currentUserInterval = userOptions.row('postInterval') is not empty ? userOptions.row('postInterval') : minInterval %}*/
/* 							{% if currentUserInterval == i %}*/
/* 								<option value='{{ i }}' selected=="selected">{{ i }} {{ l('Sec') }}</option>*/
/* 							{% else %}*/
/* 								<option value='{{ i }}'>{{ i }} {{ l('Sec') }}</option>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 					<label for="postApp">{{ l('FB_APP') }}</label>*/
/* 					<select name='postApp' id="postApp" class="form-control">*/
/* 						<option value=""></option>*/
/* 						{% set selected = input_post('scheduledPostApp') ? input_post('scheduledPostApp') : fbAccountDefaultApp.row('id') %}*/
/* 						{% for app in fbAccountApps %}*/
/* 							{% set s = selected == app.appid ? "selected" : "" %}*/
/* 							<option value='{{ app.appid }}' {{ s }}>{{ app.app_name }}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 					*/
/* 					<input type="submit" name="save" value="{{ l('SAVE_CHANGES') }}" class="btn btn-primary" />*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* {% endblock %}*/
