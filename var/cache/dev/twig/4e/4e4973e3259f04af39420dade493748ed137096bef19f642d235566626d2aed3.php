<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a5a06f4bd3aedc296c62ef74638e398b7f2c38e1e7fb530722ee05385af06333 extends Twig_Template
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
        $__internal_65a95764e5d615b75884a62ebb3cfbe84b1e2930ab36308a8d81d7f5369d4418 = $this->env->getExtension("native_profiler");
        $__internal_65a95764e5d615b75884a62ebb3cfbe84b1e2930ab36308a8d81d7f5369d4418->enter($__internal_65a95764e5d615b75884a62ebb3cfbe84b1e2930ab36308a8d81d7f5369d4418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_65a95764e5d615b75884a62ebb3cfbe84b1e2930ab36308a8d81d7f5369d4418->leave($__internal_65a95764e5d615b75884a62ebb3cfbe84b1e2930ab36308a8d81d7f5369d4418_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
