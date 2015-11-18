@extends('main')

@section('header')

    @include('partials.innerHeader')

@endsection

@section('content')

    @include('partials.forms.cuartosCreateForm')

    @include('partials.catalogo')

@endsection

@section('bottomScripts')
    @parent
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery("#ancho").TouchSpin({
                min: 3.5,
                max: 10,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: 'm'
            });

            jQuery("#largo").TouchSpin({
                min: 3.1,
                max: 10,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: 'm'
            });

            jQuery("#alto").TouchSpin({
                min: 3,
                max: 4,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: 'm'
            });

            jQuery("#temperatura").TouchSpin({
                min: 10,
                max: 35,
                step: 1.0,
                decimals: 1,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '°C'
            });

            jQuery("#peso").TouchSpin({
                min: 0,
                max: 100,
                step: 0.01,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: 'Kg'
            });

            jQuery('.info-icon').popover();

            @if(!empty($posted))
                alertControllers.requestSuccessAlert();
            @endif

        });
    </script>
@endsection