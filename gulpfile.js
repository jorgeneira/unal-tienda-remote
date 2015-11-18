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

elixir(function (mix) {

	mix.sass('bootstrap.scss', 'tienda/css');

	mix.less('custom.less', 'tienda/css');

	mix.styles([

		'tienda/css/bootstrap.css',
		'tienda/css/font-awesome.css',
		'tienda/css/animate.min.css',
		'tienda/css/main-template.css',
		'tienda/css/owl.carousel.css',
		'tienda/css/owl.theme.css',
		'tienda/css/responsive.css',
		'tienda/css/typography.css',
		'tienda/css/jquery.bootstrap-touchspin.min.css',
		'tienda/css/custom.css',
		'node_modules/sweetalert/dist/sweetalert.css'

	], 'tienda/css', '.');

	mix.scripts([

		'tienda/js/vendor/modernizr-2.8.3.min.js',
		'tienda/js/queryloader2.min.js',
		'bower_components/jquery/dist/jquery.min.js',
		'tienda/js/vendor/bootstrap.min.js',
		'tienda/js/jquery.bootstrap-touchspin.min.js',
		'tienda/js/wow.min.js',
		'node_modules/sweetalert/dist/sweetalert.min.js',
		'tienda/js/jquery.appear.js',
		'tienda/js/jquery.easing.min.js',
		'tienda/js/imagesloaded.pkgd.min.js',
		'tienda/js/isotope.pkgd.min.js',
		'tienda/js/owl.carousel.min.js',
		'tienda/js/waypoint.js',
		'tienda/js/modules/alertsController.js',
		'tienda/js/main.js'

	], 'tienda/js', '.');

	mix.version(['css/all.css', 'js/all.js']);

	mix.browserSync({
		proxy: 'remote.unal'

	});

});
