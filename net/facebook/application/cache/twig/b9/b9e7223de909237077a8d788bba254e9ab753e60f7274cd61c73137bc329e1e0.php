<?php

/* users_manager/user_profile.twig */
class __TwigTemplate_aa118bbbdd0b355690e24dd39d69c480edf63c63aabaa9c3d7b49c4f9a4cc9fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base_dashboard.twig", "users_manager/user_profile.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "username"), "method")), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, assets("theme/default/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "  ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">
        <i class=\"fa fa-clipboard fa-fw\" aria-hidden=\"true\"></i> 
        ";
        // line 19
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "username"), "method")), "html", null, true);
        echo "
        <div class=\"span6 pull-right\" style=\"text-align:right\">
          <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url("users_manager"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Users")), "html", null, true);
        echo "</a>
        </div>
      </h3>
    </div>
    <div class=\"panel-body\" id=\"usersSection\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"seachBarContainer\">
            <input type='text' placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Search by username or email")), "html", null, true);
        echo "\" id='SearchUser' name=\"SearchUser\" class=\"form-control\" />
            <div class=\"autocomplete-suggestions\"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"col-xs-12 col-sm-12 col-md-4\">
    <div class=\"box box-primary\">
      <div class=\"box-body box-profile\">
        ";
        // line 40
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "fbuserid"), "method")) {
            // line 41
            echo "        ";
            $context["avatar"] = (("https://graph.facebook.com/" . $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "fbuserid"), "method")) . "/picture?redirect=1&height=150&width=150&type=normal");
            // line 42
            echo "        ";
        } else {
            // line 43
            echo "          ";
            $context["avatar"] = assets("theme/default/images/user-default.png");
            // line 44
            echo "        ";
        }
        // line 45
        echo "      

        <img class=\"profile-user-img img-responsive img-circle\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["avatar"]) ? $context["avatar"] : null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "firstname"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "lastname"), "method"), "html", null, true);
        echo "\">

        <h3 class=\"profile-username text-center\">";
        // line 49
        echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "lastname"), "method")) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "firstname"), "method"))), "html", null, true);
        echo "</h3>

        <button class=\"btn btn-primary editUserBtn btn-block\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "id"), "method"), "html", null, true);
        echo "\">
          <i class=\"fa fa-fw fa-pencil\" aria-hidden=\"true\"></i> 
          ";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Edit")), "html", null, true);
        echo "
        </button>

        ";
        // line 56
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "active"), "method") == 1)) {
            // line 57
            echo "          ";
            $context["active_btn"] = "primary";
            // line 58
            echo "          ";
            $context["active_text"] = "Disable";
            // line 59
            echo "        ";
        } else {
            // line 60
            echo "          ";
            $context["active_btn"] = "default";
            // line 61
            echo "          ";
            $context["active_text"] = "Enable";
            // line 62
            echo "        ";
        }
        // line 63
        echo "        <button type=\"button\" class=\"btn btn-";
        echo twig_escape_filter($this->env, (isset($context["active_btn"]) ? $context["active_btn"] : null), "html", null, true);
        echo " btn-block userToggleAccountBtn\"  value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "id"), "method"), "html", null, true);
        echo "\">  
          <i class=\"fa fa-fw fa-toggle-on\" aria-hidden=\"true\"></i>
          ";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array((isset($context["active_text"]) ? $context["active_text"] : null))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Account")), "html", null, true);
        echo "
        </button>

        <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, (base_url("users_manager/access_user_account/") . $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "id"), "method")), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-fw fa-sign-in\" aria-hidden=\"true\"></i> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Access Account")), "html", null, true);
        echo "</a>
      </div>
    </div>
  </div>

  <div class=\"col-xs-12 col-sm-7 col-md-4\">
    <div class=\"box box-primary\">
      <div class=\"box-body\">
        <ul class=\"list-group list-group-unbordered\">
        <li class=\"list-group-item\">
          <strong>";
        // line 78
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Username")), "html", null, true);
        echo " :</strong> 
          <span class=\"label label-primary\">";
        // line 79
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "username"), "method")), "html", null, true);
        echo "</span>
        </li>
        <li class=\"list-group-item\">
          <strong>";
        // line 82
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Role")), "html", null, true);
        echo " :</strong> 
          <span class=\"label label-primary\">";
        // line 83
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "role_name"), "method")))), "html", null, true);
        echo "</span>
        </li>

        <li class=\"list-group-item\">
          <strong>";
        // line 87
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Email")), "html", null, true);
        echo " :</strong> 
          <span class=\"label label-primary\">";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "email"), "method"), "html", null, true);
        echo "</span>
        </li>

        <li class=\"list-group-item\">
          <strong>";
        // line 92
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Status")), "html", null, true);
        echo " :</strong>
          <span class=\"label label-primary\">
          ";
        // line 94
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "active"), "method") == 1)) {
            // line 95
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Active")), "html", null, true);
            echo "
          ";
        } else {
            // line 97
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Inactive")), "html", null, true);
            echo "
          ";
        }
        // line 99
        echo "          </span>
        </li>     

        <li class=\"list-group-item\">
          <strong>";
        // line 103
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Account Expiry")), "html", null, true);
        echo " :</strong>
          <span class=\"label label-primary\">
          ";
        // line 105
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "expired"), "method") == 1)) {
            // line 106
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Expired")), "html", null, true);
            echo "
          ";
        } else {
            // line 108
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Active")), "html", null, true);
            echo "
          ";
        }
        // line 110
        echo "          </span>
        </li>

        <li class=\"list-group-item\">
          <strong>";
        // line 114
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Account Expire on")), "html", null, true);
        echo " :</strong> 
          <span class=\"label label-primary\">
          ";
        // line 116
        if (twig_test_empty($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "expire_on"), "method"))) {
            // line 117
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Never")), "html", null, true);
            echo "
          ";
        } else {
            // line 119
            echo "            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "expire_on"), "method"), (isset($context["date_format"]) ? $context["date_format"] : null)), "html", null, true);
            echo "
          ";
        }
        // line 121
        echo "          </span>
        </li>

        <li class=\"list-group-item\">
          <strong>";
        // line 125
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Group")), "html", null, true);
        echo " :</strong> 
          <span class=\"label label-primary\">";
        // line 126
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "role_name"), "method")), "html", null, true);
        echo "</span>
        </li>

        <li class=\"list-group-item\">
          <strong>";
        // line 130
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Joined on")), "html", null, true);
        echo " :</strong> 
          <span class=\"label label-primary\">";
        // line 131
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "signup"), "method"), (isset($context["date_format"]) ? $context["date_format"] : null)), "html", null, true);
        echo "</span>
        </li>

        <li class=\"list-group-item\">
          <strong>";
        // line 135
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last Login")), "html", null, true);
        echo " :</strong> 
          <span class=\"label label-primary\">";
        // line 136
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "last_login"), "method"), ((isset($context["date_format"]) ? $context["date_format"] : null) . " H:i")), "html", null, true);
        echo "</span>
        </li>

        <li class=\"list-group-item\">
          <strong>";
        // line 140
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Language")), "html", null, true);
        echo " :</strong> 
          <span class=\"label label-primary\">";
        // line 141
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "lang"), "method")), "html", null, true);
        echo "</span>
        </li>

        <li class=\"list-group-item\">
          <strong>";
        // line 145
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Timezone")), "html", null, true);
        echo ":</strong> 
          <span class=\"label label-primary\">";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "row", array(0 => "timezone"), "method"), "html", null, true);
        echo "</span>
        </li>

      </ul>
      </div>
    </div>
  </div>
  
  <div class=\"col-xs-12 col-sm-5 col-md-4\">
    <div class=\"box box-primary\">
      <div class=\"box-body\">
        <ul class=\"list-group list-group-unbordered\">
          <li class=\"list-group-item\">
            <strong>";
        // line 159
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Number of facebook accounts ")), "html", null, true);
        echo " :</strong> 
            <span class=\"label label-primary\">";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["num_fbaccount"]) ? $context["num_fbaccount"] : null), "html", null, true);
        echo "</span>
          </li>
          <li class=\"list-group-item\">
            <strong>";
        // line 163
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Number of saved Posts")), "html", null, true);
        echo " :</strong> 
            <span class=\"label label-primary\">";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["num_posts"]) ? $context["num_posts"] : null), "html", null, true);
        echo "</span>
          </li>
          <li class=\"list-group-item\">
            <strong>";
        // line 167
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Number of Schedules")), "html", null, true);
        echo " :</strong> 
            <span class=\"label label-primary\">";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["num_schedule_posts"]) ? $context["num_schedule_posts"] : null), "html", null, true);
        echo "</span>
          </li>
          <li class=\"list-group-item\">
            <strong>";
        // line 171
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total posts")), "html", null, true);
        echo " :</strong> 
            <span class=\"label label-primary\">";
        // line 172
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["total_fb_activities"]) ? $context["total_fb_activities"] : null), "row", array(0 => "posts"), "method")), "html", null, true);
        echo "</span>
          </li>
          <li class=\"list-group-item\">
            <strong>";
        // line 175
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total Comment")), "html", null, true);
        echo " :</strong> 
            <span class=\"label label-primary\">";
        // line 176
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["total_fb_activities"]) ? $context["total_fb_activities"] : null), "row", array(0 => "comments"), "method")), "html", null, true);
        echo "</span>
          </li>
          <li class=\"list-group-item\">
            <strong>";
        // line 179
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total Likes")), "html", null, true);
        echo " :</strong> 
            <span class=\"label label-primary\">";
        // line 180
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["total_fb_activities"]) ? $context["total_fb_activities"] : null), "row", array(0 => "likes"), "method")), "html", null, true);
        echo "</span>
          </li>
          <li class=\"list-group-item\">
            <strong>";
        // line 183
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total Join group")), "html", null, true);
        echo " :</strong> 
            <span class=\"label label-primary\">";
        // line 184
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["total_fb_activities"]) ? $context["total_fb_activities"] : null), "row", array(0 => "join_groups"), "method")), "html", null, true);
        echo "</span>
          </li>
          <li class=\"list-group-item\">
            <strong>";
        // line 187
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total Invite Join group")), "html", null, true);
        echo " :</strong> 
            <span class=\"label label-primary\">";
        // line 188
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["total_fb_activities"]) ? $context["total_fb_activities"] : null), "row", array(0 => "invite_join_groups"), "method")), "html", null, true);
        echo "</span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  ";
        // line 195
        $this->loadTemplate("users_manager/edit_user.twig", "users_manager/user_profile.twig", 195)->display($context);
        // line 196
        echo "
