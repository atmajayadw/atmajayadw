// Hamburger menu navbar
const hamburger = document.querySelector('.hamburger');
const span = document.querySelectorAll('.hamburger span');
const sidebar = document.querySelector('.sidebar .links');

hamburger.addEventListener('click', function () {
    sidebar.classList.toggle('active');
    span[0].classList.toggle('show1');
    span[1].classList.toggle('show2');
    span[2].classList.toggle('show3');
    if (sidebar.classList.contains('active')) {
        document.body.style.overflow = "hidden";
    } else {
        document.body.style.overflow = "auto";
    }
});

// Smooth Scrolling Anchor
$('.explore-btn').on('click', function (e) {

    const href = $(this).attr('href');
    const elementhref = $(href);
    $("html, body").animate({
        scrollTop: elementhref.offset().top
    }, 1000, 'easeInOutExpo');
    e.preventDefault();

});

$('.scroll').on('click', function (e) {

    const href = $(this).attr('href');
    const elementhref = $(href);
    $("html, body").animate({
        scrollTop: elementhref.offset().top
    }, 1000, 'easeInOutExpo');
    e.preventDefault();

});

//  Expertise
let slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    const slides = document.getElementsByClassName("contents_expertise");
    const thumbs = document.getElementsByClassName("expertise-btn");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < thumbs.length; i++) {
        thumbs[i].className = thumbs[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    thumbs[slideIndex - 1].className += " active";
}

//  Expertise
let slideIndex_ = 1;
showSlides_(slideIndex_);

function currentSlide_(n) {
    showSlides_(slideIndex_ = n);
}

function showSlides_(n) {
    const slides = document.getElementsByClassName("contents_portfolio");
    const active = document.getElementsByClassName("portfolio-btn");
    if (n > slides.length) {
        slideIndex_ = 1
    }
    if (n < 1) {
        slideIndex_ = slides.length
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < active.length; i++) {
        active[i].className = active[i].className.replace(" active", "");
    }

    slides[slideIndex_ - 1].style.display = "flex";
    active[slideIndex_ - 1].className += " active";
}

// Fixed navbar
const fixbar = document.querySelector('.navbar-full');

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 100) {
            fixbar.classList.add("sticky");
        } else {
            fixbar.classList.remove("sticky");
        }
    });
});

// Parallax mouse movement
let object1 = $('.parallax-element .memphis1');
let object2 = $('.parallax-element .memphis2');
let layer = $('body');

layer.mousemove(function (e) {
    var valueX = (window.innerWidth - e.pageX * 4) / 200;
    var valueY = (window.innerWidth - e.pageY * 2) / 100;
    object1.css({
        'transition': '0.1s',
        'transform': 'translate(' + valueX + '%,' + valueY + 'px)'
    });
});

layer.mousemove(function (e) {
    var valueX = -(window.innerWidth - e.pageX * 4) / 200;
    var valueY = -(window.innerWidth - e.pageY * 2) / 100;
    object2.css({
        'transition': '0.1s',
        'transform': 'translate(' + valueX + '%,' + valueY + 'px)'
    });
});

// Parallax mouse movement 2
let object3 = $('.parallax-element .memphis3');
let object4 = $('.parallax-element .memphis4');
let layer2 = $('body');

layer2.mousemove(function (e) {
    var valueX = (window.innerWidth - e.pageX * 4) / 200;
    var valueY = (window.innerWidth - e.pageY * 2) / 200;
    object3.css({
        'transition': '0.1s',
        'transform': 'translate(' + valueX + '%,' + valueY + 'px)'
    });
});

layer2.mousemove(function (e) {
    var valueX = -(window.innerWidth - e.pageX * 4) / 200;
    var valueY = -(window.innerWidth - e.pageY * 2) / 200;
    object4.css({
        'transition': '0.1s',
        'transform': 'translate(' + valueX + '%,' + valueY + 'px)'
    });
});

// Parallax scroll
$(window).scroll(function () {
    let wScroll = $(this).scrollTop();
    let parallax2 = $('#expertise').offset().top + 200;
    if (wScroll > parallax2) {
        if ($(window).width() <= 575.98){ 
            $('#parallax2 .memphis3').css({
                'transform': 'translate(-' + wScroll / 90 + '%, 0px)'
            });
    
            $('#parallax2 .memphis4').css({
                'transform': 'translate(' + wScroll / 200 + '%, 30px)'
            });
        }
    }

});

// parallax landing element scroll
$(window).scroll(function () {
    const wScroll = $(this).scrollTop();
    const about = $('#about').offset().top;

    if (wScroll > about - 100) {
        $('#about .about .right').addClass("show");
    }

    if (wScroll > $('#expertise').offset().top - 120) {
        $('.content').each(function (i) {
            setTimeout(function () {
                $('.content').eq(i).addClass('show');
            }, 600 * (i + 1));
        });
    }

    if (wScroll > $('#portfolio').offset().top - 120) {
        $('.content_webdev').each(function (i) {
            setTimeout(function () {
                $('.content_webdev').eq(i).addClass('show');
            }, 500 * (i + 1));
        });
    }

});

// parallax landing element click
$('.expertise-btn').on('click', function (e) {
    $('.content-photo').each(function (i) {
        setTimeout(function () {
            $('.content-photo').eq(i).addClass('show');
        }, 400 * (i + 1));
    });
    $('.content-photo').removeClass('show');
});

$('.expertise-btn').on('click', function (e) {
    $('.content').each(function (i) {
        setTimeout(function () {
            $('.content').eq(i).addClass('show');
        }, 400 * (i + 1));
    });
    $('.content').removeClass('show');
});

$('.portfolio-btn').on('click', function (e) {
    $('.content_photo').each(function (i) {
        setTimeout(function () {
            $('.content_photo').eq(i).addClass('show');
        }, 400 * (i + 1));
    });
    $('.content_photo').removeClass('show');
});

$('.portfolio-btn').on('click', function (e) {
    $('.content_webdev').each(function (i) {
        setTimeout(function () {
            $('.content_webdev').eq(i).addClass('show');
        }, 400 * (i + 1));
    });
    $('.content_webdev').removeClass('show');
});