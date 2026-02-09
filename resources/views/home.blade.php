@extends('layouts.base')
@section('body-class', 'header-normal')

@section('content')
<!-- ===== HERO SECTION ===== -->
<section class="hero">

    <h1>Pure & Authentic Indian Spices</h1>
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
            <img src="{{ asset('images/kali_mirch.png') }}">

            <h3>BLACK PEPPER</h3>
        </div>

        <div class="card">
            <img src="{{ asset('images/dalchini.png') }}">
            <h3>CINNAMON</h3>
        </div>

        <div class="card">
            <img src="{{ asset('images/laung.png') }}">
            <h3>CLOVE</h3>
        </div>
    </div>
</section>
@endsection