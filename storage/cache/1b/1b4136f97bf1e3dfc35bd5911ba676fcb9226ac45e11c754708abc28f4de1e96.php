<?php

/* so-buyshop/template/extension/module/so_listing_tabs/default/default_js.twig */
class __TwigTemplate_f3f167cfa38551740e09aad8abe81701d3601e34bf37c3b1364e4f6a94d000ea extends Twig_Template
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
        echo "<script type=\"text/javascript\">
//<![CDATA[
jQuery(document).ready(function (\$) {
\t;
\t(function (element) {
\t\tvar \$element = \$(element),
\t\t\t\$tab = \$('.ltabs-tab', \$element),
\t\t\t\$tab_label = \$('.ltabs-tab-label', \$tab),
\t\t\t\$tabs = \$('.ltabs-tabs', \$element),
\t\t\tajax_url = \$tabs.parents('.ltabs-tabs-container').attr('data-ajaxurl'),
\t\t\teffect = \$tabs.parents('.ltabs-tabs-container').attr('data-effect'),
\t\t\tdelay = \$tabs.parents('.ltabs-tabs-container').attr('data-delay'),
\t\t\tduration = \$tabs.parents('.ltabs-tabs-container').attr('data-duration'),
\t\t\ttype_source = \$tabs.parents('.ltabs-tabs-container').attr('data-type_source'),
\t\t\t\$items_content = \$('.ltabs-items', \$element),
\t\t\t\$items_inner = \$('.ltabs-items-inner', \$items_content),
\t\t\t\$items_first_active = \$('.ltabs-items-selected', \$element),
\t\t\t\$load_more = \$('.ltabs-loadmore', \$element),
\t\t\t\$btn_loadmore = \$('.ltabs-loadmore-btn', \$load_more),
\t\t\t\$select_box = \$('.ltabs-selectbox', \$element),
\t\t\t\$tab_label_select = \$('.ltabs-tab-selected', \$element),
\t\t\tsetting = '";
        // line 22
        echo (isset($context["setting"]) ? $context["setting"] : null);
        echo "',
\t\t\ttype_show = '";
        // line 23
        echo (isset($context["type_show"]) ? $context["type_show"] : null);
        echo "';
\t\t\t
\t\tenableSelectBoxes();
\t\tfunction enableSelectBoxes() {
\t\t\t\$tab_wrap = \$('.ltabs-tabs-wrap', \$element),
\t\t\t\t\$tab_label_select.html(\$('.ltabs-tab', \$element).filter('.tab-sel').children('.ltabs-tab-label').html());
\t\t\tif (\$(window).innerWidth() <= 991) {
\t\t\t\t\$tab_wrap.addClass('ltabs-selectbox');
\t\t\t} else {
\t\t\t\t\$tab_wrap.removeClass('ltabs-selectbox');
\t\t\t}
\t\t}

\t\t\$('span.ltabs-tab-selected, span.ltabs-tab-arrow', \$element).click(function () {
\t\t\tif (\$('.ltabs-tabs', \$element).hasClass('ltabs-open')) {
\t\t\t\t\$('.ltabs-tabs', \$element).removeClass('ltabs-open');
\t\t\t} else {
\t\t\t\t\$('.ltabs-tabs', \$element).addClass('ltabs-open');
\t\t\t}
\t\t});

\t\t\$(window).resize(function () {
\t\t\tif (\$(window).innerWidth() <= 991) {
\t\t\t\t\$('.ltabs-tabs-wrap', \$element).addClass('ltabs-selectbox');
\t\t\t} else {
\t\t\t\t\$('.ltabs-tabs-wrap', \$element).removeClass('ltabs-selectbox');
\t\t\t}
\t\t});

\t\tfunction showAnimateItems(el) {
\t\t\tvar \$_items = \$('.new-ltabs-item', el), nub = 0;
\t\t\t\$('.ltabs-loadmore-btn', el).fadeOut('fast');
\t\t\t\$_items.each(function (i) {
\t\t\t\tnub++;
\t\t\t\tswitch(effect) {
\t\t\t\t\tcase 'none' : \$(this).css({'opacity':'1','filter':'alpha(opacity = 100)'}); break;
\t\t\t\t\tdefault: animatesItems(\$(this),nub*delay,i,el);
\t\t\t\t}
\t\t\t\tif (i == \$_items.length - 1) {
\t\t\t\t\t\$('.ltabs-loadmore-btn', el).fadeIn(3000);
\t\t\t\t}
\t\t\t\t\$(this).removeClass('new-ltabs-item');
\t\t\t});
\t\t}

\t\tfunction animatesItems(\$this,fdelay,i,el) {
\t\t\tvar \$_items = \$('.ltabs-item', el);
\t\t\t\$this.stop(true, true).attr(\"style\",
\t\t\t\t\"-webkit-animation:\" + effect +\" \"+ duration +\"ms;\"
\t\t\t\t+ \"-moz-animation:\" + effect +\" \"+ duration +\"ms;\"
\t\t\t\t+ \"-o-animation:\" + effect +\" \"+ duration +\"ms;\"
\t\t\t\t+ \"-moz-animation-delay:\" + fdelay + \"ms;\"
\t\t\t\t+ \"-webkit-animation-delay:\" + fdelay + \"ms;\"
\t\t\t\t+ \"-o-animation-delay:\" + fdelay + \"ms;\"
\t\t\t\t+ \"animation-delay:\" + fdelay + \"ms;\").delay(fdelay).animate({
\t\t\t\t\topacity: 1,
\t\t\t\t\tfilter: 'alpha(opacity = 100)'
\t\t\t\t}, {
\t\t\t\t\tdelay: 1000
\t\t\t\t});
\t\t\tif (i == (\$_items.length - 1)) {
\t\t\t\t\$(\".ltabs-items-inner\").addClass(\"play\");
\t\t\t}
\t\t}
\t\tif (type_show == 'loadmore') {
\t\t\tshowAnimateItems(\$items_first_active);
\t\t}
\t\t\$tab.on('click.ltabs-tab', function () {
\t\t\tvar \$this = \$(this);
\t\t\tif (\$this.hasClass('tab-sel')) return false;
\t\t\tif (\$this.parents('.ltabs-tabs').hasClass('ltabs-open')) {
\t\t\t\t\$this.parents('.ltabs-tabs').removeClass('ltabs-open');
\t\t\t}
\t\t\t\$tab.removeClass('tab-sel');
\t\t\t\$this.addClass('tab-sel');
\t\t\tvar items_active = \$this.attr('data-active-content-l');
\t\t\tvar _items_active = \$(items_active,\$element);
\t\t\t\$items_content.removeClass('ltabs-items-selected');
\t\t\t_items_active.addClass('ltabs-items-selected');
\t\t\t\$tab_label_select.html(\$tab.filter('.tab-sel').children('.ltabs-tab-label').html());
\t\t\tvar \$loading = \$('.ltabs-loading', _items_active);
\t\t\tvar loaded = _items_active.hasClass('ltabs-items-loaded');
\t\t\ttype_show =\$tabs.parents('.ltabs-tabs-container').attr('data-type_show');
\t\t\tif (!loaded && !_items_active.hasClass('ltabs-process')) {
\t\t\t\t_items_active.addClass('ltabs-process');
\t\t\t\tvar category_id \t\t= \$this.attr('data-category-id');
\t\t\t\t\$loading.show();
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: 'POST',
\t\t\t\t\turl: ajax_url,
\t\t\t\t\tdata: {
\t\t\t\t\t\tis_ajax_listing_tabs: 1,
\t\t\t\t\t\tajax_reslisting_start: 0,
\t\t\t\t\t\tcategoryid: category_id,
\t\t\t\t\t\tsetting : setting,
\t\t\t\t\t\tlbmoduleid: ";
        // line 118
        echo (isset($context["moduleid"]) ? $context["moduleid"] : null);
        echo "
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (data) {
\t\t\t\t\t\tif (data.items_markup != '') {
\t\t\t\t\t\t\t\$('.ltabs-loading', _items_active).replaceWith(data.items_markup);
\t\t\t\t\t\t\t_items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
\t\t\t\t\t\t\t\$loading.remove();
\t\t\t\t\t\t\tif (type_show != 'slider') {
\t\t\t\t\t\t\t\tshowAnimateItems(_items_active);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tupdateStatus(_items_active);
\t\t\t\t\t\t}
\t\t\t\t\t\tif(typeof(_SoQuickView) != 'undefined'){
\t\t\t\t\t\t\t_SoQuickView();
\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t},
\t\t\t\t\tdataType: 'json'
\t\t\t\t});

\t\t\t} else {
\t\t\t\tif (type_show == 'loadmore') {
\t\t\t\t\t\$('.ltabs-item', \$items_content).removeAttr('style').addClass('new-ltabs-item');
\t\t\t\t\tshowAnimateItems(_items_active);
\t\t\t\t}else{
\t\t\t\t\t var owl = \$('.owl2-carousel' , _items_active);
\t\t\t\t\t owl = owl.data('owlCarousel2');
\t\t\t\t\t if (typeof owl !== 'undefined') {
\t\t\t\t\t\towl.onResize();
\t\t\t\t\t }
\t\t\t\t}
\t\t\t}
\t\t});

\t\tfunction updateStatus(\$el) {
\t\t\t\$('.ltabs-loadmore-btn', \$el).removeClass('loading');
\t\t\tvar countitem = \$('.ltabs-item', \$el).length;
\t\t\t\$('.ltabs-image-loading', \$el).css({display: 'none'});
\t\t\t\$('.ltabs-loadmore-btn', \$el).parent().attr('data-rl_start', countitem);
\t\t\tvar rl_total = \$('.ltabs-loadmore-btn', \$el).parent().attr('data-rl_total');
\t\t\tvar rl_load = \$('.ltabs-loadmore-btn', \$el).parent().attr('data-rl_load');
\t\t\tvar rl_allready = \$('.ltabs-loadmore-btn', \$el).parent().attr('data-rl_allready');

\t\t\tif (countitem >= rl_total) {
\t\t\t\t\$('.ltabs-loadmore-btn', \$el).addClass('loaded');
\t\t\t\t\$('.ltabs-image-loading', \$el).css({display: 'none'});
\t\t\t\t\$('.ltabs-loadmore-btn', \$el).attr('data-label', rl_allready);
\t\t\t\t\$('.ltabs-loadmore-btn', \$el).removeClass('loading');
\t\t\t}
\t\t}

\t\t\$btn_loadmore.on('click.loadmore', function () {
\t\t\tvar \$this = \$(this);
\t\t\tif (\$this.hasClass('loaded') || \$this.hasClass('loading')) {
\t\t\t\treturn false;
\t\t\t} else {
\t\t\t\t\$this.addClass('loading');
\t\t\t\t\$('.ltabs-image-loading', \$this).css({display: 'inline-block'});
\t\t\t\tvar rl_start \t\t\t\t= \$this.parent().attr('data-rl_start'),
\t\t\t\t\trl_ajaxurl \t\t\t\t= \$this.parent().attr('data-ajaxurl'),
\t\t\t\t\teffect \t\t\t\t\t= \$this.parent().attr('data-effect'),
\t\t\t\t\tcategory_id \t\t\t= \$this.parent().attr('data-categoryid'),
\t\t\t\t\titems_active \t\t\t= \$this.parent().attr('data-active-content');
\t\t\t\t\t
\t\t\t\tvar _items_active = \$(items_active,\$element);
\t\t\t\t
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: 'POST',
\t\t\t\t\turl: rl_ajaxurl,
\t\t\t\t\tdata: {
\t\t\t\t\t\tis_ajax_listing_tabs: 1,
\t\t\t\t\t\tajax_reslisting_start: rl_start,
\t\t\t\t\t\tcategoryid: category_id,
\t\t\t\t\t\tsetting: setting,
\t\t\t\t\t\tlbmoduleid: ";
        // line 192
        echo (isset($context["moduleid"]) ? $context["moduleid"] : null);
        echo "
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (data) {
\t\t\t\t\t\tif (data.items_markup != '') {
\t\t\t\t\t\t\t\$(\$(data.items_markup).html()).insertAfter(\$('.ltabs-item', _items_active).nextAll().last());
\t\t\t\t\t\t\t\$('.ltabs-image-loading', \$this).css({display: 'none'});
\t\t\t\t\t\t\tshowAnimateItems(_items_active);
\t\t\t\t\t\t\tupdateStatus(_items_active);
\t\t\t\t\t\t}
\t\t\t\t\t\tif(typeof(_SoQuickView) != 'undefined'){
\t\t\t\t\t\t\t_SoQuickView();
\t\t\t\t\t\t}
\t\t\t\t\t}, dataType: 'json'
\t\t\t\t});
\t\t\t}
\t\t\treturn false;
\t\t});
\t})('#";
        // line 209
        echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
        echo "');
});
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_listing_tabs/default/default_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 209,  221 => 192,  144 => 118,  46 => 23,  42 => 22,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/* //<![CDATA[*/
/* jQuery(document).ready(function ($) {*/
/* 	;*/
/* 	(function (element) {*/
/* 		var $element = $(element),*/
/* 			$tab = $('.ltabs-tab', $element),*/
/* 			$tab_label = $('.ltabs-tab-label', $tab),*/
/* 			$tabs = $('.ltabs-tabs', $element),*/
/* 			ajax_url = $tabs.parents('.ltabs-tabs-container').attr('data-ajaxurl'),*/
/* 			effect = $tabs.parents('.ltabs-tabs-container').attr('data-effect'),*/
/* 			delay = $tabs.parents('.ltabs-tabs-container').attr('data-delay'),*/
/* 			duration = $tabs.parents('.ltabs-tabs-container').attr('data-duration'),*/
/* 			type_source = $tabs.parents('.ltabs-tabs-container').attr('data-type_source'),*/
/* 			$items_content = $('.ltabs-items', $element),*/
/* 			$items_inner = $('.ltabs-items-inner', $items_content),*/
/* 			$items_first_active = $('.ltabs-items-selected', $element),*/
/* 			$load_more = $('.ltabs-loadmore', $element),*/
/* 			$btn_loadmore = $('.ltabs-loadmore-btn', $load_more),*/
/* 			$select_box = $('.ltabs-selectbox', $element),*/
/* 			$tab_label_select = $('.ltabs-tab-selected', $element),*/
/* 			setting = '{{ setting }}',*/
/* 			type_show = '{{ type_show }}';*/
/* 			*/
/* 		enableSelectBoxes();*/
/* 		function enableSelectBoxes() {*/
/* 			$tab_wrap = $('.ltabs-tabs-wrap', $element),*/
/* 				$tab_label_select.html($('.ltabs-tab', $element).filter('.tab-sel').children('.ltabs-tab-label').html());*/
/* 			if ($(window).innerWidth() <= 991) {*/
/* 				$tab_wrap.addClass('ltabs-selectbox');*/
/* 			} else {*/
/* 				$tab_wrap.removeClass('ltabs-selectbox');*/
/* 			}*/
/* 		}*/
/* */
/* 		$('span.ltabs-tab-selected, span.ltabs-tab-arrow', $element).click(function () {*/
/* 			if ($('.ltabs-tabs', $element).hasClass('ltabs-open')) {*/
/* 				$('.ltabs-tabs', $element).removeClass('ltabs-open');*/
/* 			} else {*/
/* 				$('.ltabs-tabs', $element).addClass('ltabs-open');*/
/* 			}*/
/* 		});*/
/* */
/* 		$(window).resize(function () {*/
/* 			if ($(window).innerWidth() <= 991) {*/
/* 				$('.ltabs-tabs-wrap', $element).addClass('ltabs-selectbox');*/
/* 			} else {*/
/* 				$('.ltabs-tabs-wrap', $element).removeClass('ltabs-selectbox');*/
/* 			}*/
/* 		});*/
/* */
/* 		function showAnimateItems(el) {*/
/* 			var $_items = $('.new-ltabs-item', el), nub = 0;*/
/* 			$('.ltabs-loadmore-btn', el).fadeOut('fast');*/
/* 			$_items.each(function (i) {*/
/* 				nub++;*/
/* 				switch(effect) {*/
/* 					case 'none' : $(this).css({'opacity':'1','filter':'alpha(opacity = 100)'}); break;*/
/* 					default: animatesItems($(this),nub*delay,i,el);*/
/* 				}*/
/* 				if (i == $_items.length - 1) {*/
/* 					$('.ltabs-loadmore-btn', el).fadeIn(3000);*/
/* 				}*/
/* 				$(this).removeClass('new-ltabs-item');*/
/* 			});*/
/* 		}*/
/* */
/* 		function animatesItems($this,fdelay,i,el) {*/
/* 			var $_items = $('.ltabs-item', el);*/
/* 			$this.stop(true, true).attr("style",*/
/* 				"-webkit-animation:" + effect +" "+ duration +"ms;"*/
/* 				+ "-moz-animation:" + effect +" "+ duration +"ms;"*/
/* 				+ "-o-animation:" + effect +" "+ duration +"ms;"*/
/* 				+ "-moz-animation-delay:" + fdelay + "ms;"*/
/* 				+ "-webkit-animation-delay:" + fdelay + "ms;"*/
/* 				+ "-o-animation-delay:" + fdelay + "ms;"*/
/* 				+ "animation-delay:" + fdelay + "ms;").delay(fdelay).animate({*/
/* 					opacity: 1,*/
/* 					filter: 'alpha(opacity = 100)'*/
/* 				}, {*/
/* 					delay: 1000*/
/* 				});*/
/* 			if (i == ($_items.length - 1)) {*/
/* 				$(".ltabs-items-inner").addClass("play");*/
/* 			}*/
/* 		}*/
/* 		if (type_show == 'loadmore') {*/
/* 			showAnimateItems($items_first_active);*/
/* 		}*/
/* 		$tab.on('click.ltabs-tab', function () {*/
/* 			var $this = $(this);*/
/* 			if ($this.hasClass('tab-sel')) return false;*/
/* 			if ($this.parents('.ltabs-tabs').hasClass('ltabs-open')) {*/
/* 				$this.parents('.ltabs-tabs').removeClass('ltabs-open');*/
/* 			}*/
/* 			$tab.removeClass('tab-sel');*/
/* 			$this.addClass('tab-sel');*/
/* 			var items_active = $this.attr('data-active-content-l');*/
/* 			var _items_active = $(items_active,$element);*/
/* 			$items_content.removeClass('ltabs-items-selected');*/
/* 			_items_active.addClass('ltabs-items-selected');*/
/* 			$tab_label_select.html($tab.filter('.tab-sel').children('.ltabs-tab-label').html());*/
/* 			var $loading = $('.ltabs-loading', _items_active);*/
/* 			var loaded = _items_active.hasClass('ltabs-items-loaded');*/
/* 			type_show =$tabs.parents('.ltabs-tabs-container').attr('data-type_show');*/
/* 			if (!loaded && !_items_active.hasClass('ltabs-process')) {*/
/* 				_items_active.addClass('ltabs-process');*/
/* 				var category_id 		= $this.attr('data-category-id');*/
/* 				$loading.show();*/
/* 				$.ajax({*/
/* 					type: 'POST',*/
/* 					url: ajax_url,*/
/* 					data: {*/
/* 						is_ajax_listing_tabs: 1,*/
/* 						ajax_reslisting_start: 0,*/
/* 						categoryid: category_id,*/
/* 						setting : setting,*/
/* 						lbmoduleid: {{ moduleid }}*/
/* 					},*/
/* 					success: function (data) {*/
/* 						if (data.items_markup != '') {*/
/* 							$('.ltabs-loading', _items_active).replaceWith(data.items_markup);*/
/* 							_items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');*/
/* 							$loading.remove();*/
/* 							if (type_show != 'slider') {*/
/* 								showAnimateItems(_items_active);*/
/* 							}*/
/* 							updateStatus(_items_active);*/
/* 						}*/
/* 						if(typeof(_SoQuickView) != 'undefined'){*/
/* 							_SoQuickView();*/
/* 						}*/
/* 							*/
/* 					},*/
/* 					dataType: 'json'*/
/* 				});*/
/* */
/* 			} else {*/
/* 				if (type_show == 'loadmore') {*/
/* 					$('.ltabs-item', $items_content).removeAttr('style').addClass('new-ltabs-item');*/
/* 					showAnimateItems(_items_active);*/
/* 				}else{*/
/* 					 var owl = $('.owl2-carousel' , _items_active);*/
/* 					 owl = owl.data('owlCarousel2');*/
/* 					 if (typeof owl !== 'undefined') {*/
/* 						owl.onResize();*/
/* 					 }*/
/* 				}*/
/* 			}*/
/* 		});*/
/* */
/* 		function updateStatus($el) {*/
/* 			$('.ltabs-loadmore-btn', $el).removeClass('loading');*/
/* 			var countitem = $('.ltabs-item', $el).length;*/
/* 			$('.ltabs-image-loading', $el).css({display: 'none'});*/
/* 			$('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);*/
/* 			var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');*/
/* 			var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');*/
/* 			var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');*/
/* */
/* 			if (countitem >= rl_total) {*/
/* 				$('.ltabs-loadmore-btn', $el).addClass('loaded');*/
/* 				$('.ltabs-image-loading', $el).css({display: 'none'});*/
/* 				$('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);*/
/* 				$('.ltabs-loadmore-btn', $el).removeClass('loading');*/
/* 			}*/
/* 		}*/
/* */
/* 		$btn_loadmore.on('click.loadmore', function () {*/
/* 			var $this = $(this);*/
/* 			if ($this.hasClass('loaded') || $this.hasClass('loading')) {*/
/* 				return false;*/
/* 			} else {*/
/* 				$this.addClass('loading');*/
/* 				$('.ltabs-image-loading', $this).css({display: 'inline-block'});*/
/* 				var rl_start 				= $this.parent().attr('data-rl_start'),*/
/* 					rl_ajaxurl 				= $this.parent().attr('data-ajaxurl'),*/
/* 					effect 					= $this.parent().attr('data-effect'),*/
/* 					category_id 			= $this.parent().attr('data-categoryid'),*/
/* 					items_active 			= $this.parent().attr('data-active-content');*/
/* 					*/
/* 				var _items_active = $(items_active,$element);*/
/* 				*/
/* 				$.ajax({*/
/* 					type: 'POST',*/
/* 					url: rl_ajaxurl,*/
/* 					data: {*/
/* 						is_ajax_listing_tabs: 1,*/
/* 						ajax_reslisting_start: rl_start,*/
/* 						categoryid: category_id,*/
/* 						setting: setting,*/
/* 						lbmoduleid: {{ moduleid }}*/
/* 					},*/
/* 					success: function (data) {*/
/* 						if (data.items_markup != '') {*/
/* 							$($(data.items_markup).html()).insertAfter($('.ltabs-item', _items_active).nextAll().last());*/
/* 							$('.ltabs-image-loading', $this).css({display: 'none'});*/
/* 							showAnimateItems(_items_active);*/
/* 							updateStatus(_items_active);*/
/* 						}*/
/* 						if(typeof(_SoQuickView) != 'undefined'){*/
/* 							_SoQuickView();*/
/* 						}*/
/* 					}, dataType: 'json'*/
/* 				});*/
/* 			}*/
/* 			return false;*/
/* 		});*/
/* 	})('#{{ tag_id }}');*/
/* });*/
/* //]]>*/
/* </script>*/
