@extends('client.client')
@section('g_photo')

<style>
  a:active, a:hover {
   color: #4caf50;
   opacity: 0.8;
}

a {
    color: #4caf50;
}
</style>
<div style="margin-top: 5em;" class="wrapper">
<div class="col-md-8 col-md-offset-2">
<div class="card">
    <form method="POST" action="{{ url('i/'.$gallery->id) }}">
     
      {{ csrf_field() }}
        
        <div class="card-header card-chart">
          <picture>
            <source
            media = "(min-width:860px)"
            srcset="{{asset('storage/large_photos/'.$gallery->gallery_image.' 860w')}}">
            <source 
            media = "(min-width:420px)"
            srcset = "{{asset('storage/medium_photos/'.$gallery->gallery_image.' 640w')}}" >
            <source 
            media = "(max-width:420px)"
            srcset = "{{asset('storage/mobile_photos/'.$gallery->gallery_image.' 420w')}}" >
            <img style="height:100%;object-fit: cover;" class="img-responsive img-rounded" 
            src="{{asset('storage/medium_photos/'.$gallery->gallery_image)}}" 
            alt="{{$gallery->alternative_text}}">
          </picture>
        </div>
      <div class="card-content">
        <div class="row text-center">
          <p class="category">{{ ucwords(substr($gallery->alternative_text,0,-12)) }}</p>                
          {{-- @if($gallery->views == 0)
            <p class="category">No views</p>
          @elseif($gallery->views == 1)
            <p class="category">{{$gallery->views}} view</p>
          @else
            <p class="category">{{$gallery->views}} views</p>
          @endif --}}

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
           {{-- <p class="category">Category:
               @foreach($category as $c)
                 <a href="{{ url('category/'.$c->name) }}"> {{ $c->name }}</a>
               @endforeach
           </p> --}}
           <p class="category">
            Posted  {{ $gallery->created_at->diffForHumans() }}
           </p>
    </div>
      <h4 class="title" id="title">{{ $gallery->title }}</h4>
{{--                   <p class="category">{{ $gallery->body }}.</p>
 --}}    
     
      
      <div class="text-right">
      <a href="/#signIn" class="btn btn-{{$item->font_color}}" type="submit" id="p_edit">
        Sign in to Download
      </a>
      </div>
      </div>
    </form>
 </div>
                            
                            
 </div>
{{-- <div class="col-xs-12">
@include('guest.partials.footer')
</div>  --}}       
</div>

@endsection