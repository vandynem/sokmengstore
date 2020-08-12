<?php

/* so-buyshop/template/header/header2.twig */
class __TwigTemplate_5d4305be807e3f2cba5de78137d5ab000c06a2fd0679896ab74d3221ce4d28ae extends Twig_Template
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
        $context["hidden_headercenter"] = ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_type"), "method") == "2")) ? ("hidden-compact") : (""));
        // line 3
        $context["hidden_headerbottom"] = ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_type"), "method") == "1")) ? ("hidden-compact") : (""));
        // line 4
        $context["hidden_headertop"] = (((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_type"), "method") == "1") || ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_type"), "method") == "2"))) ? ("hidden-compact") : (""));
        // line 5
        echo "
<header id=\"header\" class=\"variant typeheader-";
        // line 6
        echo (((isset($context["typeheader"]) ? $context["typeheader"] : null)) ? ((isset($context["typeheader"]) ? $context["typeheader"] : null)) : ("2"));
        echo "\">
    
    
    <div id=\"tracklocationpopup\" class=\"modal\" tabindex=\"-1\" role=\"dialog\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <h4 class=\"modal-title\">Store Location</h4>
          </div>
          <div class=\"modal-body\">
           
           <table class=\"table table-bordered\">
  <tbody>
    <tr>
      <td><p><b>Konfulon Nokorsamrith</b></p>
        <p>Contact Info</p>
        <p></p>
        <p>Address : ";
        // line 24
        echo (isset($context["address"]) ? $context["address"] : null);
        echo " </p>
        <p>Email : ";
        // line 25
        echo (isset($context["email"]) ? $context["email"] : null);
        echo " </p>
        <p>Call To Us : ";
        // line 26
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</p>
        <div style=\"width: 100%\">
          <div style=\"width: 100%\">
            <div style=\"width: 100%\">
             <iframe  frameborder=\"0\" style=\"border:0\"
              src=\"https://www.google.com/maps/embed/v1/place?key=AIzaSyDoaFr9HOrQ6RBYCWq_QxR7XZkTBmZlSuQ
             &q=Konfulon, Phnom Penh, Cambodia\" allowfullscreen></iframe>
            </div><br>
          </div>
          <br>
        </div>
        <br></td>
      
    </tr>
    <tr>
     
     
    </tr>
  </tbody>
</table>
           
           
           
<img src=\"\" alt=\"popup\">
          </div>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    
    
    ";
        // line 56
        echo "  
\t<div class=\"header-top ";
        // line 57
        echo (isset($context["hidden_headertop"]) ? $context["hidden_headertop"] : null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"header-top-left collapsed-block col-lg-8 col-md-7 col-sm-8 col-xs-12 hidden-xs\">
\t\t  ";
        // line 61
        echo "  
\t\t\t
\t\t\t<div class=\"module track-location \">
   
  
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"top-link list-inline track-store\">\t\t\t\t\t\t\t
<li class=\"track-order\"><i class=\"fa fa-truck\"></i><span> 
";
        // line 68
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            echo " 
<a class=\"link-lg\" href=\"https://konfulononline.com/index.php?route=account/order\">
";
        } else {
            // line 70
            echo "   
<a class=\"link-lg\" href=\"#\">
";
        }
        // line 72
        echo " \t
Track your order</a>
</span></li>
<li class=\"store-location\"><i class=\"fa fa-map-marker\"></i> <span><a class=\"link-lg\" data-toggle=\"modal\" data-target=\"#tracklocationpopup\">Store location</a></span></li>\t\t\t\t\t\t\t\t
</ul> 
</div>


\t\t\t\t\t";
        // line 80
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "welcome_message_status"), "method")) {
            // line 81
            echo "\t\t\t\t\t\t<div class=\"hidden-sm hidden-xs welcome-msg\">
\t\t\t\t\t\t\t";
            // line 82
            if ( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "welcome_message"), "method"))) {
                // line 83
                echo "\t\t\t\t\t\t\t\t";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "welcome_message"), "method")), "method");
                echo "
\t\t\t\t\t\t\t";
            }
            // line 84
            echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t";
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "checkout_status"), "method")) {
            // line 88
            echo "\t\t\t\t\t\t<div class=\"link_checkout hidden-xs\"><a href=\"";
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo " \" class=\"btn-link\" title=\"";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo " \"><span >";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo " </span></a></div>
\t\t\t\t\t";
        }
        // line 89
        echo " \t
