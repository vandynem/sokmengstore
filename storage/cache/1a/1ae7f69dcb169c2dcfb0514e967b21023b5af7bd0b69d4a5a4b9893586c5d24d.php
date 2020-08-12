<?php

/* listing.twig */
class __TwigTemplate_1b47bcc574819ec2df06108a7e454bec8ad5b4efae57c18599783655650fda96 extends Twig_Template
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
        if ((isset($context["url_thumbgallery"]) ? $context["url_thumbgallery"] : null)) {
            echo " ";
            $context["thumbgallery"] = (isset($context["url_thumbgallery"]) ? $context["url_thumbgallery"] : null);
        } else {
            // line 11
            echo " ";
            $context["thumbgallery"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "card_gallery"), "method");
        }
        // line 12
        echo "
";
        // line 13
        if ((isset($context["url_cartinfo"]) ? $context["url_cartinfo"] : null)) {
            echo " ";
            $context["cartinfo"] = (isset($context["url_cartinfo"]) ? $context["url_cartinfo"] : null);
        } else {
            // line 14
            echo " ";
            $context["cartinfo"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_position"), "method");
        }
        // line 15
        echo "

";
        // line 18
        echo "<div class=\"product-filter product-filter-top filters-panel\">
  <div class=\"row\">
  \t\t<div class=\"col-md-4 col-sm-5 view-mode\">
\t\t\t";
        // line 21
        $context["category_route"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_route", array(), "method");
        // line 22
        echo "\t\t\t
\t\t\t<!-- ";
        // line 23
        if ((((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null)) && ((isset($context["category_route"]) ? $context["category_route"] : null) == "product/category"))) {
            // line 24
            echo "\t\t\t\t";
            if ((isset($context["url_asideType"]) ? $context["url_asideType"] : null)) {
                echo " ";
                $context["btn_canvas"] = (isset($context["url_asideType"]) ? $context["url_asideType"] : null);
                // line 25
                echo "\t\t\t\t";
            } else {
                $context["btn_canvas"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "catalog_col_type"), "method");
                // line 26
                echo "\t\t\t\t";
            }
            // line 27
            echo "
\t\t\t\t";
            // line 28
            $context["class_btn_canvas"] = ((((isset($context["btn_canvas"]) ? $context["btn_canvas"] : null) == "off_canvas")) ? ("") : ("hidden-lg hidden-md"));
            // line 29
            echo "\t\t\t\t<a href=\"javascript:void(0)\" class=\"open-sidebar ";
            echo twig_escape_filter($this->env, (isset($context["class_btn_canvas"]) ? $context["class_btn_canvas"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-bars\"></i>";
            echo twig_escape_filter($this->env, (isset($context["text_sidebar"]) ? $context["text_sidebar"] : null), "html", null, true);
            echo "</a>
\t\t\t\t<div class=\"sidebar-overlay \"></div>
\t\t\t";
        }
        // line 31
        echo " -->

\t\t\t";
        // line 33
        if ((isset($context["url_asideType"]) ? $context["url_asideType"] : null)) {
            echo " ";
            $context["btn_canvas"] = (isset($context["url_asideType"]) ? $context["url_asideType"] : null);
            // line 34
            echo "\t\t\t\t";
        } else {
            $context["btn_canvas"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "catalog_col_type"), "method");
            // line 35
            echo "\t\t\t";
        }
        // line 36
        echo "\t\t\t";
        $context["class_canvas"] = ((((isset($context["col_canvas"]) ? $context["col_canvas"] : null) == "off_canvas")) ? ("") : ("hidden-lg hidden-md"));
        // line 37
        echo "\t\t\t";
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && ((isset($context["category_route"]) ? $context["category_route"] : null) == "product/category"))) {
            // line 38
            echo "\t\t\t\t<a href=\"javascript:void(0)\" class=\" open-leftsidebar ";
            echo twig_escape_filter($this->env, (isset($context["class_canvas"]) ? $context["class_canvas"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-align-left\"></i>";
            echo twig_escape_filter($this->env, (isset($context["text_sidebar"]) ? $context["text_sidebar"] : null), "html", null, true);
            echo "</a>
\t\t\t\t<div class=\"sidebar-overlay left\"></div>
\t\t\t";
        }
        // line 41
        echo "\t\t\t";
        if (((isset($context["column_right"]) ? $context["column_right"] : null) && ((isset($context["category_route"]) ? $context["category_route"] : null) == "product/category"))) {
            // line 42
            echo "\t\t\t<a href=\"javascript:void(0)\" class=\" open-rightsidebar ";
            echo twig_escape_filter($this->env, (isset($context["class_canvas"]) ? $context["class_canvas"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-align-right\"></i>";
            echo twig_escape_filter($this->env, (isset($context["text_sidebar"]) ? $context["text_sidebar"] : null), "html", null, true);
            echo "</a>
\t\t\t\t<div class=\"sidebar-overlay right\"></div>
\t\t\t";
        }
        // line 45
        echo "\t\t\t<div class=\"list-view\">
\t\t\t\t<div class=\"btn btn-gridview\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["text_gridview"]) ? $context["text_gridview"] : null), "html", null, true);
        echo "</div>
\t\t\t\t<button type=\"button\" id=\"grid-view-2\" class=\"btn btn-view hidden-sm hidden-xs\">2</button>
\t\t\t  \t<button type=\"button\" id=\"grid-view-3\" class=\"btn btn-view hidden-sm hidden-xs \">3</button>
\t\t\t  \t<button type=\"button\" id=\"grid-view-4\" class=\"btn btn-view hidden-sm hidden-xs\">4</button>
\t\t\t  \t<button type=\"button\" id=\"grid-view-5\" class=\"btn btn-view hidden-sm hidden-xs\">5</button>
\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid hidden-lg hidden-md\" title=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["button_grid"]) ? $context["button_grid"] : null), "html", null, true);
        echo "\"><i class=\"fa fa-th-large\"></i></button>
\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default list \" title=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["button_list"]) ? $context["button_list"] : null), "html", null, true);
        echo "\"><i class=\"fa fa-bars\"></i></button>
\t\t\t\t<button type=\"button\" id=\"table-view\" class=\"btn btn-view\"><i class=\"fa fa-table\" aria-hidden=\"true\"></i></button>
\t\t\t\t
\t\t\t</div>
\t\t</div>
  \t\t<div class=\"short-by-show form-inline text-right col-md-8 col-sm-6 col-xs-12\">
\t\t\t<div class=\"form-group short-by\">
\t\t\t\t<label class=\"control-label\" for=\"input-sort\">";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["text_sort"]) ? $context["text_sort"] : null), "html", null, true);
        echo "</label>
\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 63
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                // line 64
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sorts"], "href", array()), "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sorts"], "text", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 66
                echo "\t\t\t\t\t
\t\t\t\t\t<option value=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["sorts"], "href", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sorts"], "text", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t\t
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"control-label\" for=\"input-limit\">";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["text_limit"]) ? $context["text_limit"] : null), "html", null, true);
        echo "</label>
\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 78
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                // line 79
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["limits"], "href", array()), "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["limits"], "text", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 81
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["limits"], "href", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["limits"], "text", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            }
            // line 83
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"form-group product-compare hidden-md hidden-sm hidden-xs\"><a href=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["compare"]) ? $context["compare"] : null), "html", null, true);
        echo "\" id=\"compare-total\" class=\"btn btn-default\">";
        echo twig_escape_filter($this->env, (isset($context["text_compare"]) ? $context["text_compare"] : null), "html", null, true);
        echo "</a></div>
