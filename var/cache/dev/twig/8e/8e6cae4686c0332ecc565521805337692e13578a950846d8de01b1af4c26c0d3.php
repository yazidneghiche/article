<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ea11dc108529e6085cd727d544a377e6b540b748298f5fdb568a9a25a2a830fe extends Twig_Template
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
        $__internal_aacc48a7d91b2e31b7f5b0a44e3681dcfb15c018875049be11f22902e69ffa69 = $this->env->getExtension("native_profiler");
        $__internal_aacc48a7d91b2e31b7f5b0a44e3681dcfb15c018875049be11f22902e69ffa69->enter($__internal_aacc48a7d91b2e31b7f5b0a44e3681dcfb15c018875049be11f22902e69ffa69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_aacc48a7d91b2e31b7f5b0a44e3681dcfb15c018875049be11f22902e69ffa69->leave($__internal_aacc48a7d91b2e31b7f5b0a44e3681dcfb15c018875049be11f22902e69ffa69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
