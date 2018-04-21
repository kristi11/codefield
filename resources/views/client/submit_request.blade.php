@extends('client.home')
@section('submit_request')

<div class="col-md-8 col-md-offset-2">
<div class="card">
<div class="card-content">
	<ul class="nav">
      <li>
        <button data-toggle="collapse" href="#showTags" class="btn btn-simple btn-{{$item->font_color}}">
          Read me <i class="material-icons">keyboard_arrow_down</i>
        </button>
      </li>
		<ul class="collapse nav" id="showTags">
			<li>
				<p>
					Submitting a project to {{ config('app.name') }} is a good opportunity for any developer/designer to be exposed to the world.To show other developers/designers, companies etc. what you can do.It is an opportunity for you to gain popularity amongst others which will be a huge improvement on your career.If you are ready to show your work to the world we're here to make that happen.
				</p>
				<p>
					To submit a project just add your project name and the GitHub repository.We will review it and let you know if your project got approved or not.If approved your project along with your GitHub profile will be added on {{ config('app.name') }} and you also will be featured on our facebook community page.
				</p>
				<p>
					If rejected we will send you and email telling you that we couldn't approve your project but we are here to help you every step of the way to get your work approved.
				</p>
				<p>
					Please make sure that your GitHub repository link is correct or your project will be rejected.
				</p>
				
				<p>
					If you're not familiar with GitHub and have some work you want to submit contact us and we will help your get your work uploaded on our platform.
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
				<h4 class="title">Submit Project</h4>
				<a class="category">Submit a project for approval</a>
			</div>
			<div class="card-content">
				<form method="POST" action="{{ url('create_request') }}" enctype="multipart/form-data">
			      {{ csrf_field() }}
			      @include('errors')
					<div class="form-group label-floating">
			        <label class="control-label">Project name</label>
			          <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}" 
			          required>
			        </div>
{{-- 			        <input id="description" type="hidden" name="description">
      				<trix-editor  placeholder="Project description (e.g. your README.md)" input="description"></trix-editor> --}}
			        <div class="form-group label-floating">
			        <label class="control-label">GitHub repository</label>
			          <input id="github_repo" type="text" name="github_repo" class="form-control" 
			          value="{{ old('github_repo') }}" required>
			        </div>
			        <div class="card-footer text-right">
{{-- 			        	<div class="g-recaptcha" data-sitekey="6LcLcVIUAAAAAIxGV_QF2V4Vr1BDZh--MTcFceaP"></div>
 --}}						<button id="" class="btn btn-{{$item->font_color}}" type="submit">Submit Project</button>
						<div class="clearfix"></div>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection