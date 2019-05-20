<?php

/* logs.twig */
class __TwigTemplate_3d4ebe758e54b246b6eb09ef66380bd0d392bbae6c3581f36c5b8f3d8eed010d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "logs.twig", 1);
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Logs")), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"msgBox\"></div>
<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\"><i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i>
\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("logs")), "html", null, true);
        echo "
\t\t\t<span class=\"TotalRecords\">";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Showing %s of %s ", twig_length_filter($this->env, (isset($context["logs"]) ? $context["logs"] : null)), (isset($context["total_posts"]) ? $context["total_posts"] : null))), "html", null, true);
        echo "</span>
\t\t</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t
\t\t";
        // line 17
        if ( !twig_test_empty((isset($context["schedule_id"]) ? $context["schedule_id"] : null))) {
            // line 18
            echo "\t\t\t<button id=\"deleteBtn\" title=\"";
            echo "Delete selected records";
            echo "\" class=\"btn btn-danger\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Delete")), "html", null, true);
            echo "</button>
\t\t\t<input type=\"button\" class=\"btn btn-primary updateInsight\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Update post insight")), "html", null, true);
            echo "\">
\t\t";
        } else {
            // line 21
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, base_url("schedules/logs/clear"), "html", null, true);
            echo "\" title=\"Clear logs\" class=\"btn btn-danger\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Clear log")), "html", null, true);
            echo "</a>
\t\t";
        }
        // line 23
        echo "
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-bordered table-striped\" id=\"datatable\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td width=\"20px\">
\t\t\t              <input type='checkbox' id=\"checkbox-all\" class=\"check-all checkbox-style\" name='a' />
\t\t\t              <label for=\"checkbox-all\"></label>
\t\t\t            </td>
\t\t\t\t\t\t<td width=\"150\">";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Published on")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Node")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Node type")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Post details")), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 40
            echo "
\t\t\t\t\t\t";
            // line 41
            $context["fbr"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute($context["log"], "reactions", array()), true));
            // line 42
            echo "
\t\t\t\t\t\t";
            // line 43
            $context["cr"] = ((((($this->getAttribute((isset($context["fbr"]) ? $context["fbr"] : null), "like", array(), "array") + $this->getAttribute((isset($context["fbr"]) ? $context["fbr"] : null), "love", array(), "array")) + $this->getAttribute((isset($context["fbr"]) ? $context["fbr"] : null), "wow", array(), "array")) + $this->getAttribute((isset($context["fbr"]) ? $context["fbr"] : null), "haha", array(), "array")) + $this->getAttribute((isset($context["fbr"]) ? $context["fbr"] : null), "sad", array(), "array")) + $this->getAttribute((isset($context["fbr"]) ? $context["fbr"] : null), "angry", array(), "array"));
            // line 44
            echo "
\t\t\t\t\t\t";
            // line 45
            $context["node_id"] = $this->getAttribute($context["log"], "node_id", array());
            // line 46
            echo "
\t\t\t\t\t\t";
            // line 47
            if (($this->getAttribute($context["log"], "node_id", array()) == "me")) {
                // line 48
                echo "\t\t\t\t\t\t\t";
                $context["node_id"] = $this->getAttribute($context["log"], "fb_account", array());
                // line 49
                echo "\t\t\t\t\t\t";
            }
            // line 50
            echo "
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t <td>
\t\t                      <input type='checkbox' class='checkbox checkbox-style' name='checkbox[]' id='checkbox-";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "id", array()), "html", null, true);
            echo "' data-fbpost=\"";
            // line 54
            if ( !twig_test_empty($this->getAttribute($context["log"], "fb_post", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "fb_account", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "fb_post", array()), "html", null, true);
            }
            echo "\" value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "id", array()), "html", null, true);
            echo "' />
\t\t                      <label for='checkbox-";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "id", array()), "html", null, true);
            echo "'></label>
\t\t                    </td>
\t\t\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "created_at", array()), ((isset($context["date_format"]) ? $context["date_format"] : null) . " H:i")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href='https://facebook.com/";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["node_id"]) ? $context["node_id"] : null), "html", null, true);
            echo "' target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "node_name", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["log"], "node_type", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 63
            if (twig_test_empty($this->getAttribute($context["log"], "fb_post", array()))) {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t<p class='log'>";
                echo call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute($context["log"], "content", array())));
                echo "</p>
