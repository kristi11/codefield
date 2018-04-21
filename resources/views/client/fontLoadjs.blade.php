{{-- <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
 --}}{{-- <script>
  WebFont.load({
    google: {
      families: [@foreach($result->items as $font)'{{$font->family}}',@endforeach]
    }
  });
</script> --}}
<script type="text/javascript">
    WebFontConfig = {
        google: 
        { families: [@foreach($result->items as $font)'{{$font->family}}',@endforeach] }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>