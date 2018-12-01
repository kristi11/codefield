@extends('client.home')
@section('showImage')
<style>
  a:active, a:hover {
   color: #4caf50;
   opacity: 0.8;
}
a {
    color: #4caf50;
}
</style>
<div class="col-md-8 col-md-offset-2">
<div class="card">
    <form method="POST" action="{{ url('i/'.$gallery->id) }}">
      {{ csrf_field() }}
        <div class="card-header card-chart">
          <picture>
            <source
            media = "(min-width:860px)"
            data-srcset="{{asset('storage/large_photos/'.$gallery->gallery_image.' 860w')}}">
            <source
            media = "(min-width:420px)"
            data-srcset = "{{asset('storage/medium_photos/'.$gallery->gallery_image.' 640w')}}" >
            <source
            media = "(max-width:420px)"
            data-srcset = "{{asset('storage/mobile_photos/'.$gallery->gallery_image.' 420w')}}" >
            <img style="height:100%;object-fit: cover;" class="lazyload blur-up"
            src="{{asset('storage/tiny_photos/'.$gallery->gallery_image)}}"
            data-src="{{asset('storage/medium_photos/'.$gallery->gallery_image)}}"
            alt="{{$gallery->alternative_text}}">
          </picture>
        </div>
      <div class="card-content">
        <div class="text-center">
              <div class="addthis_inline_share_toolbox_gh70"
                data-url="{{ url('g_photo/'.$gallery->unique_id) }}"
                data-title="{{ $gallery->alternative_text }}"
                data-media="{{ asset('storage/medium_photos/'.$gallery->gallery_image) }}">
              </div>
        </div>
      	<div class="col-xs-12 text-center form-group">

        <div class="col-xs-6">
          <h5 class="category"><i class="material-icons">person</i> <span class="hidden-xs">Author</span></h5>
          <p>{{ ucwords(substr($gallery->alternative_text,0,-19)) }}</p>
          <a href="{{ url($gallery->user->slug.'/u/photos') }}">{{$gallery->user->name}}</a>
        </div>

        <div class="col-xs-6">
          <h5 class="category"><i class="material-icons">remove_red_eye</i> <span class="hidden-xs">Views</span></h5>
          @if($gallery->views == 0)
            <p>No views</p>
          @elseif($gallery->views == 1)
            <p>{{$gallery->views}}</p>
          @else
            <p>{{$gallery->views}}</p>
          @endif
        </div>

        <div class="col-xs-6">
          <h5 class="category"><i class="material-icons">get_app</i> <span class="hidden-xs">Downloads</span></h5>
          @if($gallery->downloads == 0)
            <p>No downloads</p>
          @elseif($gallery->downloads == 1)
            <p>{{$gallery->downloads}}</p>
          @else
            <p>{{$gallery->downloads}}</p>
          @endif
        </div>

        <div class="col-xs-6">
          <h5 class="category"><i class="material-icons">photo_size_select_large</i> <span class="hidden-xs">Dimensions</span></h5>
          <p>{{ $w.'x'.$h.' px' }}</p>
        </div>

         <div class="col-xs-6">
          <h5 class="category"><i class="material-icons">photo_size_select_actual</i> <span class="hidden-xs">Size</span></h5>
          <p>{{$size.' Mb'}}</p>
         </div>

         <div class="col-xs-6">
          <h5 class="category"><i class="material-icons">extension</i> <span class="hidden-xs">Type</span></h5>
          <p>{{$type}}</p>
         </div>

         <div class="col-xs-6">
          <h5 class="category"><i class="material-icons">filter_list</i> <span class="hidden-xs">Category</span></h5>
            <p>
              @foreach($category as $c)
              	<a href="{{ url('category/'.$c->name) }}"> {{ $c->name }}</a>
              @endforeach
            </p>
         </div>

         <div class="col-xs-6">
          <h5 class="category"><i class="material-icons">access_time</i> <span class="hidden-xs">Posted</span></h5>
	        <p>{{ $gallery->created_at->diffForHumans() }}</p>
         </div>
		</div>
      <h4 class="title" id="title">{{ $gallery->title }}</h4>
      <div class="text-right">
      <button class="btn btn-{{$item->font_color}}" type="submit" id="p_edit">
        Download
      </button>
      </div>
      </div>
    </form>
 </div>
 </div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bfcbfee60b9e4b3"></script>
@endsection