@if (count($errors) > 0)
	<div class="row">
		<div class="form-group card card-outline-danger offset-sm-12 col-md-6 offset-md-3">
			<div class="card-block">
				<blockquote class="card-blockquote">
					<p>
						<strong><h2>Heads up!</h2></strong>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
					</p>
				</blockquote>
			</div>
		</div>
	</div>
@endif