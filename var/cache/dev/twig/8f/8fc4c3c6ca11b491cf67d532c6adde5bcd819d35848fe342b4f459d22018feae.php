<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6efff31efdb1850ffbdc7f723e38367afd1ef2b0663fd325fc7f3c06bc89abb1 extends Twig_Template
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
        $__internal_c748d9d4807878be4a18b70977d2ec1380ae62b8774b8baf85ef25bc52c3c125 = $this->env->getExtension("native_profiler");
        $__internal_c748d9d4807878be4a18b70977d2ec1380ae62b8774b8baf85ef25bc52c3c125->enter($__internal_c748d9d4807878be4a18b70977d2ec1380ae62b8774b8baf85ef25bc52c3c125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c748d9d4807878be4a18b70977d2ec1380ae62b8774b8baf85ef25bc52c3c125->leave($__internal_c748d9d4807878be4a18b70977d2ec1380ae62b8774b8baf85ef25bc52c3c125_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
