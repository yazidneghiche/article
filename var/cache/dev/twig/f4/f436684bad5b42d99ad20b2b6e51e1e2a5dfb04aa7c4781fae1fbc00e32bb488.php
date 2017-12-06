<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_972d29ad08a227335e3723941c9e9a075491b94507706bf42a1fa7eebb0889b1 extends Twig_Template
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
        $__internal_f3ed9022ed96a823212abae22e79bab91928ef323ac572c52ab0034c106767d8 = $this->env->getExtension("native_profiler");
        $__internal_f3ed9022ed96a823212abae22e79bab91928ef323ac572c52ab0034c106767d8->enter($__internal_f3ed9022ed96a823212abae22e79bab91928ef323ac572c52ab0034c106767d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f3ed9022ed96a823212abae22e79bab91928ef323ac572c52ab0034c106767d8->leave($__internal_f3ed9022ed96a823212abae22e79bab91928ef323ac572c52ab0034c106767d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
