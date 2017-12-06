<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_36e5d40b6636415e7fdb90cb105e69c5427268dc854ce1b4c9ff1bc10ec54531 extends Twig_Template
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
        $__internal_ee3ec411cf8ec8c7379262d202dbbf3a6cbb223c00e881763d2a0cadc9bb09f8 = $this->env->getExtension("native_profiler");
        $__internal_ee3ec411cf8ec8c7379262d202dbbf3a6cbb223c00e881763d2a0cadc9bb09f8->enter($__internal_ee3ec411cf8ec8c7379262d202dbbf3a6cbb223c00e881763d2a0cadc9bb09f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ee3ec411cf8ec8c7379262d202dbbf3a6cbb223c00e881763d2a0cadc9bb09f8->leave($__internal_ee3ec411cf8ec8c7379262d202dbbf3a6cbb223c00e881763d2a0cadc9bb09f8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
