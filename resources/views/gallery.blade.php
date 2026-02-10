@extends('layouts.base')

@section('title', 'Gallery')

@section('body-class', 'header-normal')

@section('footer-class', 'footer')
@section('content')

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <h1>Gallery</h1>
        <p>A glimpse of our quality & process</p>
    </div>
</section>

<!-- GALLERY SECTION -->
<section class="gallery-section">
    <div class="container">

        <div class="gallery-grid">

            <div class="gallery-card">
                <img src="{{ asset('images/img1.png') }}" class="gallery-img" alt="Gallery image">
            </div>

            <div class="gallery-card">
                <img src="{{ asset('images/img4.png') }}" class="gallery-img" alt="Gallery image">
            </div>
            <div class="gallery-card">
                <img src="{{ asset('images/img2.png') }}" class="gallery-img" alt="Gallery image">
            </div>

            <div class="gallery-card">
                <img src="{{ asset('images/img3.png') }}" class="gallery-img" alt="Gallery image">
            </div>


            <div class="gallery-card">
                <img src="{{ asset('images/img5.png') }}" class="gallery-img" alt="Gallery image">
            </div>

            <div class="gallery-card">
                <img src="{{ asset('images/img6.png') }}" class="gallery-img" alt="Gallery image">
            </div>
            <div class="gallery-card">
                <img src="{{ asset('images/sw1.jpg') }}" class="gallery-img" alt="Gallery image">
            </div>


            <div class="gallery-card">
                <img src="{{ asset('images/sw2.jpg') }}" class="gallery-img" alt="Gallery image">
            </div>

            <div class="gallery-card">
                <img src="{{ asset('images/sw3.jpg') }}" class="gallery-img" alt="Gallery image">
            </div>

        </div>

    </div>
</section>

@endsection