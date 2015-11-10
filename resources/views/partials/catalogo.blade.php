<section id="portfolio" class="portfolio padding-large text-center">
    <div class="container margin-bottom-medium">
        <div class="row margin-bottom-medium wow fadeInUp">
            <h2>
                Catalogo de
                <strong class="main-color bold-text">Productos</strong>
            </h2>

            <div class="col-md-10 col-md-offset-1">
                <p>Elige entre nuestros modelos de cocinas y cuartos frios prediseñados o solicita el tuyo a tu medida y de acuerdo a tus necesidades.</p>
            </div>
        </div> <!-- *** end row *** -->

               <!-- *****  Portfolio Filters ***** -->
        <div class="filters">
            <ul class="wow lightSpeedIn">
                <li><a href="#" data-filter="*" class="active"><i class="icon-grid"></i></a></li>
                <li><a href="#" data-filter=".cocina">Cocinas Integrales</a></li>
                <li><a href="#" data-filter=".cuarto">Cuartos Frios</a></li>

            </ul>
        </div> <!-- *** end filters *** -->
    </div> <!-- *** end container *** -->

           <!-- *****  Portfolio  wrapper ***** -->
    <div class="portfolio-wrapper margin-bottom-medium">

    @foreach($catalogo as $id => $producto)

        <div class="portfolio-item {{$producto['type']}}">
            <div class="portfolio">
                <a onclick="alertControllers.pedirDatosUsuario()">
                    <img src="/img/portfolio/{{ $id + 1 }}.jpg"/><!-- END PORTFOLIO IMAGE -->
                    <div class="portfolio-overlay hvr-rectangle-out">
                        <div class="button">Cotizar Proyecto</div>
                    </div><!-- END PORTFOLIO OVERLAY -->
                </a>
            </div>
        </div>

    @endforeach

    </div> <!-- *** end  portfolio-wrapper *** -->
    <a href="#" style="margin-left: 30px;" class="button light margin-top-medium margin-bottom-medium hvr-grow"><i class="icon-reload"></i> Ver más las cocinas</a>

    <a href="#" style="margin-left: 30px;" class="button light margin-top-medium margin-bottom-medium hvr-grow"><i class="icon-reload"></i> Ver más de cuartos fríos</a>
</section>