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

<body data-bg-img="assets/img/bg/page-bg.jpg" style="margin: 0; height: 100%;">

    <header class="header">
        <div class="header-main love-sticky fixed-top">
            <div class="container">
                <div class="header-inner position-relative">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-9 col-6">
                            <div class="d-flex align-items-center">
                                <ul class="nav">
                                    <li>
                                        <a href="/" style="font-size: 30px"><b>K O R A</b></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-3 col-6 d-flex align-items-center justify-content-end position-static">
                            <div class="nav-wrapper d-flex align-items-center">
                                <div class="nav-wrap-inner">
                                    <ul class="nav">
                                        <li>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">docs</a>
                                        </li>
                                        <li>
                                            <a href="/create">create</a>
                                        </li>
                                        <li>
                                            <a href="/subscription">subscription</a>
                                        </li>
                                        
                                    </ul>
                                    
                                </div>

                            </div>
                            <div class="d-none d-md-flex align-items-center ms-4">
                                <a href="/app" class="btn">
                                    APP
                                </a>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="banner layer ov-hidden">
        <div id="particles" data-bg-img="assets/img/bg/page-bg.jpg"></div>
        <div class="container">
            <div class="row align-items-center" >

                <div class="col-lg-6" >
                    <div class="banner-img move-img">
                        <img src="assets/img/media/banner-img.png" class="ms-xl-4" alt="logo" style="width:120%; margin-top:20%;">
                    </div>
                    
                </div>
                <div class="col-lg-6" >
                    <div class="banner-content text-white mb-5 mb-lg-0">
                        <div class="button-group flex-column flex-sm-row align-items-start align-items-sm-center" style="margin-bottom:3%;">
                            <a href="#" class="btn mb-3 mb-sm-0" style="text-transform: none">
                                CA Number
                            </a>
                        </div>
                        <h5>A Fully Open-Sourced Trained Backroom Model</h5>
                        <h1>KORA</h1>
                        
                        <p>Pioneering advanced AI experimentation with cutting-edge frameworks and scalable architecture.</p>
                        <ul class="list-info text-white">
                            <li>
                                <h4><span class="counter">500</span>GB<span class="c1">+</span></h4>
                                <h6>Parameters</h6>
                            </li>
                            <li>
                                <h4><span class="counter">100</span><span class="c1">+</span></h4>
                                <h6>Nodes</h6>
                            </li>
                            <li>
                                <h4><span class="counter">10</span>PB<span class="c1">+</span></h4>
                                <h6>Network Data</h6>
                            </li>
                        </ul>
                        <div class="button-group flex-column flex-sm-row align-items-start align-items-sm-center">
                            <a href="/create" class="btn mb-3 mb-sm-0">
                                <img src="assets/img/icons/create-icon.svg" alt="" class="svg">
                                CREATE
                            </a>
                        </div>
                        <h3 style="color: #fff; margin-top:3%">Try our Trained Backroom Model!</h3>
                        <div class="button-group" style="margin-top:3%;">
                            <div class="dropdown mr-10">
                                <a href="/app" class="btn mb-3 mb-sm-0">
                                <img src="assets/img/icons/dot.svg" alt="" class="svg">
                                    APP
                                </a>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">whitepaper.docx</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
            <h2>KORA</h2>

            <p>KORA: A Fully Open-Sourced Trained Backroom Model </p>
            <h5>Abstract</h5>
            <p style="text-align:justify;">KORA is an open-source AI platform built upon a trained backroom model. It is designed for experimentation and innovation, enabling users to explore narrative generation, train custom AI models, and design personalized AI agents. By combining advanced frameworks, transparency, and adaptability, KORA empowers users to redefine AI-driven processes and push the boundaries of what AI can achieve.</p>
            <h5> Core Features </h5>
            <p>Backroom-Trained Model
            <br>
            A focus on unconventional data patterns and experimental outputs.<br>
            Generates unique and adaptive behaviors.<br>
            Supports experimental use cases across storytelling, gaming, and research.<br>

            Open-Source Flexibility<br>

            Transparent code and operations.<br>

            Customizable models for specific tasks and domains.<br>

            A collaborative platform for innovation.<br>

            Custom AI Agent Design<br>

            Build AI agents for experimental or task-specific use cases.<br>

            Deploy agents in dynamic environments like games and simulations.<br>

            Adapt agent behavior through unique data integration.
            <br>
            Experimental Narrative Engine<br>

            Non-linear and unconventional plot structures.<br>

            Data-driven immersive world-building.<br>

            Supports experimental storytelling techniques.<br>
            
            </p>
            <h5>Technical Framework and Architecture</h5>
            <p>
                Core Technologies <br>

                Transformers and GPT Architectures for natural language processing. <br>

                PyTorch for modular and scalable model training.<br>

                Hugging Face Integration for pre-trained model customization.<br>

                Distributed Training for large datasets.<br>

                Training Pipeline<br>

                Data Preprocessing: Tools for structuring unconventional datasets.<br>

                Fine-Tuning: Workflows for niche applications.<br>

                Evaluation Metrics: Assess model performance.<br>

                Adaptive Model Design<br>

                Dynamic Learning: Continuous adaptability with user datasets.<br>

                Context-Aware Outputs: Nuanced data input understanding.<br>

                Multi-Domain Flexibility: Seamless transitions across use cases.<br>

                Scalability and Efficiency<br>

                Cloud Integration: Optimized for scalable deployment.<br>

                Hardware Flexibility: GPU and CPU compatibility.<br>

                Resource Optimization: Efficient handling of training tasks.<br>
            </p>

            <h5>Conclusion</h5>
            <p style="text-align: justify;">KORA is more than a platform—it’s a fully open-sourced, trained backroom model that empowers users to explore, experiment, and innovate. Built on advanced frameworks and modular architectures, KORA adapts to a wide range of experimental and practical applications, making it a versatile tool for developers and researchers alike.</p>

            <h5>Train KORA. Experiment with innovation. Design your agent. Shape the future.</h5>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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