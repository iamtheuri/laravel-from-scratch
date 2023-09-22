<!DOCTYPE html>
<html lang="en">
@include('partials.header')
@include('partials.navbar')


    <div class="container-fluid wrapper">

    

<section class="image-Gallery container">
    <div class="container-fluid">
        <h2 class="text-center">Wedding Image Gallery</h2>
        <p class="welcome-text">Welcome to our captivating gallery of visual stories. Explore the artistry, emotion, and beauty captured through our lens. Each image is a moment frozen in time, a testament to the power of photography. We invite you to immerse yourself in our world of images, where every frame tells a unique story</p>
  
<div class="gallery container  gallery-container">


@foreach (range(1, 12) as $galleryNumber)
<div class="gallery-image">
    <img
        src="{{ asset('images/home/home_gallery'.$galleryNumber.'.webp') }}"
        alt="Gallery Image {{ $galleryNumber }}"
        class="gallery-image-clickable"
    >
</div>
@endforeach

<!-- The Modal -->

<div id="myModal" class="modal">

    <span class="close" onclick="closeModal()">&times;</span>
    <img id="modal-content" class="modal-content" src="">
    
</div>



</div>
</div>

</section>

</div>
@include('partials.footer')

<!-- <script src="{{asset('js/fadein.js')}}"></script> -->

</html>