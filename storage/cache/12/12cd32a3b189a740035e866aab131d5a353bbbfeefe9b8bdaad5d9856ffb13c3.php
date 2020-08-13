<?php

/* so-buyshop/template/extension/module/so_listing_tabs/default/default_items.twig */
class __TwigTemplate_a02b0cf812bd9e492eb4bcf90c6ef095102c480fdcd8f9b5b08e1d0e2f7b0e3b extends Twig_Template
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
        if (((isset($context["type_show"]) ? $context["type_show"] : null) == "slider")) {
            // line 2
            echo "\t\t<div class=\"ltabs-items-inner owl2-carousel  ltabs-slider \">
";
        } else {
            // line 4
            echo "\t\t<div class=\"ltabs-items-inner ";
            echo ((((isset($context["type_show"]) ? $context["type_show"] : null) == "loadmore")) ? ((((isset($context["class_ltabs"]) ? $context["class_ltabs"] : null) . " ") . (isset($context["effect"]) ? $context["effect"] : null))) : (" "));
            echo "\">
";
        }
        // line 6
        if ( !twig_test_empty((isset($context["child_items"]) ? $context["child_items"] : null))) {
            // line 7
            echo "\t";
            $context["i"] = 0;
            // line 8
            echo "\t";
            $context["k"] = ((array_key_exists("rl_loaded", $context)) ? ((isset($context["rl_loaded"]) ? $context["rl_loaded"] : null)) : (0));
            // line 9
            echo "\t";
            $context["count"] = twig_length_filter($this->env, (isset($context["child_items"]) ? $context["child_items"] : null));
            // line 10
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["child_items"]) ? $context["child_items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 11
                echo "\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 12
                echo "\t\t\t";
                $context["k"] = ((isset($context["k"]) ? $context["k"] : null) + 1);
                // line 13
                echo "\t\t\t
\t\t\t";
                // line 14
                if ((((isset($context["type_show"]) ? $context["type_show"] : null) == "slider") && ((((isset($context["i"]) ? $context["i"] : null) % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 1) || ((isset($context["nb_rows"]) ? $context["nb_rows"] : null) == 1)))) {
                    // line 15
                    echo "\t\t\t\t<div class=\"ltabs-item \">
\t\t\t";
                }
                // line 17
                echo "\t\t\t";
                if (((isset($context["type_show"]) ? $context["type_show"] : null) == "loadmore")) {
                    // line 18
                    echo "\t\t\t\t<div class=\"ltabs-item new-ltabs-item\" >
\t\t\t";
                }
                // line 19
                echo "\t\t\t
\t\t\t<div class=\"item-inner product-layout transition product-grid\">

\t\t\t\t<div class=\"product-item-container\">
\t\t\t\t\t<div class=\"left-block\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 24
                if ((isset($context["product_image"]) ? $context["product_image"] : null)) {
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"product-image-container ";
                    // line 25
                    if (((isset($context["product_image_num"]) ? $context["product_image_num"] : null) == 2)) {
                        echo " ";
                        echo "second_img";
                        echo " ";
                    }
                    echo "\t\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 26
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" data-product='";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "' target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name_maxlength", array());
                    echo "\"  >
\t\t\t\t\t\t\t\t\t";
                    // line 27
                    if (((isset($context["product_image_num"]) ? $context["product_image_num"] : null) == 2)) {
                        // line 28
                        echo "\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" class=\"img-1 lazyload\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        // line 29
                        echo $this->getAttribute($context["product"], "thumb2", array());
                        echo "\" class=\"img-2 lazyload\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" class=\"lazyload\">
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t
\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 35
                echo "\t
\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
                // line 37
                if (($this->getAttribute($context["product"], "productNew", array()) && (isset($context["display_new"]) ? $context["display_new"] : null))) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_new"), "method");
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["product"], "special", array()) && (isset($context["display_sale"]) ? $context["display_sale"] : null))) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">";
                    echo $this->getAttribute($context["product"], "discount", array());
                    echo " \t</span>
