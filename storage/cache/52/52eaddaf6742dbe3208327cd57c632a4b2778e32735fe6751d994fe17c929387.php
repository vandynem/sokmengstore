<?php

/* so-buyshop/template/extension/module/so_listing_tabs/default.twig */
class __TwigTemplate_ab601d6d7e107431689a1426b649efa72633279ea1e47855a97bbf18d35e73bf extends Twig_Template
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
        echo "<div class=\"module ";
        echo (isset($context["direction_class"]) ? $context["direction_class"] : null);
        echo " ";
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo " so-tab-default\">
\t";
        // line 2
        if (((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null) || ((isset($context["pre_text"]) ? $context["pre_text"] : null) != ""))) {
            // line 3
            echo "\t<h3 class=\"modtitle\">
\t\t";
            // line 4
            if ( !twig_test_empty(trim((isset($context["pre_text"]) ? $context["pre_text"] : null)))) {
                // line 5
                echo "\t\t\t<!-- <div class=\"form-group\"> -->
\t\t\t\t";
                // line 6
                echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
                echo "
\t\t\t<!-- </div> -->
\t\t";
            }
            // line 9
            echo "\t\t<a class=\"viewall\" href=\"#\"> ";
            echo (isset($context["text_view_all"]) ? $context["text_view_all"] : null);
            echo " <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a>
\t\t";
            // line 10
            if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
                echo (isset($context["head_name"]) ? $context["head_name"] : null);
            }
            // line 11
            echo "\t</h3>
\t";
        }
        // line 13
        echo "\t<div class=\"modcontent\">
\t\t<!--[if lt IE 9]>
\t\t<div id=\"";
        // line 15
        echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
        echo "\" class=\"so-listing-tabs msie lt-ie9 first-load module\"><![endif]-->
\t\t<!--[if IE 9]>
\t\t<div id=\"";
        // line 17
        echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
        echo "\" class=\"so-listing-tabs msie first-load module\"><![endif]-->
\t\t<!--[if gt IE 9]><!-->
\t\t<div id=\"";
        // line 19
        echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
        echo "\" class=\"so-listing-tabs first-load module\"><!--<![endif]-->
