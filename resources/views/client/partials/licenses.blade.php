<div class="container-fluid">
    <h2>Latest Licenses</h2>
</div>
<div class="card-content table-responsive">
    <table class="table text-center">
        <tr>
@foreach ($licenses as $license)
<td>
    <div class="card nospace">
            <div class="card-content text-center">
      <ul class="nav">
          <li>
            <h3>
              <b>{{ ucwords($license->shortIdentifier) }}</b>
            </h3>
          </li>
          <li>
            <button data-toggle="collapse" href="#{{$license->id}}" class="btn btn-simple btn-success">
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
</td>
@endforeach
</tr>
    </table>
</div>