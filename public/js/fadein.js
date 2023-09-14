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

