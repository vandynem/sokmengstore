<?php

/* extension/module/so_megamenu.twig */
class __TwigTemplate_683df54fb6d1ec9e34ef99ca2cef43f3c851157760fe66524fa32ff928222e45 extends Twig_Template
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
\t\t<div class=\"container-fluid\">
\t\t  \t<div class=\"pull-left\">
\t\t\t  \t<h1>";
        // line 6
        echo (isset($context["heading_title_so"]) ? $context["heading_title_so"] : null);
        echo "</h1>
\t\t\t  \t<ul class=\"breadcrumb\">
\t\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t\t  \t</ul>
\t\t\t</div>
\t  \t</div>
\t</div>
    <div class=\"container-fluid\" id=\"megamenu\">
    \t";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "\t    \t<div class=\"alert alert-danger\">";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
\t    ";
        } elseif (        // line 18
(isset($context["success"]) ? $context["success"] : null)) {
            // line 19
            echo "\t    \t<div class=\"alert alert-success\">";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
\t    ";
        }
        // line 21
        echo "
\t    <div class=\"panel panel-default\">
\t\t\t<form action=\"";
        // line 23
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"rows\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t<li ";
        // line 27
        if (((isset($context["selectedid"]) ? $context["selectedid"] : null) == 0)) {
            echo "class=\"active\" ";
        }
        echo "> <a href=\"";
        echo (isset($context["link_add"]) ? $context["link_add"] : null);
        echo "\"> <span class=\"fa fa-plus\"></span>";
        echo (isset($context["button_add_module"]) ? $context["button_add_module"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 28
        $context["i"] = 1;
        // line 29
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduletabs"]) ? $context["moduletabs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            // line 30
            echo "\t\t\t\t\t\t\t\t<li role=\"presentation\" ";
            if (($this->getAttribute($context["module"], "module_id", array()) == (isset($context["selectedid"]) ? $context["selectedid"] : null))) {
                echo " class=\"active\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo (isset($context["link_add"]) ? $context["link_add"] : null);
            echo "&module_id=";
            echo $this->getAttribute($context["module"], "module_id", array());
            echo "\" aria-controls=\"bannermodule-";
            echo $context["key"];
            echo "\"  >
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span> ";
            // line 32
            echo $this->getAttribute($context["module"], "name", array());
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 35
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 36
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"rows megacontent\">
\t\t\t\t\t\t<div class=\"col-md-12 col-xs-12 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"background clearfix\">
\t\t\t\t\t\t\t\t";
        // line 43
        if ((isset($context["moduleid"]) ? $context["moduleid"] : null)) {
            // line 44
            echo "\t\t\t\t\t\t\t\t\t<div class=\"left col-md-4 col-xs-12 col-sm-6 \">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "&action=create\" class=\"btn btn-primary\" > ";
            echo (isset($context["text_creat_new_item"]) ? $context["text_creat_new_item"] : null);
            echo "</a>

\t\t\t\t\t\t\t\t\t\t<a id=\"nestable-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-action=\"expand-all\" class=\"btn btn-primary\">";
            // line 48
            echo (isset($context["text_expand_all"]) ? $context["text_expand_all"] : null);
            echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-action=\"collapse-all\" class=\"btn btn-primary\">";
            // line 49
            echo (isset($context["text_collapse_all"]) ? $context["text_collapse_all"] : null);
            echo "</button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
            // line 51
            echo (isset($context["nestable_list"]) ? $context["nestable_list"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t<div id='sortDBfeedback' style=\"padding: 10px 0px 0px 0px\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 55
        echo "
\t\t\t\t\t\t\t\t";
        // line 56
        if ((((isset($context["action_type"]) ? $context["action_type"] : null) == "create") || ((isset($context["action_type"]) ? $context["action_type"] : null) == "edit"))) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t<div class=\"right col-md-8 col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"button-back\" class=\"button-save\" value=\"\" title=\"Configuration\"><i class=\"fa fa-cog\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 60
            if (((isset($context["action_type"]) ? $context["action_type"] : null) == "create")) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"button-create\" class=\"button-save\" value=\"\" title=\"Save\"><i class=\"fa fa-floppy-o\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 62
(isset($context["action_type"]) ? $context["action_type"] : null) == "edit")) {
                // line 63
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"button-edit\" class=\"button-save\" value=\"\" title=\"Save\"><i class=\"fa fa-floppy-o\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"button-save\" class=\"button-save\" value=\"\" title=\"Save\"><i class=\"fa fa-floppy-o\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            // line 68
            if (((isset($context["action_type"]) ? $context["action_type"] : null) == "edit")) {
                // line 69
                echo "\t\t\t\t\t\t\t\t\t\t\t<h4>";
                echo (isset($context["text_edit_item"]) ? $context["text_edit_item"] : null);
                echo " ";
                echo (isset($context["edit"]) ? $context["edit"] : null);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 70
                echo (isset($context["edit"]) ? $context["edit"] : null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t\t<h4>";
                echo (isset($context["text_creat_new_item"]) ? $context["text_creat_new_item"] : null);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 75
            echo (isset($context["text_name"]) ? $context["text_name"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 76
            $context["i"] = 0;
            // line 77
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 78
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 79
                echo "\t\t\t\t\t\t\t\t\t\t\t \t<input type=\"text\" name=\"name[";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["entry_description_name"]) ? $context["entry_description_name"] : null);
                echo "\" id=\"input-head-name-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                echo (($this->getAttribute((isset($context["name"]) ? $context["name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["name"]) ? $context["name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
                echo "\" class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? (" hide ") : (" first-name"));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"language\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 88
            echo (isset($context["text_class_menu"]) ? $context["text_class_menu"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-language\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"class_menu\" value=\"";
            // line 90
            echo (isset($context["class_menu"]) ? $context["class_menu"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h4 class=\"button_parent_config\">";
            // line 94
            echo (isset($context["text_parent_config"]) ? $context["text_parent_config"] : null);
            echo "</h4>(";
            echo (isset($context["text_parent_item"]) ? $context["text_parent_item"] : null);
            echo ")
\t\t\t\t\t\t\t\t\t\t<div id=\"text_parent_config\" class=\"collapse\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 97
            echo (isset($context["text_description"]) ? $context["text_description"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 98
            $context["i"] = 0;
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 100
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t\t\t \t<input type=\"text\" name=\"description[";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["entry_description_name"]) ? $context["entry_description_name"] : null);
                echo "\" id=\"input-head-des-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                echo (($this->getAttribute((isset($context["description"]) ? $context["description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
                echo "\" class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? (" hide ") : (" first-name"));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"des_language\">
\t\t\t\t\t\t\t\t\t\t\t\t  \t";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 105
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 111
            echo "Icon Thumb";
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 112
            echo (isset($context["src_icon"]) ? $context["src_icon"] : null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\"  /></a>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"icon\" value=\"";
            // line 113
            echo (isset($context["icon"]) ? $context["icon"] : null);
            echo "\" id=\"input-image\" />
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 117
            echo (isset($context["text_label_item"]) ? $context["text_label_item"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"label_item\" value=\"";
            // line 119
            echo (isset($context["label_item"]) ? $context["label_item"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 124
            echo (isset($context["text_icon_font"]) ? $context["text_icon_font"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"icon_font\" value=\"";
            // line 127
            echo (isset($context["icon_font"]) ? $context["icon_font"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:inline-block:color;#999;\">Icon name font awesome, user <a href=\"https://fontawesome.com/v4.7.0/\" target=\"_blank\"> Fontawesome 4.7</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 133
            echo (isset($context["text_type_link"]) ? $context["text_type_link"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"type_link\" class=\"type_link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 135
            if (((isset($context["type_link"]) ? $context["type_link"] : null) == 1)) {
                // line 136
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Url</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Category</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 139
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">Url</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Category</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 142
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input  type_link_url clearfix \" ";
            // line 145
            if (((isset($context["type_link"]) ? $context["type_link"] : null) == 1)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Url</p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"";
            // line 147
            echo $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "url", array());
            echo "\" name=\"link[url]\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input type_link_category clearfix\" ";
            // line 150
            if (((isset($context["type_link"]) ? $context["type_link"] : null) != 1)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 151
            echo (isset($context["text_categories"]) ? $context["text_categories"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"link[category]\">
\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"\">";
            // line 153
            echo (isset($context["text_all_categories"]) ? $context["text_all_categories"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t  \t";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 155
                echo "\t\t\t\t\t\t\t\t\t\t\t\t  \t\t<option value=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\" ";
                if (($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "category", array()) == $this->getAttribute($context["category"], "category_id", array()))) {
                    echo " ";
                    echo "selected";
                    echo " ";
                }
                echo ">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t  \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 161
            echo (isset($context["text_link_in_new_window"]) ? $context["text_link_in_new_window"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"new_window\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 163
            if (((isset($context["new_window"]) ? $context["new_window"] : null) == 1)) {
                // line 164
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 165
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 167
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 168
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 170
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 174
            echo (isset($context["text_status"]) ? $context["text_status"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"status\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 176
            if (((isset($context["status"]) ? $context["status"] : null) == 1)) {
                // line 177
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 178
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 180
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 181
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 183
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 187
            echo (isset($context["text_position"]) ? $context["text_position"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 189
            if (((isset($context["position"]) ? $context["position"] : null) == 1)) {
                // line 190
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                echo (isset($context["text_left"]) ? $context["text_left"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 191
                echo (isset($context["text_right"]) ? $context["text_right"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 193
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                echo (isset($context["text_left"]) ? $context["text_left"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 194
                echo (isset($context["text_right"]) ? $context["text_right"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 196
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 200
            echo (isset($context["text_submenu_width"]) ? $context["text_submenu_width"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"submenu_width\" value=\"";
            // line 201
            echo (isset($context["submenu_width"]) ? $context["submenu_width"] : null);
            echo "\"> <div>";
            echo (isset($context["text_example"]) ? $context["text_example"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 205
            echo (isset($context["text_display_submenu_on"]) ? $context["text_display_submenu_on"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"display_submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 207
            if (((isset($context["display_submenu"]) ? $context["display_submenu"] : null) == 0)) {
                // line 208
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">Hover</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 210
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Hover</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 212
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 213
            if (((isset($context["display_submenu"]) ? $context["display_submenu"] : null) == 2)) {
                // line 214
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">Hover intent</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 216
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Hover intent</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 218
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 219
            if (((isset($context["display_submenu"]) ? $context["display_submenu"] : null) == 1)) {
                // line 220
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Click</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 222
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Click</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 224
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"button_content_config\">";
            // line 227
            echo (isset($context["text_content_config"]) ? $context["text_content_config"] : null);
            echo "</h4>(";
            echo (isset($context["text_content_item"]) ? $context["text_content_item"] : null);
            echo ")
\t\t\t\t\t\t\t\t\t\t<div id=\"text_content_config\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 231
            echo (isset($context["text_content_width"]) ? $context["text_content_width"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content_width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 233
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 234
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["i"];
                echo "\" ";
                if (($context["i"] == (isset($context["content_width"]) ? $context["content_width"] : null))) {
                    echo " ";
                    echo "selected=\"selected\"";
                    echo " ";
                }
                echo ">";
                echo $context["i"];
                echo "/12</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 240
            echo (isset($context["text_content_type"]) ? $context["text_content_type"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content_type\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 242
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 0)) {
                // line 243
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">HTML</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 245
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">HTML</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 247
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 248
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 1)) {
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Product</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 251
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Product</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 253
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 254
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 2)) {
                // line 255
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Category</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 257
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">Category</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 259
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 260
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 3)) {
                // line 261
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Manufacture</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 263
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">Manufacture</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 265
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 266
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 4)) {
                // line 267
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">Image</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 269
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" selected=\"selected\">Image</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 271
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 272
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 5)) {
                // line 273
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">Subcategory</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 275
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\" selected=\"selected\">Subcategory</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 277
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 6)) {
                // line 278
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">Product List</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 280
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\" selected=\"selected\">Product List</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 282
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"content_type0\"";
            // line 284
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 0)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " class=\"content_type content_type_html\">
\t\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-top:20px\">HTML</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul id=\"language\" class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 288
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 289
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#content_html_";
                // line 290
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 291
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 298
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["lang_id"] = $this->getAttribute($context["language"], "language_id", array());
                // line 299
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"content_html_";
                // line 300
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" class=\"content_html tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"content[html][text][";
                // line 301
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" id=\"content_html_text_";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" class=\"form-control summernote\" data-toggle=\"summernote\">";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "html", array(), "array"), "text", array(), "array"), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "html", array(), "array"), "text", array(), "array"), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) : (""));
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 304
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"content_type1\" ";
            // line 308
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 1)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " class=\"content_type\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Products:<br><span style=\"font-size:11px;color:#808080\">(Autocomplete)</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"content[product][id]\" value=\"";
            // line 311
            echo $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "product", array()), "id", array());
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"product_autocomplete\" name=\"content[product][name]\" value=\"";
            // line 312
            echo $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "product", array()), "name", array());
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"content_type3\" ";
            // line 316
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 3)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " class=\"content_type\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Manufacture:<br><span style=\"font-size:11px;color:#808080\">(Autocomplete)</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"manufacture_autocomplete\" name=\"manufacture_autocomplete\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 321
            if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "manufacture", array(), "array"), "id", array(), "array")) {
                // line 322
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "manufacture", array()), "id", array()));
                foreach ($context['_seq'] as $context["key"] => $context["id_category"]) {
                    // line 323
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-category";
                    echo $context["id_category"];
                    echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "manufacture", array()), "name", array()), $context["key"], array(), "array");
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<input type=\"hidden\" name=\"content[manufacture][name][]\" value=\"";
                    // line 324
                    echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "manufacture", array()), "name", array()), $context["key"], array(), "array");
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<input type=\"hidden\" name=\"content[manufacture][id][]\" value=\"";
                    // line 325
                    echo $context["id_category"];
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['id_category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 328
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 329
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"content_type4\" ";
            // line 333
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 4)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " class=\"content_type\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Image:</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-content\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 336
            echo (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "image_link", array())) ? ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "image_link", array())) : ((isset($context["src_image_default"]) ? $context["src_image_default"] : null)));
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\"  /></a>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"content[image][link]\" value=\"";
            // line 337
            echo (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "link", array())) ? ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "link", array())) : ((isset($context["image_default"]) ? $context["image_default"] : null)));
            echo "\" id=\"input-image-content\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\" >
\t\t\t\t\t\t\t\t\t\t\t\t<p>Show Title</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content[image][show_title]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 342
            if ((($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "show_title", array()) == 1) && $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "show_title", array()))) {
                // line 343
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 345
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 347
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 348
            if ((($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "show_title", array()) != 0) && $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "show_title", array()))) {
                // line 349
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 351
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 353
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"content_type5\" ";
            // line 357
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 5)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " class=\"content_type\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select  multiple name=\"content[subcategory][category][]\" style=\"height: 200px;width:200px\">
\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"\" ";
            // line 361
            if ((($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "category", array()) != "") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "category", array()), 0, array(), "array") == ""))) {
                echo " ";
                echo "selected";
                echo " ";
            }
            echo ">";
            echo (isset($context["text_all_categories"]) ? $context["text_all_categories"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t  \t";
            // line 362
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 363
                echo "\t\t\t\t\t\t\t\t\t\t\t\t  \t\t<option value=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\" ";
                if ((($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "category", array()) != "") && twig_in_filter($this->getAttribute($context["category"], "category_id", array()), $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "category", array())))) {
                    echo " ";
                    echo "selected";
                    echo " ";
                }
                echo ">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t  \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 365
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Limit Level 1</p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"content[subcategory][limit_level_1]\" value=\"";
            // line 369
            echo (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "limit_level_1", array())) ? ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "limit_level_1", array())) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Limit Level 2</p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"content[subcategory][limit_level_2]\" value=\"";
            // line 373
            echo (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "limit_level_2", array())) ? ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "limit_level_2", array())) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Limit Level 3</p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"content[subcategory][limit_level_3]\" value=\"";
            // line 377
            echo (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "limit_level_3", array())) ? ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "limit_level_3", array())) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Show Title</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content[subcategory][show_title]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 382
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "show_title", array()) != 1)) {
                // line 383
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 385
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 387
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 388
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "show_title", array()) != 0)) {
                // line 389
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 391
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 393
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Show Image</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content[subcategory][show_image]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 398
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "show_image", array()) != 1)) {
                // line 399
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 401
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 403
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 404
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "show_image", array()) != 0)) {
                // line 405
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 407
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 409
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t                                    
\t\t                                    <div class=\"input clearfix\">
\t\t                                        <p>Columns</p>
\t\t                                        <select name=\"content[subcategory][columns]\">
\t\t                                            ";
            // line 415
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "columns", array()) != 1)) {
                // line 416
                echo "\t\t                                            \t<option value=\"1\">1</option>
\t\t                                            ";
            } else {
                // line 418
                echo "\t\t                                            \t<option value=\"1\" selected=\"selected\">1</option>
\t\t                                            ";
            }
            // line 420
            echo "\t\t                                            
