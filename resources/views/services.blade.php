<!DOCTYPE html>
<html lang="en">
@include('partials.header')
@include('partials.navbar')

<head>
    <meta charset="utf-8">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/about.css')}}" rel="stylesheet">
</head>

<body class="bg-dark">
    <!-- Service Start -->
    <div class="container-xxl" style="padding-top: 6rem">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="display-6 text-primary text-uppercase">Our Services</h2>
                <h1 class="display-6 mb-4 text-white">We Provide The Best Professional Services</h1>
            </div>
            <div class="row g-3 justify-content-center">
                <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column p-3 pb-0"
                        style="background: #0000; box-shadow: 0 0 10px #ab7865;"
                    >
                        <div class="position-relative">
                            <img class="img-fluid" src="images/gallery/gallery55.webp" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="#service1"><i class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-start p-3" style="max-width: 100%;">
                            <h5 class="text-white" style="word-wrap: break-word; max-width: 100%;">
                                Wedding Photography
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column p-3 pb-0"
                        style="background: #0000; box-shadow: 0 0 10px #ab7865;"
                    >
                        <div class="position-relative">
                            <img class="img-fluid" src="images/gallery/gallery39.webp" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="#service4"><i class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-start p-3" style="max-width: 100%;">
                            <h5 class="text-white" style="word-wrap: break-word; max-width: 100%;">Destination Wedding Photography</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex flex-column p-3 pb-0"
                        style="background: #0000; box-shadow: 0 0 10px #ab7865;"
                    >
                        <div class="position-relative">
                            <img class="img-fluid" src="images/gallery/gallery51.webp" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="#service2"><i class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-start p-3" style="max-width: 100%;">
                            <h5 class="text-white" style="word-wrap: break-word; max-width: 100%;">Traditional Wedding</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item d-flex flex-column p-3 pb-0"
                        style="background: #0000; box-shadow: 0 0 10px #ab7865;"
                    >
                        <div class="position-relative">
                            <img class="img-fluid" src="images/wedding.webp" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="#service3"><i class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-start p-3" style="max-width: 100%;">
                            <h5 class="text-white" style="word-wrap: break-word; max-width: 100%;">Engagement Photography</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex flex-column p-3 pb-0"
                        style="background: #0000; box-shadow: 0 0 10px #ab7865;"
                    >
                        <div class="position-relative">
                            <img class="img-fluid" src="images/gallery/gallery27.webp" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="/contact"><i class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-start p-3" style="max-width: 100%;">
                            <h5 class="text-white" style="word-wrap: break-word; max-width: 100%;">Other Services?</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Service Details Start -->
    <div class="container-xxl px-0 py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h3 class="display-6 text-primary text-uppercase">Checkout our Pricing</h3>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" id="service1">
                <div class="row g-0 flex-sm-row">
                    <div class="col-sm-6">
                        <div class=" position-relative">
                            <img class="img-fluid" src="images/gallery/gallery2.webp" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 pt-0 d-flex flex-column justify-content-between">
                            <h2 class="package-name">Wedding Photography</h2>
                            <p class="package-description">Ideal for intimate weddings and elopements.</p>
                            <div class="package-features">
                                <ul>
                                    <li>Basic coverage</li>
                                    <li>Ceremony & key moments</li>
                                    <li>High-res edited images</li>
                                    <li>Basic coverage</li>
                                    <li>Ceremony & key moments</li>
                                    <li>High-res edited images</li>
                                </ul>
                            </div>
                            <p class="package-price">Ksh.100,000</p>
                            <a href="/contact" class="package-button">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s" id="service2">
                <div class="row g-0 flex-sm-row-reverse flex-lg-row">
                    <div class="col-sm-6">
                        <div class="position-relative">
                            <img class="img-fluid" src="images/gallery/gallery6.webp" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 pt-0 d-flex flex-column justify-content-between">
                            <h2 class="package-name">Traditional Wedding Photography</h2>
                            <p class="package-description">Timeless Elegance weddings</p>
                            <div class="package-features">
                                <ul>
                                    <li>Basic coverage</li>
                                    <li>Two photographers for additional angles and perspectives.</li>
                                    <li>Full day coverage ensures no moment is missed.</li>
                                    <li>A premium custom-designed photo album.</li>
                                    <li>Engagement session with prints included</li>

                                </ul>
                            </div>
                            <p class="package-price">Ksh.150,000</p>
                            <a href="/contact" class="package-button">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" id="service3">
                <div class="row g-0 flex-lg-row-reverse">
                    <div class="col-sm-6">
                        <div class="position-relative">
                            <img class="img-fluid" src="images/gallery/gallery30.webp" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 pt-0 pb-0 d-flex flex-column justify-content-between">
                            <div class="mb-3">
                                <h2 class="package-name">Engagement Photography</h2>
                                <span class="text-white">Timeless Elegance weddings</span>
                            </div>
                            <div class="package-features display-8">
                                <ul>
                                    <li>Basic coverage</li>
                                    <li>2 photographers for additional angles and perspectives.</li>
                                    <li>Full day coverage</li>
                                    <li>A premium custom-designed photo album.</li>
                                    <li>Engagement session with prints included</li>

                                </ul>
                            </div>
                            <p class="package-price">Ksh.150,000</p>
                            <a href="/contact" class="package-button">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s" id="service4">
                <div class="row g-0 flex-sm-row-reverse">
                    <div class="col-sm-6">
                        <div class="position-relative">
                            <img class="img-fluid" src="images/gallery/gallery5.webp" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 pt-0 d-flex flex-column justify-content-between">
                            <div class="mb-3">
                                <h2 class="package-name">Elopment Wedding Photography</h2>
                                <span class="text-white" class="text-white">Ideal for intimate weddings and elopements.</span>
                            </div>
                            <div class="package-features">
                                <ul>
                                    <li>Basic coverage</li>
                                    <li>Ceremony & key moments</li>
                                    <li>High-res edited images</li>
                                    <li>Basic coverage</li>
                                    <li>Ceremony & key moments</li>
                                    <li>High-res edited images</li>
                                </ul>
                            </div>
                            <p class="package-price">ksh.250,000</p>
                            <a href="/contact" class="package-button">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="row g-0 flex-sm-row-reverse flex-lg-row">
                    <div class="col-sm-6">
                        <div class="position-relative">
                            <img class="img-fluid" src="images/gallery/gallery6.webp" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 d-flex flex-column justify-content-between">
                            <h2 class="package-name">Destination Wedding Photography</h2>
                            <p class="package-description">Ideal for intimate weddings and elopements.</p>
                            <div class="package-features">
                                <ul>
                                    <li>Basic coverage</li>
                                    <li>Ceremony & key moments</li>
                                    <li>High-res edited images</li>
                                    <li>Basic coverage</li>
                                    <li>Ceremony & key moments</li>
                                    <li>High-res edited images</li>
                                </ul>
                            </div>
                            <p class="package-price">Ksh.200,000</p>
                            <a href="/contact" class="package-button">Book Now</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    


    @include('partials.footer')

    <!-- JS Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Main Javascript -->
    <script src="js/main.js"></script>
</body>
</html>