<!DOCTYPE html>

@include('partials.header')
@include('partials.navbar')

<link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">



    <div class="container-fluid wrapper"> 
        

        <section class="contact">

            <div class="content">

                <h1 style="color:white">Connect With Us</h1>
                <p>We would love to respond to your queries</p>
                <p>Feel free to get in touch with Us</p>
                
            </div>

            <div class="contact-container">
                <div class="contact-info">
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Opposite KCB Building, Along Magadi Road, Ongata Rongai, 00511, Kajiado, Kenya</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+254 712 345 678</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>queendeephotography@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                        
                    {{-- <div class="mail-to"> <a href="mailto:example@gmail.com?subject=Contact%20Form%20Submission&body=Name:%20%0AEmail:%20%0AMessage:%20" style="text-decoration: none;"> Contact Us </a> </div> --}}

                    <form action="{{ route('contact.submit') }}" method="POST">

                        @csrf


                        <h2>Send Us A Message</h2>
                        <div class="input-box">
                            <input type="text" name="name" required>
                            <span>Full Name</span>
                        </div>
                        <div class="input-box">
                            <input type="email" name="email" required>
                            <span>Email</span>
                        </div>
                        <div class="input-box">
                            <textarea name="content" required></textarea>
                            <span>Talk To Us...</span>
                        </div>
                        <div class="input-box">
                            <input type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        
    {{-- </div> --}}


@include('partials.footer')

</html>