\t\t\t\t\t
\t\t\t\t\t<div class=\"pull-right hidden hidden-xs\">
\t\t\t\t\t\t";
        // line 92
        if ( !twig_test_empty((isset($context["header_block"]) ? $context["header_block"] : null))) {
            // line 93
            echo "\t\t\t\t\t\t\t";
            echo (isset($context["header_block"]) ? $context["header_block"] : null);
            echo "
\t\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t\t</div>

\t\t\t\t

\t\t\t\t</div>\t
\t\t\t\t<div class=\"header-top-right collapsed-block col-lg-4 col-md-5 col-sm-4 col-xs-12\">\t
\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"top-link list-inline lang-curr\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 103
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            echo " 
\t\t\t\t\t\t\t\t<li class=\"language\"><i ></i> <a href=\"";
            // line 104
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo " \"> ";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo " </a></li>
\t\t\t\t\t\t\t";
        } else {
            // line 105
            echo "   
\t\t\t\t\t\t\t\t<li class=\"language\"><i ></i><span><a  href=\"";
            // line 106
            echo (isset($context["login"]) ? $context["login"] : null);
            echo " \">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo " </a> ";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_or"), "method");
            echo " <a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></span></li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 107
        echo " \t\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 110
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "phone_status"), "method") && $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contact_number"), "method"))) {
            // line 111
            echo "\t\t\t\t\t\t<div class=\"telephone hidden-sm\" >
\t\t\t\t\t\t\t";
            // line 112
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contact_number"), "method")), "method");
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 114
        echo " 

\t\t\t\t\t";
        // line 116
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "lang_status"), "method")) {
            // line 117
            echo "\t\t\t\t\t<ul class=\"top-link list-inline lang-curr\">
\t\t\t\t\t<li class=\"language\"> ";
            // line 118
            echo (isset($context["text_customer_name"]) ? $context["text_customer_name"] : null);
            echo " </li>
\t\t\t\t\t <!--     ";
            // line 119
            if ((isset($context["language"]) ? $context["language"] : null)) {
                echo " <li class=\"language\">";
                echo (isset($context["language"]) ? $context["language"] : null);
                echo " </li>\t";
            }
            echo " -->
\t\t\t\t\t<!-- \t";
            // line 120
            if ((isset($context["currency"]) ? $context["currency"] : null)) {
                echo "<li class=\"currency\"> ";
                echo (isset($context["currency"]) ? $context["currency"] : null);
                echo "  </li> ";
            }
            echo "\t-->\t\t\t
\t\t\t\t\t</ul>\t\t\t\t
\t\t\t\t\t";
        }
        // line 122
        echo " \t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- HEADER CENTER -->
