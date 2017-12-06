<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_534c4379ce617f51e3ba5c24618c7c7410456cdebe5bc126aa7c378fdb80778a extends Twig_Template
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
        $__internal_33a056f063c9e4b8764de8f1bf19e57d0715f9debb2110c3c593344ec43a5f62 = $this->env->getExtension("native_profiler");
        $__internal_33a056f063c9e4b8764de8f1bf19e57d0715f9debb2110c3c593344ec43a5f62->enter($__internal_33a056f063c9e4b8764de8f1bf19e57d0715f9debb2110c3c593344ec43a5f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_33a056f063c9e4b8764de8f1bf19e57d0715f9debb2110c3c593344ec43a5f62->leave($__internal_33a056f063c9e4b8764de8f1bf19e57d0715f9debb2110c3c593344ec43a5f62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
