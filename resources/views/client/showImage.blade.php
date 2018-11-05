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
      	<div class="row text-center">
          <h5 class="category">{{ ucwords(substr($gallery->alternative_text,0,-12)) }}</h5>
          @if($gallery->views == 0)
            <h5 class="category">No views</h5>
          @elseif($gallery->views == 1)
            <h5 class="category">{{$gallery->views}} view</h5>
          @else
            <h5 class="category">{{$gallery->views}} views</h5>
          @endif

          @if($gallery->downloads == 0)
            <h5 class="category">No downloads</h5>
          @elseif($gallery->downloads == 1)
            <h5 class="category">{{$gallery->downloads}} download</h5>
          @else
            <h5 class="category">{{$gallery->downloads}} downloads</h5>
          @endif
	         <h5 class="category">Dimensions: {{ $w.'x'.$h.' px' }}</h5>
	         <h5 class="category">Size: {{$size.' Mb'}}</h5>
	         <h5 class="category">Type: {{$type}}</h5>
	         <h5 class="category">Category:
	             @foreach($category as $c)
	             	 <a href="{{ url('category/'.$c->name) }}"> {{ $c->name }}</a>
	             @endforeach
	         </h5>
	         <p class="category">
	         	Posted  {{ $gallery->created_at->diffForHumans() }}
	         </p>
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
@endsection