\t\t\t\t\t\t\t\t";
            } else {
                // line 66
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"https://facebook.com/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "fb_post", array()), "html", null, true);
                echo "\" target=\"_banck\" data-toggle='kp_tooltip' title='";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("View post on Facebook")), "html", null, true);
                echo "'><i class=\"fa fa-external-link\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("View post")), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"insight_";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "fb_account", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "fb_post", array()), "html", null, true);
                echo "\" class=\"btn btn-primary viewInsight insight_";
                echo twig_escape_filter($this->env, (isset($context["node_id"]) ? $context["node_id"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "fb_post", array()), "html", null, true);
                echo " insight_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "fb_post", array()), "html", null, true);
                echo "\" data-toggle='kp_tooltip' title='";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Click to view post insight")), "html", null, true);
                echo "' value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">";
                // line 70
                echo twig_escape_filter($this->env, (($this->getAttribute($context["log"], "share", array()) + $this->getAttribute($context["log"], "comments", array())) + (isset($context["cr"]) ? $context["cr"] : null)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t";
                // line 76
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 82
            echo "\t\t\t\t\t\t
\t\t\t            <tr>
\t\t\t              <td colspan=\"5\">
\t\t\t                ";
            // line 85
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No records available")), "html", null, true);
            echo "
\t\t\t              </td>
\t\t\t            </tr>
      
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t";
        // line 93
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 94
            echo "\t      ";
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "
\t    ";
        }
        // line 96
        echo "
\t</div>
</div>

<div id=\"postInsight\" class=\"modal fade\" role=\"dialog\" data-backdrop=\"static\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 105
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Post insight")), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        
\t\t<div class=\"fb-reaction fb-like\">
\t\t\t<span class=\"fb-icon\"></span> 
\t\t\t<span class=\"count\">0</span>
\t\t</div>

\t\t<div class=\"fb-reaction fb-love\">
\t\t\t<span class=\"fb-icon\"></span> 
\t\t\t<span class=\"count\">0</span>
\t\t</div>

\t\t<div class=\"fb-reaction fb-wow\">
\t\t\t<span class=\"fb-icon\"></span> 
\t\t\t<span class=\"count\">0</span>
\t\t</div>

\t\t<div class=\"fb-reaction fb-haha\">
\t\t\t<span class=\"fb-icon\"></span> 
\t\t\t<span class=\"count\">0</span>
\t\t</div>

\t\t<div class=\"fb-reaction fb-sad\">
\t\t\t<span class=\"fb-icon\"></span> 
\t\t\t<span class=\"count\">0</span>
\t\t</div>

\t\t<div class=\"fb-reaction fb-angry\">
\t\t\t<span class=\"fb-icon\"></span> 
\t\t\t<span class=\"count\">0</span>
\t\t</div>
\t
\t\t<div class=\"fb-comments\">
\t\t\t<span class=\"icon\"></span>
\t\t\t<span class=\"count\">0</span>
\t\t</div>

\t\t<div class=\"fb-shares\">
\t\t\t<span class=\"icon\"></span>
\t\t\t<span class=\"count\">0</span>
\t\t</div>

      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 151
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("CLOSE")), "html", null, true);
        echo "</a>
      </div>
    </div>
  </div>
</div>

