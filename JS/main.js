$(document).ready(function(){
    $('.owl-one').owlCarousel({
        loop:true,
        items: 1,
        nav:true,
        singleItem: true,
        // autoHeight:true,
    });
})



$(document).ready(function(){
    $('.owl-two').owlCarousel({
        loop:true,
        autoplay:true,
        margin:50,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:8
            }
        }
    })
})
