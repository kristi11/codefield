@extends('client.home')
@section('showImage')
<div class="col-md-8 col-md-offset-2">
<div class="card">
    <form method="POST" action="{{ url('i/'.$gallery->id) }}">
     
      {{ csrf_field() }}
        
        <div class="card-header card-chart">
          <picture>
            <img style="     image-rendering: -moz-crisp-edges;
    image-rendering: -o-crisp-edges;
    image-rendering: -webkit-optimize-contrast;
    -ms-interpolation-mode: nearest-neighbor; 
    height:100%;object-fit: cover;" class="img-responsive img-rounded" 
            src="{{asset('storage/galleries/'.$gallery->gallery_image)}}" 
            {{-- srcset="{{asset('storage/gallery_thumbnails/'.$gallery->gallery_image)}} 800w" 
            sizes="(max-width:800px) 800w" --}}
            alt="{{$gallery->alternative_text}}">
          </picture>
        </div>
      <div class="card-content">
      	<div class="row text-center">
          <p class="category">{{ ucwords(substr($gallery->alternative_text,0,-12)) }}</p>                
          @if($gallery->views == 0)
            <p class="category">No views</p>
          @elseif($gallery->views == 1)
            <p class="category">{{$gallery->views}} view</p>
          @else
            <p class="category">{{$gallery->views}} views</p>
          @endif

          @if($gallery->downloads == 0)
            <p class="category">No downloads</p>
          @elseif($gallery->downloads == 1)
            <p class="category">{{$gallery->downloads}} download</p>
          @else
            <p class="category">{{$gallery->downloads}} downloads</p>
          @endif
	         <p class="category">Dimensions: {{ $w.'x'.$h.' px' }}</p>                
	         <p class="category">Size: {{$size.' Mb'}}</p>
	         <p class="category">Type: {{$type}}</p>
	         <p class="category">Category:
	             @foreach($category as $c)
	             	 <a href="{{ url('category/'.$c->name) }}"> {{ $c->name }}</a>
	             @endforeach
	         </p>
	         <p class="category">
	         	Posted  {{ $gallery->created_at->diffForHumans() }}
	         </p>
		</div>
      <h4 class="title" id="title">{{ $gallery->title }}</h4>
{{--                   <p class="category">{{ $gallery->body }}.</p>
 --}}    
     
      
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