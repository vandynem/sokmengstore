<?php

/* extension/module/so_page_builder.twig */
class __TwigTemplate_7a1a275505d97d5db4f7a88655a925f0e3cffac57b5b2b8c5f0b6c13f7207bd3 extends Twig_Template
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
        echo "
";
        // line 2
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-featured\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["entry_button_save"]) ? $context["entry_button_save"] : null);
        echo "\" class=\"btn btn-primary\" onclick=\"\$('#action').val('save');\$('#form-featured').submit();\"><i class=\"fa fa-save\"></i> ";
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>
\t\t\t\t<a class=\"btn btn-success\" onclick=\"\$('#action').val('save_edit');\$('#form-featured').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo (isset($context["button_save_and_edit"]) ? $context["button_save_and_edit"] : null);
        echo "\"><i class=\"fa fa-pencil-square-o\"></i> ";
        echo (isset($context["button_save_and_edit"]) ? $context["button_save_and_edit"] : null);
        echo "</a>
\t\t\t\t<a class=\"btn btn-info\" onclick=\"\$('#action').val('save_new');\$('#form-featured').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo (isset($context["button_save_and_new"]) ? $context["button_save_and_new"] : null);
        echo "\"><i class=\"fa fa-book\"></i>  ";
        echo (isset($context["button_save_and_new"]) ? $context["button_save_and_new"] : null);
        echo "</a>
