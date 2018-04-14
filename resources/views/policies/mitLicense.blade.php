@extends ('client.home')
@section('license')

<div class="col-md-10 col-md-offset-1">
	<div class="card">
		<div class="card-content">
			<h1 class="text-center">MIT License</h1>

			<p class="text-center">
				Copyright &copy; <script>document.write(new Date().getFullYear())</script> {{config('app.name')}} <br>
			</p>
			<p class="text-center">
				Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

				The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

				THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
			</p>
		</div>
	</div>
	<div class="alert alert-{{$item->font_color}} text-center" role="alert">
      	<strong>Please do note</strong><br>
		This service will be free until at least July 2019.<br>
		After that if you still wish to have full access there will be a $3/month fee.
	</div>
</div>

@endsection