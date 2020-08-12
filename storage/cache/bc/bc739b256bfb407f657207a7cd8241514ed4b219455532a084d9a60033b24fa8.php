<?php

/* so-buyshop/template/common/header.twig */
class __TwigTemplate_dcf55b1d63cabae81e3ca20e69e21a4609b6d94a8017da7115817897bc1894f8 extends Twig_Template
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
        // line 9
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 10
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '2457000054354014'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height=\"1\" width=\"1\" 
src=\"https://www.facebook.com/tr?id=2457000054354014&ev=PageView
&noscript=1\"/>
</noscript>
<!-- End Facebook Pixel Code -->
<meta charset=\"UTF-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 33
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>


  ";
        // line 36
        $context["i"] = 1;
        // line 37
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 38
            echo "\t";
            if (((isset($context["i"]) ? $context["i"] : null) == 1)) {
                // line 39
                echo "\t\t<meta property=\"og:url\"           content=\"";
                echo $this->getAttribute($context["link"], "href", array());
                echo "\" />
<meta property=\"al:iphone:url\" content=\"";
                // line 40
                echo $this->getAttribute($context["link"], "href", array());
                echo "\">
\t\t";
                // line 41
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 42
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  
  

  <meta property=\"og:type\"          content=\"website\" />
  <meta property=\"og:title\"         content=\"https://konfulononline.com/\" />
    <meta property=\"og:image\"         content=\"";
        // line 49
        echo (isset($context["popup"]) ? $context["popup"] : null);
        echo "\" />

<base href=\"https://konfulononline.com\" />
<meta property=\"og:title\" content=\"";
        // line 52
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "\" />
<meta property=\"og:type\" content=\"product\" />
<meta property=\"og:description\" content=\"";
        // line 54
        echo (isset($context["description_short"]) ? $context["description_short"] : null);
        echo "\" />
<meta property=\"og:site_name\" content=\"konfulononline.com\" />
<meta property=\"al:android:package\" content=\"com.nimblent\" />
<meta property=\"al:android:app_name\" content=\"Konfulon\" />
<meta property=\"al:web:should_fallback\" content=\"false\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> 
";
        // line 60
        if ((isset($context["description"]) ? $context["description"] : null)) {
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />";
        }
        // line 61
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />";
        }
        // line 62
        echo "<!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"><![endif]-->

";
        // line 65
        if (((isset($context["direction"]) ? $context["direction"] : null) == "ltr")) {
            echo " ";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/bootstrap/css/bootstrap.min.css"), "method");
            echo "
";
        } elseif ((        // line 66
(isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/soconfig/css/bootstrap/bootstrap.rtl.min.css"), "method");
            echo " 
";
        } else {
            // line 67
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/bootstrap/css/bootstrap.min.css"), "method");
            echo " ";
        }
        // line 68
        echo "
";
        // line 69
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/font-awesome/css/font-awesome.min.css"), "method");
        echo "
";
        // line 70
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/soconfig/css/lib.css"), "method");
        echo "
";
        // line 71
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/css/ie9-and-up.css")), "method");
        echo "
";
        // line 72
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/css/custom.css")), "method");
        echo "

";
        // line 74
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.0/css/intlTelInput.css"), "method");
        echo "

";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => $this->getAttribute($context["style"], "href", array())), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssfile_status"), "method")) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssfile_url"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["cssfile"]) {
                echo " ";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => $context["cssfile"]), "method");
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssfile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
        }
        // line 78
        echo "


";
        // line 82
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/jquery/jquery-2.1.1.min.js"), "method");
        echo "
";
        // line 83
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/bootstrap/js/bootstrap.min.js"), "method");
        echo "
";
        // line 84
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/libs.js"), "method");
        echo "

";
        // line 86
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/so.system.js"), "method");
        echo "
";
        // line 87
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/jquery.sticky-kit.min.js"), "method");
        echo "
";
        // line 88
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/lazysizes/lazysizes.min.js"), "method");
        echo "



";
        // line 92
        if (((isset($context["class"]) ? $context["class"] : null) == "information-information")) {
            echo " ";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/typo/element.js"), "method");
            echo " ";
        }
        // line 93
        echo "

";
        // line 95
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/so.custom.js")), "method");
        echo "
";
        // line 96
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/common.js")), "method");
        echo "



";
        // line 100
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_status"), "method")) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/toppanel.js"), "method");
        }
        // line 101
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/so_onepagecheckout/js/so_onepagecheckout.js"), "method");
        echo "
";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo " ";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => $context["script"]), "method");
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "

";
        // line 106
        echo "
";
        // line 107
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "scss_compass", array());
        echo "
";
        // line 108
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "css_out", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssExclude"), "method")), "method");
        echo "
";
        // line 109
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "js_out", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsExclude"), "method")), "method");
        echo "
";
        // line 111
        echo "
