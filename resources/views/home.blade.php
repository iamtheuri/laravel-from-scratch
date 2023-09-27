<!DOCTYPE html>
<html lang="en">


@include('partials.header')
@include('partials.navbar')
<div class="container-fluid wrapper">

    <div class="intro-content intro-img" id="intro-content">
        <div class="description ">
            <a class="special-p fade-in">Photography Is the Art of Capturing Memories</a>

            <p class="fade-in"> &quot Bring your wedding to life &quot</p>

        </div>

    </div>

    <!-- latest work section -->
    <section class="latest-work  ">
        <div class="latest-work">

            <p class="first-label fade-in text-md">Photo</p>
            <div class="inline fade-in">

                <i class="fa-solid fa-camera" style="color: #ab7865;"></i>

                <p> &nbsp Our Latest work &nbsp</p>
                <i class="fa-solid fa-camera" style="color: #ab7865;"></i>
            </div>
            <div class="gallery  container">


                @foreach (range(1, 12) as $galleryNumber)
                <div class="gallery-image fade-in">
                    <a href="/photography">


                    <img src="" alt="" srcset="{{ asset('images/home/home_gallery'.$galleryNumber.'.webp') }}">
                    </a>



                </div>
                @endforeach

            </div>





            <div class="button">

                <a href="/photography"> <button class="btn explore-more">Explore more Button</button></a>
            </div>

        </div>


    </section>

    <!-- about me section -->
    <section class="about-me-section">

        <div class="about-me container-fluid fade-in">
            <div class="crown-top">
                <img src="{{ asset('images/crown.png') }}" alt="" srcset="">

            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 d-flex align-items-center justify-content-center fade-in">
                    <div class="avatar-container">
                        <img src="{{ asset('images/wedding.jpg') }}" class="img-fluid avatar" width="100%" alt=""
                            srcset="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-9 align-items-center justify-content-center text-left fade-in">
                    <h2 class="first-header">About Me</h2>
                    <p class="about-me">
                        
                        Allow me to introduce myself—I'm Daisy Wanjiru. I am a Kenyan Nairobi Based wedding and lifestyle photographer with a passionate heart for capturing moments and love stories.I'm all about capturing the warmth of your special day. I don't just snap photos; I paint a picture of your love story with every click of my camera.
My passion lies in capturing those raw, heartfelt moments that make your wedding day unique. I have an artist's eye for detail, and I'm on a mission to preserve the emotions that fill the air on this joyous occasion.
  My goal is to blend seamlessly into the background, ensuring that your smiles, your tears of happiness, and those whispered promises are all beautifully documented.

I pride myself on creating a comfortable and relaxed atmosphere. Even the most camera-shy couples find themselves at ease in my presence. I have all the patience in the world, so there's no rush—I'm here to capture your love story as it naturally unfolds.


I'm not just your photographer; I'm your memory maker, your storyteller, and your friend. Let's embark on this journey together, and I'll ensure that your wedding day is captured with warmth and heart, ready to be relived for years to come.
                    </p>
                    <div class="socials-about">
                        <a class="" href=""><i class="fa-brands fa-square-facebook  fa-lg"
                                style="color: #9f654f;"></i></a>
                        <a class=""><i class="fa-brands fa-square-instagram  fa-lg" style="color: #9f654f;"></i></a>
                        <a class=""><i class="fa-brands fa-linkedin  fa-lg" style="color: #9f654f;"></i></a>
                        <a class=""><i class="fa-brands fa-twitter  fa-lg" style="color: #9f654f;"></i></a>



                    </div>
                </div>

            </div>
            <div class="crown-bottom">
                <img src="{{ asset('images/crown.png') }}" alt="" srcset="">
            </div>
        </div>







    </section>


    <!-- What we do section -->
    <section>
        <div class="what-we-do container-fluid">
            <div class="intro-what-we fade-in">
                <div class="intro-label">
                    <h3 class="intro-photo">Photography</h3>
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
                    <h3 class="wedding">Bronze Package</h3>

                    <p class="wedding-desc">
                        Ideal for couples seeking basic coverage. </p>
                    <p class="wedding-desc">
                        Coverage of the ceremony and select key moments.</p>
                    <p class="wedding-desc">
                        Beautifully edited high-resolution images. </p>
                    <p class="wedding-desc">
                        Perfect for intimate weddings and elopements
                    </p>
                    <a href="/photography"><button class="btn explore-more" data-bs-target="/">More Details</button></a>




                </div>
                <div class="brief-card col text-center fade-in ">

                    <i class="fa-solid fa-star-of-life fa-xl" style="color: #796120;"></i>
                    <h3 class="wedding">Silver Package</h3>

                    <p class="wedding-desc">
                        Extended coverage capturing more of your day.. </p>
                    <p class="wedding-desc">
                        Pre-ceremony and reception coverage.</p>
                    <p class="wedding-desc">
                        Enhanced post-processing for stunning images </p>
                    <p class="wedding-desc">
                        A complimentary engagement photo session.
                        <a href="/photography"><button class="btn explore-more" data-bs-target="/">More
                                Details</button></a>




                </div>
                <div class="brief-card col text-center fade-in ">

                    <i class="fa-solid fa-star-of-life fa-xl" style="color: #796120;"></i>
                    <h3 class="wedding">Gold Package</h3>

                    <p class="wedding-desc">
                        Comprehensive coverage from preparations to the grand exit.. </p>
                    <p class="wedding-desc">
                        A premium custom-designed photo album.</p>
                    <p class="wedding-desc">
                        Full day coverage ensures no moment is missed </p>
                    <p class="wedding-desc">
                        Engagement session with prints included.
                    </p>
                    <a href="/photography"><button class="btn explore-more" data-bs-target="/">More Details</button></a>




                </div>
                <div class="brief-card col text-center fade-in ">

                    <i class="fa-solid fa-star-of-life fa-xl" style="color: #796120;"></i>
                    <h3 class="wedding">Platinum Package</h3>

                    <p class="wedding-desc">
                        The ultimate wedding photography experience </p>
                    <p class="wedding-desc">
                        CDrone photography for breathtaking aerial shots..</p>
                    <p class="wedding-desc">
                        Priority booking and personal consultation.. </p>
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

                <h3>Full Wedding photography Services</h3>
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
            <h2>100</h2>
            <h2>+</h2>
            <p>Happy Customers</p>

        </div>
        <div class="brief-card col customer-card">
            <h2>1000</h2>
            <h2>+</h2>
            <p>Photos Taken</p>

        </div>
        <div class="brief-card col customer-card">
            <h2>50</h2>
            <h2>+</h2>
            <p>Weddings Covered</p>

        </div>
        <div class="brief-card col customer-card">
            <h2>10</h2>
            <h2>+</h2>
            <p>Professional Team</p>

        </div>
        <div class="brief-card col customer-card">
            <h2>5</h2>
            <h2>+</h2>
            <p>Years of Experience</p>

        </div>

    </div>
</div>


@include('partials.footer')

</html>