@extends('layout.app')

@section('page_content')
    <main class="main-content fix">
        <div class="noise-bg" data-background="assets/img/bg/noise_bg.png"></div>
        <div class="main-shape" data-background="assets/img/images/main_shape.png"></div>

        <!-- banner-area -->
        <section class="banner-area-three ">
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
                                <a href="/prime/info" class="gradient-btn gradient-btn-two wow fadeInRight"
                                    data-wow-delay=".6s">how {{ env('APP_NAME') }} work</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>







        <section class="speech-area pb-5 pt-5 mt-0  ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-content-wrap">
                            <div class="section-title-three mb-50 title-animation">
                                <h2 class="title fs-1  ">The usuage exceeds the scope of the prime ecosystem but not limited
                                    to
                                    the following</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="about-content-two">
                                        <p>
                                            Prime coin has achieved massive support and partnership from other organisations
                                            and institutions to help it's utility spread.

                                            The prime coin is also used primarily to pay transaction and trading fees on the
                                            prime ecosystem.
                                        </p>
                                        <ul class="list-wrap">
                                            <li><i class="far fa-hand-point-right"></i>Making investments.</li>
                                            <li><i class="far fa-hand-point-right"></i>Making payments and process
                                                investments.</li>
                                            <li><i class="far fa-hand-point-right"></i>Donate to charity and liquidity for
                                                community development. </li>
                                            <li><i class="far fa-hand-point-right"></i>Payment for local and international
                                                flights on designated platforms and third party organisations. </li>
                                            <li><i class="far fa-hand-point-right"></i> Connecting blockchain based smart
                                                contracts with external data and stock prices.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-img-two">
                                        <img src="assets/img/logo.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>







        <section class="about-area-two pt-120">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-9">
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
                                <h4 class="title">THE PRIME STRATEGY - THE IDEA</h4>
                                <p class="home-ar">
                                    Cryptocurrency is any form of currency that exists virtually or digitally and uses
                                    cryptography to secure transactions. One of the most secured technologies ever created
                                    is the blockchain technology which makes it difficult for hackers to corrupt. In
                                    cryptocurrency, banks are not needed to very transactions or payment. When you transfer
                                    cryptocurrencies, the transactions are recorded in a public ledger. Cryptocurrency is
                                </p>
                                <a href="/prime/info#idea" class="link-btn">Read More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-9">
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
                                <i class="fal fa-lightbulb-on"></i>
                            </div>
                            <div class="writing-content">
                                <h4 class="title">THE PRIME REWARD - AIRDROP</h4>
                                <p class="home-ar">
                                    Promoting consumer goods like food and clothing is entirely different from
                                    cryptocurrency projects. Promoting crypto projects requires a different set of language
                                    and approach. As the use of cryptocurrencies becomes more popular, crypto projects need
                                    to develop more efficient reward and promotion strategies to stand out from competitors
                                    especially for newly developed crypto projects. Instead of spending huge amount in
                                </p>
                                <a href="/prime/info#airdrop" class="link-btn">Read More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-9">
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
                                <i class="fal fa-globe"></i>
                            </div>
                            <div class="writing-content">
                                <h4 class="title">THE PRIME CION REWARD MARGIN</h4>
                                <p class="home-ar">
                                    You are invited to play a critical role in the expansion of our ecosystem and share in
                                    the rewards.

                                    As an investor, if the total amount of USDT invested in purchasing prime coin is up to
                                    $1000, then all your prime rewards(airdrop) are instantly withdrawable.
                                    As an investor, if the total amount of USDT invested in purchasing prime coin is not up
                                    to $1000, then 50% of all your prime rewards (airdrop) are instantly withdrawable while
                                    the other 50% is used to purchase more prime coin for you automatically. This way you
                                    accumulate more prime coin while you earn rewards.
                                </p>
                                <a href="/prime/info#reward_margin" class="link-btn">See More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-9">
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
                                <h4 class="title ">MAJOR / MINOR BLOCKS & MULTI-MINING</h4>
                                <p class="home-ar">

                                    We are simply combining all the key aspects of carrying out an efficient and productive
                                    mining
                                    activity. From building a highly effective data center to providing a robust mining
                                    system for our
                                    ecosystem.

                                    The blockchain distribute database that maintains a continous growing list of ordered
                                    records called
                                    major blocks and these blocks are linked using cryptography.
                                </p>
                                <a href="/prime/info#mining" class="link-btn">Read More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>



        <section class="about-area-two pb-110 pt-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="counter-wrap">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="counter-item-wrap bg-shiba "
                                        data-background="assets/img/images/h2_counter_shape.png">
                                        <h6 class="title text-white fs-4">COUNTDOWN TO PRESALE</h6>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class=" d-flex justify-content-between">
                                                    <div>
                                                        <div class="counter-item-two">
                                                            <h2 class="count" id="days">00</h2>
                                                            <p class="text-white">Days</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="counter-item-two">
                                                            <h2 class="count" id="hours">00</h2>
                                                            <p class="text-white">Hours</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="counter-item-two">
                                                            <h2 class="count" id="mins">00</h2>
                                                            <p class="text-white">Minitues</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="counter-item-two">
                                                            <h2 class="count" id="secs">00</h2>
                                                            <p class="text-white">Seconds</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="certificate-wrap">
                                        <div class="certificate-active">
                                            <div class="certificate-item">
                                                <h4 class="count" >Prime Coin</h4>
                                            </div>
                                            <div class="certificate-item">
                                                <h4 class="text-dark" >Prime Coin</h4>
                                            </div>
                                            <div class="certificate-item">
                                                <h4>Prime Coin</h4>
                                            </div>
                                            <div class="certificate-item">
                                                <h4>Prime Coin</h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="counter-shape">
                <img src="assets/img/images/counter_shape.png" alt="" data-aos="fade-left" data-aos-delay="300">
            </div>
        </section>

    </main>

    <script>
        var countDownDate = new Date("Jun 30, 2023 00:00:00").getTime();


        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            $('#days').html(days);
            $('#hours').html(hours);
            $('#mins').html(minutes);
            $('#secs').html(seconds);


        }, 1000);
    </script>
@endsection
