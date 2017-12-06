<?php

/* ::base.html.twig */
class __TwigTemplate_4dec26f7c5db091369da43d31c8aaeda7e4958dad73b6729abb39ec478863653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c8feaffd79fffd3a933bb4217f642f085cbc5656403a8737bb9f3bc90df94ec = $this->env->getExtension("native_profiler");
        $__internal_0c8feaffd79fffd3a933bb4217f642f085cbc5656403a8737bb9f3bc90df94ec->enter($__internal_0c8feaffd79fffd3a933bb4217f642f085cbc5656403a8737bb9f3bc90df94ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0c8feaffd79fffd3a933bb4217f642f085cbc5656403a8737bb9f3bc90df94ec->leave($__internal_0c8feaffd79fffd3a933bb4217f642f085cbc5656403a8737bb9f3bc90df94ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f0cfb2cc6ab41901e77040f0ac3b9a0b42efe1259ca1c5c803dc833833e39fa = $this->env->getExtension("native_profiler");
        $__internal_9f0cfb2cc6ab41901e77040f0ac3b9a0b42efe1259ca1c5c803dc833833e39fa->enter($__internal_9f0cfb2cc6ab41901e77040f0ac3b9a0b42efe1259ca1c5c803dc833833e39fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9f0cfb2cc6ab41901e77040f0ac3b9a0b42efe1259ca1c5c803dc833833e39fa->leave($__internal_9f0cfb2cc6ab41901e77040f0ac3b9a0b42efe1259ca1c5c803dc833833e39fa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a24e24eee1555bbca49a90bf383f410fb83abdb6703a287d54c6a6e128491b10 = $this->env->getExtension("native_profiler");
        $__internal_a24e24eee1555bbca49a90bf383f410fb83abdb6703a287d54c6a6e128491b10->enter($__internal_a24e24eee1555bbca49a90bf383f410fb83abdb6703a287d54c6a6e128491b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a24e24eee1555bbca49a90bf383f410fb83abdb6703a287d54c6a6e128491b10->leave($__internal_a24e24eee1555bbca49a90bf383f410fb83abdb6703a287d54c6a6e128491b10_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_58db46ed90fd220dd0cf092dc573dbe6a44c8a88ecd2fc45811683cc4e2920eb = $this->env->getExtension("native_profiler");
        $__internal_58db46ed90fd220dd0cf092dc573dbe6a44c8a88ecd2fc45811683cc4e2920eb->enter($__internal_58db46ed90fd220dd0cf092dc573dbe6a44c8a88ecd2fc45811683cc4e2920eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_58db46ed90fd220dd0cf092dc573dbe6a44c8a88ecd2fc45811683cc4e2920eb->leave($__internal_58db46ed90fd220dd0cf092dc573dbe6a44c8a88ecd2fc45811683cc4e2920eb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_178420abee68c659e4eadb3aa7fc0311a8888501a10f81fc75ce374da3c50057 = $this->env->getExtension("native_profiler");
        $__internal_178420abee68c659e4eadb3aa7fc0311a8888501a10f81fc75ce374da3c50057->enter($__internal_178420abee68c659e4eadb3aa7fc0311a8888501a10f81fc75ce374da3c50057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_178420abee68c659e4eadb3aa7fc0311a8888501a10f81fc75ce374da3c50057->leave($__internal_178420abee68c659e4eadb3aa7fc0311a8888501a10f81fc75ce374da3c50057_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
