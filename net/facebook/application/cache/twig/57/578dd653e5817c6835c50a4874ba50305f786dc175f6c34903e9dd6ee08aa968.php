<?php

/* base_dashboard.twig */
class __TwigTemplate_1cc8b1d8f8921a8dc39838f852c9406622328dbe6abbff4b38025aef5532805b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'metas' => array($this, 'block_metas'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'head_js' => array($this, 'block_head_js'),
            'top_header' => array($this, 'block_top_header'),
            'header' => array($this, 'block_header'),
            'flash_bag' => array($this, 'block_flash_bag'),
            'ads' => array($this, 'block_ads'),
            'body' => array($this, 'block_body'),
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
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_description", array()), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["app_author"]) ? $context["app_author"] : null), "html", null, true);
        echo "\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"theme-color\" content=\"#";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "theme_color", array()), "html", null, true);
        echo "\">
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

  ";
        // line 12
        $this->displayBlock('metas', $context, $blocks);
        // line 14
        echo "
  ";
        // line 15
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_favicon", array(), "array"))) {
            // line 16
            echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
            echo twig_escape_filter($this->env, assets(("theme/default/images/kp_favicon.png?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
            echo "\" >
  ";
        } else {
            // line 18
            echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_favicon", array(), "array"), "html", null, true);
            echo "\" >
  ";
        }
        // line 20
        echo "  <title>";
        if (($this->getAttribute(getUserNotifications(), "count_notifications", array()) != 0)) {
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute(getUserNotifications(), "count_notifications", array()), "html", null, true);
            echo ") - ";
        }
        $this->displayBlock('title', $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "sitename", array()), "html", null, true);
        echo "</title>

  ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('head_js', $context, $blocks);
        // line 49
        echo "
    ";
        // line 50
        echo $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "head_js", array(), "array");
        echo "

    <style>
    ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "custom_css", array(), "array"), "html", null, true);
        echo "
    </style>
    
</head>
<body class=\"hold-transition skin-blue sidebar-mini ";
        // line 57
        if (((isset($context["sidebar_status"]) ? $context["sidebar_status"] : null) == "true")) {
            echo "sidebar-collapse";
        }
        echo " ";
        if ((call_user_func_array($this->env->getFunction('lang')->getCallable(), array("DIR")) == "rtl")) {
            echo "rtl";
        }
        echo "\">

";
        // line 59
        $context["showAdsTo"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "show_ads_to", array())));
        // line 60
        echo "  
";
        // line 61
        $this->displayBlock('top_header', $context, $blocks);
        // line 62
        echo "
<div class=\"wrapper\">
  ";
        // line 64
        $this->displayBlock('header', $context, $blocks);
        // line 498
        echo "  <div class=\"content-wrapper addMargin\">
    <section class=\"content-header\">
      ";
        // line 500
        $this->displayBlock('flash_bag', $context, $blocks);
        // line 503
        echo "      ";
        $this->displayBlock('ads', $context, $blocks);
        // line 506
        echo "    </section>
    <section class=\"content container-fluid\">
      <div class='alerts'></div>
      ";
        // line 509
        $this->displayBlock('body', $context, $blocks);
        // line 511
        echo "    </section>
  </div>
  <footer class=\"main-footer\">
    ";
        // line 514
        $this->displayBlock('footer', $context, $blocks);
        // line 527
        echo "  </footer>
</div>
<div class=\"scrollTop\">
      <i class=\"fa fa-arrow-circle-up\" aria-hidden=\"true\"></i>
    </div>
  ";
        // line 532
        $this->displayBlock('javascripts_footer', $context, $blocks);
        // line 554
        echo "  ";
        echo $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "footer_js", array(), "array");
        echo "
