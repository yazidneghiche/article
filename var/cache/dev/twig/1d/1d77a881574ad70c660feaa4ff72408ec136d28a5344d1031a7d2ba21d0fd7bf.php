<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_79265c0fd202c3929b9094d818023609def485a16b7fd5f95fb5a868dc377bf6 extends Twig_Template
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
        $__internal_584f13b9c1e47fce0025d8a7545b81c0176276f0cd0f9f95965730def1b3b98c = $this->env->getExtension("native_profiler");
        $__internal_584f13b9c1e47fce0025d8a7545b81c0176276f0cd0f9f95965730def1b3b98c->enter($__internal_584f13b9c1e47fce0025d8a7545b81c0176276f0cd0f9f95965730def1b3b98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_584f13b9c1e47fce0025d8a7545b81c0176276f0cd0f9f95965730def1b3b98c->leave($__internal_584f13b9c1e47fce0025d8a7545b81c0176276f0cd0f9f95965730def1b3b98c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
