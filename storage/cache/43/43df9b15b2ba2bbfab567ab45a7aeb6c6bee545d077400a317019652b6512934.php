<?php

/* so-buyshop/template/extension/module/so_extra_slider/default.twig */
class __TwigTemplate_3a1d2fdbe0a3b61a50d0ffb238e73d0ac1c81f2e1e92267f75a85148a8a05f59 extends Twig_Template
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
        echo "<!-- default Grid  -->
<div class=\"module ";
        // line 2
        echo (isset($context["direction_class"]) ? $context["direction_class"] : null);
        echo " ";
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo "\">
\t";
        // line 3
        if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
            echo " 
\t\t<h3 class=\"modtitle\">";
            // line 4
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "
\t\t\t";
            // line 5
            if ((twig_length_filter($this->env, (isset($context["category"]) ? $context["category"] : null)) == 1)) {
                echo " 
\t\t\t\t<a class=\"viewall\" href=\"";
                // line 6
                echo (isset($context["linkCategory"]) ? $context["linkCategory"] : null);
                echo "\"> ";
                echo (isset($context["text_view_all"]) ? $context["text_view_all"] : null);
                echo " <i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a>
\t\t\t";
            }
            // line 8
            echo "\t\t</h3>
\t\t
\t";
        }
        // line 11
        echo "
