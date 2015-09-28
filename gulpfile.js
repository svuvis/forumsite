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

elixir.config.sourcemaps = false;

elixir(function(mix) {
    mix.sass('forum.scss','resources/assets/css');

    mix.styles([
        'bootstrap.css',
        'animate.css',
        'elements.css',
        'custom.css',
        'font-awesome.css',
        'gfonts.css',
        'swipebox.css',
        'forum.css'
    ]);

    mix.scripts([
        'jquery-2.1.4.min.js',
        'bootstrap.js',
        'custom.js',
        'scrolltopcontrol.js',
        'TweenMax.min.js',
        'ScrollToPlugin.min.js',
        'smoothscroll.js',
        'jquery.swipebox.js'
    ]);

    mix.copy('resources/assets/libs/fonts', 'public/fonts');
    mix.copy('resources/assets/img', 'public/img');
    mix.copy('resources/assets/libs/licenses', 'public/licenses');
});
