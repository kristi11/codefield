@extends('admin.sidebar')

@section('edit_admin')
<div class="col-md-offset-3">
<div class="col-md-8">
<div class="card card-profile"  data-background-color="{{$item->font_color}}">
    <form method="POST" action="{{ url('/admin/administratorsPassword/'.$admins->id) }}">
      {{ csrf_field() }}     
        <div class="card-avatar">
          @if(strlen($admins->profile)<10)
            <img style="object-fit: cover;" class="img" src="/storage/default_profile/default_profile_pic.png" alt="codefield admin">
          @else
            <img style="object-fit: cover;" class="photo size" src="/storage/profiles/{{$admins->profile }}" alt="codefield admin">
          @endif
        </div>    
      <div class="card-content text-left">   
    <div class="form-group{{ $errors->has('old') ? ' has-error' : '' }}">
        <div class="form-group label-floating">
        <label class="control-label">Old Password</label>
            <input id="password" type="password" class="form-control" name="old" required="">

            @if ($errors->has('old'))
                <span class="help-block">
                    <strong>{{ $errors->first('old') }}</strong>
                </span>
            @endif
        </div>
    </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="form-group label-floating">
        <label for="password" class="control-label">New Password</label>
                <input id="password" type="password" class="form-control" name="password" required="">

                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <div class="form-group label-floating">
        <label for="password" class="control-label">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="">

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
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