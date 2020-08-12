<?php

/* so-buyshop/template/extension/module/so_home_slider/default.twig */
class __TwigTemplate_5ba91e309739e56c580a7a34a9ccfcda6566e818d6d51cb61ca86854b31901e9 extends Twig_Template
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
        $context["count_item"] = twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : null));
        // line 2
        echo "
<div class=\"module sohomepage-slider ";
        // line 3
        echo (isset($context["direction_class"]) ? $context["direction_class"] : null);
        echo "  ";
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo "\">
    ";
        // line 4
        if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
            // line 5
            echo "      <h3 class=\"modtitle\">";
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "</h3>
    ";
        }
        // line 7
        echo "
";
        // line 8
        if ((isset($context["pre_text"]) ? $context["pre_text"] : null)) {
            // line 9
            echo "  <div class=\"form-group\">
    ";
            // line 10
            echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
            echo "
  </div>
";
        }
        // line 13
        echo "

<div class=\"modcontent\">
    ";
        // line 16
        if ((isset($context["list"]) ? $context["list"] : null)) {
            echo " 
    <div id=\"sohomepage-slider";
            // line 17
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\">
        <div class=\"so-homeslider sohomeslider-inner-";
            // line 18
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "        
            <div class=\"item\">
                <a href=\"";
                // line 21
                echo $this->getAttribute($context["item"], "url", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["item"], "title", array());
                echo "\" target=\"";
                echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                echo "\">
                    <img class=\"responsive\" src=\"";
                // line 22
                echo $this->getAttribute($context["item"], "thumb", array());
                echo "\"  alt=\"";
                echo $this->getAttribute($context["item"], "title", array());
                echo "\" />
                </a>
                <div class=\"sohomeslider-description\">
                    ";
                // line 25
                if ($this->getAttribute($context["item"], "caption", array())) {
                    echo " <h2>";
                    echo $this->getAttribute($context["item"], "caption", array());
                    echo "</h2> ";
                }
                // line 26
                echo "                    ";
                echo $this->getAttribute($context["item"], "description", array());
                echo "              
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </div>

    <script type=\"text/javascript\">
      var total_item = ";
            // line 33
            echo (isset($context["count_item"]) ? $context["count_item"] : null);
            echo " ;
      \$(\".sohomeslider-inner-";
            // line 34
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\").owlCarousel2({
      rtl: ";
            // line 35
            echo (isset($context["direction"]) ? $context["direction"] : null);
            echo ",
          animateOut: '";
            // line 36
            echo (isset($context["animateOut"]) ? $context["animateOut"] : null);
            echo "',
          animateIn: '";
            // line 37
            echo (isset($context["animateIn"]) ? $context["animateIn"] : null);
            echo "',
          autoplay: ";
            // line 38
            echo (isset($context["autoplay"]) ? $context["autoplay"] : null);
            echo ",
          autoplayTimeout: ";
            // line 39
            echo (isset($context["autoplayTimeout"]) ? $context["autoplayTimeout"] : null);
            echo ",
          autoplaySpeed:  ";
            // line 40
            echo (isset($context["autoplaySpeed"]) ? $context["autoplaySpeed"] : null);
            echo ",
          smartSpeed: 500,
          autoplayHoverPause: ";
            // line 42
            echo (isset($context["autoplayHoverPause"]) ? $context["autoplayHoverPause"] : null);
            echo ",
          startPosition: ";
            // line 43
            echo (isset($context["startPosition"]) ? $context["startPosition"] : null);
            echo ",
          mouseDrag:  ";
            // line 44
            echo (isset($context["mouseDrag"]) ? $context["mouseDrag"] : null);
            echo ",
          touchDrag: ";
            // line 45
            echo (isset($context["touchDrag"]) ? $context["touchDrag"] : null);
            echo ",
          dots: ";
            // line 46
            echo (isset($context["dots"]) ? $context["dots"] : null);
            echo ",
          autoWidth: false,
          dotClass: \"owl2-dot\",
          dotsClass: \"owl2-dots\",
          loop: ";
            // line 50
            echo (isset($context["loop"]) ? $context["loop"] : null);
            echo ",
          navText: [\"Next\", \"Prev\"],
          navClass: [\"owl2-prev\", \"owl2-next\"],
          responsive: {
          0:{ items: ";
            // line 54
            echo (isset($context["nb_column4"]) ? $context["nb_column4"] : null);
            echo ",
            nav: total_item <= ";
            // line 55
            echo (isset($context["nb_column4"]) ? $context["nb_column4"] : null);
            echo " ? false : ((";
            echo (isset($context["nav"]) ? $context["nav"] : null);
            echo " ) ? true: false),
          },
          480:{ items: ";
            // line 57
            echo (isset($context["nb_column3"]) ? $context["nb_column3"] : null);
            echo ",
            nav: total_item <= ";
            // line 58
            echo (isset($context["nb_column3"]) ? $context["nb_column3"] : null);
            echo " ? false : ((";
            echo (isset($context["nav"]) ? $context["nav"] : null);
            echo " ) ? true: false),
          },
          768:{ items: ";
            // line 60
            echo (isset($context["nb_column2"]) ? $context["nb_column2"] : null);
            echo ",
            nav: total_item <= ";
            // line 61
            echo (isset($context["nb_column2"]) ? $context["nb_column2"] : null);
            echo " ? false : ((";
            echo (isset($context["nav"]) ? $context["nav"] : null);
            echo " ) ? true: false),
          },
          992:{ items: ";
            // line 63
            echo (isset($context["nb_column1"]) ? $context["nb_column1"] : null);
            echo ",
            nav: total_item <= ";
            // line 64
            echo (isset($context["nb_column1"]) ? $context["nb_column1"] : null);
            echo " ? false : ((";
            echo (isset($context["nav"]) ? $context["nav"] : null);
            echo " ) ? true: false),
          },
          1200:{ items: ";
            // line 66
            echo (isset($context["nb_column0"]) ? $context["nb_column0"] : null);
            echo ",
            nav: total_item <= ";
            // line 67
            echo (isset($context["nb_column0"]) ? $context["nb_column0"] : null);
            echo " ? false : ((";
            echo (isset($context["nav"]) ? $context["nav"] : null);
            echo " ) ? true: false),
          }
        },
      });
    </script>
    </div>
    ";
        } else {
            // line 73
            echo "  
        ";
            // line 74
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_noitem"), "method");
            echo "
    ";
        }
        // line 76
        echo "</div> <!--/.modcontent-->

";
        // line 78
        if ((isset($context["post_text"]) ? $context["post_text"] : null)) {
            // line 79
            echo "  <div class=\"form-group\">
    ";
            // line 80
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
  </div>
";
        }
        // line 83
        echo "

</div> 
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_home_slider/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 83,  254 => 80,  251 => 79,  249 => 78,  245 => 76,  240 => 74,  237 => 73,  225 => 67,  221 => 66,  214 => 64,  210 => 63,  203 => 61,  199 => 60,  192 => 58,  188 => 57,  181 => 55,  177 => 54,  170 => 50,  163 => 46,  159 => 45,  155 => 44,  151 => 43,  147 => 42,  142 => 40,  138 => 39,  134 => 38,  130 => 37,  126 => 36,  122 => 35,  118 => 34,  114 => 33,  109 => 30,  98 => 26,  92 => 25,  84 => 22,  76 => 21,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  52 => 13,  46 => 10,  43 => 9,  41 => 8,  38 => 7,  32 => 5,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set count_item = list|length %}*/
/* */
/* <div class="module sohomepage-slider {{direction_class}}  {{ class_suffix}}">*/
/*     {% if disp_title_module %}*/
/*       <h3 class="modtitle">{{ head_name}}</h3>*/
/*     {% endif %}*/
/* */
/* {% if pre_text %}*/
/*   <div class="form-group">*/
/*     {{ pre_text }}*/
/*   </div>*/
/* {% endif %}*/
/* */
/* */
/* <div class="modcontent">*/
/*     {% if list %} */
/*     <div id="sohomepage-slider{{ module}}">*/
/*         <div class="so-homeslider sohomeslider-inner-{{ module}}">*/
/*         {% for item in list %}        */
/*             <div class="item">*/
/*                 <a href="{{ item.url}}" title="{{ item.title}}" target="{{ item_link_target}}">*/
/*                     <img class="responsive" src="{{ item.thumb}}"  alt="{{ item.title}}" />*/
/*                 </a>*/
/*                 <div class="sohomeslider-description">*/
/*                     {% if item.caption %} <h2>{{ item.caption}}</h2> {% endif %}*/
/*                     {{ item.description}}              */
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*         </div>*/
/* */
/*     <script type="text/javascript">*/
/*       var total_item = {{ count_item }} ;*/
/*       $(".sohomeslider-inner-{{ module}}").owlCarousel2({*/
/*       rtl: {{ direction}},*/
/*           animateOut: '{{ animateOut}}',*/
/*           animateIn: '{{ animateIn}}',*/
/*           autoplay: {{ autoplay}},*/
/*           autoplayTimeout: {{ autoplayTimeout}},*/
/*           autoplaySpeed:  {{ autoplaySpeed}},*/
/*           smartSpeed: 500,*/
/*           autoplayHoverPause: {{ autoplayHoverPause}},*/
/*           startPosition: {{ startPosition}},*/
/*           mouseDrag:  {{ mouseDrag}},*/
/*           touchDrag: {{ touchDrag}},*/
/*           dots: {{ dots}},*/
/*           autoWidth: false,*/
/*           dotClass: "owl2-dot",*/
/*           dotsClass: "owl2-dots",*/
/*           loop: {{ loop}},*/
/*           navText: ["Next", "Prev"],*/
/*           navClass: ["owl2-prev", "owl2-next"],*/
/*           responsive: {*/
/*           0:{ items: {{ nb_column4}},*/
/*             nav: total_item <= {{ nb_column4 }} ? false : (({{ nav  }} ) ? true: false),*/
/*           },*/
/*           480:{ items: {{ nb_column3 }},*/
/*             nav: total_item <= {{ nb_column3 }} ? false : (({{ nav  }} ) ? true: false),*/
/*           },*/
/*           768:{ items: {{ nb_column2 }},*/
/*             nav: total_item <= {{ nb_column2 }} ? false : (({{ nav  }} ) ? true: false),*/
/*           },*/
/*           992:{ items: {{ nb_column1 }},*/
/*             nav: total_item <= {{ nb_column1 }} ? false : (({{ nav  }} ) ? true: false),*/
/*           },*/
/*           1200:{ items: {{ nb_column0 }},*/
/*             nav: total_item <= {{ nb_column0 }} ? false : (({{ nav  }} ) ? true: false),*/
/*           }*/
/*         },*/
/*       });*/
/*     </script>*/
/*     </div>*/
/*     {% else %}  */
/*         {{ objlang.get('text_noitem') }}*/
/*     {% endif %}*/
/* </div> <!--/.modcontent-->*/
/* */
/* {% if post_text %}*/
/*   <div class="form-group">*/
/*     {{ post_text }}*/
/*   </div>*/
/* {% endif %}*/
/* */
/* */
/* </div> */
/* */
