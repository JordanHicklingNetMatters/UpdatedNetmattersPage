// window.onscroll = function() {myFunction()};

// var header = document.getElementsByClassName("sticky");
// var sticky = header.offsetTop;

// function myFunction() {
//     if (window.pageYOffset > sticky) {
//       header.classList.add("sticky");
//     } else {
//       header.classList.remove("sticky");
//     }
//   }
  

// COOKIE POPUP

const storageType = localStorage;
const consentPropertyName = 'nm_consent';

const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {
    const consentPopup = document.getElementById('cookie-container');
    const acceptBtn = document.getElementById('accept-cookies');

    // added the function above to the accept button
    acceptBtn.addEventListener('click', acceptFn);
    // function for when the button is clicked
    function acceptFn() {
        saveToStorage();
        consentPopup.classList.add('hidden');
    }

    if (storageType.getItem(consentPropertyName)) {
        consentPopup.classList.add('hidden');
    }
};

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
