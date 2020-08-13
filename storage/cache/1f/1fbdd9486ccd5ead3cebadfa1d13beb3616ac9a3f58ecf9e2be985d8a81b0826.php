<?php

/* extension/soconfig/soconfig.twig */
class __TwigTemplate_6075b1a12058d1440369a75a4b880184c613a0d4f58feaa7ab7917f41f4084d6 extends Twig_Template
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
        echo " ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 

<div id=\"content\">
    <div class=\"page-header\" style=\"border:none\">    </div>

    <div id=\"theme-options\" class=\"container-fluid\">

         ";
        // line 8
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array())) {
            // line 9
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array());
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 12
        echo " 
\t\t
        ";
        // line 14
        if (((isset($context["success"]) ? $context["success"] : null) && (isset($context["success"]) ? $context["success"] : null))) {
            echo " 
        <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 15
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " 
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 18
        echo " 

        <div class=\"panel \">
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "  
\t\t\t\t\t\t\t\t";
            // line 27
            if (($this->getAttribute($context["store"], "store_id", array()) == (isset($context["active_store"]) ? $context["active_store"] : null))) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn  dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo " <span class=\"fa fa-angle-down\"></span></a>
\t\t\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t\t\t\t\t\t\t<span class=\"label label-primary\">";
        // line 31
        echo (isset($context["theme_version"]) ? $context["theme_version"] : null);
        echo "</span>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu store_dropdown\">
\t\t\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "  
\t\t\t\t\t\t\t\t\t";
            // line 34
            $context["store_active"] = ((($this->getAttribute($context["store"], "store_id", array()) == (isset($context["active_store"]) ? $context["active_store"] : null))) ? ("active") : (""));
            // line 35
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["store"], "status", array())) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t<li class=\"";
                echo (isset($context["store_active"]) ? $context["store_active"] : null);
                echo "\" ><a href=\"";
                echo (isset($context["base_href"]) ? $context["base_href"] : null);
                echo "&store_id=";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" >";
                echo $this->getAttribute($context["store"], "name", array());
                echo " </a></li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t   </div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-7 text-right\">
