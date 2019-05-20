<?php

/* insights.twig */
class __TwigTemplate_67a60fd36e561182aa01de5561222fcdbe4ccf4392ea939f55ce7688fc2a7840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "insights.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Insights")), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"panel-group\" id=\"accordion\">

<div class=\"panel panel-default posts\">
\t<div class=\"panel-heading\">
\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#panel-publishing\">
\t\t\t<h3 class=\"panel-title\">
\t\t\t\t<i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Publishing")), "html", null, true);
        echo "
\t\t\t</h3>
\t\t</a>
\t</div>
\t<div id=\"panel-publishing\" class=\"panel-collapse collapse in\">
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Today")), "html", null, true);
        echo "</div>
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t    <div class=\"col-xs-12 text-success\">";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Success")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-success pull-right\">";
        // line 27
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "posts"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-danger\">
\t\t\t\t\t\t    \t";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Fail")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-danger pull-right\">";
        // line 31
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "posts_fail"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-primary pull-right\">
\t\t\t\t\t\t    \t";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total Processed")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge pull-right\">";
        // line 35
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "posts"), "method") + abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "posts_fail"), "method"))), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last 7 days")), "html", null, true);
        echo "</div>
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t  \t<div class=\"row\">
\t\t\t\t\t\t    <div class=\"col-xs-12 text-success\">
\t\t\t\t\t\t    \t";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Success")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-success badge-success pull-right\">";
        // line 48
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_week"]) ? $context["Insights_num_week"] : null), "row", array(0 => "posts"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-danger\">
\t\t\t\t\t\t    \t";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Fail")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-danger pull-right\">";
        // line 52
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_week"]) ? $context["Insights_num_week"] : null), "row", array(0 => "posts_fail"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-primary pull-right\">
\t\t\t\t\t\t    \t";
        // line 55
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total Processed")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge pull-right\">";
        // line 56
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["Insights_num_week"]) ? $context["Insights_num_week"] : null), "row", array(0 => "posts"), "method") + abs($this->getAttribute((isset($context["Insights_num_week"]) ? $context["Insights_num_week"] : null), "row", array(0 => "posts_fail"), "method"))), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last 30 days")), "html", null, true);
        echo "</div>
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t  \t<div class=\"row\">
\t\t\t\t\t\t    <div class=\"col-xs-12 text-success\">
\t\t\t\t\t\t    \t";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Success")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-success pull-right\">";
        // line 69
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_month"]) ? $context["Insights_num_month"] : null), "row", array(0 => "posts"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-danger\">
\t\t\t\t\t\t    \t";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Fail")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-danger pull-right\">";
        // line 73
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_month"]) ? $context["Insights_num_month"] : null), "row", array(0 => "posts_fail"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-primary pull-right\">
\t\t\t\t\t\t    \t";
        // line 76
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total Processed")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge pull-right\">";
        // line 77
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["Insights_num_month"]) ? $context["Insights_num_month"] : null), "row", array(0 => "posts"), "method") + abs($this->getAttribute((isset($context["Insights_num_month"]) ? $context["Insights_num_month"] : null), "row", array(0 => "posts_fail"), "method"))), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 85
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("All time")), "html", null, true);
        echo "</div>
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t  \t<div class=\"row\">
\t\t\t\t\t\t    <div class=\"col-xs-12 text-success\">
\t\t\t\t\t\t    \t";
        // line 89
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Success")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-success pull-right\">";
        // line 90
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_alltime"]) ? $context["Insights_num_alltime"] : null), "row", array(0 => "posts"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-danger\">
\t\t\t\t\t\t    \t";
        // line 93
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Fail")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-danger pull-right\">";
        // line 94
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_alltime"]) ? $context["Insights_num_alltime"] : null), "row", array(0 => "posts_fail"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-primary pull-right\">
\t\t\t\t\t\t    \t";
        // line 97
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total Processed")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge pull-right\">";
        // line 98
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["Insights_num_alltime"]) ? $context["Insights_num_alltime"] : null), "row", array(0 => "posts"), "method") + abs($this->getAttribute((isset($context["Insights_num_alltime"]) ? $context["Insights_num_alltime"] : null), "row", array(0 => "posts_fail"), "method"))), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row chart\">
\t\t      <div class=\"col-xs-12 col-md-6\">
\t\t        <div class=\"panel panel-default\">
\t\t          <div class=\"panel-heading\">";
        // line 109
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last 7 days")), "html", null, true);
        echo "</div>
\t\t          <div class=\"panel-body\">
\t\t            <div id=\"last_7_days\"></div>
\t\t          </div>
\t\t        </div>
\t\t      </div>
\t\t      <div class=\"col-xs-12 col-md-6\">
\t\t        <div class=\"panel panel-default\">
\t\t          <div class=\"panel-heading\">";
        // line 117
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last 30 days")), "html", null, true);
        echo "</div>
\t\t          <div class=\"panel-body\">
\t\t            <div id=\"p_last_30_days\">
\t\t            </div>
\t\t          </div>
\t\t        </div>
\t\t      </div>
\t\t    </div>
\t\t</div>
\t</div>
</div>

