$(document).ready(function($){
    "use strict";
  //==============================
  // smooth scroll
  //==============================


    $(window).on('scroll', function () {
      var wscroll = $(this).scrollTop();
      //fixed-nav
      wscroll > 1 ? $("#header").addClass("fixed") : $("#header").removeClass("fixed");

      // go top appear
      wscroll > 700 ? $("#goTop").fadeIn() : $("#goTop").fadeOut();

    });
    $( document ).ready(function() {
      var typed = new Typed('#typed', {
        strings: [
        'Develop',
        'Innovation',
        'Research'
        ],
        typeSpeed: 50,
        backSpeed: 50,
        loop: true
      });
      var typed = new Typed('#type2', {
        strings: [
        'Develop',
        'Innovation',
        'Research'
        ],
        typeSpeed: 50,
        backSpeed: 50,
        loop: true
      });

      var typed = new Typed('#type3', {
        strings: [
        'Develop',
        'Innovation',
        'Research'
        ],
        typeSpeed: 50,
        backSpeed: 50,
        loop: true
      });

    });

    $( document ).ready(function() {
        // About  owlCarousel
        $(".about-carousel").owlCarousel({
          loop:true,
          margin:15,
          nav:true,
          navText: ["<img src='assets/img/prev_arrow.png'>","<img src='assets/img/next_arrow.png'>"],
          dots:false,
          items:1,
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

          $(".arts-carousel").owlCarousel({
          loop:true,
          margin:15,
          nav:true,
          navText: ["Prevous","Next"],
          dots:false,
          items:1,
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

        
  // Project  owlCarousel
  $(".project-carousel").owlCarousel({
    loop:true,
    margin:15,
    nav:false,
    dots:true,
    items:1,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:2
      }
    }
  });
  // Event carousel
  $(".event-carousel").owlCarousel({
    loop:true,
    margin:15,
    nav:true,
    navText: ["<img src='assets/img/prev_arrow.png'>","<img src='assets/img/next_arrow.png'>"],
    dots:false,
    items:1,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:2
      }
    }
  });
    // Testimonials carousel
    $(".testimonials-carousel").owlCarousel({
      loop:true,
      margin:15,
      nav:true,
      navText: ["<img src='assets/img/prev_arrow.png'>","<img src='assets/img/next_arrow.png'>"],
      dots:false,
      items:1,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2
        },
        1000:{
          items:2
        }
      }
    });

    $(".footer-carousel").owlCarousel({
      loop:true,
      margin:15,
      nav:true,
      navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
      dots:false,
      items:1,
      responsive:{
        0:{
          items:3
        },
        600:{
          items:3
        },
        1000:{
          items:3
        }
      }
    });

  });

    // if(window.innerWidth>768) {

    //   $( document ).ready(function() {
    //       $(".all-carousel").owlCarousel({
    //         loop:true,
    //         margin:15,
    //         nav:false,
    //         dots:true,
    //         items:1,
    //         responsive:{
    //           0:{
    //             items:1
    //           },
    //           600:{
    //             items:1
    //           },
    //           1000:{
    //             items:1
    //           }
    //         }
    //       });
    //     });
    // }


    $( document ).ready(function() {
      $(".all-carousel").owlCarousel({
        loop:true,
        margin:15,
        nav:true,
        navText: ["<img src='assets/img/prev_arrow.png'>","<img src='assets/img/next_arrow.png'>"],
        dots:false,
        items:1,
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
    });

    $( document ).ready(function() {
      $(".trainings-carousel").owlCarousel({
        loop:true,
        margin:15,
        nav:true,
        navText: ["<img src='assets/img/prev_arrow.png'>","<img src='assets/img/next_arrow.png'>"],
        dots:false,
        items:1,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:1
          },
          1000:{
            items:2
          }
        }
      });
    });

    $( document ).ready(function() {
      var containerEl = document.querySelector('.portfolio-content');

      var mixer = mixitup(containerEl, {
        animation: {
          animateResizeContainer: false 
        }
      });

    });

  $("#goTop").click(function () {
    $("body, html").animate({
      scrollTop: 0
    }, 1000);
  });

  $( document ).ready(function() {
    var $grid = $('.grid').isotope({
    // options
    });
    // filter items on button click
    $('.filter-button-group').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue });
    });

  });

  $( document ).ready(function() {
   $('.slider-for').slick({
     slidesToShow: 1,
     slidesToScroll: 1,
     arrows: false,
     fade: true,
     asNavFor: '.slider-nav'
   });
   $('.slider-nav').slick({
     slidesToShow: 3,
     slidesToScroll: 1,
     asNavFor: '.slider-for',
     dots: false,
     focusOnSelect: true
   });
 });

  $( document ).ready(function() {

         
           
                  $(function() {
                    $("form[name='login']").validate({
                      rules: {
                        
                        email: {
                          required: true,
                          email: true
                        },
                        password: {
                          required: true,
                          
                        }
                      },
                       messages: {
                        email: "Please enter a valid email address",
                       
                        password: {
                          required: "Please enter password",
                         
                        }
                        
                      },
                      submitHandler: function(form) {
                        form.submit();
                      }
                    });
                  });
                  
         
         
         $(function() {
           
           $("form[name='registration']").validate({
             rules: {
               firstname: "required",
               lastname: "required",
               email: {
                 required: true,
                 email: true
               },
               password: {
                 required: true,
                 minlength: 5
               }
             },
             
             messages: {
               firstname: "Please enter your firstname",
               lastname: "Please enter your lastname",
               password: {
                 required: "Please provide a password",
                 minlength: "Your password must be at least 5 characters long"
               },
               email: "Please enter a valid email address"
             },
           
             submitHandler: function(form) {
               form.submit();
             }
           });
         });
         
  });
    $( document ).ready(function() {
      $(".job-carousel").owlCarousel({
        loop:true,
        margin:15,
        nav:true,
        navText: ["<img src='assets/img/prev_arrow.png'>","<img src='assets/img/next_arrow.png'>"],
        dots:false,
        items:1,
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
    });
  // portfolio popup image
  $('.image-link').magnificPopup({type:'image'});
}(jQuery));