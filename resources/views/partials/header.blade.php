<head>
    <link
        rel="stylesheet"
        href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    />
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet"
    />
    
    <link rel="stylesheet" href="{{ asset('bryce.css') }}">
<script src="{{ asset('js/fadein.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
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
</script>

    
  
   

    
</head>

