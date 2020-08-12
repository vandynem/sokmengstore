<?php

/* so-buyshop/template/extension/module/so_megamenu/default.twig */
class __TwigTemplate_eb2e77962e28e64bee797795c51e23bffc3d6caacd266a49e4ef6a291614babf extends Twig_Template
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
        $context["suffix_id"] = ("so_megamenu_" . twig_random($this->env, 100));
        // line 2
        $context["show_verticalmenu_id"] = ("show-verticalmenu-" . twig_random($this->env, 100));
        // line 3
        $context["remove_verticalmenu_id"] = ("remove-verticalmenu-" . twig_random($this->env, 100));
        // line 4
        echo "


<div id=\"";
        // line 7
        echo (isset($context["suffix_id"]) ? $context["suffix_id"] : null);
        echo "\" class=\"responsive megamenu-style-dev ";
        echo $this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "class_menu", array());
        echo "\">
\t";
        // line 8
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 9
            echo "\t<div class=\"so-vertical-menu no-gutter\">
\t";
        }
        // line 11
        echo "\t
\t";
        // line 12
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "disp_title_module", array()) && (isset($context["head_name"]) ? $context["head_name"] : null))) {
            // line 13
            echo "\t\t<h3>";
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "</h3>
\t";
        }
        // line 15
        echo "\t<nav class=\"navbar-default\">
\t\t<div class=\"container-megamenu ";
        // line 16
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "full_width", array()) != 1)) {
            echo " ";
            echo "container";
            echo " ";
        }
        echo " ";
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            echo "vertical ";
            echo " ";
        } else {
            echo "horizontal";
        }
        echo "\">
\t\t";
        // line 17
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 18
            echo "\t\t\t<div class=\"menuHeading\">
\t\t\t\t<div class=\"megamenuToogle-wrapper\">
\t\t\t\t\t<div class=\"megamenuToogle-pattern\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div><span></span><span></span><span></span></div>
\t\t\t\t\t\t\t<span class=\"title-mega\">
\t\t\t\t\t\t\t";
            // line 24
            echo (isset($context["navigation_text"]) ? $context["navigation_text"] : null);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<span class=\"hidden\">";
            // line 31
            echo (isset($context["navigation_text"]) ? $context["navigation_text"] : null);
            echo "</span>
\t\t\t\t<button type=\"button\" id=\"";
            // line 32
            echo (isset($context["show_verticalmenu_id"]) ? $context["show_verticalmenu_id"] : null);
            echo "\" data-toggle=\"collapse\"  class=\"navbar-toggle\">
\t\t\t\t\t <span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span> 
\t\t\t\t\t
\t\t\t\t</button>
\t\t\t\t
\t\t\t</div>
\t\t";
        } else {
            // line 41
            echo "\t\t\t<div class=\"navbar-header\">
\t\t\t\t<span class=\"hidden\">";
            // line 42
            echo (isset($context["navigation_text"]) ? $context["navigation_text"] : null);
            echo "</span>
\t\t<button type=\"button\" id=\"show-megamenu\" data-toggle=\"collapse\"  class=\"navbar-toggle\">
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t
\t\t\t\t</button>
\t\t\t\t
\t\t\t</div>
\t\t";
        }
        // line 52
        echo "
\t\t";
        // line 53
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 54
            echo "\t\t\t<div class=\"vertical-wrapper\">
\t\t";
        } else {
            // line 56
            echo "\t\t\t<div class=\"megamenu-wrapper\">
\t\t";
        }
        // line 58
        echo "
\t\t";
        // line 59
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 60
            echo "\t\t\t<span id=\"";
            echo (isset($context["remove_verticalmenu_id"]) ? $context["remove_verticalmenu_id"] : null);
            echo "\" class=\"remove-verticalmenu fa fa-times\"></span>
\t\t";
        } else {
            // line 62
            echo "\t\t\t<span id=\"remove-megamenu\" class=\"fa fa-times\"></span>
\t\t";
        }
        // line 64
        echo "
\t\t\t<div class=\"megamenu-pattern\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<ul class=\"megamenu\"
\t\t\t\t\tdata-transition=\"";
        // line 68
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "animation", array()) != "")) {
            echo $this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "animation", array());
        } else {
            echo "none";
        }
        echo "\" data-animationtime=\"";
        if ((($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "animation_time", array()) > 0) && ($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "animation_time", array()) < 5000))) {
            echo $this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "animation_time", array());
        } else {
            echo 500;
        }
        echo "\">
\t\t\t\t\t\t";
        // line 69
        if ((($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "home_item", array()) == "icon") || ($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "home_item", array()) == "text"))) {
            // line 70
            echo "\t\t\t\t\t\t\t<li class=\"home\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 71
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 72
            if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "home_item", array()) == "icon")) {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t";
            } else {
                // line 75
                echo "\t\t\t\t\t\t\t\t\t<span><strong>";
                echo (isset($context["home_text"]) ? $context["home_text"] : null);
                echo "</strong></span>
\t\t\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 82
            echo "\t\t\t\t\t\t\t";
            $context["class"] = "";
            // line 83
            echo "\t\t\t\t\t\t\t";
            $context["icon_font"] = "";
            // line 84
            echo "\t\t\t\t\t\t\t";
            $context["class_link"] = "clearfix";
            // line 85
            echo "\t\t\t\t\t\t\t";
            $context["label_item"] = "";
            // line 86
            echo "\t\t\t\t\t\t\t";
            $context["title"] = false;
            // line 87
            echo "\t\t\t\t\t\t\t";
            $context["target"] = false;
            // line 88
            echo "
\t\t\t\t\t\t\t";
            // line 89
            if (twig_in_filter("no_image", $this->getAttribute($context["row"], "icon", array()))) {
                // line 90
                echo "\t\t\t\t\t\t\t\t";
                $context["icon"] = "";
                // line 91
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 92
                echo "\t\t\t\t\t\t\t\t";
                $context["icon"] = $this->getAttribute($context["row"], "icon", array());
                // line 93
                echo "\t\t\t\t\t\t\t";
            }
            // line 94
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 95
            if (($this->getAttribute($context["row"], "description", array()) != "")) {
                // line 96
                echo "\t\t\t\t\t\t\t\t";
                $context["class_link"] = ((isset($context["class_link"]) ? $context["class_link"] : null) . " description");
                // line 97
                echo "\t\t\t\t\t\t\t";
            }
            // line 98
            echo "
\t\t\t\t\t\t\t";
            // line 99
            if (((((isset($context["route"]) ? $context["route"] : null) && ((isset($context["route"]) ? $context["route"] : null) == $this->getAttribute($context["row"], "route", array()))) && (isset($context["path"]) ? $context["path"] : null)) && ((isset($context["path"]) ? $context["path"] : null) == $this->getAttribute($context["row"], "path", array())))) {
                // line 100
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " active_menu");
                // line 101
                echo "\t\t\t\t\t\t\t";
            }
            // line 102
            echo "