\t\t\t";
        // line 20
        if (twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : null))) {
            // line 21
            echo "\t\t\t\t<div class=\"ltabs-wrap \">
\t\t\t\t\t<div class=\"ltabs-tabs-container\" data-delay=\"";
            // line 22
            echo (isset($context["delay"]) ? $context["delay"] : null);
            echo "\"
\t\t\t\t\t \tdata-duration=\"";
            // line 23
            echo (isset($context["duration"]) ? $context["duration"] : null);
            echo "\"
\t\t\t\t\t \tdata-effect=\"";
            // line 24
            echo (isset($context["effect"]) ? $context["effect"] : null);
            echo "\"
\t\t\t\t\t \tdata-ajaxurl=\"";
            // line 25
            echo (isset($context["ajaxurl"]) ? $context["ajaxurl"] : null);
            echo "\" data-type_source=\"";
            echo (isset($context["type_source"]) ? $context["type_source"] : null);
            echo "\"
\t\t\t\t\t \tdata-type_show=\"";
            // line 26
            echo (isset($context["type_show"]) ? $context["type_show"] : null);
            echo "\" >
\t\t\t\t\t\t 
\t\t\t\t\t\t";
            // line 28
            echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_listing_tabs/default/default_tabs.twig"));
            echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wap-listing-tabs products-list grid\">
\t\t\t\t\t\t";
            // line 32
            if (((isset($context["display_banner_image"]) ? $context["display_banner_image"] : null) == 1)) {
                // line 33
                echo "\t\t\t\t\t\t\t<div class=\"item-cat-image\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 34
                echo (isset($context["banner_image_url"]) ? $context["banner_image_url"] : null);
                echo "\" title=\"\" target=\"";
                echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                echo "\" >
\t\t\t\t\t\t\t\t\t<img class=\"categories-loadimage\" title=\"\" alt=\"\" src=\"";
                // line 35
                echo (isset($context["banner_image"]) ? $context["banner_image"] : null);
                echo "\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t\t<div class=\"ltabs-items-container\">
\t\t\t\t\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["items"]) {
                // line 41
                echo "\t\t\t\t\t\t\t\t";
                $context["child_items"] = (($this->getAttribute($context["items"], "child", array(), "any", true, true)) ? ($this->getAttribute($context["items"], "child", array())) : (""));
                // line 42
                echo "\t\t\t\t\t\t\t\t";
                $context["cls"] = ((($this->getAttribute($context["items"], "sel", array(), "any", true, true) && ($this->getAttribute($context["items"], "sel", array()) == "sel"))) ? (" ltabs-items-selected ltabs-items-loaded") : (""));
                // line 43
                echo "\t\t\t\t\t\t\t\t";
                $context["cls"] = ((isset($context["cls"]) ? $context["cls"] : null) . ((($this->getAttribute($context["items"], "category_id", array()) == "*")) ? (" items-category-all") : ((" items-category-" . $this->getAttribute($context["items"], "category_id", array())))));
                // line 44
                echo "\t\t\t\t\t\t\t\t";
                $context["tab_id"] = (($this->getAttribute($this->getAttribute((isset($context["list"]) ? $context["list"] : null), $context["key"], array(), "array", false, true), "sel", array(), "array", true, true)) ? ($this->getAttribute($context["items"], "category_id", array())) : (""));
                // line 45
                echo "\t\t\t\t\t\t\t\t";
                $context["tab_id"] = ((((isset($context["tab_id"]) ? $context["tab_id"] : null) == "*")) ? ("all") : ((isset($context["tab_id"]) ? $context["tab_id"] : null)));
                // line 46
                echo "\t\t\t\t\t\t\t\t<div class=\"products-list ltabs-items ";
                echo (isset($context["cls"]) ? $context["cls"] : null);
                echo "\" data-total=\"";
                echo $this->getAttribute($context["items"], "count", array());
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 47
                if ((isset($context["child_items"]) ? $context["child_items"] : null)) {
                    // line 48
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_listing_tabs/default/default_items.twig"));
                    echo "
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 50
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ltabs-loading\"></div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t\t\t\t\t\t";
                $context["classloaded"] = (((((isset($context["source_limit"]) ? $context["source_limit"] : null) >= $this->getAttribute($context["items"], "count", array())) || ((isset($context["source_limit"]) ? $context["source_limit"] : null) == 0))) ? ("loaded") : (""));
                // line 53
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 54
                if (((isset($context["type_show"]) ? $context["type_show"] : null) == "loadmore")) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ltabs-loadmore\"
\t\t\t\t\t\t\t\t\t\t\t data-active-content=\".items-category-";
                    // line 56
                    echo ((($this->getAttribute($context["items"], "category_id", array()) == "*")) ? ("all") : ($this->getAttribute($context["items"], "category_id", array())));
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-categoryid\t=\"";
                    // line 57
                    echo $this->getAttribute($context["items"], "category_id", array());
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_start\t\t=\"";
                    // line 58
                    echo (isset($context["source_limit"]) ? $context["source_limit"] : null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_total\t\t=\"";
                    // line 59
                    echo $this->getAttribute($context["items"], "count", array());
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_allready\t=\"All ready\"
\t\t\t\t\t\t\t\t\t\t\t data-ajaxurl\t\t=\"";
                    // line 61
                    echo (isset($context["ajaxurl"]) ? $context["ajaxurl"] : null);
                    echo "\" 
\t\t\t\t\t\t\t\t\t\t\t data-rl_load\t\t=\"";
                    // line 62
                    echo (isset($context["source_limit"]) ? $context["source_limit"] : null);
                    echo "\" 
\t\t\t\t\t\t\t\t\t\t\t data-moduleid\t\t='";
                    // line 63
                    echo (isset($context["moduleid"]) ? $context["moduleid"] : null);
                    echo "'
\t\t\t\t\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ltabs-loadmore-btn ";
                    // line 65
                    echo (isset($context["classloaded"]) ? $context["classloaded"] : null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t data-label=\"";
                    // line 66
                    echo (((isset($context["classloaded"]) ? $context["classloaded"] : null)) ? ($this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "all_ready"), "method")) : ($this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "load_more"), "method")));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ltabs-image-loading\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 72
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 77
            echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_listing_tabs/default/default_js.twig"));
            echo "
\t\t\t";
        } else {
            // line 79
            echo "\t\t\t\t";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_noproduct"), "method");
            echo "
\t\t\t";
        }
        // line 81
        echo "\t\t</div>
