<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ac9d4396e1e45544b235501bb2ab16774196bb41a3e31cf2793b480690fdbfab extends Twig_Template
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
        $__internal_03d037f3d7f6557c83f6bc69618dcf2adedc2b8935a426771da11bd414b1ae07 = $this->env->getExtension("native_profiler");
        $__internal_03d037f3d7f6557c83f6bc69618dcf2adedc2b8935a426771da11bd414b1ae07->enter($__internal_03d037f3d7f6557c83f6bc69618dcf2adedc2b8935a426771da11bd414b1ae07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_03d037f3d7f6557c83f6bc69618dcf2adedc2b8935a426771da11bd414b1ae07->leave($__internal_03d037f3d7f6557c83f6bc69618dcf2adedc2b8935a426771da11bd414b1ae07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