\t\t</div>
\t\t
\t
  </div>
</div>
";
        // line 93
        echo "
<div class=\"products-list row nopadding-xs\">
\t";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 96
            echo "
\t\t\t";
            // line 98
            echo "\t\t\t";
            if (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "right")) {
                // line 99
                echo "\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--right";
                // line 100
                echo "\t\t\t";
            } elseif (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "bottom")) {
                // line 101
                echo "\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--static";
                // line 102
                echo "\t\t\t";
            } elseif (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "center")) {
                // line 103
                echo "\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--center";
                // line 104
                echo "\t\t\t";
            } else {
                // line 105
                echo "\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--left";
                // line 106
                echo "\t\t\t";
            }
            // line 107
            echo "
\t\t<div class=\"product-layout \">
\t\t\t<div class=\"product-item-container ";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["class_cart_info"]) ? $context["class_cart_info"] : null), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"left-block\">
\t\t\t\t\t";
            // line 111
            if (((isset($context["thumbgallery"]) ? $context["thumbgallery"] : null) && $this->getAttribute($context["product"], "image_galleries", array()))) {
                // line 112
                echo "
\t\t\t\t\t";
                // line 113
                if (((isset($context["thumbgallery"]) ? $context["thumbgallery"] : null) == 1)) {
                    // line 114
                    echo "\t\t\t\t\t\t";
                    $context["class_thumbgallery"] = "product-card__left";
                    // line 115
                    echo "\t\t\t\t\t";
                } elseif (((isset($context["thumbgallery"]) ? $context["thumbgallery"] : null) == 2)) {
                    // line 116
                    echo "\t\t\t\t\t\t";
                    $context["class_thumbgallery"] = "product-card__right";
                    // line 117
                    echo "\t\t\t\t\t";
                } else {
                    // line 118
                    echo "\t\t\t\t\t\t";
                    $context["class_thumbgallery"] = "product-card__bottom";
                    // line 119
                    echo "\t\t\t\t\t";
                }
                // line 120
                echo "\t\t\t\t\t<div class=\"product-card__gallery ";
                echo twig_escape_filter($this->env, (isset($context["class_thumbgallery"]) ? $context["class_thumbgallery"] : null), "html", null, true);
                echo "\">
\t\t\t\t\t\t    <div class=\"item-img thumb-active\" data-src=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "first_gallery", array()), "thumb", array(), "array"), "html", null, true);
                echo "\"><img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "first_gallery", array()), "cart", array(), "array"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "\"></div>
\t\t\t\t\t\t\t";
                // line 122
                $context["total_gallery"] = 3;
                // line 123
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "image_galleries", array()));
                foreach ($context['_seq'] as $context["number_gallery"] => $context["image_gallery"]) {
                    // line 124
                    echo "\t\t\t\t\t\t\t\t";
                    if (($context["number_gallery"] < (isset($context["total_gallery"]) ? $context["total_gallery"] : null))) {
                        // line 125
                        echo "\t\t\t\t\t\t\t\t<div class=\"item-img\" data-src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image_gallery"], "thumb", array()), "html", null, true);
                        echo "\"><img class=\"lazyload \" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image_gallery"], "cart", array()), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                        echo "\"></div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 127
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['number_gallery'], $context['image_gallery'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 130
            echo "
\t\t\t\t\t<div class=\"product-image-container\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t<a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "href", array()), "html", null, true);
            echo " \" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo " \">
\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "thumb", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo " \" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "\" class=\"lazyload img-responsive\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 137
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "quick_status"), "method") && ((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "bottom"))) {
                // line 138
                echo "\t\t\t\t\t\t\t<a class=\"quickview iframe-link visible-lg btn-button\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_quickview"), "method"), "html", null, true);
                echo "\" data-fancybox-type=\"iframe\"  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "href_quickview", array()), "html", null, true);
                echo "\"> <i class=\"fa fa-search\"></i><span>";
                echo twig_escape_filter($this->env, (isset($context["text_quickview"]) ? $context["text_quickview"] : null), "html", null, true);
                echo "</span> </a>
