<?php

/* so-buyshop/template/soconfig/preloader.twig */
class __TwigTemplate_a2faf9bca57c13485e1d9dff04b0b268af67acf784996a63f7057ad141fdc84e extends Twig_Template
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
        // line 10
        echo "
";
        // line 11
        $context["preloader_no"] = ((((isset($context["preloader"]) ? $context["preloader"] : null) == "line")) ? ("no-pre-loader") : (""));
        // line 12
        $context["preloader_output"] = (("<div class=\"so-pre-loader " . (isset($context["preloader_no"]) ? $context["preloader_no"] : null)) . "\">");
        // line 13
        echo "
";
        // line 14
        if (((isset($context["preloader"]) ? $context["preloader"] : null) == "double-loop")) {
            // line 16
            echo "    ";
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"so-loader-center\"><div class=\"spinner-bounce\"><div class=\"double-bounce1\"></div><div class=\"double-bounce2\"></div></div></div>");
            // line 17
            echo "\t
";
        } elseif ((        // line 18
(isset($context["preloader"]) ? $context["preloader"] : null) == "cube-move")) {
            // line 20
            echo "\t";
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"so-loader-center\">");
            echo "  
\t";
            // line 21
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"spinner-cube\">");
            echo " 
\t\t";
            // line 22
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"cube1\"></div>");
            echo " 
\t\t";
            // line 23
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"cube2\"></div>");
            echo " 
\t";
            // line 24
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "</div>");
            echo "  
\t";
            // line 25
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "</div>");
            // line 26
            echo "\t
";
        } elseif ((        // line 27
(isset($context["preloader"]) ? $context["preloader"] : null) == "circle-bounce")) {
            // line 29
            echo "\t";
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"so-loader-center\">");
            echo "  
\t";
            // line 30
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"spinner-bounce2\">");
            echo " 
\t\t";
            // line 31
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"bounce1\"></div>");
            echo " 
\t\t";
            // line 32
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"bounce2\"></div>");
            echo " 
\t\t";
            // line 33
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"bounce3\"></div>");
            echo " 
\t";
            // line 34
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "</div>");
            echo "  
\t";
            // line 35
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "</div>");
            // line 36
            echo "

";
        } elseif ((        // line 38
(isset($context["preloader"]) ? $context["preloader"] : null) == "folding-cube")) {
            // line 40
            echo "\t";
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"so-loader-center\">");
            echo "  
\t";
            // line 41
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"spinner-folding-cube\">");
            echo " 
\t\t";
            // line 42
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"sk-cube1 sk-cube\"></div>");
            echo " 
\t\t";
            // line 43
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"sk-cube2 sk-cube\"></div>");
            echo " 
\t\t";
            // line 44
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"sk-cube4 sk-cube\"></div>");
            echo " 
\t\t";
            // line 45
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"sk-cube3 sk-cube\"></div>");
            echo " 
\t";
            // line 46
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "</div>");
            echo "  
\t";
            // line 47
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "</div>");
            // line 48
            echo "
";
        } else {
            // line 51
            echo "\t";
            // line 52
            echo "\t";
            $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "<div class=\"so-loader-line\" id=\"line-load\"></div>");
            echo " 
";
        }
        // line 54
        echo "
";
        // line 55
        $context["preloader_output"] = ((isset($context["preloader_output"]) ? $context["preloader_output"] : null) . "</div>");
        // line 56
        echo "
