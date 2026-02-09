<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <meta charset="UTF-8">
    <title>Swastik Spices</title>

</head>

<body class="@yield('body-class')">

    <!-- ===== HEADER ===== -->
    <header class="site-header">
        <div class="logo">Swastik <span>Spices</span></div>
        <nav>
            <a href="/">Home</a>
            <a href="about">About</a>
            <a href="products">Products</a>
            <a href="gallery">Gallery</a>
            <a href="contact">Contact</a>
            <a href="admin/login">Admin</a>
        </nav>
    </header>


    @yield('content')


    <!-- ===== FOOTER ===== -->
    <footer class="footer">
        <div>

            <div class="footerContainer">
                <a href="#">
                    <img src="{{ asset('images/instagram.svg') }}" alt="">
                </a>

                <a href="#">
                    <img src="{{ asset('images/facebook.svg') }}" alt="">
                </a>

                <a href="#">
                    <img src="{{ asset('images/whatsapp.svg') }}" alt="">
                </a>

                <a href="#">
                    <img src="{{ asset('images/twitter-x.svg') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('images/youtube.svg') }}" alt="">
                </a>


            </div>
            <div>
                <p>© 2026 Swastik Spices. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('script.js') }}"></script>
</body>

</html>