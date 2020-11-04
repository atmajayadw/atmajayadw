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
    const thumbs = document.getElementsByClassName("expertise-btn");
    if (n > slides.length) {
        slideIndex_ = 1
    }
    if (n < 1) {
        slideIndex_ = slides.length
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    // for (i = 0; i < thumbs.length; i++) {
    //     thumbs[i].className = thumbs[i].className.replace(" active", "");
    // }

    slides[slideIndex_ - 1].style.display = "flex";
    // thumbs[slideIndex - 1].className += " active";
}