@extends ('client.home')
@section('license')

<div class="col-xs-12">
	<div class="card">
	    <div class="card-content text-center">
	    	<h4>To add a license to your project just copy the text from one of the licenses below and paste it to either a <pre>.txt</pre> or <pre>.MD</pre> file. For example for the <b>MIT license</b> just copy the content and paste it to a <pre>LICENSE.txt</pre> or <pre>LICENSE.MD</pre> file. The license usually goes on the root of your project so it's easily accessible to anyone that needs the license information.</h4>
	    </div>
	</div>
	<h4>Popular licenses</h4>
</div>
@foreach ($licenses as $license)
<div class="col-sm-6">
  <div class="card">
    <div class="card-content text-center">
      <ul class="nav">
          <li>
            <h3>
             	<b>{{ ucwords($license->shortIdentifier) }}</b>
            </h3>
          </li>
          <li>
            <button data-toggle="collapse" href="#{{$license->id}}" class="btn btn-simple btn-{{$item->font_color}}">
              View text <i class="material-icons">keyboard_arrow_down</i>
            </button>
          </li>
        <ul class="collapse nav" id="{{$license->id}}">
        	<li>
	            <h4>
	             	{{ $license->licenseName }}
	            </h4>
          	</li>
        	 <p class="card-description">Click anywhere on the text to copy it</p>
          <li>
            <pre {{-- id='display' --}} onClick='copyText(this)'> {{ $license->licenseText }} </pre>
          </li>
        </ul>
      </ul>
    </div>
  </div>
</div>
@endforeach

<div class="col-xs-12">
	<div class="card">
		<div class="card-content text-center">
			<h5>You can find a list of all opensource licenses
				<a href="https://opensource.org/licenses/category" target="_blank" rel="noopener"> here</a>. If you are unclear about licenses
				<a href="https://choosealicense.com/" target="_blank" rel="noopener">Github</a> has a very thorough way of explaining when and where to use them.
			</h5>
		</div>
	</div>
</div>

<div class="col-xs-12">
	<h4>Non-software licenses</h4>
</div>

@foreach ($ns_licenses as $ns)
<div class="col-sm-4">
  <div class="card">
    <div class="card-content text-center">
      <ul class="nav">
          <li>
            <h3>
             	<b>{{ ucwords($ns->shortIdentifier) }}</b>
            </h3>
          </li>
          <li>
            <button data-toggle="collapse" href="#{{$ns->id}}" class="btn btn-simple btn-{{$item->font_color}}">
              View text <i class="material-icons">keyboard_arrow_down</i>
            </button>
          </li>
        <ul class="collapse nav" id="{{$ns->id}}">
        	<li>
	            <h4>
	             	{{ $ns->licenseName }}
	            </h4>
          	</li>
        	 <p class="card-description">Click anywhere on the text to copy it</p>
          <li>
            <pre onClick='copyText(this)'> {{ $ns->licenseText }} </pre>
          </li>
        </ul>
      </ul>
    </div>
  </div>
</div>
@endforeach

<div class="col-xs-12">
	<div class="card">
		<div class="card-content">
			<h5>
				CC licenses may be applied to any type of work, including educational resources, music, photographs, databases, government and public sector information. The only categories of works for which CC does not recommend its licenses are computer software and hardware. For more information on CC licenses click <a href="https://creativecommons.org/faq/#what-are-creative-commons-licenses" target="_blank" rel="noopener">here</a>. Keep in mind that using the CC0 license you will be dedicating your work to the public domain. Find more information about it <a href="https://creativecommons.org/share-your-work/public-domain/cc0/" target="_blank" rel="noopener">here</a>. Also Creative Commons have a dedicated page on their whebsite where it would suggest what license to use based on the options you choose. You can check it out <a href="https://creativecommons.org/choose/" target="_blank" rel="noopener">here</a>.
			</h5>
		</div>
	</div>
</div>

<div class="col-xs-12">
	<div class="card">
	    <div class="card-content text-center">
	      <ul class="nav">
	      	<li>
	            <h3>
	             	<b>I don't see a license</b>
	            </h3>
	          </li>
	          <li>
	            <button data-toggle="collapse" href="#noLicenseText" class="btn btn-simple btn-{{$item->font_color}}">
	              Read more <i class="material-icons">keyboard_arrow_down</i>
	            </button>
	          </li>
	        <ul class="collapse nav" id="noLicenseText">
	          <li>
	           <h5>
	           	If a project has no license, then all rights are reserved and it is not Open Source or Free. You cannot modify or redistribute this code without explicit permission from the copyright holder.
	           </h5>
	          </li>
	        </ul>
	      </ul>
	    </div>
	  </div>
</div>

<div class="col-xs-12">
	<div class="card">
	    <div class="card-content text-center">
	    	<p class="card-description">Codefield is in no way affiliated with any of the service providers mentioned above. This page was purely created to give you as much information as possible to the best of our abilities about licenses, what they do and how to use them.</p>
	    </div>
	</div>
</div>
@endsection