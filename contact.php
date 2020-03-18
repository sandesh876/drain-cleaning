<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/main.css" type="text/css" rel="stylesheet">
    <link href="css/master.css" type="text/css" rel="stylesheet">
    <link href="scss/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   
    

    <title>Drain Clean</title>
</head>
<body >
   

        <!--loader start-->
            <div class="loader-wrapper" id="loader-wrapper">
             <!-- Loading square for squar.red network -->
             <span class="loader"><span class="loader-inner"></span></span>
             </div>
        <!--loader ends-->

    <!--Header-->
    <header class="top-header">
        <div class="upper-info">
            <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-4">
                    <a href="index.php">
                        <img src="img/logo.png">
                    </a>
                </div>

                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-8">
                    <div class="top-info-box text-left">
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <p>3922 5th St NW 
                                <span>Washington, DC 20011</span>
                                
                            </p>

                        </li>
                        &nbsp;
                        <li>
                            <i class="fa fa-phone"></i>
                            <p>
                                Call us
                                <span>(202) 549-0381</span>
                            </p>
                        </li>
                        &nbsp;
                        <li>
                            <i class="fa fa-envelope"></i>
                            <p>
                                     Mail Us
                                <span>plumjack49@hotmail.com</span>
                            </p>
                        </li>

                    </ul>
                </div>
                </div>

            </div>
        </div>
        </div>

        <nav class="navbar navbar-expand-md navbar-light sticky-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-Responsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-Responsive">
                    <ul class="navbar-nav ml auto">
                        <li class="nav-item ">
                            <a class="nav-link hvr-underline-reveal " href="index.php">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link hvr-underline-reveal " href="gallery.php">Our Gallery</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link hvr-underline-reveal " href="contact.php">Contact Us</a>
                        </li>

                    </ul>
                        
                </div>

            </div>
        </nav>


    </header>
    <!--end of header-->


    <div class="contact  mt-2">
        
            <h1>Get In Touch</h1>
        </div>
    
    <br>
    <br>

    
<div class="container">
    <form action="mail.php" method="post">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
           
                <div class="form-group"><input type="text" name="name" placeholder="Your Name" class="form-control" required></div>
                <div class="form-group"><input type="email" name="email" placeholder="Email" class="form-control" required></div>
                <div class="form-group"><input type="text" name="address" placeholder="Address" class="form-control" required></div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
            
            <textarea rows="5" class="form-control" placeholder=" Your Message" name="message"></textarea><br>
            <input type="submit" name ="submit" value="SEND MESSAGE" class="btn btn-success hvr-bounce-to-right">
            </div>
            
        </div>
    </form>
        <?php 
            //GETTING URL FROM WEBSITE
            $fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            //checking for specific string in the url

           
        ?>

    </div>


    <div class="container">
        <div class="contact-info">
            <h1>Contact Info</h1>

                    <ul class="mt-5">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <p>3922 5th St NW 
                                <span>Washington, DC 20011</span>
                                
                            </p>

                        </li>
                        
                        &nbsp;
                        <li>
                            <i class="fa fa-phone"></i>
                            <p>
                                Call us:
                                <span>(202) 549-0381</span>
                            </p>
                        </li>
                        
                        &nbsp;
                        <li>
                            <i class="fa fa-envelope"></i>
                            <p>
                                     Mail Us:
                                <span>plumjack49@hotmail.com</span>
                            </p>
                        </li>

                    </ul>
        </div>
    </div>

    <!--map section-->
    
        <div class="map-section mt-5 mb-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3104.557331323563!2d-77.02111034919885!3d38.
            91123707946823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b7f1af341b39%3A0xfb86bd7494a6c005!2s5th%20St%
            20NW%2C%20Washington%2C%20DC%2C%20USA!5e0!3m2!1sen!2snp!4v1583678417577!5m2!1sen!2snp" 
             frameborder="0" style="border:0;" allowfullscreen="true"></iframe>
        </div>
    




        <!--footer-->
<?php
 
 @include ('footer.php');

?>

       

<!--main js files-->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="assets/loader/js/loader.js"></script>


<!-- SCRIPTS -->
<script type="text/javascript" src="assets/isotope/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="assets/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/testimonial.js"></script>





</body>
</html>