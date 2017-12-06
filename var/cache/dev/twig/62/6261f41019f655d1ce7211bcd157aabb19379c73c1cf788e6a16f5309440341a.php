<?php

/* @TestArticle/Article/form/form.html.twig */
class __TwigTemplate_c8fcfc7fb19b78626b689859f3987eef784b2dd7494bab90e71c57e8a6819a8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestArticleBundle:Article:index.html.twig", "@TestArticle/Article/form/form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestArticleBundle:Article:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7322e6996d251da8ace0c16c1a2629c1ec29b4d958d858666f07f10b827b50a6 = $this->env->getExtension("native_profiler");
        $__internal_7322e6996d251da8ace0c16c1a2629c1ec29b4d958d858666f07f10b827b50a6->enter($__internal_7322e6996d251da8ace0c16c1a2629c1ec29b4d958d858666f07f10b827b50a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TestArticle/Article/form/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7322e6996d251da8ace0c16c1a2629c1ec29b4d958d858666f07f10b827b50a6->leave($__internal_7322e6996d251da8ace0c16c1a2629c1ec29b4d958d858666f07f10b827b50a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c5634b98e79ad6af01dec55f420527aa02acbf822b6992d47def2113dcea833 = $this->env->getExtension("native_profiler");
        $__internal_0c5634b98e79ad6af01dec55f420527aa02acbf822b6992d47def2113dcea833->enter($__internal_0c5634b98e79ad6af01dec55f420527aa02acbf822b6992d47def2113dcea833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_0c5634b98e79ad6af01dec55f420527aa02acbf822b6992d47def2113dcea833->leave($__internal_0c5634b98e79ad6af01dec55f420527aa02acbf822b6992d47def2113dcea833_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3eb8c859c0c0ee82235d75650f0e27a762eba6762e90bf5deb734166a2ae077 = $this->env->getExtension("native_profiler");
        $__internal_b3eb8c859c0c0ee82235d75650f0e27a762eba6762e90bf5deb734166a2ae077->enter($__internal_b3eb8c859c0c0ee82235d75650f0e27a762eba6762e90bf5deb734166a2ae077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo " <div class=\"col-ms-8\">
<div class=\"well\">
  ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

 
  ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  <!--label -->
  <div class=\"form-group\">
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Label"));
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <!--description -->
  <div class=\"form-group\">
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Description"));
        echo "
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div> 
  
  <!--amount ht -->
  <div class=\"form-group\">
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "amountHt", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Amount Ht"));
        echo "
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "amountHt", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "amountHt", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "amount")));
        echo "
    </div>
  </div>

   <!-- tva -->
   <div class=\"row\">
   <div class='col-sm-2'></div>
    <div class=\"col-sm-10\"><i>Display of differents values of amount HT when input amount value is changing</i></div>
  </div>
   <div class=\"form-group\">
\t  <div class='col-sm-2 control-label tva17'></div>
      <div class=\"col-sm-10 \">
       <input class=\"changeValueTva17\" type=\"text\" disabled placeholder=\"TVA à 17%\"/>
\t  </div>
</div>
  <div class=\"form-group\">
\t <div class='col-sm-2 control-label tva1'> </div>
\t  <div class=\"col-sm-10\">
      <input class=\"changeValueTva1\" type=\"text\" disabled placeholder=\"TVA à 3%\" />
\t  </div>
  </div>
  ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
  ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_b3eb8c859c0c0ee82235d75650f0e27a762eba6762e90bf5deb734166a2ae077->leave($__internal_b3eb8c859c0c0ee82235d75650f0e27a762eba6762e90bf5deb734166a2ae077_prof);

    }

    public function getTemplateName()
    {
        return "@TestArticle/Article/form/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 59,  144 => 58,  140 => 57,  116 => 36,  111 => 34,  107 => 33,  98 => 27,  93 => 25,  89 => 24,  80 => 18,  75 => 16,  71 => 15,  64 => 11,  58 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "TestArticleBundle:Article:index.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/*  <div class="col-ms-8">*/
/* <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*  */
/*   {{ form_errors(form) }}*/
/* */
/*   <!--label -->*/
/*   <div class="form-group">*/
/*     {{ form_label(form.label, "Label", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.label) }}*/
/*     <div class="col-sm-10">*/
/*       {{ form_widget(form.label, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <!--description -->*/
/*   <div class="form-group">*/
/*     {{ form_label(form.description, "Description", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.description) }}*/
/*     <div class="col-sm-10">*/
/*       {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div> */
/*   */
/*   <!--amount ht -->*/
/*   <div class="form-group">*/
/*     {{ form_label(form.amountHt, "Amount Ht", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*     {{ form_errors(form.amountHt) }}*/
/*     <div class="col-sm-10">*/
/*       {{ form_widget(form.amountHt, {'attr': {'class': 'form-control','id':'amount'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*    <!-- tva -->*/
/*    <div class="row">*/
/*    <div class='col-sm-2'></div>*/
/*     <div class="col-sm-10"><i>Display of differents values of amount HT when input amount value is changing</i></div>*/
/*   </div>*/
/*    <div class="form-group">*/
/* 	  <div class='col-sm-2 control-label tva17'></div>*/
/*       <div class="col-sm-10 ">*/
/*        <input class="changeValueTva17" type="text" disabled placeholder="TVA à 17%"/>*/
/* 	  </div>*/
/* </div>*/
/*   <div class="form-group">*/
/* 	 <div class='col-sm-2 control-label tva1'> </div>*/
/* 	  <div class="col-sm-10">*/
/*       <input class="changeValueTva1" type="text" disabled placeholder="TVA à 3%" />*/
/* 	  </div>*/
/*   </div>*/
/*   {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*   {{ form_rest(form) }}*/
/*   {{ form_end(form) }}*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
