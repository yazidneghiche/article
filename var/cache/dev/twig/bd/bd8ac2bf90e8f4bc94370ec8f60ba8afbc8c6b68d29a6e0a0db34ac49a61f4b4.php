<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_67e7e09e9b0e1175c59ef39b6e627827d37cc181db2f9ce2815d6573e6a47ca0 extends Twig_Template
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
        $__internal_731fc743129947d1fd8acd4467e6f218187d2138eac15cab2623ebe8bffcfbf5 = $this->env->getExtension("native_profiler");
        $__internal_731fc743129947d1fd8acd4467e6f218187d2138eac15cab2623ebe8bffcfbf5->enter($__internal_731fc743129947d1fd8acd4467e6f218187d2138eac15cab2623ebe8bffcfbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_731fc743129947d1fd8acd4467e6f218187d2138eac15cab2623ebe8bffcfbf5->leave($__internal_731fc743129947d1fd8acd4467e6f218187d2138eac15cab2623ebe8bffcfbf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
