<?php

/* so-buyshop/template/extension/module/so_deals/default.twig */
class __TwigTemplate_7b55805e07721e98b158e5bd84afa2709a97a3b88e5e98045782d85bb712f351 extends Twig_Template
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
        echo "<script>
//<![CDATA[
\tvar listdeal";
        // line 3
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " = [];
//]]>
</script>
<div class=\"module ";
        // line 6
        echo (isset($context["direction_class"]) ? $context["direction_class"] : null);
        echo " ";
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo "\">
\t<div class=\"head-title\">
\t\t<div class=\"head-title-inn\">
\t\t";
        // line 9
        if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
            // line 10
            echo "\t\t\t<h2 class=\"modtitle font-ct\"><span>";
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "</span></h2>
\t\t";
        }
        // line 11
        echo "\t
\t\t
\t\t";
        // line 13
        if ((isset($context["display_countdown"]) ? $context["display_countdown"] : null)) {
            // line 14
            echo "\t\t\t<div class=\"cslider-item-timer\">
\t\t\t\t<div class=\"timer-label\"><i class=\"fa fa-clock-o\"></i>";
            // line 15
            echo (isset($context["text_end_in"]) ? $context["text_end_in"] : null);
            echo "</div>
\t\t\t\t<div class=\"product_time_maxprice\"></div>
\t\t\t</div>
\t\t\t";
            // line 18
            $context["maxPriceToDate"] = "";
            // line 19
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 20
                echo "\t\t\t\t";
                $context["maxPriceToDate"] = $this->getAttribute($context["product"], "specialPriceToDate", array());
                // line 21
                echo "\t\t\t\t";
                if (((isset($context["maxPriceToDate"]) ? $context["maxPriceToDate"] : null) < $this->getAttribute($context["product"], "specialPriceToDate", array()))) {
                    // line 22
                    echo "\t\t\t\t\t";
                    $context["maxPriceToDate"] = $this->getAttribute($context["product"], "specialPriceToDate", array());
                    // line 23
                    echo "\t\t\t\t";
                }
                // line 24
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t
\t\t\t<script type=\"text/javascript\">
\t\t\t\t//<![CDATA[
\t\t\t\tlistdeal";
            // line 28
            echo (isset($context["module"]) ? $context["module"] : null);
            echo ".push('product_time_maxprice|";
            echo (isset($context["maxPriceToDate"]) ? $context["maxPriceToDate"] : null);
            echo "')
\t\t\t\t//]]> 
\t\t\t</script>
\t\t";
        }
        // line 32
        echo "\t\t</div>
\t</div>
\t";
        // line 34
        if (((isset($context["pre_text"]) ? $context["pre_text"] : null) != "")) {
            // line 35
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 36
            echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 39
        echo "\t<div class=\"modcontent\">
\t\t";
        // line 40
        if ((array_key_exists("list", $context) && (isset($context["list"]) ? $context["list"] : null))) {
            // line 41
            echo "\t\t\t";
            $context["tag_id"] = (("so_deals_" . twig_random($this->env)) . twig_date_format_filter($this->env, "now", "mdYHis"));
            // line 42
            echo "\t\t\t";
            $context["class_respl"] = ((((((((("preset00-" . (isset($context["nb_column0"]) ? $context["nb_column0"] : null)) . " preset01-") . (isset($context["nb_column1"]) ? $context["nb_column1"] : null)) . " preset02-") . (isset($context["nb_column2"]) ? $context["nb_column2"] : null)) . " preset03-") . (isset($context["nb_column3"]) ? $context["nb_column3"] : null)) . " preset04-") . (isset($context["nb_column4"]) ? $context["nb_column4"] : null));
            // line 43
            echo "\t\t\t";
            $context["i"] = 0;
            // line 44
            echo "\t\t\t";
            $context["count_item"] = twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : null));
            // line 45
            echo "\t\t\t";
            if (((isset($context["include_js"]) ? $context["include_js"] : null) == "owlCarousel")) {
                // line 46
                echo "\t\t\t\t";
                $this->loadTemplate(((((isset($context["config_theme"]) ? $context["config_theme"] : null) . "/template/extension/module/so_deals/") . (isset($context["store_layout"]) ? $context["store_layout"] : null)) . "_carousel.twig"), "so-buyshop/template/extension/module/so_deals/default.twig", 46)->display($context);
                // line 47
                echo "\t\t\t";
            } elseif (((isset($context["include_js"]) ? $context["include_js"] : null) == "slick")) {
                // line 48
                echo "\t\t\t\t";
                echo twig_include($this->env, $context, ((((isset($context["config_theme"]) ? $context["config_theme"] : null) . "/template/extension/module/so_deals/") . (isset($context["store_layout"]) ? $context["store_layout"] : null)) . "_slick.twig"));
                echo "
\t\t\t";
            } else {
                // line 50
                echo "\t\t\t\t";
                echo "";
                echo "
\t\t\t";
            }
            // line 52
            echo "\t\t";
        } else {
            // line 53
            echo "\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> 
\t\t\t\t";
            // line 54
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_noitem"), "method");
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t</div>
\t\t";
        }
        // line 58
        echo "\t</div>
