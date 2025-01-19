//lmt.js

var lmt = {

    carousel: function(){
        var owl = $('.owl-carousel');
        owl.owlCarousel({
          items: 1,
          loop: true,
          autoplay: true,
          autoplayTimeout: 3000,
          navigation: false,
          dots: false,
          autoplayHoverPause: true
        });
        $('.play').on('click', function() {
          owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
          owl.trigger('stop.owl.autoplay')
        })
    }//carousel

}

$(document).ready(function(){
    lmt.carousel();
});
