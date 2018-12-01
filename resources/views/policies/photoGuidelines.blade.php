@extends('client.home')
@section('guidelines')

<div class="col-md-10 col-md-offset-1">
	<div class="card">
		<div class="card-content">
			<h2 class="text-center">Photo Submission Guidelines</h2>

			<h5>Please acknowledge that photos uploaded on {{config('app.name')}} not following the guidelines will be eventually deleted.</h5>

			<h5>Photos should be at least 3 Megabytes or our system will automatically reject them. We do this to ensure you upload high quality photos.</h5>

			<h5>Please make sure that uploaded photos:
				<ul>
					<li>
						Are not blurry or unclear
					</li>
					<li>
						Are not taken in a bad angle
					</li>
					<li>
						Are not over edited
					</li>
					<li>
						Are not visually similar
					</li>
					<li>
						Do not contain nudity
					</li>
					<li>
						Do not contain violent or graphic imagery
					</li>
					<li>
						Do not have borders, graphics or text overlayed on them
					</li>
				</ul>
			</h5>
			<h5>As said on Terms: You represent and warrant that: (i) the Content is yours (you own it).
			Meaning that the photos you upload are yours.</h5>
		</div>
	</div>
</div>
@endsection