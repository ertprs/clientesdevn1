<?php

/* home/groupstable.twig */
class __TwigTemplate_26577250a0ac7ff585a8a2fc5e9b35b502448fb34ebb246d92058f6f292b73e8 extends Twig_Template
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
  <div class=\"panel-body\">
  \t\t<div class=\"groupsOptions\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col col-md-2\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t";
        // line 8
        echo form_open();
        echo "
\t\t\t\t\t\t\t<select id=\"nodescategory\" name=\"nodescategory\" class=\"form-control\" onchange=\"this.form.submit()\">\t
\t\t\t\t\t\t\t\t<option value=\"-1\">-- ";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("All")), "html", null, true);
        echo " --</option>
\t\t\t\t\t  \t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nodesCategories"]) ? $context["nodesCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gc"]) {
            // line 12
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "default_nodes_category"), "method") == $this->getAttribute($context["gc"], "id", array()))) {
                echo " 
\t\t\t\t\t  \t\t\t\t\t<option value=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["gc"], "id", array()), "html", null, true);
                echo "\" selected >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gc"], "category_name", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t  \t\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t\t  \t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gc"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gc"], "category_name", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t  \t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t\t\t  \t\t</select>
\t\t\t\t\t  \t\t</form>
\t\t\t\t\t  \t\t<div class=\"input-group-btn\">
\t\t\t\t\t  \t\t\t<button type=\"button\" class='btn btn-danger' name=\"deleteCategory\" id=\"deleteCategory\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "default_nodes_category"), "method"), "html", null, true);
        echo "\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Delete current category")), "html", null, true);
        echo "\">
\t\t\t\t\t  \t\t\t\t<i class=\"fa fa-fw fa-trash\"></i>
\t\t\t\t\t  \t\t\t</button>
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t  \t\t";
        // line 25
        if (($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(), "method") && ($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "default_nodes_category"), "method") > 0))) {
            // line 26
            echo "\t\t\t\t\t  \t\t<div class=\"input-group-btn\">
\t\t\t\t\t  \t\t\t<button type=\"button\" data-fbaccount=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "fb_id"), "method"), "html", null, true);
            echo "\" data-category=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "default_nodes_category"), "method"), "html", null, true);
            echo "\" class='btn btn-primary' name=\"refreshCategory\" id=\"refreshCategory\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Refresh category")), "html", null, true);
            echo "\">
\t\t\t\t\t  \t\t\t\t<i class=\"fa fa-fw fa-refresh\"></i>
\t\t\t\t\t  \t\t\t</button>
\t\t\t\t\t  \t\t</div>
\t\t\t\t\t  \t\t";
        }
        // line 32
        echo "\t\t\t\t  \t\t</div>
\t\t  \t\t\t</div>
\t\t  \t\t</div>
\t\t\t\t<div class=\"col col-md-10\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button type=\"button\" id=\"createNewCatBtn\" class=\"btn btn-primary\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Create New category")), "html", null, true);
        echo "\"/><i class=\"fa fa-fw fa-plus\"></i> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Create category")), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button type=\"button\" id=\"addSelectedNodes\" class=\"btn btn-primary\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add selected nodes to a category")), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<span class=\"visible-lg\">
\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-plus\"></i> ";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add node")), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"hidden-lg\"><i class=\"fa fa-fw fa-plus\"></i></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t";
        // line 49
        if (($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(), "method") && ($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "default_nodes_category"), "method") > 0))) {
            // line 50
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"deleteSelectedNodes\"  class=\"btn btn-danger\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
            // line 51
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Remove selected nodes")), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t<span class=\"visible-lg\"><i class=\"fa fa-fw fa-trash\"></i> ";
            // line 52
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Remove node")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"hidden-lg\"><i class=\"fa fa-fw fa-trash\"></i></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 57
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button type=\"button\" id=\"unHideSelectedNodes\"  class=\"btn btn-primary\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
        // line 59
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("unHide selected nodes")), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<span class=\"visible-lg\"><i class=\"fa fa-fw fa-ban\"></i> ";
        // line 60
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("unHide node")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t<span class=\"hidden-lg\"><i class=\"fa fa-fw fa-ban\"></i></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button type=\"button\" id=\"hideSelectedNodes\" class=\"btn btn-danger\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
        // line 66
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Hide selected nodes")), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<span class=\"visible-lg\"><i class=\"fa fa-fw fa-ban\"></i> ";
        // line 67
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Hide node")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t<span class=\"hidden-lg\"><i class=\"fa fa-fw fa-ban\"></i></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"panel panel-default\">
  <div class=\"panel-body\">
  \t\t<div class=\"groupsOptions\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button type=\"button\" id=\"exportGroupsCSV\" class=\"btn btn-primary\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
        // line 83
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Export current groups IDs")), "html", null, true);
        echo "\"/><i class=\"fa fa-file fa-fw\" aria-hidden=\"true\"></i> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Export Groups to CSV")), "html", null, true);
        echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button type=\"button\" id=\"countSelectedNodes\" style=\"display: none\" class=\"btn btn-primary\"/><i class=\"fa fa-check fa-fw\" aria-hidden=\"true\"></i> <span class=\"groups\">0</span> ";
        // line 87
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Groups")), "html", null, true);
        echo ", <span class=\"pages\">0</span> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Pages")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total")), "html", null, true);
        echo " : <span class=\"total\">0</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col col-md-6\">
\t\t\t\t\t<div class=\"form-group groupVtoggle\">
\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"checkbox-style\" id=\"showGroups\" name=\"showGroups\" aria-label=\"Unique post\" ";
        // line 94
        if (($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_groups", array(), "array") == 1)) {
            echo "checked ";
        }
        echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"showGroups\" class=\"input-text\">";
        // line 97
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Groups")), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"checkbox-style\" id=\"showPages\" name=\"showPages\" aria-label=\"";
        // line 101
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Pages")), "html", null, true);
        echo "\" ";
        if (($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_pages", array(), "array") == 1)) {
            echo "checked ";
        }
        echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"showPages\" class=\"input-text\">";
        // line 104
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Pages")), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"checkbox-style\" id=\"toggleHiddenNodes\" name=\"toggleHiddenNodes\" aria-label=\"";
        // line 108
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Show Hidden nodes")), "html", null, true);
        echo "\" ";
        if (($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_hidden_nodes", array(), "array") == 1)) {
            echo "checked ";
        }
        echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"toggleHiddenNodes\" class=\"input-text\">";
        // line 111
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Show Hidden nodes")), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"panel panel-default has-responsive-table\">
\t";
        // line 120
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "disable_dt_plugin", array(), "array") == 1)) {
            // line 121
            echo "\t<div class=\"panel-heading\">
\t\t<input type=\"text\" id=\"nodesFilterFiled\" class=\"form-control\" onkeyup=\"NodesFilter()\" placeholder=\"";
            // line 122
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Search for groups and pages")), "html", null, true);
            echo "\">
\t</div>
\t";
        }
        // line 125
        echo "  \t<div class=\"panel-body\">
\t\t<table class=\"table table-bordered table-striped dataTable tablesorter\" id=\"groupsDataTable\" width=\"100%\">
\t\t\t<thead>
\t\t\t\t";
        // line 128
        $context["checked"] = "";
        // line 129
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "UserDefaultFbAccount", array(), "method")) {
            // line 130
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td>";
            // line 132
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Timeline")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td colspan='3'>";
            // line 133
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("VIEW_PROFILE")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 134
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_STATUS")), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class='groupName' id='me'>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type='checkbox' class='fbnode checkbox checkbox-style' name='selectGroup[0]' id='selectgroup_me' value='me' ";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["checked"]) ? $context["checked"] : null), "html", null, true);
            echo ">
