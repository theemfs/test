var elixir = require('laravel-elixir');

elixir.config.publicDir = 'public';


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

    // mix.phpUnit().phpSpec();
    // mix.less('app.less');
});
