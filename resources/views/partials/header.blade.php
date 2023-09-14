<head>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />

    <style>
        /* Navigation Bar */
       
        .navbar-bg {
            position: absolute;
            top: 0;

            background-color: black;
        }

        .nav-link
         {
            color: white;
            font-size:1.2rem;
            

        }
        

        
        .nav-item {
            position: relative;
        }

        .nav-link::after {
            content: '';
            border-radius: 5px;
            position: absolute;
            bottom: -6px;
            left: 0;
            transform: scaleX(0);
            width: 100%;
            height: 3px;
            background:  goldenrod;
            transition: transform 0.5s;
        }

        .nav-item:hover .nav-link,
        .navbar-brand:hover {
            color: goldenrod;
        }

        .nav-item:hover .nav-link::after {
            transform-origin: center;
            transform: scaleX(-1);
        }


        .navbar-brand {
            font-size: 2rem;
            font-weight: 800;
            color: aliceblue;
        }

        .navbar-book {
            padding: 1rem 0rem 1rem 0rem;
            cursor: pointer;
        }
        .btn-book {
            background-color:#9f654f;
            color: white;
        }
            .btn-book:hover{
            background-color:#ab7865;


            }
        .btn-book a{
            text-decoration:none;
            color:white;
            border:white;
        }
        .btn-back:hover{
            background-color:#9f654f;
            
        }





        /* Body */
        body {
            
            margin: 0;
            background: grey;
            font-family: "Euclid Circular A", "Poppins";
            color: #f7f7f7;
        }
        html,
        body {
            height: 100%;
        }

        html {
            height: 100%;
        }


        body {
            margin: 0;
            padding: 0;
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        .container.wrapper{
            padding:30px;
            top:70px;
            min-height:100%;
            position: relative;

        }


        /* footer */

        footer {
            position: relative;           
            
            width: 100%;
            bottom: 0%;
            background-color: #000;  /* Background color */
            color: #fff;  /* Adjust the text color as needed */
            padding: 20px 0;
            text-align: center;
        }
        .footer-row{
            display: flex;
            justify-content: center; 
            align-items: center; 

        }

        
    </style>
</head>