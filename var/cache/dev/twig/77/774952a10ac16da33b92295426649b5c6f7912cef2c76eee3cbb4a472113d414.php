<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_3b542a3c39fd9b7c8fdb11e0ac473d45ae459111998cff5d69ad0433f79bfbed extends Twig_Template
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
        $__internal_d0fa80f7b2a6b48accb00344712aee900811022c66b94bf7ffb81b681b04b538 = $this->env->getExtension("native_profiler");
        $__internal_d0fa80f7b2a6b48accb00344712aee900811022c66b94bf7ffb81b681b04b538->enter($__internal_d0fa80f7b2a6b48accb00344712aee900811022c66b94bf7ffb81b681b04b538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d0fa80f7b2a6b48accb00344712aee900811022c66b94bf7ffb81b681b04b538->leave($__internal_d0fa80f7b2a6b48accb00344712aee900811022c66b94bf7ffb81b681b04b538_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
