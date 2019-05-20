<?php

/* categories/create_category.twig */
class __TwigTemplate_9e711241177a2b5479cbf37d1a8d496196f98e0892864a63cc8f12848e4a6cd4 extends Twig_Template
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
        echo "<div id=\"addNewCatModal\" class=\"modal fade\" role=\"dialog\" data-backdrop=\"static\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Create new category")), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"addNewCatModalMsgBox\"></div>
\t\t  \t\t<input type=\"text\" id=\"newCategoryName\" name=\"newCategoryName\" class=\"form-control\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("New category name")), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("CLOSE")), "html", null, true);
        echo "</button>
\t\t\t\t<button id=\"addCategory\" onclick=\"return false;\" class=\"btn btn-primary\">";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Create")), "html", null, true);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\t\$(function(){

\t\t\$('.groupsOptions').on('click','#createNewCatBtn', function(e) {
\t\t\t\$(\"#addNewCatModal\").modal(\"show\");
\t\t});

\t\t\$('#addNewCatModal').on('click','#addCategory', function(e) {
\t\t\t\$(\"#addCategory\").prop('disabled', true);
\t\t\tkp_preloader(\"on\",\"#addNewCatModal .modal-body\");
\t\t\t\$.ajax({
\t\t      url: '";
        // line 30
        echo twig_escape_filter($this->env, base_url("nodes_categories/add_category"), "html", null, true);
        echo "',
\t\t      dataType: 'json',
\t\t      type: 'post',
\t\t      contentType: 'application/x-www-form-urlencoded',
\t\t      data: { 
\t\t      \tcategoryname: \$(\"#newCategoryName\").val(),
\t\t\t\t";
        // line 36
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
                  alertBox(htmlData,\"success\",\".addNewCatModalMsgBox\",true,true);
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
                  alertBox(htmlData,\"danger\",\".addNewCatModalMsgBox\",false,true);
                }

\t\t        \$(\"#addCategory\").prop('disabled', false);
\t\t        \t
\t\t      },
\t\t      error: function( jqXhr, textStatus, errorThrown ){ 
\t\t      \tconsole.log(errorThrown);
\t\t      \talertBox(\"";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request, Please try again")), "html", null, true);
        echo "\",\"danger\",\".addNewCatModalMsgBox\",false,true);
\t\t      \t\$(\"#addCategory\").prop('disabled', false);
\t\t      },
\t\t      complete: function(){
\t\t      \tkp_preloader(\"off\",\"#addNewCatModal .modal-body\");
\t\t      }
\t\t    });
\t\t});\t
\t});\t
</script>";
    }

    public function getTemplateName()
    {
        return "categories/create_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 68,  71 => 36,  62 => 30,  43 => 14,  39 => 13,  33 => 10,  26 => 6,  19 => 1,);
    }
}
/* <div id="addNewCatModal" class="modal fade" role="dialog" data-backdrop="static">*/
/* 	<div class="modal-dialog">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				<h4 class="modal-title">{{ l("Create new category") }}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				<div class="addNewCatModalMsgBox"></div>*/
/* 		  		<input type="text" id="newCategoryName" name="newCategoryName" class="form-control" placeholder="{{ l('New category name') }}"/>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button class="btn btn-default" data-dismiss="modal">{{ l("CLOSE") }}</button>*/
/* 				<button id="addCategory" onclick="return false;" class="btn btn-primary">{{ l("Create") }}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* 	$(function(){*/
/* */
/* 		$('.groupsOptions').on('click','#createNewCatBtn', function(e) {*/
/* 			$("#addNewCatModal").modal("show");*/
/* 		});*/
/* */
/* 		$('#addNewCatModal').on('click','#addCategory', function(e) {*/
/* 			$("#addCategory").prop('disabled', true);*/
/* 			kp_preloader("on","#addNewCatModal .modal-body");*/
/* 			$.ajax({*/
/* 		      url: '{{ base_url("nodes_categories/add_category") }}',*/
/* 		      dataType: 'json',*/
/* 		      type: 'post',*/
/* 		      contentType: 'application/x-www-form-urlencoded',*/
/* 		      data: { */
/* 		      	categoryname: $("#newCategoryName").val(),*/
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
/*                   }else{*/
/*                     htmlData = data.message;*/
/*                   }*/
/*                   alertBox(htmlData,"success",".addNewCatModalMsgBox",true,true);*/
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
/*                   alertBox(htmlData,"danger",".addNewCatModalMsgBox",false,true);*/
/*                 }*/
/* */
/* 		        $("#addCategory").prop('disabled', false);*/
/* 		        	*/
/* 		      },*/
/* 		      error: function( jqXhr, textStatus, errorThrown ){ */
/* 		      	console.log(errorThrown);*/
/* 		      	alertBox("{{ l('Unable to complete your request, Please try again') }}","danger",".addNewCatModalMsgBox",false,true);*/
/* 		      	$("#addCategory").prop('disabled', false);*/
/* 		      },*/
/* 		      complete: function(){*/
/* 		      	kp_preloader("off","#addNewCatModal .modal-body");*/
/* 		      }*/
/* 		    });*/
/* 		});	*/
/* 	});	*/
/* </script>*/
