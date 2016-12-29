<div class="col-sm-3 col-md-2 sidebar">

    <ul class="nav nav-sidebar">
        <li class="{{ classActivePath('dashboard') }}">
            <a href="{{url('main')}}">Main</a>
        </li>

        <li class="{{ classActivePath('services') }}">
            <a href="{{url('services')}}">Services</a>
            <span class="settings  pull-right">
                <a href="{{ route('services.setting.edit') }}" class="btn btn-primary"
                   role="button"
                ><i class="fa fa-cog fa-1x"></i>
                </a>
            </span>
        </li>

        <li class="{{ classActivePath('staff') }}">
            <a  href="{{url('staff')}}">Staff</a>
            <span class="settings  pull-right">
                <a href="{{ route('staff.setting.edit') }}" class="btn btn-primary"
                   role="button"
                ><i class="fa fa-cog fa-1x"></i>
                </a>
            </span>
        </li>

        <li class="{{ classActivePath('contact') }}">
            <a href="{{url('contact/')}}">Contact</a>
            <span class="settings  pull-right  raw-margin-right-2">
                <a href="#" class="btn btn-primary"
                   role="button"
                ><i class="fa fa-cog fa-1x"></i>
                </a>
            </span>
        </li>
    </ul>
</div>