\t\t                                            ";
            // line 421
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "columns", array()) != 2)) {
                // line 422
                echo "\t\t                                            \t<option value=\"2\">2</option>
\t\t                                            ";
            } else {
                // line 424
                echo "\t\t                                            \t<option value=\"2\" selected=\"selected\">2</option>
\t\t                                            ";
            }
            // line 426
            echo "
\t\t                                            ";
            // line 427
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "columns", array()) != 3)) {
                // line 428
                echo "\t\t                                            \t<option value=\"3\">3</option>
\t\t                                            ";
            } else {
                // line 430
                echo "\t\t                                            \t<option value=\"3\" selected=\"selected\">3</option>
\t\t                                            ";
            }
            // line 432
            echo "
\t\t                                            ";
            // line 433
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "columns", array()) != 4)) {
                // line 434
                echo "\t\t                                            \t<option value=\"4\">4</option>
\t\t                                            ";
            } else {
                // line 436
                echo "\t\t                                            \t<option value=\"4\" selected=\"selected\">4</option>
\t\t                                            ";
            }
            // line 438
            echo "
\t\t                                            ";
            // line 439
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "columns", array()) != 5)) {
                // line 440
                echo "\t\t                                            \t<option value=\"5\">5</option>
\t\t                                            ";
            } else {
                // line 442
                echo "\t\t                                            \t<option value=\"5\" selected=\"selected\">5</option>
\t\t                                            ";
            }
            // line 444
            echo "
\t\t                                            ";
            // line 445
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "columns", array()) != 6)) {
                // line 446
                echo "\t\t                                            \t<option value=\"6\">6</option>
\t\t                                            ";
            } else {
                // line 448
                echo "\t\t                                            \t<option value=\"6\" selected=\"selected\">6</option>
\t\t                                            ";
            }
            // line 450
            echo "\t\t                                        </select>
\t\t                                    </div>

\t\t                                    
\t\t                                    <div class=\"input clearfix\" id=\"submenu-type\">
\t\t                                        <p>Submenu type</p>
\t\t                                        <select name=\"content[subcategory][submenu]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 457
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu", array()) != 1)) {
                // line 458
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Hover</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 460
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Hover</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 462
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 463
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu", array()) != 2)) {
                // line 464
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Visible</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 466
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">Visible</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 468
            echo "\t\t                                        </select>
\t\t                                    </div>

\t\t                                    <div class=\"input clearfix\" ";
            // line 471
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu", array()) != 2)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " id=\"submenu-columns\">
\t\t                                    \t<p>Submenu columns</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content[subcategory][submenu_columns]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 474
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu_columns", array()) != 1)) {
                // line 475
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 477
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 479
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 480
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu_columns", array()) != 2)) {
                // line 481
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 483
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 485
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 486
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu_columns", array()) != 3)) {
                // line 487
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 489
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 491
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 492
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu_columns", array()) != 4)) {
                // line 493
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 495
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" selected=\"selected\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 497
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 498
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu_columns", array()) != 5)) {
                // line 499
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 501
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\" selected=\"selected\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 503
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 504
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu_columns", array()) != 6)) {
                // line 505
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 507
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\" selected=\"selected\">6</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 509
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"content_type6\" ";
            // line 513
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 6)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " class=\"content_type\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Limit</p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"content[productlist][limit]\" value=\"";
            // line 516
            echo (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "limit", array())) ? ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "limit", array())) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Type</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content[productlist][type]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 521
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "type", array()) != "new")) {
                // line 522
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"new\">New</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 524
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"new\" selected=\"selected\">New</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 526
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 527
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "type", array()) != "special")) {
                // line 528
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"special\">Special</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 530
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"special\" selected=\"selected\">Special</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 532
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 533
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "type", array()) != "bestseller")) {
                // line 534
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bestseller\">Best Seller</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 536
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bestseller\" selected=\"selected\">Best Seller</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 538
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 539
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "type", array()) != "popular")) {
                // line 540
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"popular\">Popular</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 542
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"popular\" selected=\"selected\">Popular</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 544
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Show Title</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content[productlist][show_title]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 549
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "show_title", array()) != 1)) {
                // line 550
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 552
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 554
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 555
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "show_title", array()) != 0)) {
                // line 556
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 558
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 560
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t                                    
\t\t                                    <div class=\"input clearfix\">
\t\t                                        <p>Columns</p>
\t\t                                        <select name=\"content[productlist][col]\">
\t\t                                            ";
            // line 566
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "col", array()) != 1)) {
                // line 567
                echo "\t\t                                            \t<option value=\"1\">1</option>
\t\t                                            ";
            } else {
                // line 569
                echo "\t\t                                            \t<option value=\"1\" selected=\"selected\">1</option>
\t\t                                            ";
            }
            // line 571
            echo "
\t\t                                            ";
            // line 572
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "col", array()) != 2)) {
                // line 573
                echo "\t\t                                            \t<option value=\"2\">2</option>
\t\t                                            ";
            } else {
                // line 575
                echo "\t\t                                            \t<option value=\"2\" selected=\"selected\">2</option>
\t\t                                            ";
            }
            // line 577
            echo "
\t\t                                            ";
            // line 578
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "col", array()) != 3)) {
                // line 579
                echo "\t\t                                            \t<option value=\"3\">3</option>
\t\t                                            ";
            } else {
                // line 581
                echo "\t\t                                            \t<option value=\"3\" selected=\"selected\">3</option>
\t\t                                            ";
            }
            // line 583
            echo "
\t\t                                            ";
            // line 584
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "col", array()) != 4)) {
                // line 585
                echo "\t\t                                            \t<option value=\"4\">4</option>
\t\t                                            ";
            } else {
                // line 587
                echo "\t\t                                            \t<option value=\"4\" selected=\"selected\">4</option>
\t\t                                            ";
            }
            // line 589
            echo "
\t\t                                            ";
            // line 590
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "col", array()) != 5)) {
                // line 591
                echo "\t\t                                            \t<option value=\"5\">5</option>
\t\t                                            ";
            } else {
                // line 593
                echo "\t\t                                            \t<option value=\"5\" selected=\"selected\">5</option>
\t\t                                            ";
            }
            // line 595
            echo "
\t\t                                            ";
            // line 596
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "col", array()) != 6)) {
                // line 597
                echo "\t\t                                            \t<option value=\"6\">6</option>
\t\t                                            ";
            } else {
                // line 599
                echo "\t\t                                            \t<option value=\"6\" selected=\"selected\">6</option>
\t\t                                            ";
            }
            // line 601
            echo "\t\t                                        </select>
\t\t                                    </div>                                        
\t\t\t\t\t\t\t\t\t\t</div>

\t\t                                <div id=\"content_type2\" ";
            // line 605
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 2)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " class=\"content_type\">
\t\t                                    <h5 style=\"margin-top:20px\">Categories</h5>
\t\t                                    <div class=\"input clearfix\">
\t\t                                        <p>Add categories<br><span style=\"font-size:11px;color:#808080\">(Autocomplete)</span></p>
\t\t                                        <input type=\"text\" id=\"categories_autocomplete\" value=\"\">
\t\t                                    </div>
\t\t                                    <div class=\"input clearfix\">
\t\t                                        <p>Sort categories</p>
\t\t                                        <div class=\"cf nestable-lists\">
\t\t                                            <div class=\"dd\" id=\"sort_categories\">
\t\t                                                <ol class=\"dd-list\">
\t\t                                                    ";
            // line 616
            echo (isset($context["list_categories"]) ? $context["list_categories"] : null);
            echo "
\t\t                                                </ol>
\t\t                                            </div>
\t\t                                            <input type=\"hidden\" id=\"sort_categories_data\" name=\"content[categories][categories]\" value=\"";
            // line 619
            echo ((twig_test_iterable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "categories", array()))) ? ("") : ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "categories", array())));
            echo "\" />
\t\t                                        </div>
\t\t                                    </div>
\t\t                                    
\t\t                                    <div class=\"input clearfix\">
\t\t                                        <p>Columns</p>
\t\t                                        <select name=\"content[categories][columns]\">
\t\t                                            ";
            // line 626
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "columns", array()) != 1)) {
                // line 627
                echo "\t\t                                            \t<option value=\"1\">1</option>
\t\t                                            ";
            } else {
                // line 629
                echo "\t\t                                            \t<option value=\"1\" selected=\"selected\">1</option>
\t\t                                            ";
            }
            // line 631
            echo "
\t\t                                            ";
            // line 632
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "columns", array()) != 2)) {
                // line 633
                echo "\t\t                                            \t<option value=\"2\">2</option>
\t\t                                            ";
            } else {
                // line 635
                echo "\t\t                                            \t<option value=\"2\" selected=\"selected\">2</option>
\t\t                                            ";
            }
            // line 637
            echo "
\t\t                                            ";
            // line 638
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "columns", array()) != 3)) {
                // line 639
                echo "\t\t                                            \t<option value=\"3\">3</option>
\t\t                                            ";
            } else {
                // line 641
                echo "\t\t                                            <option value=\"3\" selected=\"selected\">3</option>
\t\t                                            ";
            }
            // line 643
            echo "
\t\t                                            ";
            // line 644
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "columns", array()) != 4)) {
                // line 645
                echo "\t\t                                            \t<option value=\"4\">4</option>
\t\t                                            ";
            } else {
                // line 647
                echo "\t\t                                            \t<option value=\"4\" selected=\"selected\">4</option>
\t\t                                            ";
            }
            // line 649
            echo "
\t\t                                            ";
            // line 650
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "columns", array()) != 5)) {
                // line 651
                echo "\t\t                                            \t<option value=\"5\">5</option>
\t\t                                            ";
            } else {
                // line 653
                echo "\t\t                                            \t<option value=\"5\" selected=\"selected\">5</option>
\t\t                                            ";
            }
            // line 655
            echo "
\t\t                                            ";
            // line 656
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "columns", array()) != 6)) {
                // line 657
                echo "\t\t                                            \t<option value=\"6\">6</option>
\t\t                                            ";
            } else {
                // line 659
                echo "\t\t                                            \t<option value=\"6\" selected=\"selected\">6</option>
\t\t                                            ";
            }
            // line 661
            echo "\t\t                                        </select>
\t\t                                    </div>

