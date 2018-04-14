@extends('admin.sidebar')
@section('add')
@include('errors')
<div class="col-lg-offset-4">
	<div class="col-lg-6">
<div class="card">
	<div class="card-content" style="padding-bottom: 0px;">		
		<form method="POST" action="{{ url('addTag') }}">
			{{ csrf_field() }}
			<div class="card-content">
				<div class="form-group label-floating">
					<label class="control-label">Tag name</label>
					<input type="text" name="name" id="name" required="" class="form-control" >
				</div>
			
				<div class=" text-right">
					<button id="add_tag" class="btn btn-{{$item->font_color}}" type="submit">Add tag</button>
					<div class="clearfix"></div>
				</div>
				
			</div>
		</form>
	</div>
<div class="card-footer">
	<ul class="nav">
      <li>
        <button data-toggle="collapse" href="#showTags" class="btn btn-simple btn-{{$item->font_color}}">
          Tags <i class="material-icons">keyboard_arrow_down</i>
        </button>
      </li>
		<ul class="collapse nav " id="showTags">
			@foreach($tags as $tag)
				<li class=" text-center">
					<span>
						<button class="col-xs-6  btn btn-simple btn-{{$item->font_color}} ">
						{{$tag->name}}
						</button>
					</span>
					<span class="col-xs-4 btn btn-simple btn-xs  ">
						<a href="{{ url('admin/gallery/'.$tag->id.'/edit_tag') }}" type="button" class="btn btn-simple btn-success btn-xs nospace" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit tag">
						<i class="material-icons">edit</i>
						</a>
						<button hidden="">
							<form action="{{ url('/admin/gallery/add/'.$tag->id) }}" method="POST" >
							{{method_field('DELETE')}}
								{{ csrf_field() }}
								<button type="submit" class="btn btn-danger btn-simple btn-xs nospace" rel="tooltip" data-placement="bottom" title="" data-original-title="Remove" onclick="return confirm('Delete {{$tag->name}}?');">
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
{{-- <div class="col-lg-6 ">
	<div class="card">		
	<form method="POST" action="{{ url('addToGallery') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="card-content text-center">
			<div class="btn btn-primary btn-simple">
			<input type="file" name="gallery_image[]" id="gallery_image" required="" value="{{ old('gallery_image') }}"
			class="filestyle" data-buttonText="Choose images" data-input="false" data-iconName="" data-buttonName="btn btn-{{$item->font_color}} btn-simple" data-buttonClass="btn btn-primary" multiple="multiple">
			</div>
			<select class="form-control" name="tags[]" id="tags" multiple="multiple" required="">
			<option value=""></option>

				@foreach($tags as $tag)
					<option value="{{$tag->id}}">{{$tag->name}}</option>
				@endforeach
			</select>
		</div>
		<div class="card-content">
		<div class="form-group label-floating">
					<label class="control-label">Alternative Text</label>
					<input type="text" name="alternative_text" id="alternative_text" value="{{ old('alternative_text') }}" required="" class="form-control" >
				</div>
			</div>
		<div class="card-footer text-right">
			<button id="gallery_upload" class="btn btn-{{$item->font_color}}" type="submit" >Add image(s)</button>
			<div class="clearfix"></div>
		</div>
	</form>
	</div>
</div> --}}
</div>

@endsection