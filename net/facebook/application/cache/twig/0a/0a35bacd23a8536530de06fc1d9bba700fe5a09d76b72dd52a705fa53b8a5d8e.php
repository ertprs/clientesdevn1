<?php

/* users_manager/index.twig */
class __TwigTemplate_01d337df958c9453919fc982a8eef486410faf806adf372d143c1731bfb0771a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "users_manager/index.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Users")), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, assets("theme/default/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "  ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">
      <i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Users")), "html", null, true);
        echo "
      <span class=\"TotalRecords\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Showing %s of %s ", twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : null)), (isset($context["total_posts"]) ? $context["total_posts"] : null))), "html", null, true);
        echo "</span>
    </h3>
  </div>
  <div class=\"panel-body has-responsive-table\" id=\"usersSection\">
  <form action=\"\" method=\"POST\">

    <div class=\"row\">
      <div class=\"col-lg-6\">
        <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addNewUser\">";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ADD_NEW_USER")), "html", null, true);
        echo "</button>
        <a href=\"#\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exportEmails\">";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Export users E-emails")), "html", null, true);
        echo "</a>
        <button type=\"button\" class=\"btn btn-danger\" id=\"deleteUserBtn\">";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Delete")), "html", null, true);
        echo "</button>
      </div>
      <div class=\"col-lg-6\">
        <div class=\"seachBarContainer\">
          <div class=\"seachBar\">
            <input type='text' placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Search by username or email")), "html", null, true);
        echo "\" id='SearchUser' name=\"SearchUser\" class=\"form-control\" />
            <div class=\"autocomplete-suggestions\"></div>
          </div>
        </div>
      </div>
    </div>
    <table class=\"table table-bordered table-striped usersList\"  width=\"100%\">
      <thead>
        <tr>
          <td width='20px'>
          <input type='checkbox' name='check-all' id=\"checkbox-all\" class='check-all checkbox-style'  value='Check All'>
          <label for=\"checkbox-all\"></label>
          <td>";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("USERNAME")), "html", null, true);
        echo "</td>
          <td class=\"hidden-sm hidden-xs\">";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("EMAIL")), "html", null, true);
        echo "</td>
          <td class=\"hidden-xs\">";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Joined on")), "html", null, true);
        echo "</td>
          <td class=\"hidden-sm hidden-xs\">";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FACEBOOK_PROFILE")), "html", null, true);
        echo "</td>
          <td class=\"hidden-xs\">";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ROLE")), "html", null, true);
        echo "</td>
          <td>";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("STATUS")), "html", null, true);
        echo "</td>
          <td></td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 56
            echo "          <tr>
            <td>
            ";
            // line 58
            if (($this->getAttribute($context["u"], "id", array()) != $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "data", array()), "id", array()))) {
                // line 59
                echo "              <input type='checkbox' name='checkbox[]' id='checkbox-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                echo "' class='checkbox  checkbox-style' value='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                echo "'>
              <label for='checkbox-";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                echo "'></label>
            ";
            }
            // line 62
            echo "            </td>
            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
            echo "</td>
            <td class=\"hidden-sm hidden-xs\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", array()), "html", null, true);
            echo "</td>
            <td class=\"hidden-xs\">";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "signup", array()), (isset($context["date_format"]) ? $context["date_format"] : null)), "html", null, true);
            echo "</td>
            <td  class=\"hidden-sm hidden-xs\"><a href='https://facebook.com/";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "fbuserid", array()), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "lastname", array()), "html", null, true);
            echo "' target='_blank'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("VIEW_PROFILE")), "html", null, true);
            echo " <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i></a></td>
            <td class=\"hidden-xs\">";
            // line 67
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute($context["u"], "role_name", array())))), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 69
            if (($this->getAttribute($context["u"], "active", array()) == 1)) {
                // line 70
                echo "                ";
                $context["active_btn"] = "primary";
                // line 71
                echo "              ";
            } else {
                // line 72
                echo "                ";
                $context["active_btn"] = "default";
                // line 73
                echo "              ";
            }
            // line 74
            echo "              <button type=\"button\" class=\"btn btn-";
            echo twig_escape_filter($this->env, (isset($context["active_btn"]) ? $context["active_btn"] : null), "html", null, true);
            echo " userToggleAccountBtn\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw fa-toggle-on\" aria-hidden=\"true\"></i>
              </button>
            </td>
            <td>
              <button class='btn btn-primary editUserBtn' value='";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "'>
                <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                <span class=\"hidden-sm hidden-xs\">";
            // line 81
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("EDIT")), "html", null, true);
            echo "</span>
              </button>
              <a href='";
            // line 83
            echo twig_escape_filter($this->env, base_url(("users_manager/profile/" . $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "' class='btn btn-primary'>
                <i class=\"fa fa-list-alt fa-fw\"></i> 
                <span class=\"hidden-sm hidden-xs\">";
            // line 85
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Details")), "html", null, true);
            echo "</span>
              </a>
            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "            <tr>
              <td colspan=\"8\">";
            // line 91
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No records found!")), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "      </tbody>
    </table>
    ";
        // line 96
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 97
            echo "      ";
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "
    ";
        }
        // line 99
        echo "    </form>
  </div>
</div>
  
";
        // line 103
        $this->loadTemplate("users_manager/add_user.twig", "users_manager/index.twig", 103)->display($context);
        // line 104
        $this->loadTemplate("users_manager/edit_user.twig", "users_manager/index.twig", 104)->display($context);
        // line 105
        $this->loadTemplate("users_manager/export_emails.twig", "users_manager/index.twig", 105)->display($context);
        // line 106
        echo "
";
        // line 108
        $context["box_id"] = "user";
        // line 109
        $context["delete_msg"] = call_user_func_array($this->env->getFunction('l')->getCallable(), array("Are you sure you want to delete the selected accounts?"));
        // line 110
        $this->loadTemplate("blocks/delete_modal.twig", "users_manager/index.twig", 110)->display($context);
        // line 111
        echo "
";
    }

    // line 114
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 115
        echo "    ";
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
    
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, assets("theme/default/js/helpers.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    
    <script>

    \$(function () {
      \$('.expire_on').datetimepicker({format: '";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo "'});
    });

      ";
        // line 128
        echo "      \$( \"#newUserBtn\" ).click(function(){
        
        \$(\".addNewUserAlertBox\").html(\"\");
        
        kp_preloader(\"on\",\"#addNewUser .modal-body\");

        \$(\"#addNewUser #newUserBtn\").prop('disabled', true);

        \$.ajax({
          url: '";
        // line 137
        echo twig_escape_filter($this->env, base_url("users_manager/add"), "html", null, true);
        echo "',
          dataType: 'json',
          type: 'post',
          contentType: 'application/x-www-form-urlencoded',
          data: { 
            username: \$('#username','#addNewUser').val(),
            email: \$('#email','#addNewUser').val(),
            password: \$('#password','#addNewUser').val(),
            re_password: \$('#re_password','#addNewUser').val(),
            role: \$('#role','#addNewUser').val(),
            expire_on: \$('#expire_on','#addNewUser').val(),
            ";
        // line 148
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
          },
          success: function( data, textStatus, jQxhr ){
            
              if(data.status == \"success\"){
                
                if(data.message !== null && typeof data.message === 'object'){
                  htmlData = \"<ul>\";
                  Object.keys(data.message).forEach(function(key) {
                      htmlData += \"<li>\" + data.message[key] + \"</li>\";
                  });
                  htmlData += \"</ul>\";
                }else{
                  htmlData = data.message;
                }

                alertBox(htmlData,\"success\",\".addNewUserAlertBox\",false,true);
                \$(document).on('hide.bs.modal','#addNewUser', function () {location.reload();});

                // Clear the form 
                \$('#userid', \"#addNewUser\").val(\"\");
                \$('#username', \"#addNewUser\").val(\"\");
                \$('#password', \"#addNewUser\").val(\"\");
                \$('#re_password', \"#addNewUser\").val(\"\");
                \$('#email', \"#addNewUser\").val(\"\");
                \$('#expire_on', \"#addNewUser\").val(\"\");

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
          
                alertBox(htmlData,\"danger\",\".addNewUserAlertBox\",false,true);
              }
          },
          error: function( jqXhr, textStatus, errorThrown ){ 
            console.log(errorThrown);
          },
          complete: function () {
            \$(\"#addNewUser #newUserBtn\").prop('disabled', false);
            kp_preloader(\"off\",\"#addNewUser .modal-body\");
          }
        });
      });
      ";
        // line 200
        echo "

      ";
        // line 203
        echo "      \$( \"#editUserAccountModalBtn\" ).click(function(){
        \$(\".editUserAlertBox\").html(\"\");
        
          var editUserModel = \$('#editUser');
          kp_preloader(\"on\",\"#editUser .modal-body\");
      
          \$.ajax({
            url: '";
        // line 210
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
        // line 222
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
        // line 287
        echo twig_escape_filter($this->env, base_url("users_manager/user_details"), "html", null, true);
        echo "',
          dataType: 'json',
          type: 'post',
          contentType: 'application/x-www-form-urlencoded',
          data: { 
            userid: userId,
            ";
        // line 293
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
        // line 300
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
        // line 328
        echo twig_escape_filter($this->env, base_url("users_manager/toggle_account_status"), "html", null, true);
        echo "',
          dataType: 'json',
          type: 'post',
          contentType: 'application/x-www-form-urlencoded',
          data: { 
            userid: userid.val(),
            ";
        // line 334
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

    
    // Instant search
    ";
        // line 358
        echo "    \$(\"body\").mouseup(function (e){
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
        // line 374
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Searching...")), "html", null, true);
        echo "</div>\");
      kp_preloader(\"on\");
      xhr = \$.ajax({
        url: '";
        // line 377
        echo twig_escape_filter($this->env, base_url("users_manager/search"), "html", null, true);
        echo "',
        dataType: 'json',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded',
        data: {
          term: \$(this).val(),
          ";
        // line 383
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
        // line 391
        echo twig_escape_filter($this->env, base_url("users_manager/profile/"), "html", null, true);
        echo "\"+res.data[i].id+\"'><span class='searchU'>\"+res.data[i].username+\"</span><span class='searchEmail'>\"+res.data[i].email+\"</span></a>\";
                htmlData += \"</div>\";
                 \$(\".autocomplete-suggestions\").append(htmlData);
              }

              if(res.data.length > 5){
                \$(\".autocomplete-suggestions\").append(\"<div class='seeAllResults'><a href='";
        // line 397
        echo twig_escape_filter($this->env, base_url("users_manager/?searchTerm="), "html", null, true);
        echo "\"+\$(\"#SearchUser\").val()+\"'>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("See all results")), "html", null, true);
        echo "</a></div>\");
              }

              if(res.data.length == 0){
                \$(\".autocomplete-suggestions\").append(\"<div class='autocomplete-suggestion'>";
        // line 401
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No result found")), "html", null, true);
        echo "</div>\");
              }

            }else{
              \$(\".autocomplete-suggestions\").append(\"<div class='autocomplete-suggestion'>";
        // line 405
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
        // line 416
        echo "    \$(\"#deleteUserBtn\").click(function(){
      if(\$('.usersList .checkbox:checked').length > 0){
        \$(\"#delete_user\").modal(\"show\");
      }
    });

    \$(\".deleteBtn_user\" ).click(function(){
      
      kp_preloader(\"on\",\"#delete_user .modal-body\");

      var users = [];
      \$('.usersList .checkbox:checked').each(function(){
        users.push(\$(this).val());
      });

      \$.ajax({
        url: '";
        // line 432
        echo twig_escape_filter($this->env, base_url("users_manager/delete"), "html", null, true);
        echo "',
        dataType: 'json',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded',
        data: { 
          ids: JSON.stringify(users),
          ";
        // line 438
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
        },
        success: function( data, textStatus, jQxhr ){
          if(data.status == \"success\"){
            alertBox(data.message,\"success\",\".deleteAlertBox_user\",false,false);
              \$(\".deleteBtn_user\").prop('disabled', true);
            \$(document).on('hide.bs.modal','#delete_user', function () {location.reload();});
          }else{
            alertBox(data.message,\"danger\",\".deleteAlertBox_user\",false,false);
          }
        },
        error: function( jqXhr, textStatus, errorThrown ){ 
          console.log(errorThrown);
          alertBox(\"";
        // line 451
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "s", array(0 => "Unable to complete your request"), "method"), "html", null, true);
        echo "\",\"danger\",\".deleteAlertBox_user\",false,false);
        },
        complete: function(){
          kp_preloader(\"off\",\"#delete_user .modal-body\");
        }
      });

      \$('.deleteBox_content_user').html(\"\");
      
    });

    </script>
";
    }

    public function getTemplateName()
    {
        return "users_manager/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  721 => 451,  703 => 438,  694 => 432,  676 => 416,  663 => 405,  656 => 401,  647 => 397,  638 => 391,  625 => 383,  616 => 377,  610 => 374,  592 => 358,  564 => 334,  555 => 328,  524 => 300,  512 => 293,  503 => 287,  433 => 222,  418 => 210,  409 => 203,  405 => 200,  349 => 148,  335 => 137,  324 => 128,  318 => 124,  310 => 119,  306 => 118,  302 => 117,  296 => 115,  293 => 114,  288 => 111,  286 => 110,  284 => 109,  282 => 108,  279 => 106,  277 => 105,  275 => 104,  273 => 103,  267 => 99,  261 => 97,  259 => 96,  255 => 94,  246 => 91,  243 => 90,  233 => 85,  228 => 83,  223 => 81,  218 => 79,  207 => 74,  204 => 73,  201 => 72,  198 => 71,  195 => 70,  193 => 69,  188 => 67,  178 => 66,  174 => 65,  170 => 64,  166 => 63,  163 => 62,  158 => 60,  151 => 59,  149 => 58,  145 => 56,  140 => 55,  132 => 50,  128 => 49,  124 => 48,  120 => 47,  116 => 46,  112 => 45,  97 => 33,  89 => 28,  85 => 27,  81 => 26,  70 => 18,  66 => 17,  58 => 13,  55 => 12,  49 => 9,  44 => 8,  41 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ l("Users") }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link href="{{ assets('theme/default/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {{ parent() }}*/
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title">*/
/*       <i class="fa fa-users" aria-hidden="true"></i> {{ l('Users') }}*/
/*       <span class="TotalRecords">{{ l('Showing %s of %s ',users|length,total_posts) }}</span>*/
/*     </h3>*/
/*   </div>*/
/*   <div class="panel-body has-responsive-table" id="usersSection">*/
/*   <form action="" method="POST">*/
/* */
/*     <div class="row">*/
/*       <div class="col-lg-6">*/
/*         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewUser">{{ l('ADD_NEW_USER') }}</button>*/
/*         <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exportEmails">{{ l('Export users E-emails') }}</a>*/
/*         <button type="button" class="btn btn-danger" id="deleteUserBtn">{{ l('Delete') }}</button>*/
/*       </div>*/
/*       <div class="col-lg-6">*/
/*         <div class="seachBarContainer">*/
/*           <div class="seachBar">*/
/*             <input type='text' placeholder="{{ l('Search by username or email') }}" id='SearchUser' name="SearchUser" class="form-control" />*/
/*             <div class="autocomplete-suggestions"></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <table class="table table-bordered table-striped usersList"  width="100%">*/
/*       <thead>*/
/*         <tr>*/
/*           <td width='20px'>*/
/*           <input type='checkbox' name='check-all' id="checkbox-all" class='check-all checkbox-style'  value='Check All'>*/
/*           <label for="checkbox-all"></label>*/
/*           <td>{{ l('USERNAME') }}</td>*/
/*           <td class="hidden-sm hidden-xs">{{ l('EMAIL') }}</td>*/
/*           <td class="hidden-xs">{{ l('Joined on') }}</td>*/
/*           <td class="hidden-sm hidden-xs">{{ l('FACEBOOK_PROFILE') }}</td>*/
/*           <td class="hidden-xs">{{ l('ROLE') }}</td>*/
/*           <td>{{ l('STATUS') }}</td>*/
/*           <td></td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% for u in users %}*/
/*           <tr>*/
/*             <td>*/
/*             {% if u.id != user.data.id %}*/
/*               <input type='checkbox' name='checkbox[]' id='checkbox-{{ u.id }}' class='checkbox  checkbox-style' value='{{ u.id }}'>*/
/*               <label for='checkbox-{{ u.id }}'></label>*/
/*             {% endif %}*/
/*             </td>*/
/*             <td>{{ u.username }}</td>*/
/*             <td class="hidden-sm hidden-xs">{{ u.email }}</td>*/
/*             <td class="hidden-xs">{{ u.signup|date(date_format) }}</td>*/
/*             <td  class="hidden-sm hidden-xs"><a href='https://facebook.com/{{ u.fbuserid }}' title='{{ u.firstname }} {{ u.lastname }}' target='_blank'>{{ l('VIEW_PROFILE') }} <i class="fa fa-external-link" aria-hidden="true"></i></a></td>*/
/*             <td class="hidden-xs">{{ l(u.role_name)|capitalize }}</td>*/
/*             <td>*/
/*               {% if u.active == 1 %}*/
/*                 {% set active_btn = "primary" %}*/
/*               {% else %}*/
/*                 {% set active_btn = "default" %}*/
/*               {% endif %}*/
/*               <button type="button" class="btn btn-{{ active_btn }} userToggleAccountBtn"  value="{{ u.id }}">*/
/*                 <i class="fa fa-fw fa-toggle-on" aria-hidden="true"></i>*/
/*               </button>*/
/*             </td>*/
/*             <td>*/
/*               <button class='btn btn-primary editUserBtn' value='{{ u.id }}'>*/
/*                 <i class="fa fa-pencil-square-o" aria-hidden="true"></i>*/
/*                 <span class="hidden-sm hidden-xs">{{ l('EDIT') }}</span>*/
/*               </button>*/
/*               <a href='{{ base_url("users_manager/profile/" ~ u.id) }}' class='btn btn-primary'>*/
/*                 <i class="fa fa-list-alt fa-fw"></i> */
/*                 <span class="hidden-sm hidden-xs">{{ l('Details') }}</span>*/
/*               </a>*/
/*             </td>*/
/*           </tr>*/
/*         {% else %}*/
/*             <tr>*/
/*               <td colspan="8">{{ l('No records found!') }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*     {% if pagination %}*/
/*       {{ pagination|raw}}*/
/*     {% endif %}*/
/*     </form>*/
/*   </div>*/
/* </div>*/
/*   */
/* {% include "users_manager/add_user.twig" %}*/
/* {% include "users_manager/edit_user.twig" %}*/
/* {% include "users_manager/export_emails.twig" %}*/
/* */
/* {# Box variables #}*/
/* {% set box_id = "user" %}*/
/* {% set delete_msg = l("Are you sure you want to delete the selected accounts?") %}*/
/* {% include "blocks/delete_modal.twig" %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/*     {{ parent() }}*/
/*     */
/*     <script src="{{ assets('theme/default/js/helpers.js') }}"></script>*/
/*     <script src="{{ assets('theme/default/js/libs/moment.min.js') }}"></script>*/
/*     <script src="{{ assets('theme/default/js/libs/bootstrap-datetimepicker.min.js') }}"></script>*/
/*     */
/*     <script>*/
/* */
/*     $(function () {*/
/*       $('.expire_on').datetimepicker({format: '{{ date_format_js }}'});*/
/*     });*/
/* */
/*       {# ------------------------------------- Add new user -------------------------------- #}*/
/*       $( "#newUserBtn" ).click(function(){*/
/*         */
/*         $(".addNewUserAlertBox").html("");*/
/*         */
/*         kp_preloader("on","#addNewUser .modal-body");*/
/* */
/*         $("#addNewUser #newUserBtn").prop('disabled', true);*/
/* */
/*         $.ajax({*/
/*           url: '{{ base_url("users_manager/add") }}',*/
/*           dataType: 'json',*/
/*           type: 'post',*/
/*           contentType: 'application/x-www-form-urlencoded',*/
/*           data: { */
/*             username: $('#username','#addNewUser').val(),*/
/*             email: $('#email','#addNewUser').val(),*/
/*             password: $('#password','#addNewUser').val(),*/
/*             re_password: $('#re_password','#addNewUser').val(),*/
/*             role: $('#role','#addNewUser').val(),*/
/*             expire_on: $('#expire_on','#addNewUser').val(),*/
/*             {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*           },*/
/*           success: function( data, textStatus, jQxhr ){*/
/*             */
/*               if(data.status == "success"){*/
/*                 */
/*                 if(data.message !== null && typeof data.message === 'object'){*/
/*                   htmlData = "<ul>";*/
/*                   Object.keys(data.message).forEach(function(key) {*/
/*                       htmlData += "<li>" + data.message[key] + "</li>";*/
/*                   });*/
/*                   htmlData += "</ul>";*/
/*                 }else{*/
/*                   htmlData = data.message;*/
/*                 }*/
/* */
/*                 alertBox(htmlData,"success",".addNewUserAlertBox",false,true);*/
/*                 $(document).on('hide.bs.modal','#addNewUser', function () {location.reload();});*/
/* */
/*                 // Clear the form */
/*                 $('#userid', "#addNewUser").val("");*/
/*                 $('#username', "#addNewUser").val("");*/
/*                 $('#password', "#addNewUser").val("");*/
/*                 $('#re_password', "#addNewUser").val("");*/
/*                 $('#email', "#addNewUser").val("");*/
/*                 $('#expire_on', "#addNewUser").val("");*/
/* */
/*               }else{*/
/*                 */
/*                 if(data.message !== null && typeof data.message === 'object'){*/
/*                   htmlData = "<ul>";*/
/*                   Object.keys(data.message).forEach(function(key) {*/
/*                     htmlData += "<li>" + data.message[key] + "</li>";*/
/*                   });*/
/*                   htmlData += "</ul>";*/
/*                 }else{*/
/*                   htmlData = data.message;*/
/*                 }*/
/*           */
/*                 alertBox(htmlData,"danger",".addNewUserAlertBox",false,true);*/
/*               }*/
/*           },*/
/*           error: function( jqXhr, textStatus, errorThrown ){ */
/*             console.log(errorThrown);*/
/*           },*/
/*           complete: function () {*/
/*             $("#addNewUser #newUserBtn").prop('disabled', false);*/
/*             kp_preloader("off","#addNewUser .modal-body");*/
/*           }*/
/*         });*/
/*       });*/
/*       {# ----------------- End Add new user --------------- #}*/
/* */
/* */
/*       {# ----------------- End edit user --------------- #}*/
/*       $( "#editUserAccountModalBtn" ).click(function(){*/
/*         $(".editUserAlertBox").html("");*/
/*         */
/*           var editUserModel = $('#editUser');*/
/*           kp_preloader("on","#editUser .modal-body");*/
/*       */
/*           $.ajax({*/
/*             url: '{{ base_url("users_manager/update") }}',*/
/*             dataType: 'json',*/
/*             type: 'post',*/
/*             contentType: 'application/x-www-form-urlencoded',*/
/*             data: {*/
/*               userid: $('#userid', editUserModel).val(),*/
/*               email: $('#email', editUserModel).val(),*/
/*               password: $('#password', editUserModel).val(),*/
/*               re_password: $('#re_password', editUserModel).val(),*/
/*               role: $('#role', editUserModel).val(),*/
/*               is_admin: $('#is_admin', editUserModel).val(),*/
/*               expire_on: $('#expire_on', editUserModel).val(),*/
/*               {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')  */
/*             },*/
/*             success: function( data, textStatus, jQxhr ){*/
/*                 if(data.status == "success"){*/
/* */
/*                   htmlData = "<ul>";*/
/*                   if(data.message !== null && typeof data.message === 'object'){*/
/*                     Object.keys(data.message).forEach(function(key) {*/
/*                         htmlData += "<li>" + data.message[key] + "</li>";*/
/*                     });*/
/*                   }else{*/
/*                     htmlData += "<li>" + data.message + "</li>";*/
/*                   }*/
/* */
/*                   htmlData += "</ul>";*/
/*                   alertBox(htmlData,"success",".editUserAlertBox",false,true);*/
/*                   $(document).on('hide.bs.modal','#editUser', function () {location.reload();});*/
/*                  */
/*                  }else if(data.status == "notice"){*/
/*                     alertBox(data.message,"warning",".editUserAlertBox",false,true);*/
/*                  }else{*/
/*                 */
/*                   htmlData = "<ul>";*/
/*                   if(data.message !== null && typeof data.message === 'object'){*/
/*                     Object.keys(data.message).forEach(function(key) {*/
/*                         htmlData += "<li>" + data.message[key] + "</li>";*/
/*                     });*/
/*                   }else{*/
/*                     htmlData += "<li>" + data.message + "</li>";*/
/*                   }*/
/*                   htmlData += "</ul>";*/
/*                   alertBox(htmlData,"danger",".editUserAlertBox",false,true);*/
/*                 }*/
/*         */
/*               */
/*             },*/
/*             error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/*             complete: function() {*/
/*               kp_preloader("off","#editUser .modal-body");*/
/*             }*/
/*         });*/
/*       });*/
/* */
/*       $( ".editUserBtn" ).click(function(){*/
/*         var editUserModel = $('#editUser');*/
/* */
/*         // initial the modal*/
/*         // Clear message box*/
/*         $(".editUserAlertBox").html("");*/
/*         */
/*         // Clear the form */
/*         $('#userid', editUserModel).val("");*/
/*         $('#username', editUserModel).val("");*/
/*         $('#password', editUserModel).val("");*/
/*         $('#re_password', editUserModel).val("");*/
/*         $('#email', editUserModel).val("");*/
/*         $('#expire_on', editUserModel).val("");*/
/*     */
/*         userId = $(this).val();*/
/* */
/*         $('#userid', editUserModel).val(userId);*/
/* */
/*         kp_preloader("on","#editUser .modal-body");*/
/* */
/*         $.ajax({*/
/*           url: '{{ base_url("users_manager/user_details") }}',*/
/*           dataType: 'json',*/
/*           type: 'post',*/
/*           contentType: 'application/x-www-form-urlencoded',*/
/*           data: { */
/*             userid: userId,*/
/*             {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*           },*/
/*           success: function( data, textStatus, jQxhr ){*/
/*               if(data.status == "success"){*/
/*                 $('#username', editUserModel).val(data.user.username);*/
/*                 $('#email', editUserModel).val(data.user.email);*/
/*                 $('#role', editUserModel).val(data.user.role_id);*/
/*                 $('#expire_on', editUserModel).val(moment(data.user.expire_on).format('{{ date_format_js }}'));*/
/*               }else{*/
/*                 htmlData = "<ul>";*/
/*                 if(data.message !== null && typeof data.message === 'object'){*/
/*                   Object.keys(data.message).forEach(function(key) {*/
/*                       htmlData += "<li>" + data.message[key] + "</li>";*/
/*                   });*/
/*                 }else{*/
/*                   htmlData += "<li>" + data.message + "</li>";*/
/*                 }*/
/*                 htmlData += "</ul>";*/
/*                 alertBox(htmlData,"danger",".editUserAlertBox",false,true);*/
/*               }*/
/*           },*/
/*           error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/*           complete: function(){*/
/*             kp_preloader("off","#editUser .modal-body");*/
/*           }*/
/*         });*/
/* */
/*         // and finally show the modal*/
/*         editUserModel.modal("show");*/
/*         return false;*/
/*       });*/
/* */
/*     $( ".userToggleAccountBtn" ).click(function(){*/
/*       var userid = $( this );*/
/*         $.ajax({*/
/*           url: '{{ base_url("users_manager/toggle_account_status") }}',*/
/*           dataType: 'json',*/
/*           type: 'post',*/
/*           contentType: 'application/x-www-form-urlencoded',*/
/*           data: { */
/*             userid: userid.val(),*/
/*             {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*           },*/
/*           success: function( data, textStatus, jQxhr ){*/
/*               if(data.status == "success"){*/
/*                 userid.toggleClass( "btn-primary" );*/
/*                 userid.toggleClass( "btn-default" );*/
/*                 userid.find("i").addClass("fa-toggle-on");*/
/*                 userid.find("i").removeClass("fa-exclamation");*/
/*               }else{*/
/*                 userid.find("i").addClass("fa-exclamation");*/
/*                 userid.find("i").removeClass("fa-toggle-on");*/
/*               }*/
/*           },*/
/*           error: function( jqXhr, textStatus, errorThrown ){ */
/*               userid.find("i").addClass("fa-exclamation");*/
/*               userid.find("i").removeClass("fa-toggle-on");*/
/*               console.log(errorThrown); */
/*           }*/
/*         });*/
/*     });*/
/* */
/*     */
/*     // Instant search*/
/*     {# ----------- Auto complete ---------- #}*/
/*     $("body").mouseup(function (e){*/
/*         e.preventDefault();*/
/*         var container = new Array();*/
/*         container.push($('.autocomplete-suggestions'));*/
/*         $.each(container, function(key, value) {*/
/*             if (!$(value).is(e.target) && $(value).has(e.target).length === 0){*/
/*                 $(value).html("");*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     var xhr = null;*/
/*     $( "#SearchUser" ).on('input',function(){*/
/*       if(xhr!==null) xhr.abort();*/
/*       $(".autocomplete-suggestions").html("");*/
/*       $(".autocomplete-suggestion").css("display","block");*/
/*       $(".autocomplete-suggestions").append("<div class='autocomplete-suggestion'>{{ l('Searching...') }}</div>");*/
/*       kp_preloader("on");*/
/*       xhr = $.ajax({*/
/*         url: '{{ base_url("users_manager/search") }}',*/
/*         dataType: 'json',*/
/*         type: 'post',*/
/*         contentType: 'application/x-www-form-urlencoded',*/
/*         data: {*/
/*           term: $(this).val(),*/
/*           {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*         },*/
/*         success: function( res, textStatus, jQxhr ){*/
/*           $(".autocomplete-suggestions").html("");*/
/*           if(res.data !== null && typeof res.data === 'object'){*/
/*               nRes = res.data.length > 5 ? 5 : res.data.length;*/
/*               for (i = 0; i < nRes; i++) {*/
/*                 htmlData = "<div class='autocomplete-suggestion'>";*/
/*                 htmlData += "<a href='{{ base_url('users_manager/profile/') }}"+res.data[i].id+"'><span class='searchU'>"+res.data[i].username+"</span><span class='searchEmail'>"+res.data[i].email+"</span></a>";*/
/*                 htmlData += "</div>";*/
/*                  $(".autocomplete-suggestions").append(htmlData);*/
/*               }*/
/* */
/*               if(res.data.length > 5){*/
/*                 $(".autocomplete-suggestions").append("<div class='seeAllResults'><a href='{{ base_url('users_manager/?searchTerm=') }}"+$("#SearchUser").val()+"'>{{ l('See all results') }}</a></div>");*/
/*               }*/
/* */
/*               if(res.data.length == 0){*/
/*                 $(".autocomplete-suggestions").append("<div class='autocomplete-suggestion'>{{ l('No result found') }}</div>");*/
/*               }*/
/* */
/*             }else{*/
/*               $(".autocomplete-suggestions").append("<div class='autocomplete-suggestion'>{{ l('No result found') }}</div>");*/
/*             }*/
/*         },*/
/*         error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/*         complete: function(){*/
/*           kp_preloader("off");*/
/*         }*/
/*       });*/
/*     });*/
/* */
/*     {# Delete action #}*/
/*     $("#deleteUserBtn").click(function(){*/
/*       if($('.usersList .checkbox:checked').length > 0){*/
/*         $("#delete_user").modal("show");*/
/*       }*/
/*     });*/
/* */
/*     $(".deleteBtn_user" ).click(function(){*/
/*       */
/*       kp_preloader("on","#delete_user .modal-body");*/
/* */
/*       var users = [];*/
/*       $('.usersList .checkbox:checked').each(function(){*/
/*         users.push($(this).val());*/
/*       });*/
/* */
/*       $.ajax({*/
/*         url: '{{ base_url("users_manager/delete") }}',*/
/*         dataType: 'json',*/
/*         type: 'post',*/
/*         contentType: 'application/x-www-form-urlencoded',*/
/*         data: { */
/*           ids: JSON.stringify(users),*/
/*           {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*         },*/
/*         success: function( data, textStatus, jQxhr ){*/
/*           if(data.status == "success"){*/
/*             alertBox(data.message,"success",".deleteAlertBox_user",false,false);*/
/*               $(".deleteBtn_user").prop('disabled', true);*/
/*             $(document).on('hide.bs.modal','#delete_user', function () {location.reload();});*/
/*           }else{*/
/*             alertBox(data.message,"danger",".deleteAlertBox_user",false,false);*/
/*           }*/
/*         },*/
/*         error: function( jqXhr, textStatus, errorThrown ){ */
/*           console.log(errorThrown);*/
/*           alertBox("{{ lang.s('Unable to complete your request') }}","danger",".deleteAlertBox_user",false,false);*/
/*         },*/
/*         complete: function(){*/
/*           kp_preloader("off","#delete_user .modal-body");*/
/*         }*/
/*       });*/
/* */
/*       $('.deleteBox_content_user').html("");*/
/*       */
/*     });*/
/* */
/*     </script>*/
/* {% endblock %}*/
