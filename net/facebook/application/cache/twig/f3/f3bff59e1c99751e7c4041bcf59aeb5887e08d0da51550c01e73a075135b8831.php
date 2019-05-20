<?php

/* install/base.twig */
class __TwigTemplate_e94198db1e828e9cb12ee0383427c1ab8e3132b75a2810506371ea5d4cf35d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'mainContent' => array($this, 'block_mainContent'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  ";
        // line 8
        $this->displayBlock('css', $context, $blocks);
        // line 12
        echo "
  
  <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, assets("theme/default/js/jquery.js"), "html", null, true);
        echo "\"></script>

  <style>
    .container.install {
        margin-top: 50px;
        max-width: 600px;
    }

    .container.install .card.pv {
      max-width: 450px;
      margin-right: auto;
      margin-left: auto;
    }
  </style>
</head>
<body>
  <div class=\"container\">
      <div class=\"container install\">
      ";
        // line 32
        $this->displayBlock('mainContent', $context, $blocks);
        // line 35
        echo "      </div>

    <footer>
        ";
        // line 38
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "    </footer>


  </div><!-- End wrapper -->

  ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "sitename", array()), "html", null, true);
    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, assets("theme/default/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, assets("theme/default/css/font-awesome.css"), "html", null, true);
        echo "\">
  ";
    }

    // line 32
    public function block_mainContent($context, array $blocks = array())
    {
        // line 33
        echo "      
      ";
    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        // line 39
        echo "            <section class=\"footer\">
              <div class=\"row copyright\">
                <div class=\"col-lg-12 copyright\" style='text-align: center'>
                  All rights reserved © ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "NOW", "Y"), "html", null, true);
        echo " Version ";
        echo twig_escape_filter($this->env, (isset($context["app_version"]) ? $context["app_version"] : null), "html", null, true);
        echo " | Powered by <a href=\"https://pandisoft.com/\" target=\"_blnak\">PandiSoft</a>.
                </div>
              </div>
            </section>
        ";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        // line 53
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, assets("theme/default/bootstrap/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, assets("theme/default/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "install/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 54,  136 => 53,  133 => 52,  122 => 42,  117 => 39,  114 => 38,  109 => 33,  106 => 32,  100 => 10,  95 => 9,  92 => 8,  86 => 4,  81 => 56,  79 => 52,  72 => 47,  70 => 38,  65 => 35,  63 => 32,  42 => 14,  38 => 12,  36 => 8,  29 => 4,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <title>{% block title %}{{ app_settings.sitename }}{% endblock %}</title>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   {% block css %}*/
/*     <link rel="stylesheet" href="{{ assets('theme/default/bootstrap/css/bootstrap.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ assets('theme/default/css/font-awesome.css') }}">*/
/*   {% endblock %}*/
/* */
/*   */
/*   <script src="{{ assets('theme/default/js/jquery.js') }}"></script>*/
/* */
/*   <style>*/
/*     .container.install {*/
/*         margin-top: 50px;*/
/*         max-width: 600px;*/
/*     }*/
/* */
/*     .container.install .card.pv {*/
/*       max-width: 450px;*/
/*       margin-right: auto;*/
/*       margin-left: auto;*/
/*     }*/
/*   </style>*/
/* </head>*/
/* <body>*/
/*   <div class="container">*/
/*       <div class="container install">*/
/*       {% block mainContent %}*/
/*       */
/*       {% endblock %}*/
/*       </div>*/
/* */
/*     <footer>*/
/*         {% block footer %}*/
/*             <section class="footer">*/
/*               <div class="row copyright">*/
/*                 <div class="col-lg-12 copyright" style='text-align: center'>*/
/*                   All rights reserved © {{ 'NOW'|date("Y")}} Version {{ app_version }} | Powered by <a href="https://pandisoft.com/" target="_blnak">PandiSoft</a>.*/
/*                 </div>*/
/*               </div>*/
/*             </section>*/
/*         {% endblock %}*/
/*     </footer>*/
/* */
/* */
/*   </div><!-- End wrapper -->*/
/* */
/*   {% block javascripts %}*/
/*     <script type="text/javascript" src="{{ assets('theme/default/bootstrap/js/tether.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ assets('theme/default/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*   {% endblock %}*/
/* </body>*/
/* </html>*/
