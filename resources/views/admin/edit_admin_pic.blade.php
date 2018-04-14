@extends('admin.sidebar')
@section('edit_admin')
<div class="col-md-offset-3">
<div class="col-md-8">
<div class="card card-profile"  data-background-color="{{$item->font_color}}">
    <form method="POST" action="{{ url('/admin/administratorsPic/'.$admins->id) }}" enctype="multipart/form-data">
      {{ csrf_field() }}      
        <div class="card-avatar">
          @if(strlen($admins->profile)<10)
            <img style="object-fit: cover;" class="img" src="/storage/default_profile/default_profile_pic.png" alt="codefield admin">
          @else
            <img style="object-fit: cover;" class="photo size" src="/storage/profiles/{{$admins->profile }}" alt="codefield admin">
          @endif
        </div>    
      <div class="card-content text-center">
        @if (Session::has('success'))
            <div id="successMessage" class="alert alert-success">{!! Session::get('success') !!}</div>
        @endif
        @if (Session::has('failure'))
            <div id="successMessage" class="alert alert-danger">{!! Session::get('failure') !!}</div>
        @endif
      <script>
      setTimeout(function() {
                  $('#successMessage').fadeOut('fast');
                  }, 2000);
      </script>      
      <div class="card-content text-center">
        <div class="btn btn-primary btn-simple">
          <input type="file" name="avatar" required=""
          class="filestyle" data-buttonText="Search" data-input="false" data-iconName="" data-buttonName="btn btn-{{$item->font_color}} btn-simple" data-buttonClass="btn btn-primary">
        </div>
      <button class="btn btn-{{$item->font_color}} btn-simple" type="submit">
         Update
      </button>
       </div>
      </div>
    </form>
</div>
</div>
</div>
@endsection