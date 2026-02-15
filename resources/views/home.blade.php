@extends('layouts.base')
@section('body-class', 'header-normal')

@section('footer-class', 'footer')
@section('content')
<!-- ===== HERO SECTION ===== -->
<section class="hero">

    <h1>Pure & Authentic</h1>
    <h1>Indian Spices</h1>
    <p>Bringing taste, aroma & purity to your kitchen</p>
    <a href="products"><button>Explore Products</button></a>
</section>

<!-- ===== ABOUT SECTION ===== -->
<section class="about">
    <h2>About Swastik Spices</h2>
    <p>
        Swastik Spices is committed to delivering premium quality spices
        made from handpicked ingredients with traditional processing methods.
    </p>
</section>

<!-- ===== PRODUCTS ===== -->
<section class="products">
    <h2>Our Products</h2>

    <div class="product-home">
        <div class="card">
            <img src="{{ asset('images/kali_mirch.webp') }}">

            <h3>BLACK PEPPER</h3>
        </div>

        <div class="card">
            <img src="{{ asset('images/dalchini.webp') }}">
            <h3>CINNAMON</h3>
        </div>

        <div class="card">
            <img src="{{ asset('images/laung.webp') }}">
            <h3>CLOVE</h3>
        </div>
    </div>
    <div class="product-home">
        <div class="card">
            <img src="{{ asset('images/badam.webp') }}">

            <h3>ALMONDS</h3>
        </div>

        <div class="card">
            <img src="{{ asset('images/kaju.webp') }}">
            <h3>CASHEW NUTS</h3>
        </div>

        <div class="card">
            <img src="{{ asset('images/KISHMISH.webp') }}">
            <h3>RAISINS</h3>
        </div>
    </div>
</section>
@endsection