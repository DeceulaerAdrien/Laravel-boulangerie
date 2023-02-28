let slideIndex = 1;
let nextButton = document.getElementById("next");
let previousButton = document.getElementById("previous");
let numberText = document.getElementsByClassName("numbertext");
let slides = document.getElementsByClassName("mySlides");
let dots = document.getElementById("dots");
let dot = document.getElementsByClassName("dot");

// Next/previous controls
function nextSlide(n) {
    showSlides((slideIndex += n));
}

// Thumbnail image controls
function showSlides(n) {
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (let i = 0; i < dot.length; i++) {
        dot[i].className = dot[i].className.replace("active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    dot[slideIndex - 1].className += " active";
    numberText[slideIndex - 1].innerHTML = `${slideIndex}/${slides.length}`;
}

nextButton.addEventListener("click", () => {
    nextSlide(1);
});

previousButton.addEventListener("click", () => {
    nextSlide(-1);
});

for (let i = 0; i < slides.length; i++) {
    dots.innerHTML += '<span class="dot"></span>';
}

showSlides(slideIndex);
