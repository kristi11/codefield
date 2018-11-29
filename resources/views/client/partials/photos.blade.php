<div class="container-fluid">
    <h2>Popular photos</h2>
</div>
<div class="card-content table-responsive">
    <table class="table text-center">
        <tr>
@foreach ($gallery as $p)
<td>
    <div class="card nospace">
        <a href="{{ url('g_photo/'.$p->unique_id) }}" rel="tooltip" data-placement="bottom" data-original-title="See more..">
           <img style="object-fit:cover;height: 198px;" class="lazyload blur-up"
            src="{{asset('storage/tiny_photos/'.$p->gallery_image)}}"
            alt="{{$p->alternative_text}}"
            data-sizes="auto"
            data-src="{{asset('storage/medium_photos/'.$p->gallery_image)}}"
            data-srcset="{{asset('storage/medium_photos/'.$p->gallery_image.' 860w')}},
            {{asset('storage/medium_photos/'.$p->gallery_image.' 640w')}},
            {{asset('storage/mobile_photos/'.$p->gallery_image.' 420w')}}"
          >
        </a>
    </div>
</td>
@endforeach
</tr>
    </table>
</div>