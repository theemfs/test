var elixir = require('laravel-elixir');

require('laravel-elixir-html-minify');
//elixir.config.publicDir = 'public';


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

elixir(function(mix) {
    // mix.sass('app.scss');

    mix.styles(["bootstrap.css", "custom.css"], 'public/css');

    mix.version('public/css/all.css');

    //mix.html('**/*.html', 'public/html', 'resources/assets/html', {quotes: true, loose: true, empty: true});

    // mix.phpUnit().phpSpec();
    // mix.less('app.less');
});
