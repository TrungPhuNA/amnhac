let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/mix/home.js', 'public/js')
mix.sass('resources/assets/sass/mix/home.scss', 'public/css');


mix.options({
	processCssUrls: false
})
	.autoload({
		jquery: ['$', 'window.jQuery', 'jQuery'],
	});

if (mix.intourion()) {
	mix.version();
}