\t\t\t\t\t\t\t<label for='selectgroup_me'></label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class='groupTitle' id='group_me'>";
            // line 141
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "firstname"), "method") . " ") . $this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "lastname"), "method")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td colspan='3'><a href='https://www.facebook.com/";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "UserDefaultFbAccount", array(), "method"), "html", null, true);
            echo "' target='_blank'>
\t\t\t\t\t\t\t<i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>&nbsp; ";
            // line 143
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("VIEW_PROFILE")), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<span class='postStatus_me postStatus'></span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 150
        echo "\t\t\t<tr class=\"thNodes\">
\t\t\t\t<th width=\"20px\" class=\"no-sort\">
\t\t\t\t\t<input type='checkbox' id=\"checkbox-all\" class=\"check-all checkbox-style\" name='selectAllGroup' ";
        // line 152
        if (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("selectAllGroup"))) {
            echo "checked";
        }
        echo ">
\t\t\t\t\t<label for=\"checkbox-all\"></label>
\t\t\t\t</th>
\t\t\t\t<th>";
        // line 155
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("NODE_NAME")), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 156
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("NODE_TYPE")), "html", null, true);
        echo "</th>
\t\t\t\t<th>
\t\t\t\t\t<span class=\"hidden-xs\">
\t\t\t\t\t";
        // line 159
        if (($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_pages", array(), "array") == 1)) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Likes")), "html", null, true);
        }
        // line 160
        echo "\t\t\t\t\t";
        if ((($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_pages", array(), "array") == 1) && ($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_groups", array(), "array") == 1))) {
            echo "/";
        }
        // line 161
        echo "\t\t\t\t\t";
        if (($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_groups", array(), "array") == 1)) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Members")), "html", null, true);
        }
        // line 162
        echo "\t\t\t\t\t</span>
\t\t\t\t</th>
\t\t\t\t<th>";
        // line 164
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("PRIVACY")), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 165
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_STATUS")), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 169
        $context["privacy"] = array("OPEN" => "eye", "CLOSED" => "eye-slash", "SECRET" => "archive");
        // line 170
        echo "\t\t\t
\t\t\t\t";
        // line 171
        if ((isset($context["userFbNodes"]) ? $context["userFbNodes"] : null)) {
            // line 172
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userFbNodes"]) ? $context["userFbNodes"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
                // line 173
                echo "\t\t\t\t\t\t";
                $context["nodeId"] = $this->getAttribute($context["node"], "id", array());
                // line 174
                echo "\t\t\t\t\t\t";
                $context["nodeName"] = $this->getAttribute($context["node"], "name", array());
                // line 175
                echo "\t\t\t\t\t\t";
                $context["page_likes"] = "";
                // line 176
                echo "
\t\t\t\t\t\t";
                // line 177
                if ( !twig_test_empty($this->getAttribute($context["node"], "privacy", array()))) {
                    // line 178
                    echo "\t\t\t\t\t\t\t";
                    $context["nodeType"] = "Group";
                    // line 179
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 180
                    echo "\t\t\t\t\t\t\t";
                    $context["nodeType"] = "Page";
                    // line 181
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["node"], "likes", array())) {
                        // line 182
                        echo "\t\t\t\t\t\t\t\t";
                        $context["page_likes"] = twig_number_format_filter($this->env, $this->getAttribute($context["node"], "likes", array()));
                        // line 183
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 184
                    echo "\t\t\t\t\t\t ";
                }
                // line 185
                echo "
\t\t\t\t\t\t";
                // line 186
                $context["nodePrivacy"] = (($this->getAttribute($context["node"], "privacy", array())) ? ($this->getAttribute($context["node"], "privacy", array())) : (""));
                // line 187
                echo "
\t\t\t\t\t\t";
                // line 188
                if ($this->getAttribute(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("selectGroup")), (isset($context["i"]) ? $context["i"] : null), array(), "array")) {
                    // line 189
                    echo "\t\t\t\t\t\t\t";
                    $context["checked"] = "checked='checked'";
                    // line 190
                    echo "\t\t\t\t\t\t";
                }
                // line 191
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t<tr class='groupName ";
                // line 192
                echo twig_escape_filter($this->env, (isset($context["nodeType"]) ? $context["nodeType"] : null), "html", null, true);
                echo "Type' id='";
                echo twig_escape_filter($this->env, (isset($context["nodeId"]) ? $context["nodeId"] : null), "html", null, true);
                echo "'>

\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type='checkbox' class='fbnode checkbox checkbox-style' name='selectGroup[";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "]' id='selectgroup_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["node"], "id", array()), "html", null, true);
                echo "' value='";
                echo twig_escape_filter($this->env, (isset($context["nodeId"]) ? $context["nodeId"] : null), "html", null, true);
                echo "' ";
                echo twig_escape_filter($this->env, (isset($context["checked"]) ? $context["checked"] : null), "html", null, true);
                echo ">
\t\t\t\t\t\t\t\t<label for='selectgroup_";
                // line 196
                echo twig_escape_filter($this->env, (isset($context["nodeId"]) ? $context["nodeId"] : null), "html", null, true);
                echo "'></label>
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td class='groupTitle' id='group_";
                // line 199
                echo twig_escape_filter($this->env, (isset($context["nodeId"]) ? $context["nodeId"] : null), "html", null, true);
                echo "'>
\t\t\t\t\t\t\t\t<input type='hidden' name='selectGroupName[";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "]' value='";
                echo twig_escape_filter($this->env, (isset($context["nodeName"]) ? $context["nodeName"] : null), "html", null, true);
                echo "' />
\t\t\t\t\t\t\t\t<span ";
                // line 201
                if (((isset($context["less_data"]) ? $context["less_data"] : null) == false)) {
                    echo "title=\"";
                    echo twig_escape_filter($this->env, (isset($context["nodeName"]) ? $context["nodeName"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["nodeName"]) ? $context["nodeName"] : null), 0, 60), "html", null, true);
                if ((twig_length_filter($this->env, (isset($context["nodeName"]) ? $context["nodeName"] : null)) > 60)) {
                    echo "...";
                }
                // line 202
                echo "
\t\t\t\t\t\t\t\t<a href='https://fb.com/";
                // line 203
                echo twig_escape_filter($this->env, (isset($context["nodeId"]) ? $context["nodeId"] : null), "html", null, true);
                echo "' target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa fa-external-link\"></i></a></span>

