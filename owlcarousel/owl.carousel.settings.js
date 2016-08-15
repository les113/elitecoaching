
    // owl carousel 
    $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                margin:20,
                merge:true,
                nav:true, 
                navText:['&nbsp;','&nbsp;'],
                responsive:{
                    0:{
                        items:2,
                    },
                    600:{
                        items:3,
                    },
                    1000:{
                        items:6,
                        loop:true
                }
            }
        });
    });


