<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css?v=5">

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

    <main>
        @yield('content')
    </main>


    <!-- ===== FOOTER ===== -->
    <footer class="@yield('footer-class')">
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