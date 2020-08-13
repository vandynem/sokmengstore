<?php

/* so-buyshop/template/extension/module/so_listing_tabs/default/default_tabs.twig */
class __TwigTemplate_ae86d6c021d12ff10f36d7f92aecdc0e748b6aabdfbf19d5413ec6137610f823 extends Twig_Template
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
        echo "<div class=\"ltabs-tabs-wrap\">
\t<span class='ltabs-tab-selected'></span>
\t<span class=\"ltabs-tab-arrow\">▼</span>
\t<ul class=\"ltabs-tabs cf list-sub-cat font-title\">

\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 7
            echo "\t\t
\t\t\t";
            // line 8
            if (((isset($context["type_source"]) ? $context["type_source"] : null) == "0")) {
                // line 9
                echo "\t\t\t\t<li class=\"ltabs-tab ";
                echo (($this->getAttribute($context["tab"], "sel", array(), "any", true, true)) ? ("  tab-sel tab-loaded") : (""));
                echo " ";
                echo ((($this->getAttribute($context["tab"], "category_id", array()) == "*")) ? (" tab-all") : (""));
                echo "\"
\t\t\t\t\tdata-category-id=\"";
                // line 10
                echo $this->getAttribute($context["tab"], "category_id", array());
                echo "\"
\t\t\t\t\tdata-active-content-l=\".items-category-";
                // line 11
                echo ((($this->getAttribute($context["tab"], "category_id", array()) == "*")) ? ("all") : ($this->getAttribute($context["tab"], "category_id", array())));
                echo "\"  
\t\t\t\t\t>
\t\t\t\t";
                // line 13
                if (((isset($context["tab_icon_display"]) ? $context["tab_icon_display"] : null) == "1")) {
                    // line 14
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($context["tab"], "category_id", array()) != "*")) {
                        // line 15
                        echo "\t\t\t\t\t\t<div class=\"ltabs-tab-img\">
\t\t\t\t\t\t\t<img src=\"";
                        // line 16
                        echo $this->getAttribute($context["tab"], "icon_image", array());
                        echo "\"
\t\t\t\t\t\t\t\t title=\"";
                        // line 17
                        echo $this->getAttribute($context["tab"], "name", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["tab"], "name", array());
                        echo "\"
\t\t\t\t\t\t\t\t style=\"width: ";
                        // line 18
                        echo (isset($context["imgcfgcat_width"]) ? $context["imgcfgcat_width"] : null);
                        echo "px; height:";
                        echo (isset($context["imgcfgcat_height"]) ? $context["imgcfgcat_height"] : null);
                        echo "px;background:#fff\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    } else {
                        // line 21
                        echo "\t\t\t\t\t\t<div class=\"ltabs-tab-img\">
\t\t\t\t\t\t\t<img src=\"catalog/view/javascript/so_listing_tabs/images/icon-catall.png\"
\t\t\t\t\t\t\t\t title=\"";
                        // line 23
                        echo $this->getAttribute($context["tab"], "name", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["tab"], "name", array());
                        echo "\"
\t\t\t\t\t\t\t\t style=\"width: 30px; height:70px; background:#fff\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 27
                    echo "\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t\t<span class=\"ltabs-tab-label\">
\t\t\t\t\t\t";
                // line 29
                if (((twig_length_filter($this->env, $this->getAttribute($context["tab"], "name", array())) > (isset($context["tab_max_characters"]) ? $context["tab_max_characters"] : null)) && ((isset($context["tab_max_characters"]) ? $context["tab_max_characters"] : null) != "0"))) {
                    // line 30
                    echo "\t\t\t\t\t\t\t";
                    echo (twig_slice($this->env, strip_tags($this->getAttribute($context["tab"], "name", array())), 0, (isset($context["tab_max_characters"]) ? $context["tab_max_characters"] : null)) . "..");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["tab"], "name", array());
                    echo "
\t\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t</span>
\t\t\t\t</li>
\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t<li class=\"ltabs-tab ";
                echo (($this->getAttribute($context["tab"], "sel", array(), "any", true, true)) ? ("  tab-sel tab-loaded") : (""));
                echo " ";
                echo ((($this->getAttribute($context["tab"], "category_id", array()) == "*")) ? (" tab-all") : (""));
                echo "\"
\t\t\t\t\tdata-category-id=\"";
                // line 38
                echo $this->getAttribute($context["tab"], "category_id", array());
                echo "\"
\t\t\t\t\tdata-active-content-l=\".items-category-";
                // line 39
                echo $this->getAttribute($context["tab"], "category_id", array());
                echo "\">
\t\t\t\t\t<span class=\"ltabs-tab-label\">
\t\t\t\t\t\t";
                // line 41
                if (((twig_length_filter($this->env, $this->getAttribute($context["tab"], "title", array())) > (isset($context["tab_max_characters"]) ? $context["tab_max_characters"] : null)) && ((isset($context["tab_max_characters"]) ? $context["tab_max_characters"] : null) != "0"))) {
                    // line 42
                    echo "\t\t\t\t\t\t\t";
                    echo (twig_slice($this->env, strip_tags($this->getAttribute($context["tab"], "title", array())), 0, (isset($context["tab_max_characters"]) ? $context["tab_max_characters"] : null)) . "..");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["tab"], "title", array());
                    echo "
\t\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t</span>
\t\t\t\t</li>
\t\t\t";
            }
            // line 49
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_listing_tabs/default/default_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 50,  150 => 49,  145 => 46,  139 => 44,  133 => 42,  131 => 41,  126 => 39,  122 => 38,  115 => 37,  110 => 34,  104 => 32,  98 => 30,  96 => 29,  93 => 28,  90 => 27,  81 => 23,  77 => 21,  69 => 18,  63 => 17,  59 => 16,  56 => 15,  53 => 14,  51 => 13,  46 => 11,  42 => 10,  35 => 9,  33 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="ltabs-tabs-wrap">*/
/* 	<span class='ltabs-tab-selected'></span>*/
/* 	<span class="ltabs-tab-arrow">▼</span>*/
/* 	<ul class="ltabs-tabs cf list-sub-cat font-title">*/
/* */
/* 		{% for tab in list %}*/
/* 		*/
/* 			{% if type_source == "0" %}*/
/* 				<li class="ltabs-tab {{ tab.sel is defined ? '  tab-sel tab-loaded' : '' }} {{ tab.category_id == '*' ? ' tab-all' : '' }}"*/
/* 					data-category-id="{{ tab.category_id }}"*/
/* 					data-active-content-l=".items-category-{{ tab.category_id == "*" ? 'all' : tab.category_id }}"  */
/* 					>*/
/* 				{% if tab_icon_display == '1' %}*/
/* 					{% if tab.category_id != "*" %}*/
/* 						<div class="ltabs-tab-img">*/
/* 							<img src="{{ tab.icon_image }}"*/
/* 								 title="{{ tab.name }}" alt="{{ tab.name }}"*/
/* 								 style="width: {{ imgcfgcat_width }}px; height:{{ imgcfgcat_height }}px;background:#fff"/>*/
/* 						</div>*/
/* 					{% else %}*/
/* 						<div class="ltabs-tab-img">*/
/* 							<img src="catalog/view/javascript/so_listing_tabs/images/icon-catall.png"*/
/* 								 title="{{ tab.name }}" alt="{{ tab.name }}"*/
/* 								 style="width: 30px; height:70px; background:#fff"/>*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				{% endif %}*/
/* 					<span class="ltabs-tab-label">*/
/* 						{% if tab.name|length > tab_max_characters and tab_max_characters != '0' %}*/
/* 							{{ tab.name|striptags|slice(0, tab_max_characters) ~ '..' }}*/
/* 						{% else %}*/
/* 							{{ tab.name }}*/
/* 						{% endif %}*/
/* 					</span>*/
/* 				</li>*/
/* 			{% else %}*/
/* 				<li class="ltabs-tab {{ tab.sel is defined ? '  tab-sel tab-loaded' : '' }} {{ tab.category_id == '*' ? ' tab-all' : '' }}"*/
/* 					data-category-id="{{ tab.category_id }}"*/
/* 					data-active-content-l=".items-category-{{ tab.category_id }}">*/
/* 					<span class="ltabs-tab-label">*/
/* 						{% if tab.title|length > tab_max_characters and tab_max_characters != '0' %}*/
/* 							{{ tab.title|striptags|slice(0, tab_max_characters) ~ '..' }}*/
/* 						{% else %}*/
/* 							{{ tab.title }}*/
/* 						{% endif %}*/
/* 					</span>*/
/* 				</li>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* </div>*/
/* */
