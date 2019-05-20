<?php

/* schedule_posts/schedules.twig */
class __TwigTemplate_46fd8597ce00f0e6a016b954cf7007ad87e9b92f3b6f469796b5b5813d8c815d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "schedule_posts/schedules.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedules")), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"messageBox\"></div>
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">
      <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Scheduled posts")), "html", null, true);
        echo "
      <span class=\"TotalRecords\">";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Showing %s of %s ", twig_length_filter($this->env, (isset($context["schedulesList"]) ? $context["schedulesList"] : null)), (isset($context["total_posts"]) ? $context["total_posts"] : null))), "html", null, true);
        echo "</span>
    </h3>
  </div>
  <div class=\"panel-body has-responsive-table\">
    <form method=\"POST\">
      
      <button type=\"button\" class=\"btn btn-danger\" id=\"deleteScheduleBtn\">
        <i class=\"fa fa-trash fa-fw\" aria-hidden=\"true\"></i>
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "s", array(0 => "Delete"), "method"), "html", null, true);
        echo "
      </button>

      <table class=\"table table-bordered table-striped dataTable\" id=\"datatable\" width=\"100%\">
        <thead>
          <tr>
            <td>
              <input type='checkbox' id=\"checkbox-all\" class=\"check-all checkbox-style\" name='a' />
              <label for=\"checkbox-all\"></label>
            </td>
            <td class=\"hidden-lg\">";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Details")), "html", null, true);
        echo "</td>
            <td class=\"hidden-xs hidden-sm\">";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("NEXT_POSTING_TIME")), "html", null, true);
        echo "</td>
            <td class=\"visible-lg\">";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_INTERVAL")), "html", null, true);
        echo "</td>
            <td class=\"hidden-xs hidden-sm\">";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST")), "html", null, true);
        echo "</td>
            <td class=\"visible-lg\">";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB_APP")), "html", null, true);
        echo "</td>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB_ACCOUNT")), "html", null, true);
        echo "</td>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("STATUS")), "html", null, true);
        echo "</td>
            <td></td>
          </tr>
        </thead>
        <tbody>
              ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schedulesList"]) ? $context["schedulesList"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sp"]) {
            // line 44
            echo "                ";
            $context["fba"] = $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "get", array(0 => $this->getAttribute($context["sp"], "fb_account", array())), "method");
            // line 45
            echo "                ";
            $context["nextRepeat"] = call_user_func_array($this->env->getFunction('l')->getCallable(), array("Stoped"));
            // line 46
            echo "                ";
            if (($this->getAttribute($context["sp"], "repeat_every", array()) != 0)) {
                // line 47
                echo "                  ";
                $context["nextRepeat"] = twig_date_format_filter($this->env, $this->getAttribute($context["sp"], "repeated_at", array()), (isset($context["date_format"]) ? $context["date_format"] : null));
                // line 48
                echo "                  ";
                // line 49
                echo "                  ";
                // line 50
                echo "                ";
            }
            // line 51
            echo "                
                ";
            // line 52
            $context["ap"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute($context["sp"], "auto_pause", array())));
            // line 53
            echo "
                ";
            // line 54
            $context["autoPause"] = "";
            // line 55
            echo "                ";
            if ((($this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "pause", array()) != null) && ($this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "pause", array()) != 0))) {
                // line 56
                echo "                  ";
                $context["autoPause"] = (((((call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto pause after")) . " : ") . $this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "pause", array())) . " posts
") . call_user_func_array($this->env->getFunction('l')->getCallable(), array("Resume after"))) . " : ");
                // line 57
                echo "
                  ";
                // line 58
                if (($this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "resume", array()) > 90)) {
                    // line 59
                    echo "                    ";
                    $context["autoPause"] = ((((isset($context["autoPause"]) ? $context["autoPause"] : null) . ($this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "resume", array()) / 60)) . " ") . call_user_func_array($this->env->getFunction('l')->getCallable(), array("Hours")));
                    // line 60
                    echo "                  ";
                } else {
                    // line 61
                    echo "                    ";
                    $context["autoPause"] = ((((isset($context["autoPause"]) ? $context["autoPause"] : null) . $this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "resume", array())) . " ") . call_user_func_array($this->env->getFunction('l')->getCallable(), array("Minutes")));
                    // line 62
                    echo "                  ";
                }
                // line 63
                echo "                  
                ";
            }
            // line 65
            echo "                  
                  ";
            // line 66
            $context["stat"] = ((($this->getAttribute($context["sp"], "pause", array()) == "0")) ? ("1") : ("0"));
            // line 67
            echo "                  ";
            $context["pauseBtn"] = ((($this->getAttribute($context["sp"], "pause", array()) == "0")) ? ("primary") : ("warning"));
            // line 68
            echo "                  ";
            $context["pauseBtnIcon"] = ((($this->getAttribute($context["sp"], "pause", array()) == "0")) ? ("pause") : ("play"));
            // line 69
            echo "
                  <tr id=\"s-";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
            echo "\">
                    <td>
                      <input type='checkbox' class='checkbox checkbox-style' name='checkbox[]' id='checkbox-";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
            echo "' value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
            echo "' />
                      <label for='checkbox-";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
            echo "'></label>
                    </td>
                    
                    <td class=\"hidden-lg\">
                      <button type=\"button\" class=\"btn btn-default toggleRowData\">+</button>
                    </td>
                    
                    <td class=\"hidden-xs hidden-sm\">
                      ";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sp"], "next_post_time", array()), ((isset($context["date_format"]) ? $context["date_format"] : null) . " H:i")), "html", null, true);
            echo "
                    </td>
                    
                    <td class=\"visible-lg\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "post_interval", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Min")), "html", null, true);
            echo "</td>
                    
                    <td  class=\"hidden-xs hidden-sm\">
                      ";
            // line 87
            if (twig_test_empty($this->getAttribute($context["sp"], "post_title", array()))) {
                // line 88
                echo "                        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Not found")), "html", null, true);
                echo "</span>
                      ";
            } else {
                // line 90
                echo "                         <a href=\"";
                echo twig_escape_filter($this->env, base_url(("/?post_id=" . $this->getAttribute($context["sp"], "post_id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "post_title", array()), "html", null, true);
                echo "</a>
                      ";
            }
            // line 92
            echo "                    </td>
                    
                    <td class=\"visible-lg\">
                      ";
            // line 95
            if (twig_test_empty($this->getAttribute($context["sp"], "app_name", array()))) {
                // line 96
                echo "                        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Not found")), "html", null, true);
                echo "</span>
                      ";
            } else {
                // line 98
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "app_name", array()), "html", null, true);
                echo "
                      ";
            }
            // line 100
            echo "                    </td>
                
                    <td>
                      ";
            // line 103
            if (twig_test_empty($this->getAttribute($context["sp"], "firstname", array()))) {
                // line 104
                echo "                        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Not found")), "html", null, true);
                echo "</span>
                      ";
            } else {
                // line 106
                echo "                        <a href=\"https://facebook.com/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "fb_account", array()), "html", null, true);
                echo "\" target=\"_blank\">
                          <img src='https://graph.facebook.com/";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "fb_account", array()), "html", null, true);
                echo "/picture?redirect=1&height=40&width=40&type=normal' width='32' height='32' style='float: left' class=\"fbProfileImg\" /> <span class=\"hidden-xs fbProfileName\">&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "lastname", array()), "html", null, true);
                echo "</span></a>
                      ";
            }
            // line 109
            echo "                    </td>

                    <td>
                      ";
            // line 112
            if (($this->getAttribute($context["sp"], "status", array()) == "1")) {
                // line 113
                echo "                        <span class='btn btn-success'>
                        \t<span class=\"visible-lg\">";
                // line 114
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("COMPLETED")), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "total_targets", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "total_targets", array()), "html", null, true);
                echo ")</span>
                          <span class=\"hidden-lg\">(";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "total_targets", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "total_targets", array()), "html", null, true);
                echo ")</span> 
                        </span>
                      ";
            } else {
                // line 118
                echo "                        <span class='btn btn-default'>
                        \t<span class=\"visible-lg\">";
                // line 119
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("inProgress")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "next_target", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "total_targets", array()), "html", null, true);
                echo "</span>
                        \t<span class=\"hidden-lg\">";
                // line 120
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("inProgress")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "next_target", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "total_targets", array()), "html", null, true);
                echo "</span>
                        </span>
                      ";
            }
            // line 123
            echo "                      ";
            if ( !twig_test_empty((isset($context["autoPause"]) ? $context["autoPause"] : null))) {
                // line 124
                echo "                        <a href='#'  onclick='return false;' data-toggle='kp_tooltip' data-placement='top' title='";
                echo twig_escape_filter($this->env, (isset($context["autoPause"]) ? $context["autoPause"] : null), "html", null, true);
                echo "'><span class='fa fa-question-circle'></span></a>
                      ";
            }
            // line 126
            echo "                    </td>

                    <td>

                      <button type='button' title='";
            // line 130
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Edit")), "html", null, true);
            echo "' data-toggle='kp_tooltip' data-placement='top' class='btn btn-primary editSchedule' value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
            echo "' >
                      <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                      </button>
                      
                      ";
            // line 134
            if (($this->getAttribute($context["sp"], "pause", array()) == 1)) {
                // line 135
                echo "                        <button type=\"button\" data-toggle='kp_tooltip' class=\"btn btn-warning togglePauseBtn\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i></button>
                      ";
            } else {
                // line 137
                echo "                        <button type=\"button\" class=\"btn btn-primary data-toggle='kp_tooltip' togglePauseBtn\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-pause\" aria-hidden=\"true\"></i></button>
                      ";
            }
            // line 139
            echo "                      
                      <a href='";
            // line 140
            echo twig_escape_filter($this->env, base_url(("schedules/logs/index/" . $this->getAttribute($context["sp"], "id", array()))), "html", null, true);
            echo "' data-toggle='kp_tooltip' title='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("VIEW_LOG")), "html", null, true);
            echo "' class='btn btn-primary'>
                        <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>
                      </a>

                      ";
            // line 144
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "comments"), "method") && $this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "auto_comment", array(), "any", true, true))) {
                // line 145
                echo "                        <button type=\"button\" title='";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto comment")), "html", null, true);
                echo "' data-toggle='kp_tooltip' class=\"btn btn-primary AddAutoComment\"value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-commenting\" aria-hidden=\"true\"></i></button>
                      ";
            }
            // line 147
            echo "
                      ";
            // line 148
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "likes"), "method") && $this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "auto_like", array(), "any", true, true))) {
                // line 149
                echo "                        <button type=\"button\" title='";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto like")), "html", null, true);
                echo "' data-toggle='kp_tooltip' class=\"btn btn-primary AddAutoLike\"value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i></button>
                      ";
            }
            // line 151
            echo "
                    </td>
                  </tr>
                  <tr class=\"hidden-lg rowData\" style=\"display:none\">
                  \t<td></td>
                  \t<td colspan=\"8\">
                  \t\t
                        <div class=\"visible-xs visible-sm\">";
            // line 158
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("NEXT_POSTING_TIME")), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sp"], "next_post_time", array()), ((isset($context["date_format"]) ? $context["date_format"] : null) . " H:i")), "html", null, true);
            echo "</div>
                        
                        <div class=\"visible-xs visible-sm\">";
            // line 160
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Post")), "html", null, true);
            echo " : 
                          ";
            // line 161
            if (twig_test_empty($this->getAttribute($context["sp"], "post_title", array()))) {
                // line 162
                echo "                            <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Not found")), "html", null, true);
                echo "</span>
                          ";
            } else {
                // line 164
                echo "                             <a href=\"";
                echo twig_escape_filter($this->env, base_url(("/?post_id=" . $this->getAttribute($context["sp"], "post_id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "post_title", array()), "html", null, true);
                echo "</a>
                          ";
            }
            // line 166
            echo "                        </div>

                  \t\t\t<div>";
            // line 168
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB_APP")), "html", null, true);
            echo " : 
                  \t\t\t\t";
            // line 169
            if (twig_test_empty($this->getAttribute($context["sp"], "app_name", array()))) {
                // line 170
                echo "\t\t\t                        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Not found")), "html", null, true);
                echo "</span>
\t\t\t                    ";
            } else {
                // line 172
                echo "\t\t\t                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "app_name", array()), "html", null, true);
                echo "
\t\t\t                    ";
            }
            // line 174
            echo "                        </div>

                        <div>";
            // line 176
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_INTERVAL")), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "post_interval", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Min")), "html", null, true);
            echo "</div>

                        ";
            // line 178
            if ((($this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "pause", array()) != null) && ($this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "pause", array()) != 0))) {
                // line 179
                echo "                          <div>
                            ";
                // line 180
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto pause after")), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "pause", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Posts")), "html", null, true);
                echo "
                          </div>
                          <div>
                            ";
                // line 183
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Resume after")), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "resume", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Minutes")), "html", null, true);
                echo "
                          </div>
                        ";
            }
            // line 186
            echo "
                  \t</td>
                  </tr>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 190
            echo "            <tr>
              <td colspan=\"9\">
                ";
            // line 192
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No records available")), "html", null, true);
            echo "
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "        </tbody>
      </table>
      
      ";
        // line 199
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 200
            echo "        ";
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "
      ";
        }
        // line 202
        echo "    </form>
  </div>
