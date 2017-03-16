<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/dashboard')}}">{{ config('app.name', 'Laravel') }}</a>
        </div>

        <div class="navbar-collapse collapse" id="bs-navbar-collapse-1" aria-expanded="false">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden-lg hidden-md hidden-sm  {{ classActivePath('dashboard', 'main/settings') }}">
                    <a href="{{url('dashboard')}}">Main</a>
                    <span class="settings  pull-right">
                        <a href="{{ route('main.setting.edit') }}" class="btn btn-primary"
                           role="button"
                        ><i class="fa fa-cog fa-1x"></i>
                        </a>
                    </span>
                </li>

                <li class="hidden-lg hidden-md hidden-sm  {{ classActivePath('services', 'services/settings') }}">
                    <a href="{{url('services')}}">Services</a>
                    <span class="settings  pull-right">
                        <a href="{{ route('services.setting.edit') }}" class="btn btn-primary"
                           role="button"
                        ><i class="fa fa-cog fa-1x"></i>
                        </a>
                    </span>
                </li>

                <li class="hidden-lg hidden-md hidden-sm {{ classActivePath('staff', 'staff/settings') }}">
                    <a  href="{{url('staff')}}">Staff</a>
                    <span class="settings  pull-right">
                        <a href="{{ route('staff.setting.edit') }}" class="btn btn-primary"
                           role="button"
                        ><i class="fa fa-cog fa-1x"></i>
                        </a>
                    </span>
                </li>

                <li class="hidden-lg hidden-md hidden-sm {{ classActivePath('contact') }}">
                    <a href="{{url('contact/messages')}}">Contact</a>
                    <span class="settings  pull-right  raw-margin-right-2">
                        <a href="{{ route('contact.setting.edit') }}" class="btn btn-primary"
                           role="button"
                        ><i class="fa fa-cog fa-1x"></i>
                        </a>
                    </span>
                </li>
                <li>
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
