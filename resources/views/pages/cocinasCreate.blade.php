@extends('main')

@section('header')

    @include('partials.innerHeader')

@endsection

@section('content')

    @include('partials.forms.cocinasCreateForm')

    @include('partials.catalogo')

@endsection

@section('bottomScripts')
    @parent
    <script type="text/javascript">

        jQuery(document).ready(function () {

            cocinaFormCtrl.cambioCanvasSec(1);

            jQuery("#ancho").TouchSpin({
                min: 3.1,
                max: 10,
                step: 0.01,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: 'm'
            });

            jQuery("#largo").TouchSpin({
                min: 3.5,
                max: 10,
                step: 0.01,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: 'm'
            });

            jQuery("#alto").TouchSpin({
                min: 2,
                max: 4,
                step: 0.01,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: 'm'
            });

            @if(!empty($posted))
                alertControllers.requestSuccessAlert();
            @endif

        });

        var cocinaFormCtrl = (function ($) {
            var tipo, modulosTotales;
            var contSec = document.getElementById("canvasSecciones").getContext("2d");
            var contSecMod = document.getElementById("canvasSeccionesYModulos").getContext("2d");

            var aparecer = function (tipo) {

                if (tipo == "est4p") {
                    document.getElementById("est4p").style.visibility = "visible";
                    document.getElementById("est6p").style.visibility = "hidden";
                }
                if (tipo == "est6p") {
                    document.getElementById("est6p").style.visibility = "visible";
                    document.getElementById("est4p").style.visibility = "hidden";
                }
                if (tipo == "lav1p") {
                    document.getElementById("lav1p").style.visibility = "visible";
                    document.getElementById("lav2p").style.visibility = "hidden";
                }
                if (tipo == "lav2p") {
                    document.getElementById("lav2p").style.visibility = "visible";
                    document.getElementById("lav1p").style.visibility = "hidden";
                }
                if (tipo == "cocinaI") {
                    document.getElementById("cocinaI").style.visibility = "visible";
                    document.getElementById("cocinaL").style.visibility = "hidden";
                    document.getElementById("cocinaU").style.visibility = "hidden";
                }
                if (tipo == "cocinaL") {
                    document.getElementById("cocinaL").style.visibility = "visible";
                    document.getElementById("cocinaU").style.visibility = "hidden";
                    document.getElementById("cocinaI").style.visibility = "hidden";
                }
                if (tipo == "cocinaU") {
                    document.getElementById("cocinaU").style.visibility = "visible";
                    document.getElementById("cocinaI").style.visibility = "hidden";
                    document.getElementById("cocinaL").style.visibility = "hidden";
                }
                if (tipo == "manija1") {
                    document.getElementById("manija1").style.visibility = "visible";
                    document.getElementById("manija2").style.visibility = "hidden";
                }
                if (tipo == "manija2") {
                    document.getElementById("manija2").style.visibility = "visible";
                    document.getElementById("manija1").style.visibility = "hidden";
                }
                if (tipo == "soporte1") {
                    document.getElementById("soporte1").style.visibility = "visible";
                    document.getElementById("soporte2").style.visibility = "hidden";
                }
                if (tipo == "soporte2") {
                    document.getElementById("soporte2").style.visibility = "visible";
                    document.getElementById("soporte1").style.visibility = "hidden";
                }
                if (tipo == "soporte2") {
                    document.getElementById("soporte2").style.visibility = "visible";
                    document.getElementById("soporte1").style.visibility = "hidden";
                }
                if (tipo == "material1") {
                    document.getElementById("material1").style.visibility = "visible";
                    document.getElementById("material2").style.visibility = "hidden";
                }
                if (tipo == "material2") {
                    document.getElementById("material2").style.visibility = "visible";
                    document.getElementById("material1").style.visibility = "hidden";
                }
                if (tipo == "meson1") {
                    document.getElementById("meson1").style.visibility = "visible";
                    document.getElementById("meson2").style.visibility = "hidden";
                }
                if (tipo == "meson2") {
                    document.getElementById("meson2").style.visibility = "visible";
                    document.getElementById("meson1").style.visibility = "hidden";
                }
                if (tipo == "color1") {
                    document.getElementById("color1").style.visibility = "visible";
                    document.getElementById("color2").style.visibility = "hidden";
                    document.getElementById("color3").style.visibility = "hidden";
                    document.getElementById("color4").style.visibility = "hidden";
                }
                if (tipo == "color2") {
                    document.getElementById("color2").style.visibility = "visible";
                    document.getElementById("color1").style.visibility = "hidden";
                    document.getElementById("color3").style.visibility = "hidden";
                    document.getElementById("color4").style.visibility = "hidden";
                }
                if (tipo == "color3") {
                    document.getElementById("color3").style.visibility = "visible";
                    document.getElementById("color1").style.visibility = "hidden";
                    document.getElementById("color2").style.visibility = "hidden";
                    document.getElementById("color4").style.visibility = "hidden";
                }
                if (tipo == "color4") {
                    document.getElementById("color4").style.visibility = "visible";
                    document.getElementById("color1").style.visibility = "hidden";
                    document.getElementById("color2").style.visibility = "hidden";
                    document.getElementById("color3").style.visibility = "hidden";
                }


            };

            var cambioCanvasSec = function (num) {
                tipo = num;
                numModulosSec(num);
                cambioCanvasSecModulos(num);
                if (num == 1) {
                    contSec.clearRect(0, 0, 250, 250);
                    contSec.beginPath();
                    contSec.moveTo(60, 0);
                    contSec.lineTo(60, 250);
                    contSec.stroke();
                    contSec.save();
                    contSec.translate(40, 125);
                    contSec.rotate(-Math.PI / 2);
                    contSec.font = "30px Comic Sans MS";
                    contSec.textAlign = 'center';
                    contSec.fillText('Sección 1', 0, 0);
                    contSec.restore();
                }
                if (num == 2) {
                    contSec.clearRect(0, 0, 250, 250);
                    contSec.beginPath();
                    contSec.moveTo(60, 0);
                    contSec.lineTo(60, 190);
                    contSec.lineTo(250, 190);
                    contSec.stroke();
                    contSec.save();
                    contSec.translate(40, 110);
                    contSec.rotate(-Math.PI / 2);
                    contSec.font = "30px Comic Sans MS";
                    contSec.textAlign = 'center';
                    contSec.fillText('Sección 1', 0, 0);
                    contSec.restore();
                    contSec.font = "30px Comic Sans MS";
                    contSec.textAlign = 'center';
                    contSec.fillText('Sección 2', 150, 230);
                }
                if (num == 3) {
                    contSec.clearRect(0, 0, 250, 250);
                    contSec.beginPath();
                    contSec.moveTo(60, 0);
                    contSec.lineTo(60, 190);
                    contSec.lineTo(190, 190);
                    contSec.lineTo(190, 0);
                    contSec.stroke();
                    contSec.save();
                    contSec.translate(40, 110);
                    contSec.rotate(-Math.PI / 2);
                    contSec.font = "30px Comic Sans MS";
                    contSec.textAlign = 'center';
                    contSec.fillText('Sección 1', 0, 0);
                    contSec.restore();
                    contSec.font = "30px Comic Sans MS";
                    contSec.textAlign = 'center';
                    contSec.fillText('Sección 2', 125, 230);
                    contSec.save();
                    contSec.translate(230, 110);
                    contSec.rotate(-Math.PI / 2);
                    contSec.font = "30px Comic Sans MS";
                    contSec.textAlign = 'center';
                    contSec.fillText('Sección 3', 0, 0);
                    contSec.restore();
                }

            };

            var numModulosSec = function (num) {
                var plantilla = '<div class="col-xs-12"><br><label>Número de módulos</label><br></div>';
                for (var i = 0; i < num; i++) {
                    plantilla += '<div class="form-group col-xs-12 col-md-12">' +
                            '<label class="col-xs-12 col-md-6 control-label text-left">Sección ' + (i + 1) + '</label> ' +
                            '<div class="col-xs-12 col-md-6 selectContainer"> ' +
                            '<select class="form-control" id="numModSec' + (i + 1) + '" name="pedido[modulos_seccion_' + (i + 1) + ']" onchange="cocinaFormCtrl.cambioCanvasSecModulos()"> ' +
                            '<option value="2" selected="selected">2 Modulos</option>' +
                            '<option value="3">3 Modulos</option>' +
                            '<option value="4">4 Modulos</option>' +
                            '<option value="5">5 Modulos</option>' +
                            '<option value="6">6 Modulos</option>' +
                            '<option value="7">7 Modulos</option>' +
                            '</select></div></div>';
                }
                jQuery('#secModulos').html(plantilla);
            };

            $.fn.insertAtIndex = function (index, selector) {
                var opts = $.extend({
                    index: 0,
                    selector: '<div/>'
                }, {index: index, selector: selector});
                return this.each(function () {
                    var p = $(this);
                    var i = ($.isNumeric(opts.index) ? parseInt(opts.index) : 0);
                    if (i <= 0)
                        p.prepend(opts.selector);
                    else if (i > p.children().length - 1)
                        p.append(opts.selector);
                    else
                        p.children().eq(i).before(opts.selector);
                });
            };

            var actualizarModulosEstufaLavaplatos = function (tipoSec) {
                var secEstufa = $('#moduloEstufa');
                var secLavaplatos = $('#moduloLavaplatos');

                if (tipoSec == 1) {
                    var modEstufa = document.getElementById("moduloEstufa");
                    var numModEstufa = modEstufa.options[modEstufa.selectedIndex].value;

                    for (var i = 0; i < modulosTotales; i++) {
                        if ($('#moduloLavaplatos option[value="' + (i + 1) + '"]').length == 0) {
                            secLavaplatos.insertAtIndex((i + 1) - 1, '<option value="' + (i + 1) + '"># ' + (i + 1) + '</option>');
                            i = modulosTotales;
                        }
                    }
                    secLavaplatos.find("option[value='" + parseInt(numModEstufa) + "']").remove();
                }

                if (tipoSec == 2) {
                    var modLavaplatos = document.getElementById("moduloLavaplatos");
                    var numModLavaplatos = modLavaplatos.options[modLavaplatos.selectedIndex].value;

                    for (var i = 0; i < modulosTotales; i++) {
                        if ($('#moduloEstufa option[value="' + (i + 1) + '"]').length == 0) {
                            secEstufa.insertAtIndex((i + 1) - 1, '<option value="' + (i + 1) + '"># ' + (i + 1) + '</option>');
                            i = modulosTotales;
                        }
                    }
                    secEstufa.find("option[value='" + parseInt(numModLavaplatos) + "']").remove();
                }

                if (tipo >= 1) {
                    var numSec1 = document.getElementById("numModSec1");
                    var canvasNumSec1 = numSec1.options[numSec1.selectedIndex].value;
                    if (tipo >= 2) {
                        var numSec2 = document.getElementById("numModSec2");
                        var canvasNumSec2 = numSec2.options[numSec2.selectedIndex].value;
                        if (tipo == 3) {
                            var numSec3 = document.getElementById("numModSec3");
                            var canvasNumSec3 = numSec3.options[numSec3.selectedIndex].value;
                        }
                    }
                }

                /*-------------------- Actualiza el valor de la seccion oculta -------------------------*/
                if ($("#moduloEstufa").val() <= (parseInt(canvasNumSec1) + parseInt(canvasNumSec2))) {
                    if ($("#moduloEstufa").val() <= parseInt(canvasNumSec1)) {
                        document.getElementById("seccionEstufa").value = 1;
                    } else {
                        document.getElementById("seccionEstufa").value = 2;
                    }
                } else {
                    document.getElementById("seccionEstufa").value = 3;
                }

                if ($("#moduloLavaplatos").val() <= (parseInt(canvasNumSec1) + parseInt(canvasNumSec2))) {
                    if ($("#moduloLavaplatos").val() <= parseInt(canvasNumSec1)) {
                        document.getElementById("seccionLavaplatos").value = 1;
                    } else {
                        document.getElementById("seccionLavaplatos").value = 2;
                    }
                } else {
                    document.getElementById("seccionLavaplatos").value = 3;
                }
                /*----------------------------------------------------------------------------------*/

                /*-------------------- Actualiza los modulos que se ocultan -------------------------*/
                for (var i = 0; i < modulosTotales; i++) {
                    $('#numDivisionesSec').find("#modulo" + (i + 1) + "").show();
                }
                $('#numDivisionesSec').find("#modulo" + $("#moduloEstufa").val()).hide();
                $('#numDivisionesSec').find("#modulo" + $("#moduloLavaplatos").val()).hide();
                /*--------------------------------------------------------------------------------------*/
            };

            var actualizarDivisionesSecciones = function (tipoMod) {

                var secEstufa = $('#moduloEstufa');
                var secLavaplatos = $('#moduloLavaplatos');

                secEstufa.empty();
                secLavaplatos.empty();

                for (var i = 0; i < modulosTotales; i++) {
                    secEstufa.append('<option value="' + (i + 1) + '"># ' + (i + 1) + '</option>');
                    if (i != 0) secLavaplatos.append('<option value="' + (i + 1) + '"># ' + (i + 1) + '</option>');
                }
            };

            var cambioCanvasSecModulos = function (canvasTipo) {
                if (canvasTipo == null) canvasTipo = tipo;

                var anchoSec1, anchoSec2, anchoSec3, i, anchoMueble = 60;
                contSecMod.font = "16px Arial";
                var canvasWidth = 250;
                var canvasHeight = 250;

                var canvasNumSec1 = 0, canvasNumSec2 = 0, canvasNumSec3 = 0;

                if (canvasTipo >= 1) {
                    contSecMod.clearRect(0, 0, 250, 250);

                    var numSec1 = document.getElementById("numModSec1");
                    canvasNumSec1 = numSec1.options[numSec1.selectedIndex].value;

                    anchoSec1 = canvasHeight / canvasNumSec1;

                    for (i = 0; i < canvasNumSec1; i++) {
                        contSecMod.strokeRect(0, (i * anchoSec1), anchoMueble, anchoSec1);
                        contSecMod.fillText(String(i + 1), anchoMueble / 2 - 6, anchoSec1 / 2 + (i * anchoSec1));
                    }

                    if (canvasTipo >= 2) {
                        contSecMod.clearRect(0, 0, 250, 250);

                        var numSec2 = document.getElementById("numModSec2");
                        canvasNumSec2 = numSec2.options[numSec2.selectedIndex].value;

                        anchoSec1 = (canvasHeight - anchoMueble) / canvasNumSec1;
                        anchoSec2 = (canvasWidth - anchoMueble) / canvasNumSec2;

                        for (i = 0; i < canvasNumSec1; i++) {
                            contSecMod.strokeRect(0, (i * anchoSec1), anchoMueble, anchoSec1);
                            contSecMod.fillText(String(i + 1), anchoMueble / 2 - 6, anchoSec1 / 2 + (i * anchoSec1));
                        }

                        for (i = 0; i < canvasNumSec2; i++) {
                            contSecMod.strokeRect(anchoMueble + (i * anchoSec2), canvasHeight - anchoMueble, anchoSec2, anchoMueble);
                            contSecMod.fillText(String(i + 1 + parseInt(canvasNumSec1)), anchoSec2 / 2 - 5 + anchoMueble + (i * anchoSec2), anchoMueble / 2 + 6 + (canvasHeight - anchoMueble));
                        }

                        if (canvasTipo == 3) {
                            contSecMod.clearRect(0, 0, 250, 250);

                            var numSec3 = document.getElementById("numModSec3");
                            canvasNumSec3 = numSec3.options[numSec3.selectedIndex].value;

                            anchoSec2 = (canvasWidth - 2 * anchoMueble) / canvasNumSec2;
                            anchoSec3 = (canvasHeight - anchoMueble) / canvasNumSec3;

                            for (i = 0; i < canvasNumSec1; i++) {
                                contSecMod.strokeRect(0, (i * anchoSec1), anchoMueble, anchoSec1);
                                contSecMod.fillText(String(i + 1), anchoMueble / 2 - 6, anchoSec1 / 2 + (i * anchoSec1));
                            }

                            for (i = 0; i < canvasNumSec2; i++) {
                                contSecMod.strokeRect(anchoMueble + (i * anchoSec2), canvasHeight - anchoMueble, anchoSec2, anchoMueble);
                                contSecMod.fillText(String(i + 1 + parseInt(canvasNumSec1)), anchoSec2 / 2 - 5 + anchoMueble + (i * anchoSec2), anchoMueble / 2 + 6 + (canvasHeight - anchoMueble));
                            }

                            for (i = 0; i < canvasNumSec3; i++) {
                                contSecMod.strokeRect(canvasWidth - anchoMueble, canvasHeight - anchoMueble - anchoSec3 - (i * anchoSec3), anchoMueble, anchoSec3);
                                contSecMod.fillText(String(i + 1 + parseInt(canvasNumSec1) + parseInt(canvasNumSec2)), anchoMueble / 2 - 6 + (canvasWidth - anchoMueble), anchoSec3 / 2 + (canvasHeight - anchoMueble - anchoSec3 - (i * anchoSec3)));
                            }
                        }
                    }
                }
                modulosTotales = parseInt(canvasNumSec1) + parseInt(canvasNumSec2) + parseInt(canvasNumSec3);
                actualizarDivisionesSecciones();
                document.getElementById("canvasModuloSec").getContext("2d").putImageData(contSecMod.getImageData(0, 0, 250, 250), 0, 0);
                generarEspacios(tipo, [canvasNumSec1, canvasNumSec2, canvasNumSec3]);
                if (modulosTotales < 3) $('#panelDivisionesModulos').hide();
                else $('#panelDivisionesModulos').show();
                actualizarModulosEstufaLavaplatos();

            };

            var generarEspacios = function (numSecciones, numEspacios) {
                var plantilla = '';

                var index = 0;

                for (var i = 0; i < numSecciones; i++) {
                    plantilla += '<fieldset><legend>Sección ' + (i + 1) + '</legend><div class="row">';

                    for (var j = index; j < parseInt(numEspacios[i]) + index; j++) {
                        plantilla +=
                                '       <div class="col-xs-12 col-sm-6" id="modulo' + (j + 1) + '">' +
                                '           <fieldset>' +
                                '               <legend>Modulo ' + (j + 1) + '</legend>' +
                                '               <div class="row">' +
                                '                   <div class="col-xs-6">' +
                                '                      <label>Superiores</label>' +
                                '                    <select class="form-control" name="secciones[' + (i + 1) + '][modulo_' + (j + 1) + '_sup]">' +
                                '                        <option value="2">2</option>' +
                                '                        <option value="3">3</option>' +
                                '                           <option value="4">4</option>' +
                                '                    </select>' +
                                '                </div>' +
                                '                   <div class="col-xs-6">' +
                                '                    <label>Inferiores</label>' +
                                '                    <select class="form-control" name="secciones[' + (i + 1) + '][modulo_' + (j + 1) + '_inf]">' +
                                '                         <option value="2">2</option>' +
                                '                         <option value="3">3</option>' +
                                '                         <option value="4">4</option>' +
                                '                    </select>' +
                                '                </div>' +
                                '             </div>' +
                                '          </fieldset>' +
                                '       </div>';
                    }
                    index = j;

                    plantilla += '</div></fieldset><br>';
                }

                $('#numDivisionesSec').html(plantilla);
            };

            return {
                aparecer: aparecer,
                cambioCanvasSec: cambioCanvasSec,
                actualizarModulosEstufaLavaplatos: actualizarModulosEstufaLavaplatos,
                cambioCanvasSecModulos: cambioCanvasSecModulos
            };
        })
        (jQuery);

    </script>
@endsection