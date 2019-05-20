<?php

/* settings/roles.twig */
class __TwigTemplate_30062eb689ba908185632a2b5d7a55776aa21c10cdfbdbfe7b8781a0de1645b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "settings/roles.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Roles")), "html", null, true);
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
        $context["current_page"] = "roles";
        // line 14
        echo "\t\t\t\t";
        $this->loadTemplate("settings/tabs.twig", "settings/roles.twig", 14)->display($context);
        // line 15
        echo "\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-9 settingsContent\">
\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t";
        // line 19
        echo form_open();
        echo "

\t\t\t\t\t<h4 class=\"tab-title\"><i class=\"fa fa-fw fa-users\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Roles")), "html", null, true);
        echo "</h4>
\t\t\t\t\t<div class=\"managepermissionsErrors\"></div>

\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\" data-toggle=\"modal\" data-target=\"#addNewRole\" style='float:right;'>";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add role")), "html", null, true);
        echo "</button>
\t\t\t\t\t<div class=\"clear\"></div>

\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Name")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["roles"]) ? $context["roles"] : null), "getAll", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 36
            echo "\t\t\t\t\t\t\t\t";
            $context["listRoles"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute($context["role"], "permissions", array())));
            // line 37
            echo "\t\t\t\t\t\t\t\t";
            if (twig_test_empty($this->getAttribute((isset($context["listRoles"]) ? $context["listRoles"] : null), "admin", array()))) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t<tr class=\"roleRow\">
\t\t\t\t\t\t\t\t\t<td>";
                // line 39
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute($context["role"], "name", array())))), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"delete\" data-roleid=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
                echo "\" name=\"delete\" class=\"btn btn-danger deleteRoleBtn\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Delete")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" value=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
                echo "\" name=\"edit\" class=\"btn btn-primary editRoleBtn\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Edit")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
                echo "\" name=\"edit\" class=\"btn btn-primary roleDetailsBtn\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Details")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</form>

<!-- New role modal -->
<div id=\"addNewRole\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add new role")), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <div class='addNewRolelerts'></div>\t
        <form method=\"POST\">

\t\t\t<label for=\"roleName\">";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Role name")), "html", null, true);
        echo "</label>
\t\t\t<input type=\"text\" name=\"name\" id=\"roleName\" class=\"form-control\" placeholder=\"";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Role name")), "html", null, true);
        echo "\">

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"new_maxPosts\">";
        // line 74
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum posts per day")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"number\" name=\"maxPosts\" id=\"new_maxPosts\" class=\"form-control\" placeholder=\"";
        // line 75
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum posts per day")), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"new_maxFbAccount\">";
        // line 79
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum facebook accounts")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"number\" name=\"maxFbAccount\" id=\"new_maxFbAccount\" class=\"form-control\" placeholder=\"";
        // line 80
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum facebook accounts")), "html", null, true);
        echo "\">

\t\t\t\t</div>

