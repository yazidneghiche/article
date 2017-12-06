<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3088d5d16c0889cbe2b798bd55d59f8aa6861312f0e133ecd03a92d94148acd5 extends Twig_Template
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
        $__internal_644c6fd471bfb1444ceff83566ac51f0b7b1f723151bd5973c3be265ba6482e6 = $this->env->getExtension("native_profiler");
        $__internal_644c6fd471bfb1444ceff83566ac51f0b7b1f723151bd5973c3be265ba6482e6->enter($__internal_644c6fd471bfb1444ceff83566ac51f0b7b1f723151bd5973c3be265ba6482e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_644c6fd471bfb1444ceff83566ac51f0b7b1f723151bd5973c3be265ba6482e6->leave($__internal_644c6fd471bfb1444ceff83566ac51f0b7b1f723151bd5973c3be265ba6482e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
