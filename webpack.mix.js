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
   .sass('resources/sass/app.scss', 'public/css');

mix.styles([

    'resources/css/fontawesome.css',
    'resources/css/vendor.bundle.base.css',
    'resources/css/bootstrap.css',
    'resources/css/style.css',



], './public/css/libs.css');

mix.scripts([

    'resources/js/libs/vendor.bundle.base.js',
    'resources/js/libs/bootstrap.js',
    'resources/js/libs/off-canvas.js',
    'resources/js/libs/hoverable-collapse.js',
    'resources/js/libs/template.js',
    'resources/js/libs/settings.js',
    'resources/js/libs/dashboard.js',




], './public/js/libs.js' );
