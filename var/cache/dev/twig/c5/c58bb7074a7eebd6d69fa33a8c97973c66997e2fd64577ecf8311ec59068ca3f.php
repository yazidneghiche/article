<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c17b63c7605c9b1b7286d35d8b44acdeb51b49d8f6baa1deaf6e446a54e0e84d extends Twig_Template
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
        $__internal_77970f11b2c868d6ae4fe1ee7aed5b66dee8f0d60d313b9252e7c270e9c6e956 = $this->env->getExtension("native_profiler");
        $__internal_77970f11b2c868d6ae4fe1ee7aed5b66dee8f0d60d313b9252e7c270e9c6e956->enter($__internal_77970f11b2c868d6ae4fe1ee7aed5b66dee8f0d60d313b9252e7c270e9c6e956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_77970f11b2c868d6ae4fe1ee7aed5b66dee8f0d60d313b9252e7c270e9c6e956->leave($__internal_77970f11b2c868d6ae4fe1ee7aed5b66dee8f0d60d313b9252e7c270e9c6e956_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
