@extends('main')

@section('header')

    @include('partials.innerHeader')

@endsection

@section('content')

    <section class="portfolio padding-large text-center">
        <div class="container">
            <div class="row wow fadeInUp">
                <h2>
                    Nuestra
                    <strong class="main-color bold-text">Empresa</strong>
                </h2>

            </div>
        </div>
    </section>

    <div class="somosInfo container">
        <div class="row">
            <div class="col-lg-12">

                <h1 class="page-header">Misión</h1>
                <div class="description">
                    <p align="justify">
                        En nuestra empresa, buscamos llegar a cada hogar, restaurante
                        y hotel colombiano, logrando que las personas sientan el gusto
                        de diseñar sus propios espacios y de sentirse cómodos en ellos,
                        sabiendo que al haber usado nuestros servicios, no solamente han
                        logrado una notable mejoría en su calidad de vida en una cantidad
                        muy reducida de tiempo, sino que también han ayudado al planeta y
                        al medio ambiente.
                    </p>
                </div>

                <h1 class="page-header">Visión</h1>
                <div class="description">
                    <p align="justify">
                        ADS fue una empresa pensada con fines académicos, en principio,
                        gracias a la iniciativa propuesta por el docente Miguel A.
                        Baquero de la Universidad Nacional como proyecto final de la asignatura
                        Computación Gráfica. Nuestra visión contempla extender los conceptos
                        vistos en clase y el aprendizaje obtenido, a la práctica del mundo
                        empresarial, dónde estos toman el valor que merecen, optimizando así
                        los tiempos en los que se diseña un plano, ya sea para una cocina o un
                        cuarto frío, y por lo tanto, los costos. Dado a la naturaleza de nuestra
                        empresa, a futuro esperamos ser una iniciativa totalmente sólida, con la
                        cual se logre el avance de muchas empresas que requieren de servicios
                        como este para entrar en la era automatizada del siglo 21.
                    </p>
                </div>

                <h1 class="page-header">Nuestro equipo</h1>
                <div class="description">
                    <p align="justify">
                        En Automatic Designer Solutions contamos con las personas más preparadas,
                        listas para ayudarte a personalizar tus espacios tal y como te gustan.
                        Somos una empresa 100% Colombiana, llena de jóvenes emprendedores y muy
                        capaces, comprometidos con el medio ambiente y contigo.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="somosInfo container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Líderes
                </h2>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Baquero.jpg"/>
                    <div class="username">Miguel Baquero Cortés</div>
                    <div class="bio">
                        Docente Computación Gráfica
                    </div>
                    <div class="description">
                        mabaqueroc@unal.edu.co
                    </div>
                </div>
            </div>
            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Serna.jpg" alt="Ash"/>
                    <div class="username">Sebastián Serna Palleja</div>
                    <div class="bio">
                        Estudiante de Ingeniería Mecatrónica
                        <p>9no semestre </p>
                    </div>
                    <div class="description">
                        ssernap@unal.edu.co
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Página web
                </h2>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">

            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Claro.jpg"/>
                    <div class="username">Nicolás Claro Rodríguez</div>
                    <div class="bio">
                        Estudiante de Física
                        <p>4to semestre </p>
                    </div>
                    <div class="description">
                        jnclaror@unal.edu.co
                    </div>
                </div>
            </div>
            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Neira.jpg" alt="Ash"/>
                    <div class="username">Jorge Neira Angulo</div>
                    <div class="bio">
                        Estudiante de Psicología
                        <p>7mo semestre </p>
                    </div>
                    <div class="description">
                        jeneiraa@unal.edu.co
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->


        <!-- Projects Row -->
        <div class="row">

            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Stephanie.jpg"/>
                    <div class="username">Stephanie Torres Jiménez</div>
                    <div class="bio">
                        Estudiante de Ingeniería de Sistemas
                        <p>7mo semestre </p>
                    </div>
                    <div class="description">
                        sttorresji@unal.edu.co
                    </div>
                </div>
            </div>
            <div class="col-md-6 portfolio-item">

                <div class="user-profile">
                    <img class="avatar" src="/img/team/Molano.jpg" alt="Ash"/>
                    <div class="username">Carlos Mario Molano</div>
                    <div class="bio">
                        Estudiante de Ingeniería Civil
                        <p>3er semestre </p>
                    </div>
                    <div class="description">
                        cmmolanov@unal.edu.co
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->


        <div class="row">

            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Cardenas.jpg" alt="Ash"/>
                    <div class="username">Jimmy Alfonso Cárdenas</div>
                    <div class="bio">
                        Estudiante de Ingeniería de Sistemas
                        <p>10mo semestre </p>
                    </div>
                    <div class="description">
                        jicardenasor@unal.edu.co
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->
        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Bases de Datos
                </h2>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Osorio.jpg"/>
                    <div class="username">David Osorio Puentes</div>
                    <div class="bio">
                        Estudiante de Ingeniería de Sistemas
                        <p>7mo semestre </p>
                    </div>
                    <div class="description">
                        judosoriopu@unal.edu.co
                    </div>
                </div>
            </div>
            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Rodriguez.jpg"/>
                    <div class="username">Miguel Rodríguez Fonseca</div>
                    <div class="bio">Estudiante de Ingeniería de Sistemas <p>10mo semestre </p>
                    </div>
                    <div class="description">
                        miarodriguezfo@unal.edu.co
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Lozano.jpg"/>
                    <div class="username">Julián Lozano Jojoa</div>
                    <div class="bio">
                        Estudiante de Ingeniería Mecatrónica
                        <p>10mo semestre </p>
                    </div>
                    <div class="description">
                        jjlozanoj@unal.edu.co
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Diseño de cocinas
                </h2>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">

            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Sepulveda.jpg"/>
                    <div class="username">Édgar Sepúlveda Oviedo</div>
                    <div class="bio">
                        Estudiante de Ingeniería Mecatrónica
                        <p>10mo semestre</p>
                    </div>
                    <div class="description">
                        ehsepulvedao@unal.edu.co
                    </div>
                </div>
            </div>
            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Pineda.jpg" alt="Ash"/>
                    <div class="username">Francisco Pineda Pinzón</div>
                    <div class="bio">
                        Estudiante de Ingeniería
                        <p>10mo semestre </p>
                    </div>
                    <div class="description">
                        jfpinedap@unal.edu.co
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Sanchez.jpg" alt="Ash"/>
                    <div class="username">Diego Sánchez Cómbita</div>
                    <div class="bio">
                        Estudiante de Ingeniería Mecatrónica
                        <p>10mo semestre</p>
                    </div>
                    <div class="description">
                        dhsanchezc@unal.edu.co
                    </div>
                </div>
            </div>
            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Luna.jpg" alt="Ash"/>
                    <div class="username">Eduardo Luna Silva</div>
                    <div class="bio">
                        Estudiante de Ingeniería Mecatrónica
                        <p>10mo semestre </p>
                    </div>
                    <div class="description">
                        eolunas@unal.edu.co
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Moreno.jpg" alt="Ash"/>
                    <div class="username">José Moreno Calderón</div>
                    <div class="bio">
                        Estudiante de Ingeniería xxxxxx
                        <p>10mo semestre </p>
                    </div>
                    <div class="description">
                        xxxx@unal.edu.co
                    </div>
                </div>
            </div>
        </div>


        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Diseño cuarto refrigerante
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Riano.jpg" alt="Ash"/>
                    <div class="username">David Riaño Medina</div>
                    <div class="bio">
                        Estudiante de Ingeniería Mecánica
                        <p>10mo semestre </p>
                    </div>
                    <div class="description">
                        dlrianom@unal.edu.co
                    </div>
                </div>
            </div>
            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/perfil.jpg" alt="Ash"/>
                    <div class="username">Einer Cante Prieto</div>
                    <div class="bio">
                        Estudiante de Ingeniería Mecánica
                        <p>10mo semestre </p>
                    </div>
                    <div class="description">
                        efcantepr@unal.edu.co
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Moscoso.jpg"/>
                    <div class="username">Diego Moscoso Sichaca</div>
                    <div class="bio">
                        Estudiante de Ingeniería Mecánica
                        <p>10mo semestre </p>
                    </div>
                    <div class="description">
                        dfmoscosos@unal.edu.co
                    </div>
                </div>
            </div>
            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/perfil.jpg"/>
                    <div class="username">Sergio Galán Yaya</div>
                    <div class="bio">
                        Estudiante de Ingeniería de Sistemas
                        <p>7mo semestre </p>
                    </div>
                    <div class="description">
                        scgalany@unal.edu.co
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6 portfolio-item">
                <div class="user-profile">
                    <img class="avatar" src="/img/team/Rico.jpg"/>
                    <div class="username">Juan Rico Molano</div>
                    <div class="bio">
                        Estudiante de Ingeniería Mecánica
                        <p>9no semestre </p>
                    </div>
                    <div class="description">
                        judricomo@unal.edu.co
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <hr>
    <br>
@endsection