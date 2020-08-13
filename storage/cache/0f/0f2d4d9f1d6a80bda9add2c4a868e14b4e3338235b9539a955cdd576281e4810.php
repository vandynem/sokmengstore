<?php

/* flashs/flashsale_form.twig */
class __TwigTemplate_70af6f6691c48ad15b4c6a86f763d0ee217cf313af49baf73dceb67492887454 extends Twig_Template
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
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
       <!--   <button type=\"submit\" form=\"form-marketing\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>-->
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
 
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> Flash Sale</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 23
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-marketing\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">Title</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"title\" value=\"\" placeholder=\"Enter Notification Title\" id=\"title\" class=\"form-control\" />
            
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-description\">Message</label>
            <div class=\"col-sm-10\">
              <textarea name=\"message\" rows=\"5\" placeholder=\"Enter Notification Message\" id=\"message\" class=\"form-control\"></textarea>
            </div>
          </div>
          
          <div class=\"form-group\">
           
            <div class=\"col-sm-10\">
              <button type=\"submit\" form=\"form-marketing\" data-toggle=\"tooltip\"  class=\"btn btn-primary\">Send</button>
        
            </div>
          </div>
        
        </form>
      </div>
    </div>
  </div>
  </div>
";
        // line 51
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "flashs/flashsale_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 51,  70 => 23,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*        <!--   <button type="submit" form="form-marketing" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>-->*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*  */
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> Flash Sale</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-marketing" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-name">Title</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="title" value="" placeholder="Enter Notification Title" id="title" class="form-control" />*/
/*             */
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-description">Message</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="message" rows="5" placeholder="Enter Notification Message" id="message" class="form-control"></textarea>*/
/*             </div>*/
/*           </div>*/
/*           */
/*           <div class="form-group">*/
/*            */
/*             <div class="col-sm-10">*/
/*               <button type="submit" form="form-marketing" data-toggle="tooltip"  class="btn btn-primary">Send</button>*/
/*         */
/*             </div>*/
/*           </div>*/
/*         */
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   </div>*/
/* {{ footer }}*/
