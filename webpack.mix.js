const mix = require('laravel-mix');


mix.sass('resources/assets/sass/app.scss', 'public/assets/css')
    .scripts([
        'resources/assets/bower_components/jquery/jquery.js',
        'resources/assets/new-assets/js/plugins.js',
        'resources/assets/bower_components/select2/dist/js/select2.full.min.js',
        'resources/assets/bower_components/jquery-cookie-master/src/jquery.cookie.js',
        'resources/assets/new-assets/js/script.js',
        'resources/assets/new-assets/js/validation.js',
        'resources/assets/bower_components/bootstrap/js/bootstrap.min.js',
        'resources/assets/new-assets/js/all.js'
    ], 'public/assets/js/app.js')
    .copyDirectory('resources/assets/new-assets/img', 'public/assets/images')
    .sourceMaps();

if(mix.inProduction()){
    mix.version();
}
