<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_51671d13da70baba24980f1f065fa458b7fefdf9e5b12ae80f5be15f145be3d0 extends Twig_Template
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
        $__internal_899f2a3c5f3b62dbddf003a193ea2e313a9d028fd4abc8856ade4c00dc7babf4 = $this->env->getExtension("native_profiler");
        $__internal_899f2a3c5f3b62dbddf003a193ea2e313a9d028fd4abc8856ade4c00dc7babf4->enter($__internal_899f2a3c5f3b62dbddf003a193ea2e313a9d028fd4abc8856ade4c00dc7babf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_899f2a3c5f3b62dbddf003a193ea2e313a9d028fd4abc8856ade4c00dc7babf4->leave($__internal_899f2a3c5f3b62dbddf003a193ea2e313a9d028fd4abc8856ade4c00dc7babf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
