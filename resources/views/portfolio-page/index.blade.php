<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="title" content="Rama Aryo Prambudi Portofolio" />
    <meta name="author" content="Rama Aryo Prambudi" />
    <meta name="description" content="ramaprambudi is a site portfolio rama aryo prambudi." />
    <meta name="keywords" content="rama aryo prambudi,portfolio,portofolio,ramaprambudii,aryo prambudi,rama aryo, rama prambudi" />
    <meta name="robots" content="index, follow" />

    <title>Rama Aryo Prambudi Portofolio</title>
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="./portfolio-page/assets/css/meyawo.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="#">Rama Aryo</a>
            <ul class="nav">
                <li class="item">
                    <a class="link" href="#home">Home</a>
                </li>
                <li class="item">
                    <a class="link" href="#about">About</a>
                </li>
                <li class="item">
                    <a class="link" href="#portfolio">Portfolio</a>
                </li>
                <li class="item">
                    <a class="link" href="#blog">Blog</a>
                </li>
                <li class="item">
                    <a class="link" href="#contact">Contact</a>
                </li>
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>
    </nav><!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="typed" data-typed-items="Hello World !, I'm  Rama Aryo Prambudi,  I'm Student, I'm Backend Web Developer, Bug Hunter, Nice To Meet You"></span>
                <p>Student, Junior Backend Web Developer, Junior Bug Hunter</p>
            </h1>
        </div>

    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">
                    <img src="./portfolio-page/assets/imgs/aboutme.jpg" class="about-img img-thumbnail"
                        alt="About Me Photo" style="width: 200px;">
                </div>
                <div class="about-caption">
                    <p class="section-subtitle">Who Am I ?</p>
                    <h2 class="section-title mb-3">About Me</h2>
                    <p>
                        I am an informatics engineering student at Serang Raya University, I am also a backend web developer and bug hunter. As a backend web developer, I am still a beginner, then I have been a bug hunter for 1 year, I have contributed quite a lot in finding bugs on Indonesian government and private websites.
                    </p>
                    {{-- <button class="btn-rounded btn btn-outline-primary mt-4">Download CV</button> --}}
                </div>
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->

    <!-- service section -->
    <section class="section" id="service">
        <div class="container text-center">
            {{-- <p class="section-subtitle">What I Do ?</p> --}}
            <h6 class="section-title mb-6">My Skill</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="./portfolio-page/assets/imgs/php-logo.png"
                                alt="PHP Logo"
                                class="icon"
                                style="width: 40%;">
                            <h6 class="title">PHP <span style="color: black; font-weight: bold;">( 80% )</span></h6>
                            <p class="subtitle">Memahami syntax dasar-dasar PHP dan OOP PHP dengan kemampuan membuat web sederhana.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="./portfolio-page/assets/imgs/laravel-logo.png"
                                alt="Laravel Logo"
                                class="icon"
                                style="width: 22%;">
                            <h6 class="title">Laravel <span style="color: black; font-weight: bold;">(50%)</span></h6>
                            <p class="subtitle">Memahami dasar-dasar Laravel dengan kemampuan membuat web crud sederhana.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="./portfolio-page/assets/imgs/Bootstrap-logo.svg"
                                alt="Bootstrap Logo"
                                class="icon"
                                style="width: 23%;">
                            <h6 class="title">Bootstrap <span style="color: black; font-weight: bold;">(40%)</span></h6>
                            <p class="subtitle">Memahami dasar-dasar penggunaan bootstrap untuk membangun tampilan sebuah website yang lumayan cepat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="./portfolio-page/assets/imgs/bughunter-logo.png"
                                alt="Bug Hunter Logo"
                                class="icon"
                                style="width: 27%;">
                            <h6 class="title">Bug Hunter <span style="color: black; font-weight: bold;">(50%)</span></h6>
                            <p class="subtitle">Memahami dasar penetration test pada web serta tahap proses nya, Memahami OWASP TOP 10.</p>
                        </div>
                    </div>
                </div>
            </div><!-- end of row -->
        </div>
    </section><!-- end of service section -->

    <!-- portfolio section -->
    <section class="section" id="portfolio">
        <div class="container text-center">
            <p class="section-subtitle">What I Did ?</p>
            <h6 class="section-title mb-6">Portfolio</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-4 ">
                    <div class="portfolio-card">
                        <img src="./portfolio-page/assets/imgs/portfolio/inputnilai-uts.png" class="portfolio-card-img"
                            alt="Input Nilai UTS Photo">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Input Nilai UTS</h4>
                                <p class="font-weight-normal">PHP Native, CSS Native.</p>
                                    <span class="col-6">
                                    <a href="https://github.com/ramaaryoprambudi/InputNilai_UTS_PemrogramanWeb">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                        </svg>
                                    </a>
                                    </span>
                                    <span class="col-6">
                                        <a href="http://inputnilai.todoapps.kesug.com/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                            </path>
                                            </svg>
                                        </a>
                                        </span>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-card">
                        <img src="./portfolio-page/assets/imgs/portfolio/todoapps.png" class="portfolio-card-img"
                            alt="Todo Apps Photo">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Todo Apps</h4>
                                <p class="font-weight-normal">PHP Native, Bootstrap.</p>
                                    <span class="col-6">
                                    <a href="https://github.com/ramaaryoprambudi/Todo-APP-PHP-NATIVE">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                        </svg>
                                    </a>
                                    </span>
                                    <span class="col-6">
                                        <a href="http://todoapps.kesug.com/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                            </path>
                                            </svg>
                                        </a>
                                        </span>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-card">
                        <img src="./portfolio-page/assets/imgs/portfolio/inputdatakaryawan.png" class="portfolio-card-img"
                            alt="Input Data Karyawan Photo">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Input Data Karyawan</h4>
                                <p class="font-weight-normal">PHP Native, MYSQL, Bootstrap.</p>
                                    <span class="col-6">
                                    <a href="https://github.com/ramaaryoprambudi/Simple-Crud-PHP">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                        </svg>
                                    </a>
                                    </span>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="portfolio-card">
                        <img src="./portfolio-page/assets/imgs/portfolio/dashboard-home.png" class="portfolio-card-img"
                            alt="Dashboard Blog Home">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Dashboard Blog</h4>
                                <p class="font-weight-normal">Laravel, Jquery, Livewire, Bootstrap.</p>
                                    <span class="col-6">
                                    <a href="https://github.com/ramaaryoprambudi/Laravel_Blog">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                        </svg>
                                    </a>
                                    </span>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="portfolio-card">
                        <img src="./portfolio-page/assets/imgs/portfolio/sariroti_bug-bounty.png" class="portfolio-card-img"
                            alt="Sari Roti Bug Bounty">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Sari Roti Bug Bounty</h4>
                                <p class="font-weight-normal">Microsoft Edge, FoxyProxy, Burp Suite Community Edition.</p>
                                    <span class="col-12">
                                    <a href="https://youtu.be/qSRjCBTgw7E?si=Az1EVC2s6eQpS-CL">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                          </svg>
                                    </a>
                                    </span>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="portfolio-card">
                        <img src="./portfolio-page/assets/imgs/portfolio/sertifikat-apresiasi-jatengprov.png" class="portfolio-card-img"
                            alt="Dashboard Blog Home"
                            style="width: 80%;">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Volunteer Bug Hunter</h4>
                                <p class="font-weight-normal">Microsoft Edge, FoxyProxy, Burp Suite Community Edition.</p>
                                    <span class="col-12">
                                    <a href="https://www.linkedin.com/feed/update/urn:li:activity:7049745618424000512/">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                        </path>
                                        </svg>
                                    </a>
                                    </span>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="portfolio-card">
                        <img src="./portfolio-page/assets/imgs/portfolio/sertifikat-apresiasi-kementerian kesehatan.png" class="portfolio-card-img"
                            alt="Sertifikat Kementerian Kesehatan Photo"
                            style="width: 80%;">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Volunteer Bug Hunter</h4>
                                <p class="font-weight-normal">Microsoft Edge, Virtual Machine Kali Linux, SQLMAP, Javascript(Reflected XSS)</p>
                                    <span class="col-12">
                                    <a href="https://www.linkedin.com/feed/update/urn:li:activity:7049747908857901058/">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                        </path>
                                        </svg>
                                    </a>
                                    </span>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="portfolio-card">
                        <img src="./portfolio-page/assets/imgs/portfolio/sertifikat-apresiasi-karyakarsa.png" class="portfolio-card-img"
                            alt="Sertifikat Apresiasi Karyakarsa"
                            style="width: 80%;">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Volunteer Bug Hunter</h4>
                                <p class="font-weight-normal">Microsoft Edge, Javascript(STORAGE XSS).</p>
                                    <span class="col-12">
                                    <a href="https://www.linkedin.com/feed/update/urn:li:activity:7079760551056207872/">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                        </path>
                                        </svg>
                                    </a>
                                    </span>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="portfolio-card">
                        <img src="./portfolio-page/assets/imgs/portfolio/sertifikat-apresiasi-bssn.png" class="portfolio-card-img"
                            alt="Sertifikat Apresasi BSSN"
                            style="width: 80%;">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Volunteer Bug Hunter</h4>
                                <p class="font-weight-normal">Microsoft Edge, Virtual Machine Kali Linux, Dirsearch</p>
                                    <span class="col-12">
                                    <a href="https://www.linkedin.com/feed/update/urn:li:activity:7053727927233888256/">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                        </path>
                                        </svg>
                                    </a>
                                    </span>
                            </span>
                        </span>
                    </div>
                </div>
            </div><!-- end of row -->
        </div><!-- end of container -->
    </section> <!-- end of portfolio section -->

    <!-- blog section -->
    <section class="section" id="blog">
        <!-- container -->
        <div class="container text-center">
            {{-- <p class="section-subtitle">Recent Posts?</p> --}}
            <h6 class="section-title mb-6">Blog</h6>
            <!-- blog-wrapper -->
            <div class="blog-card">
                {{-- <div class="blog-card-header">
                    <img src="assets/imgs/img-1.jpg" class="blog-card-img"
                        alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div> --}}
                <div class="blog-card-body">
                    <h1 class="blog-card-title text-center" style="color: black;">Coming Soon!</h1>
                    {{-- @foreach ($posts as $post) --}}
                    {{-- <h5 class="blog-card-title">{{ $post->title }}</h5> --}}

                        {{-- <p class="blog-card-caption">
                            <a href="#">By: Admin</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 234</a>
                            <a href="#"><i class="ti-comment"></i> 123</a>
                        </p>
                        <p>{{ Str::limit($post->content,100) }}</p> --}}
                        {{-- <a href="{{ url("blog/posts/$post->slug") }}" class="blog-card-link mb-3">Read more <i class="ti-angle-double-right"></i></a> --}}
                        <hr width="1100px" >
                        {{-- @endforeach --}}
                </div>
            </div><!-- end of blog wrapper -->

        </div><!-- end of container -->
    </section><!-- end of blog section -->

    {{-- contact section --}}
    <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">How To Working With Me?</p>
            <h6 class="section-title mb-3">Contact Me</h6>
            <!-- contact form -->
            <div class="container">
                <div class="row">
                    <span class="m-auto">
                       <span class="px-2">
                        <a href="https://www.instagram.com/ramaprambudii/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                              </svg>
                        </a>
                       </span>
                        <span class="px-2">
                            <a href="https://www.instagram.com/ramaprambudii/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                  </svg>
                            </a>
                        </span>
                    </span>
                </div>
            </div>
        </div><!-- end of container -->
    </section>
    {{-- end contact section --}}

    <!-- contact form section -->
    {{-- <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">How can you communicate?</p>
            <h6 class="section-title mb-5">Contact Me</h6>
            <!-- contact form -->
            <form action="" class="contact-form col-md-10 col-lg-8 m-auto">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input type="text" size="50" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" class="form-control" placeholder="Enter Email" requried>
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea name="comment" id="comment" rows="6" class="form-control"
                            placeholder="Write Something"></textarea>
                    </div>
                    <div class="form-group col-sm-12 mt-3">
                        <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">
                    </div>
                </div>
            </form><!-- end of contact form -->
        </div><!-- end of container -->
    </section><!-- end of contact section --> --}}

    <!-- footer -->
    <div class="container">
        <footer class="footer">
            <p class="mb-0">Copyright
                <script>document.write(new Date().getFullYear())</script>
                &copy;
                <a href="https://www.instagram.com/ramaprambudii/">RamaPrambudi</a>
            </p>
            <div class="text-right m-auto ml-sm-auto">
                Web Design By
                <a href="http://www.devcrud.com">DevCRUD</a> Distribution
                <a href="https://themewagon.com">ThemeWagon</a>
            </div>
            {{-- <div class="text-right m-auto ml-sm-auto">
                <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
            </div> --}}
        </footer>
    </div> <!-- end of page footer -->

    <!-- core  -->
    <script src="./portfolio-page/assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="./portfolio-page/assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    {{-- vendor --}}
    <script src="./portfolio-page/assets/vendor/typed.js/typed.umd.js"></script>

    <!-- Typed.js -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    var typed = new Typed('.typed', {
        strings: ["Hello World !.", "I'm Rama Aryo Prambudi.", "I'm Student.", "I'm Junior Backend Web Developer.", "I'm Junior Bug Hunter.", "Nice To Meet You :)."],
        typeSpeed: 40,
        backSpeed: 30,
        backDelay: 1000,
        startDelay: 100,
        loop: true,
    });
});

    </script>

    <!-- bootstrap 3 affix -->
    <script src="./portfolio-page/assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Meyawo js -->
    <script src="./portfolio-page/assets/js/meyawo.js"></script>

</body>

</html>
