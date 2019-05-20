<?php

/* settings/fb_accounts.twig */
class __TwigTemplate_3d69c086f4505326601bac75af9a463af5d7d8ce8274b5581b4206919862aad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "settings/fb_accounts.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        // line 3
        $context["at_parse"] = true;
        // line 4
        $context["at_source"] = "";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook accounts")), "html", null, true);
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<form method='POST' class=\"settings\" novalidate>
\t<div class=\"row\">
\t\t<div class=\"tabbable tabs-left\">
\t\t\t<div class=\"col-xs-12 col-sm-3 settingsTabs\">
\t\t\t\t";
        // line 16
        $context["current_page"] = "fb_accounts";
        // line 17
        echo "\t\t\t\t";
        $this->loadTemplate("settings/tabs.twig", "settings/fb_accounts.twig", 17)->display($context);
        // line 18
        echo "\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-9 settingsContent\">
\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t";
        // line 22
        echo form_open();
        echo "

\t\t\t\t\t<h4 class=\"tab-title\"><i class=\"fa fa-facebook\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook Accounts")), "html", null, true);
        echo "</h4>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t";
        // line 27
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array((isset($context["loadGroups"]) ? $context["loadGroups"] : null))))) {
            // line 28
            echo "\t\t\t\t\t\t\t";
            $context["loadGroups"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("loadGroups")) == "on")) ? ("checked") : (""));
            // line 29
            echo "\t\t\t\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t\t\t\t";
            $context["loadGroups"] = ((($this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "load_groups"), "method") == 1)) ? ("checked") : (""));
            // line 31
            echo "\t\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class='checkbox-style' id=\"loadGroups\" name=\"loadGroups\" aria-label=\"";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load my groups")), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, (isset($context["loadGroups"]) ? $context["loadGroups"] : null), "html", null, true);
        echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"loadGroups\" class=\"input-text\">";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load my groups")), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t";
        // line 40
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array((isset($context["loadPages"]) ? $context["loadPages"] : null))))) {
            // line 41
            echo "\t\t\t\t\t\t\t";
            $context["loadPages"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("loadPages")) == "on")) ? ("checked") : (""));
            // line 42
            echo "\t\t\t\t\t\t";
        } else {
            // line 43
            echo "\t\t\t\t\t\t\t";
            $context["loadPages"] = ((($this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "load_pages"), "method") == 1)) ? ("checked") : (""));
            // line 44
            echo "\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class='checkbox-style' id=\"loadPages\" name=\"loadPages\" aria-label=\"";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load my pages")), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, (isset($context["loadPages"]) ? $context["loadPages"] : null), "html", null, true);
        echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"loadPages\" class=\"input-text\">";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load my pages")), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t";
        // line 53
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array((isset($context["loadOwnPages"]) ? $context["loadOwnPages"] : null))))) {
            // line 54
            echo "\t\t\t\t\t\t\t";
            $context["loadOwnPages"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("loadOwnPages")) == "on")) ? ("checked") : (""));
            // line 55
            echo "\t\t\t\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t\t\t\t";
            $context["loadOwnPages"] = ((($this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "load_own_pages"), "method") == 1)) ? ("checked") : (""));
            // line 57
            echo "\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class='checkbox-style' id=\"loadOwnPages\" name=\"loadOwnPages\" aria-label=\"";
        // line 59
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load my own pages")), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, (isset($context["loadOwnPages"]) ? $context["loadOwnPages"] : null), "html", null, true);
        echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"loadOwnPages\" class=\"input-text\">";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load my own pages")), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t";
        // line 66
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array((isset($context["loadFbFriends"]) ? $context["loadFbFriends"] : null))))) {
            // line 67
            echo "\t\t\t\t\t\t\t";
            $context["loadFbFriends"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("loadFbFriends")) == "on")) ? ("checked") : (""));
            // line 68
            echo "\t\t\t\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t\t\t\t";
            $context["loadFbFriends"] = ((($this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "load_fb_friends"), "method") == 1)) ? ("checked") : (""));
            // line 70
            echo "\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class='checkbox-style' id=\"loadFbFriends\" name=\"loadFbFriends\" aria-label=\"";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load Facebook Friends")), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, (isset($context["loadFbFriends"]) ? $context["loadFbFriends"] : null), "html", null, true);
        echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"loadFbFriends\" class=\"input-text\">";
        // line 75
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load Facebook Friends")), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<label for=\"limitImportGroups\">
\t\t\t\t\t\t\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum groups to import")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t";
        // line 84
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("limitImportGroups")))) {
            echo " 
\t\t\t\t\t\t\t\t\t";
            // line 85
            $context["limitImportGroups"] = call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("limitImportGroups"));
            // line 86
            echo "\t\t\t\t\t\t\t\t";
        } else {
            // line 87
            echo "\t\t\t\t\t\t\t\t\t";
            $context["limitImportGroups"] = $this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "limitImportGroups"), "method");
            // line 88
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t\t\t<input name=\"limitImportGroups\" id=\"limitImportGroups\" type=\"number\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["limitImportGroups"]) ? $context["limitImportGroups"] : null), "html", null, true);
        echo "\" class=\"form-control\"  min=\"1\" max=\"5000\">
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<label for=\"limitImportPages\">
\t\t\t\t\t\t\t\t\t";
        // line 95
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum pages to import")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t";
        // line 97
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("limitImportPages")))) {
            echo " 
\t\t\t\t\t\t\t\t\t";
            // line 98
            $context["limitImportPages"] = call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("limitImportPages"));
            // line 99
            echo "\t\t\t\t\t\t\t\t";
        } else {
            // line 100
            echo "\t\t\t\t\t\t\t\t\t";
            $context["limitImportPages"] = $this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "limitImportPages"), "method");
            // line 101
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t\t\t\t\t<input name=\"limitImportPages\" id=\"limitImportPages\" type=\"number\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["limitImportPages"]) ? $context["limitImportPages"] : null), "html", null, true);
        echo "\" class=\"form-control\"  min=\"1\" max=\"5000\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"submit\" name=\"save\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE_CHANGES")), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