";
        // line 158
        $context["box_id"] = "log";
        // line 159
        $context["delete_msg"] = call_user_func_array($this->env->getFunction('l')->getCallable(), array("Are you sure you want to delete the selected records?"));
        // line 160
        $this->loadTemplate("blocks/delete_modal.twig", "logs.twig", 160)->display($context);
    }

    // line 163
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 164
        echo "\t";
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
\t<script>
\t\$(\".updateInsight\").click(function(){
\t\tvar posts = \$('tbody .checkbox:checked');
      \tif(posts.length > 0){
      \t\tkp_preloader(\"on\");
      \t\t\$.ajax({
\t\t        url: '";
        // line 171
        echo twig_escape_filter($this->env, base_url(("facebook/get_access_token/" . (isset($context["schedule_id"]) ? $context["schedule_id"] : null))), "html", null, true);
        echo "',
\t\t        dataType: 'json',
\t\t        type: 'post',
\t\t        contentType: 'application/x-www-form-urlencoded',
\t\t        data: { ";
        // line 175
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') },
\t\t        success: function( data, textStatus, jQxhr ){
\t\t          if(data.status == \"success\"){
\t\t          \tkp_preloader(\"on\");
\t\t          \tvar posts = \$('tbody .checkbox:checked');
\t\t          \tvar totalPosts = posts.length > 50 ? 50 : posts.length;
\t\t            for (var i =  0; i < totalPosts; i++) {
\t\t            \tif(\$(posts[i]).data(\"fbpost\") != \"\"){
\t\t            \t\tgetPostInsight(\$(posts[i]).data(\"fbpost\"),data.access_token,0);
\t\t            \t}
\t\t  \t\t\t}
\t\t  \t\t\tkp_preloader(\"off\");
\t\t          }else{
\t\t            if(data.message !== null && typeof data.message === 'object'){
\t\t                htmlData = \"<ul>\";
\t\t                Object.keys(data.message).forEach(function(key) {
\t\t                    htmlData += \"<li>\" + data.message[key] + \"</li>\";
\t\t                });
\t\t                htmlData += \"</ul>\";
\t\t            }else{
\t\t                htmlData = data.message;
\t\t            }
\t\t            alertBox(htmlData,\"danger\",\".msgBox\",false);
\t\t          }
\t\t        },
\t\t        error: function( jqXhr, textStatus, errorThrown ){ 
\t\t          console.log(errorThrown);
\t\t          alertBox(\"";
        // line 202
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\".msgBox\",false);
\t\t        },
\t\t        complete: function() {
\t\t          kp_preloader(\"off\");
\t\t        }
\t\t     \t});

\t  \t\t}else{
\t      \t\talertBox(\"";
        // line 210
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Select at least one post")), "html", null, true);
        echo "\",\"danger\",\".msgBox\",true,true);
\t      \t}
\t});

\tfunction getPostInsight(object,token,attempts){

\t\tvar fields = \"reactions.type(LIKE).summary(total_count).limit(0).as(like),\";
\t\tfields += \"reactions.type(LOVE).summary(total_count).limit(0).as(love),\";
\t\tfields += \"reactions.type(WOW).summary(total_count).limit(0).as(wow),\";
\t\tfields += \"reactions.type(HAHA).summary(total_count).limit(0).as(haha),\";
\t\tfields += \"reactions.type(SAD).summary(total_count).limit(0).as(sad),\";
\t\tfields += \"reactions.type(ANGRY).summary(total_count).limit(0).as(angry),\";
\t\tfields += \"comments.limit(0).summary(true),\";
\t\tfields += \"sharedposts.limit(5000).summary(true)\";

\t\tvar res = \$.ajax( \"https://graph.facebook.com/v2.6/\"+object+\"/?fields=\"+fields+\"&access_token=\"+token )
\t\t  .done(function(data){

\t\t  \tvar like = 0;
\t\t  \tvar love = 0;
\t\t  \tvar wow = 0;
\t\t  \tvar haha = 0;
\t\t  \tvar sad = 0;
\t\t  \tvar angry = 0;
\t\t  \tvar comments = 0;
\t\t  \tvar sharedposts = 0;

\t\t  \tif(data.like.summary.total_count){
\t\t  \t\tvar like = data.like.summary.total_count;
\t\t  \t}

\t\t  \tif(data.love.summary.total_count){
\t\t  \t\tvar love = data.love.summary.total_count;
\t\t  \t}

\t\t  \tif(data.wow.summary.total_count){
\t\t  \t\tvar wow = data.wow.summary.total_count;
\t\t  \t}
\t\t  \t
\t\t  \tif(data.haha.summary.total_count){
\t\t  \t\tvar haha = data.haha.summary.total_count;
\t\t  \t}

\t\t  \tif(data.sad.summary.total_count){
\t\t  \t\tvar sad = data.sad.summary.total_count;
\t\t  \t}

\t\t  \tif(data.angry.summary.total_count){
\t\t\t\tvar angry = data.angry.summary.total_count;
\t\t  \t}
\t\t  \t
\t\t  \tif(data.comments !== undefined && data.comments.summary !== undefined && data.comments.summary.total_count){
\t\t\t\tvar comments = data.comments.summary.total_count;
\t\t  \t} else if (data.comments !== undefined && data.comments.count !== undefined){
\t\t  \t\tvar comments = data.comments.count;
\t\t  \t}

\t\t  \tif(typeof data != \"undefined\" && data.sharedposts){
\t  \t\t\tsharedposts += data.sharedposts.data.length;
\t  \t\t}

\t\t  \t\$(\"#insight_\"+object+\" .badge\").text(like+love+wow+haha+sad+angry+comments+sharedposts);

\t\t  \tsaveInsight(like,love,wow,haha,sad,angry,comments,sharedposts,object);
\t\t  })
\t\t  .fail(function(res){
\t\t  \tif(attempts==0){
\t\t  \t\tobject = object.substring(object.lastIndexOf(\"_\")+1, object.length);
\t\t  \t\tgetPostInsight(object,token,1);
\t\t  \t}
\t\t  });
\t}

\tfunction saveInsight(like,love,wow,haha,sad,angry,comments,sharedposts,post_id) {
\t\t\$.ajax({
\t        url: '";
        // line 285
        echo twig_escape_filter($this->env, base_url(("schedules/logs/update/" . (isset($context["schedule_id"]) ? $context["schedule_id"] : null))), "html", null, true);
        echo "',
\t        dataType: 'json',
\t        type: 'post',
\t        contentType: 'application/x-www-form-urlencoded',
\t        data: {
\t        \tlike: like,
\t        \tlove: love,
\t        \twow: wow,
\t        \thaha: haha,
\t        \tsad: sad,
\t        \tangry: angry,
\t        \tcomments: comments,
\t        \tsharedposts: sharedposts,
\t        \tpost_id: post_id,
\t        \t";
        // line 299
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') },
\t        success: function( data, textStatus, jQxhr ){
\t        \talertBox(\"";
        // line 301
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("post insight updated")), "html", null, true);
        echo "\",\"success\",\".msgBox\",false);
\t        },
\t        error: function( jqXhr, textStatus, errorThrown ){ 
\t          console.log(errorThrown);
\t        },
\t        complete: function() {
\t        }
\t    });
\t}

\t\$(\".viewInsight\").click(function(){
\t\tvar logId = \$(this).val();
      \tkp_preloader(\"on\",\"#postInsight .modal-body\");

      \t";
        // line 316
        echo "      \t\$(\".fb-like .count\",\"#postInsight\").text(0);
 \t\t\$(\".fb-love .count\",\"#postInsight\").text(0);
 \t\t\$(\".fb-wow .count\",\"#postInsight\").text(0);
 \t\t\$(\".fb-haha .count\",\"#postInsight\").text(0);
 \t\t\$(\".fb-sad .count\",\"#postInsight\").text(0);
 \t\t\$(\".fb-angry .count\",\"#postInsight\").text(0);
 \t\t\$(\".fb-comments .count\",\"#postInsight\").text(0);
 \t\t\$(\".fb-shares .count\",\"#postInsight\").text(0);

      \t\$.ajax({
\t        url: '";
        // line 326
        echo twig_escape_filter($this->env, base_url("schedules/logs/post_insight/"), "html", null, true);
        echo "'+logId,
\t        dataType: 'json',
\t        type: 'post',
\t        contentType: 'application/x-www-form-urlencoded',
\t        data: {
\t          ";
        // line 331
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t        },
\t        success: function( data, textStatus, jQxhr ){
\t         \tif(data.status == \"ok\"){
\t         \t\t\$(\".fb-like .count\",\"#postInsight\").text(data.insight.like);
\t         \t\t\$(\".fb-love .count\",\"#postInsight\").text(data.insight.love);
\t         \t\t\$(\".fb-wow .count\",\"#postInsight\").text(data.insight.wow);
\t         \t\t\$(\".fb-haha .count\",\"#postInsight\").text(data.insight.haha);
\t         \t\t\$(\".fb-sad .count\",\"#postInsight\").text(data.insight.sad);
\t         \t\t\$(\".fb-angry .count\",\"#postInsight\").text(data.insight.angry);
\t         \t\t\$(\".fb-comments .count\",\"#postInsight\").text(data.insight.comments);
\t         \t\t\$(\".fb-shares .count\",\"#postInsight\").text(data.insight.shares);
\t         \t}else{
\t           \t\talertBox(data.message,\"danger\",\".msgBox\",false);
\t          \t}
\t        },
\t        error: function( jqXhr, textStatus, errorThrown ){ 
\t          console.log(errorThrown);
\t          alertBox(\"";
        // line 349
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\".msgBox\",false);
\t        },
\t        complete: function() {
\t          kp_preloader(\"off\",\"#postInsight .modal-body\");
\t        }
      \t});
\t\t\$('#postInsight').modal('show');
\t});


\t ";
        // line 360
        echo "    \$(\"#deleteBtn\").click(function(){
    \tif(\$('tbody .checkbox:checked').length > 0){
\t\t\t\$(\"#delete_log\").modal(\"show\");
    \t}
    });

\t\$(\".deleteBtn_log\" ).click(function(){
  \t\tvar logs = [];
  \t\t\$('tbody .checkbox:checked').each(function(){
    \t\tlogs.push(\$(this).val());
  \t\t});

  \t\tkp_preloader(\"on\",\"#delete_log .modal-body\");
\t\t\$(\".deleteBtn_log\").prop('disabled', true);

\t\t\$.ajax({
\t\t\turl: '";
        // line 376
        echo twig_escape_filter($this->env, base_url("schedules/logs/delete"), "html", null, true);
        echo "',
\t\t\tdataType: 'json',
\t\t\ttype: 'post',
\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\tdata: { ids: JSON.stringify(logs), ";
        // line 380
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') },
\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t  if(data.status == \"success\"){
\t\t\t    alertBox(data.message,\"success\",\".deleteAlertBox_log\",false,false);
\t\t\t      \$(\".deleteBtn_log\").prop('disabled', true);
\t\t\t    \$(document).on('hide.bs.modal','#delete_log', function () {location.reload();});
\t\t\t  }else{
\t\t\t    alertBox(data.message,\"danger\",\".deleteAlertBox_log\",false,false);
\t\t\t  }
\t\t\t},
\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t  console.log(errorThrown);
\t\t\t  alertBox(\"";
        // line 392
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\".deleteAlertBox_log\",false,false);
\t\t\t},
\t\t\tcomplete: function(){
\t\t\t\tkp_preloader(\"off\",\"#delete_log .modal-body\");
\t\t\t\t\$(\".deleteBtn_log\").prop('disabled', false);
\t\t\t}
\t\t});

\t\t\$('.deleteBox_content_log').html(\"\");
   \t});

\t</script>
";
    }

    public function getTemplateName()
    {
        return "logs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  623 => 392,  606 => 380,  599 => 376,  581 => 360,  568 => 349,  545 => 331,  537 => 326,  525 => 316,  508 => 301,  501 => 299,  484 => 285,  406 => 210,  395 => 202,  363 => 175,  356 => 171,  345 => 164,  342 => 163,  338 => 160,  336 => 159,  334 => 158,  325 => 151,  276 => 105,  265 => 96,  259 => 94,  257 => 93,  252 => 90,  241 => 85,  236 => 82,  228 => 78,  224 => 76,  218 => 70,  201 => 68,  191 => 66,  185 => 64,  183 => 63,  178 => 61,  171 => 59,  166 => 57,  161 => 55,  151 => 54,  148 => 53,  143 => 50,  140 => 49,  137 => 48,  135 => 47,  132 => 46,  130 => 45,  127 => 44,  125 => 43,  122 => 42,  120 => 41,  117 => 40,  112 => 39,  105 => 35,  101 => 34,  97 => 33,  93 => 32,  82 => 23,  74 => 21,  69 => 19,  62 => 18,  60 => 17,  52 => 12,  48 => 11,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}{{ l('Logs') }}{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* <div class="msgBox"></div>*/
/* <div class="panel panel-default">*/
/* 	<div class="panel-heading">*/
/* 		<h3 class="panel-title"><i class="fa fa-list-alt" aria-hidden="true"></i>*/
/* 			{{ l("logs") }}*/
/* 			<span class="TotalRecords">{{ l('Showing %s of %s ',logs|length,total_posts) }}</span>*/
/* 		</h3>*/
/* 	</div>*/
/* 	<div class="panel-body">*/
/* 		*/
/* 		{% if schedule_id is not empty %}*/
/* 			<button id="deleteBtn" title="{{("Delete selected records")}}" class="btn btn-danger">{{ l("Delete") }}</button>*/
/* 			<input type="button" class="btn btn-primary updateInsight" value="{{ l("Update post insight") }}">*/
/* 		{% else %}*/
/* 			<a href="{{ base_url('schedules/logs/clear') }}" title="Clear logs" class="btn btn-danger">{{ l("Clear log") }}</a>*/
/* 		{% endif %}*/
/* */
/* 		<div class="table-responsive">*/
/* 			<table class="table table-bordered table-striped" id="datatable">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<td width="20px">*/
/* 			              <input type='checkbox' id="checkbox-all" class="check-all checkbox-style" name='a' />*/
/* 			              <label for="checkbox-all"></label>*/
/* 			            </td>*/
/* 						<td width="150">{{ l("Published on") }}</td>*/
/* 						<td>{{ l("Node") }}</td>*/
/* 						<td>{{ l("Node type") }}</td>*/
/* 						<td>{{ l("Post details") }}</td>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 					{% for log in logs %}*/
/* */
/* 						{% set fbr = json_decode(log.reactions,TRUE) %}*/
/* */
/* 						{% set cr = fbr['like']+fbr['love']+fbr['wow']+fbr['haha']+fbr['sad']+fbr['angry'] %}*/
/* */
/* 						{% set node_id = log.node_id %}*/
/* */
/* 						{% if log.node_id == "me" %}*/
/* 							{% set node_id = log.fb_account %}*/
/* 						{% endif %}*/
/* */
/* 						<tr>*/
/* 							 <td>*/
/* 		                      <input type='checkbox' class='checkbox checkbox-style' name='checkbox[]' id='checkbox-{{ log.id }}' data-fbpost="{%*/
/* 		                     if log.fb_post is not empty %}{{ log.fb_account }}_{{ log.fb_post }}{% endif %}" value='{{ log.id }}' />*/
/* 		                      <label for='checkbox-{{ log.id }}'></label>*/
/* 		                    </td>*/
/* 							<td>{{ log.created_at|date(date_format ~ " H:i") }}</td>*/
/* 							<td>*/
/* 								<a href='https://facebook.com/{{ node_id }}' target="_blank">{{ log.node_name }}</a>*/
/* 							</td>*/
/* 							<td>{{ log.node_type|capitalize }}</td>*/
/* 							<td>*/
/* 								{% if log.fb_post is empty %}*/
/* 									<p class='log'>{{ l(log.content)|raw }}</p>*/
/* 								{% else %}*/
/* 									<a class="btn btn-primary" href="https://facebook.com/{{ log.fb_post }}" target="_banck" data-toggle='kp_tooltip' title='{{ l('View post on Facebook') }}'><i class="fa fa-external-link" aria-hidden="true"></i> {{ l('View post') }}</a>*/
/* 								*/
/* 									<button type="button" id="insight_{{ log.fb_account }}_{{ log.fb_post }}" class="btn btn-primary viewInsight insight_{{ node_id }}_{{ log.fb_post }} insight_{{ log.fb_post }}" data-toggle='kp_tooltip' title='{{ l('Click to view post insight') }}' value="{{ log.id }}">*/
/* 										<i class="fa fa-bar-chart" aria-hidden="true"></i>*/
/* 										<span class="badge">{{ log.share+log.comments+cr }}</span>*/
/* 									</button>*/
/* */
/* 									{#<button type="button" class="btn btn-danger" data-toggle='kp_tooltip' title="{{ l('Delete this post on Facebook') }}">*/
/* 										<i class="fa fa-trash" aria-hidden="true"></i>  {{ l('Delete') }}*/
/* 									</button>#}*/
/* */
/* 								{% endif %}*/
/* 								</a>*/
/* 							</td>*/
/* 						</tr>*/
/* 					{% else %}*/
/* 						*/
/* 			            <tr>*/
/* 			              <td colspan="5">*/
/* 			                {{ l('No records available') }}*/
/* 			              </td>*/
/* 			            </tr>*/
/*       */
/* 					{% endfor %}*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 		{% if pagination %}*/
/* 	      {{ pagination|raw}}*/
/* 	    {% endif %}*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <div id="postInsight" class="modal fade" role="dialog" data-backdrop="static">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*         <h4 class="modal-title">{{ l("Post insight") }}</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         */
/* 		<div class="fb-reaction fb-like">*/
/* 			<span class="fb-icon"></span> */
/* 			<span class="count">0</span>*/
/* 		</div>*/
/* */
/* 		<div class="fb-reaction fb-love">*/
/* 			<span class="fb-icon"></span> */
/* 			<span class="count">0</span>*/
/* 		</div>*/
/* */
/* 		<div class="fb-reaction fb-wow">*/
/* 			<span class="fb-icon"></span> */
/* 			<span class="count">0</span>*/
/* 		</div>*/
/* */
/* 		<div class="fb-reaction fb-haha">*/
/* 			<span class="fb-icon"></span> */
/* 			<span class="count">0</span>*/
/* 		</div>*/
/* */
/* 		<div class="fb-reaction fb-sad">*/
/* 			<span class="fb-icon"></span> */
/* 			<span class="count">0</span>*/
/* 		</div>*/
/* */
/* 		<div class="fb-reaction fb-angry">*/
/* 			<span class="fb-icon"></span> */
/* 			<span class="count">0</span>*/
/* 		</div>*/
/* 	*/
/* 		<div class="fb-comments">*/
/* 			<span class="icon"></span>*/
/* 			<span class="count">0</span>*/
/* 		</div>*/
/* */
/* 		<div class="fb-shares">*/
/* 			<span class="icon"></span>*/
/* 			<span class="count">0</span>*/
/* 		</div>*/
/* */
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button class="btn btn-default" data-dismiss="modal">{{ l("CLOSE") }}</a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {# Box variables #}*/
/* {% set box_id = "log" %}*/
/* {% set delete_msg = l("Are you sure you want to delete the selected records?") %}*/
/* {% include "blocks/delete_modal.twig" %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/* 	{{ parent() }}*/
/* 	<script>*/
/* 	$(".updateInsight").click(function(){*/
/* 		var posts = $('tbody .checkbox:checked');*/
/*       	if(posts.length > 0){*/
/*       		kp_preloader("on");*/
/*       		$.ajax({*/
/* 		        url: '{{ base_url("facebook/get_access_token/" ~ schedule_id)  }}',*/
/* 		        dataType: 'json',*/
/* 		        type: 'post',*/
/* 		        contentType: 'application/x-www-form-urlencoded',*/
/* 		        data: { {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') },*/
/* 		        success: function( data, textStatus, jQxhr ){*/
/* 		          if(data.status == "success"){*/
/* 		          	kp_preloader("on");*/
/* 		          	var posts = $('tbody .checkbox:checked');*/
/* 		          	var totalPosts = posts.length > 50 ? 50 : posts.length;*/
/* 		            for (var i =  0; i < totalPosts; i++) {*/
/* 		            	if($(posts[i]).data("fbpost") != ""){*/
/* 		            		getPostInsight($(posts[i]).data("fbpost"),data.access_token,0);*/
/* 		            	}*/
/* 		  			}*/
/* 		  			kp_preloader("off");*/
/* 		          }else{*/
/* 		            if(data.message !== null && typeof data.message === 'object'){*/
/* 		                htmlData = "<ul>";*/
/* 		                Object.keys(data.message).forEach(function(key) {*/
/* 		                    htmlData += "<li>" + data.message[key] + "</li>";*/
/* 		                });*/
/* 		                htmlData += "</ul>";*/
/* 		            }else{*/
/* 		                htmlData = data.message;*/
/* 		            }*/
/* 		            alertBox(htmlData,"danger",".msgBox",false);*/
/* 		          }*/
/* 		        },*/
/* 		        error: function( jqXhr, textStatus, errorThrown ){ */
/* 		          console.log(errorThrown);*/
/* 		          alertBox("{{ l('Unable to complete your request') }}","danger",".msgBox",false);*/
/* 		        },*/
/* 		        complete: function() {*/
/* 		          kp_preloader("off");*/
/* 		        }*/
/* 		     	});*/
/* */
/* 	  		}else{*/
/* 	      		alertBox("{{ l('Select at least one post') }}","danger",".msgBox",true,true);*/
/* 	      	}*/
/* 	});*/
/* */
/* 	function getPostInsight(object,token,attempts){*/
/* */
/* 		var fields = "reactions.type(LIKE).summary(total_count).limit(0).as(like),";*/
/* 		fields += "reactions.type(LOVE).summary(total_count).limit(0).as(love),";*/
/* 		fields += "reactions.type(WOW).summary(total_count).limit(0).as(wow),";*/
/* 		fields += "reactions.type(HAHA).summary(total_count).limit(0).as(haha),";*/
/* 		fields += "reactions.type(SAD).summary(total_count).limit(0).as(sad),";*/
/* 		fields += "reactions.type(ANGRY).summary(total_count).limit(0).as(angry),";*/
/* 		fields += "comments.limit(0).summary(true),";*/
/* 		fields += "sharedposts.limit(5000).summary(true)";*/
/* */
/* 		var res = $.ajax( "https://graph.facebook.com/v2.6/"+object+"/?fields="+fields+"&access_token="+token )*/
/* 		  .done(function(data){*/
/* */
/* 		  	var like = 0;*/
/* 		  	var love = 0;*/
/* 		  	var wow = 0;*/
/* 		  	var haha = 0;*/
/* 		  	var sad = 0;*/
/* 		  	var angry = 0;*/
/* 		  	var comments = 0;*/
/* 		  	var sharedposts = 0;*/
/* */
/* 		  	if(data.like.summary.total_count){*/
/* 		  		var like = data.like.summary.total_count;*/
/* 		  	}*/
/* */
/* 		  	if(data.love.summary.total_count){*/
/* 		  		var love = data.love.summary.total_count;*/
/* 		  	}*/
/* */
/* 		  	if(data.wow.summary.total_count){*/
/* 		  		var wow = data.wow.summary.total_count;*/
/* 		  	}*/
/* 		  	*/
/* 		  	if(data.haha.summary.total_count){*/
/* 		  		var haha = data.haha.summary.total_count;*/
/* 		  	}*/
/* */
/* 		  	if(data.sad.summary.total_count){*/
/* 		  		var sad = data.sad.summary.total_count;*/
/* 		  	}*/
/* */
/* 		  	if(data.angry.summary.total_count){*/
/* 				var angry = data.angry.summary.total_count;*/
/* 		  	}*/
/* 		  	*/
/* 		  	if(data.comments !== undefined && data.comments.summary !== undefined && data.comments.summary.total_count){*/
/* 				var comments = data.comments.summary.total_count;*/
/* 		  	} else if (data.comments !== undefined && data.comments.count !== undefined){*/
/* 		  		var comments = data.comments.count;*/
/* 		  	}*/
/* */
/* 		  	if(typeof data != "undefined" && data.sharedposts){*/
/* 	  			sharedposts += data.sharedposts.data.length;*/
/* 	  		}*/
/* */
/* 		  	$("#insight_"+object+" .badge").text(like+love+wow+haha+sad+angry+comments+sharedposts);*/
/* */
/* 		  	saveInsight(like,love,wow,haha,sad,angry,comments,sharedposts,object);*/
/* 		  })*/
/* 		  .fail(function(res){*/
/* 		  	if(attempts==0){*/
/* 		  		object = object.substring(object.lastIndexOf("_")+1, object.length);*/
/* 		  		getPostInsight(object,token,1);*/
/* 		  	}*/
/* 		  });*/
/* 	}*/
/* */
/* 	function saveInsight(like,love,wow,haha,sad,angry,comments,sharedposts,post_id) {*/
/* 		$.ajax({*/
/* 	        url: '{{ base_url("schedules/logs/update/" ~ schedule_id)  }}',*/
/* 	        dataType: 'json',*/
/* 	        type: 'post',*/
/* 	        contentType: 'application/x-www-form-urlencoded',*/
/* 	        data: {*/
/* 	        	like: like,*/
/* 	        	love: love,*/
/* 	        	wow: wow,*/
/* 	        	haha: haha,*/
/* 	        	sad: sad,*/
/* 	        	angry: angry,*/
/* 	        	comments: comments,*/
/* 	        	sharedposts: sharedposts,*/
/* 	        	post_id: post_id,*/
/* 	        	{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') },*/
/* 	        success: function( data, textStatus, jQxhr ){*/
/* 	        	alertBox("{{l('post insight updated')}}","success",".msgBox",false);*/
/* 	        },*/
/* 	        error: function( jqXhr, textStatus, errorThrown ){ */
/* 	          console.log(errorThrown);*/
/* 	        },*/
/* 	        complete: function() {*/
/* 	        }*/
/* 	    });*/
/* 	}*/
/* */
/* 	$(".viewInsight").click(function(){*/
/* 		var logId = $(this).val();*/
/*       	kp_preloader("on","#postInsight .modal-body");*/
/* */
/*       	{# Reset modal values #}*/
/*       	$(".fb-like .count","#postInsight").text(0);*/
/*  		$(".fb-love .count","#postInsight").text(0);*/
/*  		$(".fb-wow .count","#postInsight").text(0);*/
/*  		$(".fb-haha .count","#postInsight").text(0);*/
/*  		$(".fb-sad .count","#postInsight").text(0);*/
/*  		$(".fb-angry .count","#postInsight").text(0);*/
/*  		$(".fb-comments .count","#postInsight").text(0);*/
/*  		$(".fb-shares .count","#postInsight").text(0);*/
/* */
/*       	$.ajax({*/
/* 	        url: '{{ base_url("schedules/logs/post_insight/") }}'+logId,*/
/* 	        dataType: 'json',*/
/* 	        type: 'post',*/
/* 	        contentType: 'application/x-www-form-urlencoded',*/
/* 	        data: {*/
/* 	          {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 	        },*/
/* 	        success: function( data, textStatus, jQxhr ){*/
/* 	         	if(data.status == "ok"){*/
/* 	         		$(".fb-like .count","#postInsight").text(data.insight.like);*/
/* 	         		$(".fb-love .count","#postInsight").text(data.insight.love);*/
/* 	         		$(".fb-wow .count","#postInsight").text(data.insight.wow);*/
/* 	         		$(".fb-haha .count","#postInsight").text(data.insight.haha);*/
/* 	         		$(".fb-sad .count","#postInsight").text(data.insight.sad);*/
/* 	         		$(".fb-angry .count","#postInsight").text(data.insight.angry);*/
/* 	         		$(".fb-comments .count","#postInsight").text(data.insight.comments);*/
/* 	         		$(".fb-shares .count","#postInsight").text(data.insight.shares);*/
/* 	         	}else{*/
/* 	           		alertBox(data.message,"danger",".msgBox",false);*/
/* 	          	}*/
/* 	        },*/
/* 	        error: function( jqXhr, textStatus, errorThrown ){ */
/* 	          console.log(errorThrown);*/
/* 	          alertBox("{{ l('Unable to complete your request') }}","danger",".msgBox",false);*/
/* 	        },*/
/* 	        complete: function() {*/
/* 	          kp_preloader("off","#postInsight .modal-body");*/
/* 	        }*/
/*       	});*/
/* 		$('#postInsight').modal('show');*/
/* 	});*/
/* */
/* */
/* 	 {# Delete action #}*/
/*     $("#deleteBtn").click(function(){*/
/*     	if($('tbody .checkbox:checked').length > 0){*/
/* 			$("#delete_log").modal("show");*/
/*     	}*/
/*     });*/
/* */
/* 	$(".deleteBtn_log" ).click(function(){*/
/*   		var logs = [];*/
/*   		$('tbody .checkbox:checked').each(function(){*/
/*     		logs.push($(this).val());*/
/*   		});*/
/* */
/*   		kp_preloader("on","#delete_log .modal-body");*/
/* 		$(".deleteBtn_log").prop('disabled', true);*/
/* */
/* 		$.ajax({*/
/* 			url: '{{ base_url("schedules/logs/delete") }}',*/
/* 			dataType: 'json',*/
/* 			type: 'post',*/
/* 			contentType: 'application/x-www-form-urlencoded',*/
/* 			data: { ids: JSON.stringify(logs), {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') },*/
/* 			success: function( data, textStatus, jQxhr ){*/
/* 			  if(data.status == "success"){*/
/* 			    alertBox(data.message,"success",".deleteAlertBox_log",false,false);*/
/* 			      $(".deleteBtn_log").prop('disabled', true);*/
/* 			    $(document).on('hide.bs.modal','#delete_log', function () {location.reload();});*/
/* 			  }else{*/
/* 			    alertBox(data.message,"danger",".deleteAlertBox_log",false,false);*/
/* 			  }*/
/* 			},*/
/* 			error: function( jqXhr, textStatus, errorThrown ){ */
/* 			  console.log(errorThrown);*/
/* 			  alertBox("{{ l('Unable to complete your request') }}","danger",".deleteAlertBox_log",false,false);*/
/* 			},*/
/* 			complete: function(){*/
/* 				kp_preloader("off","#delete_log .modal-body");*/
/* 				$(".deleteBtn_log").prop('disabled', false);*/
/* 			}*/
/* 		});*/
/* */
/* 		$('.deleteBox_content_log').html("");*/
/*    	});*/
/* */
/* 	</script>*/
/* {% endblock %}*/
