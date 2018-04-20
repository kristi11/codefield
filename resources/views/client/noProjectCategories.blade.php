@extends('client.home')
	@section('noProjectCategories')
  <div class="col-xs-12">
			<ul class="nav nav-pills " role="tablist">
      <li class="dropdown">
        <a href="#" role="tab" href="#"  data-toggle="dropdown">
         Category
        </a>
        <ul class="dropdown-menu">
          @foreach ($categories as $category)
            <li><a href="{{ url('projects/category/'.$category->name) }}">{{$category->name}}</a></li>   
          @endforeach
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" role="tab" href="#"  data-toggle="dropdown">
          Sort by 
        </a>
        <ul class="dropdown-menu">
          <li><a href="{{ url('mostDownloadedProjects') }}">Most downloaded</a></li>
          <li><a href="{{ url('mostViewedProjects') }}">Most viewed</a></li>
        </ul>
      </li>
    </ul>
	<div class="col-sm-4 col-sm-offset-4">
		<div class="card">
			<div class="card-content text-center">
				<h4 class="title">Nothing to show</h4>
			</div>
		</div>
	</div>
</div>
	@endsection