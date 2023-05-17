let slideIndex = 1;
const nextButton = document.querySelector("#next");
const previousButton = document.querySelector("#previous");
const numberText = document.querySelectorAll(".numbertext");
const slides = document.querySelectorAll(".mySlides");
const numSlides = slides.length;

// Next/previous controls
function nextSlide(n) {
    showSlides(slideIndex + n);
}

// Thumbnail image controls
function showSlides(n) {
    slideIndex = n > slides.length ? 1 : n < 1 ? slides.length : n;

    slides.forEach((slide) => {
        slide.style.display = "none";
    });

    slides[slideIndex - 1].style.display = "block";
    numberText[slideIndex - 1].innerHTML = `${slideIndex}/${slides.length}`;
}

showSlides(slideIndex);

nextButton.addEventListener("click", () => {
    nextSlide(1);
});

previousButton.addEventListener("click", () => {
    nextSlide(-1);
});