</div>

<div id=\"editSchedule\" class=\"modal fade\" role=\"dialog\" data-backdrop=\"static\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 211
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Edit schedule")), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"messageBox\"></div>
        <input type=\"hidden\" name=\"ScheduleId\" id=\"ScheduleId\" value=\"\">
        ";
        // line 216
        $this->loadTemplate("schedule_posts/schedule_block.twig", "schedule_posts/schedules.twig", 216)->display($context);
        // line 217
        echo "      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 219
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("CLOSE")), "html", null, true);
        echo "</a>
        <button id=\"editScheduleBtn\" class=\"btn btn-primary\">";
        // line 220
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE")), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>

";
        // line 227
        $context["box_id"] = "schedule";
        // line 228
        $context["delete_msg"] = ((((call_user_func_array($this->env->getFunction('l')->getCallable(), array("Are you sure you want to delete the selected records?")) . ", ") . call_user_func_array($this->env->getFunction('l')->getCallable(), array("This action will delete all the schedule related data"))) . ", ") . call_user_func_array($this->env->getFunction('l')->getCallable(), array("This action cannot be undone")));
        // line 229
        $this->loadTemplate("blocks/delete_modal.twig", "schedule_posts/schedules.twig", 229)->display($context);
        // line 230
        echo "
";
        // line 231
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "comments"), "method") && $this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "auto_comment", array(), "any", true, true))) {
            // line 232
            echo "  ";
            $this->loadTemplate("@comments/components/addAutoComment.twig", "schedule_posts/schedules.twig", 232)->display($context);
            // line 233
            echo "  ";
            $this->loadTemplate("@comments/components/editAutoComment.twig", "schedule_posts/schedules.twig", 233)->display($context);
        }
        // line 235
        echo "
