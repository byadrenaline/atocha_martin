jQuery(function ($) {

var documento = $(document);
var ventana = $(window);


/* Slick Slider
–––––––––––––––––––––––––––––––––––––––––––––––––– */

documento.on('ready',function(){
  $('.slider').slick({
  	autoplay: true,
  	arrows: false,
  	dots: true,
  });
});
	


/* Grilla Imagenes
–––––––––––––––––––––––––––––––––––––––––––––––––– */

documento.on('ready', byadr_add_grilla_class);
ventana.on('resize', byadr_add_grilla_class);

function byadr_add_grilla_class() {
    if (ventana.width() < 768) {
        $('.grilla-module--container').slick({
		  	autoplay: true,
		  	arrows: false,
		  	dots: false,
		});
    }
    if (ventana.width() > 768) {
        $('.grilla-module--container').slick('unslick');
    }

}


/* Tabs - zonas depilacion
–––––––––––––––––––––––––––––––––––––––––––––––––– */
var tab = $('.zonas-module--tab');
var tab_img = $('.zonas-module--content-wrap');

$('.zonas-module--tab:first-child').addClass('zonas-module--tab__active');
$('.zonas-module--content-wrap:first-child').addClass('zonas-module--content-wrap__active');


tab.on('click', byadr_tabs);

function byadr_tabs(){
	var index = $(this).index();

	tab.removeClass('zonas-module--tab__active');
	$(this).addClass('zonas-module--tab__active');

	tab_img.removeClass('zonas-module--content-wrap__active');
	tab_img.eq(index).addClass('zonas-module--content-wrap__active');
	

	//console.log(index);

}

/*
var tab = $('.zonas-module--tab');




tab.on('click', byadr_tabs);

function byadr_tabs(){
	var index = $(this).index();

	tab.removeClass('zonas-module--tab__active');
	$(this).addClass('zonas-module--tab__active');

	tab_img.removeClass('zonas-module--image__active');
	tab_img.eq(index).addClass('zonas-module--image__active');
	

	//console.log(index);

}
*/


/* Masonry
–––––––––––––––––––––––––––––––––––––––––––––––––– 

// Gallery
documento.on('ready', function(){
	$('.gallery-wrapper').masonry({
	  // set itemSelector so .grid-sizer is not used in layout
	  itemSelector: '.gallery-item',
	  // use element for option
	  columnWidth: '.gallery-sizer',
	  percentPosition: true
	});


	// Blog Archive

	$('.blog--wrapper').masonry({
	  // set itemSelector so .grid-sizer is not used in layout
	  itemSelector: '.blog--item',
	  // use element for option
	  columnWidth: '.blog--sizer',
	  percentPosition: true
	});
});

*/
/* Magnific PopUp
–––––––––––––––––––––––––––––––––––––––––––––––––– 
$(function () {
	$('.btn--popup').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: true
	});
	documento.on('click', '.btn--popup__dismiss', function(e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
});

*/


/* Menu Mobile
–––––––––––––––––––––––––––––––––––––––––––––––––– 

$('.mobileNav').on('click', byadr_show_menu);

function byadr_show_menu(){
	$('.mobileNav > div').slideToggle();
};
*/


/* Ancla Top
–––––––––––––––––––––––––––––––––––––––––––––––––– 

$('.ancla').on('click',function(event){
	event.preventDefault();
	$( "html , body" ).stop().animate( { scrollTop: 0 } , 2400 , "easeInOutCubic") ;
});

*/


/* Problemas padding bloques texto
–––––––––––––––––––––––––––––––––––––––––––––––––– */

documento.on('ready', function(){
	$('.text-module > .column.column__half:nth-of-type(2n+3)').before('</div><div class="clearfix">');

	$('.text-module > .column.column__third:nth-of-type(3n+4)').before('</div><div class="clearfix">');

	$('.text-module > .column.column__fourth:nth-of-type(4n+5)').before('</div><div class="clearfix">');
});





/* Evitar scroll en pop up
––––––––––––––––––––––––––––––––––––––––––––––––––

documento.on('ready', deshabilitamos_scroll_popup);

function deshabilitamos_scroll_popup(){
	var estadoPopup = $('.popup').css("display");

	if( estadoPopup === 'block' ){
		$('body').addClass('noscroll');
	}
	if( estadoPopup === 'none' ){
		$('body').removeClass('noscroll');
	}
}
 */

}); // Fin de jQuery function