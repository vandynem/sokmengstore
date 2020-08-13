<?php

/* so-buyshop/template/common/footer.twig */
class __TwigTemplate_b52f2a31422358c4a4bb902d54b99c0d573b91e7cae2c80f88b2d309a13970d6 extends Twig_Template
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
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method") == "1")) {
            // line 4
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/footer/footer1.twig"), "so-buyshop/template/common/footer.twig", 4)->display(array_merge($context, array("typefooter" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method"))));
        } elseif (($this->getAttribute(        // line 5
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method") == "2")) {
            // line 6
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/footer/footer2.twig"), "so-buyshop/template/common/footer.twig", 6)->display(array_merge($context, array("typefooter" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method"))));
        } elseif (($this->getAttribute(        // line 7
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method") == "3")) {
            // line 8
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/footer/footer3.twig"), "so-buyshop/template/common/footer.twig", 8)->display(array_merge($context, array("typefooter" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method"))));
        } elseif (($this->getAttribute(        // line 9
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method") == "4")) {
            // line 10
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/footer/footer4.twig"), "so-buyshop/template/common/footer.twig", 10)->display(array_merge($context, array("typefooter" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method"))));
            // line 11
            echo "
";
        }
        // line 13
        echo "
";
        // line 14
        $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/icon-defs.twig"), "so-buyshop/template/common/footer.twig", 14)->display($context);
        // line 15
        echo "
\t
";
        // line 18
        echo "
";
        // line 19
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_sidebar"), "method")) {
            // line 20
            echo "\t";
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_sidebar"), "method") == 1)) {
                // line 21
                echo "\t\t";
                $context["social_sidebar"] = "socialwidgets-left";
                // line 22
                echo "\t";
            } else {
                // line 23
                echo "\t\t";
                $context["social_sidebar"] = "socialwidgets-right";
                // line 24
                echo "\t";
            }
            // line 25
            echo "\t<section class=\"social-widgets visible-lg ";
            echo (isset($context["social_sidebar"]) ? $context["social_sidebar"] : null);
            echo " \">
\t\t<ul class=\"items\">
\t\t\t";
            // line 27
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_fb_status"), "method")) {
                echo " 
\t\t\t<li class=\"item item-01 facebook\">
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 29
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/template/social/facebook.php?account_fb=";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "facebook"), "method");
                echo " \" class=\"tab-icon\"><span class=\"fa fa-facebook\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>FACEBOOK</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"catalog/view/theme/";
                // line 33
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/images/ajax-loader.gif\" class=\"ajaxloader lazyload\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 37
            echo " 

\t\t\t";
            // line 39
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_twitter_status"), "method")) {
                echo " 
\t\t\t<li class=\"item item-02 twitter\">
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 41
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/template/social/twitter.php?account_twitter=";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "twitter"), "method");
                echo " \" class=\"tab-icon\"><span class=\"fa fa-twitter\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>TWITTER FEEDS</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"catalog/view/theme/";
                // line 45
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/images/ajax-loader.gif\" class=\"ajaxloader lazyload\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 49
            echo " 

\t\t\t";
            // line 51
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_custom_status"), "method")) {
                echo " 
\t\t\t<li class=\"item item-03 youtube\">
\t\t\t\t<div class=\"tab-icon\"><span class=\"fa fa-youtube\"></span></div>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t";
                // line 56
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "video_code"), "method")) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "video_code"), "method")), "method");
                    echo "
\t\t\t\t\t\t";
                }
                // line 58
                echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 62
            echo " 
\t\t</ul>
\t</section>
\t
";
        }
        // line 66
        echo " 

