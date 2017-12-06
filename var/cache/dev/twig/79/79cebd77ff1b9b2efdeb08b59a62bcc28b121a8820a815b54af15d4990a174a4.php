<?php

/* @TestArticle/Article/article.html.twig */
class __TwigTemplate_12af2cf37c315301c4495f0b9d9ab51ece04aa9f910738f843e6204159d51f90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TestArticleBundle:Article:index.html.twig", "@TestArticle/Article/article.html.twig", 1);
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
        $__internal_cc97c09bee745151a1e6ea373b61c6b3d2013c2b64c5976924a035ade640b3d8 = $this->env->getExtension("native_profiler");
        $__internal_cc97c09bee745151a1e6ea373b61c6b3d2013c2b64c5976924a035ade640b3d8->enter($__internal_cc97c09bee745151a1e6ea373b61c6b3d2013c2b64c5976924a035ade640b3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TestArticle/Article/article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc97c09bee745151a1e6ea373b61c6b3d2013c2b64c5976924a035ade640b3d8->leave($__internal_cc97c09bee745151a1e6ea373b61c6b3d2013c2b64c5976924a035ade640b3d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_695846a51fa6632ad6eff37f15a3951ee2748ab7d86dfb31ad619a6f5ecad34e = $this->env->getExtension("native_profiler");
        $__internal_695846a51fa6632ad6eff37f15a3951ee2748ab7d86dfb31ad619a6f5ecad34e->enter($__internal_695846a51fa6632ad6eff37f15a3951ee2748ab7d86dfb31ad619a6f5ecad34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_695846a51fa6632ad6eff37f15a3951ee2748ab7d86dfb31ad619a6f5ecad34e->leave($__internal_695846a51fa6632ad6eff37f15a3951ee2748ab7d86dfb31ad619a6f5ecad34e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecc42b6b6a4608b33e26ffee13e1baeb4e71e02a732b482fda1405d9a7a82114 = $this->env->getExtension("native_profiler");
        $__internal_ecc42b6b6a4608b33e26ffee13e1baeb4e71e02a732b482fda1405d9a7a82114->enter($__internal_ecc42b6b6a4608b33e26ffee13e1baeb4e71e02a732b482fda1405d9a7a82114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo " <div class=\"col-ms-8\">
  <div id=\"removedArticle\" class=\"alert alert-success\" style='display:none;text-align:center;'> Article supprimé</div>
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "   <div class=\"alert alert-success\">
    ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
 </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "<div class=\"table-responsive\">          
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th>#</th>
        <th>Label</th>
        <th>Description</th>
        <th>Amount HT</th>
        <th>Amount with TVA 17%</th>
        <th>Amount with TVA 3%</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
\t
     ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 30
            echo "\t <!--diferent var for rable -->
\t  ";
            // line 31
            $context["descr"] = "  * ";
            // line 32
            echo "\t  ";
            $context["Pricetva17"] = ($this->getAttribute($context["article"], "amountHt", array()) * 1.17);
            // line 33
            echo "\t  ";
            $context["Pricetva3"] = ($this->getAttribute($context["article"], "amountHt", array()) * 1.03);
            echo "  
\t  ";
            // line 34
            $context["descr"] = "  * ";
            // line 35
            echo "      ";
            if ( !(null === $this->getAttribute($context["article"], "description", array()))) {
                echo " ";
                $context["descr"] = $this->getAttribute($context["article"], "description", array());
                echo " ";
            }
            // line 36
            echo "      <tr>
\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "label", array()), "html", null, true);
            echo "</td> <td>";
            echo twig_escape_filter($this->env, (isset($context["descr"]) ? $context["descr"] : $this->getContext($context, "descr")), "html", null, true);
            echo " </td>
\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "amountHt", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["Pricetva17"]) ? $context["Pricetva17"] : $this->getContext($context, "Pricetva17")), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, (isset($context["Pricetva3"]) ? $context["Pricetva3"] : $this->getContext($context, "Pricetva3")), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "creation", array()), "d/m/Y m:i:s"), "html", null, true);
            echo "</td>
\t\t\t<td><i id =\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\"  class=\"fa fa-close delete\" style=\"font-size:15px;color:red\"></i></td>
\t\t\t
\t\t</tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </tbody>
  </table>
  </div>
</div>
";
        
        $__internal_ecc42b6b6a4608b33e26ffee13e1baeb4e71e02a732b482fda1405d9a7a82114->leave($__internal_ecc42b6b6a4608b33e26ffee13e1baeb4e71e02a732b482fda1405d9a7a82114_prof);

    }

    public function getTemplateName()
    {
        return "@TestArticle/Article/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 46,  158 => 42,  154 => 41,  148 => 40,  144 => 39,  138 => 38,  134 => 37,  131 => 36,  124 => 35,  122 => 34,  117 => 33,  114 => 32,  112 => 31,  109 => 30,  92 => 29,  74 => 13,  65 => 10,  62 => 9,  58 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "TestArticleBundle:Article:index.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/*  <div class="col-ms-8">*/
/*   <div id="removedArticle" class="alert alert-success" style='display:none;text-align:center;'> Article supprimé</div>*/
/*   {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*    <div class="alert alert-success">*/
/*     {{ flashMessage }}*/
/*  </div>*/
/* {% endfor %}*/
/* <div class="table-responsive">          */
/*   <table class="table table-bordered">*/
/*     <thead>*/
/*       <tr>*/
/*         <th>#</th>*/
/*         <th>Label</th>*/
/*         <th>Description</th>*/
/*         <th>Amount HT</th>*/
/*         <th>Amount with TVA 17%</th>*/
/*         <th>Amount with TVA 3%</th>*/
/*         <th>Date</th>*/
/*         <th>Action</th>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/* 	*/
/*      {% for article in articles%}*/
/* 	 <!--diferent var for rable -->*/
/* 	  {% set descr="  * " %}*/
/* 	  {% set Pricetva17= article.amountHt * 1.17 %}*/
/* 	  {% set Pricetva3= article.amountHt * 1.03 %}  */
/* 	  {% set descr="  * " %}*/
/*       {% if article.description is not null%} {% set descr=article.description %} {% endif %}*/
/*       <tr>*/
/* 			<td>{{ loop.index }}</td>*/
/* 			<td>{{article.label}}</td> <td>{{ descr }} </td>*/
/* 			<td>{{article.amountHt}}</td>*/
/* 			<td>{{Pricetva17}}</td><td>{{Pricetva3 }}</td>*/
/* 			<td>{{ article.creation|date('d/m/Y m:i:s')}}</td>*/
/* 			<td><i id ="{{article.id }}"  class="fa fa-close delete" style="font-size:15px;color:red"></i></td>*/
/* 			*/
/* 		</tr>*/
/*     {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
