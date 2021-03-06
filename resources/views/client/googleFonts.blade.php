@extends('client.home')
@section('googleFonts')
<div class="container-fluid">
	{{-- <div class="row"> --}}
		<div class="card">
			<div class="card-content">
				<div class="table-responsive">
				<div class="table">
				To use Google Fonts API add the stylesheet to your head section like this:
				<pre>&ltlink rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Name"&gt</pre>
				Add the web font either on your stylesheet
				<pre>.css-selector { font-family: 'Font Name', serif; }</pre>
				Or inline it within your div
				<pre>&ltdiv style="font-family: 'Font Name', serif;"&gtYour text&lt/div&gt</pre>
			</div>
		</div>
				<div class="alert alert-{{ $item->font_color }}">
					When specifying a web font in a CSS style, always list at least one fallback web-safe font in order to avoid unexpected behaviors. In particular, add a CSS generic font name like <b>serif</b> or <b>sans-serif</b> to the end of the list, so the browser can fall back to its default fonts if need be.
					For more detailed information head to the <a href="https://developers.google.com/fonts/docs/getting_started" rel="noopener" target="_blank"><b>Google Fonts</b></a> website
				</div>
			</div>
		</div>
	{{-- </div> --}}
	{{-- <div class="row"> --}}
	<div class="card">
	<div class="card-content table-responsive">
		<table class="table">
		  <thead class="text-{{$item->font_color}}">
			<tr>
		      <th>Font family</th>
		      <th>Example</th>
		      <th>Variants</th>
{{-- 		      <th>Category</th>
		      <th>Subsets</th>
		      <th>Version</th> --}}
		    </tr>
		  </thead>
		  <tbody>
		  @foreach($results->items() as $font)

		    <tr>
		      <td class="col-xs-4 col-sm-2"><h5>{{$font['family'] }}</h5></td>
		      <td class="col-xs-4 col-sm-8"> <h3 style="font-family: '{{$font['family']}}',serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3></td>
		      <td class="col-xs-4 col-sm-2"><h5>{{implode(', ', $font['variants']) }}</h5></td>
{{-- 		      <td>{{$font['category'] }}</td>
		      <td>{{implode(', ', $font['subsets']) }}</td>
		      <td>{{$font['version'] }}</td> --}}
		    </tr>
		   @endforeach
		  </tbody>
		</table>
		</div>
	</div>
	{{-- </div> --}}
</div>
{{-- <div class="text-center">{{ $result->links('admin.mdl-bootstrap') }}</div>
 --}}
 <div class="text-center">{{ $results->links('admin.mdl-bootstrap') }}</div>
@include('client.fontLoadjs')
@endsection