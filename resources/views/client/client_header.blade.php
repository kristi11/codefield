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
 <link href='//fonts.googleapis.com/css?family=apercu|Roboto:400,700,300|Baloo|Material+Icons' rel="stylesheet">
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
.aa-input-container {
  display: inline-block;
  position: relative; }
.aa-input-search {
  width: 300px;
  padding: 12px 28px 12px 12px;
  border: 2px solid #e4e4e4;
  border-radius: 4px;
  -webkit-transition: .2s;
  transition: .2s;
  font-family: "Montserrat", sans-serif;
  box-shadow: 4px 4px 0 rgba(241, 241, 241, 0.35);
  font-size: 11px;
  box-sizing: border-box;
  color: #333;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }
  .aa-input-search::-webkit-search-decoration, .aa-input-search::-webkit-search-cancel-button, .aa-input-search::-webkit-search-results-button, .aa-input-search::-webkit-search-results-decoration {
    display: none; }
  .aa-input-search:focus {
    outline: 0;
    border-color: #3a96cf;
    box-shadow: 4px 4px 0 rgba(58, 150, 207, 0.1); }
.aa-input-icon {
  height: 16px;
  width: 16px;
  position: absolute;
  top: 50%;
  right: 16px;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  fill: #e4e4e4; }
.aa-hint {
  color: #e4e4e4; }
.aa-dropdown-menu {
  background-color: #fff;
  border: 2px solid rgba(228, 228, 228, 0.6);
  border-top-width: 1px;
  font-family: "Montserrat", sans-serif;
  width: 300px;
  margin-top: 10px;
  box-shadow: 4px 4px 0 rgba(241, 241, 241, 0.35);
  font-size: 11px;
  border-radius: 4px;
  box-sizing: border-box; }
.aa-suggestion {
  padding: 12px;
  border-top: 1px solid rgba(228, 228, 228, 0.6);
  cursor: pointer;
  -webkit-transition: .2s;
  transition: .2s;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center; }
  .aa-suggestion:hover, .aa-suggestion.aa-cursor {
    background-color: rgba(241, 241, 241, 0.35); }
  .aa-suggestion > span:first-child {
    color: #333; }
  .aa-suggestion > span:last-child {
    text-transform: uppercase;
    color: #a9a9a9; }
.aa-suggestion > span:first-child em, .aa-suggestion > span:last-child em {
  font-weight: 700;
  font-style: normal;
  background-color: rgba(58, 150, 207, 0.1);
  padding: 2px 0 2px 2px; }

  @media (max-width: 992px) {
    .aa-input-search {
      width: 20rem;
    }
    .aa-dropdown-menu {
      width: 20rem;
    }
  }
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
  if (!navigator.onLine) {
    return 'offline.html';
  }
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
