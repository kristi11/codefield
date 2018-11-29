@extends ('admin.sidebar')
@section ('addLicense')

<div class="col-md-offset-3">
<div class="col-md-8">
<div class="card">
    <form method="POST" action="{{ url('/admin/storeLicense') }}">
      {{ csrf_field() }}

      <div class="card-content text-left">

        <div class="form-group label-floating">
        	<label class="control-label">License name</label>
        	<input type="text" name="licenseName" value="" class="form-control" required>
        </div>

        <div class="form-group label-floating">
        	<label class="control-label">SPDX short identifier</label>
        	<input type="text" name="shortIdentifier" value="" class="form-control" required>
        </div>

        <div class="form-group label-floating">
        	<label class="control-label">License text</label>
        	<textarea name="licenseText" class="form-control" rows="10" required></textarea>
        </div>

		<div class="row">
			<div class="form-group col-md-7">
			    <select name="licenseCategory" class="form-control">
			    	<option class="form-control" value="" disabled selected>Select license category</option>
					<option class="form-control" value="popular">Popular licenses</option>
					<option class="form-control" value="ns">Non-software licenses</option>
				</select>
			</div>

			<div class="card-content text-center col-md-5">
				<button class="btn btn-{{$item->font_color}} btn-simple" type="submit">
				 	Add license
				</button>
			</div>

		  </div>
		</div>

    </form>
</div>
</div>
</div>

@endsection