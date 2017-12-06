<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_25cd1b3f163c5975e06e5df3f0348cc34855942d4dd23a57885c8a237c3ba07a extends Twig_Template
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
        $__internal_3357d721f2b49a7f837767fdfda92a9880812fefa208857f1fcf13b6a7166c72 = $this->env->getExtension("native_profiler");
        $__internal_3357d721f2b49a7f837767fdfda92a9880812fefa208857f1fcf13b6a7166c72->enter($__internal_3357d721f2b49a7f837767fdfda92a9880812fefa208857f1fcf13b6a7166c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_3357d721f2b49a7f837767fdfda92a9880812fefa208857f1fcf13b6a7166c72->leave($__internal_3357d721f2b49a7f837767fdfda92a9880812fefa208857f1fcf13b6a7166c72_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
