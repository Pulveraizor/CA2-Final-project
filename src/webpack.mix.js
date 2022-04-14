const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */


// mix.js('resources/js/app.js', 'public/js/app.js').sass('resources/sass/app.scss', 'public/css/app.css').postCss('resources/css/app.css', 'public/css/app.css');

mix.setPublicPath('public');

mix.version();

// if (mix.inProduction()) {
// 	mix.sourceMaps();
// }

mix.js('resources/js/app.js', 'public/js/app.js');
mix.sass('resources/sass/app.scss', 'public/css/app.css');