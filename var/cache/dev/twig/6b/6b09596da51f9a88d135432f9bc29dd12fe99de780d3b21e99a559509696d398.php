<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b1b859c5b030111afa20965a41f6db85eebf3fdbad993695c0cb271cbd2fb205 extends Twig_Template
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
        $__internal_abbd9df167e864ed252f740e10e18486d1fab54168b0efe0adf558bc1031d917 = $this->env->getExtension("native_profiler");
        $__internal_abbd9df167e864ed252f740e10e18486d1fab54168b0efe0adf558bc1031d917->enter($__internal_abbd9df167e864ed252f740e10e18486d1fab54168b0efe0adf558bc1031d917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_abbd9df167e864ed252f740e10e18486d1fab54168b0efe0adf558bc1031d917->leave($__internal_abbd9df167e864ed252f740e10e18486d1fab54168b0efe0adf558bc1031d917_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
