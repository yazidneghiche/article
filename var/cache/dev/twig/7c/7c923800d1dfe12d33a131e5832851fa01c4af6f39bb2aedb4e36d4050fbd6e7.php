<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f5c42a0a6a3c074de324d77d8e0d611b04315c7e68421d88617291ff2db16899 extends Twig_Template
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
        $__internal_e272671338a278fb0937a17dbeb30873fd6e20486d5c7cbd41385373e0612d6a = $this->env->getExtension("native_profiler");
        $__internal_e272671338a278fb0937a17dbeb30873fd6e20486d5c7cbd41385373e0612d6a->enter($__internal_e272671338a278fb0937a17dbeb30873fd6e20486d5c7cbd41385373e0612d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e272671338a278fb0937a17dbeb30873fd6e20486d5c7cbd41385373e0612d6a->leave($__internal_e272671338a278fb0937a17dbeb30873fd6e20486d5c7cbd41385373e0612d6a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
