<div class="col-sm-3 col-md-2 sidebar">

    <ul class="nav nav-sidebar">
        <li class="{{ classActivePath('dashboard', 'main/settings') }}">
            <a href="{{url('dashboard')}}">Main</a>
            <span class="settings  pull-right">
                <a href="{{ route('main.setting.edit') }}" class="btn btn-primary"
                   role="button"
                ><i class="fa fa-cog fa-1x"></i>
                </a>
            </span>
        </li>

        <li class="{{ classActivePath('services', 'services/settings') }}">
            <a href="{{url('services')}}">Hinnasto</a>
            <span class="settings  pull-right">
                <a href="{{ route('services.setting.edit') }}" class="btn btn-primary"
                   role="button"
                ><i class="fa fa-cog fa-1x"></i>
                </a>
            </span>
        </li>

        <li class="{{ classActivePath('staff', 'staff/settings') }}">
            <a  href="{{url('staff')}}">Kuvagalleria</a>
            <span class="settings  pull-right">
                <a href="{{ route('staff.setting.edit') }}" class="btn btn-primary"
                   role="button"
                ><i class="fa fa-cog fa-1x"></i>
                </a>
            </span>
        </li>

        <li class="{{ classActivePath('contact') }}">
            <a href="{{url('contact/messages')}}">Yhteys</a>
            <span class="settings  pull-right  raw-margin-right-2">
                <a href="{{ route('contact.setting.edit') }}" class="btn btn-primary"
                   role="button"
                ><i class="fa fa-cog fa-1x"></i>
                </a>
            </span>
        </li>
    </ul>
</div>