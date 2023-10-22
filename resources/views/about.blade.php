<!DOCTYPE html>
<html lang="en">
@include('partials.header') 

<head>
    <meta charset="utf-8">
    <link rel="canonical" href="https://www.queendeeweddings.co.ke/about">


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

@include('partials.navbar')

<body>
    <div class="container-fluid wrapper">

 
        <!-- Header Start -->
        <div class="container-fluid hero-header bg-dark py-5 mb-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 mb-3 animated slideInDown  text-primary">About Us</h1>
                        <nav aria-label="breadcrumb animated slideInDown">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item text-primary"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 animated fadeIn">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid  p-3 w-100"  style="background: #0000; box-shadow: 0 0 10px #ab7865;" src="images/gallery/gallery24.webp" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid p-3 w-100"   style="background: #0000; box-shadow: 0 0 10px #ab7865;"src="images/gallery/gallery34.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <div class="about-content">
            
            <div class="col">

                <div class="row" style="padding: 2rem 5rem 0rem 3rem;">
                    <div class="col-sm-12 col-md-6 col-lg-9 align-items-center justify-content-center order-2 order-lg-1">
                        <h2 class="display-6 text-primary">Meet Daisy Wanjiru</h2>
                        <p class="about-us-p">
                            I'm Daisy Wanjiru, the lead photographer and founder of Queen-Dee-Weddings. Photography has been a
                            passion of mine for as long as I can remember. I love the way it allows us to freeze time and capture
                            those beautiful, fleeting moments that define our lives.
                        </p>
                        <h2 class="display-6 text-primary">Our Journey</h2>
                        <p class="about-us-p">
                            My journey into wedding photography began with a single click of the shutter at a dear friend's wedding.
                            The joy, the tears, the laughter—I was hooked. That moment sparked a lifelong love affair with capturing
                            love stories. Since then, I've had the incredible privilege of documenting the most important moments in
                            people's lives.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 d-flex align-items-center justify-content-center order-1 order-lg-2">

                        <div class="avatar-container">
                            <img src="{{ asset('images\daisy_about.webp') }}" class="img-fluid avatar" width="100%">
                        </div>
                    </div>
                </div>

                <div class="row" 
                    style="padding: 0rem 5rem 0rem 3rem; background: #1a1a1a;"
                >
                    <div class="col-sm-12 col-md-6 col-lg-3 d-flex align-items-center justify-content-center p-3">
                        <div class="oj-img">
                            <img src="{{ asset('images\gallery\gallery14.webp') }}" class="oj-img avatar-img" width="100%">
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-9 align-items-center justify-content-center">
                        <h2 class="display-6 text-primary">Our Approach</h2>
                        <p class="about-us-p">
                            At Queen-Dee-Weddings, our approach  is all about storytelling. We believe in
                            the power of authentic moments—the unscripted laughter, the stolen glances, the tender kisses. We're not
                            just photographers; we're visual storytellers who aim to create a timeless narrative of your love.
                        </p>
                        <h2 class="display-6 text-primary">Our Style</h2>
                        <p class="about-us-p">
                            Our photography style is a blend of photojournalistic and fine art. We adore the candid shots that
                            reveal the raw, unfiltered emotions of your wedding day. But we also take pride in crafting elegant,
                            artistic compositions that you'll cherish for a lifetime. Your wedding day is a work of art, and we're
                            here to make sure it's beautifully captured.
                        </p>
                    </div>
                </div>

                <div class="row" style="padding: 2rem 5rem 0rem 3rem;">

                    <div class="col d-flex align-items-center justify-content-center">
                        <div class="">
                            <h2 class="display-6 text-primary">Why Choose Us</h2>
                            <p class="">
                                <strong>Experience:</strong> With over 5 years of experience, we've photographed countless weddings,
                                each one unique and special in its own way. We know how to anticipate moments, adapt to different
                                environments, and tell your story with grace and artistry.
                            </p>
                            <p class="">
                                <strong>Personalized Service:</strong> We understand that every couple is unique, and your wedding day
                                is unlike any other. We take the time to get to know you, your vision, and your preferences. Your
                                wedding photography experience should be as special as your love story.
                            </p>
                            <p class="">
                                <strong>Passion for Perfection:</strong> We are passionate about what we do. We pour our hearts and
                                souls into every photo we capture and every album we create. Your wedding photos are a reflection of our
                                commitment to excellence.
                            </p>
                            <h2 class="display-6 text-primary">Let's Chat!</h2>

                            <p>
                                We can't wait to learn more about you and your love story. Whether you're planning an intimate elopement or
                                a grand celebration, we're here to make your photography dreams come true. Let's connect, have a cup of
                                coffee (or tea), and chat about how we can capture your day beautifully.
                            </p>
                            <p>
                                Ready to take the next step? <a href="/contact">Let's Talk</a>
                            </p>
                            <p>We can't wait to be a part of your journey! Thank you for considering Queen-Dee-Weddings for your
                                wedding photography needs. We're honored to be a part of your love story.
                            </p>
                            <a href="/services"><h2 class="display-6 text-primary" style="text-align: center;">Checkout Our Services!</h2></a>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
     </div> 
</div>
    
</body>

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

</html>
