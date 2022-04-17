
$(document).ready(function(){
    $('.logo-area').slick({
        slidesToShow:4,
        centerMode: true,
        slidesToScroll:1,
        autoplay:true,
        autoplaySpeed:1500,
        arrows: false,
        dots: true,
       
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings:{
                slidesToShow: 4
            }},
            {
            breakpoint: 520,
                settings:{
                slidesToShow: 3
            }
        }]
    })
});


$(document).ready(function(){
    $('.brand_prod_slider').slick({
        slidesToShow:6,
        centerMode: true,
        slidesToScroll:1,
        autoplay:true,
        autoplaySpeed:1900,
    
        arrows: false,
        dots: true,
       
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings:{
                slidesToShow: 4
            }},
            {
            breakpoint: 520,
                settings:{
                slidesToShow: 3
            }
        }]
    })
});

$(document).ready(function(){
    $('.testimonial_slider').slick({
        slidesToShow:2,
        centerMode: true,
        slidesToScroll:1,
        autoplay:true,
        autoplaySpeed:1900,
    
        arrows: false,
        dots: true,
       
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings:{
                slidesToShow: 4
            }},
            {
            breakpoint: 520,
                settings:{
                slidesToShow: 3
            }
        }]
    })
});

$('.brand-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
    }
  }) 
  

  $( function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker2" ).datepicker();
  } );





  document.addEventListener("DOMContentLoaded", function(){
    document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
      
      element.addEventListener('click', function (e) {
  
        let nextEl = element.nextElementSibling;
        let parentEl  = element.parentElement;	
  
          if(nextEl) {
              e.preventDefault();	
              let mycollapse = new bootstrap.Collapse(nextEl);
              
              if(nextEl.classList.contains('show')){
                mycollapse.hide();
              } else {
                  mycollapse.show();
                  // find other submenus with class=show
                  var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                  // if it exists, then close all of them
                  if(opened_submenu){
                    new bootstrap.Collapse(opened_submenu);
                  }
              }
          }
      }); // addEventListener
    }) // forEach
  }); 




  $('.popup-youtube, .popup-text').magnificPopup({
    disableOn: 320,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: true
});