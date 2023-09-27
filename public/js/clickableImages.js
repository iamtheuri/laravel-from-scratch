
var currentSlide = 0;
var totalSlides = 12;
var startX;
var startY;
var isTransitioning = false;

const clickableImages = document.querySelectorAll(
    ".gallery-image-clickable"
);
function openModal(galleryNumber) {
    if (isTransitioning) return;

    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("modal-content");


    modal.style.display = "block";
    modal.style.display = "flex";

    modalImg.style.opacity = "0";
    setTimeout(function () {
        modalImg.src = "../images/home/home_gallery" + galleryNumber + ".webp";
        
        // Fade in the new image after it's loaded (you may need to adjust the timeout duration)
        setTimeout(function () {
            modalImg.style.opacity = "1";
        }, 100); // Adjust the duration if needed
        
        currentSlide = galleryNumber - 1; // Set the current slide index
    }, 100);

    modalImg.src = "../images/home/home_gallery" + galleryNumber + ".webp";
}
clickableImages.forEach((image, index) => {
    const windowWidth = window.innerWidth;
  
        image.addEventListener("click", () => openModal(index + 1));
    
});

function prevSlide() {
    showSlide(currentSlide - 1);
}
 
function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}
function showSlide(slideIndex) {
    var modalImg = document.getElementById("modal-content");
    // Update the current slide index
    if (slideIndex < 0) {
        currentSlide = 0;
    } else if (slideIndex >= totalSlides) {
        currentSlide = totalSlides - 1;
    } else {
        currentSlide = slideIndex;
    }
    modalImg.style.opacity = "0";
    
   

    modalImg.src = "../images/home/home_gallery" + (currentSlide + 1) + ".webp";
    setTimeout(function () {
        modalImg.src = "../images/home/home_gallery" + (currentSlide + 1) + ".webp";
        
        // Fade in the new image after it's loaded (you may need to adjust the timeout duration)
        setTimeout(function () {
            modalImg.style.opacity = "1";
        }, 300); // Adjust the duration if needed
    }, 300); 
}

  



function nextSlide() {
    showSlide(currentSlide + 1);
    var modalImg = document.getElementById("modal-content");
  
    if (slideIndex < 0) {
        currentSlide = 0;
    } else if (slideIndex >= totalSlides) {
        currentSlide = totalSlides - 1;
    } else {
        currentSlide = slideIndex;
    }

    modalImg.src = "../images/home/home_gallery" + (currentSlide + 1) + ".webp";
}

var modalContent = document.getElementById("modal-content");

modalContent.addEventListener("touchstart", touchStart, false);
modalContent.addEventListener("touchmove", touchMove, false);

function touchStart(event) {
    startX = event.touches[0].clientX;
    startY = event.touches[0].clientY;
}

function touchMove(event) {
    var endX = event.touches[0].clientX;
    var endY = event.touches[0].clientY;
    var deltaX = startX - endX;
    var deltaY = startY-endY;

    if (deltaX > 50) {
        // Swipe right, show next slide
        nextSlide();
    } else if (deltaX < -50) {
        // Swipe left, show previous slide
        prevSlide();
    } 
}