";
    }

    // line 199
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 200
        echo "  ";
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
  <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, assets("theme/default/js/helpers.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/moment.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>

  <script>

  \$(function () {\$('.expire_on').datetimepicker({format: '";
        // line 207
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo "'});});

// Instant search
";
        // line 211
        echo "\$(\"body\").mouseup(function (e){
  e.preventDefault();
  var container = new Array();
  container.push(\$('.autocomplete-suggestions'));
  \$.each(container, function(key, value) {
    if (!\$(value).is(e.target) && \$(value).has(e.target).length === 0){
      \$(value).html(\"\");
    }
  });
});

var xhr = null;
\$( \"#SearchUser\" ).on('input',function(){
  if(xhr!==null) xhr.abort();
  \$(\".autocomplete-suggestions\").html(\"\");
  \$(\".autocomplete-suggestion\").css(\"display\",\"block\");
  \$(\".autocomplete-suggestions\").append(\"<div class='autocomplete-suggestion'>";
        // line 227
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Searching...")), "html", null, true);
        echo "</div>\");
  kp_preloader(\"on\");
  xhr = \$.ajax({
    url: '";
        // line 230
        echo twig_escape_filter($this->env, base_url("users_manager/search"), "html", null, true);
        echo "',
    dataType: 'json',
    type: 'post',
    contentType: 'application/x-www-form-urlencoded',
    data: {
      term: \$(this).val(),
      ";
        // line 236
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
    },
    success: function( res, textStatus, jQxhr ){
      \$(\".autocomplete-suggestions\").html(\"\");
      if(res.data !== null && typeof res.data === 'object'){
        nRes = res.data.length > 5 ? 5 : res.data.length;
        for (i = 0; i < nRes; i++) {
          htmlData = \"<div class='autocomplete-suggestion'>\";
          htmlData += \"<a href='";
        // line 244
        echo twig_escape_filter($this->env, base_url("users_manager/profile/"), "html", null, true);
        echo "\"+res.data[i].id+\"'><span class='searchU'>\"+res.data[i].username+\"</span><span class='searchEmail'>\"+res.data[i].email+\"</span></a>\";
          htmlData += \"</div>\";
          \$(\".autocomplete-suggestions\").append(htmlData);
        }

        if(res.data.length > 5){
          \$(\".autocomplete-suggestions\").append(\"<div class='seeAllResults'><a href='";
        // line 250
        echo twig_escape_filter($this->env, base_url("users_manager/?searchTerm="), "html", null, true);
        echo "\"+\$(\"#SearchUser\").val()+\"'>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("See all results")), "html", null, true);
        echo "</a></div>\");
        }

        if(res.data.length == 0){
          \$(\".autocomplete-suggestions\").append(\"<div class='autocomplete-suggestion'>";
        // line 254
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No result found")), "html", null, true);
        echo "</div>\");
        }

      }else{
        \$(\".autocomplete-suggestions\").append(\"<div class='autocomplete-suggestion'>";
        // line 258
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No result found")), "html", null, true);
        echo "</div>\");
      }
    },
    error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },
    complete: function(){
      kp_preloader(\"off\");
    }
  });
});

";
        // line 269
        echo "\$( \"#editUserAccountModalBtn\" ).click(function(){
  \$(\".editUserAlertBox\").html(\"\");

  var editUserModel = \$('#editUser');
  kp_preloader(\"on\",\"#editUser .modal-body\");

  \$.ajax({
    url: '";
        // line 276
        echo twig_escape_filter($this->env, base_url("users_manager/update"), "html", null, true);
        echo "',
    dataType: 'json',
    type: 'post',
    contentType: 'application/x-www-form-urlencoded',
    data: {
      userid: \$('#userid', editUserModel).val(),
      email: \$('#email', editUserModel).val(),
      password: \$('#password', editUserModel).val(),
      re_password: \$('#re_password', editUserModel).val(),
      role: \$('#role', editUserModel).val(),
      is_admin: \$('#is_admin', editUserModel).val(),
      expire_on: \$('#expire_on', editUserModel).val(),
      ";
        // line 288
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')  
    },
    success: function( data, textStatus, jQxhr ){
      if(data.status == \"success\"){

        htmlData = \"<ul>\";
        if(data.message !== null && typeof data.message === 'object'){
          Object.keys(data.message).forEach(function(key) {
            htmlData += \"<li>\" + data.message[key] + \"</li>\";
          });
        }else{
          htmlData += \"<li>\" + data.message + \"</li>\";
        }

        htmlData += \"</ul>\";
        alertBox(htmlData,\"success\",\".editUserAlertBox\",false,true);
        \$(document).on('hide.bs.modal','#editUser', function () {location.reload();});

      }else if(data.status == \"notice\"){
        alertBox(data.message,\"warning\",\".editUserAlertBox\",false,true);
      }else{

        htmlData = \"<ul>\";
        if(data.message !== null && typeof data.message === 'object'){
          Object.keys(data.message).forEach(function(key) {
            htmlData += \"<li>\" + data.message[key] + \"</li>\";
          });
        }else{
          htmlData += \"<li>\" + data.message + \"</li>\";
        }
        htmlData += \"</ul>\";
        alertBox(htmlData,\"danger\",\".editUserAlertBox\",false,true);
      }


    },
    error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },
    complete: function() {
      kp_preloader(\"off\",\"#editUser .modal-body\");
    }
  });
});

\$( \".editUserBtn\" ).click(function(){
  var editUserModel = \$('#editUser');

// initial the modal
// Clear message box
\$(\".editUserAlertBox\").html(\"\");

// Clear the form 
\$('#userid', editUserModel).val(\"\");
\$('#username', editUserModel).val(\"\");
\$('#password', editUserModel).val(\"\");
\$('#re_password', editUserModel).val(\"\");
\$('#email', editUserModel).val(\"\");
\$('#expire_on', editUserModel).val(\"\");

userId = \$(this).val();

\$('#userid', editUserModel).val(userId);

kp_preloader(\"on\",\"#editUser .modal-body\");

\$.ajax({
  url: '";
        // line 353
        echo twig_escape_filter($this->env, base_url("users_manager/user_details"), "html", null, true);
        echo "',
  dataType: 'json',
  type: 'post',
  contentType: 'application/x-www-form-urlencoded',
  data: { 
    userid: userId,
    ";
        // line 359
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
  },
  success: function( data, textStatus, jQxhr ){
    if(data.status == \"success\"){
      \$('#username', editUserModel).val(data.user.username);
      \$('#email', editUserModel).val(data.user.email);
      \$('#role', editUserModel).val(data.user.role_id);
      \$('#expire_on', editUserModel).val(moment(data.user.expire_on).format('";
        // line 366
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo "'));
    }else{
      htmlData = \"<ul>\";
      if(data.message !== null && typeof data.message === 'object'){
        Object.keys(data.message).forEach(function(key) {
          htmlData += \"<li>\" + data.message[key] + \"</li>\";
        });
      }else{
        htmlData += \"<li>\" + data.message + \"</li>\";
      }
      htmlData += \"</ul>\";
      alertBox(htmlData,\"danger\",\".editUserAlertBox\",false,true);
    }
  },
  error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },
  complete: function(){
    kp_preloader(\"off\",\"#editUser .modal-body\");
  }
});

// and finally show the modal
editUserModel.modal(\"show\");
return false;
});

\$( \".userToggleAccountBtn\" ).click(function(){
  var userid = \$( this );
  \$.ajax({
    url: '";
        // line 394
        echo twig_escape_filter($this->env, base_url("users_manager/toggle_account_status"), "html", null, true);
        echo "',
    dataType: 'json',
    type: 'post',
    contentType: 'application/x-www-form-urlencoded',
    data: { 
      userid: userid.val(),
      ";
        // line 400
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
    },
    success: function( data, textStatus, jQxhr ){
      if(data.status == \"success\"){
        userid.toggleClass( \"btn-primary\" );
        userid.toggleClass( \"btn-default\" );
        userid.find(\"i\").addClass(\"fa-toggle-on\");
        userid.find(\"i\").removeClass(\"fa-exclamation\");
      }else{
        userid.find(\"i\").addClass(\"fa-exclamation\");
        userid.find(\"i\").removeClass(\"fa-toggle-on\");
      }
    },
    error: function( jqXhr, textStatus, errorThrown ){ 
      userid.find(\"i\").addClass(\"fa-exclamation\");
      userid.find(\"i\").removeClass(\"fa-toggle-on\");
      console.log(errorThrown); 
    }
  });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "users_manager/user_profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 400,  714 => 394,  683 => 366,  671 => 359,  662 => 353,  592 => 288,  577 => 276,  568 => 269,  555 => 258,  548 => 254,  539 => 250,  530 => 244,  517 => 236,  508 => 230,  502 => 227,  484 => 211,  478 => 207,  471 => 203,  467 => 202,  463 => 201,  458 => 200,  455 => 199,  450 => 196,  448 => 195,  438 => 188,  434 => 187,  428 => 184,  424 => 183,  418 => 180,  414 => 179,  408 => 176,  404 => 175,  398 => 172,  394 => 171,  388 => 168,  384 => 167,  378 => 164,  374 => 163,  368 => 160,  364 => 159,  348 => 146,  344 => 145,  337 => 141,  333 => 140,  326 => 136,  322 => 135,  315 => 131,  311 => 130,  304 => 126,  300 => 125,  294 => 121,  288 => 119,  282 => 117,  280 => 116,  275 => 114,  269 => 110,  263 => 108,  257 => 106,  255 => 105,  250 => 103,  244 => 99,  238 => 97,  232 => 95,  230 => 94,  225 => 92,  218 => 88,  214 => 87,  207 => 83,  203 => 82,  197 => 79,  193 => 78,  178 => 68,  170 => 65,  162 => 63,  159 => 62,  156 => 61,  153 => 60,  150 => 59,  147 => 58,  144 => 57,  142 => 56,  136 => 53,  131 => 51,  126 => 49,  117 => 47,  113 => 45,  110 => 44,  107 => 43,  104 => 42,  101 => 41,  99 => 40,  85 => 29,  72 => 21,  67 => 19,  58 => 14,  55 => 13,  49 => 10,  44 => 9,  41 => 8,  34 => 5,  31 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}*/
/*   {{ profile.row('username')|capitalize }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link href="{{ assets('theme/default/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {{ parent() }}*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title">*/
/*         <i class="fa fa-clipboard fa-fw" aria-hidden="true"></i> */
/*         {{ profile.row('username')|capitalize }}*/
/*         <div class="span6 pull-right" style="text-align:right">*/
/*           <a href="{{ base_url('users_manager') }}">{{ l('Users') }}</a>*/
/*         </div>*/
/*       </h3>*/
/*     </div>*/
/*     <div class="panel-body" id="usersSection">*/
/*       <div class="row">*/
/*         <div class="col-lg-12">*/
/*           <div class="seachBarContainer">*/
/*             <input type='text' placeholder="{{ l('Search by username or email') }}" id='SearchUser' name="SearchUser" class="form-control" />*/
/*             <div class="autocomplete-suggestions"></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="col-xs-12 col-sm-12 col-md-4">*/
/*     <div class="box box-primary">*/
/*       <div class="box-body box-profile">*/
/*         {% if profile.row('fbuserid') %}*/
/*         {% set avatar = "https://graph.facebook.com/" ~ profile.row('fbuserid') ~ "/picture?redirect=1&height=150&width=150&type=normal" %}*/
/*         {% else %}*/
/*           {% set avatar = assets('theme/default/images/user-default.png') %}*/
/*         {% endif %}*/
/*       */
/* */
/*         <img class="profile-user-img img-responsive img-circle" src="{{ avatar }}" alt="{{ profile.row('firstname') }} {{ profile.row('lastname') }}">*/
/* */
/*         <h3 class="profile-username text-center">{{ profile.row('lastname')|capitalize ~ " " ~ profile.row('firstname')|capitalize  }}</h3>*/
/* */
/*         <button class="btn btn-primary editUserBtn btn-block" value="{{ profile.row('id') }}">*/
/*           <i class="fa fa-fw fa-pencil" aria-hidden="true"></i> */
/*           {{ l('Edit') }}*/
/*         </button>*/
/* */
/*         {% if profile.row('active') == 1 %}*/
/*           {% set active_btn = "primary" %}*/
/*           {% set active_text = "Disable" %}*/
/*         {% else %}*/
/*           {% set active_btn = "default" %}*/
/*           {% set active_text = "Enable" %}*/
/*         {% endif %}*/
/*         <button type="button" class="btn btn-{{ active_btn }} btn-block userToggleAccountBtn"  value="{{ profile.row('id') }}">  */
/*           <i class="fa fa-fw fa-toggle-on" aria-hidden="true"></i>*/
/*           {{ l(active_text) }} {{ l("Account") }}*/
/*         </button>*/
/* */
/*         <a href="{{ base_url("users_manager/access_user_account/") ~ profile.row('id') }}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-sign-in" aria-hidden="true"></i> {{ l('Access Account') }}</a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="col-xs-12 col-sm-7 col-md-4">*/
/*     <div class="box box-primary">*/
/*       <div class="box-body">*/
/*         <ul class="list-group list-group-unbordered">*/
/*         <li class="list-group-item">*/
/*           <strong>{{ l('Username') }} :</strong> */
/*           <span class="label label-primary">{{ profile.row('username')|capitalize }}</span>*/
/*         </li>*/
/*         <li class="list-group-item">*/
/*           <strong>{{ l('Role') }} :</strong> */
/*           <span class="label label-primary">{{ l(profile.row('role_name'))|capitalize }}</span>*/
/*         </li>*/
/* */
/*         <li class="list-group-item">*/
/*           <strong>{{ l('Email') }} :</strong> */
/*           <span class="label label-primary">{{ profile.row('email') }}</span>*/
/*         </li>*/
/* */
/*         <li class="list-group-item">*/
/*           <strong>{{ l('Status') }} :</strong>*/
/*           <span class="label label-primary">*/
/*           {% if profile.row('active') == 1 %}*/
/*             {{ l('Active') }}*/
/*           {% else %}*/
/*             {{ l('Inactive') }}*/
/*           {% endif %}*/
/*           </span>*/
/*         </li>     */
/* */
/*         <li class="list-group-item">*/
/*           <strong>{{ l('Account Expiry') }} :</strong>*/
/*           <span class="label label-primary">*/
/*           {% if profile.row('expired') == 1 %}*/
/*             {{ l('Expired') }}*/
/*           {% else %}*/
/*             {{ l('Active') }}*/
/*           {% endif %}*/
/*           </span>*/
/*         </li>*/
/* */
/*         <li class="list-group-item">*/
/*           <strong>{{ l('Account Expire on') }} :</strong> */
/*           <span class="label label-primary">*/
/*           {% if profile.row('expire_on') is empty %}*/
/*             {{ l('Never') }}*/
/*           {% else %}*/
/*             {{ profile.row('expire_on')|date(date_format) }}*/
/*           {% endif %}*/
/*           </span>*/
/*         </li>*/
/* */
/*         <li class="list-group-item">*/
/*           <strong>{{ l('Group') }} :</strong> */
/*           <span class="label label-primary">{{ profile.row('role_name')|capitalize }}</span>*/
/*         </li>*/
/* */
/*         <li class="list-group-item">*/
/*           <strong>{{ l('Joined on') }} :</strong> */
/*           <span class="label label-primary">{{ profile.row('signup')|date(date_format) }}</span>*/
/*         </li>*/
/* */
/*         <li class="list-group-item">*/
/*           <strong>{{ l('Last Login') }} :</strong> */
/*           <span class="label label-primary">{{ profile.row('last_login')|date(date_format ~ " H:i") }}</span>*/
/*         </li>*/
/* */
/*         <li class="list-group-item">*/
/*           <strong>{{ l('Language') }} :</strong> */
/*           <span class="label label-primary">{{ profile.row('lang')|capitalize }}</span>*/
/*         </li>*/
/* */
/*         <li class="list-group-item">*/
/*           <strong>{{ l('Timezone') }}:</strong> */
/*           <span class="label label-primary">{{ profile.row('timezone') }}</span>*/
/*         </li>*/
/* */
/*       </ul>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   */
/*   <div class="col-xs-12 col-sm-5 col-md-4">*/
/*     <div class="box box-primary">*/
/*       <div class="box-body">*/
/*         <ul class="list-group list-group-unbordered">*/
/*           <li class="list-group-item">*/
/*             <strong>{{ l('Number of facebook accounts ') }} :</strong> */
/*             <span class="label label-primary">{{ num_fbaccount }}</span>*/
/*           </li>*/
/*           <li class="list-group-item">*/
/*             <strong>{{ l('Number of saved Posts') }} :</strong> */
/*             <span class="label label-primary">{{ num_posts }}</span>*/
/*           </li>*/
/*           <li class="list-group-item">*/
/*             <strong>{{ l('Number of Schedules') }} :</strong> */
/*             <span class="label label-primary">{{ num_schedule_posts }}</span>*/
/*           </li>*/
/*           <li class="list-group-item">*/
/*             <strong>{{ l('Total posts') }} :</strong> */
/*             <span class="label label-primary">{{ total_fb_activities.row('posts')|number_format }}</span>*/
/*           </li>*/
/*           <li class="list-group-item">*/
/*             <strong>{{ l('Total Comment') }} :</strong> */
/*             <span class="label label-primary">{{ total_fb_activities.row('comments')|number_format }}</span>*/
/*           </li>*/
/*           <li class="list-group-item">*/
/*             <strong>{{ l('Total Likes') }} :</strong> */
/*             <span class="label label-primary">{{ total_fb_activities.row('likes')|number_format }}</span>*/
/*           </li>*/
/*           <li class="list-group-item">*/
/*             <strong>{{ l('Total Join group') }} :</strong> */
/*             <span class="label label-primary">{{ total_fb_activities.row('join_groups')|number_format }}</span>*/
/*           </li>*/
/*           <li class="list-group-item">*/
/*             <strong>{{ l('Total Invite Join group') }} :</strong> */
/*             <span class="label label-primary">{{ total_fb_activities.row('invite_join_groups')|number_format }}</span>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   {% include "users_manager/edit_user.twig" %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/*   {{ parent() }}*/
/*   <script src="{{ assets('theme/default/js/helpers.js') }}"></script>*/
/*   <script src="{{ assets('theme/default/js/libs/moment.min.js') }}"></script>*/
/*   <script src="{{ assets('theme/default/js/libs/bootstrap-datetimepicker.min.js') }}"></script>*/
/* */
/*   <script>*/
/* */
/*   $(function () {$('.expire_on').datetimepicker({format: '{{ date_format_js }}'});});*/
/* */
/* // Instant search*/
/* {# ----------- Auto complete ---------- #}*/
/* $("body").mouseup(function (e){*/
/*   e.preventDefault();*/
/*   var container = new Array();*/
/*   container.push($('.autocomplete-suggestions'));*/
/*   $.each(container, function(key, value) {*/
/*     if (!$(value).is(e.target) && $(value).has(e.target).length === 0){*/
/*       $(value).html("");*/
/*     }*/
/*   });*/
/* });*/
/* */
/* var xhr = null;*/
/* $( "#SearchUser" ).on('input',function(){*/
/*   if(xhr!==null) xhr.abort();*/
/*   $(".autocomplete-suggestions").html("");*/
/*   $(".autocomplete-suggestion").css("display","block");*/
/*   $(".autocomplete-suggestions").append("<div class='autocomplete-suggestion'>{{ l('Searching...') }}</div>");*/
/*   kp_preloader("on");*/
/*   xhr = $.ajax({*/
/*     url: '{{ base_url("users_manager/search") }}',*/
/*     dataType: 'json',*/
/*     type: 'post',*/
/*     contentType: 'application/x-www-form-urlencoded',*/
/*     data: {*/
/*       term: $(this).val(),*/
/*       {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*     },*/
/*     success: function( res, textStatus, jQxhr ){*/
/*       $(".autocomplete-suggestions").html("");*/
/*       if(res.data !== null && typeof res.data === 'object'){*/
/*         nRes = res.data.length > 5 ? 5 : res.data.length;*/
/*         for (i = 0; i < nRes; i++) {*/
/*           htmlData = "<div class='autocomplete-suggestion'>";*/
/*           htmlData += "<a href='{{ base_url('users_manager/profile/') }}"+res.data[i].id+"'><span class='searchU'>"+res.data[i].username+"</span><span class='searchEmail'>"+res.data[i].email+"</span></a>";*/
/*           htmlData += "</div>";*/
/*           $(".autocomplete-suggestions").append(htmlData);*/
/*         }*/
/* */
/*         if(res.data.length > 5){*/
/*           $(".autocomplete-suggestions").append("<div class='seeAllResults'><a href='{{ base_url('users_manager/?searchTerm=') }}"+$("#SearchUser").val()+"'>{{ l('See all results') }}</a></div>");*/
/*         }*/
/* */
/*         if(res.data.length == 0){*/
/*           $(".autocomplete-suggestions").append("<div class='autocomplete-suggestion'>{{ l('No result found') }}</div>");*/
/*         }*/
/* */
/*       }else{*/
/*         $(".autocomplete-suggestions").append("<div class='autocomplete-suggestion'>{{ l('No result found') }}</div>");*/
/*       }*/
/*     },*/
/*     error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/*     complete: function(){*/
/*       kp_preloader("off");*/
/*     }*/
/*   });*/
/* });*/
/* */
/* {# ----------------- End edit user --------------- #}*/
/* $( "#editUserAccountModalBtn" ).click(function(){*/
/*   $(".editUserAlertBox").html("");*/
/* */
/*   var editUserModel = $('#editUser');*/
/*   kp_preloader("on","#editUser .modal-body");*/
/* */
/*   $.ajax({*/
/*     url: '{{ base_url("users_manager/update") }}',*/
/*     dataType: 'json',*/
/*     type: 'post',*/
/*     contentType: 'application/x-www-form-urlencoded',*/
/*     data: {*/
/*       userid: $('#userid', editUserModel).val(),*/
/*       email: $('#email', editUserModel).val(),*/
/*       password: $('#password', editUserModel).val(),*/
/*       re_password: $('#re_password', editUserModel).val(),*/
/*       role: $('#role', editUserModel).val(),*/
/*       is_admin: $('#is_admin', editUserModel).val(),*/
/*       expire_on: $('#expire_on', editUserModel).val(),*/
/*       {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')  */
/*     },*/
/*     success: function( data, textStatus, jQxhr ){*/
/*       if(data.status == "success"){*/
/* */
/*         htmlData = "<ul>";*/
/*         if(data.message !== null && typeof data.message === 'object'){*/
/*           Object.keys(data.message).forEach(function(key) {*/
/*             htmlData += "<li>" + data.message[key] + "</li>";*/
/*           });*/
/*         }else{*/
/*           htmlData += "<li>" + data.message + "</li>";*/
/*         }*/
/* */
/*         htmlData += "</ul>";*/
/*         alertBox(htmlData,"success",".editUserAlertBox",false,true);*/
/*         $(document).on('hide.bs.modal','#editUser', function () {location.reload();});*/
/* */
/*       }else if(data.status == "notice"){*/
/*         alertBox(data.message,"warning",".editUserAlertBox",false,true);*/
/*       }else{*/
/* */
/*         htmlData = "<ul>";*/
/*         if(data.message !== null && typeof data.message === 'object'){*/
/*           Object.keys(data.message).forEach(function(key) {*/
/*             htmlData += "<li>" + data.message[key] + "</li>";*/
/*           });*/
/*         }else{*/
/*           htmlData += "<li>" + data.message + "</li>";*/
/*         }*/
/*         htmlData += "</ul>";*/
/*         alertBox(htmlData,"danger",".editUserAlertBox",false,true);*/
/*       }*/
/* */
/* */
/*     },*/
/*     error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/*     complete: function() {*/
/*       kp_preloader("off","#editUser .modal-body");*/
/*     }*/
/*   });*/
/* });*/
/* */
/* $( ".editUserBtn" ).click(function(){*/
/*   var editUserModel = $('#editUser');*/
/* */
/* // initial the modal*/
/* // Clear message box*/
/* $(".editUserAlertBox").html("");*/
/* */
/* // Clear the form */
/* $('#userid', editUserModel).val("");*/
/* $('#username', editUserModel).val("");*/
/* $('#password', editUserModel).val("");*/
/* $('#re_password', editUserModel).val("");*/
/* $('#email', editUserModel).val("");*/
/* $('#expire_on', editUserModel).val("");*/
/* */
/* userId = $(this).val();*/
/* */
/* $('#userid', editUserModel).val(userId);*/
/* */
/* kp_preloader("on","#editUser .modal-body");*/
/* */
/* $.ajax({*/
/*   url: '{{ base_url("users_manager/user_details") }}',*/
/*   dataType: 'json',*/
/*   type: 'post',*/
/*   contentType: 'application/x-www-form-urlencoded',*/
/*   data: { */
/*     userid: userId,*/
/*     {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*   },*/
/*   success: function( data, textStatus, jQxhr ){*/
/*     if(data.status == "success"){*/
/*       $('#username', editUserModel).val(data.user.username);*/
/*       $('#email', editUserModel).val(data.user.email);*/
/*       $('#role', editUserModel).val(data.user.role_id);*/
/*       $('#expire_on', editUserModel).val(moment(data.user.expire_on).format('{{ date_format_js }}'));*/
/*     }else{*/
/*       htmlData = "<ul>";*/
/*       if(data.message !== null && typeof data.message === 'object'){*/
/*         Object.keys(data.message).forEach(function(key) {*/
/*           htmlData += "<li>" + data.message[key] + "</li>";*/
/*         });*/
/*       }else{*/
/*         htmlData += "<li>" + data.message + "</li>";*/
/*       }*/
/*       htmlData += "</ul>";*/
/*       alertBox(htmlData,"danger",".editUserAlertBox",false,true);*/
/*     }*/
/*   },*/
/*   error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/*   complete: function(){*/
/*     kp_preloader("off","#editUser .modal-body");*/
/*   }*/
/* });*/
/* */
/* // and finally show the modal*/
/* editUserModel.modal("show");*/
/* return false;*/
/* });*/
/* */
/* $( ".userToggleAccountBtn" ).click(function(){*/
/*   var userid = $( this );*/
/*   $.ajax({*/
/*     url: '{{ base_url("users_manager/toggle_account_status") }}',*/
/*     dataType: 'json',*/
/*     type: 'post',*/
/*     contentType: 'application/x-www-form-urlencoded',*/
/*     data: { */
/*       userid: userid.val(),*/
/*       {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*     },*/
/*     success: function( data, textStatus, jQxhr ){*/
/*       if(data.status == "success"){*/
/*         userid.toggleClass( "btn-primary" );*/
/*         userid.toggleClass( "btn-default" );*/
/*         userid.find("i").addClass("fa-toggle-on");*/
/*         userid.find("i").removeClass("fa-exclamation");*/
/*       }else{*/
/*         userid.find("i").addClass("fa-exclamation");*/
/*         userid.find("i").removeClass("fa-toggle-on");*/
/*       }*/
/*     },*/
/*     error: function( jqXhr, textStatus, errorThrown ){ */
/*       userid.find("i").addClass("fa-exclamation");*/
/*       userid.find("i").removeClass("fa-toggle-on");*/
/*       console.log(errorThrown); */
/*     }*/
/*   });*/
/* });*/
/* </script>*/
/* {% endblock %}*/