";
        // line 129
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "comments"), "method") && KPMIsActive("auto_comment"))) {
            // line 130
            echo "  ";
            $this->loadTemplate("@comments/components/insights.twig", "insights.twig", 130)->display($context);
        }
        // line 132
        echo "
";
        // line 133
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "likes"), "method") && KPMIsActive("auto_like"))) {
            // line 134
            echo "  ";
            $this->loadTemplate("@autolike/components/insights.twig", "insights.twig", 134)->display($context);
        }
        // line 136
        echo "
";
        // line 137
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "join_groups"), "method") && KPMIsActive("join_groups"))) {
            // line 138
            echo "  ";
            $this->loadTemplate("@join_groups/insights.twig", "insights.twig", 138)->display($context);
        }
        // line 140
        echo "
";
        // line 141
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "invite_join_groups"), "method") && KPMIsActive("invite_join_groups"))) {
            // line 142
            echo "  ";
            $this->loadTemplate("@invite_join_groups/insights.twig", "insights.twig", 142)->display($context);
        }
        // line 144
        echo "
</div>

<div class=\"row\">
\t<div class=\"col-xs-12 col-md-6\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i> ";
        // line 152
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("My facebook accounts")), "html", null, true);
        echo "
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-4\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 159
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total FB accounts")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t\t    <strong>";
        // line 161
        echo twig_escape_filter($this->env, abs((isset($context["total_fb_account"]) ? $context["total_fb_account"] : null)), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-4\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 167
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total Groups")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t\t    <strong>";
        // line 169
        echo twig_escape_filter($this->env, abs((isset($context["total_groups"]) ? $context["total_groups"] : null)), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-4\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 175
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total pages")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t\t    <strong>";
        // line 177
        echo twig_escape_filter($this->env, abs((isset($context["total_pages"]) ? $context["total_pages"] : null)), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t</div>
\t<div class=\"col-xs-12 col-md-6\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t<i class=\"fa fa-database\" aria-hidden=\"true\"></i> ";
        // line 189
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("My data")), "html", null, true);
        echo "
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 196
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Saved posts")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t\t    <strong>";
        // line 198
        echo twig_escape_filter($this->env, abs((isset($context["total_sposts"]) ? $context["total_sposts"] : null)), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 204
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedules")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t\t    <strong>";
        // line 206
        echo twig_escape_filter($this->env, abs((isset($context["total_schedules"]) ? $context["total_schedules"] : null)), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-xs-12\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
        // line 221
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("My account")), "html", null, true);
        echo "
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t\t    <span class=\"badge ";
        // line 229
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_posts"), "method") == $this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "posts"), "method"))) {
            // line 230
            echo "\t\t\t\t\t\t    badge-danger
\t\t\t\t\t\t\t";
        }
        // line 231
        echo "\">";
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "posts"), "method")), "html", null, true);
        echo " / 
\t\t\t\t\t\t    ";
        // line 232
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_posts"), "method") == 0)) {
            // line 233
            echo "\t\t\t\t\t\t    \t<strong>&infin;</strong>
\t\t\t\t\t\t   \t";
        } else {
            // line 235
            echo "\t\t\t\t\t\t   \t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_posts"), "method"), "html", null, true);
            echo "
\t\t\t\t\t\t    ";
        }
        // line 236
        echo "</span>
\t\t\t\t\t\t    ";
        // line 237
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Posts per day")), "html", null, true);
        echo "
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t\t    <span class=\"badge ";
        // line 240
        if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_fbaccount"), "method") != 0) && ($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_fbaccount"), "method") == (isset($context["total_fb_account"]) ? $context["total_fb_account"] : null)))) {
            // line 241
            echo "\t\t\t\t\t\t    badge-danger
\t\t\t\t\t\t\t";
        }
        // line 242
        echo "\">
\t\t\t\t\t\t\t";
        // line 243
        echo twig_escape_filter($this->env, (isset($context["total_fb_account"]) ? $context["total_fb_account"] : null), "html", null, true);
        echo " / 
\t\t\t\t\t\t    ";
        // line 244
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_fbaccount"), "method") == 0)) {
            // line 245
            echo "\t\t\t\t\t\t    \t<strong>&infin;</strong>
\t\t\t\t\t\t   \t";
        } else {
            // line 247
            echo "\t\t\t\t\t\t   \t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_fbaccount"), "method"), "html", null, true);
            echo "
\t\t\t\t\t\t    ";
        }
        // line 248
        echo "</span>
\t\t\t\t\t\t    ";
        // line 249
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook Accounts")), "html", null, true);
        echo "
\t\t\t\t\t\t  </li>

\t\t\t\t\t\t  ";
        // line 252
        if ($this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "auto_comment", array(), "any", true, true)) {
            // line 253
            echo "\t\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t\t  \t";
            // line 254
            if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_comments"), "method") == "-1")) {
                // line 255
                echo "\t\t\t\t\t\t  \t\t<span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t  \t";
            } else {
                // line 257
                echo "\t\t\t\t\t\t    <span class=\"badge ";
                if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_comments"), "method") != 0) && ($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_comments"), "method") == abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "comments"), "method"))))) {
                    // line 258
                    echo "\t\t\t\t\t\t    badge-danger
\t\t\t\t\t\t\t";
                }
                // line 259
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 260
                echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "comments"), "method")), "html", null, true);
                echo " / 
