$("#testimonial-carousel").owlCarousel({
    autoplay:true,
    autoplayHoverPause:true,
    nav:true,
    loop:true,
    lazyLoad:true,
    margin:0,
    items:2,
    dots:true,
    navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
            
        },
        600:{
            items:1
            
        },
        1000:{
            items:2,
            dots:true
            
        },
        1200:{
            items:2,
            dots:true
           
        }
    }
});
  
       
  
 

