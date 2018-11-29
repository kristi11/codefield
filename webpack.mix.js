const { mix } = require('laravel-mix');
var SWPrecacheWebpackPlugin = require('sw-precache-webpack-plugin');


mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'public/css/material-dashboard.css',
    ],'public/css/material-dashboard.min.css');

mix.styles([
    'public/css/custom_css.css',
    ],'public/css/custom_css.min.css');

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
            //     handler: 'cacheFirst'
            // }
        ],
        // importScripts: ['./js/push_message.js']
    })
    ]
});
