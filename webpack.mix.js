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

 mix.styles(['resources/views/site/css/reset.css', 'resources/views/site/css/style.css'], 'public/site/css/style.css')
    .scripts('resources/views/site/js/script.js','public/site/js/script.js')
    .scripts('node_modules/jquery/dist/jquery.js','public/jquery/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/bootstrap/bootstrap.js')
    .sass('node_modules/bootstrap/scss/bootstrap.scss','public/bootstrap/bootstrap.css')
    .version();
