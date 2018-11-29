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
    		<div class="text-center">
        	   <div class="addthis_inline_share_toolbox_gh70" data-url="{{ url('g_product/'.$widget->title) }}" data-title="{{ $widget->dsc_title }}" {{-- data-description="This product is posted on codefield. Click to learn more about it." --}} data-media="{{ asset('storage/avatars/'.$widget->image) }}"></div>
			  </div>
        <div class="col-xs-12 text-center form-group">
		<div class="col-xs-4">
			<h5 class="category"><i class="material-icons">remove_red_eye</i> <span class="hidden-xs">Views</span></h5>
	          @if($widget->views == 0)
	            <p>No views</p>
	          @elseif($widget->views == 1)
	            <p>{{$widget->views}}</p>
	          @else
	            <p>{{$widget->views}}</p>
	          @endif
		</div>
         	@if($widget->zip_file)
			<div class="col-xs-4">
			<h5 class="category"><i class="material-icons">get_app</i> <span class="hidden-xs">Downloads</span></h5>
	            @if($widget->downloads == 0)
	              <p>No downloads</p>
	            @elseif($widget->downloads == 1)
	              <p>{{$widget->downloads}}</p>
	            @else
	              <p>{{$widget->downloads}}</p>
	            @endif
			</div>
			<div class="col-xs-4">
				<h5 class="category"><i class="material-icons">attachment</i> <span class="hidden-xs">Size</span></h5>
            	<p>{{$size.' Mb'}}</p>
			</div>
          	@endif
			<div class="col-xs-4">
				<p>
					 <h5 class="category"><i class="material-icons">filter_list</i> <span class="hidden-xs">Category</span></h5>
				   @foreach($category as $c)
				     <a href="{{ url('products/category/'.$c->name) }}"> {{ $c->name }}</a>
				   @endforeach
				</p>
			</div>
			<div class="col-xs-4">
				<h5 class="category"><i class="material-icons">access_time</i> <span class="hidden-xs">Posted</span></h5>
				<p> {{ $widget->created_at->diffForHumans() }} </p>
			</div>
        </div>
    </div>
    <div class="card-content">
      <h3 style="font-weight: bold;" class="title" id="title">{{ $widget->dsc_title }}</h3>
      <h5>{!! Purify::clean($widget->body) !!}</h5>
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
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bfcbfee60b9e4b3"></script>
@endsection