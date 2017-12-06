<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5ba3f5eb87827f3699f6abeb950b8e6fe7090a63c1d0b632f321be1e01d9e78a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4e9606c833de537fd5290023decb98053ee69a4e996dfa29632285f5643ac29e = $this->env->getExtension("native_profiler");
        $__internal_4e9606c833de537fd5290023decb98053ee69a4e996dfa29632285f5643ac29e->enter($__internal_4e9606c833de537fd5290023decb98053ee69a4e996dfa29632285f5643ac29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e9606c833de537fd5290023decb98053ee69a4e996dfa29632285f5643ac29e->leave($__internal_4e9606c833de537fd5290023decb98053ee69a4e996dfa29632285f5643ac29e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46b6b0aa43c3c962991d192f98d39dbf8351f4371550aebcd60b59a9210bd307 = $this->env->getExtension("native_profiler");
        $__internal_46b6b0aa43c3c962991d192f98d39dbf8351f4371550aebcd60b59a9210bd307->enter($__internal_46b6b0aa43c3c962991d192f98d39dbf8351f4371550aebcd60b59a9210bd307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_46b6b0aa43c3c962991d192f98d39dbf8351f4371550aebcd60b59a9210bd307->leave($__internal_46b6b0aa43c3c962991d192f98d39dbf8351f4371550aebcd60b59a9210bd307_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a54eb5ca589ffb5316bd4c548181385f3a184309621f6b3f33cad978fd108bba = $this->env->getExtension("native_profiler");
        $__internal_a54eb5ca589ffb5316bd4c548181385f3a184309621f6b3f33cad978fd108bba->enter($__internal_a54eb5ca589ffb5316bd4c548181385f3a184309621f6b3f33cad978fd108bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a54eb5ca589ffb5316bd4c548181385f3a184309621f6b3f33cad978fd108bba->leave($__internal_a54eb5ca589ffb5316bd4c548181385f3a184309621f6b3f33cad978fd108bba_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f7d8cba58c2bde81e423b1623c137f3ee483e17f1e9fbaf5815f8175021640f = $this->env->getExtension("native_profiler");
        $__internal_6f7d8cba58c2bde81e423b1623c137f3ee483e17f1e9fbaf5815f8175021640f->enter($__internal_6f7d8cba58c2bde81e423b1623c137f3ee483e17f1e9fbaf5815f8175021640f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6f7d8cba58c2bde81e423b1623c137f3ee483e17f1e9fbaf5815f8175021640f->leave($__internal_6f7d8cba58c2bde81e423b1623c137f3ee483e17f1e9fbaf5815f8175021640f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
