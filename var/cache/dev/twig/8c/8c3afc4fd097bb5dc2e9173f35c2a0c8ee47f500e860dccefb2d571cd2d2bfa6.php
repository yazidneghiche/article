<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c11a2d8964cb8ec3967e1c7d561f7176dce8cb7b9ad2519cfc816ab448d68bab extends Twig_Template
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
        $__internal_392c4d06bc61e82a459f12a57acc9d7d1c960c9188598cc12c08d2fc098b8484 = $this->env->getExtension("native_profiler");
        $__internal_392c4d06bc61e82a459f12a57acc9d7d1c960c9188598cc12c08d2fc098b8484->enter($__internal_392c4d06bc61e82a459f12a57acc9d7d1c960c9188598cc12c08d2fc098b8484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_392c4d06bc61e82a459f12a57acc9d7d1c960c9188598cc12c08d2fc098b8484->leave($__internal_392c4d06bc61e82a459f12a57acc9d7d1c960c9188598cc12c08d2fc098b8484_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
