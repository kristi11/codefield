@extends('client.client')
@section('g_project')

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
{{--           @if($widget->views == 0)
            <p class="category">No views</p>
          @elseif($widget->views == 1)
            <p class="category">{{$widget->views}} view</p>
          @else
            <p class="category">{{$widget->views}} views</p>
          @endif --}}

          @if($widget->zip_file)
            @if($widget->downloads == 0)
              <h5 class="category">No downloads</h5>
            @elseif($widget->downloads == 1)
              <h5 class="category">{{$widget->downloads}} download</h5>
            @else
              <h5 class="category">{{$widget->downloads}} downloads</h5>
            @endif
            <p class="category">Size: {{$size.' Mb'}}</p>
          @endif
          <p class="category ">Posted  {{ $widget->created_at->diffForHumans() }}</p>
{{--           <p class="category">Category:
               @foreach($category as $c)
                 <a href="{{ url('projects/category/'.$c->name) }}"> {{ $c->name }}</a>
               @endforeach
           </p> --}}
        </div>
      <h3 style="font-weight: bold;" class="title" id="title">{{ $widget->dsc_title }}</h3>
      <p>{!! ucwords(substr(Purify::clean($widget->body),0,-150)) !!}
      </p><button hidden=""><a>...</a></button><p>...</p>{{-- <button disabled="" class="btn btn-simple btn-xs"><a href="">...</a></button> --}}
      <div class="text-right">
      <a href="/#signIn" class="btn btn-{{$item->font_color}} pull-right" type="submit" id="p_edit">
        Sign in to learn more
      </a>
      </div>
      </div>
    </form>
    <div class="card-content">
     @include('client.disqus_comments')
</div>
</div>
</div>
{{-- <div class="col-xs-12">
@include('guest.partials.footer')
</div>    --}}
</div>

@endsection