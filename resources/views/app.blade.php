<!DOCTYPE html>
<html lang="en">

<head>
    <title>KORA</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/img/favicon.png') }}" />

    <!-- Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@500;600;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link href="{{ URL::asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('assets/plugins/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('assets/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('assets/css/custom.css') }}" rel="stylesheet">
</head>

<body data-bg-img="assets/img/bg/page-bg.jpg">

    <header class="header">
        <div class="header-main love-sticky fixed-top">
            <div class="container">
                <div class="header-inner position-relative">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6 col-sm-9 col-6">
                            <div class="d-flex align-items-center">
                                <div class="logo">
                                    <a href="/">
                                        <img src="assets/img/logo.png" class="main-logo" alt="">
                                        <img src="assets/img/logo.png" class="sticky-logo" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div
                            class="col-lg-8 col-md-6 col-sm-3 col-6 d-flex align-items-center justify-content-end position-static">
                            <div class="nav-wrapper d-flex align-items-center">
                                <div class="nav-wrap-inner">
                                    <ul class="nav">
                                        <li>
                                            <a href="#whitepaper">docs</a>
                                        </li>
                                        <li>
                                            <a href="/create">create</a>
                                        </li>
                                        <li>
                                            <a href="/subscription">subscription</a>
                                        </li>
                                        <li>
                                            <a href="#">contract</a>
                                        </li>
                                        <li><a href="/app">app</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="py-5 d-flex align-items-center vh-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Card -->
                    <div class="card card-big">
                        <div class="card-body text-center coming-soon-content">
                            <!-- Countdown -->
                            <ul class="countdown style--two">
                                <li>
                                    <h2 class="days">00</h2>
                                    <p>Day (s)</p>
                                </li>
                                <li>
                                    <h2 class="hours">00</h2>
                                    <p>Hour (s)</p>
                                </li>
                                <li>
                                    <h2 class="minutes">00</h2>
                                    <p>Minute (s)</p>
                                </li>
                                <li>
                                    <h2 class="seconds">00</h2>
                                    <p>Second (s)</p>
                                </li>
                            </ul>

                            <form>
                                <div class="theme-input-group">
                                    <input class="form-control" type="text" placeholder="Input your wallet" required>
                                    <button type="submit" class="submit-btn btn">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/particles/particles.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/menu.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('assets/plugins/swiper/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/countdown/countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/nice-select/jquery.nice-select.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('assets/plugins/Isotope/isotope.pkgd.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/counterup/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/main.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('assets/js/custom.js') }}"></script>
</body>

</html>