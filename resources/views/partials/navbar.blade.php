<!-- Libraries Stylesheet -->
<link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
<link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{asset('css/style.css')}}" rel="stylesheet">

<style>
    @media (max-width: 992px) {
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg' fill='white'%3E%3Cpath stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
    }
</style>



<nav class="navbar navbar-expand-lg navbar-collapse navbar-expand-md px-5 navbar-black bg-black fixed-top navbar-boxshadow">
    <a class="navbar-brand" href="#" 
        style="padding-left: 2rem;"
    >
       <img src="{{asset('images/quuenlogo.png')}}" width="200px" height="auto" class="logo" alt="">
    </a>
    <button 
        class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-auto justify-content-end" id="navbarNav" 
        style="padding-right: 2rem;"
    >
        <ul class="navbar-nav mb-lg-0 ml-auto">
            <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/photography">Gallery</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/services">Services</a>
            </li>
        </ul>
        <div class="navbar-book ml-auto">
            <button class="btn btn-book" type="submit">
            <a href="/contact">Book A Session</a>
            </button>
        </div>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
