<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ec4b9402b4a47a323948d61b456e69daf8a0b5e63b5c4413b72553664129fe83 extends Twig_Template
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
        $__internal_b2c545cc18b3124b838cf18445cb283dd47ff55c0a9659003e53a4f749cda2fd = $this->env->getExtension("native_profiler");
        $__internal_b2c545cc18b3124b838cf18445cb283dd47ff55c0a9659003e53a4f749cda2fd->enter($__internal_b2c545cc18b3124b838cf18445cb283dd47ff55c0a9659003e53a4f749cda2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_b2c545cc18b3124b838cf18445cb283dd47ff55c0a9659003e53a4f749cda2fd->leave($__internal_b2c545cc18b3124b838cf18445cb283dd47ff55c0a9659003e53a4f749cda2fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
