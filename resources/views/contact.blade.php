@extends('layouts.base')

@section('title', 'Contact Us')

@section('body-class', 'header-normal')
@section('footer-class', 'footer-fixed')

@section('content')

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <h1>Contact Us</h1>
        <p>We would love to hear from you</p>
    </div>
</section>

@if(session('success'))
<div id="success-toast" class="toast-success show">
    <span id="close-toast" class="toast-close">&times;</span>
    ✅ Thank you! We would love to hear from you.
</div>
@endif


<!-- CONTACT SECTION -->
<section class="contact-section">
    <div class="container">

        <form class="contact-form" method="POST" action="/contact-submit">
            @csrf

            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="username" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label>Mobile Number</label>

                <div class="mobile-field">
                    <span class="country-code">+91</span>
                    <input
                        type="tel"
                        name="mobilenumber"
                        placeholder="Enter 10 digit number"
                        maxlength="10"
                        minlength="10"
                        pattern="[0-9]{10}"
                        required>
                </div>
            </div>


            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter email address" required>
            </div>

            <div class="form-group">
                <label>Address</label>
                <textarea name="address" rows="4" placeholder="Enter your address" required></textarea>
            </div>
            <button type="submit" class="btn-submit" name="submitUserForm">
                Send Message
            </button>

        </form>

    </div>
</section>

@endsection