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
    <meta property="fb:app_id" content="179144595974114" />
    <meta property="og:type" content="article" />
    <meta property="twitter:card" content="summary" />
    <meta property="twitter:site" content="@CodefieldC" />
    @if (strpos($_SERVER['REQUEST_URI'], 'g_product') !== false )
    <meta property="og:url" content="{{ url('g_product/'.$widget->title) }}" />
    <meta property="og:image" content="{{ asset('storage/avatars/'.$widget->image) }}" />
    <meta property="og:title" content="{{ $widget->dsc_title }}" />
    <meta property="og:description" content="This product is posted on {{config('app.name')}}. Click to learn more about it." />

    <meta property="twitter:url" content="{{ url('g_product/'.$widget->title) }}" />
    <meta property="twitter:image" content="{{ asset('storage/avatars/'.$widget->image) }}" />
    <meta property="twitter:title" content="{{ $widget->dsc_title }}" />
    <meta property="twitter:description" content="This product is posted on {{config('app.name')}}. Click to learn more about it." />
    @elseif(strpos($_SERVER['REQUEST_URI'], 'g_photo') !== false)
    <meta property="og:url" content="{{ url('g_photo/'.$gallery->unique_id) }}" />
    <meta property="og:image" content="{{ asset('storage/medium_photos/'.$gallery->gallery_image) }}" />
    <meta property="og:title" content="{{ $gallery->alternative_text }}" />
    <meta property="og:description" content="This photo is posted on {{config('app.name')}}. Click to learn more about it." />

    <meta property="twitter:url" content="{{ url('g_photo/'.$gallery->unique_id) }}" />
    <meta property="twitter:image" content="{{ asset('storage/medium_photos/'.$gallery->gallery_image) }}" />
    <meta property="twitter:title" content="{{ $gallery->alternative_text }}" />
    <meta property="twitter:description" content="This photo is posted on {{config('app.name')}}. Click to learn more about it." />
    @endif
    <link rel="manifest" href="/manifest.json">
    <title>{{ config('app.name', 'Codefield') }}</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/material-dashboard.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom_css.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
{{--     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/0.11.1/trix.css">
 --}}
    <link href='//fonts.googleapis.com/css?family=apercu|Roboto:400,700,300|Black+Han+Sans|Material+Icons' rel="stylesheet">
    <link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="/icons/apple-167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-180.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
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
 <script>
  function handleConnectionChange(event){
  if(event.type == "offline"){
       return 'offline.html';
    }
  }
    window.addEventListener('offline', handleConnectionChange);
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
