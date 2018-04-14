const { mix } = require('laravel-mix');

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
// mix.browserSync('http://localhost/');
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


  // mix.styles([
  //   'public/css/bootstrap.min.css',
  //   ],'public/css/bootstrap.min.css');

  //  mix.styles([
  //   'public/css/material-dashboard.css',
  //   ],'public/css/material-dashboard.css');

  //   mix.styles([
  //   'public/css/app.css',
  //   ],'public/css/app.css');

  // mix.scripts([
  // 	'public/js/app.js',
  // 	'public/js/jquery-3.1.0.min.js',
  // 	'public/js/bootstrap.min.js',
  // 	'public/js/material.min.js',
  // 	'public/js/material-dashboard.js',
  // 	'public/js/bootstrap-filestyle.min.js',
    

  // 	],'public/js/app.js');