</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 66,  156 => 62,  149 => 58,  143 => 57,  141 => 56,  133 => 51,  129 => 49,  121 => 45,  112 => 41,  107 => 39,  103 => 37,  95 => 33,  86 => 29,  81 => 27,  75 => 25,  72 => 24,  69 => 23,  66 => 22,  63 => 21,  60 => 20,  58 => 19,  55 => 18,  51 => 15,  49 => 14,  46 => 13,  42 => 11,  39 => 10,  37 => 9,  34 => 8,  32 => 7,  29 => 6,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }
}
/* {# =========== Show Header==============#}*/
/* */
/* {% if soconfig.get_settings('typefooter') =='1'%}*/
/* 	{% include theme_directory~'/template/footer/footer1.twig' with {typefooter: soconfig.get_settings('typefooter')} %}*/
/* {% elseif soconfig.get_settings('typefooter') =='2'%}*/
/* 	{% include theme_directory~'/template/footer/footer2.twig' with {typefooter: soconfig.get_settings('typefooter')} %}*/
/* {% elseif soconfig.get_settings('typefooter') =='3'%}*/
/* 	{% include theme_directory~'/template/footer/footer3.twig' with {typefooter: soconfig.get_settings('typefooter')} %}*/
/* {% elseif soconfig.get_settings('typefooter') =='4'%}*/
/* 	{% include theme_directory~'/template/footer/footer4.twig' with {typefooter: soconfig.get_settings('typefooter')} %}*/
/* */
/* {% endif %}*/
/* */
/* {% include theme_directory~'/template/soconfig/icon-defs.twig' %}*/
/* */
/* 	*/
/* {# =========== Show BackToTop==============#}*/
/* */
/* {% if soconfig.get_settings('social_sidebar')  %}*/
/* 	{% if soconfig.get_settings('social_sidebar') == 1 %}*/
/* 		{% set  social_sidebar = 'socialwidgets-left'%}*/
/* 	{% else %}*/
/* 		{% set  social_sidebar = 'socialwidgets-right'%}*/
/* 	{% endif %}*/
/* 	<section class="social-widgets visible-lg {{social_sidebar}} ">*/
/* 		<ul class="items">*/
/* 			{% if soconfig.get_settings('social_fb_status') %} */
/* 			<li class="item item-01 facebook">*/
/* 				<a href="catalog/view/theme/{{ theme_directory }}/template/social/facebook.php?account_fb={{soconfig.get_settings('facebook')}} " class="tab-icon"><span class="fa fa-facebook"></span></a>*/
/* 				<div class="tab-content">*/
/* 					<div class="title"><h5>FACEBOOK</h5></div>*/
/* 					<div class="loading">*/
/* 						<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="catalog/view/theme/{{ theme_directory }}/images/ajax-loader.gif" class="ajaxloader lazyload" alt="loader">*/
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* */
/* 			{% if soconfig.get_settings('social_twitter_status') %} */
/* 			<li class="item item-02 twitter">*/
/* 				<a href="catalog/view/theme/{{ theme_directory }}/template/social/twitter.php?account_twitter={{ soconfig.get_settings('twitter')}} " class="tab-icon"><span class="fa fa-twitter"></span></a>*/
/* 				<div class="tab-content">*/
/* 					<div class="title"><h5>TWITTER FEEDS</h5></div>*/
/* 					<div class="loading">*/
/* 						<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="catalog/view/theme/{{ theme_directory }}/images/ajax-loader.gif" class="ajaxloader lazyload" alt="loader">*/
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* */
/* 			{% if soconfig.get_settings('social_custom_status') %} */
/* 			<li class="item item-03 youtube">*/
/* 				<div class="tab-icon"><span class="fa fa-youtube"></span></div>*/
/* 				<div class="tab-content">*/
/* 					<div class="loading">*/
/* 						{% if soconfig.get_settings('video_code') %}*/
/* 								{{ soconfig.decode_entities( soconfig.get_settings('video_code') ) }}*/
/* 						{% endif %} */
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* 		</ul>*/
/* 	</section>*/
/* 	*/
/* {% endif %} */
/* */
/* </div>*/
/* </body>*/
/* </html>*/
