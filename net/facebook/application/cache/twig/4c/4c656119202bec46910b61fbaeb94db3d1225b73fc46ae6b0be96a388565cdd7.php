<?php

/* settings/components/app_settings/general.twig */
class __TwigTemplate_79cdbd69b5029ab4ad3c1d269033d8ff069963e4397c47f900e6d94892ed6924 extends Twig_Template
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
\t<div class=\"panel-heading\">
\t  <h4 class=\"panel-title\">
\t    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#general\">
\t    <i class=\"fa fa-cog\"></i>
\t    <span>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("General")), "html", null, true);
        echo "</span></a>
\t  </h4>
\t</div>
\t<div id=\"general\" class=\"panel-collapse collapse in\">
\t  <div class=\"panel-body\">
\t\t<div class=\"input-group\">
\t\t\t";
        // line 12
        $context["sitename"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("sitename")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("sitename"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "sitename", array(), "array")));
        // line 13
        echo "\t\t\t<label for=\"sitename\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SITE_NAME")), "html", null, true);
        echo "</label>
\t\t\t<input type=\"text\" name=\"sitename\" class=\"form-control\" id=\"sitename\" placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SITE_NAME")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["sitename"]) ? $context["sitename"] : null), "html", null, true);
        echo "\" />
\t\t</div>

\t\t";
        // line 17
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("usersCanRegister")))) {
            // line 18
            echo "\t\t\t";
            $context["usersCanRegister"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("usersCanRegister")) == "on")) ? ("checked") : (""));
            // line 19
            echo "\t\t";
        } else {
            // line 20
            echo "\t\t\t";
            $context["usersCanRegister"] = ((($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "users_can_register", array(), "array") == 1)) ? ("checked") : (""));
            // line 21
            echo "\t\t";
        }
        // line 22
        echo "
\t\t<div class=\"input-group\">
\t\t\t<label class=\"switch\">
\t\t\t\t<input type=\"checkbox\" class='checkbox-style' id=\"usersCanRegister\" name=\"usersCanRegister\" aria-label=\"Users can register\" ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["usersCanRegister"]) ? $context["usersCanRegister"] : null), "html", null, true);
        echo " />
\t\t\t\t<span class=\"slider round\"></span>
\t\t\t</label>
\t\t\t<label for=\"usersCanRegister\" class=\"input-text\">";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("USERS_CAN_REGISTER")), "html", null, true);
        echo "</label>
\t\t</div>

\t\t<div class=\"input-group\">
\t\t\t";
        // line 32
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("usersMustConfirmEmail")))) {
            // line 33
            echo "\t\t\t\t";
            $context["usersMustConfirmEmail"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("usersMustConfirmEmail")) == "on")) ? ("checked") : (""));
            // line 34
            echo "\t\t\t";
        } else {
            // line 35
            echo "\t\t\t\t";
            $context["usersMustConfirmEmail"] = ((($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "users_must_confirm_email", array(), "array") == 1)) ? ("checked") : (""));
            // line 36
            echo "\t\t\t";
        }
        // line 37
        echo "\t\t\t<label class=\"switch\">
\t\t\t\t<input type=\"checkbox\" id=\"usersMustConfirmEmail\" name=\"usersMustConfirmEmail\"  class='checkbox-style' aria-label=\"New users must confirm their email address\" ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["usersMustConfirmEmail"]) ? $context["usersMustConfirmEmail"] : null), "html", null, true);
        echo "/>
\t\t\t\t<span class=\"slider round\"></span>
\t\t\t</label>
\t\t\t<label for=\"usersMustConfirmEmail\" class=\"input-text\">";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("USERS_MUST_CONFIRM_EMAIL")), "html", null, true);
        echo "</label>
\t\t</div>

\t\t<div class=\"input-group\">
\t\t\t";
        // line 45
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("userActiveByAdmin")))) {
            // line 46
            echo "\t\t\t\t";
            $context["userActiveByAdmin"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("userActiveByAdmin")) == "on")) ? ("checked") : (""));
            // line 47
            echo "\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t";
            $context["userActiveByAdmin"] = ((($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "user_active_by_admin", array(), "array") == 1)) ? ("checked") : (""));
            // line 49
            echo "\t\t\t";
        }
        // line 50
        echo "\t\t\t<label class=\"switch\">