\t";
        // line 12
        if ( !twig_test_empty(trim((isset($context["pre_text"]) ? $context["pre_text"] : null)))) {
            echo " 
\t\t<div class=\"form-group col-pre\">
\t\t\t";
            // line 14
            echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 17
        echo "
\t<div class=\"modcontent\">
\t\t
\t\t";
        // line 20
        if (twig_test_empty((isset($context["products"]) ? $context["products"] : null))) {
            // line 21
            echo "\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> 
\t\t\t\t";
            // line 22
            echo (isset($context["text_noproduct"]) ? $context["text_noproduct"] : null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t</div>

\t\t";
        } else {
            // line 27
            echo "\t\t\t";
            $context["count_item"] = twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null));
            echo "\t
\t\t\t";
            // line 28
            $context["cls_btn_page"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("buttom-type1") : ("button-type2"));
            echo "\t
\t\t\t";
            // line 29
            $context["btn_type"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("button-type1") : ("button-type2"));
            // line 30
            echo "\t\t\t
\t\t\t";
            // line 31
            $context["tag_id"] = ("so_extra_slider_" . (isset($context["suffix"]) ? $context["suffix"] : null));
            // line 32
            echo "\t\t\t";
            $context["class_respl"] = ((((((((("preset00-" . (isset($context["nb_column0"]) ? $context["nb_column0"] : null)) . " preset01-") . (isset($context["nb_column1"]) ? $context["nb_column1"] : null)) . " preset02-") . (isset($context["nb_column2"]) ? $context["nb_column2"] : null)) . " preset03-") . (isset($context["nb_column3"]) ? $context["nb_column3"] : null)) . " preset04-") . (isset($context["nb_column4"]) ? $context["nb_column4"] : null));
            // line 33
            echo "\t\t\t";
            $context["btn_prev"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("&#171") : ("&#139"));
            // line 34
            echo "\t\t\t";
            $context["btn_next"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("&#187") : ("&#155"));
            // line 35
            echo "\t\t\t";
            $context["i"] = 0;
            // line 36
            echo "
\t\t\t<div id=\"";
            // line 37
            echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
            echo "\" class=\"so-extraslider ";
            echo (isset($context["cls_btn_page"]) ? $context["cls_btn_page"] : null);
            echo " ";
            echo (isset($context["class_respl"]) ? $context["class_respl"] : null);
            echo " ";
            echo (isset($context["btn_type"]) ? $context["btn_type"] : null);
            echo "\">
\t\t\t\t<!-- Begin extraslider-inner -->
\t\t\t\t<div class=\"extraslider-inner products-list \" data-effect=\"";
            // line 39
            echo (isset($context["effect"]) ? $context["effect"] : null);
            echo "\">
\t\t\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["i"] => $context["product"]) {
                // line 41
                echo "\t\t\t\t\t\t";
                $context["i"] = ($context["i"] + 1);
                // line 42
                echo "\t\t\t\t\t\t";
                if (((($context["i"] % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 1) || ((isset($context["nb_rows"]) ? $context["nb_rows"] : null) == 1))) {
                    echo " 
\t\t\t\t\t\t<div class=\"item \">
\t\t\t\t\t\t";
                }
                // line 44
                echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"product-layout product-grid pro-row-";
                // line 46
                echo $context["i"];
                echo " ";
                echo (isset($context["products_style"]) ? $context["products_style"] : null);
                echo " \">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"product-item-container\">
\t\t\t\t\t\t\t\t\t<div class=\"left-block\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-container ";
                // line 50
                if (((isset($context["product_image_num"]) ? $context["product_image_num"] : null) == 2)) {
                    echo " ";
                    echo "second_img";
                    echo " ";
                }
                echo "\t\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 52
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" data-product='";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "' target=\"";
                echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "nameFull", array());
                echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 53
                if (((isset($context["product_image_num"]) ? $context["product_image_num"] : null) == 2)) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" class=\"img-1 lazyload\" alt=\"";
                    echo $this->getAttribute($context["product"], "nameFull", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    // line 55
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "\" class=\"img-2 lazyload\" alt=\"";
                    echo $this->getAttribute($context["product"], "nameFull", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "nameFull", array());
                    echo "\" class=\"lazyload\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 58
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 63
                if (($this->getAttribute($context["product"], "special", array()) && (isset($context["display_sale"]) ? $context["display_sale"] : null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">";
                    // line 64
                    echo " ";
                    echo $this->getAttribute($context["product"], "discount", array());
                    echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 65
                echo " 

\t\t\t\t\t\t\t\t\t\t\t";
                // line 67
                if (($this->getAttribute($context["product"], "productNew", array()) && (isset($context["display_new"]) ? $context["display_new"] : null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    // line 68
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_new"), "method");
                    echo " </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 69
                echo " \t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
                // line 72
                if ((((isset($context["display_compare"]) ? $context["display_compare"] : null) || (isset($context["display_add_to_cart"]) ? $context["display_add_to_cart"] : null)) || (isset($context["display_wishlist"]) ? $context["display_wishlist"] : null))) {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"button-group cartinfo--center so-quickview\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 74
                    if ((isset($context["display_add_to_cart"]) ? $context["display_add_to_cart"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-addToCart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addToCart btn-button\" title=\"";
                        // line 76
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                        echo "\" onclick=\"cart.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo " ');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 78
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                        echo " </span>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ((isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist btn-button\" title=\"";
                        // line 83
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_wishlist"), "method");
                        echo "\" onclick=\"wishlist.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"fa fa-heart-o\"></i><span>";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_wishlist"), "method");
                        echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 84
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 85
                    if ((isset($context["display_compare"]) ? $context["display_compare"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare btn-button\" title=\"";
                        // line 86
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_compare"), "method");
                        echo " \" onclick=\"compare.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"fa fa-refresh\"></i><span>";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_compare"), "method");
                        echo "</span></button>

\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 89
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "' href=\"";
                    echo $this->getAttribute($context["product"], "link", array());
                    echo "\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 92
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">

\t\t\t\t\t\t\t\t\t\t\t";
                // line 99
                if ((isset($context["display_title"]) ? $context["display_title"] : null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 101
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "nameFull", array());
                    echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 102
                    echo $this->getAttribute($context["product"], "name", array());
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 106
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 107
                if ((isset($context["display_price"]) ? $context["display_price"] : null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div  class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 109
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 111
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 113
                        echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        // line 115
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        // line 116
                        echo $this->getAttribute($context["product"], "special", array());
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 117
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 120
                echo " 
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 122
                if ((isset($context["display_rating"]) ? $context["display_rating"] : null)) {
                    // line 123
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "rating", array())) {
                        // line 124
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 126
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                            // line 127
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 128
                            if (($this->getAttribute($context["product"], "rating", array()) < $context["k"])) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            } else {
                                // line 130
                                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 132
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 133
                            $context["k"] = ($context["k"] + 1);
                            // line 134
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 137
                        echo "  
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 140
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                            // line 141
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["j"] = ($context["j"] + 1);
                            // line 142
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 143
                        echo " \t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 146
                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 147
                echo "\t

\t\t\t\t\t\t\t\t\t\t\t";
                // line 149
                if ((isset($context["display_description"]) ? $context["display_description"] : null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-des\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 151
                    echo $this->getAttribute($context["product"], "description", array());
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 153
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End item-wrap-inner -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End item-wrap -->

\t\t\t\t\t\t";
                // line 166
                if (((($context["i"] % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 0) || ($context["i"] == (isset($context["count_item"]) ? $context["count_item"] : null)))) {
                    echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 168
                echo " 

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "\t 
\t\t\t\t</div>
\t\t\t\t<!--End extraslider-inner -->

\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t//<![CDATA[
\t\t\t\tjQuery(document).ready(function (\$) {
\t\t\t\t\t(function (element) {
\t\t\t\t\t\tvar \$element = \$(element),
\t\t\t\t\t\t\t\t\$extraslider = \$(\".extraslider-inner\", \$element),
\t\t\t\t\t\t\t\t_delay = ";
            // line 180
            echo (isset($context["delay"]) ? $context["delay"] : null);
            echo " ,
\t\t\t\t\t\t\t\t_duration = ";
            // line 181
            echo (isset($context["duration"]) ? $context["duration"] : null);
            echo " ,
\t\t\t\t\t\t\t\t_effect = '";
            // line 182
            echo (isset($context["effect"]) ? $context["effect"] : null);
            echo " ';

\t\t\t\t\t\t\$extraslider.on(\"initialized.owl.carousel2\", function () {
\t\t\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tvar \$item = \$(\".owl2-item\", \$element);
\t\t\t\t\t\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            // line 193
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                echo " 
\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 200
            echo "
\t\t\t\t\t\t\t";
            // line 201
            if (((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) {
                echo " 
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-dots\", \$element).insertAfter(\$(\".owl2-prev\", \$element));
\t\t\t\t\t\t\t";
            } else {
                // line 204
                echo "  
\t\t\t\t\t\t\t\t\$(\".owl2-nav\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertAfter(\$extraslider);
\t\t\t\t\t\t\t";
            }
            // line 208
            echo "
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.owlCarousel2({
\t\t\t\t\t\t\trtl: ";
            // line 212
            echo (isset($context["direction"]) ? $context["direction"] : null);
            echo ",
\t\t\t\t\t\t\tmargin: ";
            // line 213
            echo (isset($context["margin"]) ? $context["margin"] : null);
            echo ",
\t\t\t\t\t\t\tslideBy: ";
            // line 214
            echo (isset($context["slideBy"]) ? $context["slideBy"] : null);
            echo ",
\t\t\t\t\t\t\tautoplay: ";
            // line 215
            echo (isset($context["autoplay"]) ? $context["autoplay"] : null);
            echo ",
\t\t\t\t\t\t\tautoplayHoverPause: ";
            // line 216
            echo (isset($context["autoplayHoverPause"]) ? $context["autoplayHoverPause"] : null);
            echo ",
\t\t\t\t\t\t\tautoplayTimeout: ";
            // line 217
            echo (isset($context["autoplayTimeout"]) ? $context["autoplayTimeout"] : null);
            echo " ,
\t\t\t\t\t\t\tautoplaySpeed: ";
            // line 218
            echo (isset($context["autoplaySpeed"]) ? $context["autoplaySpeed"] : null);
            echo " ,
\t\t\t\t\t\t\tstartPosition: ";
            // line 219
            echo (isset($context["startPosition"]) ? $context["startPosition"] : null);
            echo " ,
\t\t\t\t\t\t\tmouseDrag: ";
            // line 220
            echo (isset($context["mouseDrag"]) ? $context["mouseDrag"] : null);
            echo ",
\t\t\t\t\t\t\ttouchDrag: ";
            // line 221
            echo (isset($context["touchDrag"]) ? $context["touchDrag"] : null);
            echo " ,
\t\t\t\t\t\t\tautoWidth: false,
\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t0: \t{ items: ";
            // line 224
            echo (isset($context["nb_column4"]) ? $context["nb_column4"] : null);
            echo " } ,
\t\t\t\t\t\t\t\t480: { items: ";
            // line 225
            echo (isset($context["nb_column3"]) ? $context["nb_column3"] : null);
            echo " },
\t\t\t\t\t\t\t\t768: { items: ";
            // line 226
            echo (isset($context["nb_column2"]) ? $context["nb_column2"] : null);
            echo " },
\t\t\t\t\t\t\t\t992: { items: ";
            // line 227
            echo (isset($context["nb_column1"]) ? $context["nb_column1"] : null);
            echo " },
\t\t\t\t\t\t\t\t1200: {items: ";
            // line 228
            echo (isset($context["nb_column0"]) ? $context["nb_column0"] : null);
            echo "}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tdotClass: \"owl2-dot\",
\t\t\t\t\t\t\tdotsClass: \"owl2-dots\",
\t\t\t\t\t\t\tdots: ";
            // line 232
            echo (isset($context["dots"]) ? $context["dots"] : null);
            echo " ,
\t\t\t\t\t\t\tdotsSpeed:";
            // line 233
            echo (isset($context["dotsSpeed"]) ? $context["dotsSpeed"] : null);
            echo " ,
\t\t\t\t\t\t\tnav: ";
            // line 234
            echo (isset($context["nav"]) ? $context["nav"] : null);
            echo " ,
\t\t\t\t\t\t\tloop: ";
            // line 235
            echo (isset($context["loop"]) ? $context["loop"] : null);
            echo " ,
\t\t\t\t\t\t\tnavSpeed: ";
            // line 236
            echo (isset($context["navSpeed"]) ? $context["navSpeed"] : null);
            echo " ,
\t\t\t\t\t\t\tnavText: [\"";
            // line 237
            echo (isset($context["btn_prev"]) ? $context["btn_prev"] : null);
            echo " \", \"";
            echo (isset($context["btn_next"]) ? $context["btn_next"] : null);
            echo " \"],
\t\t\t\t\t\t\tnavClass: [\"owl2-prev\", \"owl2-next\"]

\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translate.owl.carousel2\", function (e) {
\t\t\t\t        \t";
            // line 243
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                echo " 
\t\t\t\t        \tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t        \t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t}
\t\t\t\t        \t";
            }
            // line 249
            echo " 
\t\t\t\t        \tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t        \t_UngetAnimate(\$item_active);
\t\t\t\t        \t_getAnimate(\$item_active);
\t\t\t\t        });
\t\t\t\t        \$extraslider.on(\"translated.owl.carousel2\", function (e) {
\t\t\t\t        \t";
            // line 255
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                echo " 
\t\t\t\t        \tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t        \t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t}
\t\t\t\t        \t";
            }
            // line 261
            echo " 
\t\t\t\t        \tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t        \tvar \$item = \$(\".owl2-item\", \$element);
\t\t\t\t        \t_UngetAnimate(\$item);
\t\t\t\t        \tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t        \t\t_getAnimate(\$item_active);
\t\t\t\t        \t} else {
\t\t\t\t        \t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t        \t}
\t\t\t\t        });
\t\t\t\t        function _getAnimate(\$el) {
\t\t\t\t        \tif (_effect == \"none\") return;
\t\t\t\t        \t//if (\$.browser.msie && parseInt(\$.browser.version, 10) <= 9) return;
\t\t\t\t        \t\$extraslider.removeClass(\"extra-animate\");
\t\t\t\t        \t\$el.each(function (i) {
\t\t\t\t        \t\tvar \$_el = \$(this);
\t\t\t\t        \t\tvar i= i + 1;
\t\t\t\t        \t\t\$(this).css({
\t\t\t\t        \t\t\t\"-webkit-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"-moz-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"-o-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"-webkit-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t\"-moz-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t\"-o-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t\"animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t
\t\t\t\t        \t\t}).animate({
\t\t\t\t        \t\t\t
\t\t\t\t        \t\t});
\t\t\t\t        \t\tif (i == \$el.size() - 1) {
\t\t\t\t        \t\t\t\$extraslider.addClass(\"extra-animate\");
\t\t\t\t        \t\t}
\t\t\t\t        \t});
\t\t\t\t        }
\t\t\t\t        function _UngetAnimate(\$el) {
\t\t\t\t        \t\$el.each(function (i) {
\t\t\t\t        \t\t\$(this).css({
\t\t\t\t        \t\t\t\"animation\": \"\",
\t\t\t\t        \t\t\t\"-webkit-animation\": \"\",
\t\t\t\t        \t\t\t\"-moz-animation\": \"\",
\t\t\t\t        \t\t\t\"-o-animation\": \"\",
\t\t\t\t        \t\t});
\t\t\t\t        \t});
\t\t\t\t        } 
\t\t\t\t\t})(\"#";
            // line 306
            echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
            echo " \");
\t\t\t\t});
\t\t\t\t//]]>
\t\t\t</script>

\t\t\t</div>
\t\t";
        }
        // line 313
        echo "\t
\t</div> 
\t";
        // line 315
        if ( !twig_test_empty(trim((isset($context["post_text"]) ? $context["post_text"] : null)))) {
            echo " 
\t\t<div class=\"form-group\">
\t\t\t";
            // line 317
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 320
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_extra_slider/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  748 => 320,  742 => 317,  737 => 315,  733 => 313,  723 => 306,  676 => 261,  666 => 255,  658 => 249,  648 => 243,  637 => 237,  633 => 236,  629 => 235,  625 => 234,  621 => 233,  617 => 232,  610 => 228,  606 => 227,  602 => 226,  598 => 225,  594 => 224,  588 => 221,  584 => 220,  580 => 219,  576 => 218,  572 => 217,  568 => 216,  564 => 215,  560 => 214,  556 => 213,  552 => 212,  546 => 208,  540 => 204,  533 => 201,  530 => 200,  520 => 193,  506 => 182,  502 => 181,  498 => 180,  486 => 170,  478 => 168,  472 => 166,  457 => 153,  451 => 151,  446 => 149,  442 => 147,  438 => 146,  432 => 143,  425 => 142,  422 => 141,  418 => 140,  413 => 137,  402 => 134,  400 => 133,  397 => 132,  392 => 130,  386 => 128,  383 => 127,  379 => 126,  375 => 124,  372 => 123,  370 => 122,  366 => 120,  360 => 117,  355 => 116,  351 => 115,  347 => 113,  341 => 111,  336 => 109,  331 => 107,  328 => 106,  321 => 102,  313 => 101,  308 => 99,  299 => 92,  290 => 89,  280 => 86,  276 => 85,  273 => 84,  264 => 83,  259 => 82,  252 => 78,  245 => 76,  240 => 74,  237 => 73,  235 => 72,  230 => 69,  225 => 68,  221 => 67,  217 => 65,  211 => 64,  207 => 63,  200 => 58,  192 => 57,  185 => 55,  178 => 54,  176 => 53,  166 => 52,  157 => 50,  148 => 46,  144 => 44,  137 => 42,  134 => 41,  130 => 40,  126 => 39,  115 => 37,  112 => 36,  109 => 35,  106 => 34,  103 => 33,  100 => 32,  98 => 31,  95 => 30,  93 => 29,  89 => 28,  84 => 27,  76 => 22,  73 => 21,  71 => 20,  66 => 17,  60 => 14,  55 => 12,  52 => 11,  47 => 8,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- default Grid  -->*/
/* <div class="module {{direction_class}} {{ class_suffix }}">*/
/* 	{% if disp_title_module %} */
/* 		<h3 class="modtitle">{{ head_name }}*/
/* 			{% if (category|length == 1) %} */
/* 				<a class="viewall" href="{{linkCategory}}"> {{ text_view_all }} <i class="fa fa-caret-right" aria-hidden="true"></i></a>*/
/* 			{% endif %}*/
/* 		</h3>*/
/* 		*/
/* 	{% endif %}*/
/* */
/* 	{% if pre_text|trim is not empty  %} */
/* 		<div class="form-group col-pre">*/
/* 			{{ pre_text }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	<div class="modcontent">*/
/* 		*/
/* 		{% if products is empty %}*/
/* 			<div class="alert alert-info"><i class="fa fa-info-circle"></i> */
/* 				{{ text_noproduct }}*/
/* 				<button type="button" class="close" data-dismiss="alert">×</button>*/
/* 			</div>*/
/* */
/* 		{% else %}*/
/* 			{% set count_item 	= products|length %}	*/
/* 			{% set cls_btn_page =  (button_page  ==  'top') ? 'buttom-type1':'button-type2' %}	*/
/* 			{% set btn_type 	=  (button_page  ==  'top') ? 'button-type1':'button-type2'%}*/
/* 			*/
/* 			{% set tag_id = 'so_extra_slider_'~suffix %}*/
/* 			{% set class_respl = 'preset00-'~nb_column0~' preset01-'~nb_column1~' preset02-'~nb_column2~' preset03-'~nb_column3~' preset04-'~nb_column4 %}*/
/* 			{% set btn_prev = (button_page == 'top') ? '&#171':'&#139' %}*/
/* 			{% set btn_next = (button_page == 'top') ? '&#187':'&#155' %}*/
/* 			{% set i = 0 %}*/
/* */
/* 			<div id="{{tag_id}}" class="so-extraslider {{cls_btn_page}} {{class_respl}} {{btn_type}}">*/
/* 				<!-- Begin extraslider-inner -->*/
/* 				<div class="extraslider-inner products-list " data-effect="{{effect}}">*/
/* 					{% for i, product in products %}*/
/* 						{% set i = i + 1 %}*/
/* 						{% if i % nb_rows  ==  1  or  nb_rows  ==  1 %} */
/* 						<div class="item ">*/
/* 						{% endif %} */
/* 							*/
/* 							<div class="product-layout product-grid pro-row-{{ i }} {{ products_style }} ">*/
/* 							*/
/* 								<div class="product-item-container">*/
/* 									<div class="left-block">									*/
/* 										<div class="product-image-container {% if product_image_num  == 2 %} {{ 'second_img' }} {% endif %}	">*/
/* 											<div class="image">*/
/* 											<a href="{{ product.href }}" data-product='{{ product.product_id }}' target="{{ item_link_target }}" title="{{ product.nameFull }} "  >*/
/* 												{% if product_image_num ==2 %}*/
/* 													<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" class="img-1 lazyload" alt="{{ product.nameFull }}">*/
/* 													<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb2 }}" class="img-2 lazyload" alt="{{ product.nameFull }}">*/
/* 												{% else %}*/
/* 													<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" alt="{{ product.nameFull }}" class="lazyload">*/
/* 												{% endif %}		*/
/* 											</a>*/
/* 											</div>						*/
/* 										</div>*/
/* 										<div class="box-label">*/
/* 											{% if product.special  and  display_sale  %} */
/* 												<span class="label-product label-sale">{# {{ objlang.get('text_sale') }} #} {{ product.discount }}  </span>*/
/* 											{% endif %} */
/* */
/* 											{% if product.productNew  and  display_new  %} */
/* 												<span class="label-product label-new">{{ objlang.get('text_new') }} </span>*/
/* 											{% endif %} 											*/
/* 										</div>*/
/* */
/* 										{% if display_compare or display_add_to_cart or display_wishlist %}*/
/* 										<div class="button-group cartinfo--center so-quickview">*/
/* 											{% if display_add_to_cart  %} */
/* 											<div class="btn-addToCart">*/
/* 												<button type="button" class="addToCart btn-button" title="{{ objlang.get('button_cart') }}" onclick="cart.add('{{ product.product_id }} ');">*/
/* 													<i class="fa fa-shopping-cart"></i>*/
/* 													<span>{{ objlang.get('button_cart') }} </span>						*/
/* 												</button>*/
/* 											</div>*/
/* 											{% endif %}*/
/* 											{% if display_wishlist  %} */
/* 											<button type="button" class="wishlist btn-button" title="{{ objlang.get('button_wishlist') }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart-o"></i><span>{{ objlang.get('button_wishlist') }}</span></button>*/
/* 											{% endif %} */
/* 											{% if display_compare %} */
/* 											<button type="button" class="compare btn-button" title="{{ objlang.get('button_compare') }} " onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-refresh"></i><span>{{ objlang.get('button_compare') }}</span></button>*/
/* */
/* 											{% endif %}*/
/* 											<a class="hidden" data-product='{{ product.product_id }}' href="{{ product.link }}"></a>*/
/* 										</div>*/
/* 										{% endif %}*/
/* 																	*/
/* 									</div>*/
/* */
/* 									<div class="right-block">*/
/* 										*/
/* 										<div class="caption">*/
/* */
/* 											{% if display_title %} */
/* 												<h4>*/
/* 													<a href="{{ product.href }}" target="{{ item_link_target }}" title="{{ product.nameFull }} "  >*/
/* 														{{ product.name }} */
/* 													</a>*/
/* 												</h4>*/
/* 											{% endif %}*/
/* */
/* 											{% if display_price %} */
/* 												<div  class="price">*/
/* 													{% if not product.special %} */
/* 														<span class="price-new">*/
/* 															{{ product.price }} */
/* 														</span>*/
/* 													{% else %}   */
/* 														*/
/* 														<span class="price-old">{{ product.price }} </span>*/
/* 														<span class="price-new">{{ product.special }} </span>*/
/* 													{% endif %} */
/* 													*/
/* 												</div>*/
/* 											{% endif %} */
/* 											*/
/* 											{% if display_rating %}*/
/* 												{% if product.rating %}*/
/* 													<div class="rating">*/
/* 														<div class="rating-box">*/
/* 														{% for k in 1..5 %}*/
/* 															*/
/* 															{% if product.rating < k %} */
/* 																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 														 	{% else %}   */
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>*/
/* 															{% endif %} */
/* 															{% set k = k + 1 %}*/
/* 														{% endfor %} */
/* 														</div>*/
/* 													</div>*/
/* 												{% else %}  */
/* 												<div class="rating">*/
/* 													<div class="rating-box">*/
/* 													{% for j in 1..5 %}*/
/* 														{% set j = j + 1 %}*/
/* 														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 													{% endfor %} 	*/
/* 													</div>												*/
/* 												</div>*/
/* 												{% endif %}	*/
/* 											{% endif %}	*/
/* */
/* 											{% if display_description %} */
/* 												<div class="item-des">*/
/* 													{{ product.description }} */
/* 												</div>*/
/* 											{% endif %} */
/* 																						*/
/* 										</div>*/
/* 										*/
/* 									</div>*/
/* */
/* 									*/
/* 					*/
/* 								</div>*/
/* 								<!-- End item-wrap-inner -->*/
/* 							</div>*/
/* 							<!-- End item-wrap -->*/
/* */
/* 						{% if i % nb_rows  ==  0  or  i  ==  count_item %} */
/* 						</div>*/
/* 						{% endif %} */
/* */
/* 					{% endfor %}	 */
/* 				</div>*/
/* 				<!--End extraslider-inner -->*/
/* */
/* 				<script type="text/javascript">*/
/* 				//<![CDATA[*/
/* 				jQuery(document).ready(function ($) {*/
/* 					(function (element) {*/
/* 						var $element = $(element),*/
/* 								$extraslider = $(".extraslider-inner", $element),*/
/* 								_delay = {{ delay }} ,*/
/* 								_duration = {{ duration }} ,*/
/* 								_effect = '{{ effect }} ';*/
/* */
/* 						$extraslider.on("initialized.owl.carousel2", function () {*/
/* 							var $item_active = $(".owl2-item.active", $element);*/
/* 							if ($item_active.length > 1 && _effect != "none") {*/
/* 								_getAnimate($item_active);*/
/* 							}*/
/* 							else {*/
/* 								var $item = $(".owl2-item", $element);*/
/* 								$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});*/
/* 							}*/
/* 							{% if dots  ==  "true" %} */
/* 							if ($(".owl2-dot", $element).length < 2) {*/
/* 								$(".owl2-prev", $element).css("display", "none");*/
/* 								$(".owl2-next", $element).css("display", "none");*/
/* 								$(".owl2-dot", $element).css("display", "none");*/
/* 							}*/
/* 							{% endif %}*/
/* */
/* 							{% if button_page  ==  "top" %} */
/* 								$(".owl2-controls", $element).insertBefore($extraslider);*/
/* 								$(".owl2-dots", $element).insertAfter($(".owl2-prev", $element));*/
/* 							{% else %}  */
/* 								$(".owl2-nav", $element).insertBefore($extraslider);*/
/* 								$(".owl2-controls", $element).insertAfter($extraslider);*/
/* 							{% endif %}*/
/* */
/* 						});*/
/* */
/* 						$extraslider.owlCarousel2({*/
/* 							rtl: {{ direction}},*/
/* 							margin: {{ margin }},*/
/* 							slideBy: {{ slideBy }},*/
/* 							autoplay: {{ autoplay }},*/
/* 							autoplayHoverPause: {{ autoplayHoverPause  }},*/
/* 							autoplayTimeout: {{ autoplayTimeout }} ,*/
/* 							autoplaySpeed: {{ autoplaySpeed }} ,*/
/* 							startPosition: {{ startPosition }} ,*/
/* 							mouseDrag: {{ mouseDrag }},*/
/* 							touchDrag: {{ touchDrag }} ,*/
/* 							autoWidth: false,*/
/* 							responsive: {*/
/* 								0: 	{ items: {{ nb_column4 }} } ,*/
/* 								480: { items: {{ nb_column3 }} },*/
/* 								768: { items: {{ nb_column2 }} },*/
/* 								992: { items: {{ nb_column1 }} },*/
/* 								1200: {items: {{ nb_column0 }}}*/
/* 							},*/
/* 							dotClass: "owl2-dot",*/
/* 							dotsClass: "owl2-dots",*/
/* 							dots: {{ dots }} ,*/
/* 							dotsSpeed:{{ dotsSpeed }} ,*/
/* 							nav: {{ nav }} ,*/
/* 							loop: {{ loop }} ,*/
/* 							navSpeed: {{ navSpeed }} ,*/
/* 							navText: ["{{ btn_prev }} ", "{{ btn_next }} "],*/
/* 							navClass: ["owl2-prev", "owl2-next"]*/
/* */
/* 						});*/
/* */
/* 						$extraslider.on("translate.owl.carousel2", function (e) {*/
/* 				        	{% if dots  ==  "true" %} */
/* 				        	if ($(".owl2-dot", $element).length < 2) {*/
/* 				        		$(".owl2-prev", $element).css("display", "none");*/
/* 				        		$(".owl2-next", $element).css("display", "none");*/
/* 				        		$(".owl2-dot", $element).css("display", "none");*/
/* 				        	}*/
/* 				        	{% endif %} */
/* 				        	var $item_active = $(".owl2-item.active", $element);*/
/* 				        	_UngetAnimate($item_active);*/
/* 				        	_getAnimate($item_active);*/
/* 				        });*/
/* 				        $extraslider.on("translated.owl.carousel2", function (e) {*/
/* 				        	{% if dots  ==  "true" %} */
/* 				        	if ($(".owl2-dot", $element).length < 2) {*/
/* 				        		$(".owl2-prev", $element).css("display", "none");*/
/* 				        		$(".owl2-next", $element).css("display", "none");*/
/* 				        		$(".owl2-dot", $element).css("display", "none");*/
/* 				        	}*/
/* 				        	{% endif %} */
/* 				        	var $item_active = $(".owl2-item.active", $element);*/
/* 				        	var $item = $(".owl2-item", $element);*/
/* 				        	_UngetAnimate($item);*/
/* 				        	if ($item_active.length > 1 && _effect != "none") {*/
/* 				        		_getAnimate($item_active);*/
/* 				        	} else {*/
/* 				        		$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});*/
/* 				        	}*/
/* 				        });*/
/* 				        function _getAnimate($el) {*/
/* 				        	if (_effect == "none") return;*/
/* 				        	//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;*/
/* 				        	$extraslider.removeClass("extra-animate");*/
/* 				        	$el.each(function (i) {*/
/* 				        		var $_el = $(this);*/
/* 				        		var i= i + 1;*/
/* 				        		$(this).css({*/
/* 				        			"-webkit-animation": _effect + " " + _duration + "ms ease both",*/
/* 				        			"-moz-animation": _effect + " " + _duration + "ms ease both",*/
/* 				        			"-o-animation": _effect + " " + _duration + "ms ease both",*/
/* 				        			"animation": _effect + " " + _duration + "ms ease both",*/
/* 				        			"-webkit-animation-delay": +i * _delay + "ms",*/
/* 				        			"-moz-animation-delay": +i * _delay + "ms",*/
/* 				        			"-o-animation-delay": +i * _delay + "ms",*/
/* 				        			"animation-delay": +i * _delay + "ms",*/
/* 				        			*/
/* 				        		}).animate({*/
/* 				        			*/
/* 				        		});*/
/* 				        		if (i == $el.size() - 1) {*/
/* 				        			$extraslider.addClass("extra-animate");*/
/* 				        		}*/
/* 				        	});*/
/* 				        }*/
/* 				        function _UngetAnimate($el) {*/
/* 				        	$el.each(function (i) {*/
/* 				        		$(this).css({*/
/* 				        			"animation": "",*/
/* 				        			"-webkit-animation": "",*/
/* 				        			"-moz-animation": "",*/
/* 				        			"-o-animation": "",*/
/* 				        		});*/
/* 				        	});*/
/* 				        } */
/* 					})("#{{ tag_id  }} ");*/
/* 				});*/
/* 				//]]>*/
/* 			</script>*/
/* */
/* 			</div>*/
/* 		{% endif %}*/
/* 	*/
/* 	</div> */
/* 	{% if post_text|trim is not empty  %} */
/* 		<div class="form-group">*/
/* 			{{ post_text  }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* </div>*/