\t\t\t\t";
        // line 84
        if (KPMIsActive("auto_comment")) {
            // line 85
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"max_comments\">";
            // line 86
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum comments per day")), "html", null, true);
            echo "</label>
\t\t\t\t\t<input type=\"number\" name=\"max_comments\" id=\"max_comments\" class=\"form-control\" placeholder=\"";
            // line 87
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum comments per day")), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 90
        echo "
\t\t\t\t";
        // line 91
        if (KPMIsActive("auto_like")) {
            // line 92
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"max_likes\">";
            // line 93
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum likes per day")), "html", null, true);
            echo "</label>
\t\t\t\t\t<input type=\"number\" name=\"max_likes\" id=\"max_likes\" class=\"form-control\" placeholder=\"";
            // line 94
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum likes per day")), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 97
        echo "
\t\t\t\t";
        // line 98
        if (KPMIsActive("join_groups")) {
            // line 99
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"join_groups\">";
            // line 100
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum join group per day")), "html", null, true);
            echo "</label>
\t\t\t\t\t<input type=\"number\" name=\"join_groups\" id=\"join_groups\" class=\"form-control\" placeholder=\"";
            // line 101
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum join group per day")), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 104
        echo "
\t\t\t\t";
        // line 105
        if (KPMIsActive("invite_join_groups")) {
            // line 106
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"invite_join_groups\">";
            // line 107
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum invite to join group per day")), "html", null, true);
            echo "</label>
\t\t\t\t\t<input type=\"number\" name=\"invite_join_groups\" id=\"invite_join_groups\" class=\"form-control\" placeholder=\"";
            // line 108
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum invite to join group per day")), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 111
        echo "
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"new_accountExpiry\">";
        // line 113
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Account expire ( In days )")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"number\" name=\"new_accountExpiry\" id=\"new_accountExpiry\" class=\"form-control\" placeholder=\"";
        // line 114
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Account expire ( In days )")), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"checkbox\" class='checkbox-style upload_videos' id=\"new_upload_videos\" name=\"new_upload_videos\" aria-label=\"";
        // line 122
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Media library")), "html", null, true);
        echo "\"  />
\t\t\t\t\t\t<label for=\"new_upload_videos\"></label> ";
        // line 123
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload Videos")), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"checkbox\" class='checkbox-style upload_images' id=\"new_upload_images\" name=\"new_upload_images\" aria-label=\"";
        // line 128
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Media library")), "html", null, true);
        echo "\"  />
\t\t\t\t\t\t<label for=\"new_upload_images\"></label> ";
        // line 129
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload Images")), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"max_upload\">";
        // line 136
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Max upload")), "html", null, true);
        echo " <small>( ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("MB")), "html", null, true);
        echo " )</small></label>
\t\t\t\t\t<input type=\"number\" name=\"maxUpload\" id=\"max_upload\" class=\"form-control\" placeholder=\"";
        // line 137
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Max upload")), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>

\t\t</form>\t\t
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 144
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Close")), "html", null, true);
        echo "</button>
        <input type='button' class='btn btn-primary' id=\"addNewRoleBtn\" value='";
        // line 145
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add Role")), "html", null, true);
        echo "'>
      </div>
    </div>

  </div>
</div>

<!-- New role modal -->
<div id=\"editRoleModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 158
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Edit role")), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <div class='editRolelerts'></div>\t
        <form method=\"POST\">
        \t<input type=\"hidden\" name=\"roleid\" id=\"roleid\" value=\"\">
\t\t\t<label for=\"roleName\">";
        // line 164
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Role name")), "html", null, true);
        echo "</label>
\t\t\t<input type=\"text\" name=\"name\" id=\"roleName\" class=\"form-control\" placeholder=\"Role name\">

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"new_maxPosts\">";
        // line 170
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum posts per day")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"number\" name=\"maxPosts\" id=\"new_maxPosts\" class=\"form-control\" placeholder=\"";
        // line 171
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum posts per day")), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"new_maxFbAccount\">";
        // line 175
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum facebook accounts")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"number\" name=\"maxFbAccount\" id=\"new_maxFbAccount\" class=\"form-control\" placeholder=\"";
        // line 176
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum facebook accounts")), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t\t
\t\t\t\t";
        // line 180
        if (KPMIsActive("auto_comment")) {
            // line 181
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"max_comments\">";
            // line 182
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum comments per day")), "html", null, true);
            echo "</label>
\t\t\t\t\t<input type=\"number\" name=\"max_comments\" id=\"max_comments\" class=\"form-control\" placeholder=\"";
            // line 183
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum comments per day")), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 186
        echo "
\t\t\t\t";
        // line 187
        if (KPMIsActive("auto_like")) {
            // line 188
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"max_likes\">";
            // line 189
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum likes per day")), "html", null, true);
            echo "</label>
\t\t\t\t\t<input type=\"number\" name=\"max_likes\" id=\"max_likes\" class=\"form-control\" placeholder=\"";
            // line 190
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum likes per day")), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 193
        echo "
\t\t\t\t";
        // line 194
        if (KPMIsActive("join_groups")) {
            // line 195
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"join_groups\">";
            // line 196
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum join group per day")), "html", null, true);
            echo "</label>
\t\t\t\t\t<input type=\"number\" name=\"join_groups\" id=\"join_groups\" class=\"form-control\" placeholder=\"";
            // line 197
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum join group per day")), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 200
        echo "
\t\t\t\t";
        // line 201
        if (KPMIsActive("invite_join_groups")) {
            // line 202
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"invite_join_groups\">";
            // line 203
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum invite to join group per day")), "html", null, true);
            echo "</label>
\t\t\t\t\t<input type=\"number\" name=\"invite_join_groups\" id=\"invite_join_groups\" class=\"form-control\" placeholder=\"";
            // line 204
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum invite to join group per day")), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 207
        echo "
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"new_accountExpiry\">";
        // line 209
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Account expire ( In days )")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"number\" name=\"new_accountExpiry\" id=\"new_accountExpiry\" class=\"form-control\" placeholder=\"";
        // line 210
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Account expire ( In days )")), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"checkbox\" class='checkbox-style upload_videos' id=\"edit_upload_videos\" name=\"edit_upload_videos\" aria-label=\"";
        // line 217
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Media library")), "html", null, true);
        echo "\"  />
\t\t\t\t\t\t<label for=\"edit_upload_videos\"></label> ";
        // line 218
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload Videos")), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"checkbox\" class='checkbox-style upload_images' id=\"edit_upload_images\" name=\"edit_upload_images\" aria-label=\"";
        // line 223
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Media library")), "html", null, true);
        echo "\"  />
\t\t\t\t\t\t<label for=\"edit_upload_images\"></label> ";
        // line 224
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload Images")), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label for=\"edit_max_upload\">";
        // line 231
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Max upload")), "html", null, true);
        echo " <small>( ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("MB")), "html", null, true);
        echo " )</small></label>
\t\t\t\t\t<input type=\"number\" name=\"maxUpload\" id=\"edit_max_upload\" class=\"form-control\" placeholder=\"";
        // line 232
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Max upload")), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>

\t\t</form>\t\t
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 239
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Close")), "html", null, true);
        echo "</button>
        <input type='button' class='btn btn-primary' id=\"editRoleModalBtn\" value='";
        // line 240
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Edit Role")), "html", null, true);
        echo "'>
      </div>
    </div>

  </div>
</div>

<!-- New role modal -->
<div id=\"roleDetailsModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 253
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Role details")), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <div class='roleDetailsAlerts'></div>\t
        <form method=\"POST\">
        \t<input type=\"hidden\" name=\"roleid\" id=\"roleid\" value=\"\">
        \t<div class=\"roleDetailsSection\"></div>
\t\t</form>\t\t
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 263
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Close")), "html", null, true);
        echo "</button>
      </div>
    </div>

  </div>
</div>

";
        // line 271
        $context["box_id"] = "role";
        // line 272
        $context["delete_msg"] = call_user_func_array($this->env->getFunction('l')->getCallable(), array("Are you sure you want to delete the role?"));
        // line 273
        $this->loadTemplate("blocks/delete_modal.twig", "settings/roles.twig", 273)->display($context);
        // line 274
        echo "
";
    }

    // line 277
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 278
        echo "\t";
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
\t<script src=\"";
        // line 279
        echo twig_escape_filter($this->env, assets("theme/default/js/helpers.js"), "html", null, true);
        echo "\"></script>

\t<script>
\t\t\$(function(){
\t\t\t// Add role
\t\t\t\$( \"#addNewRoleBtn\" ).click(function(){
\t      \t\tkp_preloader(\"on\",'#addNewRole .modal-body');
\t           \$.ajax({
\t            url: '";
        // line 287
        echo twig_escape_filter($this->env, base_url("settings/roles/add"), "html", null, true);
        echo "',
\t            dataType: 'json',
\t            type: 'post',
\t            contentType: 'application/x-www-form-urlencoded',
\t            data: { 
\t            \tname: \$('#roleName').val(),
\t            \tmaxPosts: \$('#new_maxPosts').val(),
\t            \tmaxFbAccount: \$('#new_maxFbAccount').val(),
\t            \tmax_comments: \$('#max_comments',\"#addNewRole\").val(),
\t            \tmax_likes: \$('#max_likes',\"#addNewRole\").val(),
\t            \tjoin_groups: \$('#join_groups',\"#addNewRole\").val(),
\t            \tinvite_join_groups: \$('#invite_join_groups',\"#addNewRole\").val(),
\t            \taccountExpiry: \$('#new_accountExpiry').val(),
\t            \tupload_videos: \$('#new_upload_videos', \"#addNewRole\").is(\":checked\") ? 1 : 0,
\t            \tupload_images: \$('#new_upload_images', \"#addNewRole\").is(\":checked\") ? 1 : 0,
\t            \tmax_upload: \$('#max_upload').val(),
\t            \t";
        // line 303
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
\t            },
\t            success: function( data, textStatus, jQxhr ){
\t                if(data.status == \"success\"){
\t                \tif(data.message !== null && typeof data.message === 'object'){ 
\t\t                \thtmlData = \"<ul>\";
\t\t                    Object.keys(data.message).forEach(function(key) {
\t\t                      htmlData += \"<li>\" + data.message[key] + \"</li>\";
\t\t                      });
\t\t                    htmlData += \"</ul>\";
\t\t               \t}else{
\t\t                    htmlData = data.message;
\t\t            \t}
\t                \talertBox(htmlData,\"success\",\".addNewRolelerts\",false,true);
\t                \t\$(document).on('hide.bs.modal','#addNewRole', function () {
\t                \t\tlocation.href = \"";
        // line 318
        echo twig_escape_filter($this->env, base_url("settings/roles"), "html", null, true);
        echo "\";
\t                \t});
\t                }else{
\t                \thtmlData = \"<ul>\";
\t                \tif(data.message !== null && typeof data.message === 'object'){
\t\t\t\t\t\t\tObject.keys(data.message).forEach(function(key) {
\t\t\t\t\t\t\t    htmlData += \"<li>\" + data.message[key] + \"</li>\";
\t\t\t\t\t\t\t});
\t                \t}else{
\t                \t\thtmlData += \"<li>\" + data.message + \"</li>\";
\t                \t}
\t\t\t\t\t\thtmlData += \"</ul>\";
\t                \talertBox(htmlData,\"danger\",\".addNewRolelerts\",false,true);
\t                }
\t            },
\t            error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },
\t            complete: function(){
\t            \tkp_preloader(\"off\",'#addNewRole .modal-body');
\t            }
\t          });
\t      \t});

\t      \t";
        // line 341
        echo "\t\t\t\$( \".editRoleBtn\" ).click(function(){
\t\t\t\tkp_preloader(\"on\",'#editRoleModal .modal-body');
\t\t\t\tvar editRole = \$(\"#editRoleModal\");
\t\t\t\teditRole.modal(\"show\");
\t\t\t\t\$('#roleid', editRole).val(\$(this).val());
\t\t    \t\$.ajax({
\t\t            url: '";
        // line 347
        echo twig_escape_filter($this->env, base_url("settings/roles/details"), "html", null, true);
        echo "',
\t\t            dataType: 'json',
\t\t            type: 'post',
\t\t            contentType: 'application/x-www-form-urlencoded',
\t\t            data: { 
\t\t            \trole_id: \$('#roleid').val(),
\t\t            \t";
        // line 353
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
\t\t            },
\t\t            success: function( data, textStatus, jQxhr ){
\t\t                if(data.status == \"ok\"){
\t\t                \t\$('#roleName', editRole).val(data.role.name);
\t              \t\t\t\$('#new_maxPosts', editRole).val(data.role.max_posts);
\t              \t\t\t\$('#new_maxFbAccount', editRole).val(data.role.max_fbaccount);
\t              \t\t\t\$('#new_accountExpiry', editRole).val(data.role.account_expiry);
\t              \t\t\t\$('#max_comments', editRole).val(data.role.max_comments);
\t              \t\t\t\$('#max_likes', editRole).val(data.role.max_likes);
\t              \t\t\t\$('#join_groups', editRole).val(data.role.join_groups);
\t              \t\t\t\$('#invite_join_groups', editRole).val(data.role.invite_join_groups);
\t              \t\t\tif(data.role.upload_videos == 1){
\t\t\t                  \$('#edit_upload_videos', editRole).prop(\"checked\",true);
\t\t\t                }
\t\t\t                if(data.role.upload_images == 1){
\t\t\t                  \$('#edit_upload_images', editRole).prop(\"checked\",true);
\t\t\t                }
\t\t\t                \$('#edit_max_upload', editRole).val(data.role.max_upload);
\t\t                }else{
\t\t                \thtmlData = \"<ul>\";
\t\t                \tif(data.message !== null && typeof data.message === 'object'){
\t\t\t\t\t\t\t\tObject.keys(data.message).forEach(function(key) {
\t\t\t\t\t\t\t\t    htmlData += \"<li>\" + data.message[key] + \"</li>\";
\t\t\t\t\t\t\t\t});
\t\t                \t}else{
\t\t                \t\thtmlData += \"<li>\" + data.message + \"</li>\";
\t\t                \t}
\t\t\t\t\t\t\thtmlData += \"</ul>\";
\t\t                \talertBox(htmlData,\"danger\",\".editRolelerts\",false,true);
\t\t                }
\t\t            },
\t\t            error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },
\t\t            complete: function(){
\t\t            \tkp_preloader(\"off\",'#editRoleModal .modal-body');
\t\t            }
\t\t          });
\t\t    });

\t\t    \$( \"#editRoleModalBtn\" ).click(function(){
\t      \t\tkp_preloader(\"on\",'#editRoleModal .modal-body');
\t      \t\tvar editRole = \$(\"#editRoleModal\");
\t           \$.ajax({
\t            url: '";
        // line 396
        echo twig_escape_filter($this->env, base_url("settings/roles/update"), "html", null, true);
        echo "',
\t            dataType: 'json',
\t            type: 'post',
\t            contentType: 'application/x-www-form-urlencoded',
\t            data: { 
\t            \trole_id: \$('#roleid', editRole).val(),
\t            \tname: \$('#roleName', editRole).val(),
\t            \tmaxPosts: \$('#new_maxPosts', editRole).val(),
\t            \tmaxFbAccount: \$('#new_maxFbAccount', editRole).val(),
\t            \tmax_comments: \$('#max_comments', editRole).val(),
\t            \tmax_likes: \$('#max_likes', editRole).val(),
\t            \tjoin_groups: \$('#join_groups', editRole).val(),
\t            \tinvite_join_groups: \$('#invite_join_groups', editRole).val(),
\t            \taccountExpiry: \$('#new_accountExpiry', editRole).val(),
\t            \tupload_videos: \$('#edit_upload_videos', editRole).is(\":checked\") ? 1 : 0,
\t\t            upload_images: \$('#edit_upload_images', editRole).is(\":checked\") ? 1 : 0,
\t\t            max_upload: \$('#edit_max_upload', editRole).val(),
\t            \t";
        // line 413
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
\t            },
\t            success: function( data, textStatus, jQxhr ){
\t                if(data.status == \"success\"){
\t                \tif(data.message !== null && typeof data.message === 'object'){ 
\t\t                \thtmlData = \"<ul>\";
\t\t                    Object.keys(data.message).forEach(function(key) {
\t\t                      htmlData += \"<li>\" + data.message[key] + \"</li>\";
\t\t                      });
\t\t                    htmlData += \"</ul>\";
\t\t               \t}else{
\t\t                    htmlData = data.message;
\t\t            \t}
\t                \talertBox(htmlData,\"success\",\".editRolelerts\",false,true);
\t                \t\$(document).on('hide.bs.modal','#editRoleModal', function () {
\t                \t\tlocation.href = \"";
        // line 428
        echo twig_escape_filter($this->env, base_url("settings/roles"), "html", null, true);
        echo "\";
\t                \t});
\t                }else{
\t                \thtmlData = \"<ul>\";
\t                \tif(data.message !== null && typeof data.message === 'object'){
\t\t\t\t\t\t\tObject.keys(data.message).forEach(function(key) {
\t\t\t\t\t\t\t    htmlData += \"<li>\" + data.message[key] + \"</li>\";
\t\t\t\t\t\t\t});
\t                \t}else{
\t                \t\thtmlData += \"<li>\" + data.message + \"</li>\";
\t                \t}
\t\t\t\t\t\thtmlData += \"</ul>\";
\t                \talertBox(htmlData,\"danger\",\".editRolelerts\",false,true);
\t                }
\t            },
\t            error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },
\t            complete: function(){
\t            \tkp_preloader(\"off\",'#editRoleModal .modal-body');
\t            }
\t          });
\t      \t});

\t\t\t";
        // line 451
        echo "\t\t    \$(\".deleteRoleBtn\").click(function(){
\t\t\t\t\$(\"#delete_role\").modal(\"show\");
\t\t\t\tdeleteRoleBtn = \$(this);
\t\t    });

\t\t    \$(\".deleteBtn_role\" ).click(function(){
\t\t\t    \$.ajax({
\t\t\t      url: '";
        // line 458
        echo twig_escape_filter($this->env, base_url("settings/roles/delete"), "html", null, true);
        echo "',
\t\t\t      dataType: 'json',
\t\t\t      type: 'post',
\t\t\t      contentType: 'application/x-www-form-urlencoded',
\t\t\t      data: { 
\t\t\t      \tid: deleteRoleBtn.attr('data-roleid'),
\t\t\t      \t";
        // line 464
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t      },
\t\t\t      success: function( data, textStatus, jQxhr ){
\t\t\t        if(data.status == \"success\"){
\t\t\t        \talertBox(data.message,\"success\",\".deleteAlertBox_role\",false,false);
\t\t            \t\$(\".deleteBtn_role\").prop('disabled', true);
\t\t\t        \t\$(document).on('hide.bs.modal','#delete_role', function () {
\t\t\t        \t\tlocation.reload();
\t\t\t        \t});
\t\t\t        }else{
\t\t\t        \talertBox(data.message,\"danger\",\".deleteAlertBox_role\",false,false);
\t\t\t        }
\t\t\t      },
\t\t\t      error: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t      \tconsole.log(errorThrown);
\t\t\t      \talertBox(\"";
        // line 479
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\".deleteAlertBox_role\",false,false);
\t\t\t      }
\t\t\t    });

\t\t\t    \$('.deleteBox_content_role').html(\"\");
\t\t\t});

\t\t\t";
        // line 487
        echo "\t\t\t\$( \".roleDetailsBtn\" ).click(function(){
\t\t\t\tkp_preloader(\"on\",'#roleDetailsModal .modal-body');
\t\t\t\tvar roleDetails = \$(\"#roleDetailsModal\");
\t\t\t\troleDetails.modal(\"show\");
\t\t\t\t\$('#roleid', roleDetails).val(\$(this).val());
\t\t\t\t\$('.roleDetailsSection', roleDetails).html(\"\");
\t\t    \t\$.ajax({
\t\t            url: '";
        // line 494
        echo twig_escape_filter($this->env, base_url("settings/roles/details"), "html", null, true);
        echo "',
\t\t            dataType: 'json',
\t\t            type: 'post',
\t\t            contentType: 'application/x-www-form-urlencoded',
\t\t            data: { 
\t\t            \trole_id: \$('#roleid', roleDetails).val(),
\t\t            \t";
        // line 500
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
\t\t            },
\t\t            success: function( data, textStatus, jQxhr ){
\t\t                if(data.status == \"ok\"){
\t\t                \tvar htmlData = \"<ul class='list-group list-group-flush'>\";
\t\t\t\t\t\t\t\t\thtmlData += \"<li class='list-group-item'><strong>";
        // line 505
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Name")), "html", null, true);
        echo "</strong> : <span class='badge'>\"+data.role.name+\"</span></li>\";
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\thtmlData += \"<li class='list-group-item'><strong>";
        // line 507
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Max posts")), "html", null, true);
        echo "</strong> : \";

\t\t\t\t\t\t\t\t\tif(data.role.max_posts == -1){
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge badge-danger'>";
        // line 510
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
        echo "</span>\";
\t\t\t\t\t\t\t\t\t}else if(data.role.max_posts == 0){
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge badge-success'>";
        // line 512
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unlimited")), "html", null, true);
        echo "</span>\";
\t\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge'>\"+data.role.max_posts+\" ";
        // line 514
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Per day")), "html", null, true);
        echo "</span>\";
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\thtmlData += \"</li>\";

\t\t\t\t\t\t\t\t\t";
        // line 519
        if (KPMIsActive("auto_comment")) {
            // line 520
            echo "\t\t\t\t\t\t\t\t\thtmlData += \"<li class='list-group-item'><strong>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Max comments")), "html", null, true);
            echo "</strong> : \";
\t\t\t\t\t\t\t\t\tif(data.role.max_comments == -1){
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge badge-danger'>";
            // line 522
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
            echo "\";
\t\t\t\t\t\t\t\t\t}else if(data.role.max_comments == 0){
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge badge-success'>";
            // line 524
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unlimited")), "html", null, true);
            echo "\";
\t\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge'>\"+data.role.max_comments+\" ";
            // line 526
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Per day")), "html", null, true);
            echo "\";
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\thtmlData += \"</span></li>\";
\t\t\t\t\t\t\t\t\t";
        }
        // line 530
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 531
        if (KPMIsActive("auto_like")) {
            // line 532
            echo "\t\t\t\t\t\t\t\t\thtmlData += \"<li class='list-group-item'><strong>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Max likes")), "html", null, true);
            echo "</strong> :\";
\t\t\t\t\t\t\t\t\tif(data.role.max_likes == -1){
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge badge-danger'>";
            // line 534
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
            echo "\";
\t\t\t\t\t\t\t\t\t}else if(data.role.max_likes == 0){
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge badge-success'>";
            // line 536
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unlimited")), "html", null, true);
            echo "\";
\t\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge'>\"+data.role.max_likes+\" ";
            // line 538
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Per day")), "html", null, true);
            echo "\";
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\thtmlData += \"</span></li>\";
\t\t\t\t\t\t\t\t\t";
        }
        // line 542
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 543
        if (KPMIsActive("join_groups")) {
            // line 544
            echo "\t\t\t\t\t\t\t\t\thtmlData += \"<li class='list-group-item'><strong>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Max join groups")), "html", null, true);
            echo "</strong> : \";
\t\t\t\t\t\t\t\t\tif(data.role.join_groups == -1){
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge badge-danger'>";
            // line 546
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
            echo "\";
\t\t\t\t\t\t\t\t\t}else if(data.role.join_groups == 0){
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge badge-success'>";
            // line 548
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unlimited")), "html", null, true);
            echo "\";
\t\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge'>\"+data.role.join_groups+\" ";
            // line 550
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Per day")), "html", null, true);
            echo "\";
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\thtmlData += \"</span></li>\";
\t\t\t\t\t\t\t\t\t";
        }
        // line 554
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 555
        if (KPMIsActive("invite_join_groups")) {
            // line 556
            echo "\t\t\t\t\t\t\t\t\thtmlData += \"<li class='list-group-item'><strong>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Max invite to join groups")), "html", null, true);
            echo "</strong> : \";
\t\t\t\t\t\t\t\t\tif(data.role.invite_join_groups == -1){
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge badge-danger'>";
            // line 558
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
            echo "\";
\t\t\t\t\t\t\t\t\t}else if(data.role.invite_join_groups == 0){
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge badge-success'>";
            // line 560
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unlimited")), "html", null, true);
            echo "\";
\t\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge'>\"+data.role.invite_join_groups+\" ";
            // line 562
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Per day")), "html", null, true);
            echo "\";
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\thtmlData += \"</span></li>\";
\t\t\t\t\t\t\t\t\t";
        }
        // line 566
        echo "
\t\t\t\t\t\t\t\t\thtmlData += \"<li class='list-group-item'><strong>";
        // line 567
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Max Facebook account")), "html", null, true);
        echo "</strong> : \";

\t\t\t\t\t\t\t\t\tif(data.role.max_fbaccount == 0){
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge badge-success'>";
        // line 570
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unlimited")), "html", null, true);
        echo "\";
\t\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\t\thtmlData += \"<span class='badge badge-success'>\"+data.role.max_fbaccount;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\thtmlData += \"</span></li>\";

\t\t\t\t\t\t\t\t\thtmlData += \"<li class='list-group-item'><strong>";
        // line 577
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Account Expiry")), "html", null, true);
        echo "</strong> : <span class='badge'>\";

\t\t\t\t\t\t\t\t\tif(data.role.account_expiry == 0){
\t\t\t\t\t\t\t\t\t\thtmlData += \"";
        // line 580
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Never expire")), "html", null, true);
        echo "\";
\t\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\t\thtmlData += data.role.account_expiry;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\thtmlData += \"</span></li>\";

\t\t\t\t\t\t\t\t\thtmlData += \"<li class='list-group-item'><strong>";
        // line 587
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Can upload videos")), "html", null, true);
        echo "</strong> : \";
\t\t\t\t\t\t\t\t\thtmlData += data.role.upload_videos == 1 ? \"<span class='badge badge-success'>";
        // line 588
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Yes")), "html", null, true);
        echo "</span>\" : \"<span class='badge badge-danger'>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No")), "html", null, true);
        echo "</span>\" ;
\t\t\t\t\t\t\t\t\thtmlData += \"</li>\";

\t\t\t\t\t\t\t\t\thtmlData += \"<li class='list-group-item'><strong>";
        // line 591
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Can upload images")), "html", null, true);
        echo "</strong> : \";
\t\t\t\t\t\t\t\t\thtmlData += data.role.upload_images == 1 ? \"<span class='badge badge-success'>";
        // line 592
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Yes")), "html", null, true);
        echo "</span>\" : \"<span class='badge badge-danger'>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No")), "html", null, true);
        echo "</span>\" ;
\t\t\t\t\t\t\t\t\thtmlData += \"</li>\";

\t\t\t\t\t\t\t\t\thtmlData += \"<li class='list-group-item'><strong>";
        // line 595
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Max Upload")), "html", null, true);
        echo "</strong> : <span class='badge'>\"+data.role.max_upload+\" ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("MB")), "html", null, true);
        echo "</span></li>\";

\t            \t\t\t\thtmlData += \"</ul>\";
\t\t                \t\$('.roleDetailsSection', roleDetails).html(htmlData);
\t\t                }else{
\t\t                \thtmlData = \"<ul>\";
\t\t                \tif(data.message !== null && typeof data.message === 'object'){
\t\t\t\t\t\t\t\tObject.keys(data.message).forEach(function(key) {
\t\t\t\t\t\t\t\t    htmlData += \"<li>\" + data.message[key] + \"</li>\";
\t\t\t\t\t\t\t\t});
\t\t                \t}else{
\t\t                \t\thtmlData += \"<li>\" + data.message + \"</li>\";
\t\t                \t}
\t\t\t\t\t\t\thtmlData += \"</ul>\";
\t\t                \talertBox(htmlData,\"danger\",\".roleDetailsAlerts\",false,true);
\t\t                }
\t\t            },
\t\t            error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },
\t\t            complete: function(){
\t\t            \tkp_preloader(\"off\",'#roleDetailsModal .modal-body');
\t\t            }
\t\t          });
\t\t    });
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "settings/roles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1054 => 595,  1046 => 592,  1042 => 591,  1034 => 588,  1030 => 587,  1020 => 580,  1014 => 577,  1004 => 570,  998 => 567,  995 => 566,  988 => 562,  983 => 560,  978 => 558,  972 => 556,  970 => 555,  967 => 554,  960 => 550,  955 => 548,  950 => 546,  944 => 544,  942 => 543,  939 => 542,  932 => 538,  927 => 536,  922 => 534,  916 => 532,  914 => 531,  911 => 530,  904 => 526,  899 => 524,  894 => 522,  888 => 520,  886 => 519,  878 => 514,  873 => 512,  868 => 510,  862 => 507,  857 => 505,  847 => 500,  838 => 494,  829 => 487,  819 => 479,  799 => 464,  790 => 458,  781 => 451,  756 => 428,  736 => 413,  716 => 396,  668 => 353,  659 => 347,  651 => 341,  626 => 318,  606 => 303,  587 => 287,  576 => 279,  571 => 278,  568 => 277,  563 => 274,  561 => 273,  559 => 272,  557 => 271,  547 => 263,  534 => 253,  518 => 240,  514 => 239,  504 => 232,  498 => 231,  488 => 224,  484 => 223,  476 => 218,  472 => 217,  462 => 210,  458 => 209,  454 => 207,  448 => 204,  444 => 203,  441 => 202,  439 => 201,  436 => 200,  430 => 197,  426 => 196,  423 => 195,  421 => 194,  418 => 193,  412 => 190,  408 => 189,  405 => 188,  403 => 187,  400 => 186,  394 => 183,  390 => 182,  387 => 181,  385 => 180,  378 => 176,  374 => 175,  367 => 171,  363 => 170,  354 => 164,  345 => 158,  329 => 145,  325 => 144,  315 => 137,  309 => 136,  299 => 129,  295 => 128,  287 => 123,  283 => 122,  272 => 114,  268 => 113,  264 => 111,  258 => 108,  254 => 107,  251 => 106,  249 => 105,  246 => 104,  240 => 101,  236 => 100,  233 => 99,  231 => 98,  228 => 97,  222 => 94,  218 => 93,  215 => 92,  213 => 91,  210 => 90,  204 => 87,  200 => 86,  197 => 85,  195 => 84,  188 => 80,  184 => 79,  177 => 75,  173 => 74,  165 => 69,  161 => 68,  152 => 62,  136 => 48,  130 => 47,  121 => 43,  115 => 42,  109 => 41,  104 => 39,  101 => 38,  98 => 37,  95 => 36,  91 => 35,  83 => 30,  74 => 24,  68 => 21,  63 => 19,  57 => 15,  54 => 14,  52 => 13,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ l('Roles') }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* <form method='POST' class="settings" novalidate>*/
/* 	<div class="row">*/
/* 		<div class="tabbable tabs-left">*/
/* 			<div class="col-xs-12 col-sm-3 settingsTabs">*/
/* 				{% set current_page = 'roles' %}*/
/* 				{% include "settings/tabs.twig" %}*/
/* 			</div>*/
/* 			<div class="col-xs-12 col-sm-9 settingsContent">*/
/* 				<div class="tab-content">*/
/* */
/* 					{{ form_open() }}*/
/* */
/* 					<h4 class="tab-title"><i class="fa fa-fw fa-users"></i> {{ l('Roles') }}</h4>*/
/* 					<div class="managepermissionsErrors"></div>*/
/* */
/* 					<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addNewRole" style='float:right;'>{{ l('Add role') }}</button>*/
/* 					<div class="clear"></div>*/
/* */
/* 					<table class="table table-bordered table-striped">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<td>{{ l('Name') }}</td>*/
/* 								<td></td>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 							{% for role in roles.getAll() %}*/
/* 								{% set listRoles = json_decode(role.permissions) %}*/
/* 								{% if listRoles.admin is empty %}*/
/* 									<tr class="roleRow">*/
/* 									<td>{{ l(role.name)|capitalize }}</td>*/
/* 									<td>*/
/* 										<button type="button" id="delete" data-roleid="{{ role.id }}" name="delete" class="btn btn-danger deleteRoleBtn">{{ l('Delete') }}</button>*/
/* 										<button type="button" value="{{ role.id }}" name="edit" class="btn btn-primary editRoleBtn">{{ l('Edit') }}</button>*/
/* 										<button type="button" value="{{ role.id }}" name="edit" class="btn btn-primary roleDetailsBtn">{{ l('Details') }}</button>*/
/* 									</td>*/
/* 									</tr>*/
/* 								{% endif %}*/
/* 							{% endfor %}*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* */
/* <!-- New role modal -->*/
/* <div id="addNewRole" class="modal fade" role="dialog">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*         <h4 class="modal-title">{{ l('Add new role') }}</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <div class='addNewRolelerts'></div>	*/
/*         <form method="POST">*/
/* */
/* 			<label for="roleName">{{ l('Role name') }}</label>*/
/* 			<input type="text" name="name" id="roleName" class="form-control" placeholder="{{l('Role name')}}">*/
/* */
/* 			<div class="row">*/
/* */
/* 				<div class="col-sm-6">*/
/* 					<label for="new_maxPosts">{{ l('Maximum posts per day') }}</label>*/
/* 					<input type="number" name="maxPosts" id="new_maxPosts" class="form-control" placeholder="{{ l('Maximum posts per day') }}">*/
/* 				</div>*/
/* */
/* 				<div class="col-sm-6">*/
/* 					<label for="new_maxFbAccount">{{ l('Maximum facebook accounts') }}</label>*/
/* 					<input type="number" name="maxFbAccount" id="new_maxFbAccount" class="form-control" placeholder="{{ l('Maximum facebook accounts') }}">*/
/* */
/* 				</div>*/
/* */
/* 				{% if KPMIsActive('auto_comment') %}*/
/* 				<div class="col-sm-6">*/
/* 					<label for="max_comments">{{ l('Maximum comments per day') }}</label>*/
/* 					<input type="number" name="max_comments" id="max_comments" class="form-control" placeholder="{{ l('Maximum comments per day') }}">*/
/* 				</div>*/
/* 				{% endif %}*/
/* */
/* 				{% if KPMIsActive('auto_like') %}*/
/* 				<div class="col-sm-6">*/
/* 					<label for="max_likes">{{ l('Maximum likes per day') }}</label>*/
/* 					<input type="number" name="max_likes" id="max_likes" class="form-control" placeholder="{{ l('Maximum likes per day') }}">*/
/* 				</div>*/
/* 				{% endif %}*/
/* */
/* 				{% if KPMIsActive('join_groups') %}*/
/* 				<div class="col-sm-6">*/
/* 					<label for="join_groups">{{ l('Maximum join group per day') }}</label>*/
/* 					<input type="number" name="join_groups" id="join_groups" class="form-control" placeholder="{{ l('Maximum join group per day') }}">*/
/* 				</div>*/
/* 				{% endif %}*/
/* */
/* 				{% if KPMIsActive('invite_join_groups') %}*/
/* 				<div class="col-sm-6">*/
/* 					<label for="invite_join_groups">{{ l('Maximum invite to join group per day') }}</label>*/
/* 					<input type="number" name="invite_join_groups" id="invite_join_groups" class="form-control" placeholder="{{ l('Maximum invite to join group per day') }}">*/
/* 				</div>*/
/* 				{% endif %}*/
/* */
/* 				<div class="col-sm-6">*/
/* 					<label for="new_accountExpiry">{{ l('Account expire ( In days )') }}</label>*/
/* 					<input type="number" name="new_accountExpiry" id="new_accountExpiry" class="form-control" placeholder="{{ l('Account expire ( In days )') }}">*/
/* 				</div>*/
/* */
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-6">*/
/* 					<div class="input-group">*/
/* 						<input type="checkbox" class='checkbox-style upload_videos' id="new_upload_videos" name="new_upload_videos" aria-label="{{ l('Media library') }}"  />*/
/* 						<label for="new_upload_videos"></label> {{ l('Upload Videos') }}*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-6">*/
/* 					<div class="input-group">*/
/* 						<input type="checkbox" class='checkbox-style upload_images' id="new_upload_images" name="new_upload_images" aria-label="{{ l('Media library') }}"  />*/
/* 						<label for="new_upload_images"></label> {{ l('Upload Images') }}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-6">*/
/* 					<label for="max_upload">{{ l('Max upload') }} <small>( {{ l('MB') }} )</small></label>*/
/* 					<input type="number" name="maxUpload" id="max_upload" class="form-control" placeholder="{{ l('Max upload') }}">*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</form>		*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">{{ l("Close") }}</button>*/
/*         <input type='button' class='btn btn-primary' id="addNewRoleBtn" value='{{ l("Add Role") }}'>*/
/*       </div>*/
/*     </div>*/
/* */
/*   </div>*/
/* </div>*/
/* */
/* <!-- New role modal -->*/
/* <div id="editRoleModal" class="modal fade" role="dialog">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*         <h4 class="modal-title">{{ l('Edit role') }}</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <div class='editRolelerts'></div>	*/
/*         <form method="POST">*/
/*         	<input type="hidden" name="roleid" id="roleid" value="">*/
/* 			<label for="roleName">{{ l('Role name') }}</label>*/
/* 			<input type="text" name="name" id="roleName" class="form-control" placeholder="Role name">*/
/* */
/* 			<div class="row">*/
/* */
/* 				<div class="col-sm-6">*/
/* 					<label for="new_maxPosts">{{ l('Maximum posts per day') }}</label>*/
/* 					<input type="number" name="maxPosts" id="new_maxPosts" class="form-control" placeholder="{{ l('Maximum posts per day') }}">*/
/* 				</div>*/
/* */
/* 				<div class="col-sm-6">*/
/* 					<label for="new_maxFbAccount">{{ l('Maximum facebook accounts') }}</label>*/
/* 					<input type="number" name="maxFbAccount" id="new_maxFbAccount" class="form-control" placeholder="{{ l('Maximum facebook accounts') }}">*/
/* 				</div>*/
/* */
/* 				*/
/* 				{% if KPMIsActive('auto_comment') %}*/
/* 				<div class="col-sm-6">*/
/* 					<label for="max_comments">{{ l('Maximum comments per day') }}</label>*/
/* 					<input type="number" name="max_comments" id="max_comments" class="form-control" placeholder="{{ l('Maximum comments per day') }}">*/
/* 				</div>*/
/* 				{% endif %}*/
/* */
/* 				{% if KPMIsActive('auto_like') %}*/
/* 				<div class="col-sm-6">*/
/* 					<label for="max_likes">{{ l('Maximum likes per day') }}</label>*/
/* 					<input type="number" name="max_likes" id="max_likes" class="form-control" placeholder="{{ l('Maximum likes per day') }}">*/
/* 				</div>*/
/* 				{% endif %}*/
/* */
/* 				{% if KPMIsActive('join_groups') %}*/
/* 				<div class="col-sm-6">*/
/* 					<label for="join_groups">{{ l('Maximum join group per day') }}</label>*/
/* 					<input type="number" name="join_groups" id="join_groups" class="form-control" placeholder="{{ l('Maximum join group per day') }}">*/
/* 				</div>*/
/* 				{% endif %}*/
/* */
/* 				{% if KPMIsActive('invite_join_groups') %}*/
/* 				<div class="col-sm-6">*/
/* 					<label for="invite_join_groups">{{ l('Maximum invite to join group per day') }}</label>*/
/* 					<input type="number" name="invite_join_groups" id="invite_join_groups" class="form-control" placeholder="{{ l('Maximum invite to join group per day') }}">*/
/* 				</div>*/
/* 				{% endif %}*/
/* */
/* 				<div class="col-sm-6">*/
/* 					<label for="new_accountExpiry">{{ l('Account expire ( In days )') }}</label>*/
/* 					<input type="number" name="new_accountExpiry" id="new_accountExpiry" class="form-control" placeholder="{{ l('Account expire ( In days )') }}">*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-6">*/
/* 					<div class="input-group">*/
/* 						<input type="checkbox" class='checkbox-style upload_videos' id="edit_upload_videos" name="edit_upload_videos" aria-label="{{ l('Media library') }}"  />*/
/* 						<label for="edit_upload_videos"></label> {{ l('Upload Videos') }}*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-6">*/
/* 					<div class="input-group">*/
/* 						<input type="checkbox" class='checkbox-style upload_images' id="edit_upload_images" name="edit_upload_images" aria-label="{{ l('Media library') }}"  />*/
/* 						<label for="edit_upload_images"></label> {{ l('Upload Images') }}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-6">*/
/* 					<label for="edit_max_upload">{{ l('Max upload') }} <small>( {{ l('MB') }} )</small></label>*/
/* 					<input type="number" name="maxUpload" id="edit_max_upload" class="form-control" placeholder="{{ l('Max upload') }}">*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</form>		*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">{{ l("Close") }}</button>*/
/*         <input type='button' class='btn btn-primary' id="editRoleModalBtn" value='{{ l("Edit Role") }}'>*/
/*       </div>*/
/*     </div>*/
/* */
/*   </div>*/
/* </div>*/
/* */
/* <!-- New role modal -->*/
/* <div id="roleDetailsModal" class="modal fade" role="dialog">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*         <h4 class="modal-title">{{ l('Role details') }}</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <div class='roleDetailsAlerts'></div>	*/
/*         <form method="POST">*/
/*         	<input type="hidden" name="roleid" id="roleid" value="">*/
/*         	<div class="roleDetailsSection"></div>*/
/* 		</form>		*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">{{ l("Close") }}</button>*/
/*       </div>*/
/*     </div>*/
/* */
/*   </div>*/
/* </div>*/
/* */
/* {# Box variables #}*/
/* {% set box_id = "role" %}*/
/* {% set delete_msg = l("Are you sure you want to delete the role?") %}*/
/* {% include "blocks/delete_modal.twig" %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/* 	{{ parent() }}*/
/* 	<script src="{{ assets('theme/default/js/helpers.js') }}"></script>*/
/* */
/* 	<script>*/
/* 		$(function(){*/
/* 			// Add role*/
/* 			$( "#addNewRoleBtn" ).click(function(){*/
/* 	      		kp_preloader("on",'#addNewRole .modal-body');*/
/* 	           $.ajax({*/
/* 	            url: '{{ base_url("settings/roles/add") }}',*/
/* 	            dataType: 'json',*/
/* 	            type: 'post',*/
/* 	            contentType: 'application/x-www-form-urlencoded',*/
/* 	            data: { */
/* 	            	name: $('#roleName').val(),*/
/* 	            	maxPosts: $('#new_maxPosts').val(),*/
/* 	            	maxFbAccount: $('#new_maxFbAccount').val(),*/
/* 	            	max_comments: $('#max_comments',"#addNewRole").val(),*/
/* 	            	max_likes: $('#max_likes',"#addNewRole").val(),*/
/* 	            	join_groups: $('#join_groups',"#addNewRole").val(),*/
/* 	            	invite_join_groups: $('#invite_join_groups',"#addNewRole").val(),*/
/* 	            	accountExpiry: $('#new_accountExpiry').val(),*/
/* 	            	upload_videos: $('#new_upload_videos', "#addNewRole").is(":checked") ? 1 : 0,*/
/* 	            	upload_images: $('#new_upload_images', "#addNewRole").is(":checked") ? 1 : 0,*/
/* 	            	max_upload: $('#max_upload').val(),*/
/* 	            	{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/* 	            },*/
/* 	            success: function( data, textStatus, jQxhr ){*/
/* 	                if(data.status == "success"){*/
/* 	                	if(data.message !== null && typeof data.message === 'object'){ */
/* 		                	htmlData = "<ul>";*/
/* 		                    Object.keys(data.message).forEach(function(key) {*/
/* 		                      htmlData += "<li>" + data.message[key] + "</li>";*/
/* 		                      });*/
/* 		                    htmlData += "</ul>";*/
/* 		               	}else{*/
/* 		                    htmlData = data.message;*/
/* 		            	}*/
/* 	                	alertBox(htmlData,"success",".addNewRolelerts",false,true);*/
/* 	                	$(document).on('hide.bs.modal','#addNewRole', function () {*/
/* 	                		location.href = "{{ base_url('settings/roles') }}";*/
/* 	                	});*/
/* 	                }else{*/
/* 	                	htmlData = "<ul>";*/
/* 	                	if(data.message !== null && typeof data.message === 'object'){*/
/* 							Object.keys(data.message).forEach(function(key) {*/
/* 							    htmlData += "<li>" + data.message[key] + "</li>";*/
/* 							});*/
/* 	                	}else{*/
/* 	                		htmlData += "<li>" + data.message + "</li>";*/
/* 	                	}*/
/* 						htmlData += "</ul>";*/
/* 	                	alertBox(htmlData,"danger",".addNewRolelerts",false,true);*/
/* 	                }*/
/* 	            },*/
/* 	            error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/* 	            complete: function(){*/
/* 	            	kp_preloader("off",'#addNewRole .modal-body');*/
/* 	            }*/
/* 	          });*/
/* 	      	});*/
/* */
/* 	      	{# Edit role #}*/
/* 			$( ".editRoleBtn" ).click(function(){*/
/* 				kp_preloader("on",'#editRoleModal .modal-body');*/
/* 				var editRole = $("#editRoleModal");*/
/* 				editRole.modal("show");*/
/* 				$('#roleid', editRole).val($(this).val());*/
/* 		    	$.ajax({*/
/* 		            url: '{{ base_url("settings/roles/details") }}',*/
/* 		            dataType: 'json',*/
/* 		            type: 'post',*/
/* 		            contentType: 'application/x-www-form-urlencoded',*/
/* 		            data: { */
/* 		            	role_id: $('#roleid').val(),*/
/* 		            	{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/* 		            },*/
/* 		            success: function( data, textStatus, jQxhr ){*/
/* 		                if(data.status == "ok"){*/
/* 		                	$('#roleName', editRole).val(data.role.name);*/
/* 	              			$('#new_maxPosts', editRole).val(data.role.max_posts);*/
/* 	              			$('#new_maxFbAccount', editRole).val(data.role.max_fbaccount);*/
/* 	              			$('#new_accountExpiry', editRole).val(data.role.account_expiry);*/
/* 	              			$('#max_comments', editRole).val(data.role.max_comments);*/
/* 	              			$('#max_likes', editRole).val(data.role.max_likes);*/
/* 	              			$('#join_groups', editRole).val(data.role.join_groups);*/
/* 	              			$('#invite_join_groups', editRole).val(data.role.invite_join_groups);*/
/* 	              			if(data.role.upload_videos == 1){*/
/* 			                  $('#edit_upload_videos', editRole).prop("checked",true);*/
/* 			                }*/
/* 			                if(data.role.upload_images == 1){*/
/* 			                  $('#edit_upload_images', editRole).prop("checked",true);*/
/* 			                }*/
/* 			                $('#edit_max_upload', editRole).val(data.role.max_upload);*/
/* 		                }else{*/
/* 		                	htmlData = "<ul>";*/
/* 		                	if(data.message !== null && typeof data.message === 'object'){*/
/* 								Object.keys(data.message).forEach(function(key) {*/
/* 								    htmlData += "<li>" + data.message[key] + "</li>";*/
/* 								});*/
/* 		                	}else{*/
/* 		                		htmlData += "<li>" + data.message + "</li>";*/
/* 		                	}*/
/* 							htmlData += "</ul>";*/
/* 		                	alertBox(htmlData,"danger",".editRolelerts",false,true);*/
/* 		                }*/
/* 		            },*/
/* 		            error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/* 		            complete: function(){*/
/* 		            	kp_preloader("off",'#editRoleModal .modal-body');*/
/* 		            }*/
/* 		          });*/
/* 		    });*/
/* */
/* 		    $( "#editRoleModalBtn" ).click(function(){*/
/* 	      		kp_preloader("on",'#editRoleModal .modal-body');*/
/* 	      		var editRole = $("#editRoleModal");*/
/* 	           $.ajax({*/
/* 	            url: '{{ base_url("settings/roles/update") }}',*/
/* 	            dataType: 'json',*/
/* 	            type: 'post',*/
/* 	            contentType: 'application/x-www-form-urlencoded',*/
/* 	            data: { */
/* 	            	role_id: $('#roleid', editRole).val(),*/
/* 	            	name: $('#roleName', editRole).val(),*/
/* 	            	maxPosts: $('#new_maxPosts', editRole).val(),*/
/* 	            	maxFbAccount: $('#new_maxFbAccount', editRole).val(),*/
/* 	            	max_comments: $('#max_comments', editRole).val(),*/
/* 	            	max_likes: $('#max_likes', editRole).val(),*/
/* 	            	join_groups: $('#join_groups', editRole).val(),*/
/* 	            	invite_join_groups: $('#invite_join_groups', editRole).val(),*/
/* 	            	accountExpiry: $('#new_accountExpiry', editRole).val(),*/
/* 	            	upload_videos: $('#edit_upload_videos', editRole).is(":checked") ? 1 : 0,*/
/* 		            upload_images: $('#edit_upload_images', editRole).is(":checked") ? 1 : 0,*/
/* 		            max_upload: $('#edit_max_upload', editRole).val(),*/
/* 	            	{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/* 	            },*/
/* 	            success: function( data, textStatus, jQxhr ){*/
/* 	                if(data.status == "success"){*/
/* 	                	if(data.message !== null && typeof data.message === 'object'){ */
/* 		                	htmlData = "<ul>";*/
/* 		                    Object.keys(data.message).forEach(function(key) {*/
/* 		                      htmlData += "<li>" + data.message[key] + "</li>";*/
/* 		                      });*/
/* 		                    htmlData += "</ul>";*/
/* 		               	}else{*/
/* 		                    htmlData = data.message;*/
/* 		            	}*/
/* 	                	alertBox(htmlData,"success",".editRolelerts",false,true);*/
/* 	                	$(document).on('hide.bs.modal','#editRoleModal', function () {*/
/* 	                		location.href = "{{ base_url('settings/roles') }}";*/
/* 	                	});*/
/* 	                }else{*/
/* 	                	htmlData = "<ul>";*/
/* 	                	if(data.message !== null && typeof data.message === 'object'){*/
/* 							Object.keys(data.message).forEach(function(key) {*/
/* 							    htmlData += "<li>" + data.message[key] + "</li>";*/
/* 							});*/
/* 	                	}else{*/
/* 	                		htmlData += "<li>" + data.message + "</li>";*/
/* 	                	}*/
/* 						htmlData += "</ul>";*/
/* 	                	alertBox(htmlData,"danger",".editRolelerts",false,true);*/
/* 	                }*/
/* 	            },*/
/* 	            error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/* 	            complete: function(){*/
/* 	            	kp_preloader("off",'#editRoleModal .modal-body');*/
/* 	            }*/
/* 	          });*/
/* 	      	});*/
/* */
/* 			{# Delete action #}*/
/* 		    $(".deleteRoleBtn").click(function(){*/
/* 				$("#delete_role").modal("show");*/
/* 				deleteRoleBtn = $(this);*/
/* 		    });*/
/* */
/* 		    $(".deleteBtn_role" ).click(function(){*/
/* 			    $.ajax({*/
/* 			      url: '{{ base_url("settings/roles/delete") }}',*/
/* 			      dataType: 'json',*/
/* 			      type: 'post',*/
/* 			      contentType: 'application/x-www-form-urlencoded',*/
/* 			      data: { */
/* 			      	id: deleteRoleBtn.attr('data-roleid'),*/
/* 			      	{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 			      },*/
/* 			      success: function( data, textStatus, jQxhr ){*/
/* 			        if(data.status == "success"){*/
/* 			        	alertBox(data.message,"success",".deleteAlertBox_role",false,false);*/
/* 		            	$(".deleteBtn_role").prop('disabled', true);*/
/* 			        	$(document).on('hide.bs.modal','#delete_role', function () {*/
/* 			        		location.reload();*/
/* 			        	});*/
/* 			        }else{*/
/* 			        	alertBox(data.message,"danger",".deleteAlertBox_role",false,false);*/
/* 			        }*/
/* 			      },*/
/* 			      error: function( jqXhr, textStatus, errorThrown ){ */
/* 			      	console.log(errorThrown);*/
/* 			      	alertBox("{{ l('Unable to complete your request') }}","danger",".deleteAlertBox_role",false,false);*/
/* 			      }*/
/* 			    });*/
/* */
/* 			    $('.deleteBox_content_role').html("");*/
/* 			});*/
/* */
/* 			{# Role details #}*/
/* 			$( ".roleDetailsBtn" ).click(function(){*/
/* 				kp_preloader("on",'#roleDetailsModal .modal-body');*/
/* 				var roleDetails = $("#roleDetailsModal");*/
/* 				roleDetails.modal("show");*/
/* 				$('#roleid', roleDetails).val($(this).val());*/
/* 				$('.roleDetailsSection', roleDetails).html("");*/
/* 		    	$.ajax({*/
/* 		            url: '{{ base_url("settings/roles/details") }}',*/
/* 		            dataType: 'json',*/
/* 		            type: 'post',*/
/* 		            contentType: 'application/x-www-form-urlencoded',*/
/* 		            data: { */
/* 		            	role_id: $('#roleid', roleDetails).val(),*/
/* 		            	{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/* 		            },*/
/* 		            success: function( data, textStatus, jQxhr ){*/
/* 		                if(data.status == "ok"){*/
/* 		                	var htmlData = "<ul class='list-group list-group-flush'>";*/
/* 									htmlData += "<li class='list-group-item'><strong>{{ l('Name') }}</strong> : <span class='badge'>"+data.role.name+"</span></li>";*/
/* 									*/
/* 									htmlData += "<li class='list-group-item'><strong>{{ l('Max posts') }}</strong> : ";*/
/* */
/* 									if(data.role.max_posts == -1){*/
/* 										htmlData += "<span class='badge badge-danger'>{{l('Disabled')}}</span>";*/
/* 									}else if(data.role.max_posts == 0){*/
/* 										htmlData += "<span class='badge badge-success'>{{l('Unlimited')}}</span>";*/
/* 									}else{*/
/* 										htmlData += "<span class='badge'>"+data.role.max_posts+" {{l('Per day')}}</span>";*/
/* 									}*/
/* */
/* 									htmlData += "</li>";*/
/* */
/* 									{% if KPMIsActive('auto_comment') %}*/
/* 									htmlData += "<li class='list-group-item'><strong>{{ l('Max comments') }}</strong> : ";*/
/* 									if(data.role.max_comments == -1){*/
/* 										htmlData += "<span class='badge badge-danger'>{{l('Disabled')}}";*/
/* 									}else if(data.role.max_comments == 0){*/
/* 										htmlData += "<span class='badge badge-success'>{{l('Unlimited')}}";*/
/* 									}else{*/
/* 										htmlData += "<span class='badge'>"+data.role.max_comments+" {{l('Per day')}}";*/
/* 									}*/
/* 									htmlData += "</span></li>";*/
/* 									{% endif %}*/
/* */
/* 									{% if KPMIsActive('auto_like') %}*/
/* 									htmlData += "<li class='list-group-item'><strong>{{ l('Max likes') }}</strong> :";*/
/* 									if(data.role.max_likes == -1){*/
/* 										htmlData += "<span class='badge badge-danger'>{{l('Disabled')}}";*/
/* 									}else if(data.role.max_likes == 0){*/
/* 										htmlData += "<span class='badge badge-success'>{{l('Unlimited')}}";*/
/* 									}else{*/
/* 										htmlData += "<span class='badge'>"+data.role.max_likes+" {{l('Per day')}}";*/
/* 									}*/
/* 									htmlData += "</span></li>";*/
/* 									{% endif %}*/
/* */
/* 									{% if KPMIsActive('join_groups') %}*/
/* 									htmlData += "<li class='list-group-item'><strong>{{ l('Max join groups') }}</strong> : ";*/
/* 									if(data.role.join_groups == -1){*/
/* 										htmlData += "<span class='badge badge-danger'>{{l('Disabled')}}";*/
/* 									}else if(data.role.join_groups == 0){*/
/* 										htmlData += "<span class='badge badge-success'>{{l('Unlimited')}}";*/
/* 									}else{*/
/* 										htmlData += "<span class='badge'>"+data.role.join_groups+" {{l('Per day')}}";*/
/* 									}*/
/* 									htmlData += "</span></li>";*/
/* 									{% endif %}*/
/* */
/* 									{% if KPMIsActive('invite_join_groups') %}*/
/* 									htmlData += "<li class='list-group-item'><strong>{{ l('Max invite to join groups') }}</strong> : ";*/
/* 									if(data.role.invite_join_groups == -1){*/
/* 										htmlData += "<span class='badge badge-danger'>{{l('Disabled')}}";*/
/* 									}else if(data.role.invite_join_groups == 0){*/
/* 										htmlData += "<span class='badge badge-success'>{{l('Unlimited')}}";*/
/* 									}else{*/
/* 										htmlData += "<span class='badge'>"+data.role.invite_join_groups+" {{l('Per day')}}";*/
/* 									}*/
/* 									htmlData += "</span></li>";*/
/* 									{% endif %}*/
/* */
/* 									htmlData += "<li class='list-group-item'><strong>{{ l('Max Facebook account') }}</strong> : ";*/
/* */
/* 									if(data.role.max_fbaccount == 0){*/
/* 										htmlData += "<span class='badge badge-success'>{{l('Unlimited')}}";*/
/* 									}else{*/
/* 										htmlData += "<span class='badge badge-success'>"+data.role.max_fbaccount;*/
/* 									}*/
/* */
/* 									htmlData += "</span></li>";*/
/* */
/* 									htmlData += "<li class='list-group-item'><strong>{{ l('Account Expiry') }}</strong> : <span class='badge'>";*/
/* */
/* 									if(data.role.account_expiry == 0){*/
/* 										htmlData += "{{l('Never expire')}}";*/
/* 									}else{*/
/* 										htmlData += data.role.account_expiry;*/
/* 									}*/
/* */
/* 									htmlData += "</span></li>";*/
/* */
/* 									htmlData += "<li class='list-group-item'><strong>{{ l('Can upload videos') }}</strong> : ";*/
/* 									htmlData += data.role.upload_videos == 1 ? "<span class='badge badge-success'>{{ l('Yes') }}</span>" : "<span class='badge badge-danger'>{{ l('No') }}</span>" ;*/
/* 									htmlData += "</li>";*/
/* */
/* 									htmlData += "<li class='list-group-item'><strong>{{ l('Can upload images') }}</strong> : ";*/
/* 									htmlData += data.role.upload_images == 1 ? "<span class='badge badge-success'>{{ l('Yes') }}</span>" : "<span class='badge badge-danger'>{{ l('No') }}</span>" ;*/
/* 									htmlData += "</li>";*/
/* */
/* 									htmlData += "<li class='list-group-item'><strong>{{ l('Max Upload') }}</strong> : <span class='badge'>"+data.role.max_upload+" {{ l('MB') }}</span></li>";*/
/* */
/* 	            				htmlData += "</ul>";*/
/* 		                	$('.roleDetailsSection', roleDetails).html(htmlData);*/
/* 		                }else{*/
/* 		                	htmlData = "<ul>";*/
/* 		                	if(data.message !== null && typeof data.message === 'object'){*/
/* 								Object.keys(data.message).forEach(function(key) {*/
/* 								    htmlData += "<li>" + data.message[key] + "</li>";*/
/* 								});*/
/* 		                	}else{*/
/* 		                		htmlData += "<li>" + data.message + "</li>";*/
/* 		                	}*/
/* 							htmlData += "</ul>";*/
/* 		                	alertBox(htmlData,"danger",".roleDetailsAlerts",false,true);*/
/* 		                }*/
/* 		            },*/
/* 		            error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/* 		            complete: function(){*/
/* 		            	kp_preloader("off",'#roleDetailsModal .modal-body');*/
/* 		            }*/
/* 		          });*/
/* 		    });*/
/* 		});*/
/* 	</script>*/
/* {% endblock %}*/
/* */
