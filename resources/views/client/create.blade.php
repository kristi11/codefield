@extends('client.home')

@section('create_userProject')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=gfnhsiax34xgkgxk89hb6mc24eo88l2utnhu4tvl2dc89kvg"></script>
<script type="text/javascript">
  tinymce.init({
    selector: '#body',
     theme: 'modern',
     branding: false,
     min_height: 600,
     plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
  mobile: {
    theme: 'mobile',
    plugins: [ 'autosave', 'lists', 'autolink' ]
  }
  });
</script>

<div class="col-sm-8 col-sm-offset-2">
  <div class="card">
    <div class="card-content">
      <ul class="nav">
          <li>
            <button data-toggle="collapse" href="#showTags" class="btn btn-simple btn-{{$item->font_color}}">
              Instructions <i class="material-icons">keyboard_arrow_down</i>
            </button>
          </li>
        <ul class="collapse nav" id="showTags">
          <li>
            <p>
              Submitting a product to {{ config('app.name') }} is a good opportunity for any developer/designer to be exposed to the world.To show other developers/designers, companies etc. what you can do.It is an opportunity for you to gain popularity amongst others which will be a huge improvement on your career.If you are ready to show your work to the world we're here to make that happen.
            </p>
            <p>
              A product can be anything from a Github repo,a web/mobile app(this should be open source or can be freely used and distributed by others), a tutorial about something,a collection of resources etc..
            </p>
            <p>
              If you have a YouTube tutorial for your product please include it in the description in the original site where your product is located and we will make sure it is published along with your work.
            </p>
            <p>
              To submit a product just fill in the form below.Once posted your product along with your GitHub profile will be added on {{ config('app.name') }} and also will be featured on our social media community pages.
            </p>
            <p>
              Please make sure that your GitHub repository link (if submitting a Github project) is correct.
            </p>
            <p>
              We are excited to see some amazing work.
            </p>
          </li>
        </ul>
      </ul>
    </div>
  </div>
<div class="card">
  <div class="card-header" data-background-color="{{ $item->app_color }}">
    <h4 class="title">New Product</h4>
  </div>
<div class="card-content">
    <form method="POST" action="{{ asset('/store') }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      @include('errors')

        <div class="form-group label-floating">
        <label class="control-label">Title</label>
          <input id="title" type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>
      {{-- <input id="body" type="hidden" name="body">
      <trix-editor input="body"></trix-editor> --}}
        <div class="form-group label-floating">
        <label class="control-label">Description</label>
          <div id="body" name="body" class="form-control" required>{{ old('body') }}</div>
        </div>

        <div class="form-group label-floating">
        <label class="control-label">Youtube tutorial</label>
          <input id="tutorial" type="text" name="tutorial" class="form-control" value="{{ old('tutorial') }}">
        </div>
        <select class="form-control" name="categories[]" id="categories" multiple="multiple" required="">
      <option value=""></option>

        @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>

        <div class="card-content text-center">
        <div class="btn btn-{{$item->font_color}} btn-simple">
          <input type="file" name="avatar" id="avatar" value="{{ old('avatar') }}" required=""
          class="filestyle" data-buttonText="choose image" data-input="false" data-iconName="" data-buttonName="btn btn-{{$item->font_color}} btn-simple" data-buttonClass="btn btn-{{$item->font_color}}">
        </div>

        <div class="btn btn-{{$item->font_color}} btn-simple">
          <input type="file" name="zip_file" id="zip_file" value="{{ old('zip_file') }}"
          class="filestyle" data-buttonText="choose file" data-input="false" data-iconName="" data-buttonName="btn btn-{{$item->font_color}} btn-simple" data-buttonClass="btn btn-{{$item->font_color}}">
        </div>
      </div>
      <div class="card-footer text-right">
        <button class="btn btn-{{$item->font_color}}" type="submit" id="p_create">Create</button>
      </div>
    </form>
  </div>
  </div>
{{-- <div class="card">
  <div class="card-header" data-background-color="{{ $item->app_color }}">
    <h4 class="title">New category</h4>
  </div>
  <div class="card-content" style="padding-bottom: 0px;">
    <form method="POST" action="{{ url('addCategory') }}">
      {{ csrf_field() }}
      <div class="card-content">
        <div class="form-group label-floating">
          <label class="control-label">Category name</label>
          <input type="text" name="name" id="name" required="" class="form-control" >
        </div>

        <div class=" text-right">
          <button id="add_category" class="btn btn-{{$item->font_color}}" type="submit">Add category</button>
          <div class="clearfix"></div>
        </div>

      </div>
    </form>
  </div>
<div class="card-footer">
  <ul class="nav">
      <li>
        <button data-toggle="collapse" href="#showTags" class="btn btn-simple btn-{{$item->font_color}}">
          Categories <i class="material-icons">keyboard_arrow_down</i>
        </button>
      </li>
    <ul class="collapse nav " id="showTags">
      @foreach($categories as $category)
        <li class=" text-center">
          <span>
            <button class="col-xs-6  btn btn-simple btn-{{$item->font_color}} ">
            {{$category->name}}
            </button>
          </span>
          <span class="col-xs-4 btn btn-simple btn-xs  ">
            <a href="{{ url('admin/category/'.$category->id.'/edit_category') }}" type="button" class="btn btn-simple btn-success btn-xs nospace" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit category">
            <i class="material-icons">edit</i>
            </a>
            <button hidden="">
              <form action="{{ url('/admin/category/create/'.$category->id) }}" method="POST" >
              {{method_field('DELETE')}}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-simple btn-xs nospace" rel="tooltip" data-placement="bottom" title="" data-original-title="Remove" onclick="return confirm('Delete {{$category->name}}?');">
                <i class="material-icons">close</i>
                </button>
              </form>
            </button>
          </span>
        </li>
      @endforeach
    </ul>
</ul>
</div>
</div> --}}
  </div>
@endsection