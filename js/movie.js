
// js cho sildes
let navText = ["<i class='bx bx-chevron-left'></i>", "<i class='bx bx-chevron-right'></i>"]


$('#hero-carousel').owlCarousel({
    items: 1,
    dots: false,
    loop: true,
    nav: true,
    autoplay: 50000,
    navText: close,
    autoplayHoverPause: true
})


$('#top-movies-slide').owlCarousel({
    items: 2,
    dots: false,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        500: {
            items: 3
        },
        1280: {
            items: 4
        },
        1600: {
            items: 6
        }
    }
})

$('.movies-slide').owlCarousel({
    items: 2,
    dots: false,
    nav: true,
    loop: true,
    navText: navText,
    margin: 15,
    responsive: {
        500: {
            items: 2
        },
        1280: {
            items: 4
        },
        1600: {
            items: 6
        }
    }
})

// Hiện menu
const netflix_open_btn = document.querySelector('#hamburger-menu');
const netflix_close_btn = document.querySelector('.netflix-close-btn');
const netflix_nav = document.querySelectorAll('.netflix-nav');
netflix_open_btn.addEventListener('click', () => {
    netflix_nav.forEach(nav_el => {
        nav_el.classList.add('visible')
    });
});

netflix_close_btn.addEventListener('click', () => {
    netflix_nav.forEach(nav_el => { nav_el.classList.remove('visible') });
});

/* js cho nội dung dấu đi và hiện ra */
window.addEventListener('scroll', reveal);
function reveal() {
    var reveals = document.querySelectorAll('.reveal');

    for (var i = 0; i < reveals.length; i++) {

        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if (revealtop < windowheight - revealpoint) {
            reveals[i].classList.add('active');
        }
    }
}
let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}

// js cho user-img
/* When the user clicks on the button, 
       toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdownGH").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
// js cho bar menu reponsive
function off() {
    var node = document.getElementById('hamburger-menu')
    node.style.visibility = 'hidden';
}
function showM() {
    var node = document.getElementById('hamburger-menu')
    node.style.visibility = 'visible';
}

function scrollSlider(id, direction) {
    if (direction == "l") {
        i = -1;
    }
    else if (direction == "r") {
        i = 1;
    }
    else {
        i = 0;
    }
    vw = window.innerWidth;
    p1 = parseInt(document.querySelector("#" + id + " > div > div:nth-child(2)").getBoundingClientRect().left);
    p2 = parseInt(document.querySelector("#" + id + " > div > div:nth-child(3)").getBoundingClientRect().left);
    scrollWidth = p2 - p1;
    scrollIncrement = Math.floor(vw / scrollWidth) * scrollWidth;
    document.getElementById(id).scrollBy({
        top: 0,
        left: scrollIncrement * i,
        behavior: "smooth"
    });
}