\t\t
\t";
        // line 60
        if (((isset($context["post_text"]) ? $context["post_text"] : null) != "")) {
            // line 61
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 62
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 65
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_deals/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 65,  174 => 62,  171 => 61,  169 => 60,  165 => 58,  158 => 54,  155 => 53,  152 => 52,  146 => 50,  140 => 48,  137 => 47,  134 => 46,  131 => 45,  128 => 44,  125 => 43,  122 => 42,  119 => 41,  117 => 40,  114 => 39,  108 => 36,  105 => 35,  103 => 34,  99 => 32,  90 => 28,  85 => 25,  79 => 24,  76 => 23,  73 => 22,  70 => 21,  67 => 20,  62 => 19,  60 => 18,  54 => 15,  51 => 14,  49 => 13,  45 => 11,  39 => 10,  37 => 9,  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <script>*/
/* //<![CDATA[*/
/* 	var listdeal{{ module }} = [];*/
/* //]]>*/
/* </script>*/
/* <div class="module {{ direction_class }} {{ class_suffix }}">*/
/* 	<div class="head-title">*/
/* 		<div class="head-title-inn">*/
/* 		{% if disp_title_module %}*/
/* 			<h2 class="modtitle font-ct"><span>{{ head_name }}</span></h2>*/
/* 		{% endif %}	*/
/* 		*/
/* 		{% if display_countdown %}*/
/* 			<div class="cslider-item-timer">*/
/* 				<div class="timer-label"><i class="fa fa-clock-o"></i>{{ text_end_in }}</div>*/
/* 				<div class="product_time_maxprice"></div>*/
/* 			</div>*/
/* 			{% set maxPriceToDate ='' %}*/
/* 			{% for product in list %}*/
/* 				{% set maxPriceToDate =  product.specialPriceToDate  %}*/
/* 				{% if maxPriceToDate < product.specialPriceToDate  %}*/
/* 					{% set maxPriceToDate =  product.specialPriceToDate  %}*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 			*/
/* 			<script type="text/javascript">*/
/* 				//<![CDATA[*/
/* 				listdeal{{ module }}.push('product_time_maxprice|{{ maxPriceToDate }}')*/
/* 				//]]> */
/* 			</script>*/
/* 		{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* 	{% if pre_text != '' %}*/
/* 		<div class="form-group">*/
/* 			{{ pre_text }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	<div class="modcontent">*/
/* 		{% if list is defined and list %}*/
/* 			{% set tag_id = 'so_deals_' ~ random() ~ "now"|date("mdYHis") %}*/
/* 			{% set class_respl = 'preset00-'~nb_column0~' preset01-'~nb_column1~' preset02-'~nb_column2~' preset03-'~nb_column3~' preset04-'~nb_column4 %}*/
/* 			{% set i = 0 %}*/
/* 			{% set count_item = list|length %}*/
/* 			{% if include_js == 'owlCarousel' %}*/
/* 				{% include (config_theme~'/template/extension/module/so_deals/'~store_layout~'_carousel.twig') %}*/
/* 			{% elseif include_js == 'slick' %}*/
/* 				{{ include (config_theme~'/template/extension/module/so_deals/'~store_layout~'_slick.twig') }}*/
/* 			{% else %}*/
/* 				{{ '' }}*/
/* 			{% endif %}*/
/* 		{% else %}*/
/* 			<div class="alert alert-info"><i class="fa fa-info-circle"></i> */
/* 				{{ objlang.get('text_noitem') }}*/
/* 				<button type="button" class="close" data-dismiss="alert">×</button>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 	</div>*/
/* 		*/
/* 	{% if post_text != '' %}*/
/* 		<div class="form-group">*/
/* 			{{ post_text }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* </div>*/
/* */
