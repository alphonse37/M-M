<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image" href="./images/LOGODESIGN6-01-2.png">
    <title>M&M Painting LLC</title>

    <!-- BULMA CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css">
    <link rel="stylesheet" href="css/navbar-footer.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/index.css">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/7eaf41582e.js"></script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- <script src="js/slider.js"></script> -->
    <script src="js/script.js"></script>
    <script src="https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js"></script>
    

</head>
<body>
    <header>
        <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
              <a href="index.php">
                <img src="images/logo.png">
              </a>
          
              <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true" class="has-text-white"></span>
                <span aria-hidden="true" class="has-text-white"></span>
                <span aria-hidden="true" class="has-text-white"></span>
              </a>
            </div>
          
            <div id="navbarBasicExample" class="navbar-menu">
              <div class="navbar-end">
                <a class="navbar-item has-text-white" href="index.php"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a>
                <a class="navbar-item has-text-white" href="?p=services.php"><i class="fas fa-brush"></i>&nbsp;&nbsp;Our Services</a>
                <a class="navbar-item has-text-white" href="?p=contact.php"><i class="fas fa-mail-bulk"></i>&nbsp;&nbsp;Contact</a>
              </div>
            </div>
          </nav>
    </header>


    <!-- CONDITION PHP -->
    <?php
        if (isset($_GET['p'])) {
            include $_GET['p'];
        } else {
    ?>
    <main>  
    <div class="demo">
                <div id="lightSlider">
                        <img src="images/slider1.jpg" />
                   
                        <img src="images/slider2.jpg" />
                    
                        <img src="images/slider3.jpg" />
                </div>

                <div class="logo">
                <img src="images/logo.png" alt="">
            </div>
            </div>     
        <!-- <section class="cd-slider is-fullwidth">
            <ul>
                <li>
                    <div class="content">
                        <img src="images/slider1.jpg" alt="" width="100%">
                        
                    </div>
                </li>
                <li>
                    <div class="content">
                        <img src="images/slider2.jpg" alt="" width="100%">
                            
                    </div>
                </li>
                
                <li>
                    <div class="content">
                        <img src="images/slider3.jpg" alt="" width="100%">
                        
                    </div>
                </li>
            </ul>
            <nav class="nav">
            <div><a class="prev" href="#"></a></div>
            <div><a class="next" href="#"></a></div>
            </nav>
            
        </section> -->
           
        <div class="hero line">
            <div class="hero-body">
                <div class="container">
                    <br>
                    <h1 class="title-2 has-text-centered has-text-white">M&M Painting LLC, your best partner for painting duty.</h1>
                    <br>
                </div>
            </div>
        </div>

        <section class="hero">
            <div class="hero-body">
                <div class="columns">
                    <div class="column is-one-thirds-desktop color-wheel has-text-centered">
                        <img src="images/color-wheel.png" alt="" width="60%">
                    </div>
                    <div class="column is-two-thirds-desktop information">
                        <p class="has-text-centered">M&M Painting LLC is a company dedicated to providing the best painting services in Minnesota. Built on 12 years of experience, M&M PAINTING LLC is a licensed company that has established our business through commitment to customer satisfaction. Our professionals of the industry have the knowledge, experience and expertise for every situation. We want you to have confidence knowing that we use the highest quality products and have a large range of colors for any preference and surface. You can count on us for all your painting needs. Contact us for a free estimate.</p>
                    </div>
                </div>
                
                
            </div>
        </section>

        <section class="hero services-info">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title-1 has-text-white has-text-centered">
                        Our Services
                    </h1>
                    <br>
                    <br>
                    <div class="columns is-multiline is-centered">
                        <div class="column is-narrow is-one-third-tablet is-one-quarter-desktop">
                            <div class="icon-service has-text-centered">
                                <i class="fas fa-home"></i>
                            </div>
                            <br>
                            <div class="text-service has-text-white has-text-centered">
                                 Interior painting
                            </div>
                        </div>

                        <div class="column is-one-third-tablet is-one-quarter-desktop">
                            <div class="icon-service has-text-centered">
                               <i class="fas fa-door-open"></i> 
                            </div>
                            <br>
                            <div class="text-service has-text-white has-text-centered">
                                Exterior painting
                            </div>
                        </div>

                        <div class="column is-one-third-tablet is-one-quarter-desktop">
                            <div class="icon-service has-text-centered">
                                <i class="fas fa-hotel"></i>
                            </div>
                            <br>
                            <div class="text-service has-text-centered has-text-white">
                              Commercial Painting  
                            </div>
                        </div>

                        <div class="column is-one-third-tablet is-one-quarter-desktop">
                            <div class="icon-service has-text-centered">
                                <i class="fas fa-city"></i>
                            </div>
                            <br>
                            <div class="text-service has-text-centered has-text-white">
                               Residential Painting 
                            </div>
                        </div>

                        <div class="column is-one-third-tablet is-one-quarter-desktop">
                            <div class="icon-service has-text-centered">
                                <i class="far fa-building"></i>
                            </div>
                            <br>
                            <div class="text-service has-text-centered has-text-white">
                                Office painting
                            </div>
                        </div>

                        <div class="column is-one-third-tablet is-one-quarter-desktop">
                            <div class="icon-service has-text-centered">
                                <i class="fas fa-brush"></i>
                            </div>
                            <br>
                            <div class="text-service has-text-centered has-text-white">
                                Wallpaper removal
                            </div>
                        </div>

                        <div class="column is-one-third-tablet is-one-quarter-desktop">
                            <div class="icon-service has-text-centered">
                                <i class="fas fa-fill-drip"></i>
                            </div>
                            <br>
                            <div class="text-service has-text-centered has-text-white">
                                Decks Painting 
                            </div>
                        </div>

                        <div class="column is-one-third-tablet is-one-quarter-desktop">
                            <div class="icon-service has-text-centered">
                               <i class="fas fa-paint-brush"></i> 
                            </div>
                            <br>
                            <div class="text-service has-text-centered has-text-white">
                                Fences Painting
                            </div>
                        </div>

                        <div class="column is-one-third-tablet is-one-quarter-desktop">
                            <div class="icon-service has-text-centered">
                                <i class="fas fa-brush"></i>
                            </div>
                            <br>
                            <div class="text-service has-text-centered has-text-white">
                                Paint Primers
                            </div>
                        </div>

                        <div class="column is-one-third-tablet is-one-quarter-desktop has-text-centered">
                            <div class="icon-service has-text-centered ">
                                <i class="fas fa-paint-roller"></i>
                            </div>
                            <br>
                            <div class="text-service has-text-centered has-text-white">
                                Drywalls Painting 
                            </div>
                        </div>

                        <div class="column is-one-third-tablet is-one-quarter-desktop">
                            <div class="icon-service has-text-centered">
                               <i class="fas fa-fill"></i> 
                            </div>
                            <br>
                            <div class="text-service has-text-centered has-text-white">
                                Enamel Finishing
                            </div>
                        </div>
                        
                        <div class="column is-one-third-tablet is-one-quarter-desktop">
                            <div class="icon-service has-text-centered">
                                <i class="far fa-bookmark"></i>
                            </div>
                            <br>
                            <div class="text-service has-text-centered has-text-white">
                               Extra Painting project
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- CLOSE THE ELSE CONDITION -->
    <?php
    }
    ?>
    
    <footer class="footer has-text-white">
        <div class=" has-text-centered">
            <p class="subtitle has-text-white">
                Contact Us
            </p>
            <div class="columns is-multiline">
                <div class="column is-one-third">
                    <i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;(651) 443-6926
                </div>

                <div class="column is-one-third">
                    <i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;(651) 417-5008
                </div>

                <div class="column is-one-third">
                    <i class="far fa-envelope"></i>&nbsp;&nbsp;contact@mmpaintingmn.com 
                </div>
            </div>

            <div class="is-half is-centered">
                Copyright 2019 M&M Painting LLC
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
    
            // Check for click events on the navbar burger icon
            $(".navbar-burger").click(function() {

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                $(".navbar-burger").toggleClass("is-active");
                $(".navbar-menu").toggleClass("is-active");
            });

            $('#lightSlider').lightSlider({
                gallery: true,
                item: 1,
                loop:true,
                slideMargin: 0,
                thumbItem: 9,
                auto: true,
            
            });

        });
    </script>
</body>
</html>