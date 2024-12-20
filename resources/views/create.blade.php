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

                        <div class="col-lg-8 col-md-6 col-sm-3 col-6 d-flex align-items-center justify-content-end position-static">
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
                    <!-- Form -->
                    <form action="#" class="upload-form text-white">

                        <div class="card" style="margin-top: 50px;">
                            <div class="card-body">
                                <div class="upload-info">

                                    <h3>Create New Agent</h3>
                                    <div class="form-group">
                                        <label for="name">AI Agent Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Type your agent name">
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row justify-content-between">
                                            <label for="description" class="col-md-5">Description</label>
                                        </div>
                                        <textarea id="description" class="form-control"
                                            placeholder="Provide a detailed description of your agent"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Personality</label>
                                        <input type="text" class="form-control" id="personality" placeholder="Type the personality">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Lore</label>
                                        <input type="text" class="form-control" id="lore" placeholder="Type the lore ">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Style</label>
                                        <input type="text" class="form-control" id="style" placeholder="Type the style ">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Adjectives</label>
                                        <input type="text" class="form-control" id="adjectives" placeholder="Type the adjectives ">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Knowledge</label>
                                        <input type="text" class="form-control" id="knowledge" placeholder="Type the knowledge ">
                                    </div>

                                    <div class="form-group d-flex justify-content-end pt-2 mb-0">
                                        <button class="btn" type="submit"><img src="assets/img/icons/btn-save.svg" alt="" class="svg"> Create Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- End Form -->
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
                        <h2>** KORA **</h2>

                        <p>** KORA: A Fully Open-Sourced Trained Backroom Model **</p>
                        <h5>** Abstract **</h5>
                        <p>KORA is an open-source AI platform built upon a trained backroom model. It is designed for experimentation and innovation, enabling users to explore narrative generation, train custom AI models, and design personalized AI agents. By combining advanced frameworks, transparency, and adaptability, KORA empowers users to redefine AI-driven processes and push the boundaries of what AI can achieve.</p>
                        <h5>** Core Features **</h5>
                        <p>**1. Backroom-Trained Model** </p>
                        <p>At the heart of KORA lies its trained backroom model, characterized by:</p>
                        <p>- A focus on unconventional data patterns and experimental outputs.</p>
                        <p>- The ability to generate unique and adaptive behaviors.</p>
                        <p>- Support for experimental use cases across storytelling, gaming, and research.</p>

                        <p>**2. Open-Source Flexibility** </p>
                        <p>KORA is fully open-sourced, offering:</p>
                        <p>- Transparency in code and operations.</p>
                        <p>- The ability to customize models for specific tasks and domains.</p>
                        <p>- A collaborative platform for developers and researchers to innovate together.</p>

                        <p> **3. Custom AI Agent Design**</p>
                        <p>KORA allows users to:</p>
                        <p>- Build AI agents tailored for experimental or task-specific use cases.</p>
                        <p>- Deploy agents in dynamic environments like games, simulations, or research scenarios.</p>
                        <p>- Adapt agent behavior through unique data integration.</p>

                        <p>**4. Experimental Narrative Engine**</p>
                        <p>The narrative generation engine supports:</p>
                        <p>- Exploration of non-linear and unconventional plot structures.</p>
                        <p>- Data-driven creation of immersive worlds.</p>
                        <p>- Experimental storytelling techniques for novel applications.</p>

                        <h5>**Technical Framework and Architecture**</h5>
                        <p>**1. Core Technologies**</p>
                        <p>KORA is built using cutting-edge machine learning and AI frameworks, including:</p>
                        <p>- **Transformers and GPT Architectures:** Core to KORA’s natural language processing, enabling advanced contextual understanding and narrative generation.</p>
                        <p>- **PyTorch:** Providing a flexible, modular foundation for model development, fine-tuning, and scalability.</p>
                        <p>- **Hugging Face Integration:** Facilitating seamless customization of pre-trained models and access to an extensive library of AI tools.</p>
                        <p>- **Distributed Training:** Allowing efficient handling of large datasets through parallel processing, ensuring faster and scalable model training.</p>

                        <p>**2. Training Pipeline**</p>
                        <p>KORA’s modular training pipeline includes:</p>
                        <p>- **Data Preprocessing:** Tools for cleaning, organizing, and structuring unconventional and experimental datasets.</p>
                        <p>- **Fine-Tuning:** Customizable workflows for adapting the backroom model to niche applications or unique datasets.</p>
                        <p>- **Evaluation Metrics:** Built-in metrics for assessing model performance in specific tasks, ensuring adaptability and robustness.</p>

                        <p>**3. Adaptive Model Design**</p>
                        <p>The backroom model emphasizes:</p>
                        <p>- **Dynamic Learning:** Continuous adaptability based on user-provided datasets and feedback loops.</p>
                        <p>- **Context-Aware Outputs:** Enhanced understanding of nuanced data inputs, generating more meaningful and coherent results.</p>
                        <p>- **Multi-Domain Flexibility:** Capable of transitioning seamlessly between applications, such as storytelling, gaming, and domain-specific research.</p>

                        <p>### **4. Scalability and Efficiency**</p>
                        <p>- **Cloud Integration:** Optimized for deployment on cloud platforms, enabling scalable use for both individual and enterprise-level projects.</p>
                        <p>- **Hardware Flexibility:** Compatible with both GPU and CPU architectures, ensuring accessibility for users with varying computational resources.</p>
                        <p>- **Resource Optimization:** Efficient utilization of memory and compute power for handling large-scale training tasks without compromising performance.</p>

                        <h5>**Conclusion**</h5>
                        <p style="text-align: justify;">KORA is more than a platform—it’s a fully open-sourced, trained backroom model that empowers users to explore, experiment, and innovate. Built on advanced frameworks and modular architectures, KORA is designed to adapt to a wide range of experimental and practical applications, making it a versatile tool for developers and researchers alike.</p>

                        <h5>**Train KORA. Experiment with innovation. Design your agent. Shape the future.**</h5>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
    <!-- End Create New Item -->
    
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