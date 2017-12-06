<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_25c22d6696605781cb9cd4615798593f9be57055cd3467948c7957b9f0399373 extends Twig_Template
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
        $__internal_5f6ac5e9d3dec58e1f9e0d5bb5fd2e35843f92556a282efd16af52ab9b7ef579 = $this->env->getExtension("native_profiler");
        $__internal_5f6ac5e9d3dec58e1f9e0d5bb5fd2e35843f92556a282efd16af52ab9b7ef579->enter($__internal_5f6ac5e9d3dec58e1f9e0d5bb5fd2e35843f92556a282efd16af52ab9b7ef579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5f6ac5e9d3dec58e1f9e0d5bb5fd2e35843f92556a282efd16af52ab9b7ef579->leave($__internal_5f6ac5e9d3dec58e1f9e0d5bb5fd2e35843f92556a282efd16af52ab9b7ef579_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
