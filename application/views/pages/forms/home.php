<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Home
      <small>Diagnosa Kerusakan Hardware Komputer</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Home</li>
    </ol>
  </section>


    <!-- Main content -->
      <link href="//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
      <!-- //google-fonts -->
      <!-- Font-Awesome-Icons-CSS -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/industries/css/fontawesome-all.min.css">
      <!-- Template CSS Style link -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/industries/css/style-starter.css">


        <br>
        <!-- banner section -->
        <section id="home" class="w3l-banner py-5">
            <div class="banner-image">

            </div>
            <div class="banner-content">
                <div class="container pt-5 pb-md-4">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 pt-md-0 pt-4">
                            <h3 class="mb-sm-4 mb-3 titlef" style="color: #000;">Kami adalah <span class="d-block-res">S<span class="type-js"><span
                                            class="text-js">.P.K</span></span></span></h3>
                            <p>Sebuah website sistem pakar yang membantu anda mendiagnosa kerusakan pada hardware komputer anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //banner section -->

        <!-- banner bottom section -->
        <section class="about-section py-5">
            <div class="container py-lg-5 py-4">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="about-single p-3 d-flex justify-content-between">
                            <div class="about-icon mr-3">
                                <i class="fas fa-tools" aria-hidden="true"></i>
                            </div>
                            <div class="about-content">
                                <h5 class="mb-3">Who we are</h5>
                                <p>Pengembang website sistem pakar diagnosa kerusakan hardware komputer dengan metode forward chaining.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                    <div class="about-single p-3 d-flex justify-content-between">
                        <div class="about-icon mr-3">
                            <i class="fas fa-drafting-compass" aria-hidden="true"></i>
                        </div>
                        <div class="about-content">
                            <h5 class="mb-3">How we Work</h5>
                            <p>Kami bekerja sama dengan pakar, yaitu seorang servis komputer yang ahli mengenai kerusakan hardware komputer sebagai sumber data kami.</p>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="about-single p-3 d-flex justify-content-between">
                            <div class="about-icon mr-3">
                                <i class="fas fa-industry" aria-hidden="true"></i>
                            </div>
                            <div class="about-content">
                                <h5 class="mb-3">What we do</h5>
                                <p>Memberikan layanan diagnosa kerusakan hardware komputer untuk memudahkan pengguna dalam mendiagnosa kerusakan yang dialami oleh komputer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //banner bottom section -->

        <!-- footer -->
        <footer class="w3l-footer-29-main">
            <div class="footer-29-w3l py-5">
                <div class="container py-4">
                    <div class="row footer-top-29">
                        <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
                            <div class="footer-logo mb-3">
                                <a class="footer-brand-logo" href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>assets/img/spk_160.png" alt="logo"></a>
                            </div>
                            <p>Website sistem pakar untuk membantu mendiagnosis kerusakan hardware komputer.</p>
                            <!--div class="main-social-footer-29 mt-4">
                                <a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a>
                                <a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>
                            </div-->
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">
                            <ul>
                                <h6 class="footer-titlef-29">Usefull Links</h6>
                                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>tips">Tips Perawatan</a></li>
                                <li><a href="<?php echo base_url(); ?>tentang">Tentang</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //copyright -->
        <!-- //footer -->

        <!-- Js scripts -->
        <!-- move top -->

        <!--button onclick="topFunction()" id="movetop" titlef="Go to top">
            <span class="fas fa-level-up-alt" aria-hidden="true"></span>
        </button-->
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- //move top -->

        <!-- common jquery plugin -->
        <script src="<?php echo base_url(); ?>assets/industries/js/jquery-3.3.1.min.js"></script>
        <!-- //common jquery plugin -->

        <!-- banner image moving effect -->
        <script>
            var lFollowX = 0,
                lFollowY = 0,
                x = 0,
                y = 0,
                friction = 1 / 30;

            function animate() {
                x += (lFollowX - x) * friction;
                y += (lFollowY - y) * friction;

                translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

                $('.banner-image').css({
                    '-webit-transform': translate,
                    '-moz-transform': translate,
                    'transform': translate
                });

                window.requestAnimationFrame(animate);
            }

            $(window).on('mousemove click', function (e) {

                var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
                var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
                lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
                lFollowY = (10 * lMouseY) / 100;

            });

            animate();
        </script>
        <!-- //banner image moving effect -->

        <!-- counter for stats -->
        <script src="<?php echo base_url(); ?>assets/industries/js/counter.js"></script>
        <!-- //counter for stats -->

        <!-- magnific popup -->
        <script src="<?php echo base_url(); ?>assets/industries/js/jquery.magnific-popup.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

                $('.popup-with-move-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-slide-bottom'
                });
            });
        </script>
        <!-- //magnific popup -->

        <!-- owl carousel -->
        <script src="<?php echo base_url(); ?>assets/industries/js/owl.carousel.js"></script>
        <!-- script for tesimonials carousel slider -->
        <script>
            $(document).ready(function () {
                $("#owl-demo2").owlCarousel({
                    loop: true,
                    nav: false,
                    margin: 50,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        736: {
                            items: 1,
                            nav: false
                        },
                        991: {
                            items: 2,
                            margin: 30,
                            nav: false
                        },
                        1080: {
                            items: 2,
                            nav: false
                        }
                    }
                })
            })
        </script>
        <!-- //script for tesimonials carousel slider -->
        <!-- owl carousel -->

        <!-- theme switch js (light and dark)-->
        <script src="<?php echo base_url(); ?>assets/industries/js/theme-change.js"></script>
        <script>
            function autoType(elementClass, typingSpeed) {
                var thhis = $(elementClass);
                thhis.css({
                    "position": "relative",
                    "display": "inline-block"
                });
                thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
                thhis = thhis.find(".text-js");
                var text = thhis.text().trim().split('');
                var amntOfChars = text.length;
                var newString = "";
                thhis.text("|");
                setTimeout(function () {
                    thhis.css("opacity", 1);
                    thhis.prev().removeAttr("style");
                    thhis.text("");
                    for (var i = 0; i < amntOfChars; i++) {
                        (function (i, char) {
                            setTimeout(function () {
                                newString += char;
                                thhis.text(newString);
                            }, i * typingSpeed);
                        })(i + 1, text[i]);
                    }
                }, 1500);
            }

            $(document).ready(function () {
                // Now to start autoTyping just call the autoType function with the
                // class of outer div
                // The second paramter is the speed between each letter is typed.
                autoType(".type-js", 200);
            });
        </script>
        <!-- //theme switch js (light and dark)-->

        <!-- MENU-JS -->
        <script>
            $(window).on("scroll", function () {
                var scroll = $(window).scrollTop();

                if (scroll >= 80) {
                    $("#site-header").addClass("nav-fixed");
                } else {
                    $("#site-header").removeClass("nav-fixed");
                }
            });

            //Main navigation Active Class Add Remove
            $(".navbar-toggler").on("click", function () {
                $("header").toggleClass("active");
            });
            $(document).on("ready", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
                $(window).on("resize", function () {
                    if ($(window).width() > 991) {
                        $("header").removeClass("active");
                    }
                });
            });
        </script>
        <!-- //MENU-JS -->

        <!-- disable body scroll which navbar is in active -->
        <script>
            $(function () {
                $('.navbar-toggler').click(function () {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>
        <!-- //disable body scroll which navbar is in active -->

        <!--bootstrap-->
        <script src="<?php echo base_url(); ?>assets/industries/js/bootstrap.min.js"></script>
        <!-- //bootstrap-->
        <!-- //Js scripts -->


  <script type="text/javascript">

  $('#click').on("click",function(){
    console.log('ok');


  });
  </script>
  <!-- /.content -->
</div>