\t\t                                    <div class=\"input clearfix\" id=\"submenu-type\">
\t\t                                        <p>Submenu type</p>
\t\t                                        <select name=\"content[categories][submenu]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 667
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu", array()) != 1)) {
                // line 668
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Hover</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 670
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Hover</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 672
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 673
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu", array()) != 2)) {
                // line 674
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Visible</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 676
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">Visible</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 678
            echo "\t\t                                        </select>
\t\t                                    </div>

\t\t                                    <div class=\"input clearfix\" ";
            // line 681
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu", array()) != 2)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " id=\"submenu-columns\">
\t\t                                    \t<p>Submenu columns</p>
\t\t                                    \t<select name=\"content[categories][submenu_columns]\">
\t\t                                            ";
            // line 684
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu_columns", array()) != 1)) {
                // line 685
                echo "\t\t                                            \t<option value=\"1\">1</option>
\t\t                                            ";
            } else {
                // line 687
                echo "\t\t                                            \t<option value=\"1\" selected=\"selected\">1</option>
\t\t                                            ";
            }
            // line 689
            echo "
\t\t                                            ";
            // line 690
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu_columns", array()) != 2)) {
                // line 691
                echo "\t\t                                            \t<option value=\"2\">2</option>
\t\t                                            ";
            } else {
                // line 693
                echo "\t\t                                            \t<option value=\"2\" selected=\"selected\">2</option>
\t\t                                            ";
            }
            // line 695
            echo "
\t\t                                            ";
            // line 696
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu_columns", array()) != 3)) {
                // line 697
                echo "\t\t                                            \t<option value=\"3\">3</option>
\t\t                                            ";
            } else {
                // line 699
                echo "\t\t                                            \t<option value=\"3\" selected=\"selected\">3</option>
\t\t                                            ";
            }
            // line 701
            echo "
\t\t                                            ";
            // line 702
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu_columns", array()) != 4)) {
                // line 703
                echo "\t\t                                            \t<option value=\"4\">4</option>
\t\t                                            ";
            } else {
                // line 705
                echo "\t\t                                            \t<option value=\"4\" selected=\"selected\">4</option>
\t\t                                            ";
            }
            // line 707
            echo "
\t\t                                            ";
            // line 708
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu_columns", array()) != 5)) {
                // line 709
                echo "\t\t                                            \t<option value=\"5\">5</option>
\t\t                                            ";
            } else {
                // line 711
                echo "\t\t                                            \t<option value=\"5\" selected=\"selected\">5</option>
\t\t                                            ";
            }
            // line 713
            echo "
\t\t                                            ";
            // line 714
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu_columns", array()) != 6)) {
                // line 715
                echo "\t\t                                            \t<option value=\"6\">6</option>
\t\t                                            ";
            } else {
                // line 717
                echo "\t\t                                            \t<option value=\"6\" selected=\"selected\">6</option>
\t\t                                            ";
            }
            // line 719
            echo "\t\t                                    \t</select>
