<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_54ed916435a1303e5badb968b67301830324a4bf63cd13a20591221e2b8cc11d extends Twig_Template
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
        $__internal_369d8cc58e0279a847e865d0996b724c659b2064d4bbb8ffc374e5539b3fa695 = $this->env->getExtension("native_profiler");
        $__internal_369d8cc58e0279a847e865d0996b724c659b2064d4bbb8ffc374e5539b3fa695->enter($__internal_369d8cc58e0279a847e865d0996b724c659b2064d4bbb8ffc374e5539b3fa695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_369d8cc58e0279a847e865d0996b724c659b2064d4bbb8ffc374e5539b3fa695->leave($__internal_369d8cc58e0279a847e865d0996b724c659b2064d4bbb8ffc374e5539b3fa695_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
