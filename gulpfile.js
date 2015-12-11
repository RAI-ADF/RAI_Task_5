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

elixir(function(mix) {
    mix.scripts([
        './resources/assets/bower/jquery/dist/jquery.min.js',
        './resources/assets/bower/bootstrap/dist/js/bootstrap.min.js',
        './resources/assets/bower/datatables/media/js/jquery.dataTables.min.js',
        './resources/assets/bower/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js'
    ]);
    mix.styles([
        './resources/assets/bower/bootswatch/spacelab/bootstrap.min.css',
        './resources/assets/bower/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css',
        './resources/assets/bower/animate.css/animate.min.css',
        'styles.css'
    ]);
    mix.copy('./resources/assets/bower/bootstrap/dist/fonts','public/fonts');
    mix.copy('./resources/assets/bower/datatables/media/images','public/images');
    mix.copy('./resources/assets/bower/datatables-plugins/integration/bootstrap/images','public/images/');
});