\t\t\t\t<input type=\"checkbox\" id=\"userActiveByAdmin\" name=\"userActiveByAdmin\"  class='checkbox-style' aria-label=\"";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("New users accounts must be activated by an admin")), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, (isset($context["userActiveByAdmin"]) ? $context["userActiveByAdmin"] : null), "html", null, true);
        echo "/>
\t\t\t\t<span class=\"slider round\"></span>
\t\t\t</label>
\t\t\t<label for=\"userActiveByAdmin\" class=\"input-text\">";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("New users accounts must be activated by an admin")), "html", null, true);
        echo "</label>
\t\t</div>

\t\t<div class=\"input-group\">
\t\t\t<label for=\"defaultRole\">";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("New users Default role")), "html", null, true);
        echo "</label>
\t\t\t<select name=\"default_role\" id=\"defaultRole\" class=\"form-control\">
\t\t\t\t";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 61
            echo "\t\t\t\t\t";
            $context["listRoles"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute($context["role"], "permissions", array())));
            // line 62
            echo "\t\t\t\t\t";
            if (twig_test_empty($this->getAttribute((isset($context["listRoles"]) ? $context["listRoles"] : null), "admin", array()))) {
                // line 63
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["role"], "id", array()) == $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "default_role", array(), "array"))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute($context["role"], "name", array()))), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t</select>
\t\t</div>

\t\t<div class=\"input-group\">
\t\t\t<label for=\"default_timezone\">";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("New users Default timezone")), "html", null, true);
        echo "</label>
\t\t\t<select name=\"default_timezone\" id=\"default_timezone\" class=\"form-control\">
\t\t\t\t";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timezones"]) ? $context["timezones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 73
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["timezone"], "html", null, true);
            echo "\" ";
            if (($context["timezone"] == $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "default_timezone", array(), "array"))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["timezone"], "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t</select>
\t\t</div>

\t\t<div class=\"input-group\">
\t\t\t<label for=\"default_lang\">";
        // line 79
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Default language")), "html", null, true);
        echo " <small><i class=\"fa fa-plus\"></i> <a href=\"";
        echo twig_escape_filter($this->env, help_link("add_lang"), "html", null, true);
        echo "\" target=\"_blank\">Add language</a></small></label>
\t\t\t<select name=\"default_lang\" id=\"default_lang\" class=\"form-control\">
\t\t\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lang"], "availableLanguages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 82
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "\" ";
            if (($context["lang"] == $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "default_lang", array(), "array"))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["lang"]), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t</select>
\t\t</div>

\t\t<div class=\"input-group\">
\t\t\t";
        // line 88
        $context["date_format"] = $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "date_format", array(), "array");
        // line 89
        echo "\t\t\t<label for=\"date_format\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Date format")), "html", null, true);
        echo "</label>
\t\t\t<select name=\"date_format\" id=\"date_format\" class=\"form-control\">
\t\t\t\t<option value=\"1\" ";
        // line 91
        if (((isset($context["date_format"]) ? $context["date_format"] : null) == "m/d/Y")) {
            echo "selected";
        }
        echo ">MM/DD/YYYY</option>
\t\t\t\t<option value=\"2\" ";
        // line 92
        if (((isset($context["date_format"]) ? $context["date_format"] : null) == "d/m/Y")) {
            echo "selected";
        }
        echo ">DD/MM/YYYY</option>
\t\t\t\t<option value=\"3\" ";
        // line 93
        if (((isset($context["date_format"]) ? $context["date_format"] : null) == "Y/d/m")) {
            echo "selected";
        }
        echo ">YYYY/DD/MM</option>
\t\t\t\t<option value=\"4\" ";
        // line 94
        if (((isset($context["date_format"]) ? $context["date_format"] : null) == "Y/m/d")) {
            echo "selected";
        }
        echo ">YYYY/MM/DD</option>
\t\t\t</select>
\t\t</div>

\t\t<div class=\"input-group\">
\t\t\t";
        // line 99
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("disable_dt_plugin")))) {
            // line 100
            echo "\t\t\t\t";
            $context["disable_dt_plugin"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("disable_dt_plugin")) == "on")) ? ("checked") : (""));
            // line 101
            echo "\t\t\t";
        } else {
            // line 102
            echo "\t\t\t\t";
            $context["disable_dt_plugin"] = ((($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "disable_dt_plugin", array(), "array") == 1)) ? ("checked") : (""));
            // line 103
            echo "\t\t\t";
        }
        // line 104
        echo "\t\t\t<label class=\"switch\">
