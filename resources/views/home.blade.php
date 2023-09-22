<!DOCTYPE html>
<html lang="en">


@include('partials.header')
@include('partials.navbar')
<div class="container-fluid wrapper">
    <div class="intro-content" id="intro-content">
        <div class="intro-img">
            <img src="{{ asset('images/wedding.jpeg') }}" class="img-fluid" alt="" width="100%">
            <div class="description ">
                <a class="special-p fade-in">Photography Is the Art of Capturing Memories</a>

                <p class="fade-in"> &quot Bring your wedding to life &quot</p>
            </div>
        </div>

    </div>

    <!-- latest work section -->
    <section class="latest-work  ">
        <div class="latest-work">

            <p class="first-label fade-in text-md">Photo</p>
            <div class="inline fade-in">
                <i class="fa-solid fa-camera fa-bounce" style="color: #a4a019;"></i>

                <p> &nbsp Our Latest work &nbsp</p>
                <i class="fa-solid fa-camera fa-bounce" style="color: #a4a019;"></i>
            </div>
            <div class="gallery ">


                @for($i=0; $i<12 ;$i++) <div class="gallery-image fade-in">
                    <img src="{{ asset('images/wedding.jpeg') }}">
            </div>
            @endfor

        </div>



</div>

<div class="button">

    <button class="btn explore-more">Explore more Button</button>
</div>
</div>


</section>

<!-- about me section -->
<section class="about-me-section">

    <div class="about-me container-fluid fade-in">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 d-flex align-items-center justify-content-center fade-in">
                <div class="avatar-container">
                    <img src="{{ asset('images/wedding.jpeg') }}" class="img-fluid avatar" width="100%" alt=""
                        srcset="">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-9 align-items-center justify-content-center text-left fade-in">
                <h2 class="first-header">About Me</h2>
                <p class="about-me">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis delectus
                    laboriosam tempora similique dolorem omnis reiciendis quibusdam eaque fuga rem enim, dicta eos
                    aliquam inventore quae a distinctio pariatur quaerat.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam vel asperiores laboriosam ut neque
                    eos rem. Quibusdam dignissimos enim laboriosam a natus eveniet suscipit, voluptates officiis
                    temporibus exercitationem recusandae possimus.
                </p>
                <div class="socials-about">

                    <a class="" href=""><i class="fa-brands fa-square-facebook  fa-lg" style="color: #9f654f;"></i></a>
                    <a class=""><i class="fa-brands fa-square-instagram  fa-lg" style="color: #9f654f;"></i></a>
                    <a class=""><i class="fa-brands fa-linkedin  fa-lg" style="color: #9f654f;"></i></a>
                    <a class=""><i class="fa-brands fa-twitter  fa-lg" style="color: #9f654f;"></i></a>

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
                <h3 class="intro-photo">About Photography</h3>
                <div class="inline">
                    <i class="fa-solid fa-star-of-life fa-xl" style="color: #796120;"></i>
                    <p> &nbsp What We Do &nbsp</p>
                    <i class="fa-solid fa-star-of-life fa-xl" style="color: #796120;"></i>
                </div>
            </div>
        </div>
        <div class="what-wedo-grid container ">
            @for($j=0;$j<3;$j++) <div class="brief-card col text-center fade-in ">

                <i class="fa-solid fa-star-of-life fa-xl" style="color: #796120;"></i>
                <h3 class="wedding">Wedding photography</h3>
                <p class="wedding-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima ullam
                    praesentium dolorem ut error earum est, eveniet quasi officia quam iusto neque alias temporibus nisi
                    vel non repellat facilis totam.</p>
                <button class="btn explore-more">More Details</button>




        </div>

        @endfor

    </div>


    </div>
</section>
<section class="advert fade-in">

    <div class="container-fluid container-advert advert-img intro-img">


        <div class="advert-description fade-in">
            <h3>Full Wedding photography Services</h3>
            <h2>Are you ready to make your wedding come to life?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus pariatur praesentium
                asperiores animi commodi maxime iusto ut? Expedita vero, nisi omnis deleniti itaque aperiam
                error excepturi nesciunt amet sint assumenda.</p>

            &nbsp
            <a href="/contact"><button class="btn explore-more">Contact Us</button></a>

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
        <h2>100</h2>
        <h2>+</h2>
        <p>Happy Customers</p>

    </div>
    <div class="brief-card col customer-card">
        <h2>100</h2>
        <h2>+</h2>
        <p>Happy Customers</p>

    </div>
    <div class="brief-card col customer-card">
        <h2>100</h2>
        <h2>+</h2>
        <p>Happy Customers</p>

    </div>
    <div class="brief-card col customer-card">
        <h2>100</h2>
        <h2>+</h2>
        <p>Happy Customers</p>

    </div>

</div>

</div>

@include('partials.footer')

</html>