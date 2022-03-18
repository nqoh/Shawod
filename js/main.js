function _(x) {return document.getElementById(x)}
function send_feedback() {
    var rateState='';
    if(_('slider').value < 10){
        rateState = 'Absolutely Terrible'
    }else if(_('slider').value < 20){
        rateState = 'Disappointing'
    }else if(_('slider').value < 30){
        rateState = 'Quite Bad hey'
    }else if(_('slider').value < 40){
        rateState = 'Not impressed'
    }else if(_('slider').value < 50){
        rateState = 'Nothing to be proud of'
    }else if(_('slider').value < 60){
        rateState = 'Could have been better'
    }else if(_('slider').value < 70){
        rateState = 'Ok, I guess'
    }else if(_('slider').value < 80){
        rateState = 'Satisfactory'
    }else if(_('slider').value < 90){
        rateState = 'Was Great'
    }else if(_('slider').value <= 99){
        rateState = 'Super Impressed'
    }
    var ajax = new XMLHttpRequest();
    ajax.open("POST","normal.php",true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax.onreadystatechange=function () {
        if(ajax.readyState === 4 && ajax.status === 200){
        	alert(ajax.responseText);
            if(ajax.responseText === 'Ok'){
                _('rateSuccess').style.display="block"
                _('ratebtn').style.display="none"
            }
        }
    }
    ajax.send("rate="+rateState);
}
var i = 0
function btn_change() {
    _('apply').style.display="block";
    if(i >= 1) {
        _('order').innerHTML = "R" + localStorage.getItem('savedprice') + " !"
    }
    _('couponId').value = _('couponId').value.trim().substr(0,8)
}

function coupon(id) {
    if(i <= 0) {
    	localStorage.setItem('savedprice',parseFloat(_('order').innerHTML.substr(1, _('order').innerHTML.length - 2)))
    }
    _('coupon_error').innerHTML="";
	if(_(id).value.trim().length >= 8){
        _('apply').style.display="none"
        _(id).style.background = "url('../images/loader.gif') no-repeat right 9px center transparent";
        _(id).setAttribute('disabled','disabled');
        var ajax = new XMLHttpRequest();
        ajax.open("POST","normal.php",true);
        ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        ajax.onreadystatechange=function () {
            if(ajax.readyState === 4 && ajax.status === 200) {
                if (ajax.responseText !== "") {
                      var price = parseFloat(parseFloat(_('order').innerHTML.substr(1, _('order').innerHTML.length - 2)) / 100 * parseFloat(ajax.responseText)).toFixed(2)
					  _('order').innerHTML ="R"+ price +" !"
                	  _('discount').innerHTML ="R "+ parseFloat(price / 100 * 50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
                      _('coupon_error').innerHTML="";
                      _(id).removeAttribute('disabled');
				      _('apply').style.display="none"
                      _(id).style.background ="none";
                      i++
                }else{
					_('coupon_error').innerHTML="Invalid coupon";
                    _(id).removeAttribute('disabled');
                    _(id).style.background ="none";
                    _('apply').style.display="flex"
				}
            }
        }
        ajax.send("coupon="+_(id).value);
	}else if(_(id).value.trim().length >= 1){
        _('coupon_error').innerHTML="Invalid coupon";
        _('couponId').value = _('couponId').value.trim().substr(0,8)
	}
}


jQuery(function($) {'use strict';

	//Responsive Nav
	$('li.dropdown').find('.fa-angle-down').each(function(){
		$(this).on('click', function(){
			if( $(window).width() < 768 ) {
				$(this).parent().next().slideToggle();
			}
			return false;
		});
	});

	//Fit Vids
	if( $('#video-container').length ) {
		$("#video-container").fitVids();
	}

	//Initiat WOW JS
	new WOW().init();

	// portfolio filter
	$(window).load(function(){

		$('.main-slider').addClass('animate-in');
		$('.preloader').remove();
		//End Preloader

		if( $('.masonery_area').length ) {
			$('.masonery_area').masonry();//Masonry
		}

		var $portfolio_selectors = $('.portfolio-filter >li>a');
		
		if($portfolio_selectors.length) {
			
			var $portfolio = $('.portfolio-items');
			$portfolio.isotope({
				itemSelector : '.portfolio-item',
				layoutMode : 'fitRows'
			});
			
			$portfolio_selectors.on('click', function(){
				$portfolio_selectors.removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$portfolio.isotope({ filter: selector });
				return false;
			});
		}

	});


	$('.timer').each(count);
	function count(options) {
		var $this = $(this);
		options = $.extend({}, options || {}, $this.data('countToOptions') || {});
		$this.countTo(options);
	}
		
	// Search
	$('.fa-search').on('click', function() {
		$('.field-toggle').fadeToggle(200);
	});

	// Contact form
	var form = $('#main-contact-form');
	form.submit(function(event){
		event.preventDefault();
		var form_status = $('<div class="form_status"></div>');
		$.ajax({
			url: $(this).attr('action'),
			beforeSend: function(){
				form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Sending message...</p>').fadeIn() );
			}
		}).done(function(data){
			form_status.html('<p class="text-success">Message sent!</p>').delay(3000).fadeOut();
		});
	});

	// Progress Bar
	$.each($('div.progress-bar'),function(){
		$(this).css('width', $(this).attr('data-transition')+'%');
	});

	if( $('#gmap').length ) {
		var map;

		map = new GMaps({
			el: '#gmap',
			lat: 43.04446,
			lng: -76.130791,
			scrollwheel:false,
			zoom: 16,
			zoomControl : false,
			panControl : false,
			streetViewControl : false,
			mapTypeControl: false,
			overviewMapControl: false,
			clickable: false
		});

		map.addMarker({
			lat: 43.04446,
			lng: -76.130791,
			animation: google.maps.Animation.DROP,
			verticalAlign: 'bottom',
			horizontalAlign: 'center',
			backgroundColor: '#3e8bff',
		});
	}

});