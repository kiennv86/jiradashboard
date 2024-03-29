/* [ ---- Gebo Admin Panel - common ---- ] */

	//* detect touch devices 
    function is_touch_device() {
	  return !!('ontouchstart' in window);
	}
	$(document).ready(function() {
		//* search typeahead
		$('.search_query').typeahead({
			source: ["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"],
			items: 4
		});

		//* resize elements on window resize
		var lastWindowHeight = $(window).height();
		var lastWindowWidth = $(window).width();
		$(window).on("debouncedresize",function() {
			if($(window).height()!=lastWindowHeight || $(window).width()!=lastWindowWidth){
				lastWindowHeight = $(window).height();
				lastWindowWidth = $(window).width();
			}
		});
		//* tooltips
		gebo_tips.init();
        if(!is_touch_device()){
		    //* popovers
            gebo_popOver.init();
        }

		//* breadcrumbs
        gebo_crumbs.init();
		//* pre block prettify
		if(typeof prettyPrint == 'function') {
			prettyPrint();
		}
		//* external links
		//gebo_external_links.init();
		//* accordion icons
		gebo_acc_icons.init();
		//* colorbox single
		gebo_colorbox_single.init();
		//* main menu mouseover
		gebo_nav_mouseover.init();
		//* top submenu
		gebo_submenu.init();
		

		
		//* style switcher
		gebo_style_sw.init();
	});
    
  

	//* tooltips
	gebo_tips = {
		init: function() {
			if(!is_touch_device()){
				var shared = {
				style		: {
						classes: 'ui-tooltip-shadow ui-tooltip-tipsy'
					},
					show		: {
						delay: 100,
						event: 'mouseenter focus'
					},
					hide		: { delay: 0 }
				};
				if($('.ttip_b').length) {
					$('.ttip_b').qtip( $.extend({}, shared, {
						position	: {
							my		: 'top center',
							at		: 'bottom center',
							viewport: $(window)
						}
					}));
				}
				if($('.ttip_t').length) {
					$('.ttip_t').qtip( $.extend({}, shared, {
						position: {
							my		: 'bottom center',
							at		: 'top center',
							viewport: $(window)
						}
					}));
				}
				if($('.ttip_l').length) {
					$('.ttip_l').qtip( $.extend({}, shared, {
						position: {
							my		: 'right center',
							at		: 'left center',
							viewport: $(window)
						}
					}));
				}
				if($('.ttip_r').length) {
					$('.ttip_r').qtip( $.extend({}, shared, {
						position: {
							my		: 'left center',
							at		: 'right center',
							viewport: $(window)
						}
					}));
				};
			}
		}
	};
    
    //* popovers
    gebo_popOver = {
        init: function() {
            $(".pop_over").popover();
        }
    };
    
    //* breadcrumbs
    gebo_crumbs = {
        init: function() {
            if($('#jCrumbs').length) {
				$('#jCrumbs').jBreadCrumb({
					endElementsToLeaveOpen: 0,
					beginingElementsToLeaveOpen: 0,
					timeExpansionAnimation: 500,
					timeCompressionAnimation: 500,
					timeInitialCollapse: 500,
					previewWidth: 30
				});
			}
        }
    };
	
	//* external links
	gebo_external_links = {
		init: function() {
			$("a[href^='http']").not('.thumbnail>a,.ext_disabled').each(function() {
				$(this).attr('target','_blank').addClass('external_link');
			})
		}
	};
	
	//* accordion icons
	gebo_acc_icons = {
		init: function() {
			var accordions = $('.main_content .accordion');
			
			accordions.find('.accordion-group').each(function(){
				var acc_active = $(this).find('.accordion-body').filter('.in');
				acc_active.prev('.accordion-heading').find('.accordion-toggle').addClass('acc-in');
			});
			accordions.on('show', function(option) {
				$(this).find('.accordion-toggle').removeClass('acc-in');
				$(option.target).prev('.accordion-heading').find('.accordion-toggle').addClass('acc-in');
			});
			accordions.on('hide', function(option) {
				$(option.target).prev('.accordion-heading').find('.accordion-toggle').removeClass('acc-in');
			});	
		}
	};
	
	//* main menu mouseover
	gebo_nav_mouseover = {
		init: function() {
			$('header li.dropdown').mouseenter(function() {
				if($('body').hasClass('menu_hover')) {
					$(this).addClass('navHover')
				}
			}).mouseleave(function() {
				if($('body').hasClass('menu_hover')) {
					$(this).removeClass('navHover open')
				}
			});
		}
	};
    
	//* single image colorbox
	gebo_colorbox_single = {
		init: function() {
			if($('.cbox_single').length) {
				$('.cbox_single').colorbox({
					maxWidth	: '80%',
					maxHeight	: '80%',
					opacity		: '0.2', 
					fixed		: true
				});
			}
		}
	};
	
	//* submenu
	gebo_submenu = {
		init: function() {
			$('.dropdown-menu li').each(function(){
				var $this = $(this);
				if($this.children('ul').length) {
					$this.addClass('sub-dropdown');
					$this.children('ul').addClass('sub-menu');
				}
			});
			
			$('.sub-dropdown').on('mouseenter',function(){
				$(this).addClass('active').children('ul').addClass('sub-open');
			}).on('mouseleave', function() {
				$(this).removeClass('active').children('ul').removeClass('sub-open');
			})
			
		}
	};
	
	//* style switcher
	gebo_style_sw = {
		init: function() {
			//$('body').append('<a class="ssw_trigger" href="javascript:void(0)"><i class="icon-cog icon-white"></i></a>');
			var defLink = $('#link_theme').clone();
			
			
			$('input[name=ssw_sidebar]:first,input[name=ssw_layout]:first,input[name=ssw_menu]:first').attr('checked', true);
			
			$(".ssw_trigger").click(function(){
				$(".style_switcher").toggle("fast");
				$(this).toggleClass("active");
				return false;
			});
			
			// colors
			$('.style_switcher .jQclr').click(function() {
                $(this).closest('div').find('.style_item').removeClass('style_active');
				$(this).addClass('style_active');
				var style_selected = $(this).attr('title');
				$('#link_theme').attr('href','css/'+style_selected+'.css');
            });
			
			// backgrounds
			$('.style_switcher .jQptrn').click(function(){
				$(this).closest('div').find('.style_item').removeClass('style_active');
				$(this).addClass('style_active');
				var style_selected = $(this).attr('title');
				if($(this).hasClass('jQptrn')) { $('body').removeClass('ptrn_a ptrn_b ptrn_c ptrn_d ptrn_e').addClass(style_selected); };
			});
			//* layout
			$('input[name=ssw_layout]').click(function(){
				var layout_selected = $(this).val();
				$('body').removeClass('gebo-fixed').addClass(layout_selected);
			});
			//* sidebar position
			$('input[name=ssw_sidebar]').click(function(){
				var sidebar_position = $(this).val();
				$('body').removeClass('sidebar_right').addClass(sidebar_position);
				$(window).resize();
			});
			//* menu show
			$('input[name=ssw_menu]').click(function(){
				var menu_show = $(this).val();
				$('body').removeClass('menu_hover').addClass(menu_show);
			});
			
			//* reset
			$('#resetDefault').click(function(){
				$('body').attr('class', '');
				$('.style_item').removeClass('style_active').filter(':first-child').addClass('style_active');
				$('#link_theme').replaceWith(defLink);
				$('.ssw_trigger').removeClass('active');
				$(".style_switcher").hide();
				return false;
			});
			
			$('#showCss').on('click',function(e){
				var themeLink = $('#link_theme').attr('href'),
					bodyClass = $('body').attr('class');
				var contentStyle = '';
				contentStyle = '<div style="padding:20px;background:#fff">';
				if( (themeLink != 'css/blue.css') && (themeLink != undefined) ) {
					contentStyle += '<div class="sepH_c"><textarea style="height:20px" class="span5">&lt;link id="link_theme" rel="stylesheet" href="'+themeLink+'"&gt;</textarea><span class="help-block">Find stylesheet with id="link_theme" in document head and replace it with this code.</span></div>';
				}
				if( (bodyClass != '') && (bodyClass != undefined) ) {
					contentStyle += '<textarea style="height:20px" class="span5">&lt;body class="'+$('body').attr('class')+'"&gt;</textarea><span class="help-block">Replace body tag with this code.</span>';
				} else {
					contentStyle += '<textarea style="height:20px" class="span5">&lt;body&gt;</textarea>';
				}
				contentStyle += '</div>';
				$.colorbox({
					opacity				: '0.2',
					fixed				: true,
					html				: contentStyle
				});
				e.preventDefault();
			})
		}
	};