</body>
</html>";
    }

    // line 12
    public function block_metas($context, array $blocks = array())
    {
        // line 13
        echo "  ";
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, assets(("theme/default/bootstrap/css/bootstrap.min.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, assets(("theme/default/bootstrap/css/bootstrap-4.min.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, assets(("theme/default/css/preloader.min.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, assets(("theme/default/css/font-awesome.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, assets(("theme/default/css/dashboard.min.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, assets(("theme/default/css/skins/skin-blue.min.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, assets(("theme/default/css/theme_color.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, assets(("theme/default/css/general.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        // line 31
        if ((call_user_func_array($this->env->getFunction('lang')->getCallable(), array("DIR")) == "rtl")) {
            // line 32
            echo "      <link href=\"";
            echo twig_escape_filter($this->env, assets(("theme/default/css/rtl.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
            echo "\" rel=\"stylesheet\" />
    ";
        }
        // line 34
        echo "  ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, assets(("theme/default/js/jquery.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, assets(("theme/default/js/libs/dashboard.min.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, assets(("theme/default/bootstrap/js/bootstrap.min.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, assets(("theme/default/js/libs/preloader.min.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, assets(("theme/default/js/helpers.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 44
    public function block_head_js($context, array $blocks = array())
    {
        // line 45
        echo "      <script type=\"text/javascript\">
        \$('[data-toggle=\"kp_tooltip\"]').tooltip();
      </script>
    ";
    }

    // line 61
    public function block_top_header($context, array $blocks = array())
    {
    }

    // line 64
    public function block_header($context, array $blocks = array())
    {
        // line 65
        echo "  <header class=\"main-header\">
    <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, base_url(""), "html", null, true);
        echo "\" title=\"Home\" class=\"logo hidden-xs\">
      <span class=\"logo-mini\">
        ";
        // line 68
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo_50", array(), "array"))) {
            // line 69
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, assets(("theme/default/images/kp_logo_50.png?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
            echo "\" alt=\"logo\">
          ";
        } else {
            // line 71
            echo "            <span class=\"logo-lg\">
            <img src=\"";
            // line 72
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo_50", array(), "array") . "?v=") . (isset($context["assets_version"]) ? $context["assets_version"] : null)), "html", null, true);
            echo "\" alt=\"logo\">
          </span>
        ";
        }
        // line 75
        echo "      </span>

      <span class=\"logo-lg\">
        ";
        // line 78
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo", array(), "array"))) {
            // line 79
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, assets(("theme/default/images/kp_logo.png?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
            echo "\" alt=\"logo\">
          ";
        } else {
            // line 81
            echo "            <span class=\"logo-lg\">
          <img src=\"";
            // line 82
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo", array(), "array") . "?v=") . (isset($context["assets_version"]) ? $context["assets_version"] : null)), "html", null, true);
            echo "\" alt=\"logo\">
        </span>
        ";
        }
        // line 85
        echo "      </span>
    </a>

    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
      <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
      </a>
      <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, base_url(""), "html", null, true);
        echo "\" title=\"Home\" class=\"logo visible-xs\">
        <span class=\"logo-lg\">
          ";
        // line 94
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo", array(), "array"))) {
            // line 95
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, assets(("theme/default/images/kp_logo.png?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
            echo "\" alt=\"logo\">
            ";
        } else {
            // line 97
            echo "              <span class=\"logo-lg\">
            <img src=\"";
            // line 98
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo", array(), "array") . "?v=") . (isset($context["assets_version"]) ? $context["assets_version"] : null)), "html", null, true);
            echo "\" alt=\"logo\">
          </span>
          ";
        }
        // line 101
        echo "        </span>
      </a>
      <div class=\"navbar-custom-menu hidden-xs\">
        <ul class=\"nav navbar-nav\">
          ";
        // line 105
        if ( !(null === (isset($context["demo_link"]) ? $context["demo_link"] : null))) {
            // line 106
            echo "          <li style=\"background-color: #82b440;margin: 0px 30px;\"><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["demo_link"]) ? $context["demo_link"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["demo_link_text"]) ? $context["demo_link_text"] : null), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, (isset($context["demo_link_text"]) ? $context["demo_link_text"] : null), "html", null, true);
            echo "</a></li>
          ";
        }
        // line 108
        echo "          ";
        if (KPMIsActive("payments")) {
            // line 109
            echo "            <li>
              <a href='";
            // line 110
            echo twig_escape_filter($this->env, base_url("prices"), "html", null, true);
            echo "'>
                <i class=\"fa fa-money\" aria-hidden=\"true\"></i>
                <span>";
            // line 112
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Pricing")), "html", null, true);
            echo "</span>
              </a>
            </li>
            ";
        }
        // line 116
        echo "

          ";
        // line 118
        $this->loadTemplate("notifications/components/notifications_menu.twig", "base_dashboard.twig", 118)->display($context);
        // line 119
        echo "          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle UserProfil\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                ";
        // line 121
        if ( !twig_test_empty($this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "UserDefaultFbAccount", array(), "method"))) {
            // line 122
            echo "                <img src='https://graph.facebook.com/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "UserDefaultFbAccount", array(), "method"), "html", null, true);
            echo "/picture?redirect=1&height=32&width=32&type=normal' width='32' height='32' style='vertical-align:middle;' class=\"img-circle\" onerror=\"this.src = '";
            echo twig_escape_filter($this->env, assets("theme/default/images/facebookUser.jpg"), "html", null, true);
            echo "'\"/>
                ";
        } else {
            // line 124
            echo "                  <img src='";
            echo twig_escape_filter($this->env, assets("theme/default/images/facebookUser.jpg"), "html", null, true);
            echo "' width='32' height='32' style='vertical-align:middle;' />
                ";
        }
        // line 126
        echo "                <span class=\"userFullName\">
                  ";
        // line 127
        if ( !twig_test_empty($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(), "method"))) {
            // line 128
            echo "                    <span class=\"hidden-sm\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "name"), "method")), "html", null, true);
            echo "</span>
                  ";
        } else {
            // line 130
            echo "                    <span class=\"hidden-sm\">Facebook User</span>
                  ";
        }
        // line 132
        echo "                </span>
              </a>
            <ul class=\"dropdown-menu\">
                ";
        // line 135
        $context["fbacounts"] = $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "getAll", array(), "method");
        // line 136
        echo "                ";
        if ( !twig_test_empty((isset($context["fbacounts"]) ? $context["fbacounts"] : null))) {
            echo " 
                    ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fbacounts"]) ? $context["fbacounts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["fba"]) {
                // line 138
                echo "                        <li>
                        <a href=\"";
                // line 139
                echo twig_escape_filter($this->env, base_url(("settings/fb_accounts/switch_fb_account/" . $this->getAttribute($context["fba"], "fb_id", array()))), "html", null, true);
                echo "\" >
                          <img src='https://graph.facebook.com/";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "fb_id", array()), "html", null, true);
                echo "/picture?redirect=1&height=40&width=40&type=normal' style='vertical-align:middle;' width='32px' height='32px' class=\"fbProfileImg\" onerror=\"this.src = '";
                echo twig_escape_filter($this->env, assets("theme/default/images/facebookUser.jpg"), "html", null, true);
                echo "'\"/> ";
                echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute($context["fba"], "firstname", array())) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute($context["fba"], "lastname", array()))), "html", null, true);
                echo "
                        </a>
                      </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fba'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                ";
        } else {
            // line 145
            echo "                    <li><a href='#'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No facebook account available")), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 147
        echo "                <li role=\"separator\" class=\"divider\"></li>
                <li><a href=\"";
        // line 148
        echo twig_escape_filter($this->env, base_url("settings/fb_accounts"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add facebook account")), "html", null, true);
        echo "</a></li>
                <li role=\"separator\" class=\"divider\"></li>

                <li>
                  <a href='";
        // line 152
        echo twig_escape_filter($this->env, base_url("settings"), "html", null, true);
        echo "' >
                    <i class='fa fa-fw fa-cog' aria-hidden=\"true\"></i>
                    ";
        // line 154
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Settings")), "html", null, true);
        echo "
                  </a>
                </li>

                ";
        // line 158
        if (KPMIsActive("payments")) {
            // line 159
            echo "                <li>
                  <a href='";
            // line 160
            echo twig_escape_filter($this->env, base_url("payments/my_orders"), "html", null, true);
            echo "' >
                    <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                    ";
            // line 162
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("My orders")), "html", null, true);
            echo "
                  </a>
                </li>
                ";
        }
        // line 166
        echo "
                <li role=\"separator\" class=\"divider\"></li>

                <li>
                  <a href='";
        // line 170
        echo twig_escape_filter($this->env, base_url("logout"), "html", null, true);
        echo "'>
                    <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
                    ";
        // line 172
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("LOGOUT")), "html", null, true);
        echo "
                  </a>
                </li>
              </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class=\"main-sidebar\">
    <section class=\"sidebar\">
      <ul class=\"sidebar-menu\" data-widget=\"tree\">
        <li class=\"treeview visible-xs\">
          <a href=\"#\" class=\"dropdown-toggle UserProfil\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                ";
        // line 186
        if ( !twig_test_empty($this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "UserDefaultFbAccount", array(), "method"))) {
            // line 187
            echo "                <img src='https://graph.facebook.com/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "UserDefaultFbAccount", array(), "method"), "html", null, true);
            echo "/picture?redirect=1&height=32&width=32&type=normal' width='32' height='32' style='vertical-align:middle;' class=\"img-circle\" onerror=\"this.src = '";
            echo twig_escape_filter($this->env, assets("theme/default/images/facebookUser.jpg"), "html", null, true);
            echo "'\"/>
                ";
        } else {
            // line 189
            echo "                  <img src='";
            echo twig_escape_filter($this->env, assets("theme/default/images/facebookUser.jpg"), "html", null, true);
            echo "' width='32' height='32' style='vertical-align:middle;' />
                ";
        }
        // line 191
        echo "                <span class=\"userFullName\">
                  ";
        // line 192
        if ( !twig_test_empty($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(), "method"))) {
            // line 193
            echo "                    <span class=\"hidden-sm\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "name"), "method")), "html", null, true);
            echo "</span>
                  ";
        } else {
            // line 195
            echo "                    <span class=\"hidden-sm\">Facebook User</span>
                  ";
        }
        // line 197
        echo "                </span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
          <ul class=\"treeview-menu\">
            ";
        // line 201
        $context["fbacounts"] = $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "getAll", array(), "method");
        // line 202
        echo "                ";
        if ( !twig_test_empty((isset($context["fbacounts"]) ? $context["fbacounts"] : null))) {
            echo " 
                    ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fbacounts"]) ? $context["fbacounts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["fba"]) {
                // line 204
                echo "                        <li>
                        <a href=\"";
                // line 205
                echo twig_escape_filter($this->env, base_url(("settings/fb_accounts/switch_fb_account/" . $this->getAttribute($context["fba"], "fb_id", array()))), "html", null, true);
                echo "\" >
                          <img src='https://graph.facebook.com/";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "fb_id", array()), "html", null, true);
                echo "/picture?redirect=1&height=40&width=40&type=normal' style='vertical-align:middle;' width='32px' height='32px' class=\"fbProfileImg\" onerror=\"this.src = '";
                echo twig_escape_filter($this->env, assets("theme/default/images/facebookUser.jpg"), "html", null, true);
                echo "'\"/> ";
                echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute($context["fba"], "firstname", array())) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute($context["fba"], "lastname", array()))), "html", null, true);
                echo "
                        </a>
                      </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fba'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "                ";
        } else {
            // line 211
            echo "                    <li>
                      <a href='#'>";
            // line 212
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No facebook account available")), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 214
        echo "                <li>
                  <a href=\"";
        // line 215
        echo twig_escape_filter($this->env, base_url("settings/fb_accounts"), "html", null, true);
        echo "\">
                    <i class=\"fa fa-plus\"></i>
                    <span>";
        // line 217
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add facebook account")), "html", null, true);
        echo "</span>
                  </a>
                </li>
          </ul>
        </li>

        <li>
          <a href='";
        // line 224
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "'>
          <i class=\"fa fa-home\"></i><span>";
        // line 225
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Home")), "html", null, true);
        echo "</span>
          </a>
        </li>

        <li class=\"visible-xs\">
          <a href='";
        // line 230
        echo twig_escape_filter($this->env, base_url("my_notifications"), "html", null, true);
        echo "'>
          <i class=\"fa fa-bell-o\"></i><span>";
        // line 231
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Notifications")), "html", null, true);
        echo "</span> <span class=\"label label-danger\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "count_notifications", array()), "html", null, true);
        echo "</span>
          </a>
        </li>

        ";
        // line 235
        if (KPMIsActive("payments")) {
            // line 236
            echo "        <li class=\"visible-xs\">
          <a href='";
            // line 237
            echo twig_escape_filter($this->env, base_url("payments/my_orders"), "html", null, true);
            echo "' >
            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
            ";
            // line 239
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("My orders")), "html", null, true);
            echo "
          </a>
        </li>
        ";
        }
        // line 243
        echo " 
        ";
        // line 244
        if ( !(null === (isset($context["demo_link"]) ? $context["demo_link"] : null))) {
            // line 245
            echo "        <li style=\"background-color: #82b440;color: white;\"><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["demo_link"]) ? $context["demo_link"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["demo_link_text"]) ? $context["demo_link_text"] : null), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i><span>";
            echo twig_escape_filter($this->env, (isset($context["demo_link_text"]) ? $context["demo_link_text"] : null), "html", null, true);
            echo "</span></a></li>
        ";
        }
        // line 247
        echo "
        <li class=\"treeview\">
          <a href='";
        // line 249
        echo twig_escape_filter($this->env, base_url("settings"), "html", null, true);
        echo "'>
            <i class=\"fa fa-cog\"></i>
            <span>";
        // line 251
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Settings")), "html", null, true);
        echo "</span>
            <span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span>
          </a>
          <ul class=\"treeview-menu\">
            <li class='";
        // line 255
        if (((isset($context["current_page"]) ? $context["current_page"] : null) == "general_settings")) {
            echo "active";
        }
        echo "'>
              <a href='";
        // line 256
        echo twig_escape_filter($this->env, base_url("settings/general_settings"), "html", null, true);
        echo "' >
                <i class='fa fa-fw fa-tasks'></i>
                <span>";
        // line 258
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("General settings")), "html", null, true);
        echo "</span>
              </a>
            </li>

            <li class='";
        // line 262
        if (((isset($context["current_page"]) ? $context["current_page"] : null) == "publish_settings")) {
            echo "active";
        }
        echo "'>
              <a href='";
        // line 263
        echo twig_escape_filter($this->env, base_url("settings/publish_settings"), "html", null, true);
        echo "' >
                <i class='fa fa-fw fa-clipboard'></i>
                <span>";
        // line 265
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Publish settings")), "html", null, true);
        echo "</span>
              </a>
            </li>

            <li class='";
        // line 269
        if (((isset($context["current_page"]) ? $context["current_page"] : null) == "fb_accounts")) {
            echo "active";
        }
        echo "'>
              <a href='";
        // line 270
        echo twig_escape_filter($this->env, base_url("settings/fb_accounts"), "html", null, true);
        echo "' >
                <i class='fa fa-fw fa-facebook'></i>
                <span>";
        // line 272
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook accounts")), "html", null, true);
        echo "</span>
              </a>
            </li>

            <li class='";
        // line 276
        if (((isset($context["current_page"]) ? $context["current_page"] : null) == "fbapps")) {
            echo "active";
        }
        echo "'>
              <a href='";
        // line 277
        echo twig_escape_filter($this->env, base_url("settings/fbapps"), "html", null, true);
        echo "' >
                <i class='fa fa-fw fa-plug'></i>
                <span>";
        // line 279
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook Apps")), "html", null, true);
        echo "</span>
              </a>
            </li>
            ";
        // line 282
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method") == true)) {
            // line 283
            echo "            <li class='";
            if (((isset($context["current_page"]) ? $context["current_page"] : null) == "app_settings")) {
                echo "active";
            }
            echo "'>
              <a href='";
            // line 284
            echo twig_escape_filter($this->env, base_url("settings/app_settings"), "html", null, true);
            echo "' ><i class='fa fa-fw fa-cogs'></i> 
                <span>";
            // line 285
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("App settings")), "html", null, true);
            echo "</span>
              </a>
            </li>
            <li class='";
            // line 288
            if (((isset($context["current_page"]) ? $context["current_page"] : null) == "roles")) {
                echo "active";
            }
            echo "'>
              <a href='";
            // line 289
            echo twig_escape_filter($this->env, base_url("settings/roles"), "html", null, true);
            echo "' >
                <i class='fa fa-fw fa-users'></i>
                <span>";
            // line 291
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Roles")), "html", null, true);
            echo "</span>
              </a>
            </li>
            <li class='";
            // line 294
            if (((isset($context["current_page"]) ? $context["current_page"] : null) == "modules_manager")) {
                echo "active";
            }
            echo "'>
              <a href='";
            // line 295
            echo twig_escape_filter($this->env, base_url("settings/modules_manager"), "html", null, true);
            echo "' >
                <i class='fa fa-th-large'></i>
                <span>";
            // line 297
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Modules manager")), "html", null, true);
            echo "</span>
              </a>
            </li>
            ";
            // line 300
            if ((isset($context["enable_proxy"]) ? $context["enable_proxy"] : null)) {
                // line 301
                echo "            <li class='";
                if (((isset($context["current_page"]) ? $context["current_page"] : null) == "Proxies_manager")) {
                    echo "active";
                }
                echo "'>
              <a href='";
                // line 302
                echo twig_escape_filter($this->env, base_url("settings/proxies_manager"), "html", null, true);
                echo "' >
                <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                <span class=\"hidden-xs\">";
                // line 304
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Proxies manager")), "html", null, true);
                echo "</span>
              </a>
            </li>
            ";
            }
            // line 308
            echo "            ";
        }
        // line 309
        echo "           </ul>
        </li>

        <li class=\"treeview\">
          <a href='#'>
            <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
            <span>";
        // line 315
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Publishing")), "html", null, true);
        echo "</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li>
              <a href=\"";
        // line 322
        echo twig_escape_filter($this->env, base_url("posts"), "html", null, true);
        echo "\">
              <i class=\"fa fa-clipboard  \"></i> 
              <span>";
        // line 324
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Saved posts")), "html", null, true);
        echo "</span>
              </a>
            </li>
            <li>
              <a href=\"";
        // line 328
        echo twig_escape_filter($this->env, base_url("schedules"), "html", null, true);
        echo "\">
              <i class=\"fa fa-calendar\"></i> 
                <span>";
        // line 330
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Scheduled posts")), "html", null, true);
        echo "</span>
              </a>
            </li>
            <li>
              <a href=\"";
        // line 334
        echo twig_escape_filter($this->env, base_url("schedules/logs"), "html", null, true);
        echo "\">
              <i class=\"fa fa-folder-open-o\"></i> 
                <span>";
        // line 336
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedule Logs")), "html", null, true);
        echo "</span>
              </a>
            </li>
          </ul>
        </li>
          
        <li>
          <a href='";
        // line 343
        echo twig_escape_filter($this->env, base_url("insights"), "html", null, true);
        echo "'>
            <i class=\"fa fa-bar-chart\"></i>
            <span>";
        // line 345
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("insights")), "html", null, true);
        echo "</span>
          </a>
        </li>
 
        ";
        // line 349
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method") == true)) {
            // line 350
            echo "            <li>
              <a href='";
            // line 351
            echo twig_escape_filter($this->env, base_url("users_manager"), "html", null, true);
            echo "'>
                <i class=\"fa fa-user\"></i>
                <span>";
            // line 353
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Users")), "html", null, true);
            echo "</span>
              </a>
            </li>
        ";
        }
        // line 357
        echo "
        ";
        // line 358
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "comments"), "method") && $this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "auto_comment", array(), "any", true, true))) {
            // line 359
            echo "        <li>
          <a href='";
            // line 360
            echo twig_escape_filter($this->env, base_url("comments"), "html", null, true);
            echo "'>
            <i class=\"fa fa-comment\" aria-hidden=\"true\"></i>
            <span>";
            // line 362
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Comments")), "html", null, true);
            echo "</span>
          </a>
        </li>
        ";
        }
        // line 366
        echo "
        ";
        // line 367
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "join_groups"), "method") && $this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "join_groups", array(), "any", true, true))) {
            // line 368
            echo "        <li class=\"treeview\">
          <a href='#'>
            <i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i>
            <span>";
            // line 371
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Join groups")), "html", null, true);
            echo "</span><span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span></a>
          <ul class=\"treeview-menu\">
            <li>
              <a href=\"";
            // line 374
            echo twig_escape_filter($this->env, base_url("join_groups/schedules"), "html", null, true);
            echo "\"><i class=\"fa fa-clipboard  \"></i> <span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedules")), "html", null, true);
            echo "</span></a>
            </li>
            <li>
              <a href=\"";
            // line 377
            echo twig_escape_filter($this->env, base_url("join_groups"), "html", null, true);
            echo "\"><i class=\"fa fa-clipboard  \"></i> <span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Search & add new")), "html", null, true);
            echo "</span></a>
            </li>
            <li>
              <a href=\"";
            // line 380
            echo twig_escape_filter($this->env, base_url("join_groups/schedules/logs"), "html", null, true);
            echo "\"><i class=\"fa fa-folder-open-o\"></i> <span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedule logs")), "html", null, true);
            echo "</span></a>
            </li>
          </ul>
        </li>
        ";
        }
        // line 385
        echo "
        ";
        // line 386
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "invite_join_groups"), "method") && KPMIsActive("invite_join_groups"))) {
            // line 387
            echo "        <li class=\"treeview\">
          <a href='#'>
            <i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i>
            <span>";
            // line 390
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Invite join groups")), "html", null, true);
            echo "</span><span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span></a>
          <ul class=\"treeview-menu\">
            <li>
              <a href=\"";
            // line 393
            echo twig_escape_filter($this->env, base_url("invite_join_groups/schedules"), "html", null, true);
            echo "\"><i class=\"fa fa-clipboard\"></i> <span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedules")), "html", null, true);
            echo "</span></a>
            </li>
            <li>
              <a href=\"";
            // line 396
            echo twig_escape_filter($this->env, base_url("invite_join_groups"), "html", null, true);
            echo "\"><i class=\"fa fa-plus\"></i> <span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add new")), "html", null, true);
            echo "</span></a>
            </li>
            <li>
              <a href=\"";
            // line 399
            echo twig_escape_filter($this->env, base_url("invite_join_groups/schedules/logs"), "html", null, true);
            echo "\"><i class=\"fa fa-folder-open-o \"></i> <span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedule logs")), "html", null, true);
            echo "</span></a>
            </li>
          </ul>
        </li>
        ";
        }
        // line 404
        echo "
        ";
        // line 405
        if ($this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "kp_faq", array(), "any", true, true)) {
            // line 406
            echo "        <li>
          <a href='";
            // line 407
            echo twig_escape_filter($this->env, base_url((isset($context["faq_page"]) ? $context["faq_page"] : null)), "html", null, true);
            echo "'>
            <i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i>
            <span>";
            // line 409
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array((isset($context["faq_text"]) ? $context["faq_text"] : null))), "html", null, true);
            echo "</span>
          </a>
        </li>
        ";
        }
        // line 413
        echo "
        ";
        // line 414
        if (KPMIsActive("payments")) {
            // line 415
            echo "        <li>
          <a href='";
            // line 416
            echo twig_escape_filter($this->env, base_url("prices"), "html", null, true);
            echo "'>
            <i class=\"fa fa-money\" aria-hidden=\"true\"></i>
            <span>";
            // line 418
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Pricing")), "html", null, true);
            echo "</span>
          </a>
        </li>
        ";
        }
        // line 422
        echo "    \t
        ";
        // line 423
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method") == true) && KPMIsActive("payments"))) {
            // line 424
            echo "        <li class=\"treeview\">
          <a href='#'>
            <i class=\"fa fa-credit-card\" aria-hidden=\"true\"></i>
            <span>";
            // line 427
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Payments")), "html", null, true);
            echo "</span><span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span></a>
          <ul class=\"treeview-menu\">
            <li>
              <a href=\"";
            // line 430
            echo twig_escape_filter($this->env, base_url("payments/packages"), "html", null, true);
            echo "\"><i class=\"fa fa-clipboard  \"></i> 
                <span>";
            // line 431
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Packages")), "html", null, true);
            echo "</span>
              </a>
            </li>
            <li>
              <a href=\"";
            // line 435
            echo twig_escape_filter($this->env, base_url("payments/payment_settings"), "html", null, true);
            echo "\"><i class=\"fa fa-clipboard  \"></i> 
                <span>";
            // line 436
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Payment settings")), "html", null, true);
            echo "</span>
              </a>
            </li>
            <li>
              <a href=\"";
            // line 440
            echo twig_escape_filter($this->env, base_url("payments/payments_history"), "html", null, true);
            echo "\"><i class=\"fa fa-clipboard  \"></i> 
                <span>";
            // line 441
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Payments history")), "html", null, true);
            echo "</span>
              </a>
            </li>
          </ul>
        </li>
        ";
        }
        // line 447
        echo "
        ";
        // line 448
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method") == true)) {
            // line 449
            echo "        ";
            if ((KPMIsActive("notifications") || KPMIsActive("translations"))) {
                // line 450
                echo "        <li class=\"treeview\">
          <a href='#'>
            <i class=\"fa fa-connectdevelop\" aria-hidden=\"true\"></i>
            <span>";
                // line 453
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Tools")), "html", null, true);
                echo "</span><span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span></a>
            <ul class=\"treeview-menu\">
              ";
                // line 455
                if (KPMIsActive("notifications")) {
                    // line 456
                    echo "              <li>
                <a href='";
                    // line 457
                    echo twig_escape_filter($this->env, base_url("notifications"), "html", null, true);
                    echo "'>
                  <i class=\"fa fa-bell\" aria-hidden=\"true\"></i>
                  <span>";
                    // line 459
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Manage Notifications")), "html", null, true);
                    echo "</span>
                </a>
              </li>
              ";
                }
                // line 463
                echo "              ";
                if (KPMIsActive("translations")) {
                    // line 464
                    echo "              <li>
                <a href='";
                    // line 465
                    echo twig_escape_filter($this->env, base_url("translations"), "html", null, true);
                    echo "'>
                  <i class=\"fa fa-language\" aria-hidden=\"true\"></i>
                  <span>";
                    // line 467
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Translations")), "html", null, true);
                    echo "</span>
                </a>
              </li>
              ";
                }
                // line 471
                echo "            </ul>
        </li>
        ";
            }
            // line 474
            echo "        ";
        }
        // line 475
        echo "
        ";
        // line 476
        $context["items"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "nav_items", array(), "array"), true));
        // line 477
        echo "
        ";
        // line 478
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 479
            echo "          <li>
            <a href='";
            // line 480
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
            echo "' target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "target", array()), "html", null, true);
            echo "\">
              <i class=\"fa fa-";
            // line 481
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
              <span>";
            // line 482
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute($context["item"], "text", array())))), "html", null, true);
            echo "</span></a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 485
        echo "
        <li>
          <a href='";
        // line 487
        echo twig_escape_filter($this->env, base_url("logout"), "html", null, true);
        echo "' title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Logout")), "html", null, true);
        echo "\">
            <i class=\"fa fa-sign-out\"></i> 
            <span>";
        // line 489
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Logout")), "html", null, true);
        echo "</span>
          </a>
        </li>

      </ul>
    </section>
  </aside>
  <div style=\"margin-top:50px\"></div>
  ";
    }

    // line 500
    public function block_flash_bag($context, array $blocks = array())
    {
        // line 501
        echo "        ";
        $this->loadTemplate("blocks/flash_bag.twig", "base_dashboard.twig", 501)->display($context);
        // line 502
        echo "      ";
    }

    // line 503
    public function block_ads($context, array $blocks = array())
    {
        // line 504
        echo "        ";
        $this->loadTemplate("blocks/ads.twig", "base_dashboard.twig", 504)->display($context);
        // line 505
        echo "      ";
    }

    // line 509
    public function block_body($context, array $blocks = array())
    {
        // line 510
        echo "        ";
    }

    // line 514
    public function block_footer($context, array $blocks = array())
    {
        // line 515
        echo "      <p class=\"footer\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("COPYRIGHT")), "html", null, true);
        echo " &copy ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " 
        ";
        // line 516
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "footer_text", array(), "array"))) {
            // line 517
            echo "          Powered by <a href='https://pandisoft.com' target='_blank'>Kingposter</a>
        ";
        } else {
            // line 519
            echo "          ";
            echo $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "footer_text", array(), "array");
            echo "
        ";
        }
        // line 521
        echo "
        ";
        // line 522
        if ((( !twig_test_empty((isset($context["user"]) ? $context["user"] : null)) && $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isLoggedIn", array(), "method")) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method") == true))) {
            echo " 
          - ";
            // line 523
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Version")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["app_version"]) ? $context["app_version"] : null), "html", null, true);
            echo "
        ";
        }
        // line 525
        echo "      </p>
    ";
    }

    // line 532
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 533
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, assets(("theme/default/js/jsui.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>
  <script>
  
    ";
        // line 536
        if ($this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "notifications", array(), "any", true, true)) {
            // line 537
            echo "    \$(function(){
      \$(\".close\").on(\"click\",function(){
        if(\$(this).data(\"id\") != \"\"){
          \$.ajax({
            url: '";
            // line 541
            echo twig_escape_filter($this->env, base_url("notifications/user_notifications/close/"), "html", null, true);
            echo "'+\$(this).data(\"id\"),
            dataType: 'json',
            type: 'GET',
            contentType: 'application/x-www-form-urlencoded',
            error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },
            });
        }
      });
    });
    ";
        }
        // line 551
        echo "
  </script>
  ";
    }

    public function getTemplateName()
    {
        return "base_dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1372 => 551,  1359 => 541,  1353 => 537,  1351 => 536,  1344 => 533,  1341 => 532,  1336 => 525,  1329 => 523,  1325 => 522,  1322 => 521,  1316 => 519,  1312 => 517,  1310 => 516,  1303 => 515,  1300 => 514,  1296 => 510,  1293 => 509,  1289 => 505,  1286 => 504,  1283 => 503,  1279 => 502,  1276 => 501,  1273 => 500,  1260 => 489,  1253 => 487,  1249 => 485,  1240 => 482,  1236 => 481,  1230 => 480,  1227 => 479,  1223 => 478,  1220 => 477,  1218 => 476,  1215 => 475,  1212 => 474,  1207 => 471,  1200 => 467,  1195 => 465,  1192 => 464,  1189 => 463,  1182 => 459,  1177 => 457,  1174 => 456,  1172 => 455,  1167 => 453,  1162 => 450,  1159 => 449,  1157 => 448,  1154 => 447,  1145 => 441,  1141 => 440,  1134 => 436,  1130 => 435,  1123 => 431,  1119 => 430,  1113 => 427,  1108 => 424,  1106 => 423,  1103 => 422,  1096 => 418,  1091 => 416,  1088 => 415,  1086 => 414,  1083 => 413,  1076 => 409,  1071 => 407,  1068 => 406,  1066 => 405,  1063 => 404,  1053 => 399,  1045 => 396,  1037 => 393,  1031 => 390,  1026 => 387,  1024 => 386,  1021 => 385,  1011 => 380,  1003 => 377,  995 => 374,  989 => 371,  984 => 368,  982 => 367,  979 => 366,  972 => 362,  967 => 360,  964 => 359,  962 => 358,  959 => 357,  952 => 353,  947 => 351,  944 => 350,  942 => 349,  935 => 345,  930 => 343,  920 => 336,  915 => 334,  908 => 330,  903 => 328,  896 => 324,  891 => 322,  881 => 315,  873 => 309,  870 => 308,  863 => 304,  858 => 302,  851 => 301,  849 => 300,  843 => 297,  838 => 295,  832 => 294,  826 => 291,  821 => 289,  815 => 288,  809 => 285,  805 => 284,  798 => 283,  796 => 282,  790 => 279,  785 => 277,  779 => 276,  772 => 272,  767 => 270,  761 => 269,  754 => 265,  749 => 263,  743 => 262,  736 => 258,  731 => 256,  725 => 255,  718 => 251,  713 => 249,  709 => 247,  699 => 245,  697 => 244,  694 => 243,  687 => 239,  682 => 237,  679 => 236,  677 => 235,  668 => 231,  664 => 230,  656 => 225,  652 => 224,  642 => 217,  637 => 215,  634 => 214,  629 => 212,  626 => 211,  623 => 210,  609 => 206,  605 => 205,  602 => 204,  598 => 203,  593 => 202,  591 => 201,  585 => 197,  581 => 195,  575 => 193,  573 => 192,  570 => 191,  564 => 189,  556 => 187,  554 => 186,  537 => 172,  532 => 170,  526 => 166,  519 => 162,  514 => 160,  511 => 159,  509 => 158,  502 => 154,  497 => 152,  488 => 148,  485 => 147,  479 => 145,  476 => 144,  462 => 140,  458 => 139,  455 => 138,  451 => 137,  446 => 136,  444 => 135,  439 => 132,  435 => 130,  429 => 128,  427 => 127,  424 => 126,  418 => 124,  410 => 122,  408 => 121,  404 => 119,  402 => 118,  398 => 116,  391 => 112,  386 => 110,  383 => 109,  380 => 108,  370 => 106,  368 => 105,  362 => 101,  356 => 98,  353 => 97,  347 => 95,  345 => 94,  340 => 92,  331 => 85,  325 => 82,  322 => 81,  316 => 79,  314 => 78,  309 => 75,  303 => 72,  300 => 71,  294 => 69,  292 => 68,  287 => 66,  284 => 65,  281 => 64,  276 => 61,  269 => 45,  266 => 44,  260 => 41,  256 => 40,  252 => 39,  248 => 38,  243 => 37,  240 => 36,  236 => 34,  230 => 32,  228 => 31,  224 => 30,  220 => 29,  216 => 28,  212 => 27,  208 => 26,  204 => 25,  200 => 24,  195 => 23,  192 => 22,  187 => 20,  183 => 13,  180 => 12,  172 => 554,  170 => 532,  163 => 527,  161 => 514,  156 => 511,  154 => 509,  149 => 506,  146 => 503,  144 => 500,  140 => 498,  138 => 64,  134 => 62,  132 => 61,  129 => 60,  127 => 59,  116 => 57,  109 => 53,  103 => 50,  100 => 49,  98 => 44,  95 => 43,  93 => 36,  90 => 35,  88 => 22,  75 => 20,  69 => 18,  63 => 16,  61 => 15,  58 => 14,  56 => 12,  50 => 9,  45 => 7,  41 => 6,  34 => 2,  31 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ l("DIR") }}">*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="description" content="{{ app_settings.site_description }}">*/
/*   <meta name="author" content="{{app_author}}">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="theme-color" content="#{{app_settings.theme_color}}">*/
/*   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/* */
/*   {% block metas %}*/
/*   {% endblock %}*/
/* */
/*   {% if app_settings['site_favicon'] is empty %}*/
/*     <link rel="icon" type="image/png" href="{{ assets('theme/default/images/kp_favicon.png?v=' ~ assets_version) }}" >*/
/*   {% else %}*/
/*     <link rel="icon" type="image/png" href="{{ app_settings['site_favicon'] }}" >*/
/*   {% endif %}*/
/*   <title>{% if getUserNotifications().count_notifications != 0%}({{getUserNotifications().count_notifications}}) - {% endif %}{% block title %}{% endblock %} | {{ app_settings.sitename }}</title>*/
/* */
/*   {% block stylesheets %}*/
/*     <link href="{{ assets('theme/default/bootstrap/css/bootstrap.min.css?v=' ~ assets_version) }}" rel="stylesheet">*/
/*     <link href="{{ assets('theme/default/bootstrap/css/bootstrap-4.min.css?v=' ~ assets_version) }}" rel="stylesheet">*/
/*     <link href="{{ assets('theme/default/css/preloader.min.css?v=' ~ assets_version) }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ assets('theme/default/css/font-awesome.css?v=' ~ assets_version) }}" rel="stylesheet" />*/
/*     <link href="{{ assets('theme/default/css/dashboard.min.css?v=' ~ assets_version) }}" rel="stylesheet" />*/
/*     <link href="{{ assets('theme/default/css/skins/skin-blue.min.css?v=' ~ assets_version) }}" rel="stylesheet" />*/
/*     <link href="{{ assets('theme/default/css/theme_color.css?v=' ~ assets_version) }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ assets('theme/default/css/general.css?v=' ~ assets_version) }}" rel="stylesheet" type="text/css" />*/
/*     {% if lang("DIR") == "rtl" %}*/
/*       <link href="{{ assets('theme/default/css/rtl.css?v=' ~ assets_version) }}" rel="stylesheet" />*/
/*     {% endif %}*/
/*   {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*       <script src="{{ assets('theme/default/js/jquery.js?v=' ~ assets_version) }}"></script>*/
/*       <script src="{{ assets('theme/default/js/libs/dashboard.min.js?v=' ~ assets_version) }}"></script>*/
/*       <script src="{{ assets('theme/default/bootstrap/js/bootstrap.min.js?v=' ~ assets_version) }}"></script>*/
/*       <script src="{{ assets('theme/default/js/libs/preloader.min.js?v=' ~ assets_version) }}"></script>*/
/*       <script src="{{ assets('theme/default/js/helpers.js?v=' ~ assets_version) }}"></script>*/
/*     {% endblock %}*/
/* */
/*     {% block head_js %}*/
/*       <script type="text/javascript">*/
/*         $('[data-toggle="kp_tooltip"]').tooltip();*/
/*       </script>*/
/*     {% endblock %}*/
/* */
/*     {{ app_settings['head_js']|raw }}*/
/* */
/*     <style>*/
/*     {{ app_settings['custom_css'] }}*/
/*     </style>*/
/*     */
/* </head>*/
/* <body class="hold-transition skin-blue sidebar-mini {% if sidebar_status == "true" %}sidebar-collapse{% endif %} {% if lang("DIR") == "rtl" %}rtl{%endif%}">*/
/* */
/* {% set showAdsTo = json_decode(app_settings.show_ads_to) %}*/
/*   */
/* {% block top_header %}{% endblock %}*/
/* */
/* <div class="wrapper">*/
/*   {% block header %}*/
/*   <header class="main-header">*/
/*     <a href="{{ base_url('') }}" title="Home" class="logo hidden-xs">*/
/*       <span class="logo-mini">*/
/*         {% if app_settings['site_logo_50'] is empty %}*/
/*           <img src="{{ assets('theme/default/images/kp_logo_50.png?v=' ~ assets_version) }}" alt="logo">*/
/*           {% else %}*/
/*             <span class="logo-lg">*/
/*             <img src="{{ app_settings['site_logo_50']~'?v='~assets_version }}" alt="logo">*/
/*           </span>*/
/*         {% endif %}*/
/*       </span>*/
/* */
/*       <span class="logo-lg">*/
/*         {% if app_settings['site_logo'] is empty %}*/
/*           <img src="{{ assets('theme/default/images/kp_logo.png?v=' ~ assets_version) }}" alt="logo">*/
/*           {% else %}*/
/*             <span class="logo-lg">*/
/*           <img src="{{ app_settings['site_logo']~'?v='~assets_version }}" alt="logo">*/
/*         </span>*/
/*         {% endif %}*/
/*       </span>*/
/*     </a>*/
/* */
/*     <nav class="navbar navbar-static-top" role="navigation">*/
/*       <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*       </a>*/
/*       <a href="{{ base_url('') }}" title="Home" class="logo visible-xs">*/
/*         <span class="logo-lg">*/
/*           {% if app_settings['site_logo'] is empty %}*/
/*             <img src="{{ assets('theme/default/images/kp_logo.png?v=' ~ assets_version) }}" alt="logo">*/
/*             {% else %}*/
/*               <span class="logo-lg">*/
/*             <img src="{{ app_settings['site_logo']~'?v='~assets_version }}" alt="logo">*/
/*           </span>*/
/*           {% endif %}*/
/*         </span>*/
/*       </a>*/
/*       <div class="navbar-custom-menu hidden-xs">*/
/*         <ul class="nav navbar-nav">*/
/*           {% if demo_link is not null %}*/
/*           <li style="background-color: #82b440;margin: 0px 30px;"><a href="{{demo_link}}" title="{{demo_link_text}}" target="_blank">{{demo_link_text}}</a></li>*/
/*           {% endif %}*/
/*           {% if KPMIsActive("payments") %}*/
/*             <li>*/
/*               <a href='{{ base_url("prices") }}'>*/
/*                 <i class="fa fa-money" aria-hidden="true"></i>*/
/*                 <span>{{ l("Pricing") }}</span>*/
/*               </a>*/
/*             </li>*/
/*             {% endif %}*/
/* */
/* */
/*           {% include "notifications/components/notifications_menu.twig" %}*/
/*           <li class="dropdown user user-menu">*/
/*             <a href="#" class="dropdown-toggle UserProfil" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                 {% if fbaccount.UserDefaultFbAccount() is not empty %}*/
/*                 <img src='https://graph.facebook.com/{{ fbaccount.UserDefaultFbAccount() }}/picture?redirect=1&height=32&width=32&type=normal' width='32' height='32' style='vertical-align:middle;' class="img-circle" onerror="this.src = '{{ assets('theme/default/images/facebookUser.jpg') }}'"/>*/
/*                 {% else %}*/
/*                   <img src='{{ assets('theme/default/images/facebookUser.jpg') }}' width='32' height='32' style='vertical-align:middle;' />*/
/*                 {% endif %}*/
/*                 <span class="userFullName">*/
/*                   {% if fbaccountDetails.row() is not empty %}*/
/*                     <span class="hidden-sm">{{ fbaccountDetails.row('name')|capitalize }}</span>*/
/*                   {% else %}*/
/*                     <span class="hidden-sm">Facebook User</span>*/
/*                   {% endif %}*/
/*                 </span>*/
/*               </a>*/
/*             <ul class="dropdown-menu">*/
/*                 {% set fbacounts = fbaccount.getAll() %}*/
/*                 {% if fbacounts is not empty %} */
/*                     {% for fba in fbacounts %}*/
/*                         <li>*/
/*                         <a href="{{ base_url('settings/fb_accounts/switch_fb_account/' ~ fba.fb_id) }}" >*/
/*                           <img src='https://graph.facebook.com/{{ fba.fb_id }}/picture?redirect=1&height=40&width=40&type=normal' style='vertical-align:middle;' width='32px' height='32px' class="fbProfileImg" onerror="this.src = '{{ assets('theme/default/images/facebookUser.jpg') }}'"/> {{ fba.firstname|capitalize ~ " " ~ fba.lastname|capitalize }}*/
/*                         </a>*/
/*                       </li>*/
/*                   {% endfor %}*/
/*                 {% else %}*/
/*                     <li><a href='#'>{{ l('No facebook account available') }}</a></li>*/
/*                 {% endif %}*/
/*                 <li role="separator" class="divider"></li>*/
/*                 <li><a href="{{ base_url('settings/fb_accounts') }}">{{ l('Add facebook account') }}</a></li>*/
/*                 <li role="separator" class="divider"></li>*/
/* */
/*                 <li>*/
/*                   <a href='{{ base_url('settings') }}' >*/
/*                     <i class='fa fa-fw fa-cog' aria-hidden="true"></i>*/
/*                     {{ l('Settings') }}*/
/*                   </a>*/
/*                 </li>*/
/* */
/*                 {% if KPMIsActive('payments') %}*/
/*                 <li>*/
/*                   <a href='{{ base_url('payments/my_orders') }}' >*/
/*                     <i class="fa fa-list" aria-hidden="true"></i>*/
/*                     {{ l('My orders') }}*/
/*                   </a>*/
/*                 </li>*/
/*                 {% endif %}*/
/* */
/*                 <li role="separator" class="divider"></li>*/
/* */
/*                 <li>*/
/*                   <a href='{{ base_url('logout') }}'>*/
/*                     <i class="fa fa-sign-out" aria-hidden="true"></i>*/
/*                     {{ l("LOGOUT") }}*/
/*                   </a>*/
/*                 </li>*/
/*               </ul>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*     </nav>*/
/*   </header>*/
/*   <aside class="main-sidebar">*/
/*     <section class="sidebar">*/
/*       <ul class="sidebar-menu" data-widget="tree">*/
/*         <li class="treeview visible-xs">*/
/*           <a href="#" class="dropdown-toggle UserProfil" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                 {% if fbaccount.UserDefaultFbAccount() is not empty %}*/
/*                 <img src='https://graph.facebook.com/{{ fbaccount.UserDefaultFbAccount() }}/picture?redirect=1&height=32&width=32&type=normal' width='32' height='32' style='vertical-align:middle;' class="img-circle" onerror="this.src = '{{ assets('theme/default/images/facebookUser.jpg') }}'"/>*/
/*                 {% else %}*/
/*                   <img src='{{ assets('theme/default/images/facebookUser.jpg') }}' width='32' height='32' style='vertical-align:middle;' />*/
/*                 {% endif %}*/
/*                 <span class="userFullName">*/
/*                   {% if fbaccountDetails.row() is not empty %}*/
/*                     <span class="hidden-sm">{{ fbaccountDetails.row('name')|capitalize }}</span>*/
/*                   {% else %}*/
/*                     <span class="hidden-sm">Facebook User</span>*/
/*                   {% endif %}*/
/*                 </span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*           <ul class="treeview-menu">*/
/*             {% set fbacounts = fbaccount.getAll() %}*/
/*                 {% if fbacounts is not empty %} */
/*                     {% for fba in fbacounts %}*/
/*                         <li>*/
/*                         <a href="{{ base_url('settings/fb_accounts/switch_fb_account/' ~ fba.fb_id) }}" >*/
/*                           <img src='https://graph.facebook.com/{{ fba.fb_id }}/picture?redirect=1&height=40&width=40&type=normal' style='vertical-align:middle;' width='32px' height='32px' class="fbProfileImg" onerror="this.src = '{{ assets('theme/default/images/facebookUser.jpg') }}'"/> {{ fba.firstname|capitalize ~ " " ~ fba.lastname|capitalize }}*/
/*                         </a>*/
/*                       </li>*/
/*                   {% endfor %}*/
/*                 {% else %}*/
/*                     <li>*/
/*                       <a href='#'>{{ l('No facebook account available') }}</a></li>*/
/*                 {% endif %}*/
/*                 <li>*/
/*                   <a href="{{ base_url('settings/fb_accounts') }}">*/
/*                     <i class="fa fa-plus"></i>*/
/*                     <span>{{ l('Add facebook account') }}</span>*/
/*                   </a>*/
/*                 </li>*/
/*           </ul>*/
/*         </li>*/
/* */
/*         <li>*/
/*           <a href='{{ base_url() }}'>*/
/*           <i class="fa fa-home"></i><span>{{ l("Home") }}</span>*/
/*           </a>*/
/*         </li>*/
/* */
/*         <li class="visible-xs">*/
/*           <a href='{{ base_url('my_notifications') }}'>*/
/*           <i class="fa fa-bell-o"></i><span>{{ l("Notifications") }}</span> <span class="label label-danger">{{notifications.count_notifications}}</span>*/
/*           </a>*/
/*         </li>*/
/* */
/*         {% if KPMIsActive('payments') %}*/
/*         <li class="visible-xs">*/
/*           <a href='{{ base_url('payments/my_orders') }}' >*/
/*             <i class="fa fa-list" aria-hidden="true"></i>*/
/*             {{ l('My orders') }}*/
/*           </a>*/
/*         </li>*/
/*         {% endif %}*/
/*  */
/*         {% if demo_link is not null %}*/
/*         <li style="background-color: #82b440;color: white;"><a href="{{demo_link}}" title="{{demo_link_text}}" target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>{{demo_link_text}}</span></a></li>*/
/*         {% endif %}*/
/* */
/*         <li class="treeview">*/
/*           <a href='{{ base_url('settings') }}'>*/
/*             <i class="fa fa-cog"></i>*/
/*             <span>{{ l("Settings") }}</span>*/
/*             <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li class='{% if current_page == 'general_settings' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/general_settings') }}' >*/
/*                 <i class='fa fa-fw fa-tasks'></i>*/
/*                 <span>{{ l('General settings') }}</span>*/
/*               </a>*/
/*             </li>*/
/* */
/*             <li class='{% if current_page == 'publish_settings' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/publish_settings') }}' >*/
/*                 <i class='fa fa-fw fa-clipboard'></i>*/
/*                 <span>{{ l('Publish settings') }}</span>*/
/*               </a>*/
/*             </li>*/
/* */
/*             <li class='{% if current_page == 'fb_accounts' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/fb_accounts') }}' >*/
/*                 <i class='fa fa-fw fa-facebook'></i>*/
/*                 <span>{{ l('Facebook accounts') }}</span>*/
/*               </a>*/
/*             </li>*/
/* */
/*             <li class='{% if current_page == 'fbapps' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/fbapps') }}' >*/
/*                 <i class='fa fa-fw fa-plug'></i>*/
/*                 <span>{{ l('Facebook Apps') }}</span>*/
/*               </a>*/
/*             </li>*/
/*             {% if user.hasPermission('admin') == true %}*/
/*             <li class='{% if current_page == 'app_settings' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/app_settings') }}' ><i class='fa fa-fw fa-cogs'></i> */
/*                 <span>{{ l('App settings') }}</span>*/
/*               </a>*/
/*             </li>*/
/*             <li class='{% if current_page == 'roles' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/roles') }}' >*/
/*                 <i class='fa fa-fw fa-users'></i>*/
/*                 <span>{{ l('Roles') }}</span>*/
/*               </a>*/
/*             </li>*/
/*             <li class='{% if current_page == 'modules_manager' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/modules_manager') }}' >*/
/*                 <i class='fa fa-th-large'></i>*/
/*                 <span>{{ l('Modules manager') }}</span>*/
/*               </a>*/
/*             </li>*/
/*             {% if enable_proxy %}*/
/*             <li class='{% if current_page == 'Proxies_manager' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/proxies_manager') }}' >*/
/*                 <i class="fa fa-list" aria-hidden="true"></i>*/
/*                 <span class="hidden-xs">{{ l('Proxies manager') }}</span>*/
/*               </a>*/
/*             </li>*/
/*             {% endif %}*/
/*             {% endif %}*/
/*            </ul>*/
/*         </li>*/
/* */
/*         <li class="treeview">*/
/*           <a href='#'>*/
/*             <i class="fa fa-paper-plane" aria-hidden="true"></i>*/
/*             <span>{{ l("Publishing") }}</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li>*/
/*               <a href="{{ base_url('posts') }}">*/
/*               <i class="fa fa-clipboard  "></i> */
/*               <span>{{  l("Saved posts") }}</span>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('schedules') }}">*/
/*               <i class="fa fa-calendar"></i> */
/*                 <span>{{ l("Scheduled posts") }}</span>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('schedules/logs') }}">*/
/*               <i class="fa fa-folder-open-o"></i> */
/*                 <span>{{ l("Schedule Logs") }}</span>*/
/*               </a>*/
/*             </li>*/
/*           </ul>*/
/*         </li>*/
/*           */
/*         <li>*/
/*           <a href='{{ base_url('insights') }}'>*/
/*             <i class="fa fa-bar-chart"></i>*/
/*             <span>{{ l("insights") }}</span>*/
/*           </a>*/
/*         </li>*/
/*  */
/*         {% if user.hasPermission('admin') == true %}*/
/*             <li>*/
/*               <a href='{{ base_url('users_manager') }}'>*/
/*                 <i class="fa fa-user"></i>*/
/*                 <span>{{ l("Users") }}</span>*/
/*               </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {% if user.canUse("comments") and kpModules.auto_comment is defined %}*/
/*         <li>*/
/*           <a href='{{ base_url("comments") }}'>*/
/*             <i class="fa fa-comment" aria-hidden="true"></i>*/
/*             <span>{{ l("Comments") }}</span>*/
/*           </a>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         {% if user.canUse("join_groups") and kpModules.join_groups is defined %}*/
/*         <li class="treeview">*/
/*           <a href='#'>*/
/*             <i class="fa fa-facebook-official" aria-hidden="true"></i>*/
/*             <span>{{ l("Join groups") }}</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>*/
/*           <ul class="treeview-menu">*/
/*             <li>*/
/*               <a href="{{ base_url('join_groups/schedules') }}"><i class="fa fa-clipboard  "></i> <span>{{  l("Schedules") }}</span></a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('join_groups') }}"><i class="fa fa-clipboard  "></i> <span>{{  l("Search & add new") }}</span></a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('join_groups/schedules/logs') }}"><i class="fa fa-folder-open-o"></i> <span>{{  l("Schedule logs") }}</span></a>*/
/*             </li>*/
/*           </ul>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         {% if user.canUse("invite_join_groups") and KPMIsActive('invite_join_groups') %}*/
/*         <li class="treeview">*/
/*           <a href='#'>*/
/*             <i class="fa fa-facebook-official" aria-hidden="true"></i>*/
/*             <span>{{ l('Invite join groups') }}</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>*/
/*           <ul class="treeview-menu">*/
/*             <li>*/
/*               <a href="{{ base_url('invite_join_groups/schedules') }}"><i class="fa fa-clipboard"></i> <span>{{  l("Schedules") }}</span></a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('invite_join_groups') }}"><i class="fa fa-plus"></i> <span>{{  l("Add new") }}</span></a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('invite_join_groups/schedules/logs') }}"><i class="fa fa-folder-open-o "></i> <span>{{  l("Schedule logs") }}</span></a>*/
/*             </li>*/
/*           </ul>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         {% if kpModules.kp_faq is defined %}*/
/*         <li>*/
/*           <a href='{{ base_url(faq_page) }}'>*/
/*             <i class="fa fa-question-circle" aria-hidden="true"></i>*/
/*             <span>{{ l(faq_text) }}</span>*/
/*           </a>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         {% if KPMIsActive("payments") %}*/
/*         <li>*/
/*           <a href='{{ base_url("prices") }}'>*/
/*             <i class="fa fa-money" aria-hidden="true"></i>*/
/*             <span>{{ l("Pricing") }}</span>*/
/*           </a>*/
/*         </li>*/
/*         {% endif %}*/
/*     	*/
/*         {% if user.hasPermission('admin') == true and KPMIsActive("payments") %}*/
/*         <li class="treeview">*/
/*           <a href='#'>*/
/*             <i class="fa fa-credit-card" aria-hidden="true"></i>*/
/*             <span>{{ l("Payments") }}</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>*/
/*           <ul class="treeview-menu">*/
/*             <li>*/
/*               <a href="{{ base_url('payments/packages') }}"><i class="fa fa-clipboard  "></i> */
/*                 <span>{{  l("Packages") }}</span>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('payments/payment_settings') }}"><i class="fa fa-clipboard  "></i> */
/*                 <span>{{  l("Payment settings") }}</span>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('payments/payments_history') }}"><i class="fa fa-clipboard  "></i> */
/*                 <span>{{  l("Payments history") }}</span>*/
/*               </a>*/
/*             </li>*/
/*           </ul>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         {% if user.hasPermission('admin') == true %}*/
/*         {% if KPMIsActive("notifications") or KPMIsActive("translations") %}*/
/*         <li class="treeview">*/
/*           <a href='#'>*/
/*             <i class="fa fa-connectdevelop" aria-hidden="true"></i>*/
/*             <span>{{ l("Tools") }}</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>*/
/*             <ul class="treeview-menu">*/
/*               {% if KPMIsActive("notifications") %}*/
/*               <li>*/
/*                 <a href='{{ base_url("notifications") }}'>*/
/*                   <i class="fa fa-bell" aria-hidden="true"></i>*/
/*                   <span>{{ l("Manage Notifications") }}</span>*/
/*                 </a>*/
/*               </li>*/
/*               {% endif %}*/
/*               {% if KPMIsActive("translations") %}*/
/*               <li>*/
/*                 <a href='{{base_url('translations')}}'>*/
/*                   <i class="fa fa-language" aria-hidden="true"></i>*/
/*                   <span>{{ l("Translations") }}</span>*/
/*                 </a>*/
/*               </li>*/
/*               {% endif %}*/
/*             </ul>*/
/*         </li>*/
/*         {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% set items = json_decode(app_settings['nav_items'],TRUE) %}*/
/* */
/*         {% for item in items %}*/
/*           <li>*/
/*             <a href='{{ item.url }}' target="{{ item.target }}">*/
/*               <i class="fa fa-{{ item.icon }}" aria-hidden="true"></i>*/
/*               <span>{{ l(item.text)|capitalize }}</span></a>*/
/*             </li>*/
/*         {% endfor %}*/
/* */
/*         <li>*/
/*           <a href='{{ base_url('logout') }}' title="{{ l("Logout") }}">*/
/*             <i class="fa fa-sign-out"></i> */
/*             <span>{{ l("Logout") }}</span>*/
/*           </a>*/
/*         </li>*/
/* */
/*       </ul>*/
/*     </section>*/
/*   </aside>*/
/*   <div style="margin-top:50px"></div>*/
/*   {% endblock %}*/
/*   <div class="content-wrapper addMargin">*/
/*     <section class="content-header">*/
/*       {% block flash_bag %}*/
/*         {% include "blocks/flash_bag.twig" %}*/
/*       {% endblock %}*/
/*       {% block ads %}*/
/*         {% include "blocks/ads.twig" %}*/
/*       {% endblock %}*/
/*     </section>*/
/*     <section class="content container-fluid">*/
/*       <div class='alerts'></div>*/
/*       {% block body %}*/
/*         {% endblock %}*/
/*     </section>*/
/*   </div>*/
/*   <footer class="main-footer">*/
/*     {% block footer %}*/
/*       <p class="footer">{{ l('COPYRIGHT') }} &copy {{ "now"|date("Y") }} */
/*         {% if app_settings['footer_text'] is empty %}*/
/*           Powered by <a href='https://pandisoft.com' target='_blank'>Kingposter</a>*/
/*         {% else %}*/
/*           {{ app_settings['footer_text']|raw }}*/
/*         {% endif %}*/
/* */
/*         {% if user is not empty and user.isLoggedIn() and user.hasPermission('admin') == true %} */
/*           - {{ l('Version') }} {{ app_version }}*/
/*         {% endif %}*/
/*       </p>*/
/*     {% endblock %}*/
/*   </footer>*/
/* </div>*/
/* <div class="scrollTop">*/
/*       <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>*/
/*     </div>*/
/*   {% block javascripts_footer %}*/
/*   <script src="{{ assets('theme/default/js/jsui.js?v=' ~ assets_version) }}"></script>*/
/*   <script>*/
/*   */
/*     {% if kpModules.notifications is defined %}*/
/*     $(function(){*/
/*       $(".close").on("click",function(){*/
/*         if($(this).data("id") != ""){*/
/*           $.ajax({*/
/*             url: '{{ base_url("notifications/user_notifications/close/") }}'+$(this).data("id"),*/
/*             dataType: 'json',*/
/*             type: 'GET',*/
/*             contentType: 'application/x-www-form-urlencoded',*/
/*             error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/*             });*/
/*         }*/
/*       });*/
/*     });*/
/*     {% endif %}*/
/* */
/*   </script>*/
/*   {% endblock %}*/
/*   {{ app_settings['footer_js']|raw }}*/
/* </body>*/
/* </html>*/
