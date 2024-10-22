const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/welcome.js', 'public/js/welcome.js') // para que la imagen del hospital sea grande
    .sass('resources/sass/app.scss', 'public/css')
    .css('resources/css/app.css', 'public/css') //esto es añadido para la imagen del hospital
    .copy('resources/img', 'public/img') //esto es añadido para la imagen del hospital
    .sourceMaps();