\t\t\t\t\t\t\t    ";
                // line 261
                if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_comments"), "method") == 0)) {
                    // line 262
                    echo "\t\t\t\t\t\t\t    \t<strong>&infin;</strong>
\t\t\t\t\t\t\t   \t";
                } else {
                    // line 264
                    echo "\t\t\t\t\t\t\t   \t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_comments"), "method"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t    ";
                }
                // line 266
                echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            }
            // line 268
            echo "\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto comments")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Per day")), "html", null, true);
            echo "
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  ";
        }
        // line 271
        echo "
\t\t\t\t\t\t  ";
        // line 272
        if ($this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "auto_like", array(), "any", true, true)) {
            // line 273
            echo "\t\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t\t  \t";
            // line 274
            if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_likes"), "method") == "-1")) {
                // line 275
                echo "\t\t\t\t\t\t  \t\t<span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t  \t";
            } else {
                // line 277
                echo "\t\t\t\t\t\t\t    <span class=\"badge ";
                if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_likes"), "method") != 0) && ($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_likes"), "method") == abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "likes"), "method"))))) {
                    // line 278
                    echo "\t\t\t\t\t\t\t    badge-danger
\t\t\t\t\t\t\t\t";
                }
                // line 279
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 280
                echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "likes"), "method")), "html", null, true);
                echo " / 
\t\t\t\t\t\t\t\t    ";
                // line 281
                if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_likes"), "method") == 0)) {
                    // line 282
                    echo "\t\t\t\t\t\t\t\t    \t<strong>&infin;</strong>
\t\t\t\t\t\t\t\t   \t";
                } else {
                    // line 284
                    echo "\t\t\t\t\t\t\t\t   \t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_likes"), "method"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t    ";
                }
                // line 286
                echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            }
            // line 288
            echo "\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto likes")), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Per day")), "html", null, true);
            echo "
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  ";
        }
        // line 291
        echo "
\t\t\t\t\t\t  ";
        // line 292
        if (KPMIsActive("join_groups")) {
            // line 293
            echo "\t\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t\t  \t";
            // line 294
            if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "join_groups"), "method") == "-1")) {
                // line 295
                echo "\t\t\t\t\t\t  \t\t<span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t  \t";
            } else {
                // line 297
                echo "\t\t\t\t\t\t\t    <span class=\"badge ";
                if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "join_groups"), "method") != 0) && ($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "join_groups"), "method") == abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "join_groups"), "method"))))) {
                    // line 298
                    echo "\t\t\t\t\t\t\t    badge-danger
\t\t\t\t\t\t\t\t";
                }
                // line 299
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 300
                echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "join_groups"), "method")), "html", null, true);
                echo " / 
\t\t\t\t\t\t\t\t    ";
                // line 301
                if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "join_groups"), "method") == 0)) {
                    // line 302
                    echo "\t\t\t\t\t\t\t\t    \t<strong>&infin;</strong>
\t\t\t\t\t\t\t\t   \t";
                } else {
                    // line 304
                    echo "\t\t\t\t\t\t\t\t   \t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "join_groups"), "method"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t    ";
                }
                // line 306
                echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            }
            // line 308
            echo "\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Join group request")), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Per day")), "html", null, true);
            echo "
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  ";
        }
        // line 311
        echo "

\t\t\t\t\t\t  ";
        // line 313
        if (KPMIsActive("invite_join_groups")) {
            // line 314
            echo "\t\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t\t  \t";
            // line 315
            if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "invite_join_groups"), "method") == "-1")) {
                // line 316
                echo "\t\t\t\t\t\t  \t\t<span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t  \t";
            } else {
                // line 318
                echo "\t\t\t\t\t\t\t    <span class=\"badge ";
                if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "invite_join_groups"), "method") != 0) && ($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "invite_join_groups"), "method") == abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "invite_join_groups"), "method"))))) {
                    // line 319
                    echo "\t\t\t\t\t\t\t    badge-danger
\t\t\t\t\t\t\t\t";
                }
                // line 320
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 321
                echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "invite_join_groups"), "method")), "html", null, true);
                echo " / 
\t\t\t\t\t\t\t\t    ";
                // line 322
                if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "invite_join_groups"), "method") == 0)) {
                    // line 323
                    echo "\t\t\t\t\t\t\t\t    \t<strong>&infin;</strong>
\t\t\t\t\t\t\t\t   \t";
                } else {
                    // line 325
                    echo "\t\t\t\t\t\t\t\t   \t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "invite_join_groups"), "method"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t    ";
                }
                // line 327
                echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            }
            // line 329
            echo "\t\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Invite Join group")), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Per day")), "html", null, true);
            echo "
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  ";
        }
        // line 332
        echo "

