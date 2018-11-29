<div class="container-fluid">
    <h2>Latest Products</h2>
</div>
<div class="card-content table-responsive">
    <table class="table text-center">
        <tr>
        @foreach ($widgets as $widget)
        <td>
              <div class="card fe_pr">
                <div class="pr_img">
                  <div class="ct-chart" id="dailySalesChart">
                  <picture>
                   <img style="object-fit:cover;max-height: 300px;" class="lazyload blur-up img-responsive img-rounded fit"
                   src="{{asset('storage/avatars/'.'placeholder-'.$widget->image)}}"
                   data-src="{{asset('storage/avatars/'.$widget->image)}}"
                   alt="{{$widget->alternative_text}}">
                   </picture>
                  </div>
                </div>
                <div class="row">
                <div class="text-center">
                  <a href="{{ url('g_product/'.$widget->title) }}" type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Read more..." rel="noopener" >
                  <i class="material-icons">search</i>
                  </a>
                </div>
                </div>
                <div class="card-content">
                <h3 class="title" id="title">{{ str_limit($widget->dsc_title,30) }}</h3>
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
          </td>
            @endforeach
        </tr>
    </table>
</div>