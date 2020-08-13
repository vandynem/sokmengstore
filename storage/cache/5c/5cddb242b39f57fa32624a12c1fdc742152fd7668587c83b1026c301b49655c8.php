<?php

/* so-buyshop/template/extension/module/so_newletter_custom_popup/default_layout_default.twig */
class __TwigTemplate_3e3480f2dd9fd4fa540bc009b1bb6ba0ca7910bd5c41290955195abcd701f8f4 extends Twig_Template
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
        $context["width_popup"] = (((isset($context["width"]) ? $context["width"] : null)) ? ((isset($context["width"]) ? $context["width"] : null)) : ("50%"));
        // line 2
        echo "
";
        // line 3
        if ((isset($context["image_bg_display"]) ? $context["image_bg_display"] : null)) {
            // line 4
            echo "    ";
            $context["bg"] = (("background: url(image/" . (isset($context["image"]) ? $context["image"] : null)) . ")");
        } elseif ((        // line 5
(isset($context["color_bg"]) ? $context["color_bg"] : null) != "")) {
            echo " 
   ";
            // line 6
            $context["bg"] = (("background-color: #" . (isset($context["color_bg"]) ? $context["color_bg"] : null)) . ";");
        }
        // line 8
        echo "

<div class=\"module ";
        // line 10
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo "\">
    <div class=\"newsletter \" style=\"width:";
        // line 11
        echo (isset($context["width_popup"]) ? $context["width_popup"] : null);
        echo "; ";
        echo (isset($context["bg"]) ? $context["bg"] : null);
        echo " \">
        ";
        // line 12
        if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
            echo " 
            <h3 class=\"modtitle\">";
            // line 13
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo " </h3>
        ";
        }
        // line 14
        echo " 
        
        <div class=\"title-block\">
            ";
        // line 17
        if ((isset($context["title_display"]) ? $context["title_display"] : null)) {
            // line 18
            echo "                <div class=\"page-heading font-title\">
                    ";
            // line 19
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "
                </div>
                <div class=\"promotext\">";
            // line 21
            echo (isset($context["newsletter_promo"]) ? $context["newsletter_promo"] : null);
            echo "</div>
            ";
        }
        // line 23
        echo "            ";
        if ( !twig_test_empty(trim((isset($context["pre_text"]) ? $context["pre_text"] : null)))) {
            // line 24
            echo "                <div class=\"form-group\">
                    ";
            // line 25
            echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
            echo "
                </div>
            ";
        }
        // line 28
        echo "        </div>

        <div class=\"block_content\">
             <form method=\"post\" id=\"";
        // line 31
        echo (isset($context["ids"]) ? $context["ids"] : null);
        echo "\" name=\"signup\" class=\"form-group form-inline signup \">
                <div class=\"form-group\">
                    <div class=\"input-box\">
                        <i class=\"fa fa-envelope\"></i>
                        <input type=\"email\" placeholder=\"";
        // line 35
        echo (isset($context["newsletter_placeholder"]) ? $context["newsletter_placeholder"] : null);
        echo "\" value=\"\" class=\"form-control\" id=\"";
        echo (isset($context["txtemail"]) ? $context["txtemail"] : null);
        echo "\" name=\"txtemail\" size=\"55\">
                    </div>
                    <div class=\"subcribe\">
                        <button class=\"btn btn-primary btn-default font-title\" type=\"submit\"  name=\"submit\">
                            <i class=\"fa fa-location-arrow\"></i><span>";
        // line 39
        echo (isset($context["newsletter_button"]) ? $context["newsletter_button"] : null);
        echo "</span>
                        </button>
                    </div>
                </div>
                <div class=\"send-mail\"></div>

            </form>

            

        </div> <!--/.modcontent-->
       ";
        // line 50
        if ( !twig_test_empty(trim((isset($context["post_text"]) ? $context["post_text"] : null)))) {
            // line 51
            echo "            <div class=\"form-group\">
                ";
            // line 52
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
            </div>
        ";
        }
        // line 55
        echo "        
    </div>

