(function($, window) {
    $(document).ready(function($){
        $('.scroll').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
        });
    });

    $("document").ready(function($){
        var nav = $('header');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                nav.addClass("fixo");
            } else {
                nav.removeClass("fixo");
            }
        });
    });
    $('.owl-vitrine').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 0,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('.owl-internas').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 0,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('.owl-dizem').owlCarousel({
        loop: false,
        autoplay: true,
        margin: 10,
        nav:true,
        navText:["<img src='http://betilha.local/wp-content/themes/mymach/assets/images/icon-left.png'>","<img src='http://betilha.local/wp-content/themes/mymach/assets/images/icon-right.png'>"],
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
    $('.owl-treinamento').owlCarousel({
        loop: false,
        autoplay: true,
        margin: 10,
        nav:true,
        navText:["<img src='http://betilha.local/wp-content/themes/mymach/assets/images/icon-left.png'>","<img src='http://betilha.local/wp-content/themes/mymach/assets/images/icon-right.png'>"],
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
    $(document).ready(function() {
      $('.collapse.in').prev('.panel-heading').addClass('active');
      $('#accordion, #bs-collapse')
        .on('show.bs.collapse', function(a) {
          $(a.target).prev('.panel-heading').addClass('active');
        })
        .on('hide.bs.collapse', function(a) {
          $(a.target).prev('.panel-heading').removeClass('active');
        });
    });
})(jQuery, window);