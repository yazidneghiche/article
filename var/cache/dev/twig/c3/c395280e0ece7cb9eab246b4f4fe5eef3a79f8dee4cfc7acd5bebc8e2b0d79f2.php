<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a1113e57c6aea5d3c610005979587fb1cc156aba805089188b6a22db5fd78a70 extends Twig_Template
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
        $__internal_2fc5f530c5f705618fdef3b8a56c72d16e8cb47160a5674977a0e02ee4202eb9 = $this->env->getExtension("native_profiler");
        $__internal_2fc5f530c5f705618fdef3b8a56c72d16e8cb47160a5674977a0e02ee4202eb9->enter($__internal_2fc5f530c5f705618fdef3b8a56c72d16e8cb47160a5674977a0e02ee4202eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2fc5f530c5f705618fdef3b8a56c72d16e8cb47160a5674977a0e02ee4202eb9->leave($__internal_2fc5f530c5f705618fdef3b8a56c72d16e8cb47160a5674977a0e02ee4202eb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
