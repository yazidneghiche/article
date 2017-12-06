<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1db1cbc52b1a46045549ef5a0356e6e6bc83ff7e0967bc63ac012909b776f125 extends Twig_Template
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
        $__internal_10b7fea8e235035353d90e6068c1c51d9be9a20965ceb0f9a609b2123f63b744 = $this->env->getExtension("native_profiler");
        $__internal_10b7fea8e235035353d90e6068c1c51d9be9a20965ceb0f9a609b2123f63b744->enter($__internal_10b7fea8e235035353d90e6068c1c51d9be9a20965ceb0f9a609b2123f63b744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_10b7fea8e235035353d90e6068c1c51d9be9a20965ceb0f9a609b2123f63b744->leave($__internal_10b7fea8e235035353d90e6068c1c51d9be9a20965ceb0f9a609b2123f63b744_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
