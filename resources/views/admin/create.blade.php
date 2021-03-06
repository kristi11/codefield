@extends('admin.sidebar')

@section('create_project')

<div class="col-sm-8 col-sm-offset-2">
{{-- <div class="card">
  <div class="card-header" data-background-color="{{ $item->app_color }}">
    <h4 class="title">New project</h4>
  </div>
<div class="card-content">
    <form method="POST" action="{{ asset('/admin/projects/store') }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      @include('errors')

        <div class="form-group label-floating">
        <label class="control-label">Title</label>
          <input id="title" type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>
      <input id="body" type="hidden" name="body">
      <trix-editor input="body"></trix-editor>

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
  </div> --}}
<div class="card">
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
</div>
  </div>
@endsection