\t\t\t\t\t\t";
            }
            // line 139
            echo " 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
            // line 143
            echo "\t\t\t\t\t";
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "countdown_status"), "method") && $this->getAttribute($context["product"], "special_end_date", array()))) {
                // line 144
                echo "\t\t\t\t\t
\t\t\t\t\t\t";
                // line 145
                $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/countdown.twig"), "listing.twig", 145)->display(array_merge($context, array("product" => $context["product"], "special_end_date" => $this->getAttribute($context["product"], "special_end_date", array()))));
                // line 146
                echo "\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 148
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 149
            if (($this->getAttribute($context["product"], "quantity", array()) == 0)) {
                // line 150
                echo "\t\t\t\t\t\t<div class=\"label-stock label label-success \">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "stock_status", array()), "html", null, true);
                echo "</div> 
\t\t\t\t\t";
            }
            // line 152
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 153
            if (($this->getAttribute($context["product"], "price", array()) && $this->getAttribute($context["product"], "special", array()))) {
                echo " 
\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 156
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "discount_status"), "method")) {
                    echo " 
\t\t\t\t\t\t\t<span class=\"label-product label-sale\">
\t\t\t\t\t\t\t\t ";
                    // line 158
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "discount", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                }
                // line 160
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t</div> 
\t\t\t\t\t";
            }
            // line 163
            echo " 

\t\t\t\t


\t\t\t\t\t";
            // line 168
            if (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) != "bottom")) {
                // line 169
                echo "\t\t\t\t\t<div class=\"button-group ";
                echo twig_escape_filter($this->env, (isset($context["class_cart_info"]) ? $context["class_cart_info"] : null), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 170
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_status"), "method")) {
                    // line 171
                    echo "\t\t\t\t\t\t<div class=\"btn-addToCart\">
\t\t\t\t\t\t\t<button class=\"addToCart btn-button\" type=\"button\" title=\"";
                    // line 172
                    echo twig_escape_filter($this->env, (isset($context["button_cart"]) ? $context["button_cart"] : null), "html", null, true);
                    echo "\" onclick=\"cart.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "minimum", array()), "html", null, true);
                    echo "');\">
\t\t\t\t\t\t\t\t <i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t <span>";
                    // line 174
                    echo twig_escape_filter($this->env, (isset($context["button_cart"]) ? $context["button_cart"] : null), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 177
                echo " 
\t\t\t\t\t\t";
                // line 178
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_wishlist_status"), "method")) {
                    // line 179
                    echo "\t\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null), "html", null, true);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "');\"><i class=\"fa fa-heart-o\"></i><span>";
                    echo twig_escape_filter($this->env, (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null), "html", null, true);
                    echo "</span></button>
\t\t\t\t\t\t";
                }
                // line 180
                echo " 

\t\t\t\t\t\t";
                // line 182
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_Compare_status"), "method")) {
                    // line 183
                    echo "\t\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_compare"]) ? $context["button_compare"] : null), "html", null, true);
                    echo "\" onclick=\"compare.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "');\"><i class=\"fa fa-random\"></i><span>";
                    echo twig_escape_filter($this->env, (isset($context["button_compare"]) ? $context["button_compare"] : null), "html", null, true);
                    echo "</span></button>
\t\t\t\t\t\t";
                }
                // line 184
                echo " 

\t\t\t\t\t\t";
                // line 186
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "quick_status"), "method")) {
                    // line 187
                    echo "\t\t\t\t\t\t\t<a class=\"quickview iframe-link visible-lg btn-button\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_quickview"), "method"), "html", null, true);
                    echo "\" data-fancybox-type=\"iframe\"  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "href_quickview", array()), "html", null, true);
                    echo "\"> <i class=\"fa fa-search\"></i> <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_quickview"), "method"), "html", null, true);
                    echo "</span></a>
\t\t\t\t\t\t";
                }
                // line 188
                echo " 
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 191
            echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4><a href=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "href", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo " </a></h4>
\t\t\t\t\t\t";
            // line 196
            if ($this->getAttribute($context["product"], "price", array())) {
                echo " 
\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t";
                // line 198
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo " 
\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    // line 199
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                    echo " </span>
\t\t\t\t\t\t\t";
                } else {
                    // line 200
                    echo "   
\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    // line 201
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "special", array()), "html", null, true);
                    echo " </span> <span class=\"price-old\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                    echo " </span>
\t\t\t\t\t\t\t";
                }
                // line 202
                echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 205
            echo "\t\t\t\t\t\t<div class=\"rate-history\">
\t\t\t\t\t\t\t";
            // line 206
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "rating_status"), "method")) {
                echo " 
\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t";
                // line 209
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 210
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 212
                        echo "   
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 214
                    echo " 
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 216
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"rating-num\"  href=\"";
                // line 218
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "href", array()), "html", null, true);
                echo "\" rel=\"nofollow\" target=\"_blank\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "reviews", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 221
            echo "
