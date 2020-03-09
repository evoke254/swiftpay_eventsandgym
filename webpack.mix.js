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

 /*
    .copy('resources/js/fullcalendar.js', 'public/js/kahaki/fullcalendar.js')
    .copy('resources/js/moment_.js', 'public/js/kahaki/moment_.js')
    .copy('resources/themes/css/kahaki/fullcalendar.css', 'public/css/fullcalendar.css')
*/

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles(
    		['resources/sass/kahaki.css'], 
    			'public/css/kahaki.css')    
    .copy('resources/themes/css/kahaki/animate.min.css', 'public/css/animate.css')
    .copy('resources/themes/css/kahaki/style.min.css', 'public/css/style.min.css')
    .copy('resources/themes/css/kahaki/style-responsive.min.css', 'public/css/style-responsive.min.css')


    .copy('resources/themes/blog/style.min.css', 'public/css/blog/style.min.css')
    .copy('resources/themes/blog/style-responsive.min.css', 'public/css/blog/style-responsive.min.css')


    .copy('resources/themes/css/kahaki/theme/green.css', 'public/css/theme.css')
    .copy('resources/themes/css/kahaki/tempus.min.css', 'public/css/tempus.css')
    .copy('resources/js/stepper.js', 'public/js/kahaki/stepper.js')
    .copy('resources/js/botman.js', 'public/js/kahaki/botman.js')
    .copy('resources/js/lightgallery-all.min.js', 'public/js/kahaki/lightgallery-all.min.js')
    .copy('resources/js/pace/pace.min.js', 'public/js/kahaki/pace.js');
