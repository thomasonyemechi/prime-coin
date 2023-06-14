@extends('layout.app')

@section('page_content')
    <main class="main-content fix">
        <div class="noise-bg" data-background="assets/img/bg/noise_bg.png"></div>
        <div class="main-shape" data-background="assets/img/images/main_shape.png"></div>

        <!-- banner-area -->
        <section class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content ta-animated-headline">
                            <h2 class="title ah-headline wow fadeInUp" data-wow-delay=".2s"><span>Finally a broader yet
                                    simple vision for web3 is here
                            </h2>
                            <h2 class="title d-none wow fadeInUp" data-wow-delay=".2s">Finally a broader yet simple vision
                                for web3 is here</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">After several years of work and commitment to
                                building a truly
                                decentralized internet project, payment network and blockchain protocol, the award winning
                                tokenomics team
                                created prime coin primarily as a utility token for the prime ecosystem with
                                vast applications on numerous platforms with an ICO of 1,200,000,000 tokens</p>
                            <div class="banner-btn">
                                <a href="/login" class="gradient-btn wow fadeInLeft" data-wow-delay=".6s">Create Free
                                    Account</a>
                                <a href="#" class="gradient-btn gradient-btn-two wow fadeInRight"
                                    data-wow-delay=".6s">how {{ env('APP_NAME') }} work</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 mb-0">
                <div class="features-item-wrap">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="features-item">
                                    <div class="icon">
                                        <i class="far fa-check"></i>
                                    </div>
                                    <div class="content">
                                        <span class="text-white">Customizable templates</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="features-item">
                                    <div class="icon">
                                        <i class="far fa-check"></i>
                                    </div>
                                    <div class="content">
                                        <span class="text-white">High-quality video output</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="features-item">
                                    <div class="icon">
                                        <i class="far fa-check"></i>
                                    </div>
                                    <div class="content">
                                        <span class="text-white">Fast processing time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="features-item">
                                    <div class="icon">
                                        <i class="far fa-check"></i>
                                    </div>
                                    <div class="content">
                                        <span class="text-white">Multi-language support</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </section>




    



        <!-- writing-area -->
        <section class="writing-area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-80">
                            <h2 class="title title-animation">Start writing <span>10x faster</span> with AI</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                        <div class="writing-item">
                            <div class="writing-shape">
                                <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg" x="0px"
                                    y="0px" preserveAspectRatio="none">
                                    <g opacity="0.1">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z"
                                            fill="currentcolor" />
                                    </g>
                                </svg>
                            </div>
                            <div class="writing-icon">
                                <i class="far fa-brain"></i>
                            </div>
                            <div class="writing-content">
                                <h4 class="title">The GPT-3.5 language</h4>
                                <p>Unlike anything you've experienced - unique and unimaginable capabilities.</p>
                                <a href="work.html" class="link-btn">Try Gpt-3.5 language<i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                        <div class="writing-item">
                            <div class="writing-shape">
                                <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg" x="0px"
                                    y="0px" preserveAspectRatio="none">
                                    <g opacity="0.1">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z"
                                            fill="currentcolor" />
                                    </g>
                                </svg>
                            </div>
                            <div class="writing-icon">
                                <i class="far fa-chart-line"></i>
                            </div>
                            <div class="writing-content">
                                <h4 class="title">Grow with the use of AI</h4>
                                <p>Unlike anything you've experienced - unique and unimaginable capabilities.</p>
                                <a href="work.html" class="link-btn">Try use of AI<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                        <div class="writing-item">
                            <div class="writing-shape">
                                <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    x="0px" y="0px" preserveAspectRatio="none">
                                    <g opacity="0.1">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z"
                                            fill="currentcolor" />
                                    </g>
                                </svg>
                            </div>
                            <div class="writing-icon">
                                <i class="fal fa-lightbulb-on"></i>
                            </div>
                            <div class="writing-content">
                                <h4 class="title">Optimized for conversions</h4>
                                <p>Unlike anything you've experienced - unique and unimaginable capabilities.</p>
                                <a href="work.html" class="link-btn">Try conversions<i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                        <div class="writing-item">
                            <div class="writing-shape">
                                <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    x="0px" y="0px" preserveAspectRatio="none">
                                    <g opacity="0.1">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z"
                                            fill="currentcolor" />
                                    </g>
                                </svg>
                            </div>
                            <div class="writing-icon">
                                <i class="fal fa-globe"></i>
                            </div>
                            <div class="writing-content">
                                <h4 class="title">Supports 26 languages</h4>
                                <p>Unlike anything you've experienced - unique and unimaginable capabilities.</p>
                                <a href="work.html" class="link-btn">Try supports languages<i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                        <div class="writing-item">
                            <div class="writing-shape">
                                <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    x="0px" y="0px" preserveAspectRatio="none">
                                    <g opacity="0.1">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z"
                                            fill="currentcolor" />
                                    </g>
                                </svg>
                            </div>
                            <div class="writing-icon">
                                <i class="fal fa-user-friends"></i>
                            </div>
                            <div class="writing-content">
                                <h4 class="title">Streamline collaboration</h4>
                                <p>Unlike anything you've experienced - unique and unimaginable capabilities.</p>
                                <a href="work.html" class="link-btn">Try streamline<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-9">
                        <div class="writing-item">
                            <div class="writing-shape">
                                <svg viewBox="0 0 417 207" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    x="0px" y="0px" preserveAspectRatio="none">
                                    <g opacity="0.1">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 96C0 82 7.5 73 26.2229 76.38C43.8225 79.5573 73.5 62.5 65 34C58.0931 10.8417 68.4854 0.0152226 90.4536 0H387C403.569 0 417 13.4315 417 30V177C417 193.569 403.569 207 387 207H30C13.4315 207 0 193.569 0 177V96Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M26.2229 76.38L26.0452 77.3641L26.0452 77.3641L26.2229 76.38ZM65 34L64.0417 34.2858L65 34ZM90.4536 0L90.4536 -1L90.4529 -1L90.4536 0ZM26.4005 75.3959C16.8849 73.6781 9.9765 75.0628 5.4433 78.9101C0.915622 82.7526 -1 88.8465 -1 96H1C1 89.1535 2.83438 83.7474 6.73743 80.4349C10.6349 77.1272 16.838 75.7019 26.0452 77.3641L26.4005 75.3959ZM64.0417 34.2858C68.1618 48.1001 63.0533 59.0984 54.7432 66.3139C46.3758 73.5791 34.8545 76.9221 26.4005 75.3959L26.0452 77.3641C35.1909 79.0152 47.3082 75.4182 56.0544 67.8241C64.858 60.1802 70.3382 48.3998 65.9583 33.7142L64.0417 34.2858ZM90.4529 -1C79.3517 -0.992307 70.8799 1.74143 66.1176 7.69682C61.3388 13.673 60.5475 22.57 64.0417 34.2858L65.9583 33.7142C62.5456 22.2717 63.4971 14.1764 67.6796 8.94589C71.8788 3.69466 79.5873 1.00753 90.4543 1L90.4529 -1ZM90.4536 1H387V-1H90.4536V1ZM387 1C403.016 1 416 13.9837 416 30H418C418 12.8792 404.121 -1 387 -1V1ZM416 30V177H418V30H416ZM416 177C416 193.016 403.016 206 387 206V208C404.121 208 418 194.121 418 177H416ZM387 206H30V208H387V206ZM30 206C13.9837 206 1 193.016 1 177H-1C-1 194.121 12.8792 208 30 208V206ZM1 177V96H-1V177H1Z"
                                            fill="currentcolor" />
                                    </g>
                                </svg>
                            </div>
                            <div class="writing-icon">
                                <i class="far fa-cog"></i>
                            </div>
                            <div class="writing-content">
                                <h4 class="title">Powerful settings</h4>
                                <p>Unlike anything you've experienced - unique and unimaginable capabilities.</p>
                                <a href="work.html" class="link-btn">Try powerful settings<i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <section class="roadmap-area pt-140 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-70">
                            <h2 class="title title-animation">How it <span>works</span></h2>
                            <p class="wow fadeInUp">The usuage exceeds the scope of the prime ecosystem but not limited to
                                the following</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-9">
                        <div class="roadmap-timeline-wrap">
                            <div class="roadmap-line" data-background="assets/img/brand/Line.svg"></div>
                            <ul class="list-wrap">
                                <li>
                                    <div class="roadmap-item">
                                        <div class="roadmap-img wow fadeInLeft" data-wow-delay=".2s">
                                            <img src="assets/img/images/roadmap_img01.png" alt="">
                                            <span class="number">01</span>
                                        </div>
                                        <div class="roadmap-content wow fadeInRight" data-wow-delay=".2s">
                                            <h4 class="title">Selecting an AI tool</h4>
                                            <p>Choose from a variety of AI tools to write social media ads, hero sections,
                                                blog posts...</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="roadmap-item">
                                        <div class="roadmap-img wow fadeInRight" data-wow-delay=".2s">
                                            <img src="assets/img/images/roadmap_img02.png" alt="">
                                            <span class="number">02</span>
                                        </div>
                                        <div class="roadmap-content wow fadeInLeft" data-wow-delay=".2s">
                                            <h4 class="title">Write your keywords</h4>
                                            <p>Explain to the AI ​​what you want to write. The more details, the better
                                                output.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="roadmap-item">
                                        <div class="roadmap-img wow fadeInLeft" data-wow-delay=".2s">
                                            <img src="assets/img/images/roadmap_img03.png" alt="">
                                            <span class="number">03</span>
                                        </div>
                                        <div class="roadmap-content wow fadeInRight" data-wow-delay=".2s">
                                            <h4 class="title">Let's the AI do its magic</h4>
                                            <p>Our highly trained AI understands your details and generate unique and
                                                human-like content in seconds.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>









    </main>
@endsection