<script type=\"text/javascript\">
    //<![CDATA[
        jQuery(document).ready(function (\$) {
            (function (element) {
                var \$element = \$(element);
                \$(\"button\",\$element).click(function(){
                    var \$this = \$(this);
                    if(typeof(subscribe_newsletter) != 'undefined'){
                        subscribe_newsletter();
                    }
                     return false;

                });

                function subscribe_newsletter()
                {
                    var emailpattern = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/;
                    var email = \$('#";
        // line 75
        echo (isset($context["txtemail"]) ? $context["txtemail"] : null);
        echo "',\$element).val();

                    var d = new Date();
                    var createdate = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
                    var status   = 0;
                    var dataString = 'email='+email+'&createdate='+createdate+'&status='+status;
                   

        if(email != \"\"){

            if(!emailpattern.test(email))
            {

               \$('.alert').remove();
\t            \$('.send-mail',\$element).after('<div class=\"alert alert-danger show-error\" role=\"alert\"><i class=\"fa fa-check-circle\"></i> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> Invalid Email </div>')
\t            return false;
            }
            else
            {
                \$.ajax({
                    url: 'index.php?route=extension/module/so_newletter_custom_popup/newsletter',
                    type: 'post',
                    data: dataString,
                    dataType: 'json',
                    success: function(json) {
                         \$('.alert').remove();
                        if(json.error == false) {
                              \$('.send-mail',\$element).after('<div class=\"alert alert-success show-error\" role=\"alert\"> <i class=\"fa fa-check-circle\"></i> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> ' + json.message + '</div>');
                                setTimeout(function () {
                                    var this_close = \$('.popup-close');
                                    this_close.parent().css('display', 'none');
                                    this_close.parents().find('.so_newletter_custom_popup_bg').removeClass('popup_bg');
                                }, 3000);

                         }else{
                                \$('.send-mail',\$element).after('<div class=\"alert alert-danger show-error\" role=\"alert\"><i class=\"fa fa-check-circle\"></i> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> ' + json.message + '</div>');
                            }
                            var x = document.getElementsByClassName('signup');
                                for (i = 0; i < x.length; i++) {
                                x[i].reset();
                            }
                    }
                });
                return false;
            }
        } else{
            alert(\"";
        // line 121
        echo (isset($context["text_email_required"]) ? $context["text_email_required"] : null);
        echo "\");
            \$(email).focus();
            return false;
        }
    }
     })(\"#";
        // line 126
        echo (isset($context["ids"]) ? $context["ids"] : null);
        echo " \");    
    });
    //]]>
</script>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_newletter_custom_popup/default_layout_default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 126,  208 => 121,  159 => 75,  137 => 55,  131 => 52,  128 => 51,  126 => 50,  112 => 39,  103 => 35,  96 => 31,  91 => 28,  85 => 25,  82 => 24,  79 => 23,  74 => 21,  69 => 19,  66 => 18,  64 => 17,  59 => 14,  54 => 13,  50 => 12,  44 => 11,  40 => 10,  36 => 8,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set width_popup = width ? width : '50%' %}*/
/* */
/* {% if image_bg_display %}*/
/*     {% set bg   =  'background: url(image/'~image~')' %}*/
/* {% elseif color_bg != '' %} */
/*    {%  set  bg  =  'background-color: #'~color_bg~';' %}*/
/* {% endif %}*/
/* */
/* */
/* <div class="module {{ class_suffix }}">*/
/*     <div class="newsletter " style="width:{{ width_popup }}; {{ bg }} ">*/
/*         {% if disp_title_module %} */
/*             <h3 class="modtitle">{{ head_name }} </h3>*/
/*         {% endif %} */
/*         */
/*         <div class="title-block">*/
/*             {% if title_display %}*/
/*                 <div class="page-heading font-title">*/
/*                     {{ title }}*/
/*                 </div>*/
/*                 <div class="promotext">{{ newsletter_promo }}</div>*/
/*             {% endif %}*/
/*             {% if pre_text|trim is not empty %}*/
/*                 <div class="form-group">*/
/*                     {{ pre_text }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         <div class="block_content">*/
/*              <form method="post" id="{{ids}}" name="signup" class="form-group form-inline signup ">*/
/*                 <div class="form-group">*/
/*                     <div class="input-box">*/
/*                         <i class="fa fa-envelope"></i>*/
/*                         <input type="email" placeholder="{{ newsletter_placeholder}}" value="" class="form-control" id="{{txtemail}}" name="txtemail" size="55">*/
/*                     </div>*/
/*                     <div class="subcribe">*/
/*                         <button class="btn btn-primary btn-default font-title" type="submit"  name="submit">*/
/*                             <i class="fa fa-location-arrow"></i><span>{{ newsletter_button  }}</span>*/
/*                         </button>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="send-mail"></div>*/
/* */
/*             </form>*/
/* */
/*             */
/* */
/*         </div> <!--/.modcontent-->*/
/*        {% if post_text|trim is not empty %}*/
/*             <div class="form-group">*/
/*                 {{ post_text }}*/
/*             </div>*/
/*         {% endif %}*/
/*         */
/*     </div>*/
/* */
/* <script type="text/javascript">*/
/*     //<![CDATA[*/
/*         jQuery(document).ready(function ($) {*/
/*             (function (element) {*/
/*                 var $element = $(element);*/
/*                 $("button",$element).click(function(){*/
/*                     var $this = $(this);*/
/*                     if(typeof(subscribe_newsletter) != 'undefined'){*/
/*                         subscribe_newsletter();*/
/*                     }*/
/*                      return false;*/
/* */
/*                 });*/
/* */
/*                 function subscribe_newsletter()*/
/*                 {*/
/*                     var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;*/
/*                     var email = $('#{{txtemail}}',$element).val();*/
/* */
/*                     var d = new Date();*/
/*                     var createdate = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();*/
/*                     var status   = 0;*/
/*                     var dataString = 'email='+email+'&createdate='+createdate+'&status='+status;*/
/*                    */
/* */
/*         if(email != ""){*/
/* */
/*             if(!emailpattern.test(email))*/
/*             {*/
/* */
/*                $('.alert').remove();*/
/* 	            $('.send-mail',$element).after('<div class="alert alert-danger show-error" role="alert"><i class="fa fa-check-circle"></i> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> Invalid Email </div>')*/
/* 	            return false;*/
/*             }*/
/*             else*/
/*             {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=extension/module/so_newletter_custom_popup/newsletter',*/
/*                     type: 'post',*/
/*                     data: dataString,*/
/*                     dataType: 'json',*/
/*                     success: function(json) {*/
/*                          $('.alert').remove();*/
/*                         if(json.error == false) {*/
/*                               $('.send-mail',$element).after('<div class="alert alert-success show-error" role="alert"> <i class="fa fa-check-circle"></i> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> ' + json.message + '</div>');*/
/*                                 setTimeout(function () {*/
/*                                     var this_close = $('.popup-close');*/
/*                                     this_close.parent().css('display', 'none');*/
/*                                     this_close.parents().find('.so_newletter_custom_popup_bg').removeClass('popup_bg');*/
/*                                 }, 3000);*/
/* */
/*                          }else{*/
/*                                 $('.send-mail',$element).after('<div class="alert alert-danger show-error" role="alert"><i class="fa fa-check-circle"></i> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> ' + json.message + '</div>');*/
/*                             }*/
/*                             var x = document.getElementsByClassName('signup');*/
/*                                 for (i = 0; i < x.length; i++) {*/
/*                                 x[i].reset();*/
/*                             }*/
/*                     }*/
/*                 });*/
/*                 return false;*/
/*             }*/
/*         } else{*/
/*             alert("{{ text_email_required }}");*/
/*             $(email).focus();*/
/*             return false;*/
/*         }*/
/*     }*/
/*      })("#{{ids}} ");    */
/*     });*/
/*     //]]>*/
/* </script>*/
/* </div>*/
/* */
