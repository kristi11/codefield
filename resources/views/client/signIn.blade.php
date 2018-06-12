@extends('client.client')
@include('errors')
@section('signIn')
<style type="text/css">

.header {
    background: #FF4E50;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #F9D423, #FF4E50);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #F9D423, #FF4E50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
     .off-canvas-sidebar .nav {
        background-color: white;
        height: 100vh;
        margin-top: 0px;
    }
    .scroll {
      background-color: #fff;
      box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
      text-align: center;
  white-space: nowrap;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
  }
   .scroll2 {
        text-align: center;
        white-space: nowrap;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .scroll::-webkit-scrollbar {
    display: none;
}
.scroll2::-webkit-scrollbar {
    display: none;
}
.table-responsive::-webkit-scrollbar {
    display: none;
}
  .table-responsive {
    padding: 1em;
    border: none;
  }
  .table>tbody>tr>td, 
  .table>tbody>tr>th, 
  .table>tfoot>tr>td, 
  .table>tfoot>tr>th, 
  .table>thead>tr>td, 
  .table>thead>tr>th {
    border: none;
    min-width: 20em;
    max-width: 20em;
}
.space {
    padding: 2em;
}
@media screen and (max-width: 767px) {
.table-responsive>.table>tbody>tr>td, 
.table-responsive>.table>tbody>tr>th, 
.table-responsive>.table>tfoot>tr>td, 
.table-responsive>.table>tfoot>tr>th, 
.table-responsive>.table>thead>tr>td, 
.table-responsive>.table>thead>tr>th {
    white-space: normal; 
    min-width: 20em;
    max-width: 20em;
}
}
.cd-size {
    min-width: 20em;
    height: 14em;
}
.navbar .navbar-nav > ul {
  background-color: #fff;
}
.brand {
    padding: 0;
    margin: 0;
    font-size: 16vw;
    text-align: center;
    color: white;
    font-family: Baloo,sans-serif;
    text-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}
.description {
    padding: 0;
    margin: 0;
    font-size: 2vw;
    text-align: center;
    color: white;
    font-family: Baloo,sans-serif;
    text-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    padding-bottom: 2.5em;
}
@media (min-width: 1000px){
  .ipro{
    display: none;
}
.ht{
  max-height: 464px;
}
}
@media (min-width: 1199px){
.ht{
  max-height: 438px;
}
}
.hidden-mobile {

}
.hidden-tablet {

}
@media (max-width: 550px) {
    .hidden-mobile {
        display: none;
    }
    .description {
    font-size: 4vw;
    padding-left: 0.5em;
    padding-right: 0.5em;
}
}
@media (min-width: 550px) and (max-width: 768px) {
.hidden-tablet {
display: none;
}
}
.space-ud {
    margin-top: 4.5em;
    margin-bottom: 1.5em;
}
body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, {
  font-family: Circular,Helvetica,Arial,sans-serif;
  color: #222326;
  line-height: 1.5em;
}

.test3:empty{
  background-color: red;
}
</style>
<div class="wrapper">
    <div class="header">
<h1 class="brand">CODEFIELD</h1>

    <h4 class="description">Codefield is a small new platform helping developers,designers and even photographers find tools that will make completing their next project a whole lot easier. From photos to simple html templates to different more complex projects you'll find it all in here.</h4>
    </div>
    <div id="signIn" class="card nospace hidden-mobile">
        <div class="card-content text-center">
            <a href="auth/facebook" class="btn btn-danger btn-lg">
                <i class="fa fa-facebook" aria-hidden="true"></i> sign in with facebook</a>
            </a>
            <a href="auth/github" class="btn btn-danger btn-lg">
                <i class="fa fa-github" aria-hidden="true"></i> sign in with Github</a>
            </a>
        </div>
    </div>
    <div id="signIn" class="card nospace hidden-tablet hidden-sm hidden-md hidden-lg">
        <div class="card-content text-center">
            <a href="auth/facebook" class="btn btn-danger btn-block">
                <i class="fa fa-facebook" aria-hidden="true"></i> sign in with facebook</a>
            </a>
            <a href="auth/github" class="btn btn-danger btn-block">
                <i class="fa fa-github" aria-hidden="true"></i> sign in with Github</a>
            </a>
        </div>
    </div>
<div class="container-fluid space-ud">
    <h2>Services</h2>
</div>
<div class="card-content table-responsive">
    <table class="table text-center">
        <tr>
            <td>
                <div class="card card-profile">
                    <div style="border-radius: 5%;" class="card-avatar space" data-background-color="red">
                        <i class="fa fa-user fa-4x"></i>
                    </div>
                    <div class="card-content cd-size">
                        <h3>Portfolio</h3>
                        <h5>
                            Your profile works as a portfolio showing your latest work
                        </h5>
                    </div>
                </div>
            </td>
            <td>
                <div class="card card-profile">
                    <div style="border-radius: 5%;" class="card-avatar space" data-background-color="orange">
                        <i class="fa fa-file-code-o fa-4x"></i>
                    </div>
                    <div class="card-content cd-size">
                        <h3>Submit Projects</h3>
                        <h5>
                            Have your work seen across fellow developers and designers
                        </h5>
                    </div>
                </div>
            </td>
            <td>
                <div class="card card-profile">
                    <div style="border-radius: 5%;" class="card-avatar space" data-background-color="green">
                        <i class="fa fa-camera fa-4x"></i>
                    </div>
                    <div class="card-content cd-size">
                        <h3>Upload Photos</h3>
                        <h5>
                            Share your photography with others like you
                        </h5>
                    </div>
                </div>
            </td>
            <td>
                <div class="card card-profile">
                    <div style="border-radius: 5%;" class="card-avatar space" data-background-color="blue">
                        <i class="fa fa-download fa-4x"></i>
                    </div>
                    <div class="card-content cd-size">
                        <h3>Unlimited Downloads</h3>
                        <h5>
                            Download everything accross the platform completely free
                        </h5>
                    </div>
                </div>
            </td>
             <td>
                <div class="card card-profile">
                    <div style="border-radius: 5%;" class="card-avatar space" data-background-color="purple">
                        <i class="fa fa-font fa-4x"></i>
                    </div>
                    <div class="card-content cd-size">
                        <h3>Google Fonts</h3>
                        <h5>
                            Take advantage of the latest Google Fonts.Small descriptive tutorial available
                        </h5>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>
<div class="container-fluid">
    <h2>Latest Projects</h2>
</div>
<div class="card-content table-responsive">
    <table class="table text-center">
        <tr>         
        @foreach ($projects as $widget)
        <td>
              <div class="card fe_pr">
                <div class="pr_img">
                  <div class="ct-chart" id="dailySalesChart">
                  <picture>
                   <img style="object-fit:cover;max-height: 300px;" class="lazyload blur-up img-responsive img-rounded fit" 
                   src="{{asset('storage/avatars/'.'placeholder-'.$widget->image)}}"
                   data-src="{{asset('storage/avatars/'.$widget->image)}}"
                   alt="{{$widget->alternative_text}}">
                   </picture>
                  </div>
                </div>
                <div class="row">
                <div class="text-center">
                  <a href="{{ url('g_project/'.$widget->title) }}" type="button" class="btn btn-danger btn-simple test3" rel="tooltip" data-placement="bottom" title="" data-original-title="Read more..." rel="noopener" >
                  <i class="material-icons">search</i>
                  </a>           
                </div>
                </div>
                <div class="card-content">
                  <h4 class="title" id="title">{{ str_limit($widget->title,30) }}</h4>
                  @if($widget->downloads == 0)
                    <h5 class="category">No downloads</h5>
                  @elseif($widget->downloads == 1)
                    <h5 class="category">{{$widget->downloads}} download</h5>
                  @else
                    <h5 class="category">{{$widget->downloads}} downloads</h5>
                  @endif  
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i>  Posted  {{ $widget->created_at->diffForHumans() }}
                  </div>
                </div>
              </div>
          </td>
            @endforeach      
        </tr>
    </table>
</div>

<div class="container-fluid">
    <h2>Popular photos</h2>
</div>
<div class="card-content table-responsive">
    <table class="table text-center">
        <tr>  
@foreach ($photos as $p)
<td>
    <div class="card nospace">
        <a href="{{ url('g_photo/'.$p->unique_id) }}" rel="tooltip" data-placement="bottom" data-original-title="See more..">
           <img style="object-fit:cover;height: 198px;" class="lazyload blur-up" 
            src="{{asset('storage/tiny_photos/'.$p->gallery_image)}}" 
            alt="{{$p->alternative_text}}"
            data-sizes="auto"
            data-src="{{asset('storage/medium_photos/'.$p->gallery_image)}}"
            data-srcset="{{asset('storage/medium_photos/'.$p->gallery_image.' 860w')}},
            {{asset('storage/medium_photos/'.$p->gallery_image.' 640w')}},
            {{asset('storage/mobile_photos/'.$p->gallery_image.' 420w')}}"
          >
        </a>     
    </div>
</td>
@endforeach
</tr>
    </table>
</div>
@include('guest.partials.footer')
</div>
@endsection