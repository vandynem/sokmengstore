<?php

/* so-buyshop/template/footer/footer2.twig */
class __TwigTemplate_7a4aa3c4437f60f9fe71dc52d3dc381f6af9dd366e566714b9b44741da53c9cc extends Twig_Template
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
        echo "<footer class=\"footer-container typefooter-";
        echo (((isset($context["typefooter"]) ? $context["typefooter"] : null)) ? ((isset($context["typefooter"]) ? $context["typefooter"] : null)) : ("2"));
        echo "\">
\t";
        // line 2
        echo "  
\t";
        // line 3
        if ( !twig_test_empty((isset($context["footer_block2"]) ? $context["footer_block2"] : null))) {
            // line 4
            echo "\t<div class=\"footer-main desc-collapse showdown\" id=\"collapse-footer\">
\t\t";
            // line 5
            echo (isset($context["footer_block2"]) ? $context["footer_block2"] : null);
            echo "\t\t\t
\t</div>
\t
\t<div class=\"button-toggle hidden-lg hidden-md\">
         <a class=\"showmore\" data-toggle=\"collapse\" href=\"#\" aria-expanded=\"false\" aria-controls=\"collapse-footer\">
            <span class=\"toggle-more\">";
            // line 10
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "show_more"), "method");
            echo " <i class=\"fa fa-angle-down\"></i></span> 
            <span class=\"toggle-less\">";
            // line 11
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "show_less"), "method");
            echo " <i class=\"fa fa-angle-up\"></i></span>          
\t\t</a>        
\t</div>
\t";
        }
        // line 15
        echo "\t
\t
\t";
        // line 17
        echo " 
\t<div class=\"footer-bottom \">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 21
        $context["col_copyright"] = ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "imgpayment_status"), "method") || (isset($context["footer_block3"]) ? $context["footer_block3"] : null))) ? ("col-sm-4") : ("col-sm-12"));
        // line 22
        echo "\t\t\t\t<div class=\"copyright ";
        echo (isset($context["col_copyright"]) ? $context["col_copyright"] : null);
        echo "\">
\t\t\t\t\t";
        // line 23
        if (twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "copyright"), "method"))) {
            // line 24
            echo "\t\t\t\t\t\t";
            echo (isset($context["powered"]) ? $context["powered"] : null);
            echo "
\t\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t\t";
            echo twig_replace_filter($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "copyright"), "method")), "method"), array("{year}" => twig_date_format_filter($this->env, "now", "Y")));
            echo "
\t\t\t\t\t";
        }
        // line 28
        echo "
\t\t\t\t</div>

\t\t\t\t";
        // line 31
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "imgpayment_status"), "method")) {
            echo " 
\t\t\t\t<div class=\"col-sm-8 footer-payment\">
\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"image/";
            // line 33
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "imgpayment"), "method");
            echo "\"  alt=\"imgpayment\">
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 35
        echo " 
\t\t\t\t";
        // line 36
        if ( !twig_test_empty((isset($context["footer_block3"]) ? $context["footer_block3"] : null))) {
            // line 37
            echo "\t\t\t\t<div class=\"col-sm-8 footer-menu\">
\t\t\t\t\t";
            // line 38
            echo (isset($context["footer_block3"]) ? $context["footer_block3"] : null);
            echo "\t\t\t
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 40
        echo " 
\t\t\t</div>
\t\t</div>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/footer/footer2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  106 => 38,  103 => 37,  101 => 36,  98 => 35,  92 => 33,  87 => 31,  82 => 28,  76 => 26,  70 => 24,  68 => 23,  63 => 22,  61 => 21,  55 => 17,  51 => 15,  44 => 11,  40 => 10,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  19 => 1,);
    }
}
/* <footer class="footer-container typefooter-{{typefooter ? typefooter : '2'}}">*/
/* 	{#======	FOOTER TOP	=======#}  */
/* 	{% if footer_block2 is not empty %}*/
/* 	<div class="footer-main desc-collapse showdown" id="collapse-footer">*/
/* 		{{footer_block2}}			*/
/* 	</div>*/
/* 	*/
/* 	<div class="button-toggle hidden-lg hidden-md">*/
/*          <a class="showmore" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapse-footer">*/
/*             <span class="toggle-more">{{ objlang.get('show_more') }} <i class="fa fa-angle-down"></i></span> */
/*             <span class="toggle-less">{{ objlang.get('show_less') }} <i class="fa fa-angle-up"></i></span>          */
/* 		</a>        */
/* 	</div>*/
/* 	{% endif %}*/
/* 	*/
/* 	*/
/* 	{#======	FOOTER BOTTOM	=======#} */
/* 	<div class="footer-bottom ">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				{% set col_copyright = soconfig.get_settings('imgpayment_status') or footer_block3 ? 'col-sm-4' : 'col-sm-12' %}*/
/* 				<div class="copyright {{ col_copyright }}">*/
/* 					{% if soconfig.get_settings('copyright') is empty %}*/
/* 						{{ powered }}*/
/* 					{% else %}*/
/* 						{{ soconfig.decode_entities(soconfig.get_settings('copyright'))|replace({'{year}': "now"|date("Y")}) }}*/
/* 					{% endif %}*/
/* */
/* 				</div>*/
/* */
/* 				{% if soconfig.get_settings('imgpayment_status')%} */
/* 				<div class="col-sm-8 footer-payment">*/
/* 					<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/{{  soconfig.get_settings('imgpayment') }}"  alt="imgpayment">*/
/* 				</div>*/
/* 				{% endif %} */
/* 				{% if footer_block3 is not empty %}*/
/* 				<div class="col-sm-8 footer-menu">*/
/* 					{{footer_block3}}			*/
/* 				</div>*/
/* 				{% endif %} */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </footer>*/
