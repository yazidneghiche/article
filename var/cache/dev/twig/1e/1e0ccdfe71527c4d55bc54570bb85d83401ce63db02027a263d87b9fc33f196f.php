<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_e16c6210265d3f42271cda0d1377cac6ec1ca26228c08e1e4d3914f16bd77e99 extends Twig_Template
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
        $__internal_266035ef989127745e0cdfb1fd2484043e0d3e7f927b8526b32e54c3fbf15c73 = $this->env->getExtension("native_profiler");
        $__internal_266035ef989127745e0cdfb1fd2484043e0d3e7f927b8526b32e54c3fbf15c73->enter($__internal_266035ef989127745e0cdfb1fd2484043e0d3e7f927b8526b32e54c3fbf15c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_266035ef989127745e0cdfb1fd2484043e0d3e7f927b8526b32e54c3fbf15c73->leave($__internal_266035ef989127745e0cdfb1fd2484043e0d3e7f927b8526b32e54c3fbf15c73_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
