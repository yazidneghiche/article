<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_223eab91a5362958f37e4ff06db63a1cb6a4aab5f00c8a28fe20620f4e0ff76a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e5dfce3ded87e374d4f006d6b769b2c9262e00bdaf8809739ec99833f0f476b = $this->env->getExtension("native_profiler");
        $__internal_2e5dfce3ded87e374d4f006d6b769b2c9262e00bdaf8809739ec99833f0f476b->enter($__internal_2e5dfce3ded87e374d4f006d6b769b2c9262e00bdaf8809739ec99833f0f476b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e5dfce3ded87e374d4f006d6b769b2c9262e00bdaf8809739ec99833f0f476b->leave($__internal_2e5dfce3ded87e374d4f006d6b769b2c9262e00bdaf8809739ec99833f0f476b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a4716be42dbc07d19871caee9a2a3da9a18d558425a036fbafa7539d30b33c9 = $this->env->getExtension("native_profiler");
        $__internal_2a4716be42dbc07d19871caee9a2a3da9a18d558425a036fbafa7539d30b33c9->enter($__internal_2a4716be42dbc07d19871caee9a2a3da9a18d558425a036fbafa7539d30b33c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2a4716be42dbc07d19871caee9a2a3da9a18d558425a036fbafa7539d30b33c9->leave($__internal_2a4716be42dbc07d19871caee9a2a3da9a18d558425a036fbafa7539d30b33c9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da2e0df21d21895fe8c385e94239a3409eca01a22bef3cf5ca0723c21e844ee3 = $this->env->getExtension("native_profiler");
        $__internal_da2e0df21d21895fe8c385e94239a3409eca01a22bef3cf5ca0723c21e844ee3->enter($__internal_da2e0df21d21895fe8c385e94239a3409eca01a22bef3cf5ca0723c21e844ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da2e0df21d21895fe8c385e94239a3409eca01a22bef3cf5ca0723c21e844ee3->leave($__internal_da2e0df21d21895fe8c385e94239a3409eca01a22bef3cf5ca0723c21e844ee3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_11097b9e0ba468a9a333e700d6a1b9b6b94080d0c81ec3a65a7c5e1d460b202d = $this->env->getExtension("native_profiler");
        $__internal_11097b9e0ba468a9a333e700d6a1b9b6b94080d0c81ec3a65a7c5e1d460b202d->enter($__internal_11097b9e0ba468a9a333e700d6a1b9b6b94080d0c81ec3a65a7c5e1d460b202d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_11097b9e0ba468a9a333e700d6a1b9b6b94080d0c81ec3a65a7c5e1d460b202d->leave($__internal_11097b9e0ba468a9a333e700d6a1b9b6b94080d0c81ec3a65a7c5e1d460b202d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
