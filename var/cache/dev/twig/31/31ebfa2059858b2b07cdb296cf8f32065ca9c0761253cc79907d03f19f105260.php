<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2e66663261ff7771b50ba8349cdbd9fdb169e301aed937f3c9e7b734a1fe90fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_1d2f1b6f67c3a3512003a88f0066095dc0cd7497d90161ba67e2348e5636ceec = $this->env->getExtension("native_profiler");
        $__internal_1d2f1b6f67c3a3512003a88f0066095dc0cd7497d90161ba67e2348e5636ceec->enter($__internal_1d2f1b6f67c3a3512003a88f0066095dc0cd7497d90161ba67e2348e5636ceec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d2f1b6f67c3a3512003a88f0066095dc0cd7497d90161ba67e2348e5636ceec->leave($__internal_1d2f1b6f67c3a3512003a88f0066095dc0cd7497d90161ba67e2348e5636ceec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9fb14cbe82f9c381d4fb3b150236880bf23365cea39fc3f239638051965e0a4e = $this->env->getExtension("native_profiler");
        $__internal_9fb14cbe82f9c381d4fb3b150236880bf23365cea39fc3f239638051965e0a4e->enter($__internal_9fb14cbe82f9c381d4fb3b150236880bf23365cea39fc3f239638051965e0a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9fb14cbe82f9c381d4fb3b150236880bf23365cea39fc3f239638051965e0a4e->leave($__internal_9fb14cbe82f9c381d4fb3b150236880bf23365cea39fc3f239638051965e0a4e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_09c78d99886db7ec450c36cd64c279d4ccbaebee15a36ffae36b8e4b667eea3c = $this->env->getExtension("native_profiler");
        $__internal_09c78d99886db7ec450c36cd64c279d4ccbaebee15a36ffae36b8e4b667eea3c->enter($__internal_09c78d99886db7ec450c36cd64c279d4ccbaebee15a36ffae36b8e4b667eea3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_09c78d99886db7ec450c36cd64c279d4ccbaebee15a36ffae36b8e4b667eea3c->leave($__internal_09c78d99886db7ec450c36cd64c279d4ccbaebee15a36ffae36b8e4b667eea3c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_765b65cc25782b8747b0cc771267091f4c0ceed7bf08814f8de526f25f735a1f = $this->env->getExtension("native_profiler");
        $__internal_765b65cc25782b8747b0cc771267091f4c0ceed7bf08814f8de526f25f735a1f->enter($__internal_765b65cc25782b8747b0cc771267091f4c0ceed7bf08814f8de526f25f735a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_765b65cc25782b8747b0cc771267091f4c0ceed7bf08814f8de526f25f735a1f->leave($__internal_765b65cc25782b8747b0cc771267091f4c0ceed7bf08814f8de526f25f735a1f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
