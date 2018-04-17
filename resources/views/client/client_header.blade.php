<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116666076-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-116666076-1');
  </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=5.0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="theme-color" content="#4caf50"/>
    <meta name="description" content="{{config("app.name")}} is a small platform helping developers and designers find tools that will make completing their next project a whole lot easier.From simple html templates to different more complex projects(laravel,php,C#,vue js,adobe CC and much much more..),google fonts,High quality images you'll find them all in here..and more and more content is added every day.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="manifest" href="{{url('/manifest.json')}}">
    <title>{{ config('app.name', 'Codefield') }}</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/material-dashboard.min.css" rel="stylesheet" type="text/css">
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" /> 
{{--     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/0.11.1/trix.css">
 --}}    <link href='//fonts.googleapis.com/css?family=Roboto:400,700,300|Alfa Slab One|Material+Icons' rel="stylesheet" >
    <meta property="og:image" content="{{url('storage/codefield_logo/29695003_1752978298091934_4637625344562561024_n.png')}}" />
{{--     <script>
!function(t){"use strict";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement("link").relList.supports("preload")}catch(t){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){var e=t.media||"all";function a(){t.media=e}t.addEventListener?t.addEventListener("load",a):t.attachEvent&&t.attachEvent("onload",a),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(a,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName("link"),n=0;n<a.length;n++){var o=a[n];"preload"!==o.rel||"style"!==o.getAttribute("as")||o.getAttribute("data-loadcss")||(o.setAttribute("data-loadcss",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener("load",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent("onload",function(){e.poly(),t.clearInterval(a)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}("undefined"!=typeof global?global:this);
</script> --}}
    <link  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <style name="FontAwesome">
            @font-face {
              font-family: 'FontAwesome';
              src: url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot');
              src: url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot?#iefix') format('embedded-opentype'),
                   url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2') format('woff2'),
                   url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff') format('woff'),
                   url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf') format('truetype'),
                   url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.svg?#fontawesomeregular') format('svg');
              font-weight: normal;
              font-style: normal;
            }
        </style>
        <script type="application/ld+json">
        {
          "@context" : "http://schema.org",
          "@type" : "Product",
          "name" : "Codefield",
          "url" : "https://codefield.io/",
          "brand" : {
            "@type" : "Brand",
            "name" : "Codefield",
            "logo" : "https://codefield.io/storage/codefield_logo/signin_logo.png"
          },
          "description": "Codefield is a small platform helping developers and designers find tools that will make completing their next project a whole lot easier.From simple html templates to different more complex projects(laravel,php,C#,vue js,adobe CC and much much more..),google fonts,High quality images you'll find them all in here..and more and more content is added every day."
        }
        </script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
{{--     <script src='https://www.google.com/recaptcha/api.js'></script>
 --}}
 <script>
   if (‘serviceWorker’ in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('./service-worker.js');
  })
}
 </script>
</head>