";
        // line 112
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_body"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "body_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_body"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 113
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_menu"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "menu_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_menu"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 114
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_heading"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "heading_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_heading"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t





";
        // line 120
        if ((isset($context["selector_body"]) ? $context["selector_body"] : null)) {
            // line 121
            echo "\t<style type=\"text/css\">
\t\t";
            // line 122
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "body_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["selector_body"]) ? $context["selector_body"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "family_body"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 123
                echo "  ";
                echo ((((isset($context["selector_body"]) ? $context["selector_body"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "normal_body"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 125
        echo " 
";
        // line 126
        if ((isset($context["selector_menu"]) ? $context["selector_menu"] : null)) {
            // line 127
            echo "\t<style type=\"text/css\">
\t\t";
            // line 128
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "menu_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["selector_menu"]) ? $context["selector_menu"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "family_menu"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 129
                echo "  ";
                echo ((((isset($context["selector_menu"]) ? $context["selector_menu"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "normal_menu"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 131
        echo " 
";
        // line 132
        if ((isset($context["selector_heading"]) ? $context["selector_heading"] : null)) {
            // line 133
            echo "\t<style type=\"text/css\">
\t\t";
            // line 134
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "heading_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["selector_heading"]) ? $context["selector_heading"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "family_heading"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 135
                echo "  ";
                echo ((((isset($context["selector_heading"]) ? $context["selector_heading"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "normal_heading"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 137
        echo " 


";
        // line 141
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssinput_status"), "method") &&  !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssinput_content"), "method")))) {
            // line 142
            echo "    <style type=\"text/css\">";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssinput_content"), "method");
            echo " </style>
";
        }
        // line 143
        echo " 

";
        // line 145
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsinput_status"), "method") &&  !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsinput_content"), "method")))) {
            // line 146
            echo "   <script type=\"text/javascript\"><!--";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsinput_content"), "method");
            echo "  //--></script>
";
        }
        // line 147
        echo " 


";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 153
            echo "\t";
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
";
        // line 157
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "layoutstyle"), "method") == "boxed")) {
            echo " 
\t<style type=\"text/css\">
\tbody {
\t\tbackground-color:";
            // line 160
            echo (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "theme_bgcolor"), "method")) ? ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "theme_bgcolor"), "method")) : ("none"));
            echo " ;\t\t
\t\t";
            // line 161
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contentbg"), "method") != "")) {
                // line 162
                echo "\t\t\tbackground-image: url(\"image/";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contentbg"), "method");
                echo " \");
\t\t";
            }
            // line 164
            echo "\t\tbackground-repeat:";
            echo (( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_bg_mode"), "method"))) ? ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_bg_mode"), "method")) : ("no-repeat"));
            echo " ;
\t\tbackground-attachment:";
            // line 165
            echo (( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_attachment"), "method"))) ? ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_attachment"), "method")) : ("inherit"));
            echo " ;
\t\tbackground-position:top center; 
\t}
\t</style>
";
        }
        // line 169
        echo " \t

 
 ";
        // line 172
        echo (isset($context["topbar_css"]) ? $context["topbar_css"] : null);
        echo " 
 
</head>
";
        // line 176
        echo "
\t";
        // line 177
        $context["layoutbox"] = (( !twig_test_empty((isset($context["url_layoutbox"]) ? $context["url_layoutbox"] : null))) ? ((isset($context["url_layoutbox"]) ? $context["url_layoutbox"] : null)) : ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "layoutstyle"), "method")));
        // line 178
        echo "\t";
        $context["pattern"] = (( !twig_test_empty((isset($context["url_pattern"]) ? $context["url_pattern"] : null))) ? ((isset($context["url_pattern"]) ? $context["url_pattern"] : null)) : ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "pattern"), "method")));
        // line 179
        echo "

\t";
        // line 181
        $context["cls_body"] = ((isset($context["class"]) ? $context["class"] : null) . " ");
        // line 182
        echo "\t";
        $context["cls_body"] = ((isset($context["cls_body"]) ? $context["cls_body"] : null) . (isset($context["direction"]) ? $context["direction"] : null));
        // line 183
        echo "\t";
        $context["cls_body"] = (((isset($context["cls_body"]) ? $context["cls_body"] : null) . " layout-") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typelayout"), "method"));
        // line 184
        if (((((isset($context["layoutbox"]) ? $context["layoutbox"] : null) == "boxed") && ((isset($context["pattern"]) ? $context["pattern"] : null) != "none")) && twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contentbg"), "method")))) {
            // line 185
            echo "\t";
            $context["cls_body"] = (((isset($context["cls_body"]) ? $context["cls_body"] : null) . " pattern-") . (isset($context["pattern"]) ? $context["pattern"] : null));
        }
        // line 186
        echo " 

\t";
        // line 188
        $context["cls_wrapper"] = ("wrapper-" . (isset($context["layoutbox"]) ? $context["layoutbox"] : null));
        // line 189
        echo "\t";
        $context["cls_wrapper"] = (((isset($context["cls_wrapper"]) ? $context["cls_wrapper"] : null) . " banners-effect-") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "type_banner"), "method"));
        // line 190
        echo "\t
