<?php

/* ::layout.html.twig */
class __TwigTemplate_47b47d331d304cf933d24878b8fc69493fe86f75fc0a5d0c45ca1ab46dab9dc5 extends Twig_Template
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
        $__internal_a577831b2c14047d7c03aa20ac59520d13f028dc94b226143f2b195e79628064 = $this->env->getExtension("native_profiler");
        $__internal_a577831b2c14047d7c03aa20ac59520d13f028dc94b226143f2b195e79628064->enter($__internal_a577831b2c14047d7c03aa20ac59520d13f028dc94b226143f2b195e79628064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Photos et video de la Famille</h1>
      <p>
       ";
        // line 22
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FMPlatformBundle:Default:menup"));
        echo "
      </p>
    </div>
    <div id=\"header2\" class=\"jumbotron\">
      <h1>Slide</h1>
      <p>
       ";
        // line 28
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FMPlatformBundle:Slide:menu"));
        echo "
      </p>
    </div>
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("al_home_homepage");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("al_home_homepage2", array("name" => "coucou"));
        echo "\">accueil2</a></li>
        </ul>

        <h4>Dernières Images</h4>
        ";
        // line 40
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FMPlatformBundle:Default:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
</body>
</html>";
        
        $__internal_a577831b2c14047d7c03aa20ac59520d13f028dc94b226143f2b195e79628064->leave($__internal_a577831b2c14047d7c03aa20ac59520d13f028dc94b226143f2b195e79628064_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_96bd2bb5b525f68a5874fc2bd2e4c099cbcf0b93170e65952530eab97fde38f8 = $this->env->getExtension("native_profiler");
        $__internal_96bd2bb5b525f68a5874fc2bd2e4c099cbcf0b93170e65952530eab97fde38f8->enter($__internal_96bd2bb5b525f68a5874fc2bd2e4c099cbcf0b93170e65952530eab97fde38f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_96bd2bb5b525f68a5874fc2bd2e4c099cbcf0b93170e65952530eab97fde38f8->leave($__internal_96bd2bb5b525f68a5874fc2bd2e4c099cbcf0b93170e65952530eab97fde38f8_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29c030e76358778a70acd672a26a6cbb164683287881d945c5462510f43053d1 = $this->env->getExtension("native_profiler");
        $__internal_29c030e76358778a70acd672a26a6cbb164683287881d945c5462510f43053d1->enter($__internal_29c030e76358778a70acd672a26a6cbb164683287881d945c5462510f43053d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_29c030e76358778a70acd672a26a6cbb164683287881d945c5462510f43053d1->leave($__internal_29c030e76358778a70acd672a26a6cbb164683287881d945c5462510f43053d1_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e5616e6a9d716212a6f75037004eb92063017156b358eb64f8f1b05e0248ff5 = $this->env->getExtension("native_profiler");
        $__internal_7e5616e6a9d716212a6f75037004eb92063017156b358eb64f8f1b05e0248ff5->enter($__internal_7e5616e6a9d716212a6f75037004eb92063017156b358eb64f8f1b05e0248ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "        ";
        
        $__internal_7e5616e6a9d716212a6f75037004eb92063017156b358eb64f8f1b05e0248ff5->leave($__internal_7e5616e6a9d716212a6f75037004eb92063017156b358eb64f8f1b05e0248ff5_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7be2cb614e0cc17401922ea57b201d75630f265df080eb33aa0e110891a3195 = $this->env->getExtension("native_profiler");
        $__internal_b7be2cb614e0cc17401922ea57b201d75630f265df080eb33aa0e110891a3195->enter($__internal_b7be2cb614e0cc17401922ea57b201d75630f265df080eb33aa0e110891a3195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_b7be2cb614e0cc17401922ea57b201d75630f265df080eb33aa0e110891a3195->leave($__internal_b7be2cb614e0cc17401922ea57b201d75630f265df080eb33aa0e110891a3195_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 57,  162 => 56,  156 => 55,  149 => 44,  143 => 43,  135 => 13,  133 => 12,  127 => 11,  115 => 9,  106 => 60,  104 => 55,  97 => 51,  89 => 45,  87 => 43,  81 => 40,  74 => 36,  70 => 35,  60 => 28,  51 => 22,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/*     {# On charge le CSS de bootstrap depuis le site directement #}*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*   {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>Photos et video de la Famille</h1>*/
/*       <p>*/
/*        {{ render(controller("FMPlatformBundle:Default:menup")) }}*/
/*       </p>*/
/*     </div>*/
/*     <div id="header2" class="jumbotron">*/
/*       <h1>Slide</h1>*/
/*       <p>*/
/*        {{ render(controller("FMPlatformBundle:Slide:menu")) }}*/
/*       </p>*/
/*     </div>*/
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3>Les annonces</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('al_home_homepage') }}">Accueil</a></li>*/
/*           <li><a href="{{ path('al_home_homepage2',{'name': 'coucou'}) }}">accueil2</a></li>*/
/*         </ul>*/
/* */
/*         <h4>Dernières Images</h4>*/
/*         {{ render(controller("FMPlatformBundle:Default:menu", {'limit': 3})) }}*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*       <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>*/
/*     </footer>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
