let slideIndex = 1;
const nextButton = document.querySelector("#next");
const previousButton = document.querySelector("#previous");
const numberText = document.querySelectorAll(".numbertext");
const slides = document.querySelectorAll(".mySlides");
const numSlides = slides.length;
const dots = document.querySelector("#dots");
let dot = document.querySelectorAll(".dot");
const numDots = dot.length;

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

if (numDots < numSlides) {
    const numNewDots = numSlides - numDots;
    for (let i = 0; i < numNewDots; i++) {
        dots.innerHTML += '<span class="dot"></span>';
    }
    dot = document.querySelectorAll(".dot"); // mise à jour de la variable dot
}

showSlides(slideIndex);

nextButton.addEventListener("click", () => {
    nextSlide(1);
});

previousButton.addEventListener("click", () => {
    nextSlide(-1);
});
