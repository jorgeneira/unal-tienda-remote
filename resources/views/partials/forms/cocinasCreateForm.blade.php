<section class="portfolio padding-large text-center">
    <div class="container">
        <div class="row wow fadeInUp">
            <h2>
                Cocinas
                <strong class="main-color bold-text">A Tu Medida</strong>
            </h2>

            <div class="col-md-10 col-md-offset-1">
                <p>Completa el siguiente formulario para recibir la cotización de la cocina con las especificaciónes que
                    necesitas.
                    En caso de no recibir la cotización en tu correo, por favor escríbenos a <a
                            href="mailto:soporte@unaldev.co ">soporte@unaldev.co</a></p>
            </div>
        </div>
    </div>
</section>

<section class="formulario padding-large formulario-cuarto">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10 center-block" style="float:none;">
                <form class="form-horizontal" role="form" action="http://google.com" method="POST">
                    <!-- Dimensiones -->

                    <fieldset>
                        <legend>Dimensiones</legend>
                        <br>
                        <div class="form-group col-xs-12 col-sm-4">
                            <label class="col-xs-4 control-label" for="largo">Largo</label>
                            <input class="col-xs-5" id="largo" type="text" value="5" name="pedido[largo]">
                        </div>

                        <div class="form-group col-xs-12 col-sm-4">
                            <label class="col-xs-4 control-label" for="ancho">Ancho</label>
                            <input class="col-xs-5" id="ancho" type="text" value="5" name="pedido[ancho]">
                        </div>

                        <div class="form-group col-xs-12 col-sm-4">
                            <label class="col-xs-4 control-label" for="alto">Alto</label>
                            <input class="col-xs-5" id="alto" type="text" value="3.50" name="pedido[alto]">
                        </div>
                        <br>

                    </fieldset>

                    <!-- Tipo de distribución -->
                    <fieldset class="cocinaSelector">
                        <legend>Tipo de Distribución</legend>
                        <br>

                        <div class="row">
                            <div class="col-xs-12">
                                <p>Haz clic en la imagen para seleccionar el tipo de distribucion que deeas para
                                    tu cocina:</p><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-center col-xs-12 col-sm-4">
                                <label>
                                    <div class="hovereffect">
                                        <input id="cocinaTipoI" type="radio" name="tipoCocinaSelector" value="3"
                                               onclick="cocinaFormCtrl.aparecer('cocinaI'); cocinaFormCtrl.cambioCanvasSec(1);"
                                               checked="checked"/>
                                        <img class="img-responsive" src="/img/cocina/tipoI.jpg">

                                        <h2 id="cocinaI">Activo: tipo I</h2>

                                        <div class="overlay">
                                            <h2>Cocina tipo I</h2>
                                            <a class="btn btn-primary info">Seleccionar</a>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <div class="text-center col-xs-12 col-sm-4">
                                <label>
                                    <div class="hovereffect">
                                        <input id="cocinaTipoL" type="radio" name="tipoCocinaSelector" value="2"
                                               onclick="cocinaFormCtrl.aparecer('cocinaL'); cocinaFormCtrl.cambioCanvasSec(2);"/>
                                        <img class="img-responsive" src="/img/cocina/tipoL.jpg">

                                        <h2 id="cocinaL">Activo: tipo L</h2>

                                        <div class="overlay">
                                            <h2>Cocina tipo L</h2>
                                            <a class="btn btn-primary info">
                                                Seleccionar</a>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <div class="text-center col-xs-12 col-sm-4">
                                <label>
                                    <div class="hovereffect">
                                        <input id="cocinaTipoU" type="radio" name="tipoCocinaSelector" value="1"
                                               onclick="cocinaFormCtrl.aparecer('cocinaU'); cocinaFormCtrl.cambioCanvasSec(3);"/>
                                        <img class="img-responsive" src="/img/cocina/tipoU.jpg">

                                        <h2 id="cocinaU">Activo: tipo U</h2>

                                        <div class="overlay">
                                            <h2>Cocina tipo U</h2>
                                            <a class="btn btn-primary info">Seleccionar</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <br>

                    </fieldset>
                    <!-- Accesorios -->

                    <fieldset class="cocinaSelector">
                        <legend>Accesorios</legend>
                        <br>

                        <div class="row">
                            <div class="col-xs-12">
                                <p>Selecciona los accesorios que quieres isntalar en tu cocina:</p><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <fieldset>
                                    <legend>Estufa</legend>
                                    <div class="row">
                                        <div class="text-center col-xs-12 col-md-6">
                                            <label>
                                                <div class="hovereffect">
                                                    <input id="est4puestos" type="radio" name="estufaSelector" value="1"
                                                           onclick="cocinaFormCtrl.aparecer('est4p')"
                                                           checked="checked"/>
                                                    <img class="img-responsive" src="/img/cocina/estufa4.jpg">

                                                    <h2 id="est4p">4 puestos</h2>
                                                    <div class="overlay">
                                                        <h2>4 puestos</h2>
                                                        <a class="btn btn-primary info">Seleccionar</a>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="text-center col-xs-12 col-md-6">
                                            <label>
                                                <div class="hovereffect">
                                                    <input id="est6puestos" type="radio" name="estufaSelector" value="2"
                                                           onclick="cocinaFormCtrl.aparecer('est6p')"/>
                                                    <img class="img-responsive" src="/img/cocina/estufa6.jpg">

                                                    <h2 id="est6p" style="visibility: hidden;">6 puestos</h2>

                                                    <div class="overlay">
                                                        <h2>6 puestos</h2>
                                                        <a class="btn btn-primary info">Seleccionar</a>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <fieldset>
                                    <legend>Lavaplatos</legend>
                                    <div class="row">
                                        <div class="text-center col-xs-12 col-md-6">
                                            <label>
                                                <div class="hovereffect">
                                                    <input id="lav1poceta" type="radio" name="lavaplatosSelector"
                                                           value="1"
                                                           onclick="cocinaFormCtrl.aparecer('lav1p')"
                                                           checked="checked"/>
                                                    <img class="img-responsive" src="/img/cocina/lava1.jpg">

                                                    <h2 id="lav1p">1 poceta</h2>

                                                    <div class="overlay">
                                                        <h2>1 poceta</h2>
                                                        <a class="btn btn-primary info">Seleccionar</a>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="text-center col-xs-12 col-md-6">
                                            <label>
                                                <div class="hovereffect">
                                                    <input id="lav2pocetas" type="radio" name="lavaplatosSelector"
                                                           value="2"
                                                           onclick="cocinaFormCtrl.aparecer('lav2p')"/>
                                                    <img class="img-responsive" src="/img/cocina/lava2.jpg">

                                                    <h2 id="lav2p" style="visibility: hidden;">2 pocetas</h2>

                                                    <div class="overlay">
                                                        <h2>2 pocetas</h2>
                                                        <a class="btn btn-primary info">Seleccionar</a>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <fieldset>
                                    <legend>Extractor</legend>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <img class="img-responsive center-block"
                                                 src="/img/cocina/extractor.jpg"><br>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="extractor" value="1" checked>
                                                    Sí deseo extractor.
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="extractor" value="0">
                                                    No añadir extractor.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <br>
                    </fieldset>

                    <!-- Modulos -->

                    <fieldset>
                        <legend>Módulos</legend>
                        <br>
                        <div class="row">
                            <div class="col-xs-12">
                                <p>Utiliza los controles para seleccionar cuantos modulos deseas, en las imagenes puedes
                                    ver la ubicacion de las secciones (izquierda) y la destribucion de los modulos en
                                    cada seccion (derecha):</p><br>
                            </div>
                        </div>

                        <div class="row text-center">

                            <div class="col-xs-12 col-md-4">
                                <canvas id="canvasSecciones" width="250px" height="250px"
                                        style="border:2px solid black">
                                    Tu navegador no soporta canvas. ¡Actualizalo!
                                </canvas>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div id="secModulos" class="row"></div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <canvas id="canvasSeccionesYModulos" width="250px" height="250px"
                                        style="border:2px solid black">
                                    Tu navegador no soporta canvas. ¡Actualizalo!
                                </canvas>
                            </div>
                        </div>
                        <br>
                    </fieldset>

                    <!-- Posicion de accesorios -->

                    <fieldset style="color: #DBDBDB">
                        <legend>Posición de los Accesorios</legend>
                        <br>
                        <div class="row">
                            <div class="text-center col-xs-12 col-sm-6 col-md-4">
                                <canvas id="canvasModuloSec" width="250px" height="250px"
                                        style="border:2px solid black">
                                    Tu navegador no soporta canvas. ¡Actualizalo!
                                </canvas>
                                <br>
                                <br>
                            </div>

                            <div class="text-center col-xs-12 col-sm-6 col-md-8">
                                <div class="row hidden-sm">
                                    <div class="col-xs-12">
                                        <p class="text-left">A continuación puedes elegir la posición en la que deseas
                                            tu estufa y tu lavaplatos. Debes seleccionar
                                            en que seccion quieres el accesorio y posteriormente el numero del modulo.
                                            Todos los modulos estan numerados
                                            como se indica en la imagen.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <fieldset>
                                            <legend class="text-left"> Estufa:</legend>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="seccionEstufa">Sección:</label>
                                                    <select name="estufa[section]" id="seccionEstufa"
                                                            class="form-control">
                                                        <option value="1"># 1</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="moduloEstufa">Módulo:</label>
                                                    <select name="estufa[modulo]" id="moduloEstufa"
                                                            class="form-control">
                                                        <option value="1"># 1</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <fieldset>
                                            <legend class="text-left"> Lavaplatos:</legend>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="seccionEstufa">Sección:</label>
                                                    <select name="estufa[section]" id="seccionEstufa"
                                                            class="form-control">
                                                        <option value="1"># 1</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="moduloEstufa">Módulo:</label>
                                                    <select name="estufa[modulo]" id="moduloEstufa"
                                                            class="form-control">
                                                        <option value="1"># 1</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </fieldset>
                    <fieldset>
                        <legend>Divisiones de los Módulos</legend>

                        <div class="row">
                            <div class="col-xs-12" id="numDivisionesSec"></div>
                        </div>

                    </fieldset>

                    <!-- Tipos de accesorios -->

                    <fieldset class="cocinaSelector">
                        <legend>Detalles de los Accesorios</legend>
                        <br>
                        <div class="row">

                            <div class="col-xs-12 col-sm-6">
                                <fieldset>
                                    <legend>Manijas</legend>
                                    <div class="row">
                                        <div class="text-center col-xs-6">
                                            <label>
                                                <div class="hovereffect">
                                                    <input id="manijaTipo1" type="radio" name="tipoManijaSelector"
                                                           value="1"
                                                           onclick="cocinaFormCtrl.aparecer('manija1');"
                                                           checked="checked"/>
                                                    <img class="img-responsive" src="/img/cocina/manija1.jpg">

                                                    <h2 id="manija1">tipo 1</h2>

                                                    <div class="overlay">
                                                        <h2>tipo 1</h2>
                                                        <a class="btn btn-primary info">Seleccionar</a>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="text-center col-xs-6 col-sm-12 col-md-6">
                                            <label>
                                                <div class="hovereffect">
                                                    <input id="manijaTipo2" type="radio" name="tipoManijaSelector"
                                                           value="2"
                                                           onclick="cocinaFormCtrl.aparecer('manija2');"/>
                                                    <img class="img-responsive" src="/img/cocina/manija2.jpg">

                                                    <h2 id="manija2" style="visibility: hidden;">tipo 2</h2>

                                                    <div class="overlay">
                                                        <h2>tipo 2</h2>
                                                        <a class="btn btn-primary info">Seleccionar</a>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-xs-12 col-sm-6">

                                <fieldset>
                                    <legend>Material</legend>
                                    <div class="row">
                                        <div class="text-center col-xs-6 col-sm-12 col-md-6">
                                            <label>
                                                <div class="hovereffect">
                                                    <input id="materialTipo1" type="radio" name="tipoMaterialSelector"
                                                           value="1"
                                                           onclick="cocinaFormCtrl.aparecer('material1');"
                                                           checked="checked"/>
                                                    <img class="img-responsive" src="/img/cocina/material1.jpe">

                                                    <h2 id="material1">tipo 1</h2>

                                                    <div class="overlay">
                                                        <h2>tipo 1</h2>
                                                        <a class="btn btn-primary info">Seleccionar</a>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="text-center col-xs-6 col-sm-12 col-md-6">
                                            <label>
                                                <div class="hovereffect">
                                                    <input id="materialTipo2" type="radio" name="tipoMaterialSelector"
                                                           value="2"
                                                           onclick="cocinaFormCtrl.aparecer('material2');"/>
                                                    <img class="img-responsive" src="/img/cocina/material2.jpg">

                                                    <h2 id="material2" style="visibility: hidden;">tipo 2</h2>

                                                    <div class="overlay">
                                                        <h2>tipo 2</h2>
                                                        <a class="btn btn-primary info">Seleccionar</a>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="col-xs-12 col-sm-6">

                                <fieldset>
                                    <legend>Mesón</legend>
                                    <div class="row">
                                        <div class="text-center col-xs-6 col-sm-12 col-md-6">
                                            <label>
                                                <div class="hovereffect">
                                                    <input id="mesonTipo1" type="radio" name="tipoMesonSelector"
                                                           value="1"
                                                           onclick="cocinaFormCtrl.aparecer('meson1');"
                                                           checked="checked"/>
                                                    <img class="img-responsive" src="/img/cocina/meson1.jpg">

                                                    <h2 id="meson1">tipo 1</h2>

                                                    <div class="overlay">
                                                        <h2>tipo 1</h2>
                                                        <a class="btn btn-primary info">Seleccionar</a>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="text-center col-xs-6 col-sm-12 col-md-6">
                                            <label>
                                                <div class="hovereffect">
                                                    <input id="mesonTipo2" type="radio" name="tipoMesonSelector"
                                                           value="2"
                                                           onclick="cocinaFormCtrl.aparecer('meson2');"/>
                                                    <img class="img-responsive" src="/img/cocina/meson2.jpg">

                                                    <h2 id="meson2" style="visibility: hidden;">tipo 2</h2>

                                                    <div class="overlay">
                                                        <h2>tipo 2</h2>
                                                        <a class="btn btn-primary info">Seleccionar</a>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-xs-12">

                                <fieldset>
                                    <legend>Color</legend>
                                    <div class="row">
                                        <div class="text-center col-xs-6 col-md-3">
                                            <label>
                                                <div class="hovereffect">
                                                    <input id="colorTipo1" type="radio" name="tipoColorSelector"
                                                           value="1"
                                                           onclick="cocinaFormCtrl.aparecer('color1');"
                                                           checked="checked"/>

                                                    <div style="background-color: #c5c5c5; width: 150px; height: 150px;"></div>

                                                    <h2 id="color1">Color blanco</h2>

                                                    <div class="overlay">
                                                        <h2>Color blanco</h2>
                                                        <a class="info">Seleccionar</a>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="text-center col-xs-6 col-md-3">
                                            <label>
                                                <div class="hovereffect">
                                                    <input id="colorTipo2" type="radio" name="tipoColorSelector"
                                                           value="2"
                                                           onclick="cocinaFormCtrl.aparecer('color2');"/>

                                                    <div style="background-color: #8a6d3b; width: 150px; height: 150px;"></div>

                                                    <h2 id="color2" style="visibility: hidden;">Color café</h2>

                                                    <div class="overlay">
                                                        <h2>Color café</h2>
                                                        <a class="info">Seleccionar</a>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="text-center col-xs-6 col-md-3">
                                            <label>
                                                <div class="hovereffect">
                                                    <input id="colorTipo3" type="radio" name="tipoColorSelector"
                                                           value="3"
                                                           onclick="cocinaFormCtrl.aparecer('color3');"/>

                                                    <div style="background-color: #ac2925; width: 150px; height: 150px;"></div>

                                                    <h2 id="color3" style="visibility: hidden;">Color rojo</h2>

                                                    <div class="overlay">
                                                        <h2>Color rojo</h2>
                                                        <a class="info">Seleccionar</a>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="text-center col-xs-6 col-md-3">
                                            <label>
                                                <div class="hovereffect">
                                                    <input id="colorTipo4" type="radio" name="tipoColorSelector"
                                                           value="4"
                                                           onclick="cocinaFormCtrl.aparecer('color4');"/>

                                                    <div style="background-color: #0e0e0e; width: 150px; height: 150px;"></div>

                                                    <h2 id="color4" style="visibility: hidden;">Color negro</h2>

                                                    <div class="overlay">
                                                        <h2>Color negro</h2>
                                                        <a class="info">Seleccionar</a>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                    </div>
                                </fieldset>

                            </div>
                        </div>
                        <br>
                    </fieldset>


                    <!-- Botón para enviar formulario-->
                    <div class="text-center col-xs-12">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                    </div>

                </form>
                <br>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>


