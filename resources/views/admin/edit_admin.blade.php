@extends('admin.sidebar')

@section('edit_admin')
<div class="col-md-offset-3">
<div class="col-md-8">
<div class="card card-profile"  data-background-color="{{$item->font_color}}">
    <form method="POST" action="{{ url('/admin/administrators/'.$admins->id) }}">
      {{ csrf_field() }}
        <div class="card-avatar">
          @if(strlen($admins->profile)<10)
            <img style="object-fit: cover;" class="img" src="/storage/default_profile/default_profile_pic.png" alt="codefield admin">
          @else
            <img style="object-fit: cover;" class="photo size" src="/storage/profiles/{{$admins->profile }}" alt="codefield admin">
          @endif
        </div>
      <div class="card-content text-left">
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="form-group label-floating">
        <label class="control-label">Name</label>
          <input type="text" name="name" value="{{ $admins->name }}" class="form-control" required>
          @if ($errors->has('name'))
              <span class="">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
       <div class="form-group label-floating">
        <label class="control-label">Email</label>
          <input type="email" name="email" value="{{ $admins->email }}" class="form-control" required>
          @if ($errors->has('email'))
              <span class="">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
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
       <a href="{{ url('/admin/administratorsPic/'.$admins->id.'/edit_admin_pic') }}" class="btn btn-simple btn-danger">
         change profile pic
       </a>
       <a href="{{ url('/admin/administratorsPassword/'.$admins->id.'/edit_admin_password') }}" class="btn btn-simple btn-danger">Change password</a>   
       </div>
       <div class="card-content text-center">
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