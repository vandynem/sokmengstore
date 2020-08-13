<?php

/* extension/soconfig/options_mobile.twig */
class __TwigTemplate_2f945f04ec9816d1a991ebb978fba952457548dd3143238b28f06a97ef84151f extends Twig_Template
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
        // line 2
        $context["fonts"] = array("standard" => "Standard", "google" => "Google Fonts");
        // line 6
        echo "
";
        // line 7
        $context["columns"] = array("1" => "1 columns", "2" => "2 columns", "3" => "3 columns", "4" => "4 columns", "5" => "5 columns", "6" => "6 columns");
        // line 15
        echo "
";
        // line 16
        $context["secondimg"] = array("1" => "One image", "2" => "Second images");
        // line 20
        echo "
";
        // line 21
        $context["refine_search"] = array("0" => "With images", "1" => "Text only", "2" => "Disable");
        // line 26
        echo "
";
        // line 27
        $context["fonts_normal"] = array("inherit" => "No Use", "Arial, Helvetica, sans-serif" => "Arial", "Verdana, Geneva, sans-serif" => "Verdana", "Georgia,Times New Roman, Times, serif" => "Georgia", "Impact, Arial, Helvetica, sans-serif" => "Impact", "Tahoma, Geneva, sans-serif" => "Tahoma", "Trebuchet MS, Arial, Helvetica, sans-serif" => "Trebuchet MS", "Arial Black, Gadget, sans-serif" => "Arial Black", "Times, Times New Roman, serif" => "Times", "Palatino Linotype, Book Antiqua, Palatino, serif" => "Palatino Linotype", "Lucida Sans Unicode, Lucida Grande\", sans-serif" => "Lucida Sans Unicode", "MS Serif, New York, serif" => "MS Serif", "Comic Sans MS, cursive" => "Comic Sans MS", "Courier New, Courier, monospace" => "Courier New", "Lucida Console, Monaco, monospace" => "Lucida Console");
        // line 44
        echo "
";
        // line 45
        $context["devices"] = array("lg" => "<i class=\"fa fa-desktop\"></i> Desktops", "md" => "<i class=\"fa fa-tablet\"></i> Tablet Landscape", "sm" => "<i class=\"fa fa-tablet\"></i> Tablet Portrait", "xs" => "<i class=\"fa fa-mobile\"></i> Phones");
        // line 51
        echo "
";
        // line 52
        $context["Scssformat"] = array("Expanded" => "Expanded", "Nested" => "Nested (default)", "Compressed" => "Compressed", "Compact" => "Compact", "Crunched" => "Crunched");
        // line 59
        echo "
";
        // line 60
        $context["layoutStyle"] = array("full" => "Full Layout", "boxed" => "Boxed", "iframed" => "Iframed", "rounded" => "Rounded");
        // line 66
        echo "
";
        // line 67
        $context["content_bg_mode"] = array("repeat" => "Repeat", "no-repeat" => "No-Repeat");
        // line 71
        echo "
";
        // line 72
        $context["content_attachment"] = array("scroll" => "Scroll", "fixed" => "Fixed");
        // line 76
        echo "
";
        // line 77
        $context["related_position"] = array("vertical" => "Vertical", "horizontal" => "Horizontal");
        // line 81
        echo "
";
        // line 82
        $context["thumbnailPos"] = array("bottom" => "Bottom", "left" => "Left");
        // line 86
        echo "
";
        // line 87
        $context["zoommode"] = array("window" => "Basic Zoom", "inner" => "Inner Zoom", "lens" => "Lens Zoom");
        // line 92
        echo "
";
        // line 93
        $context["gallerysize"] = array("small" => "Image Small", "medium" => "Image Medium", "large" => "Image Large");
        // line 98
        echo "
";
        // line 99
        $context["tabs_position"] = array("1" => "Bottom vertical", "2" => "Bottom horizontal");
        // line 103
        echo "
";
        // line 104
        $context["toppanel_type"] = array("1" => "Show Header Center", "2" => "Show Header Bottom", "3" => "Show All");
        // line 109
        echo "
";
        // line 110
        $context["catalog_mode"] = array("grid-list" => "List Column", "grid-table" => "Table Column", "grid-2" => "2 Columns", "grid-3" => "3 Columns", "grid-4" => "4 Columns", "grid-5" => "5 Columns");
        // line 118
        echo "
";
        // line 119
        $context["radio_style"] = array("0" => "Default", "1" => "Button");
        // line 123
        echo "
";
        // line 124
        $context["type_banner"] = array("1" => "Hover effect 1", "2" => "Hover effect 2", "3" => "Hover effect 3", "4" => "Hover effect 4", "5" => "Hover effect 5", "6" => "Hover effect 6", "7" => "Hover effect 7", "8" => "Hover effect 8", "9" => "Hover effect 9", "10" => "Hover effect 10", "11" => "Hover effect 11", "12" => "Hover effect 12");
        // line 138
        echo "
";
        // line 139
        $context["preloader_animation"] = array("line" => "Default line", "rotate-plane" => "Rotate Plane", "double-loop" => "Double Bounce", "audio-wave" => "Audio Wave", "cube-move" => "Cube Move", "circle-bounce" => "Circle Bounce", "circle-bounce2" => "Circle Bounce 2", "cube-grid" => "Cube Grid", "folding-cube" => "Cube Folding");
        // line 150
        echo "