\t</div> <!-- /.modcontent-->
\t
\t";
        // line 84
        if ( !twig_test_empty(trim((isset($context["post_text"]) ? $context["post_text"] : null)))) {
            // line 85
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 86
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 89
        echo "</div>\t";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_listing_tabs/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 89,  275 => 86,  272 => 85,  270 => 84,  265 => 81,  259 => 79,  254 => 77,  249 => 74,  234 => 72,  225 => 66,  221 => 65,  216 => 63,  212 => 62,  208 => 61,  203 => 59,  199 => 58,  195 => 57,  191 => 56,  188 => 55,  186 => 54,  183 => 53,  180 => 52,  176 => 50,  170 => 48,  168 => 47,  161 => 46,  158 => 45,  155 => 44,  152 => 43,  149 => 42,  146 => 41,  129 => 40,  126 => 39,  119 => 35,  113 => 34,  110 => 33,  108 => 32,  101 => 28,  96 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  75 => 21,  73 => 20,  69 => 19,  64 => 17,  59 => 15,  55 => 13,  51 => 11,  47 => 10,  42 => 9,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="module {{ direction_class }} {{ class_suffix }} so-tab-default">*/
/* 	{% if disp_title_module or pre_text != '' %}*/
/* 	<h3 class="modtitle">*/
/* 		{% if pre_text|trim is not empty %}*/
/* 			<!-- <div class="form-group"> -->*/
/* 				{{ pre_text }}*/
/* 			<!-- </div> -->*/
/* 		{% endif %}*/
/* 		<a class="viewall" href="#"> {{ text_view_all }} <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>*/
/* 		{% if disp_title_module %}{{ head_name }}{% endif %}*/
/* 	</h3>*/
/* 	{% endif %}*/
/* 	<div class="modcontent">*/
/* 		<!--[if lt IE 9]>*/
/* 		<div id="{{ tag_id }}" class="so-listing-tabs msie lt-ie9 first-load module"><![endif]-->*/
/* 		<!--[if IE 9]>*/
/* 		<div id="{{ tag_id }}" class="so-listing-tabs msie first-load module"><![endif]-->*/
/* 		<!--[if gt IE 9]><!-->*/
/* 		<div id="{{ tag_id }}" class="so-listing-tabs first-load module"><!--<![endif]-->*/
/* 			{% if list|length %}*/
/* 				<div class="ltabs-wrap ">*/
/* 					<div class="ltabs-tabs-container" data-delay="{{ delay }}"*/
/* 					 	data-duration="{{ duration }}"*/
/* 					 	data-effect="{{ effect }}"*/
/* 					 	data-ajaxurl="{{ ajaxurl }}" data-type_source="{{ type_source }}"*/
/* 					 	data-type_show="{{ type_show }}" >*/
/* 						 */
/* 						{{ include (theme_config~"/template/extension/module/so_listing_tabs/default/default_tabs.twig") }}*/
/* 						*/
/* 					</div>*/
/* 					<div class="wap-listing-tabs products-list grid">*/
/* 						{% if display_banner_image == 1 %}*/
/* 							<div class="item-cat-image">*/
/* 								<a href="{{ banner_image_url }}" title="" target="{{ item_link_target }}" >*/
/* 									<img class="categories-loadimage" title="" alt="" src="{{ banner_image }}"/>*/
/* 								</a>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						<div class="ltabs-items-container">*/
/* 							{% for key, items in list %}*/
/* 								{% set child_items = items.child is defined ? items.child : '' %}*/
/* 								{% set cls = items.sel is defined and items.sel == "sel" ? ' ltabs-items-selected ltabs-items-loaded' : '' %}*/
/* 								{% set cls = cls~(items.category_id == "*" ? ' items-category-all' : ' items-category-' ~ items.category_id) %}*/
/* 								{% set tab_id = list[key]['sel'] is defined ? items.category_id : '' %}*/
/* 								{% set tab_id = tab_id == '*' ? 'all' : tab_id %}*/
/* 								<div class="products-list ltabs-items {{ cls }}" data-total="{{ items.count }}">*/
/* 									{% if child_items %}*/
/* 										{{ include (theme_config~"/template/extension/module/so_listing_tabs/default/default_items.twig") }}*/
/* 									{% else %}*/
/* 										<div class="ltabs-loading"></div>*/
/* 									{% endif %}*/
/* 									{% set classloaded = source_limit >= items.count or source_limit == 0 ? 'loaded' : '' %}*/
/* 									*/
/* 									{% if type_show == 'loadmore' %}*/
/* 										<div class="ltabs-loadmore"*/
/* 											 data-active-content=".items-category-{{ items.category_id == "*" ? 'all' : items.category_id }}"*/
/* 											 data-categoryid	="{{ items.category_id }}"*/
/* 											 data-rl_start		="{{ source_limit }}"*/
/* 											 data-rl_total		="{{ items.count }}"*/
/* 											 data-rl_allready	="All ready"*/
/* 											 data-ajaxurl		="{{ ajaxurl }}" */
/* 											 data-rl_load		="{{ source_limit }}" */
/* 											 data-moduleid		='{{ moduleid }}'*/
/* 											 >*/
/* 											<div class="ltabs-loadmore-btn {{ classloaded }}"*/
/* 												 data-label="{{ classloaded ? objlang.get('all_ready') : objlang.get('load_more') }}">*/
/* 												<span class="ltabs-image-loading"></span>*/
/* 												<i class="fa fa-plus"></i>*/
/* 											</div>*/
/* 										</div>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{{ include (theme_config~"/template/extension/module/so_listing_tabs/default/default_js.twig") }}*/
/* 			{% else %}*/
/* 				{{ objlang.get('text_noproduct') }}*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div> <!-- /.modcontent-->*/
/* 	*/
/* 	{% if post_text|trim is not empty %}*/
/* 		<div class="form-group">*/
/* 			{{ post_text }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* </div>	*/