\t\t\t\t\t\t\t\t";
                // line 206
                if (($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_hidden_nodes", array(), "array") == 1)) {
                    // line 207
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (((isset($context["nodeType"]) ? $context["nodeType"] : null) == "Group")) {
                        // line 208
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context["hiddenNodesIDs"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute((isset($context["hiddenNodes"]) ? $context["hiddenNodes"] : null), "row", array(0 => "hidden_groups"), "method"), true));
                        // line 209
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 210
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context["hiddenNodesIDs"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute((isset($context["hiddenNodes"]) ? $context["hiddenNodes"] : null), "row", array(0 => "hidden_pages"), "method"), true));
                        // line 211
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 212
                    echo "
\t\t\t\t\t\t\t\t\t<span class=\"HiddenNodeBadge\">
\t\t\t\t\t\t\t\t\t";
                    // line 214
                    if (twig_in_filter((isset($context["nodeId"]) ? $context["nodeId"] : null), (isset($context["hiddenNodesIDs"]) ? $context["hiddenNodesIDs"] : null))) {
                        // line 215
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("hidden")), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 217
                    echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                }
                // line 219
                echo "
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td class=\"nodeType\">";
                // line 222
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array((isset($context["nodeType"]) ? $context["nodeType"] : null))), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"count\">";
                // line 223
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["node"], "members", array()), "summary", array()), "total_count", array()), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["page_likes"]) ? $context["page_likes"] : null), "html", null, true);
                echo "</td>

\t\t\t\t\t\t\t<td class=\"privacyAndLikes\">
\t\t\t\t\t\t\t\t";
                // line 226
                if ( !twig_test_empty($this->getAttribute($context["node"], "privacy", array()))) {
                    // line 227
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["privacy"]) ? $context["privacy"] : null), (isset($context["nodePrivacy"]) ? $context["nodePrivacy"] : null), array(), "array"), "html", null, true);
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;<span class=\"hidden-xs\">";
                    // line 228
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array((isset($context["nodePrivacy"]) ? $context["nodePrivacy"] : null))), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t<input type='hidden' name='selectGroupPrivacy[";
                    // line 229
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "]' value='";
                    echo twig_escape_filter($this->env, (isset($context["nodePrivacy"]) ? $context["nodePrivacy"] : null), "html", null, true);
                    echo "'>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 231
                    echo "\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t";
                }
                // line 233
                echo "\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class='postStatus_";
                // line 236
                echo twig_escape_filter($this->env, (isset($context["nodeId"]) ? $context["nodeId"] : null), "html", null, true);
                echo " postStatus'></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo "\t\t\t\t";
        }
        // line 241
        echo "\t\t\t</tbody>
\t\t</table>
<div id=\"addToCategoryModal\" class=\"modal fade\" role=\"dialog\" data-backdrop=\"static\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 248
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ADD_GROUP_TO_CATEGORY")), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"addCateMsgBoxModal\"></div>
\t\t\t\t<select class=\"form-control nodescategory\">
\t\t\t\t\t<option value=\"\">-- ";
        // line 253
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("All")), "html", null, true);
        echo " --</option>
\t\t  \t\t\t";
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nodesCategories"]) ? $context["nodesCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gc"]) {
            // line 255
            echo "\t\t  \t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gc"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gc"], "category_name", array()), "html", null, true);
            echo "</option>\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 260
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("CLOSE")), "html", null, true);
        echo "</button>
\t\t\t\t<button onclick=\"return false;\" id=\"modalAddCateBtn\" class=\"btn btn-primary\">";
        // line 261
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ADD")), "html", null, true);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>
";
        // line 267
        $this->loadTemplate("categories/create_category.twig", "home/groupstable.twig", 267)->display($context);
        // line 268
        echo "<script>
\t\$(function(){

\t\t";
        // line 272
        echo "\t\t\$('#checkbox-all,.fbnode').on('change',function(){
\t\t\tvar countPages = 0;
\t\t\tvar countGroups = 0;
\t\t\t\$('.GroupType:visible .fbnode:checked').each(function(){
\t\t\t\tif(\$(this).val() != \"on\"){
\t\t\t\t\tcountGroups++;
\t\t\t\t}
\t\t    });
\t\t    \$('.PageType:visible .fbnode:checked').each(function(){
\t\t\t\tif(\$(this).val() != \"on\"){
\t\t\t\t\tcountPages++;
\t\t\t\t}
\t\t    });
\t\t    \$('#countSelectedNodes .pages').text(countPages);
\t\t    \$('#countSelectedNodes .groups').text(countGroups);
\t\t    \$('#countSelectedNodes .total').text(countPages+countGroups);
\t\t    \$('#countSelectedNodes').show();
\t\t});

