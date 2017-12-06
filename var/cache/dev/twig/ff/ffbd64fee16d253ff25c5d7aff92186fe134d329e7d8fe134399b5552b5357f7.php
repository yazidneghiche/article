<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4eba9ca48965423897acf2bef00808210fb02ff3d3c2e32232b650cea487a939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_c6f00c554b81a9cf7ff72025c3361da3a95c0a3000b6ed7a6bf7bd3814f4ee72 = $this->env->getExtension("native_profiler");
        $__internal_c6f00c554b81a9cf7ff72025c3361da3a95c0a3000b6ed7a6bf7bd3814f4ee72->enter($__internal_c6f00c554b81a9cf7ff72025c3361da3a95c0a3000b6ed7a6bf7bd3814f4ee72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6f00c554b81a9cf7ff72025c3361da3a95c0a3000b6ed7a6bf7bd3814f4ee72->leave($__internal_c6f00c554b81a9cf7ff72025c3361da3a95c0a3000b6ed7a6bf7bd3814f4ee72_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d3632457f75aff316c21e02b8cdb84e47bb8c63501f74395e12f3c6ea770233 = $this->env->getExtension("native_profiler");
        $__internal_5d3632457f75aff316c21e02b8cdb84e47bb8c63501f74395e12f3c6ea770233->enter($__internal_5d3632457f75aff316c21e02b8cdb84e47bb8c63501f74395e12f3c6ea770233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5d3632457f75aff316c21e02b8cdb84e47bb8c63501f74395e12f3c6ea770233->leave($__internal_5d3632457f75aff316c21e02b8cdb84e47bb8c63501f74395e12f3c6ea770233_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c41b11abe80e619f3cf1566861ae6925ec8bfaffed3dbc947a907c075fe3b1ef = $this->env->getExtension("native_profiler");
        $__internal_c41b11abe80e619f3cf1566861ae6925ec8bfaffed3dbc947a907c075fe3b1ef->enter($__internal_c41b11abe80e619f3cf1566861ae6925ec8bfaffed3dbc947a907c075fe3b1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c41b11abe80e619f3cf1566861ae6925ec8bfaffed3dbc947a907c075fe3b1ef->leave($__internal_c41b11abe80e619f3cf1566861ae6925ec8bfaffed3dbc947a907c075fe3b1ef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fab635cd413e4d2fba87f6060da3fd010565c78912b9ce463d4bcc7b2877939 = $this->env->getExtension("native_profiler");
        $__internal_4fab635cd413e4d2fba87f6060da3fd010565c78912b9ce463d4bcc7b2877939->enter($__internal_4fab635cd413e4d2fba87f6060da3fd010565c78912b9ce463d4bcc7b2877939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4fab635cd413e4d2fba87f6060da3fd010565c78912b9ce463d4bcc7b2877939->leave($__internal_4fab635cd413e4d2fba87f6060da3fd010565c78912b9ce463d4bcc7b2877939_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
