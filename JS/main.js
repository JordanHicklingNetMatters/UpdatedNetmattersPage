const hamburgerBtn = document.getElementsByClassName('hamburger-btn');
const sidebar = document.getElementsByClassName('sidebar');
const main = document.getElementsByClassName('main');

hamburgerBtn[0].addEventListener('click', openSidebar);
hamburgerBtn[1].addEventListener('click', openSidebar);

function openSidebar() {
    sidebar[0].style.width = '30%';
    // main[0].style.marginRight = '350px';
}

// body[0].addEventListener('click', bodyCloseSidebar)

// function bodyCloseSidebar() {
//     // sidebar[0].style.width = '0'
// }

// Sticky Header

const stickyHeader = document.getElementById('sticky');
var lastScrollTop = 0;

window.addEventListener('scroll',(event) => {
    var st = window.pageYOffset || document.documentElement.scrollTop;
        if (st > lastScrollTop && document.documentElement.scrollTop < 299) {
            stickyHeader.style.display = 'none';
        } else if (st > lastScrollTop && document.documentElement.scrollTop > 300) {
            stickyHeader.style.top = '-450px';
        } else if (st < lastScrollTop && document.documentElement.scrollTop > 300) {
            stickyHeader.style.top = '0';
            stickyHeader.style.display = 'inline';
        } 
    lastScrollTop = st <= 0 ? 0 : st;
}, false);

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