\t\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 44
                if ((((isset($context["display_add_to_cart"]) ? $context["display_add_to_cart"] : null) || (isset($context["display_compare"]) ? $context["display_compare"] : null)) || (isset($context["display_wishlist"]) ? $context["display_wishlist"] : null))) {
                    // line 45
                    echo "\t\t\t\t\t\t<div class=\"button-group so-quickview\">\t\t\t\t\t\t\t

\t\t\t\t\t\t\t";
                    // line 47
                    if ((isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) {
                        echo " 
\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist btn-button\" title=\"";
                        // line 48
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_wishlist"), "method");
                        echo "\" onclick=\"wishlist.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"fa fa-heart-o\"></i><span>";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_wishlist"), "method");
                        echo "</span></button>
\t\t\t\t\t\t\t";
                    }
                    // line 49
                    echo " 

\t\t\t\t\t\t\t";
                    // line 51
                    if ((isset($context["display_compare"]) ? $context["display_compare"] : null)) {
                        echo " 
\t\t\t\t\t\t\t<button type=\"button\" class=\"compare btn-button\" title=\"";
                        // line 52
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_compare"), "method");
                        echo " \" onclick=\"compare.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"fa fa-refresh\"></i><span>";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_compare"), "method");
                        echo "</span></button>
\t\t\t\t\t\t\t";
                    }
                    // line 54
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                    // line 55
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "' href=\"";
                    echo $this->getAttribute($context["product"], "link", array());
                    echo "\"></a>

\t\t\t\t\t\t\t";
                    // line 57
                    if ((isset($context["display_add_to_cart"]) ? $context["display_add_to_cart"] : null)) {
                        echo " 
\t\t\t\t\t\t\t<div class=\"btn-addToCart\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addToCart btn-button\" title=\"";
                        // line 59
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                        echo "\" onclick=\"cart.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo " ');\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i> 
\t\t\t\t\t\t\t\t\t<span>";
                        // line 61
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                        echo " </span>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 65
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 66
                echo " 

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 71
                if (((((isset($context["display_title"]) ? $context["display_title"] : null) || (isset($context["display_description"]) ? $context["display_description"] : null)) || (isset($context["display_price"]) ? $context["display_price"] : null)) || (isset($context["display_rating"]) ? $context["display_rating"] : null))) {
                    // line 72
                    echo "\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t";
                    // line 76
                    if ((isset($context["display_title"]) ? $context["display_title"] : null)) {
                        // line 77
                        echo "\t\t\t\t\t\t\t\t<h4><a href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" target=\"";
                        echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                        echo "\">";
                        echo $this->getAttribute($context["product"], "name_maxlength", array());
                        echo "</a></h4>
\t\t\t\t\t\t\t";
                    }
                    // line 79
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 80
                    if (($this->getAttribute($context["product"], "price", array()) && (isset($context["display_price"]) ? $context["display_price"] : null))) {
                        // line 81
                        echo "\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t  \t";
                        // line 82
                        if (twig_test_empty($this->getAttribute($context["product"], "special", array()))) {
                            // line 83
                            echo "\t\t\t\t\t\t\t\t  \t\t";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "
\t\t\t\t\t\t\t\t  \t";
                        } else {
                            // line 85
                            echo "\t\t\t\t\t\t\t\t  \t\t<span class=\"price-old\">";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "</span>
\t\t\t\t\t\t\t\t  \t\t<span class=\"price-new\">";
                            // line 86
                            echo $this->getAttribute($context["product"], "special", array());
                            echo "</span>
\t\t\t\t\t\t\t\t  \t\t
\t\t\t\t\t\t\t\t  \t";
                        }
                        // line 89
                        echo "\t\t\t\t\t\t\t\t  \t";
                        if ($this->getAttribute($context["product"], "tax", array())) {
                            // line 90
                            echo "\t\t\t\t\t\t\t\t  \t\t<span class=\"price-tax hidden\">";
                            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_tax"), "method");
                            echo " ";
                            echo $this->getAttribute($context["product"], "tax", array());
                            echo "</span>
\t\t\t\t\t\t\t\t  \t";
                        }
                        // line 92
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 93
                    echo "\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 95
                    if ((isset($context["display_rating"]) ? $context["display_rating"] : null)) {
                        // line 96
                        echo "\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t  \t";
                        // line 98
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                            // line 99
                            echo "\t\t\t\t\t\t\t\t  \t\t";
                            if (($this->getAttribute($context["product"], "rating", array()) < $context["j"])) {
                                // line 100
                                echo "\t\t\t\t\t\t\t\t  \t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t  \t\t";
                            } else {
                                // line 102
                                echo "\t\t\t\t\t\t\t\t  \t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t  \t\t";
                            }
                            // line 104
                            echo "\t\t\t\t\t\t\t\t  \t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 105
                        echo "\t\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 110
                    if ((isset($context["display_description"]) ? $context["display_description"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t<div class=\"item-des\">
\t\t\t\t\t\t\t\t\t";
                        // line 112
                        echo $this->getAttribute($context["product"], "description_maxlength", array());
                        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 115
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 118
                echo "
\t\t\t\t\t\t";
                // line 119
                if ((((isset($context["display_add_to_cart"]) ? $context["display_add_to_cart"] : null) || (isset($context["display_compare"]) ? $context["display_compare"] : null)) || (isset($context["display_wishlist"]) ? $context["display_wishlist"] : null))) {
                    // line 120
                    echo "\t\t\t\t\t\t<div class=\"button-group cartinfo--bottom\">\t
\t\t\t\t\t\t\t";
                    // line 121
                    if ((isset($context["display_add_to_cart"]) ? $context["display_add_to_cart"] : null)) {
                        echo " 
\t\t\t\t\t\t\t<div class=\"btn-addToCart\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addToCart btn-button\" title=\"";
                        // line 123
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                        echo "\" onclick=\"cart.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo " ');\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i> 
\t\t\t\t\t\t\t\t\t<span>";
                        // line 125
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                        echo " </span>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 129
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"button-group-in so-quickview\">\t\t\t\t\t\t

\t\t\t\t\t\t\t\t";
                    // line 132
                    if ((isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist btn-button\" title=\"";
                        // line 133
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_wishlist"), "method");
                        echo "\" onclick=\"wishlist.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"fa fa-heart-o\"></i><span>";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_wishlist"), "method");
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 134
                    echo " 

\t\t\t\t\t\t\t\t";
                    // line 136
                    if ((isset($context["display_compare"]) ? $context["display_compare"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare btn-button\" title=\"";
                        // line 137
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_compare"), "method");
                        echo " \" onclick=\"compare.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"fa fa-refresh\"></i><span>";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_compare"), "method");
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 139
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                    // line 140
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "' href=\"";
                    echo $this->getAttribute($context["product"], "link", array());
                    echo "\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 144
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                // line 150
                if ((((isset($context["type_show"]) ? $context["type_show"] : null) == "slider") && ((((isset($context["i"]) ? $context["i"] : null) % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 0) || ((isset($context["i"]) ? $context["i"] : null) == (isset($context["count"]) ? $context["count"] : null))))) {
                    // line 151
                    echo "\t\t\t</div>
\t\t\t";
                }
                // line 153
                echo "\t\t\t
\t\t\t";
                // line 154
                if (((isset($context["type_show"]) ? $context["type_show"] : null) == "loadmore")) {
                    // line 155
                    echo "\t\t\t</div>
\t\t\t";
                }
                // line 157
                echo "
\t\t\t";
                // line 158
                if (((isset($context["type_show"]) ? $context["type_show"] : null) == "loadmore")) {
                    // line 159
                    echo "\t\t\t\t";
                    $context["clear"] = "clr1";
                    // line 160
                    echo "\t\t\t\t";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 2) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr2");
                        echo " ";
                    }
                    // line 161
                    echo "\t\t\t\t";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 3) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr3");
                        echo " ";
                    }
                    // line 162
                    echo "\t\t\t\t";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 4) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr4");
                        echo " ";
                    }
                    // line 163
                    echo "\t\t\t\t";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 5) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr5");
                        echo " ";
                    }
                    // line 164
                    echo "\t\t\t\t";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 6) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr6");
                        echo " ";
                    }
                    // line 165
                    echo "\t\t\t\t<div class=\"";
                    echo (isset($context["clear"]) ? $context["clear"] : null);
                    echo "\"></div>
\t\t\t";
                }
                // line 167
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "\t";
        }
        // line 169
        echo "</div>

";
        // line 171
        if (((isset($context["type_show"]) ? $context["type_show"] : null) == "slider")) {
            // line 172
            echo "<script type=\"text/javascript\">
\tjQuery(document).ready(function(\$){
\t\tvar \$tag_id = \$('#";
            // line 174
            echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
            echo "'), 
\t\tparent_active = \t\$('.items-category-";
            // line 175
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "', \$tag_id),
\t\ttotal_product = parent_active.data('total'),
\t\ttab_active = \$('.ltabs-items-inner',parent_active),
\t\tnb_column0 = ";
            // line 178
            echo (isset($context["nb_column0"]) ? $context["nb_column0"] : null);
            echo ",
\t\tnb_column1 = ";
            // line 179
            echo (isset($context["nb_column1"]) ? $context["nb_column1"] : null);
            echo ",
\t\tnb_column2 = ";
            // line 180
            echo (isset($context["nb_column2"]) ? $context["nb_column2"] : null);
            echo ",
\t\tnb_column3 = ";
            // line 181
            echo (isset($context["nb_column3"]) ? $context["nb_column3"] : null);
            echo ",
\t\tnb_column4 = ";
            // line 182
            echo (isset($context["nb_column4"]) ? $context["nb_column4"] : null);
            echo ";
\t\ttab_active.owlCarousel2({
\t\t\trtl: ";
            // line 184
            echo (isset($context["direction"]) ? $context["direction"] : null);
            echo ",
\t\t\tnav: ";
            // line 185
            echo (isset($context["display_nav"]) ? $context["display_nav"] : null);
            echo ",
\t\t\tdots: false,\t
\t\t\tmargin: 0,
\t\t\tloop:  ";
            // line 188
            echo (isset($context["display_loop"]) ? $context["display_loop"] : null);
            echo ",
\t\t\tautoplay: ";
            // line 189
            echo (isset($context["autoplay"]) ? $context["autoplay"] : null);
            echo ",
\t\t\tautoplayHoverPause: ";
            // line 190
            echo (isset($context["pausehover"]) ? $context["pausehover"] : null);
            echo ",
\t\t\tautoplayTimeout: ";
            // line 191
            echo (isset($context["autoplayTimeout"]) ? $context["autoplayTimeout"] : null);
            echo ",
\t\t\tautoplaySpeed: ";
            // line 192
            echo (isset($context["autoplaySpeed"]) ? $context["autoplaySpeed"] : null);
            echo ",
\t\t\tmouseDrag: ";
            // line 193
            echo (isset($context["mousedrag"]) ? $context["mousedrag"] : null);
            echo ",
\t\t\ttouchDrag: ";
            // line 194
            echo (isset($context["touchdrag"]) ? $context["touchdrag"] : null);
            echo ",
\t\t\tnavRewind: true,
\t\t\tnavText: [ '', '' ],
\t\t\tresponsive: {
\t\t\t\t0: {
\t\t\t\t\titems: nb_column4,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 200
            echo (isset($context["display_nav"]) ? $context["display_nav"] : null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t480: {
\t\t\t\t\titems: nb_column3,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 204
            echo (isset($context["display_nav"]) ? $context["display_nav"] : null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t768: {
\t\t\t\t\titems: nb_column2,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 208
            echo (isset($context["display_nav"]) ? $context["display_nav"] : null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t992: {
\t\t\t\t\titems: nb_column1,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 212
            echo (isset($context["display_nav"]) ? $context["display_nav"] : null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t1200: {
\t\t\t\t\titems: nb_column0,
\t\t\t\t\t
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 217
            echo (isset($context["display_nav"]) ? $context["display_nav"] : null);
            echo ") ? true: false),
\t\t\t\t}
\t\t\t}
\t\t});
\t});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_listing_tabs/default/default_items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 217,  609 => 212,  602 => 208,  595 => 204,  588 => 200,  579 => 194,  575 => 193,  571 => 192,  567 => 191,  563 => 190,  559 => 189,  555 => 188,  549 => 185,  545 => 184,  540 => 182,  536 => 181,  532 => 180,  528 => 179,  524 => 178,  518 => 175,  514 => 174,  510 => 172,  508 => 171,  504 => 169,  501 => 168,  495 => 167,  489 => 165,  482 => 164,  475 => 163,  468 => 162,  461 => 161,  454 => 160,  451 => 159,  449 => 158,  446 => 157,  442 => 155,  440 => 154,  437 => 153,  433 => 151,  431 => 150,  423 => 144,  413 => 140,  410 => 139,  401 => 137,  397 => 136,  393 => 134,  384 => 133,  380 => 132,  375 => 129,  368 => 125,  361 => 123,  356 => 121,  353 => 120,  351 => 119,  348 => 118,  343 => 115,  337 => 112,  332 => 110,  328 => 108,  323 => 105,  317 => 104,  313 => 102,  309 => 100,  306 => 99,  302 => 98,  298 => 96,  296 => 95,  292 => 93,  288 => 92,  280 => 90,  277 => 89,  271 => 86,  266 => 85,  260 => 83,  258 => 82,  255 => 81,  253 => 80,  250 => 79,  238 => 77,  236 => 76,  230 => 72,  228 => 71,  221 => 66,  217 => 65,  210 => 61,  203 => 59,  198 => 57,  191 => 55,  188 => 54,  179 => 52,  175 => 51,  171 => 49,  162 => 48,  158 => 47,  154 => 45,  152 => 44,  149 => 43,  143 => 41,  140 => 40,  134 => 38,  132 => 37,  128 => 35,  122 => 32,  114 => 31,  107 => 29,  100 => 28,  98 => 27,  88 => 26,  80 => 25,  76 => 24,  69 => 19,  65 => 18,  62 => 17,  58 => 15,  56 => 14,  53 => 13,  50 => 12,  47 => 11,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  31 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if type_show == 'slider' %}*/
/* 		<div class="ltabs-items-inner owl2-carousel  ltabs-slider ">*/
/* {% else %}*/
/* 		<div class="ltabs-items-inner {{ type_show == 'loadmore' ? class_ltabs ~ ' '~ effect : ' ' }}">*/
/* {% endif %}*/
/* {% if child_items is not empty %}*/
/* 	{% set i = 0 %}*/
/* 	{% set k = rl_loaded is defined ? rl_loaded : 0 %}*/
/* 	{% set count = child_items|length %}*/
/* 		{% for product in child_items %}*/
/* 			{% set i = i + 1 %}*/
/* 			{% set k = k + 1 %}*/
/* 			*/
/* 			{% if type_show == 'slider' and (i % nb_rows == 1 or nb_rows == 1) %}*/
/* 				<div class="ltabs-item ">*/
/* 			{% endif %}*/
/* 			{% if type_show == 'loadmore' %}*/
/* 				<div class="ltabs-item new-ltabs-item" >*/
/* 			{% endif %}			*/
/* 			<div class="item-inner product-layout transition product-grid">*/
/* */
/* 				<div class="product-item-container">*/
/* 					<div class="left-block">										*/
/* 						{% if product_image %}								*/
/* 							<div class="product-image-container {% if product_image_num  == 2 %} {{ 'second_img' }} {% endif %}	">*/
/* 								<a href="{{ product.href }}" data-product='{{ product.product_id }}' target="{{ item_link_target }}" title="{{ product.name_maxlength }}"  >*/
/* 									{% if product_image_num ==2 %}*/
/* 										<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" class="img-1 lazyload" alt="{{ product.name }}">*/
/* 										<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb2 }}" class="img-2 lazyload" alt="{{ product.name }}">*/
/* 									{% else %}*/
/* 										<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" alt="{{ product.name }}" class="lazyload">*/
/* 									{% endif %}		*/
/* 								</a>						*/
/* 							</div>*/
/* 						{% endif %}	*/
/* 						<div class="box-label">*/
/* 							{% if product.productNew and display_new %}*/
/* 								<span class="label-product label-new">{{ objlang.get('text_new') }}</span>*/
/* 							{% endif %}*/
/* 							{% if product.special and display_sale %}*/
/* 								<span class="label-product label-sale">{# {{ objlang.get('text_sale') }} #}{{ product.discount }} 	</span>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 						{% if display_add_to_cart or display_compare or display_wishlist %}*/
/* 						<div class="button-group so-quickview">							*/
/* */
/* 							{% if display_wishlist  %} */
/* 							<button type="button" class="wishlist btn-button" title="{{ objlang.get('button_wishlist') }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart-o"></i><span>{{ objlang.get('button_wishlist') }}</span></button>*/
/* 							{% endif %} */
/* */
/* 							{% if display_compare %} */
/* 							<button type="button" class="compare btn-button" title="{{ objlang.get('button_compare') }} " onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-refresh"></i><span>{{ objlang.get('button_compare') }}</span></button>*/
/* 							{% endif %}*/
/* 							*/
/* 							<a class="hidden" data-product='{{ product.product_id }}' href="{{ product.link }}"></a>*/
/* */
/* 							{% if display_add_to_cart  %} */
/* 							<div class="btn-addToCart">*/
/* 								<button type="button" class="addToCart btn-button" title="{{ objlang.get('button_cart') }}" onclick="cart.add('{{ product.product_id }} ');">*/
/* 									<i class="fa fa-shopping-cart"></i> */
/* 									<span>{{ objlang.get('button_cart') }} </span>						*/
/* 								</button>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 						{% endif %} */
/* */
/* 					</div>*/
/* 					<div class="right-block">*/
/* 						*/
/* 						{% if display_title or display_description or display_price or display_rating %}*/
/* 						<div class="caption">*/
/* 							*/
/* 							*/
/* */
/* 							{% if display_title %}*/
/* 								<h4><a href="{{ product.href }}" title="{{ product.name }}" target="{{ item_link_target }}">{{ product.name_maxlength }}</a></h4>*/
/* 							{% endif %}*/
/* 							*/
/* 							{% if product.price and display_price %}*/
/* 								<div class="price">*/
/* 								  	{% if product.special is empty %}*/
/* 								  		{{ product.price }}*/
/* 								  	{% else %}*/
/* 								  		<span class="price-old">{{ product.price }}</span>*/
/* 								  		<span class="price-new">{{ product.special }}</span>*/
/* 								  		*/
/* 								  	{% endif %}*/
/* 								  	{% if product.tax %}*/
/* 								  		<span class="price-tax hidden">{{ objlang.get('text_tax') }} {{ product.tax }}</span>*/
/* 								  	{% endif %}*/
/* 								</div>*/
/* 							{% endif %}			*/
/* 							*/
/* 							{% if display_rating %}*/
/* 								<div class="rating">*/
/* 									<div class="rating-box">*/
/* 								  	{% for j in 1..5 %}*/
/* 								  		{% if product.rating < j %}*/
/* 								  			<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 								  		{% else %}*/
/* 								  			<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 								  		{% endif %}*/
/* 								  	{% endfor %}*/
/* 								  	</div>*/
/* 								</div>*/
/* 							{% endif %}*/
/* 					*/
/* 						*/
/* 							{% if display_description %} */
/* 								<div class="item-des">*/
/* 									{{ product.description_maxlength }} */
/* 								</div>*/
/* 							{% endif %}*/
/* 							*/
/* 						</div>*/
/* 						{% endif %}*/
/* */
/* 						{% if display_add_to_cart or display_compare or display_wishlist %}*/
/* 						<div class="button-group cartinfo--bottom">	*/
/* 							{% if display_add_to_cart  %} */
/* 							<div class="btn-addToCart">*/
/* 								<button type="button" class="addToCart btn-button" title="{{ objlang.get('button_cart') }}" onclick="cart.add('{{ product.product_id }} ');">*/
/* 									<i class="fa fa-shopping-cart"></i> */
/* 									<span>{{ objlang.get('button_cart') }} </span>						*/
/* 								</button>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 								*/
/* 							<div class="button-group-in so-quickview">						*/
/* */
/* 								{% if display_wishlist  %} */
/* 								<button type="button" class="wishlist btn-button" title="{{ objlang.get('button_wishlist') }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart-o"></i><span>{{ objlang.get('button_wishlist') }}</span></button>*/
/* 								{% endif %} */
/* */
/* 								{% if display_compare %} */
/* 								<button type="button" class="compare btn-button" title="{{ objlang.get('button_compare') }} " onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-refresh"></i><span>{{ objlang.get('button_compare') }}</span></button>*/
/* 								{% endif %}*/
/* 								*/
/* 								<a class="hidden" data-product='{{ product.product_id }}' href="{{ product.link }}"></a>*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 						{% endif %} */
/* 						*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 			</div>*/
/* 			{% if type_show == 'slider' and (i % nb_rows == 0 or i == count) %}*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			*/
/* 			{% if type_show == 'loadmore' %}*/
/* 			</div>*/
/* 			{% endif %}*/
/* */
/* 			{% if type_show == 'loadmore' %}*/
/* 				{% set clear = 'clr1' %}*/
/* 				{% if k % 2 == 0 %} {% set clear = clear ~' clr2' %} {% endif %}*/
/* 				{% if k % 3 == 0 %} {% set clear = clear ~' clr3' %} {% endif %}*/
/* 				{% if k % 4 == 0 %} {% set clear = clear ~' clr4' %} {% endif %}*/
/* 				{% if k % 5 == 0 %} {% set clear = clear ~' clr5' %} {% endif %}*/
/* 				{% if k % 6 == 0 %} {% set clear = clear ~' clr6' %} {% endif %}*/
/* 				<div class="{{ clear }}"></div>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* </div>*/
/* */
/* {% if type_show == 'slider' %}*/
/* <script type="text/javascript">*/
/* 	jQuery(document).ready(function($){*/
/* 		var $tag_id = $('#{{ tag_id }}'), */
/* 		parent_active = 	$('.items-category-{{ tab_id }}', $tag_id),*/
/* 		total_product = parent_active.data('total'),*/
/* 		tab_active = $('.ltabs-items-inner',parent_active),*/
/* 		nb_column0 = {{ nb_column0 }},*/
/* 		nb_column1 = {{ nb_column1 }},*/
/* 		nb_column2 = {{ nb_column2 }},*/
/* 		nb_column3 = {{ nb_column3 }},*/
/* 		nb_column4 = {{ nb_column4 }};*/
/* 		tab_active.owlCarousel2({*/
/* 			rtl: {{ direction }},*/
/* 			nav: {{ display_nav }},*/
/* 			dots: false,	*/
/* 			margin: 0,*/
/* 			loop:  {{ display_loop }},*/
/* 			autoplay: {{ autoplay }},*/
/* 			autoplayHoverPause: {{ pausehover }},*/
/* 			autoplayTimeout: {{ autoplayTimeout }},*/
/* 			autoplaySpeed: {{ autoplaySpeed }},*/
/* 			mouseDrag: {{ mousedrag }},*/
/* 			touchDrag: {{ touchdrag }},*/
/* 			navRewind: true,*/
/* 			navText: [ '', '' ],*/
/* 			responsive: {*/
/* 				0: {*/
/* 					items: nb_column4,*/
/* 					nav: total_product <= nb_column0 ? false : (({{display_nav}}) ? true: false),*/
/* 				},*/
/* 				480: {*/
/* 					items: nb_column3,*/
/* 					nav: total_product <= nb_column0 ? false : (({{display_nav}}) ? true: false),*/
/* 				},*/
/* 				768: {*/
/* 					items: nb_column2,*/
/* 					nav: total_product <= nb_column0 ? false : (({{display_nav}}) ? true: false),*/
/* 				},*/
/* 				992: {*/
/* 					items: nb_column1,*/
/* 					nav: total_product <= nb_column0 ? false : (({{display_nav}}) ? true: false),*/
/* 				},*/
/* 				1200: {*/
/* 					items: nb_column0,*/
/* 					*/
/* 					nav: total_product <= nb_column0 ? false : (({{display_nav}}) ? true: false),*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	});*/
/* </script>*/
/* {% endif %}*/