\t\t\t\t\t\t\t";
            // line 222
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_order"), "method")) {
                // line 223
                echo "\t\t\t\t\t\t\t<div class=\"order-num\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "orders", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            }
            // line 225
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t<p>";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo " </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 231
            if (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "bottom")) {
                // line 232
                echo "\t\t\t\t\t\t<div class=\"button-group ";
                echo twig_escape_filter($this->env, (isset($context["class_cart_info"]) ? $context["class_cart_info"] : null), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 233
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_wishlist_status"), "method")) {
                    // line 234
                    echo "\t\t\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null), "html", null, true);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "');\"><i class=\"fa fa-heart-o\"></i></button>
\t\t\t\t\t\t\t";
                }
                // line 235
                echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 237
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_status"), "method")) {
                    // line 238
                    echo "\t\t\t\t\t\t\t<button class=\"addToCart btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_cart"]) ? $context["button_cart"] : null), "html", null, true);
                    echo "\" onclick=\"cart.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "minimum", array()), "html", null, true);
                    echo "');\">
\t\t\t\t\t\t\t\t <i class=\"fa fa-shopping-cart\"></i> 
\t\t\t\t\t\t\t\t<span>";
                    // line 240
                    echo twig_escape_filter($this->env, (isset($context["button_cart"]) ? $context["button_cart"] : null), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t";
                }
                // line 242
                echo " 
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t";
                // line 245
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_Compare_status"), "method")) {
                    // line 246
                    echo "\t\t\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_compare"]) ? $context["button_compare"] : null), "html", null, true);
                    echo "\" onclick=\"compare.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "');\"><i class=\"fa fa-random\"></i></button>
\t\t\t\t\t\t\t";
                }
                // line 247
                echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 249
            echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
            // line 253
            if ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_status"), "method") || $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_wishlist_status"), "method")) || $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_Compare_status"), "method"))) {
                // line 254
                echo "\t\t\t\t<div class=\"list-block\">

\t\t\t\t\t";
                // line 256
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_status"), "method")) {
                    // line 257
                    echo "\t\t\t\t\t<button class=\"addToCart btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_cart"]) ? $context["button_cart"] : null), "html", null, true);
                    echo "\" onclick=\"cart.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "minimum", array()), "html", null, true);
                    echo "');\"><i class=\"fa fa-shopping-cart\"></i>";
                    echo twig_escape_filter($this->env, (isset($context["button_cart"]) ? $context["button_cart"] : null), "html", null, true);
                    echo "</button>
\t\t\t\t\t";
                }
                // line 258
                echo " 

\t\t\t\t\t";
                // line 260
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_wishlist_status"), "method")) {
                    // line 261
                    echo "\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null), "html", null, true);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "');\"><i class=\"fa fa-heart-o\"></i></button>
\t\t\t\t\t";
                }
                // line 262
                echo " 

\t\t\t\t\t";
                // line 264
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_Compare_status"), "method")) {
                    // line 265
                    echo "\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["button_compare"]) ? $context["button_compare"] : null), "html", null, true);
                    echo "\" onclick=\"compare.add('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
                    echo "');\"><i class=\"fa fa-refresh\"></i></button>
\t\t\t\t\t";
                }
                // line 266
                echo " 

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 270
            echo " 
\t\t\t</div>
\t\t</div>
\t\t
\t\t
\t\t";
            // line 276
            echo "\t
\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "</div>

";
        // line 281
        echo "<div class=\"filter\">
</div>
";
        // line 283
        if (((isset($context["pagination"]) ? $context["pagination"] : null) || (isset($context["results"]) ? $context["results"] : null))) {
            // line 284
            echo "<div class=\"product-filter product-filter-bottom filters-panel\">\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 286
            echo twig_escape_filter($this->env, (isset($context["results"]) ? $context["results"] : null), "html", null, true);
            echo "</div>
\t\t\t<div class=\"col-sm-6 text-right\">";
            // line 287
            echo twig_escape_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "html", null, true);
            echo "</div>
\t\t</div>
</div>
";
        }
        // line 291
        echo "
<script type=\"text/javascript\"><!--
reinitView();

function reinitView() {

\t\$( '.product-card__gallery .item-img').hover(function() {
\t\t\$(this).addClass('thumb-active').siblings().removeClass('thumb-active');
\t\tvar thumb_src = \$(this).attr(\"data-src\");
\t\t\$(this).closest('.product-item-container').find('img.img-responsive').attr(\"src\",thumb_src);
\t}); 

\t\$('.view-mode .list-view button').bind(\"click\", function() {
\t\t\$(this).parent().find('button').removeClass('active');
\t\t\$(this).addClass('active');
\t});\t
\t// Product List
\t\$('#list-view').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-list col-xs-12');
\t\tlocalStorage.setItem('listview', 'list');
\t});

\t// Product Grid
\t\$('#grid-view').click(function() {
\t\tvar cols = \$('.left_column , .right_column ').length;

\t\t
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
\t\t
\t\tlocalStorage.setItem('listview', 'grid');
\t});

\t// Product Grid 2
\t\$('#grid-view-2').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-2 col-lg-6 col-md-6 col-sm-6 col-xs-12');
\t\tlocalStorage.setItem('listview', 'grid-2');
\t});

\t// Product Grid 3
\t\$('#grid-view-3').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-3 col-lg-4 col-md-4 col-sm-6 col-xs-12');
\t\tlocalStorage.setItem('listview', 'grid-3');
\t});

\t// Product Grid 4
\t\$('#grid-view-4').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12');
\t\tlocalStorage.setItem('listview', 'grid-4');
\t});

\t// Product Grid 5
\t\$('#grid-view-5').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-5 col-lg-15 col-md-4 col-sm-6 col-xs-12');
\t\tlocalStorage.setItem('listview', 'grid-5');
\t});

\t// Product Table
\t\$('#table-view').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-table col-xs-12');
\t\tlocalStorage.setItem('listview', 'table');
\t})

