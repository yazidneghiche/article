<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4d922a60bef4e0a5e8b553125fbe2d44d6757c7a2eb8815acace83c8534f8925 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51d2228a660879db671a750f30ed25decd062276694420102ab71482e00eeccf = $this->env->getExtension("native_profiler");
        $__internal_51d2228a660879db671a750f30ed25decd062276694420102ab71482e00eeccf->enter($__internal_51d2228a660879db671a750f30ed25decd062276694420102ab71482e00eeccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51d2228a660879db671a750f30ed25decd062276694420102ab71482e00eeccf->leave($__internal_51d2228a660879db671a750f30ed25decd062276694420102ab71482e00eeccf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_60859c3cae4ab3c2ee760ea2191ecc930f83ef7703e2fb183af748439e022599 = $this->env->getExtension("native_profiler");
        $__internal_60859c3cae4ab3c2ee760ea2191ecc930f83ef7703e2fb183af748439e022599->enter($__internal_60859c3cae4ab3c2ee760ea2191ecc930f83ef7703e2fb183af748439e022599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_60859c3cae4ab3c2ee760ea2191ecc930f83ef7703e2fb183af748439e022599->leave($__internal_60859c3cae4ab3c2ee760ea2191ecc930f83ef7703e2fb183af748439e022599_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3869f6878a1683022be601b971b1c1aa609edd5e55a23e1cc03f1bcc078d0e9d = $this->env->getExtension("native_profiler");
        $__internal_3869f6878a1683022be601b971b1c1aa609edd5e55a23e1cc03f1bcc078d0e9d->enter($__internal_3869f6878a1683022be601b971b1c1aa609edd5e55a23e1cc03f1bcc078d0e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3869f6878a1683022be601b971b1c1aa609edd5e55a23e1cc03f1bcc078d0e9d->leave($__internal_3869f6878a1683022be601b971b1c1aa609edd5e55a23e1cc03f1bcc078d0e9d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6001dc54241ef493d8cdc19898774abf5d795bb91218188ddbf7ebd58ce49d4 = $this->env->getExtension("native_profiler");
        $__internal_e6001dc54241ef493d8cdc19898774abf5d795bb91218188ddbf7ebd58ce49d4->enter($__internal_e6001dc54241ef493d8cdc19898774abf5d795bb91218188ddbf7ebd58ce49d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e6001dc54241ef493d8cdc19898774abf5d795bb91218188ddbf7ebd58ce49d4->leave($__internal_e6001dc54241ef493d8cdc19898774abf5d795bb91218188ddbf7ebd58ce49d4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