\t\t\t\t\t<br />
\t\t\t\t\t<br />
\t\t\t\t\t<div class=\"cards row\" id=\"fbAccounts\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#addNewFbAccount\"><span class=\"addFbAccountPlaceHolder\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></span></a>
\t\t\t\t\t\t\t    <div class=\"card-block\">
\t\t\t\t\t\t\t      <h4 class=\"card-title\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#addNewFbAccount\">";
        // line 114
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add account")), "html", null, true);
        echo "</a></h4>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "getAll", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["fba"]) {
            // line 119
            echo "\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t";
            // line 121
            if (($this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "UserDefaultFbAccount", array(), "method") == $this->getAttribute($context["fba"], "fb_id", array()))) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t<span class='badge badge-default currentFbAccount'>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Default")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t";
            }
            // line 124
            echo "
\t\t\t\t\t\t\t\t<button type='button' value='";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "fb_id", array()), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Delete")), "html", null, true);
            echo "' class='btn btn-danger deleteFbAccountBtn'><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></button>

\t\t\t\t\t\t\t\t<button type='button' value='";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "fb_id", array()), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Update")), "html", null, true);
            echo "' class='btn btn-primary updateFbAccount'><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></button>

\t\t\t\t\t\t\t\t<button type='button' value='";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "fb_id", array()), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Edit account")), "html", null, true);
            echo "' class='btn btn-default editFbAccount'><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></button>


\t\t\t\t\t\t\t\t<a href=\"https://fb.com/";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "fb_id", array()), "html", null, true);
            echo "\" target=\"_blank\"><img src='https://graph.facebook.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "fb_id", array()), "html", null, true);
            echo "/picture?redirect=1&height=150&width=150&type=normal' width='100%' height='100%' style='vertical-align:middle;' class=\"card-img-top\" onerror=\"this.src = '";
            echo twig_escape_filter($this->env, assets("theme/default/images/user-default.png"), "html", null, true);
            echo "'\"/></a>

\t\t\t\t\t\t\t    <div class=\"card-block\">
\t\t\t\t\t\t\t      <h4 class=\"card-title\"><a href=\"https://fb.com/";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "fb_id", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["fba"], "name", array())), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t    </div>

\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fba'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</form>

<!-- New facebook account modal -->
<div id=\"addNewFbAccount\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 154
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ADD_UPDATE_FACEBOOK_ACCOUNT")), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        
        <div class='addFbAccountalerts alertBox'></div>
        ";
        // line 159
        $context["compp_"] = "add";
        // line 160
        echo "        ";
        $this->loadTemplate("settings/components/add_fb_account.twig", "settings/fb_accounts.twig", 160)->display($context);
        // line 161
        echo "\t\t\t\t\t\t
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 164
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Close")), "html", null, true);
        echo "</button>
        <input type='button' class='btn btn-primary' id=\"addFbAccountBtn\" value='";
        // line 165
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add facebook account")), "html", null, true);
        echo "'>
      </div>
    </div>
  </div>
</div>

<!-- Update facebook account modal -->
<div id=\"updateFbAccount\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 177
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Update Facebook account")), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <div class='updateFbAccountalerts alertBox'>
        \t<div class=\"alert alert-info\">
\t        \t";
        // line 182
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Updating your facebook account")), "html", null, true);
        echo "...
\t        </div>
        </div>

        ";
        // line 186
        echo form_open_multipart();
        echo "
\t        <input type=\"hidden\" name=\"fbaccount_id\" id=\"fbAccountId\" value=\"0\">

\t        <div class=\"updatefbAccountSection\" style=\"display:none\">
\t        \t";
        // line 190
        $context["compp_"] = "update";
        // line 191
        echo "\t\t        ";
        $this->loadTemplate("settings/components/add_fb_account.twig", "settings/fb_accounts.twig", 191)->display($context);
        // line 192
        echo "\t\t\t</div>

\t\t\t<div class=\"row importGroups\" style=\"display:none;\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p style=\"text-align:center; margin-top: 10px\">";
        // line 196
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Or")), "html", null, true);
        echo "</p>
\t\t\t\t\t<label for=\"htmlpage\">";
        // line 197
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Import groups via html page")), "html", null, true);
        echo " (<small>Save the html page from <a href=\"https://mbasic.facebook.com/groups/?seemore\" target=\"_blank\">https://mbasic.facebook.com/groups/?seemore</a></small>)</label>
\t\t\t\t\t<input type=\"file\" name=\"htmlpage\" id=\"htmlpage\" />
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary uploadGroupsFile\" value=\"";
        // line 199
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload Your html file")), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t        </div>
\t    </form>

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 206
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Close")), "html", null, true);
        echo "</button>
      \t<input type='button' class='btn btn-primary' id=\"addFbAccountBtn\" value='";
        // line 207
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Update facebook account")), "html", null, true);
        echo "'>
      </div>
    </div>
  </div>
</div>

";
        // line 213
        $this->loadTemplate("settings/components/edit_fb_account.twig", "settings/fb_accounts.twig", 213)->display($context);
        // line 214
        echo "
";
        // line 216
        $context["box_id"] = "fb_account";
        // line 217
        $context["delete_msg"] = call_user_func_array($this->env->getFunction('l')->getCallable(), array("Are you sure you want to delete the selected account?"));
        // line 218
        $this->loadTemplate("blocks/delete_modal.twig", "settings/fb_accounts.twig", 218)->display($context);
        // line 219
        echo "
";
    }

    // line 222
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 223
        echo "
\t";
        // line 224
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "

\t<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, assets("theme/default/js/helpers.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$(function(){

\t\t\t\$( \".appToggleBtn\" ).click(function() {
\t\t\t  \$( \".appToggle\" ).toggle();
\t\t\t});

\t\t\t\$('#addNewFbAccount #accessTokenURL').bind('input propertychange', function() {
\t\t\t\tvar at = \$(this).val().match(/access_token=(.*)(?=&expires_in)/);
\t\t\t\tif(at){\$(\"#addNewFbAccount #accessToken\").val(at[1]);}
\t\t\t});
\t\t\t
\t\t\t\$('#addNewFbAccount #accessTokenURL').bind('input propertychange', function() {
\t\t\t\tvar at = \$(this).val().match(/\"access_token\":\"(.*)(?=\",\"machine_id)/);
\t\t\t\tif(at){\$(\"#addNewFbAccount #accessToken\").val(at[1]);}
\t\t\t});

\t\t\t\$('#updateFbAccount #accessTokenURL').bind('input propertychange', function() {
\t\t\t\tvar at = \$(this).val().match(/access_token=(.*)(?=&expires_in)/);
\t\t\t\tif(at){\$(\"#updateFbAccount #accessToken\").val(at[1]);}
\t\t\t});
\t\t\t
\t\t\t\$('#updateFbAccount #accessTokenURL').bind('input propertychange', function() {
\t\t\t\tvar at = \$(this).val().match(/\"access_token\":\"(.*)(?=\",\"machine_id)/);
\t\t\t\tif(at){\$(\"#updateFbAccount #accessToken\").val(at[1]);}
\t\t\t});
\t\t\t
\t\t\t\$( \"#addNewFbAccount #addFbAccountBtn\" ).click(function(){
\t\t\t\taddFbAccount(\"#addNewFbAccount\");
\t\t\t});

\t\t\t\$( \"#updateFbAccount #addFbAccountBtn\" ).click(function(){
\t\t\t\taddFbAccount(\"#updateFbAccount\");
\t\t\t});


\t\t\t\$(\"#updateFbAccount .fb_login\").click(function(){
\t\t\t\tlogin_via_pw(\"#updateFbAccount\",\$( this ).val());
\t\t\t});

\t\t\t\$(\"#addNewFbAccount .fb_login\").click(function(){
\t\t\t\tlogin_via_pw(\"#addNewFbAccount\",\$( this ).val());
\t\t\t});

\t\t\t";
        // line 272
        echo "\t\t    \$(\".deleteFbAccountBtn\").click(function(){
\t\t\t\t\$(\"#delete_fb_account\").modal(\"show\");
\t\t\t\tdeleteFbAccountBtn = \$(this);
\t\t    });

\t\t    \$(\".deleteBtn_fb_account\" ).click(function(){
\t\t    \tkp_preloader(\"on\",\"#delete_fb_account .modal-body\");
\t\t\t    \$.ajax({
\t\t\t      url: '";
        // line 280
        echo twig_escape_filter($this->env, base_url("settings/fb_accounts/delete"), "html", null, true);
        echo "',
\t\t\t      dataType: 'json',
\t\t\t      type: 'post',
\t\t\t      contentType: 'application/x-www-form-urlencoded',
\t\t\t      data: { 
\t\t\t      \tid: deleteFbAccountBtn.val(),
\t\t\t      \t";
        // line 286
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t      },
\t\t\t      success: function( data, textStatus, jQxhr ){
\t\t\t        if(data.status == \"success\"){
\t\t\t        \talertBox(data.message,\"success\",\".deleteAlertBox_fb_account\",false,false);
\t\t            \t\$(\".deleteBtn_fb_account\").prop('disabled', true);
\t\t\t        \t\$(document).on('hide.bs.modal','#delete_fb_account', function () {
\t\t\t        \t\tlocation.reload();
\t\t\t        \t});
\t\t\t        }else{
\t\t\t        \talertBox(data.message,\"danger\",\".deleteAlertBox_fb_account\",false,false);
\t\t\t        }
\t\t\t      },
\t\t\t      error: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t      \tconsole.log(errorThrown);
\t\t\t      \talertBox(\"";
        // line 301
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\".deleteAlertBox_fb_account\",false,false);
\t\t\t      },
\t\t\t      complete: function() {
\t\t\t      \tkp_preloader(\"off\",\"#delete_fb_account .modal-body\");
\t\t\t      }
\t\t\t    });

\t\t\t    \$('.deleteBox_content_fb_account').html(\"\");
\t\t      
    \t\t});

    \t\tvar xhr = null;
\t\t    \$(\".updateFbAccount\").click(function() {
\t\t    \tkp_preloader(\"on\",\"#updateFbAccount .modal-body\");
\t\t    \t//\$(\".updateFbAccountalerts\").html(\"\");
\t\t    \talertBox(\"";
        // line 316
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Updating your facebook account")), "html", null, true);
        echo "...\",\"info\",\".updateFbAccountalerts\",false,false);
\t\t    \t\$(\"#updateFbAccount\").modal(\"show\");
\t\t    \t\$('.updatefbAccountSection').hide();
\t\t\t\t\$('.importGroups').hide();
\t\t    \t\$(\"#fbAccountId\").val(\$(this).val());
\t\t    \tif(xhr!==null) xhr.abort();
\t\t    \txhr = \$.ajax({
\t\t\t\t\turl: '";
        // line 323
        echo twig_escape_filter($this->env, base_url("settings/fb_accounts/update"), "html", null, true);
        echo "',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\t\tdata: { 
\t\t\t\t\t\tfbaccount_id: \$(\"#fbAccountId\").val(),
 \t\t\t\t\t\t";
        // line 329
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
 \t\t\t\t\t},
\t\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t\t\tif(data.status == \"success\"){
\t\t\t\t\t\t\talertBox(data.message,\"success\",\".updateFbAccountalerts\",false,false);
\t\t\t\t\t\t  \t\$(\".deleteBtn_post\").prop('disabled', true);
\t\t\t\t\t\t\t\$(document).on('hide.bs.modal','#updateFbAccount', function () {location.reload();});
\t\t\t\t\t\t\t\$(\"#updateFbAccount #addFbAccountBtn\").hide();
\t\t\t\t\t\t}else if(data.status == \"warning\"){
\t\t\t\t\t\t\talertBox(data.message,\"warning\",\".updateFbAccountalerts\",false,false);
\t\t\t\t\t\t\t\$('.updatefbAccountSection').show();
\t\t\t\t\t\t\t\$('.importGroups').show();
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\thtmlData = \"\";
\t\t                \tif(data.message !== null && typeof data.message === 'object'){
\t\t\t\t\t\t\t\tObject.keys(data.message).forEach(function(key) {
\t\t\t\t\t\t\t\t    htmlData += data.message[key]+\" \";
\t\t\t\t\t\t\t\t});
\t\t                \t}else{
\t\t                \t\thtmlData = data.message;
\t\t                \t}
\t\t\t\t\t\t\talertBox(htmlData,\"danger\",\".updateFbAccountalerts\",false,false);
\t\t\t\t\t\t\t\$('.updatefbAccountSection').show();
\t\t\t\t\t\t\t\$('.importGroups').show();
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t\t  console.log(errorThrown);
\t\t\t\t\t  alertBox(\"";
        // line 357
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\".updateFbAccountalerts\",false,false);
\t\t\t\t\t},
\t\t\t        complete: function() {
\t\t\t          kp_preloader(\"off\",\"#updateFbAccount .modal-body\");
\t\t\t        }
\t\t\t\t});
\t\t    });

\t\t    \$(\".importGroups form\").on('submit',(function(e) {
\t\t\t\te.preventDefault();
\t\t\t\tkp_preloader(\"on\",\"#updateFbAccount .modal-body\");
\t\t\t\t\$.ajax({
\t\t\t\t\turl: \"";
        // line 369
        echo twig_escape_filter($this->env, base_url("settings/fb_accounts/import_groups"), "html", null, true);
        echo "\",
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\tdata: new FormData(this),
\t\t\t\t\tcontentType: false,
\t\t\t\t\tcache: false,
\t\t\t\t\tprocessData:false,
\t\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t\t\tif(data.status == \"success\"){
\t\t\t\t\t\t\talertBox(data.message,\"success\",\".updateFbAccountalerts\",false,false);
\t\t\t\t\t\t  \t\$(\".deleteBtn_post\").prop('disabled', true);
\t\t\t\t\t\t\t\$(document).on('hide.bs.modal','#updateFbAccount', function () {location.reload();});
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\thtmlData = \"\";
\t\t                \tif(data.message !== null && typeof data.message === 'object'){
\t\t\t\t\t\t\t\tObject.keys(data.message).forEach(function(key) {
\t\t\t\t\t\t\t\t    htmlData += data.message[key]+\" \";
\t\t\t\t\t\t\t\t});
\t\t                \t}else{
\t\t                \t\thtmlData = data.message;
\t\t                \t}
\t\t\t\t\t\t\talertBox(htmlData,\"danger\",\".updateFbAccountalerts\",false,false);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t\t  console.log(errorThrown);
\t\t\t\t\t  alertBox(\"";
        // line 394
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\".updateFbAccountalerts\",false,false);
\t\t\t\t\t},
\t\t\t        complete: function() {
\t\t\t          kp_preloader(\"off\",\"#updateFbAccount .modal-body\");
\t\t\t        }
\t\t\t\t});
\t\t\t}));

\t\t});

\t\tfunction addFbAccount(model){

\t\t\tif(\$(model+\" #accessToken\").val() == \"\"){
\t\t\t\talertBox(\"";
        // line 407
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Please enter the access token")), "html", null, true);
        echo "\",\"danger\",model+\" .alertBox\",false);
\t\t\t\treturn;
\t\t\t}

\t\t\tvar reload = false;
\t\t\t\$(model+\" .alertBox\").html('');
\t\t\tkp_preloader(\"on\",model+\" .modal-body\");

\t\t\talertBoxElem = \$(model+\" .alertBox\");

\t\t\t\$(model+\" #addFbAccountBtn\").prop('disabled', true);

\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 420
        echo twig_escape_filter($this->env, base_url("settings/fb_accounts/add"), "html", null, true);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: { 
\t\t\t\t\tfb_accesstoken: \$(model+\" #accessToken\").val(),
\t\t\t\t\tfb_account: \$(model+\" #fbAccountId\").val(),
\t\t\t\t\t\t";
        // line 427
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t\t\t},
\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t\tif(data.status == \"success\"){
\t\t\t\t\t\talertBox(data.message,\"success\",alertBoxElem,false,false);
\t\t\t\t\t  \t\$(model+' .updatefbAccountSection').hide();
\t\t\t\t\t\t\$(model+' .importGroups').hide();
\t\t\t\t\t\t\$(document).on('hide.bs.modal',model, function () {location.reload();});
\t\t\t\t\t}else{
\t\t\t\t\t\thtmlData = \"\";
\t                \tif(data.message !== null && typeof data.message === 'object'){
\t\t\t\t\t\t\tObject.keys(data.message).forEach(function(key) {
\t\t\t\t\t\t\t    htmlData += data.message[key]+\" \";
\t\t\t\t\t\t\t});
\t                \t}else{
\t                \t\thtmlData = data.message;
\t                \t}
\t\t\t\t\t\talertBox(htmlData,\"danger\",alertBoxElem,false,false);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t  console.log(errorThrown);
\t\t\t\t  alertBox(\"";
        // line 449
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",alertBoxElem,false,false);
\t\t\t\t},
\t\t        complete: function() {
\t\t          // Re-enable send btn
\t\t          \$(model+\" #addFbAccountBtn\").prop('disabled', false);
\t\t          kp_preloader(\"off\",model+\" .modal-body\");
\t\t        }
\t\t\t});
\t\t}


\t\tfunction login_via_pw(model,app){
\t\t\t\$(model+' .alertBox').html(\"\");
\t\t\t\$(model+\" .fb_login\").prop('disabled', true);
\t\t\tkp_preloader(\"on\",model+\" .modal-body\");
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 465
        echo twig_escape_filter($this->env, base_url("facebook/generate_token"), "html", null, true);
        echo "/'+app,
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: {
\t\t\t\t\tusername: \$(model+' #fb_username').val(), 
\t\t\t\t\tpassword: \$(model+' #fb_password').val(),
\t\t\t\t\t";
        // line 472
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t\t},
\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t  if(data.status == \"ok\"){
\t\t\t\t    \$(model+\" .token_result\").html(\"<iframe width='100%' height='100' src='\"+data.fb_url+\"'></iframe>\");
\t\t\t\t  }else{
\t\t\t\t  \tif(data.message !== null && typeof data.message === 'object'){ 
\t                \thtmlData = \"<ul>\";
\t                    Object.keys(data.message).forEach(function(key) {
\t                      htmlData += \"<li>\" + data.message[key] + \"</li>\";
\t                      });
\t                    htmlData += \"</ul>\";
\t               \t}else{
\t                    htmlData = data.message;
\t            \t}
\t\t\t\t    alertBox(htmlData,'danger',model+' .alertBox',false,true);
\t\t\t\t  }
\t\t\t\t},
\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t  console.log(errorThrown);
\t\t\t\t  alertBox('";
        // line 492
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Failed to generate Facebook token, try again")), "html", null, true);
        echo "','danger',model+' .alertBox',true);
\t\t\t\t},
\t\t        complete: function() {
\t\t          \$(model+\" .fb_login\").prop('disabled', false);
\t\t          kp_preloader(\"off\",model+\" .modal-body\");
\t\t        }
\t\t\t});
\t\t}

\t</script>
";
    }

    public function getTemplateName()
    {
        return "settings/fb_accounts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  818 => 492,  793 => 472,  783 => 465,  764 => 449,  737 => 427,  727 => 420,  711 => 407,  695 => 394,  667 => 369,  652 => 357,  619 => 329,  610 => 323,  600 => 316,  582 => 301,  562 => 286,  553 => 280,  543 => 272,  495 => 226,  490 => 224,  487 => 223,  484 => 222,  479 => 219,  477 => 218,  475 => 217,  473 => 216,  470 => 214,  468 => 213,  459 => 207,  455 => 206,  445 => 199,  440 => 197,  436 => 196,  430 => 192,  427 => 191,  425 => 190,  418 => 186,  411 => 182,  403 => 177,  388 => 165,  384 => 164,  379 => 161,  376 => 160,  374 => 159,  366 => 154,  351 => 141,  337 => 135,  327 => 132,  319 => 129,  312 => 127,  305 => 125,  302 => 124,  296 => 122,  294 => 121,  290 => 119,  286 => 118,  279 => 114,  268 => 106,  260 => 102,  257 => 101,  254 => 100,  251 => 99,  249 => 98,  245 => 97,  240 => 95,  230 => 89,  227 => 88,  224 => 87,  221 => 86,  219 => 85,  215 => 84,  210 => 82,  200 => 75,  192 => 72,  189 => 71,  186 => 70,  183 => 69,  180 => 68,  177 => 67,  175 => 66,  168 => 62,  160 => 59,  157 => 58,  154 => 57,  151 => 56,  148 => 55,  145 => 54,  143 => 53,  136 => 49,  128 => 46,  125 => 45,  122 => 44,  119 => 43,  116 => 42,  113 => 41,  111 => 40,  104 => 36,  96 => 33,  93 => 32,  90 => 31,  87 => 30,  84 => 29,  81 => 28,  79 => 27,  73 => 24,  68 => 22,  62 => 18,  59 => 17,  57 => 16,  48 => 11,  45 => 10,  38 => 7,  35 => 6,  31 => 1,  29 => 4,  27 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% set at_parse = true %}*/
/* {% set at_source = "" %}*/
/* */
/* {% block title %}*/
/* 	{{ l('Facebook accounts') }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* <form method='POST' class="settings" novalidate>*/
/* 	<div class="row">*/
/* 		<div class="tabbable tabs-left">*/
/* 			<div class="col-xs-12 col-sm-3 settingsTabs">*/
/* 				{% set current_page = 'fb_accounts' %}*/
/* 				{% include "settings/tabs.twig" %}*/
/* 			</div>*/
/* 			<div class="col-xs-12 col-sm-9 settingsContent">*/
/* 				<div class="tab-content">*/
/* */
/* 					{{ form_open() }}*/
/* */
/* 					<h4 class="tab-title"><i class="fa fa-facebook"></i> {{ l('Facebook Accounts') }}</h4>*/
/* */
/* 					<div class="input-group">*/
/* 						{% if input_post(loadGroups) is not empty %}*/
/* 							{% set loadGroups = input_post("loadGroups") == "on" ? "checked" : "" %}*/
/* 						{% else %}*/
/* 							{% set loadGroups = userOptions.row('load_groups') == 1 ? "checked" : "" %}*/
/* 						{% endif %}*/
/* 						<label class="switch">*/
/* 							<input type="checkbox" class='checkbox-style' id="loadGroups" name="loadGroups" aria-label="{{ l('Load my groups') }}" {{ loadGroups }} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="loadGroups" class="input-text">{{ l('Load my groups') }}</label>*/
/* 					</div>*/
/* */
/* 					<div class="input-group">*/
/* 						{% if input_post(loadPages) is not empty %}*/
/* 							{% set loadPages = input_post("loadPages") == "on" ? "checked" : "" %}*/
/* 						{% else %}*/
/* 							{% set loadPages = userOptions.row('load_pages') == 1 ? "checked" : "" %}*/
/* 						{% endif %}*/
/* 						<label class="switch">*/
/* 							<input type="checkbox" class='checkbox-style' id="loadPages" name="loadPages" aria-label="{{ l('Load my pages') }}" {{ loadPages }} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="loadPages" class="input-text">{{ l('Load my pages') }}</label>*/
/* 					</div>*/
/* */
/* 					<div class="input-group">*/
/* 						{% if input_post(loadOwnPages) is not empty %}*/
/* 							{% set loadOwnPages = input_post("loadOwnPages") == "on" ? "checked" : "" %}*/
/* 						{% else %}*/
/* 							{% set loadOwnPages = userOptions.row('load_own_pages') == 1 ? "checked" : "" %}*/
/* 						{% endif %}*/
/* 						<label class="switch">*/
/* 							<input type="checkbox" class='checkbox-style' id="loadOwnPages" name="loadOwnPages" aria-label="{{ l('Load my own pages') }}" {{ loadOwnPages }} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="loadOwnPages" class="input-text">{{ l('Load my own pages') }}</label>*/
/* 					</div>*/
/* */
/* 					<div class="input-group">*/
/* 						{% if input_post(loadFbFriends) is not empty %}*/
/* 							{% set loadFbFriends = input_post("loadFbFriends") == "on" ? "checked" : "" %}*/
/* 						{% else %}*/
/* 							{% set loadFbFriends = userOptions.row('load_fb_friends') == 1 ? "checked" : "" %}*/
/* 						{% endif %}*/
/* 						<label class="switch">*/
/* 							<input type="checkbox" class='checkbox-style' id="loadFbFriends" name="loadFbFriends" aria-label="{{ l('Load Facebook Friends') }}" {{ loadFbFriends }} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="loadFbFriends" class="input-text">{{ l('Load Facebook Friends') }}</label>*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 						<div class="col-md-6">*/
/* 							<div class="input-group">*/
/* 								<label for="limitImportGroups">*/
/* 									{{ l('Maximum groups to import') }}*/
/* 								</label>*/
/* 								{% if input_post('limitImportGroups') is not empty %} */
/* 									{% set limitImportGroups = input_post('limitImportGroups') %}*/
/* 								{% else %}*/
/* 									{% set limitImportGroups = userOptions.row('limitImportGroups') %}*/
/* 								{% endif %}*/
/* 								<input name="limitImportGroups" id="limitImportGroups" type="number" value="{{  limitImportGroups }}" class="form-control"  min="1" max="5000">*/
/* 							</div>	*/
/* 						</div>*/
/* 						<div class="col-md-6">*/
/* 							<div class="input-group">*/
/* 								<label for="limitImportPages">*/
/* 									{{ l('Maximum pages to import') }}*/
/* 								</label>*/
/* 								{% if input_post('limitImportPages') is not empty %} */
/* 									{% set limitImportPages = input_post('limitImportPages') %}*/
/* 								{% else %}*/
/* 									{% set limitImportPages = userOptions.row('limitImportPages') %}*/
/* 								{% endif %}*/
/* 								<input name="limitImportPages" id="limitImportPages" type="number" value="{{ limitImportPages }}" class="form-control"  min="1" max="5000">*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<input type="submit" name="save" value="{{ l('SAVE_CHANGES') }}" class="btn btn-primary" />*/
/* 					<br />*/
/* 					<br />*/
/* 					<div class="cards row" id="fbAccounts">*/
/* 						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">*/
/* 							<div class="card">*/
/* 								<a href="#" data-toggle="modal" data-target="#addNewFbAccount"><span class="addFbAccountPlaceHolder"><i class="fa fa-plus-circle" aria-hidden="true"></i></span></a>*/
/* 							    <div class="card-block">*/
/* 							      <h4 class="card-title"><a href="#" data-toggle="modal" data-target="#addNewFbAccount">{{l('Add account')}}</a></h4>*/
/* 							    </div>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% for fba in fbaccount.getAll() %}*/
/* 							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">*/
/* 							<div class="card">*/
/* 								{% if fbaccount.UserDefaultFbAccount() == fba.fb_id %}*/
/* 									<span class='badge badge-default currentFbAccount'>{{l('Default')}}</span>*/
/* 								{% endif %}*/
/* */
/* 								<button type='button' value='{{ fba.fb_id }}' title='{{ l('Delete') }}' class='btn btn-danger deleteFbAccountBtn'><i class="fa fa-trash-o" aria-hidden="true"></i></button>*/
/* */
/* 								<button type='button' value='{{ fba.fb_id }}' title='{{ l('Update') }}' class='btn btn-primary updateFbAccount'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>*/
/* */
/* 								<button type='button' value='{{ fba.fb_id }}' title='{{ l('Edit account') }}' class='btn btn-default editFbAccount'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>*/
/* */
/* */
/* 								<a href="https://fb.com/{{ fba.fb_id }}" target="_blank"><img src='https://graph.facebook.com/{{ fba.fb_id }}/picture?redirect=1&height=150&width=150&type=normal' width='100%' height='100%' style='vertical-align:middle;' class="card-img-top" onerror="this.src = '{{ assets('theme/default/images/user-default.png') }}'"/></a>*/
/* */
/* 							    <div class="card-block">*/
/* 							      <h4 class="card-title"><a href="https://fb.com/{{ fba.fb_id }}" target="_blank">{{ fba.name|capitalize }}</a></h4>*/
/* 							    </div>*/
/* */
/* 							  </div>*/
/* 							</div>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* */
/* <!-- New facebook account modal -->*/
/* <div id="addNewFbAccount" class="modal fade" role="dialog">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*         <h4 class="modal-title">{{ l('ADD_UPDATE_FACEBOOK_ACCOUNT') }}</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         */
/*         <div class='addFbAccountalerts alertBox'></div>*/
/*         {% set compp_ = "add" %}*/
/*         {% include "settings/components/add_fb_account.twig" %}*/
/* 						*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">{{ l("Close") }}</button>*/
/*         <input type='button' class='btn btn-primary' id="addFbAccountBtn" value='{{ l("Add facebook account") }}'>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <!-- Update facebook account modal -->*/
/* <div id="updateFbAccount" class="modal fade" role="dialog">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*         <h4 class="modal-title">{{ l('Update Facebook account') }}</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <div class='updateFbAccountalerts alertBox'>*/
/*         	<div class="alert alert-info">*/
/* 	        	{{ l('Updating your facebook account') }}...*/
/* 	        </div>*/
/*         </div>*/
/* */
/*         {{ form_open_multipart() }}*/
/* 	        <input type="hidden" name="fbaccount_id" id="fbAccountId" value="0">*/
/* */
/* 	        <div class="updatefbAccountSection" style="display:none">*/
/* 	        	{% set compp_ = "update" %}*/
/* 		        {% include "settings/components/add_fb_account.twig" %}*/
/* 			</div>*/
/* */
/* 			<div class="row importGroups" style="display:none;">*/
/* 				<div class="col-md-12">*/
/* 					<p style="text-align:center; margin-top: 10px">{{ l('Or') }}</p>*/
/* 					<label for="htmlpage">{{ l('Import groups via html page') }} (<small>Save the html page from <a href="https://mbasic.facebook.com/groups/?seemore" target="_blank">https://mbasic.facebook.com/groups/?seemore</a></small>)</label>*/
/* 					<input type="file" name="htmlpage" id="htmlpage" />*/
/* 					<input type="submit" class="btn btn-primary uploadGroupsFile" value="{{ l("Upload Your html file") }}" />*/
/* 				</div>*/
/* 	        </div>*/
/* 	    </form>*/
/* */
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">{{ l("Close") }}</button>*/
/*       	<input type='button' class='btn btn-primary' id="addFbAccountBtn" value='{{ l("Update facebook account") }}'>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {% include "settings/components/edit_fb_account.twig" %}*/
/* */
/* {# Box variables #}*/
/* {% set box_id = "fb_account" %}*/
/* {% set delete_msg = l("Are you sure you want to delete the selected account?") %}*/
/* {% include "blocks/delete_modal.twig" %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/* */
/* 	{{ parent() }}*/
/* */
/* 	<script src="{{ assets('theme/default/js/helpers.js') }}"></script>*/
/* 	<script>*/
/* 		$(function(){*/
/* */
/* 			$( ".appToggleBtn" ).click(function() {*/
/* 			  $( ".appToggle" ).toggle();*/
/* 			});*/
/* */
/* 			$('#addNewFbAccount #accessTokenURL').bind('input propertychange', function() {*/
/* 				var at = $(this).val().match(/access_token=(.*)(?=&expires_in)/);*/
/* 				if(at){$("#addNewFbAccount #accessToken").val(at[1]);}*/
/* 			});*/
/* 			*/
/* 			$('#addNewFbAccount #accessTokenURL').bind('input propertychange', function() {*/
/* 				var at = $(this).val().match(/"access_token":"(.*)(?=","machine_id)/);*/
/* 				if(at){$("#addNewFbAccount #accessToken").val(at[1]);}*/
/* 			});*/
/* */
/* 			$('#updateFbAccount #accessTokenURL').bind('input propertychange', function() {*/
/* 				var at = $(this).val().match(/access_token=(.*)(?=&expires_in)/);*/
/* 				if(at){$("#updateFbAccount #accessToken").val(at[1]);}*/
/* 			});*/
/* 			*/
/* 			$('#updateFbAccount #accessTokenURL').bind('input propertychange', function() {*/
/* 				var at = $(this).val().match(/"access_token":"(.*)(?=","machine_id)/);*/
/* 				if(at){$("#updateFbAccount #accessToken").val(at[1]);}*/
/* 			});*/
/* 			*/
/* 			$( "#addNewFbAccount #addFbAccountBtn" ).click(function(){*/
/* 				addFbAccount("#addNewFbAccount");*/
/* 			});*/
/* */
/* 			$( "#updateFbAccount #addFbAccountBtn" ).click(function(){*/
/* 				addFbAccount("#updateFbAccount");*/
/* 			});*/
/* */
/* */
/* 			$("#updateFbAccount .fb_login").click(function(){*/
/* 				login_via_pw("#updateFbAccount",$( this ).val());*/
/* 			});*/
/* */
/* 			$("#addNewFbAccount .fb_login").click(function(){*/
/* 				login_via_pw("#addNewFbAccount",$( this ).val());*/
/* 			});*/
/* */
/* 			{# Delete action #}*/
/* 		    $(".deleteFbAccountBtn").click(function(){*/
/* 				$("#delete_fb_account").modal("show");*/
/* 				deleteFbAccountBtn = $(this);*/
/* 		    });*/
/* */
/* 		    $(".deleteBtn_fb_account" ).click(function(){*/
/* 		    	kp_preloader("on","#delete_fb_account .modal-body");*/
/* 			    $.ajax({*/
/* 			      url: '{{ base_url("settings/fb_accounts/delete") }}',*/
/* 			      dataType: 'json',*/
/* 			      type: 'post',*/
/* 			      contentType: 'application/x-www-form-urlencoded',*/
/* 			      data: { */
/* 			      	id: deleteFbAccountBtn.val(),*/
/* 			      	{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 			      },*/
/* 			      success: function( data, textStatus, jQxhr ){*/
/* 			        if(data.status == "success"){*/
/* 			        	alertBox(data.message,"success",".deleteAlertBox_fb_account",false,false);*/
/* 		            	$(".deleteBtn_fb_account").prop('disabled', true);*/
/* 			        	$(document).on('hide.bs.modal','#delete_fb_account', function () {*/
/* 			        		location.reload();*/
/* 			        	});*/
/* 			        }else{*/
/* 			        	alertBox(data.message,"danger",".deleteAlertBox_fb_account",false,false);*/
/* 			        }*/
/* 			      },*/
/* 			      error: function( jqXhr, textStatus, errorThrown ){ */
/* 			      	console.log(errorThrown);*/
/* 			      	alertBox("{{ l('Unable to complete your request') }}","danger",".deleteAlertBox_fb_account",false,false);*/
/* 			      },*/
/* 			      complete: function() {*/
/* 			      	kp_preloader("off","#delete_fb_account .modal-body");*/
/* 			      }*/
/* 			    });*/
/* */
/* 			    $('.deleteBox_content_fb_account').html("");*/
/* 		      */
/*     		});*/
/* */
/*     		var xhr = null;*/
/* 		    $(".updateFbAccount").click(function() {*/
/* 		    	kp_preloader("on","#updateFbAccount .modal-body");*/
/* 		    	//$(".updateFbAccountalerts").html("");*/
/* 		    	alertBox("{{ l('Updating your facebook account') }}...","info",".updateFbAccountalerts",false,false);*/
/* 		    	$("#updateFbAccount").modal("show");*/
/* 		    	$('.updatefbAccountSection').hide();*/
/* 				$('.importGroups').hide();*/
/* 		    	$("#fbAccountId").val($(this).val());*/
/* 		    	if(xhr!==null) xhr.abort();*/
/* 		    	xhr = $.ajax({*/
/* 					url: '{{ base_url("settings/fb_accounts/update") }}',*/
/* 					dataType: 'json',*/
/* 					type: 'post',*/
/* 					contentType: 'application/x-www-form-urlencoded',*/
/* 					data: { */
/* 						fbaccount_id: $("#fbAccountId").val(),*/
/*  						{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/*  					},*/
/* 					success: function( data, textStatus, jQxhr ){*/
/* 						if(data.status == "success"){*/
/* 							alertBox(data.message,"success",".updateFbAccountalerts",false,false);*/
/* 						  	$(".deleteBtn_post").prop('disabled', true);*/
/* 							$(document).on('hide.bs.modal','#updateFbAccount', function () {location.reload();});*/
/* 							$("#updateFbAccount #addFbAccountBtn").hide();*/
/* 						}else if(data.status == "warning"){*/
/* 							alertBox(data.message,"warning",".updateFbAccountalerts",false,false);*/
/* 							$('.updatefbAccountSection').show();*/
/* 							$('.importGroups').show();*/
/* 						}else{*/
/* 							htmlData = "";*/
/* 		                	if(data.message !== null && typeof data.message === 'object'){*/
/* 								Object.keys(data.message).forEach(function(key) {*/
/* 								    htmlData += data.message[key]+" ";*/
/* 								});*/
/* 		                	}else{*/
/* 		                		htmlData = data.message;*/
/* 		                	}*/
/* 							alertBox(htmlData,"danger",".updateFbAccountalerts",false,false);*/
/* 							$('.updatefbAccountSection').show();*/
/* 							$('.importGroups').show();*/
/* 						}*/
/* 					},*/
/* 					error: function( jqXhr, textStatus, errorThrown ){ */
/* 					  console.log(errorThrown);*/
/* 					  alertBox("{{ l('Unable to complete your request') }}","danger",".updateFbAccountalerts",false,false);*/
/* 					},*/
/* 			        complete: function() {*/
/* 			          kp_preloader("off","#updateFbAccount .modal-body");*/
/* 			        }*/
/* 				});*/
/* 		    });*/
/* */
/* 		    $(".importGroups form").on('submit',(function(e) {*/
/* 				e.preventDefault();*/
/* 				kp_preloader("on","#updateFbAccount .modal-body");*/
/* 				$.ajax({*/
/* 					url: "{{ base_url('settings/fb_accounts/import_groups') }}",*/
/* 					type: "POST",*/
/* 					data: new FormData(this),*/
/* 					contentType: false,*/
/* 					cache: false,*/
/* 					processData:false,*/
/* 					success: function( data, textStatus, jQxhr ){*/
/* 						if(data.status == "success"){*/
/* 							alertBox(data.message,"success",".updateFbAccountalerts",false,false);*/
/* 						  	$(".deleteBtn_post").prop('disabled', true);*/
/* 							$(document).on('hide.bs.modal','#updateFbAccount', function () {location.reload();});*/
/* 						}else{*/
/* 							htmlData = "";*/
/* 		                	if(data.message !== null && typeof data.message === 'object'){*/
/* 								Object.keys(data.message).forEach(function(key) {*/
/* 								    htmlData += data.message[key]+" ";*/
/* 								});*/
/* 		                	}else{*/
/* 		                		htmlData = data.message;*/
/* 		                	}*/
/* 							alertBox(htmlData,"danger",".updateFbAccountalerts",false,false);*/
/* 						}*/
/* 					},*/
/* 					error: function( jqXhr, textStatus, errorThrown ){ */
/* 					  console.log(errorThrown);*/
/* 					  alertBox("{{ l('Unable to complete your request') }}","danger",".updateFbAccountalerts",false,false);*/
/* 					},*/
/* 			        complete: function() {*/
/* 			          kp_preloader("off","#updateFbAccount .modal-body");*/
/* 			        }*/
/* 				});*/
/* 			}));*/
/* */
/* 		});*/
/* */
/* 		function addFbAccount(model){*/
/* */
/* 			if($(model+" #accessToken").val() == ""){*/
/* 				alertBox("{{ l('Please enter the access token') }}","danger",model+" .alertBox",false);*/
/* 				return;*/
/* 			}*/
/* */
/* 			var reload = false;*/
/* 			$(model+" .alertBox").html('');*/
/* 			kp_preloader("on",model+" .modal-body");*/
/* */
/* 			alertBoxElem = $(model+" .alertBox");*/
/* */
/* 			$(model+" #addFbAccountBtn").prop('disabled', true);*/
/* */
/* 			$.ajax({*/
/* 				url: '{{ base_url("settings/fb_accounts/add") }}',*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: { */
/* 					fb_accesstoken: $(model+" #accessToken").val(),*/
/* 					fb_account: $(model+" #fbAccountId").val(),*/
/* 						{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 					},*/
/* 				success: function( data, textStatus, jQxhr ){*/
/* 					if(data.status == "success"){*/
/* 						alertBox(data.message,"success",alertBoxElem,false,false);*/
/* 					  	$(model+' .updatefbAccountSection').hide();*/
/* 						$(model+' .importGroups').hide();*/
/* 						$(document).on('hide.bs.modal',model, function () {location.reload();});*/
/* 					}else{*/
/* 						htmlData = "";*/
/* 	                	if(data.message !== null && typeof data.message === 'object'){*/
/* 							Object.keys(data.message).forEach(function(key) {*/
/* 							    htmlData += data.message[key]+" ";*/
/* 							});*/
/* 	                	}else{*/
/* 	                		htmlData = data.message;*/
/* 	                	}*/
/* 						alertBox(htmlData,"danger",alertBoxElem,false,false);*/
/* 					}*/
/* 				},*/
/* 				error: function( jqXhr, textStatus, errorThrown ){ */
/* 				  console.log(errorThrown);*/
/* 				  alertBox("{{ l('Unable to complete your request') }}","danger",alertBoxElem,false,false);*/
/* 				},*/
/* 		        complete: function() {*/
/* 		          // Re-enable send btn*/
/* 		          $(model+" #addFbAccountBtn").prop('disabled', false);*/
/* 		          kp_preloader("off",model+" .modal-body");*/
/* 		        }*/
/* 			});*/
/* 		}*/
/* */
/* */
/* 		function login_via_pw(model,app){*/
/* 			$(model+' .alertBox').html("");*/
/* 			$(model+" .fb_login").prop('disabled', true);*/
/* 			kp_preloader("on",model+" .modal-body");*/
/* 			$.ajax({*/
/* 				url: '{{ base_url("facebook/generate_token") }}/'+app,*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: {*/
/* 					username: $(model+' #fb_username').val(), */
/* 					password: $(model+' #fb_password').val(),*/
/* 					{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 				},*/
/* 				success: function( data, textStatus, jQxhr ){*/
/* 				  if(data.status == "ok"){*/
/* 				    $(model+" .token_result").html("<iframe width='100%' height='100' src='"+data.fb_url+"'></iframe>");*/
/* 				  }else{*/
/* 				  	if(data.message !== null && typeof data.message === 'object'){ */
/* 	                	htmlData = "<ul>";*/
/* 	                    Object.keys(data.message).forEach(function(key) {*/
/* 	                      htmlData += "<li>" + data.message[key] + "</li>";*/
/* 	                      });*/
/* 	                    htmlData += "</ul>";*/
/* 	               	}else{*/
/* 	                    htmlData = data.message;*/
/* 	            	}*/
/* 				    alertBox(htmlData,'danger',model+' .alertBox',false,true);*/
/* 				  }*/
/* 				},*/
/* 				error: function( jqXhr, textStatus, errorThrown ){ */
/* 				  console.log(errorThrown);*/
/* 				  alertBox('{{ l("Failed to generate Facebook token, try again") }}','danger',model+' .alertBox',true);*/
/* 				},*/
/* 		        complete: function() {*/
/* 		          $(model+" .fb_login").prop('disabled', false);*/
/* 		          kp_preloader("off",model+" .modal-body");*/
/* 		        }*/
/* 			});*/
/* 		}*/
/* */
/* 	</script>*/
/* {% endblock %}*/
