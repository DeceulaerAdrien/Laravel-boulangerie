@extends('layouts.app')

@section('Description', 'Page d\'acceuil de la Table du sucré et salé')
@section('Title', 'Acceuil')


@section('Content')
    {{-- carousel d'image --}}
    <div class="slideshow">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="{{ asset('image/img-1.jpg') }}" alt="img-1">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="{{ asset('image/img-2.jpg') }}" alt="img-2">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="{{ asset('image/img-3.jpg') }}" alt="img-3">
            <div class="text">Caption Three</div>
        </div>
        <a class="next" onclick="nextSlide(1)">&#10095;</a>
        <a class="prev" onclick="nextSlide(-1)">&#10094;</a>
    </div>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function nextSlide(n) {
            showSlides((slideIndex += n));
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides((slideIndex = n));
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
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
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
@endsection
