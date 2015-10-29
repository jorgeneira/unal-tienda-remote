var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('bootstrap.scss', 'unal/css');
	mix.styles(['unal/css/bootstrap.css', 'node_modules/sweetalert/dist/sweetalert.css'], 'unal/build/css', '.');
	mix.scripts(['bower_components/jquery/dist/jquery.min.js','node_modules/sweetalert/dist/sweetalert.min.js'], 'unal/build/js', '.');
});
