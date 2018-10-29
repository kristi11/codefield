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
    <meta name="viewport" content='width=device-width, initial-scale=1.0, maximum-scale=5.0' />
    <meta name="msvalidate.01" content="29855839FCF9DC0E756B92C82A65EBAB" />
    <meta name="yandex-verification" content="49d23e85fa023f71" />
    <meta name="theme-color" content="#4caf50"/>
    <meta name="keywords" content="download everything for free,share your work,share your photography,gain exposure on the web,build your portfolio,work with API,progressive web apps">
    <meta name="description" content="{{config("app.name")}} is a small new platform helping developers,designers and even photographers find tools that will make completing their next project a whole lot easier. From photos to simple html templates to different more complex projects you'll find it all in here.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="manifest" href="/manifest.json">
    <title>{{ config('app.name', 'Codefield') }}</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/material-dashboard.min.css" rel="stylesheet" type="text/css">
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
{{--     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/0.11.1/trix.css">
 --}}
 <link href='//fonts.googleapis.com/css?family=Roboto:400,700,300|Baloo|Material+Icons' rel="stylesheet">
    <meta property="og:image" content="{{url('storage/codefield_logo/29695003_1752978298091934_4637625344562561024_n.png')}}" />
    <link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="/icons/apple-167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-180.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
            .blur-up {
              -webkit-filter: blur(5px);
              filter: blur(5px);
              transition: filter 400ms, -webkit-filter 400ms;
            }

            .blur-up.lazyloaded {
              -webkit-filter: blur(0);
              filter: blur(0);
            }
            .table-responsive::-webkit-scrollbar {
    display: none;
}
  /*.table-responsive {
    padding: 1em;
    border: none;
  }
  .table>tbody>tr>td,
  .table>tbody>tr>th,
  .table>tfoot>tr>td,
  .table>tfoot>tr>th,
  .table>thead>tr>td,
  .table>thead>tr>th {
    border: none;
    min-width: 20em;
    max-width: 20em;
}*/
        </style>
        <script type="application/ld+json">
        {
          "@context" : "http://schema.org",
          "@type" : "organization",
          "name" : "Codefield",
          "url" : "https://codefield.io/",
          "logo" : "https://codefield.io/storage/codefield_logo/signin_logo.png",
          "description": "Codefield is a small new platform helping developers,designers and even photographers find tools that will make completing their next project a whole lot easier. From photos to simple html templates to different more complex projects you'll find it all in here.",
            "sameAs" : "https://www.facebook.com/codefieldcommunity/"
        }
        </script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
{{--<script src='https://www.google.com/recaptcha/api.js'></script> --}}
 <script>
  if ('serviceWorker' in navigator ) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
            // Registration was successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        });
    });
}
 </script>
</head>
