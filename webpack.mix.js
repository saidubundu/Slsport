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
   .sass('resources/sass/app.scss', 'resources/sass/_bootstrap-datetimepicker.scss','public/css')
    .options({
        processCssUrls: false
    });

// mix.styles([
//
//     'resources/css/fontawesome.css',
//     'resources/css/vendor.bundle.base.css',
//     'resources/css/bootstrap.css',
//     'resources/css/datepicker.css',
//     'resources/css/style.css',
//
//
//
// ], './public/css/libs.css');

mix.styles([

    'resources/css/front/vendor/bootstrap.min.css',
    'resources/css/front/vendor/font-awesome.min.css',
    'resources/css/front/vendor/owl.carousel.min.css',
    'resources/css/front/vendor/animate.css',
    'resources/css/front/vendor/magnific-popup.css',
    'resources/css/front/vendor/jquery-ui.min.css',
    'resources/css/front/style.css',
    'resources/css/front/responsive.css',

], './public/css/front.css');


mix.styles([

    'resources/css/admin/simple-line-icons.min.css',
    'resources/css/admin/font-awesome.min.css',
    'resources/css/admin/material-icon.css',
    'resources/css/admin/bootstrap.min.css',
    'resources/css/admin/material.min.css',
    'resources/css/admin/material_style.css',
    'resources/css/admin//animate_page.css',
    'resources/css/admin/plugins.min.css',
    'resources/css/admin/style.css',
    'resources/css/admin/responsive.css',
    'resources/css/datepicker.css',
    'resources/css/admin/theme-color.css',

], './public/css/admin.css');
















mix.scripts([

    'resources/js/libs/vendor.bundle.base.js',
    'resources/js/libs/bootstrap.js',
    'resources/js/libs/off-canvas.js',
    'resources/js/libs/hoverable-collapse.js',
    'resources/js/libs/datepicker.js',
    'resources/js/libs/datepicker.en.js',
    'resources/js/libs/template.js',
    'resources/js/libs/settings.js',
    'resources/js/libs/dashboard.js',
], './public/js/libs.js' );

mix.scripts([

    'resources/js/admin/jquery.min.js',
    'resources/js/admin/popper.min.js',
    'resources/js/admin/jquery.blockui.min.js',
    'resources/js/admin/bootstrap.min.js',
    'resources/js/libs/datepicker.js',
    'resources/js/libs/datepicker.en.js',
    'resources/js/admin/jquery.sparkline.min.js',
    'resources/js/admin//sparkline-data.js',
    'resources/js/admin/app.js',
    'resources/js/admin/layout.js',
    'resources/js/admin/theme-color.js',
    'resources/js/admin/material.min.js',
    'resources/js/admin/animations.js',
], './public/js/admin.js' );







mix.scripts([

    'resources/js/front/vendor/jquery-3.2.1.min.js',
    'resources/js/front/vendor/jquery-migrate.js',
    'resources/js/front/vendor/popper-1.12.3.min.js',
    'resources/js/front/vendor/bootstrap.min.js',
    'resources/js/front/vendor/owl.carousel.min.js',
    'resources/js/front/vendor/jquery.magnific-popup.min.js',
    'resources/js/front/vendor/countdown.js',
    'resources/js/front/vendor/jquery.counterup.min.js',
    'resources/js/front/vendor/waypoints-jquery.js',
    'resources/js/front/vendor/jquery-ui.min.js',
    'resources/js/front/vendor/wow.min.js',
    'resources/js/front/main.js',



    'resources/js/front/vendor/wow.min.js',
], './public/js/front.js' );
