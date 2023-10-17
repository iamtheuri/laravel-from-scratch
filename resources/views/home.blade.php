<!DOCTYPE html>
<html lang="en">


@include('partials.header')
@include('partials.navbar')

<head>
        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.cs')}}s" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>


</head>

<body>
    


<div class="container-fluid wrapper">

    <div class="intro-content intro-img" id="intro-content">
        <div class="description ">
       
            <p class="fade-in"> &quot Bring your wedding to life &quot</p>

        </div>

    </div>

    <!-- latest work section -->
   

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-3 img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid bg-light p-3" src="{{asset('images/home/home_gallery11.webp')}}" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid bg-light p-3" src="{{asset('images/home/home_gallery8.webp')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <p class="text-primary text-uppercase mb-2">About Me</p>
                        <h1 class="display-6 mb-4 text-primary">A Creative And Professional Photographer</h1>
                        <p>Allow me to introduce myself—I'm Daisy Wanjiru. I am a Kenyan Nairobi Based wedding and lifestyle photographer with a passionate heart for capturing moments and love stories.I'm all about capturing the warmth of your special day. I don't just snap photos; I paint a picture of your love story with every click of my camera.</p>
                        <p>My passion lies in capturing those raw, heartfelt moments that make your wedding day unique. I'm on a mission to preserve the emotions that fill the air on this joyous occasion.</p>

                        <p>I'm not just your photographer; I'm your memory maker, your storyteller, and your friend. Let's embark on this journey together, and I'll ensure that your wedding day is captured with warmth and heart, ready to be relived for years to come.</p>
                        <div class="row g-2 mb-4 qualities">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-3"></i>Experienced
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-3"></i>Artistic
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-3"></i>Detail-Oriented
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-3"></i>Professional
                            </div>
                        </div>
                        <a class="btn btn-book py-3 px-5" href="/about">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <section class="latest-work  ">
    <div class="latest-work">
    <div class="container-xxl py-5 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">Our Latest Works</p>
                
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
</div>

    </section>

    <!-- What we do section -->
    <section>
        <div class="what-we-do container-fluid">
            <div class="intro-what-we fade-in">
                <div class="intro-label">
                    <h3 class="intro-photo text-primary"> Wedding Photography</h3>
                    <div class="inline">
                        <i class="fa-solid fa-star-of-life fa-xl" style="color: #796120;"></i>
                        <p> &nbsp What We Do &nbsp</p>
                        <i class="fa-solid fa-star-of-life fa-xl" style="color: #796120;"></i>
                    </div>
                </div>
            </div>
            <div class="what-wedo-grid  ">

                <div class="brief-card col text-center fade-in ">

                    <i class="fa-solid fa-star-of-life fa-xl" style="color: #796120;"></i>
                    <h3 class="wedding">Elopements</h3>

                    <p class="wedding-desc">
                        Ideal for couples seeking basic coverage. </p>
                    <p class="wedding-desc">
                        ideal for small, intimate ceremonies.</p>
                    <p class="wedding-desc">
                    Focuses on the couple's love and connection. </p>
                    <p class="wedding-desc">
                    Often in picturesque, remote locations.
                    </p>
                    <a href="/photography"><button class="btn explore-more" data-bs-target="/">More Details</button></a>




                </div>
                <div class="brief-card col text-center fade-in ">

                    <i class="fa-solid fa-star-of-life fa-xl" style="color: #796120;"></i>
                    <h3 class="wedding">Full Weddinng Services</h3>

                    <p class="wedding-desc">
                        Extended coverage capturing more of your day. </p>
                    <p class="wedding-desc">
                    Includes pre-ceremony, ceremony, reception, and all key moments.</p>
                    <p class="wedding-desc">
                    Provides a complete visual narrative of the day. </p>
                    <p class="wedding-desc">
                        A complimentary engagement photo session. </p>
                        <a href="/photography"><button class="btn explore-more" data-bs-target="/">More
                                Details</button></a>




                </div>
                <div class="brief-card col text-center fade-in ">

                    <i class="fa-solid fa-star-of-life fa-xl" style="color: #796120;"></i>
                    <h3 class="wedding">Traditional Wedding </h3>

                    <p class="wedding-desc">
                    Emphasizes posed, formal shots</p>
                    <p class="wedding-desc">
                        A premium custom-designed photo album.</p>
                    <p class="wedding-desc">
                    Captures essential wedding moments, such as the ceremony and group portraits.</p>
                    <p class="wedding-desc">
                    A classic, timeless approach.
                    </p>
                    <a href="/photography"><button class="btn explore-more" data-bs-target="/">More Details</button></a>




                </div>
                <div class="brief-card col text-center fade-in ">

                    <i class="fa-solid fa-star-of-life fa-xl" style="color: #796120;"></i>
                    <h3 class="wedding">Engagements</h3>

                    <p class="wedding-desc">
                    Can be used for save-the-date cards and wedding announcements. </p>
                    <p class="wedding-desc">
                    A separate photoshoot before the wedding.</p>
                    <p class="wedding-desc">
                    Showcases the couple's love and excitement. </p>
                    <p class="wedding-desc">
                        A stunning canvas print of your favorite shot.
                    </p>
                    <a href="/photography"><button class="btn explore-more" data-bs-target="/">More Details</button></a>
                </div>
            </div>
    </section>
    <section class="advert fade-in">

        <div class="container-fluid container-advert advert-img intro-img">

            <div class="advert-description fade-in text-center">

                <h3 class="text-primary">Full Wedding photography Services</h3>
                <h2>Are you ready to make your wedding come to life?</h2>
                <p style="text-align:center">Don't miss the chance to relive the joy and romance of your wedding day
                    through stunning photographs. </p>
                <p>Let us turn your love story into a visual masterpiece that you'll cherish for a lifetime. </p>
                <p> Contact us today to book your wedding photography session and secure your date.</p>

                &nbsp
                <a href="/contact"> <button class="btn explore-more">Contact Us</button></a>
            </div>


        </div>

    </section>

    <section class="rating-section"></section>
    <div class="container-fluid customer-rating">
        <div class="brief-card col customer-card">
            <h2 class="display-2 text-primary mb-3" data-toggle="counter-up">100</h2>
            <h2 class="mb-3 text-primary">+</h2>
            <p>Happy Customers</p>

        </div>
        <div class="brief-card col customer-card">
            <h2 class="display-2 text-primary mb-3" data-toggle="counter-up" >1000</h2>
            <h2 class="mb-3 text-primary">+</h2>
            <p>Photos Taken</p>

        </div>
        <div class="brief-card col customer-card">
            <h2 class="display-2 text-primary mb-3" data-toggle="counter-up">50</h2>
            <h2 class="mb-3 text-primary">+</h2>
            <p>Weddings Covered</p>

        </div>
        <div class="brief-card col customer-card wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-2 text-primary mb-3" data-toggle="counter-up">10</h1>
            <h2 class="mb-3 text-primary">+</h2>
            <p>Professional Team</p>

        </div>
        <div class="brief-card col customer-card">
            <h2 class="display-2 text-primary mb-3" data-toggle="counter-up">5</h2>
            <h2 class="mb-3 text-primary">+</h2>
            <p>Years of Experience</p>

        </div>

    </div>
</div>


@include('partials.footer')

</html>






