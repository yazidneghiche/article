<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0ef35408e36f2a718c8338dfcfb50b406fea4f0f092a58ff54c1eca59397abb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_7c2cec8adafdf7f780062bc83d7e96b49c2e0c5456efd70c108e2c9272600620 = $this->env->getExtension("native_profiler");
        $__internal_7c2cec8adafdf7f780062bc83d7e96b49c2e0c5456efd70c108e2c9272600620->enter($__internal_7c2cec8adafdf7f780062bc83d7e96b49c2e0c5456efd70c108e2c9272600620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c2cec8adafdf7f780062bc83d7e96b49c2e0c5456efd70c108e2c9272600620->leave($__internal_7c2cec8adafdf7f780062bc83d7e96b49c2e0c5456efd70c108e2c9272600620_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e79530c09e5e552075b3b315368b67b9cd5fc0c6d81429246dcc463956ab450d = $this->env->getExtension("native_profiler");
        $__internal_e79530c09e5e552075b3b315368b67b9cd5fc0c6d81429246dcc463956ab450d->enter($__internal_e79530c09e5e552075b3b315368b67b9cd5fc0c6d81429246dcc463956ab450d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e79530c09e5e552075b3b315368b67b9cd5fc0c6d81429246dcc463956ab450d->leave($__internal_e79530c09e5e552075b3b315368b67b9cd5fc0c6d81429246dcc463956ab450d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee87632fdf087388aef3d80f3c451a7582aaab377960ceb72750919af1bd9601 = $this->env->getExtension("native_profiler");
        $__internal_ee87632fdf087388aef3d80f3c451a7582aaab377960ceb72750919af1bd9601->enter($__internal_ee87632fdf087388aef3d80f3c451a7582aaab377960ceb72750919af1bd9601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee87632fdf087388aef3d80f3c451a7582aaab377960ceb72750919af1bd9601->leave($__internal_ee87632fdf087388aef3d80f3c451a7582aaab377960ceb72750919af1bd9601_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
