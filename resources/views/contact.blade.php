<!DOCTYPE html>

@include('partials.header')
@include('partials.navbar')



    <div class="container-fluid wrapper"> 
        


        <section class="contact">

            <div class="content">

                <h1>Connect With Us</h1>

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
                    <form action="{{ route('contact.submit') }}" method="POST" id="contact-form">
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
                            <input type="submit" id="submit-button">
                        </div>

                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close" id="close-modal" style="font-weight: 900; font-size: 1.5rem;">&times;</span>
                                <p style="color: black; font-weight: 900; font-size: 1.5rem; padding: 1.5rem;">Thank you for contacting us, we'll get in touch with you asap!</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        
    </div>

<script>
    // Get modal and button elements
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("submit-button");
    var closeBtn = document.getElementById("close-modal");
    var contactForm = document.getElementById("contact-form");

    // Open the modal when the form is submitted with valid data
    contactForm.onsubmit = function (event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Check if the form is valid
        if (contactForm.checkValidity()) {
            modal.style.display = "block"; // Show the modal

            // Submit the form after a short delay (to allow the modal to appear)
            setTimeout(function () {
                contactForm.submit();
            }, 1000); // Adjust the delay time as needed
        }
    }

    // Close the modal when the close button is clicked
    closeBtn.onclick = function () {
        modal.style.display = "none";
    }

    // Close the modal if the user clicks outside of it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

@include('partials.footer')

</html>