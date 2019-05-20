<?php

/* blocks/ads.twig */
class __TwigTemplate_8a03a55e1b3986f76bfcf8fee30d63a9f23e61b025225de4652f058117632068 extends Twig_Template
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
        if (( !twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "ads_code", array())) && twig_in_filter($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "currentuser", array(), "method"), "role", array()), (isset($context["showAdsTo"]) ? $context["showAdsTo"] : null)))) {
            // line 2
            echo "  <div class=\"adsContainer\">
    ";
            // line 3
            echo $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "ads_code", array());
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "blocks/ads.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if app_settings.ads_code is not empty and user.currentuser().role in showAdsTo %}*/
/*   <div class="adsContainer">*/
/*     {{ app_settings.ads_code|raw }}*/
/*   </div>*/
/* {% endif %}*/
