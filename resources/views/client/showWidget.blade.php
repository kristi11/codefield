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
            <h5 class="category">No views</h5>
          @elseif($widget->views == 1)
            <h5 class="category">{{$widget->views}} view</h5>
          @else
            <h5 class="category">{{$widget->views}} views</h5>
          @endif

          @if($widget->zip_file)
            @if($widget->downloads == 0)
              <h5 class="category">No downloads</h5>
            @elseif($widget->downloads == 1)
              <h5 class="category">{{$widget->downloads}} download</h5>
            @else
              <h5 class="category">{{$widget->downloads}} downloads</h5>
            @endif
            <h5 class="category">Size: {{$size.' Mb'}}</h5>
          @endif
          
          <h5 class="category ">Posted  {{ $widget->created_at->diffForHumans() }}</h5>
          <h5 class="category">Category:
               @foreach($category as $c)
                 <a href="{{ url('products/category/'.$c->name) }}"> {{ $c->name }}</a>
               @endforeach
           </h5>
        </div>
      <h4 class="title" id="title">{{ $widget->title }}</h4>
      <h5>{!! Purify::clean($widget->body) !!}.</h5>
      @if($widget->zip_file)
        <div class="text-right">
        <button class="btn btn-{{$item->font_color}}" type="submit" id="p_edit">
          Download
        </button>
        </div>
      @endif
      </div>
    </form>
    <div class="card-content">
     @include('client.disqus_comments')
</div>
 </div>
                            
                            
 </div>

@endsection