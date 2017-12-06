<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d57238999dc2e5b8dee4e4321fc38331375f55eceffac05ffeae2ebb3ab2c72b extends Twig_Template
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
        $__internal_53b98beb5e5f131145e3141c8a88f6433645587e27a7316ec9dcc9c9909d9050 = $this->env->getExtension("native_profiler");
        $__internal_53b98beb5e5f131145e3141c8a88f6433645587e27a7316ec9dcc9c9909d9050->enter($__internal_53b98beb5e5f131145e3141c8a88f6433645587e27a7316ec9dcc9c9909d9050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_53b98beb5e5f131145e3141c8a88f6433645587e27a7316ec9dcc9c9909d9050->leave($__internal_53b98beb5e5f131145e3141c8a88f6433645587e27a7316ec9dcc9c9909d9050_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
