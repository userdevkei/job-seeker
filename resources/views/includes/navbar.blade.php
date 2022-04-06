<section class="nav-bar">
    @guest()
            <nav class="top">
                <div class="nav-top">
                    <div class="top-right">
                        <a class="top-link" href="#">@fab('facebook')</a> | <a class="top-link" href="#">@fab('twitter')</a> |
                        <a class="top-link" href="#">@fab('instagram')</a> | <a class="top-link" href="#">@fab('whatsapp')</a> |
                        <a class="top-link" href="#">@fas('rss')</a>
                    </div>
                    <div class="top-left">
                        <a class="top-link" href="#jobs">Jobs</a> |
                        <a class="top-link" href="#about-us">About</a> | <a class="top-link" href="#support">Contact support</a> |
                    </div>
                </div>
            </nav>
    @else
        <nav class="top">
            <div class="nav-top">
                <div class="top-right">
                    <a class="top-link" href="#">@fab('facebook')</a> | <a class="top-link" href="#">@fab('twitter')</a> |
                    <a class="top-link" href="#">@fab('instagram')</a> | <a class="top-link" href="#">@fab('whatsapp')</a> |
                    <a class="top-link" href="#">@fas('rss')</a>
                </div>
                <div class="top-left">
                    <a class="top-link" href="#">Jobs</a> | <a class="top-link" href="#">Profile</a> | <a class="top-link" href="#">Support</a> |
                    <a class="top-link" href="#">Log out</a> |
                </div>
            </div>
        </nav>
    @endguest
        <nav class="nav-container">
            <div class="logo">
            @guest()
                <a class="navbar-brands" href="{{ url('/') }}" style="color: yellow;">
                    {{ config('app.name', 'Laravel') }}
                </a>
            @else
                @if(auth()->user()->level == 'Admin')
                    <a class="navbar-brands" href="{{ url('admin/routes') }}">
                        @fas('user-shield') System Admin
                    </a>
                @else
                    <a class="navbar-brands" href="{{ url('employer/routes') }}">
                        @fas('user-tie') Employer
                    </a>
                @endif
                @endguest
            </div>
        <div class="navbar-links">
            <ul>
                @guest
                    <li class="nav-item">
                        <a class="nav-l" href="{{ url('/') }}" style="color: yellow;">@fas('home') {{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-l" href="{{ route('login') }}" style="color: yellow;">@fas('sign-in-alt') {{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-l" href="{{ route('register') }}" style="color: yellow;">@fas('user-plus')
                                {{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    @if(auth()->user()->level == 'Employer')
                        <li class="nav-item">
                            <a class="nav-l" href="{{ route('jobs.index') }}" style="color: yellow;">@fas('tasks') {{ __('Jobs') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-l" href="{{ route('applications.index') }}" style="color: yellow;">@fas('list-ul')
                                {{ __('Applications') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-l" href="{{ route('shortlist.index') }}" style="color: yellow;">@fas('list-alt')
                                {{ __('Shortlist') }}</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-l" href="{{ url('/users') }}" style="color: yellow;">@fas('users') {{ __('Users') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-l" href="{{ url('/applicants') }}" style="color: yellow;">@fas('list-ul')
                                {{ __('Applicants') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-l" href="{{ url('/job') }}" style="color: yellow;">@fas('tasks') {{ __('Jobs') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-l" href="{{ route('messages.index') }}" style="color: yellow; margin-right: -17px !important;">
                                @fas('envelope-open-text') Messages
                            </a>
                        </li>
                        <li>
                            <a class="nav-l" href="{{ route('manager.index') }}" style="color: yellow;"></a>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-l dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: yellow;">
                           @fas('user-cog') Account  <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item disabled">@fas('user-tie') {{ Auth::user()->name }}</a>
                            <a class="dropdown-item" href="{{ route('profile.index') }}">@fas('user') My Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                @fas('power-off') {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</section>