\t\t\t\t<input type=\"checkbox\" id=\"disable_dt_plugin\" name=\"disable_dt_plugin\"  class='checkbox-style' aria-label=\"";
        // line 105
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Lite mode for nodes table")), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, (isset($context["disable_dt_plugin"]) ? $context["disable_dt_plugin"] : null), "html", null, true);
        echo "/>
\t\t\t\t<span class=\"slider round\"></span>
\t\t\t</label>
\t\t\t<label for=\"disable_dt_plugin\" class=\"input-text\">";
        // line 108
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Enable Lite mode for nodes table")), "html", null, true);
        echo " <a href=\"#\"  onclick=\"return false;\" data-toggle=\"kp_tooltip\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("This option allows you to switch to lite mode for displaying groups and pages, if the home page takes long time to load it's recommended to enable this option")), "html", null, true);
        echo "\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></a></label>
\t\t</div>
\t\t
\t\t<input type=\"submit\" name=\"save\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE_CHANGES")), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
\t  </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "settings/components/app_settings/general.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 111,  306 => 108,  298 => 105,  295 => 104,  292 => 103,  289 => 102,  286 => 101,  283 => 100,  281 => 99,  271 => 94,  265 => 93,  259 => 92,  253 => 91,  247 => 89,  245 => 88,  239 => 84,  224 => 82,  220 => 81,  213 => 79,  207 => 75,  192 => 73,  188 => 72,  183 => 70,  177 => 66,  171 => 65,  159 => 63,  156 => 62,  153 => 61,  149 => 60,  144 => 58,  137 => 54,  129 => 51,  126 => 50,  123 => 49,  120 => 48,  117 => 47,  114 => 46,  112 => 45,  105 => 41,  99 => 38,  96 => 37,  93 => 36,  90 => 35,  87 => 34,  84 => 33,  82 => 32,  75 => 28,  69 => 25,  64 => 22,  61 => 21,  58 => 20,  55 => 19,  52 => 18,  50 => 17,  42 => 14,  37 => 13,  35 => 12,  26 => 6,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* 	<div class="panel-heading">*/
/* 	  <h4 class="panel-title">*/
/* 	    <a data-toggle="collapse" data-parent="#accordion" href="#general">*/
/* 	    <i class="fa fa-cog"></i>*/
/* 	    <span>{{ l("General")}}</span></a>*/
/* 	  </h4>*/
/* 	</div>*/
/* 	<div id="general" class="panel-collapse collapse in">*/
/* 	  <div class="panel-body">*/
/* 		<div class="input-group">*/
/* 			{% set sitename = input_post("sitename") is not empty ? input_post("sitename") : app_settings["sitename"] %}*/
/* 			<label for="sitename">{{ l('SITE_NAME') }}</label>*/
/* 			<input type="text" name="sitename" class="form-control" id="sitename" placeholder="{{ l('SITE_NAME') }}" value="{{ sitename }}" />*/
/* 		</div>*/
/* */
/* 		{% if input_post("usersCanRegister") is not empty %}*/
/* 			{% set usersCanRegister = input_post("usersCanRegister") == 'on' ? "checked" : "" %}*/
/* 		{% else %}*/
/* 			{% set usersCanRegister = app_settings["users_can_register"] == 1 ? "checked" : "" %}*/
/* 		{% endif %}*/
/* */
/* 		<div class="input-group">*/
/* 			<label class="switch">*/
/* 				<input type="checkbox" class='checkbox-style' id="usersCanRegister" name="usersCanRegister" aria-label="Users can register" {{ usersCanRegister }} />*/
/* 				<span class="slider round"></span>*/
/* 			</label>*/
/* 			<label for="usersCanRegister" class="input-text">{{ l('USERS_CAN_REGISTER') }}</label>*/
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			{% if input_post("usersMustConfirmEmail") is not empty %}*/
/* 				{% set usersMustConfirmEmail = input_post("usersMustConfirmEmail") == 'on' ? "checked" : "" %}*/
/* 			{% else %}*/
/* 				{% set usersMustConfirmEmail = app_settings["users_must_confirm_email"] == 1 ? "checked" : "" %}*/
/* 			{% endif %}*/
/* 			<label class="switch">*/
/* 				<input type="checkbox" id="usersMustConfirmEmail" name="usersMustConfirmEmail"  class='checkbox-style' aria-label="New users must confirm their email address" {{ usersMustConfirmEmail }}/>*/
/* 				<span class="slider round"></span>*/
/* 			</label>*/
/* 			<label for="usersMustConfirmEmail" class="input-text">{{ l('USERS_MUST_CONFIRM_EMAIL') }}</label>*/
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			{% if input_post("userActiveByAdmin") is not empty %}*/
/* 				{% set userActiveByAdmin = input_post("userActiveByAdmin") == 'on' ? "checked" : "" %}*/
/* 			{% else %}*/
/* 				{% set userActiveByAdmin = app_settings["user_active_by_admin"] == 1 ? "checked" : "" %}*/
/* 			{% endif %}*/
/* 			<label class="switch">*/
/* 				<input type="checkbox" id="userActiveByAdmin" name="userActiveByAdmin"  class='checkbox-style' aria-label="{{ l('New users accounts must be activated by an admin') }}" {{ userActiveByAdmin }}/>*/
/* 				<span class="slider round"></span>*/
/* 			</label>*/
/* 			<label for="userActiveByAdmin" class="input-text">{{ l('New users accounts must be activated by an admin') }}</label>*/
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			<label for="defaultRole">{{ l('New users Default role') }}</label>*/
/* 			<select name="default_role" id="defaultRole" class="form-control">*/
/* 				{% for role in roles %}*/
/* 					{% set listRoles = json_decode(role.permissions) %}*/
/* 					{% if listRoles.admin is empty %}*/
/* 						<option value="{{ role.id }}" {% if role.id == app_settings['default_role'] %}selected{% endif %}>{{ l(role.name) }}</option>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			</select>*/
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			<label for="default_timezone">{{ l('New users Default timezone') }}</label>*/
/* 			<select name="default_timezone" id="default_timezone" class="form-control">*/
/* 				{% for timezone in timezones %}*/
/* 					<option value="{{ timezone }}" {% if timezone == app_settings['default_timezone'] %}selected{% endif %}>{{ timezone }}</option>*/
/* 				{% endfor %}*/
/* 			</select>*/
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			<label for="default_lang">{{ l('Default language') }} <small><i class="fa fa-plus"></i> <a href="{{ help_link("add_lang") }}" target="_blank">Add language</a></small></label>*/
/* 			<select name="default_lang" id="default_lang" class="form-control">*/
/* 				{% for lang in lang.availableLanguages %}*/
/* 					<option value="{{ lang }}" {% if lang == app_settings['default_lang'] %}selected{% endif %}>{{ lang|capitalize }}</option>*/
/* 				{% endfor %}*/
/* 			</select>*/
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			{% set date_format = app_settings["date_format"] %}*/
/* 			<label for="date_format">{{ l('Date format') }}</label>*/
/* 			<select name="date_format" id="date_format" class="form-control">*/
/* 				<option value="1" {% if date_format == "m/d/Y" %}selected{% endif %}>MM/DD/YYYY</option>*/
/* 				<option value="2" {% if date_format == "d/m/Y" %}selected{% endif %}>DD/MM/YYYY</option>*/
/* 				<option value="3" {% if date_format == "Y/d/m" %}selected{% endif %}>YYYY/DD/MM</option>*/
/* 				<option value="4" {% if date_format == "Y/m/d" %}selected{% endif %}>YYYY/MM/DD</option>*/
/* 			</select>*/
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			{% if input_post("disable_dt_plugin") is not empty %}*/
/* 				{% set disable_dt_plugin = input_post("disable_dt_plugin") == 'on' ? "checked" : "" %}*/
/* 			{% else %}*/
/* 				{% set disable_dt_plugin = app_settings["disable_dt_plugin"] == 1 ? "checked" : "" %}*/
/* 			{% endif %}*/
/* 			<label class="switch">*/
/* 				<input type="checkbox" id="disable_dt_plugin" name="disable_dt_plugin"  class='checkbox-style' aria-label="{{ l('Lite mode for nodes table') }}" {{ disable_dt_plugin }}/>*/
/* 				<span class="slider round"></span>*/
/* 			</label>*/
/* 			<label for="disable_dt_plugin" class="input-text">{{ l('Enable Lite mode for nodes table') }} <a href="#"  onclick="return false;" data-toggle="kp_tooltip" title="{{ l("This option allows you to switch to lite mode for displaying groups and pages, if the home page takes long time to load it's recommended to enable this option") }}"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>*/
/* 		</div>*/
/* 		*/
/* 		<input type="submit" name="save" value="{{ l('SAVE_CHANGES') }}" class="btn btn-primary" />*/
/* 	  </div>*/
/* 	</div>*/
/* </div>*/
