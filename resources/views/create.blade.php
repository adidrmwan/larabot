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
    
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form class="upload-form text-white" id="my-form">
                        <div class="card" style="margin-top: 50px;">
                            <div class="card-body">
                                <div class="upload-info">

                                    <h3>Create New Agent</h3>
                                    <div class="form-group">
                                        <label for="name">AI Agent Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Type your agent name" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row justify-content-between">
                                            <label for="description" class="col-md-5">Description</label>
                                        </div>
                                        <textarea id="description" class="form-control"
                                            placeholder="Provide a detailed description of your agent" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Personality</label>
                                        <input type="text" class="form-control" id="personality" placeholder="Type the personality" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Lore</label>
                                        <input type="text" class="form-control" id="lore" placeholder="Type the lore " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Style</label>
                                        <input type="text" class="form-control" id="style" placeholder="Type the style " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Adjectives</label>
                                        <input type="text" class="form-control" id="adjectives" placeholder="Type the adjectives " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Knowledge</label>
                                        <input type="text" class="form-control" id="knowledge" placeholder="Type the knowledge " required>
                                    </div>

                                    <div class="form-group d-flex justify-content-end pt-2 mb-0">
                                        <button class="btn" type="submit" id="submit-btn"><img src="assets/img/icons/btn-save.svg" alt="" class="svg"> Create Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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

    <div class="modal fade" id="submitAgent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="submitAgentLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <p>The AI agent you created has been successfully added to the whitelist. It’s now queued for priority access to deployment.</p>

            </div>
            <div class="modal-footer">
                <a href="/"><button type="button" class="btn btn-secondary">Submit</button></a>
            </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript">    
        $(document).ready(function() {
            $('#my-form').submit(function (e) {
                e.preventDefault();
                $('#submitAgent').modal('show');
            });
        });
    </script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
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