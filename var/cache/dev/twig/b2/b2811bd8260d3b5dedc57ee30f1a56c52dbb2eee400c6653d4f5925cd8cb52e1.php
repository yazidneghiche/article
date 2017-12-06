<?php

/* @TestArticle/Article/index.html.twig */
class __TwigTemplate_889f17ba0895477bb728ee6216c575e69d7ba23fc18646faad086da27bbd5742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4196f2cd0d258d3fcc9d3447f9a1492eb245a684225b57c139bfefd6fd00f78 = $this->env->getExtension("native_profiler");
        $__internal_e4196f2cd0d258d3fcc9d3447f9a1492eb245a684225b57c139bfefd6fd00f78->enter($__internal_e4196f2cd0d258d3fcc9d3447f9a1492eb245a684225b57c139bfefd6fd00f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TestArticle/Article/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>Articles</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
   <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
</head>
<body>
<div class=\"container\">
<header>
<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"#\">Test article</a>
    </div>
    <ul class=\"nav navbar-nav\">
      <li ";
        // line 19
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "articles")) {
            echo "  class=\"active\" ";
        }
        echo "> <a href='";
        echo $this->env->getExtension('routing')->getPath("articles");
        echo "'>Articles</a></li>
      <li ";
        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "form_article")) {
            echo "  class=\"active\" ";
        }
        echo " >
\t\t<a  href='";
        // line 21
        echo $this->env->getExtension('routing')->getPath("form_article");
        echo "'>Ajouter un article </a>
\t </li>
    </ul>
  </div>
</nav>
</header>
  ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "  </div>
 
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  
  <script>
 
  //display differents tva
   \$(document).on('change',\"#article_amountHt\",function(event){
    
     var val_17 = \$(this).val() *1.17;
     var val_1 = \$(this).val() *1.03;
\t 
\t 
     \$('.changeValueTva17').val(val_17);
     \$('.tva17').html('TVE à 17%');
     \$('.changeValueTva1').val(val_1);
       \$('.tva1').html('TVA à 3%');
   });
   
   //delete article  action 
   
    \$(document).on('click',\".delete\",function(event){
     
\t var id = \$(event.target).attr('id');
\t var parentTr = \$(event.target).parents('tr');
\t  event.preventDefault();
\t alert(parentTr);
\t \$.ajax({
      type: \"POST\",
      url: \"/testarticle/web/app_dev.php/articles/delete\",
      data: {'id':id},
\t  dataType: 'html',
      success: function(){
\t   parentTr.remove();
\t   \$(\"#removedArticle\").fadeIn('slow',function(){
\t     setTimeout(function(){
\t\t\t\$(\"#removedArticle\").fadeOut();
\t\t\t}, 300 );
\t   });
\t  },
    
    });
     
   });
  </script>
</body>
</html>";
        
        $__internal_e4196f2cd0d258d3fcc9d3447f9a1492eb245a684225b57c139bfefd6fd00f78->leave($__internal_e4196f2cd0d258d3fcc9d3447f9a1492eb245a684225b57c139bfefd6fd00f78_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_52de1bc3a0d32cc8b92761287d082bd36e2434bfce74e6233fe65328f626a5c9 = $this->env->getExtension("native_profiler");
        $__internal_52de1bc3a0d32cc8b92761287d082bd36e2434bfce74e6233fe65328f626a5c9->enter($__internal_52de1bc3a0d32cc8b92761287d082bd36e2434bfce74e6233fe65328f626a5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "  ";
        
        $__internal_52de1bc3a0d32cc8b92761287d082bd36e2434bfce74e6233fe65328f626a5c9->leave($__internal_52de1bc3a0d32cc8b92761287d082bd36e2434bfce74e6233fe65328f626a5c9_prof);

    }

    public function getTemplateName()
    {
        return "@TestArticle/Article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 28,  122 => 27,  68 => 29,  66 => 27,  57 => 21,  51 => 20,  43 => 19,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*   <title>Articles</title>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">*/
/*    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">*/
/* </head>*/
/* <body>*/
/* <div class="container">*/
/* <header>*/
/* <nav class="navbar navbar-default">*/
/*   <div class="container-fluid">*/
/*     <div class="navbar-header">*/
/*       <a class="navbar-brand" href="#">Test article</a>*/
/*     </div>*/
/*     <ul class="nav navbar-nav">*/
/*       <li {%  if app.request.attributes.get('_route') == 'articles' %}  class="active" {% endif %}> <a href='{{ path("articles") }}'>Articles</a></li>*/
/*       <li {%  if app.request.attributes.get('_route') ==  'form_article'   %}  class="active" {% endif %} >*/
/* 		<a  href='{{ path("form_article") }}'>Ajouter un article </a>*/
/* 	 </li>*/
/*     </ul>*/
/*   </div>*/
/* </nav>*/
/* </header>*/
/*   {% block body %}*/
/*   {% endblock %}*/
/*   </div>*/
/*  */
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>*/
/*   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>*/
/*   */
/*   <script>*/
/*  */
/*   //display differents tva*/
/*    $(document).on('change',"#article_amountHt",function(event){*/
/*     */
/*      var val_17 = $(this).val() *1.17;*/
/*      var val_1 = $(this).val() *1.03;*/
/* 	 */
/* 	 */
/*      $('.changeValueTva17').val(val_17);*/
/*      $('.tva17').html('TVE à 17%');*/
/*      $('.changeValueTva1').val(val_1);*/
/*        $('.tva1').html('TVA à 3%');*/
/*    });*/
/*    */
/*    //delete article  action */
/*    */
/*     $(document).on('click',".delete",function(event){*/
/*      */
/* 	 var id = $(event.target).attr('id');*/
/* 	 var parentTr = $(event.target).parents('tr');*/
/* 	  event.preventDefault();*/
/* 	 alert(parentTr);*/
/* 	 $.ajax({*/
/*       type: "POST",*/
/*       url: "/testarticle/web/app_dev.php/articles/delete",*/
/*       data: {'id':id},*/
/* 	  dataType: 'html',*/
/*       success: function(){*/
/* 	   parentTr.remove();*/
/* 	   $("#removedArticle").fadeIn('slow',function(){*/
/* 	     setTimeout(function(){*/
/* 			$("#removedArticle").fadeOut();*/
/* 			}, 300 );*/
/* 	   });*/
/* 	  },*/
/*     */
/*     });*/
/*      */
/*    });*/
/*   </script>*/
/* </body>*/
/* </html>*/
