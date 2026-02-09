@extends('layouts.base')

@section('title', 'Our Products')
@section('body-class', 'header-normal')
@section('content')

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <h1>Our Products</h1>
        <p>Premium quality spices for every kitchen</p>
    </div>
</section>

<!-- PRODUCTS SECTION -->
<section class="products-section">
    <div class="container">

        <div class="product-grid">

            <!-- Product Card -->
            <div class="product-card">
                <img src="{{ asset('images/ajwain.png') }}" alt="Product Image" class="product-img">
                <h3>Ajwain (Carom Seeds)</h3>
                <p>Sharp, digestive & aromatic</p>
            </div>


            <div class="product-card">
                <img src="{{ asset('images/Chhabila.webp') }}" alt="Product Image" class="product-img">
                <h3>Chhabila</h3>
                <p>Traditional blend, aromatic & authentic</p>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/badi_ilayachi.png') }}" alt="Product Image" class="product-img">
                <h3>Badi Ilayachi (Black Cardamom)</h3>
                <p>Smoky, bold & intense</p>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/tezpatta.png') }}" alt="Product Image" class="product-img">
                <h3>Tejpatta (Bay Leaf)</h3>
                <p>Mild, earthy & aromatic</p>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/dalchini.png') }}" alt="Product Image" class="product-img">
                <h3>Dalchini (Cinnamon)</h3>
                <p>Warm, sweet & naturally fragrant</p>
            </div>


            <div class="product-card">
                <img src="{{ asset('images/kali_mirch.png') }}" alt="Product Image" class="product-img">
                <h3>Kali Mirch (Black Pepper)</h3>
                <p>Bold, spicy & full of warmth</p>
            </div>



            <div class="product-card">
                <img src="{{ asset('images/zeera.png') }}" alt="Product Image" class="product-img">
                <h3>Jeera (Cumin)</h3>
                <p>Pure, aromatic & naturally rich</p>
            </div>


            <div class="product-card">
                <img src="{{ asset('images/lakadi.png') }}" alt="Product Image" class="product-img">
                <h3>Lakadi (Licorice Root)</h3>
                <p>Natural, earthy & soothing</p>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/laung.png') }}" alt="Product Image" class="product-img">
                <h3>Laung (Cloves)</h3>
                <p>Strong, fragrant & flavourful</p>
            </div>


            <div class="product-card">
                <img src="{{ asset('images/magrail.jpg') }}" alt="Product Image" class="product-img">
                <h3>Mangrel (Nigella / Kalonji)</h3>
                <p>Earthy, pungent & wholesome</p>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/methidana.png') }}" alt="Product Image" class="product-img">
                <h3>Methi (Fenugreek)</h3>
                <p>Fresh, bitter-sweet & nutritious</p>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/saunf.png') }}" alt="Product Image" class="product-img">
                <h3>Saunf (Fennel Seeds)</h3>
                <p>Sweet, refreshing & natural</p>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/badam.jpg') }}" alt="Product Image" class="product-img">
                <h3>Badam (Almonds)</h3>
                <p>Crunchy, nutritious & premiums</p>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/kaju.webp') }}" alt="Product Image" class="product-img">
                <h3>Kaju (Cashew Nuts)</h3>
                <p>Rich, creamy & wholesome</p>
            </div>


            <div class="product-card">
                <img src="{{ asset('images/KISHMISH.webp') }}" alt="Product Image" class="product-img">
                <h3>Kishmish (Raisins)</h3>
                <p>Juicy, sweet & sun-dried</p>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/gari.webp') }}" alt="Product Image" class="product-img">
                <h3>Gari (Dry Coconut)</h3>
                <p>Fresh, natural & flavorful</p>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/hari_ilayachi.png') }}" alt="Product Image" class="product-img">
                <h3>Hari Ilayachi (Green Cardamom)</h3>
                <p>Premium, sweet & refreshing</p>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/chhuahara.jpg') }}" alt="Product Image" class="product-img">
                <h3>Chhuhara (Dry Dates)</h3>
                <p>Naturally sweet & energy-rich</p>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/sonth.png') }}" alt="Product Image" class="product-img">
                <h3>Soth (Dry Ginger)</h3>
                <p>Strong, warming & pure</p>
            </div>

        </div>

    </div>
</section>

@endsection