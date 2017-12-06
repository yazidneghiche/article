<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e1d36904de7a6b1227adc3ad68f44e0e9bea37444d74265be287656db35599b1 extends Twig_Template
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
        $__internal_57fc4ef8ee482066ab46dc06fb44866d74f84e3a498eb6f817d9da2ead87091d = $this->env->getExtension("native_profiler");
        $__internal_57fc4ef8ee482066ab46dc06fb44866d74f84e3a498eb6f817d9da2ead87091d->enter($__internal_57fc4ef8ee482066ab46dc06fb44866d74f84e3a498eb6f817d9da2ead87091d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_57fc4ef8ee482066ab46dc06fb44866d74f84e3a498eb6f817d9da2ead87091d->leave($__internal_57fc4ef8ee482066ab46dc06fb44866d74f84e3a498eb6f817d9da2ead87091d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
