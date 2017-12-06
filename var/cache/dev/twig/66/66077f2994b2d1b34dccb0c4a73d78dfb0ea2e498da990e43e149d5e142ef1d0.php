<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_7ca608e44d05215cbccdb0f4ad1af5a04fceee7af1d4a44f886dea6ea816a1c1 extends Twig_Template
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
        $__internal_ae7c21d89e451d2cee31d25d2c75179183d2aef401d4f876bb2c4ea3f3c59de4 = $this->env->getExtension("native_profiler");
        $__internal_ae7c21d89e451d2cee31d25d2c75179183d2aef401d4f876bb2c4ea3f3c59de4->enter($__internal_ae7c21d89e451d2cee31d25d2c75179183d2aef401d4f876bb2c4ea3f3c59de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ae7c21d89e451d2cee31d25d2c75179183d2aef401d4f876bb2c4ea3f3c59de4->leave($__internal_ae7c21d89e451d2cee31d25d2c75179183d2aef401d4f876bb2c4ea3f3c59de4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
