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


// <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
// <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
//     <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
//     <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps()
    .version();

// mix.styles(['node_modules/@fortawesome/fontawesome-free/css/all.css'], 'public/css/fontawesome.css').version();

// mix.sass('resources/sass/font-awesome.scss', 'public/css/fontawesome.css').version();
mix.sass('resources/sass/font-awesome.scss', 'public/css/fontawesome.css').version();