\t\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t\t    ";
        // line 335
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "upload_images"), "method") == 1)) {
            // line 336
            echo "\t\t\t\t\t\t    \t<span class=\"badge badge-success\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Enabled")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t   \t";
        } else {
            // line 338
            echo "\t\t\t\t\t\t   \t\t<span class=\"badge badge-danger\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t    ";
        }
        // line 340
        echo "\t\t\t\t\t\t    ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload Images")), "html", null, true);
        echo "
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t\t    ";
        // line 343
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "upload_videos"), "method") == 1)) {
            // line 344
            echo "\t\t\t\t\t\t    \t<span class=\"badge badge-success\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Enabled")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t   \t";
        } else {
            // line 346
            echo "\t\t\t\t\t\t   \t\t<span class=\"badge badge-danger\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t    ";
        }
        // line 348
        echo "\t\t\t\t\t\t    ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload Videos")), "html", null, true);
        echo "
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  
\t\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t\t    ";
        // line 352
        if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_upload"), "method") != 0) && ($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_upload"), "method") <= (isset($context["storageSize"]) ? $context["storageSize"] : null)))) {
            // line 353
            echo "\t\t\t\t\t\t    \t<span class=\"badge badge-danger\">
\t\t\t\t\t\t    \t";
            // line 354
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["storageSize"]) ? $context["storageSize"] : null) / 1000)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("MB")), "html", null, true);
            echo "  /
\t\t\t\t\t\t\t";
        } else {
            // line 356
            echo "\t\t\t\t\t\t\t\t<span class=\"badge\">
\t\t\t\t\t\t\t\t";
            // line 357
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["storageSize"]) ? $context["storageSize"] : null) / 1000), 1), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("MB")), "html", null, true);
            echo "  /\t
\t\t\t\t\t\t\t";
        }
        // line 359
        echo "\t\t\t\t\t\t\t 
\t\t\t\t\t\t    ";
        // line 360
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_upload"), "method") == 0)) {
            // line 361
            echo "\t\t\t\t\t\t    \t<strong>&infin;</strong>
\t\t\t\t\t\t   \t";
        } else {
            // line 363
            echo "\t\t\t\t\t\t   \t\t";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_upload"), "method") / 1000)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("MB")), "html", null, true);
            echo "
\t\t\t\t\t\t    ";
        }
        // line 364
        echo "</span>
\t\t\t\t\t\t    ";
        // line 365
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload Usage")), "html", null, true);
        echo "
\t\t\t\t\t\t  </li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t\t    ";
        // line 373
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "account_expiry"), "method") == 0)) {
            // line 374
            echo "\t\t\t\t\t\t    \t<span class=\"badge badge-success\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Never")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t   \t";
        } else {
            // line 376
            echo "\t\t\t\t\t\t   \t\t<span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["current_user"]) ? $context["current_user"] : null), "expire_on", array(), "array"), (isset($context["date_format"]) ? $context["date_format"] : null)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t    ";
        }
        // line 378
        echo "\t\t\t\t\t\t    ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Account expiry in")), "html", null, true);
        echo "
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t\t    <span class=\"badge\">";
        // line 381
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "name"), "method")))), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    ";
        // line 382
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Package")), "html", null, true);
        echo "
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t</div>
</div>

