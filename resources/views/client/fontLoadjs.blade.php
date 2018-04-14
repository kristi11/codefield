<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
  WebFont.load({
    google: {
      families: [@foreach($result->items as $font)'{{$font->family}}',@endforeach]
    }
  });
</script>