<?php

/* notifications/components/notifications_menu.twig */
class __TwigTemplate_73b42d436296454094caf350ccb0c499e0b4eaef7d15fcf0a5d2ab5e9508a17c extends Twig_Template
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
        echo "<li class=\"dropdown notifications-menu\">
\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t<i class=\"fa fa-bell-o\"></i>
\t\t";
        // line 4
        if (($this->getAttribute(getUserNotifications(), "count_notifications", array()) != 0)) {
            // line 5
            echo "\t\t<span class=\"label label-danger notifCount\">";
            echo twig_escape_filter($this->env, $this->getAttribute(getUserNotifications(), "count_notifications", array()), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 7
        echo "\t</a>
\t<ul class=\"dropdown-menu\">
\t\t<li class=\"header\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("You have %s notifications", $this->getAttribute(getUserNotifications(), "count_notifications", array()))), "html", null, true);
        echo "</li>
\t\t<li>
\t\t\t<ul class=\"menu\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(getUserNotifications(), "notifications", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 13
            echo "
\t\t\t\t\t";
            // line 14
            if (($this->getAttribute($context["n"], "type", array()) == "success")) {
                // line 15
                echo "\t\t\t\t\t\t";
                $context["icon"] = "check-circle";
                // line 16
                echo "\t\t\t\t\t";
            } elseif (($this->getAttribute($context["n"], "type", array()) == "info")) {
                // line 17
                echo "\t\t\t\t\t\t";
                $context["icon"] = "info-circle";
                // line 18
                echo "\t\t\t\t\t";
            } elseif (($this->getAttribute($context["n"], "type", array()) == "warning")) {
                // line 19
                echo "\t\t\t\t\t\t";
                $context["icon"] = "exclamation-circle";
                // line 20
                echo "\t\t\t\t\t";
            } elseif (($this->getAttribute($context["n"], "type", array()) == "danger")) {
                // line 21
                echo "\t\t\t\t\t\t";
                $context["icon"] = "exclamation-triangle";
                // line 22
                echo "\t\t\t\t\t";
            } elseif (($this->getAttribute($context["n"], "type", array()) == "primary")) {
                // line 23
                echo "\t\t\t\t\t\t";
                $context["icon"] = "info-circle";
                // line 24
                echo "\t\t\t\t\t";
            }
            // line 25
            echo "
\t\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, base_url(("my_notifications#notification_" . $this->getAttribute($context["n"], "unid", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo " text-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "type", array()), "html", null, true);
            echo "\"></i> ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute($context["n"], "title", array()))), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "\t\t\t\t\t<li><a href=\"#\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("You don't have any notifications")), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t</ul>
\t\t</li>
\t\t<li class=\"footer\">
\t\t\t<a href=\"";
        // line 35
        echo twig_escape_filter($this->env, base_url("my_notifications"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("View all")), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>
</li>";
    }

    public function getTemplateName()
    {
        return "notifications/components/notifications_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 36,  114 => 35,  109 => 32,  100 => 30,  86 => 27,  82 => 25,  79 => 24,  76 => 23,  73 => 22,  70 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  50 => 14,  47 => 13,  42 => 12,  36 => 9,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <li class="dropdown notifications-menu">*/
/* 	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">*/
/* 		<i class="fa fa-bell-o"></i>*/
/* 		{% if getUserNotifications().count_notifications != 0%}*/
/* 		<span class="label label-danger notifCount">{{getUserNotifications().count_notifications}}</span>*/
/* 		{% endif %}*/
/* 	</a>*/
/* 	<ul class="dropdown-menu">*/
/* 		<li class="header">{{l('You have %s notifications',getUserNotifications().count_notifications)}}</li>*/
/* 		<li>*/
/* 			<ul class="menu">*/
/* 				{% for n in getUserNotifications().notifications %}*/
/* */
/* 					{% if n.type == "success" %}*/
/* 						{% set icon = "check-circle" %}*/
/* 					{% elseif n.type == "info" %}*/
/* 						{% set icon = "info-circle" %}*/
/* 					{% elseif n.type == "warning" %}*/
/* 						{% set icon = "exclamation-circle" %}*/
/* 					{% elseif n.type == "danger" %}*/
/* 						{% set icon = "exclamation-triangle" %}*/
/* 					{% elseif n.type == "primary" %}*/
/* 						{% set icon = "info-circle" %}*/
/* 					{% endif %}*/
/* */
/* 					<li>*/
/* 					<a href="{{ base_url('my_notifications#notification_' ~ n.unid) }}"><i class="fa fa-{{icon}} text-{{n.type}}"></i> {{l(n.title)}}</a>*/
/* 					</li>*/
/* 				{% else %}*/
/* 					<li><a href="#">{{l("You don't have any notifications")}}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</li>*/
/* 		<li class="footer">*/
/* 			<a href="{{base_url('my_notifications')}}">*/
/* 				{{l('View all')}}*/
/* 			</a>*/
/* 		</li>*/
/* 	</ul>*/
/* </li>*/
