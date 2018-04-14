@extends('admin.sidebar')

@section('register')
        <div class="col-sm-8 col-sm-offset-2">
            <div class="card">
                <div class="card-header" data-background-color="{{$item->app_color}}">
                    <h4 class="title">Register</h4>
                    <p class="category">Add a new administrator</p>
                </div>
                <div class="card-content">
                    <form role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div hidden class="{{ $errors->has('profile') ? ' has-error' : '' }}">
                            <label for="profile" class="col-md-3 offset-md-1">profile</label>

                            <div hidden class="col-md-6">
                                <input id="profile" hidden type="text" class="form-control" name="profile"
                                 value="df" required autofocus>

                                @if ($errors->has('profile'))
                                    <span class="text-muted">
                                        <strong>{{ $errors->first('profile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                            

                            <div class="form-group label-floating">
                            <label class="control-label">Name</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="text-muted">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                           

                            <div class="form-group label-floating">
                             <label for="email" class="control-label">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="text-muted">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            <div class="form-group label-floating">
                            <label for="password" class="control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="text-muted">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>        

                            <div class="form-group label-floating">
                            <label for="password_confirm" class="control-label">Confirm Password</label>
                                <input id="password_confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-{{$item->font_color}}" id="add_administrator">
                                    Register
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
