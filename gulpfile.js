var elixir = require('laravel-elixir');

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

var bowerPath = "./resources/assets/bower/";

var paths = {
    'bootstrap': bowerPath + 'bootstrap-sass/assets/',
    'jquery': bowerPath + 'jquery/dist/',
    'fontAwesome': bowerPath + 'font-awesome/'
};

elixir(function (mix) {
    mix.copy([
            paths.bootstrap + 'fonts/',
            paths.fontAwesome + 'fonts/'
        ],
        'public/fonts/'
    );

    mix.sass([
            'app.scss',
            paths.fontAwesome + 'scss/font-awesome.scss'
        ],
        'public/css/all.css', {
            includePaths: [
                paths.bootstrap + 'stylesheets'
            ]
        }
    );

    mix.scripts([
        paths.jquery + 'jquery.js',
        paths.bootstrap + 'javascripts/bootstrap.js'
    ]);
});
