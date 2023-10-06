<!DOCTYPE html>
<html lang="en">
@include('partials.header')
@include('partials.navbar')

<head>
    <meta charset="utf-8">
    

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
</head>
<body class="bg-dark">

    
<!-- Header Start -->
<div class="container-fluid hero-header bg-dark py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown  text-primary">Our Projects</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item text-primary"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-primary"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Projects</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white p-3 w-100" src="images/gallery/gallery38.webp" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white p-3 w-100" src="images/wedding.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Project Start -->
    <div class="container-xxl py-5 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">Our Works</p>
                <h1 class="display-6 mb-0 text-secondary">Discover Our Unique And Creative Wedding Gallery</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-3">
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="{{asset('images/gallery/gallery25.webp')}}" data-lightbox="project">
                                
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery25.webp')}}" alt="">
                                
                            </div>
                            </a>
                        </div>
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="{{asset('images/gallery/gallery1.webp')}}" data-lightbox="project">
                                 
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery1.webp')}}" alt="">
                                
                            </div>
                          
                                </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-3">
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="{{asset('images/gallery/gallery5.webp')}}" data-lightbox="project">
                                
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery5.webp')}}" alt="">
                               
                            </div>
                         
                                </a>
                        </div>
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="{{asset('images/gallery/gallery7.webp')}}" data-lightbox="project">
                                    
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery7.webp')}}" alt="">
                                
                                
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3">
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="{{asset('images/gallery/gallery14.webp')}}" data-lightbox="project">
                                    
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery14.webp')}}" alt="">
                                
                             
                            </div>
                            </a>
                        </div>
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="{{asset('images/gallery/gallery16.webp')}}" data-lightbox="project">    
                                   
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery16.webp')}}" alt="">
                                
                             
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-3">
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="{{asset('images/gallery/gallery18.webp')}}" data-lightbox="project">
                                   
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery18.webp')}}" alt="">
                               
                             
                            </div>
                            </a>
                        </div>
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="img/project-8.jpg" data-lightbox="project">
                                  
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery20.webp')}}" alt="">
                                
                               
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-xxl py-5  pt-1">
        <div class="container">
           
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-3">
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="{{asset('images/gallery/gallery22.webp')}}" data-lightbox="project">
                                  
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery22.webp')}}" alt="">
                              
                            </div>
                           
                                </a>
                        </div>
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="{{asset('images/gallery/gallery30.webp')}}" data-lightbox="project">
                                   
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery30.webp')}}" alt="">
                               
                              
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-3">
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="{{asset('images/gallery/gallery32.webp')}}" data-lightbox="project">
                           
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery32.webp')}}" alt="">
                               
                               
                            </div>
                            </a>
                        </div>
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="{{asset('images/gallery/gallery26.webp')}}" data-lightbox="project">
                                  
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery26.webp')}}" alt="">
                               
                             
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3">
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="img/project-7.jpg" data-lightbox="project">
                               
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery47.webp')}}" alt="">
                             
                             
                            </div>
                            </a>
                        </div>
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="{{asset('images/gallery/gallery58.webp')}}" data-lightbox="project">    
                                  
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery58.webp')}}" alt="">
                               

                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-3">
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="{{asset('images/gallery/gallery56.webp')}}" data-lightbox="project">
 
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery56.webp')}}" alt="">
                                
                              
                            </div>
                            </a>
                        </div>
                        <div class="col-12">
                        <a class="project-title h5 mb-0" href="{{asset('images/gallery/gallery21.webp')}}" data-lightbox="project">
                               
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/gallery/gallery21.webp')}}" alt="">
                              
                              
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->

    @include('partials.footer')

     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>