\t\t\t\t\t\t\t";
            // line 103
            if ($this->getAttribute($context["row"], "class_menu", array())) {
                // line 104
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . $this->getAttribute($context["row"], "class_menu", array()));
                // line 105
                echo "\t\t\t\t\t\t\t";
            }
            // line 106
            echo "
\t\t\t\t\t\t\t";
            // line 107
            if ($this->getAttribute($context["row"], "icon_font", array())) {
                // line 108
                echo "\t\t\t\t\t\t\t\t";
                $context["icon_font"] = ((((isset($context["icon_font"]) ? $context["icon_font"] : null) . "<i class=\"") . $this->getAttribute($context["row"], "icon_font", array())) . "\"></i>");
                // line 109
                echo "\t\t\t\t\t\t\t";
            }
            // line 110
            echo "
\t\t\t\t\t\t\t";
            // line 111
            if ($this->getAttribute($context["row"], "label_item", array())) {
                // line 112
                echo "\t\t\t\t\t\t\t\t";
                $context["label_item"] = ((((isset($context["label_item"]) ? $context["label_item"] : null) . "<span class=\"label") . $this->getAttribute($context["row"], "label_item", array())) . "\"></span>");
                // line 113
                echo "\t\t\t\t\t\t\t";
            }
            // line 114
            echo "
\t\t\t\t\t\t\t";
            // line 115
            if ((twig_test_iterable($this->getAttribute($context["row"], "submenu", array())) && $this->getAttribute($context["row"], "submenu", array()))) {
                // line 116
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " with-sub-menu");
                // line 117
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["row"], "submenu_type", array()) == 1)) {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " click");
                    // line 119
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " hover");
                    // line 121
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 122
                echo "\t\t\t\t\t\t\t";
            }
            // line 123
            echo "
\t\t\t\t\t\t\t";
            // line 124
            if (($this->getAttribute($context["row"], "position", array()) == 1)) {
                // line 125
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " pull-right");
                // line 126
                echo "\t\t\t\t\t\t\t";
            }
            // line 127
            echo "
\t\t\t\t\t\t\t";
            // line 128
            if (($this->getAttribute($context["row"], "submenu_type", array()) == 2)) {
                // line 129
                echo "\t\t\t\t\t\t\t\t";
                $context["title"] = "title=\"hover-intent\"";
                // line 130
                echo "\t\t\t\t\t\t\t";
            }
            // line 131
            echo "
\t\t\t\t\t\t\t";
            // line 132
            if (($this->getAttribute($context["row"], "new_window", array()) == 1)) {
                // line 133
                echo "\t\t\t\t\t\t\t\t";
                $context["target"] = "target=\"_blank\"";
                // line 134
                echo "\t\t\t\t\t\t\t";
            }
            // line 135
            echo "
\t\t\t\t\t\t\t";
            // line 136
            if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
                // line 137
                echo "\t\t\t\t\t\t\t\t<li class=\"item-vertical ";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\" ";
                echo (isset($context["title"]) ? $context["title"] : null);
                echo ">
