<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_cc3f3d08d2c4dc0267b0848aaf53fbce3ee2f25cdddfae00062d125be43adab7 extends Twig_Template
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
        $__internal_188d9cdcf0245c08e1119e701b86e68141ee5dc207ce1d69b9011ddd1113b8ea = $this->env->getExtension("native_profiler");
        $__internal_188d9cdcf0245c08e1119e701b86e68141ee5dc207ce1d69b9011ddd1113b8ea->enter($__internal_188d9cdcf0245c08e1119e701b86e68141ee5dc207ce1d69b9011ddd1113b8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_188d9cdcf0245c08e1119e701b86e68141ee5dc207ce1d69b9011ddd1113b8ea->leave($__internal_188d9cdcf0245c08e1119e701b86e68141ee5dc207ce1d69b9011ddd1113b8ea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
