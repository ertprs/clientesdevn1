<?php

/* base.twig */
class __TwigTemplate_70d27408d1508f2f7d8592d718454073f037a1d0feab124d04898ebcecc481ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'head_js' => array($this, 'block_head_js'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'flash_bag' => array($this, 'block_flash_bag'),
            'ads' => array($this, 'block_ads'),
            'footer' => array($this, 'block_footer'),
            'javascripts_footer' => array($this, 'block_javascripts_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("DIR")), "html", null, true);
        echo "\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_description", array()), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["app_author"]) ? $context["app_author"] : null), "html", null, true);
        echo "\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  
  ";
        // line 10
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_favicon", array(), "array"))) {
            // line 11
            echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
            echo twig_escape_filter($this->env, assets(("theme/default/images/kp_favicon.png?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
            echo "\" >
  ";
        } else {
            // line 13
            echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_favicon", array(), "array"), "html", null, true);
            echo "\" >
  ";
        }
        // line 15
        echo "  <title>";
        $this->displayBlock('title', $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "sitename", array()), "html", null, true);
        echo "</title>
";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "  ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "  ";
        $this->displayBlock('head_js', $context, $blocks);
        // line 32
        echo "  ";
        echo $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "head_js", array(), "array");
        echo "
</head>
<body class=\"hold-transition skin-blue sidebar-mini ";
        // line 34
        if (((isset($context["sidebar_status"]) ? $context["sidebar_status"] : null) == "true")) {
            echo "sidebar-collapse";
        }
        echo "\">
<noscript>
  <div class=\"alerts alert alert-danger\">
    <span class=\"glyphicon glyphicon-warning-sign\"></span>
    <p class='alerttext'>JavaScript MUST be enabled in order for you to use ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "sitename", array()), "html", null, true);
        echo ". However, it seems JavaScript is either disabled or not supported by your browser. If your browser supports JavaScript, Please enable JavaScript by changing your browser options, then try again.</p>
  </div>
</noscript>
  ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 43
        echo "  <div id=\"particles-js\"></div>
  <div id=\"wrapper\">
  ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "  ";
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "  </div> <!-- End wrapper -->
  
  ";
        // line 77
        $this->displayBlock('javascripts_footer', $context, $blocks);
        // line 79
        echo "
  ";
        // line 80
        echo $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "footer_js", array(), "array");
        echo "

</body>
</html>";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, assets(("theme/default/bootstrap/css/bootstrap.min.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, assets(("theme/default/css/font-awesome.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
        // line 19
        if ((call_user_func_array($this->env->getFunction('lang')->getCallable(), array("DIR")) == "rtl")) {
            // line 20
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, assets(("theme/default/css/rtl.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
            echo "\" rel=\"stylesheet\" />
  ";
        }
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, assets(("theme/default/js/jquery.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>
  ";
    }

    // line 26
    public function block_head_js($context, array $blocks = array())
    {
        // line 27
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, assets(("theme/default/bootstrap/js/bootstrap.min.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
      \$('[data-toggle=\"kp_tooltip\"]').tooltip();
    </script>
  ";
    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        // line 42
        echo "  ";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $this->displayBlock('flash_bag', $context, $blocks);
        // line 49
        echo "    ";
        $this->displayBlock('ads', $context, $blocks);
        // line 52
        echo "    ";
        if ((twig_test_empty((isset($context["user"]) ? $context["user"] : null)) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isLoggedIn", array(), "method") == false))) {
            echo " 
        <select class=\"form-control selectLang\">
            ";
            // line 54
            $context["currentUserLang"] = (( !twig_test_empty((isset($context["current_lang"]) ? $context["current_lang"] : null))) ? ((isset($context["current_lang"]) ? $context["current_lang"] : null)) : ((isset($context["DEFAULT_LANG"]) ? $context["DEFAULT_LANG"] : null)));
            // line 55
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lang"], "availableLanguages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 56
                echo "                ";
                $context["selected"] = ((((isset($context["currentUserLang"]) ? $context["currentUserLang"] : null) == $context["lang"])) ? ("selected") : (""));
                echo " 
                <option value='";
                // line 57
                echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                echo "' ";
                echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : null), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["lang"]), "html", null, true);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "          </select>
      ";
        }
        // line 61
        echo "  ";
    }

    // line 46
    public function block_flash_bag($context, array $blocks = array())
    {
        // line 47
        echo "      ";
        $this->loadTemplate("blocks/flash_bag.twig", "base.twig", 47)->display($context);
        // line 48
        echo "    ";
    }

    // line 49
    public function block_ads($context, array $blocks = array())
    {
        // line 50
        echo "      ";
        $this->loadTemplate("blocks/ads.twig", "base.twig", 50)->display($context);
        // line 51
        echo "    ";
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        // line 63
        echo "    <p class=\"footer\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("COPYRIGHT")), "html", null, true);
        echo " &copy ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " 
      ";
        // line 64
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "footer_text", array(), "array"))) {
            // line 65
            echo "        Powered by <a href='https://pandisoft.com' target='_blank'>Kingposter</a>
      ";
        } else {
            // line 67
            echo "        ";
            echo $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "footer_text", array(), "array");
            echo "
      ";
        }
        // line 69
        echo "
    \t";
        // line 70
        if ((( !twig_test_empty((isset($context["user"]) ? $context["user"] : null)) && $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isLoggedIn", array(), "method")) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method") == true))) {
            echo " 
    \t\t- ";
            // line 71
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Version")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["app_version"]) ? $context["app_version"] : null), "html", null, true);
            echo "
    \t";
        }
        // line 73
        echo "    </p>
  ";
    }

    // line 77
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 78
        echo "  ";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 78,  292 => 77,  287 => 73,  280 => 71,  276 => 70,  273 => 69,  267 => 67,  263 => 65,  261 => 64,  254 => 63,  251 => 62,  247 => 51,  244 => 50,  241 => 49,  237 => 48,  234 => 47,  231 => 46,  227 => 61,  223 => 59,  211 => 57,  206 => 56,  201 => 55,  199 => 54,  193 => 52,  190 => 49,  187 => 46,  184 => 45,  180 => 42,  177 => 41,  167 => 27,  164 => 26,  157 => 24,  154 => 23,  146 => 20,  144 => 19,  140 => 18,  135 => 17,  132 => 16,  127 => 15,  119 => 80,  116 => 79,  114 => 77,  110 => 75,  107 => 62,  105 => 45,  101 => 43,  99 => 41,  93 => 38,  84 => 34,  78 => 32,  75 => 26,  72 => 23,  70 => 16,  63 => 15,  57 => 13,  51 => 11,  49 => 10,  42 => 6,  38 => 5,  32 => 2,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ l("DIR") }}">*/
