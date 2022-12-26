// ============= PRELOADER SCRIPT ===================
window.onload = function(){
	$('#preloader').addClass('hid'); 
};
// ============= END PRELOADER SCRIPT ===================


/*closestchild*/
 
        ;(function($){
          $.fn.closestChild = function(selector) {
            var $children, $results;
            
            $children = this.children();
            
            if ($children.length === 0)
              return $();
          
            $results = $children.filter(selector);
            
            if ($results.length > 0)
              return $results;
            else
              return $children.closestChild(selector);
          };
        })(window.jQuery);

/* /. closestchild*/


$(function() {
  $('[data-toggle="tooltip"]').tooltip()
  });
  
$(function(){
        
        
    
        
        
        let top_show = 280, speed = 500, $backButton = $('#up');
    	$(window).scroll(function () { 
    		if ($(this).scrollTop() > top_show) {
    			$backButton.addClass('active');
    		}
    		else {
    			$backButton.removeClass('active');
    		}
    	});
    	$backButton.click(function () { 
    		scrollto(0, speed);
    	});

        // scrollto
    	window.scrollto = function(destination, speed) {
    		if (typeof speed == 'undefined') {
    			speed = 800;
    		}
    		jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination-60}, speed);
    	};
    	$("a.scrollto").click(function () {
    		var elementClick = $(this).attr("href")
    		var destination = $(elementClick).offset().top;
    		scrollto(destination);
    		return false;
    	});
    	// end scrollto 
        // slick-carousel
            $('.top-slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 6000,
                speed: 1000,
                fade: true,
                arrows: true,
                prevArrow: '<a href="#" class="slick-prev"></a>',
                nextArrow: '<a href="#" class="slick-next"></a>',
                dots: false,
                responsive: [
                    {
                      breakpoint: 1330,
                      settings: {
                        arrows: false,
                      }
                    },
                    {
                      breakpoint: 992,
                      settings: {
                        arrows: false,
                        dots: true,
                      }
                    }
                  ]       
            });
            
            
            
            $('.products-carousel.products-carousel-1').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 6000,
                speed: 500,
                arrows: false,
                dots: false,
                swipeToSlide: true,
                responsive: [
                    {
                      breakpoint: 1230,
                      settings: {
                        slidesToShow: 3
                      }
                    },
                    {
                      breakpoint: 992,
                      settings: {
                        slidesToShow: 2
                      }
                    },
                    {
                      breakpoint: 768,
                      settings: {
                        slidesToShow: 1
                      }
                    }
                  ]       
            });
            
            $('.products-carousel.products-carousel-2').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 6000,
                speed: 500,
                arrows: false,
                dots: false,
                swipeToSlide: true,
                responsive: [
                    {
                      breakpoint: 1230,
                      settings: {
                        slidesToShow: 2
                      }
                    },
                    {
                      breakpoint: 768,
                      settings: {
                        slidesToShow: 1
                      }
                    }
                  ]       
            });
            
            
            $('.brands-carousel').slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                speed: 500,
                arrows: false,
                dots: false,
                swipeToSlide: true,
                responsive: [
                    {
                      breakpoint: 1229,
                      settings: {
                        slidesToShow: 4
                      }
                    },
                    {
                      breakpoint: 991,
                      settings: {
                        slidesToShow: 3
                      }
                    },
                    {
                      breakpoint: 767,
                      settings: {
                        slidesToShow: 2
                      }
                    }
                  ]       
            });

        // ./ slick-carousels

        
        // checking for placeholder
        if (Modernizr.input.placeholder) {
          $('.label').hide();
        }
        // end

        
        
        // validation

          $(".rf").each(function () {
            var item = $(this),
              btn = item.find(".btn")
        
            function checkInput() {
              item.find("select.required").each(function () {
                if ($(this).val() == "") {
                  $(this).parents(".form-group").addClass("error")
                  $(this).parents(".form-group").find(".error-message").show()
                } else {
                  $(this).parents(".form-group").removeClass("error")
                }
              })
        
              item.find("input[type=text].required").each(function () {
                if ($(this).val() != "") {
                  $(this).removeClass("error")
                } else {
                  $(this).addClass("error")
                  $(this).parent(".form-group").find(".error-message").show()
                }
              })
        
              item.find("input[type=tel].required").each(function () {
                if ($(this).val() != "") {
                  $(this).removeClass("error")
                } else {
                  $(this).addClass("error")
                  $(this).parent(".form-group").find(".error-message").show()
                }
              })
        
              item.find("input[type=file].required").each(function () {
                if ($(this).val() != "") {
                  $(this).parents("fieldset").removeClass("error")
                } else {
                  $(this).parents("fieldset").addClass("error")
                }
              })
        
              item.find("textarea.required").each(function () {
                if ($(this).val() != "") {
                  $(this).removeClass("error")
                } else {
                  $(this).addClass("error")
                  $(this).parent(".form-group").find(".error-message").show()
                }
              })
        
              item.find("input[type=email]").each(function () {
                var regexp = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/i
                var $this = $(this)
                if ($this.hasClass("required")) {
                  if (regexp.test($this.val())) {
                    $this.removeClass("error")
                  } else {
                    $this.addClass("error")
                    $(this).parent(".form-group").find(".error-message").show()
                  }
                } else {
                  if ($this.val() != "") {
                    if (regexp.test($this.val())) {
                      $this.removeClass("error")
                    } else {
                      $this.addClass("error")
                      $(this).parent(".form-group").find(".error-message").show()
                    }
                  } else {
                    $this.removeClass("error")
                  }
                }
              })
        
              item.find("input[type=checkbox].required").each(function () {
                if ($(this).is(":checked")) {
                  $(this).removeClass("error")
                } else {
                  $(this).addClass("error")
                  $(this).parent(".form-group").find(".error-message").show()
                }
              })
            }
        
            btn.click(function () {
              checkInput()
              var sizeEmpty = item.find(".error:visible").length
              if (sizeEmpty > 0) {
                return false
              } else {
                item.submit()
                $.fancybox.close()
              }
            })
          })
        
          $("select").change(function () {
            if ($(this).val() == "") {
              $(this).parents(".form-group").removeClass("selected")
            } else {
              $(this).parents(".form-group").addClass("selected")
              $(this).parents(".form-group").removeClass("error")
            }
          })
        
          // end validation
        
        
        
        // проверка на Internet Explorer 6-11
        var isIE = /*@cc_on!@*/false || !!document.documentMode;
            
        
        if(isIE){
            $('body').addClass('ie');
        }
        // end

        
        $('.mob-menu-btn').click(function(){
            if($(this).hasClass('active')){
                $('.mobile-menu').slideUp(200);
                $(this).removeClass('active')
            }else{
                $('.mobile-menu').slideDown(200);
                $(this).addClass('active')
            }
        });
        
        
        
        $('.mobile-menu .down .dropdown-button').click(function(){
            $(this).toggleClass('active');
            $(this).siblings('ul:visible').slideUp(200);
            $(this).siblings('ul:hidden').slideDown(200);
        });
        
        // mobMenuHeight begin
            
            var windHeight;
            
            function mobMenuHeight(){
                windHeight = $( window ).height();
                $('.mobile-menu > ul').height(windHeight - $('.top-bar').height());
            }
            mobMenuHeight();
            
            
            window.addEventListener("resize", function() {
            	mobMenuHeight();
            }, false);
        
        
            window.addEventListener("orientationchange", function() {
                mobMenuHeight();
            }, false);

        
        // mobMenuHeight end
        
        
        
        var panel=$('.top-bar'),pos=panel.offset().top;
        
        $(window).scroll(function(){
            if($(this).scrollTop() > pos && !panel.hasClass('fixed')){
                panel.addClass('fixed');
            }else if($(this).scrollTop() < pos && panel.hasClass('fixed')){         
                panel.removeClass('fixed');  
            }
        });


        window.addEventListener("resize", function() {
            panel.removeClass('fixed'); 
        	panel=$('.top-bar'),pos=panel.offset().top;
        
            $(window).scroll(function(){
                if($(this).scrollTop() > pos && !panel.hasClass('fixed')){
                    panel.addClass('fixed');
                }else if($(this).scrollTop() < pos && panel.hasClass('fixed')){         
                    panel.removeClass('fixed');  
                }
            });
        }, false);
    
    
        window.addEventListener("orientationchange", function() {
            panel.removeClass('fixed'); 
            panel=$('.top-bar'),pos=panel.offset().top;
        
            $(window).scroll(function(){
                if($(this).scrollTop() > pos && !panel.hasClass('fixed')){
                    panel.addClass('fixed');
                }else if($(this).scrollTop() < pos && panel.hasClass('fixed')){         
                    panel.removeClass('fixed');  
                }
            });
        }, false);
        
        
        // lightgallery begin

        $(".lightgallery").lightGallery({
            selector: 'a',
            thumbnail: false
        });

        // light gallery end 
        
        
        
        // map height begin

            var contactswrapperHeight;
            function mapHeight(){
                contactswrapperHeight = $('.contacts-wrapper').height();
                $('.map-wrapper').css({'height':contactswrapperHeight});
            }
            mapHeight();
                
            window.addEventListener("resize", function() {
            	mapHeight();
            }, false);
        
        
            window.addEventListener("orientationchange", function() {
                mapHeight();
            }, false);
        
        // map height end
        
        
        
        // ASIDE MENU
        
        $('.aside-menu > ul li.down > ul').before('<span class="dropdown-button"></span>');
        
        $('.aside-menu .down .dropdown-button').each(function(){
            if($(this).siblings('ul').is(':visible')){
                $(this).addClass('active');
            }
        });
        
        $('.aside-menu .down .dropdown-button').click(function(){
            
            $(this).parent().toggleClass('open');
            if($(this).siblings('ul').is(':visible')){
                $(this).siblings('ul').slideUp();
                $(this).removeClass('active');
            }else{
                $(this).siblings('ul').slideDown();
                $(this).addClass('active');
            }
            
        });
        
        
        $('.aside-menu-title').click(function(){
            $('.aside-menu').toggleClass('active');
        });
        
        
        // ASIDE MENU END
        
        
        
        
        /* plus minus goods counter */        
        $.fn.globalNumber = function(){
        $('.btn-number').click(function(e){
            e.preventDefault();
            fieldName = $(this).attr('data-field');
            type      = $(this).attr('data-type');
            var input = $("input#"+fieldName);
        
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if(type == 'minus') {
                    
                    if(currentVal > input.attr('data-min')) {
                        input.val(currentVal - 1).change();
                    } 
                    if(parseInt(input.val()) == input.attr('data-min')) {
                        $(this).attr('disabled', true);
                    }
        
                } else if(type == 'plus') {
        
                    if(currentVal < input.attr('data-max')) {
                        input.val(currentVal + 1).change();
                    }
                    if(parseInt(input.val()) == input.attr('data-max')) {
                        $(this).attr('disabled', true);
                    }
        
                }
            } else {
                input.val(0);
            }
        });
        $('.input-number').focusin(function(){
           $(this).data('oldValue', $(this).val());
        });
        $('.input-number').change(function() {
            
            minValue =  parseInt($(this).attr('data-min'));
            maxValue =  parseInt($(this).attr('data-max'));
            valueCurrent = parseInt($(this).val());
        
            name = $(this).attr('id');
            if(valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('К сожалению, было достигнуто минимальное значение');
                $(this).val($(this).data('oldValue'));
            }
            if(valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('К сожалению, было превышено максимальное значение');
                $(this).val($(this).data('oldValue'));
            }
            
            
        });
        $(".input-number").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                     // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) || 
                     // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                         // let it happen, don't do anything
                         return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
        };$.fn.globalNumber();
        /* /. plus minus goods counter */   
        
        
        
        
        // tabs
        
        $('ul.tabs').on('click', 'li:not(.current)', function() {
        
        
        $(this)
          .addClass('current').siblings().removeClass('current')
          .closest('div.section').closestChild('div.box').removeClass('visible').eq($(this).index()).addClass('visible');
        });
        
        
        
        $('ul.tabs.mobile li').click(function(){
            $(this).parent().hide().siblings('.mobile-tab-header').html($(this).html());
            $('.mobile-tab-header').removeClass('active');
        });
        
        $('.mobile-tab-header').click(function(e){
            if($(this).hasClass('active')){
                $(this).removeClass('active');
                $(this).siblings('.tabs.mobile').stop().slideUp(0);
            }else{
                $(this).addClass('active');
                $(this).siblings('.tabs.mobile').stop().slideDown(0);
            }
            
            e.stopPropagation();
        });
        
        // ./ tabs   
        
        
        
        
        setInterval(function(){
    		$('.top-bar .btn > span').addClass('blink_on');
    		setTimeout(function(){
    			$('.top-bar .btn > span').removeClass('blink_on')
    		}, 2500);
    	}, 4000);
    	
    	
    	var productname, requestpricelink;
        $('a[href="#requestPriceModal"]').click(function(){
            productname = $(this).data('productname');
            requestpricelink = $(this).data('link');
            $('input[name="productname"]').val(productname);
            $('input[name="requestpricelink"]').val(requestpricelink);
        });
        
        

});// end ready