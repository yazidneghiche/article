<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_515dc2957f339e19ae41744f9f9d6abf52c68546d996faeec02e38b8bcc2d72d extends Twig_Template
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
        $__internal_ace406f13fd3c22d08dc7b8c9f5cce2c9d13e95cda64f38f90e0336e9d4797dc = $this->env->getExtension("native_profiler");
        $__internal_ace406f13fd3c22d08dc7b8c9f5cce2c9d13e95cda64f38f90e0336e9d4797dc->enter($__internal_ace406f13fd3c22d08dc7b8c9f5cce2c9d13e95cda64f38f90e0336e9d4797dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ace406f13fd3c22d08dc7b8c9f5cce2c9d13e95cda64f38f90e0336e9d4797dc->leave($__internal_ace406f13fd3c22d08dc7b8c9f5cce2c9d13e95cda64f38f90e0336e9d4797dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
