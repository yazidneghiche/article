<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e006dcba87c39f07b0a159deb97859c1e88d1d0c755e7d25c58391adf5419483 extends Twig_Template
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
        $__internal_6b853c07278a9db4022b4624a2c48f1bde523f6e724d011eec903b7a14260e31 = $this->env->getExtension("native_profiler");
        $__internal_6b853c07278a9db4022b4624a2c48f1bde523f6e724d011eec903b7a14260e31->enter($__internal_6b853c07278a9db4022b4624a2c48f1bde523f6e724d011eec903b7a14260e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6b853c07278a9db4022b4624a2c48f1bde523f6e724d011eec903b7a14260e31->leave($__internal_6b853c07278a9db4022b4624a2c48f1bde523f6e724d011eec903b7a14260e31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
