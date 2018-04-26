@extends('client.home')
@section('addPhotos')
@include('errors')

<div class="col-lg-6 col-lg-offset-3">
<div class="card">
<div class="card-content">
	<ul class="nav">
      <li>
        <button data-toggle="collapse" href="#showReadme" class="btn btn-simple btn-{{$item->font_color}}">
          Read me <i class="material-icons">keyboard_arrow_down</i>
        </button>
      </li>
		<ul class="collapse nav" id="showReadme">
			<li>
				<p>
					Please select the photo/photos that you want to upload and also the categories that this photo/photos you think fall under and click submit.Please read the Photo Guidelines to make sure all of your photos get approved.
				</p>
				<p>Minimum photo size should be 3Mb</p>
				<p>Maximum upload size is 200Mb</p>
			</li>
		</ul>
	</ul>
</div>
</div>


	<div class="card" id="photo" {{-- style="display:none;"  --}}>		
	<form method="POST" action="{{ url('addToGallery') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="card-content text-center">
			<div class="btn btn-primary btn-simple">
			<input type="file" name="gallery_image[]" id="gallery_image" required="" 
			value="{{ old('gallery_image') }}"
			class="filestyle" data-buttonText="Choose photos" data-input="false" data-iconName="" data-buttonName="btn btn-{{$item->font_color}} btn-simple" data-buttonClass="btn btn-primary" multiple="multiple">
			</div>
			<select class="form-control" name="tags[]" id="tags" multiple="multiple" required="">
			<option value=""></option>
				@foreach($tags as $tag)
					<option value="{{$tag->id}}">{{$tag->name}}</option>
				@endforeach
			</select>
		</div>
		<div class="card-footer text-right">
			<button onclick="this.disabled=true;this.form.submit();"  class="btn btn-{{$item->font_color}}" type="submit" data-disable-with="Working on it..">Add photo(s)</button>
			<div class="clearfix"></div>
		</div>
	</form>
	</div>
</div>

@endsection