var elixir = require('laravel-elixir');

/*
elixir(function(mix) {

    mix.sass('app.scss')
        .browserify(['app/app.js'], 'public/js/app/bundle.js')
        .copy('resources/assets/js/app/views', 'public/js/app/views');
});
*/

elixir(function(mix){
    mix.sass('foundation.scss')
        .browserify(['backend/backend.js'], 'public/js/backend/bundle.js');
});
