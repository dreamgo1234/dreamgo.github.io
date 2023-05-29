let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classlist.toggle('fa-times');
    navbar.classlist.toggle('active');
};
window.onscroll = () => {
    menu.classlist.remove('fa-times');
    navbar.classlist.remove('avtive');
};
var swiper = new swiper(".home-slider", {
    loop: true,
    navigation: {
        nextE1: ".swiper-button-next",
        prevE1: ".swiper-button-prev",
    },
});
var swiper = new swiper(".reviwes-slider", {
    loop: true,
    spacebetween: 20,
    autoheight: true,
    grabcursor: true,
    brekpoints: {
        640: {
            slidesperview: 2,

        },
        768: {
            slidesperview: 4,
            
        },
        1024: {
            slidesPerview: 6,
        },
    },
});

let loadmoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadmoreBtn.oneclick = () => {
    let Boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (var i = currentItem; i < curentUtem + 3; i++) {
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if (currentItem >= boxes.length) {
        loadMoreBtn.style.display = 'none;'
    }
}