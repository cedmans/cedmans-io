require('dotenv').config();

const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix
        .sass('app.scss', null, null, {
            includePaths: ['node_modules/foundation-sites/scss']
        })
        .webpack('app.js')
        .version(['css/app.css', 'js/app.js'])
        .browserSync({
            proxy: process.env.GULP_BROWSERSYNC_PROXY
        })
    ;
});
