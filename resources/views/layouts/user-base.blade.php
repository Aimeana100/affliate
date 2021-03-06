<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="MUHAHE Template">
        <meta name="keywords" content="MUHAHE, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Muhahe Affiliate || Earn money infinetely</title>
        <!-- Css Styles -->
        <link rel="stylesheet" href="{{asset('assets/front/css/jquery-ui.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/front/css/booststrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/font-awesome.min.css')}}">
        <link rel="icon" href="{{asset('assets/front/img/log1.png')}}">
        @livewireStyles
    </head>

    <body>
        <!-- Offcanvas Menu Section Begin -->
        <div class="offcanvas-menu-overlay"></div>
        <div class="canvas-open">
            <i class="icon_menu" style="font-size: 55px"></i>
        </div>
        <div class="offcanvas-menu-wrapper">
            <div class="canvas-close">
                <i class="icon_close"></i>
            </div>
            <div class="header-configure-area">
                <div class="language-option">
                    <img src="{{asset('assets/front/img/flag.jpg')}}" alt="">
                    <span>ENG <i class="fa fa-angle-down"></i></span>
                    <div class="flag-dropdown">
                        <ul>
                            <li><a href="#">Kiny</a></li>
                            <li><a href="#">French</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="mainmenu mobile-menu">
                <ul>
                    <li ><a  href="{{route('front')}}" class="bttn">Home</a></li>
                    <li><a  href="{{route('front.about')}}" class="bttn">About Us</a></li>
                    <li><a  href="{{route('login')}}" class="bttn">Login</a></li>
                    <li><a href="{{route('register')}}" class="bttn">Register</a></li>
                    <li><a  href="{{route('front.contact')}}" class="bttn">Contact</a></li>
                </ul>
            </nav>

            <div id="mobile-menu-wrap"></div>
            <div class="footer-mobile container-fluid" >

                <div class="top-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-tripadvisor"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div><br><br><br><br>
                <ul class="top-widget">
                    <li style="color: white"><i class="fa fa-phone"></i> +(250) 783524980</li>
                    <li style="color: white"><i class="fa fa-envelope"></i>affiliate@muhahe.com</li>
                </ul>
            </div>
        </div>
        <!-- Offcanvas Menu Section End -->

        <!-- Header Section Begin -->
        <header class="header-section">
            <div class="top-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="tn-left">
                                <li><i class="fa fa-phone"></i>+(250) 783524980</li>
                                <li><i class="fa fa-envelope"></i>affiliate@muhahe.com</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="tn-right">
                                <div class="top-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>

                                <div class="language-option">
                                    <img src="{{asset('assets/front/img/flag.jpg')}}" alt="">
                                    <span>ENG <i class="fa fa-angle-down"></i></span>
                                    <div class="flag-dropdown">
                                        <ul>
                                            <li><a href="#">Kiny</a></li>
                                            <li><a href="#">French</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="{{route('front')}}">
                                    <img src="{{asset('assets/front/img/log2.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="nav-menu">
                                <nav class="mainmenu">
                                    <ul id="btns">
                                        <li ><a  href="{{route('front')}}" class="bttn">Home</a></li>
                                        <li><a  href="{{route('front.about')}}" class="bttn">About Us</a></li>
                                        <li><a  href="{{route('login')}}" class="bttn">Login</a></li>
                                        <li><a href="{{route('register')}}" class="bttn">Register</a></li>
                                        <li><a  href="{{route('front.contact')}}" class="bttn">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
{{--
        <script>
            // Get the container element
            var btnContainer = document.getElementById("btns");

            // Get all buttons with class="btn" inside the container
            var btns = btnContainer.getElementsByClassName("btn");

            // Loop through the buttons and add the active class to the current/clicked button
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
        </script> --}}


        {{$slot}}

          <!-- Footer Section Begin -->
          <footer class="footer-section">
            <div class="container">
                <div class="footer-text">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="ft-about">
                                <div class="logo">
                                    <a href="{{route('front')}}">
                                        <img src="{{asset('assets/front/img/log2.png')}}" alt="">
                                    </a>
                                </div>
                                <p>We inspire and reach millions of travelers<br/> across 90 local websites</p>
                                <div class="fa-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-1">
                            <div class="ft-contact">
                                <h6>Contact Us</h6>
                                <ul>
                                    <li>+(250) 783524980</li>
                                    <li>info.affiliate@muhahe.com</li>
                                    <li>KN 578 Cyahafi Street Apt. 356, Kigali Nyarugenge Rwanda</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-1">
                            <div class="ft-newslatter">
                                <h6>New latest</h6>
                                <p>Get the latest updates and offers.</p>
                                <form action="#" class="fn-form">
                                    <input type="text" placeholder="Email">
                                    <button type="submit"><i class="fa fa-send"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-option">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="co-text">
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Muhahe LTD <i class="fa fa-heart" aria-hidden="true"></i> All rights reserved</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Js Plugins -->
        <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/front/js/main.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{asset('assets/front/js/booststrap.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.animateNumber.min.js')}}"></script>
        <script src="{{asset('assets/front/js/aos.js')}}"></script>
        <script src="{{asset('assets/front/js/mainj.js')}}"></script>
        <script src="{{asset('assets/front/js/jquerry.min.js')}}"></script>
        <script src="{{asset('assets/front/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/front/js/mainn.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        @livewireScripts
    </body>
</html>