";
        // line 236
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "likes"), "method") && $this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "auto_like", array(), "any", true, true))) {
            // line 237
            echo "  ";
            $this->loadTemplate("@autolike/components/addAutoLike.twig", "schedule_posts/schedules.twig", 237)->display($context);
        }
        // line 239
        echo "
";
    }

    // line 242
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 243
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 244
        echo twig_escape_filter($this->env, assets("theme/default/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 245
        echo twig_escape_filter($this->env, assets("theme/default/css/emojionearea.min.css"), "html", null, true);
        echo "\">
  <link href=\"";
        // line 246
        echo twig_escape_filter($this->env, assets("theme/default/css/tablesorter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
";
    }

    // line 249
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 250
        echo "  ";
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
  <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/moment.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/jquery.tablesorter.min.js"), "html", null, true);
        echo "\"></script>
  <script>

    \$(function () {

      if(window.location.hash != \"\") {
          var highlightedS = \$(\"#\" + window.location.hash.substring(1));
          highlightedS.css({\"background\": \"#fdffa6\",\"transition\": \"2s\"});
      }
        
      \$(\"#datatable\").tablesorter();

      /* reAttched Checkbo Event*/
      \$(\"#checkbox-all\").click(function () {
        \$('#datatable tbody input[type=\"checkbox\"]').prop('checked', this.checked);
      });

      \$('#scheduledPostTime').datetimepicker({format: '";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo " HH:mm'});
      \$('#start_on').datetimepicker({format: '";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo " HH:mm'});
      \$('#end_on').datetimepicker({format: '";
        // line 272
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo " HH:mm'});

      \$( \".toggleRowData\" ).click(function() {
        \$( this ).parent().parent().next().stop().toggle( \"fast\" );
      });

    });

    ";
        // line 281
        echo "    \$( \"#repeatEvery\" ).change(function() {
      if(\$(this).val() == 0){
        \$(\"#start_on\").prop('disabled', true);
        \$(\"#end_on\").prop('disabled', true);
      }else{
         \$(\"#start_on\").prop('disabled', false);
         \$(\"#end_on\").prop('disabled', false);
      }
    });

    \$( \"#schedulePauseAfter\" ).change(function() {
      if(\$(this).val() == 0){
        \$(\"#scheduleResumeAfter\").prop('disabled', true);
      }else{
         \$(\"#scheduleResumeAfter\").prop('disabled', false);
      }
    });

    ";
        // line 300
        echo "    \$(\".editSchedule\").click(function(){

      // Reset the modal
      \$(\"#editSchedule .messageBox\").html(\"\");

      \$(\"#scheduledPostInterval\").val(\"\");

      \$(\"#scheduledPostTime\").val(\"\");
      \$(\"#schedulePauseAfter\").val(\"\");
      \$(\"#scheduleResumeAfter\").val(\"\");

      \$(\"#repeatEvery\").val(\"\");

      \$(\"#start_on\").val(\"\");
      \$(\"#end_on\").val(\"\");

      \$(\"#scheduledPostApp\").html(\"\");

      var scheduleID = \$(this).val();
      \$('#ScheduleId').val(scheduleID);

      kp_preloader(\"on\",\"#editSchedule .modal-body\");

      // Disable save schedule post
      \$(\"#editScheduleBtn\").prop('disabled', true);

      // Load schedule info
      \$.ajax({
        url: '";
        // line 328
        echo twig_escape_filter($this->env, base_url("schedules/action/details/"), "html", null, true);
        echo "'+scheduleID,
        dataType: 'json',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded',
        data: {
          ";
        // line 333
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
        },
        success: function( data, textStatus, jQxhr ){
          if(data.status == \"ok\"){

            // bind values
            var next_post_time = new Date(data.schedule.next_post_time);
            \$(\"#scheduledPostTime\").val(moment(next_post_time).format('";
        // line 340
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo " HH:mm'));

            if(data.schedule.post_interval > 90){
              \$(\"#intervalHour\").prop(\"checked\", true);
              \$(\"#scheduledPostInterval\").val(data.schedule.post_interval/60);
            }else{
              \$(\"#intervalMunite\").prop(\"checked\", true);
              \$(\"#scheduledPostInterval\").val(data.schedule.post_interval);
            }

            \$(\"#schedulePauseAfter\").val(data.schedule.auto_pause.pause);

            \$(\"#repeatEvery\").val(data.schedule.repeat_every);

            if(\$(\"#repeatEvery\").val() == 0){
              \$(\"#start_on\").prop('disabled', true);
              \$(\"#end_on\").prop('disabled', true);
            }else{
               \$(\"#start_on\").prop('disabled', false);
               \$(\"#end_on\").prop('disabled', false);
               var start_on = new Date(data.schedule.start_on);
               var end_on = new Date(data.schedule.end_on);
              \$(\"#start_on\").val(moment(start_on).format('";
        // line 362
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo " HH:mm'));
              \$(\"#end_on\").val(moment(end_on).format('";
        // line 363
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo " HH:mm'));
            }

            if(\$(\"#schedulePauseAfter\").val() == 0){
              \$(\"#scheduleResumeAfter\").prop('disabled', true);
            }else{
               \$(\"#scheduleResumeAfter\").prop('disabled', false);
               if(data.schedule.auto_pause.resume > 90){
                \$(\"#rfintervalHour\").prop(\"checked\", true);
                \$(\"#scheduleResumeAfter\").val(data.schedule.auto_pause.resume/60);
              }else{
                \$(\"#rfintervalMunite\").prop(\"checked\", true);
                \$(\"#scheduleResumeAfter\").val(data.schedule.auto_pause.resume);
              }
            }
            
            var apps = data.schedule.fb_account.fb_apps;

            for (i = 0; i < apps.length; i++) { 
              \$('#scheduledPostApp').append(\"<option value='\"+apps[i]['appid']+\"'>\"+apps[i]['app_name']+\"</option>\");
            }

            \$(\"#scheduledPostApp\").val(data.schedule.post_app);

          }else{
            alertBox(data.message,\"danger\",\"#editSchedule .messageBox\",false);
          }
        },
        error: function( jqXhr, textStatus, errorThrown ){ 
          console.log(errorThrown);
          alertBox(\"";
        // line 393
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\"#editSchedule .messageBox\",false);
        },
        complete: function() {
          // Re-enable save schedule post btn
          \$(\"#editScheduleBtn\").prop('disabled', false);
          kp_preloader(\"off\",\"#editSchedule .modal-body\");
        }
      });

      // Show the modal
      \$('#editSchedule').modal('show');
    });

    ";
        // line 407
        echo "    \$(\"#editScheduleBtn\").click(function(){

      kp_preloader(\"on\",\"#editSchedule .modal-body\");

      var pi = \$(\"#scheduledPostInterval\",\"#editSchedule\").val();
      var apf = \$(\"#scheduleResumeAfter\",\"#editSchedule\").val();

      var post_interval = \$(\"input[type='radio']:checked\",\"#editSchedule\").val() == \"minute\" ? pi : pi*60 ;

      var resume_after = \$(\".autoPause input[type='radio']:checked\",\"#editSchedule\").val() == \"minute\" ? apf : apf*60 ;
      
      // Disable save schedule post
      \$(\"#editScheduleBtn\").prop('disabled', true);

      \$.ajax({
        url: '";
        // line 422
        echo twig_escape_filter($this->env, base_url("schedules/action/update"), "html", null, true);
        echo "',
        dataType: 'json',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded',
        data: {
          schedule_id: \$('#ScheduleId').val(),
          run_at: \$(\"#scheduledPostTime\",\"#editSchedule\").val(),
          post_interval: post_interval,
          post_app: \$(\"#scheduledPostApp\",\"#editSchedule\").val(),
          fb_account: \$(\"#scheduledFbAccount\",\"#editSchedule\").val(),
          pause_after: \$(\"#schedulePauseAfter\",\"#editSchedule\").val(),
          resume_after: resume_after,

          repeat_every: \$(\"#repeatEvery\",\"#editSchedule\").val(),
          end_on: \$(\"#end_on\",\"#editSchedule\").val(),
          
          ";
        // line 438
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
        },
        success: function( data, textStatus, jQxhr ){
          if(data.status == \"success\"){
            alertBox(data.message,\"success\",\"#editSchedule .messageBox\",false);
            \$(document).on('hide.bs.modal','#editSchedule', function () {location.reload();});
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
            alertBox(htmlData,\"danger\",\"#editSchedule .messageBox\",false);
          }
        },
        error: function( jqXhr, textStatus, errorThrown ){ 
          console.log(errorThrown);
          alertBox(\"";
        // line 459
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\"#editSchedule .messageBox\",false);
        },
        complete: function() {
          // Re-enable save schedule post btn
          \$(\"#editScheduleBtn\").prop('disabled', false);
          kp_preloader(\"off\",\"#editSchedule .modal-body\");
        }
      });
      
    });

    \$( \".togglePauseBtn\" ).click(function(){
      var schedule = \$( this );
        \$.ajax({
          url: '";
        // line 473
        echo twig_escape_filter($this->env, base_url("schedules/action/toggle_schedule_pause"), "html", null, true);
        echo "',
          dataType: 'json',
          type: 'post',
          contentType: 'application/x-www-form-urlencoded',
          data: { 
            sid: schedule.val(),
            ";
        // line 479
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
          },
          success: function( data, textStatus, jQxhr ){
              if(data.status == \"success\"){
                schedule.toggleClass( \"btn-warning\" );
                schedule.toggleClass( \"btn-primary\" );
                schedule.find(\"i\").toggleClass( \"fa-pause\" );
                schedule.find(\"i\").toggleClass( \"fa-play\" );
                schedule.find(\"i\").removeClass(\"fa-exclamation\");
              }else{
                schedule.find(\"i\").addClass(\"fa-exclamation\");
                schedule.find(\"i\").removeClass(\"fa-toggle-on\");
              }
          },
          error: function( jqXhr, textStatus, errorThrown ){ 
              schedule.find(\"i\").addClass(\"fa-exclamation\");
              schedule.find(\"i\").removeClass(\"fa-play\");
              schedule.find(\"i\").removeClass(\"fa-pause\");
              console.log(errorThrown); 
          }
        });
    });

    ";
        // line 503
        echo "    \$(\"#deleteScheduleBtn\").click(function(){
      if(\$('tbody .checkbox:checked').length > 0){
       \$(\"#delete_schedule\").modal(\"show\");
      }
    });

    \$(\".deleteBtn_schedule\" ).click(function(){
      kp_preloader(\"on\",\"#delete_schedule .modal-body\");
      var schedules = [];
      \$('tbody .checkbox:checked').each(function(){
        schedules.push(\$(this).val());
      });
      \$.ajax({
        url: '";
        // line 516
        echo twig_escape_filter($this->env, base_url("schedules/action/delete"), "html", null, true);
        echo "',
        dataType: 'json',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded',
        data: { 
          ids: JSON.stringify(schedules),
          ";
        // line 522
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
         },
        success: function( data, textStatus, jQxhr ){
          if(data.status == \"success\"){
            alertBox(data.message,\"success\",\".deleteAlertBox_schedule\",false,false);
              \$(\".deleteBtn_schedule\").prop('disabled', true);
            \$(document).on('hide.bs.modal','#delete_schedule', function () {location.reload();});
          }else{
            alertBox(data.message,\"danger\",\".deleteAlertBox_schedule\",false,false);
          }
        },
        error: function( jqXhr, textStatus, errorThrown ){ 
          console.log(errorThrown);
          alertBox(\"";
        // line 535
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "s", array(0 => "Unable to complete your request"), "method"), "html", null, true);
        echo "\",\"danger\",\".deleteAlertBox_schedule\",false,false);
        },
        complete: function(){
          kp_preloader(\"off\",\"#delete_schedule .modal-body\");
        }
      });

      \$('.deleteBox_content_schedule').html(\"\");
    });

  </script>
";
    }

    public function getTemplateName()
    {
        return "schedule_posts/schedules.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  991 => 535,  973 => 522,  964 => 516,  949 => 503,  921 => 479,  912 => 473,  895 => 459,  869 => 438,  850 => 422,  833 => 407,  817 => 393,  784 => 363,  780 => 362,  755 => 340,  743 => 333,  735 => 328,  705 => 300,  685 => 281,  674 => 272,  670 => 271,  666 => 270,  646 => 253,  642 => 252,  638 => 251,  633 => 250,  630 => 249,  624 => 246,  620 => 245,  616 => 244,  611 => 243,  608 => 242,  603 => 239,  599 => 237,  597 => 236,  594 => 235,  590 => 233,  587 => 232,  585 => 231,  582 => 230,  580 => 229,  578 => 228,  576 => 227,  567 => 220,  563 => 219,  559 => 217,  557 => 216,  549 => 211,  538 => 202,  532 => 200,  530 => 199,  525 => 196,  515 => 192,  511 => 190,  503 => 186,  493 => 183,  483 => 180,  480 => 179,  478 => 178,  469 => 176,  465 => 174,  459 => 172,  453 => 170,  451 => 169,  447 => 168,  443 => 166,  435 => 164,  429 => 162,  427 => 161,  423 => 160,  416 => 158,  407 => 151,  399 => 149,  397 => 148,  394 => 147,  386 => 145,  384 => 144,  375 => 140,  372 => 139,  366 => 137,  360 => 135,  358 => 134,  349 => 130,  343 => 126,  337 => 124,  334 => 123,  324 => 120,  316 => 119,  313 => 118,  305 => 115,  297 => 114,  294 => 113,  292 => 112,  287 => 109,  278 => 107,  273 => 106,  267 => 104,  265 => 103,  260 => 100,  254 => 98,  248 => 96,  246 => 95,  241 => 92,  233 => 90,  227 => 88,  225 => 87,  217 => 84,  211 => 81,  200 => 73,  194 => 72,  189 => 70,  186 => 69,  183 => 68,  180 => 67,  178 => 66,  175 => 65,  171 => 63,  168 => 62,  165 => 61,  162 => 60,  159 => 59,  157 => 58,  154 => 57,  150 => 56,  147 => 55,  145 => 54,  142 => 53,  140 => 52,  137 => 51,  134 => 50,  132 => 49,  130 => 48,  127 => 47,  124 => 46,  121 => 45,  118 => 44,  113 => 43,  105 => 38,  101 => 37,  97 => 36,  93 => 35,  89 => 34,  85 => 33,  81 => 32,  68 => 22,  57 => 14,  53 => 13,  44 => 8,  41 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ l("Schedules") }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {{ parent() }}*/
/* <div class="messageBox"></div>*/
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title">*/
/*       <i class="fa fa-calendar" aria-hidden="true"></i> {{ l("Scheduled posts") }}*/
/*       <span class="TotalRecords">{{ l('Showing %s of %s ',schedulesList|length,total_posts) }}</span>*/
/*     </h3>*/
/*   </div>*/
/*   <div class="panel-body has-responsive-table">*/
/*     <form method="POST">*/
/*       */
/*       <button type="button" class="btn btn-danger" id="deleteScheduleBtn">*/
/*         <i class="fa fa-trash fa-fw" aria-hidden="true"></i>*/
/*         {{ lang.s('Delete') }}*/
/*       </button>*/
/* */
/*       <table class="table table-bordered table-striped dataTable" id="datatable" width="100%">*/
/*         <thead>*/
/*           <tr>*/
/*             <td>*/
/*               <input type='checkbox' id="checkbox-all" class="check-all checkbox-style" name='a' />*/
/*               <label for="checkbox-all"></label>*/
/*             </td>*/
/*             <td class="hidden-lg">{{ l("Details") }}</td>*/
/*             <td class="hidden-xs hidden-sm">{{ l("NEXT_POSTING_TIME") }}</td>*/
/*             <td class="visible-lg">{{ l("POST_INTERVAL") }}</td>*/
/*             <td class="hidden-xs hidden-sm">{{ l("POST") }}</td>*/
/*             <td class="visible-lg">{{ l("FB_APP") }}</td>*/
/*             <td>{{ l("FB_ACCOUNT") }}</td>*/
/*             <td>{{ l('STATUS') }}</td>*/
/*             <td></td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*               {% for sp in schedulesList %}*/
/*                 {% set fba = fbaccount.get(sp.fb_account) %}*/
/*                 {% set nextRepeat = l('Stoped') %}*/
/*                 {% if sp.repeat_every != 0 %}*/
/*                   {% set nextRepeat = sp.repeated_at|date(date_format) %}*/
/*                   {# {% set nextRepeat->modify('+'.$sp->repeat_every.' day'); #}*/
/*                   {# set nextRepeat = nextRepeat->format("Y-m-d H:i"); #}*/
/*                 {% endif %}*/
/*                 */
/*                 {% set ap = json_decode(sp.auto_pause) %}*/
/* */
/*                 {% set autoPause = "" %}*/
/*                 {% if ap.pause != null and ap.pause != 0 %}*/
/*                   {% set autoPause = l('Auto pause after') ~ " : " ~ ap.pause ~ " posts\n" ~ l('Resume after') ~ " : " %}*/
/* */
/*                   {% if ap.resume > 90 %}*/
/*                     {% set autoPause = autoPause ~ ap.resume/60 ~ " " ~ l('Hours') %}*/
/*                   {% else %}*/
/*                     {% set autoPause = autoPause ~ ap.resume ~ " " ~ l('Minutes') %}*/
/*                   {% endif %}*/
/*                   */
/*                 {% endif %}*/
/*                   */
/*                   {% set stat = sp.pause == "0" ? "1" : "0" %}*/
/*                   {% set pauseBtn = sp.pause == "0" ? "primary" : "warning" %}*/
/*                   {% set pauseBtnIcon = sp.pause == "0" ? "pause" : "play" %}*/
/* */
/*                   <tr id="s-{{sp.id}}">*/
/*                     <td>*/
/*                       <input type='checkbox' class='checkbox checkbox-style' name='checkbox[]' id='checkbox-{{ sp.id }}' value='{{ sp.id }}' />*/
/*                       <label for='checkbox-{{ sp.id }}'></label>*/
/*                     </td>*/
/*                     */
/*                     <td class="hidden-lg">*/
/*                       <button type="button" class="btn btn-default toggleRowData">+</button>*/
/*                     </td>*/
/*                     */
/*                     <td class="hidden-xs hidden-sm">*/
/*                       {{ sp.next_post_time|date(date_format ~ " H:i") }}*/
/*                     </td>*/
/*                     */
/*                     <td class="visible-lg">{{ sp.post_interval }} {{ l('Min') }}</td>*/
/*                     */
/*                     <td  class="hidden-xs hidden-sm">*/
/*                       {% if sp.post_title is empty %}*/
/*                         <span class="text-danger">{{ l('Not found') }}</span>*/
/*                       {% else %}*/
/*                          <a href="{{ base_url('/?post_id=' ~ sp.post_id) }}">{{ sp.post_title }}</a>*/
/*                       {% endif %}*/
/*                     </td>*/
/*                     */
/*                     <td class="visible-lg">*/
/*                       {% if sp.app_name is empty %}*/
/*                         <span class="text-danger">{{ l('Not found') }}</span>*/
/*                       {% else %}*/
/*                         {{ sp.app_name }}*/
/*                       {% endif %}*/
/*                     </td>*/
/*                 */
/*                     <td>*/
/*                       {% if sp.firstname is empty %}*/
/*                         <span class="text-danger">{{ l('Not found') }}</span>*/
/*                       {% else %}*/
/*                         <a href="https://facebook.com/{{ sp.fb_account }}" target="_blank">*/
/*                           <img src='https://graph.facebook.com/{{ sp.fb_account }}/picture?redirect=1&height=40&width=40&type=normal' width='32' height='32' style='float: left' class="fbProfileImg" /> <span class="hidden-xs fbProfileName">&nbsp;{{ sp.firstname }} {{ sp.lastname }}</span></a>*/
/*                       {% endif %}*/
/*                     </td>*/
/* */
/*                     <td>*/
/*                       {% if sp.status == "1" %}*/
/*                         <span class='btn btn-success'>*/
/*                         	<span class="visible-lg">{{ l('COMPLETED') }} ({{ sp.total_targets }}/{{ sp.total_targets }})</span>*/
/*                           <span class="hidden-lg">({{ sp.total_targets }}/{{ sp.total_targets }})</span> */
/*                         </span>*/
/*                       {% else %}*/
/*                         <span class='btn btn-default'>*/
/*                         	<span class="visible-lg">{{ l('inProgress') }} {{ sp.next_target }}/{{ sp.total_targets }}</span>*/
/*                         	<span class="hidden-lg">{{ l('inProgress') }} {{ sp.next_target }}/{{ sp.total_targets }}</span>*/
/*                         </span>*/
/*                       {% endif %}*/
/*                       {% if autoPause is not empty %}*/
/*                         <a href='#'  onclick='return false;' data-toggle='kp_tooltip' data-placement='top' title='{{ autoPause }}'><span class='fa fa-question-circle'></span></a>*/
/*                       {% endif %}*/
/*                     </td>*/
/* */
/*                     <td>*/
/* */
/*                       <button type='button' title='{{ l('Edit') }}' data-toggle='kp_tooltip' data-placement='top' class='btn btn-primary editSchedule' value='{{ sp.id }}' >*/
/*                       <i class="fa fa-pencil-square-o" aria-hidden="true"></i>*/
/*                       </button>*/
/*                       */
/*                       {% if sp.pause == 1 %}*/
/*                         <button type="button" data-toggle='kp_tooltip' class="btn btn-warning togglePauseBtn" value="{{ sp.id }}"><i class="fa fa-play" aria-hidden="true"></i></button>*/
/*                       {% else %}*/
/*                         <button type="button" class="btn btn-primary data-toggle='kp_tooltip' togglePauseBtn" value="{{ sp.id }}"><i class="fa fa-pause" aria-hidden="true"></i></button>*/
/*                       {% endif %}*/
/*                       */
/*                       <a href='{{ base_url('schedules/logs/index/' ~ sp.id ) }}' data-toggle='kp_tooltip' title='{{ l('VIEW_LOG') }}' class='btn btn-primary'>*/
/*                         <i class="fa fa-folder-open" aria-hidden="true"></i>*/
/*                       </a>*/
/* */
/*                       {% if user.canUse("comments") and kpModules.auto_comment is defined %}*/
/*                         <button type="button" title='{{ l('Auto comment') }}' data-toggle='kp_tooltip' class="btn btn-primary AddAutoComment"value="{{ sp.id }}"><i class="fa fa-commenting" aria-hidden="true"></i></button>*/
/*                       {% endif %}*/
/* */
/*                       {% if user.canUse("likes") and kpModules.auto_like is defined %}*/
/*                         <button type="button" title='{{ l('Auto like') }}' data-toggle='kp_tooltip' class="btn btn-primary AddAutoLike"value="{{ sp.id }}"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>*/
/*                       {% endif %}*/
/* */
/*                     </td>*/
/*                   </tr>*/
/*                   <tr class="hidden-lg rowData" style="display:none">*/
/*                   	<td></td>*/
/*                   	<td colspan="8">*/
/*                   		*/
/*                         <div class="visible-xs visible-sm">{{ l("NEXT_POSTING_TIME") }} : {{ sp.next_post_time|date(date_format ~ " H:i") }}</div>*/
/*                         */
/*                         <div class="visible-xs visible-sm">{{ l("Post") }} : */
/*                           {% if sp.post_title is empty %}*/
/*                             <span class="text-danger">{{ l('Not found') }}</span>*/
/*                           {% else %}*/
/*                              <a href="{{ base_url('/?post_id=' ~ sp.post_id) }}">{{ sp.post_title }}</a>*/
/*                           {% endif %}*/
/*                         </div>*/
/* */
/*                   			<div>{{ l("FB_APP") }} : */
/*                   				{% if sp.app_name is empty %}*/
/* 			                        <span class="text-danger">{{ l('Not found') }}</span>*/
/* 			                    {% else %}*/
/* 			                        {{ sp.app_name }}*/
/* 			                    {% endif %}*/
/*                         </div>*/
/* */
/*                         <div>{{ l("POST_INTERVAL") }} : {{ sp.post_interval }} {{ l('Min') }}</div>*/
/* */
/*                         {% if ap.pause != null and ap.pause != 0 %}*/
/*                           <div>*/
/*                             {{ l('Auto pause after') }} : {{ ap.pause }} {{ l('Posts') }}*/
/*                           </div>*/
/*                           <div>*/
/*                             {{ l('Resume after') }} : {{ ap.resume }} {{ l('Minutes') }}*/
/*                           </div>*/
/*                         {% endif %}*/
/* */
/*                   	</td>*/
/*                   </tr>*/
/*           {% else %}*/
/*             <tr>*/
/*               <td colspan="9">*/
/*                 {{ l('No records available') }}*/
/*               </td>*/
/*             </tr>*/
/*           {% endfor %}*/
/*         </tbody>*/
/*       </table>*/
/*       */
/*       {% if pagination %}*/
/*         {{ pagination|raw}}*/
/*       {% endif %}*/
/*     </form>*/
/*   </div>*/
/* </div>*/
/* */
/* <div id="editSchedule" class="modal fade" role="dialog" data-backdrop="static">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*         <h4 class="modal-title">{{ l("Edit schedule") }}</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <div class="messageBox"></div>*/
/*         <input type="hidden" name="ScheduleId" id="ScheduleId" value="">*/
/*         {% include "schedule_posts/schedule_block.twig" %}*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button class="btn btn-default" data-dismiss="modal">{{ l("CLOSE") }}</a>*/
/*         <button id="editScheduleBtn" class="btn btn-primary">{{ l("SAVE") }}</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {# Box variables #}*/
/* {% set box_id = "schedule" %}*/
/* {% set delete_msg = l("Are you sure you want to delete the selected records?")~", "~ l("This action will delete all the schedule related data") ~ ", " ~ l("This action cannot be undone") %}*/
/* {% include "blocks/delete_modal.twig" %}*/
/* */
/* {% if user.canUse("comments") and kpModules.auto_comment is defined %}*/
/*   {% include "@comments/components/addAutoComment.twig" %}*/
/*   {% include "@comments/components/editAutoComment.twig" %}*/
/* {% endif %}*/
/* */
/* {% if user.canUse("likes") and kpModules.auto_like is defined %}*/
/*   {% include "@autolike/components/addAutoLike.twig" %}*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link href="{{ assets('theme/default/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">*/
/*   <link rel="stylesheet" type="text/css" href="{{ assets('theme/default/css/emojionearea.min.css') }}">*/
/*   <link href="{{ assets('theme/default/css/tablesorter.css') }}" rel="stylesheet"> */
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/*   {{ parent() }}*/
/*   <script src="{{ assets('theme/default/js/libs/moment.min.js') }}"></script>*/
/*   <script src="{{ assets('theme/default/js/libs/bootstrap-datetimepicker.min.js') }}"></script>*/
/*   <script src="{{ assets('theme/default/js/libs/jquery.tablesorter.min.js') }}"></script>*/
/*   <script>*/
/* */
/*     $(function () {*/
/* */
/*       if(window.location.hash != "") {*/
/*           var highlightedS = $("#" + window.location.hash.substring(1));*/
/*           highlightedS.css({"background": "#fdffa6","transition": "2s"});*/
/*       }*/
/*         */
/*       $("#datatable").tablesorter();*/
/* */
/*       /* reAttched Checkbo Event*//* */
/*       $("#checkbox-all").click(function () {*/
/*         $('#datatable tbody input[type="checkbox"]').prop('checked', this.checked);*/
/*       });*/
/* */
/*       $('#scheduledPostTime').datetimepicker({format: '{{ date_format_js }} HH:mm'});*/
/*       $('#start_on').datetimepicker({format: '{{ date_format_js }} HH:mm'});*/
/*       $('#end_on').datetimepicker({format: '{{ date_format_js }} HH:mm'});*/
/* */
/*       $( ".toggleRowData" ).click(function() {*/
/*         $( this ).parent().parent().next().stop().toggle( "fast" );*/
/*       });*/
/* */
/*     });*/
/* */
/*     {# If repeat once disbale repeat at #}*/
/*     $( "#repeatEvery" ).change(function() {*/
/*       if($(this).val() == 0){*/
/*         $("#start_on").prop('disabled', true);*/
/*         $("#end_on").prop('disabled', true);*/
/*       }else{*/
/*          $("#start_on").prop('disabled', false);*/
/*          $("#end_on").prop('disabled', false);*/
/*       }*/
/*     });*/
/* */
/*     $( "#schedulePauseAfter" ).change(function() {*/
/*       if($(this).val() == 0){*/
/*         $("#scheduleResumeAfter").prop('disabled', true);*/
/*       }else{*/
/*          $("#scheduleResumeAfter").prop('disabled', false);*/
/*       }*/
/*     });*/
/* */
/*     {# ----------------------- Edit the schedule ---------------------- #}*/
/*     $(".editSchedule").click(function(){*/
/* */
/*       // Reset the modal*/
/*       $("#editSchedule .messageBox").html("");*/
/* */
/*       $("#scheduledPostInterval").val("");*/
/* */
/*       $("#scheduledPostTime").val("");*/
/*       $("#schedulePauseAfter").val("");*/
/*       $("#scheduleResumeAfter").val("");*/
/* */
/*       $("#repeatEvery").val("");*/
/* */
/*       $("#start_on").val("");*/
/*       $("#end_on").val("");*/
/* */
/*       $("#scheduledPostApp").html("");*/
/* */
/*       var scheduleID = $(this).val();*/
/*       $('#ScheduleId').val(scheduleID);*/
/* */
/*       kp_preloader("on","#editSchedule .modal-body");*/
/* */
/*       // Disable save schedule post*/
/*       $("#editScheduleBtn").prop('disabled', true);*/
/* */
/*       // Load schedule info*/
/*       $.ajax({*/
/*         url: '{{ base_url("schedules/action/details/") }}'+scheduleID,*/
/*         dataType: 'json',*/
/*         type: 'post',*/
/*         contentType: 'application/x-www-form-urlencoded',*/
/*         data: {*/
/*           {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/*         },*/
/*         success: function( data, textStatus, jQxhr ){*/
/*           if(data.status == "ok"){*/
/* */
/*             // bind values*/
/*             var next_post_time = new Date(data.schedule.next_post_time);*/
/*             $("#scheduledPostTime").val(moment(next_post_time).format('{{ date_format_js }} HH:mm'));*/
/* */
/*             if(data.schedule.post_interval > 90){*/
/*               $("#intervalHour").prop("checked", true);*/
/*               $("#scheduledPostInterval").val(data.schedule.post_interval/60);*/
/*             }else{*/
/*               $("#intervalMunite").prop("checked", true);*/
/*               $("#scheduledPostInterval").val(data.schedule.post_interval);*/
/*             }*/
/* */
/*             $("#schedulePauseAfter").val(data.schedule.auto_pause.pause);*/
/* */
/*             $("#repeatEvery").val(data.schedule.repeat_every);*/
/* */
/*             if($("#repeatEvery").val() == 0){*/
/*               $("#start_on").prop('disabled', true);*/
/*               $("#end_on").prop('disabled', true);*/
/*             }else{*/
/*                $("#start_on").prop('disabled', false);*/
/*                $("#end_on").prop('disabled', false);*/
/*                var start_on = new Date(data.schedule.start_on);*/
/*                var end_on = new Date(data.schedule.end_on);*/
/*               $("#start_on").val(moment(start_on).format('{{ date_format_js }} HH:mm'));*/
/*               $("#end_on").val(moment(end_on).format('{{ date_format_js }} HH:mm'));*/
/*             }*/
/* */
/*             if($("#schedulePauseAfter").val() == 0){*/
/*               $("#scheduleResumeAfter").prop('disabled', true);*/
/*             }else{*/
/*                $("#scheduleResumeAfter").prop('disabled', false);*/
/*                if(data.schedule.auto_pause.resume > 90){*/
/*                 $("#rfintervalHour").prop("checked", true);*/
/*                 $("#scheduleResumeAfter").val(data.schedule.auto_pause.resume/60);*/
/*               }else{*/
/*                 $("#rfintervalMunite").prop("checked", true);*/
/*                 $("#scheduleResumeAfter").val(data.schedule.auto_pause.resume);*/
/*               }*/
/*             }*/
/*             */
/*             var apps = data.schedule.fb_account.fb_apps;*/
/* */
/*             for (i = 0; i < apps.length; i++) { */
/*               $('#scheduledPostApp').append("<option value='"+apps[i]['appid']+"'>"+apps[i]['app_name']+"</option>");*/
/*             }*/
/* */
/*             $("#scheduledPostApp").val(data.schedule.post_app);*/
/* */
/*           }else{*/
/*             alertBox(data.message,"danger","#editSchedule .messageBox",false);*/
/*           }*/
/*         },*/
/*         error: function( jqXhr, textStatus, errorThrown ){ */
/*           console.log(errorThrown);*/
/*           alertBox("{{ l('Unable to complete your request') }}","danger","#editSchedule .messageBox",false);*/
/*         },*/
/*         complete: function() {*/
/*           // Re-enable save schedule post btn*/
/*           $("#editScheduleBtn").prop('disabled', false);*/
/*           kp_preloader("off","#editSchedule .modal-body");*/
/*         }*/
/*       });*/
/* */
/*       // Show the modal*/
/*       $('#editSchedule').modal('show');*/
/*     });*/
/* */
/*     {# ----------------------- Saving schedule ------------------------ #}*/
/*     $("#editScheduleBtn").click(function(){*/
/* */
/*       kp_preloader("on","#editSchedule .modal-body");*/
/* */
/*       var pi = $("#scheduledPostInterval","#editSchedule").val();*/
/*       var apf = $("#scheduleResumeAfter","#editSchedule").val();*/
/* */
/*       var post_interval = $("input[type='radio']:checked","#editSchedule").val() == "minute" ? pi : pi*60 ;*/
/* */
/*       var resume_after = $(".autoPause input[type='radio']:checked","#editSchedule").val() == "minute" ? apf : apf*60 ;*/
/*       */
/*       // Disable save schedule post*/
/*       $("#editScheduleBtn").prop('disabled', true);*/
/* */
/*       $.ajax({*/
/*         url: '{{ base_url("schedules/action/update") }}',*/
/*         dataType: 'json',*/
/*         type: 'post',*/
/*         contentType: 'application/x-www-form-urlencoded',*/
/*         data: {*/
/*           schedule_id: $('#ScheduleId').val(),*/
/*           run_at: $("#scheduledPostTime","#editSchedule").val(),*/
/*           post_interval: post_interval,*/
/*           post_app: $("#scheduledPostApp","#editSchedule").val(),*/
/*           fb_account: $("#scheduledFbAccount","#editSchedule").val(),*/
/*           pause_after: $("#schedulePauseAfter","#editSchedule").val(),*/
/*           resume_after: resume_after,*/
/* */
/*           repeat_every: $("#repeatEvery","#editSchedule").val(),*/
/*           end_on: $("#end_on","#editSchedule").val(),*/
/*           */
/*           {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/*         },*/
/*         success: function( data, textStatus, jQxhr ){*/
/*           if(data.status == "success"){*/
/*             alertBox(data.message,"success","#editSchedule .messageBox",false);*/
/*             $(document).on('hide.bs.modal','#editSchedule', function () {location.reload();});*/
/*           }else{*/
/*             if(data.message !== null && typeof data.message === 'object'){*/
/*                 htmlData = "<ul>";*/
/*                 Object.keys(data.message).forEach(function(key) {*/
/*                     htmlData += "<li>" + data.message[key] + "</li>";*/
/*                 });*/
/*                 htmlData += "</ul>";*/
/*             }else{*/
/*                 htmlData = data.message;*/
/*             }*/
/*             alertBox(htmlData,"danger","#editSchedule .messageBox",false);*/
/*           }*/
/*         },*/
/*         error: function( jqXhr, textStatus, errorThrown ){ */
/*           console.log(errorThrown);*/
/*           alertBox("{{ l('Unable to complete your request') }}","danger","#editSchedule .messageBox",false);*/
/*         },*/
/*         complete: function() {*/
/*           // Re-enable save schedule post btn*/
/*           $("#editScheduleBtn").prop('disabled', false);*/
/*           kp_preloader("off","#editSchedule .modal-body");*/
/*         }*/
/*       });*/
/*       */
/*     });*/
/* */
/*     $( ".togglePauseBtn" ).click(function(){*/
/*       var schedule = $( this );*/
/*         $.ajax({*/
/*           url: '{{ base_url("schedules/action/toggle_schedule_pause") }}',*/
/*           dataType: 'json',*/
/*           type: 'post',*/
/*           contentType: 'application/x-www-form-urlencoded',*/
/*           data: { */
/*             sid: schedule.val(),*/
/*             {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*           },*/
/*           success: function( data, textStatus, jQxhr ){*/
/*               if(data.status == "success"){*/
/*                 schedule.toggleClass( "btn-warning" );*/
/*                 schedule.toggleClass( "btn-primary" );*/
/*                 schedule.find("i").toggleClass( "fa-pause" );*/
/*                 schedule.find("i").toggleClass( "fa-play" );*/
/*                 schedule.find("i").removeClass("fa-exclamation");*/
/*               }else{*/
/*                 schedule.find("i").addClass("fa-exclamation");*/
/*                 schedule.find("i").removeClass("fa-toggle-on");*/
/*               }*/
/*           },*/
/*           error: function( jqXhr, textStatus, errorThrown ){ */
/*               schedule.find("i").addClass("fa-exclamation");*/
/*               schedule.find("i").removeClass("fa-play");*/
/*               schedule.find("i").removeClass("fa-pause");*/
/*               console.log(errorThrown); */
/*           }*/
/*         });*/
/*     });*/
/* */
/*     {# Delete action #}*/
/*     $("#deleteScheduleBtn").click(function(){*/
/*       if($('tbody .checkbox:checked').length > 0){*/
/*        $("#delete_schedule").modal("show");*/
/*       }*/
/*     });*/
/* */
/*     $(".deleteBtn_schedule" ).click(function(){*/
/*       kp_preloader("on","#delete_schedule .modal-body");*/
/*       var schedules = [];*/
/*       $('tbody .checkbox:checked').each(function(){*/
/*         schedules.push($(this).val());*/
/*       });*/
/*       $.ajax({*/
/*         url: '{{ base_url("schedules/action/delete") }}',*/
/*         dataType: 'json',*/
/*         type: 'post',*/
/*         contentType: 'application/x-www-form-urlencoded',*/
/*         data: { */
/*           ids: JSON.stringify(schedules),*/
/*           {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*          },*/
/*         success: function( data, textStatus, jQxhr ){*/
/*           if(data.status == "success"){*/
/*             alertBox(data.message,"success",".deleteAlertBox_schedule",false,false);*/
/*               $(".deleteBtn_schedule").prop('disabled', true);*/
/*             $(document).on('hide.bs.modal','#delete_schedule', function () {location.reload();});*/
/*           }else{*/
/*             alertBox(data.message,"danger",".deleteAlertBox_schedule",false,false);*/
/*           }*/
/*         },*/
/*         error: function( jqXhr, textStatus, errorThrown ){ */
/*           console.log(errorThrown);*/
/*           alertBox("{{ lang.s('Unable to complete your request') }}","danger",".deleteAlertBox_schedule",false,false);*/
/*         },*/
/*         complete: function(){*/
/*           kp_preloader("off","#delete_schedule .modal-body");*/
/*         }*/
/*       });*/
/* */
/*       $('.deleteBox_content_schedule').html("");*/
/*     });*/
/* */
/*   </script>*/
/* {% endblock %}*/
