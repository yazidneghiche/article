<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6e67c6156cbbcf4a6bbfa1ade803e166f1be58ad27b4ec9ef080c7da26311655 extends Twig_Template
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
        $__internal_270e9f416886546fcb92b15851abfbbeb7c35c37d1d6a2c23eb4494038bbcb35 = $this->env->getExtension("native_profiler");
        $__internal_270e9f416886546fcb92b15851abfbbeb7c35c37d1d6a2c23eb4494038bbcb35->enter($__internal_270e9f416886546fcb92b15851abfbbeb7c35c37d1d6a2c23eb4494038bbcb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_270e9f416886546fcb92b15851abfbbeb7c35c37d1d6a2c23eb4494038bbcb35->leave($__internal_270e9f416886546fcb92b15851abfbbeb7c35c37d1d6a2c23eb4494038bbcb35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
