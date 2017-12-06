<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_be340c2f43e98a2b51d4a13bca3974e00e1a41a24204798c2174312f714fc735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_908e78e46a6b4b7f8262e8946f32862dc3d4d9764d9e695716781fa91adf9f08 = $this->env->getExtension("native_profiler");
        $__internal_908e78e46a6b4b7f8262e8946f32862dc3d4d9764d9e695716781fa91adf9f08->enter($__internal_908e78e46a6b4b7f8262e8946f32862dc3d4d9764d9e695716781fa91adf9f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_908e78e46a6b4b7f8262e8946f32862dc3d4d9764d9e695716781fa91adf9f08->leave($__internal_908e78e46a6b4b7f8262e8946f32862dc3d4d9764d9e695716781fa91adf9f08_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9aa7160a26edb059ca2ddabe9a9287ab02a326fe9b3f8cc65a56d4f0046c7bd = $this->env->getExtension("native_profiler");
        $__internal_d9aa7160a26edb059ca2ddabe9a9287ab02a326fe9b3f8cc65a56d4f0046c7bd->enter($__internal_d9aa7160a26edb059ca2ddabe9a9287ab02a326fe9b3f8cc65a56d4f0046c7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d9aa7160a26edb059ca2ddabe9a9287ab02a326fe9b3f8cc65a56d4f0046c7bd->leave($__internal_d9aa7160a26edb059ca2ddabe9a9287ab02a326fe9b3f8cc65a56d4f0046c7bd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aed028604082cd38e3292db40398776a5526cf4875fcb1a03ff81fda2767fdd6 = $this->env->getExtension("native_profiler");
        $__internal_aed028604082cd38e3292db40398776a5526cf4875fcb1a03ff81fda2767fdd6->enter($__internal_aed028604082cd38e3292db40398776a5526cf4875fcb1a03ff81fda2767fdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_aed028604082cd38e3292db40398776a5526cf4875fcb1a03ff81fda2767fdd6->leave($__internal_aed028604082cd38e3292db40398776a5526cf4875fcb1a03ff81fda2767fdd6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
