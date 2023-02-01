<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Project">
        <meta name="author" content="Ballares-Ayonar">

        <title>@yield('title')</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet">
                        
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/bootstrap-icons.css">

        <link rel="stylesheet" href="css/owl.carousel.min.css">
        
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <link href="css/templatemo-pod-talk.css" rel="stylesheet">

        <link rel="icon" href="images/icons/favicon (1).ico" type="image/x-icon">
        
<!--

TemplateMo 584 Pod Talk

https://templatemo.com/tm-584-pod-talk

-->
    </head>
    
    <body>

        <main>


        @yield('content')



        </main>


        <footer class="site-footer">   

            <div class="container pt-5">
                <div class="row align-items-center">

                    <div class="col-lg-2 col-md-3 col-12">
                        <a class="navbar-brand" href="#home">
                            <img src="images/icons/navbar-brand-brewcoffee.png" class="logo-image img-fluid" alt="templatemo pod talk">
                        </a>
                    </div>

                    <div class="col-lg-7 col-md-9 col-12">
                        <ul class="site-footer-links">
    
                        <p class="copyright-text mb-0"> Copyright©2023 Brew Break Coffee|Butuan City Branch</p>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-12">
                        <h6 class="site-footer-title mb-3">Social</h6>

                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="https://web.facebook.com/BrewBreakCoffee" class="social-icon-link bi-facebook"></a>
                            </li>

                            {{-- <li class="social-icon-item">
                                <a href="https://www.instagram.com/lemmellicious/" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://twitter.com/home" class="social-icon-link bi-twitter"></a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>