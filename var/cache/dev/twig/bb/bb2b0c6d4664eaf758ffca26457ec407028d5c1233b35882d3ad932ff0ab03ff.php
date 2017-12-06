<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4ae3442738a819ea69c77ea07c290093f3912e8433eda22b8d6f401cb175ce63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_318eda9ecadd86981310aecc67412069e4bd4a1903de0e3f2f42bc45abc95aa5 = $this->env->getExtension("native_profiler");
        $__internal_318eda9ecadd86981310aecc67412069e4bd4a1903de0e3f2f42bc45abc95aa5->enter($__internal_318eda9ecadd86981310aecc67412069e4bd4a1903de0e3f2f42bc45abc95aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_318eda9ecadd86981310aecc67412069e4bd4a1903de0e3f2f42bc45abc95aa5->leave($__internal_318eda9ecadd86981310aecc67412069e4bd4a1903de0e3f2f42bc45abc95aa5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b2fe9bee5f0ccb696216693885cc3698ad2a8c5f678b14429de5cb274b558dcc = $this->env->getExtension("native_profiler");
        $__internal_b2fe9bee5f0ccb696216693885cc3698ad2a8c5f678b14429de5cb274b558dcc->enter($__internal_b2fe9bee5f0ccb696216693885cc3698ad2a8c5f678b14429de5cb274b558dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b2fe9bee5f0ccb696216693885cc3698ad2a8c5f678b14429de5cb274b558dcc->leave($__internal_b2fe9bee5f0ccb696216693885cc3698ad2a8c5f678b14429de5cb274b558dcc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
