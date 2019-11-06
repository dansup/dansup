let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
.sass('resources/assets/sass/app.scss', 'public/css')
.extract([
	'lodash',
	'popper.js',
	'jquery',
	'axios',
	'bootstrap'
])
.version();
