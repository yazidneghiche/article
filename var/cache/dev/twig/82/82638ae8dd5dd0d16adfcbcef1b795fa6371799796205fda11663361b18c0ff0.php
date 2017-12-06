<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7b5befc84e4e3d26e8e2fe3e6b6727cf3d36f89c26070477133938610edc39bc extends Twig_Template
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
        $__internal_fecf09835dd8e4402351f2b78b4eabbba9ac6ef1603e10770502252e11248fcf = $this->env->getExtension("native_profiler");
        $__internal_fecf09835dd8e4402351f2b78b4eabbba9ac6ef1603e10770502252e11248fcf->enter($__internal_fecf09835dd8e4402351f2b78b4eabbba9ac6ef1603e10770502252e11248fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fecf09835dd8e4402351f2b78b4eabbba9ac6ef1603e10770502252e11248fcf->leave($__internal_fecf09835dd8e4402351f2b78b4eabbba9ac6ef1603e10770502252e11248fcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
