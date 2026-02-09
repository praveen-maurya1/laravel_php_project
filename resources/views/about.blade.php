@extends('layouts.base')

@section('title', 'About Us')
@section('body-class', 'header-normal')
@section('content')

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <h1>About Swastik Spices</h1>
        <p>Tradition, purity & authentic Indian flavours</p>
    </div>
</section>

<!-- ABOUT CONTENT -->
<section class="about-section">
    <div class="container">

        <div class="about-block">
            <h2>Who We Are</h2>
            <p>
                Swastik Spices is a trusted name in premium Indian spices.
                We deliver authentic flavours using handpicked ingredients
                and traditional processing techniques.
            </p>
        </div>

        <div class="about-block">
            <h2>Our Mission</h2>
            <p>
                Our mission is to bring purity, aroma and rich taste to every kitchen
                with consistent quality and hygienic packaging.
            </p>
        </div>

        <div class="about-block">
            <h2>Why Choose Us</h2>
            <ul class="about-points">
                <li>Premium quality raw materials</li>
                <li>Traditional grinding methods</li>
                <li>Hygienic processing & packaging</li>
                <li>Trusted by households</li>
            </ul>
        </div>

    </div>
</section>

@endsection