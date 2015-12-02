<div id="innerHeaderWrap" class="container-fluid">
    <div class="row">
        <div class="col-xs-12 no-padding">
            <div id="innerHeader">
                <div class="col-xs-12 col-md-4">

                    <div class="logo-container">
                        <a href="/" title="Auto Design Solutions">
                            <img src="img/logo.png" />
                            <span class="logoBlue hidden-xs hidden-sm">Auto</span>
                            <span class="logoGray hidden-xs hidden-sm">Design</span>
                            <span class="logoOrange hidden-xs hidden-sm">Solutions</span>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-md-8 pull-right">
                    <ul id="headerMenu" class="nav nav-pills hidden-xs hidden-sm pull-right">
                        <li role="presentation" @if($currentPage == 'inicio') class="active" @endif><a href="/">Inicio</a></li>
                        <li role="presentation" @if($currentPage == 'empresa') class="active" @endif><a href="/nuestra-empresa">Nuestra Empresa</a></li>
                        <li role="presentation" @if($currentPage == 'cuartos') class="active" @endif><a href="/cuartos-frios-a-medida">Cuartos Frios</a></li>
                        <li role="presentation" @if($currentPage == 'cocinas') class="active" @endif><a href="/cocinas-a-medida">Cocinas</a></li>
                        <li role="presentation" @if($currentPage == 'contacto') class="active" @endif><a href="#">Escríbenos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>