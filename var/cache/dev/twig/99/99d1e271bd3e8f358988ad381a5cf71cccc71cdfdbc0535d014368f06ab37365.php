<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a7129151e9417cec4fd2e9afd6c3d0ba58a44e52c2a66acdc84d354d8b32f312 extends Twig_Template
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
        $__internal_27837c921db7c402c4ed66f5bbfb41698ddbc532e71a99a18df16838f4be3f7f = $this->env->getExtension("native_profiler");
        $__internal_27837c921db7c402c4ed66f5bbfb41698ddbc532e71a99a18df16838f4be3f7f->enter($__internal_27837c921db7c402c4ed66f5bbfb41698ddbc532e71a99a18df16838f4be3f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_27837c921db7c402c4ed66f5bbfb41698ddbc532e71a99a18df16838f4be3f7f->leave($__internal_27837c921db7c402c4ed66f5bbfb41698ddbc532e71a99a18df16838f4be3f7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
