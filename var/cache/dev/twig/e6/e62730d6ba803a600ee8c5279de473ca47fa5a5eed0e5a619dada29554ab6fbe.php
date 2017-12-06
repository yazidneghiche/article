<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_84aa258d72700060837472768dd4ec7392f157a5907556ec6a538be1978a511e extends Twig_Template
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
        $__internal_ef3dcdcbe1d3ca26de99469574a42f1f221e646a0088edfcc9d75a4472ba4b63 = $this->env->getExtension("native_profiler");
        $__internal_ef3dcdcbe1d3ca26de99469574a42f1f221e646a0088edfcc9d75a4472ba4b63->enter($__internal_ef3dcdcbe1d3ca26de99469574a42f1f221e646a0088edfcc9d75a4472ba4b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ef3dcdcbe1d3ca26de99469574a42f1f221e646a0088edfcc9d75a4472ba4b63->leave($__internal_ef3dcdcbe1d3ca26de99469574a42f1f221e646a0088edfcc9d75a4472ba4b63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
