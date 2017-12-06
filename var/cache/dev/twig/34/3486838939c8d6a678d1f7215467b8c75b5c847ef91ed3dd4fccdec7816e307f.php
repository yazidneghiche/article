<?php

/* layout.html.twig */
class __TwigTemplate_86a6344c2eb20632ccdb43526324f457b72798bbceb2fa667d454df1d5075a6d extends Twig_Template
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
        $__internal_5d17ea5493f3d5cdd37b6a4b5bcf1c4050ff8e5a0f31c9f1b24c0b7bf3329491 = $this->env->getExtension("native_profiler");
        $__internal_5d17ea5493f3d5cdd37b6a4b5bcf1c4050ff8e5a0f31c9f1b24c0b7bf3329491->enter($__internal_5d17ea5493f3d5cdd37b6a4b5bcf1c4050ff8e5a0f31c9f1b24c0b7bf3329491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_5d17ea5493f3d5cdd37b6a4b5bcf1c4050ff8e5a0f31c9f1b24c0b7bf3329491->leave($__internal_5d17ea5493f3d5cdd37b6a4b5bcf1c4050ff8e5a0f31c9f1b24c0b7bf3329491_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1715ce36c94f98b13807f8830532303e76a406ee0fd828a157a769e43ca9c25 = $this->env->getExtension("native_profiler");
        $__internal_d1715ce36c94f98b13807f8830532303e76a406ee0fd828a157a769e43ca9c25->enter($__internal_d1715ce36c94f98b13807f8830532303e76a406ee0fd828a157a769e43ca9c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_d1715ce36c94f98b13807f8830532303e76a406ee0fd828a157a769e43ca9c25->leave($__internal_d1715ce36c94f98b13807f8830532303e76a406ee0fd828a157a769e43ca9c25_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f12d6782a9222e917987b7291993c6b8592119ef8154202b3117e6ee261ea50e = $this->env->getExtension("native_profiler");
        $__internal_f12d6782a9222e917987b7291993c6b8592119ef8154202b3117e6ee261ea50e->enter($__internal_f12d6782a9222e917987b7291993c6b8592119ef8154202b3117e6ee261ea50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_f12d6782a9222e917987b7291993c6b8592119ef8154202b3117e6ee261ea50e->leave($__internal_f12d6782a9222e917987b7291993c6b8592119ef8154202b3117e6ee261ea50e_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bb62e0df12586d0e1afa68143ed97fbd403e3eadf879a8b6beb70e89994c32c = $this->env->getExtension("native_profiler");
        $__internal_4bb62e0df12586d0e1afa68143ed97fbd403e3eadf879a8b6beb70e89994c32c->enter($__internal_4bb62e0df12586d0e1afa68143ed97fbd403e3eadf879a8b6beb70e89994c32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "        ";
        
        $__internal_4bb62e0df12586d0e1afa68143ed97fbd403e3eadf879a8b6beb70e89994c32c->leave($__internal_4bb62e0df12586d0e1afa68143ed97fbd403e3eadf879a8b6beb70e89994c32c_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b9f964e0a1667dca12e0636199248aeb7a466f9a50f5ee1f0d2fff203b70d11 = $this->env->getExtension("native_profiler");
        $__internal_8b9f964e0a1667dca12e0636199248aeb7a466f9a50f5ee1f0d2fff203b70d11->enter($__internal_8b9f964e0a1667dca12e0636199248aeb7a466f9a50f5ee1f0d2fff203b70d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_8b9f964e0a1667dca12e0636199248aeb7a466f9a50f5ee1f0d2fff203b70d11->leave($__internal_8b9f964e0a1667dca12e0636199248aeb7a466f9a50f5ee1f0d2fff203b70d11_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
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
