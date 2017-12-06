<?php

/* base.html.twig */
class __TwigTemplate_84f6ca2cd78e9db2d0ffb99d46b834ddaa7502bf6df33e6611ba825c4c1da623 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_421d84287b5e8b7087b7c7c2efb8b8958c93cc47c9d58082bc0b6b1b2614a5df = $this->env->getExtension("native_profiler");
        $__internal_421d84287b5e8b7087b7c7c2efb8b8958c93cc47c9d58082bc0b6b1b2614a5df->enter($__internal_421d84287b5e8b7087b7c7c2efb8b8958c93cc47c9d58082bc0b6b1b2614a5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_421d84287b5e8b7087b7c7c2efb8b8958c93cc47c9d58082bc0b6b1b2614a5df->leave($__internal_421d84287b5e8b7087b7c7c2efb8b8958c93cc47c9d58082bc0b6b1b2614a5df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0096d316c68187e3967e4c70f8ee098fc75e9e4cca56cb817d024d1bb175921e = $this->env->getExtension("native_profiler");
        $__internal_0096d316c68187e3967e4c70f8ee098fc75e9e4cca56cb817d024d1bb175921e->enter($__internal_0096d316c68187e3967e4c70f8ee098fc75e9e4cca56cb817d024d1bb175921e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0096d316c68187e3967e4c70f8ee098fc75e9e4cca56cb817d024d1bb175921e->leave($__internal_0096d316c68187e3967e4c70f8ee098fc75e9e4cca56cb817d024d1bb175921e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e19bb59ce28ed9a28183cd9f9a66f53daf41719678b44bd5bb076c64fadacd6 = $this->env->getExtension("native_profiler");
        $__internal_9e19bb59ce28ed9a28183cd9f9a66f53daf41719678b44bd5bb076c64fadacd6->enter($__internal_9e19bb59ce28ed9a28183cd9f9a66f53daf41719678b44bd5bb076c64fadacd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9e19bb59ce28ed9a28183cd9f9a66f53daf41719678b44bd5bb076c64fadacd6->leave($__internal_9e19bb59ce28ed9a28183cd9f9a66f53daf41719678b44bd5bb076c64fadacd6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e14fa8277a44fb546e28cd0870f63316042f90546588d4f3766e746480eeae3 = $this->env->getExtension("native_profiler");
        $__internal_8e14fa8277a44fb546e28cd0870f63316042f90546588d4f3766e746480eeae3->enter($__internal_8e14fa8277a44fb546e28cd0870f63316042f90546588d4f3766e746480eeae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8e14fa8277a44fb546e28cd0870f63316042f90546588d4f3766e746480eeae3->leave($__internal_8e14fa8277a44fb546e28cd0870f63316042f90546588d4f3766e746480eeae3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dcdee822f0f4f6db2f27827a694c4d3c1aea4fae012e9c703ce158f5f5d7b3dd = $this->env->getExtension("native_profiler");
        $__internal_dcdee822f0f4f6db2f27827a694c4d3c1aea4fae012e9c703ce158f5f5d7b3dd->enter($__internal_dcdee822f0f4f6db2f27827a694c4d3c1aea4fae012e9c703ce158f5f5d7b3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dcdee822f0f4f6db2f27827a694c4d3c1aea4fae012e9c703ce158f5f5d7b3dd->leave($__internal_dcdee822f0f4f6db2f27827a694c4d3c1aea4fae012e9c703ce158f5f5d7b3dd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
