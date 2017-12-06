<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_695708b1523bcf08bcab106bb816e7d459f2c5f03a1501ea45dfe76dcb62e251 extends Twig_Template
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
        $__internal_e5006a54cc52bacdd10fe959119cc891084cc44a64867d74a6917a2a542bdbd9 = $this->env->getExtension("native_profiler");
        $__internal_e5006a54cc52bacdd10fe959119cc891084cc44a64867d74a6917a2a542bdbd9->enter($__internal_e5006a54cc52bacdd10fe959119cc891084cc44a64867d74a6917a2a542bdbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e5006a54cc52bacdd10fe959119cc891084cc44a64867d74a6917a2a542bdbd9->leave($__internal_e5006a54cc52bacdd10fe959119cc891084cc44a64867d74a6917a2a542bdbd9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
