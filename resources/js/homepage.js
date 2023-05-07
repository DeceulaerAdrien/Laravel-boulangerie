let slideIndex = 1;
const nextButton = document.querySelector("#next");
const previousButton = document.querySelector("#previous");
const numberText = document.querySelectorAll(".numbertext");
const slides = document.querySelectorAll(".mySlides");
const dots = document.querySelector("#dots");
const dot = document.querySelectorAll(".dot");

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

    dot.forEach((dotItem) => {
        dotItem.classList.remove("active");
    });

    slides[slideIndex - 1].style.display = "block";
    dot[slideIndex - 1].classList.add("active");
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