<body class=\"";
        // line 191
        echo (isset($context["cls_body"]) ? $context["cls_body"] : null);
        echo "\">
 
 ";
        // line 193
        echo (isset($context["so_topbar"]) ? $context["so_topbar"] : null);
        echo " 
 
<div id=\"wrapper\" class=\"";
        // line 195
        echo (isset($context["cls_wrapper"]) ? $context["cls_wrapper"] : null);
        echo "\">  
 
";
        // line 198
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "preloader"), "method")) {
            // line 199
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/preloader.twig"), "so-buyshop/template/common/header.twig", 199)->display(array_merge($context, array("preloader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "preloader_animation"), "method"))));
        }
        // line 201
        echo "
";
        // line 203
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "1")) {
            // line 204
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header1.twig"), "so-buyshop/template/common/header.twig", 204)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 205
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "2")) {
            // line 206
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header2.twig"), "so-buyshop/template/common/header.twig", 206)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 207
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "3")) {
            // line 208
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header3.twig"), "so-buyshop/template/common/header.twig", 208)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 209
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "4")) {
            // line 210
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header4.twig"), "so-buyshop/template/common/header.twig", 210)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
            // line 211
            echo "

";
        } else {
            // line 213
            echo "\t
\t<style>
\t\t.alert-primary .alert-link {color: #002752;}
\t\t.alert-link {font-weight: 700;text-decoration: none;}
\t\t.alert-link:hover{text-decoration: underline;}
\t\t.alert {color: #004085;background-color: #cce5ff;padding: .75rem 1.25rem;margin-bottom: 1rem;border: 1px solid #b8daff;border-radius: .25rem;
\t\t}
\t</style>
\t<div class=\"alert alert-primary\">
\t\t\tGo to admin, find Extensions >>  <a class=\"alert-link\" href=\"admin/index.php?route=marketplace/modification\"  target=”_blank”> Modifications </a> and click 'Refresh' button. To apply the changes characterised by the uploaded modification file
\t</div>
";
        }
        // line 225
        echo "
<div id=\"socialLogin\"></div>

 ";
        // line 228
        if (((array_key_exists("setting", $context) && $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_enable", array())) && $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_popuplogin", array()))) {
            // line 229
            echo " <div class=\"modal fade in\" id=\"so_sociallogin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
 <div class=\"modal-dialog block-popup-login\">
 <a href=\"javascript:void(0)\" title=\"Close\" class=\"close close-login fa fa-times-circle\" data-dismiss=\"modal\"></a>
 <div class=\"tt_popup_login\"><strong>";
            // line 232
            echo (isset($context["text_title_popuplogin"]) ? $context["text_title_popuplogin"] : null);
            echo "</strong></div>
 <div class=\"block-content\">
 <div class=\" col-reg registered-account\">
 <div class=\"block-content\">
 <form class=\"form form-login\" action=\"";
            // line 236
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\" method=\"post\" id=\"login-form\">
 <fieldset class=\"fieldset login\" data-hasrequired=\"* Required Fields\">
 <div class=\"field email required email-input\">
 <div class=\"control\">
 <input name=\"email\" value=\"\" autocomplete=\"off\" id=\"email\" type=\"email\" class=\"input-text\" title=\"Email\" placeholder=\"E-mail Address\" />
 </div>
 </div>
 <div class=\"field password required pass-input\">
 <div class=\"control\">
 <input name=\"password\" type=\"password\" autocomplete=\"off\" class=\"input-text\" id=\"pass\" title=\"Password\" placeholder=\"Password\" />
 </div>
 </div>
 ";
            // line 248
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_enable", array())) {
                // line 249
                echo " <div class=\" form-group\">
 <label class=\"control-label\">";
                // line 250
                echo (isset($context["text_title_login_with_social"]) ? $context["text_title_login_with_social"] : null);
                echo "</label>
 <div>
 ";
                // line 252
                if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_googlestatus", array())) {
                    // line 253
                    echo " ";
                    if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "icon")) {
                        // line 254
                        echo " <a href=\"";
                        echo (isset($context["googlelink"]) ? $context["googlelink"] : null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-google-plus\"><i class=\"fa fa-google fa-fw\" aria-hidden=\"true\"></i></a>
 ";
                    } else {
                        // line 256
                        echo " <a class=\"social-icon\" href=\"";
                        echo (isset($context["googlelink"]) ? $context["googlelink"] : null);
                        echo "\">
 <img class=\"img-responsive\" src=\"";
                        // line 257
                        echo (isset($context["googleimage"]) ? $context["googleimage"] : null);
                        echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                        // line 258
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_googletitle", array());
                        echo "\" 
 title=\"";
                        // line 259
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_googletitle", array());
                        echo "\" 
 />
 </a>
 ";
                    }
                    // line 263
                    echo " ";
                }
                // line 264
                echo " ";
                if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_fbstatus", array())) {
                    // line 265
                    echo " ";
                    if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "icon")) {
                        // line 266
                        echo " <a href=\"";
                        echo (isset($context["fblink"]) ? $context["fblink"] : null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-facebook\"><i class=\"fa fa-facebook fa-fw\" aria-hidden=\"true\"></i></a>
 ";
                    } else {
                        // line 268
                        echo " <a href=\"";
                        echo (isset($context["fblink"]) ? $context["fblink"] : null);
                        echo "\" class=\"social-icon\">
 <img class=\"img-responsive\" src=\"";
                        // line 269
                        echo (isset($context["fbimage"]) ? $context["fbimage"] : null);
                        echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                        // line 270
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_fbtitle", array());
                        echo "\" 
 title=\"";
                        // line 271
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_fbtitle", array());
                        echo "\"
 />
 </a>
 ";
                    }
                    // line 275
                    echo " ";
                }
                // line 276
                echo " ";
                if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_twitstatus", array())) {
                    // line 277
                    echo " ";
                    if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "icon")) {
                        // line 278
                        echo " <a href=\"";
                        echo (isset($context["twitlink"]) ? $context["twitlink"] : null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-twitter\"><i class=\"fa fa-twitter fa-fw\" aria-hidden=\"true\"></i></a>
 ";
                    } else {
                        // line 280
                        echo " <a class=\"social-icon\" href=\"";
                        echo (isset($context["twitlink"]) ? $context["twitlink"] : null);
                        echo "\">
 <img class=\"img-responsive\" src=\"";
                        // line 281
                        echo (isset($context["twitimage"]) ? $context["twitimage"] : null);
                        echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                        // line 282
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_twittertitle", array());
                        echo "\" 
 title=\"";
                        // line 283
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_twittertitle", array());
                        echo "\"
 />
 </a>
 ";
                    }
                    // line 287
                    echo " ";
                }
                // line 288
                echo " ";
                if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_linkstatus", array())) {
                    // line 289
                    echo " ";
                    if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "icon")) {
                        // line 290
                        echo " <a href=\"";
                        echo (isset($context["linkdinlink"]) ? $context["linkdinlink"] : null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-linkdin\"><i class=\"fa fa-linkedin fa-fw\" aria-hidden=\"true\"></i></a>
 ";
                    } else {
                        // line 292
                        echo " <a class=\"social-icon\" href=\"";
                        echo (isset($context["linkdinlink"]) ? $context["linkdinlink"] : null);
                        echo "\">
 <img class=\"img-responsive\" src=\"";
                        // line 293
                        echo (isset($context["linkdinimage"]) ? $context["linkdinimage"] : null);
                        echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                        // line 294
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_linkedintitle", array());
                        echo "\" 
 title=\"";
                        // line 295
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_linkedintitle", array());
                        echo "\"
 />
 </a>
 ";
                    }
                    // line 299
                    echo " ";
                }
                // line 300
                echo " </div>
 </div>
 ";
            }
            // line 303
            echo " <div class=\"secondary ft-link-p\"><a class=\"action remind\" href=\"";
            echo (isset($context["link_forgot_password"]) ? $context["link_forgot_password"] : null);
            echo "\"><span>";
            echo (isset($context["text_forgot_password"]) ? $context["text_forgot_password"] : null);
            echo "</span></a></div>
 <div class=\"actions-toolbar\">
 <div class=\"primary\"><button type=\"submit\" class=\"action login primary\" name=\"send\" id=\"send2\"><span>";
            // line 305
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</span></button></div>
 </div>
 </fieldset>
 </form>
 </div>
 </div> 
 <div class=\"col-reg login-customer\">
 ";
            // line 312
            echo (isset($context["text_colregister"]) ? $context["text_colregister"] : null);
            echo "
 <a class=\"btn-reg-popup\" title=\"";
            // line 313
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "\" href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_create_account"]) ? $context["text_create_account"] : null);
            echo "</a>
 </div>
 <div style=\"clear:both;\"></div>
 </div>
 </div>
 </div>
 <script type=\"text/javascript\">
 jQuery(document).ready(function(\$) {
 var \$window = \$(window);
 function checkWidth() {
 var windowsize = \$window.width();
 if (windowsize > 767) {
 \$('a[href*=\"account/login\"]').click(function (e) {
 e.preventDefault();
 \$(\"#so_sociallogin\").modal('show');
 });
 }
 }
 checkWidth();
 \$(window).resize(checkWidth);
 });
 </script>
 ";
        }
        // line 336
        echo " 
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  824 => 336,  794 => 313,  790 => 312,  780 => 305,  772 => 303,  767 => 300,  764 => 299,  757 => 295,  753 => 294,  749 => 293,  744 => 292,  738 => 290,  735 => 289,  732 => 288,  729 => 287,  722 => 283,  718 => 282,  714 => 281,  709 => 280,  703 => 278,  700 => 277,  697 => 276,  694 => 275,  687 => 271,  683 => 270,  679 => 269,  674 => 268,  668 => 266,  665 => 265,  662 => 264,  659 => 263,  652 => 259,  648 => 258,  644 => 257,  639 => 256,  633 => 254,  630 => 253,  628 => 252,  623 => 250,  620 => 249,  618 => 248,  603 => 236,  596 => 232,  591 => 229,  589 => 228,  584 => 225,  570 => 213,  565 => 211,  562 => 210,  560 => 209,  557 => 208,  555 => 207,  552 => 206,  550 => 205,  547 => 204,  545 => 203,  542 => 201,  538 => 199,  536 => 198,  531 => 195,  526 => 193,  521 => 191,  518 => 190,  515 => 189,  513 => 188,  509 => 186,  505 => 185,  503 => 184,  500 => 183,  497 => 182,  495 => 181,  491 => 179,  488 => 178,  486 => 177,  483 => 176,  477 => 172,  472 => 169,  464 => 165,  459 => 164,  453 => 162,  451 => 161,  447 => 160,  441 => 157,  438 => 155,  429 => 153,  424 => 152,  411 => 151,  406 => 147,  400 => 146,  398 => 145,  394 => 143,  388 => 142,  386 => 141,  381 => 137,  373 => 135,  366 => 134,  363 => 133,  361 => 132,  358 => 131,  350 => 129,  343 => 128,  340 => 127,  338 => 126,  335 => 125,  327 => 123,  320 => 122,  317 => 121,  315 => 120,  302 => 114,  294 => 113,  286 => 112,  283 => 111,  279 => 109,  275 => 108,  271 => 107,  268 => 106,  264 => 103,  253 => 102,  249 => 101,  245 => 100,  238 => 96,  234 => 95,  230 => 93,  224 => 92,  217 => 88,  213 => 87,  209 => 86,  204 => 84,  200 => 83,  196 => 82,  191 => 78,  177 => 77,  168 => 76,  163 => 74,  158 => 72,  154 => 71,  150 => 70,  146 => 69,  143 => 68,  139 => 67,  133 => 66,  127 => 65,  123 => 62,  117 => 61,  111 => 60,  102 => 54,  97 => 52,  91 => 49,  84 => 44,  77 => 42,  75 => 41,  71 => 40,  66 => 39,  63 => 38,  58 => 37,  56 => 36,  50 => 33,  22 => 10,  19 => 9,);
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
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/* <!-- Facebook Pixel Code -->*/
/* <script>*/
/* !function(f,b,e,v,n,t,s)*/
/* {if(f.fbq)return;n=f.fbq=function(){n.callMethod?*/
/* n.callMethod.apply(n,arguments):n.queue.push(arguments)};*/
/* if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';*/
/* n.queue=[];t=b.createElement(e);t.async=!0;*/
/* t.src=v;s=b.getElementsByTagName(e)[0];*/
/* s.parentNode.insertBefore(t,s)}(window,document,'script',*/
/* 'https://connect.facebook.net/en_US/fbevents.js');*/
/*  fbq('init', '2457000054354014'); */
/* fbq('track', 'PageView');*/
/* </script>*/
/* <noscript>*/
/*  <img height="1" width="1" */
/* src="https://www.facebook.com/tr?id=2457000054354014&ev=PageView*/
/* &noscript=1"/>*/
/* </noscript>*/
/* <!-- End Facebook Pixel Code -->*/
/* <meta charset="UTF-8" />*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* */
/* */
/*   {% set i=1 %}*/
/*   {% for link in links %}*/
/* 	{% if i==1 %}*/
/* 		<meta property="og:url"           content="{{ link.href }}" />*/
/* <meta property="al:iphone:url" content="{{ link.href }}">*/
/* 		{% set i=i+1 %}*/
/*     {% endif%}*/
/* {% endfor %}*/
/*   */
/*   */
/* */
/*   <meta property="og:type"          content="website" />*/
/*   <meta property="og:title"         content="https://konfulononline.com/" />*/
/*     <meta property="og:image"         content="{{popup}}" />*/
/* */
/* <base href="https://konfulononline.com" />*/
/* <meta property="og:title" content="{{ title }}" />*/
/* <meta property="og:type" content="product" />*/
/* <meta property="og:description" content="{{description_short}}" />*/
/* <meta property="og:site_name" content="konfulononline.com" />*/
/* <meta property="al:android:package" content="com.nimblent" />*/
/* <meta property="al:android:app_name" content="Konfulon" />*/
/* <meta property="al:web:should_fallback" content="false" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1"> */
/* {% if description %}<meta name="description" content="{{ description }}" />{% endif %}*/
/* {% if keywords %}<meta name="keywords" content="{{ keywords }}" />{% endif %}*/
/* <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->*/
/* */
/* {# =========== Begin General CSS ==============#}*/
/* {% if direction=='ltr' %} {{soconfig.addCss('catalog/view/javascript/bootstrap/css/bootstrap.min.css')}}*/
/* {% elseif direction=='rtl' %}{{soconfig.addCss('catalog/view/javascript/soconfig/css/bootstrap/bootstrap.rtl.min.css')}} */
/* {% else %}{{soconfig.addCss('catalog/view/javascript/bootstrap/css/bootstrap.min.css')}} {% endif %}*/
/* */
/* {{soconfig.addCss('catalog/view/javascript/font-awesome/css/font-awesome.min.css')}}*/
/* {{soconfig.addCss('catalog/view/javascript/soconfig/css/lib.css')}}*/
/* {{soconfig.addCss('catalog/view/theme/'~theme_directory~'/css/ie9-and-up.css')}}*/
/* {{soconfig.addCss('catalog/view/theme/'~theme_directory~'/css/custom.css')}}*/
/* */
/* {{soconfig.addCss('https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.0/css/intlTelInput.css')}}*/
/* */
/* {% for style in styles %}{{ soconfig.addCss(style.href)}}{% endfor %}*/
/* {% if soconfig.get_settings('cssfile_status') %}{% for cssfile in soconfig.get_settings('cssfile_url') %} {{soconfig.addCss(cssfile)}} {% endfor %} {% endif %}*/
/* */
/* */
/* */
/* {# =========== Begin General Scripts ==============#}*/
/* {{soconfig.addJs('catalog/view/javascript/jquery/jquery-2.1.1.min.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/bootstrap/js/bootstrap.min.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/libs.js')}}*/
/* */
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/so.system.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/jquery.sticky-kit.min.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/lazysizes/lazysizes.min.js')}}*/
/* */
/* */
/* */
/* {% if class=='information-information' %} {{soconfig.addJs('catalog/view/javascript/soconfig/js/typo/element.js')}} {% endif %}*/
/* */
/* */
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/so.custom.js')}}*/
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/common.js')}}*/
/* */
/* */
/* */
/* {% if soconfig.get_settings('toppanel_status') %}{{soconfig.addJs('catalog/view/javascript/soconfig/js/toppanel.js')}}{% endif %}*/
/* {{soconfig.addJs('catalog/view/javascript/so_onepagecheckout/js/so_onepagecheckout.js')}}*/
/* {% for script in scripts %} {{soconfig.addJs(script)}} {% endfor %}*/
/* */
/* */
/* {# =========== Begin Other CSS & JS  ==============#}*/
/* */
/* {{soconfig.scss_compass}}*/
/* {{soconfig.css_out(soconfig.get_settings('cssExclude'))}}*/
/* {{soconfig.js_out(soconfig.get_settings('jsExclude'))}}*/
/* {# =========== Begin Google Font ==============#}*/
/* */
/* {% if soconfig.get_settings('url_body')  and  soconfig.get_settings('body_status') ==  'google' %} <link href='{{ soconfig.get_settings('url_body') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if soconfig.get_settings('url_menu')  and  soconfig.get_settings('menu_status')  ==  'google' %} <link href='{{ soconfig.get_settings('url_menu') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if soconfig.get_settings('url_heading')  and  soconfig.get_settings('heading_status') ==  'google' %} <link href='{{ soconfig.get_settings('url_heading') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* */
/* */
/* */
/* */
/* */
/* {% if selector_body %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('body_status') == 'google' %} {{ (selector_body|raw~'{font-family:'~ soconfig.get_settings('family_body')~'}') }}*/
/* 		{% else %}  {{ selector_body|raw~'{font-family:'~ soconfig.get_settings('normal_body')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* {% if selector_menu %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('menu_status') == 'google' %} {{ (selector_menu|raw~'{font-family:'~ soconfig.get_settings('family_menu')~'}') }}*/
/* 		{% else %}  {{ selector_menu|raw~'{font-family:'~ soconfig.get_settings('normal_menu')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* {% if selector_heading %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('heading_status') == 'google' %} {{ (selector_heading|raw~'{font-family:'~ soconfig.get_settings('family_heading')~'}') }}*/
/* 		{% else %}  {{ selector_heading|raw~'{font-family:'~ soconfig.get_settings('normal_heading')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* */
/* */
/* {# =========== Custom Code Editor ==============#}*/
/* {% if soconfig.get_settings('cssinput_status') and (soconfig.get_settings('cssinput_content')) is not empty %}*/
/*     <style type="text/css">{{ soconfig.get_settings('cssinput_content')  }} </style>*/
/* {% endif %} */
/* */
/* {% if soconfig.get_settings('jsinput_status') and (soconfig.get_settings('jsinput_content')) is not empty %}*/
/*    <script type="text/javascript"><!--{{ soconfig.get_settings('jsinput_content')  }}  //--></script>*/
/* {% endif %} */
/* */
/* */
/* {# =========== Begin Google Analytics ==============#}*/
/* {% for link in links %}<link href="{{ link.href }}" rel="{{ link.rel }}" />{% endfor %}*/
/* 	{% for analytic in analytics %}*/
/* 	{{ analytic }}*/
/* {% endfor %}*/
/* */
/* {# =========== Begin Cusom Code ==============#}*/
/* {% if soconfig.get_settings('layoutstyle') == 'boxed'  %} */
/* 	<style type="text/css">*/
/* 	body {*/
/* 		background-color:{{ soconfig.get_settings('theme_bgcolor') ? soconfig.get_settings('theme_bgcolor') : 'none' }} ;		*/
/* 		{% if soconfig.get_settings('contentbg') !='' %}*/
/* 			background-image: url("image/{{soconfig.get_settings('contentbg') }} ");*/
/* 		{% endif %}*/
/* 		background-repeat:{{ soconfig.get_settings('content_bg_mode') is not empty ? soconfig.get_settings('content_bg_mode') : 'no-repeat' }} ;*/
/* 		background-attachment:{{ soconfig.get_settings('content_attachment') is not empty ? soconfig.get_settings('content_attachment') : 'inherit' }} ;*/
/* 		background-position:top center; */
/* 	}*/
/* 	</style>*/
/* {% endif %} 	*/
/* */
/*  */
/*  {{ topbar_css }} */
/*  */
/* </head>*/
/* {# =========== Add class Body ==============#}*/
/* */
/* 	{% set layoutbox =  url_layoutbox is not empty  ? url_layoutbox : soconfig.get_settings('layoutstyle') %}*/
/* 	{% set pattern  =  url_pattern is not empty    ? url_pattern : soconfig.get_settings('pattern') %}*/
/* */
/* */
/* 	{% set cls_body = class ~ ' ' %}*/
/* 	{% set cls_body = cls_body ~ direction %}*/
/* 	{% set cls_body = cls_body ~ ' layout-'~soconfig.get_settings('typelayout')%}*/
/* {% if layoutbox=='boxed' and pattern !='none' and soconfig.get_settings('contentbg') is empty %}*/
/* 	{% set cls_body = cls_body ~ ' pattern-'~pattern%}*/
/* {% endif %} */
/* */
/* 	{% set cls_wrapper = 'wrapper-'~layoutbox%}*/
/* 	{% set cls_wrapper = cls_wrapper ~ ' banners-effect-'~soconfig.get_settings('type_banner')%}*/
/* 	*/
/* <body class="{{cls_body}}">*/
/*  */
/*  {{ so_topbar }} */
/*  */
/* <div id="wrapper" class="{{cls_wrapper}}">  */
/*  */
/* {# =========== Show Preloader ==============#}*/
/* {% if soconfig.get_settings('preloader')%}*/
/* 	{% include theme_directory~'/template/soconfig/preloader.twig' with {preloader: soconfig.get_settings('preloader_animation')} %}*/
/* {% endif %}*/
/* */
/* {# =========== Show Header==============#}*/
/* {% if soconfig.get_settings('typeheader') =='1'%}*/
/* 	{% include theme_directory~'/template/header/header1.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='2'%}*/
/* 	{% include theme_directory~'/template/header/header2.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='3'%}*/
/* 	{% include theme_directory~'/template/header/header3.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='4'%}*/
/* 	{% include theme_directory~'/template/header/header4.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* */
/* */
/* {% else%}	*/
/* 	<style>*/
/* 		.alert-primary .alert-link {color: #002752;}*/
/* 		.alert-link {font-weight: 700;text-decoration: none;}*/
/* 		.alert-link:hover{text-decoration: underline;}*/
/* 		.alert {color: #004085;background-color: #cce5ff;padding: .75rem 1.25rem;margin-bottom: 1rem;border: 1px solid #b8daff;border-radius: .25rem;*/
/* 		}*/
/* 	</style>*/
/* 	<div class="alert alert-primary">*/
/* 			Go to admin, find Extensions >>  <a class="alert-link" href="admin/index.php?route=marketplace/modification"  target=”_blank”> Modifications </a> and click 'Refresh' button. To apply the changes characterised by the uploaded modification file*/
/* 	</div>*/
/* {% endif %}*/
/* */
/* <div id="socialLogin"></div>*/
/* */
/*  {% if setting is defined and setting.so_sociallogin_enable and setting.so_sociallogin_popuplogin %}*/
/*  <div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true">*/
/*  <div class="modal-dialog block-popup-login">*/
/*  <a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle" data-dismiss="modal"></a>*/
/*  <div class="tt_popup_login"><strong>{{ text_title_popuplogin }}</strong></div>*/
/*  <div class="block-content">*/
/*  <div class=" col-reg registered-account">*/
/*  <div class="block-content">*/
/*  <form class="form form-login" action="{{ login }}" method="post" id="login-form">*/
/*  <fieldset class="fieldset login" data-hasrequired="* Required Fields">*/
/*  <div class="field email required email-input">*/
/*  <div class="control">*/
/*  <input name="email" value="" autocomplete="off" id="email" type="email" class="input-text" title="Email" placeholder="E-mail Address" />*/
/*  </div>*/
/*  </div>*/
/*  <div class="field password required pass-input">*/
/*  <div class="control">*/
/*  <input name="password" type="password" autocomplete="off" class="input-text" id="pass" title="Password" placeholder="Password" />*/
/*  </div>*/
/*  </div>*/
/*  {% if setting.so_sociallogin_enable %}*/
/*  <div class=" form-group">*/
/*  <label class="control-label">{{ text_title_login_with_social }}</label>*/
/*  <div>*/
/*  {% if setting.so_sociallogin_googlestatus %}*/
/*  {% if setting.so_sociallogin_button == 'icon' %}*/
/*  <a href="{{ googlelink }}" class="btn btn-social-icon btn-sm btn-google-plus"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>*/
/*  {% else %}*/
/*  <a class="social-icon" href="{{ googlelink }}">*/
/*  <img class="img-responsive" src="{{ googleimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_googletitle }}" */
/*  title="{{ setting.so_sociallogin_googletitle }}" */
/*  />*/
/*  </a>*/
/*  {% endif %}*/
/*  {% endif %}*/
/*  {% if setting.so_sociallogin_fbstatus %}*/
/*  {% if setting.so_sociallogin_button == 'icon' %}*/
/*  <a href="{{ fblink }}" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>*/
/*  {% else %}*/
/*  <a href="{{ fblink }}" class="social-icon">*/
/*  <img class="img-responsive" src="{{ fbimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_fbtitle }}" */
/*  title="{{ setting.so_sociallogin_fbtitle }}"*/
/*  />*/
/*  </a>*/
/*  {% endif %}*/
/*  {% endif %}*/
/*  {% if setting.so_sociallogin_twitstatus %}*/
/*  {% if setting.so_sociallogin_button == 'icon' %}*/
/*  <a href="{{ twitlink }}" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>*/
/*  {% else %}*/
/*  <a class="social-icon" href="{{ twitlink }}">*/
/*  <img class="img-responsive" src="{{ twitimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_twittertitle }}" */
/*  title="{{ setting.so_sociallogin_twittertitle }}"*/
/*  />*/
/*  </a>*/
/*  {% endif %}*/
/*  {% endif %}*/
/*  {% if setting.so_sociallogin_linkstatus %}*/
/*  {% if setting.so_sociallogin_button == 'icon' %}*/
/*  <a href="{{ linkdinlink }}" class="btn btn-social-icon btn-sm btn-linkdin"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>*/
/*  {% else %}*/
/*  <a class="social-icon" href="{{ linkdinlink }}">*/
/*  <img class="img-responsive" src="{{ linkdinimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_linkedintitle }}" */
/*  title="{{ setting.so_sociallogin_linkedintitle }}"*/
/*  />*/
/*  </a>*/
/*  {% endif %}*/
/*  {% endif %}*/
/*  </div>*/
/*  </div>*/
/*  {% endif %}*/
/*  <div class="secondary ft-link-p"><a class="action remind" href="{{ link_forgot_password }}"><span>{{ text_forgot_password }}</span></a></div>*/
/*  <div class="actions-toolbar">*/
/*  <div class="primary"><button type="submit" class="action login primary" name="send" id="send2"><span>{{ text_login }}</span></button></div>*/
/*  </div>*/
/*  </fieldset>*/
/*  </form>*/
/*  </div>*/
/*  </div> */
/*  <div class="col-reg login-customer">*/
/*  {{ text_colregister }}*/
/*  <a class="btn-reg-popup" title="{{ text_register }}" href="{{ register }}">{{ text_create_account }}</a>*/
/*  </div>*/
/*  <div style="clear:both;"></div>*/
/*  </div>*/
/*  </div>*/
/*  </div>*/
/*  <script type="text/javascript">*/
/*  jQuery(document).ready(function($) {*/
/*  var $window = $(window);*/
/*  function checkWidth() {*/
/*  var windowsize = $window.width();*/
/*  if (windowsize > 767) {*/
/*  $('a[href*="account/login"]').click(function (e) {*/
/*  e.preventDefault();*/
/*  $("#so_sociallogin").modal('show');*/
/*  });*/
/*  }*/
/*  }*/
/*  checkWidth();*/
/*  $(window).resize(checkWidth);*/
/*  });*/
/*  </script>*/
/*  {% endif %}*/
/*  */
/* */
