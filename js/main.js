(function($){

$(document).ready(function(){
  //slick
  $('.video-container').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    focusOnSelect: true
  });



  //slick on sub pages
   $('.main-sub-video').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.sub-video-container'
  });
  $('.sub-video-container').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.main-sub-video',
    arrows: true,
    focusOnSelect: true,
  });

$('.sub-video-container').find('[data-slick-index=0]').addClass('currentSlide');
  // On before slide change
$('.sub-video-container').on('afterChange', function(event, slick, currentSlide, nextSlide){
  $(this).find('.slick-slide').removeClass("currentSlide");
  $(this).find('[data-slick-index=' + currentSlide + ']').addClass('currentSlide');
});

});



(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');


$("#simple-menu").sidr({
    side: "right"
})


// usage:
$(window).smartresize(function(){
    if ($(window).width() >= 968 ) {
        $.sidr('close');
        $('#simple-menu').removeClass('is-open');
    }
});



//sticky header
$(window).scroll(function() {

if ($(this).scrollTop() > 50){  
    $('header').addClass("sticky");
   // $('.navbar-header').css("max-width", '250px');
   $('.header-logo').attr('src', 'http://maxtestdomain.com/epigenetics-healing-center/wp-content/uploads/2015/03/the-epig-healing-center.png')
  }
  else{
    $('header').removeClass("sticky");
    $('.header-logo').attr('src', 'http://maxtestdomain.com/epigenetics-healing-center/wp-content/uploads/2015/04/logo-large-white.png')

  }
});

$("header").show();

//smooth scroll to contact section in the footer

$('.contact-link').on('click', function(event) {

        event.preventDefault();
        $('html, body').animate({
            scrollTop: $('#contact-section').offset().top -40
        }, 1000);

});
    $('#ticker').list_ticker({
        speed:4000,
        effect:'fade',
        run_once:true
    });


// jquery tabs for success stories
$('.side-nav li').on('click', function(e){
  e.preventDefault();

  if($(this).hasClass('is-open')) {
    // do nothing because the link is already open
  } else {
    var oldcontent = $('.side-nav li.is-open').children('a').attr('href');
    var newcontent = $(this).children('a').attr('href');
    $(oldcontent).fadeOut('fast', function(){
      $(newcontent).fadeIn().removeClass('is-hidden');
      $(oldcontent).addClass('is-hidden');
    });
    
   
    $('.side-nav li').removeClass('is-open');
    $(this).addClass('is-open');
  }
});

$('[class="static-pages-title"]').on('click', function(){
  var title = $(this).text();
  var videoSite = $(this).attr('data-video-site');
  var videoId = $(this).attr('data-video-id');
  var modalContent = $('.modal-body.text-center');
  $('.modal-title').text(title);
  if (videoSite == 'youtube') {
    
    $('.video-content').html('<iframe width="100%" height="400" src="http://www.youtube.com/embed/' + videoId +'" frameborder="0" allowfullscreen></iframe>');
  }
});



//footer google map
//<![CDATA[
var geocoder = new google.maps.Geocoder();
var address = "4601 w. 109th street suite 325 Overland Park, KS 66211"; //Add your address here, all on one line.
var latitude;
var longitude;
var color = ""; //Set your tint color. Needs to be a hex value.

function getGeocode() {
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
        latitude = results[0].geometry.location.lat();
      longitude = results[0].geometry.location.lng(); 
      initGoogleMap();   
      } 
  });
}

function initGoogleMap() {
  var styles = [
      {
        stylers: [
          { saturation: -100 }
        ]
      }
  ];
  
  var options = {
    mapTypeControlOptions: {
      mapTypeIds: ['Styled']
    },
    center: new google.maps.LatLng(latitude, longitude),
    zoom: 17,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    zoomControl: true,
    disableDefaultUI: true, 
    mapTypeId: 'Styled'
  };
  var div = document.getElementById('googleMap');
  var map = new google.maps.Map(div, options);
  marker = new google.maps.Marker({
      map:map,
      draggable:false,
      animation: google.maps.Animation.DROP,
      position: new google.maps.LatLng(latitude,longitude)
  });
  var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
  map.mapTypes.set('Styled', styledMapType);
  
  var infowindow = new google.maps.InfoWindow({
        content: "<div class='iwContent'>"+address+"</div>"
  });
  google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
    });
  
  
  bounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(-84.999999, -179.999999), 
    new google.maps.LatLng(84.999999, 179.999999));

  rect = new google.maps.Rectangle({
      bounds: bounds,
      fillColor: color,
      fillOpacity: 0.2,
      strokeWeight: 0,
      map: map
  });
}
google.maps.event.addDomListener(window, 'load', getGeocode);
//]]>

})(jQuery);