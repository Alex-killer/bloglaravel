<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>

    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link href="{{ asset('assets/vendors/aos/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header edica-landing-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/images/Partner_1.png') }}" alt="Edica"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post.index') }}">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category.index') }}">Категории</a>
                    </li>
                    <li class="nav-item">
                        @auth()
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('personal.main.index') }}">Личный кабинет</a>
                            </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="border-0 bg-transparent">
                                    Выйти
                                </button>
                            </form>
                        </li>
                        @endauth
                    <li class="nav-item">
                        @guest()
                            <a class="nav-link" href="{{ route('personal.main.index') }}">Войти</a>
                        @endguest
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                </ul>
            </div>
        </nav>
        <div class="edica-landing-header-content">
            <div id="edicaLandingHeaderCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#edicaLandingHeaderCarousel" data-slide-to="0" class="active">.01</li>
                    <li data-target="#edicaLandingHeaderCarousel" data-slide-to="1">.02</li>
                    <li data-target="#edicaLandingHeaderCarousel" data-slide-to="2">.03</li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6 carousel-content-wrapper">
                                <h1 >Welcome to my blog.</h1>
                                <p>Добро пожаловать на мой блог. Рад вас здесь увидеть</p>
{{--                                <div class="carousel-content-btns">--}}
{{--                                    <a href="#!" class="btn btn-success"> <i class="fab fa-apple mr-2"></i> App Store</a>--}}
{{--                                    <a href="#!" class="btn btn-secondary"> <i class="fab fa-android mr-2"></i>  Google Play</a>--}}
{{--                                </div>--}}
                            </div>
                            <div class="col-md-6 carousel-img-wrapper">
                                <img src="{{ asset('assets/images/Slider_1.png') }}" alt="carousel-img" class="img-fluid" width="350px">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 carousel-content-wrapper">
                                <h1 >Welcome to my blog.</h1>
                                <p>Добро пожаловать на мой блог. Рад вас здесь увидеть</p>
{{--                                <div class="carousel-content-btns">--}}
{{--                                    <a href="#!" class="btn btn-success"> <i class="fab fa-apple mr-2"></i> App Store</a>--}}
{{--                                    <a href="#!" class="btn btn-secondary"> <i class="fab fa-android mr-2"></i> Google Play</a>--}}
{{--                                </div>--}}
                            </div>
                            <div class="col-md-6 carousel-img-wrapper">
                                <img src="{{ asset('assets/images/Slider_1.png') }}" alt="carousel-img" class="img-fluid" width="350px">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 carousel-content-wrapper">
                                <h1 >Welcome to my blog.</h1>
                                <p>Добро пожаловать на мой блог. Рад вас здесь увидеть</p>
{{--                                <div class="carousel-content-btns">--}}
{{--                                    <a href="#!" class="btn btn-success"> <i class="fab fa-apple mr-2"></i> App Store</a>--}}
{{--                                    <a href="#!" class="btn btn-secondary"> <i class="fab fa-android mr-2"></i> Google Play</a>--}}
{{--                                </div>--}}
                            </div>
                            <div class="col-md-6 carousel-img-wrapper">
                                <img src="{{ asset('assets/images/Slider_1.png') }}" alt="carousel-img" class="img-fluid" width="350px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer >
{{--    <div class="container">--}}
{{--        <div class="row footer-widget-area">--}}
{{--            <div class="col-md-3">--}}
{{--                <a href="index.html" class="footer-brand-wrapper">--}}
{{--                    <img src="assets/images/logo.svg" alt="edica logo">--}}
{{--                </a>--}}
{{--                <p class="contact-details">hello@myblog.com</p>--}}
{{--                <p class="contact-details">0000 000 00 00</p>--}}
{{--                <nav class="footer-social-links">--}}
{{--                    <a href="#!"><i class="fab fa-facebook-f"></i></a>--}}
{{--                    <a href="#!"><i class="fab fa-twitter"></i></a>--}}
{{--                    <a href="#!"><i class="fab fa-behance"></i></a>--}}
{{--                    <a href="#!"><i class="fab fa-dribbble"></i></a>--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--            <div class="col-md-3">--}}
{{--                <nav class="footer-nav">--}}
{{--                    <a href="#!" class="nav-link">Company</a>--}}
{{--                    <a href="#!" class="nav-link">Android App</a>--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--            <div class="col-md-3">--}}
{{--                <nav class="footer-nav">--}}
{{--                    <a href="#!" class="nav-link">FAQ</a>--}}
{{--                    <a href="#!" class="nav-link">Reporting</a>--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--            <div class="col-md-3">--}}
{{--                <div class="dropdown footer-country-dropdown">--}}
{{--                    <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown" data-toggle="dropdown" aria-haspopup="true"--}}
{{--                            aria-expanded="false">--}}
{{--                        <span class="flag-icon flag-icon-gb flag-icon-squared"></span> United Kingdom <i class="fas fa-chevron-down ml-2"></i>--}}
{{--                    </button>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="footerCountryDropdown">--}}
{{--                        <button class="dropdown-item" href="#">--}}
{{--                            <span class="flag-icon flag-icon-us flag-icon-squared"></span> United States--}}
{{--                        </button>--}}
{{--                        <button class="dropdown-item" href="#">--}}
{{--                            <span class="flag-icon flag-icon-au flag-icon-squared"></span> Australia--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div >--}}
{{--            <nav class="nav footer-bottom-nav">--}}
{{--                <a href="#!">Privacy & Policy</a>--}}
{{--                <a href="#!">Terms</a>--}}
{{--                <a href="#!">Site Map</a>--}}
{{--            </nav>--}}
{{--            <p class="mb-0">My Blog <a href="#" target="_blank" rel="noopener noreferrer" class="text-reset"></a> . All rights reserved.</p>--}}
{{--        </div>--}}
{{--    </div>--}}
</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    AOS.init({
        duration: 2000
    });
</script>
</body>
</html>
