<!DOCTYPE html>
<html lang="en">
@include('partials.header')
@include('partials.navbar')

<head>
    <meta charset="utf-8">
    <link rel="canonical" href="https://www.queendeeweddings.co.ke/">

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
                    <h1 class="display-4 mb-3 animated slideInDown  text-primary">Our Portfolio</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item text-primary"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Portfolio</li>

                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-dark p-3 w-100"  style="box-shadow: 0 0 10px grey;"  src="images/gallery/gallery58.webp" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-dark p-3 w-100"  style="box-shadow: 0 0 10px grey;" src="images/gallery/gallery3.webp" alt="">
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
                <p class="text-primary text-uppercase mb-2">Our Work</p>
                <h1 class="display-6 mb-0 text-secondary text-white">Explore Our Unique And Creative Wedding Gallery</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-3">
                        <div class="col-12">
              
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/portfolio/esther/esther-10.webp')}}" alt="">
                                <a class="project-title h5 mb-0" href="{{asset('images/portfolio/esther/esther-1.webp')}}" data-lightbox="esther">
                               Walter &amp Esther
                                </a>

                                @foreach(range(2,13) as $gallery_number)
                                <a class="invisible" href="{{asset('images/portfolio/esther/esther-'.$gallery_number.'.webp')}}" data-lightbox="esther">
                                    
                                </a>
                                @endforeach
                               
                             
                             
                                
                            </div>
                           
                        </div>
                        <div class="col-12">
  
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/portfolio/adrian-beryl/adrian-beryl-16.webp')}}" alt="">
                                <a class="project-title h5 mb-0" href="{{asset('images/portfolio/adrian-beryl/adrian-beryl-16.webp')}}" data-lightbox="adrian-beryl">
                                Adrian &amp Beryl 
                                </a>
                                @foreach(range(1,22) as $gallery_number)
                                <a class="invisible" href="{{asset('images/portfolio/adrian-beryl/adrian-beryl-'.$gallery_number.'.webp')}}" data-lightbox="adrian-beryl">
                                    
                                </a>
                                @endforeach
                               
                                
                            </div>
                          
                             
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-3">
                        <div class="col-12">
                        <!-- <a class="project-title h5 mb-0" href="{{asset('images/gallery/gallery.webp')}}" data-lightbox="project"> -->
                                
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/portfolio/janet/janet-5.webp')}}" alt="">
                                <a class="project-title h5 mb-0" href="{{asset('images/portfolio/janet/janet-5.webp')}}" data-lightbox="janet">
                               Janet Wedding
                                </a>
                                @foreach(range(1,15) as $gallery_number)
                                <a class="invisible" href="{{asset('images/portfolio/janet/janet-'.$gallery_number.'.webp')}}" data-lightbox="janet">
                                    
                                </a>
                                @endforeach
                               
                            </div>
                         
                                
                        </div>
                        <div class="col-12">
                         
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/portfolio/josh-sylvia/josh-sylvia1.webp')}}" alt="">
                                <a class="project-title h5 mb-0" href="{{asset('images/portfolio/josh-sylvia/josh-sylvia1.webp')}}" data-lightbox="josh-sylvia">
                               Joshua &amp Sylvia Decor
                                </a>
                                @foreach(range(1,12) as $gallery_number)
                                <a class="invisible" href="{{asset('images/portfolio/josh-sylvia/josh-sylvia'.$gallery_number.'.webp')}}" data-lightbox="josh-sylvia">
                                    
                                </a>
                                @endforeach
                                
                                
                                
                            </div>
                         
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3">
                        <div class="col-12">
                                 
                            <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/portfolio/sarah-kevin/kevin-sarah-1.webp')}}"  alt="">
                                <a class="project-title h5 mb-0" href="{{asset('images/portfolio/sarah-kevin/kevin-sarah-1.webp')}}" data-lightbox="kevin-sarah">
                                 Kevin &amp Sarah 
                                </a>
                                @foreach(range(1,12) as $gallery_number)
                                <a class="invisible" href="{{asset('images/portfolio/sarah-kevin/kevin-sarah-'.$gallery_number.'.webp')}}" data-lightbox="kevin-sarah">
                                    
                                </a>
                                @endforeach
                                
                             
                            </div>
                            
                        </div>
                        <div class="col-12">
                            
                        <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/portfolio/kate-peter/peter-kate-13.webp')}}" alt="">
                                <a class="project-title h5 mb-0" href="{{asset('images/portfolio/kate-peter/peter-kate-13.webp')}}" data-lightbox="peter-kate">
                                 Pater &amp Kate 
                                </a>
                                @foreach(range(1,23) as $gallery_number)
                                <a class="invisible" href="{{asset('images/portfolio/kate-peter/peter-kate-'.$gallery_number.'.webp')}}" data-lightbox="peter-kate">
                                    
                                </a>
                                @endforeach
                                
                             
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-3">
                        <div class="col-12">
                         <div class="project-item">
                                <img class="img-fluid" src="{{asset('images/traditional/traditional_wed-3.webp')}}" alt="">
                                <a class="project-title h5 mb-0" href="{{asset('images/traditional/traditional_wed-1.webp')}}" data-lightbox="traditional">
                                Traditional Weddings
                                </a>       
                                @foreach(range(2,13) as $gallery_number)
                                <a class="invisible" href="{{asset('images/traditional/traditional_wed-'.$gallery_number.'.webp')}}" data-lightbox="traditional">
                                    
                                </a>
                                @endforeach                       
                             
                            </div>
                          
                        </div>
                        <div class="col-12">
                              
                            <div class="project-item">
                            <a class="mb-0" href="{{asset('images/gallery/gallery5.webp')}}" data-lightbox="others">
                                
                                <img class="img-fluid" src="{{asset('images/portfolio/others/others-1.webp')}}" alt="">
                                <a class="project-title h5 mb-0" href="{{asset('images/portfolio/others/others-1.webp')}}" data-lightbox="others">
                                 Others
                                </a>
                                @foreach(range(1,6) as $gallery_number)
                                <a class="invisible" href="{{asset('images/portfolio/others/others-'.$gallery_number.'.webp')}}" data-lightbox="others">
                                    
                                </a>
                                @endforeach

                                
                               
                            </div>
                            </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   

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