\t<div class=\"header-center ";
        // line 129
        echo (isset($context["hidden_headercenter"]) ? $context["hidden_headercenter"] : null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- LOGO -->
\t\t\t\t<div class=\"navbar-logo col-md-3 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t   \t\t";
        // line 135
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_logo", array(), "method");
        echo "
\t\t\t\t   \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"header-center-right col-md-9 col-sm-12 col-xs-12\">\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 140
        if ((isset($context["search_block"]) ? $context["search_block"] : null)) {
            // line 141
            echo "\t\t\t\t\t\t\t<div class=\"search-header-w col-lg-9 col-md-8 col-sm-8 col-xs-12\">
\t\t\t\t\t\t\t\t<span class=\"hidden-lg hidden-md hidden-sm search-mobi\"><i class=\"fa fa-search\"></i></span>\t
\t\t\t\t\t\t\t\t<div class=\"searchbox\">\t\t\t
\t\t\t\t\t\t\t\t ";
            // line 144
            echo (isset($context["search_block"]) ? $context["search_block"] : null);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 147
        echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"shopping_cart\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t \t";
        // line 150
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>           

\t\t</div>
\t</div>
\t
\t<!-- HEADER BOTTOM -->
\t<div class=\"header-bottom ";
        // line 161
        echo (isset($context["hidden_headerbottom"]) ? $context["hidden_headerbottom"] : null);
        echo "\">
\t\t<div class=\"container\">
\t\t    <div class=\"row\">
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-2 col-xs-2 menu-vertical\">
\t\t\t\t\t<div class=\" megamenu-dev\">
\t\t\t\t\t";
        // line 167
        echo (isset($context["content_menu2"]) ? $context["content_menu2"] : null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-9 col-sm-9 col-xs-8 mega-horizontal\">
\t\t\t\t\t<div class=\"megamenu-style-dev megamenu-dev\">
\t\t\t\t\t\t<!-- BOX CONTENT MENU -->
\t\t\t\t\t\t";
        // line 173
        echo (isset($context["content_menu1"]) ? $context["content_menu1"] : null);
        echo "\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t  
\t</div>
\t
\t
</header>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/header/header2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 173,  326 => 167,  317 => 161,  303 => 150,  298 => 147,  291 => 144,  286 => 141,  284 => 140,  276 => 135,  267 => 129,  258 => 122,  248 => 120,  240 => 119,  236 => 118,  233 => 117,  231 => 116,  227 => 114,  221 => 112,  218 => 111,  216 => 110,  211 => 107,  198 => 106,  195 => 105,  188 => 104,  184 => 103,  174 => 95,  168 => 93,  166 => 92,  161 => 89,  151 => 88,  148 => 87,  143 => 84,  137 => 83,  135 => 82,  132 => 81,  130 => 80,  120 => 72,  115 => 70,  109 => 68,  100 => 61,  93 => 57,  90 => 56,  57 => 26,  53 => 25,  49 => 24,  28 => 6,  25 => 5,  23 => 4,  21 => 3,  19 => 2,);
    }
}
/* {#=====Get variable : Config Select Block on header=====#}*/
/* {% set hidden_headercenter = soconfig.get_settings('toppanel_type') =='2'? 'hidden-compact' : '' %}*/
/* {% set hidden_headerbottom = soconfig.get_settings('toppanel_type') =='1'? 'hidden-compact' : '' %}*/
/* {% set hidden_headertop = soconfig.get_settings('toppanel_type') =='1' or soconfig.get_settings('toppanel_type') =='2' ? 'hidden-compact' : '' %}*/
/* */
/* <header id="header" class="variant typeheader-{{ typeheader ? typeheader : '2'}}">*/
/*     */
/*     */
/*     <div id="tracklocationpopup" class="modal" tabindex="-1" role="dialog">*/
/*       <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*           <div class="modal-header">*/
/*             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*             <h4 class="modal-title">Store Location</h4>*/
/*           </div>*/
/*           <div class="modal-body">*/
/*            */
/*            <table class="table table-bordered">*/
/*   <tbody>*/
/*     <tr>*/
/*       <td><p><b>Konfulon Nokorsamrith</b></p>*/
/*         <p>Contact Info</p>*/
/*         <p></p>*/
/*         <p>Address : {{ address }} </p>*/
/*         <p>Email : {{ email }} </p>*/
/*         <p>Call To Us : {{ telephone }}</p>*/
/*         <div style="width: 100%">*/
/*           <div style="width: 100%">*/
/*             <div style="width: 100%">*/
/*              <iframe  frameborder="0" style="border:0"*/
/*               src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDoaFr9HOrQ6RBYCWq_QxR7XZkTBmZlSuQ*/
/*              &q=Konfulon, Phnom Penh, Cambodia" allowfullscreen></iframe>*/
/*             </div><br>*/
/*           </div>*/
/*           <br>*/
/*         </div>*/
/*         <br></td>*/
/*       */
/*     </tr>*/
/*     <tr>*/
/*      */
/*      */
/*     </tr>*/
/*   </tbody>*/
/* </table>*/
/*            */
/*            */
/*            */
/* <img src="" alt="popup">*/
/*           </div>*/
/*           </div>*/
/*         </div><!-- /.modal-content -->*/
/*       </div><!-- /.modal-dialog -->*/
/*     */
/*     */
/*     {#======	HEADER TOP	=======#}  */
/* 	<div class="header-top {{hidden_headertop}}">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="header-top-left collapsed-block col-lg-8 col-md-7 col-sm-8 col-xs-12 hidden-xs">*/
/* 		  {#======	{{header_block2}} =======#}  */
/* 			*/
/* 			<div class="module track-location ">*/
/*    */
/*   */
/*   																																	<ul class="top-link list-inline track-store">							*/
/* <li class="track-order"><i class="fa fa-truck"></i><span> */
/* {% if logged %} */
/* <a class="link-lg" href="https://konfulononline.com/index.php?route=account/order">*/
/* {% else %}   */
/* <a class="link-lg" href="#">*/
/* {% endif %} 	*/
/* Track your order</a>*/
/* </span></li>*/
/* <li class="store-location"><i class="fa fa-map-marker"></i> <span><a class="link-lg" data-toggle="modal" data-target="#tracklocationpopup">Store location</a></span></li>								*/
/* </ul> */
/* </div>*/
/* */
/* */
/* 					{% if soconfig.get_settings('welcome_message_status') %}*/
/* 						<div class="hidden-sm hidden-xs welcome-msg">*/
/* 							{% if soconfig.get_settings('welcome_message') is not empty %}*/
/* 								{{ soconfig.decode_entities( soconfig.get_settings('welcome_message') ) }}*/
/* 							{% endif %} */
/* 						</div>*/
/* 					{% endif %}*/
/* 					{% if soconfig.get_settings('checkout_status') %}*/
/* 						<div class="link_checkout hidden-xs"><a href="{{ checkout }} " class="btn-link" title="{{ text_checkout }} "><span >{{ text_checkout }} </span></a></div>*/
/* 					{% endif %} 	*/
/* 					*/
/* 					<div class="pull-right hidden hidden-xs">*/
/* 						{% if header_block is not empty %}*/
/* 							{{header_block}}*/
/* 						{% endif %}*/
/* 					</div>*/
/* */
/* 				*/
/* */
/* 				</div>	*/
/* 				<div class="header-top-right collapsed-block col-lg-4 col-md-5 col-sm-4 col-xs-12">	*/
/* 					*/
/* 						<ul class="top-link list-inline lang-curr">							*/
/* 							{% if logged %} */
/* 								<li class="language"><i ></i> <a href="{{ logout }} "> {{ text_logout }} </a></li>*/
/* 							{% else %}   */
/* 								<li class="language"><i ></i><span><a  href="{{ login }} ">{{ text_login }} </a> {{ objlang.get('text_or') }} <a href="{{ register }}">{{ text_register }}</a></span></li>								*/
/* 							{% endif %} 								*/
/* 						</ul>														*/
/* 					*/
/* 					{% if soconfig.get_settings('phone_status') and soconfig.get_settings('contact_number') %}*/
/* 						<div class="telephone hidden-sm" >*/
/* 							{{ soconfig.decode_entities( soconfig.get_settings('contact_number') ) }}*/
/* 						</div>*/
/* 					{% endif %} */
/* */
/* 					{% if soconfig.get_settings('lang_status') %}*/
/* 					<ul class="top-link list-inline lang-curr">*/
/* 					<li class="language"> {{ text_customer_name }} </li>*/
/* 					 <!--     {% if language %} <li class="language">{{ language }} </li>	{% endif %} -->*/
/* 					<!-- 	{% if currency %}<li class="currency"> {{ currency }}  </li> {% endif %}	-->			*/
/* 					</ul>				*/
/* 					{% endif %} 	*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!-- HEADER CENTER -->*/
/* 	<div class="header-center {{ hidden_headercenter }}">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<!-- LOGO -->*/
/* 				<div class="navbar-logo col-md-3 col-sm-12 col-xs-12">*/
/* 					<div class="logo">*/
/* 				   		{{soconfig.get_logo()}}*/
/* 				   	</div>*/
/* 				</div>*/
/* 				<div class="header-center-right col-md-9 col-sm-12 col-xs-12">	*/
/* 					<div class="row">*/
/* 						{% if search_block %}*/
/* 							<div class="search-header-w col-lg-9 col-md-8 col-sm-8 col-xs-12">*/
/* 								<span class="hidden-lg hidden-md hidden-sm search-mobi"><i class="fa fa-search"></i></span>	*/
/* 								<div class="searchbox">			*/
/* 								 {{ search_block }}*/
/* 								</div>*/
/* 							</div>*/
/* 						{% endif %} */
/* 							*/
/* 							<div class="shopping_cart">							*/
/* 							 	{{ cart }}*/
/* 							</div>*/
/* 							*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>           */
/* */
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<!-- HEADER BOTTOM -->*/
/* 	<div class="header-bottom {{ hidden_headerbottom }}">*/
/* 		<div class="container">*/
/* 		    <div class="row">*/
/* 				*/
/* 				<div class="col-lg-3 col-md-3 col-sm-2 col-xs-2 menu-vertical">*/
/* 					<div class=" megamenu-dev">*/
/* 					{{ content_menu2 }}*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-md-9 col-sm-9 col-xs-8 mega-horizontal">*/
/* 					<div class="megamenu-style-dev megamenu-dev">*/
/* 						<!-- BOX CONTENT MENU -->*/
/* 						{{ content_menu1}}	*/
/* 					</div>				*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	  */
/* 	</div>*/
/* 	*/
/* 	*/
/* </header>*/