";
        // line 57
        echo (isset($context["preloader_output"]) ? $context["preloader_output"] : null);
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/soconfig/preloader.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 57,  148 => 56,  146 => 55,  143 => 54,  137 => 52,  135 => 51,  131 => 48,  129 => 47,  125 => 46,  121 => 45,  117 => 44,  113 => 43,  109 => 42,  105 => 41,  100 => 40,  98 => 38,  94 => 36,  92 => 35,  88 => 34,  84 => 33,  80 => 32,  76 => 31,  72 => 30,  67 => 29,  65 => 27,  62 => 26,  60 => 25,  56 => 24,  52 => 23,  48 => 22,  44 => 21,  39 => 20,  37 => 18,  34 => 17,  31 => 16,  29 => 14,  26 => 13,  24 => 12,  22 => 11,  19 => 10,);
    }
}
/* {# ======================*/
/* List Preloader Animation*/
/* ===========================*/
/* 1.Line loader*/
/* 2.Double Bounce loader*/
/* 3.Cube Move Loader*/
/* 4.Circle Bounce Loader*/
/* 5.Folding Cube loader*/
/* =========================#}*/
/* */
/* {% set preloader_no = (preloader == 'line') ? 'no-pre-loader' : '' %}*/
/* {% set preloader_output = '<div class="so-pre-loader '~ preloader_no ~'">' %}*/
/* */
/* {% if preloader == 'double-loop' %}*/
/* {# ===== 1.Double Bounce loader ======#}*/
/*     {% set preloader_output = preloader_output~'<div class="so-loader-center"><div class="spinner-bounce"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>'%}*/
/* 	*/
/* {% elseif preloader == 'cube-move' %}*/
/* {# ===== 3.Cube Move Loader======#}*/
/* 	{% set preloader_output = preloader_output~'<div class="so-loader-center">'%}  */
/* 	{% set preloader_output = preloader_output~'<div class="spinner-cube">'%} */
/* 		{% set preloader_output = preloader_output~'<div class="cube1"></div>'%} */
/* 		{% set preloader_output = preloader_output~'<div class="cube2"></div>'%} */
/* 	{% set preloader_output = preloader_output~'</div>'%}  */
/* 	{% set preloader_output = preloader_output~'</div>'%}*/
/* 	*/
/* {% elseif preloader == 'circle-bounce' %}*/
/* {# ===== 4.Circle Bounce Loader======#}*/
/* 	{% set preloader_output = preloader_output~'<div class="so-loader-center">'%}  */
/* 	{% set preloader_output = preloader_output~'<div class="spinner-bounce2">'%} */
/* 		{% set preloader_output = preloader_output~'<div class="bounce1"></div>'%} */
/* 		{% set preloader_output = preloader_output~'<div class="bounce2"></div>'%} */
/* 		{% set preloader_output = preloader_output~'<div class="bounce3"></div>'%} */
/* 	{% set preloader_output = preloader_output~'</div>'%}  */
/* 	{% set preloader_output = preloader_output~'</div>'%}*/
/* */
/* */
/* {% elseif preloader == 'folding-cube' %}*/
/* {# ===== 7.Folding Cube loader======#}*/
/* 	{% set preloader_output = preloader_output~'<div class="so-loader-center">'%}  */
/* 	{% set preloader_output = preloader_output~'<div class="spinner-folding-cube">'%} */
/* 		{% set preloader_output = preloader_output~'<div class="sk-cube1 sk-cube"></div>'%} */
/* 		{% set preloader_output = preloader_output~'<div class="sk-cube2 sk-cube"></div>'%} */
/* 		{% set preloader_output = preloader_output~'<div class="sk-cube4 sk-cube"></div>'%} */
/* 		{% set preloader_output = preloader_output~'<div class="sk-cube3 sk-cube"></div>'%} */
/* 	{% set preloader_output = preloader_output~'</div>'%}  */
/* 	{% set preloader_output = preloader_output~'</div>'%}*/
/* */
/* {% else %}*/
/* {# ===== 9.Circle loader ======#}*/
/* 	{# ===== 8.Line loader======#}*/
/* 	{% set preloader_output = preloader_output~'<div class="so-loader-line" id="line-load"></div>'%} */
/* {% endif %}*/
/* */
/* {% set preloader_output = preloader_output ~ '</div>' %}*/
/* */
/* {{preloader_output}}*/
