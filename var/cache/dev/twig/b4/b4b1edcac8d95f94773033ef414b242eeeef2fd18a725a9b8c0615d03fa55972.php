<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2a3232ea3fb44dee368d8c24b7ffae5bf1224dd1e5a03e293d886bce1c2a42c2 extends Twig_Template
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
        $__internal_caa1cb1d1fc9472bc9af818de603cd5bfcb4e5635ab2e2da5769eb6d89be603d = $this->env->getExtension("native_profiler");
        $__internal_caa1cb1d1fc9472bc9af818de603cd5bfcb4e5635ab2e2da5769eb6d89be603d->enter($__internal_caa1cb1d1fc9472bc9af818de603cd5bfcb4e5635ab2e2da5769eb6d89be603d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_caa1cb1d1fc9472bc9af818de603cd5bfcb4e5635ab2e2da5769eb6d89be603d->leave($__internal_caa1cb1d1fc9472bc9af818de603cd5bfcb4e5635ab2e2da5769eb6d89be603d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
