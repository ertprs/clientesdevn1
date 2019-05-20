<?php

/* blocks/flash_bag.twig */
class __TwigTemplate_6d046aabde94281f23d62800d7643ebcec68ca1ec29ba5f3d4601be70ad05345 extends Twig_Template
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
        if ( !twig_test_empty((isset($context["flash"]) ? $context["flash"] : null))) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flash"]) ? $context["flash"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["flashBag"]) {
                // line 3
                echo "      <div class='alert alert-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["flashBag"], "type", array()), "html", null, true);
                echo "' role='alert'>
    ";
                // line 4
                if (($this->getAttribute($context["flashBag"], "close", array()) == true)) {
                    // line 5
                    echo "      <a href='#' class='close' data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["flashBag"], "notif_Id", array()), "html", null, true);
                    echo "\" data-dismiss='alert' aria-label='close'><i class='fa fa-close fa-fw' aria-hidden='true'></i></a>
    ";
                }
                // line 7
                echo "    
    ";
                // line 8
                if (($this->getAttribute($context["flashBag"], "icon", array()) != false)) {
                    // line 9
                    echo "      <i class='fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["flashBag"], "icon", array()), "html", null, true);
                    echo " fa-fw' aria-hidden='true'></i>
    ";
                }
                // line 11
                echo "      ";
                if ($this->getAttribute($context["flashBag"], "html", array())) {
                    // line 12
                    echo "        ";
                    echo $this->getAttribute($context["flashBag"], "message", array());
                    echo "
      ";
                } else {
                    // line 14
                    echo "        ";
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["flashBag"], "message", array()), "html", null, true));
                    echo "
      ";
                }
                // line 16
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashBag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "blocks/flash_bag.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  59 => 14,  53 => 12,  50 => 11,  44 => 9,  42 => 8,  39 => 7,  33 => 5,  31 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if flash is not empty %}*/
/*     {% for flashBag in flash %}*/
/*       <div class='alert alert-{{ flashBag.type }}' role='alert'>*/
/*     {% if flashBag.close == true %}*/
/*       <a href='#' class='close' data-id="{{ flashBag.notif_Id }}" data-dismiss='alert' aria-label='close'><i class='fa fa-close fa-fw' aria-hidden='true'></i></a>*/
/*     {% endif %}*/
/*     */
/*     {% if flashBag.icon != false %}*/
/*       <i class='fa fa-{{ flashBag.icon }} fa-fw' aria-hidden='true'></i>*/
/*     {% endif %}*/
/*       {% if flashBag.html %}*/
/*         {{ flashBag.message|raw }}*/
/*       {% else %}*/
/*         {{ flashBag.message|nl2br }}*/
/*       {% endif %}*/
/*       </div>*/
/*     {% endfor %}*/
/* {% endif %}*/
