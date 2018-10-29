const { mix } = require('laravel-mix');
var SWPrecacheWebpackPlugin = require('sw-precache-webpack-plugin');

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
  //   '/css/material-dashboard.min.css',
  //   '/css/app.css',
  //   'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css',
  //   '//fonts.googleapis.com/css?family=Roboto:400,700,300|Baloo|Material+Icons',
  //   'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
  //   ],'public/css/all.css');

  // mix.scripts([
  // 	'public/js/app.js',
  // 	'public/js/jquery-3.1.0.min.js',
  // 	'public/js/bootstrap.min.js',
  // 	'public/js/material.min.js',
  // 	'public/js/material-dashboard.js',
  // 	'public/js/bootstrap-filestyle.min.js',


  // 	],'public/js/app.js');
mix.webpackConfig({
    plugins: [
    new SWPrecacheWebpackPlugin({
        cacheId: 'pwa',
        filename: 'service-worker.js',
        staticFileGlobs: ['public/**/*.{css,eot,svg,ttf,woff,woff2,js,html,jpg,jpeg,png}'],
        minify: true,
        stripPrefix: 'public/',
        handleFetch: true,
        // dynamicUrlToDependencies: {
        //     '/': ['resources/views/client/home.blade.php']
        // },
        staticFileGlobsIgnorePatterns: [/\.map$/, /mix-manifest\.json$/, /manifest\.json$/, /service-worker\.js$/],
        navigateFallback: '/',
        runtimeCaching: [
            {
                urlPattern: /^https:\/\/fonts\.googleapis\.com\//,
                handler: 'cacheFirst'
            }
            // {
            //     urlPattern: /^https:\/\/www\.thecocktaildb\.com\/images\/media\/drink\/(\w+)\.jpg/,
            //     handler: 'cacheFirst'
            // }
        ],
        // importScripts: ['./js/push_message.js']
    })
    ]
});
