@extends('admin.sidebar')
@section('administrators')

 <div class="">
  @foreach($admins as $admin)
   <div class="col-md-6 col-lg-4">
    <div  class="card card-profile">
      <div class="card-avatar">
        @if(strlen($admin->profile)<10)
          <img class="img" src="{{ url('storage/default_profile/default_profile_pic.png') }}" alt="RekStudio admin">
        @else
          <img class="img" src="{{ url('storage/profiles/'.$admin->profile) }}" alt="RekStudio admin">
        @endif
        </div>
      <div class="content">
      <h6 class="category text-gray">{{ $admin->email }}</h6>
        <h4 class="card-title">{{ $admin->name }}</h4>
       <div class="row text-center">
       
       
        <button type="button" onclick="window.location.href='{{ url('/admin/administrators/'.$admin->id.'/edit_admin') }}'"
        class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit">
          <i class="material-icons">edit</i>
        </button>
        
        <button hidden="">
        <form action="{{ url('/admin/administrators/'.$admin->id) }}" method="POST">
        {{ csrf_field() }}
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Delete" onclick="return confirm('Send {{$admin->name}} to trash?');">
          <i class="material-icons">close</i>
        </button>
        </form>
        </button>
        </div>
        </div>
      </div>
      </div>
  
  @endforeach
</div>

@endsection

