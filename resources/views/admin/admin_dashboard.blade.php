@extends('admin.sidebar')
@section('admin_dashboard')
	<div class="col-lg-3 col-md-6 col-sm-6">
	    <div class="card card-stats">
	        <div class="card-header" data-background-color="red">
	            <i class="material-icons">account_circle</i>
	        </div>
	        <div class="card-content">
	            <p class="category">Subscribers</p>
	            <h3 class="title">{{$countSubscribers}}</h3>
	        </div>
	        <div class="card-footer">
	            <div class="stats">
	                <i class="material-icons text-primary">navigate_next</i>
	                <a class="text-gray" href="{{ url('admin/subscribers') }}">See more</a>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6">
	    <div class="card card-stats">
	        <div class="card-header" data-background-color="purple">
	            <i class="material-icons">widgets</i>
	        </div>
	        <div class="card-content">
	            <p class="category">Projects</p>
	            <h3 class="title">{{$countProjects}}</h3>
	        </div>
	        <div class="card-footer">
	            <div class="stats">
	                <i class="material-icons text-primary">navigate_next</i>
	                <a class="text-gray" href="{{ url('admin/proj') }}">See more</a>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6">
	    <div class="card card-stats">
	        <div class="card-header" data-background-color="blue">
	            <i class="material-icons">image</i>
	        </div>
	        <div class="card-content">
	            <p class="category">Gallery</p>
	            <h3 class="title">{{$countImages}}</h3>
	        </div>
	        <div class="card-footer">
	            <div class="stats">
	                <i class="material-icons text-primary">navigate_next</i>
	                <a class="text-gray" href="{{ url('admin/gallery') }}">See more</a>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6">
	    <div class="card card-stats">
	        <div class="card-header" data-background-color="green">
	            <i class="material-icons">font_download</i>
	        </div>
	        <div class="card-content">
	            <p class="category">Google Fonts</p>
	            <h3 class="title">{{count($result->items)}}</h3>
	        </div>
	        <div class="card-footer">
	            <div class="stats">
	                <i class="material-icons text-gray">navigate_next</i>
	                <a class="text-gray">Results from Google Fonts API</a>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="orange">
                <h4 class="title">Project downloads</h4>
                <p class="category">Most downloaded projects</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead class="text-warning">
                        <th>Title</th>
                        <th>Views</th>
                        <th>Downloads</th>
                        <th>Created</th>
                    </tr></thead>
                    <tbody>
                    	@foreach($topProjects as $p)
                        <tr>
                            <td>{{$p->title}}</td>
                            <td>{{$p->views}}</td>
                            <td>{{$p->downloads}}</td>
                            <td>{{$p->created_at->diffForHumans()}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="orange">
                <h4 class="title">Image downloads</h4>
                <p class="category">Most downloaded images</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead class="text-warning">
                        <th>Image</th>
                        <th>Views</th>
                        <th>Downloads</th>
                        <th>Created</th>
                    </tr></thead>
                    <tbody>
                    	@foreach($topImages as $i)
                        <tr>
                            <td>
                            	<img class="size miniImg" style="height: 15px;width: 40px;" 
                            	src="{{url('storage/gallery_thumbnails/'.$i->gallery_image)}}">
                            </td>
                            <td>{{$i->views}}</td>
                            <td>{{$i->downloads}}</td>
                            <td>{{$i->created_at->diffForHumans()}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection