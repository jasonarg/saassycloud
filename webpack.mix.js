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

mix.js('resources/assets/js/app.js', 'public/js').extract(['lodash', 'axios', 'vue', 'chart.js', 'd3', 'json-loader']);

mix.version();
mix.sourceMaps();

mix.sass('resources/assets/sass/app.scss', 'public/css').version();

mix.copyDirectory('resources/assets/i', 'public/i');

if(!mix.inProduction()) {
    mix.browserSync('saassycloud.dev');
}

