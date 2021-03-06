@extends ('client.home')
@section('legal')

<div class="col-md-10 col-md-offset-1">
	<div class="card">
		<div class="card-content">
			<h2 class="text-center">Products license</h2>
			<p class="text-center">
				<b> All the product's licences on this site are defined by the product owner.</b>
			</p>
		</div>
	</div>

	<div class="card">
		<div class="card-content">
			<h2 class="text-center">Photos license</h2>
			<p class="text-center">
				<b>All the photos on this site are under the CC0 license which can be found in our <a target="_blank" rel="noopener" href="/licenses">licenses section</a>  or on the <a target="_blank" rel="noopener" href="https://creativecommons.org/publicdomain/zero/1.0/">Creative commons website</a>.</b>
			</p>
		</div>
	</div>

{{-- 	<div class="card">
		<div class="card-content">
			<h2 class="text-center">MIT License</h2>

			<h5 class="text-center">
				Copyright &copy; <script>document.write(new Date().getFullYear())</script> {{config('app.name')}} <br>
			</h5>
			<h5>
				Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

				The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

				THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
			</h5>
		</div>
	</div> --}}

{{-- 	<div class="card">
		<div class="card-content">
			<h2 class="text-center">{{ucfirst(config('app.name'))}} License</h2>

			<h5 class="text-center">
				Copyright &copy; <script>document.write(new Date().getFullYear())</script> {{config('app.name')}} <br>
			</h5>
			<h5>
				{{ucfirst(config('app.name'))}} grants you an irrevocable, nonexclusive copyright license to download, copy, modify, distribute, perform, and use photos from {{ucfirst(config('app.name'))}} for free, including for commercial purposes, without permission from or attributing the photographer or {{ucfirst(config('app.name'))}}, but this license does not include the right to compile,mass download,scrap photos from {{ucfirst(config('app.name'))}} to replicate a similar or competing service.

				This means that Photos on the Service come with a very broad copyright license under the {{ucfirst(config('app.name'))}} License. This is why we say that they are “Free to Use” Note that the {{ucfirst(config('app.name'))}} License does not include the right to use:
			</h5>
			<h5>
				<ol>
					<li>
						Trademarks, logos, or brands that appear in Photos
					</li>
					<li>
						People’s photos if they are recognizable in the Photos
					</li>
					<li>
						Works of art or authorship that appear in Photos
					</li>
				</ol>
			</h5>
			<h5>
				If you download photos with any of these depicted in them, you may need the permission of the brand owner of the brand or work of authorship or individual depending on how you use the Photo.
			</h5>
		</div>
	</div> --}}
	{{-- <div class="alert alert-{{$item->font_color}} text-center" role="alert">
      	<strong>Please do note</strong><br>
		This service will be free until at least July 2019.<br>
		After that if you still wish to have full access there will be a $3/month fee.
	</div> --}}
</div>

@endsection