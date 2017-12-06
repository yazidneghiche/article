<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d90fb480d298939dbcce3fc6eaa0b4098430b393cf1cca97c5048d03e0f60b0d extends Twig_Template
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
        $__internal_52ed427e7ab3074009330d48a07bf74c262801ed71776e157ee15e81915de7d3 = $this->env->getExtension("native_profiler");
        $__internal_52ed427e7ab3074009330d48a07bf74c262801ed71776e157ee15e81915de7d3->enter($__internal_52ed427e7ab3074009330d48a07bf74c262801ed71776e157ee15e81915de7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_52ed427e7ab3074009330d48a07bf74c262801ed71776e157ee15e81915de7d3->leave($__internal_52ed427e7ab3074009330d48a07bf74c262801ed71776e157ee15e81915de7d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