\t\t\$(\"#exportGroupsCSV\").on(\"click\",function(){
\t\t\tvar csvContent = 'group';
\t\t\tvar totalGroups = 0;
\t\t    \$('.GroupType:visible .fbnode:checked').each(function(){
\t\t\t\tif(\$(this).val() != \"on\"){
\t\t\t\t\tcsvContent += '\\r\\n'+\$(this).val()+',';
\t\t\t\t\ttotalGroups++;
\t\t\t\t}
\t\t    });

\t\t    if(totalGroups ==0){
\t\t    \talertBox(\"";
        // line 302
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No groups has been selected")), "html", null, true);
        echo "\",\"danger\",false,true,true);
\t\t    }else{
\t\t    \talertBox(totalGroups+\" ";
        // line 304
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Groups has been exported.")), "html", null, true);
        echo "\",\"success\",false,true,true);
\t\t    \texportToCSV(csvContent, 'groups-'+moment().format('DD-MMM-YYYY')+'.csv', 'text/csv;encoding:utf-8');
\t\t    }
\t\t});

\t\t";
        // line 310
        echo "\$('.groupsOptions').on('click','#refreshCategory', function(e) {
\t\t\te.preventDefault();
\t\t\t\$(\"#refreshCategory\").prop('disabled', true);
\t\t\tvar fbaccount = \$(this).data(\"fbaccount\");
\t\t\tvar category = \$(this).data(\"category\");
\t\t\tkp_preloader(\"on\");
\t\t\t\$.ajax({
\t\t      url: '";
        // line 317
        echo twig_escape_filter($this->env, base_url("nodes_categories/refresh/"), "html", null, true);
        echo "'+fbaccount+\"/\"+category,
\t\t      dataType: 'json',
\t\t      type: 'GET',
\t\t      contentType: 'application/x-www-form-urlencoded',
\t\t      success: function( data, textStatus, jQxhr ){
\t\t      \tif(data.status == \"ok\"){
                  if(data.message !== null && typeof data.message === 'object'){
                    htmlData = \"<ul>\";
                    Object.keys(data.message).forEach(function(key) {
                        htmlData += \"<li>\" + data.message[key] + \"</li>\";
                    });
                    htmlData += \"</ul>\";
                    
                  }else{
                    htmlData = data.message;
                  }
                  \tsetTimeout(function(){
                  \t\twindow.location.replace('";
        // line 334
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "'); 
                  \t}, 1000);
                \talertBox(htmlData,\"success\",false,true,true)
                }else{
                  if(data.message !== null && typeof data.message === 'object'){
                    htmlData = \"<ul>\";
                    Object.keys(data.message).forEach(function(key) {
                        htmlData += \"<li>\" + data.message[key] + \"</li>\";
                    });
                    htmlData += \"</ul>\";
                  }else{
                    htmlData = data.message;
                  }
                  alertBox(htmlData,\"danger\",false,false,true);
                }
\t\t        \$(\"#refreshCategory\").prop('disabled', false);
\t\t      },
\t\t      error: function( jqXhr, textStatus, errorThrown ){ 
\t\t      \tconsole.log(errorThrown);
\t\t      \talertBox(\"";
        // line 353
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request, Please try again")), "html", null, true);
        echo "\",\"danger\",true,false,true);
\t\t      \t\$(\"#refreshCategory\").prop('disabled', false);
\t\t      },
\t\t      complete: function(){kp_preloader(\"off\");}
\t\t    });
\t\t});

\t\t";
        // line 361
        echo "\t\t\$('.groupsOptions').on('click','#deleteCategory', function(e) {
\t\t\te.preventDefault();
\t\t\t\$(\"#deleteCategory\").prop('disabled', true);
\t\t\t\$.ajax({
\t\t      url: '";
        // line 365
        echo twig_escape_filter($this->env, base_url("nodes_categories/delete_category"), "html", null, true);
        echo "',
\t\t      dataType: 'json',
\t\t      type: 'post',
\t\t      contentType: 'application/x-www-form-urlencoded',
\t\t      data: { 
\t\t      \tcategoryID: \$(\"#deleteCategory\").val(),
\t\t\t\t";
        // line 371
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo " : getCookie(\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "\"),
\t\t      },
\t\t      success: function( data, textStatus, jQxhr ){
\t\t      \tif(data.status == \"success\"){
                  if(data.message !== null && typeof data.message === 'object'){
                    htmlData = \"<ul>\";
                    Object.keys(data.message).forEach(function(key) {
                        htmlData += \"<li>\" + data.message[key] + \"</li>\";
                    });
                    htmlData += \"</ul>\";
                    
                  }else{
                    htmlData = data.message;
                  }
                  \tsetTimeout(function(){
                  \t\twindow.location.replace('";
        // line 386
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "'); 
                  \t}, 1000);
                \talertBox(htmlData,\"success\",false,true,true)
                }else{
                  if(data.message !== null && typeof data.message === 'object'){
                    htmlData = \"<ul>\";
                    Object.keys(data.message).forEach(function(key) {
                        htmlData += \"<li>\" + data.message[key] + \"</li>\";
                    });
                    htmlData += \"</ul>\";
                  }else{
                    htmlData = data.message;
                  }
                  alertBox(htmlData,\"danger\",false,false,true);
                }

\t\t        \$(\"#deleteCategory\").prop('disabled', false);
\t\t        \t
\t\t      },
\t\t      error: function( jqXhr, textStatus, errorThrown ){ 
\t\t      \tconsole.log(errorThrown);
\t\t      \talertBox(\"";
        // line 407
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request, Please try again")), "html", null, true);
        echo "\",\"danger\",true,false,true);
\t\t      \t\$(\"#deleteCategory\").prop('disabled', false);
\t\t      }
\t\t    });
\t\t});\t

\t\t";
        // line 414
        echo "\t\t\$('.groupsOptions').on('click','#hideSelectedNodes', function() {
\t\t\tnodes = [];
\t\t\t// Get all checked nodes
\t\t\t\$('.groupName:visible .fbnode:checked').each(function(){
\t\t\t\tnodes.push(\$(this).val());
\t\t\t});
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 421
        echo twig_escape_filter($this->env, base_url("settings/fb_accounts/hide_nodes"), "html", null, true);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: {
\t\t\t\t\tnodes: JSON.stringify(nodes),
\t\t\t\t\t";
        // line 427
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t\t},
\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t\tif(data.response == \"ok\"){
\t\t\t\t\t\tfor (var i = 0; i < nodes.length; i++ ) {
\t\t\t\t\t\t\t";
        // line 432
        if (($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_hidden_nodes", array(), "array") == 0)) {
            // line 433
            echo "\t\t\t\t\t\t\t\t\$( \"#\" + nodes[i] ).css('background','#ffcccc');
\t\t\t\t\t\t\t\t\$( \"#\" + nodes[i] ).fadeOut(500, function() { \$(this).remove(); });
\t\t\t\t\t\t\t";
        } else {
            // line 436
            echo "\t\t\t\t\t\t\t\$( \"#\" + nodes[i] ).find(\".HiddenNodeBadge\").fadeIn(500, function() { \$(this).html(\"<span class='badge badge-danger HiddenNodeBadge'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("hidden")), "html", null, true);
            echo "</span>\"); });
\t\t\t\t\t\t\t";
        }
        // line 438
        echo "\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t  console.log(errorThrown);
\t\t\t\t  alertBox('";
        // line 443
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "',\"danger\",true,true);
\t\t\t\t}
\t\t\t});
\t\t});

\t\t";
        // line 449
        echo "\t\t\$('.groupsOptions').on('click','#unHideSelectedNodes', function() {
\t\t\tnodes = [];
\t\t\t// Get all checked nodes
\t\t\t\$('.groupName:visible .fbnode:checked').each(function(){
\t\t\t\tnodes.push(\$(this).val());
\t\t\t});
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 456
        echo twig_escape_filter($this->env, base_url("settings/fb_accounts/unhide_nodes"), "html", null, true);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: {
\t\t\t\t\tnodes: JSON.stringify(nodes),
\t\t\t\t\t";
        // line 462
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t\t},
\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t\tif(data.response == \"ok\"){
\t\t\t\t\t\tfor (var i = 0; i < nodes.length; i++ ) {
\t\t\t\t\t\t\t\$( \"#\" + nodes[i] ).find(\".HiddenNodeBadge span\").fadeOut(100, function() { \$(this).remove(); });
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t  console.log(errorThrown);
\t\t\t\t  alertBox('";
        // line 473
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "',\"danger\",true,true);
\t\t\t\t}
\t\t\t});
\t\t});


\t\t\$('#toggleHiddenNodes').on('click', function() {
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 481
        echo twig_escape_filter($this->env, base_url("home/toggleHiddenNodes"), "html", null, true);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: {
\t\t\t\t\tstatus: \$('#toggleHiddenNodes').is(\":checked\") ? 1 : 0,
\t\t\t\t\t";
        // line 487
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t\t},
\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t\tif(data.status == \"ok\"){
\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t  console.log(errorThrown);
\t\t\t\t  alertBox('";
        // line 496
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "',\"danger\",true,true);
\t\t\t\t}
\t\t\t});
\t\t});

\t\t\$('#showGroups').on('click', function() {
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 503
        echo twig_escape_filter($this->env, base_url("home/toggleShowGroups"), "html", null, true);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: {
\t\t\t\t\tstatus: \$('#showGroups').is(\":checked\") ? 1 : 0,
\t\t\t\t\t";
        // line 509
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t\t},
\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t\tif(data.status == \"ok\"){
\t\t\t\t\t\tif(\$('#showGroups').is(\":checked\")){
\t\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\$(\".GroupType\").remove();
\t\t\t\t\t\t\t\$(\".groupsCount\").html(\"0\");
\t\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t  console.log(errorThrown);
\t\t\t\t  alertBox('";
        // line 524
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "',\"danger\",true,true);
\t\t\t\t}
\t\t\t});
\t\t});

\t\t\$('#showPages').on('click', function() {
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 531
        echo twig_escape_filter($this->env, base_url("home/toggleShowPages"), "html", null, true);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: {
\t\t\t\t\tstatus: \$('#showPages').is(\":checked\") ? 1 : 0,
\t\t\t\t\t";
        // line 537
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t\t},
\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t\tif(data.status == \"ok\"){
\t\t\t\t\t\tif(\$('#showPages').is(\":checked\") || !\$('#showGroups').is(\":checked\")){
\t\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\$(\".PageType\").remove();
\t\t\t\t\t\t\t\$(\".pagesCount\").html(\"0\");
\t\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t  console.log(errorThrown);
\t\t\t\t  alertBox('";
        // line 552
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "',\"danger\",true,true);
\t\t\t\t}
\t\t\t});
\t\t});

\t});\t

\t</script>
</div>";
    }

    public function getTemplateName()
    {
        return "home/groupstable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1044 => 552,  1024 => 537,  1015 => 531,  1005 => 524,  985 => 509,  976 => 503,  966 => 496,  952 => 487,  943 => 481,  932 => 473,  916 => 462,  907 => 456,  898 => 449,  890 => 443,  883 => 438,  877 => 436,  872 => 433,  870 => 432,  860 => 427,  851 => 421,  842 => 414,  833 => 407,  809 => 386,  789 => 371,  780 => 365,  774 => 361,  764 => 353,  742 => 334,  722 => 317,  713 => 310,  705 => 304,  700 => 302,  668 => 272,  663 => 268,  661 => 267,  652 => 261,  648 => 260,  643 => 257,  632 => 255,  628 => 254,  624 => 253,  616 => 248,  607 => 241,  604 => 240,  586 => 236,  581 => 233,  577 => 231,  570 => 229,  566 => 228,  561 => 227,  559 => 226,  552 => 223,  548 => 222,  543 => 219,  539 => 217,  533 => 215,  531 => 214,  527 => 212,  524 => 211,  521 => 210,  518 => 209,  515 => 208,  512 => 207,  510 => 206,  504 => 203,  501 => 202,  490 => 201,  484 => 200,  480 => 199,  474 => 196,  464 => 195,  456 => 192,  453 => 191,  450 => 190,  447 => 189,  445 => 188,  442 => 187,  440 => 186,  437 => 185,  434 => 184,  431 => 183,  428 => 182,  425 => 181,  422 => 180,  419 => 179,  416 => 178,  414 => 177,  411 => 176,  408 => 175,  405 => 174,  402 => 173,  384 => 172,  382 => 171,  379 => 170,  377 => 169,  370 => 165,  366 => 164,  362 => 162,  357 => 161,  352 => 160,  348 => 159,  342 => 156,  338 => 155,  330 => 152,  326 => 150,  316 => 143,  312 => 142,  308 => 141,  302 => 138,  295 => 134,  291 => 133,  287 => 132,  283 => 130,  280 => 129,  278 => 128,  273 => 125,  267 => 122,  264 => 121,  262 => 120,  250 => 111,  240 => 108,  233 => 104,  223 => 101,  216 => 97,  208 => 94,  194 => 87,  185 => 83,  166 => 67,  162 => 66,  153 => 60,  149 => 59,  145 => 57,  137 => 52,  133 => 51,  130 => 50,  128 => 49,  119 => 43,  114 => 41,  105 => 37,  98 => 32,  86 => 27,  83 => 26,  81 => 25,  72 => 21,  67 => 18,  61 => 17,  53 => 15,  46 => 13,  41 => 12,  37 => 11,  33 => 10,  28 => 8,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="panel-body">*/
/*   		<div class="groupsOptions">*/
/* 			<div class="row">*/
/* 				<div class="col col-md-2">*/
/* 					<div class="form-group">*/
/* 						<div class="input-group">*/
/* 							{{ form_open() }}*/
/* 							<select id="nodescategory" name="nodescategory" class="form-control" onchange="this.form.submit()">	*/
/* 								<option value="-1">-- {{ l('All') }} --</option>*/
/* 					  			{% for gc in nodesCategories %}*/
/* 									{% if fbaccountDetails.row('default_nodes_category') == gc.id %} */
/* 					  					<option value="{{ gc.id }}" selected >{{ gc.category_name }}</option>*/
/* 					  				{% else %}*/
/* 					  					<option value="{{ gc.id }}">{{ gc.category_name }}</option>*/
/* 					  				{% endif %}*/
/* 								{% endfor %}*/
/* 					  		</select>*/
/* 					  		</form>*/
/* 					  		<div class="input-group-btn">*/
/* 					  			<button type="button" class='btn btn-danger' name="deleteCategory" id="deleteCategory" value="{{ fbaccountDetails.row('default_nodes_category') }}" data-toggle="kp_tooltip" data-placement="top" title="{{ l('Delete current category') }}">*/
/* 					  				<i class="fa fa-fw fa-trash"></i>*/
/* 					  			</button>*/
/* 					  		</div>*/
/* 					  		{% if fbaccountDetails.row() and fbaccountDetails.row('default_nodes_category') > 0 %}*/
/* 					  		<div class="input-group-btn">*/
/* 					  			<button type="button" data-fbaccount="{{fbaccountDetails.row('fb_id')}}" data-category="{{fbaccountDetails.row('default_nodes_category')}}" class='btn btn-primary' name="refreshCategory" id="refreshCategory" data-toggle="kp_tooltip" data-placement="top" title="{{ l('Refresh category') }}">*/
/* 					  				<i class="fa fa-fw fa-refresh"></i>*/
/* 					  			</button>*/
/* 					  		</div>*/
/* 					  		{% endif %}*/
/* 				  		</div>*/
/* 		  			</div>*/
/* 		  		</div>*/
/* 				<div class="col col-md-10">*/
/* 					<div class="form-group">*/
/* 						<button type="button" id="createNewCatBtn" class="btn btn-primary" data-toggle="kp_tooltip" data-placement="top" title="{{ l('Create New category') }}"/><i class="fa fa-fw fa-plus"></i> {{ l('Create category') }}</button>*/
/* 					</div>*/
/* */
/* 					<div class="form-group">*/
/* 						<button type="button" id="addSelectedNodes" class="btn btn-primary" data-toggle="kp_tooltip" data-placement="top" title="{{ l('Add selected nodes to a category') }}"/>*/
/* 						<span class="visible-lg">*/
/* 							<i class="fa fa-fw fa-plus"></i> {{ l('Add node') }}*/
/* 						</span>*/
/* 						<span class="hidden-lg"><i class="fa fa-fw fa-plus"></i></span>*/
/* 						</button>*/
/* 					</div>*/
/* 				*/
/* 					{% if fbaccountDetails.row() and fbaccountDetails.row('default_nodes_category') > 0 %}*/
/* 						<div class="form-group">*/
/* 							<button type="button" id="deleteSelectedNodes"  class="btn btn-danger" data-toggle="kp_tooltip" data-placement="top" title="{{ l('Remove selected nodes') }}"/>*/
/* 							<span class="visible-lg"><i class="fa fa-fw fa-trash"></i> {{ l('Remove node') }}</span>*/
/* 							<span class="hidden-lg"><i class="fa fa-fw fa-trash"></i></span>*/
/* 							</button>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					<div class="form-group">*/
/* 						<button type="button" id="unHideSelectedNodes"  class="btn btn-primary" data-toggle="kp_tooltip" data-placement="top" title="{{ l('unHide selected nodes') }}"/>*/
/* 						<span class="visible-lg"><i class="fa fa-fw fa-ban"></i> {{ l('unHide node') }}</span>*/
/* 						<span class="hidden-lg"><i class="fa fa-fw fa-ban"></i></span>*/
/* 						</button>*/
/* 					</div>*/
/* 					*/
/* 					<div class="form-group">*/
/* 						<button type="button" id="hideSelectedNodes" class="btn btn-danger" data-toggle="kp_tooltip" data-placement="top" title="{{ l('Hide selected nodes') }}"/>*/
/* 						<span class="visible-lg"><i class="fa fa-fw fa-ban"></i> {{ l('Hide node') }}</span>*/
/* 						<span class="hidden-lg"><i class="fa fa-fw fa-ban"></i></span>*/
/* 						</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="panel panel-default">*/
/*   <div class="panel-body">*/
/*   		<div class="groupsOptions">*/
/* 			<div class="row">*/
/* 				<div class="col col-md-6">*/
/* 					<div class="form-group">*/
/* 						<button type="button" id="exportGroupsCSV" class="btn btn-primary" data-toggle="kp_tooltip" data-placement="top" title="{{ l('Export current groups IDs') }}"/><i class="fa fa-file fa-fw" aria-hidden="true"></i> {{ l('Export Groups to CSV') }}*/
/* 						</button>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<button type="button" id="countSelectedNodes" style="display: none" class="btn btn-primary"/><i class="fa fa-check fa-fw" aria-hidden="true"></i> <span class="groups">0</span> {{ l('Groups') }}, <span class="pages">0</span> {{ l('Pages') }}, {{l('Total')}} : <span class="total">0</span>*/
/* 						</button>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col col-md-6">*/
/* 					<div class="form-group groupVtoggle">*/
/* 						<label class="switch">*/
/* 							<input type="checkbox" class="checkbox-style" id="showGroups" name="showGroups" aria-label="Unique post" {% if user_options['show_groups'] == 1 %}checked {% endif %} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="showGroups" class="input-text">{{ l('Groups') }}</label>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="switch">*/
/* 							<input type="checkbox" class="checkbox-style" id="showPages" name="showPages" aria-label="{{l('Pages')}}" {% if user_options['show_pages'] == 1 %}checked {% endif %} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="showPages" class="input-text">{{ l('Pages') }}</label>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="switch">*/
/* 							<input type="checkbox" class="checkbox-style" id="toggleHiddenNodes" name="toggleHiddenNodes" aria-label="{{l('Show Hidden nodes')}}" {% if user_options['show_hidden_nodes'] == 1 %}checked {% endif %} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="toggleHiddenNodes" class="input-text">{{ l('Show Hidden nodes') }}</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="panel panel-default has-responsive-table">*/
/* 	{% if app_settings['disable_dt_plugin'] == 1 %}*/
/* 	<div class="panel-heading">*/
/* 		<input type="text" id="nodesFilterFiled" class="form-control" onkeyup="NodesFilter()" placeholder="{{ l('Search for groups and pages') }}">*/
/* 	</div>*/
/* 	{% endif %}*/
/*   	<div class="panel-body">*/
/* 		<table class="table table-bordered table-striped dataTable tablesorter" id="groupsDataTable" width="100%">*/
/* 			<thead>*/
/* 				{% set checked = "" %}*/
/* 				{% if fbaccount.UserDefaultFbAccount() %}*/
/* 					<tr>*/
/* 						<td></td>*/
/* 						<td>{{ l('Timeline') }}</td>*/
/* 						<td colspan='3'>{{ l('VIEW_PROFILE') }}</td>*/
/* 						<td>{{ l('POST_STATUS') }}</td>*/
/* 					</tr>*/
/* 					<tr class='groupName' id='me'>*/
/* 						<td>*/
/* 							<input type='checkbox' class='fbnode checkbox checkbox-style' name='selectGroup[0]' id='selectgroup_me' value='me' {{ checked }}>*/
/* 							<label for='selectgroup_me'></label>*/
/* 						</td>*/
/* 						<td class='groupTitle' id='group_me'>{{ fbaccountDetails.row('firstname') ~ " " ~ fbaccountDetails.row('lastname') }}</td>*/
/* 						<td colspan='3'><a href='https://www.facebook.com/{{ fbaccount.UserDefaultFbAccount() }}' target='_blank'>*/
/* 							<i class="fa fa-external-link" aria-hidden="true"></i>&nbsp; {{ l('VIEW_PROFILE') }}</a>*/
/* 						</td>*/
/* 						<td>*/
/* 						<span class='postStatus_me postStatus'></span>*/
/* 						</td>*/
/* 					</tr>*/
/* 				{% endif %}*/
/* 			<tr class="thNodes">*/
/* 				<th width="20px" class="no-sort">*/
/* 					<input type='checkbox' id="checkbox-all" class="check-all checkbox-style" name='selectAllGroup' {% if input_post("selectAllGroup") %}checked{% endif %}>*/
/* 					<label for="checkbox-all"></label>*/
/* 				</th>*/
/* 				<th>{{ l('NODE_NAME') }}</th>*/
/* 				<th>{{ l('NODE_TYPE') }}</th>*/
/* 				<th>*/
/* 					<span class="hidden-xs">*/
/* 					{% if user_options['show_pages'] == 1 %}{{ l('Likes') }}{% endif %}*/
/* 					{% if user_options['show_pages'] == 1 and user_options['show_groups'] == 1 %}/{% endif %}*/
/* 					{% if user_options['show_groups'] == 1 %}{{ l('Members') }}{% endif %}*/
/* 					</span>*/
/* 				</th>*/
/* 				<th>{{ l('PRIVACY') }}</th>*/
/* 				<th>{{ l('POST_STATUS') }}</th>*/
/* 			</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 			{% set privacy = {"OPEN":'eye', 'CLOSED': 'eye-slash', 'SECRET': 'archive'} %}*/
/* 			*/
/* 				{% if userFbNodes %}*/
/* 					{% for node in userFbNodes %}*/
/* 						{% set nodeId = node.id %}*/
/* 						{% set nodeName = node.name %}*/
/* 						{% set page_likes = "" %}*/
/* */
/* 						{% if node.privacy is not empty %}*/
/* 							{% set nodeType = 'Group' %}*/
/* 						{% else %}*/
/* 							{% set nodeType = 'Page' %}*/
/* 							{% if node.likes %}*/
/* 								{% set page_likes = node.likes|number_format %}*/
/* 							{% endif %}*/
/* 						 {% endif %}*/
/* */
/* 						{% set nodePrivacy = node.privacy ? node.privacy : '' %}*/
/* */
/* 						{% if input_post('selectGroup')[i] %}*/
/* 							{% set checked = "checked='checked'" %}*/
/* 						{% endif %}*/
/* 						*/
/* 						<tr class='groupName {{ nodeType }}Type' id='{{ nodeId }}'>*/
/* */
/* 							<td>*/
/* 								<input type='checkbox' class='fbnode checkbox checkbox-style' name='selectGroup[{{ loop.index }}]' id='selectgroup_{{ node.id }}' value='{{ nodeId }}' {{ checked }}>*/
/* 								<label for='selectgroup_{{ nodeId }}'></label>*/
/* 							</td>*/
/* */
/* 							<td class='groupTitle' id='group_{{ nodeId }}'>*/
/* 								<input type='hidden' name='selectGroupName[{{loop.index }}]' value='{{ nodeName }}' />*/
/* 								<span {% if less_data == FALSE %}title="{{ nodeName }}"{% endif %}>{{ nodeName[0:60] }}{% if nodeName|length > 60 %}...{% endif %}*/
/* */
/* 								<a href='https://fb.com/{{ nodeId }}' target='_blank'>*/
/* 								<i class="fa fa-external-link"></i></a></span>*/
/* */
/* 								{% if user_options['show_hidden_nodes'] == 1 %}*/
/* 									{% if nodeType == "Group" %}*/
/* 										{% set hiddenNodesIDs = json_decode(hiddenNodes.row('hidden_groups'),TRUE) %}*/
/* 									{% else %}*/
/* 										{% set hiddenNodesIDs = json_decode(hiddenNodes.row('hidden_pages'),TRUE) %}*/
/* 									{% endif %}*/
/* */
/* 									<span class="HiddenNodeBadge">*/
/* 									{% if nodeId in hiddenNodesIDs %}*/
/* 									<span class="badge badge-danger">{{ l('hidden') }}</span>*/
/* 									{% endif %}*/
/* 									</span>*/
/* 								{% endif %}*/
/* */
/* 							</td>*/
/* */
/* 							<td class="nodeType">{{ l(nodeType) }}</td>*/
/* 							<td class="count">{{ node.members.summary.total_count }}{{ page_likes }}</td>*/
/* */
/* 							<td class="privacyAndLikes">*/
/* 								{% if node.privacy is not empty %}*/
/* 									<i class="fa fa-{{ privacy[nodePrivacy] }}"></i>*/
/* 									&nbsp;<span class="hidden-xs">{{ l(nodePrivacy) }}</span>*/
/* 									<input type='hidden' name='selectGroupPrivacy[{{ loop.index }}]' value='{{ nodePrivacy }}'>*/
/* 								{% else %}*/
/* 									-*/
/* 								{% endif %}*/
/* 							</td>*/
/* */
/* 							<td>*/
/* 								<span class='postStatus_{{ nodeId }} postStatus'></span>*/
/* 							</td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 				{% endif %}*/
/* 			</tbody>*/
/* 		</table>*/
/* <div id="addToCategoryModal" class="modal fade" role="dialog" data-backdrop="static">*/
/* 	<div class="modal-dialog">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				<h4 class="modal-title">{{ l("ADD_GROUP_TO_CATEGORY") }}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				<div class="addCateMsgBoxModal"></div>*/
/* 				<select class="form-control nodescategory">*/
/* 					<option value="">-- {{ l('All') }} --</option>*/
/* 		  			{% for gc in nodesCategories %}*/
/* 		  				<option value="{{ gc.id }}">{{ gc.category_name }}</option>		*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button class="btn btn-default" data-dismiss="modal">{{ l("CLOSE") }}</button>*/
/* 				<button onclick="return false;" id="modalAddCateBtn" class="btn btn-primary">{{ l("ADD") }}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* {% include "categories/create_category.twig" %}*/
/* <script>*/
/* 	$(function(){*/
/* */
/* 		{# Count selected groups #}*/
/* 		$('#checkbox-all,.fbnode').on('change',function(){*/
/* 			var countPages = 0;*/
/* 			var countGroups = 0;*/
/* 			$('.GroupType:visible .fbnode:checked').each(function(){*/
/* 				if($(this).val() != "on"){*/
/* 					countGroups++;*/
/* 				}*/
/* 		    });*/
/* 		    $('.PageType:visible .fbnode:checked').each(function(){*/
/* 				if($(this).val() != "on"){*/
/* 					countPages++;*/
/* 				}*/
/* 		    });*/
/* 		    $('#countSelectedNodes .pages').text(countPages);*/
/* 		    $('#countSelectedNodes .groups').text(countGroups);*/
/* 		    $('#countSelectedNodes .total').text(countPages+countGroups);*/
/* 		    $('#countSelectedNodes').show();*/
/* 		});*/
/* */
/* 		$("#exportGroupsCSV").on("click",function(){*/
/* 			var csvContent = 'group';*/
/* 			var totalGroups = 0;*/
/* 		    $('.GroupType:visible .fbnode:checked').each(function(){*/
/* 				if($(this).val() != "on"){*/
/* 					csvContent += '\r\n'+$(this).val()+',';*/
/* 					totalGroups++;*/
/* 				}*/
/* 		    });*/
/* */
/* 		    if(totalGroups ==0){*/
/* 		    	alertBox("{{l('No groups has been selected')}}","danger",false,true,true);*/
/* 		    }else{*/
/* 		    	alertBox(totalGroups+" {{l('Groups has been exported.')}}","success",false,true,true);*/
/* 		    	exportToCSV(csvContent, 'groups-'+moment().format('DD-MMM-YYYY')+'.csv', 'text/csv;encoding:utf-8');*/
/* 		    }*/
/* 		});*/
/* */
/* 		{# ---------- refresh nodes --------------#}*/
/* 		$('.groupsOptions').on('click','#refreshCategory', function(e) {*/
/* 			e.preventDefault();*/
/* 			$("#refreshCategory").prop('disabled', true);*/
/* 			var fbaccount = $(this).data("fbaccount");*/
/* 			var category = $(this).data("category");*/
/* 			kp_preloader("on");*/
/* 			$.ajax({*/
/* 		      url: '{{ base_url("nodes_categories/refresh/") }}'+fbaccount+"/"+category,*/
/* 		      dataType: 'json',*/
/* 		      type: 'GET',*/
/* 		      contentType: 'application/x-www-form-urlencoded',*/
/* 		      success: function( data, textStatus, jQxhr ){*/
/* 		      	if(data.status == "ok"){*/
/*                   if(data.message !== null && typeof data.message === 'object'){*/
/*                     htmlData = "<ul>";*/
/*                     Object.keys(data.message).forEach(function(key) {*/
/*                         htmlData += "<li>" + data.message[key] + "</li>";*/
/*                     });*/
/*                     htmlData += "</ul>";*/
/*                     */
/*                   }else{*/
/*                     htmlData = data.message;*/
/*                   }*/
/*                   	setTimeout(function(){*/
/*                   		window.location.replace('{{ base_url() }}'); */
/*                   	}, 1000);*/
/*                 	alertBox(htmlData,"success",false,true,true)*/
/*                 }else{*/
/*                   if(data.message !== null && typeof data.message === 'object'){*/
/*                     htmlData = "<ul>";*/
/*                     Object.keys(data.message).forEach(function(key) {*/
/*                         htmlData += "<li>" + data.message[key] + "</li>";*/
/*                     });*/
/*                     htmlData += "</ul>";*/
/*                   }else{*/
/*                     htmlData = data.message;*/
/*                   }*/
/*                   alertBox(htmlData,"danger",false,false,true);*/
/*                 }*/
/* 		        $("#refreshCategory").prop('disabled', false);*/
/* 		      },*/
/* 		      error: function( jqXhr, textStatus, errorThrown ){ */
/* 		      	console.log(errorThrown);*/
/* 		      	alertBox("{{ l('Unable to complete your request, Please try again') }}","danger",true,false,true);*/
/* 		      	$("#refreshCategory").prop('disabled', false);*/
/* 		      },*/
/* 		      complete: function(){kp_preloader("off");}*/
/* 		    });*/
/* 		});*/
/* */
/* 		{# Delete a category #}*/
/* 		$('.groupsOptions').on('click','#deleteCategory', function(e) {*/
/* 			e.preventDefault();*/
/* 			$("#deleteCategory").prop('disabled', true);*/
/* 			$.ajax({*/
/* 		      url: '{{ base_url("nodes_categories/delete_category") }}',*/
/* 		      dataType: 'json',*/
/* 		      type: 'post',*/
/* 		      contentType: 'application/x-www-form-urlencoded',*/
/* 		      data: { */
/* 		      	categoryID: $("#deleteCategory").val(),*/
/* 				{{ config_item('csrf_token_name') }} : getCookie("{{ config_item('csrf_cookie_name') }}"),*/
/* 		      },*/
/* 		      success: function( data, textStatus, jQxhr ){*/
/* 		      	if(data.status == "success"){*/
/*                   if(data.message !== null && typeof data.message === 'object'){*/
/*                     htmlData = "<ul>";*/
/*                     Object.keys(data.message).forEach(function(key) {*/
/*                         htmlData += "<li>" + data.message[key] + "</li>";*/
/*                     });*/
/*                     htmlData += "</ul>";*/
/*                     */
/*                   }else{*/
/*                     htmlData = data.message;*/
/*                   }*/
/*                   	setTimeout(function(){*/
/*                   		window.location.replace('{{ base_url() }}'); */
/*                   	}, 1000);*/
/*                 	alertBox(htmlData,"success",false,true,true)*/
/*                 }else{*/
/*                   if(data.message !== null && typeof data.message === 'object'){*/
/*                     htmlData = "<ul>";*/
/*                     Object.keys(data.message).forEach(function(key) {*/
/*                         htmlData += "<li>" + data.message[key] + "</li>";*/
/*                     });*/
/*                     htmlData += "</ul>";*/
/*                   }else{*/
/*                     htmlData = data.message;*/
/*                   }*/
/*                   alertBox(htmlData,"danger",false,false,true);*/
/*                 }*/
/* */
/* 		        $("#deleteCategory").prop('disabled', false);*/
/* 		        	*/
/* 		      },*/
/* 		      error: function( jqXhr, textStatus, errorThrown ){ */
/* 		      	console.log(errorThrown);*/
/* 		      	alertBox("{{ l('Unable to complete your request, Please try again') }}","danger",true,false,true);*/
/* 		      	$("#deleteCategory").prop('disabled', false);*/
/* 		      }*/
/* 		    });*/
/* 		});	*/
/* */
/* 		{# Hide nodes #}*/
/* 		$('.groupsOptions').on('click','#hideSelectedNodes', function() {*/
/* 			nodes = [];*/
/* 			// Get all checked nodes*/
/* 			$('.groupName:visible .fbnode:checked').each(function(){*/
/* 				nodes.push($(this).val());*/
/* 			});*/
/* 			$.ajax({*/
/* 				url: '{{ base_url("settings/fb_accounts/hide_nodes") }}',*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: {*/
/* 					nodes: JSON.stringify(nodes),*/
/* 					{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 				},*/
/* 				success: function( data, textStatus, jQxhr ){*/
/* 					if(data.response == "ok"){*/
/* 						for (var i = 0; i < nodes.length; i++ ) {*/
/* 							{% if user_options['show_hidden_nodes'] == 0 %}*/
/* 								$( "#" + nodes[i] ).css('background','#ffcccc');*/
/* 								$( "#" + nodes[i] ).fadeOut(500, function() { $(this).remove(); });*/
/* 							{% else %}*/
/* 							$( "#" + nodes[i] ).find(".HiddenNodeBadge").fadeIn(500, function() { $(this).html("<span class='badge badge-danger HiddenNodeBadge'>{{ l('hidden') }}</span>"); });*/
/* 							{% endif %}*/
/* 						}*/
/* 					}*/
/* 				},*/
/* 				error: function( jqXhr, textStatus, errorThrown ){ */
/* 				  console.log(errorThrown);*/
/* 				  alertBox('{{ l('Unable to complete your request') }}',"danger",true,true);*/
/* 				}*/
/* 			});*/
/* 		});*/
/* */
/* 		{# unHide nodes #}*/
/* 		$('.groupsOptions').on('click','#unHideSelectedNodes', function() {*/
/* 			nodes = [];*/
/* 			// Get all checked nodes*/
/* 			$('.groupName:visible .fbnode:checked').each(function(){*/
/* 				nodes.push($(this).val());*/
/* 			});*/
/* 			$.ajax({*/
/* 				url: '{{ base_url("settings/fb_accounts/unhide_nodes") }}',*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: {*/
/* 					nodes: JSON.stringify(nodes),*/
/* 					{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 				},*/
/* 				success: function( data, textStatus, jQxhr ){*/
/* 					if(data.response == "ok"){*/
/* 						for (var i = 0; i < nodes.length; i++ ) {*/
/* 							$( "#" + nodes[i] ).find(".HiddenNodeBadge span").fadeOut(100, function() { $(this).remove(); });*/
/* 						}*/
/* 					}*/
/* 				},*/
/* 				error: function( jqXhr, textStatus, errorThrown ){ */
/* 				  console.log(errorThrown);*/
/* 				  alertBox('{{ l('Unable to complete your request') }}',"danger",true,true);*/
/* 				}*/
/* 			});*/
/* 		});*/
/* */
/* */
/* 		$('#toggleHiddenNodes').on('click', function() {*/
/* 			$.ajax({*/
/* 				url: '{{ base_url("home/toggleHiddenNodes") }}',*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: {*/
/* 					status: $('#toggleHiddenNodes').is(":checked") ? 1 : 0,*/
/* 					{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 				},*/
/* 				success: function( data, textStatus, jQxhr ){*/
/* 					if(data.status == "ok"){*/
/* 						location.reload();*/
/* 					}*/
/* 				},*/
/* 				error: function( jqXhr, textStatus, errorThrown ){ */
/* 				  console.log(errorThrown);*/
/* 				  alertBox('{{ l('Unable to complete your request') }}',"danger",true,true);*/
/* 				}*/
/* 			});*/
/* 		});*/
/* */
/* 		$('#showGroups').on('click', function() {*/
/* 			$.ajax({*/
/* 				url: '{{ base_url("home/toggleShowGroups") }}',*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: {*/
/* 					status: $('#showGroups').is(":checked") ? 1 : 0,*/
/* 					{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 				},*/
/* 				success: function( data, textStatus, jQxhr ){*/
/* 					if(data.status == "ok"){*/
/* 						if($('#showGroups').is(":checked")){*/
/* 							location.reload();*/
/* 						}else{*/
/* 							$(".GroupType").remove();*/
/* 							$(".groupsCount").html("0");*/
/* 							location.reload();*/
/* 						}*/
/* 					}*/
/* 				},*/
/* 				error: function( jqXhr, textStatus, errorThrown ){ */
/* 				  console.log(errorThrown);*/
/* 				  alertBox('{{ l('Unable to complete your request') }}',"danger",true,true);*/
/* 				}*/
/* 			});*/
/* 		});*/
/* */
/* 		$('#showPages').on('click', function() {*/
/* 			$.ajax({*/
/* 				url: '{{ base_url("home/toggleShowPages") }}',*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: {*/
/* 					status: $('#showPages').is(":checked") ? 1 : 0,*/
/* 					{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 				},*/
/* 				success: function( data, textStatus, jQxhr ){*/
/* 					if(data.status == "ok"){*/
/* 						if($('#showPages').is(":checked") || !$('#showGroups').is(":checked")){*/
/* 							location.reload();*/
/* 						}else{*/
/* 							$(".PageType").remove();*/
/* 							$(".pagesCount").html("0");*/
/* 							location.reload();*/
/* 						}*/
/* 					}*/
/* 				},*/
/* 				error: function( jqXhr, textStatus, errorThrown ){ */
/* 				  console.log(errorThrown);*/
/* 				  alertBox('{{ l('Unable to complete your request') }}',"danger",true,true);*/
/* 				}*/
/* 			});*/
/* 		});*/
/* */
/* 	});	*/
/* */
/* 	</script>*/
/* </div>*/
