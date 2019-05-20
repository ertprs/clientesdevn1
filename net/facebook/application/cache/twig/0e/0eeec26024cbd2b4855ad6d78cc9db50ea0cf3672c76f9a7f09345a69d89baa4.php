<?php

/* settings/general_settings.twig */
class __TwigTemplate_768bf539fd7683a161dbae6704be02cafa04c4ed1d474458e9deb42699dcc294 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "settings/general_settings.twig", 1);
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("General settings")), "html", null, true);
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
        $context["current_page"] = "general_settings";
        // line 14
        echo "\t\t\t\t";
        $this->loadTemplate("settings/tabs.twig", "settings/general_settings.twig", 14)->display($context);
        // line 15
        echo "\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-9 settingsContent\">
\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t";
        // line 19
        echo form_open();
        echo "

\t\t\t\t\t<h4 class=\"tab-title\"><i class=\"fa fa-tasks\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("General settings")), "html", null, true);
        echo "</h4>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t";
        // line 24
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("perPage")))) {
            // line 25
            echo "\t\t\t\t\t\t\t";
            $context["perPage"] = call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("perPage"));
            // line 26
            echo "\t\t\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t\t\t";
            $context["perPage"] = $this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "per_page"), "method");
            // line 28
            echo "\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t<label for=\"perPage\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Records per page")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"number\" name=\"perPage\" class=\"form-control\" id=\"perPage\" placeholder=\"";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Records per page")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["perPage"]) ? $context["perPage"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<label for=\"timezone\">
\t\t\t\t\t\t\t";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("TIMEZONE")), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("CURRENT_TIME")), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "NOW", ((isset($context["date_format"]) ? $context["date_format"] : null) . " H:i")), "html", null, true);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 37
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("timezone")))) {
            // line 38
            echo "\t\t\t\t\t\t\t";
            $context["userTimezone"] = call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("timezone"));
            // line 39
            echo "\t\t\t\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t\t\t\t";
            $context["userTimezone"] = (( !twig_test_empty($this->getAttribute((isset($context["userData"]) ? $context["userData"] : null), "timezone", array(), "array"))) ? ($this->getAttribute((isset($context["userData"]) ? $context["userData"] : null), "timezone", array(), "array")) : ("UTC"));
            // line 41
            echo "\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t<select name='timezone' id=\"timezone\" class=\"form-control\">
\t\t\t\t\t    \t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timezones"]) ? $context["timezones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tz"]) {
            // line 44
            echo "\t\t\t\t\t      \t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["tz"], "html", null, true);
            echo "\" ";
            if (($context["tz"] == (isset($context["userTimezone"]) ? $context["userTimezone"] : null))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["tz"], "html", null, true);
            echo "</option>
\t\t\t\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t\t    </select>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<label for=\"lang\">";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("LANGUAGE")), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 51
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method")) {
            // line 52
            echo "\t\t\t\t\t\t\t<small><i class=\"fa fa-plus\"></i> <a href=\"";
            echo twig_escape_filter($this->env, help_link("add_lang"), "html", null, true);
            echo "\" target=\"_blank\">Add language</a></small>
\t\t\t\t\t\t";
        }
        // line 54
        echo "\t\t\t\t\t\t</label>
\t\t\t\t\t\t<select name='lang' id=\"lang\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 56
        $context["currentUserLang"] = (( !twig_test_empty($this->getAttribute((isset($context["userData"]) ? $context["userData"] : null), "lang", array(), "array"))) ? ($this->getAttribute((isset($context["userData"]) ? $context["userData"] : null), "lang", array(), "array")) : ((isset($context["DEFAULT_LANG"]) ? $context["DEFAULT_LANG"] : null)));
        // line 57
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lang"], "availableLanguages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 58
            echo "\t\t\t\t\t\t\t\t";
            $context["selected"] = ((((isset($context["currentUserLang"]) ? $context["currentUserLang"] : null) == $context["lang"])) ? ("selected") : (""));
            echo " 
