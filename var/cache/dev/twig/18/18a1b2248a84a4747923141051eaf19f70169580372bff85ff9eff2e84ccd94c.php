<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_24699f568f5940e572e009c76bd6e86434feeae85b6e23e7831c0b0aa90bccbc extends Twig_Template
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
        $__internal_54fb90144ff20c81f4935dbbdc7177b9846629b75f007fbf19edfe1804c5a6da = $this->env->getExtension("native_profiler");
        $__internal_54fb90144ff20c81f4935dbbdc7177b9846629b75f007fbf19edfe1804c5a6da->enter($__internal_54fb90144ff20c81f4935dbbdc7177b9846629b75f007fbf19edfe1804c5a6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_54fb90144ff20c81f4935dbbdc7177b9846629b75f007fbf19edfe1804c5a6da->leave($__internal_54fb90144ff20c81f4935dbbdc7177b9846629b75f007fbf19edfe1804c5a6da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
