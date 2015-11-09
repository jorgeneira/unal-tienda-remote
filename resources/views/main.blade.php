<!DOCTYPE html>
<html>
<head>
    <title>ADS | Auto Design Solutions</title>
    <link rel="stylesheet" href="{{ asset('build/css/all.css') }}">

</head>
<body>

<div class="mobilenav">
    <ul>
        <li data-rel="#header">
            <span class="nav-label">Inicio</span>
        </li>
        <li data-rel="#about-us">
            <span class="nav-label">Sobre Nosotros</span>
        </li>
        <li data-rel="#why-choose-us">
            <span class="nav-label">¿Por qué escogernos?</span>
        </li>
        <li data-rel="#our-team">
            <span class="nav-label">Nuestro equipo</span>
        </li>
        <li data-rel="#map">
            <span class="nav-label">Contactanos</span>
        </li>
    </ul>
</div>  <!-- *** end Full Screen Menu *** -->

        <!-- *****  hamburger icon ***** -->
<a href="javascript:void(0)" class="menu-trigger">
    <div class="hamburger">
        <div class="menui top-menu"></div>
        <div class="menui mid-menu"></div>
        <div class="menui bottom-menu"></div>
    </div>
</a>


        <!-- =========================
           Header
        ============================== -->
<header id="header">
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">

            <!-- *****  Logo ***** -->
            <div class="logo-container">
                <a href="#">
                    <img src="img/main-logo.jpg" style="height: 80px;" />
                </a>
            </div>

            <!-- =========================
                   Header item 1
                ============================== -->
            <div class="item active">

                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/slider/slider-1.jpg?a=2');">
                </div>
                <div class="carousel-caption">
                    <h1 class="light mab-none">Del <strong class="bold-text">Cuarto Frio...</strong></h1>
                    <p class="light margin-bottom-medium">Escoge o diseña tu cuarto frio</p>
                    <div class="call-button">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                <a href="#portfolio" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#portfolio">CATALOGO</a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">A TU MEDIDA</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>

            <!-- =========================
               Header item 2
            ============================== -->
            <div class="item">

                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/slider/slider-2.jpg?a=1');"></div>
                <div class="carousel-caption">
                    <h1 class="light mab-none">...A <strong class="bold-text">LA ESTUFA</strong></h1>
                    <p class="light margin-bottom-medium">Escoge o diseña tu cocina integral</p>
                    <div class="call-button">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                <a href="#portfolio" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#portfolio">CATALOGO</a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">A TU MEDIDA</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
        </div> <!-- *** end wrapper *** -->

        <!-- Carousel Controls -->
        <a class="left carousel-control hidden-xs" href="#myCarousel" data-slide="prev">
            <span class="icon-prev icon-arrow-left"></span>
        </a>
        <a class="right carousel-control hidden-xs" href="#myCarousel" data-slide="next">
            <span class="icon-next icon-arrow-right"></span>
        </a>
    </div>
</header> <!-- *** end Header *** -->

<script type="text/javascript" src="{{ asset('build/js/all.js') }}"></script>
        <!-- =========================
                   Preloader
                ============================== -->
<script>
    window.addEventListener('DOMContentLoaded', function() {
        "use strict";
        new QueryLoader2(document.querySelector("body"), {
            barColor: "#e74c3c",
            backgroundColor: "#111",
            percentage: true,
            barHeight: 1,
            minimumTime: 200,
            fadeOutTime: 1000
        });
    });
</script>
</body>
</html>