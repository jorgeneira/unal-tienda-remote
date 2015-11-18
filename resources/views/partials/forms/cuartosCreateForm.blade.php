<section class="portfolio padding-large text-center">
    <div class="container">
        <div class="row wow fadeInUp">
            <h2>
                Cuartos Frios
                <strong class="main-color bold-text">A Tu Medida</strong>
            </h2>

            <div class="col-md-10 col-md-offset-1">
                <p>Completa el siguiente formulario para recibir la cotización del cuarto frio con las especificaciónes que necesitas.
                   En caso de no recibir la cotización en tu correo, por favor escríbenos a <a href="mailto:soporte@unaldev.co ">soporte@unaldev.co</a></p>
            </div>
        </div>
    </div>
</section>

<section class="formulario padding-large formulario-cuarto">
    <div class="container">
        <div class="row">
            <div class="center-block col col-xs-12 col-md-6" style="float:none;">
                @include('utils.validationErrors')
                <form class="form form-horizontal" role="form" action="" method="POST">
                    {!! csrf_field() !!}
                    <fieldset>
                        <legend>Información del Cliente:</legend>
                        <div class="form-group">
                            <label for="nombre" class="col-xs-12 col-sm-6 col-md-4 control-label">Nombre</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input id="nombre" class="form-control" type="text" name="cliente[nombre]" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ciudad" class="col-xs-12 col-sm-6 col-md-4 control-label">Ciudad</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input id="ciudad" class="form-control" type="text" name="cliente[ciudad]" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-xs-12 col-sm-6 col-md-4 control-label">E-Mail</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input id="email" class="form-control" type="text" name="cliente[email]" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ciudad" class="col-xs-12 col-sm-6 col-md-4 control-label">Compañía</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input id="ciudad" class="form-control" type="text" name="cliente[compania]" required>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Especificaciones: <i class="fa fa-exclamation-circle info-icon" data-toggle="popover" title="<i class='fa fa-exclamation-circle'></i> Informacion:" data-trigger="hover" data-html="true" data-content="El alto máximo y mínimo están definidos según trabajo en alturas si el cliente tiene un cuarto frio mas alto que el máximo no hay problema pero la altura del evaporador no subirá mas de 4 metros.<br><br>Es importante recordar que el ancho de la cámara corresponde a la pared que tiene la puerta del cuarto."></i></legend>
                        <p></p>
                        <div class="form-group">
                            <label for="largo" class="col-xs-12 col-sm-6 col-md-4 control-label">Largo</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input id="largo" type="text" value="5" name="pedido[largo]" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ancho" class="col-xs-12 col-sm-6 col-md-4 control-label">Ancho</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input id="ancho" type="text" value="5" name="pedido[ancho]" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alto" class="col-xs-12 col-sm-6 col-md-4 control-label">Alto</label>

                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input id="alto" type="text" value="3.50" name="pedido[alto]" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="temperatura" class="col-xs-12 col-sm-6 col-md-4 control-label">Temperatura Externa</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input id="temperatura" type="text" value="20" name="pedido[temperatura]" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="producto" class="col-xs-12 col-sm-6 col-md-4 control-label">Producto</label>
                            <label class="radio-inline pull-left" style="margin-left: 15px;">
                                <input type="radio" name="pedido[producto]" value="pollo" checked>Pollo
                            </label>
                            <label class="radio-inline pull-left">
                                <input type="radio" name="pedido[producto]" value="mora">Mora
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="peso" class="col-xs-12 col-sm-6 col-md-4 control-label">Peso Total</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <input id="peso" type="text" value="50" name="pedido[masa]" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-6 col-md-offset-4 col-xs-12 col-sm-6 col-md-8">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>


