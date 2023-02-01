// const storageType = localStorage;
// const consentPropertyName = 'nm_consent';

// const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
// const saveToStorage = () => storageType.setItem(consentPropertyName, true);

// window.onload = () => {
//     if (shouldShowPopup()) {
//         const consent = confirm('Agree to the terms and conditions of the site?');
//         if (consent) {
//             saveToStorage();
//         }
//     }
// };







// OWL CAROUSELS

$(document).ready(function(){
    $('.owl-one').owlCarousel({
        loop:true,
        autoplay:true,
        items: 1,
        nav:false,
        singleItem: true,
        margin:0,
        dots:false,
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