";
    }

    // line 394
    public function block_javascripts($context, array $blocks = array())
    {
        // line 395
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 396
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/charts.js"), "html", null, true);
        echo "\"></script>
\t<script>google.charts.load('current', {'packages':['corechart']});</script>
\t<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/moment.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 401
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 402
        echo "\t";
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
   \t\tgoogle.charts.setOnLoadCallback(drawChart);
   \t\tkp_preloader(\"on\",\".posts .chart .panel-body\");
    \tfunction drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', '";
        // line 408
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Posts")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Posts failed")), "html", null, true);
        echo "'],
          ";
        // line 409
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Insights_week"]) ? $context["Insights_week"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 410
            echo "          \t['";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "created_at", array()), (isset($context["date_format"]) ? $context["date_format"] : null)), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "posts", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "posts_fail", array()), "html", null, true);
            echo "],
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 412
            echo "          \t['',0,0]
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        echo "        ]);

        var options = {title: '";
        // line 416
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last 7 days")), "html", null, true);
        echo "',curveType: 'none',legend: { position: 'top' }};

        var chart = new google.visualization.AreaChart(document.getElementById('last_7_days'));
        chart.draw(data, options);

        var data = google.visualization.arrayToDataTable([
          ['Day', '";
        // line 422
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Posts")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Posts failed")), "html", null, true);
        echo "'],
          ";
        // line 423
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Insights_month"]) ? $context["Insights_month"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 424
            echo "          \t['";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "created_at", array()), (isset($context["date_format"]) ? $context["date_format"] : null)), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "posts", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "posts_fail", array()), "html", null, true);
            echo "],
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 426
            echo "          \t['',0,0]
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 428
        echo "        ]);

        var options = {title: '";
        // line 430
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last 30 days")), "html", null, true);
        echo "s',curveType: 'none',legend: { position: 'top' }};
       
        var chart = new google.visualization.AreaChart(document.getElementById('p_last_30_days'));
        chart.draw(data, options);
        kp_preloader(\"off\",\".posts .chart .panel-body\");
      }
    </script>
";
    }

    public function getTemplateName()
    {
        return "insights.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  953 => 430,  949 => 428,  942 => 426,  930 => 424,  925 => 423,  919 => 422,  910 => 416,  906 => 414,  899 => 412,  887 => 410,  882 => 409,  876 => 408,  866 => 402,  863 => 401,  857 => 398,  852 => 396,  847 => 395,  844 => 394,  829 => 382,  825 => 381,  818 => 378,  812 => 376,  806 => 374,  804 => 373,  793 => 365,  790 => 364,  782 => 363,  778 => 361,  776 => 360,  773 => 359,  766 => 357,  763 => 356,  756 => 354,  753 => 353,  751 => 352,  743 => 348,  737 => 346,  731 => 344,  729 => 343,  722 => 340,  716 => 338,  710 => 336,  708 => 335,  703 => 332,  694 => 329,  690 => 327,  684 => 325,  680 => 323,  678 => 322,  674 => 321,  671 => 320,  667 => 319,  664 => 318,  658 => 316,  656 => 315,  653 => 314,  651 => 313,  647 => 311,  638 => 308,  634 => 306,  628 => 304,  624 => 302,  622 => 301,  618 => 300,  615 => 299,  611 => 298,  608 => 297,  602 => 295,  600 => 294,  597 => 293,  595 => 292,  592 => 291,  583 => 288,  579 => 286,  573 => 284,  569 => 282,  567 => 281,  563 => 280,  560 => 279,  556 => 278,  553 => 277,  547 => 275,  545 => 274,  542 => 273,  540 => 272,  537 => 271,  528 => 268,  524 => 266,  518 => 264,  514 => 262,  512 => 261,  508 => 260,  505 => 259,  501 => 258,  498 => 257,  492 => 255,  490 => 254,  487 => 253,  485 => 252,  479 => 249,  476 => 248,  470 => 247,  466 => 245,  464 => 244,  460 => 243,  457 => 242,  453 => 241,  451 => 240,  445 => 237,  442 => 236,  436 => 235,  432 => 233,  430 => 232,  425 => 231,  421 => 230,  419 => 229,  408 => 221,  390 => 206,  385 => 204,  376 => 198,  371 => 196,  361 => 189,  346 => 177,  341 => 175,  332 => 169,  327 => 167,  318 => 161,  313 => 159,  303 => 152,  293 => 144,  289 => 142,  287 => 141,  284 => 140,  280 => 138,  278 => 137,  275 => 136,  271 => 134,  269 => 133,  266 => 132,  262 => 130,  260 => 129,  245 => 117,  234 => 109,  220 => 98,  216 => 97,  210 => 94,  206 => 93,  200 => 90,  196 => 89,  189 => 85,  178 => 77,  174 => 76,  168 => 73,  164 => 72,  158 => 69,  154 => 68,  147 => 64,  136 => 56,  132 => 55,  126 => 52,  122 => 51,  116 => 48,  112 => 47,  105 => 43,  94 => 35,  90 => 34,  84 => 31,  80 => 30,  74 => 27,  70 => 26,  64 => 23,  52 => 14,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}{{ l('Insights') }}{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* */
/* <div class="panel-group" id="accordion">*/
/* */
/* <div class="panel panel-default posts">*/
/* 	<div class="panel-heading">*/
/* 		<a data-toggle="collapse" data-parent="#accordion" href="#panel-publishing">*/
/* 			<h3 class="panel-title">*/
/* 				<i class="fa fa-bar-chart" aria-hidden="true"></i> {{ l("Publishing") }}*/
/* 			</h3>*/
/* 		</a>*/
/* 	</div>*/
/* 	<div id="panel-publishing" class="panel-collapse collapse in">*/
/* 		<div class="panel-body">*/
/* 			<div class="row">*/
/* 				<div class="col-xs-12 col-sm-3">*/
/* 					<div class="panel panel-default">*/
/* 					  <div class="panel-heading">{{ l('Today') }}</div>*/
/* 					  <div class="panel-body">*/
/* 						<div class="row">*/
/* 						    <div class="col-xs-12 text-success">{{ l('Success') }} : */
/* 						    	<span class="badge badge-success pull-right">{{ Insights_num_day.row('posts')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-danger">*/
/* 						    	{{ l('Fail') }} : */
/* 						    	<span class="badge badge-danger pull-right">{{ Insights_num_day.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-primary pull-right">*/
/* 						    	{{ l('Total Processed') }} : */
/* 						    	<span class="badge pull-right">{{ Insights_num_day.row('posts')+Insights_num_day.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						</div>*/
/* 					  </div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-xs-12 col-sm-3">*/
/* 					<div class="panel panel-default">*/
/* 					  <div class="panel-heading">{{ l('Last 7 days') }}</div>*/
/* 					  <div class="panel-body">*/
/* 					  	<div class="row">*/
/* 						    <div class="col-xs-12 text-success">*/
/* 						    	{{ l('Success') }} : */
/* 						    	<span class="badge badge-success badge-success pull-right">{{ Insights_num_week.row('posts')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-danger">*/
/* 						    	{{ l('Fail') }} : */
/* 						    	<span class="badge badge-danger pull-right">{{ Insights_num_week.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-primary pull-right">*/
/* 						    	{{ l('Total Processed') }} : */
/* 						    	<span class="badge pull-right">{{ Insights_num_week.row('posts')+Insights_num_week.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						</div>*/
/* 					  </div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-xs-12 col-sm-3">*/
/* 					<div class="panel panel-default">*/
/* 					  <div class="panel-heading">{{ l('Last 30 days') }}</div>*/
/* 					  <div class="panel-body">*/
/* 					  	<div class="row">*/
/* 						    <div class="col-xs-12 text-success">*/
/* 						    	{{ l('Success') }} : */
/* 						    	<span class="badge badge-success pull-right">{{ Insights_num_month.row('posts')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-danger">*/
/* 						    	{{ l('Fail') }} : */
/* 						    	<span class="badge badge-danger pull-right">{{ Insights_num_month.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-primary pull-right">*/
/* 						    	{{ l('Total Processed') }} : */
/* 						    	<span class="badge pull-right">{{ Insights_num_month.row('posts')+Insights_num_month.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						</div>*/
/* 					  </div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-xs-12 col-sm-3">*/
/* 					<div class="panel panel-default">*/
/* 					  <div class="panel-heading">{{ l('All time') }}</div>*/
/* 					  <div class="panel-body">*/
/* 					  	<div class="row">*/
/* 						    <div class="col-xs-12 text-success">*/
/* 						    	{{ l('Success') }} : */
/* 						    	<span class="badge badge-success pull-right">{{ Insights_num_alltime.row('posts')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-danger">*/
/* 						    	{{ l('Fail') }} : */
/* 						    	<span class="badge badge-danger pull-right">{{ Insights_num_alltime.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-primary pull-right">*/
/* 						    	{{ l('Total Processed') }} : */
/* 						    	<span class="badge pull-right">{{ Insights_num_alltime.row('posts')+Insights_num_alltime.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						</div>*/
/* 					  </div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row chart">*/
/* 		      <div class="col-xs-12 col-md-6">*/
/* 		        <div class="panel panel-default">*/
/* 		          <div class="panel-heading">{{ l('Last 7 days') }}</div>*/
/* 		          <div class="panel-body">*/
/* 		            <div id="last_7_days"></div>*/
/* 		          </div>*/
/* 		        </div>*/
/* 		      </div>*/
/* 		      <div class="col-xs-12 col-md-6">*/
/* 		        <div class="panel panel-default">*/
/* 		          <div class="panel-heading">{{ l('Last 30 days') }}</div>*/
/* 		          <div class="panel-body">*/
/* 		            <div id="p_last_30_days">*/
/* 		            </div>*/
/* 		          </div>*/
/* 		        </div>*/
/* 		      </div>*/
/* 		    </div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% if user.canUse("comments") and KPMIsActive('auto_comment') %}*/
/*   {% include "@comments/components/insights.twig" %}*/
/* {% endif %}*/
/* */
/* {% if user.canUse("likes") and KPMIsActive('auto_like') %}*/
/*   {% include "@autolike/components/insights.twig" %}*/
/* {% endif %}*/
/* */
/* {% if user.canUse("join_groups") and KPMIsActive('join_groups') %}*/
/*   {% include "@join_groups/insights.twig" %}*/
/* {% endif %}*/
/* */
/* {% if user.canUse("invite_join_groups") and KPMIsActive('invite_join_groups') %}*/
/*   {% include "@invite_join_groups/insights.twig" %}*/
/* {% endif %}*/
/* */
/* </div>*/
/* */
/* <div class="row">*/
/* 	<div class="col-xs-12 col-md-6">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title">*/
/* 					<i class="fa fa-facebook" aria-hidden="true"></i> {{ l("My facebook accounts") }}*/
/* 				</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<div class="row">*/
/* 					<div class="col-xs-12 col-sm-4">*/
/* 						<div class="panel panel-default">*/
/* 						  <div class="panel-heading">{{ l('Total FB accounts') }}</div>*/
/* 						  <div class="panel-body">*/
/* 						    <strong>{{ total_fb_account|abs }}</strong>*/
/* 						  </div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-xs-12 col-sm-4">*/
/* 						<div class="panel panel-default">*/
/* 						  <div class="panel-heading">{{ l('Total Groups') }}</div>*/
/* 						  <div class="panel-body">*/
/* 						    <strong>{{ total_groups|abs }}</strong>*/
/* 						  </div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-xs-12 col-sm-4">*/
/* 						<div class="panel panel-default">*/
/* 						  <div class="panel-heading">{{ l('Total pages') }}</div>*/
/* 						  <div class="panel-body">*/
/* 						    <strong>{{ total_pages|abs }}</strong>*/
/* 						  </div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>		*/
/* 	</div>*/
/* 	<div class="col-xs-12 col-md-6">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title">*/
/* 					<i class="fa fa-database" aria-hidden="true"></i> {{ l("My data") }}*/
/* 				</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<div class="row">*/
/* 					<div class="col-xs-6">*/
/* 						<div class="panel panel-default">*/
/* 						  <div class="panel-heading">{{ l('Saved posts') }}</div>*/
/* 						  <div class="panel-body">*/
/* 						    <strong>{{ total_sposts|abs }}</strong>*/
/* 						  </div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-xs-6">*/
/* 						<div class="panel panel-default">*/
/* 						  <div class="panel-heading">{{ l('Schedules') }}</div>*/
/* 						  <div class="panel-body">*/
/* 						    <strong>{{ total_schedules|abs }}</strong>*/
/* 						  </div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row">*/
/* 	<div class="col-xs-12">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title">*/
/* 					<i class="fa fa-user" aria-hidden="true"></i> {{ l("My account") }}*/
/* 				</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<div class="row">*/
/* 					<div class="col-xs-12 col-sm-6">*/
/* 						<ul class="list-group">*/
/* 						  <li class="list-group-item">*/
/* 						    <span class="badge {% if group.row('max_posts') == Insights_num_day.row('posts') %}*/
/* 						    badge-danger*/
/* 							{% endif %}">{{ Insights_num_day.row('posts')|abs }} / */
/* 						    {% if group.row('max_posts') ==  0 %}*/
/* 						    	<strong>&infin;</strong>*/
/* 						   	{% else %}*/
/* 						   		{{ group.row('max_posts') }}*/
/* 						    {% endif %}</span>*/
/* 						    {{ l('Posts per day') }}*/
/* 						  </li>*/
/* 						  <li class="list-group-item">*/
/* 						    <span class="badge {% if group.row('max_fbaccount') != 0 and group.row('max_fbaccount') == total_fb_account %}*/
/* 						    badge-danger*/
/* 							{% endif %}">*/
/* 							{{ total_fb_account }} / */
/* 						    {% if group.row('max_fbaccount') ==  0 %}*/
/* 						    	<strong>&infin;</strong>*/
/* 						   	{% else %}*/
/* 						   		{{ group.row('max_fbaccount') }}*/
/* 						    {% endif %}</span>*/
/* 						    {{ l('Facebook Accounts') }}*/
/* 						  </li>*/
/* */
/* 						  {% if kpModules.auto_comment is defined %}*/
/* 						  <li class="list-group-item">*/
/* 						  	{% if group.row('max_comments') == '-1' %}*/
/* 						  		<span class="badge badge-danger">{{ l('Disabled') }}</span>*/
/* 						  	{% else %}*/
/* 						    <span class="badge {% if group.row('max_comments') != 0 and group.row('max_comments') == Insights_num_day.row('comments')|abs %}*/
/* 						    badge-danger*/
/* 							{% endif %}">*/
/* 								{{ Insights_num_day.row('comments')|abs }} / */
/* 							    {% if group.row('max_comments') ==  0 %}*/
/* 							    	<strong>&infin;</strong>*/
/* 							   	{% else %}*/
/* 							   		{{ group.row('max_comments') }}*/
/* 							    {% endif %}*/
/* 							</span>*/
/* 							{% endif %}*/
/* 						    {{ l('Auto comments') }} {{ l("Per day") }}*/
/* 						  </li>*/
/* 						  {% endif %}*/
/* */
/* 						  {% if kpModules.auto_like is defined %}*/
/* 						  <li class="list-group-item">*/
/* 						  	{% if group.row('max_likes') == '-1' %}*/
/* 						  		<span class="badge badge-danger">{{ l('Disabled') }}</span>*/
/* 						  	{% else %}*/
/* 							    <span class="badge {% if group.row('max_likes') != 0 and group.row('max_likes') == Insights_num_day.row('likes')|abs %}*/
/* 							    badge-danger*/
/* 								{% endif %}">*/
/* 									{{ Insights_num_day.row('likes')|abs }} / */
/* 								    {% if group.row('max_likes') ==  0 %}*/
/* 								    	<strong>&infin;</strong>*/
/* 								   	{% else %}*/
/* 								   		{{ group.row('max_likes') }}*/
/* 								    {% endif %}*/
/* 								</span>*/
/* 							{% endif %}*/
/* 						    {{ l('Auto likes') }}  {{ l("Per day") }}*/
/* 						  </li>*/
/* 						  {% endif %}*/
/* */
/* 						  {% if KPMIsActive("join_groups") %}*/
/* 						  <li class="list-group-item">*/
/* 						  	{% if group.row('join_groups') == '-1' %}*/
/* 						  		<span class="badge badge-danger">{{ l('Disabled') }}</span>*/
/* 						  	{% else %}*/
/* 							    <span class="badge {% if group.row('join_groups') != 0 and group.row('join_groups') == Insights_num_day.row('join_groups')|abs %}*/
/* 							    badge-danger*/
/* 								{% endif %}">*/
/* 									{{ Insights_num_day.row('join_groups')|abs }} / */
/* 								    {% if group.row('join_groups') ==  0 %}*/
/* 								    	<strong>&infin;</strong>*/
/* 								   	{% else %}*/
/* 								   		{{ group.row('join_groups') }}*/
/* 								    {% endif %}*/
/* 								</span>*/
/* 							{% endif %}*/
/* 						    {{ l('Join group request') }}  {{ l("Per day") }}*/
/* 						  </li>*/
/* 						  {% endif %}*/
/* */
/* */
/* 						  {% if KPMIsActive("invite_join_groups") %}*/
/* 						  <li class="list-group-item">*/
/* 						  	{% if group.row('invite_join_groups') == '-1' %}*/
/* 						  		<span class="badge badge-danger">{{ l('Disabled') }}</span>*/
/* 						  	{% else %}*/
/* 							    <span class="badge {% if group.row('invite_join_groups') != 0 and group.row('invite_join_groups') == Insights_num_day.row('invite_join_groups')|abs %}*/
/* 							    badge-danger*/
/* 								{% endif %}">*/
/* 									{{ Insights_num_day.row('invite_join_groups')|abs }} / */
/* 								    {% if group.row('invite_join_groups') ==  0 %}*/
/* 								    	<strong>&infin;</strong>*/
/* 								   	{% else %}*/
/* 								   		{{ group.row('invite_join_groups') }}*/
/* 								    {% endif %}*/
/* 								</span>*/
/* 							{% endif %}*/
/* 						    {{ l('Invite Join group') }}  {{ l("Per day") }}*/
/* 						  </li>*/
/* 						  {% endif %}*/
/* */
/* */
/* 						  <li class="list-group-item">*/
/* 						    {% if group.row('upload_images') ==  1 %}*/
/* 						    	<span class="badge badge-success">{{ l('Enabled') }}</span>*/
/* 						   	{% else %}*/
/* 						   		<span class="badge badge-danger">{{ l('Disabled') }}</span>*/
/* 						    {% endif %}*/
/* 						    {{ l('Upload Images') }}*/
/* 						  </li>*/
/* 						  <li class="list-group-item">*/
/* 						    {% if group.row('upload_videos') ==  1 %}*/
/* 						    	<span class="badge badge-success">{{ l('Enabled') }}</span>*/
/* 						   	{% else %}*/
/* 						   		<span class="badge badge-danger">{{ l('Disabled') }}</span>*/
/* 						    {% endif %}*/
/* 						    {{ l('Upload Videos') }}*/
/* 						  </li>*/
/* 						  */
/* 						  <li class="list-group-item">*/
/* 						    {% if group.row('max_upload') != 0 and group.row('max_upload') <= storageSize %}*/
/* 						    	<span class="badge badge-danger">*/
/* 						    	{{ (storageSize/1000)|number_format }} {{ l('MB') }}  /*/
/* 							{% else %}*/
/* 								<span class="badge">*/
/* 								{{ (storageSize/1000)|number_format(1) }} {{ l('MB') }}  /	*/
/* 							{% endif %}*/
/* 							 */
/* 						    {% if group.row('max_upload') ==  0 %}*/
/* 						    	<strong>&infin;</strong>*/
/* 						   	{% else %}*/
/* 						   		{{ (group.row('max_upload')/1000)|number_format }} {{ l('MB') }}*/
/* 						    {% endif %}</span>*/
/* 						    {{ l('Upload Usage') }}*/
/* 						  </li>*/
/* */
/* 						</ul>*/
/* 					</div>*/
/* 					<div class="col-xs-12 col-sm-6">*/
/* 						<ul class="list-group">*/
/* 						  <li class="list-group-item">*/
/* 						    {% if group.row('account_expiry') ==  0 %}*/
/* 						    	<span class="badge badge-success">{{ l('Never') }}</span>*/
/* 						   	{% else %}*/
/* 						   		<span class="badge">{{ current_user['expire_on']|date(date_format) }}</span>*/
/* 						    {% endif %}*/
/* 						    {{ l('Account expiry in') }}*/
/* 						  </li>*/
/* 						  <li class="list-group-item">*/
/* 						    <span class="badge">{{ l(group.row('name'))|capitalize }}</span>*/
/* 						    {{ l('Package') }}*/
/* 						  </li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script src="{{ assets('theme/default/js/libs/charts.js') }}"></script>*/
/* 	<script>google.charts.load('current', {'packages':['corechart']});</script>*/
/* 	<script src="{{ assets('theme/default/js/libs/moment.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/* 	{{ parent() }}*/
/*     <script type="text/javascript">*/
/*    		google.charts.setOnLoadCallback(drawChart);*/
/*    		kp_preloader("on",".posts .chart .panel-body");*/
/*     	function drawChart() {*/
/*         var data = google.visualization.arrayToDataTable([*/
/*           ['Day', '{{ l('Posts') }}', '{{ l('Posts failed') }}'],*/
/*           {% for r in Insights_week %}*/
/*           	['{{ r.created_at|date(date_format) }}', {{ r.posts }}, {{ r.posts_fail }}],*/
/*           {% else %}*/
/*           	['',0,0]*/
/*           {% endfor %}*/
/*         ]);*/
/* */
/*         var options = {title: '{{ l('Last 7 days') }}',curveType: 'none',legend: { position: 'top' }};*/
/* */
/*         var chart = new google.visualization.AreaChart(document.getElementById('last_7_days'));*/
/*         chart.draw(data, options);*/
/* */
/*         var data = google.visualization.arrayToDataTable([*/
/*           ['Day', '{{ l('Posts') }}', '{{ l('Posts failed') }}'],*/
/*           {% for r in Insights_month %}*/
/*           	['{{ r.created_at|date(date_format) }}', {{ r.posts }}, {{ r.posts_fail }}],*/
/*           {% else %}*/
/*           	['',0,0]*/
/*           {% endfor %}*/
/*         ]);*/
/* */
/*         var options = {title: '{{ l('Last 30 days') }}s',curveType: 'none',legend: { position: 'top' }};*/
/*        */
/*         var chart = new google.visualization.AreaChart(document.getElementById('p_last_30_days'));*/
/*         chart.draw(data, options);*/
/*         kp_preloader("off",".posts .chart .panel-body");*/
/*       }*/
/*     </script>*/
/* {% endblock %}*/
