@extends('client.home')
@section('showWidget')
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
    <form method="POST" action="{{ url('w/'.$widget->id) }}">
     
      {{ csrf_field() }}
        
        <div class="card-header card-chart">
          <img 
            style="object-fit: cover;" 
            class="lazyload blur-up fit img-responsive img-rounded" 
            src="{{asset('storage/avatars/'.'placeholder-'.$widget->image)}}"
            data-src="{{asset('storage/avatars/'.$widget->image)}}"
            alt="{{$widget->alternative_text}}">
        </div>
      <div class="card-content">
        <div class="row text-center">
          @if($widget->views == 0)
            <p class="category">No views</p>
          @elseif($widget->views == 1)
            <p class="category">{{$widget->views}} view</p>
          @else
            <p class="category">{{$widget->views}} views</p>
          @endif

          @if($widget->downloads == 0)
            <p class="category">No downloads</p>
          @elseif($widget->downloads == 1)
            <p class="category">{{$widget->downloads}} download</p>
          @else
            <p class="category">{{$widget->downloads}} downloads</p>
          @endif
          <p class="category">Size: {{$size.' Mb'}}</p>
          <p class="category ">Posted  {{ $widget->created_at->diffForHumans() }}</p>
          <p class="category">Category:
               @foreach($category as $c)
                 <a href="{{ url('projects/category/'.$c->name) }}"> {{ $c->name }}</a>
               @endforeach
           </p>
        </div>
      <h4 class="title" id="title">{{ $widget->title }}</h4>
      <p>{!! Purify::clean($widget->body) !!}.</p>
      <div class="text-right">
      <button class="btn btn-{{$item->font_color}}" type="submit" id="p_edit">
        Download
      </button>
      </div>
      </div>
    </form>
    <div class="card-content">
     @include('client.disqus_comments')
</div>
 </div>
                            
                            
 </div>

@endsection