\t
\t";
        // line 354
        if ((isset($context["url_listview"]) ? $context["url_listview"] : null)) {
            // line 355
            echo "\t\tlocalStorage.setItem('listview', '";
            echo twig_escape_filter($this->env, (isset($context["url_listview"]) ? $context["url_listview"] : null), "html", null, true);
            echo "');
\t";
        } else {
            // line 357
            echo "\t\tif(localStorage.getItem('listview')== null) localStorage.setItem('listview', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_catalog_mode"), "method"), "html", null, true);
            echo "');
\t";
        }
        // line 359
        echo "
\tif (localStorage.getItem('listview') == 'table') {
\t\t\$('#table-view').trigger('click');
\t} else if (localStorage.getItem('listview') == 'grid'){
\t\t\$('#grid-view').trigger('click');
\t} else if (localStorage.getItem('listview') == 'grid-2'){
\t\t\$('#grid-view-2').trigger('click');
\t} else if (localStorage.getItem('listview') == 'grid-3'){
\t\t\$('#grid-view-3').trigger('click');
\t} else if (localStorage.getItem('listview') == 'grid-4'){
\t\t\$('#grid-view-4').trigger('click');
\t} else if (localStorage.getItem('listview') == 'grid-5'){
\t\t\$('#grid-view-5').trigger('click');
\t} else {
\t\t\$('#list-view').trigger('click');
\t}
\t

}