\t\t\t\t\t\t\t\t\t<p class='close-menu'></p>
\t\t\t\t\t\t\t\t\t";
                // line 139
                if ((twig_test_iterable($this->getAttribute($context["row"], "submenu", array())) && $this->getAttribute($context["row"], "submenu", array()))) {
                    // line 140
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["row"], "link", array());
                    echo "\" class=\"";
                    echo (isset($context["class_link"]) ? $context["class_link"] : null);
                    echo "\" ";
                    echo (isset($context["target"]) ? $context["target"] : null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 142
                    echo ((((isset($context["icon_font"]) ? $context["icon_font"] : null) . (isset($context["icon"]) ? $context["icon"] : null)) . $this->getAttribute($this->getAttribute($context["row"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) . $this->getAttribute($context["row"], "description", array()));
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 144
                    echo (isset($context["label_item"]) ? $context["label_item"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<b class='fa fa-angle-right' ></b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 148
                    echo "\t\t\t\t\t\t\t\t \t\t<a href=\"";
                    echo $this->getAttribute($context["row"], "link", array());
                    echo "\" class=\"";
                    echo (isset($context["class_link"]) ? $context["class_link"] : null);
                    echo "\" ";
                    echo (isset($context["target"]) ? $context["target"] : null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 150
                    echo ((((isset($context["icon_font"]) ? $context["icon_font"] : null) . (isset($context["icon"]) ? $context["icon"] : null)) . $this->getAttribute($this->getAttribute($context["row"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) . $this->getAttribute($context["row"], "description", array()));
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 152
                    echo (isset($context["label_item"]) ? $context["label_item"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 155
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 156
                if ((twig_test_iterable($this->getAttribute($context["row"], "submenu", array())) && $this->getAttribute($context["row"], "submenu", array()))) {
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_in_filter("%", $this->getAttribute($context["row"], "submenu_width", array()))) {
                        // line 158
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" data-subwidth =\"";
                        echo twig_replace_filter($this->getAttribute($context["row"], "submenu_width", array()), array("%" => ""));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" style=\"width:";
                        echo $this->getAttribute($context["row"], "submenu_width", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 162
                    echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 165
                    $context["row_fluid"] = 0;
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "submenu", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((((isset($context["row_fluid"]) ? $context["row_fluid"] : null) + $this->getAttribute($context["submenu"], "content_width", array())) > 12)) {
                            // line 168
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = $this->getAttribute($context["submenu"], "content_width", array());
                            // line 169
                            echo "\t\t\t\t\t\t\t\t\t\t \t\t\t\t</div><div class=\"border\"></div><div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 171
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = ((isset($context["row_fluid"]) ? $context["row_fluid"] : null) + $this->getAttribute($context["submenu"], "content_width", array()));
                            // line 172
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 173
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                        echo $this->getAttribute($context["submenu"], "content_width", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 174
                        if (($this->getAttribute($context["submenu"], "content_type", array()) == 0)) {
                            // line 175
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"html ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">";
                            echo $this->getAttribute($context["submenu"], "html", array());
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 176
$context["submenu"], "content_type", array()) == 1)) {
                            // line 177
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable($this->getAttribute($context["submenu"], "product", array()))) {
                                // line 178
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                                // line 179
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "\" onclick=\"window.location = '";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "'\"><img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "image", array());
                                echo "\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"";
                                // line 180
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "\" onclick=\"window.location = '";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "'\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "name", array());
                                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 182
                                if ( !$this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "special", array())) {
                                    // line 183
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "price", array());
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 185
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "special", array());
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 187
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 190
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 2)) {
                            // line 191
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"categories ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">";
                            echo $this->getAttribute($context["submenu"], "categories", array());
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 192
$context["submenu"], "content_type", array()) == 3)) {
                            // line 193
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable($this->getAttribute($context["submenu"], "manufactures", array()))) {
                                // line 194
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"manufacturer ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 195
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu"], "manufactures", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                                    // line 196
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo $this->getAttribute($context["manufacturer"], "link", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["manufacturer"], "name", array());
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 198
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 200
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 4)) {
                            // line 201
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($this->getAttribute($context["submenu"], "images", array()), "show_title", array()) == 1)) {
                                // line 202
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array");
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 204
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 205
                            echo $this->getAttribute($this->getAttribute($context["submenu"], "images", array()), "link", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 207
$context["submenu"], "content_type", array()) == 5)) {
                            // line 208
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "categories", array())) {
                                // line 209
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subcategory ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 210
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "categories", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
                                    // line 211
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 212
                                    if (($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "show_title", array()) == 1)) {
                                        // line 213
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo $this->getAttribute($context["categories"], "href", array());
                                        echo "\" class=\"title-submenu ";
                                        echo $this->getAttribute($context["submenu"], "class_menu", array());
                                        echo "\">";
                                        echo $this->getAttribute($context["categories"], "name", array());
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 215
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ($this->getAttribute($context["categories"], "categories", array())) {
                                        // line 216
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        echo $this->getAttribute($context["categories"], "categories", array());
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 218
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "show_image", array()) == 1)) {
                                        // line 219
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                        echo $this->getAttribute($context["categories"], "thumb", array());
                                        echo "\" alt=\"\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 221
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 223
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 225
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 6)) {
                            // line 226
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "show_title", array()) == 1)) {
                                // line 227
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array");
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 229
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "products", array())) {
                                // line 230
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "products", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 231
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["itempage"] = (($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "col", array())) ? ((12 / $this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "col", array()))) : (4));
                                    // line 232
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-";
                                    echo (isset($context["itempage"]) ? $context["itempage"] : null);
                                    echo " ";
                                    echo $this->getAttribute($context["submenu"], "class_menu", array());
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 235
                                    echo $this->getAttribute($context["product"], "href", array());
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                    // line 236
                                    echo $this->getAttribute($context["product"], "thumb", array());
                                    echo "\" alt=\"";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "\" title=\"";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "\"  />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                                    // line 241
                                    echo $this->getAttribute($context["product"], "href", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 243
                                    if ($this->getAttribute($context["product"], "rating", array())) {
                                        // line 244
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 245
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                            // line 246
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                                // line 247
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 249
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 251
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 252
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 254
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 255
                                    if ($this->getAttribute($context["product"], "price", array())) {
                                        // line 256
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 257
                                        if ( !$this->getAttribute($context["product"], "special", array())) {
                                            // line 258
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            echo $this->getAttribute($context["product"], "price", array());
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        } else {
                                            // line 260
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                                            echo $this->getAttribute($context["product"], "special", array());
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 262
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        // line 263
                                        if ($this->getAttribute($context["product"], "tax", array())) {
                                            // line 264
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                                            echo $this->getAttribute($context["product"], "tax", array());
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 266
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 268
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 273
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 274
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 277
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 281
                echo "\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            } else {
                // line 282
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"";
                // line 283
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\" ";
                echo (isset($context["title"]) ? $context["title"] : null);
                echo ">
\t\t\t\t\t\t\t\t\t<p class='close-menu'></p>
\t\t\t\t\t\t\t\t\t";
                // line 285
                if ((twig_test_iterable($this->getAttribute($context["row"], "submenu", array())) && $this->getAttribute($context["row"], "submenu", array()))) {
                    // line 286
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["row"], "link", array());
                    echo "\" class=\"";
                    echo (isset($context["class_link"]) ? $context["class_link"] : null);
                    echo "\" ";
                    echo (isset($context["target"]) ? $context["target"] : null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 288
                    echo ((((isset($context["icon_font"]) ? $context["icon_font"] : null) . (isset($context["icon"]) ? $context["icon"] : null)) . $this->getAttribute($this->getAttribute($context["row"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) . $this->getAttribute($context["row"], "description", array()));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 290
                    echo (isset($context["label_item"]) ? $context["label_item"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<b class='caret'></b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 294
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["row"], "link", array());
                    echo "\" class=\"";
                    echo (isset($context["class_link"]) ? $context["class_link"] : null);
                    echo "\" ";
                    echo (isset($context["target"]) ? $context["target"] : null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 296
                    echo ((((isset($context["icon_font"]) ? $context["icon_font"] : null) . (isset($context["icon"]) ? $context["icon"] : null)) . $this->getAttribute($this->getAttribute($context["row"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) . $this->getAttribute($context["row"], "description", array()));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 298
                    echo (isset($context["label_item"]) ? $context["label_item"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 301
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 302
                if ((twig_test_iterable($this->getAttribute($context["row"], "submenu", array())) && $this->getAttribute($context["row"], "submenu", array()))) {
                    // line 303
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" style=\"width: ";
                    echo $this->getAttribute($context["row"], "submenu_width", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 306
                    $context["row_fluid"] = 0;
                    // line 307
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "submenu", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                        // line 308
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((((isset($context["row_fluid"]) ? $context["row_fluid"] : null) + $this->getAttribute($context["submenu"], "content_width", array())) > 12)) {
                            // line 309
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = $this->getAttribute($context["submenu"], "content_width", array());
                            // line 310
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><div class=\"border\"></div><div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 312
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = ((isset($context["row_fluid"]) ? $context["row_fluid"] : null) + $this->getAttribute($context["submenu"], "content_width", array()));
                            // line 313
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 314
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                        echo $this->getAttribute($context["submenu"], "content_width", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 315
                        if (($this->getAttribute($context["submenu"], "content_type", array()) == 0)) {
                            // line 316
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"html ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 317
                            echo $this->getAttribute($context["submenu"], "html", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 319
$context["submenu"], "content_type", array()) == 1)) {
                            // line 320
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable($this->getAttribute($context["submenu"], "product", array()))) {
                                // line 321
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                                // line 322
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "\" onclick=\"window.location = '";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "'\"><img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "image", array());
                                echo "\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"";
                                // line 323
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "\" onclick=\"window.location = '";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "'\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "name", array());
                                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 325
                                if ( !$this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "special", array())) {
                                    // line 326
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "price", array());
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 328
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "special", array());
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 330
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 333
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 2)) {
                            // line 334
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"categories ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 335
                            echo $this->getAttribute($context["submenu"], "categories", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 337
$context["submenu"], "content_type", array()) == 3)) {
                            // line 338
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable($this->getAttribute($context["submenu"], "manufactures", array()))) {
                                // line 339
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"manufacturer ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 340
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu"], "manufactures", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                                    // line 341
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo $this->getAttribute($context["manufacturer"], "link", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["manufacturer"], "name", array());
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 343
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 345
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 4)) {
                            // line 346
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($this->getAttribute($context["submenu"], "images", array()), "show_title", array()) == 1)) {
                                // line 347
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array");
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 349
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 350
                            echo $this->getAttribute($this->getAttribute($context["submenu"], "images", array()), "link", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 352
$context["submenu"], "content_type", array()) == 5)) {
                            // line 353
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "categories", array())) {
                                // line 354
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subcategory ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 355
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "categories", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
                                    // line 356
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 357
                                    if (($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "show_title", array()) == 1)) {
                                        // line 358
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo $this->getAttribute($context["categories"], "href", array());
                                        echo "\" class=\"title-submenu ";
                                        echo $this->getAttribute($context["submenu"], "class_menu", array());
                                        echo "\">";
                                        echo $this->getAttribute($context["categories"], "name", array());
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 360
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ($this->getAttribute($context["categories"], "categories", array())) {
                                        // line 361
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        echo $this->getAttribute($context["categories"], "categories", array());
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 363
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "show_image", array()) == 1)) {
                                        // line 364
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                        echo $this->getAttribute($context["categories"], "thumb", array());
                                        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 366
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 368
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 370
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 6)) {
                            // line 371
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "show_title", array()) == 1)) {
                                // line 372
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array");
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 374
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "products", array())) {
                                // line 375
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "products", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 376
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["itempage"] = (($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "col", array())) ? ((12 / $this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "col", array()))) : (4));
                                    // line 377
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                                    echo (isset($context["itempage"]) ? $context["itempage"] : null);
                                    echo " ";
                                    echo $this->getAttribute($context["submenu"], "class_menu", array());
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 380
                                    echo $this->getAttribute($context["product"], "href", array());
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                    // line 381
                                    echo $this->getAttribute($context["product"], "thumb", array());
                                    echo "\" alt=\"";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "\" title=\"";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><a href=\"";
                                    // line 386
                                    echo $this->getAttribute($context["product"], "href", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 388
                                    if ($this->getAttribute($context["product"], "rating", array())) {
                                        // line 389
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 390
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                            // line 391
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                                // line 392
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 394
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 396
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 397
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 399
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 400
                                    if ($this->getAttribute($context["product"], "price", array())) {
                                        // line 401
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 402
                                        if ( !$this->getAttribute($context["product"], "special", array())) {
                                            // line 403
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            echo $this->getAttribute($context["product"], "price", array());
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        } else {
                                            // line 405
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                                            // line 406
                                            echo $this->getAttribute($context["product"], "special", array());
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        }
                                        // line 409
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 412
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t \t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 417
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 418
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 419
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 421
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 425
                echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 427
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 428
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</nav>
\t";
        // line 434
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 435
            echo "\t\t</div>
\t";
        }
        // line 437
        echo "</div>

";
        // line 439
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 440
            echo "<script type=\"text/javascript\">
\t\$(document).ready(function() {

\t\t(function (element) {
\t\t\tvar \$element = \$(element);
\t\t\tvar itemver =  ";
            // line 445
            echo $this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "show_itemver", array());
            echo ";
\t\t\t
\t\t\t
\t\t\t
\t\t\tif(itemver < \$( \".vertical ul.megamenu >li\", \$element ).length){
\t\t\t\t\$('.vertical ul.megamenu', \$element).append('<li class=\"loadmore\"><i class=\"fa fa-plus-square\"></i><span class=\"more-view\"> ";
            // line 450
            echo (isset($context["text_more_category"]) ? $context["text_more_category"] : null);
            echo "</span></li>');
\t\t\t\t\$('.horizontal ul.megamenu li.loadmore', \$element).remove();
\t\t\t}
\t\t\t
\t\t\tvar show_itemver = itemver-1 ;
\t\t\t\$('ul.megamenu > li.item-vertical', \$element).each(function(i){
\t\t\t\tif(i>show_itemver){
\t\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t\t} 
\t\t\t});
\t\t\t
\t\t\t\$(\".megamenu .loadmore\", \$element).click(function(){
\t\t\t\tif(\$(this).hasClass('open')){
\t\t\t\t\t\$('ul.megamenu li.item-vertical', \$element).each(function(i){
\t\t\t\t\t\t\tif(i>show_itemver){
\t\t\t\t\t\t\t\t\t\$(this).slideUp(200);
\t\t\t\t\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t\$(this).removeClass('open');
\t\t\t\t\t\$('.loadmore', \$element).html('<i class=\"fa fa-plus\"></i><span class=\"more-view\">";
            // line 471
            echo (isset($context["text_more_category"]) ? $context["text_more_category"] : null);
            echo "</span>');
\t\t\t\t}else{
\t\t\t\t\t\$('ul.megamenu li.item-vertical', \$element).each(function(i){
\t\t\t\t\t\t\tif(i>show_itemver){
\t\t\t\t\t\t\t\t\t\$(this).slideDown(200);
\t\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t\$(this).addClass('open');
\t\t\t\t\t\$('.loadmore', \$element).html('<i class=\"fa fa-minus\"></i><span class=\"more-view\">";
            // line 479
            echo (isset($context["text_more_category"]) ? $context["text_more_category"] : null);
            echo "</span>');
\t\t\t\t}
\t\t\t});
\t\t})(\"#";
            // line 482
            echo (isset($context["suffix_id"]) ? $context["suffix_id"] : null);
            echo "\");


\t

\t    \$(\"#";
            // line 487
            echo (isset($context["show_verticalmenu_id"]) ? $context["show_verticalmenu_id"] : null);
            echo "\").click(function () {
\t\t\tif(\$('#";
            // line 488
            echo (isset($context["suffix_id"]) ? $context["suffix_id"] : null);
            echo " .vertical-wrapper').hasClass('so-vertical-active'))
\t\t\t\t\$('#";
            // line 489
            echo (isset($context["suffix_id"]) ? $context["suffix_id"] : null);
            echo " .vertical-wrapper').removeClass('so-vertical-active');
\t\t\telse
\t\t\t\t\$('#";
            // line 491
            echo (isset($context["suffix_id"]) ? $context["suffix_id"] : null);
            echo " .vertical-wrapper').addClass('so-vertical-active');
\t\t}); 
\t\t\$('#";
            // line 493
            echo (isset($context["remove_verticalmenu_id"]) ? $context["remove_verticalmenu_id"] : null);
            echo "').click(function() {
\t        \$('#";
            // line 494
            echo (isset($context["suffix_id"]) ? $context["suffix_id"] : null);
            echo " .vertical-wrapper').removeClass('so-vertical-active');
\t        return false;
\t    });\t
\t});
</script>
";
        }
        // line 500
        echo "<script>
\$(document).ready(function(){
\t\$('a[href=\"";
        // line 502
        echo (isset($context["actual_link"]) ? $context["actual_link"] : null);
        echo "\"]').each(function() {
\t\t\$(this).parents('.with-sub-menu').addClass('sub-active');
\t});  
});
</script>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_megamenu/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1341 => 502,  1337 => 500,  1328 => 494,  1324 => 493,  1319 => 491,  1314 => 489,  1310 => 488,  1306 => 487,  1298 => 482,  1292 => 479,  1281 => 471,  1257 => 450,  1249 => 445,  1242 => 440,  1240 => 439,  1236 => 437,  1232 => 435,  1230 => 434,  1222 => 428,  1216 => 427,  1212 => 425,  1206 => 421,  1199 => 419,  1196 => 418,  1193 => 417,  1183 => 412,  1178 => 409,  1172 => 406,  1169 => 405,  1163 => 403,  1161 => 402,  1158 => 401,  1156 => 400,  1153 => 399,  1149 => 397,  1143 => 396,  1139 => 394,  1135 => 392,  1132 => 391,  1128 => 390,  1125 => 389,  1123 => 388,  1116 => 386,  1104 => 381,  1100 => 380,  1091 => 377,  1088 => 376,  1083 => 375,  1080 => 374,  1074 => 372,  1071 => 371,  1068 => 370,  1064 => 368,  1057 => 366,  1051 => 364,  1048 => 363,  1042 => 361,  1039 => 360,  1029 => 358,  1027 => 357,  1024 => 356,  1020 => 355,  1015 => 354,  1012 => 353,  1010 => 352,  1005 => 350,  1000 => 349,  994 => 347,  991 => 346,  988 => 345,  984 => 343,  973 => 341,  969 => 340,  964 => 339,  961 => 338,  959 => 337,  954 => 335,  949 => 334,  946 => 333,  941 => 330,  935 => 328,  929 => 326,  927 => 325,  918 => 323,  910 => 322,  905 => 321,  902 => 320,  900 => 319,  895 => 317,  890 => 316,  888 => 315,  883 => 314,  880 => 313,  877 => 312,  873 => 310,  870 => 309,  867 => 308,  862 => 307,  860 => 306,  853 => 303,  851 => 302,  848 => 301,  842 => 298,  837 => 296,  827 => 294,  820 => 290,  815 => 288,  805 => 286,  803 => 285,  796 => 283,  793 => 282,  789 => 281,  783 => 277,  773 => 274,  770 => 273,  760 => 268,  756 => 266,  750 => 264,  748 => 263,  745 => 262,  739 => 260,  733 => 258,  731 => 257,  728 => 256,  726 => 255,  723 => 254,  719 => 252,  713 => 251,  709 => 249,  705 => 247,  702 => 246,  698 => 245,  695 => 244,  693 => 243,  686 => 241,  674 => 236,  670 => 235,  661 => 232,  658 => 231,  653 => 230,  650 => 229,  644 => 227,  641 => 226,  638 => 225,  634 => 223,  627 => 221,  621 => 219,  618 => 218,  612 => 216,  609 => 215,  599 => 213,  597 => 212,  594 => 211,  590 => 210,  585 => 209,  582 => 208,  580 => 207,  575 => 205,  570 => 204,  564 => 202,  561 => 201,  558 => 200,  554 => 198,  543 => 196,  539 => 195,  534 => 194,  531 => 193,  529 => 192,  522 => 191,  519 => 190,  514 => 187,  508 => 185,  502 => 183,  500 => 182,  491 => 180,  483 => 179,  478 => 178,  475 => 177,  473 => 176,  466 => 175,  464 => 174,  459 => 173,  456 => 172,  453 => 171,  449 => 169,  446 => 168,  443 => 167,  438 => 166,  436 => 165,  431 => 162,  425 => 160,  419 => 158,  416 => 157,  414 => 156,  411 => 155,  405 => 152,  400 => 150,  390 => 148,  383 => 144,  378 => 142,  368 => 140,  366 => 139,  358 => 137,  356 => 136,  353 => 135,  350 => 134,  347 => 133,  345 => 132,  342 => 131,  339 => 130,  336 => 129,  334 => 128,  331 => 127,  328 => 126,  325 => 125,  323 => 124,  320 => 123,  317 => 122,  314 => 121,  311 => 120,  308 => 119,  305 => 118,  302 => 117,  299 => 116,  297 => 115,  294 => 114,  291 => 113,  288 => 112,  286 => 111,  283 => 110,  280 => 109,  277 => 108,  275 => 107,  272 => 106,  269 => 105,  266 => 104,  264 => 103,  261 => 102,  258 => 101,  255 => 100,  253 => 99,  250 => 98,  247 => 97,  244 => 96,  242 => 95,  239 => 94,  236 => 93,  233 => 92,  230 => 91,  227 => 90,  225 => 89,  222 => 88,  219 => 87,  216 => 86,  213 => 85,  210 => 84,  207 => 83,  204 => 82,  200 => 81,  197 => 80,  192 => 77,  186 => 75,  182 => 73,  180 => 72,  176 => 71,  173 => 70,  171 => 69,  157 => 68,  151 => 64,  147 => 62,  141 => 60,  139 => 59,  136 => 58,  132 => 56,  128 => 54,  126 => 53,  123 => 52,  110 => 42,  107 => 41,  95 => 32,  91 => 31,  81 => 24,  73 => 18,  71 => 17,  56 => 16,  53 => 15,  47 => 13,  45 => 12,  42 => 11,  38 => 9,  36 => 8,  30 => 7,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set suffix_id = 'so_megamenu_' ~ random(100) %}*/
/* {% set show_verticalmenu_id = 'show-verticalmenu-' ~ random(100) %}*/
/* {% set remove_verticalmenu_id = 'remove-verticalmenu-' ~ random(100) %}*/
/* */
/* */
/* */
/* <div id="{{suffix_id}}" class="responsive megamenu-style-dev {{ustawienia.class_menu}}">*/
/* 	{% if ustawienia.orientation == 1 %}*/
/* 	<div class="so-vertical-menu no-gutter">*/
/* 	{% endif %}*/
/* 	*/
/* 	{% if ustawienia.disp_title_module and head_name %}*/
/* 		<h3>{{ head_name }}</h3>*/
/* 	{% endif %}*/
/* 	<nav class="navbar-default">*/
/* 		<div class="container-megamenu {% if ustawienia.full_width != 1 %} {{ 'container' }} {% endif %} {% if ustawienia.orientation == 1 %}{{'vertical '}} {% else %}{{ 'horizontal' }}{% endif %}">*/
/* 		{% if ustawienia.orientation == 1 %}*/
/* 			<div class="menuHeading">*/
/* 				<div class="megamenuToogle-wrapper">*/
/* 					<div class="megamenuToogle-pattern">*/
/* 						<div class="container">*/
/* 							<div><span></span><span></span><span></span></div>*/
/* 							<span class="title-mega">*/
/* 							{{ navigation_text }}*/
/* 							</span>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="navbar-header">*/
/* 				<span class="hidden">{{ navigation_text }}</span>*/
/* 				<button type="button" id="{{show_verticalmenu_id}}" data-toggle="collapse"  class="navbar-toggle">*/
/* 					 <span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span> */
/* 					*/
/* 				</button>*/
/* 				*/
/* 			</div>*/
/* 		{% else %}*/
/* 			<div class="navbar-header">*/
/* 				<span class="hidden">{{ navigation_text }}</span>*/
/* 		<button type="button" id="show-megamenu" data-toggle="collapse"  class="navbar-toggle">*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					*/
/* 				</button>*/
/* 				*/
/* 			</div>*/
/* 		{% endif %}*/
/* */
/* 		{% if ustawienia.orientation == 1 %}*/
/* 			<div class="vertical-wrapper">*/
/* 		{% else %}*/
/* 			<div class="megamenu-wrapper">*/
/* 		{% endif %}*/
/* */
/* 		{% if ustawienia.orientation == 1 %}*/
/* 			<span id="{{remove_verticalmenu_id}}" class="remove-verticalmenu fa fa-times"></span>*/
/* 		{% else %}*/
/* 			<span id="remove-megamenu" class="fa fa-times"></span>*/
/* 		{% endif %}*/
/* */
/* 			<div class="megamenu-pattern">*/
/* 				<div class="container">*/
/* 					<ul class="megamenu"*/
/* 					data-transition="{% if ustawienia.animation != '' %}{{ ustawienia.animation }}{% else %}{{ 'none' }}{% endif %}" data-animationtime="{% if ustawienia.animation_time > 0 and ustawienia.animation_time < 5000 %}{{ ustawienia.animation_time }}{% else %}{{ 500 }}{% endif %}">*/
/* 						{% if ustawienia.home_item == 'icon' or ustawienia.home_item == 'text' %}*/
/* 							<li class="home">*/
/* 								<a href="{{ home }}">*/
/* 								{% if ustawienia.home_item == 'icon' %}*/
/* 									<i class="fa fa-home"></i>*/
/* 								{% else %}*/
/* 									<span><strong>{{ home_text }}</strong></span>*/
/* 								{% endif %}*/
/* 								</a>*/
/* 							</li>*/
/* 						{% endif %}*/
/* 						*/
/* 						{% for key, row in menu %}*/
/* 							{% set class 		= '' %}*/
/* 							{% set icon_font 	= '' %}*/
/* 							{% set class_link 	= 'clearfix' %}*/
/* 							{% set label_item 	= '' %}*/
/* 							{% set title 		= false %}*/
/* 							{% set target 		= false %}*/
/* */
/* 							{% if 'no_image' in row.icon %}*/
/* 								{% set icon = '' %}*/
/* 							{% else %}*/
/* 								{% set icon = row.icon %}*/
/* 							{% endif %}*/
/* 							*/
/* 							{% if row.description != '' %}*/
/* 								{% set class_link = class_link~' description' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if route and route == row.route and path and path == row.path %}*/
/* 								{% set class = class~' active_menu' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.class_menu %}*/
/* 								{% set class = class~row.class_menu %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.icon_font %}*/
/* 								{% set icon_font = icon_font~'<i class="'~row.icon_font~'"></i>' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.label_item %}*/
/* 								{% set label_item = label_item~'<span class="label'~row.label_item~'"></span>' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.submenu is iterable and row.submenu %}*/
/* 								{% set class = class~' with-sub-menu' %}*/
/* 								{% if row.submenu_type == 1 %}*/
/* 									{% set class = class~' click' %}*/
/* 								{% else %}*/
/* 									{% set class = class~' hover' %}*/
/* 								{% endif %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.position == 1 %}*/
/* 								{% set class = class~' pull-right' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.submenu_type == 2 %}*/
/* 								{% set title = 'title="hover-intent"' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.new_window == 1 %}*/
/* 								{% set target = 'target="_blank"' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if ustawienia.orientation == 1 %}*/
/* 								<li class="item-vertical {{ class }}" {{ title }}>*/
/* 									<p class='close-menu'></p>*/
/* 									{% if row.submenu is iterable and row.submenu %}*/
/* 										<a href="{{ row.link }}" class="{{ class_link }}" {{ target }}>*/
/* 											<span>*/
/* 												<strong>{{ icon_font~icon~row.name[lang_id]~row.description }}</strong>*/
/* 											</span>*/
/* 											{{ label_item }}*/
/* 											<b class='fa fa-angle-right' ></b>*/
/* 										</a>*/
/* 									{% else %}*/
/* 								 		<a href="{{ row.link }}" class="{{ class_link }}" {{ target }}>*/
/* 											<span>*/
/* 												<strong>{{ icon_font~icon~row.name[lang_id]~row.description }}</strong>*/
/* 											</span>*/
/* 											{{ label_item }}*/
/* 										</a>*/
/* 									{% endif %}*/
/* */
/* 									{% if row.submenu is iterable and row.submenu %}*/
/* 										{% if '%' in row.submenu_width %}*/
/* 											<div class="sub-menu" data-subwidth ="{{ row.submenu_width|replace({'%': ''}) }}">*/
/* 										{% else %}*/
/* 											<div class="sub-menu" style="width:{{ row.submenu_width }}">*/
/* 										{% endif %}*/
/* */
/* 										<div class="content">*/
/* 											<div class="row">*/
/* 												{% set row_fluid = 0 %}*/
/* 												{% for submenu in row.submenu %}*/
/* 													{% if row_fluid+submenu.content_width > 12 %}*/
/* 														{% set row_fluid = submenu.content_width %}*/
/* 										 				</div><div class="border"></div><div class="row">*/
/* 													{% else %}*/
/* 														{% set row_fluid = row_fluid+submenu.content_width %}*/
/* 													{% endif %}*/
/* 													<div class="col-sm-{{ submenu.content_width }}">*/
/* 														{% if submenu.content_type == 0 %}*/
/* 															<div class="html {{submenu.class_menu }}">{{ submenu.html }}</div>*/
/* 														{% elseif submenu.content_type == 1 %}*/
/* 															{% if submenu.product is iterable %}*/
/* 																<div class="product {{ submenu.class_menu }}">*/
/* 																	<div class="image"><a href="{{ submenu.product.link }}" onclick="window.location = '{{ submenu.product.link }}'"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ submenu.product.image }}" alt=""></a></div>*/
/* 																	<div class="name"><a href="{{ submenu.product.link }}" onclick="window.location = '{{ submenu.product.link }}'">{{ submenu.product.name }}</a></div>*/
/* 																	<div class="price">*/
/* 																		{% if not submenu.product.special %}*/
/* 																			{{ submenu.product.price }}*/
/* 																		{% else %}*/
/* 																			{{ submenu.product.special }}*/
/* 																		{% endif %}*/
/* 																	</div>*/
/* 																</div>*/
/* 															{% endif %}*/
/* 														{% elseif submenu.content_type == 2 %}*/
/* 															<div class="categories {{ submenu.class_menu }}">{{ submenu.categories }}</div>*/
/* 														{% elseif submenu.content_type == 3 %}*/
/* 															{% if submenu.manufactures is iterable %}*/
/* 																<ul class="manufacturer {{ submenu.class_menu }}">*/
/* 																	{% for manufacturer in submenu.manufactures %}*/
/* 																		<li><a href="{{ manufacturer.link }}">{{ manufacturer.name }}</a></li>*/
/* 																	{% endfor %}*/
/* 																</ul>*/
/* 															{% endif %}*/
/* 														{% elseif submenu.content_type == 4 %}*/
/* 															{% if submenu.images.show_title == 1 %}*/
/* 																<span class="title-submenu">{{ submenu.name[lang_id] }}</span>*/
/* 															{% endif %}*/
/* 															<div class="link {{ submenu.class_menu }}">*/
/* 																{{ submenu.images.link }}*/
/* 															</div>*/
/* 														{% elseif submenu.content_type == 5 %}*/
/* 															{% if submenu.subcategory.categories %}*/
/* 																<ul class="subcategory {{ submenu.class_menu }}">*/
/* 																	{% for categories in submenu.subcategory.categories %}*/
/* 																		<li>*/
/* 																			{% if submenu.subcategory.show_title == 1 %}*/
/* 																				<a href="{{ categories.href }}" class="title-submenu {{ submenu.class_menu }}">{{ categories.name }}</a>*/
/* 																			{% endif %}*/
/* 																			{% if categories.categories %}*/
/* 																				{{ categories.categories }}*/
/* 																			{% endif %}*/
/* 																			{% if submenu.subcategory.show_image == 1 %}*/
/* 																				<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ categories.thumb }}" alt="" >*/
/* 																			{% endif %}*/
/* 																		</li>*/
/* 																	{% endfor %}*/
/* 																</ul>*/
/* 															{% endif %}*/
/* 														{% elseif submenu.content_type == 6 %}*/
/* 															{% if submenu.productlist.show_title == 1 %}*/
/* 																<span class="title-submenu">{{ submenu.name[lang_id] }}</span>*/
/* 															{% endif %}*/
/* 															{% if submenu.productlist.products %}*/
/* 																{% for product in submenu.productlist.products %}*/
/* 																	{% set itempage = submenu.productlist.col ? 12/submenu.productlist.col : 4 %}*/
/* 																	<div class="col-xs-{{ itempage }} {{ submenu.class_menu }}">*/
/* 																		<div class="product-thumb">*/
/* 																			<div class="image">*/
/* 																				<a href="{{ product.href }}">*/
/* 																					<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}"  />*/
/* 																				</a>*/
/* 																			</div>*/
/* 																			<div>*/
/* 																				<div class="caption">*/
/* 																					<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 																					*/
/* 																					{% if product.rating %}*/
/* 																						<div class="rating">*/
/* 																							{% for i in 1..5 %}*/
/* 																								{% if product.rating < i %}*/
/* 																									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																								{% else %}*/
/* 																									<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																								{% endif %}*/
/* 																							{% endfor %}*/
/* 																						</div>*/
/* 																					{% endif %}*/
/* 																			*/
/* 																					{% if product.price %}*/
/* 																						<p class="price">*/
/* 																							{% if not product.special %}*/
/* 																								{{ product.price }}*/
/* 																					   		{% else %}*/
/* 																								<span class="price-new">{{ product.special }}</span>*/
/* 																							{% endif %}*/
/* */
/* 																					   		{% if product.tax %}*/
/* 																								<span class="price-tax">{{ product.tax }}</span>*/
/* 																							{% endif %}*/
/* 																						</p>*/
/* 																					{% endif %}*/
/* 																		  		</div>*/
/* 																			</div>*/
/* 																	  	</div>*/
/* 																	</div>*/
/* 															 	{% endfor %}*/
/* 															{% endif %}*/
/* 														{% endif %}													*/
/* 													</div>*/
/* 												{% endfor %}*/
/* 											</div>*/
/* 										</div>				*/
/* 										</div>			*/
/* 									{% endif %}*/
/* 								</li>							*/
/* 							{% else %}						*/
/* 								<li class="{{ class }}" {{ title }}>*/
/* 									<p class='close-menu'></p>*/
/* 									{% if row.submenu is iterable and row.submenu %}*/
/* 										<a href="{{ row.link }}" class="{{ class_link }}" {{ target }}>*/
/* 											<strong>*/
/* 												{{ icon_font~icon~row.name[lang_id]~row.description }}*/
/* 											</strong>*/
/* 											{{ label_item }}*/
/* 											<b class='caret'></b>*/
/* 										</a>*/
/* 									{% else %}*/
/* 										<a href="{{ row.link }}" class="{{ class_link }}" {{ target }}>*/
/* 											<strong>*/
/* 												{{ icon_font~icon~row.name[lang_id]~row.description }}*/
/* 											</strong>*/
/* 											{{ label_item }}*/
/* 										</a>*/
/* 									{% endif %}*/
/* */
/* 									{% if row.submenu is iterable and row.submenu %}*/
/* 										<div class="sub-menu" style="width: {{ row.submenu_width }}">*/
/* 											<div class="content">*/
/* 												<div class="row">*/
/* 													{% set row_fluid = 0 %}*/
/* 													{% for submenu in row.submenu %}*/
/* 														{% if row_fluid+submenu.content_width > 12 %}*/
/* 															{% set row_fluid = submenu.content_width %}*/
/* 															</div><div class="border"></div><div class="row">*/
/* 														{% else %}*/
/* 															{% set row_fluid = row_fluid+submenu.content_width %}*/
/* 														{% endif %}*/
/* 														<div class="col-sm-{{ submenu.content_width }}">*/
/* 															{% if submenu.content_type == 0 %}*/
/* 																<div class="html {{ submenu.class_menu }}">*/
/* 																	{{ submenu.html }}*/
/* 																</div>*/
/* 															{% elseif submenu.content_type == 1 %}*/
/* 																{% if submenu.product is iterable %}*/
/* 																	<div class="product {{ submenu.class_menu }}">*/
/* 																		<div class="image"><a href="{{ submenu.product.link }}" onclick="window.location = '{{ submenu.product.link }}'"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ submenu.product.image }}" alt=""></a></div>*/
/* 																		<div class="name"><a href="{{ submenu.product.link }}" onclick="window.location = '{{ submenu.product.link }}'">{{ submenu.product.name }}</a></div>*/
/* 																		<div class="price">*/
/* 																			{% if not submenu.product.special %}*/
/* 																				{{ submenu.product.price }}*/
/* 																			{% else %}*/
/* 																				{{ submenu.product.special }}*/
/* 																			{% endif %}*/
/* 																		</div>*/
/* 																	</div>*/
/* 																{% endif %}*/
/* 															{% elseif submenu.content_type == 2 %}*/
/* 																<div class="categories {{ submenu.class_menu }}">*/
/* 																	{{ submenu.categories }}*/
/* 																</div>															*/
/* 															{% elseif submenu.content_type == 3 %}*/
/* 																{% if submenu.manufactures is iterable %}*/
/* 																	<ul class="manufacturer {{ submenu.class_menu }}">*/
/* 																		{% for manufacturer in submenu.manufactures %}*/
/* 																			<li><a href="{{ manufacturer.link }}">{{ manufacturer.name }}</a></li>*/
/* 																		{% endfor %}*/
/* 																	</ul>*/
/* 																{% endif %}*/
/* 															{% elseif submenu.content_type == 4 %}*/
/* 																{% if submenu.images.show_title == 1 %}*/
/* 																	<span class="title-submenu">{{ submenu.name[lang_id] }}</span>*/
/* 																{% endif %}*/
/* 																<div class="link {{ submenu.class_menu }}">*/
/* 																	{{ submenu.images.link }}*/
/* 																</div>*/
/* 															{% elseif submenu.content_type == 5 %}*/
/* 																{% if submenu.subcategory.categories %}*/
/* 																	<ul class="subcategory {{ submenu.class_menu }}">*/
/* 																		{% for categories in submenu.subcategory.categories %}*/
/* 																			<li>*/
/* 																				{% if submenu.subcategory.show_title == 1 %}*/
/* 																					<a href="{{ categories.href }}" class="title-submenu {{ submenu.class_menu }}">{{ categories.name }}</a>*/
/* 																				{% endif %}*/
/* 																				{% if categories.categories %}*/
/* 																					{{ categories.categories }}*/
/* 																				{% endif %}*/
/* 																				{% if submenu.subcategory.show_image == 1 %}*/
/* 																					<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ categories.thumb }}" alt="" />*/
/* 																				{% endif %}*/
/* 																			</li>		*/
/* 																		{% endfor %}*/
/* 																	</ul>*/
/* 																{% endif %}*/
/* 															{% elseif submenu.content_type == 6 %}*/
/* 																{% if submenu.productlist.show_title == 1 %}*/
/* 																	<span class="title-submenu">{{ submenu.name[lang_id] }}</span>*/
/* 																{% endif %}*/
/* 																{% if submenu.productlist.products %}*/
/* 																	{% for product in submenu.productlist.products %}*/
/* 																		{% set itempage = submenu.productlist.col ? 12/submenu.productlist.col : 4 %}*/
/* 																		<div class="col-sm-{{ itempage }} {{ submenu.class_menu }}">*/
/* 																			<div class="product-thumb">*/
/* 																				<div class="image">*/
/* 																					<a href="{{ product.href }}">*/
/* 																						<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}"/>*/
/* 																					</a>*/
/* 																				</div>*/
/* 																				<div>*/
/* 																					<div class="caption">*/
/* 																						<h5><a href="{{ product.href }}">{{ product.name }}</a></h5>*/
/* 																						*/
/* 																						{% if product.rating %}*/
/* 																							<div class="rating">*/
/* 																								{% for i in 1..5 %}*/
/* 																									{% if product.rating < i %}*/
/* 																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																									{% else %}*/
/* 																										<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																									{% endif %}*/
/* 																								{% endfor %}*/
/* 																							</div>*/
/* 																						{% endif %}*/
/* */
/* 																						{% if product.price %}*/
/* 																							<p class="price">*/
/* 																								{% if not product.special %}*/
/* 																									{{ product.price }}*/
/* 																							   	{% else %}*/
/* */
/* 																									<span class="price-new">{{ product.special }}</span>*/
/* 																	*/
/* 																							   	{% endif %}*/
/* 																							   	*/
/* 																							   																							</p>*/
/* 																						{% endif %}*/
/* 																			  		</div>*/
/* 																				</div>*/
/* 														  					</div>*/
/* 																		</div>*/
/* 													 				{% endfor %}*/
/* 																{% endif %}*/
/* 															{% endif %}*/
/* 														</div>*/
/* 													{% endfor %}*/
/* 												</div>												*/
/* 											</div>*/
/* 										</div>										*/
/* 									{% endif %}*/
/* 								</li>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		</div>*/
/* 	</nav>*/
/* 	{% if ustawienia.orientation == 1 %}*/
/* 		</div>*/
/* 	{% endif %}*/
/* </div>*/
/* */
/* {% if ustawienia.orientation == 1 %}*/
/* <script type="text/javascript">*/
/* 	$(document).ready(function() {*/
/* */
/* 		(function (element) {*/
/* 			var $element = $(element);*/
/* 			var itemver =  {{ ustawienia.show_itemver }};*/
/* 			*/
/* 			*/
/* 			*/
/* 			if(itemver < $( ".vertical ul.megamenu >li", $element ).length){*/
/* 				$('.vertical ul.megamenu', $element).append('<li class="loadmore"><i class="fa fa-plus-square"></i><span class="more-view"> {{text_more_category}}</span></li>');*/
/* 				$('.horizontal ul.megamenu li.loadmore', $element).remove();*/
/* 			}*/
/* 			*/
/* 			var show_itemver = itemver-1 ;*/
/* 			$('ul.megamenu > li.item-vertical', $element).each(function(i){*/
/* 				if(i>show_itemver){*/
/* 						$(this).css('display', 'none');*/
/* 				} */
/* 			});*/
/* 			*/
/* 			$(".megamenu .loadmore", $element).click(function(){*/
/* 				if($(this).hasClass('open')){*/
/* 					$('ul.megamenu li.item-vertical', $element).each(function(i){*/
/* 							if(i>show_itemver){*/
/* 									$(this).slideUp(200);*/
/* 									$(this).css('display', 'none');*/
/* 							}*/
/* 					});*/
/* 					*/
/* 					$(this).removeClass('open');*/
/* 					$('.loadmore', $element).html('<i class="fa fa-plus"></i><span class="more-view">{{text_more_category}}</span>');*/
/* 				}else{*/
/* 					$('ul.megamenu li.item-vertical', $element).each(function(i){*/
/* 							if(i>show_itemver){*/
/* 									$(this).slideDown(200);*/
/* 							}*/
/* 					});*/
/* 					$(this).addClass('open');*/
/* 					$('.loadmore', $element).html('<i class="fa fa-minus"></i><span class="more-view">{{text_more_category}}</span>');*/
/* 				}*/
/* 			});*/
/* 		})("#{{suffix_id}}");*/
/* */
/* */
/* 	*/
/* */
/* 	    $("#{{show_verticalmenu_id}}").click(function () {*/
/* 			if($('#{{suffix_id}} .vertical-wrapper').hasClass('so-vertical-active'))*/
/* 				$('#{{suffix_id}} .vertical-wrapper').removeClass('so-vertical-active');*/
/* 			else*/
/* 				$('#{{suffix_id}} .vertical-wrapper').addClass('so-vertical-active');*/
/* 		}); */
/* 		$('#{{remove_verticalmenu_id}}').click(function() {*/
/* 	        $('#{{suffix_id}} .vertical-wrapper').removeClass('so-vertical-active');*/
/* 	        return false;*/
/* 	    });	*/
/* 	});*/
/* </script>*/
/* {% endif %}*/
/* <script>*/
/* $(document).ready(function(){*/
/* 	$('a[href="{{ actual_link }}"]').each(function() {*/
/* 		$(this).parents('.with-sub-menu').addClass('sub-active');*/
/* 	});  */
/* });*/
/* </script>*/