\t\t\t\t<a href=\"";
        // line 10
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i>  ";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "</a>
\t\t\t</div>
\t\t\t<h1>";
        // line 12
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "heading_title_page"), "method");
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "\t\t        \t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 21
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array())) {
            // line 22
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>
\t\t\t";
            // line 23
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array());
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 27
        echo "\t\t";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 28
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i>
\t\t\t";
            // line 29
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>
\t\t\t";
            // line 33
            echo (isset($context["text_layout"]) ? $context["text_layout"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 37
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 39
        echo (isset($context["subheading"]) ? $context["subheading"] : null);
        echo "</h3>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 41
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-featured\" class=\"form-horizontal\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"rows\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t<li ";
        // line 45
        if (((isset($context["selectedid"]) ? $context["selectedid"] : null) == 0)) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 46
        echo (isset($context["link"]) ? $context["link"] : null);
        echo "\"> <span class=\"fa fa-plus\"></span>
\t\t\t\t\t\t\t\t\t";
        // line 47
        echo (isset($context["button_add_module"]) ? $context["button_add_module"] : null);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li role=\"presentation\" ";
        // line 50
        if (($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "module_id", array()) == (isset($context["selectedid"]) ? $context["selectedid"] : null))) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<select name=\"\" class=\"form-control js-select\" onchange=\"this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);\">
\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 52
        echo (isset($context["link"]) ? $context["link"] : null);
        echo "\">";
        echo (isset($context["text_select_option"]) ? $context["text_select_option"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t";
        // line 53
        $context["i"] = 0;
        // line 54
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduletabs"]) ? $context["moduletabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo (isset($context["link"]) ? $context["link"] : null);
            echo "&module_id=";
            echo $this->getAttribute($context["module"], "module_id", array());
            echo "\" ";
            if (($this->getAttribute($context["module"], "module_id", array()) == (isset($context["selectedid"]) ? $context["selectedid"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->getAttribute($context["module"], "name", array());
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            // line 56
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 57
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"rows\">
\t\t\t\t\t\t";
        // line 63
        $context["module_row"] = 1;
        // line 64
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            // line 65
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["selectedid"]) ? $context["selectedid"] : null)) {
                // line 66
                echo "\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t<a class=\"duplicate btn btn-primary\" onclick=\"return duplicateModule(this)\" href=\"";
                // line 67
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "&duplicate=1\"><span><i class=\"fa fa-copy\"></i> ";
                echo (isset($context["entry_button_duplicate"]) ? $context["entry_button_duplicate"] : null);
                echo "</span></a>
\t\t\t\t\t\t\t\t<a class=\"remove btn btn-danger\" onclick=\"return deleteModule(this)\" href=\"";
                // line 68
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "&delete=1\"><span><i class=\"fa fa-remove\"></i> ";
                echo (isset($context["entry_button_delete"]) ? $context["entry_button_delete"] : null);
                echo "</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t\t<div id=\"tab-module";
            echo (isset($context["module_row"]) ? $context["module_row"] : null);
            echo "\" class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" id=\"action\" value=\"\" />
\t\t\t\t\t\t\t\t\t<textarea name=\"page_builder[";
            // line 74
            echo $context["key"];
            echo "][config]\" class=\"hidden-content-layout hide\">";
            echo $this->getAttribute($context["module"], "page_builder", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-name\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 75
            echo (isset($context["entry_name_desc"]) ? $context["entry_name_desc"] : null);
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
            // line 78
            echo $this->getAttribute($context["module"], "name", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            // line 80
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array())) {
                // line 81
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 82
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array());
                echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 85
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"";
            // line 88
            echo (isset($context["entry_status_desc"]) ? $context["entry_status_desc"] : null);
            echo "\">";
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 92
            if ($this->getAttribute($context["module"], "status", array())) {
                // line 93
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 94
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 96
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 97
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6 col-xs-12 text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"add-row-new col-lg-3\" data-toggle=\"modal\" data-target=\"#config_row\" data-backdrop=\"static\" data-keyboard=\"false\"> <i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 109
            echo (isset($context["text_add_row"]) ? $context["text_add_row"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"><span data-toggle=\"tooltip\" title=\"";
            // line 113
            echo (isset($context["text_show_number_col_desc"]) ? $context["text_show_number_col_desc"] : null);
            echo "\">";
            echo (isset($context["text_show_number_col"]) ? $context["text_show_number_col"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group button-enablegrid\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default show-column\" onclick=\"\$('.layout-builder').addClass('show-column').removeClass('hide-column');\" type=\"button\"><span class=\"fa fa-check-square-o\"></span></button>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default hide-column\" onclick=\"\$('.layout-builder').removeClass('show-column').addClass('hide-column');\" type=\"button\"><span class=\"fa fa-square-o\"></span></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"><span data-toggle=\"tooltip\" title=\"";
            // line 120
            echo (isset($context["text_design_in_desc"]) ? $context["text_design_in_desc"] : null);
            echo "\">";
            echo (isset($context["text_design_in"]) ? $context["text_design_in"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group change-screens\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default active so-page-screens\" data-option=\"lg_col\" type=\"button\" data-placement=\"top\" data-screensTitle=\"";
            // line 122
            echo (isset($context["text_change_col_lg"]) ? $context["text_change_col_lg"] : null);
            echo "\"><span class=\"fa fa-desktop\"></span></button>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default so-page-screens\" data-option=\"md_col\" type=\"button\" data-placement=\"top\" data-screensTitle=\"";
            // line 123
            echo (isset($context["text_change_col_md"]) ? $context["text_change_col_md"] : null);
            echo "\"><span class=\"fa fa-laptop\"></span></button>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default so-page-screens\" data-option=\"sm_col\" type=\"button\" data-placement=\"top\" data-screensTitle=\"";
            // line 124
            echo (isset($context["text_change_col_sm"]) ? $context["text_change_col_sm"] : null);
            echo "\"> <span class=\"fa fa-tablet\"></span></button>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default so-page-screens\" data-option=\"xs_col\" type=\"button\" data-placement=\"top\" data-screensTitle=\"";
            // line 125
            echo (isset($context["text_change_col_xs"]) ? $context["text_change_col_xs"] : null);
            echo "\"><span class=\"fa fa-mobile\"></span> </button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12 text-center\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"><span data-toggle=\"tooltip\" title=\"";
            // line 129
            echo (isset($context["text_import_data_desc"]) ? $context["text_import_data_desc"] : null);
            echo "\">";
            echo (isset($context["text_import_data"]) ? $context["text_import_data"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"select-import btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"import_theme\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 132
            echo (isset($context["text_select_theme"]) ? $context["text_select_theme"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 133
            echo (isset($context["text_theme_sportbike"]) ? $context["text_theme_sportbike"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 134
            echo (isset($context["text_theme_computer"]) ? $context["text_theme_computer"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">";
            // line 135
            echo (isset($context["text_theme_furniture"]) ? $context["text_theme_furniture"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">";
            // line 136
            echo (isset($context["text_theme_fashion"]) ? $context["text_theme_fashion"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">";
            // line 137
            echo (isset($context["text_theme_landing"]) ? $context["text_theme_landing"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">";
            // line 138
            echo (isset($context["text_theme_faq"]) ? $context["text_theme_faq"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">";
            // line 139
            echo (isset($context["text_theme_pricing"]) ? $context["text_theme_pricing"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"button-import btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default btn-import_data\" onclick=\"\$('#action').val('import_data');\$('#form-featured').submit();\">";
            // line 143
            echo (isset($context["text_import_data"]) ? $context["text_import_data"] : null);
            echo "</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"layout-builder-wrapper\">
\t\t\t\t\t\t\t\t\t<div id=\"layout-builder";
            // line 149
            echo $context["key"];
            echo "\" class=\"layout-builder\">
\t\t\t\t\t\t\t\t\t\t<div class=\"so-col-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner-col\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"add-row-new pull-center\" data-toggle=\"modal\" data-target=\"#config_row\" data-backdrop=\"static\" data-keyboard=\"false\"> <i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 159
            echo (isset($context["text_add_row"]) ? $context["text_add_row"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 164
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            // line 165
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</form>
\t\t</div>
\t</div>
</div>

<div id=\"config_row\" class=\"modal modal-message modal-info fade\" tabindex=\"-1\" role=\"dialog\" data-sub=\"false\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 179
        echo (isset($context["text_config_row"]) ? $context["text_config_row"] : null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<form class=\"form-horizontal\">
\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"so_row_settings\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#row_config\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t";
        // line 187
        echo (isset($context["entry_config"]) ? $context["entry_config"] : null);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#row_advanced_setting\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t";
        // line 192
        echo (isset($context["entry_advanced"]) ? $context["entry_advanced"] : null);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"row_config\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"number_col\" class=\"control-label col-sm-6\">";
        // line 200
        echo (isset($context["text_col_num"]) ? $context["text_col_num"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<select name=\"number-col\" class=\"form-control\" id=\"number_col\">
\t\t\t\t\t\t\t\t\t\t";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 204
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\">";
            echo $context["i"];
            echo " ";
            if (($context["i"] == 1)) {
                echo " ";
                echo (isset($context["text_item"]) ? $context["text_item"] : null);
                echo " ";
            } else {
                echo " ";
                echo (isset($context["text_items"]) ? $context["text_items"] : null);
                echo " ";
            }
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"row_advanced_setting\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"screens_active\" class=\"control-label col-sm-6\">";
        // line 212
        echo (isset($context["text_screen_active"]) ? $context["text_screen_active"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<select name=\"screens-active\" class=\"form-control\" id=\"screens_active\">
\t\t\t\t\t\t\t\t\t\t<option value=\"lg_col\">";
        // line 215
        echo (isset($context["text_large_col"]) ? $context["text_large_col"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"md_col\">";
        // line 216
        echo (isset($context["text_medium_col"]) ? $context["text_medium_col"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"sm_col\">";
        // line 217
        echo (isset($context["text_small_col"]) ? $context["text_small_col"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"xs_col\">";
        // line 218
        echo (isset($context["text_extra_col"]) ? $context["text_extra_col"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 223
        echo (isset($context["text_style_width_column"]) ? $context["text_style_width_column"] : null);
        echo "</h4>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"large_col_cr\" class=\"control-label col-sm-6\">";
        // line 225
        echo (isset($context["text_large_col_"]) ? $context["text_large_col_"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<select name=\"large-col\" class=\"form-control\" id=\"large_col_cr\">
\t\t\t\t\t\t\t\t\t\t";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 229
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\" ";
            if (($context["i"] == 3)) {
                echo " ";
                echo "selected";
                echo " ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 230
            echo $context["i"];
            echo " ";
            if (($context["i"] == 1)) {
                echo " ";
                echo (isset($context["text_col"]) ? $context["text_col"] : null);
                echo " ";
            } else {
                echo " ";
                echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
                echo " ";
            }
            // line 231
            echo "\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t15 ";
        // line 234
        echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"medium_col_cr\" class=\"control-label col-sm-6\">";
        // line 240
        echo (isset($context["text_medium_col_"]) ? $context["text_medium_col_"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<select name=\"medium-col\" class=\"form-control\" id=\"medium_col_cr\">
\t\t\t\t\t\t\t\t\t\t";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 244
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\" ";
            if (($context["i"] == 4)) {
                echo " ";
                echo "selected";
                echo " ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 245
            echo $context["i"];
            echo " ";
            if (($context["i"] == 1)) {
                echo " ";
                echo (isset($context["text_col"]) ? $context["text_col"] : null);
                echo " ";
            } else {
                echo " ";
                echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
                echo " ";
            }
            // line 246
            echo "\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t15 ";
        // line 249
        echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"small_col_cr\" class=\"control-label col-sm-6\">";
        // line 255
        echo (isset($context["text_small_col_"]) ? $context["text_small_col_"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<select name=\"small-col\" class=\"form-control\" id=\"small_col_cr\">
\t\t\t\t\t\t\t\t\t\t";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 259
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\" ";
            if (($context["i"] == 6)) {
                echo " ";
                echo "selected";
                echo " ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 260
            echo $context["i"];
            echo " ";
            if (($context["i"] == 1)) {
                echo " ";
                echo (isset($context["text_col"]) ? $context["text_col"] : null);
                echo " ";
            } else {
                echo " ";
                echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
                echo " ";
            }
            // line 261
            echo "\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t15 ";
        // line 264
        echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"extra_col_cr\" class=\"control-label col-sm-6\">";
        // line 270
        echo (isset($context["text_extra_col_"]) ? $context["text_extra_col_"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<select name=\"extra-col\" class=\"form-control\" id=\"extra_col_cr\">
\t\t\t\t\t\t\t\t\t\t";
        // line 273
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 274
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\" ";
            if (($context["i"] == 12)) {
                echo " ";
                echo "selected";
                echo " ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 275
            echo $context["i"];
            echo " ";
            if (($context["i"] == 1)) {
                echo " ";
                echo (isset($context["text_col"]) ? $context["text_col"] : null);
                echo " ";
            } else {
                echo " ";
                echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
                echo " ";
            }
            // line 276
            echo "\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t15 ";
        // line 279
        echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-primary submit-save pull-left\"><i class=\"fa fa-save\"></i> ";
        // line 289
        echo (isset($context["text_save_all"]) ? $context["text_save_all"] : null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-success submit\"><i class=\"fa fa-pencil-square-o\"></i> ";
        // line 290
        echo (isset($context["text_save_change"]) ? $context["text_save_change"] : null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger so-close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 291
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div id=\"config_column\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" data-sub=\"false\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 302
        echo (isset($context["text_config_col"]) ? $context["text_config_col"] : null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<form class=\"form-horizontal\">
\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"so_col_settings\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#col_config\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t";
        // line 310
        echo (isset($context["entry_config"]) ? $context["entry_config"] : null);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#col_advanced_setting\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t";
        // line 315
        echo (isset($context["entry_advanced"]) ? $context["entry_advanced"] : null);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"col_config\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"number_col\" class=\"control-label col-sm-6\">";
        // line 323
        echo (isset($context["text_col_num"]) ? $context["text_col_num"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<select name=\"number-col\" class=\"form-control\" id=\"number_col\">
\t\t\t\t\t\t\t\t\t\t";
        // line 326
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 327
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\">";
            echo $context["i"];
            echo " ";
            if (($context["i"] == 1)) {
                echo " ";
                echo (isset($context["text_item"]) ? $context["text_item"] : null);
                echo " ";
            } else {
                echo " ";
                echo (isset($context["text_items"]) ? $context["text_items"] : null);
                echo " ";
            }
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 329
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"col_advanced_setting\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"large_col_cc\" class=\"control-label col-sm-6\">";
        // line 335
        echo (isset($context["text_large_col_"]) ? $context["text_large_col_"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<select name=\"large-col\" class=\"form-control\" id=\"large_col_cc\">
\t\t\t\t\t\t\t\t\t\t";
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 339
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\" ";
            if (($context["i"] == 3)) {
                echo " ";
                echo "selected";
                echo " ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 340
            echo $context["i"];
            echo " ";
            if (($context["i"] == 1)) {
                echo " ";
                echo (isset($context["text_col"]) ? $context["text_col"] : null);
                echo " ";
            } else {
                echo " ";
                echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
                echo " ";
            }
            // line 341
            echo "\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 343
        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t15 ";
        // line 344
        echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"medium_col_cc\" class=\"control-label col-sm-6\">";
        // line 350
        echo (isset($context["text_medium_col_"]) ? $context["text_medium_col_"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<select name=\"medium-col\" class=\"form-control\" id=\"medium_col_cc\">
\t\t\t\t\t\t\t\t\t\t";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 354
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\" ";
            if (($context["i"] == 4)) {
                echo " ";
                echo "selected";
                echo " ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 355
            echo $context["i"];
            echo " ";
            if (($context["i"] == 1)) {
                echo " ";
                echo (isset($context["text_col"]) ? $context["text_col"] : null);
                echo " ";
            } else {
                echo " ";
                echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
                echo " ";
            }
            // line 356
            echo "\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t15 ";
        // line 359
        echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"small_col_cc\" class=\"control-label col-sm-6\">";
        // line 365
        echo (isset($context["text_small_col_"]) ? $context["text_small_col_"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<select name=\"small-col\" class=\"form-control\" id=\"small_col_cc\">
\t\t\t\t\t\t\t\t\t\t";
        // line 368
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 369
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\" ";
            if (($context["i"] == 6)) {
                echo " ";
                echo "selected";
                echo " ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 370
            echo $context["i"];
            echo " ";
            if (($context["i"] == 1)) {
                echo " ";
                echo (isset($context["text_col"]) ? $context["text_col"] : null);
                echo " ";
            } else {
                echo " ";
                echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
                echo " ";
            }
            // line 371
            echo "\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t15 ";
        // line 374
        echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"extra_col_cc\" class=\"control-label col-sm-6\">";
        // line 380
        echo (isset($context["text_extra_col_"]) ? $context["text_extra_col_"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<select name=\"extra-col\" class=\"form-control\" id=\"extra_col_cc\">
\t\t\t\t\t\t\t\t\t\t";
        // line 383
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 384
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\" ";
            if (($context["i"] == 12)) {
                echo " ";
                echo "selected";
                echo " ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 385
            echo $context["i"];
            echo " ";
            if (($context["i"] == 1)) {
                echo " ";
                echo (isset($context["text_col"]) ? $context["text_col"] : null);
                echo " ";
            } else {
                echo " ";
                echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
                echo " ";
            }
            // line 386
            echo "\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t15 ";
        // line 389
        echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-primary submit-save pull-left\"><i class=\"fa fa-save\"></i> ";
        // line 399
        echo (isset($context["text_save_all"]) ? $context["text_save_all"] : null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-success submit\"><i class=\"fa fa-pencil-square-o\"></i> ";
        // line 400
        echo (isset($context["text_save_change"]) ? $context["text_save_change"] : null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger so-close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 401
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div id=\"style_row\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 412
        echo (isset($context["text_row_style"]) ? $context["text_row_style"] : null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<form class=\"form-horizontal\">
\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"so_row_style\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#row_style\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t";
        // line 420
        echo (isset($context["entry_style"]) ? $context["entry_style"] : null);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#row_advanced_style\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t";
        // line 425
        echo (isset($context["entry_advanced"]) ? $context["entry_advanced"] : null);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"row-parent\">
\t\t\t\t\t\t\t\t<a href=\"#row_section_style\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t";
        // line 430
        echo (isset($context["text_row_section"]) ? $context["text_row_section"] : null);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"row_style\">
\t\t\t\t\t\t\t<input class=\"form-control\" id=\"row_text_class_id\" type=\"hidden\" name=\"text_class_id\" />
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"row_text_class\" class=\"control-label col-sm-4\">";
        // line 439
        echo (isset($context["text_css_class"]) ? $context["text_css_class"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"row_text_class\" type=\"text\" name=\"text_class\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"row_container_fluid\" class=\"control-label col-sm-4\">";
        // line 445
        echo (isset($context["text_row_container_fluid"]) ? $context["text_row_container_fluid"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<select name=\"row_container_fluid\" class=\"form-control\" id=\"row_container_fluid\">
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 448
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 449
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 454
        echo (isset($context["text_text"]) ? $context["text_text"] : null);
        echo "</h4>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"row_text_color\" class=\"control-label col-sm-4\">";
        // line 456
        echo (isset($context["text_color"]) ? $context["text_color"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<span class=\"row-text-color\">
\t\t\t\t\t\t\t\t\t<span class=\"row-text-color-wheel\"></span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"text_color\" value=\"\" id=\"row_text_color\" class=\"row-text-color-value\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"row_link_color\" class=\"control-label col-sm-4\">";
        // line 465
        echo (isset($context["link_color"]) ? $context["link_color"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<span class=\"row-link-color\">
\t\t\t\t\t\t\t\t\t<span class=\"row-link-color-wheel\"></span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"link_color\" value=\"\" id=\"row_link_color\" class=\"row-link-color-value\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"row_link_hover_color\" class=\"control-label col-sm-4\">";
        // line 474
        echo (isset($context["link_hover_color"]) ? $context["link_hover_color"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<span class=\"row-link-hover-color\">
\t\t\t\t\t\t\t\t\t<span class=\"row-link-hover-color-wheel\"></span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"link_hover_color\" value=\"\" id=\"row_link_hover_color\" class=\"row-link-hover-color-value\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"row_heading_color\" class=\"control-label col-sm-4\">";
        // line 483
        echo (isset($context["heading_color"]) ? $context["heading_color"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<span class=\"row-heading-color\">
\t\t\t\t\t\t\t\t\t<span class=\"row-heading-color-wheel\"></span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"heading_color\" value=\"\" id=\"row_heading_color\" class=\"row-heading-color-value\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 492
        echo (isset($context["text_background"]) ? $context["text_background"] : null);
        echo "</h4>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"row_background_type\" class=\"control-label col-sm-4\">";
        // line 494
        echo (isset($context["text_background_type"]) ? $context["text_background_type"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<select name=\"background_type\" class=\"form-control\" id=\"row_background_type\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 497
        echo (isset($context["text_background_none"]) ? $context["text_background_none"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 498
        echo (isset($context["text_background_color"]) ? $context["text_background_color"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
        // line 499
        echo (isset($context["text_background_photo"]) ? $context["text_background_photo"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\">";
        // line 500
        echo (isset($context["text_background_video"]) ? $context["text_background_video"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row-background row-background-color\" style=\"display:none\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 506
        echo (isset($context["text_background"]) ? $context["text_background"] : null);
        echo " ";
        echo (isset($context["text_background_color"]) ? $context["text_background_color"] : null);
        echo "</h4>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"row_bg_color\" class=\"control-label col-sm-4\">";
        // line 508
        echo (isset($context["text_bg_color"]) ? $context["text_bg_color"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<span class=\"row-bg-color\">
\t\t\t\t\t\t\t\t\t\t<span class=\"row-bg-color-wheel\"></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bg_color\" value=\"\" id=\"row_bg_color\" class=\"row-bg-color-value\" />
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"row_bg_opacity\" class=\"control-label col-sm-4\">";
        // line 517
        echo (isset($context["text_bg_opacity"]) ? $context["text_bg_opacity"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bg_opacity\" id=\"bg_opacity\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row-background row-background-photo\" style=\"display:none\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 525
        echo (isset($context["text_background"]) ? $context["text_background"] : null);
        echo " ";
        echo (isset($context["text_background_photo"]) ? $context["text_background_photo"] : null);
        echo "</h4>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-sm-4\">";
        // line 527
        echo (isset($context["text_bg_image"]) ? $context["text_bg_image"] : null);
        echo ": </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image";
        // line 529
        echo (isset($context["rand"]) ? $context["rand"] : null);
        echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 530
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" width=\"100\" height=\"100\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control imageuploaded\" type=\"hidden\" data-base=\"";
        // line 532
        echo (isset($context["HTTP_CATALOG"]) ? $context["HTTP_CATALOG"] : null);
        echo "image/catalog/\" name=\"bg_image\" id=\"uploadimage";
        echo (isset($context["rand"]) ? $context["rand"] : null);
        echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-sm-4\">";
        // line 536
        echo (isset($context["text_bg_repeat"]) ? $context["text_bg_repeat"] : null);
        echo ": </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"bg_repeat\" class=\"form-control\" id=\"bg_repeat\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"no-repeat\">";
        // line 539
        echo (isset($context["text_background_none"]) ? $context["text_background_none"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"repeat\">";
        // line 540
        echo (isset($context["text_background_repeat"]) ? $context["text_background_repeat"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"repeat-x\">";
        // line 541
        echo (isset($context["text_background_horizontal"]) ? $context["text_background_horizontal"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"repeat-y\">";
        // line 542
        echo (isset($context["text_background_vertical"]) ? $context["text_background_vertical"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-sm-4\">";
        // line 547
        echo (isset($context["text_bg_position"]) ? $context["text_bg_position"] : null);
        echo ": </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"bg_position\" class=\"form-control\" id=\"bg_position\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"left top\">";
        // line 550
        echo (isset($context["text_bg_position_left_top"]) ? $context["text_bg_position_left_top"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"left center\">";
        // line 551
        echo (isset($context["text_bg_position_left_center"]) ? $context["text_bg_position_left_center"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"left bottom\">";
        // line 552
        echo (isset($context["text_bg_position_left_bottom"]) ? $context["text_bg_position_left_bottom"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"right top\">";
        // line 553
        echo (isset($context["text_bg_position_right_top"]) ? $context["text_bg_position_right_top"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"right center\">";
        // line 554
        echo (isset($context["text_bg_position_right_center"]) ? $context["text_bg_position_right_center"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"right bottom\">";
        // line 555
        echo (isset($context["text_bg_position_right_bottom"]) ? $context["text_bg_position_right_bottom"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"center top\">";
        // line 556
        echo (isset($context["text_bg_position_center_top"]) ? $context["text_bg_position_center_top"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"center center\">";
        // line 557
        echo (isset($context["text_bg_position_center"]) ? $context["text_bg_position_center"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"center bottom\">";
        // line 558
        echo (isset($context["text_bg_position_center_bottom"]) ? $context["text_bg_position_center_bottom"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-sm-4\">";
        // line 563
        echo (isset($context["text_bg_attachment"]) ? $context["text_bg_attachment"] : null);
        echo ": </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"bg_attachment\" class=\"form-control\" id=\"bg_attachment\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"scroll\">";
        // line 566
        echo (isset($context["text_background_attachment_scroll"]) ? $context["text_background_attachment_scroll"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"fixed\">";
        // line 567
        echo (isset($context["text_background_attachment_fixed"]) ? $context["text_background_attachment_fixed"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-sm-4\">";
        // line 572
        echo (isset($context["text_bg_scale"]) ? $context["text_bg_scale"] : null);
        echo ": </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"bg_scale\" class=\"form-control\" id=\"bg_scale\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 575
        echo (isset($context["text_background_none"]) ? $context["text_background_none"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"auto\">";
        // line 576
        echo (isset($context["text_background_scale_auto"]) ? $context["text_background_scale_auto"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"contain\">";
        // line 577
        echo (isset($context["text_background_scale_contain"]) ? $context["text_background_scale_contain"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"cover\">";
        // line 578
        echo (isset($context["text_background_scale_cover"]) ? $context["text_background_scale_cover"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"initial\">";
        // line 579
        echo (isset($context["text_background_scale_initial"]) ? $context["text_background_scale_initial"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row-background row-background-video\" style=\"display:none\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 586
        echo (isset($context["text_background"]) ? $context["text_background"] : null);
        echo " ";
        echo (isset($context["text_background_video"]) ? $context["text_background_video"] : null);
        echo "</h4>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"row_video_type\" class=\"control-label col-sm-4\">";
        // line 588
        echo (isset($context["text_video_type"]) ? $context["text_video_type"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"video_type\" class=\"form-control\" id=\"row_video_type\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 591
        echo (isset($context["text_video_youtube"]) ? $context["text_video_youtube"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 592
        echo (isset($context["text_video_webm"]) ? $context["text_video_webm"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"row_link_video\" class=\"control-label col-sm-4\">";
        // line 597
        echo (isset($context["text_link_video"]) ? $context["text_link_video"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"row_link_video\" type=\"text\" name=\"link_video\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"row_advanced_style\">
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 606
        echo (isset($context["text_margin"]) ? $context["text_margin"] : null);
        echo "</h4>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"row_margin\" class=\"control-label col-sm-4\">";
        // line 608
        echo (isset($context["text_margin"]) ? $context["text_margin"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"row_margin\" type=\"text\" name=\"margin\" placeholder=\"10px 10px 10px 10px\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 614
        echo (isset($context["text_padding"]) ? $context["text_padding"] : null);
        echo "</h4>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"row_padding\" class=\"control-label col-sm-4\">";
        // line 616
        echo (isset($context["text_padding"]) ? $context["text_padding"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"row_padding\" type=\"text\" name=\"padding\" placeholder=\"10px 10px 10px 10px\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"row_section_style\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"row_section\" class=\"control-label col-sm-4\">";
        // line 624
        echo (isset($context["text_row_section"]) ? $context["text_row_section"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<select name=\"row_section\" class=\"form-control\" id=\"row_section\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 627
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 628
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row-section-id\" style=\"display:none\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"row_section_id\" class=\"control-label col-sm-4\">";
        // line 634
        echo (isset($context["text_row_section_id"]) ? $context["text_row_section_id"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"row_section_id\" type=\"text\" name=\"row_section_id\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row-section-class\" style=\"display:none\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"row_section_class\" class=\"control-label col-sm-4\">";
        // line 642
        echo (isset($context["text_row_section_class"]) ? $context["text_row_section_class"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"row_section_class\" type=\"text\" name=\"row_section_class\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row-section-style\" style=\"display:none\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 650
        echo (isset($context["text_background"]) ? $context["text_background"] : null);
        echo "</h4>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"section_background_type\" class=\"control-label col-sm-4\">";
        // line 652
        echo (isset($context["text_background_type"]) ? $context["text_background_type"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"section_background_type\" class=\"form-control\" id=\"section_background_type\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 655
        echo (isset($context["text_background_none"]) ? $context["text_background_none"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 656
        echo (isset($context["text_background_color"]) ? $context["text_background_color"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
        // line 657
        echo (isset($context["text_background_photo"]) ? $context["text_background_photo"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">";
        // line 658
        echo (isset($context["text_background_video"]) ? $context["text_background_video"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"section-background section-background-color\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 664
        echo (isset($context["text_background_color"]) ? $context["text_background_color"] : null);
        echo "</h4>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"section_bg_color\" class=\"control-label col-sm-4\">";
        // line 666
        echo (isset($context["text_bg_color"]) ? $context["text_bg_color"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"section-bg-color\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"section-bg-color-wheel\"></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"section_bg_color\" value=\"\" id=\"section_bg_color\" class=\"section-bg-color-value\" />
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"section_bg_opacity\" class=\"control-label col-sm-4\">";
        // line 675
        echo (isset($context["text_bg_opacity"]) ? $context["text_bg_opacity"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"section_bg_opacity\" id=\"section_bg_opacity\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"section-background section-background-photo\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 683
        echo (isset($context["text_background_photo"]) ? $context["text_background_photo"] : null);
        echo "</h4>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-sm-4\">";
        // line 685
        echo (isset($context["text_bg_image"]) ? $context["text_bg_image"] : null);
        echo ": </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-";
        // line 687
        echo (isset($context["rand"]) ? $context["rand"] : null);
        echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 688
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" width=\"100\" height=\"100\"/>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control imageuploaded\" type=\"hidden\" data-base=\"";
        // line 690
        echo (isset($context["HTTP_CATALOG"]) ? $context["HTTP_CATALOG"] : null);
        echo "image/catalog/\" name=\"section_bg_image\" id=\"uploadimage-";
        echo (isset($context["rand"]) ? $context["rand"] : null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-sm-4\">";
        // line 694
        echo (isset($context["text_bg_repeat"]) ? $context["text_bg_repeat"] : null);
        echo ": </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"section_bg_repeat\" class=\"form-control\" id=\"section_bg_repeat\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"no-repeat\">";
        // line 697
        echo (isset($context["text_background_none"]) ? $context["text_background_none"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"repeat\">";
        // line 698
        echo (isset($context["text_background_repeat"]) ? $context["text_background_repeat"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"repeat-x\">";
        // line 699
        echo (isset($context["text_background_horizontal"]) ? $context["text_background_horizontal"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"repeat-y\">";
        // line 700
        echo (isset($context["text_background_vertical"]) ? $context["text_background_vertical"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-sm-4\">";
        // line 705
        echo (isset($context["text_bg_position"]) ? $context["text_bg_position"] : null);
        echo ": </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"section_bg_position\" class=\"form-control\" id=\"section_bg_position\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"left top\">";
        // line 708
        echo (isset($context["text_bg_position_left_top"]) ? $context["text_bg_position_left_top"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"left center\">";
        // line 709
        echo (isset($context["text_bg_position_left_center"]) ? $context["text_bg_position_left_center"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"left bottom\">";
        // line 710
        echo (isset($context["text_bg_position_left_bottom"]) ? $context["text_bg_position_left_bottom"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"right top\">";
        // line 711
        echo (isset($context["text_bg_position_right_top"]) ? $context["text_bg_position_right_top"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"right center\">";
        // line 712
        echo (isset($context["text_bg_position_right_center"]) ? $context["text_bg_position_right_center"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"right bottom\">";
        // line 713
        echo (isset($context["text_bg_position_right_bottom"]) ? $context["text_bg_position_right_bottom"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"center top\">";
        // line 714
        echo (isset($context["text_bg_position_center_top"]) ? $context["text_bg_position_center_top"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"center center\">";
        // line 715
        echo (isset($context["text_bg_position_center"]) ? $context["text_bg_position_center"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"center bottom\">";
        // line 716
        echo (isset($context["text_bg_position_center_bottom"]) ? $context["text_bg_position_center_bottom"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-sm-4\">";
        // line 721
        echo (isset($context["text_bg_attachment"]) ? $context["text_bg_attachment"] : null);
        echo ": </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"section_bg_attachment\" class=\"form-control\" id=\"section_bg_attachment\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"scroll\">";
        // line 724
        echo (isset($context["text_background_attachment_scroll"]) ? $context["text_background_attachment_scroll"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"fixed\">";
        // line 725
        echo (isset($context["text_background_attachment_fixed"]) ? $context["text_background_attachment_fixed"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-sm-4\">";
        // line 730
        echo (isset($context["text_bg_scale"]) ? $context["text_bg_scale"] : null);
        echo ": </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"section_bg_scale\" class=\"form-control\" id=\"section_bg_scale\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 733
        echo (isset($context["text_background_none"]) ? $context["text_background_none"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"auto\">";
        // line 734
        echo (isset($context["text_background_scale_auto"]) ? $context["text_background_scale_auto"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"contain\">";
        // line 735
        echo (isset($context["text_background_scale_contain"]) ? $context["text_background_scale_contain"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"cover\">";
        // line 736
        echo (isset($context["text_background_scale_cover"]) ? $context["text_background_scale_cover"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"initial\">";
        // line 737
        echo (isset($context["text_background_scale_initial"]) ? $context["text_background_scale_initial"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"section-background section-background-video\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 744
        echo (isset($context["text_background"]) ? $context["text_background"] : null);
        echo " ";
        echo (isset($context["text_background_video"]) ? $context["text_background_video"] : null);
        echo "</h4>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"section_video_type\" class=\"control-label col-sm-4\">";
        // line 746
        echo (isset($context["text_video_type"]) ? $context["text_video_type"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"section_video_type\" class=\"form-control\" id=\"section_video_type\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 749
        echo (isset($context["text_video_youtube"]) ? $context["text_video_youtube"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 750
        echo (isset($context["text_video_webm"]) ? $context["text_video_webm"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"section_link_video\" class=\"control-label col-sm-4\">";
        // line 755
        echo (isset($context["text_link_video"]) ? $context["text_link_video"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"section_link_video\" type=\"text\" name=\"section_link_video\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-primary submit-save pull-left\"><i class=\"fa fa-save\"></i> ";
        // line 767
        echo (isset($context["text_save_all"]) ? $context["text_save_all"] : null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-success submit\"><i class=\"fa fa-pencil-square-o\"></i> ";
        // line 768
        echo (isset($context["text_save_change"]) ? $context["text_save_change"] : null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger so-close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 769
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div id=\"style_col\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 780
        echo (isset($context["text_col_style"]) ? $context["text_col_style"] : null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<form class=\"form-horizontal\">
\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"so_col_style\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#col_style\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t";
        // line 788
        echo (isset($context["entry_config"]) ? $context["entry_config"] : null);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#col_advanced_style\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t";
        // line 793
        echo (isset($context["entry_advanced"]) ? $context["entry_advanced"] : null);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#col_responsive_layout\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t";
        // line 798
        echo (isset($context["text_responsive_layout"]) ? $context["text_responsive_layout"] : null);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"col_style\">
\t\t\t\t\t\t\t<input class=\"form-control\" id=\"col_text_class_id\" type=\"hidden\" name=\"text_class_id\" />
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"col_text_class\" class=\"control-label col-sm-4\">";
        // line 807
        echo (isset($context["text_css_class"]) ? $context["text_css_class"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"col_text_class\" type=\"text\" name=\"text_class\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 813
        echo (isset($context["text_text"]) ? $context["text_text"] : null);
        echo "</h4>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"col_text_color\" class=\"control-label col-sm-4\">";
        // line 815
        echo (isset($context["text_color"]) ? $context["text_color"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<span class=\"col-text-color\">
\t\t\t\t\t\t\t\t\t\t<span class=\"col-text-color-wheel\"></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"text_color\" value=\"\" id=\"col_text_color\" class=\"col-text-color-value\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"col_link_color\" class=\"control-label col-sm-4\">";
        // line 824
        echo (isset($context["link_color"]) ? $context["link_color"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<span class=\"col-link-color\">
\t\t\t\t\t\t\t\t\t\t<span class=\"col-link-color-wheel\"></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"link_color\" value=\"\" id=\"col_link_color\" class=\"col-link-color-value\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"col_link_hover_color\" class=\"control-label col-sm-4\">";
        // line 833
        echo (isset($context["link_hover_color"]) ? $context["link_hover_color"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<span class=\"col-link-hover-color\">
\t\t\t\t\t\t\t\t\t\t<span class=\"col-link-hover-color-wheel\"></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"link_hover_color\" value=\"\" id=\"col_link_hover_color\" class=\"col-link-hover-color-value\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"col_heading_color\" class=\"control-label col-sm-4\">";
        // line 842
        echo (isset($context["heading_color"]) ? $context["heading_color"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<span class=\"col-heading-color\">
\t\t\t\t\t\t\t\t\t\t<span class=\"col-heading-color-wheel\"></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"heading_color\" value=\"\" id=\"col_heading_color\" class=\"col-heading-color-value\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 851
        echo (isset($context["text_background"]) ? $context["text_background"] : null);
        echo "</h4>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"col_background_type\" class=\"control-label col-sm-4\">";
        // line 853
        echo (isset($context["text_background_type"]) ? $context["text_background_type"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<select name=\"background_type\" class=\"form-control\" id=\"col_background_type\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 856
        echo (isset($context["text_background_none"]) ? $context["text_background_none"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 857
        echo (isset($context["text_background_color"]) ? $context["text_background_color"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
        // line 858
        echo (isset($context["text_background_photo"]) ? $context["text_background_photo"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\">";
        // line 859
        echo (isset($context["text_background_video"]) ? $context["text_background_video"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-background col-background-color\" style=\"display:none\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 865
        echo (isset($context["text_background_color"]) ? $context["text_background_color"] : null);
        echo "</h4>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"col_bg_color\" class=\"control-label col-sm-4\">";
        // line 867
        echo (isset($context["text_bg_color"]) ? $context["text_bg_color"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<span class=\"col-bg-color\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"col-bg-color-wheel\"></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bg_color\" value=\"\" id=\"col_bg_color\" class=\"col-bg-color-value\" />
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"row_bg_opacity\" class=\"control-label col-sm-4\">";
        // line 876
        echo (isset($context["text_bg_opacity"]) ? $context["text_bg_opacity"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bg_opacity\" id=\"bg_opacity\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-background col-background-photo\" style=\"display:none\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 884
        echo (isset($context["text_background_photo"]) ? $context["text_background_photo"] : null);
        echo "</h4>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-sm-4\">";
        // line 886
        echo (isset($context["text_bg_image"]) ? $context["text_bg_image"] : null);
        echo ": </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image";
        // line 888
        echo (isset($context["rand_col"]) ? $context["rand_col"] : null);
        echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 889
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" width=\"100\" height=\"100\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control imageuploaded\" type=\"hidden\" data-base=\"";
        // line 891
        echo (isset($context["HTTP_CATALOG"]) ? $context["HTTP_CATALOG"] : null);
        echo "image/catalog/\" name=\"bg_image\" id=\"uploadimage";
        echo (isset($context["rand_col"]) ? $context["rand_col"] : null);
        echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-sm-4\">";
        // line 895
        echo (isset($context["text_bg_repeat"]) ? $context["text_bg_repeat"] : null);
        echo ": </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"bg_repeat\" class=\"form-control\" id=\"bg_repeat\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"no-repeat\">";
        // line 898
        echo (isset($context["text_background_none"]) ? $context["text_background_none"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"repeat\">";
        // line 899
        echo (isset($context["text_background_repeat"]) ? $context["text_background_repeat"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"repeat-x\">";
        // line 900
        echo (isset($context["text_background_horizontal"]) ? $context["text_background_horizontal"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"repeat-y\">";
        // line 901
        echo (isset($context["text_background_vertical"]) ? $context["text_background_vertical"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-sm-4\">";
        // line 906
        echo (isset($context["text_bg_position"]) ? $context["text_bg_position"] : null);
        echo ": </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"bg_position\" class=\"form-control\" id=\"bg_position\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"left top\">";
        // line 909
        echo (isset($context["text_bg_position_left_top"]) ? $context["text_bg_position_left_top"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"left center\">";
        // line 910
        echo (isset($context["text_bg_position_left_center"]) ? $context["text_bg_position_left_center"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"left bottom\">";
        // line 911
        echo (isset($context["text_bg_position_left_bottom"]) ? $context["text_bg_position_left_bottom"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"right top\">";
        // line 912
        echo (isset($context["text_bg_position_right_top"]) ? $context["text_bg_position_right_top"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"right center\">";
        // line 913
        echo (isset($context["text_bg_position_right_center"]) ? $context["text_bg_position_right_center"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"right bottom\">";
        // line 914
        echo (isset($context["text_bg_position_right_bottom"]) ? $context["text_bg_position_right_bottom"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"center top\">";
        // line 915
        echo (isset($context["text_bg_position_center_top"]) ? $context["text_bg_position_center_top"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"center center\">";
        // line 916
        echo (isset($context["text_bg_position_center"]) ? $context["text_bg_position_center"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"center bottom\">";
        // line 917
        echo (isset($context["text_bg_position_center_bottom"]) ? $context["text_bg_position_center_bottom"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-sm-4\">";
        // line 922
        echo (isset($context["text_bg_attachment"]) ? $context["text_bg_attachment"] : null);
        echo ": </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"bg_attachment\" class=\"form-control\" id=\"bg_attachment\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"scroll\">";
        // line 925
        echo (isset($context["text_background_attachment_scroll"]) ? $context["text_background_attachment_scroll"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"fixed\">";
        // line 926
        echo (isset($context["text_background_attachment_fixed"]) ? $context["text_background_attachment_fixed"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label col-sm-4\">";
        // line 931
        echo (isset($context["text_bg_scale"]) ? $context["text_bg_scale"] : null);
        echo ": </label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"bg_scale\" class=\"form-control\" id=\"bg_scale\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 934
        echo (isset($context["text_background_none"]) ? $context["text_background_none"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"auto\">";
        // line 935
        echo (isset($context["text_background_scale_auto"]) ? $context["text_background_scale_auto"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"contain\">";
        // line 936
        echo (isset($context["text_background_scale_contain"]) ? $context["text_background_scale_contain"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"cover\">";
        // line 937
        echo (isset($context["text_background_scale_cover"]) ? $context["text_background_scale_cover"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"initial\">";
        // line 938
        echo (isset($context["text_background_scale_initial"]) ? $context["text_background_scale_initial"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-background col-background-video\" style=\"display:none\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 945
        echo (isset($context["text_background"]) ? $context["text_background"] : null);
        echo " ";
        echo (isset($context["text_background_video"]) ? $context["text_background_video"] : null);
        echo "</h4>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"col_video_type\" class=\"control-label col-sm-4\">";
        // line 947
        echo (isset($context["text_video_type"]) ? $context["text_video_type"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"col_video_type\" class=\"form-control\" id=\"col_video_type\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 950
        echo (isset($context["text_video_youtube"]) ? $context["text_video_youtube"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 951
        echo (isset($context["text_video_webm"]) ? $context["text_video_webm"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"col_link_video\" class=\"control-label col-sm-4\">";
        // line 956
        echo (isset($context["text_link_video"]) ? $context["text_link_video"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"col_link_video\" type=\"text\" name=\"col_link_video\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"col_advanced_style\">
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 965
        echo (isset($context["text_margin"]) ? $context["text_margin"] : null);
        echo "</h4>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"col_margin\" class=\"control-label col-sm-4\">";
        // line 967
        echo (isset($context["text_margin"]) ? $context["text_margin"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"col_margin\" type=\"text\" name=\"margin\" placeholder=\"10px 10px 10px 10px\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h4 style=\"font-weight:bold\">";
        // line 973
        echo (isset($context["text_padding"]) ? $context["text_padding"] : null);
        echo "</h4>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"col_padding\" class=\"control-label col-sm-4\">";
        // line 975
        echo (isset($context["text_padding"]) ? $context["text_padding"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"col_padding\" type=\"text\" name=\"padding\" placeholder=\"10px 10px 10px 10px\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"col_responsive_layout\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"large_col\" class=\"control-label col-sm-6\">";
        // line 983
        echo (isset($context["text_large_col_"]) ? $context["text_large_col_"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<select name=\"lg_col\" class=\"form-control\" id=\"large_col\">
\t\t\t\t\t\t\t\t\t\t";
        // line 986
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 987
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 988
            echo $context["i"];
            echo " ";
            echo ((($context["i"] == 1)) ? ((isset($context["text_col"]) ? $context["text_col"] : null)) : ((isset($context["text_cols"]) ? $context["text_cols"] : null)));
            echo "
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 991
        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t15 ";
        // line 992
        echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"medium_col\" class=\"control-label col-sm-6\">";
        // line 998
        echo (isset($context["text_medium_col_"]) ? $context["text_medium_col_"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<select name=\"md_col\" class=\"form-control\" id=\"medium_col\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1001
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 1002
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1003
            echo $context["i"];
            echo " ";
            echo ((($context["i"] == 1)) ? ((isset($context["text_col"]) ? $context["text_col"] : null)) : ((isset($context["text_cols"]) ? $context["text_cols"] : null)));
            echo "
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1006
        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t15 ";
        // line 1007
        echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"small_col\" class=\"control-label col-sm-6\">";
        // line 1013
        echo (isset($context["text_small_col_"]) ? $context["text_small_col_"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<select name=\"sm_col\" class=\"form-control\" id=\"small_col\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1016
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 1017
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1018
            echo $context["i"];
            echo " ";
            echo ((($context["i"] == 1)) ? ((isset($context["text_col"]) ? $context["text_col"] : null)) : ((isset($context["text_cols"]) ? $context["text_cols"] : null)));
            echo "
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1021
        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t15 ";
        // line 1022
        echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"extra_col\" class=\"control-label col-sm-6\">";
        // line 1028
        echo (isset($context["text_extra_col_"]) ? $context["text_extra_col_"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<select name=\"xs_col\" class=\"form-control\" id=\"extra_col\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1031
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 1032
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1033
            echo $context["i"];
            echo " ";
            echo ((($context["i"] == 1)) ? ((isset($context["text_col"]) ? $context["text_col"] : null)) : ((isset($context["text_cols"]) ? $context["text_cols"] : null)));
            echo "
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1036
        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t15 ";
        // line 1037
        echo (isset($context["text_cols"]) ? $context["text_cols"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-primary submit-save pull-left\"><i class=\"fa fa-save\"></i> ";
        // line 1047
        echo (isset($context["text_save_all"]) ? $context["text_save_all"] : null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-success submit\"><i class=\"fa fa-pencil-square-o\"></i> ";
        // line 1048
        echo (isset($context["text_save_change"]) ? $context["text_save_change"] : null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger so-close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 1049
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div id=\"config_module\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog modal-lg\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 1060
        echo (isset($context["text_add_module"]) ? $context["text_add_module"] : null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"listmods\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 1065
        $context["i"] = 0;
        echo " 

\t\t\t\t\t";
        // line 1067
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["ext"]) {
            // line 1068
            echo "\t\t\t\t\t\t<div class=\"col-sm-4 mod-widget\">
\t\t\t\t\t\t\t<div class=\"mod-head\">
\t\t\t\t\t\t\t\t";
            // line 1070
            echo strip_tags($this->getAttribute($context["ext"], "name", array()));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mod-items\">

\t\t\t\t\t\t\t\t";
            // line 1074
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ext"], "module", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["emod"]) {
                // line 1075
                echo "\t\t\t\t\t\t\t\t<div class=\"module-item so-page-widget\" data-module=\"";
                echo $this->getAttribute($context["emod"], "module", array());
                echo "\" data-type=\"module\" data-name=\"";
                echo $this->getAttribute($context["emod"], "name", array());
                echo "\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"w-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"so-page-wicon\"><i class=\"fa fa-university\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 1080
                echo $this->getAttribute($context["emod"], "name", array());
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"widget-title-edit\">";
                // line 1081
                echo $this->getAttribute($context["emod"], "code", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"widget-tool\">
\t\t\t\t\t\t\t\t\t\t<div data-icontitle=\"";
                // line 1085
                echo (isset($context["text_java_sortModule"]) ? $context["text_java_sortModule"] : null);
                echo "\" class=\"so-page-wsort so-page-icon-widget\"><i class=\"fa fa-arrows\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div data-iconTitle=\"";
                // line 1086
                echo (isset($context["text_java_deleteModule"]) ? $context["text_java_deleteModule"] : null);
                echo "\" class=\"so-page-wdelete so-page-icon-widget\"><i class=\"fa fa-remove\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div data-icontitle=\"";
                // line 1087
                echo (isset($context["text_java_editModule"]) ? $context["text_java_editModule"] : null);
                echo "\" class=\"so-page-wedit so-page-icon-widget\" data-module=\"";
                echo $context["key"];
                echo "\" data-href=\"";
                echo $this->getAttribute((isset($context["ourl"]) ? $context["ourl"] : null), "link", array(0 => ("extension/module/" . $context["key"]), 1 => ((("module_id=" . $this->getAttribute($context["emod"], "id", array())) . "&user_token=") . (isset($context["user_token"]) ? $context["user_token"] : null))), "method");
                echo "\" >
\t\t\t\t\t\t\t\t\t\t<i class='fa fa-edit'> </i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div data-iconTitle=\"";
                // line 1090
                echo (isset($context["text_java_copyModule"]) ? $context["text_java_copyModule"] : null);
                echo "\" class=\"so-page-wcopy so-page-icon-widget\"><i class=\"fa fa-copy\"></i></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1094
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 1096
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 1097
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['ext'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1098
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-danger so-close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 1102
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div id=\"config_shortcode\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog modal-lg\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<div class=\"header_shortcodes_plugin\">
\t\t\t\t\t<div id=\"yt-generator-filter\">
\t\t\t\t\t\t";
        // line 1114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupsYT"]) ? $context["groupsYT"] : null));
        foreach ($context['_seq'] as $context["group"] => $context["label"]) {
            // line 1115
            echo "\t\t\t\t\t\t\t<a href=\"javascript:;\" data-filter=\"";
            echo $context["group"];
            echo "\">";
            echo $context["label"];
            echo "</a>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1117
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"yt-generator_box_search\">
\t\t\t\t\t\t<input name=\"yt_generator_search\" id=\"yt-generator-search\" value=\"\" placeholder=\"Search for shortcodes\" type=\"text\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"wpo-widgetslist\">
\t\t\t\t\t<div class=\"row yt-generator-choices\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t";
        // line 1127
        $context["i"] = 0;
        // line 1128
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shortcoders"]) ? $context["shortcoders"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["shortcode"]) {
            // line 1129
            echo "\t\t\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 1130
            echo "\t\t\t\t\t\t\t";
            if ((((isset($context["i"]) ? $context["i"] : null) % 3) == 1)) {
                // line 1131
                echo "\t\t\t\t\t\t\t<div class=\"row-shortcode\">
\t\t\t\t\t\t\t";
            }
            // line 1133
            echo "\t\t\t\t\t\t\t\t<div class=\"wapper-shortcode\">
\t\t\t\t\t\t\t\t\t<div class=\"shortcode-item so-page-widget\" data-group=\"";
            // line 1134
            echo $this->getAttribute($context["shortcode"], "group", array());
            echo "\" data-name=\"";
            echo $this->getAttribute($context["shortcode"], "name", array());
            echo "\" data-shortcode=\"";
            echo $context["name"];
            echo "\" data-desc=\"";
            echo $this->getAttribute($context["shortcode"], "desc", array());
            echo "\" data-type=\"shortcode\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-tool\">
\t\t\t\t\t\t\t\t\t\t\t<div data-icontitle=\"";
            // line 1136
            echo (isset($context["text_java_sortShortcode"]) ? $context["text_java_sortShortcode"] : null);
            echo "\" class=\"so-page-wsort so-page-icon-widget\"><i class=\"fa fa-arrows\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t<div data-icontitle=\"";
            // line 1137
            echo (isset($context["text_java_deleteShortcode"]) ? $context["text_java_deleteShortcode"] : null);
            echo "\" class=\"so-page-wdelete so-page-icon-widget\"><i class=\"fa fa-remove\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t<div data-icontitle=\"";
            // line 1138
            echo (isset($context["text_java_editShortcode"]) ? $context["text_java_editShortcode"] : null);
            echo "\" class=\"so-page-wedit so-page-icon-widget\"><i class=\"fa fa-edit\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t<div data-icontitle=\"";
            // line 1139
            echo (isset($context["text_java_copyShortcode"]) ? $context["text_java_copyShortcode"] : null);
            echo "\" class=\"so-page-wcopy so-page-icon-widget\"><i class=\"fa fa-copy\"></i></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"w-inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"so-page-wicon\"><i class=\"fa fa-";
            // line 1142
            echo $this->getAttribute($context["shortcode"], "icon", array());
            echo "\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"widget-title-shortcode\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"widget-title-edit\">";
            // line 1145
            echo $this->getAttribute($context["shortcode"], "name", array());
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"content_shortcode\" class=\"hidden-content-shortcode hide\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
            // line 1154
            if (((((isset($context["i"]) ? $context["i"] : null) % 3) == 0) || ((isset($context["i"]) ? $context["i"] : null) == twig_length_filter($this->env, (isset($context["shortcoders"]) ? $context["shortcoders"] : null))))) {
                // line 1155
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 1157
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['shortcode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1158
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wpo-widgetform\"></div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-info pull-left yt-generator-home\"> ";
        // line 1164
        echo (isset($context["text_backtolist"]) ? $context["text_backtolist"] : null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary submit-save pull-left\"><i class=\"fa fa-save\"></i> ";
        // line 1165
        echo (isset($context["text_save_all"]) ? $context["text_save_all"] : null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-success submit\"><i class=\"fa fa-pencil-square-o\"></i> ";
        // line 1166
        echo (isset($context["text_save_change"]) ? $context["text_save_change"] : null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger so-close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 1167
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div id=\"edit_shortcode\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog modal-lg\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 1178
        echo (isset($context["text_edit_shortcode"]) ? $context["text_edit_shortcode"] : null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"wpo-widgetform\"></div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-primary submit-save pull-left\"><i class=\"fa fa-save\"></i> ";
        // line 1184
        echo (isset($context["text_save_all"]) ? $context["text_save_all"] : null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-success submit\"><i class=\"fa fa-pencil-square-o\"></i> ";
        // line 1185
        echo (isset($context["text_save_change"]) ? $context["text_save_change"] : null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger so-close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 1186
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div id=\"edit_module\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog modal-lg\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 1197
        echo (isset($context["text_edit_module"]) ? $context["text_edit_module"] : null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">

\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-danger so-close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 1203
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
<script type=\"text/javascript\">
\t\$('#so_row_settings a:first,#so_row_style a:first,#so_col_settings a:first,#so_col_style a:first,#language a:first').tab('show');
\t/* Random string */
\tfunction randString(n) {
\t\tif (!n) {
\t\t\tn = 5;
\t\t}
\t\tvar text = '';
\t\tvar possible = 'abcdefghijklmnopqrstuvwxyz0123456789';
\t\tfor (var i = 0; i < n; i++) {
\t\t\ttext += possible.charAt(Math.floor(Math.random() * possible.length));
\t\t}
\t\treturn text;
\t}

\t/* Change background type Row */
\t\$('#row_background_type').change(function() {
\t\tvar row_background_type = \$(this).val();
\t\tswitch (row_background_type) {
\t\t\tcase '0':
\t\t\t\t\$('.row-background').hide();
\t\t\t\tbreak;
\t\t\tcase '1':
\t\t\t\t\$('.row-background').hide();
\t\t\t\t\$('.row-background-color').show();
\t\t\t\tbreak;
\t\t\tcase '2':
\t\t\t\t\$('.row-background').hide();
\t\t\t\t\$('.row-background-photo').show();
\t\t\t\tbreak;
\t\t\tcase '3':
\t\t\t\t\$('.row-background').hide();
\t\t\t\t\$('.row-background-video').show();
\t\t\t\tbreak;
\t\t}
\t});

\t/* Change video type Row */
\t\$('#row_video_type').change(function() {
\t\tvar row_video_type = \$(this).val();
\t\tswitch (row_video_type) {
\t\t\tcase '0':
\t\t\t\t\$('#row_link_video').val(\"YE7VzlLtp-4\");
\t\t\t\tbreak;
\t\t\tcase '1':
\t\t\t\t\$('#row_link_video').val(\"http://video.webmfiles.org/big-buck-bunny_trailer.webm\");
\t\t\t\tbreak;
\t\t}
\t});

\t/* Show section Row */
\t\$('#row_section').change(function() {
\t\tvar row_section = \$(this).val();
\t\tswitch (row_section) {
\t\t\tcase '0':
\t\t\t\t\$('.row-section-id,.row-section-class,.row-section-style').hide();
\t\t\t\tbreak;
\t\t\tcase '1':
\t\t\t\t\$('.row-section-id,.row-section-class,.row-section-style').show();
\t\t\t\tbreak;
\t\t}
\t});
\t
\t/* Change background type Section */
\t\$('#section_background_type').change(function() {
\t\tvar row_background_type = \$(this).val();
\t\tswitch (row_background_type) {
\t\t\tcase '0':
\t\t\t\t\$('.section-background').hide();
\t\t\t\tbreak;
\t\t\tcase '1':
\t\t\t\t\$('.section-background').hide();
\t\t\t\t\$('.section-background-color').show();
\t\t\t\tbreak;
\t\t\tcase '2':
\t\t\t\t\$('.section-background').hide();
\t\t\t\t\$('.section-background-photo').show();
\t\t\t\tbreak;
\t\t\tcase '3':
\t\t\t\t\$('.section-background').hide();
\t\t\t\t\$('.section-background-video').show();
\t\t\t\tbreak;
\t\t}
\t});
\t
\t/* Change video type Section */
\t\$('#section_video_type').change(function() {
\t\tvar section_video_type = \$(this).val();
\t\tswitch (section_video_type) {
\t\t\tcase '0':
\t\t\t\t\$('#section_link_video').val(\"YE7VzlLtp-4\");
\t\t\t\tbreak;
\t\t\tcase '1':
\t\t\t\t\$('#section_link_video').val(\"http://video.webmfiles.org/big-buck-bunny_trailer.webm\");
\t\t\t\tbreak;
\t\t}
\t});
\t
\t/* Change background type Col */
\t\$('#col_background_type').change(function() {
\t\tvar col_background_type = \$(this).val();
\t\tswitch (col_background_type) {
\t\t\tcase '0':
\t\t\t\t\$('.col-background').hide();
\t\t\t\tbreak;
\t\t\tcase '1':
\t\t\t\t\$('.col-background').hide();
\t\t\t\t\$('.col-background-color').show();
\t\t\t\tbreak;
\t\t\tcase '2':
\t\t\t\t\$('.col-background').hide();
\t\t\t\t\$('.col-background-photo').show();
\t\t\t\tbreak;
\t\t\tcase '3':
\t\t\t\t\$('.col-background').hide();
\t\t\t\t\$('.col-background-video').show();
\t\t\t\tbreak;
\t\t}
\t});
\t
\t/* Change video type Col */
\t\$('#col_video_type').change(function() {
\t\tvar col_video_type = \$(this).val();
\t\tswitch (col_video_type) {
\t\t\tcase '0':
\t\t\t\t\$('#col_link_video').val(\"YE7VzlLtp-4\");
\t\t\t\tbreak;
\t\t\tcase '1':
\t\t\t\t\$('#col_link_video').val(\"http://video.webmfiles.org/big-buck-bunny_trailer.webm\");
\t\t\t\tbreak;
\t\t}
\t});
\t
\t/* Add new Image */
\tfunction addImage() {
\t\tvar key_add_image = \"\";
\t\t\$('.yt-generator-isp-add-media').click(function() {
\t\t\tkey_add_image = randString(10);
\t\t\t\$('#yt-generator-attr-image').append(\"<span><a href='' id='thumb-image\" + key_add_image +
\t\t\t\t\"' data-toggle='image' class='img-thumbnail'><img src='";
        // line 1351
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "' alt='' title='' data-placeholder='";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "' width='100' height='100' /></a><input class='form-control imageuploaded' type='hidden' data-base='";
        echo (isset($context["HTTP_CATALOG"]) ? $context["HTTP_CATALOG"] : null);
        echo "image/catalog/'  name='media_image{}' id='uploadimage\" +
\t\t\t\tkey_add_image + \"' value='no_image.png'/><i class='fa fa-times'></i></span>\");
\t\t});
\t}

\tvar languagesDefault = \"";
        // line 1356
        echo (isset($context["languagesDefault"]) ? $context["languagesDefault"] : null);
        echo "\";
\tvar textDelete = \"";
        // line 1357
        echo (isset($context["text_java_textDelete"]) ? $context["text_java_textDelete"] : null);
        echo "\";
\tvar textDuplicate = \"";
        // line 1358
        echo (isset($context["text_java_textDuplicate"]) ? $context["text_java_textDuplicate"] : null);
        echo "\";
\tvar textPreview = \"";
        // line 1359
        echo (isset($context["text_java_textPreview"]) ? $context["text_java_textPreview"] : null);
        echo "\";
\tvar textCol = [];
\ttextCol[\"col\"] = \"";
        // line 1361
        echo (isset($context["text_java_col"]) ? $context["text_java_col"] : null);
        echo "\";
\ttextCol[\"cols\"] = \"";
        // line 1362
        echo (isset($context["text_java_cols"]) ? $context["text_java_cols"] : null);
        echo "\";
\ttextCol[\"sortCol\"] = \"";
        // line 1363
        echo (isset($context["text_java_sortCol"]) ? $context["text_java_sortCol"] : null);
        echo "\";
\ttextCol[\"deleteCol\"] = \"";
        // line 1364
        echo (isset($context["text_java_deleteCol"]) ? $context["text_java_deleteCol"] : null);
        echo "\";
\ttextCol[\"editCol\"] = \"";
        // line 1365
        echo (isset($context["text_java_editCol"]) ? $context["text_java_editCol"] : null);
        echo "\";
\ttextCol[\"duplicateCol\"] = \"";
        // line 1366
        echo (isset($context["text_java_duplicateCol"]) ? $context["text_java_duplicateCol"] : null);
        echo "\";
\ttextCol[\"addRow\"] = \"";
        // line 1367
        echo (isset($context["text_java_addRow"]) ? $context["text_java_addRow"] : null);
        echo "\";
\ttextCol[\"addModule\"] = \"";
        // line 1368
        echo (isset($context["text_java_addModule"]) ? $context["text_java_addModule"] : null);
        echo "\";
\ttextCol[\"addShortcode\"] = \"";
        // line 1369
        echo (isset($context["text_java_addShortcode"]) ? $context["text_java_addShortcode"] : null);
        echo "\";
\tvar textRow = [];
\ttextRow[\"row\"] = \"";
        // line 1371
        echo (isset($context["text_java_row"]) ? $context["text_java_row"] : null);
        echo "\";
\ttextRow[\"sortRow\"] = \"";
        // line 1372
        echo (isset($context["text_java_sortRow"]) ? $context["text_java_sortRow"] : null);
        echo "\";
\ttextRow[\"deleteRow\"] = \"";
        // line 1373
        echo (isset($context["text_java_deleteRow"]) ? $context["text_java_deleteRow"] : null);
        echo "\";
\ttextRow[\"editRow\"] = \"";
        // line 1374
        echo (isset($context["text_java_editRow"]) ? $context["text_java_editRow"] : null);
        echo "\";
\ttextRow[\"duplicateRow\"] = \"";
        // line 1375
        echo (isset($context["text_java_duplicateRow"]) ? $context["text_java_duplicateRow"] : null);
        echo "\";
\ttextRow[\"addCol\"] = \"";
        // line 1376
        echo (isset($context["text_java_addCol"]) ? $context["text_java_addCol"] : null);
        echo "\";
\tvar textShortcode = [];
\ttextShortcode[\"editShortcode\"] = \"";
        // line 1378
        echo (isset($context["text_edit_shortcode"]) ? $context["text_edit_shortcode"] : null);
        echo "\";
\t\$(\".layout-builder-wrapper\").each(function() {
\t\t\$(\$(\".layout-builder\", this)).so_page_builder(\$(\".hidden-content-layout\").val());
\t});
/* Accordion List Module */
\t\$(document).ready(function(){
\t\t\$(document).on('click',\"#listmods .mod-head\" , function(){
\t\t\t\$(this).parent().find('.mod-items').slideToggle();
\t\t});
\t});
/*Get data layout*/
\tfunction getData( container ){
\t\tvar result = new Array();\t
\t\t\$( container ).children('.so-col-content').children('.inner-col').children(\".so-page-row\").each( function(){
\t\t\t_row = \$(this);
\t\t\tvar data = _row.data('rowData');
\t\t\tdata.cols = new Array();
\t\t\t\$(_row).children('.inner-row').children( '.so-page-col' ).each( function(){
\t\t\t\tvar _col = \$(this).data('colData');
\t\t\t\t_col.widgets = new Array();
\t\t\t\t\$(this).children('.so-col-content').children('.inner-col').children('.so-page-content').children('.so-page-widget').each( function(){  
\t\t\t\t\tvar wd = new Object();
\t\t\t\t\twd.name = \$(this).data('name');
\t\t\t\t\twd.module = \$(this).data('module');
\t\t\t\t\twd.type = \$(this).data('type');
\t\t\t\t\tif(\$(this).data('name') != 'module'){
\t\t\t\t\t\twd.shortcode = \$(this).data('shortcode');
\t\t\t\t\t\twd.content = \$(this).children('.hidden-content-shortcode').val();
\t\t\t\t\t}
\t\t\t\t\t_col.widgets.push( wd );
\t\t\t\t}); 
\t\t\t\t_col.rows = new Array();
\t\t\t\tif( \$(this).children('.so-col-content').children('.inner-col').children( '.so-page-row' ).length > 0 ){
\t\t\t\t\t_col.rows = getData( this );
\t\t\t\t}
\t\t\t\tdata.cols.push( _col );
\t\t\t} );
\t\t\tresult.push( data ); \t\t\t
\t\t} );
\t\t
\t\treturn result;\t
\t}
/*Submit form*/
\tfunction submitForm(){
\t\t\$( \"#form-featured\" ).submit( function(){
\t\t\t\$(\".layout-builder-wrapper\").each( function(){
\t\t\t\tvar result = getData( \$(this).find(\".layout-builder\") );
\t\t\t\tvar data = JSON.stringify( result );  
\t\t\t\t\$(\".hidden-content-layout\").html( data );
\t\t\t} );
\t\t\treturn true; 
\t\t} );
\t}
\tsubmitForm();
\t
/*Show Column*/
\tfunction showNumColumn(){
\t\t\$(\".button-enablegrid .hide-column\" ).click();
\t}
\tshowNumColumn();
/* Alert Box Before Action */
\tfunction deleteModule(node) {
\t\treturn confirm(textDelete);
\t}
\tfunction duplicateModule(node) {
\t\treturn confirm(textDuplicate);
\t}
\t/*function previewModule(node) {
\t\tif(confirm(textPreview)){
\t\t\tvar result = getData( \$(\"#form-featured\").find(\".layout-builder\") );
\t\t\tvar data = JSON.stringify( result );  
\t\t\tvar ajax_url = window.location.href;
\t\t\t\$.ajax({
\t\t\t\ttype: \"POST\",
\t\t\t\turl: ajax_url,
\t\t\t\tdata: {
\t\t\t\t\tpreview_page: 1,
\t\t\t\t\tdata: data
\t\t\t\t},
\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\$(\".layout-builder-wrapper\").addClass('yt-generator-loading');
\t\t\t\t},
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tconsole.log(\"111\");
\t\t\t\t},
\t\t\t\tdataType: \"json\"
\t\t\t});
\t\t}
\t}\t*/
</script>
<script type=\"text/javascript\">
\tjQuery(document).ready(function(\$) {
\t\t\$('.js-select').select2();
\t});
</script>

";
        // line 1474
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/so_page_builder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2999 => 1474,  2900 => 1378,  2895 => 1376,  2891 => 1375,  2887 => 1374,  2883 => 1373,  2879 => 1372,  2875 => 1371,  2870 => 1369,  2866 => 1368,  2862 => 1367,  2858 => 1366,  2854 => 1365,  2850 => 1364,  2846 => 1363,  2842 => 1362,  2838 => 1361,  2833 => 1359,  2829 => 1358,  2825 => 1357,  2821 => 1356,  2809 => 1351,  2658 => 1203,  2649 => 1197,  2635 => 1186,  2631 => 1185,  2627 => 1184,  2618 => 1178,  2604 => 1167,  2600 => 1166,  2596 => 1165,  2592 => 1164,  2584 => 1158,  2578 => 1157,  2574 => 1155,  2572 => 1154,  2560 => 1145,  2554 => 1142,  2548 => 1139,  2544 => 1138,  2540 => 1137,  2536 => 1136,  2525 => 1134,  2522 => 1133,  2518 => 1131,  2515 => 1130,  2512 => 1129,  2507 => 1128,  2505 => 1127,  2493 => 1117,  2482 => 1115,  2478 => 1114,  2463 => 1102,  2457 => 1098,  2451 => 1097,  2449 => 1096,  2445 => 1094,  2435 => 1090,  2425 => 1087,  2421 => 1086,  2417 => 1085,  2410 => 1081,  2406 => 1080,  2395 => 1075,  2391 => 1074,  2384 => 1070,  2380 => 1068,  2376 => 1067,  2371 => 1065,  2363 => 1060,  2349 => 1049,  2345 => 1048,  2341 => 1047,  2328 => 1037,  2325 => 1036,  2314 => 1033,  2309 => 1032,  2305 => 1031,  2299 => 1028,  2290 => 1022,  2287 => 1021,  2276 => 1018,  2271 => 1017,  2267 => 1016,  2261 => 1013,  2252 => 1007,  2249 => 1006,  2238 => 1003,  2233 => 1002,  2229 => 1001,  2223 => 998,  2214 => 992,  2211 => 991,  2200 => 988,  2195 => 987,  2191 => 986,  2185 => 983,  2174 => 975,  2169 => 973,  2160 => 967,  2155 => 965,  2143 => 956,  2135 => 951,  2131 => 950,  2125 => 947,  2118 => 945,  2108 => 938,  2104 => 937,  2100 => 936,  2096 => 935,  2092 => 934,  2086 => 931,  2078 => 926,  2074 => 925,  2068 => 922,  2060 => 917,  2056 => 916,  2052 => 915,  2048 => 914,  2044 => 913,  2040 => 912,  2036 => 911,  2032 => 910,  2028 => 909,  2022 => 906,  2014 => 901,  2010 => 900,  2006 => 899,  2002 => 898,  1996 => 895,  1987 => 891,  1980 => 889,  1976 => 888,  1971 => 886,  1966 => 884,  1955 => 876,  1943 => 867,  1938 => 865,  1929 => 859,  1925 => 858,  1921 => 857,  1917 => 856,  1911 => 853,  1906 => 851,  1894 => 842,  1882 => 833,  1870 => 824,  1858 => 815,  1853 => 813,  1844 => 807,  1832 => 798,  1824 => 793,  1816 => 788,  1805 => 780,  1791 => 769,  1787 => 768,  1783 => 767,  1768 => 755,  1760 => 750,  1756 => 749,  1750 => 746,  1743 => 744,  1733 => 737,  1729 => 736,  1725 => 735,  1721 => 734,  1717 => 733,  1711 => 730,  1703 => 725,  1699 => 724,  1693 => 721,  1685 => 716,  1681 => 715,  1677 => 714,  1673 => 713,  1669 => 712,  1665 => 711,  1661 => 710,  1657 => 709,  1653 => 708,  1647 => 705,  1639 => 700,  1635 => 699,  1631 => 698,  1627 => 697,  1621 => 694,  1612 => 690,  1605 => 688,  1601 => 687,  1596 => 685,  1591 => 683,  1580 => 675,  1568 => 666,  1563 => 664,  1554 => 658,  1550 => 657,  1546 => 656,  1542 => 655,  1536 => 652,  1531 => 650,  1520 => 642,  1509 => 634,  1500 => 628,  1496 => 627,  1490 => 624,  1479 => 616,  1474 => 614,  1465 => 608,  1460 => 606,  1448 => 597,  1440 => 592,  1436 => 591,  1430 => 588,  1423 => 586,  1413 => 579,  1409 => 578,  1405 => 577,  1401 => 576,  1397 => 575,  1391 => 572,  1383 => 567,  1379 => 566,  1373 => 563,  1365 => 558,  1361 => 557,  1357 => 556,  1353 => 555,  1349 => 554,  1345 => 553,  1341 => 552,  1337 => 551,  1333 => 550,  1327 => 547,  1319 => 542,  1315 => 541,  1311 => 540,  1307 => 539,  1301 => 536,  1292 => 532,  1285 => 530,  1281 => 529,  1276 => 527,  1269 => 525,  1258 => 517,  1246 => 508,  1239 => 506,  1230 => 500,  1226 => 499,  1222 => 498,  1218 => 497,  1212 => 494,  1207 => 492,  1195 => 483,  1183 => 474,  1171 => 465,  1159 => 456,  1154 => 454,  1146 => 449,  1142 => 448,  1136 => 445,  1127 => 439,  1115 => 430,  1107 => 425,  1099 => 420,  1088 => 412,  1074 => 401,  1070 => 400,  1066 => 399,  1053 => 389,  1050 => 388,  1043 => 386,  1031 => 385,  1020 => 384,  1016 => 383,  1010 => 380,  1001 => 374,  998 => 373,  991 => 371,  979 => 370,  968 => 369,  964 => 368,  958 => 365,  949 => 359,  946 => 358,  939 => 356,  927 => 355,  916 => 354,  912 => 353,  906 => 350,  897 => 344,  894 => 343,  887 => 341,  875 => 340,  864 => 339,  860 => 338,  854 => 335,  846 => 329,  825 => 327,  821 => 326,  815 => 323,  804 => 315,  796 => 310,  785 => 302,  771 => 291,  767 => 290,  763 => 289,  750 => 279,  747 => 278,  740 => 276,  728 => 275,  717 => 274,  713 => 273,  707 => 270,  698 => 264,  695 => 263,  688 => 261,  676 => 260,  665 => 259,  661 => 258,  655 => 255,  646 => 249,  643 => 248,  636 => 246,  624 => 245,  613 => 244,  609 => 243,  603 => 240,  594 => 234,  591 => 233,  584 => 231,  572 => 230,  561 => 229,  557 => 228,  551 => 225,  546 => 223,  538 => 218,  534 => 217,  530 => 216,  526 => 215,  520 => 212,  512 => 206,  491 => 204,  487 => 203,  481 => 200,  470 => 192,  462 => 187,  451 => 179,  436 => 166,  430 => 165,  428 => 164,  420 => 159,  407 => 149,  398 => 143,  391 => 139,  387 => 138,  383 => 137,  379 => 136,  375 => 135,  371 => 134,  367 => 133,  363 => 132,  355 => 129,  348 => 125,  344 => 124,  340 => 123,  336 => 122,  329 => 120,  317 => 113,  310 => 109,  298 => 99,  293 => 97,  288 => 96,  283 => 94,  278 => 93,  276 => 92,  267 => 88,  262 => 85,  256 => 82,  253 => 81,  251 => 80,  244 => 78,  236 => 75,  230 => 74,  223 => 71,  215 => 68,  209 => 67,  206 => 66,  203 => 65,  198 => 64,  196 => 63,  189 => 58,  183 => 57,  181 => 56,  168 => 55,  163 => 54,  161 => 53,  155 => 52,  148 => 50,  142 => 47,  138 => 46,  132 => 45,  125 => 41,  120 => 39,  116 => 37,  109 => 33,  102 => 29,  99 => 28,  96 => 27,  89 => 23,  86 => 22,  84 => 21,  78 => 17,  67 => 15,  63 => 14,  58 => 12,  49 => 10,  43 => 9,  37 => 8,  31 => 7,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {{ column_left }}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<button type="submit" form="form-featured" data-toggle="tooltip" title="{{ entry_button_save }}" class="btn btn-primary" onclick="$('#action').val('save');$('#form-featured').submit();"><i class="fa fa-save"></i> {{ button_save }}</button>*/
/* 				<a class="btn btn-success" onclick="$('#action').val('save_edit');$('#form-featured').submit();" data-toggle="tooltip" title="{{ button_save_and_edit }}"><i class="fa fa-pencil-square-o"></i> {{ button_save_and_edit }}</a>*/
/* 				<a class="btn btn-info" onclick="$('#action').val('save_new');$('#form-featured').submit();" data-toggle="tooltip" title="{{ button_save_and_new }}"><i class="fa fa-book"></i>  {{ button_save_and_new }}</a>*/
/* 				<a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-danger"><i class="fa fa-reply"></i>  {{ button_cancel }}</a>*/
/* 			</div>*/
/* 			<h1>{{ objlang.get('heading_title_page') }}</h1>*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 		        	<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 		        {% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 		{% if error.warning %}*/
/* 		<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i>*/
/* 			{{ error.warning }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		{% if success %}*/
/* 		<div class="alert alert-success"><i class="fa fa-check-circle"></i>*/
/* 			{{ success }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		<div class="alert alert-info"><i class="fa fa-info-circle"></i>*/
/* 			{{ text_layout }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><i class="fa fa-pencil"></i> {{ subheading }}</h3>*/
/* 			</div>*/
/* 			<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-featured" class="form-horizontal">*/
/* 				<div class="panel-body">*/
/* 					<div class="rows">*/
/* 						<ul class="nav nav-tabs" role="tablist">*/
/* 							<li {% if selectedid == 0 %}class="active"{% endif %}>*/
/* 								<a href="{{ link }}"> <span class="fa fa-plus"></span>*/
/* 									{{ button_add_module }}*/
/* 								</a>*/
/* 							</li>*/
/* 							<li role="presentation" {% if module.module_id == selectedid %}class="active"{% endif %}>*/
/* 								<select name="" class="form-control js-select" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">*/
/* 									<option value="{{ link }}">{{ text_select_option }}</option>*/
/* 									{% set i = 0 %}*/
/* 									{% for module in moduletabs %}*/
/* 										<option value="{{ link }}&module_id={{ module.module_id }}" {% if module.module_id == selectedid %} selected="selected"{% endif %}>{{ module.name }}</option>*/
/* 										{% set i = i + 1 %}*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 					<div class="rows">*/
/* 						{% set module_row = 1 %}*/
/* 						{% for key, module in modules %}*/
/* 							{% if selectedid %}*/
/* 							<div class="pull-left">*/
/* 								<a class="duplicate btn btn-primary" onclick="return duplicateModule(this)" href="{{ action }}&duplicate=1"><span><i class="fa fa-copy"></i> {{ entry_button_duplicate }}</span></a>*/
/* 								<a class="remove btn btn-danger" onclick="return deleteModule(this)" href="{{ action }}&delete=1"><span><i class="fa fa-remove"></i> {{ entry_button_delete }}</span></a>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							<div id="tab-module{{ module_row }}" class="col-sm-12">*/
/* 								<div class="form-group">*/
/* 									<input type="hidden" name="action" id="action" value="" />*/
/* 									<textarea name="page_builder[{{key }}][config]" class="hidden-content-layout hide">{{ module.page_builder }}</textarea>*/
/* 									<label class="col-sm-3 control-label" for="input-name"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_name_desc }}">{{ entry_name }} </span></label>*/
/* 									<div class="col-sm-9">*/
/* 										<div class="col-sm-5">*/
/* 											<input type="text" name="name" value="{{ module.name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/* 										</div>*/
/* 										{% if error.name %}*/
/* 										<div class="text-danger col-sm-12">*/
/* 											{{ error.name }}*/
/* 										</div>*/
/* 										{% endif %}*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-3 control-label" for="input-status"><span data-toggle="tooltip" title="{{ entry_status_desc }}">{{ entry_status }} </span></label>*/
/* 									<div class="col-sm-9">*/
/* 										<div class="col-sm-5">*/
/* 											<select name="status" id="input-status" class="form-control">*/
/* 												{% if module.status %}*/
/* 													<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 													<option value="0">{{ text_disabled }}</option>*/
/* 												{% else %}*/
/* 													<option value="1">{{ text_enabled }}</option>*/
/* 													<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 												{% endif %}*/
/* 											</select>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<hr>*/
/* 							</div>*/
/* 							<div class="tab-pane">*/
/* 								<div class="row">*/
/* 									<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 text-center">*/
/* 										<div class="add-row-new col-lg-3" data-toggle="modal" data-target="#config_row" data-backdrop="static" data-keyboard="false"> <i class="fa fa-plus"></i>*/
/* 											{{ text_add_row }}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center">*/
/* 										<label class="control-label"><span data-toggle="tooltip" title="{{ text_show_number_col_desc }}">{{ text_show_number_col }}</span></label>*/
/* 										<div class="btn-group button-enablegrid">*/
/* 											<button class="btn btn-default show-column" onclick="$('.layout-builder').addClass('show-column').removeClass('hide-column');" type="button"><span class="fa fa-check-square-o"></span></button>*/
/* 											<button class="btn btn-default hide-column" onclick="$('.layout-builder').removeClass('show-column').addClass('hide-column');" type="button"><span class="fa fa-square-o"></span></button>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center">*/
/* 										<label class="control-label"><span data-toggle="tooltip" title="{{ text_design_in_desc }}">{{ text_design_in }} </span></label>*/
/* 										<div class="btn-group change-screens">*/
/* 											<button class="btn btn-default active so-page-screens" data-option="lg_col" type="button" data-placement="top" data-screensTitle="{{ text_change_col_lg }}"><span class="fa fa-desktop"></span></button>*/
/* 											<button class="btn btn-default so-page-screens" data-option="md_col" type="button" data-placement="top" data-screensTitle="{{ text_change_col_md }}"><span class="fa fa-laptop"></span></button>*/
/* 											<button class="btn btn-default so-page-screens" data-option="sm_col" type="button" data-placement="top" data-screensTitle="{{ text_change_col_sm }}"> <span class="fa fa-tablet"></span></button>*/
/* 											<button class="btn btn-default so-page-screens" data-option="xs_col" type="button" data-placement="top" data-screensTitle="{{ text_change_col_xs }}"><span class="fa fa-mobile"></span> </button>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 text-center">*/
/* 										<label class="control-label"><span data-toggle="tooltip" title="{{ text_import_data_desc }}">{{ text_import_data }} </span></label>*/
/* 										<div class="select-import btn-group">*/
/* 											<select name="import_theme" class="form-control">*/
/* 												<option value="0">{{ text_select_theme }}</option>*/
/* 												<option value="1">{{ text_theme_sportbike }}</option>*/
/* 												<option value="2">{{ text_theme_computer }}</option>*/
/* 												<option value="3">{{ text_theme_furniture }}</option>*/
/* 												<option value="4">{{ text_theme_fashion }}</option>*/
/* 												<option value="5">{{ text_theme_landing }}</option>*/
/* 												<option value="6">{{ text_theme_faq }}</option>*/
/* 												<option value="7">{{ text_theme_pricing }}</option>*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="button-import btn-group">*/
/* 											<button class="btn btn-default btn-import_data" onclick="$('#action').val('import_data');$('#form-featured').submit();">{{ text_import_data }}</button>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<hr>*/
/* 								<div class="layout-builder-wrapper">*/
/* 									<div id="layout-builder{{ key }}" class="layout-builder">*/
/* 										<div class="so-col-content">*/
/* 											<div class="inner-col"></div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<hr>*/
/* 								<div class="row">*/
/* 									<div class="col-lg-4 col-lg-offset-4">*/
/* 										<div class="add-row-new pull-center" data-toggle="modal" data-target="#config_row" data-backdrop="static" data-keyboard="false"> <i class="fa fa-plus"></i>*/
/* 											{{ text_add_row }}*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% set module_row = module_row + 1 %}*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="config_row" class="modal modal-message modal-info fade" tabindex="-1" role="dialog" data-sub="false">*/
/* 	<div class="modal-dialog">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 				<h4 class="modal-title">{{ text_config_row }}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				<form class="form-horizontal">*/
/* 					<div class="tab-pane">*/
/* 						<ul class="nav nav-tabs" id="so_row_settings">*/
/* 							<li>*/
/* 								<a href="#row_config" data-toggle="tab">*/
/* 									{{ entry_config }}*/
/* 								</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="#row_advanced_setting" data-toggle="tab">*/
/* 									{{ entry_advanced }}*/
/* 								</a>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 					<div class="tab-content">*/
/* 						<div class="tab-pane" id="row_config">*/
/* 							<div class="form-group">*/
/* 								<label for="number_col" class="control-label col-sm-6">{{ text_col_num }}:</label>*/
/* 								<div class="col-sm-6">*/
/* 									<select name="number-col" class="form-control" id="number_col">*/
/* 										{% for i in 1..12 %}*/
/* 											<option value="{{ i }}">{{ i }} {% if i== 1 %} {{ text_item }} {% else %} {{ text_items }} {%endif %}</option>*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="row_advanced_setting">*/
/* 							<div class="form-group">*/
/* 								<label for="screens_active" class="control-label col-sm-6">{{ text_screen_active }}:</label>*/
/* 								<div class="col-sm-6">*/
/* 									<select name="screens-active" class="form-control" id="screens_active">*/
/* 										<option value="lg_col">{{ text_large_col }}</option>*/
/* 										<option value="md_col">{{ text_medium_col }}</option>*/
/* 										<option value="sm_col">{{ text_small_col }}</option>*/
/* 										<option value="xs_col">{{ text_extra_col }}</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr>*/
/* 							<h4 style="font-weight:bold">{{ text_style_width_column }}</h4>*/
/* 							<div class="form-group">*/
/* 								<label for="large_col_cr" class="control-label col-sm-6">{{ text_large_col_ }}:</label>*/
/* 								<div class="col-sm-6">*/
/* 									<select name="large-col" class="form-control" id="large_col_cr">*/
/* 										{% for i in 1..12 %}*/
/* 											<option value="{{ i }}" {% if i==3 %} {{ "selected" }} {% endif %}>*/
/* 												{{ i }} {% if i==1 %} {{ text_col }} {% else %} {{ text_cols }} {% endif %}*/
/* 											</option>*/
/* 										{% endfor %}*/
/* 										<option value="15">*/
/* 											15 {{ text_cols }}*/
/* 										</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="medium_col_cr" class="control-label col-sm-6">{{ text_medium_col_ }}:</label>*/
/* 								<div class="col-sm-6">*/
/* 									<select name="medium-col" class="form-control" id="medium_col_cr">*/
/* 										{% for i in 1..12 %}*/
/* 											<option value="{{ i }}" {% if i==4 %} {{ "selected" }} {% endif %}>*/
/* 												{{ i }} {% if i==1 %} {{ text_col }} {% else %} {{ text_cols }} {% endif %}*/
/* 											</option>*/
/* 										{% endfor %}*/
/* 										<option value="15">*/
/* 											15 {{ text_cols }}*/
/* 										</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="small_col_cr" class="control-label col-sm-6">{{ text_small_col_ }}:</label>*/
/* 								<div class="col-sm-6">*/
/* 									<select name="small-col" class="form-control" id="small_col_cr">*/
/* 										{% for i in 1..12 %}*/
/* 											<option value="{{ i }}" {% if i==6 %} {{ "selected" }} {% endif %}>*/
/* 												{{ i }} {% if i==1 %} {{ text_col }} {% else %} {{ text_cols }} {% endif %}*/
/* 											</option>*/
/* 										{% endfor %}*/
/* 										<option value="15">*/
/* 											15 {{ text_cols }}*/
/* 										</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="extra_col_cr" class="control-label col-sm-6">{{ text_extra_col_ }}:</label>*/
/* 								<div class="col-sm-6">*/
/* 									<select name="extra-col" class="form-control" id="extra_col_cr">*/
/* 										{% for i in 1..12 %}*/
/* 											<option value="{{ i }}" {% if i==12 %} {{ "selected" }} {% endif %}>*/
/* 												{{ i }} {% if i==1 %} {{ text_col }} {% else %} {{ text_cols }} {% endif %}*/
/* 											</option>*/
/* 										{% endfor %}*/
/* 										<option value="15">*/
/* 											15 {{ text_cols }}*/
/* 										</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-primary submit-save pull-left"><i class="fa fa-save"></i> {{ text_save_all }}</button>*/
/* 				<button type="button" class="btn btn-success submit"><i class="fa fa-pencil-square-o"></i> {{ text_save_change }}</button>*/
/* 				<button type="button" class="btn btn-danger so-close" data-dismiss="modal"><i class="fa fa-times"></i> {{ text_close }}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="config_column" class="modal fade" tabindex="-1" role="dialog" data-sub="false">*/
/* 	<div class="modal-dialog">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 				<h4 class="modal-title">{{ text_config_col }}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				<form class="form-horizontal">*/
/* 					<div class="tab-pane">*/
/* 						<ul class="nav nav-tabs" id="so_col_settings">*/
/* 							<li>*/
/* 								<a href="#col_config" data-toggle="tab">*/
/* 									{{ entry_config }}*/
/* 								</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="#col_advanced_setting" data-toggle="tab">*/
/* 									{{ entry_advanced }}*/
/* 								</a>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 					<div class="tab-content">*/
/* 						<div class="tab-pane" id="col_config">*/
/* 							<div class="form-group">*/
/* 								<label for="number_col" class="control-label col-sm-6">{{ text_col_num }}:</label>*/
/* 								<div class="col-sm-6">*/
/* 									<select name="number-col" class="form-control" id="number_col">*/
/* 										{% for i in 1..12 %}*/
/* 											<option value="{{ i }}">{{ i }} {% if i == 1 %} {{ text_item }} {% else %} {{ text_items }} {% endif %}</option>*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="col_advanced_setting">*/
/* 							<div class="form-group">*/
/* 								<label for="large_col_cc" class="control-label col-sm-6">{{ text_large_col_ }}:</label>*/
/* 								<div class="col-sm-6">*/
/* 									<select name="large-col" class="form-control" id="large_col_cc">*/
/* 										{% for i in 1..12 %}*/
/* 											<option value="{{ i }}" {% if i==3 %} {{ "selected" }} {% endif %}>*/
/* 												{{ i }} {% if i==1 %} {{ text_col }} {% else %} {{ text_cols }} {% endif %}*/
/* 											</option>*/
/* 										{% endfor %}*/
/* 										<option value="15">*/
/* 											15 {{ text_cols }}*/
/* 										</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="medium_col_cc" class="control-label col-sm-6">{{ text_medium_col_ }}:</label>*/
/* 								<div class="col-sm-6">*/
/* 									<select name="medium-col" class="form-control" id="medium_col_cc">*/
/* 										{% for i in 1..12 %}*/
/* 											<option value="{{ i }}" {% if i==4 %} {{ "selected" }} {% endif %}>*/
/* 												{{ i }} {% if i==1 %} {{ text_col }} {% else %} {{ text_cols }} {% endif %}*/
/* 											</option>*/
/* 										{% endfor %}*/
/* 										<option value="15">*/
/* 											15 {{ text_cols }}*/
/* 										</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="small_col_cc" class="control-label col-sm-6">{{ text_small_col_ }}:</label>*/
/* 								<div class="col-sm-6">*/
/* 									<select name="small-col" class="form-control" id="small_col_cc">*/
/* 										{% for i in 1..12 %}*/
/* 											<option value="{{ i }}" {% if i==6 %} {{ "selected" }} {% endif %}>*/
/* 												{{ i }} {% if i==1 %} {{ text_col }} {% else %} {{ text_cols }} {% endif %}*/
/* 											</option>*/
/* 										{% endfor %}*/
/* 										<option value="15">*/
/* 											15 {{ text_cols }}*/
/* 										</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="extra_col_cc" class="control-label col-sm-6">{{ text_extra_col_ }}:</label>*/
/* 								<div class="col-sm-6">*/
/* 									<select name="extra-col" class="form-control" id="extra_col_cc">*/
/* 										{% for i in 1..12 %}*/
/* 											<option value="{{ i }}" {% if i==12 %} {{ "selected" }} {% endif %}>*/
/* 												{{ i }} {% if i==1 %} {{ text_col }} {% else %} {{ text_cols }} {% endif %}*/
/* 											</option>*/
/* 										{% endfor %}*/
/* 										<option value="15">*/
/* 											15 {{ text_cols }}*/
/* 										</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-primary submit-save pull-left"><i class="fa fa-save"></i> {{ text_save_all }}</button>*/
/* 				<button type="button" class="btn btn-success submit"><i class="fa fa-pencil-square-o"></i> {{ text_save_change }}</button>*/
/* 				<button type="button" class="btn btn-danger so-close" data-dismiss="modal"><i class="fa fa-times"></i> {{ text_close }}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="style_row" class="modal fade" tabindex="-1" role="dialog">*/
/* 	<div class="modal-dialog">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 				<h4 class="modal-title">{{ text_row_style }}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				<form class="form-horizontal">*/
/* 					<div class="tab-pane">*/
/* 						<ul class="nav nav-tabs" id="so_row_style">*/
/* 							<li>*/
/* 								<a href="#row_style" data-toggle="tab">*/
/* 									{{ entry_style }}*/
/* 								</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="#row_advanced_style" data-toggle="tab">*/
/* 									{{ entry_advanced }}*/
/* 								</a>*/
/* 							</li>*/
/* 							<li class="row-parent">*/
/* 								<a href="#row_section_style" data-toggle="tab">*/
/* 									{{ text_row_section }}*/
/* 								</a>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 					<div class="tab-content">*/
/* 						<div class="tab-pane" id="row_style">*/
/* 							<input class="form-control" id="row_text_class_id" type="hidden" name="text_class_id" />*/
/* 							<div class="form-group">*/
/* 								<label for="row_text_class" class="control-label col-sm-4">{{ text_css_class }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<input class="form-control" id="row_text_class" type="text" name="text_class" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="row_container_fluid" class="control-label col-sm-4">{{ text_row_container_fluid }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<select name="row_container_fluid" class="form-control" id="row_container_fluid">*/
/* 										<option value="1">{{ text_yes }}</option>*/
/* 										<option value="0">{{ text_no }}</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr>*/
/* 							<h4 style="font-weight:bold">{{ text_text }}</h4>*/
/* 							<div class="form-group">*/
/* 								<label for="row_text_color" class="control-label col-sm-4">{{ text_color }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<span class="row-text-color">*/
/* 									<span class="row-text-color-wheel"></span>*/
/* 									<input type="text" name="text_color" value="" id="row_text_color" class="row-text-color-value" />*/
/* 									</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="row_link_color" class="control-label col-sm-4">{{ link_color }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<span class="row-link-color">*/
/* 									<span class="row-link-color-wheel"></span>*/
/* 									<input type="text" name="link_color" value="" id="row_link_color" class="row-link-color-value" />*/
/* 									</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="row_link_hover_color" class="control-label col-sm-4">{{ link_hover_color }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<span class="row-link-hover-color">*/
/* 									<span class="row-link-hover-color-wheel"></span>*/
/* 									<input type="text" name="link_hover_color" value="" id="row_link_hover_color" class="row-link-hover-color-value" />*/
/* 									</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="row_heading_color" class="control-label col-sm-4">{{ heading_color }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<span class="row-heading-color">*/
/* 									<span class="row-heading-color-wheel"></span>*/
/* 									<input type="text" name="heading_color" value="" id="row_heading_color" class="row-heading-color-value" />*/
/* 									</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr>*/
/* 							<h4 style="font-weight:bold">{{ text_background }}</h4>*/
/* 							<div class="form-group">*/
/* 								<label for="row_background_type" class="control-label col-sm-4">{{ text_background_type }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<select name="background_type" class="form-control" id="row_background_type">*/
/* 										<option value="0">{{ text_background_none }}</option>*/
/* 										<option value="1">{{ text_background_color }}</option>*/
/* 										<option value="2">{{ text_background_photo }}</option>*/
/* 										<option value="3">{{ text_background_video }}</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="row-background row-background-color" style="display:none">*/
/* 								<hr>*/
/* 								<h4 style="font-weight:bold">{{ text_background }} {{ text_background_color }}</h4>*/
/* 								<div class="form-group">*/
/* 									<label for="row_bg_color" class="control-label col-sm-4">{{ text_bg_color }}:</label>*/
/* 									<div class="col-sm-8">*/
/* 										<span class="row-bg-color">*/
/* 										<span class="row-bg-color-wheel"></span>*/
/* 										<input type="text" name="bg_color" value="" id="row_bg_color" class="row-bg-color-value" />*/
/* 										</span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label for="row_bg_opacity" class="control-label col-sm-4">{{ text_bg_opacity }}:</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" name="bg_opacity" id="bg_opacity" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="row-background row-background-photo" style="display:none">*/
/* 								<hr>*/
/* 								<h4 style="font-weight:bold">{{ text_background }} {{ text_background_photo }}</h4>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-sm-4">{{ text_bg_image }}: </label>*/
/* 									<div class="col-sm-8">*/
/* 										<a href="" id="thumb-image{{ rand }}" data-toggle="image" class="img-thumbnail">*/
/* 											<img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" width="100" height="100"/>*/
/* 										</a>*/
/* 										<input class="form-control imageuploaded" type="hidden" data-base="{{ HTTP_CATALOG }}image/catalog/" name="bg_image" id="uploadimage{{ rand }}" />*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-sm-4">{{ text_bg_repeat }}: </label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="bg_repeat" class="form-control" id="bg_repeat">*/
/* 											<option value="no-repeat">{{ text_background_none }}</option>*/
/* 											<option value="repeat">{{ text_background_repeat }}</option>*/
/* 											<option value="repeat-x">{{ text_background_horizontal }}</option>*/
/* 											<option value="repeat-y">{{ text_background_vertical }}</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-sm-4">{{ text_bg_position }}: </label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="bg_position" class="form-control" id="bg_position">*/
/* 											<option value="left top">{{ text_bg_position_left_top }}</option>*/
/* 											<option value="left center">{{ text_bg_position_left_center }}</option>*/
/* 											<option value="left bottom">{{ text_bg_position_left_bottom }}</option>*/
/* 											<option value="right top">{{ text_bg_position_right_top }}</option>*/
/* 											<option value="right center">{{ text_bg_position_right_center }}</option>*/
/* 											<option value="right bottom">{{ text_bg_position_right_bottom }}</option>*/
/* 											<option value="center top">{{ text_bg_position_center_top }}</option>*/
/* 											<option value="center center">{{ text_bg_position_center }}</option>*/
/* 											<option value="center bottom">{{ text_bg_position_center_bottom }}</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-sm-4">{{ text_bg_attachment }}: </label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="bg_attachment" class="form-control" id="bg_attachment">*/
/* 											<option value="scroll">{{ text_background_attachment_scroll }}</option>*/
/* 											<option value="fixed">{{ text_background_attachment_fixed }}</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-sm-4">{{ text_bg_scale }}: </label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="bg_scale" class="form-control" id="bg_scale">*/
/* 											<option value="">{{ text_background_none }}</option>*/
/* 											<option value="auto">{{ text_background_scale_auto }}</option>*/
/* 											<option value="contain">{{ text_background_scale_contain }}</option>*/
/* 											<option value="cover">{{ text_background_scale_cover }}</option>*/
/* 											<option value="initial">{{ text_background_scale_initial }}</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="row-background row-background-video" style="display:none">*/
/* 								<hr>*/
/* 								<h4 style="font-weight:bold">{{ text_background }} {{ text_background_video }}</h4>*/
/* 								<div class="form-group">*/
/* 									<label for="row_video_type" class="control-label col-sm-4">{{ text_video_type }}:</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="video_type" class="form-control" id="row_video_type">*/
/* 											<option value="0">{{ text_video_youtube }}</option>*/
/* 											<option value="1">{{ text_video_webm }}</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label for="row_link_video" class="control-label col-sm-4">{{ text_link_video }}:</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input class="form-control" id="row_link_video" type="text" name="link_video" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="row_advanced_style">*/
/* 							<hr>*/
/* 							<h4 style="font-weight:bold">{{ text_margin }}</h4>*/
/* 							<div class="form-group">*/
/* 								<label for="row_margin" class="control-label col-sm-4">{{ text_margin }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<input class="form-control" id="row_margin" type="text" name="margin" placeholder="10px 10px 10px 10px" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr>*/
/* 							<h4 style="font-weight:bold">{{ text_padding }}</h4>*/
/* 							<div class="form-group">*/
/* 								<label for="row_padding" class="control-label col-sm-4">{{ text_padding }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<input class="form-control" id="row_padding" type="text" name="padding" placeholder="10px 10px 10px 10px" />*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="row_section_style">*/
/* 							<div class="form-group">*/
/* 								<label for="row_section" class="control-label col-sm-4">{{ text_row_section }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<select name="row_section" class="form-control" id="row_section">*/
/* 										<option value="0">{{ text_no }}</option>*/
/* 										<option value="1">{{ text_yes }}</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="row-section-id" style="display:none">*/
/* 								<div class="form-group">*/
/* 									<label for="row_section_id" class="control-label col-sm-4">{{ text_row_section_id }}:</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input class="form-control" id="row_section_id" type="text" name="row_section_id" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="row-section-class" style="display:none">*/
/* 								<div class="form-group">*/
/* 									<label for="row_section_class" class="control-label col-sm-4">{{ text_row_section_class }}:</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input class="form-control" id="row_section_class" type="text" name="row_section_class" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="row-section-style" style="display:none">*/
/* 								<hr>*/
/* 								<h4 style="font-weight:bold">{{ text_background }}</h4>*/
/* 								<div class="form-group">*/
/* 									<label for="section_background_type" class="control-label col-sm-4">{{ text_background_type }}:</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="section_background_type" class="form-control" id="section_background_type">*/
/* 											<option value="0">{{ text_background_none }}</option>*/
/* 											<option value="1">{{ text_background_color }}</option>*/
/* 											<option value="2">{{ text_background_photo }}</option>*/
/* 											<option value="3">{{ text_background_video }}</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="section-background section-background-color" style="display:none">*/
/* 									<hr>*/
/* 									<h4 style="font-weight:bold">{{ text_background_color }}</h4>*/
/* 									<div class="form-group">*/
/* 										<label for="section_bg_color" class="control-label col-sm-4">{{ text_bg_color }}:</label>*/
/* 										<div class="col-sm-8">*/
/* 											<span class="section-bg-color">*/
/* 											<span class="section-bg-color-wheel"></span>*/
/* 											<input type="text" name="section_bg_color" value="" id="section_bg_color" class="section-bg-color-value" />*/
/* 											</span>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label for="section_bg_opacity" class="control-label col-sm-4">{{ text_bg_opacity }}:</label>*/
/* 										<div class="col-sm-8">*/
/* 											<input type="text" name="section_bg_opacity" id="section_bg_opacity" class="form-control" />*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="section-background section-background-photo" style="display:none">*/
/* 									<hr>*/
/* 									<h4 style="font-weight:bold">{{ text_background_photo }}</h4>*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-sm-4">{{ text_bg_image }}: </label>*/
/* 										<div class="col-sm-8">*/
/* 											<a href="" id="thumb-image-{{ rand }}" data-toggle="image" class="img-thumbnail">*/
/* 												<img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" width="100" height="100"/>*/
/* 											</a>*/
/* 											<input class="form-control imageuploaded" type="hidden" data-base="{{ HTTP_CATALOG }}image/catalog/" name="section_bg_image" id="uploadimage-{{ rand }}" />*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-sm-4">{{ text_bg_repeat }}: </label>*/
/* 										<div class="col-sm-8">*/
/* 											<select name="section_bg_repeat" class="form-control" id="section_bg_repeat">*/
/* 												<option value="no-repeat">{{ text_background_none }}</option>*/
/* 												<option value="repeat">{{ text_background_repeat }}</option>*/
/* 												<option value="repeat-x">{{ text_background_horizontal }}</option>*/
/* 												<option value="repeat-y">{{ text_background_vertical }}</option>*/
/* 											</select>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-sm-4">{{ text_bg_position }}: </label>*/
/* 										<div class="col-sm-8">*/
/* 											<select name="section_bg_position" class="form-control" id="section_bg_position">*/
/* 												<option value="left top">{{ text_bg_position_left_top }}</option>*/
/* 												<option value="left center">{{ text_bg_position_left_center }}</option>*/
/* 												<option value="left bottom">{{ text_bg_position_left_bottom }}</option>*/
/* 												<option value="right top">{{ text_bg_position_right_top }}</option>*/
/* 												<option value="right center">{{ text_bg_position_right_center }}</option>*/
/* 												<option value="right bottom">{{ text_bg_position_right_bottom }}</option>*/
/* 												<option value="center top">{{ text_bg_position_center_top }}</option>*/
/* 												<option value="center center">{{ text_bg_position_center }}</option>*/
/* 												<option value="center bottom">{{ text_bg_position_center_bottom }}</option>*/
/* 											</select>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-sm-4">{{ text_bg_attachment }}: </label>*/
/* 										<div class="col-sm-8">*/
/* 											<select name="section_bg_attachment" class="form-control" id="section_bg_attachment">*/
/* 												<option value="scroll">{{ text_background_attachment_scroll }}</option>*/
/* 												<option value="fixed">{{ text_background_attachment_fixed }}</option>*/
/* 											</select>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-sm-4">{{ text_bg_scale }}: </label>*/
/* 										<div class="col-sm-8">*/
/* 											<select name="section_bg_scale" class="form-control" id="section_bg_scale">*/
/* 												<option value="">{{ text_background_none }}</option>*/
/* 												<option value="auto">{{ text_background_scale_auto }}</option>*/
/* 												<option value="contain">{{ text_background_scale_contain }}</option>*/
/* 												<option value="cover">{{ text_background_scale_cover }}</option>*/
/* 												<option value="initial">{{ text_background_scale_initial }}</option>*/
/* 											</select>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="section-background section-background-video" style="display:none">*/
/* 									<hr>*/
/* 									<h4 style="font-weight:bold">{{ text_background }} {{ text_background_video }}</h4>*/
/* 									<div class="form-group">*/
/* 										<label for="section_video_type" class="control-label col-sm-4">{{ text_video_type }}:</label>*/
/* 										<div class="col-sm-8">*/
/* 											<select name="section_video_type" class="form-control" id="section_video_type">*/
/* 												<option value="0">{{ text_video_youtube }}</option>*/
/* 												<option value="1">{{ text_video_webm }}</option>*/
/* 											</select>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label for="section_link_video" class="control-label col-sm-4">{{ text_link_video }}:</label>*/
/* 										<div class="col-sm-8">*/
/* 											<input class="form-control" id="section_link_video" type="text" name="section_link_video" />*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-primary submit-save pull-left"><i class="fa fa-save"></i> {{ text_save_all }}</button>*/
/* 				<button type="button" class="btn btn-success submit"><i class="fa fa-pencil-square-o"></i> {{ text_save_change }}</button>*/
/* 				<button type="button" class="btn btn-danger so-close" data-dismiss="modal"><i class="fa fa-times"></i> {{ text_close }}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="style_col" class="modal fade" tabindex="-1" role="dialog">*/
/* 	<div class="modal-dialog">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 				<h4 class="modal-title">{{ text_col_style }}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				<form class="form-horizontal">*/
/* 					<div class="tab-pane">*/
/* 						<ul class="nav nav-tabs" id="so_col_style">*/
/* 							<li>*/
/* 								<a href="#col_style" data-toggle="tab">*/
/* 									{{ entry_config }}*/
/* 								</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="#col_advanced_style" data-toggle="tab">*/
/* 									{{ entry_advanced }}*/
/* 								</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="#col_responsive_layout" data-toggle="tab">*/
/* 									{{ text_responsive_layout }}*/
/* 								</a>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 					<div class="tab-content">*/
/* 						<div class="tab-pane" id="col_style">*/
/* 							<input class="form-control" id="col_text_class_id" type="hidden" name="text_class_id" />*/
/* 							<div class="form-group">*/
/* 								<label for="col_text_class" class="control-label col-sm-4">{{ text_css_class }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<input class="form-control" id="col_text_class" type="text" name="text_class" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr>*/
/* 							<h4 style="font-weight:bold">{{ text_text }}</h4>*/
/* 							<div class="form-group">*/
/* 								<label for="col_text_color" class="control-label col-sm-4">{{ text_color }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<span class="col-text-color">*/
/* 										<span class="col-text-color-wheel"></span>*/
/* 										<input type="text" name="text_color" value="" id="col_text_color" class="col-text-color-value" />*/
/* 									</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="col_link_color" class="control-label col-sm-4">{{ link_color }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<span class="col-link-color">*/
/* 										<span class="col-link-color-wheel"></span>*/
/* 										<input type="text" name="link_color" value="" id="col_link_color" class="col-link-color-value" />*/
/* 									</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="col_link_hover_color" class="control-label col-sm-4">{{ link_hover_color }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<span class="col-link-hover-color">*/
/* 										<span class="col-link-hover-color-wheel"></span>*/
/* 										<input type="text" name="link_hover_color" value="" id="col_link_hover_color" class="col-link-hover-color-value" />*/
/* 									</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="col_heading_color" class="control-label col-sm-4">{{ heading_color }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<span class="col-heading-color">*/
/* 										<span class="col-heading-color-wheel"></span>*/
/* 										<input type="text" name="heading_color" value="" id="col_heading_color" class="col-heading-color-value" />*/
/* 									</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr>*/
/* 							<h4 style="font-weight:bold">{{ text_background }}</h4>*/
/* 							<div class="form-group">*/
/* 								<label for="col_background_type" class="control-label col-sm-4">{{ text_background_type }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<select name="background_type" class="form-control" id="col_background_type">*/
/* 										<option value="0">{{ text_background_none }}</option>*/
/* 										<option value="1">{{ text_background_color }}</option>*/
/* 										<option value="2">{{ text_background_photo }}</option>*/
/* 										<option value="3">{{ text_background_video }}</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-background col-background-color" style="display:none">*/
/* 								<hr>*/
/* 								<h4 style="font-weight:bold">{{ text_background_color }}</h4>*/
/* 								<div class="form-group">*/
/* 									<label for="col_bg_color" class="control-label col-sm-4">{{ text_bg_color }}:</label>*/
/* 									<div class="col-sm-8">*/
/* 										<span class="col-bg-color">*/
/* 											<span class="col-bg-color-wheel"></span>*/
/* 											<input type="text" name="bg_color" value="" id="col_bg_color" class="col-bg-color-value" />*/
/* 										</span>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label for="row_bg_opacity" class="control-label col-sm-4">{{ text_bg_opacity }}:</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" name="bg_opacity" id="bg_opacity" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-background col-background-photo" style="display:none">*/
/* 								<hr>*/
/* 								<h4 style="font-weight:bold">{{ text_background_photo }}</h4>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-sm-4">{{ text_bg_image }}: </label>*/
/* 									<div class="col-sm-8">*/
/* 										<a href="" id="thumb-image{{ rand_col }}" data-toggle="image" class="img-thumbnail">*/
/* 											<img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" width="100" height="100"/>*/
/* 										</a>*/
/* 										<input class="form-control imageuploaded" type="hidden" data-base="{{ HTTP_CATALOG }}image/catalog/" name="bg_image" id="uploadimage{{ rand_col }}" />*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-sm-4">{{ text_bg_repeat }}: </label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="bg_repeat" class="form-control" id="bg_repeat">*/
/* 											<option value="no-repeat">{{ text_background_none }}</option>*/
/* 											<option value="repeat">{{ text_background_repeat }}</option>*/
/* 											<option value="repeat-x">{{ text_background_horizontal }}</option>*/
/* 											<option value="repeat-y">{{ text_background_vertical }}</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-sm-4">{{ text_bg_position }}: </label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="bg_position" class="form-control" id="bg_position">*/
/* 											<option value="left top">{{ text_bg_position_left_top }}</option>*/
/* 											<option value="left center">{{ text_bg_position_left_center }}</option>*/
/* 											<option value="left bottom">{{ text_bg_position_left_bottom }}</option>*/
/* 											<option value="right top">{{ text_bg_position_right_top }}</option>*/
/* 											<option value="right center">{{ text_bg_position_right_center }}</option>*/
/* 											<option value="right bottom">{{ text_bg_position_right_bottom }}</option>*/
/* 											<option value="center top">{{ text_bg_position_center_top }}</option>*/
/* 											<option value="center center">{{ text_bg_position_center }}</option>*/
/* 											<option value="center bottom">{{ text_bg_position_center_bottom }}</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-sm-4">{{ text_bg_attachment }}: </label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="bg_attachment" class="form-control" id="bg_attachment">*/
/* 											<option value="scroll">{{ text_background_attachment_scroll }}</option>*/
/* 											<option value="fixed">{{ text_background_attachment_fixed }}</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="control-label col-sm-4">{{ text_bg_scale }}: </label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="bg_scale" class="form-control" id="bg_scale">*/
/* 											<option value="">{{ text_background_none }}</option>*/
/* 											<option value="auto">{{ text_background_scale_auto }}</option>*/
/* 											<option value="contain">{{ text_background_scale_contain }}</option>*/
/* 											<option value="cover">{{ text_background_scale_cover }}</option>*/
/* 											<option value="initial">{{ text_background_scale_initial }}</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-background col-background-video" style="display:none">*/
/* 								<hr>*/
/* 								<h4 style="font-weight:bold">{{ text_background }} {{ text_background_video }}</h4>*/
/* 								<div class="form-group">*/
/* 									<label for="col_video_type" class="control-label col-sm-4">{{ text_video_type }}:</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="col_video_type" class="form-control" id="col_video_type">*/
/* 											<option value="0">{{ text_video_youtube }}</option>*/
/* 											<option value="1">{{ text_video_webm }}</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label for="col_link_video" class="control-label col-sm-4">{{ text_link_video }}:</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input class="form-control" id="col_link_video" type="text" name="col_link_video" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="col_advanced_style">*/
/* 							<hr>*/
/* 							<h4 style="font-weight:bold">{{ text_margin }}</h4>*/
/* 							<div class="form-group">*/
/* 								<label for="col_margin" class="control-label col-sm-4">{{ text_margin }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<input class="form-control" id="col_margin" type="text" name="margin" placeholder="10px 10px 10px 10px" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr>*/
/* 							<h4 style="font-weight:bold">{{ text_padding }}</h4>*/
/* 							<div class="form-group">*/
/* 								<label for="col_padding" class="control-label col-sm-4">{{ text_padding }}:</label>*/
/* 								<div class="col-sm-8">*/
/* 									<input class="form-control" id="col_padding" type="text" name="padding" placeholder="10px 10px 10px 10px" />*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="col_responsive_layout">*/
/* 							<div class="form-group">*/
/* 								<label for="large_col" class="control-label col-sm-6">{{ text_large_col_ }}:</label>*/
/* 								<div class="col-sm-6">*/
/* 									<select name="lg_col" class="form-control" id="large_col">*/
/* 										{% for i in 1..12 %}*/
/* 											<option value="{{ i }}">*/
/* 												{{ i }} {{ i==1 ? text_col : text_cols }}*/
/* 											</option>*/
/* 										{% endfor %}*/
/* 										<option value="15">*/
/* 											15 {{ text_cols }}*/
/* 										</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="medium_col" class="control-label col-sm-6">{{ text_medium_col_ }}:</label>*/
/* 								<div class="col-sm-6">*/
/* 									<select name="md_col" class="form-control" id="medium_col">*/
/* 										{% for i in 1..12 %}*/
/* 											<option value="{{ i }}">*/
/* 												{{ i }} {{ i==1 ? text_col : text_cols }}*/
/* 											</option>*/
/* 										{% endfor %}*/
/* 										<option value="15">*/
/* 											15 {{ text_cols }}*/
/* 										</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="small_col" class="control-label col-sm-6">{{ text_small_col_ }}:</label>*/
/* 								<div class="col-sm-6">*/
/* 									<select name="sm_col" class="form-control" id="small_col">*/
/* 										{% for i in 1..12 %}*/
/* 											<option value="{{ i }}">*/
/* 												{{ i }} {{ i==1 ? text_col : text_cols }}*/
/* 											</option>*/
/* 										{% endfor %}*/
/* 										<option value="15">*/
/* 											15 {{ text_cols }}*/
/* 										</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label for="extra_col" class="control-label col-sm-6">{{ text_extra_col_ }}:</label>*/
/* 								<div class="col-sm-6">*/
/* 									<select name="xs_col" class="form-control" id="extra_col">*/
/* 										{% for i in 1..12 %}*/
/* 											<option value="{{ i }}">*/
/* 												{{ i }} {{ i==1 ? text_col : text_cols }}*/
/* 											</option>*/
/* 										{% endfor %}*/
/* 										<option value="15">*/
/* 											15 {{ text_cols }}*/
/* 										</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-primary submit-save pull-left"><i class="fa fa-save"></i> {{ text_save_all }}</button>*/
/* 				<button type="button" class="btn btn-success submit"><i class="fa fa-pencil-square-o"></i> {{ text_save_change }}</button>*/
/* 				<button type="button" class="btn btn-danger so-close" data-dismiss="modal"><i class="fa fa-times"></i> {{ text_close }}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="config_module" class="modal fade" tabindex="-1" role="dialog">*/
/* 	<div class="modal-dialog modal-lg">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 				<h4 class="modal-title">{{ text_add_module }}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				<div id="listmods">*/
/* 					<div class="row">*/
/* 					{% set i = 0 %} */
/* */
/* 					{% for key, ext in extensions %}*/
/* 						<div class="col-sm-4 mod-widget">*/
/* 							<div class="mod-head">*/
/* 								{{ ext.name|striptags }}*/
/* 							</div>*/
/* 							<div class="mod-items">*/
/* */
/* 								{% for emod in ext.module %}*/
/* 								<div class="module-item so-page-widget" data-module="{{ emod.module }}" data-type="module" data-name="{{ emod.name }}">*/
/* 							*/
/* 									<div class="w-inner">*/
/* 										<div class="so-page-wicon"><i class="fa fa-university"></i></div>*/
/* 										<div class="widget-title">*/
/* 											<p>{{ emod.name }}</p>*/
/* 											<span class="widget-title-edit">{{ emod.code }}</span>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="widget-tool">*/
/* 										<div data-icontitle="{{ text_java_sortModule }}" class="so-page-wsort so-page-icon-widget"><i class="fa fa-arrows"></i></div>*/
/* 										<div data-iconTitle="{{ text_java_deleteModule }}" class="so-page-wdelete so-page-icon-widget"><i class="fa fa-remove"></i></div>*/
/* 										<div data-icontitle="{{ text_java_editModule }}" class="so-page-wedit so-page-icon-widget" data-module="{{key}}" data-href="{{ ourl.link('extension/module/'~key,'module_id='~emod.id~'&user_token='~user_token) }}" >*/
/* 										<i class='fa fa-edit'> </i>*/
/* 										</div>*/
/* 										<div data-iconTitle="{{ text_java_copyModule }}" class="so-page-wcopy so-page-icon-widget"><i class="fa fa-copy"></i></div>*/
/* 									</div>*/
/* 								</div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						</div>*/
/* 						{% set i = i + 1 %}*/
/* 					{% endfor %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-danger so-close" data-dismiss="modal"><i class="fa fa-times"></i> {{ text_close }}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="config_shortcode" class="modal fade" tabindex="-1" role="dialog">*/
/* 	<div class="modal-dialog modal-lg">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<div class="header_shortcodes_plugin">*/
/* 					<div id="yt-generator-filter">*/
/* 						{% for group, label in groupsYT %}*/
/* 							<a href="javascript:;" data-filter="{{ group }}">{{ label }}</a>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 					<div id="yt-generator_box_search">*/
/* 						<input name="yt_generator_search" id="yt-generator-search" value="" placeholder="Search for shortcodes" type="text">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				<div class="wpo-widgetslist">*/
/* 					<div class="row yt-generator-choices">*/
/* 						<div class="col-lg-12">*/
/* 							{% set i = 0 %}*/
/* 							{% for name, shortcode in shortcoders %}*/
/* 							{% set i = i + 1 %}*/
/* 							{% if i%3 == 1 %}*/
/* 							<div class="row-shortcode">*/
/* 							{% endif %}*/
/* 								<div class="wapper-shortcode">*/
/* 									<div class="shortcode-item so-page-widget" data-group="{{ shortcode.group }}" data-name="{{ shortcode.name }}" data-shortcode="{{ name }}" data-desc="{{ shortcode.desc }}" data-type="shortcode">*/
/* 										<div class="widget-tool">*/
/* 											<div data-icontitle="{{ text_java_sortShortcode }}" class="so-page-wsort so-page-icon-widget"><i class="fa fa-arrows"></i></div>*/
/* 											<div data-icontitle="{{ text_java_deleteShortcode }}" class="so-page-wdelete so-page-icon-widget"><i class="fa fa-remove"></i></div>*/
/* 											<div data-icontitle="{{ text_java_editShortcode }}" class="so-page-wedit so-page-icon-widget"><i class="fa fa-edit"></i></div>*/
/* 											<div data-icontitle="{{ text_java_copyShortcode }}" class="so-page-wcopy so-page-icon-widget"><i class="fa fa-copy"></i></div>*/
/* 										</div>*/
/* 										<div class="w-inner">*/
/* 											<div class="so-page-wicon"><i class="fa fa-{{ shortcode.icon }}"></i></div>*/
/* 											<div class="widget-title">*/
/* 												<p class="widget-title-shortcode"></p>*/
/* 												<span class="widget-title-edit">{{ shortcode.name }}</span>*/
/* 												*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 										<textarea name="content_shortcode" class="hidden-content-shortcode hide"></textarea>*/
/* 									</div>*/
/* 								</div>*/
/* */
/* 							{% if i%3 == 0 or i == shortcoders|length %}*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="wpo-widgetform"></div>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-info pull-left yt-generator-home"> {{ text_backtolist }}</button>*/
/* 				<button type="button" class="btn btn-primary submit-save pull-left"><i class="fa fa-save"></i> {{ text_save_all }}</button>*/
/* 				<button type="button" class="btn btn-success submit"><i class="fa fa-pencil-square-o"></i> {{ text_save_change }}</button>*/
/* 				<button type="button" class="btn btn-danger so-close" data-dismiss="modal"><i class="fa fa-times"></i> {{ text_close }}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="edit_shortcode" class="modal fade" tabindex="-1" role="dialog">*/
/* 	<div class="modal-dialog modal-lg">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 				<h4 class="modal-title">{{ text_edit_shortcode }}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				<div class="wpo-widgetform"></div>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-primary submit-save pull-left"><i class="fa fa-save"></i> {{ text_save_all }}</button>*/
/* 				<button type="button" class="btn btn-success submit"><i class="fa fa-pencil-square-o"></i> {{ text_save_change }}</button>*/
/* 				<button type="button" class="btn btn-danger so-close" data-dismiss="modal"><i class="fa fa-times"></i> {{ text_close }}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="edit_module" class="modal fade" tabindex="-1" role="dialog">*/
/* 	<div class="modal-dialog modal-lg">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 				<h4 class="modal-title">{{ text_edit_module }}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* */
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-danger so-close" data-dismiss="modal"><i class="fa fa-times"></i> {{ text_close }}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/* <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/* <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/* <script type="text/javascript">*/
/* 	$('#so_row_settings a:first,#so_row_style a:first,#so_col_settings a:first,#so_col_style a:first,#language a:first').tab('show');*/
/* 	/* Random string *//* */
/* 	function randString(n) {*/
/* 		if (!n) {*/
/* 			n = 5;*/
/* 		}*/
/* 		var text = '';*/
/* 		var possible = 'abcdefghijklmnopqrstuvwxyz0123456789';*/
/* 		for (var i = 0; i < n; i++) {*/
/* 			text += possible.charAt(Math.floor(Math.random() * possible.length));*/
/* 		}*/
/* 		return text;*/
/* 	}*/
/* */
/* 	/* Change background type Row *//* */
/* 	$('#row_background_type').change(function() {*/
/* 		var row_background_type = $(this).val();*/
/* 		switch (row_background_type) {*/
/* 			case '0':*/
/* 				$('.row-background').hide();*/
/* 				break;*/
/* 			case '1':*/
/* 				$('.row-background').hide();*/
/* 				$('.row-background-color').show();*/
/* 				break;*/
/* 			case '2':*/
/* 				$('.row-background').hide();*/
/* 				$('.row-background-photo').show();*/
/* 				break;*/
/* 			case '3':*/
/* 				$('.row-background').hide();*/
/* 				$('.row-background-video').show();*/
/* 				break;*/
/* 		}*/
/* 	});*/
/* */
/* 	/* Change video type Row *//* */
/* 	$('#row_video_type').change(function() {*/
/* 		var row_video_type = $(this).val();*/
/* 		switch (row_video_type) {*/
/* 			case '0':*/
/* 				$('#row_link_video').val("YE7VzlLtp-4");*/
/* 				break;*/
/* 			case '1':*/
/* 				$('#row_link_video').val("http://video.webmfiles.org/big-buck-bunny_trailer.webm");*/
/* 				break;*/
/* 		}*/
/* 	});*/
/* */
/* 	/* Show section Row *//* */
/* 	$('#row_section').change(function() {*/
/* 		var row_section = $(this).val();*/
/* 		switch (row_section) {*/
/* 			case '0':*/
/* 				$('.row-section-id,.row-section-class,.row-section-style').hide();*/
/* 				break;*/
/* 			case '1':*/
/* 				$('.row-section-id,.row-section-class,.row-section-style').show();*/
/* 				break;*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	/* Change background type Section *//* */
/* 	$('#section_background_type').change(function() {*/
/* 		var row_background_type = $(this).val();*/
/* 		switch (row_background_type) {*/
/* 			case '0':*/
/* 				$('.section-background').hide();*/
/* 				break;*/
/* 			case '1':*/
/* 				$('.section-background').hide();*/
/* 				$('.section-background-color').show();*/
/* 				break;*/
/* 			case '2':*/
/* 				$('.section-background').hide();*/
/* 				$('.section-background-photo').show();*/
/* 				break;*/
/* 			case '3':*/
/* 				$('.section-background').hide();*/
/* 				$('.section-background-video').show();*/
/* 				break;*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	/* Change video type Section *//* */
/* 	$('#section_video_type').change(function() {*/
/* 		var section_video_type = $(this).val();*/
/* 		switch (section_video_type) {*/
/* 			case '0':*/
/* 				$('#section_link_video').val("YE7VzlLtp-4");*/
/* 				break;*/
/* 			case '1':*/
/* 				$('#section_link_video').val("http://video.webmfiles.org/big-buck-bunny_trailer.webm");*/
/* 				break;*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	/* Change background type Col *//* */
/* 	$('#col_background_type').change(function() {*/
/* 		var col_background_type = $(this).val();*/
/* 		switch (col_background_type) {*/
/* 			case '0':*/
/* 				$('.col-background').hide();*/
/* 				break;*/
/* 			case '1':*/
/* 				$('.col-background').hide();*/
/* 				$('.col-background-color').show();*/
/* 				break;*/
/* 			case '2':*/
/* 				$('.col-background').hide();*/
/* 				$('.col-background-photo').show();*/
/* 				break;*/
/* 			case '3':*/
/* 				$('.col-background').hide();*/
/* 				$('.col-background-video').show();*/
/* 				break;*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	/* Change video type Col *//* */
/* 	$('#col_video_type').change(function() {*/
/* 		var col_video_type = $(this).val();*/
/* 		switch (col_video_type) {*/
/* 			case '0':*/
/* 				$('#col_link_video').val("YE7VzlLtp-4");*/
/* 				break;*/
/* 			case '1':*/
/* 				$('#col_link_video').val("http://video.webmfiles.org/big-buck-bunny_trailer.webm");*/
/* 				break;*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	/* Add new Image *//* */
/* 	function addImage() {*/
/* 		var key_add_image = "";*/
/* 		$('.yt-generator-isp-add-media').click(function() {*/
/* 			key_add_image = randString(10);*/
/* 			$('#yt-generator-attr-image').append("<span><a href='' id='thumb-image" + key_add_image +*/
/* 				"' data-toggle='image' class='img-thumbnail'><img src='{{ placeholder }}' alt='' title='' data-placeholder='{{ placeholder }}' width='100' height='100' /></a><input class='form-control imageuploaded' type='hidden' data-base='{{ HTTP_CATALOG }}image/catalog/'  name='media_image{}' id='uploadimage" +*/
/* 				key_add_image + "' value='no_image.png'/><i class='fa fa-times'></i></span>");*/
/* 		});*/
/* 	}*/
/* */
/* 	var languagesDefault = "{{ languagesDefault }}";*/
/* 	var textDelete = "{{ text_java_textDelete }}";*/
/* 	var textDuplicate = "{{ text_java_textDuplicate }}";*/
/* 	var textPreview = "{{ text_java_textPreview }}";*/
/* 	var textCol = [];*/
/* 	textCol["col"] = "{{ text_java_col }}";*/
/* 	textCol["cols"] = "{{ text_java_cols }}";*/
/* 	textCol["sortCol"] = "{{ text_java_sortCol }}";*/
/* 	textCol["deleteCol"] = "{{ text_java_deleteCol }}";*/
/* 	textCol["editCol"] = "{{ text_java_editCol }}";*/
/* 	textCol["duplicateCol"] = "{{ text_java_duplicateCol }}";*/
/* 	textCol["addRow"] = "{{ text_java_addRow }}";*/
/* 	textCol["addModule"] = "{{ text_java_addModule }}";*/
/* 	textCol["addShortcode"] = "{{ text_java_addShortcode }}";*/
/* 	var textRow = [];*/
/* 	textRow["row"] = "{{ text_java_row }}";*/
/* 	textRow["sortRow"] = "{{ text_java_sortRow }}";*/
/* 	textRow["deleteRow"] = "{{ text_java_deleteRow }}";*/
/* 	textRow["editRow"] = "{{ text_java_editRow }}";*/
/* 	textRow["duplicateRow"] = "{{ text_java_duplicateRow }}";*/
/* 	textRow["addCol"] = "{{ text_java_addCol }}";*/
/* 	var textShortcode = [];*/
/* 	textShortcode["editShortcode"] = "{{ text_edit_shortcode }}";*/
/* 	$(".layout-builder-wrapper").each(function() {*/
/* 		$($(".layout-builder", this)).so_page_builder($(".hidden-content-layout").val());*/
/* 	});*/
/* /* Accordion List Module *//* */
/* 	$(document).ready(function(){*/
/* 		$(document).on('click',"#listmods .mod-head" , function(){*/
/* 			$(this).parent().find('.mod-items').slideToggle();*/
/* 		});*/
/* 	});*/
/* /*Get data layout*//* */
/* 	function getData( container ){*/
/* 		var result = new Array();	*/
/* 		$( container ).children('.so-col-content').children('.inner-col').children(".so-page-row").each( function(){*/
/* 			_row = $(this);*/
/* 			var data = _row.data('rowData');*/
/* 			data.cols = new Array();*/
/* 			$(_row).children('.inner-row').children( '.so-page-col' ).each( function(){*/
/* 				var _col = $(this).data('colData');*/
/* 				_col.widgets = new Array();*/
/* 				$(this).children('.so-col-content').children('.inner-col').children('.so-page-content').children('.so-page-widget').each( function(){  */
/* 					var wd = new Object();*/
/* 					wd.name = $(this).data('name');*/
/* 					wd.module = $(this).data('module');*/
/* 					wd.type = $(this).data('type');*/
/* 					if($(this).data('name') != 'module'){*/
/* 						wd.shortcode = $(this).data('shortcode');*/
/* 						wd.content = $(this).children('.hidden-content-shortcode').val();*/
/* 					}*/
/* 					_col.widgets.push( wd );*/
/* 				}); */
/* 				_col.rows = new Array();*/
/* 				if( $(this).children('.so-col-content').children('.inner-col').children( '.so-page-row' ).length > 0 ){*/
/* 					_col.rows = getData( this );*/
/* 				}*/
/* 				data.cols.push( _col );*/
/* 			} );*/
/* 			result.push( data ); 			*/
/* 		} );*/
/* 		*/
/* 		return result;	*/
/* 	}*/
/* /*Submit form*//* */
/* 	function submitForm(){*/
/* 		$( "#form-featured" ).submit( function(){*/
/* 			$(".layout-builder-wrapper").each( function(){*/
/* 				var result = getData( $(this).find(".layout-builder") );*/
/* 				var data = JSON.stringify( result );  */
/* 				$(".hidden-content-layout").html( data );*/
/* 			} );*/
/* 			return true; */
/* 		} );*/
/* 	}*/
/* 	submitForm();*/
/* 	*/
/* /*Show Column*//* */
/* 	function showNumColumn(){*/
/* 		$(".button-enablegrid .hide-column" ).click();*/
/* 	}*/
/* 	showNumColumn();*/
/* /* Alert Box Before Action *//* */
/* 	function deleteModule(node) {*/
/* 		return confirm(textDelete);*/
/* 	}*/
/* 	function duplicateModule(node) {*/
/* 		return confirm(textDuplicate);*/
/* 	}*/
/* 	/*function previewModule(node) {*/
/* 		if(confirm(textPreview)){*/
/* 			var result = getData( $("#form-featured").find(".layout-builder") );*/
/* 			var data = JSON.stringify( result );  */
/* 			var ajax_url = window.location.href;*/
/* 			$.ajax({*/
/* 				type: "POST",*/
/* 				url: ajax_url,*/
/* 				data: {*/
/* 					preview_page: 1,*/
/* 					data: data*/
/* 				},*/
/* 				beforeSend: function () {*/
/* 					$(".layout-builder-wrapper").addClass('yt-generator-loading');*/
/* 				},*/
/* 				success: function (data) {*/
/* 					console.log("111");*/
/* 				},*/
/* 				dataType: "json"*/
/* 			});*/
/* 		}*/
/* 	}	*//* */
/* </script>*/
/* <script type="text/javascript">*/
/* 	jQuery(document).ready(function($) {*/
/* 		$('.js-select').select2();*/
/* 	});*/
/* </script>*/
/* */
/* {{ footer }}*/