\t\t\t\t\t\t";
        // line 44
        if ((isset($context["status_product_option"]) ? $context["status_product_option"] : null)) {
            // line 45
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo (isset($context["href_product"]) ? $context["href_product"] : null);
            echo "\"><button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-file-text\"></i> Product Feature</button></a>
\t\t\t\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo (isset($context["add_db_product"]) ? $context["add_db_product"] : null);
            echo "\"><button class=\"btn btn btn-success create-feature\" type=\"button\"><i class=\"fa fa-wrench\"></i> Create Product Feature</button></a>
\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a onclick=\"buttonApply();\" data-toggle=\"tooltip\" title=\"Apply Changes\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i></a>
\t\t\t\t\t\t\t<a href=\"";
        // line 53
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo " \" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo " \" class=\"btn btn-default\"><i class=\"fa fa-close\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
            
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form name=\"settingsform\" action=\"";
        // line 61
        echo (isset($context["action"]) ? $context["action"] : null);
        echo " \" method=\"post\" enctype=\"multipart/form-data\" id=\"form-optimus\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"tab-content tab-content-main\">
\t\t\t\t\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "  
\t\t\t\t\t\t\t\t";
            // line 65
            $context["store_active"] = ((($this->getAttribute($context["store"], "store_id", array()) == 0)) ? ("active") : (""));
            // line 66
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["store"], "store_id", array()) == (isset($context["active_store"]) ? $context["active_store"] : null))) {
                // line 67
                echo "\t\t\t\t\t\t\t\t\t<div class=\"clearfix tab-pane-demo\" id=\"tab-store\" data-sticky_parent>
\t\t\t\t\t\t\t\t\t\t";
                // line 68
                $this->loadTemplate("extension/soconfig/options_stores.twig", "extension/soconfig/soconfig.twig", 68)->display(array_merge($context, array("store" => $context["store"])));
                // line 69
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 71
            echo "
\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo " 
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input name=\"buttonForm\" type=\"hidden\"  value=\"\" />
\t\t\t\t\t\t<input name=\"buttonColor\" type=\"hidden\"  value=\"\" />
\t\t\t\t\t</form>


\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"content-row clearfix\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"copyright-info\">
\t\t\t\t\t\tDesigned &amp; Developed with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.opencartworks.com\" target=\"_blank\">Opencartworks</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<div class=\"pagebuilder-links\">
\t\t\t\t\t\t<ul class=\"list-inline text-right\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"http://www.opencartworks.com/forums\">Forum</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"http://www.smartaddons.com/documentation/category/opencart/\">Documentation</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"http://www.opencartworks.com/contact-us\">Support</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.facebook.com/opencartworks\">Community</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

        </div>

    </div>

</div>



<script type=\"text/javascript\"><!--
\$(document).ready(function(){
\t\t/*** Change ColorPicker ***/
\t\tChangeColor(\"#theme_color\");
\t\tChangeColor(\"#theme_bgcolor\");
\t\t
\t\t\$('#tab-general__headertype').on('click', '.type', function () {
\t\t   \$('#tab-general__headertype .type').removeClass(\"active\");
\t\t   \$(this).addClass(\"active\");
\t\t});
\t\t\$('#tab-general__footertype').on('click', '.type', function () {
\t\t   \$('#tab-general__footertype .type').removeClass(\"active\");
\t\t   \$(this).addClass(\"active\");
\t\t});

\t\t\$('#tab-general__layouttype').on('click', '.applyLayout', function () {
\t\t\t if (confirm('Are you sure you want to apply default setting')) {
\t\t\t\t\$keylayout = \$(this).data(\"keylayout\");
\t\t\t\t\$store_active =  ";
        // line 140
        echo (isset($context["active_store"]) ? $context["active_store"] : null);
        echo ";
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/soconfig/applyBaseLayout&user_token=";
        // line 142
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&keylayout='+\$keylayout+'&store_id='+ \$store_active ,
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t});

\t\t\$('#tab-general__layouttype').on('click', '.type', function () {
\t\t\tif (!\$(this).hasClass(\"active\")){
\t\t\t    \$('#tab-general__layouttype .type').removeClass(\"active\");
\t\t\t    \$(this).addClass(\"active\");
\t\t\t\t\$keylayout = \$(this).data(\"keylayout\");
\t\t\t\t\$keyheader = \$(this).data(\"keyheader\");
\t\t\t\t\$keyfooter = \$(this).data(\"keyfooter\");
\t\t\t\t\$store_active =  ";
        // line 161
        echo (isset($context["active_store"]) ? $context["active_store"] : null);
        echo ";
\t\t\t\t
\t\t\t\t\$(\"#tab-general__headertype .group-typeheader\").each(function() {
\t\t\t\t    \$(this).find(\".type\").removeClass(\"active\");
\t\t\t\t\t\$(this).find(\"input:radio\").prop(\"checked\", false);
\t\t\t\t    if( \$keyheader ==  \$(this).find(\".type\").data(\"typeheader\")) {
\t\t\t\t\t\t\$(this).find(\".type\").addClass(\"active\");
\t\t\t\t\t\t\$(this).find(\".type\").prev().prop(\"checked\", true);
\t\t\t\t    }
\t\t\t\t});
\t\t\t\t\$(\"#tab-general__footertype .group-typeheader\").each(function() {
\t\t\t\t    \$(this).find(\".type\").removeClass(\"active\");
\t\t\t\t\t\$(this).find(\"input:radio\").prop(\"checked\", false);
\t\t\t\t\t
\t\t\t\t    if(\$keyfooter ==  \$(this).find(\".type\").data(\"typefooter\")) {
\t\t\t\t\t\t\$(this).find(\".type\").addClass(\"active\");
\t\t\t\t\t\t\$(this).find(\".type\").prev().prop(\"checked\", true);
\t\t\t\t    }
\t\t\t\t});
\t\t\t\t
\t\t\t\tvar \$currentcolor = \$(\"#select_color option\").filter(\":selected\").val();
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/soconfig/ColorScheme&user_token=";
        // line 183
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&keylayout='+\$keylayout+'&store_id='+ \$store_active ,
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\$.map(json, function(item) {
\t\t\t\t\t\t\tvar selectList = \"<select name='numbers'>\";
\t\t\t\t\t\t\t\$.each(json, function (index, value) {
\t\t\t\t\t\t\t\t(\$currentcolor == value['name']) ? \$current = 'selected' : \$current=''; 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tselectList += \"<option \"+\$current+\">\" + value['name'] + \"</option>\";
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tselectList += \"</select>\";
\t\t\t\t\t\t\t\$select_id = \$('#select_color select');
\t\t\t\t\t\t\t\$select_id.html(selectList);
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t}
\t\t});
\t\t
\t\t\$('#tab-general__bannereffect').on('click', '.type', function () {
\t\t   \$('#tab-general__bannereffect .type').removeClass(\"active\");
\t\t   \$(this).addClass(\"active\");
\t\t});
\t\t
\t\t
\t\t/*Button Radio On/Off*/
\t\tBtnToggle(\".field-phone_status\");
\t\tBtnToggle(\".field-welcome_message_status\");
\t\tBtnToggle(\".field-social_header_status\");
\t\tBtnToggle(\".field-link_header_status\");
\t\tBtnToggle(\".field-imgpayment_status\");
\t\tBtnToggle(\".field-product_page_button\");
   \t\tBtnToggle(\".field-product_enableshipping\");
    \tBtnToggle(\".field-related_status\");
    \tBtnToggle(\".field-social_custom_status\");
\t\tBtnToggle(\".field-cssminify\");
\t\tBtnToggle(\".field-jsminify\");

\t\t/* datetimepicker*/
\t\t\$('.date').datetimepicker({
\t\t\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[0],
\t\t\tpickTime: false
\t\t});

\t\t/* create a dialog with “yes” and “no” options*/
\t\t\$(\".create-feature\").click(function(e){
\t       var action = confirm(\"Are you sure you want to add field (video, tab_title, html_product_tab) for table product_description\");

\t       /*cancel clicked : stop button default action */
\t       if (action === false) {return false; }

\t       /*action continues, saves in database, no need for more code*/


\t   });
});


function buttonApply() {document.settingsform.buttonForm.value='apply'; \$('#form-optimus').submit();}
function buttonApplyColor() {document.settingsform.buttonForm.value='color';\$('#form-optimus').submit();}

function BtnToggle(class_name) {
\tvar \$checkedValue = \$(class_name).filter(':checked').val();
\tif (\$checkedValue == 1) \$('#tab-'+\$(class_name).attr('class')).show();
\telse \$('#tab-'+\$(class_name).attr('class')).hide();
\t
\t\$(class_name).change(function(){
\t\tval = \$(this).val();
\t\tif(val ==1 ) {\$('#tab-'+\$(this).attr('class')).show(); }
\t\telse{\$('#tab-'+\$(this).attr('class')).hide();} 
\t});
}


function ChangeColor(class_name) {
\t\$(class_name).ColorPicker({
\t\t
\t\tcolor: \$(class_name).val(),
\t\tonShow: function (colpkr) {
\t\t\t\$(colpkr).fadeIn(500);
\t\t\treturn false;
\t\t},
\t\tonHide: function (colpkr) {
\t\t\t\$(colpkr).fadeOut(500);
\t\t\treturn false;
\t\t},
\t\tonChange: function (hsb, hex, rgb) {
\t\t\t\$(class_name).css('backgroundColor', '#' + hex);
\t\t\t\$(class_name).val('#' + hex);
\t\t}
\t});
}

//--></script>

";
        // line 283
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/soconfig/soconfig.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 283,  338 => 183,  313 => 161,  291 => 142,  286 => 140,  216 => 72,  201 => 71,  197 => 69,  195 => 68,  192 => 67,  189 => 66,  187 => 65,  168 => 64,  162 => 61,  149 => 53,  143 => 49,  137 => 47,  131 => 45,  129 => 44,  116 => 38,  104 => 36,  101 => 35,  99 => 34,  93 => 33,  88 => 31,  80 => 30,  74 => 28,  72 => 27,  66 => 26,  56 => 18,  49 => 15,  45 => 14,  41 => 12,  33 => 9,  31 => 8,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }} */
/* */
/* <div id="content">*/
/*     <div class="page-header" style="border:none">    </div>*/
/* */
/*     <div id="theme-options" class="container-fluid">*/
/* */
/*          {% if error.warning %}*/
/*         <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error.warning }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %} */
/* 		*/
/*         {% if success  and  success %} */
/*         <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }} */
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %} */
/* */
/*         <div class="panel ">*/
/* 			<div class="content">*/
/* 				<div class="panel-heading">*/
/* 					*/
/* 					<div class="col-sm-4">*/
/* 						<div class="btn-group">*/
/* 							{% for store  in stores %}  */
/* 								{% if store.store_id == active_store %}*/
/* 									<a class="btn  dropdown-toggle" data-toggle="dropdown" href="#">{{ store.name }} <span class="fa fa-angle-down"></span></a>*/
/* 								{% endif %}*/
/* 							{% endfor %} */
/* 							<span class="label label-primary">{{theme_version}}</span>*/
/* 							<ul class="dropdown-menu store_dropdown">*/
/* 								{% for store  in stores %}  */
/* 									{% set store_active = store.store_id == active_store  ? 'active' :  '' %}*/
/* 									{% if store.status  %}*/
/* 									<li class="{{ store_active }}" ><a href="{{base_href}}&store_id={{ store.store_id }}" >{{ store.name }} </a></li>*/
/* 									{% endif %}*/
/* 								{% endfor %} */
/* 							</ul>*/
/* 					   </div>*/
/* */
/* 					</div>*/
/* 					<div class="col-sm-7 text-right">*/
/* 						{% if status_product_option %}*/
/* 							<a href="{{href_product}}"><button class="btn btn-primary" type="button"><i class="fa fa-file-text"></i> Product Feature</button></a>*/
/* 						{% else %}*/
/* 							<a href="{{add_db_product}}"><button class="btn btn btn-success create-feature" type="button"><i class="fa fa-wrench"></i> Create Product Feature</button></a>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					<div class="col-sm-1">*/
/* 						<div class="pull-right">*/
/* 							<a onclick="buttonApply();" data-toggle="tooltip" title="Apply Changes" class="btn btn-success"><i class="fa fa-save"></i></a>*/
/* 							<a href="{{ cancel }} " data-toggle="tooltip" title="{{ button_cancel }} " class="btn btn-default"><i class="fa fa-close"></i></a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/*             </div>*/
/*             */
/* 			<div class="content">*/
/* 				<div class="panel-body">*/
/* 					<form name="settingsform" action="{{ action }} " method="post" enctype="multipart/form-data" id="form-optimus" class="form-horizontal">*/
/* 						<div class="form-horizontal">*/
/* 							<div class="tab-content tab-content-main">*/
/* 								{% for store in stores %}  */
/* 								{% set store_active = (store.store_id == 0 ? 'active' :  '') %}*/
/* 									{% if store.store_id == active_store %}*/
/* 									<div class="clearfix tab-pane-demo" id="tab-store" data-sticky_parent>*/
/* 										{% include 'extension/soconfig/options_stores.twig' with {store: store} %}*/
/* 									</div>*/
/* 									{% endif %}*/
/* */
/* 								{% endfor %} */
/* 							</div>*/
/* */
/* 						</div>*/
/* 						<input name="buttonForm" type="hidden"  value="" />*/
/* 						<input name="buttonColor" type="hidden"  value="" />*/
/* 					</form>*/
/* */
/* */
/* 				</div>*/
/* 			</div>*/
/* 			<div class="content-row clearfix">*/
/* 				<div class="col-md-5">*/
/* 					<div class="copyright-info">*/
/* 						Designed &amp; Developed with <i class="fa fa-heart"></i> by <a href="http://www.opencartworks.com" target="_blank">Opencartworks</a>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="col-md-7">*/
/* 					<div class="pagebuilder-links">*/
/* 						<ul class="list-inline text-right">*/
/* 							<li>*/
/* 								<a target="_blank" href="http://www.opencartworks.com/forums">Forum</a>*/
/* 							</li>*/
/* */
/* 							<li>*/
/* 								<a target="_blank" href="http://www.smartaddons.com/documentation/category/opencart/">Documentation</a>*/
/* 							</li>*/
/* */
/* 							<li>*/
/* 								<a target="_blank" href="http://www.opencartworks.com/contact-us">Support</a>*/
/* 							</li>*/
/* */
/* 							<li>*/
/* 								<a target="_blank" href="https://www.facebook.com/opencartworks">Community</a>*/
/* 							</li>*/
/* 						*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* */
/* */
/* <script type="text/javascript"><!--*/
/* $(document).ready(function(){*/
/* 		/*** Change ColorPicker ***//* */
/* 		ChangeColor("#theme_color");*/
/* 		ChangeColor("#theme_bgcolor");*/
/* 		*/
/* 		$('#tab-general__headertype').on('click', '.type', function () {*/
/* 		   $('#tab-general__headertype .type').removeClass("active");*/
/* 		   $(this).addClass("active");*/
/* 		});*/
/* 		$('#tab-general__footertype').on('click', '.type', function () {*/
/* 		   $('#tab-general__footertype .type').removeClass("active");*/
/* 		   $(this).addClass("active");*/
/* 		});*/
/* */
/* 		$('#tab-general__layouttype').on('click', '.applyLayout', function () {*/
/* 			 if (confirm('Are you sure you want to apply default setting')) {*/
/* 				$keylayout = $(this).data("keylayout");*/
/* 				$store_active =  {{active_store}};*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=extension/module/soconfig/applyBaseLayout&user_token={{ user_token }}&keylayout='+$keylayout+'&store_id='+ $store_active ,*/
/* 					dataType: 'json',*/
/* 					success: function(json) {*/
/* 						location.reload();*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 		});*/
/* */
/* 		$('#tab-general__layouttype').on('click', '.type', function () {*/
/* 			if (!$(this).hasClass("active")){*/
/* 			    $('#tab-general__layouttype .type').removeClass("active");*/
/* 			    $(this).addClass("active");*/
/* 				$keylayout = $(this).data("keylayout");*/
/* 				$keyheader = $(this).data("keyheader");*/
/* 				$keyfooter = $(this).data("keyfooter");*/
/* 				$store_active =  {{active_store}};*/
/* 				*/
/* 				$("#tab-general__headertype .group-typeheader").each(function() {*/
/* 				    $(this).find(".type").removeClass("active");*/
/* 					$(this).find("input:radio").prop("checked", false);*/
/* 				    if( $keyheader ==  $(this).find(".type").data("typeheader")) {*/
/* 						$(this).find(".type").addClass("active");*/
/* 						$(this).find(".type").prev().prop("checked", true);*/
/* 				    }*/
/* 				});*/
/* 				$("#tab-general__footertype .group-typeheader").each(function() {*/
/* 				    $(this).find(".type").removeClass("active");*/
/* 					$(this).find("input:radio").prop("checked", false);*/
/* 					*/
/* 				    if($keyfooter ==  $(this).find(".type").data("typefooter")) {*/
/* 						$(this).find(".type").addClass("active");*/
/* 						$(this).find(".type").prev().prop("checked", true);*/
/* 				    }*/
/* 				});*/
/* 				*/
/* 				var $currentcolor = $("#select_color option").filter(":selected").val();*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=extension/module/soconfig/ColorScheme&user_token={{ user_token }}&keylayout='+$keylayout+'&store_id='+ $store_active ,*/
/* 					dataType: 'json',*/
/* 					success: function(json) {*/
/* 						$.map(json, function(item) {*/
/* 							var selectList = "<select name='numbers'>";*/
/* 							$.each(json, function (index, value) {*/
/* 								($currentcolor == value['name']) ? $current = 'selected' : $current=''; */
/* 								*/
/* 								selectList += "<option "+$current+">" + value['name'] + "</option>";*/
/* 							});*/
/* 							selectList += "</select>";*/
/* 							$select_id = $('#select_color select');*/
/* 							$select_id.html(selectList);*/
/* 						});*/
/* 						*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				});*/
/* 			*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		$('#tab-general__bannereffect').on('click', '.type', function () {*/
/* 		   $('#tab-general__bannereffect .type').removeClass("active");*/
/* 		   $(this).addClass("active");*/
/* 		});*/
/* 		*/
/* 		*/
/* 		/*Button Radio On/Off*//* */
/* 		BtnToggle(".field-phone_status");*/
/* 		BtnToggle(".field-welcome_message_status");*/
/* 		BtnToggle(".field-social_header_status");*/
/* 		BtnToggle(".field-link_header_status");*/
/* 		BtnToggle(".field-imgpayment_status");*/
/* 		BtnToggle(".field-product_page_button");*/
/*    		BtnToggle(".field-product_enableshipping");*/
/*     	BtnToggle(".field-related_status");*/
/*     	BtnToggle(".field-social_custom_status");*/
/* 		BtnToggle(".field-cssminify");*/
/* 		BtnToggle(".field-jsminify");*/
/* */
/* 		/* datetimepicker*//* */
/* 		$('.date').datetimepicker({*/
/* 			language: document.cookie.match(new RegExp('language=([^;]+)'))[0],*/
/* 			pickTime: false*/
/* 		});*/
/* */
/* 		/* create a dialog with “yes” and “no” options*//* */
/* 		$(".create-feature").click(function(e){*/
/* 	       var action = confirm("Are you sure you want to add field (video, tab_title, html_product_tab) for table product_description");*/
/* */
/* 	       /*cancel clicked : stop button default action *//* */
/* 	       if (action === false) {return false; }*/
/* */
/* 	       /*action continues, saves in database, no need for more code*//* */
/* */
/* */
/* 	   });*/
/* });*/
/* */
/* */
/* function buttonApply() {document.settingsform.buttonForm.value='apply'; $('#form-optimus').submit();}*/
/* function buttonApplyColor() {document.settingsform.buttonForm.value='color';$('#form-optimus').submit();}*/
/* */
/* function BtnToggle(class_name) {*/
/* 	var $checkedValue = $(class_name).filter(':checked').val();*/
/* 	if ($checkedValue == 1) $('#tab-'+$(class_name).attr('class')).show();*/
/* 	else $('#tab-'+$(class_name).attr('class')).hide();*/
/* 	*/
/* 	$(class_name).change(function(){*/
/* 		val = $(this).val();*/
/* 		if(val ==1 ) {$('#tab-'+$(this).attr('class')).show(); }*/
/* 		else{$('#tab-'+$(this).attr('class')).hide();} */
/* 	});*/
/* }*/
/* */
/* */
/* function ChangeColor(class_name) {*/
/* 	$(class_name).ColorPicker({*/
/* 		*/
/* 		color: $(class_name).val(),*/
/* 		onShow: function (colpkr) {*/
/* 			$(colpkr).fadeIn(500);*/
/* 			return false;*/
/* 		},*/
/* 		onHide: function (colpkr) {*/
/* 			$(colpkr).fadeOut(500);*/
/* 			return false;*/
/* 		},*/
/* 		onChange: function (hsb, hex, rgb) {*/
/* 			$(class_name).css('backgroundColor', '#' + hex);*/
/* 			$(class_name).val('#' + hex);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* //--></script>*/
/* */
/* {{ footer }} */