\t\t\t\t\t\t\t\t<option value='";
            // line 59
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "' ";
            echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : null), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["lang"]), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<input type=\"submit\" name=\"save\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Save changes")), "html", null, true);
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
        return "settings/general_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 64,  193 => 61,  181 => 59,  176 => 58,  171 => 57,  169 => 56,  165 => 54,  159 => 52,  157 => 51,  153 => 50,  147 => 46,  132 => 44,  128 => 43,  125 => 42,  122 => 41,  119 => 40,  116 => 39,  113 => 38,  111 => 37,  102 => 35,  92 => 30,  87 => 29,  84 => 28,  81 => 27,  78 => 26,  75 => 25,  73 => 24,  67 => 21,  62 => 19,  56 => 15,  53 => 14,  51 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ l('General settings') }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* <form method='POST' class="settings" novalidate>*/
/* 	<div class="row">*/
/* 		<div class="tabbable tabs-left">*/
/* 			<div class="col-xs-12 col-sm-3 settingsTabs">*/
/* 				{% set current_page = 'general_settings' %}*/
/* 				{% include "settings/tabs.twig" %}*/
/* 			</div>*/
/* 			<div class="col-xs-12 col-sm-9 settingsContent">*/
/* 				<div class="tab-content">*/
/* */
/* 					{{ form_open() }}*/
/* */
/* 					<h4 class="tab-title"><i class="fa fa-tasks"></i> {{ l('General settings') }}</h4>*/
/* */
/* 					<div class="input-group">*/
/* 						{% if input_post('perPage') is not empty %}*/
/* 							{% set perPage = input_post('perPage') %}*/
/* 						{% else %}*/
/* 							{% set perPage = userOptions.row('per_page') %}*/
/* 						{% endif %}*/
/* 						<label for="perPage">{{ l('Records per page') }}</label>*/
/* 						<input type="number" name="perPage" class="form-control" id="perPage" placeholder="{{ l('Records per page') }}" value="{{ perPage }}" />*/
/* 					</div>*/
/* */
/* 					<div class="input-group">*/
/* 						<label for="timezone">*/
/* 							{{ l('TIMEZONE') }} | {{ l('CURRENT_TIME') }} : {{ 'NOW'|date(date_format ~ " H:i") }}*/
/* 						</label>*/
/* 						{% if input_post('timezone') is not empty %}*/
/* 							{% set userTimezone = input_post('timezone') %}*/
/* 						{% else %}*/
/* 							{% set userTimezone = userData['timezone'] is not empty ? userData['timezone'] : 'UTC' %}*/
/* 						{% endif %}*/
/* 						<select name='timezone' id="timezone" class="form-control">*/
/* 					    	{% for tz in timezones %}*/
/* 					      		<option value="{{ tz }}" {% if tz == userTimezone %}selected{% endif %}>{{ tz }}</option>*/
/* 					    	{% endfor %}*/
/* 					    </select>*/
/* 					</div>*/
/* */
/* 					<div class="input-group">*/
/* 						<label for="lang">{{ l('LANGUAGE') }}*/
/* 						{% if user.hasPermission('admin') %}*/
/* 							<small><i class="fa fa-plus"></i> <a href="{{ help_link("add_lang") }}" target="_blank">Add language</a></small>*/
/* 						{% endif %}*/
/* 						</label>*/
/* 						<select name='lang' id="lang" class="form-control">*/
/* 							{% set currentUserLang = userData['lang'] is not empty ? userData['lang'] : DEFAULT_LANG %}*/
/* 							{% for lang in lang.availableLanguages %}*/
/* 								{% set selected = currentUserLang == lang ? 'selected' : '' %} */
/* 								<option value='{{ lang }}' {{ selected }}>{{ lang|capitalize }}</option>*/
/* 							{% endfor %}*/
/* 						</select>*/
/* 					</div>*/
/* 					*/
/* 					<input type="submit" name="save" value="{{ l('Save changes') }}" class="btn btn-primary" />*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* {% endblock %}*/
