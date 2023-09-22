window.onload = function() {
    // Get a reference to the element you want to scroll to (by its ID or other means)
    var targetElement = document.getElementById('intro-content'); // Replace with your element's ID

    if (targetElement) {
        // Scroll to the target element
        targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start', 
        });
    }
}


$(document).ready(function() {
    $(window).scroll(function() {
        $('.fade-in').each(function() {
            var topOfElement = $(this).offset().top;
            var bottomOfElement = topOfElement + $(this).outerHeight();
            var bottomOfScreen = $(window).scrollTop() + $(window).height();

            if (bottomOfScreen > topOfElement) {
                $(this).addClass('fade-in-visible');
            } else {
                $(this).removeClass('fade-in-visible');
            }
        });
    });
});


// Image Modal Script
// Get all clickable images and add click event listeners
const clickableImages = document.querySelectorAll('.gallery-image-clickable');
clickableImages.forEach((image, index) => {
    const windowWidth = window.innerWidth;
    if(windowWidth>=500){

    image.addEventListener('click', () => openModal(index + 1));
    }
});



function openModal(galleryNumber) {
  
      var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("modal-content");

    modal.style.display = "block";
    modal.style.display="flex";
    modal.style.backgroundColor = "rgba(0, 0, 0, 0.7)";
    modalImg.src = "../images/home/home_gallery"+galleryNumber+".webp";
   
}



function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}