//--></script> ";
    }

    public function getTemplateName()
    {
        return "listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  897 => 359,  891 => 357,  885 => 355,  883 => 354,  818 => 291,  811 => 287,  807 => 286,  803 => 284,  801 => 283,  797 => 281,  793 => 278,  778 => 276,  771 => 270,  764 => 266,  756 => 265,  754 => 264,  750 => 262,  742 => 261,  740 => 260,  736 => 258,  724 => 257,  722 => 256,  718 => 254,  716 => 253,  710 => 249,  705 => 247,  697 => 246,  695 => 245,  690 => 242,  684 => 240,  674 => 238,  672 => 237,  668 => 235,  660 => 234,  658 => 233,  653 => 232,  651 => 231,  646 => 229,  640 => 225,  634 => 223,  632 => 222,  629 => 221,  621 => 218,  617 => 216,  610 => 214,  605 => 212,  598 => 210,  594 => 209,  588 => 206,  585 => 205,  580 => 202,  573 => 201,  570 => 200,  565 => 199,  561 => 198,  556 => 196,  550 => 195,  544 => 191,  539 => 188,  529 => 187,  527 => 186,  523 => 184,  513 => 183,  511 => 182,  507 => 180,  497 => 179,  495 => 178,  492 => 177,  485 => 174,  476 => 172,  473 => 171,  471 => 170,  466 => 169,  464 => 168,  457 => 163,  451 => 160,  445 => 158,  439 => 156,  434 => 153,  431 => 152,  425 => 150,  423 => 149,  420 => 148,  416 => 146,  414 => 145,  411 => 144,  408 => 143,  403 => 139,  393 => 138,  391 => 137,  381 => 134,  375 => 133,  370 => 130,  366 => 128,  360 => 127,  350 => 125,  347 => 124,  342 => 123,  340 => 122,  332 => 121,  327 => 120,  324 => 119,  321 => 118,  318 => 117,  315 => 116,  312 => 115,  309 => 114,  307 => 113,  304 => 112,  302 => 111,  297 => 109,  293 => 107,  290 => 106,  287 => 105,  284 => 104,  281 => 103,  278 => 102,  275 => 101,  272 => 100,  269 => 99,  266 => 98,  263 => 96,  246 => 95,  242 => 93,  231 => 86,  227 => 84,  221 => 83,  213 => 81,  205 => 79,  202 => 78,  198 => 77,  193 => 75,  187 => 71,  181 => 70,  173 => 67,  170 => 66,  162 => 64,  159 => 63,  155 => 62,  149 => 59,  139 => 52,  135 => 51,  127 => 46,  124 => 45,  115 => 42,  112 => 41,  103 => 38,  100 => 37,  97 => 36,  94 => 35,  90 => 34,  86 => 33,  82 => 31,  73 => 29,  71 => 28,  68 => 27,  65 => 26,  61 => 25,  56 => 24,  54 => 23,  51 => 22,  49 => 21,  44 => 18,  40 => 15,  36 => 14,  31 => 13,  28 => 12,  24 => 11,  19 => 10,);
    }
}
/* {#*/
/* ****************************************************** */
/*  * @package	SO Framework for Opencart 3.x*/
/*  * @author	http://www.opencartworks.com*/
/*  * @license	GNU General Public License*/
/*  * @copyright(C) 2008-2017 opencartworks.com. All rights reserved.*/
/*  *******************************************************/
/* #}*/
/* {#====  Variables url parameter ==== #}*/
/* {% if url_thumbgallery %} {% set thumbgallery = url_thumbgallery %}*/
/* {% else %} {% set thumbgallery = soconfig.get_settings('card_gallery') %}{% endif %}*/
/* */
/* {% if url_cartinfo %} {% set cartinfo = url_cartinfo %}*/
/* {% else %} {% set cartinfo = soconfig.get_settings('desktop_addcart_position') %}{% endif %}*/
/* */
/* */
/* {#==== filters panel Top==== #}*/
/* <div class="product-filter product-filter-top filters-panel">*/
/*   <div class="row">*/
/*   		<div class="col-md-4 col-sm-5 view-mode">*/
/* 			{% set category_route = soconfig.get_route() %}*/
/* 			*/
/* 			<!-- {% if (column_left or column_right ) and category_route =='product/category' %}*/
/* 				{% if url_asideType %} {% set btn_canvas = url_asideType %}*/
/* 				{% else %}{% set btn_canvas = soconfig.get_settings('catalog_col_type') %}*/
/* 				{% endif %}*/
/* */
/* 				{% set class_btn_canvas = (btn_canvas =='off_canvas') ? '' : 'hidden-lg hidden-md' %}*/
/* 				<a href="javascript:void(0)" class="open-sidebar {{class_btn_canvas}}"><i class="fa fa-bars"></i>{{ text_sidebar }}</a>*/
/* 				<div class="sidebar-overlay "></div>*/
/* 			{% endif %} -->*/
/* */
/* 			{% if url_asideType %} {% set btn_canvas = url_asideType %}*/
/* 				{% else %}{% set btn_canvas = soconfig.get_settings('catalog_col_type') %}*/
/* 			{% endif %}*/
/* 			{% set class_canvas = col_canvas =='off_canvas' ? '' : 'hidden-lg hidden-md' %}*/
/* 			{% if column_left and category_route =='product/category' %}*/
/* 				<a href="javascript:void(0)" class=" open-leftsidebar {{class_canvas}}"><i class="fa fa-align-left"></i>{{ text_sidebar }}</a>*/
/* 				<div class="sidebar-overlay left"></div>*/
/* 			{% endif %}*/
/* 			{% if column_right and category_route =='product/category' %}*/
/* 			<a href="javascript:void(0)" class=" open-rightsidebar {{class_canvas}}"><i class="fa fa-align-right"></i>{{ text_sidebar }}</a>*/
/* 				<div class="sidebar-overlay right"></div>*/
/* 			{% endif %}*/
/* 			<div class="list-view">*/
/* 				<div class="btn btn-gridview">{{text_gridview}}</div>*/
/* 				<button type="button" id="grid-view-2" class="btn btn-view hidden-sm hidden-xs">2</button>*/
/* 			  	<button type="button" id="grid-view-3" class="btn btn-view hidden-sm hidden-xs ">3</button>*/
/* 			  	<button type="button" id="grid-view-4" class="btn btn-view hidden-sm hidden-xs">4</button>*/
/* 			  	<button type="button" id="grid-view-5" class="btn btn-view hidden-sm hidden-xs">5</button>*/
/* 				<button type="button" id="grid-view" class="btn btn-default grid hidden-lg hidden-md" title="{{ button_grid }}"><i class="fa fa-th-large"></i></button>*/
/* 				<button type="button" id="list-view" class="btn btn-default list " title="{{ button_list }}"><i class="fa fa-bars"></i></button>*/
/* 				<button type="button" id="table-view" class="btn btn-view"><i class="fa fa-table" aria-hidden="true"></i></button>*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/*   		<div class="short-by-show form-inline text-right col-md-8 col-sm-6 col-xs-12">*/
/* 			<div class="form-group short-by">*/
/* 				<label class="control-label" for="input-sort">{{ text_sort }}</label>*/
/* 				<select id="input-sort" class="form-control" onchange="location = this.value;">*/
/* 					*/
/* 					{% for sorts in sorts %}*/
/* 					{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 						<option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/* 					{% else %}*/
/* 					*/
/* 					<option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/* 					*/
/* 					{% endif %}*/
/* 					{% endfor %}*/
/* 				*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 				<label class="control-label" for="input-limit">{{ text_limit }}</label>*/
/* 				<select id="input-limit" class="form-control" onchange="location = this.value;">*/
/* 					{% for limits in limits %}*/
/* 					{% if limits.value == limit %}*/
/* 					<option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/* 					{% else %}*/
/* 					<option value="{{ limits.href }}">{{ limits.text }}</option>*/
/* 					{% endif %}*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="form-group product-compare hidden-md hidden-sm hidden-xs"><a href="{{ compare }}" id="compare-total" class="btn btn-default">{{ text_compare }}</a></div>*/
/* 		</div>*/
/* 		*/
/* 	*/
/*   </div>*/
/* </div>*/
/* {#==== Product List|Grid ==== #}*/
/* */
/* <div class="products-list row nopadding-xs">*/
/* 	{% for  product in products %}*/
/* */
/* 			{#=======Show Group_cart_info ======= #}*/
/* 			{% if cartinfo == 'right' %}*/
/* 				{% set class_cart_info = 'cartinfo--right' %}*/
/* 			{% elseif cartinfo == 'bottom' %}*/
/* 				{% set class_cart_info = 'cartinfo--static' %}*/
/* 			{% elseif cartinfo == 'center' %}*/
/* 				{% set class_cart_info = 'cartinfo--center' %}*/
/* 			{% else %}*/
/* 				{% set class_cart_info = 'cartinfo--left' %}*/
/* 			{% endif %}*/
/* */
/* 		<div class="product-layout ">*/
/* 			<div class="product-item-container {{ class_cart_info }}">*/
/* 				<div class="left-block">*/
/* 					{% if thumbgallery   and product.image_galleries %}*/
/* */
/* 					{% if thumbgallery == 1 %}*/
/* 						{% set  class_thumbgallery = 'product-card__left' %}*/
/* 					{% elseif thumbgallery == 2 %}*/
/* 						{% set  class_thumbgallery = 'product-card__right' %}*/
/* 					{% else %}*/
/* 						{% set  class_thumbgallery = 'product-card__bottom' %}*/
/* 					{% endif %}*/
/* 					<div class="product-card__gallery {{class_thumbgallery}}">*/
/* 						    <div class="item-img thumb-active" data-src="{{product.first_gallery['thumb']}}"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{product.first_gallery['cart']}}" alt="{{ product.name }}"></div>*/
/* 							{% set total_gallery = 3 %}*/
/* 							{% for number_gallery,image_gallery in product.image_galleries %}*/
/* 								{% if number_gallery < total_gallery %}*/
/* 								<div class="item-img" data-src="{{image_gallery.thumb}}"><img class="lazyload " data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{image_gallery.cart}}" alt="{{ product.name }}"></div>*/
/* 								{% endif %}*/
/* 							{% endfor %}*/
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* 					<div class="product-image-container">*/
/* 						<div class="image">*/
/* 							<a href="{{ product.href }} " title="{{ product.name }} ">*/
/* 								<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" title="{{ product.name }} " alt="{{ product.name }}" class="lazyload img-responsive" />*/
/* 							</a>*/
/* 						</div>*/
/* 						{% if soconfig.get_settings('quick_status') and cartinfo == 'bottom' %}*/
/* 							<a class="quickview iframe-link visible-lg btn-button" title="{{ objlang.get('text_quickview')}}" data-fancybox-type="iframe"  href="{{ product.href_quickview }}"> <i class="fa fa-search"></i><span>{{ text_quickview}}</span> </a>*/
/* 						{% endif %} */
/* 					</div>*/
/* 					*/
/* 					{#===== Show CountDown Product =======#}*/
/* 					{% if soconfig.get_settings('countdown_status') and product.special_end_date %}*/
/* 					*/
/* 						{% include theme_directory~'/template/soconfig/countdown.twig' with {product: product,special_end_date:product.special_end_date} %}*/
/* 					*/
/* 					{% endif %}*/
/* 					*/
/* 					{% if product.quantity== 0 %}*/
/* 						<div class="label-stock label label-success ">{{ product.stock_status}}</div> */
/* 					{% endif %}*/
/* 					*/
/* 					{% if product.price  and  product.special  %} */
/* 					<div class="box-label">*/
/* 						{#=======Discount Label======= #}*/
/* 						{% if soconfig.get_settings('discount_status')  %} */
/* 							<span class="label-product label-sale">*/
/* 								 {{ product.discount }}*/
/* 							</span>*/
/* 						{% endif %} */
/* 						*/
/* 					</div> */
/* 					{% endif %} */
/* */
/* 				*/
/* */
/* */
/* 					{% if cartinfo != 'bottom' %}*/
/* 					<div class="button-group {{ class_cart_info }}">*/
/* 						{% if soconfig.get_settings('desktop_addcart_status') %}*/
/* 						<div class="btn-addToCart">*/
/* 							<button class="addToCart btn-button" type="button" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');">*/
/* 								 <i class="fa fa-shopping-cart"></i>*/
/* 								 <span>{{ button_cart }}</span>*/
/* 							</button>*/
/* 						</div>*/
/* 						{% endif %} */
/* 						{% if soconfig.get_settings('desktop_wishlist_status') %}*/
/* 						<button class="wishlist btn-button" type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart-o"></i><span>{{ button_wishlist }}</span></button>*/
/* 						{% endif %} */
/* */
/* 						{% if soconfig.get_settings('desktop_Compare_status') %}*/
/* 						<button class="compare btn-button" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-random"></i><span>{{ button_compare }}</span></button>*/
/* 						{% endif %} */
/* */
/* 						{% if soconfig.get_settings('quick_status') %}*/
/* 							<a class="quickview iframe-link visible-lg btn-button" title="{{ objlang.get('text_quickview')}}" data-fancybox-type="iframe"  href="{{ product.href_quickview }}"> <i class="fa fa-search"></i> <span>{{ objlang.get('text_quickview')}}</span></a>*/
/* 						{% endif %} */
/* 					</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				*/
/* 				<div class="right-block">*/
/* 					<div class="caption">*/
/* 						<h4><a href="{{ product.href }}">{{ product.name }} </a></h4>*/
/* 						{% if product.price %} */
/* 						<div class="price">*/
/* 							{% if not product.special %} */
/* 								<span class="price-new">{{ product.price }} </span>*/
/* 							{% else %}   */
/* 								<span class="price-new">{{ product.special }} </span> <span class="price-old">{{ product.price }} </span>*/
/* 							{% endif %} */
/* 						</div>*/
/* 						{% endif %}*/
/* 						<div class="rate-history">*/
/* 							{% if soconfig.get_settings('rating_status') %} */
/* 							<div class="ratings">*/
/* 								<div class="rating-box">*/
/* 								{% for i in 1..5 %}*/
/* 								{% if product.rating < i %} */
/* 									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 								{% else %}   */
/* 									<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 								{% endif %} */
/* 								{% endfor %}*/
/* */
/* 								</div>*/
/* 								<a class="rating-num"  href="{{ product.href }}" rel="nofollow" target="_blank" >{{product.reviews}}</a>*/
/* 							</div>*/
/* 							{% endif %}*/
/* */
/* 							{% if soconfig.get_settings('product_order') %}*/
/* 							<div class="order-num">{{product.orders}}</div>*/
/* 							{% endif %}*/
/* 							*/
/* 						</div>*/
/* 						*/
/* 						<div class="description">*/
/* 							<p>{{ product.description }} </p>*/
/* 						</div>*/
/* 						{% if cartinfo == 'bottom' %}*/
/* 						<div class="button-group {{ class_cart_info }}">*/
/* 							{% if soconfig.get_settings('desktop_wishlist_status') %}*/
/* 							<button class="wishlist btn-button" type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart-o"></i></button>*/
/* 							{% endif %} */
/* 							*/
/* 							{% if soconfig.get_settings('desktop_addcart_status') %}*/
/* 							<button class="addToCart btn-button" type="button" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');">*/
/* 								 <i class="fa fa-shopping-cart"></i> */
/* 								<span>{{ button_cart }}</span>*/
/* 							</button>*/
/* 							{% endif %} */
/* 							*/
/* */
/* 							{% if soconfig.get_settings('desktop_Compare_status') %}*/
/* 							<button class="compare btn-button" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-random"></i></button>*/
/* 							{% endif %} */
/* 						</div>*/
/* 						{% endif %} */
/* 					</div>*/
/* 				</div>*/
/* */
/* 				{% if soconfig.get_settings('desktop_addcart_status') or soconfig.get_settings('desktop_wishlist_status') or  soconfig.get_settings('desktop_Compare_status') %}*/
/* 				<div class="list-block">*/
/* */
/* 					{% if soconfig.get_settings('desktop_addcart_status') %}*/
/* 					<button class="addToCart btn-button" type="button" title="{{ button_cart}}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-cart"></i>{{ button_cart }}</button>*/
/* 					{% endif %} */
/* */
/* 					{% if soconfig.get_settings('desktop_wishlist_status') %}*/
/* 					<button class="wishlist btn-button" type="button" title="{{ button_wishlist}}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart-o"></i></button>*/
/* 					{% endif %} */
/* */
/* 					{% if soconfig.get_settings('desktop_Compare_status') %}*/
/* 					<button class="compare btn-button" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-refresh"></i></button>*/
/* 					{% endif %} */
/* */
/* 					*/
/* 				</div>*/
/* 				{% endif %} */
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		*/
/* 		{# ====End Clearfix fluid grid layout =======#}*/
/* 	*/
/* 	{% endfor %}*/
/* </div>*/
/* */
/* {#==== filters panel Bottom==== #}*/
/* <div class="filter">*/
/* </div>*/
/* {% if pagination or results %}*/
/* <div class="product-filter product-filter-bottom filters-panel">	*/
/* 		<div class="row">*/
/* 			<div class="col-sm-6 text-left">{{ results }}</div>*/
/* 			<div class="col-sm-6 text-right">{{ pagination }}</div>*/
/* 		</div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* <script type="text/javascript"><!--*/
/* reinitView();*/
/* */
/* function reinitView() {*/
/* */
/* 	$( '.product-card__gallery .item-img').hover(function() {*/
/* 		$(this).addClass('thumb-active').siblings().removeClass('thumb-active');*/
/* 		var thumb_src = $(this).attr("data-src");*/
/* 		$(this).closest('.product-item-container').find('img.img-responsive').attr("src",thumb_src);*/
/* 	}); */
/* */
/* 	$('.view-mode .list-view button').bind("click", function() {*/
/* 		$(this).parent().find('button').removeClass('active');*/
/* 		$(this).addClass('active');*/
/* 	});	*/
/* 	// Product List*/
/* 	$('#list-view').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-list col-xs-12');*/
/* 		localStorage.setItem('listview', 'list');*/
/* 	});*/
/* */
/* 	// Product Grid*/
/* 	$('#grid-view').click(function() {*/
/* 		var cols = $('.left_column , .right_column ').length;*/
/* */
/* 		*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');*/
/* 		*/
/* 		localStorage.setItem('listview', 'grid');*/
/* 	});*/
/* */
/* 	// Product Grid 2*/
/* 	$('#grid-view-2').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-2 col-lg-6 col-md-6 col-sm-6 col-xs-12');*/
/* 		localStorage.setItem('listview', 'grid-2');*/
/* 	});*/
/* */
/* 	// Product Grid 3*/
/* 	$('#grid-view-3').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-3 col-lg-4 col-md-4 col-sm-6 col-xs-12');*/
/* 		localStorage.setItem('listview', 'grid-3');*/
/* 	});*/
/* */
/* 	// Product Grid 4*/
/* 	$('#grid-view-4').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12');*/
/* 		localStorage.setItem('listview', 'grid-4');*/
/* 	});*/
/* */
/* 	// Product Grid 5*/
/* 	$('#grid-view-5').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-5 col-lg-15 col-md-4 col-sm-6 col-xs-12');*/
/* 		localStorage.setItem('listview', 'grid-5');*/
/* 	});*/
/* */
/* 	// Product Table*/
/* 	$('#table-view').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-table col-xs-12');*/
/* 		localStorage.setItem('listview', 'table');*/
/* 	})*/
/* */
/* 	*/
/* 	{% if url_listview %}*/
/* 		localStorage.setItem('listview', '{{url_listview}}');*/
/* 	{% else %}*/
/* 		if(localStorage.getItem('listview')== null) localStorage.setItem('listview', '{{soconfig.get_settings('product_catalog_mode')}}');*/
/* 	{% endif %}*/
/* */
/* 	if (localStorage.getItem('listview') == 'table') {*/
/* 		$('#table-view').trigger('click');*/
/* 	} else if (localStorage.getItem('listview') == 'grid'){*/
/* 		$('#grid-view').trigger('click');*/
/* 	} else if (localStorage.getItem('listview') == 'grid-2'){*/
/* 		$('#grid-view-2').trigger('click');*/
/* 	} else if (localStorage.getItem('listview') == 'grid-3'){*/
/* 		$('#grid-view-3').trigger('click');*/
/* 	} else if (localStorage.getItem('listview') == 'grid-4'){*/
/* 		$('#grid-view-4').trigger('click');*/
/* 	} else if (localStorage.getItem('listview') == 'grid-5'){*/
/* 		$('#grid-view-5').trigger('click');*/
/* 	} else {*/
/* 		$('#list-view').trigger('click');*/
/* 	}*/
/* 	*/
/* */
/* }*/
/* */
/* //--></script> */
