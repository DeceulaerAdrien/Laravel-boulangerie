@extends('layouts.app')

@section('Description', 'Page d\'acceuil de la Table du sucré et salé')
@section('Title', 'Acceuil')


@section('Content')
    {{-- carousel d'image --}}
    <div class="slideshow">

        <div id="mySlides" class="mySlides fade">
            <div class="numbertext"></div>
            <img src="{{ asset('image/ipsum.jpg') }}" alt="img-1">
            <div class="text">Caption Text</div>
        </div>


        <div id="mySlides" class="mySlides fade">
            <div class="numbertext"></div>
            <img src="{{ asset('image/img-2.jpg') }}" alt="img-3">
            <div class="text">Caption Text</div>
        </div>

        <a class="next" id="next">&#10095;</a>
        <a class="prev" id="previous">&#10094;</a>
    </div>
    <div id="dots" class='dots' />
@endsection
