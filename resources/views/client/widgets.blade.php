@extends('client.home')
@section('widgets')

    <div style="padding: 0;" class="table-responsive hidden-lg">
      <h6 style="margin: 0;" class="container">Sort by</h6>
      <table class="table">
        <tr>
          <td>
            <nav style="box-shadow: none; background-color: #fbfbfd;" class="scroll bg-light">

                <a class="btn btn-round btn-{{ $item->font_color }}" href="{{ url('mostDownloadedProducts') }}">
                  Most downloaded
                </a>

                 <a class="btn btn-round btn-{{ $item->font_color }}" href="{{ url('mostViewedProducts') }}">
                  Most viewed
                </a>

            </nav>
          </td>
        </tr>
      </table>
    </div>

      <div style="padding: 0;" class="table-responsive hidden-lg">
      <h6 style="margin: 0;" class="container">Categories</h6>
      <table class="table">
        <tr>
          <td>
            <nav style="box-shadow: none; background-color: #fbfbfd;" class="scroll bg-light">
              @foreach ($categories as $category)
                <a class="btn btn-round btn-{{ $item->font_color }}" href="{{ url('/products/category/'.$category->name) }}">
                  {{$category->name}}
                </a>
              @endforeach
            </nav>
          </td>
        </tr>
      </table>
    </div>

<div class="col-xs-12">
    <ul class="nav nav-pills " role="tablist">
      <li class="hidden-xs hidden-sm hidden-md dropdown">
        <a href="#" role="tab" href="#"  data-toggle="dropdown" class="">
         Category
        </a>
        <ul style="display: flex;" class="dropdown-menu dd-list">
          @foreach ($categories as $category)
            <li><a class="btn btn-simple" href="{{ url('/products/category/'.$category->name) }}">{{$category->name}}</a></li>
          @endforeach
        </ul>
      </li>
      <li class="hidden-xs hidden-sm hidden-md dropdown">
        <a href="#" role="tab" href="#"  data-toggle="dropdown">
          Sort by
        </a>
        <ul class="dropdown-menu">
          <li><a href="{{ url('mostDownloadedProducts') }}">Most downloaded</a></li>
          <li><a href="{{ url('mostViewedProducts') }}">Most viewed</a></li>
        </ul>
      </li>
    </ul>

@foreach ($widgets as $widget)
<div class="{{$class}} mt-30">
              <div class="card fe_pr">
                <div class="pr_img">
                  <div class="ct-chart" id="dailySalesChart">
                  <picture>
                   <img
                     style="max-height: 300px;"
                     class="lazyload blur-up img-responsive img-rounded fit"
                     src="{{asset('storage/avatars/'.'placeholder-'.$widget->image)}}"
                     data-src="{{asset('storage/avatars/'.$widget->image)}}"
                     alt="{{$widget->alternative_text}}">
                   </picture>
                  </div>
                </div>
                <div class="row">
                <div class="text-center">
                  <a href="{{ url('products/'.$widget->title) }}" type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Read more..." rel="noopener" >
                  <i class="material-icons">search</i>
                  </a>

                 @if($widget->zip_file)
                    <button hidden="">
                    <form action="{{ url('w/'.$widget->id) }}" method="POST" >
                    {{ csrf_field() }}
                    <button  type="submit" class="btn btn-primary btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Download" >
                    <i class="material-icons">file_download</i>
                    </button>
                    </form>
                    </button>
                  @endif
                  @if($widget->tutorial != null)
                    <a href="{{ $widget->tutorial }}" target="_blank" type="button" class="btn btn-info btn-simple"
                      rel="tooltip" data-placement="bottom" title="" data-original-title="See tutorial">
                      <i class="material-icons">videocam</i>
                    </a>
                  @endif
{{--                   @if($widget->isFavorited())
                <a type="button" class="btn btn-success btn-simple" href="{{ url('addToFavorties/'.$widget->id) }}"
                  rel="tooltip" data-placement="bottom" title="" data-original-title="In your favorites">
                  <i class="material-icons">favorite</i></a>
                @else
                  <a type="button" class="btn btn-success btn-simple" href="{{ url('addToFavorties/'.$widget->id) }}"
                  rel="tooltip" data-placement="bottom" title="" data-original-title="Add to favorites">
                  <i class="material-icons">favorite_border</i></a>
                @endif --}}
                @if($widget->user->hasPermissionTo('view_project_creator_from_client'))
                 <a type="button" class="btn btn-success btn-simple"
                 href="{{ url($widget->user->slug.'/u/products') }}"
                 rel="tooltip" data-placement="bottom" title="" data-original-title="{{$widget->user->name}}">
                  <i style="color: black" class="material-icons">person</i></a>
                 </a>
                @endif
                </div>
                </div>
                <div class="card-content text-center">
                <h3 class="title hidden-xs hidden-sm hidden-md" id="title">{{ str_limit($widget->dsc_title,23) }}</h3>
                <h3 class="title hidden-lg" id="title">{{ str_limit($widget->dsc_title,15) }}</h3>
{{--                   <p class="category">{{ str_limit($widget->body, 100) }}.</p>--}}
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
                    @else
                      <h5 class="category">Learning</h5>
                  @endif
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i>  Posted  {{ $widget->created_at->diffForHumans() }}
                  </div>
                </div>
              </div>
            </div>
@endforeach
<div class="col-xs-12 text-center">{{ $widgets->links('admin.mdl-bootstrap') }}</div>
</div>
@endsection