/* <head>*/
/*   <meta charset="UTF-8">*/
/*   <meta name="description" content="{{ app_settings.site_description }}">*/
/*   <meta name="author" content="{{app_author}}">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   */
/*   {% if app_settings['site_favicon'] is empty %}*/
/*     <link rel="icon" type="image/png" href="{{ assets('theme/default/images/kp_favicon.png?v=' ~ assets_version) }}" >*/
/*   {% else %}*/
/*     <link rel="icon" type="image/png" href="{{ app_settings['site_favicon'] }}" >*/
/*   {% endif %}*/
/*   <title>{% block title %}{% endblock %} | {{ app_settings.sitename }}</title>*/
/* {% block stylesheets %}*/
/*   <link href="{{ assets('theme/default/bootstrap/css/bootstrap.min.css?v=' ~ assets_version) }}" rel="stylesheet">*/
/*   <link href="{{ assets('theme/default/css/font-awesome.css?v=' ~ assets_version) }}" rel="stylesheet" />*/
/*   {% if lang("DIR") == "rtl" %}*/
/*     <link href="{{ assets('theme/default/css/rtl.css?v=' ~ assets_version) }}" rel="stylesheet" />*/
/*   {% endif %}*/
/* {% endblock %}*/
/*   {% block javascripts %}*/
/*     <script src="{{ assets('theme/default/js/jquery.js?v=' ~ assets_version) }}"></script>*/
/*   {% endblock %}*/
/*   {% block head_js %}*/
/*     <script src="{{ assets('theme/default/bootstrap/js/bootstrap.min.js?v=' ~ assets_version) }}"></script>*/
/*     <script type="text/javascript">*/
/*       $('[data-toggle="kp_tooltip"]').tooltip();*/
/*     </script>*/
/*   {% endblock %}*/
/*   {{ app_settings['head_js']|raw }}*/
/* </head>*/
/* <body class="hold-transition skin-blue sidebar-mini {% if sidebar_status == "true" %}sidebar-collapse{% endif %}">*/
/* <noscript>*/
/*   <div class="alerts alert alert-danger">*/
/*     <span class="glyphicon glyphicon-warning-sign"></span>*/
/*     <p class='alerttext'>JavaScript MUST be enabled in order for you to use {{app_settings.sitename}}. However, it seems JavaScript is either disabled or not supported by your browser. If your browser supports JavaScript, Please enable JavaScript by changing your browser options, then try again.</p>*/
/*   </div>*/
/* </noscript>*/
/*   {% block header %}*/
/*   {% endblock %}*/
/*   <div id="particles-js"></div>*/
/*   <div id="wrapper">*/
/*   {% block body %}*/
/*     {% block flash_bag %}*/
/*       {% include "blocks/flash_bag.twig" %}*/
/*     {% endblock %}*/
/*     {% block ads %}*/
/*       {% include "blocks/ads.twig" %}*/
/*     {% endblock %}*/
/*     {% if user is empty and user.isLoggedIn() == false %} */
/*         <select class="form-control selectLang">*/
/*             {% set currentUserLang = current_lang is not empty ? current_lang : DEFAULT_LANG %}*/
/*               {% for lang in lang.availableLanguages %}*/
/*                 {% set selected = currentUserLang == lang ? 'selected' : '' %} */
/*                 <option value='{{ lang }}' {{ selected }}>{{ lang|capitalize }}</option>*/
/*               {% endfor %}*/
/*           </select>*/
/*       {% endif %}*/
/*   {% endblock %}*/
/*   {% block footer %}*/
/*     <p class="footer">{{ l('COPYRIGHT') }} &copy {{ "now"|date("Y") }} */
/*       {% if app_settings['footer_text'] is empty %}*/
/*         Powered by <a href='https://pandisoft.com' target='_blank'>Kingposter</a>*/
/*       {% else %}*/
/*         {{ app_settings['footer_text']|raw }}*/
/*       {% endif %}*/
/* */
/*     	{% if user is not empty and user.isLoggedIn() and user.hasPermission('admin') == true %} */
/*     		- {{ l('Version') }} {{ app_version }}*/
/*     	{% endif %}*/
/*     </p>*/
/*   {% endblock %}*/
/*   </div> <!-- End wrapper -->*/
/*   */
/*   {% block javascripts_footer %}*/
/*   {% endblock %}*/
/* */
/*   {{ app_settings['footer_js']|raw }}*/
/* */
/* </body>*/
/* </html>*/
