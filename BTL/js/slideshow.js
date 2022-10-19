
let slideIndex = 1;
let set = null;
showSlides(slideIndex);
function plusSlides(n) {
    showSlides(slideIndex += n);
    _stop();

}
function currentSlide(n) {
    _stop();
    showSlides(slideIndex = n);
}
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slideshows");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    // slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className = "dot";
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className = "dot active";
    set = setTimeout(() => showSlides(slideIndex++), 2000);
}
function _stop() {
    clearTimeout(set);
}

