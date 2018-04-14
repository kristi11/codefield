<div class="wrapper" id="app">
    
        <!-- Right Side Of Navbar -->
            
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li>
                <a class="" href="{{ route('login') }}">Login</a>
                </li>
            {{-- <li><a class="" href="{{ route('register') }}">Register</a></li> --}}
            @else 
            <li class="">
                <a class="" href="{{ asset('/register') }}">
                    <span>Add Administrator</span>
                </a>
            </li>
            <li class="">
                <a class="" href="{{ url('/admin/projects/create') }}">
                    <span >Create new Project</span>
                </a>
            </li>
             <li class="">
                <a class="" href="https://us15.admin.mailchimp.com/campaigns/wizard/neapolitan?id=134033" target="_blank" rel="noopener">
                   <span>Create new Campaign</span>
                </a>
            </li>
                <li class="">
                    <a class="" target="_blank" href="{{ url('/') }}">
                       <span >Go to website</span>
                    </a>
                </li>
                <li class="">
                    <a class="" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <span>Logout</span>
                    </a>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
          
            @endif
           
</div>