\t\t                            \t\t</div>
\t\t                    \t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t    \t\t\t\t";
        } else {
            // line 725
            echo "\t\t    \t\t\t\t\t<div class=\"right col-md-8 col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"button-close\" class=\"button-save\" value=\"\" title=\"Close\"><i class=\"fa fa-reply\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"button-save\" class=\"button-save\" value=\"\" title=\"Save\"><i class=\"fa fa-floppy-o\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t    
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"moduleid\" value=\"";
            // line 731
            echo (isset($context["moduleid"]) ? $context["moduleid"] : null);
            echo "\" />
\t\t    \t\t\t\t\t\t<h4><p>";
            // line 732
            echo (isset($context["text_basic_configuration"]) ? $context["text_basic_configuration"] : null);
            echo "</p></h4>
\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 734
            if ((isset($context["module_id"]) ? $context["module_id"] : null)) {
                // line 735
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<p>Import Module</p>
\t\t\t\t\t\t\t\t\t\t\t<select name=\"import_module\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 738
                if ((isset($context["modules"]) ? $context["modules"] : null)) {
                    // line 739
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">No Import</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 740
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                        // line 741
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["module"], "module_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["module"], "name", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 743
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 744
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 747
            echo "\t\t    
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 749
            echo (isset($context["text_name"]) ? $context["text_name"] : null);
            echo "</p>
\t\t\t\t\t\t                <input type=\"text\" name=\"name\" value=\"";
            // line 750
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\"  id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t        </div>
\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 754
            echo (isset($context["entry_head_name"]) ? $context["entry_head_name"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t";
            // line 755
            $context["i"] = 0;
            // line 756
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 757
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 758
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"head_name[";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["entry_head_name"]) ? $context["entry_head_name"] : null);
                echo "\" id=\"input-headname-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                echo (($this->getAttribute((isset($context["head_name"]) ? $context["head_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["head_name"]) ? $context["head_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
                echo "\" class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? (" hide ") : (" first-name"));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 760
            echo "\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"head_name_language\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 761
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 762
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 764
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 768
            echo (isset($context["entry_display_title_module"]) ? $context["entry_display_title_module"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<select name=\"disp_title_module\" id=\"input-disp_title_module\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 770
            if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
                // line 771
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 772
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 774
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 775
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 777
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 781
            echo (isset($context["text_status"]) ? $context["text_status"] : null);
            echo "</p>
\t\t\t\t\t\t                <select name=\"status\">
\t\t\t\t\t                        ";
            // line 783
            if ((isset($context["status"]) ? $context["status"] : null)) {
                // line 784
                echo "\t\t\t\t\t\t                        <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t                        <option value=\"0\">";
                // line 785
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t                        ";
            } else {
                // line 787
                echo "\t\t\t\t\t\t                        <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t                        <option value=\"0\" selected=\"selected\">";
                // line 788
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t                        ";
            }
            // line 790
            echo "\t\t\t\t\t\t                </select>
\t\t\t\t\t\t\t        </div>
\t\t\t
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 794
            echo (isset($context["text_use_cache"]) ? $context["text_use_cache"] : null);
            echo "</p>
\t\t\t\t\t\t                <label class=\"radio-inline\">
\t\t\t\t\t                        ";
            // line 796
            if ((isset($context["use_cache"]) ? $context["use_cache"] : null)) {
                // line 797
                echo "\t\t\t\t\t                        \t<input type=\"radio\" name=\"use_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t                        \t";
                // line 798
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t                        ";
            } else {
                // line 800
                echo "\t\t\t\t\t                        \t<input type=\"radio\" name=\"use_cache\" value=\"1\" />
\t\t\t\t\t                        \t";
                // line 801
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t                        ";
            }
            // line 803
            echo "\t\t\t\t\t\t                </label>
\t\t\t\t\t\t                <label class=\"radio-inline\">
\t\t\t\t\t                        ";
            // line 805
            if ((isset($context["use_cache"]) ? $context["use_cache"] : null)) {
                // line 806
                echo "\t\t\t\t\t                        \t<input type=\"radio\" name=\"use_cache\" value=\"0\" />\t\t\t\t                        \t
\t\t\t\t\t                        \t";
                // line 807
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t                        ";
            } else {
                // line 809
                echo "\t\t\t\t\t                        \t<input type=\"radio\" name=\"use_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t                        \t";
                // line 810
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t                        ";
            }
            // line 812
            echo "\t\t\t\t\t\t                </label>
\t\t\t\t\t\t\t        </div>
\t\t    
\t\t\t\t\t\t\t        <div class=\"input clearfix\" id=\"input-cache_time_form\">
\t\t\t\t\t\t\t                <p>";
            // line 816
            echo (isset($context["text_cache_time"]) ? $context["text_cache_time"] : null);
            echo "</p>
\t\t\t\t\t\t\t                <input type=\"text\" name=\"cache_time\" value=\"";
            // line 817
            echo (isset($context["cache_time"]) ? $context["cache_time"] : null);
            echo "\"  id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t        </div>
\t\t    
\t\t\t        \t\t\t\t<h4 style=\"margin-top:20px\">";
            // line 820
            echo (isset($context["text_design_configuration"]) ? $context["text_design_configuration"] : null);
            echo "</h4>        
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 822
            echo (isset($context["text_orientation"]) ? $context["text_orientation"] : null);
            echo "</p>
\t\t\t\t\t\t                <select name=\"orientation\">
\t\t\t\t\t                        ";
            // line 824
            if ((isset($context["orientation"]) ? $context["orientation"] : null)) {
                // line 825
                echo "\t\t\t\t\t                        \t<option value=\"0\">Horizontal</option>
\t\t\t\t\t                        \t<option value=\"1\" selected=\"selected\">Vertical</option>
\t\t\t\t\t                        ";
            } else {
                // line 828
                echo "\t\t\t\t\t\t                        <option value=\"0\" selected=\"selected\">Horizontal</option>
\t\t\t\t\t\t                        <option value=\"1\">Vertical</option>
\t\t\t\t\t                        ";
            }
            // line 831
            echo "\t\t\t\t\t\t                </select>
\t\t\t\t\t\t\t        </div>

\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 835
            echo (isset($context["text_class_menu"]) ? $context["text_class_menu"] : null);
            echo "</p>
\t\t\t\t\t\t                <input type=\"text\" name=\"class_menu\" value=\"";
            // line 836
            echo (isset($context["class_menu"]) ? $context["class_menu"] : null);
            echo "\"  id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 840
            echo (isset($context["text_number_load_vertical"]) ? $context["text_number_load_vertical"] : null);
            echo "</p>
\t\t\t\t\t\t                <input type=\"text\" name=\"show_itemver\" value=\"";
            // line 841
            echo (isset($context["show_itemver"]) ? $context["show_itemver"] : null);
            echo "\"  id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t        </div>
\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 845
            echo (isset($context["text_navigation_text"]) ? $context["text_navigation_text"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t";
            // line 846
            $context["i"] = 0;
            // line 847
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 848
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 849
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"navigation_text[";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["text_navigation_text"]) ? $context["text_navigation_text"] : null);
                echo "\" id=\"input-text-navigation-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                if ($this->getAttribute((isset($context["navigation_text"]) ? $context["navigation_text"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo " ";
                    echo $this->getAttribute((isset($context["navigation_text"]) ? $context["navigation_text"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo " ";
                }
                echo "\" class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? (" hide ") : (" first-name"));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 851
            echo "\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"navigation_language\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 852
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 853
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 855
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t    
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 859
            echo (isset($context["text_expand_menu_bar"]) ? $context["text_expand_menu_bar"] : null);
            echo "</p>
\t\t\t\t\t\t                <select name=\"full_width\">
\t\t\t\t\t                        ";
            // line 861
            if ((isset($context["full_width"]) ? $context["full_width"] : null)) {
                // line 862
                echo "\t\t\t\t\t\t                        <option value=\"1\" selected=\"selected\">Yes</option>
\t\t\t\t\t\t                        <option value=\"0\">No</option>
\t\t\t\t\t                        ";
            } else {
                // line 865
                echo "\t\t\t\t\t\t                        <option value=\"1\">Yes</option>
\t\t\t\t\t\t                        <option value=\"0\" selected=\"selected\">No</option>
\t\t\t\t\t                        ";
            }
            // line 868
            echo "\t\t\t\t\t\t                </select>
\t\t\t\t\t\t\t        </div>
\t\t    
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 872
            echo (isset($context["text_home_item"]) ? $context["text_home_item"] : null);
            echo "</p>
\t\t\t\t\t\t                <select name=\"home_item\">
\t\t\t\t\t                        ";
            // line 874
            if (((isset($context["home_item"]) ? $context["home_item"] : null) == "icon")) {
                // line 875
                echo "\t\t\t\t\t                        \t<option value=\"icon\" selected=\"selected\">Icon</option>
\t\t\t\t\t                        ";
            } else {
                // line 877
                echo "\t\t\t\t\t                        \t<option value=\"icon\">Icon</option>
\t\t\t\t\t                        ";
            }
            // line 879
            echo "\t\t\t\t\t                        
\t\t\t\t\t                        ";
            // line 880
            if (((isset($context["home_item"]) ? $context["home_item"] : null) == "text")) {
                // line 881
                echo "\t\t\t\t\t                        \t<option value=\"text\" selected=\"selected\">Text</option>
\t\t\t\t\t                        ";
            } else {
                // line 883
                echo "\t\t\t\t\t                        \t<option value=\"text\">Text</option>
\t\t\t\t\t                        ";
            }
            // line 885
            echo "
\t\t\t\t\t                        ";
            // line 886
            if (((isset($context["home_item"]) ? $context["home_item"] : null) == "disabled")) {
                // line 887
                echo "\t\t\t\t\t                        \t<option value=\"disabled\" selected=\"selected\">Disabled</option>
\t\t\t\t\t                        ";
            } else {
                // line 889
                echo "\t\t\t\t\t                        \t<option value=\"disabled\">Disabled</option>
\t\t\t\t\t                        ";
            }
            // line 891
            echo "\t\t\t\t\t\t                </select>
\t\t\t\t\t\t\t        </div>
\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 895
            echo (isset($context["text_home_text"]) ? $context["text_home_text"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t";
            // line 896
            $context["i"] = 0;
            // line 897
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 898
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 899
                echo "\t\t\t\t\t\t\t\t\t\t \t<input type=\"text\" name=\"home_text[";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["text_home_text"]) ? $context["text_home_text"] : null);
                echo "\" id=\"input-home-text-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                if ($this->getAttribute((isset($context["home_text"]) ? $context["home_text"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo " ";
                    echo $this->getAttribute((isset($context["home_text"]) ? $context["home_text"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo " ";
                }
                echo "\" class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? (" hide ") : (" first-name"));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 901
            echo "\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"home_text_language\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 902
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 903
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 905
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>        

\t\t    \t\t\t\t\t\t<h4 style=\"margin-top:20px\">";
            // line 908
            echo (isset($context["text_jquery_animations"]) ? $context["text_jquery_animations"] : null);
            echo "</h4>        
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 910
            echo (isset($context["text_animation"]) ? $context["text_animation"] : null);
            echo "</p>
\t\t\t\t\t\t                <div>
\t\t\t\t\t                        <input type=\"radio\" value=\"slide\" name=\"animation\" ";
            // line 912
            if (((isset($context["animation"]) ? $context["animation"] : null) == "slide")) {
                echo " ";
                echo "checked";
                echo " ";
            }
            echo "> Slide<br>
\t\t\t\t\t                        <input type=\"radio\" value=\"fade\" name=\"animation\" ";
            // line 913
            if (((isset($context["animation"]) ? $context["animation"] : null) == "fade")) {
                echo " ";
                echo "checked";
                echo " ";
            }
            echo "> Fade<br>
\t\t\t\t\t                        <input type=\"radio\" value=\"none\" name=\"animation\" ";
            // line 914
            if (((isset($context["animation"]) ? $context["animation"] : null) == "none")) {
                echo " ";
                echo "checked";
                echo " ";
            }
            echo "> None
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t        </div>
\t\t    
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 919
            echo (isset($context["text_animation_time"]) ? $context["text_animation_time"] : null);
            echo "</p>
\t\t\t\t\t\t                <input type=\"text\" name=\"animation_time\" style=\"width:50px;margin-right:10px\" value=\"";
            // line 920
            echo (isset($context["animation_time"]) ? $context["animation_time"] : null);
            echo "\">
\t\t\t\t\t\t                <div>ms</div>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 925
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\">
    \$('#language a:first').tab('show');
    if(\$(\"input[name='use_cache']:radio:checked\").val() == '0')
    {
        \$('#input-cache_time_form').hide();
    }else
    {
        \$('#input-cache_time_form').show();
    }
        
    \$(\"input[name='use_cache']\").change(function(){
        val = \$(this).val();
        if(val ==0)
        {
            \$('#input-cache_time_form').hide();
        }else
        {
           \$('#input-cache_time_form').show();
        }
    });

    jQuery(document).ready(function(\$) {
\t\t\$(\".button_parent_config\").click(function(){
\t\t\tif(\$(this).hasClass('active'))
\t\t\t\t\$(this).removeClass('active');
\t\t\telse
\t\t\t\t\$(this).addClass('active');

\t\t\t\$(\"#text_parent_config\").collapse('toggle');
\t\t});

\t\t\$(\".button_content_config\").click(function(){
\t\t\tif(\$(this).hasClass('active'))
\t\t\t\t\$(this).removeClass('active');
\t\t\telse
\t\t\t\t\$(this).addClass('active');
\t\t\t\$(\"#text_content_config\").collapse('toggle');
\t\t});

        \$('#nestable-menu').on('click', function(e)
        {
\t\t\tvar target = \$(e.target),
\t\t\t\t\taction = target.data('action');
\t\t\tif (action === 'expand-all') {
\t\t\t\t\t\$('.dd').nestable('expandAll');
\t\t\t}
\t\t\tif (action === 'collapse-all') {
\t\t\t\t\t\$('.dd').nestable('collapseAll');
\t\t\t}
        });

\t\t\$('#language').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-head-name-'+opt_select);
\t\t\t\$('[id^=\"input-head-name-\"]').addClass('hide');
\t\t\t_input.removeClass('hide');
\t\t});

\t\t\$('#head_name_language').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-headname-'+opt_select);
\t\t\t\$('[id^=\"input-headname-\"]').addClass('hide');
\t\t\t_input.removeClass('hide');
\t\t});

\t\t\$('#des_language').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-head-des-'+opt_select);
\t\t\t\$('[id^=\"input-head-des-\"]').addClass('hide');
\t\t\t_input.removeClass('hide');
\t\t});

\t\t\$('#navigation_language').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-text-navigation-'+opt_select);
\t\t\t\$('[id^=\"input-text-navigation-\"]').addClass('hide');
\t\t\t_input.removeClass('hide');
\t\t});

\t\t\$('#home_text_language').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-home-text-'+opt_select);
\t\t\t\$('[id^=\"input-home-text-\"]').addClass('hide');
\t\t\t_input.removeClass('hide');
\t\t});

        \$(\"select[name=content_type]\").change(function () {
            \$(\"select[name=content_type] option:selected\").each(function() {
                \$(\".content_type\").hide();
                \$(\"#content_type\" + \$(this).val()).show();
            });
        });
        \$(\"#submenu-type\").change(function () {
            \$(\"#submenu-type option:selected\").each(function() {
                if(\$(this).val() == 2) {
                    \$(\"#submenu-columns\").show();
                } else {
                    \$(\"#submenu-columns\").hide();
                }
            });
        });

\t\t\$('li','.content_type_html').first().addClass('active');
\t\t\$('.tab-pane','.content_type_html .tab-content').first().addClass('active');
        \$(\".type_link\").change(function () {
            \$(\".type_link option:selected\").each(function() {
                if(\$(this).val() == 1) {
\t\t\t\t\t\$(\".type_link_url\").hide();
\t\t\t\t\t\$(\".type_link_category\").show();
                } else {
\t\t\t\t\t\$(\".type_link_category\").hide();
\t\t\t\t\t\$(\".type_link_url\").show();
                }
            });
        });

        \$('#product_autocomplete').autocomplete({
            delay: 500,
            source: function(request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1048
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request) ,
                    dataType: 'json',
                    success: function(json) {
                        json.unshift({
                            'product_id':  0,
                            'name':  'None'
                        });
                        response(\$.map(json, function(item) {
                            return {
                             \tlabel: item.name,
                             \tvalue: item.product_id
                            }
                        }));
                    }
                });
            },
            select: function(event) {
                \$('#product_autocomplete').val(event.label);
                \$('input[name=\\'content[product][id]\\']').val(event.value);
                return false;
            },
            focus: function(event) {
                return false;
            }
        });

\t\t// Manufacturer
\t\t\$('input[name=\\'manufacture_autocomplete\\']').autocomplete({
\t\t\t'source': function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1078
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\t\tvalue: item['manufacturer_id']
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\t'select': function(item) {
\t\t\t\t\$('input[name=\\'category\\']').val('');

\t\t\t\t\$('#product-category' + item['value']).remove();

\t\t\t\t\$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"content[manufacture][id][]\" value=\"' + item['value'] + '\" /><input type=\"hidden\" name=\"content[manufacture][name][]\" value=\"' + item['label'] + '\" /></div>');
\t\t\t}
\t\t});

\t\t\$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t\t\t\$(this).parent().remove();
\t\t});


        \$('#categories_autocomplete').autocomplete({
            delay: 500,
            source: function(request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1108
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  request,
                    dataType: 'json',
                    success: function(json) {
                            json.unshift({
                                'category_id':  0,
                                'name':  'None'
                            });
                            response(\$.map(json, function(item) {
                                return {
                                    label: item.name,
                                    value: item.category_id
                                }
                            }));
                    }
                });
            },
            select: function(event) {
                if(event.value > 0) {
                    \$(\"#sort_categories > .dd-list\").append('<li class=\"dd-item\" data-id=\"' + event.value + '\" data-name=\"' + event.label + '\"><a class=\"fa fa-times\"></a><div class=\"dd-handle\">' + event.label + '</div></li>');
                }
                updateOutput2(\$('#sort_categories').data('output', \$('#sort_categories_data')));
\t\t\t\t\$( \"#sort_categories .fa-times\" ).on( \"click\", function() {
\t\t\t\t\t\$(this).parent().remove();
\t\t\t\t\tupdateOutput2(\$('#sort_categories').data('output', \$('#sort_categories_data')));
\t\t\t\t});
                return false;
            },
            focus: function(event) {
                return false;
            }
        });

        function lagXHRobjekt() {
            var XHRobjekt = null;

            try {
                ajaxRequest = new XMLHttpRequest(); // Firefox, Opera, ...
            } catch(err1) {
                try {
                    ajaxRequest = new ActiveXObject(\"Microsoft.XMLHTTP\"); // Noen IE v.
                } catch(err2) {
                    try {
                        ajaxRequest = new ActiveXObject(\"Msxml2.XMLHTTP\"); // Noen IE v.
                    } catch(err3) {
                        ajaxRequest = false;
                    }
                }
            }
            return ajaxRequest;
        }


        function menu_updatesort(jsonstring) {
            mittXHRobjekt = lagXHRobjekt();

            if (mittXHRobjekt) {
                mittXHRobjekt.onreadystatechange = function() {
                    if(ajaxRequest.readyState == 4){
                        var ajaxDisplay = document.getElementById('sortDBfeedback');
                        ajaxDisplay.innerHTML = ajaxRequest.responseText;
                    }
                }
                ajaxRequest.open(\"GET\", \"index.php?route=extension/module/so_megamenu&user_token=";
        // line 1170
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&jsonstring=\" + encodeURIComponent(jsonstring), true);
                ajaxRequest.setRequestHeader(\"Content-Type\", \"application/json\");
                ajaxRequest.send(null);
            }
        }

        var updateOutput = function(e)
        {
            var list   = e.length ? e : \$(e.target),
                output = list.data('output');

            if (window.JSON) {
                menu_updatesort(window.JSON.stringify(list.nestable('serialize')));
            } else {
                alert('JSON browser support required for this demo.');
            }
        };

        \$('#nestable').nestable({
                group: 1,
                maxDepth: 4
        }).on('change', updateOutput);

        updateOutput(\$('#nestable').data('output', \$('#nestable-output')));

        var updateOutput2 = function(e)
        {
            var list   = e.length ? e : \$(e.target),
                output = list.data('output');
            if (window.JSON && typeof(output)!= 'undefined' ) {
                output.val(window.JSON.stringify(list.nestable('serialize')));
            }
        };

        \$('#sort_categories').nestable({
               group: 1,
                maxDepth: 5
        }).on('change', updateOutput2);

        updateOutput2(\$('#sort_categories').data('output', \$('#sort_categories_data')));

       \$( \"#sort_categories .fa-times\" ).on( \"click\", function() {
               \$(this).parent().remove();
               updateOutput2(\$('#sort_categories').data('output', \$('#sort_categories_data')));
       });
                
        ///cache
        var button = '<div class=\"remove-caching\" style=\"margin-left: 15px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 1217
        echo (isset($context["button_clear_cache"]) ? $context["button_clear_cache"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> ";
        echo (isset($context["button_clear_cache"]) ? $context["button_clear_cache"] : null);
        echo "</button></div>';
        var button_min = '<div class=\"remove-caching\" style=\"margin-left: 7px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 1218
        echo (isset($context["button_clear_cache"]) ? $context["button_clear_cache"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> </button></div>';
        
        if(\$('#column-left').hasClass('active')){
            \$('#column-left #stats').after(button);
        }else{
            \$('#column-left #stats').after(button_min);
        }

        \$('#button-menu').click(function(){
            \$('.remove-caching').remove();
            if(\$(this).parents().find('#column-left').hasClass('active')){
                \$('#column-left #stats').after(button);
            }else{
                \$('#column-left #stats').after(button_min);
            }
        });
    });
        
    function remove_cache(){
        var success_remove = '";
        // line 1237
        echo (isset($context["success_remove"]) ? $context["success_remove"] : null);
        echo "';
        \$.ajax({
            type: 'POST',
            url: '";
        // line 1240
        echo (isset($context["linkremove"]) ? $context["linkremove"] : null);
        echo "',
            data: {\tis_ajax_cache_lite: 1},
            success: function () {
                var html = '<div class=\"alert alert-success cls-remove-cache\" style=\"margin: 5px 25px\"> '+success_remove+' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>';
                if(!(\$('.page-header .container-fluid .alert-success')).hasClass('cls-remove-cache')){
                    \$(html).insertAfter('.page-header .container-fluid');
                }
            },
        });
    }
</script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
";
        // line 1255
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/so_megamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2643 => 1255,  2625 => 1240,  2619 => 1237,  2597 => 1218,  2591 => 1217,  2541 => 1170,  2476 => 1108,  2443 => 1078,  2410 => 1048,  2285 => 925,  2277 => 920,  2273 => 919,  2261 => 914,  2253 => 913,  2245 => 912,  2240 => 910,  2235 => 908,  2230 => 905,  2213 => 903,  2209 => 902,  2206 => 901,  2185 => 899,  2182 => 898,  2177 => 897,  2175 => 896,  2171 => 895,  2165 => 891,  2161 => 889,  2157 => 887,  2155 => 886,  2152 => 885,  2148 => 883,  2144 => 881,  2142 => 880,  2139 => 879,  2135 => 877,  2131 => 875,  2129 => 874,  2124 => 872,  2118 => 868,  2113 => 865,  2108 => 862,  2106 => 861,  2101 => 859,  2095 => 855,  2078 => 853,  2074 => 852,  2071 => 851,  2050 => 849,  2047 => 848,  2042 => 847,  2040 => 846,  2036 => 845,  2029 => 841,  2025 => 840,  2018 => 836,  2014 => 835,  2008 => 831,  2003 => 828,  1998 => 825,  1996 => 824,  1991 => 822,  1986 => 820,  1980 => 817,  1976 => 816,  1970 => 812,  1965 => 810,  1962 => 809,  1957 => 807,  1954 => 806,  1952 => 805,  1948 => 803,  1943 => 801,  1940 => 800,  1935 => 798,  1932 => 797,  1930 => 796,  1925 => 794,  1919 => 790,  1914 => 788,  1909 => 787,  1904 => 785,  1899 => 784,  1897 => 783,  1892 => 781,  1886 => 777,  1881 => 775,  1876 => 774,  1871 => 772,  1866 => 771,  1864 => 770,  1859 => 768,  1853 => 764,  1836 => 762,  1832 => 761,  1829 => 760,  1812 => 758,  1809 => 757,  1804 => 756,  1802 => 755,  1798 => 754,  1791 => 750,  1787 => 749,  1783 => 747,  1778 => 744,  1775 => 743,  1764 => 741,  1760 => 740,  1757 => 739,  1755 => 738,  1750 => 735,  1748 => 734,  1743 => 732,  1739 => 731,  1731 => 725,  1723 => 719,  1719 => 717,  1715 => 715,  1713 => 714,  1710 => 713,  1706 => 711,  1702 => 709,  1700 => 708,  1697 => 707,  1693 => 705,  1689 => 703,  1687 => 702,  1684 => 701,  1680 => 699,  1676 => 697,  1674 => 696,  1671 => 695,  1667 => 693,  1663 => 691,  1661 => 690,  1658 => 689,  1654 => 687,  1650 => 685,  1648 => 684,  1638 => 681,  1633 => 678,  1629 => 676,  1625 => 674,  1623 => 673,  1620 => 672,  1616 => 670,  1612 => 668,  1610 => 667,  1602 => 661,  1598 => 659,  1594 => 657,  1592 => 656,  1589 => 655,  1585 => 653,  1581 => 651,  1579 => 650,  1576 => 649,  1572 => 647,  1568 => 645,  1566 => 644,  1563 => 643,  1559 => 641,  1555 => 639,  1553 => 638,  1550 => 637,  1546 => 635,  1542 => 633,  1540 => 632,  1537 => 631,  1533 => 629,  1529 => 627,  1527 => 626,  1517 => 619,  1511 => 616,  1493 => 605,  1487 => 601,  1483 => 599,  1479 => 597,  1477 => 596,  1474 => 595,  1470 => 593,  1466 => 591,  1464 => 590,  1461 => 589,  1457 => 587,  1453 => 585,  1451 => 584,  1448 => 583,  1444 => 581,  1440 => 579,  1438 => 578,  1435 => 577,  1431 => 575,  1427 => 573,  1425 => 572,  1422 => 571,  1418 => 569,  1414 => 567,  1412 => 566,  1404 => 560,  1400 => 558,  1396 => 556,  1394 => 555,  1391 => 554,  1387 => 552,  1383 => 550,  1381 => 549,  1374 => 544,  1370 => 542,  1366 => 540,  1364 => 539,  1361 => 538,  1357 => 536,  1353 => 534,  1351 => 533,  1348 => 532,  1344 => 530,  1340 => 528,  1338 => 527,  1335 => 526,  1331 => 524,  1327 => 522,  1325 => 521,  1317 => 516,  1307 => 513,  1301 => 509,  1297 => 507,  1293 => 505,  1291 => 504,  1288 => 503,  1284 => 501,  1280 => 499,  1278 => 498,  1275 => 497,  1271 => 495,  1267 => 493,  1265 => 492,  1262 => 491,  1258 => 489,  1254 => 487,  1252 => 486,  1249 => 485,  1245 => 483,  1241 => 481,  1239 => 480,  1236 => 479,  1232 => 477,  1228 => 475,  1226 => 474,  1216 => 471,  1211 => 468,  1207 => 466,  1203 => 464,  1201 => 463,  1198 => 462,  1194 => 460,  1190 => 458,  1188 => 457,  1179 => 450,  1175 => 448,  1171 => 446,  1169 => 445,  1166 => 444,  1162 => 442,  1158 => 440,  1156 => 439,  1153 => 438,  1149 => 436,  1145 => 434,  1143 => 433,  1140 => 432,  1136 => 430,  1132 => 428,  1130 => 427,  1127 => 426,  1123 => 424,  1119 => 422,  1117 => 421,  1114 => 420,  1110 => 418,  1106 => 416,  1104 => 415,  1096 => 409,  1092 => 407,  1088 => 405,  1086 => 404,  1083 => 403,  1079 => 401,  1075 => 399,  1073 => 398,  1066 => 393,  1062 => 391,  1058 => 389,  1056 => 388,  1053 => 387,  1049 => 385,  1045 => 383,  1043 => 382,  1035 => 377,  1028 => 373,  1021 => 369,  1015 => 365,  998 => 363,  994 => 362,  984 => 361,  973 => 357,  967 => 353,  963 => 351,  959 => 349,  957 => 348,  954 => 347,  950 => 345,  946 => 343,  944 => 342,  936 => 337,  930 => 336,  920 => 333,  914 => 329,  911 => 328,  902 => 325,  898 => 324,  891 => 323,  886 => 322,  884 => 321,  872 => 316,  865 => 312,  861 => 311,  851 => 308,  845 => 304,  832 => 301,  828 => 300,  825 => 299,  822 => 298,  818 => 297,  814 => 295,  798 => 291,  794 => 290,  791 => 289,  787 => 288,  776 => 284,  772 => 282,  768 => 280,  764 => 278,  761 => 277,  757 => 275,  753 => 273,  751 => 272,  748 => 271,  744 => 269,  740 => 267,  738 => 266,  735 => 265,  731 => 263,  727 => 261,  725 => 260,  722 => 259,  718 => 257,  714 => 255,  712 => 254,  709 => 253,  705 => 251,  701 => 249,  699 => 248,  696 => 247,  692 => 245,  688 => 243,  686 => 242,  681 => 240,  675 => 236,  658 => 234,  654 => 233,  649 => 231,  640 => 227,  635 => 224,  631 => 222,  627 => 220,  625 => 219,  622 => 218,  618 => 216,  614 => 214,  612 => 213,  609 => 212,  605 => 210,  601 => 208,  599 => 207,  594 => 205,  585 => 201,  581 => 200,  575 => 196,  570 => 194,  565 => 193,  560 => 191,  555 => 190,  553 => 189,  548 => 187,  542 => 183,  537 => 181,  532 => 180,  527 => 178,  522 => 177,  520 => 176,  515 => 174,  509 => 170,  504 => 168,  499 => 167,  494 => 165,  489 => 164,  487 => 163,  482 => 161,  476 => 157,  459 => 155,  455 => 154,  451 => 153,  446 => 151,  438 => 150,  432 => 147,  423 => 145,  418 => 142,  413 => 139,  408 => 136,  406 => 135,  401 => 133,  392 => 127,  386 => 124,  378 => 119,  373 => 117,  366 => 113,  360 => 112,  356 => 111,  350 => 107,  333 => 105,  329 => 104,  326 => 103,  309 => 101,  306 => 100,  301 => 99,  299 => 98,  295 => 97,  287 => 94,  280 => 90,  275 => 88,  270 => 85,  253 => 83,  249 => 82,  246 => 81,  229 => 79,  226 => 78,  221 => 77,  219 => 76,  215 => 75,  212 => 74,  206 => 72,  201 => 70,  194 => 69,  192 => 68,  189 => 67,  185 => 65,  181 => 63,  179 => 62,  176 => 61,  174 => 60,  169 => 57,  167 => 56,  164 => 55,  157 => 51,  152 => 49,  148 => 48,  140 => 45,  137 => 44,  135 => 43,  127 => 37,  121 => 36,  119 => 35,  113 => 32,  105 => 31,  98 => 30,  93 => 29,  91 => 28,  81 => 27,  74 => 23,  70 => 21,  64 => 19,  62 => 18,  57 => 17,  55 => 16,  48 => 11,  37 => 9,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 		  	<div class="pull-left">*/
/* 			  	<h1>{{ heading_title_so }}</h1>*/
/* 			  	<ul class="breadcrumb">*/
/* 					{% for breadcrumb in breadcrumbs %}*/
/* 						<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 					{% endfor %}*/
/* 			  	</ul>*/
/* 			</div>*/
/* 	  	</div>*/
/* 	</div>*/
/*     <div class="container-fluid" id="megamenu">*/
/*     	{% if error_warning %}*/
/* 	    	<div class="alert alert-danger">{{ error_warning }}</div>*/
/* 	    {% elseif success %}*/
/* 	    	<div class="alert alert-success">{{ success }}</div>*/
/* 	    {% endif %}*/
/* */
/* 	    <div class="panel panel-default">*/
/* 			<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form">*/
/* 				<div class="panel-body">*/
/* 					<div class="rows">*/
/* 						<ul class="nav nav-tabs" role="tablist">*/
/* 							<li {% if selectedid ==0 %}class="active" {% endif %}> <a href="{{ link_add }}"> <span class="fa fa-plus"></span>{{ button_add_module }}</a></li>*/
/* 							{% set i = 1 %}*/
/* 							{% for key, module in moduletabs %}*/
/* 								<li role="presentation" {% if module.module_id == selectedid %} class="active" {% endif %}>*/
/* 								<a href="{{ link_add }}&module_id={{ module.module_id }}" aria-controls="bannermodule-{{ key }}"  >*/
/* 									<span class="fa fa-pencil"></span> {{ module.name }}*/
/* 								</a>*/
/* 								</li>*/
/* 								{% set i = i + 1 %}*/
/* 							{% endfor %}*/
/* 						</ul>*/
/* 					</div>*/
/* */
/* 					<div class="rows megacontent">*/
/* 						<div class="col-md-12 col-xs-12 col-sm-12">*/
/* 							<div class="background clearfix">*/
/* 								{% if moduleid %}*/
/* 									<div class="left col-md-4 col-xs-12 col-sm-6 ">*/
/* 										<a href="{{ action }}&action=create" class="btn btn-primary" > {{ text_creat_new_item }}</a>*/
/* */
/* 										<a id="nestable-menu">*/
/* 												<button type="button" data-action="expand-all" class="btn btn-primary">{{ text_expand_all }}</button>*/
/* 												<button type="button" data-action="collapse-all" class="btn btn-primary">{{ text_collapse_all }}</button>*/
/* 										</a>*/
/* 										{{ nestable_list }}*/
/* 										<div id='sortDBfeedback' style="padding: 10px 0px 0px 0px"></div>*/
/* 									</div>*/
/* 								{% endif %}*/
/* */
/* 								{% if action_type == 'create' or action_type == 'edit' %}*/
/* 									<div class="right col-md-8 col-xs-12 col-sm-6">*/
/* 										<div class="buttons clearfix">*/
/* 											<button type="submit" name="button-back" class="button-save" value="" title="Configuration"><i class="fa fa-cog"></i></button>*/
/* 											{% if action_type == 'create' %}*/
/* 												<button type="submit" name="button-create" class="button-save" value="" title="Save"><i class="fa fa-floppy-o"></i></button>*/
/* 											{% elseif action_type == 'edit' %}*/
/* 												<button type="submit" name="button-edit" class="button-save" value="" title="Save"><i class="fa fa-floppy-o"></i></button>*/
/* 											{% else %}*/
/* 												<button type="submit" name="button-save" class="button-save" value="" title="Save"><i class="fa fa-floppy-o"></i></button>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 										{% if action_type == 'edit' %}*/
/* 											<h4>{{ text_edit_item }} {{ edit }}</h4>*/
/* 											<input type="hidden" name="id" value="{{ edit }}" />*/
/* 										{% else %}*/
/* 											<h4>{{ text_creat_new_item }}</h4>*/
/* 										{% endif %}*/
/* 										<div class="input clearfix">*/
/* 											<p>{{ text_name }}</p>*/
/* 											{% set i = 0 %}*/
/* 											{% for language  in languages %}*/
/* 											{% set i = i + 1 %}*/
/* 											 	<input type="text" name="name[{{ language.language_id }}]" placeholder="{{ entry_description_name }}" id="input-head-name-{{ language.language_id }}" value="{{ name[language.language_id] ? name[language.language_id] : '' }}" class="form-control {{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 											{% endfor %}*/
/* 											<select  class="form-control" id="language">*/
/* 												{% for language in languages %}*/
/* 													<option value="{{ language.language_id }}"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"> {{ language.name }}</option>*/
/* 												{% endfor %}*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="input clearfix">*/
/* 											<p>{{ text_class_menu }}</p>*/
/* 											<div class="list-language">*/
/* 												<input type="text" name="class_menu" value="{{ class_menu }}">*/
/* 											</div>*/
/* 										</div>*/
/* 										*/
/* 										<h4 class="button_parent_config">{{ text_parent_config }}</h4>({{ text_parent_item }})*/
/* 										<div id="text_parent_config" class="collapse">									*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_description }}</p>*/
/* 												{% set i = 0 %}*/
/* 												{% for language in languages %}*/
/* 												{% set i = i + 1 %}*/
/* 												 	<input type="text" name="description[{{ language.language_id }}]" placeholder="{{ entry_description_name }}" id="input-head-des-{{ language.language_id }}" value="{{ description[language.language_id] ? description[language.language_id] : '' }}" class="form-control {{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 												{% endfor %}*/
/* 												<select  class="form-control" id="des_language">*/
/* 												  	{% for language in languages %}*/
/* 														<option value="{{ language.language_id }}"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"> {{ language.name }}</option>*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 									*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ "Icon Thumb" }}</p>*/
/* 												<a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ src_icon }}" alt="" title="" data-placeholder="{{ placeholder }}"  /></a>*/
/* 												<input type="hidden" name="icon" value="{{ icon }}" id="input-image" />*/
/* 											</div>*/
/* */
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_label_item }}</p>*/
/* 												<div class="list-language">*/
/* 														<input type="text" name="label_item" value="{{ label_item }}">*/
/* 												</div>*/
/* 											</div>*/
/* */
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_icon_font }}</p>*/
/* 												*/
/* 												<div class="list-language">*/
/* 													<input type="text" name="icon_font" value="{{ icon_font }}">*/
/* 													<span style="display:inline-block:color;#999;">Icon name font awesome, user <a href="https://fontawesome.com/v4.7.0/" target="_blank"> Fontawesome 4.7</a></span>*/
/* 												</div>*/
/* 											</div>*/
/* */
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_type_link }}</p>*/
/* 												<select name="type_link" class="type_link">*/
/* 													{% if type_link == 1 %}*/
/* 														<option value="0">Url</option>*/
/* 														<option value="1" selected="selected">Category</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">Url</option>*/
/* 														<option value="1">Category</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										*/
/* 											<div class="input  type_link_url clearfix " {% if type_link == 1 %} {{ 'style="display:none"' }} {% endif %}>*/
/* 												<p>Url</p>*/
/* 												<input type="text" value="{{ link.url }}" name="link[url]">*/
/* 											</div>*/
/* 										*/
/* 											<div class="input type_link_category clearfix" {% if type_link != 1 %} {{ 'style="display:none"' }} {% endif %}>*/
/* 												<p>{{ text_categories }}</p>*/
/* 												<select name="link[category]">*/
/* 												  	<option value="">{{ text_all_categories }}</option>*/
/* 												  	{% for category in categories %}*/
/* 												  		<option value="{{ category.category_id }}" {% if link.category == category.category_id %} {{ 'selected' }} {% endif %}>{{ category.name }}</option>*/
/* 												  	{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 										*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_link_in_new_window }}</p>*/
/* 												<select name="new_window">*/
/* 													{% if new_window == 1 %}*/
/* 														<option value="0">{{ text_disabled }}</option>*/
/* 														<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 														<option value="1">{{ text_enabled }}</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_status }}</p>*/
/* 												<select name="status">*/
/* 													{% if status == 1 %}*/
/* 														<option value="0">{{ text_enabled }}</option>*/
/* 														<option value="1" selected="selected">{{ text_disabled }}</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">{{ text_enabled }}</option>*/
/* 														<option value="1">{{ text_disabled }}</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* */
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_position }}</p>*/
/* 												<select name="position">*/
/* 													{% if position == 1 %}*/
/* 														<option value="0">{{ text_left }}</option>*/
/* 														<option value="1" selected="selected">{{ text_right }}</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">{{ text_left }}</option>*/
/* 														<option value="1">{{ text_right }}</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 									*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_submenu_width }}</p>*/
/* 												<input type="text" name="submenu_width" value="{{ submenu_width }}"> <div>{{ text_example }}</div>*/
/* 											</div>*/
/* 									*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_display_submenu_on }}</p>*/
/* 												<select name="display_submenu">*/
/* 													{% if display_submenu == 0 %}*/
/* 														<option value="0" selected="selected">Hover</option>*/
/* 													{% else %}*/
/* 														<option value="0">Hover</option>*/
/* 													{% endif %}*/
/* 													*/
/* 													{% if display_submenu == 2 %}*/
/* 														<option value="2" selected="selected">Hover intent</option>*/
/* 													{% else %}*/
/* 														<option value="2">Hover intent</option>*/
/* 													{% endif %}*/
/* 													*/
/* 													{% if display_submenu == 1 %}*/
/* 														<option value="1" selected="selected">Click</option>*/
/* 													{% else %}*/
/* 														<option value="1">Click</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>								*/
/* 										</div>*/
/* 										<h4 class="button_content_config">{{ text_content_config }}</h4>({{ text_content_item }})*/
/* 										<div id="text_content_config" class="collapse">*/
/* 									*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_content_width }}</p>*/
/* 												<select name="content_width">*/
/* 													{% for i in 1..12 %}*/
/* 														<option value="{{ i }}" {% if i == content_width %} {{ 'selected="selected"' }} {% endif %}>{{ i }}/12</option>*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 											*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_content_type }}</p>*/
/* 												<select name="content_type">*/
/* 													{% if content_type != 0 %}*/
/* 														<option value="0">HTML</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">HTML</option>*/
/* 													{% endif %}*/
/* 													*/
/* 													{% if content_type != 1 %}*/
/* 														<option value="1">Product</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">Product</option>*/
/* 													{% endif %}*/
/* 													*/
/* 													{% if content_type != 2 %}*/
/* 														<option value="2">Category</option>*/
/* 													{% else %}*/
/* 														<option value="2" selected="selected">Category</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content_type != 3 %}*/
/* 														<option value="3">Manufacture</option>*/
/* 													{% else %}*/
/* 														<option value="3" selected="selected">Manufacture</option>*/
/* 													{% endif %}*/
/* 													*/
/* 													{% if content_type != 4 %}*/
/* 														<option value="4">Image</option>*/
/* 													{% else %}*/
/* 														<option value="4" selected="selected">Image</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content_type != 5 %}*/
/* 														<option value="5">Subcategory</option>*/
/* 													{% else %}*/
/* 														<option value="5" selected="selected">Subcategory</option>*/
/* 													{% endif %}*/
/* 													{% if content_type != 6 %}*/
/* 														<option value="6">Product List</option>*/
/* 													{% else %}*/
/* 														<option value="6" selected="selected">Product List</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 											<div id="content_type0"{% if content_type != 0 %} {{ 'style="display:none"' }} {% endif %} class="content_type content_type_html">*/
/* 											<h5 style="margin-top:20px">HTML</h5>*/
/* 											<div class="tab-pane">*/
/* 												<ul id="language" class="nav nav-tabs">*/
/* 													{% for language in languages %}*/
/* 														<li>*/
/* 															<a data-toggle="tab" href="#content_html_{{ language.language_id }}">*/
/* 																<img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}*/
/* 															</a>*/
/* 														</li>*/
/* 													{% endfor %}*/
/* 												</ul>*/
/* 												<div class="tab-content">*/
/* 													{% for language in languages %}*/
/* 													{% set lang_id = language.language_id %}*/
/* 													*/
/* 													<div id="content_html_{{ language.language_id }}" class="content_html tab-pane">*/
/* 														<textarea name="content[html][text][{{ language.language_id }}]" id="content_html_text_{{ language.language_id }}" class="form-control summernote" data-toggle="summernote">{{ content['html']['text'][lang_id] ? content['html']['text'][lang_id] : '' }}</textarea>*/
/* 													</div>*/
/* 													{% endfor %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* */
/* 										<div id="content_type1" {% if content_type != 1 %} {{ 'style="display:none"' }} {% endif %} class="content_type">							*/
/* 											<div class="input clearfix">*/
/* 												<p>Products:<br><span style="font-size:11px;color:#808080">(Autocomplete)</span></p>*/
/* 												<input type="hidden" name="content[product][id]" value="{{ content.product.id }}" />*/
/* 												<input type="text" id="product_autocomplete" name="content[product][name]" value="{{ content.product.name }}">*/
/* 											</div>*/
/* 										</div>*/
/* */
/* 										<div id="content_type3" {% if content_type != 3 %} {{ 'style="display:none"' }} {% endif %} class="content_type">*/
/* 											<div class="input clearfix">*/
/* 												<p>Manufacture:<br><span style="font-size:11px;color:#808080">(Autocomplete)</span></p>*/
/* 												<input type="text" id="manufacture_autocomplete" name="manufacture_autocomplete" value="">*/
/* 												<div id="product-category" class="well well-sm" style="height: 150px; overflow: auto;">*/
/* 													{% if content['manufacture']['id'] %}*/
/* 														{% for key, id_category in content.manufacture.id %}*/
/* 															<div id="product-category{{ id_category }}"><i class="fa fa-minus-circle"></i> {{ content.manufacture.name[key] }}*/
/* 															  	<input type="hidden" name="content[manufacture][name][]" value="{{ content.manufacture.name[key] }}" />*/
/* 															  	<input type="hidden" name="content[manufacture][id][]" value="{{ id_category }}" />*/
/* 															</div>*/
/* 														{% endfor %}*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* */
/* 										<div id="content_type4" {% if content_type != 4 %} {{ 'style="display:none"' }} {% endif %} class="content_type">*/
/* 											<div class="input clearfix">*/
/* 												<p>Image:</p>*/
/* 												<a href="" id="thumb-image-content" data-toggle="image" class="img-thumbnail"><img src="{{ content.image.image_link ? content.image.image_link : src_image_default }}" alt="" title="" data-placeholder="{{ placeholder }}"  /></a>*/
/* 												<input type="hidden" name="content[image][link]" value="{{ content.image.link ? content.image.link : image_default }}" id="input-image-content" />*/
/* 											</div>*/
/* 											<div class="input clearfix" >*/
/* 												<p>Show Title</p>*/
/* 												<select name="content[image][show_title]">*/
/* 													{% if content.image.show_title == 1 and content.image.show_title %}*/
/* 														<option value="1">Yes</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">Yes</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.image.show_title != 0 and content.image.show_title %}*/
/* 														<option value="0">No</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">No</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* */
/* 										<div id="content_type5" {% if content_type != 5 %} {{ 'style="display:none"' }} {% endif %} class="content_type">*/
/* 											<div class="input clearfix">*/
/* 												<p>Category</p>*/
/* 												<select  multiple name="content[subcategory][category][]" style="height: 200px;width:200px">*/
/* 												  	<option value="" {% if content.subcategory.category != '' and content.subcategory.category[0] == "" %} {{ 'selected' }} {% endif %}>{{ text_all_categories }}</option>*/
/* 												  	{% for category in categories %}*/
/* 												  		<option value="{{ category.category_id }}" {% if content.subcategory.category != '' and category.category_id in content.subcategory.category %} {{ 'selected' }} {% endif %}>{{ category.name }}</option>*/
/* 												  	{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="input clearfix">*/
/* 												<p>Limit Level 1</p>*/
/* 												<input type="text" name="content[subcategory][limit_level_1]" value="{{ content.subcategory.limit_level_1 ? content.subcategory.limit_level_1 : '' }}">*/
/* 											</div>*/
/* 											<div class="input clearfix">*/
/* 												<p>Limit Level 2</p>*/
/* 												<input type="text" name="content[subcategory][limit_level_2]" value="{{ content.subcategory.limit_level_2 ? content.subcategory.limit_level_2 : '' }}">*/
/* 											</div>*/
/* 											<div class="input clearfix">*/
/* 												<p>Limit Level 3</p>*/
/* 												<input type="text" name="content[subcategory][limit_level_3]" value="{{ content.subcategory.limit_level_3 ? content.subcategory.limit_level_3 : '' }}">*/
/* 											</div>												*/
/* 											<div class="input clearfix">*/
/* 												<p>Show Title</p>*/
/* 												<select name="content[subcategory][show_title]">*/
/* 													{% if content.subcategory.show_title != 1 %}*/
/* 														<option value="1">Yes</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">Yes</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.subcategory.show_title != 0 %}*/
/* 														<option value="0">No</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">No</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="input clearfix">*/
/* 												<p>Show Image</p>*/
/* 												<select name="content[subcategory][show_image]">*/
/* 													{% if content.subcategory.show_image != 1 %}*/
/* 														<option value="1">Yes</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">Yes</option>*/
/* 													{% endif %}*/
/* 													*/
/* 													{% if content.subcategory.show_image != 0 %}*/
/* 														<option value="0">No</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">No</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 		                                    */
/* 		                                    <div class="input clearfix">*/
/* 		                                        <p>Columns</p>*/
/* 		                                        <select name="content[subcategory][columns]">*/
/* 		                                            {% if content.subcategory.columns != 1 %}*/
/* 		                                            	<option value="1">1</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="1" selected="selected">1</option>*/
/* 		                                            {% endif %}*/
/* 		                                            */
/* 		                                            {% if content.subcategory.columns != 2 %}*/
/* 		                                            	<option value="2">2</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="2" selected="selected">2</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.subcategory.columns != 3 %}*/
/* 		                                            	<option value="3">3</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="3" selected="selected">3</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.subcategory.columns != 4 %}*/
/* 		                                            	<option value="4">4</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="4" selected="selected">4</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.subcategory.columns != 5 %}*/
/* 		                                            	<option value="5">5</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="5" selected="selected">5</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.subcategory.columns != 6 %}*/
/* 		                                            	<option value="6">6</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="6" selected="selected">6</option>*/
/* 		                                            {% endif %}*/
/* 		                                        </select>*/
/* 		                                    </div>*/
/* */
/* 		                                    */
/* 		                                    <div class="input clearfix" id="submenu-type">*/
/* 		                                        <p>Submenu type</p>*/
/* 		                                        <select name="content[subcategory][submenu]">*/
/* 													{% if content.subcategory.submenu != 1 %}*/
/* 														<option value="1">Hover</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">Hover</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.subcategory.submenu != 2 %}*/
/* 														<option value="2">Visible</option>*/
/* 													{% else %}*/
/* 														<option value="2" selected="selected">Visible</option>*/
/* 													{% endif %}*/
/* 		                                        </select>*/
/* 		                                    </div>*/
/* */
/* 		                                    <div class="input clearfix" {% if content.subcategory.submenu != 2 %} {{ 'style="display:none"' }} {% endif %} id="submenu-columns">*/
/* 		                                    	<p>Submenu columns</p>*/
/* 												<select name="content[subcategory][submenu_columns]">*/
/* 													{% if content.subcategory.submenu_columns != 1 %}*/
/* 														<option value="1">1</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">1</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.subcategory.submenu_columns != 2 %}*/
/* 														<option value="2">2</option>*/
/* 													{% else %}*/
/* 														<option value="2" selected="selected">2</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.subcategory.submenu_columns != 3 %}*/
/* 														<option value="3">3</option>*/
/* 													{% else %}*/
/* 														<option value="3" selected="selected">3</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.subcategory.submenu_columns != 4 %}*/
/* 														<option value="4">4</option>*/
/* 													{% else %}*/
/* 														<option value="4" selected="selected">4</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.subcategory.submenu_columns != 5 %}*/
/* 														<option value="5">5</option>*/
/* 													{% else %}*/
/* 														<option value="5" selected="selected">5</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.subcategory.submenu_columns != 6 %}*/
/* 														<option value="6">6</option>*/
/* 													{% else %}*/
/* 														<option value="6" selected="selected">6</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* */
/* 										<div id="content_type6" {% if content_type != 6 %} {{ 'style="display:none"' }} {% endif %} class="content_type">*/
/* 											<div class="input clearfix">*/
/* 												<p>Limit</p>*/
/* 												<input type="text" name="content[productlist][limit]" value="{{ content.productlist.limit ? content.productlist.limit : '' }}">*/
/* 											</div>*/
/* 											<div class="input clearfix">*/
/* 												<p>Type</p>*/
/* 												<select name="content[productlist][type]">*/
/* 													{% if content.productlist.type != 'new' %}*/
/* 														<option value="new">New</option>*/
/* 													{% else %}*/
/* 														<option value="new" selected="selected">New</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.productlist.type != 'special' %}*/
/* 														<option value="special">Special</option>*/
/* 													{% else %}*/
/* 														<option value="special" selected="selected">Special</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.productlist.type != 'bestseller' %}*/
/* 														<option value="bestseller">Best Seller</option>*/
/* 													{% else %}*/
/* 														<option value="bestseller" selected="selected">Best Seller</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.productlist.type != 'popular' %}*/
/* 														<option value="popular">Popular</option>*/
/* 													{% else %}*/
/* 														<option value="popular" selected="selected">Popular</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="input clearfix">*/
/* 												<p>Show Title</p>*/
/* 												<select name="content[productlist][show_title]">*/
/* 													{% if content.productlist.show_title != 1 %}*/
/* 														<option value="1">Yes</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">Yes</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.productlist.show_title != 0 %}*/
/* 														<option value="0">No</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">No</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 		                                    */
/* 		                                    <div class="input clearfix">*/
/* 		                                        <p>Columns</p>*/
/* 		                                        <select name="content[productlist][col]">*/
/* 		                                            {% if content.productlist.col != 1 %}*/
/* 		                                            	<option value="1">1</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="1" selected="selected">1</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.productlist.col != 2 %}*/
/* 		                                            	<option value="2">2</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="2" selected="selected">2</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.productlist.col != 3 %}*/
/* 		                                            	<option value="3">3</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="3" selected="selected">3</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.productlist.col != 4 %}*/
/* 		                                            	<option value="4">4</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="4" selected="selected">4</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.productlist.col != 5 %}*/
/* 		                                            	<option value="5">5</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="5" selected="selected">5</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.productlist.col != 6 %}*/
/* 		                                            	<option value="6">6</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="6" selected="selected">6</option>*/
/* 		                                            {% endif %}*/
/* 		                                        </select>*/
/* 		                                    </div>                                        */
/* 										</div>*/
/* */
/* 		                                <div id="content_type2" {% if content_type != 2 %} {{ 'style="display:none"' }} {% endif %} class="content_type">*/
/* 		                                    <h5 style="margin-top:20px">Categories</h5>*/
/* 		                                    <div class="input clearfix">*/
/* 		                                        <p>Add categories<br><span style="font-size:11px;color:#808080">(Autocomplete)</span></p>*/
/* 		                                        <input type="text" id="categories_autocomplete" value="">*/
/* 		                                    </div>*/
/* 		                                    <div class="input clearfix">*/
/* 		                                        <p>Sort categories</p>*/
/* 		                                        <div class="cf nestable-lists">*/
/* 		                                            <div class="dd" id="sort_categories">*/
/* 		                                                <ol class="dd-list">*/
/* 		                                                    {{ list_categories }}*/
/* 		                                                </ol>*/
/* 		                                            </div>*/
/* 		                                            <input type="hidden" id="sort_categories_data" name="content[categories][categories]" value="{{ content.categories.categories is iterable ? '' : content.categories.categories }}" />*/
/* 		                                        </div>*/
/* 		                                    </div>*/
/* 		                                    */
/* 		                                    <div class="input clearfix">*/
/* 		                                        <p>Columns</p>*/
/* 		                                        <select name="content[categories][columns]">*/
/* 		                                            {% if content.categories.columns != 1 %}*/
/* 		                                            	<option value="1">1</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="1" selected="selected">1</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.columns != 2 %}*/
/* 		                                            	<option value="2">2</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="2" selected="selected">2</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.columns != 3 %}*/
/* 		                                            	<option value="3">3</option>*/
/* 		                                            {% else %}*/
/* 		                                            <option value="3" selected="selected">3</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.columns != 4 %}*/
/* 		                                            	<option value="4">4</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="4" selected="selected">4</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.columns != 5 %}*/
/* 		                                            	<option value="5">5</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="5" selected="selected">5</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.columns != 6 %}*/
/* 		                                            	<option value="6">6</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="6" selected="selected">6</option>*/
/* 		                                            {% endif %}*/
/* 		                                        </select>*/
/* 		                                    </div>*/
/* */
/* 		                                    <div class="input clearfix" id="submenu-type">*/
/* 		                                        <p>Submenu type</p>*/
/* 		                                        <select name="content[categories][submenu]">*/
/* 													{% if content.categories.submenu != 1 %}*/
/* 														<option value="1">Hover</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">Hover</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.categories.submenu != 2 %}*/
/* 														<option value="2">Visible</option>*/
/* 													{% else %}*/
/* 														<option value="2" selected="selected">Visible</option>*/
/* 													{% endif %}*/
/* 		                                        </select>*/
/* 		                                    </div>*/
/* */
/* 		                                    <div class="input clearfix" {% if content.categories.submenu != 2 %} {{ 'style="display:none"' }} {% endif %} id="submenu-columns">*/
/* 		                                    	<p>Submenu columns</p>*/
/* 		                                    	<select name="content[categories][submenu_columns]">*/
/* 		                                            {% if content.categories.submenu_columns != 1 %}*/
/* 		                                            	<option value="1">1</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="1" selected="selected">1</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.submenu_columns != 2 %}*/
/* 		                                            	<option value="2">2</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="2" selected="selected">2</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.submenu_columns != 3 %}*/
/* 		                                            	<option value="3">3</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="3" selected="selected">3</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.submenu_columns != 4 %}*/
/* 		                                            	<option value="4">4</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="4" selected="selected">4</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.submenu_columns != 5 %}*/
/* 		                                            	<option value="5">5</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="5" selected="selected">5</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.submenu_columns != 6 %}*/
/* 		                                            	<option value="6">6</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="6" selected="selected">6</option>*/
/* 		                                            {% endif %}*/
/* 		                                    	</select>*/
/* 		                            		</div>*/
/* 		                    			</div>*/
/* 									</div>*/
/* 								</div>*/
/* 		    				{% else %}*/
/* 		    					<div class="right col-md-8 col-xs-12 col-sm-6">*/
/* 									<div class="buttons clearfix">*/
/* 										<button type="submit" name="button-close" class="button-save" value="" title="Close"><i class="fa fa-reply"></i></button>*/
/* 										<button type="submit" name="button-save" class="button-save" value="" title="Save"><i class="fa fa-floppy-o"></i></button>*/
/* 									</div>*/
/* 		    */
/* 									<input type="hidden" name="moduleid" value="{{ moduleid }}" />*/
/* 		    						<h4><p>{{ text_basic_configuration }}</p></h4>*/
/* 			*/
/* 									{% if module_id %}*/
/* 										<div class="input clearfix">*/
/* 											<p>Import Module</p>*/
/* 											<select name="import_module">*/
/* 												{% if modules %}*/
/* 													<option value="0">No Import</option>*/
/* 													{% for module in modules %}*/
/* 														<option value="{{ module.module_id }}">{{ module.name }}</option>*/
/* 													 {% endfor %}*/
/* 												{% endif %}*/
/* 											</select>*/
/* 										</div>*/
/* 									{% endif %}*/
/* 		    */
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_name }}</p>*/
/* 						                <input type="text" name="name" value="{{ name }}"  id="input-name" class="form-control" />*/
/* 							        </div>*/
/* 			*/
/* 									<div class="input clearfix">*/
/* 										<p>{{ entry_head_name }}</p>*/
/* 										{% set i = 0 %}*/
/* 										{% for language in languages %}*/
/* 											{% set i = i + 1 %}*/
/* 											<input type="text" name="head_name[{{ language.language_id }}]" placeholder="{{ entry_head_name }}" id="input-headname-{{ language.language_id }}" value="{{ head_name[language.language_id] ? head_name[language.language_id] : '' }}" class="form-control {{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 										{% endfor %}*/
/* 										<select  class="form-control" id="head_name_language">*/
/* 											{% for language in languages %}*/
/* 												<option value="{{ language.language_id }}"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</option>*/
/* 											{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* */
/* 									<div class="input clearfix">*/
/* 										<p>{{ entry_display_title_module }}</p>*/
/* 										<select name="disp_title_module" id="input-disp_title_module" class="form-control">*/
/* 											{% if disp_title_module %}*/
/* 												<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 												<option value="0">{{ text_no }}</option>*/
/* 											{% else %}*/
/* 												<option value="1">{{ text_yes }}</option>*/
/* 												<option value="0" selected="selected">{{ text_no }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 			*/
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_status }}</p>*/
/* 						                <select name="status">*/
/* 					                        {% if status %}*/
/* 						                        <option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 						                        <option value="0">{{ text_disabled }}</option>*/
/* 					                        {% else %}*/
/* 						                        <option value="1">{{ text_enabled }}</option>*/
/* 						                        <option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 					                        {% endif %}*/
/* 						                </select>*/
/* 							        </div>*/
/* 			*/
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_use_cache }}</p>*/
/* 						                <label class="radio-inline">*/
/* 					                        {% if use_cache %}*/
/* 					                        	<input type="radio" name="use_cache" value="1" checked="checked" />*/
/* 					                        	{{ text_yes }}*/
/* 					                        {% else %}*/
/* 					                        	<input type="radio" name="use_cache" value="1" />*/
/* 					                        	{{ text_yes }}*/
/* 					                        {% endif %}*/
/* 						                </label>*/
/* 						                <label class="radio-inline">*/
/* 					                        {% if use_cache %}*/
/* 					                        	<input type="radio" name="use_cache" value="0" />				                        	*/
/* 					                        	{{ text_no }}*/
/* 					                        {% else %}*/
/* 					                        	<input type="radio" name="use_cache" value="0" checked="checked" />*/
/* 					                        	{{ text_no }}*/
/* 					                        {% endif %}*/
/* 						                </label>*/
/* 							        </div>*/
/* 		    */
/* 							        <div class="input clearfix" id="input-cache_time_form">*/
/* 							                <p>{{ text_cache_time }}</p>*/
/* 							                <input type="text" name="cache_time" value="{{ cache_time }}"  id="input-name" class="form-control" />*/
/* 							        </div>*/
/* 		    */
/* 			        				<h4 style="margin-top:20px">{{ text_design_configuration }}</h4>        */
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_orientation }}</p>*/
/* 						                <select name="orientation">*/
/* 					                        {% if orientation %}*/
/* 					                        	<option value="0">Horizontal</option>*/
/* 					                        	<option value="1" selected="selected">Vertical</option>*/
/* 					                        {% else %}*/
/* 						                        <option value="0" selected="selected">Horizontal</option>*/
/* 						                        <option value="1">Vertical</option>*/
/* 					                        {% endif %}*/
/* 						                </select>*/
/* 							        </div>*/
/* */
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_class_menu }}</p>*/
/* 						                <input type="text" name="class_menu" value="{{ class_menu }}"  id="input-name" class="form-control" />*/
/* 							        </div>*/
/* 							        */
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_number_load_vertical }}</p>*/
/* 						                <input type="text" name="show_itemver" value="{{ show_itemver }}"  id="input-name" class="form-control" />*/
/* 							        </div>*/
/* 			*/
/* 									<div class="input clearfix">*/
/* 										<p>{{ text_navigation_text }}</p>*/
/* 										{% set i = 0 %}*/
/* 										{% for language in languages %}*/
/* 											{% set i = i + 1 %}*/
/* 											<input type="text" name="navigation_text[{{ language.language_id }}]" placeholder="{{ text_navigation_text }}" id="input-text-navigation-{{ language.language_id }}" value="{% if navigation_text[language.language_id] %} {{ navigation_text[language.language_id] }} {% endif %}" class="form-control {{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 										{% endfor %}*/
/* 										<select class="form-control" id="navigation_language">*/
/* 											{% for language in languages %}*/
/* 												<option value="{{ language.language_id }}"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</option>*/
/* 											{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 		    */
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_expand_menu_bar }}</p>*/
/* 						                <select name="full_width">*/
/* 					                        {% if full_width %}*/
/* 						                        <option value="1" selected="selected">Yes</option>*/
/* 						                        <option value="0">No</option>*/
/* 					                        {% else %}*/
/* 						                        <option value="1">Yes</option>*/
/* 						                        <option value="0" selected="selected">No</option>*/
/* 					                        {% endif %}*/
/* 						                </select>*/
/* 							        </div>*/
/* 		    */
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_home_item }}</p>*/
/* 						                <select name="home_item">*/
/* 					                        {% if home_item == 'icon' %}*/
/* 					                        	<option value="icon" selected="selected">Icon</option>*/
/* 					                        {% else %}*/
/* 					                        	<option value="icon">Icon</option>*/
/* 					                        {% endif %}*/
/* 					                        */
/* 					                        {% if home_item == 'text' %}*/
/* 					                        	<option value="text" selected="selected">Text</option>*/
/* 					                        {% else %}*/
/* 					                        	<option value="text">Text</option>*/
/* 					                        {% endif %}*/
/* */
/* 					                        {% if home_item == 'disabled' %}*/
/* 					                        	<option value="disabled" selected="selected">Disabled</option>*/
/* 					                        {% else %}*/
/* 					                        	<option value="disabled">Disabled</option>*/
/* 					                        {% endif %}*/
/* 						                </select>*/
/* 							        </div>*/
/* 			*/
/* 									<div class="input clearfix">*/
/* 										<p>{{ text_home_text }}</p>*/
/* 										{% set i = 0 %}*/
/* 										{% for language in languages %}*/
/* 											{% set i = i + 1 %}*/
/* 										 	<input type="text" name="home_text[{{ language.language_id }}]" placeholder="{{ text_home_text }}" id="input-home-text-{{ language.language_id }}" value="{% if home_text[language.language_id] %} {{ home_text[language.language_id] }} {% endif %}" class="form-control {{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 										{% endfor %}*/
/* 										<select  class="form-control" id="home_text_language">*/
/* 											{% for language in languages %}*/
/* 												<option value="{{ language.language_id }}"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</option>*/
/* 											{% endfor %}*/
/* 										</select>*/
/* 									</div>        */
/* */
/* 		    						<h4 style="margin-top:20px">{{ text_jquery_animations }}</h4>        */
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_animation }}</p>*/
/* 						                <div>*/
/* 					                        <input type="radio" value="slide" name="animation" {% if animation == 'slide' %} {{ 'checked' }} {% endif %}> Slide<br>*/
/* 					                        <input type="radio" value="fade" name="animation" {% if animation == 'fade' %} {{ 'checked' }} {% endif %}> Fade<br>*/
/* 					                        <input type="radio" value="none" name="animation" {% if animation == 'none' %} {{ 'checked' }} {% endif %}> None*/
/* 						                </div>*/
/* 							        </div>*/
/* 		    */
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_animation_time }}</p>*/
/* 						                <input type="text" name="animation_time" style="width:50px;margin-right:10px" value="{{ animation_time }}">*/
/* 						                <div>ms</div>*/
/* 							        </div>*/
/* 								</div>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*     $('#language a:first').tab('show');*/
/*     if($("input[name='use_cache']:radio:checked").val() == '0')*/
/*     {*/
/*         $('#input-cache_time_form').hide();*/
/*     }else*/
/*     {*/
/*         $('#input-cache_time_form').show();*/
/*     }*/
/*         */
/*     $("input[name='use_cache']").change(function(){*/
/*         val = $(this).val();*/
/*         if(val ==0)*/
/*         {*/
/*             $('#input-cache_time_form').hide();*/
/*         }else*/
/*         {*/
/*            $('#input-cache_time_form').show();*/
/*         }*/
/*     });*/
/* */
/*     jQuery(document).ready(function($) {*/
/* 		$(".button_parent_config").click(function(){*/
/* 			if($(this).hasClass('active'))*/
/* 				$(this).removeClass('active');*/
/* 			else*/
/* 				$(this).addClass('active');*/
/* */
/* 			$("#text_parent_config").collapse('toggle');*/
/* 		});*/
/* */
/* 		$(".button_content_config").click(function(){*/
/* 			if($(this).hasClass('active'))*/
/* 				$(this).removeClass('active');*/
/* 			else*/
/* 				$(this).addClass('active');*/
/* 			$("#text_content_config").collapse('toggle');*/
/* 		});*/
/* */
/*         $('#nestable-menu').on('click', function(e)*/
/*         {*/
/* 			var target = $(e.target),*/
/* 					action = target.data('action');*/
/* 			if (action === 'expand-all') {*/
/* 					$('.dd').nestable('expandAll');*/
/* 			}*/
/* 			if (action === 'collapse-all') {*/
/* 					$('.dd').nestable('collapseAll');*/
/* 			}*/
/*         });*/
/* */
/* 		$('#language').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-head-name-'+opt_select);*/
/* 			$('[id^="input-head-name-"]').addClass('hide');*/
/* 			_input.removeClass('hide');*/
/* 		});*/
/* */
/* 		$('#head_name_language').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-headname-'+opt_select);*/
/* 			$('[id^="input-headname-"]').addClass('hide');*/
/* 			_input.removeClass('hide');*/
/* 		});*/
/* */
/* 		$('#des_language').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-head-des-'+opt_select);*/
/* 			$('[id^="input-head-des-"]').addClass('hide');*/
/* 			_input.removeClass('hide');*/
/* 		});*/
/* */
/* 		$('#navigation_language').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-text-navigation-'+opt_select);*/
/* 			$('[id^="input-text-navigation-"]').addClass('hide');*/
/* 			_input.removeClass('hide');*/
/* 		});*/
/* */
/* 		$('#home_text_language').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-home-text-'+opt_select);*/
/* 			$('[id^="input-home-text-"]').addClass('hide');*/
/* 			_input.removeClass('hide');*/
/* 		});*/
/* */
/*         $("select[name=content_type]").change(function () {*/
/*             $("select[name=content_type] option:selected").each(function() {*/
/*                 $(".content_type").hide();*/
/*                 $("#content_type" + $(this).val()).show();*/
/*             });*/
/*         });*/
/*         $("#submenu-type").change(function () {*/
/*             $("#submenu-type option:selected").each(function() {*/
/*                 if($(this).val() == 2) {*/
/*                     $("#submenu-columns").show();*/
/*                 } else {*/
/*                     $("#submenu-columns").hide();*/
/*                 }*/
/*             });*/
/*         });*/
/* */
/* 		$('li','.content_type_html').first().addClass('active');*/
/* 		$('.tab-pane','.content_type_html .tab-content').first().addClass('active');*/
/*         $(".type_link").change(function () {*/
/*             $(".type_link option:selected").each(function() {*/
/*                 if($(this).val() == 1) {*/
/* 					$(".type_link_url").hide();*/
/* 					$(".type_link_category").show();*/
/*                 } else {*/
/* 					$(".type_link_category").hide();*/
/* 					$(".type_link_url").show();*/
/*                 }*/
/*             });*/
/*         });*/
/* */
/*         $('#product_autocomplete').autocomplete({*/
/*             delay: 500,*/
/*             source: function(request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request) ,*/
/*                     dataType: 'json',*/
/*                     success: function(json) {*/
/*                         json.unshift({*/
/*                             'product_id':  0,*/
/*                             'name':  'None'*/
/*                         });*/
/*                         response($.map(json, function(item) {*/
/*                             return {*/
/*                              	label: item.name,*/
/*                              	value: item.product_id*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             select: function(event) {*/
/*                 $('#product_autocomplete').val(event.label);*/
/*                 $('input[name=\'content[product][id]\']').val(event.value);*/
/*                 return false;*/
/*             },*/
/*             focus: function(event) {*/
/*                 return false;*/
/*             }*/
/*         });*/
/* */
/* 		// Manufacturer*/
/* 		$('input[name=\'manufacture_autocomplete\']').autocomplete({*/
/* 			'source': function(request, response) {*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=catalog/manufacturer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 					dataType: 'json',*/
/* 					success: function(json) {*/
/* 						response($.map(json, function(item) {*/
/* 							return {*/
/* 								label: item['name'],*/
/* 								value: item['manufacturer_id']*/
/* 							}*/
/* 						}));*/
/* 					}*/
/* 				});*/
/* 			},*/
/* 			'select': function(item) {*/
/* 				$('input[name=\'category\']').val('');*/
/* */
/* 				$('#product-category' + item['value']).remove();*/
/* */
/* 				$('#product-category').append('<div id="product-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="content[manufacture][id][]" value="' + item['value'] + '" /><input type="hidden" name="content[manufacture][name][]" value="' + item['label'] + '" /></div>');*/
/* 			}*/
/* 		});*/
/* */
/* 		$('#product-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 			$(this).parent().remove();*/
/* 		});*/
/* */
/* */
/*         $('#categories_autocomplete').autocomplete({*/
/*             delay: 500,*/
/*             source: function(request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' +  request,*/
/*                     dataType: 'json',*/
/*                     success: function(json) {*/
/*                             json.unshift({*/
/*                                 'category_id':  0,*/
/*                                 'name':  'None'*/
/*                             });*/
/*                             response($.map(json, function(item) {*/
/*                                 return {*/
/*                                     label: item.name,*/
/*                                     value: item.category_id*/
/*                                 }*/
/*                             }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             select: function(event) {*/
/*                 if(event.value > 0) {*/
/*                     $("#sort_categories > .dd-list").append('<li class="dd-item" data-id="' + event.value + '" data-name="' + event.label + '"><a class="fa fa-times"></a><div class="dd-handle">' + event.label + '</div></li>');*/
/*                 }*/
/*                 updateOutput2($('#sort_categories').data('output', $('#sort_categories_data')));*/
/* 				$( "#sort_categories .fa-times" ).on( "click", function() {*/
/* 					$(this).parent().remove();*/
/* 					updateOutput2($('#sort_categories').data('output', $('#sort_categories_data')));*/
/* 				});*/
/*                 return false;*/
/*             },*/
/*             focus: function(event) {*/
/*                 return false;*/
/*             }*/
/*         });*/
/* */
/*         function lagXHRobjekt() {*/
/*             var XHRobjekt = null;*/
/* */
/*             try {*/
/*                 ajaxRequest = new XMLHttpRequest(); // Firefox, Opera, ...*/
/*             } catch(err1) {*/
/*                 try {*/
/*                     ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP"); // Noen IE v.*/
/*                 } catch(err2) {*/
/*                     try {*/
/*                         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP"); // Noen IE v.*/
/*                     } catch(err3) {*/
/*                         ajaxRequest = false;*/
/*                     }*/
/*                 }*/
/*             }*/
/*             return ajaxRequest;*/
/*         }*/
/* */
/* */
/*         function menu_updatesort(jsonstring) {*/
/*             mittXHRobjekt = lagXHRobjekt();*/
/* */
/*             if (mittXHRobjekt) {*/
/*                 mittXHRobjekt.onreadystatechange = function() {*/
/*                     if(ajaxRequest.readyState == 4){*/
/*                         var ajaxDisplay = document.getElementById('sortDBfeedback');*/
/*                         ajaxDisplay.innerHTML = ajaxRequest.responseText;*/
/*                     }*/
/*                 }*/
/*                 ajaxRequest.open("GET", "index.php?route=extension/module/so_megamenu&user_token={{ user_token }}&jsonstring=" + encodeURIComponent(jsonstring), true);*/
/*                 ajaxRequest.setRequestHeader("Content-Type", "application/json");*/
/*                 ajaxRequest.send(null);*/
/*             }*/
/*         }*/
/* */
/*         var updateOutput = function(e)*/
/*         {*/
/*             var list   = e.length ? e : $(e.target),*/
/*                 output = list.data('output');*/
/* */
/*             if (window.JSON) {*/
/*                 menu_updatesort(window.JSON.stringify(list.nestable('serialize')));*/
/*             } else {*/
/*                 alert('JSON browser support required for this demo.');*/
/*             }*/
/*         };*/
/* */
/*         $('#nestable').nestable({*/
/*                 group: 1,*/
/*                 maxDepth: 4*/
/*         }).on('change', updateOutput);*/
/* */
/*         updateOutput($('#nestable').data('output', $('#nestable-output')));*/
/* */
/*         var updateOutput2 = function(e)*/
/*         {*/
/*             var list   = e.length ? e : $(e.target),*/
/*                 output = list.data('output');*/
/*             if (window.JSON && typeof(output)!= 'undefined' ) {*/
/*                 output.val(window.JSON.stringify(list.nestable('serialize')));*/
/*             }*/
/*         };*/
/* */
/*         $('#sort_categories').nestable({*/
/*                group: 1,*/
/*                 maxDepth: 5*/
/*         }).on('change', updateOutput2);*/
/* */
/*         updateOutput2($('#sort_categories').data('output', $('#sort_categories_data')));*/
/* */
/*        $( "#sort_categories .fa-times" ).on( "click", function() {*/
/*                $(this).parent().remove();*/
/*                updateOutput2($('#sort_categories').data('output', $('#sort_categories_data')));*/
/*        });*/
/*                 */
/*         ///cache*/
/*         var button = '<div class="remove-caching" style="margin-left: 15px"><button type="button" onclick="remove_cache()" title="{{ button_clear_cache }}" class="btn btn-danger"><i class="fa fa-remove"></i> {{ button_clear_cache }}</button></div>';*/
/*         var button_min = '<div class="remove-caching" style="margin-left: 7px"><button type="button" onclick="remove_cache()" title="{{ button_clear_cache }}" class="btn btn-danger"><i class="fa fa-remove"></i> </button></div>';*/
/*         */
/*         if($('#column-left').hasClass('active')){*/
/*             $('#column-left #stats').after(button);*/
/*         }else{*/
/*             $('#column-left #stats').after(button_min);*/
/*         }*/
/* */
/*         $('#button-menu').click(function(){*/
/*             $('.remove-caching').remove();*/
/*             if($(this).parents().find('#column-left').hasClass('active')){*/
/*                 $('#column-left #stats').after(button);*/
/*             }else{*/
/*                 $('#column-left #stats').after(button_min);*/
/*             }*/
/*         });*/
/*     });*/
/*         */
/*     function remove_cache(){*/
/*         var success_remove = '{{ success_remove }}';*/
/*         $.ajax({*/
/*             type: 'POST',*/
/*             url: '{{ linkremove }}',*/
/*             data: {	is_ajax_cache_lite: 1},*/
/*             success: function () {*/
/*                 var html = '<div class="alert alert-success cls-remove-cache" style="margin: 5px 25px"> '+success_remove+' <button type="button" class="close" data-dismiss="alert">&times;</button></div>';*/
/*                 if(!($('.page-header .container-fluid .alert-success')).hasClass('cls-remove-cache')){*/
/*                     $(html).insertAfter('.page-header .container-fluid');*/
/*                 }*/
/*             },*/
/*         });*/
/*     }*/
/* </script>*/
/* <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/* <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/* <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/* <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/* {{ footer }}*/
