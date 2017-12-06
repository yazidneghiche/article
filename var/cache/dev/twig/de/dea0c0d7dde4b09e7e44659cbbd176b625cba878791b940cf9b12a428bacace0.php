<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_eea65f29a4e4e0882073682cfaec8235f3b86586e59306d7eddf0fce255cccbf extends Twig_Template
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
        $__internal_ad07d6b6204db48405c067bde5bc03501e7e0338284df7298ffedb9b5e4188d9 = $this->env->getExtension("native_profiler");
        $__internal_ad07d6b6204db48405c067bde5bc03501e7e0338284df7298ffedb9b5e4188d9->enter($__internal_ad07d6b6204db48405c067bde5bc03501e7e0338284df7298ffedb9b5e4188d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ad07d6b6204db48405c067bde5bc03501e7e0338284df7298ffedb9b5e4188d9->leave($__internal_ad07d6b6204db48405c067bde5bc03501e7e0338284df7298ffedb9b5e4188d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
