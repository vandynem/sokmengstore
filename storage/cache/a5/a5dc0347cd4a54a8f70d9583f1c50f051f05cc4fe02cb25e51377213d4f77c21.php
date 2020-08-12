<?php

/* so-buyshop/template/common/cart.twig */
class __TwigTemplate_4fe9e15186334e571691e610a0fc065fdb5884d4dc3e9e4da8bafe989a91755a extends Twig_Template
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
        echo "<div id=\"cart\" class=\"btn-shopping-cart\">
  

   <a data-loading-text=\"";
        // line 4
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo " \" class=\"btn-group top_cart dropdown-toggle\" data-toggle=\"dropdown\">
    <div class=\"shopcart\">
      <span class=\"icon-c\">
        <i class=\"fa fa-shopping-cart\"></i>
      </span>
      <div class=\"shopcart-inner\">
        <p class=\"text-shopping-cart\">

         ";
        // line 12
        echo (isset($context["text_shop_cart"]) ? $context["text_shop_cart"] : null);
        echo "
        </p>
   
        <span class=\"total-shopping-cart cart-total-full\">
          ";
        // line 16
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "
        </span>
      </div>
    </div>
  </a>
  
  <ul class=\"dropdown-menu pull-right shoppingcart-box\">
    ";
        // line 23
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 24
            echo "    <li class=\"content-item\">
      <table class=\"table table-striped\" style=\"margin-bottom:10px;\">
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 27
                echo "        <tr>
          <td class=\"text-center size-img-cart\">";
                // line 28
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img class=\"img-thumbnail lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\"  /></a> ";
                }
                echo "</td>
          <td class=\"text-left\"><a href=\"";
                // line 29
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 30
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 31
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "            ";
                }
                // line 33
                echo "            ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " <br />
            - <small>";
                    // line 34
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 35
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 36
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 37
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 41
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 43
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 45
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 46
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "      </table>
    </li>
  
\t<li>
\t\t<div class=\"checkout clearfix\">
\t\t<a href=\"";
            // line 54
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\" class=\"btn btn-view-cart inverse\"> ";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</a>
\t\t<a href=\"";
            // line 55
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\" class=\"btn btn-checkout pull-right\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a>
\t\t</div>
\t</li>
    ";
        } else {
            // line 59
            echo "    <li>
      <p class=\"text-center empty\">";
            // line 60
            echo (isset($context["text_empty_cart"]) ? $context["text_empty_cart"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 63
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 63,  190 => 60,  187 => 59,  178 => 55,  172 => 54,  165 => 49,  154 => 46,  150 => 45,  145 => 43,  141 => 41,  136 => 40,  125 => 37,  121 => 36,  117 => 35,  109 => 34,  104 => 33,  101 => 32,  92 => 31,  85 => 30,  79 => 29,  65 => 28,  62 => 27,  58 => 26,  54 => 24,  52 => 23,  42 => 16,  35 => 12,  24 => 4,  19 => 1,);
    }
}
/* <div id="cart" class="btn-shopping-cart">*/
/*   */
/* */
/*    <a data-loading-text="{{ text_loading }} " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">*/
/*     <div class="shopcart">*/
/*       <span class="icon-c">*/
/*         <i class="fa fa-shopping-cart"></i>*/
/*       </span>*/
/*       <div class="shopcart-inner">*/
/*         <p class="text-shopping-cart">*/
/* */
/*          {{ text_shop_cart}}*/
/*         </p>*/
/*    */
/*         <span class="total-shopping-cart cart-total-full">*/
/*           {{text_items}}*/
/*         </span>*/
/*       </div>*/
/*     </div>*/
/*   </a>*/
/*   */
/*   <ul class="dropdown-menu pull-right shoppingcart-box">*/
/*     {% if products or vouchers %}*/
/*     <li class="content-item">*/
/*       <table class="table table-striped" style="margin-bottom:10px;">*/
/*         {% for product in products %}*/
/*         <tr>*/
/*           <td class="text-center size-img-cart">{% if product.thumb %} <a href="{{ product.href }}"><img class="img-thumbnail lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}"  /></a> {% endif %}</td>*/
/*           <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {% if product.option %}*/
/*             {% for option in product.option %} <br />*/
/*             - <small>{{ option.name }} {{ option.value }}</small> {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %} <br />*/
/*             - <small>{{ text_recurring }} {{ product.recurring }}</small> {% endif %}</td>*/
/*           <td class="text-right">x {{ product.quantity }}</td>*/
/*           <td class="text-right">{{ product.total }}</td>*/
/*           <td class="text-center"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-center"></td>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*           <td class="text-right">x&nbsp;1</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*           <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </li>*/
/*   */
/* 	<li>*/
/* 		<div class="checkout clearfix">*/
/* 		<a href="{{ cart }}" class="btn btn-view-cart inverse"> {{ text_cart }}</a>*/
/* 		<a href="{{ checkout }}" class="btn btn-checkout pull-right">{{ text_checkout }}</a>*/
/* 		</div>*/
/* 	</li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="text-center empty">{{  text_empty_cart  }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
/* */
