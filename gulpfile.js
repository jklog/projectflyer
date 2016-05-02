// var gulp        = require('gulp'),
//     elixir      = require('laravel-elixir'),
//     plumber     = require('gulp-plumber');

// gulp.task('default', function() {
// });

// gulp.task('watch', function() {
//     gulp.watch('resources/**', ['default']);
//     elixir(function(mix) {
//         mix
//         .sass('styles.scss', 'public/css')
//         .scripts(null,
//             'public/js/all.js',
//             'resources/assets/js'
//         )
//         .version([
//             'public/css/styles.css',
//             'public/js/all.js'
//         ])
//     }).pipe(plumber());
// });

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
    mix.sass('app.scss');

});


// console.log(elixir);


