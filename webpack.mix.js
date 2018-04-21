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
mix.webpackConfig({
    plugins: [
    new SWPrecacheWebpackPlugin({
        cacheId: 'pwa',
        filename: 'service-worker.js',
        staticFileGlobs: ['public/**/*.{css,eot,svg,ttf,woff,woff2,js,html}'],
        minify: true,
        stripPrefix: 'public/',
        handleFetch: true,
        staticFileGlobsIgnorePatterns: [/\.map$/, /mix-manifest\.json$/, /manifest\.json$/, /service-worker\.js$/],
        dynamicUrlToDependencies: {
          '/': ['resources/views/client/home.blade.php','resources/views/client/signIn.blade.php',
          'resources/views/errors.blade.php','resources/views/flashMessages/flashMessage.blade.php'],
          '/submit_project' : ['resources/views/client/submit_request.blade.php'],
          '/addPhotos' : ['resources/views/client/addPhotos.blade.php'],
          '/clientLogout' : ['resources/views/auth/login.blade.php'],
          '/clientSearch' : ['resources/views/client/clientSearchResults.blade.php'],
          '/projects' : ['resources/views/client/widgets.blade.php'],
          '/photos' :['resources/views/client/clientGallery.blade.php'],
          '/photos/'+{gallery_image} :['resources/views/client/showImage.blade.php'],
          '/category/'+{tag} :['resources/views/client/clientGallery.blade.php'],
          '/newest' :['resources/views/client/clientGallery.blade.php'],
          '/oldest' :['resources/views/client/clientGallery.blade.php'],
          '/trending' :['resources/views/client/clientGallery.blade.php'],
          '/mostPopular' :['resources/views/client/clientGallery.blade.php'],
          '/googleFonts' :['resources/views/client/googleFonts.blade.php'],
          '/favorites' :['resources/views/client/favorites.blade.php'],
          '/mostDownloadedProjects' :['resources/views/client/widgets.blade.php'],
          '/mostViewedProjects' :['resources/views/client/widgets.blade.php'],
          '/projects/category/'+{category} : ['resources/views/client/widgets.blade.php'],
          '/notLoggedIn' : ['resources/views/client/signIn.blade.php'],
          '/privacyPolicy' : ['resources/views/policies/privacyPolicy.blade.php'],
          '/termsAndConditions' : ['resources/views/policies/termsAndConditions.blade.php'],
          '/cookiePolicy' : ['resources/views/policies/cookiePolicy.blade.php'],
          '/license' : ['resources/views/policies/mitLicense.blade.php'],
          '/guidelines' : ['resources/views/policies/photoGuidelines.blade.php'],
          '/'+{slug}+'/projects' : ['resources/views/client/partials/userProjects.blade.php'],
          '/'+{slug}+'/photos' : ['resources/views/client/partials/userPhotos.blade.php'],
          '/'+{slug}+'/photos' : ['resources/views/client/partials/userPhotos.blade.php'],
          '/'+{slug}+'/u/photos' : ['resources/views/client/partials/uPhotos.blade.php'],
          '/'+{slug}+'/u/projects' : ['resources/views/client/partials/uProjects.blade.php']
        },
        navigateFallback: '/',
        runtimeCaching: [
            {
                urlPattern: /^https:\/\/fonts\.googleapis\.com\//,
                handler: 'cacheFirst'
            },
            {
                urlPattern: /^https:\/\/www\.thecocktaildb\.com\/images\/media\/drink\/(\w+)\.jpg/,
                handler: 'cacheFirst'
            }
        ],
        // importScripts: ['./js/push_message.js']
    })
    ]
});
