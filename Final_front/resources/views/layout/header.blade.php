<header class="header">
    <div class="container">
        <div class="header-left">
            <a href="{{ url('/') }}" class="logo">
                Educator
            </a>
            <nav>
                <ul>
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/courses') }}">Courses</a></li>
                    <li><a href="{{ url('/about-us') }}">About</a></li>
                    <li><a href="{{ url('/contact-us') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-right">
            @if(Auth::check())
                <a href="{{ route('profile.show') }}" class="profile-link">

                    <div class="profile-name">
                        {{ Auth::user()->username }}
                    </div>
                </a>
            @else
                <a href="{{ url('/login') }}" class="btn btn-login">Log In</a>
                <a href="{{ url('/Sign_up') }}" class="btn btn-signup">Sign Up</a>
            @endif
        </div>
    </div>
</header>