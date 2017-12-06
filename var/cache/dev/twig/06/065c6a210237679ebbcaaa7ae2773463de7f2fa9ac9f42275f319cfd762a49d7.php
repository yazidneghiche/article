<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2b93889571452445201c4387b8f583f74a9d2d7949970e4eb53907ff385f2a11 extends Twig_Template
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
        $__internal_1bc977a0807241a38e20fb306749d7c378c86a03670cc459b2163d0df545235e = $this->env->getExtension("native_profiler");
        $__internal_1bc977a0807241a38e20fb306749d7c378c86a03670cc459b2163d0df545235e->enter($__internal_1bc977a0807241a38e20fb306749d7c378c86a03670cc459b2163d0df545235e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1bc977a0807241a38e20fb306749d7c378c86a03670cc459b2163d0df545235e->leave($__internal_1bc977a0807241a38e20fb306749d7c378c86a03670cc459b2163d0df545235e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