";
        // line 151
        $context["pattern_array"] = array("0" => "None");
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(2, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["pattern_id"]) {
            // line 153
            echo "\t";
            if (!twig_in_filter($context["pattern_id"], (isset($context["pattern_array"]) ? $context["pattern_array"] : null))) {
                // line 154
                echo "          ";
                $context["pattern_array"] = twig_array_merge((isset($context["pattern_array"]) ? $context["pattern_array"] : null), array(0 => $context["pattern_id"]));
                // line 155
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pattern_id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "
<div class=\"sidebar \" data-sticky_column>
<ul class=\"nav nav-tabs main_tabs_vertical\" >
    <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 161
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_general"), "method");
        echo " </a></li>
    <li><a href=\"#tab-barbottom\" data-toggle=\"tab\">";
        // line 162
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_barbottom"), "method");
        echo " </a></li>
    <li><a href=\"#tab-barleft\" data-toggle=\"tab\">";
        // line 163
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_barleft"), "method");
        echo " </a></li>
    <li><a href=\"#tab-products\" data-toggle=\"tab\">";
        // line 164
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_products"), "method");
        echo " </a></li>
    <li><a href=\"#tab-fonts\" data-toggle=\"tab\">";
        // line 165
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_fonts"), "method");
        echo " </a></li>
\t<li><a href=\"#tab-advanced\" data-toggle=\"tab\">";
        // line 166
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_advanced"), "method");
        echo " </a></li>
</ul>
</div>

<div class=\"tab-content main_content_vertical col-sm-10\" data-sticky_column>
    <!-------------------------------------Tab General---------------------------------->
    <div class=\"tab-pane active\" id=\"tab-general\">
        <ul class=\"nav nav-tabs  main_tabs_2 \">
            <li class=\"active\"><a href=\"#tab-general-layout1\" class=\"selected\" data-toggle=\"tab\">";
        // line 174
        echo (isset($context["general_tab_general"]) ? $context["general_tab_general"] : null);
        echo " </a></li>
            <li><a href=\"#tab-general-layout2\" data-toggle=\"tab\">";
        // line 175
        echo (isset($context["general_tab_header"]) ? $context["general_tab_header"] : null);
        echo " </a></li>
\t\t\t<li><a href=\"#tab-general-layout3\" data-toggle=\"tab\">Footer</a></li>
        </ul>

        <div class=\"tab-content \">
\t\t\t";
        // line 181
        echo "            <div class=\"tab-pane active\" id=\"tab-general-layout1\">
\t\t\t\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Select Layouts</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab-general__layouttype\" class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t";
        // line 189
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_mtypelayout", array(0 => "mobile_general", 1 => "mobilelayout", 2 => (isset($context["typelayouts"]) ? $context["typelayouts"] : null), 3 => "6"), "method");
        echo " 

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"
\t\t\t\t\t\t\t\t\t<p class='help-hint-text'>
\t\t\t\t\t\t\t\t\t\t<i class='fa fa-bullhorn' ></i> 
\t\t\t\t\t\t\t\t\t\t<span> New Color</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 1:</strong> Select the layout you want to display.<p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 2:</strong> Fill color and color code >> Click button Compile CSS >> Create a new Color.</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 3:</strong> Select the color you just created >> Click button Save. </p>
\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t\tNew Color
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t";
        // line 210
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "mobile_general", 1 => "nameColor", 2 => "Name Color"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<i class=\"input-group-addon fa fa-paint-brush\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
        // line 215
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_colors", array(0 => "mobile_general", 1 => "colorHex", 2 => "Select color"), "method");
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t<button onclick=\"buttonApplyColor();\" class=\"btn btn-primary\" type=\"button\"  ";
        // line 219
        if ((isset($context["scsscompile"]) ? $context["scsscompile"] : null)) {
            echo " ";
            echo "disabled='disabled'";
            echo " ";
        }
        echo "><i class=\"fa fa-compress\" aria-hidden=\"true\"></i> Compile CSS</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 222
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "nameColor", array())) {
            // line 223
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\"> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "nameColor", array());
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 225
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t
\t\t\t\t\t\t\t\t ";
        // line 228
        if (((isset($context["scsscompile"]) ? $context["scsscompile"] : null) || (isset($context["compileMutiColor"]) ? $context["compileMutiColor"] : null))) {
            echo " 
\t\t\t\t\t\t\t\t<div class=\"text-info\" style=\"margin-top:20px;\">
\t\t\t\t\t\t\t\t<p><strong>You need set :</strong> Before Compile css</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t1.Tab Advanced → SCSS Compile = Off .</br>
\t\t\t\t\t\t\t\t2.Tab Advanced → User Developer Compile Muti Color = Off .
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 237
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab-general__themecolor\" class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"
\t\t\t\t\t\t\t\t\t<p class='help-hint-text'>
\t\t\t\t\t\t\t\t\t\t<i class='fa fa-bullhorn' ></i> 
\t\t\t\t\t\t\t\t\t\t<span>Create New Color</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 1:</strong> Select the layout you want to display.<p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 2:</strong> Fill color and color code >> Click button Compile CSS >> Create a new Color.</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 3:</strong> Select the color you just created >> Click button Save. </p>
\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t\tThemes Color
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\" id=\"select_color\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 257
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_select", array(0 => "mobile_general", 1 => "mobilecolor", 2 => (isset($context["allThemeColor"]) ? $context["allThemeColor"] : null), 3 => "width30"), "method");
        echo " 
\t\t\t\t\t\t\t\t";
        // line 258
        if ($this->getAttribute((isset($context["allThemeColor"]) ? $context["allThemeColor"] : null), "none", array(), "array")) {
            // line 259
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-warning\" style=\"margin-top:20px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>  Can not find css color file. Please create color new 
\t\t\t\t\t\t\t\t            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 265
        echo "\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                </div>
\t\t\t\t
\t\t\t\t<div class=\"so-panel\">\t
\t\t\t\t\t<h3 class=\"panel-title\">Platforms</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Mobile Status</label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\" >
\t\t\t\t\t\t\t\t";
        // line 277
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "platforms_mobile", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-imgpayment_status\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\tLogo Mobile:
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 285
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_addimage", array(0 => "mobile_general", 1 => "logomobile"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group last\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 290
        echo (isset($context["general_topbar_status"]) ? $context["general_topbar_status"] : null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\" >
\t\t\t\t\t\t\t\t";
        // line 292
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "barnav", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">  ";
        // line 296
        echo (isset($context["general_copyright_text"]) ? $context["general_copyright_text"] : null);
        echo "   </label>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t";
        // line 298
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "mobile_general", 1 => "mcopyright", 2 => "Footer copyright content"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 301
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "copyright", array())) {
            // line 302
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\"> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "copyright", array());
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 304
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>

            </div>
           

\t\t\t";
        // line 314
        echo "            <div id=\"tab-general-layout2\" class=\"tab-pane\">
\t\t\t\t<div id=\"tab-general__headertype\" class=\"tab-pane active\">
\t\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t\t<h3 class=\"panel-title\">Type of Header</h3>
\t\t\t\t\t\t<span class=\"help-block\">If you need content from other header like phone number you need to set it in custom Theme Control Panel.</span>
\t\t\t\t\t\t<p class=\"help-hint\">
\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t\t<span>You can set these headers for any skin you want</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        // line 323
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_mtypeheader", array(0 => "mobile_general", 1 => "mtypeheader", 2 => (isset($context["typelayouts"]) ? $context["typelayouts"] : null)), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t\t
            </div>

\t\t\t
\t\t\t";
        // line 331
        echo "            <div id=\"tab-general-layout3\" class=\"tab-pane\">
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t<div id=\"tab-general__bannereffect\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">Other Footer</h3>
\t\t\t\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Payment Image</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 340
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_addimage", array(0 => "mobile_general", 1 => "mimgpayment"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Telephone No</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\" >
\t\t\t\t\t\t\t\t\t\t\t";
        // line 347
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "mphone_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\" id=\"tab-field-mphone_status\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 350
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langHori", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "mobile_general", 2 => "mphone_text", 3 => 50), "method");
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Email Us</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\" >
\t\t\t\t\t\t\t\t\t\t\t";
        // line 356
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "memail_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\" id=\"tab-field-memail_status\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 359
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langHori", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "mobile_general", 2 => "memail_text", 3 => 50), "method");
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Custom Footer</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 365
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "customfooter_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\" id=\"tab-field-customfooter_status\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 368
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langTextarea", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "mobile_general", 2 => "customfooter_text"), "method");
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t\t\t\t<div class=\"form-group no-margin\" >
\t\t\t\t\t\t\t\t\t<h3 class=\"col-sm-3 panel-title \">Add Link Menu For Footer</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Show Menu Footer</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 384
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "menufooter_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Menu More -->
\t\t\t\t\t\t\t\t\t<div id=\"tab-field-menufooter_status\" class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<table class=\"bottom-bar\" id=\"listgroup-footer\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"first\" style=\"width: 40%;\" >Name</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Link</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width: 10%;\">Sort</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width: 10%;\">Delete</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 401
        $context["menu_row"] = 0;
        // line 402
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if (((isset($context["footermenus"]) ? $context["footermenus"] : null) && ((isset($context["footermenus"]) ? $context["footermenus"] : null) != ""))) {
            // line 403
            echo "\t\t\t\t\t\t\t\t\t\t\t\t  \t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["footermenus"]) ? $context["footermenus"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
                // line 404
                echo "\t\t\t\t\t\t\t\t\t\t\t\t  \t";
                if ( !twig_test_empty($this->getAttribute($context["menuitem"], "name", array()))) {
                    // line 405
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"list";
                    echo (isset($context["menu_row"]) ? $context["menu_row"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"payment-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 409
                    echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langAddMenu", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "mobile_general", 2 => "footermenus", 3 => $context["menuitem"], 4 => (isset($context["menu_row"]) ? $context["menu_row"] : null), 5 => "name"), "method");
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" value=\"";
                    // line 413
                    echo $this->getAttribute($context["menuitem"], "link", array());
                    echo "\" name=\"mobile_general[footermenus][";
                    echo (isset($context["menu_row"]) ? $context["menu_row"] : null);
                    echo "][link]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" class=\"sort\" value=\"";
                    // line 416
                    echo $this->getAttribute($context["menuitem"], "sort", array());
                    echo "\" name=\"mobile_general[footermenus][";
                    echo (isset($context["menu_row"]) ? $context["menu_row"] : null);
                    echo "][sort]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#list";
                    // line 420
                    echo (isset($context["menu_row"]) ? $context["menu_row"] : null);
                    echo "').remove();\" class=\"btn btn-danger\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 424
                    $context["menu_row"] = ((isset($context["menu_row"]) ? $context["menu_row"] : null) + 1);
                    // line 425
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 426
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 428
        echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<tfoot></tfoot>
\t\t\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t\t\t<a onclick=\"add_footermenu();\" class=\"add-item-payment btn btn-primary\">Add item</a>
\t\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\tvar menu_row = ";
        // line 434
        echo (isset($context["menu_row"]) ? $context["menu_row"] : null);
        echo " ;
\t\t\t\t\t\t\t\t\t\tvar languages = ";
        // line 435
        echo twig_jsonencode_filter((isset($context["languages"]) ? $context["languages"] : null));
        echo " ;
\t\t\t\t\t\t\t\t\t\tconsole.log(menu_row)
\t\t\t\t\t\t\t\t\t\tfunction add_footermenu() {
\t\t\t\t\t\t\t\t\t\t\tconsole.log(menu_row)
\t\t\t\t\t\t\t\t\t\t\thtml  = '<tbody id=\"list' + menu_row + '\">';
\t\t\t\t\t\t\t\t\t\t\thtml += '  <tr>';
\t\t\t\t\t\t\t\t\t\t\thtml += '    <td class=\"first\">';
\t\t\t\t\t\t\t\t\t\t\thtml += '\t\t<div class=\"payment_name\">';
\t\t\t\t\t\t\t\t\t\t\thtml +='\t\t<div class=\"tab-horizontal\">';
\t\t\t\t\t\t\t\t\t\t\thtml +='\t\t\t<ul class=\"nav nav-tabs main_tabs_horizontal\">';
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \$.each(languages, function(key, language){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar  \$active = language['language_id'] == 1 ? 'active' : '';
\t\t\t\t\t\t\t\t\t\t\thtml +='\t\t\t\t<li class=\"'+\$active+'\"><a href=\"#language-name'+ menu_row+language['language_id']+'\" data-toggle=\"tab\" aria-expanded=\"true\"><img src=\"language/'+language['code']+'/'+language['code']+'.png\" title=\"'+language['name']+'\"> '+language['name']+'</a></li>';
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t });
\t\t\t\t\t\t\t\t\t\t\thtml +='\t\t\t</ul>';
\t\t\t\t\t\t\t\t\t\t\thtml +=\t'\t\t\t<div class=\"tab-content\">';
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.each(languages, function(key, language){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar  \$active = language['language_id'] == 1 ? 'active' : '';
\t\t\t\t\t\t\t\t\t\t\thtml +=\t'\t\t\t\t<div class=\"tab-pane '+\$active+'\" id=\"language-name'+ menu_row +language['language_id']+'\"><input type=\"text\" name=\"mobile_general[footermenus][' + menu_row + '][name]['+language['language_id']+']\" value=\"Demo Menu \" class=\"form-control\" size=\"45\"></div>';
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t });

\t\t\t\t\t\t\t\t\t\t\thtml +=\t'\t\t\t</div>';
\t\t\t\t\t\t\t\t\t\t\thtml += '\t\t</div>';
\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\t\t\t\t\t\thtml += '    </td>';
\t\t\t\t\t\t\t\t\t\t\thtml += '    <td>';
\t\t\t\t\t\t\t\t\t\t\thtml += '\t\t<input class=\"form-control\" type=\"text\" value=\"#\" name=\"mobile_general[footermenus][' + menu_row + '][link]\">';
\t\t\t\t\t\t\t\t\t\t\thtml += '    </td>';
\t\t\t\t\t\t\t\t\t\t\thtml += '    <td>';
\t\t\t\t\t\t\t\t\t\t\thtml += '\t\t<input class=\"form-control\" type=\"text\" class=\"sort\" name=\"mobile_general[footermenus][' + menu_row + '][sort]\">';
\t\t\t\t\t\t\t\t\t\t\thtml += '    </td>';
\t\t\t\t\t\t\t\t\t\t\thtml += '    <td><a onclick=\"\$(\\'#list' + menu_row + '\\').remove();\" class=\"btn btn-danger\">Remove</a></td>';
\t\t\t\t\t\t\t\t\t\t\thtml += '  </tr>';
\t\t\t\t\t\t\t\t\t\t\thtml += '</tbody>';
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\$('#listgroup-footer tfoot').before(html);
\t\t\t\t\t\t\t\t\t\t\tmenu_row++;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t</script> 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--  END Menu More -->

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t
            </div>

        </div>
    </div>
    <!-------------------------------------end tab General---------------------------------->

    <!-------------------------------------Tab Layout---------------------------------------->
    <div class=\"tab-pane\" id=\"tab-barbottom\">
\t\t<!--subtabs: General -->
\t\t<div class=\"tab-pane active\" id=\"tab-colors-layout1\">
\t\t\t<div class=\"so-panel\">
\t\t\t\t<h3 class=\"panel-title\">";
        // line 499
        echo (isset($context["barmore_heading"]) ? $context["barmore_heading"] : null);
        echo "</h3>
\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >";
        // line 502
        echo (isset($context["bottombar_status"]) ? $context["bottombar_status"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"btn-group btn-toggle block-group \" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t";
        // line 505
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "bottombar_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >";
        // line 511
        echo (isset($context["barmore_status"]) ? $context["barmore_status"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"btn-group btn-toggle block-group \" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t";
        // line 514
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "barmore_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- Menu More -->
\t\t\t\t\t<div id=\"tab-field-barmore_status\" class=\"form-group\">
\t\t\t\t\t\t<table class=\"bottom-bar\" id=\"listgroup-bar\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"first\" style=\"width: 40%;\" >Name</td>
\t\t\t\t\t\t\t\t\t<td>Link</td>
\t\t\t\t\t\t\t\t\t<td style=\"width: 10%;\">Sort</td>
\t\t\t\t\t\t\t\t\t<td style=\"width: 10%;\">Delete</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t";
        // line 533
        $context["menu_row"] = 0;
        // line 534
        echo "
\t\t\t\t\t\t\t\t";
        // line 535
        if (((isset($context["listmenus"]) ? $context["listmenus"] : null) && ((isset($context["listmenus"]) ? $context["listmenus"] : null) != ""))) {
            // line 536
            echo "\t\t\t\t\t\t\t\t  \t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listmenus"]) ? $context["listmenus"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
                // line 537
                echo "\t\t\t\t\t\t\t\t  \t";
                if ( !twig_test_empty($this->getAttribute($context["menuitem"], "namemore", array()))) {
                    // line 538
                    echo "\t\t\t\t\t\t\t\t\t\t<tbody id=\"list";
                    echo (isset($context["menu_row"]) ? $context["menu_row"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"payment-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 542
                    echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langAddMenu", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "mobile_general", 2 => "listmenus", 3 => $context["menuitem"], 4 => (isset($context["menu_row"]) ? $context["menu_row"] : null), 5 => "namemore"), "method");
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" value=\"";
                    // line 546
                    echo $this->getAttribute($context["menuitem"], "link", array());
                    echo "\" name=\"mobile_general[listmenus][";
                    echo (isset($context["menu_row"]) ? $context["menu_row"] : null);
                    echo "][link]\">
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" class=\"sort\" value=\"";
                    // line 549
                    echo $this->getAttribute($context["menuitem"], "sort", array());
                    echo "\" name=\"mobile_general[listmenus][";
                    echo (isset($context["menu_row"]) ? $context["menu_row"] : null);
                    echo "][sort]\">
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#list";
                    // line 553
                    echo (isset($context["menu_row"]) ? $context["menu_row"] : null);
                    echo "').remove();\" class=\"btn btn-danger\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t";
                    // line 557
                    $context["menu_row"] = ((isset($context["menu_row"]) ? $context["menu_row"] : null) + 1);
                    // line 558
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 559
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
\t\t\t\t\t\t\t\t";
        }
        // line 561
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tfoot></tfoot>
\t\t\t\t\t\t</table>

\t\t\t\t\t\t<a onclick=\"add_listmenus();\" class=\"add-item-payment btn btn-primary\">Add item</a>
\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tvar listmenu_row = ";
        // line 567
        echo (isset($context["menu_row"]) ? $context["menu_row"] : null);
        echo " ;
\t\t\t\t\t\tvar languages = ";
        // line 568
        echo twig_jsonencode_filter((isset($context["languages"]) ? $context["languages"] : null));
        echo " ;
\t\t\t\t\t\t
\t\t\t\t\t\tfunction add_listmenus() {

\t\t\t\t\t\t\thtml  = '<tbody id=\"list' + listmenu_row + '\">';
\t\t\t\t\t\t\thtml += '  <tr>';
\t\t\t\t\t\t\thtml += '    <td class=\"first\">';
\t\t\t\t\t\t\thtml += '\t\t<div class=\"payment_name\">';
\t\t\t\t\t\t\thtml +='\t\t<div class=\"tab-horizontal\">';
\t\t\t\t\t\t\thtml +='\t\t\t<ul class=\"nav nav-tabs main_tabs_horizontal\">';
\t\t\t\t\t\t\t\t\t\t\t\t \$.each(languages, function(key, language){
\t\t\t\t\t\t\t\t\t\t\t\t\tvar  \$active = language['language_id'] == 1 ? 'active' : '';
\t\t\t\t\t\t\thtml +='\t\t\t\t<li class=\"'+\$active+'\"><a href=\"#language-namemore'+ listmenu_row+language['language_id']+'\" data-toggle=\"tab\" aria-expanded=\"true\"><img src=\"language/'+language['code']+'/'+language['code']+'.png\" title=\"'+language['name']+'\"> '+language['name']+'</a></li>';
\t\t\t\t\t\t\t\t\t\t\t\t });
\t\t\t\t\t\t\thtml +='\t\t\t</ul>';
\t\t\t\t\t\t\thtml +=\t'\t\t\t<div class=\"tab-content\">';
\t\t\t\t\t\t\t\t\t\t\t\t\$.each(languages, function(key, language){
\t\t\t\t\t\t\t\t\t\t\t\t\tvar  \$active = language['language_id'] == 1 ? 'active' : '';
\t\t\t\t\t\t\thtml +=\t'\t\t\t\t<div class=\"tab-pane '+\$active+'\" id=\"language-namemore'+ listmenu_row +language['language_id']+'\"><input type=\"text\" name=\"mobile_general[listmenus][' + listmenu_row + '][namemore]['+language['language_id']+']\" value=\"Demo Menu \" class=\"form-control\" size=\"45\"></div>';
\t\t\t\t\t\t\t\t\t\t\t\t });

\t\t\t\t\t\t\thtml +=\t'\t\t\t</div>';
\t\t\t\t\t\t\thtml += '\t\t</div>';
\t\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\t\thtml += '    </td>';
\t\t\t\t\t\t\thtml += '    <td>';
\t\t\t\t\t\t\thtml += '\t\t<input class=\"form-control\" type=\"text\" value=\"#\" name=\"mobile_general[listmenus][' + listmenu_row + '][link]\">';
\t\t\t\t\t\t\thtml += '    </td>';
\t\t\t\t\t\t\thtml += '    <td>';
\t\t\t\t\t\t\thtml += '\t\t<input class=\"form-control\" type=\"text\" class=\"sort\" name=\"mobile_general[listmenus][' + listmenu_row + '][sort]\">';
\t\t\t\t\t\t\thtml += '    </td>';
\t\t\t\t\t\t\thtml += '    <td><a onclick=\"\$(\\'#list' + listmenu_row + '\\').remove();\" class=\"btn btn-danger\">Remove</a></td>';
\t\t\t\t\t\t\thtml += '  </tr>';
\t\t\t\t\t\t\thtml += '</tbody>';
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#listgroup-bar tfoot').before(html);
\t\t\t\t\t\t\tlistmenu_row++;
\t\t\t\t\t\t}
\t\t\t\t\t\t</script> 
\t\t\t\t\t</div>
\t\t\t\t\t<!--  END Menu More -->


\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<!--subtabs: General -->
    </div>
    <!-------------------------------------end tab Colors,backgrounds,fonts-->

    <!-------------------------------------Tab Products sliders, products listings-->
    <div class=\"tab-pane\" id=\"tab-products\">
    \t<div class=\"so-panel\">
\t\t\t<div class=\"form-group no-margin\" >
\t\t\t\t<h3 class=\"col-sm-2 panel-title \">";
        // line 624
        echo (isset($context["category_heading"]) ? $context["category_heading"] : null);
        echo "</h3>
\t\t\t\t<div class=\"col-sm-10 text-right\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"panel-container\">
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" > ";
        // line 633
        echo (isset($context["general_morecategory_status"]) ? $context["general_morecategory_status"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 635
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "category_more", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" > ";
        // line 639
        echo (isset($context["general_compare_status"]) ? $context["general_compare_status"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 641
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "compare_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" > ";
        // line 645
        echo (isset($context["general_wishlist_status"]) ? $context["general_wishlist_status"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 647
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "wishlist_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" > ";
        // line 651
        echo (isset($context["general_addcart_status"]) ? $context["general_addcart_status"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 653
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "addcart_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
       
    </div>
    <!------------------------------------end tab Pages-->

    <!-------------------------------------Tab Fonts-->
    <div class=\"tab-pane\" id=\"tab-fonts\">
\t\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">Fonts<span class=\"help-block\">If you want to speed up your site use one of the common fonts instead of the fonts from Google.</span></h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 670
        echo (isset($context["fonts_body"]) ? $context["fonts_body"] : null);
        echo "  </label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"block-group fonts-change\">
\t\t\t\t\t\t\t";
        // line 673
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_onOffFont", array(0 => "mobile_general", 1 => "mbody_status"), "method");
        echo " 
\t\t\t\t\t\t\t<div class=\"block-group items-font font-standard\" >
\t\t\t\t\t\t\t\t";
        // line 675
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_select", array(0 => "mobile_general", 1 => "mnormal_body", 2 => (isset($context["fonts_normal"]) ? $context["fonts_normal"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\"control-label\">  ";
        // line 678
        echo (isset($context["entry_google_url"]) ? $context["entry_google_url"] : null);
        echo "   </label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 680
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "mobile_general", 1 => "murl_body"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 681
        echo (isset($context["entry_google_url_help"]) ? $context["entry_google_url_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\" control-label\"> ";
        // line 685
        echo (isset($context["entry_google_family"]) ? $context["entry_google_family"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 687
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "mobile_general", 1 => "mfamily_body"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\"> ";
        // line 688
        echo (isset($context["entry_google_family_help"]) ? $context["entry_google_family_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-group\">
\t\t\t\t\t\t\t";
        // line 693
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_textarea", array(0 => "mobile_general", 1 => "mselector_body", 2 => "Add css selectors"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 700
        echo (isset($context["fonts_heading"]) ? $context["fonts_heading"] : null);
        echo "  </label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"block-group fonts-change\">
\t\t\t\t\t\t\t";
        // line 703
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_onOffFont", array(0 => "mobile_general", 1 => "mheading_status"), "method");
        echo " 
\t\t\t\t\t\t\t<div class=\"block-group items-font font-standard\" >
\t\t\t\t\t\t\t\t";
        // line 705
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_select", array(0 => "mobile_general", 1 => "mnormal_heading", 2 => (isset($context["fonts_normal"]) ? $context["fonts_normal"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\"control-label\"> ";
        // line 708
        echo (isset($context["entry_google_url"]) ? $context["entry_google_url"] : null);
        echo "  </label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 710
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "mobile_general", 1 => "murl_heading"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 711
        echo (isset($context["entry_google_url_help"]) ? $context["entry_google_url_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\" control-label\"> ";
        // line 715
        echo (isset($context["entry_google_family"]) ? $context["entry_google_family"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 717
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "mobile_general", 1 => "mfamily_heading"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\"> ";
        // line 718
        echo (isset($context["entry_google_family_help"]) ? $context["entry_google_family_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-group\">
\t\t\t\t\t\t\t";
        // line 723
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_textarea", array(0 => "mobile_general", 1 => "mselector_heading", 2 => "Add css selectors"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t\t\t
    </div>
    <!-------------------------------------end tab Fonts-->
\t
\t<!-------------------------------------Tab Bar Left-->
\t<div class=\"tab-pane\" id=\"tab-barleft\">
\t\t<div class=\"so-panel\">
\t\t\t<div class=\"form-group no-margin\" >
\t\t\t\t<h3 class=\"col-sm-2 panel-title \">";
        // line 736
        echo (isset($context["barleft_heading"]) ? $context["barleft_heading"] : null);
        echo "</h3>
\t\t\t\t<div class=\"col-sm-10 text-right\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" > ";
        // line 744
        echo (isset($context["barsearch_status"]) ? $context["barsearch_status"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 746
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "barsearch_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" > ";
        // line 750
        echo (isset($context["barmega1_status"]) ? $context["barmega1_status"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 752
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "barmega1_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" > ";
        // line 757
        echo (isset($context["barmega2_status"]) ? $context["barmega2_status"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 759
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "barmega2_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" > ";
        // line 765
        echo (isset($context["barwistlist_status"]) ? $context["barwistlist_status"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 767
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "barwistlist_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" > ";
        // line 771
        echo (isset($context["barcompare_status"]) ? $context["barcompare_status"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 773
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "barcompare_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>\t
\t\t
\t\t
\t</div>
\t
\t
\t
\t<!-------------------------------------Tab Tab Advanced-->
\t<div class=\"tab-pane\" id=\"tab-advanced\">
\t\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">SCSS Compile</h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" >SCSS Compile</label>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t";
        // line 794
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "mscsscompile", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" >CSS Format</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 800
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "mscssformat", 2 => (isset($context["Scssformat"]) ? $context["Scssformat"] : null)), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" >User Developer Compile Muti Color</label>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t";
        // line 806
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "mobile_general", 1 => "mcompileMutiColor", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t


\t</div>
\t<!-------------------------------------End Tab Advanced-->
\t
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/soconfig/options_mobile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1141 => 806,  1132 => 800,  1123 => 794,  1099 => 773,  1094 => 771,  1087 => 767,  1082 => 765,  1073 => 759,  1068 => 757,  1060 => 752,  1055 => 750,  1048 => 746,  1043 => 744,  1032 => 736,  1016 => 723,  1008 => 718,  1004 => 717,  999 => 715,  992 => 711,  988 => 710,  983 => 708,  977 => 705,  972 => 703,  966 => 700,  956 => 693,  948 => 688,  944 => 687,  939 => 685,  932 => 681,  928 => 680,  923 => 678,  917 => 675,  912 => 673,  906 => 670,  886 => 653,  881 => 651,  874 => 647,  869 => 645,  862 => 641,  857 => 639,  850 => 635,  845 => 633,  833 => 624,  774 => 568,  770 => 567,  762 => 561,  753 => 559,  750 => 558,  748 => 557,  741 => 553,  732 => 549,  724 => 546,  717 => 542,  709 => 538,  706 => 537,  701 => 536,  699 => 535,  696 => 534,  694 => 533,  672 => 514,  666 => 511,  657 => 505,  651 => 502,  645 => 499,  578 => 435,  574 => 434,  566 => 428,  557 => 426,  554 => 425,  552 => 424,  545 => 420,  536 => 416,  528 => 413,  521 => 409,  513 => 405,  510 => 404,  505 => 403,  502 => 402,  500 => 401,  480 => 384,  461 => 368,  455 => 365,  446 => 359,  440 => 356,  431 => 350,  425 => 347,  415 => 340,  404 => 331,  394 => 323,  383 => 314,  372 => 304,  366 => 302,  364 => 301,  358 => 298,  353 => 296,  346 => 292,  341 => 290,  333 => 285,  322 => 277,  308 => 265,  299 => 259,  297 => 258,  293 => 257,  271 => 237,  258 => 228,  253 => 225,  247 => 223,  245 => 222,  235 => 219,  228 => 215,  220 => 210,  196 => 189,  186 => 181,  178 => 175,  174 => 174,  163 => 166,  159 => 165,  155 => 164,  151 => 163,  147 => 162,  143 => 161,  138 => 158,  131 => 155,  128 => 154,  125 => 153,  121 => 152,  119 => 151,  116 => 150,  114 => 139,  111 => 138,  109 => 124,  106 => 123,  104 => 119,  101 => 118,  99 => 110,  96 => 109,  94 => 104,  91 => 103,  89 => 99,  86 => 98,  84 => 93,  81 => 92,  79 => 87,  76 => 86,  74 => 82,  71 => 81,  69 => 77,  66 => 76,  64 => 72,  61 => 71,  59 => 67,  56 => 66,  54 => 60,  51 => 59,  49 => 52,  46 => 51,  44 => 45,  41 => 44,  39 => 27,  36 => 26,  34 => 21,  31 => 20,  29 => 16,  26 => 15,  24 => 7,  21 => 6,  19 => 2,);
    }
}
/* {# Twig variable So Config #}*/
/* {% set fonts = { */
/* 	'standard' : 'Standard',*/
/* 	'google'  : 'Google Fonts',*/
/* } %}*/
/* */
/* {% set columns = { */
/* 	'1' : '1 columns',*/
/* 	'2' : '2 columns',*/
/* 	'3' : '3 columns',*/
/* 	'4' : '4 columns',*/
/* 	'5' : '5 columns',*/
/* 	'6' : '6 columns',*/
/* } %}*/
/* */
/* {% set secondimg = { */
/* 	'1' : 'One image',*/
/* 	'2' : 'Second images',*/
/* } %}*/
/* */
/* {% set refine_search = { */
/* 	'0' : 'With images',*/
/* 	'1' : 'Text only',*/
/* 	'2' : 'Disable',*/
/* } %}*/
/* */
/* {% set fonts_normal = { */
/* 	'inherit' : 'No Use',*/
/* 	'Arial, Helvetica, sans-serif'  : 'Arial',*/
/* 	'Verdana, Geneva, sans-serif'  : 'Verdana',*/
/* 	'Georgia,Times New Roman, Times, serif'  : 'Georgia',*/
/* 	'Impact, Arial, Helvetica, sans-serif'  : 'Impact',*/
/* 	'Tahoma, Geneva, sans-serif'  : 'Tahoma',*/
/* 	'Trebuchet MS, Arial, Helvetica, sans-serif'  : 'Trebuchet MS',*/
/* 	'Arial Black, Gadget, sans-serif'  : 'Arial Black',*/
/* 	'Times, Times New Roman, serif'  : 'Times',*/
/* 	'Palatino Linotype, Book Antiqua, Palatino, serif'  : 'Palatino Linotype',*/
/* 	'Lucida Sans Unicode, Lucida Grande", sans-serif'  : 'Lucida Sans Unicode',*/
/* 	'MS Serif, New York, serif'  : 'MS Serif',*/
/* 	'Comic Sans MS, cursive'  : 'Comic Sans MS',*/
/* 	'Courier New, Courier, monospace'  : 'Courier New',*/
/* 	'Lucida Console, Monaco, monospace'  : 'Lucida Console',*/
/* } %}*/
/* */
/* {% set devices = { */
/* 	'lg' : '<i class="fa fa-desktop"></i> Desktops',*/
/* 	'md' : '<i class="fa fa-tablet"></i> Tablet Landscape',*/
/* 	'sm' : '<i class="fa fa-tablet"></i> Tablet Portrait',*/
/* 	'xs' : '<i class="fa fa-mobile"></i> Phones',*/
/* } %}*/
/* */
/* {% set Scssformat = { */
/* 	'Expanded' : 'Expanded',*/
/* 	'Nested' : 'Nested (default)',*/
/* 	'Compressed' : 'Compressed',*/
/* 	'Compact' : 'Compact',*/
/* 	'Crunched' : 'Crunched',*/
/* } %}*/
/* */
/* {% set layoutStyle = { */
/* 	'full' : 'Full Layout',*/
/* 	'boxed' : 'Boxed',*/
/* 	'iframed' : 'Iframed',*/
/* 	'rounded' : 'Rounded',*/
/* } %}*/
/* */
/* {% set content_bg_mode = { */
/* 	'repeat' : 'Repeat',*/
/* 	'no-repeat' : 'No-Repeat',*/
/* } %}*/
/* */
/* {% set content_attachment = { */
/* 	'scroll' : 'Scroll',*/
/* 	'fixed' : 'Fixed',*/
/* } %}*/
/* */
/* {% set related_position = { */
/* 	'vertical' : 'Vertical',*/
/* 	'horizontal' : 'Horizontal',*/
/* } %}*/
/* */
/* {% set thumbnailPos = { */
/* 	'bottom' : 'Bottom',*/
/* 	'left' : 'Left',*/
/* } %}*/
/* */
/* {% set zoommode = { */
/* 	'window' : 'Basic Zoom',*/
/* 	'inner' : 'Inner Zoom',*/
/* 	'lens' : 'Lens Zoom',*/
/* } %}*/
/* */
/* {% set gallerysize = { */
/* 	'small' : 'Image Small',*/
/* 	'medium' : 'Image Medium',*/
/* 	'large' : 'Image Large',*/
/* } %}*/
/* */
/* {% set tabs_position = { */
/* 	'1' : 'Bottom vertical',*/
/* 	'2' : 'Bottom horizontal',*/
/* } %}*/
/* */
/* {% set toppanel_type = { */
/* 	'1' : 'Show Header Center',*/
/* 	'2' : 'Show Header Bottom',*/
/* 	'3' : 'Show All'*/
/* } %}*/
/* */
/* {% set catalog_mode = { */
/* 	'grid-list' : 'List Column',*/
/* 	'grid-table' : 'Table Column',*/
/* 	'grid-2' : '2 Columns',*/
/* 	'grid-3' : '3 Columns',*/
/* 	'grid-4' : '4 Columns',*/
/* 	'grid-5' : '5 Columns',*/
/* } %}*/
/* */
/* {% set radio_style = { */
/* 	'0' : 'Default',*/
/* 	'1' : 'Button'*/
/* } %}*/
/* */
/* {% set type_banner = { */
/* 	'1' : 'Hover effect 1',*/
/* 	'2' : 'Hover effect 2',*/
/* 	'3' : 'Hover effect 3',*/
/* 	'4' : 'Hover effect 4',*/
/* 	'5' : 'Hover effect 5',*/
/* 	'6' : 'Hover effect 6',*/
/* 	'7' : 'Hover effect 7',*/
/* 	'8' : 'Hover effect 8',*/
/* 	'9' : 'Hover effect 9',*/
/* 	'10' : 'Hover effect 10',*/
/* 	'11' : 'Hover effect 11',*/
/* 	'12' : 'Hover effect 12',*/
/* } %}*/
/* */
/* {% set preloader_animation = { */
/* 	'line' : 'Default line',*/
/* 	'rotate-plane' : 'Rotate Plane',*/
/* 	'double-loop' : 'Double Bounce',*/
/* 	'audio-wave' : 'Audio Wave',*/
/* 	'cube-move' : 'Cube Move',*/
/* 	'circle-bounce' : 'Circle Bounce',*/
/* 	'circle-bounce2' : 'Circle Bounce 2',*/
/* 	'cube-grid' : 'Cube Grid',*/
/* 	'folding-cube' : 'Cube Folding',*/
/* } %}*/
/* */
/* {% set pattern_array = {'0' : 'None'} %}*/
/* {% for pattern_id in 2..45 %}*/
/* 	{% if pattern_id not in pattern_array %}*/
/*           {% set pattern_array = pattern_array|merge([pattern_id]) %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* {# //End variable So Config #}*/
/* */
/* <div class="sidebar " data-sticky_column>*/
/* <ul class="nav nav-tabs main_tabs_vertical" >*/
/*     <li class="active"><a href="#tab-general" data-toggle="tab">{{  objlang.get('maintabs_general') }} </a></li>*/
/*     <li><a href="#tab-barbottom" data-toggle="tab">{{ objlang.get('maintabs_barbottom') }} </a></li>*/
/*     <li><a href="#tab-barleft" data-toggle="tab">{{ objlang.get('maintabs_barleft')  }} </a></li>*/
/*     <li><a href="#tab-products" data-toggle="tab">{{ objlang.get('maintabs_products')  }} </a></li>*/
/*     <li><a href="#tab-fonts" data-toggle="tab">{{ objlang.get('maintabs_fonts')  }} </a></li>*/
/* 	<li><a href="#tab-advanced" data-toggle="tab">{{ objlang.get('maintabs_advanced')  }} </a></li>*/
/* </ul>*/
/* </div>*/
/* */
/* <div class="tab-content main_content_vertical col-sm-10" data-sticky_column>*/
/*     <!-------------------------------------Tab General---------------------------------->*/
/*     <div class="tab-pane active" id="tab-general">*/
/*         <ul class="nav nav-tabs  main_tabs_2 ">*/
/*             <li class="active"><a href="#tab-general-layout1" class="selected" data-toggle="tab">{{ general_tab_general }} </a></li>*/
/*             <li><a href="#tab-general-layout2" data-toggle="tab">{{ general_tab_header }} </a></li>*/
/* 			<li><a href="#tab-general-layout3" data-toggle="tab">Footer</a></li>*/
/*         </ul>*/
/* */
/*         <div class="tab-content ">*/
/* 			{# General  Blocks---------------------------------------------  #}*/
/*             <div class="tab-pane active" id="tab-general-layout1">*/
/* 				*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">Select Layouts</h3>*/
/* 					<div class="panel-container">*/
/* 						*/
/* 						<div id="tab-general__layouttype" class="form-group">*/
/* 							<div class="col-sm-12">*/
/* 								{{ fields.field_mtypelayout('mobile_general','mobilelayout',typelayouts,'6') }} */
/* */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group" >*/
/* 							<label class="col-sm-2 control-label" >*/
/* 								<span data-toggle="tooltip" title="*/
/* 									<p class='help-hint-text'>*/
/* 										<i class='fa fa-bullhorn' ></i> */
/* 										<span> New Color</span>*/
/* 									</p>*/
/* 									<p ><strong class='text-primary'>Step 1:</strong> Select the layout you want to display.<p>*/
/* 									<p ><strong class='text-primary'>Step 2:</strong> Fill color and color code >> Click button Compile CSS >> Create a new Color.</p>*/
/* 									<p ><strong class='text-primary'>Step 3:</strong> Select the color you just created >> Click button Save. </p>*/
/* 								">*/
/* 									New Color*/
/* 								</span>*/
/* 							</label>*/
/* 							*/
/* 							<div class="col-sm-2">*/
/* 								{{ fields.field_text('mobile_general','nameColor','Name Color') }} */
/* 							</div>*/
/* 							<div class="col-sm-2">*/
/* 								<div class="input-group">*/
/* 									<i class="input-group-addon fa fa-paint-brush" aria-hidden="true"></i>*/
/* 									{{ fields.field_colors('mobile_general','colorHex','Select color') }} */
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-5">*/
/* 								<button onclick="buttonApplyColor();" class="btn btn-primary" type="button"  {% if scsscompile %} {{ "disabled='disabled'" }} {% endif %}><i class="fa fa-compress" aria-hidden="true"></i> Compile CSS</button>*/
/* 							</div>*/
/* 							<div class="col-sm-offset-2 col-sm-10">*/
/* 								{% if error.nameColor %}*/
/* 									<div class="text-danger"> {{error.nameColor}}</div>*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							<div class="col-sm-offset-2 col-sm-10">*/
/* 			*/
/* 								 {% if (scsscompile  or  compileMutiColor)  %} */
/* 								<div class="text-info" style="margin-top:20px;">*/
/* 								<p><strong>You need set :</strong> Before Compile css</p>*/
/* 								<p>*/
/* 								1.Tab Advanced → SCSS Compile = Off .</br>*/
/* 								2.Tab Advanced → User Developer Compile Muti Color = Off .*/
/* 								</p>*/
/* 								*/
/* 								</div>*/
/* 								{% endif %} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div id="tab-general__themecolor" class="form-group">*/
/* 							<label class="col-sm-2 control-label" >*/
/* 								<span data-toggle="tooltip" title="*/
/* 									<p class='help-hint-text'>*/
/* 										<i class='fa fa-bullhorn' ></i> */
/* 										<span>Create New Color</span>*/
/* 									</p>*/
/* 									<p ><strong class='text-primary'>Step 1:</strong> Select the layout you want to display.<p>*/
/* 									<p ><strong class='text-primary'>Step 2:</strong> Fill color and color code >> Click button Compile CSS >> Create a new Color.</p>*/
/* 									<p ><strong class='text-primary'>Step 3:</strong> Select the color you just created >> Click button Save. </p>*/
/* 								">*/
/* 									Themes Color*/
/* 								</span>*/
/* 							</label>*/
/* 							<div class="col-sm-6" id="select_color">*/
/* 								*/
/* 								{{ fields.field_select('mobile_general','mobilecolor',allThemeColor,'width30') }} */
/* 								{% if allThemeColor['none'] %}*/
/* 									<div class="text-warning" style="margin-top:20px;">*/
/* 										<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i>  Can not find css color file. Please create color new */
/* 								            <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 								        </div>*/
/* 									*/
/* 									</div>*/
/* 								{% endif %}	*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/*                 </div>*/
/* 				*/
/* 				<div class="so-panel">	*/
/* 					<h3 class="panel-title">Platforms</h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label">Mobile Status</label>*/
/* 							<div class="col-sm-3" >*/
/* 								{{ fields.field_radio('mobile_general','platforms_mobile', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" id="tab-field-imgpayment_status">*/
/* 							<label class="col-sm-2 control-label" >*/
/* 								Logo Mobile:*/
/* 							</label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_addimage('mobile_general','logomobile') }} */
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="form-group last">*/
/* 							<label class="col-sm-2 control-label">{{general_topbar_status}}</label>*/
/* 							<div class="col-sm-3" >*/
/* 								{{ fields.field_radio('mobile_general','barnav', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label">  {{ general_copyright_text }}   </label>*/
/* 							<div class="col-sm-4">*/
/* 								{{ fields.field_text('mobile_general','mcopyright','Footer copyright content') }} */
/* 							</div>*/
/* 							<div class="col-sm-offset-2 col-sm-10">*/
/* 								{% if error.copyright %}*/
/* 									<div class="text-danger"> {{error.copyright}}</div>*/
/* 								{% endif %}*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* */
/*             </div>*/
/*            */
/* */
/* 			{# Header  Blocks---------------------------------------------  #}*/
/*             <div id="tab-general-layout2" class="tab-pane">*/
/* 				<div id="tab-general__headertype" class="tab-pane active">*/
/* 					<div class="so-panel">*/
/* 						<h3 class="panel-title">Type of Header</h3>*/
/* 						<span class="help-block">If you need content from other header like phone number you need to set it in custom Theme Control Panel.</span>*/
/* 						<p class="help-hint">*/
/* 							<i class="fa fa-bullhorn" aria-hidden="true"></i> */
/* 							<span>You can set these headers for any skin you want</span>*/
/* 						</p>*/
/* 						{{ fields.field_mtypeheader('mobile_general','mtypeheader',typelayouts) }} */
/* 					</div>*/
/* 				</div>*/
/* 								*/
/*             </div>*/
/* */
/* 			*/
/* 			{# Footer  Blocks---------------------------------------------  #}*/
/*             <div id="tab-general-layout3" class="tab-pane">*/
/* 				<div class="clearfix">*/
/* 						<div id="tab-general__bannereffect" class="tab-pane">*/
/* 							<div class="so-panel">*/
/* 								<h3 class="panel-title">Other Footer</h3>*/
/* 								<div class="panel-container">*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-2 control-label" >Payment Image</label>*/
/* 										<div class="col-sm-10">*/
/* 											{{ fields.field_addimage('mobile_general','mimgpayment') }} */
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group" >*/
/* 										<label class="col-sm-2 control-label">Telephone No</label>*/
/* 										<div class="col-sm-2" >*/
/* 											{{ fields.field_radio('mobile_general','mphone_status', {1:'ON',0 : 'OFF'} )}} */
/* 										</div>*/
/* 										<div class="col-sm-8" id="tab-field-mphone_status">*/
/* 											{{ fields.field_langHori(languages,'mobile_general','mphone_text',50) }}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-2 control-label">Email Us</label>*/
/* 										<div class="col-sm-2" >*/
/* 											{{ fields.field_radio('mobile_general','memail_status', {1:'ON',0 : 'OFF'} )}} */
/* 										</div>*/
/* 										<div class="col-sm-8" id="tab-field-memail_status">*/
/* 											{{ fields.field_langHori(languages,'mobile_general','memail_text',50) }}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-2 control-label" >Custom Footer</label>*/
/* 										<div class="col-sm-2">*/
/* 											{{ fields.field_radio('mobile_general','customfooter_status', {1:'ON',0 : 'OFF'} )}} */
/* 										</div>*/
/* 										<div class="col-sm-8" id="tab-field-customfooter_status">*/
/* 											{{ fields.field_langTextarea(languages,'mobile_general','customfooter_text') }}*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 									*/
/* 									*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="so-panel">*/
/* 								<div class="form-group no-margin" >*/
/* 									<h3 class="col-sm-3 panel-title ">Add Link Menu For Footer</h3>*/
/* 								</div>*/
/* 								<div class="panel-container">*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-2 control-label" >Show Menu Footer</label>*/
/* 										<div class="col-sm-10">*/
/* 											{{ fields.field_radio('mobile_general','menufooter_status', {1:'ON',0 : 'OFF'} )}} */
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<!-- Menu More -->*/
/* 									<div id="tab-field-menufooter_status" class="form-group">*/
/* 										<table class="bottom-bar" id="listgroup-footer">*/
/* 											<thead>*/
/* 												<tr>*/
/* 													<td class="first" style="width: 40%;" >Name</td>*/
/* 													<td>Link</td>*/
/* 													<td style="width: 10%;">Sort</td>*/
/* 													<td style="width: 10%;">Delete</td>*/
/* 												</tr>*/
/* 											</thead>*/
/* */
/* 												{% set menu_row = 0 %}*/
/* 												{% if footermenus and  footermenus !=''%}*/
/* 												  	{% for menuitem in footermenus %}*/
/* 												  	{% if menuitem.name is not empty %}*/
/* 														<tbody id="list{{menu_row}}">*/
/* 															<tr>*/
/* 																<td class="first">*/
/* 																	<div class="payment-name">*/
/* 																		{{ fields.field_langAddMenu(languages,'mobile_general','footermenus',menuitem,menu_row,'name') }}*/
/* 																	</div>*/
/* 																</td>*/
/* 																<td>*/
/* 																	<input class="form-control" type="text" value="{{menuitem.link}}" name="mobile_general[footermenus][{{menu_row}}][link]">*/
/* 																</td>*/
/* 																<td >*/
/* 																	<input class="form-control" type="text" class="sort" value="{{menuitem.sort}}" name="mobile_general[footermenus][{{menu_row}}][sort]">*/
/* 																</td>*/
/* 																*/
/* 																<td>*/
/* 																	<a onclick="$('#list{{menu_row}}').remove();" class="btn btn-danger">Remove</a>*/
/* 																</td>*/
/* 															</tr>*/
/* 														</tbody>*/
/* 													{%set menu_row = menu_row + 1 %}*/
/* 													{% endif %}*/
/* 													{% endfor %}	*/
/* 												{% endif %}*/
/* 												*/
/* 											<tfoot></tfoot>*/
/* 										</table>*/
/* */
/* 										<a onclick="add_footermenu();" class="add-item-payment btn btn-primary">Add item</a>*/
/* 										<script type="text/javascript">*/
/* 										var menu_row = {{menu_row}} ;*/
/* 										var languages = {{languages|json_encode}} ;*/
/* 										console.log(menu_row)*/
/* 										function add_footermenu() {*/
/* 											console.log(menu_row)*/
/* 											html  = '<tbody id="list' + menu_row + '">';*/
/* 											html += '  <tr>';*/
/* 											html += '    <td class="first">';*/
/* 											html += '		<div class="payment_name">';*/
/* 											html +='		<div class="tab-horizontal">';*/
/* 											html +='			<ul class="nav nav-tabs main_tabs_horizontal">';*/
/* 																 $.each(languages, function(key, language){*/
/* 																	var  $active = language['language_id'] == 1 ? 'active' : '';*/
/* 											html +='				<li class="'+$active+'"><a href="#language-name'+ menu_row+language['language_id']+'" data-toggle="tab" aria-expanded="true"><img src="language/'+language['code']+'/'+language['code']+'.png" title="'+language['name']+'"> '+language['name']+'</a></li>';*/
/* 																 });*/
/* 											html +='			</ul>';*/
/* 											html +=	'			<div class="tab-content">';*/
/* 																$.each(languages, function(key, language){*/
/* 																	var  $active = language['language_id'] == 1 ? 'active' : '';*/
/* 											html +=	'				<div class="tab-pane '+$active+'" id="language-name'+ menu_row +language['language_id']+'"><input type="text" name="mobile_general[footermenus][' + menu_row + '][name]['+language['language_id']+']" value="Demo Menu " class="form-control" size="45"></div>';*/
/* 																 });*/
/* */
/* 											html +=	'			</div>';*/
/* 											html += '		</div>';*/
/* 											html += '</div>';*/
/* 											html += '    </td>';*/
/* 											html += '    <td>';*/
/* 											html += '		<input class="form-control" type="text" value="#" name="mobile_general[footermenus][' + menu_row + '][link]">';*/
/* 											html += '    </td>';*/
/* 											html += '    <td>';*/
/* 											html += '		<input class="form-control" type="text" class="sort" name="mobile_general[footermenus][' + menu_row + '][sort]">';*/
/* 											html += '    </td>';*/
/* 											html += '    <td><a onclick="$(\'#list' + menu_row + '\').remove();" class="btn btn-danger">Remove</a></td>';*/
/* 											html += '  </tr>';*/
/* 											html += '</tbody>';*/
/* 											*/
/* 											$('#listgroup-footer tfoot').before(html);*/
/* 											menu_row++;*/
/* 										}*/
/* 										</script> */
/* 									</div>*/
/* 									<!--  END Menu More -->*/
/* */
/* 								</div>*/
/* */
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 						*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 				*/
/* 				*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <!-------------------------------------end tab General---------------------------------->*/
/* */
/*     <!-------------------------------------Tab Layout---------------------------------------->*/
/*     <div class="tab-pane" id="tab-barbottom">*/
/* 		<!--subtabs: General -->*/
/* 		<div class="tab-pane active" id="tab-colors-layout1">*/
/* 			<div class="so-panel">*/
/* 				<h3 class="panel-title">{{barmore_heading}}</h3>*/
/* 				<div class="panel-container">*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" >{{bottombar_status}}</label>*/
/* 						<div class="col-sm-6">*/
/* 							<div class="btn-group btn-toggle block-group " data-toggle="buttons">*/
/* 								{{ fields.field_radio('mobile_general','bottombar_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 					*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" >{{barmore_status}}</label>*/
/* 						<div class="col-sm-6">*/
/* 							<div class="btn-group btn-toggle block-group " data-toggle="buttons">*/
/* 								{{ fields.field_radio('mobile_general','barmore_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 					*/
/* 					</div>*/
/* 					*/
/* 					*/
/* 					<!-- Menu More -->*/
/* 					<div id="tab-field-barmore_status" class="form-group">*/
/* 						<table class="bottom-bar" id="listgroup-bar">*/
/* 							<thead>*/
/* 								<tr>*/
/* 									<td class="first" style="width: 40%;" >Name</td>*/
/* 									<td>Link</td>*/
/* 									<td style="width: 10%;">Sort</td>*/
/* 									<td style="width: 10%;">Delete</td>*/
/* 								</tr>*/
/* 							</thead>*/
/* */
/* 								{% set menu_row = 0 %}*/
/* */
/* 								{% if listmenus and  listmenus !=''%}*/
/* 								  	{% for menuitem in listmenus %}*/
/* 								  	{% if menuitem.namemore is not empty %}*/
/* 										<tbody id="list{{menu_row}}">*/
/* 											<tr>*/
/* 												<td class="first">*/
/* 													<div class="payment-name">*/
/* 														{{ fields.field_langAddMenu(languages,'mobile_general','listmenus',menuitem,menu_row,'namemore') }}*/
/* 													</div>*/
/* 												</td>*/
/* 												<td>*/
/* 													<input class="form-control" type="text" value="{{menuitem.link}}" name="mobile_general[listmenus][{{menu_row}}][link]">*/
/* 												</td>*/
/* 												<td >*/
/* 													<input class="form-control" type="text" class="sort" value="{{menuitem.sort}}" name="mobile_general[listmenus][{{menu_row}}][sort]">*/
/* 												</td>*/
/* 												*/
/* 												<td>*/
/* 													<a onclick="$('#list{{menu_row}}').remove();" class="btn btn-danger">Remove</a>*/
/* 												</td>*/
/* 											</tr>*/
/* 										</tbody>*/
/* 									{%set menu_row = menu_row + 1 %}*/
/* 									{% endif %}*/
/* 									{% endfor %}	*/
/* 								{% endif %}*/
/* 								*/
/* 							<tfoot></tfoot>*/
/* 						</table>*/
/* */
/* 						<a onclick="add_listmenus();" class="add-item-payment btn btn-primary">Add item</a>*/
/* 						<script type="text/javascript">*/
/* 						var listmenu_row = {{menu_row}} ;*/
/* 						var languages = {{languages|json_encode}} ;*/
/* 						*/
/* 						function add_listmenus() {*/
/* */
/* 							html  = '<tbody id="list' + listmenu_row + '">';*/
/* 							html += '  <tr>';*/
/* 							html += '    <td class="first">';*/
/* 							html += '		<div class="payment_name">';*/
/* 							html +='		<div class="tab-horizontal">';*/
/* 							html +='			<ul class="nav nav-tabs main_tabs_horizontal">';*/
/* 												 $.each(languages, function(key, language){*/
/* 													var  $active = language['language_id'] == 1 ? 'active' : '';*/
/* 							html +='				<li class="'+$active+'"><a href="#language-namemore'+ listmenu_row+language['language_id']+'" data-toggle="tab" aria-expanded="true"><img src="language/'+language['code']+'/'+language['code']+'.png" title="'+language['name']+'"> '+language['name']+'</a></li>';*/
/* 												 });*/
/* 							html +='			</ul>';*/
/* 							html +=	'			<div class="tab-content">';*/
/* 												$.each(languages, function(key, language){*/
/* 													var  $active = language['language_id'] == 1 ? 'active' : '';*/
/* 							html +=	'				<div class="tab-pane '+$active+'" id="language-namemore'+ listmenu_row +language['language_id']+'"><input type="text" name="mobile_general[listmenus][' + listmenu_row + '][namemore]['+language['language_id']+']" value="Demo Menu " class="form-control" size="45"></div>';*/
/* 												 });*/
/* */
/* 							html +=	'			</div>';*/
/* 							html += '		</div>';*/
/* 							html += '</div>';*/
/* 							html += '    </td>';*/
/* 							html += '    <td>';*/
/* 							html += '		<input class="form-control" type="text" value="#" name="mobile_general[listmenus][' + listmenu_row + '][link]">';*/
/* 							html += '    </td>';*/
/* 							html += '    <td>';*/
/* 							html += '		<input class="form-control" type="text" class="sort" name="mobile_general[listmenus][' + listmenu_row + '][sort]">';*/
/* 							html += '    </td>';*/
/* 							html += '    <td><a onclick="$(\'#list' + listmenu_row + '\').remove();" class="btn btn-danger">Remove</a></td>';*/
/* 							html += '  </tr>';*/
/* 							html += '</tbody>';*/
/* 							*/
/* 							$('#listgroup-bar tfoot').before(html);*/
/* 							listmenu_row++;*/
/* 						}*/
/* 						</script> */
/* 					</div>*/
/* 					<!--  END Menu More -->*/
/* */
/* */
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 		<!--subtabs: General -->*/
/*     </div>*/
/*     <!-------------------------------------end tab Colors,backgrounds,fonts-->*/
/* */
/*     <!-------------------------------------Tab Products sliders, products listings-->*/
/*     <div class="tab-pane" id="tab-products">*/
/*     	<div class="so-panel">*/
/* 			<div class="form-group no-margin" >*/
/* 				<h3 class="col-sm-2 panel-title ">{{ category_heading }}</h3>*/
/* 				<div class="col-sm-10 text-right">*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="panel-container">*/
/* 				*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" > {{general_morecategory_status}}</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('mobile_general','category_more', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" > {{general_compare_status}}</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('mobile_general','compare_status', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" > {{general_wishlist_status}}</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('mobile_general','wishlist_status', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" > {{general_addcart_status}}</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('mobile_general','addcart_status', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>	*/
/*        */
/*     </div>*/
/*     <!------------------------------------end tab Pages-->*/
/* */
/*     <!-------------------------------------Tab Fonts-->*/
/*     <div class="tab-pane" id="tab-fonts">*/
/* 		*/
/* 		<div class="so-panel">*/
/* 			<h3 class="panel-title">Fonts<span class="help-block">If you want to speed up your site use one of the common fonts instead of the fonts from Google.</span></h3>*/
/* 			<div class="panel-container">*/
/* 				<div class="form-group">*/
/* 					*/
/* 					<label class="col-sm-3 control-label" >{{ fonts_body }}  </label>*/
/* 					<div class="col-sm-9">*/
/* 						<div class="block-group fonts-change">*/
/* 							{{ fields.field_onOffFont('mobile_general','mbody_status') }} */
/* 							<div class="block-group items-font font-standard" >*/
/* 								{{ fields.field_select('mobile_general','mnormal_body',fonts_normal) }} */
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class="control-label">  {{ entry_google_url }}   </label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('mobile_general','murl_body') }} */
/* 									<span class="help-block">{{ entry_google_url_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class=" control-label"> {{ entry_google_family }}</label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('mobile_general','mfamily_body') }} */
/* 									<span class="help-block"> {{ entry_google_family_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="block-group">*/
/* 							{{ fields.field_textarea('mobile_general','mselector_body','Add css selectors') }} */
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 		*/
/* 				*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" >{{ fonts_heading }}  </label>*/
/* 					<div class="col-sm-9">*/
/* 						<div class="block-group fonts-change">*/
/* 							{{ fields.field_onOffFont('mobile_general','mheading_status') }} */
/* 							<div class="block-group items-font font-standard" >*/
/* 								{{ fields.field_select('mobile_general','mnormal_heading',fonts_normal) }} */
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class="control-label"> {{ entry_google_url }}  </label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('mobile_general','murl_heading') }} */
/* 									<span class="help-block">{{ entry_google_url_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class=" control-label"> {{ entry_google_family }}</label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('mobile_general','mfamily_heading') }} */
/* 									<span class="help-block"> {{ entry_google_family_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="block-group">*/
/* 							{{ fields.field_textarea('mobile_general','mselector_heading','Add css selectors') }} */
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>				*/
/*     </div>*/
/*     <!-------------------------------------end tab Fonts-->*/
/* 	*/
/* 	<!-------------------------------------Tab Bar Left-->*/
/* 	<div class="tab-pane" id="tab-barleft">*/
/* 		<div class="so-panel">*/
/* 			<div class="form-group no-margin" >*/
/* 				<h3 class="col-sm-2 panel-title ">{{ barleft_heading }}</h3>*/
/* 				<div class="col-sm-10 text-right">*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="panel-container">*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" > {{barsearch_status}}</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('mobile_general','barsearch_status', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" > {{barmega1_status}}</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('mobile_general','barmega1_status', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" > {{barmega2_status}}</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('mobile_general','barmega2_status', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* */
/* 				*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" > {{barwistlist_status}}</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('mobile_general','barwistlist_status', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" > {{barcompare_status}}</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('mobile_general','barcompare_status', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 		</div>	*/
/* 		*/
/* 		*/
/* 	</div>*/
/* 	*/
/* 	*/
/* 	*/
/* 	<!-------------------------------------Tab Tab Advanced-->*/
/* 	<div class="tab-pane" id="tab-advanced">*/
/* 		*/
/* 		<div class="so-panel">*/
/* 			<h3 class="panel-title">SCSS Compile</h3>*/
/* 			<div class="panel-container">*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" >SCSS Compile</label>*/
/* 					<div class="col-sm-2">*/
/* 						{{ fields.field_radio('mobile_general','mscsscompile', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" >CSS Format</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('mobile_general','mscssformat', Scssformat)}} */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" >User Developer Compile Muti Color</label>*/
/* 					<div class="col-sm-2">*/
/* 						{{ fields.field_radio('mobile_general','mcompileMutiColor', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		*/
/* */
/* */
/* 	</div>*/
/* 	<!-------------------------------------End Tab Advanced-->*/
/* 	*/
/* </div>*/
/* */
