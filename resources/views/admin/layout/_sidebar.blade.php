<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li class="{{ classActivePath('dashboard') }}">
            <a href="{{url('dashboard')}}">Main</a>
        </li>

        <li class="{{ classActivePath('services') }}">
            <a href="{{url('services')}}">Services</a>
        </li>

        <li class="{{ classActivePath('staff') }}">
            <a href="{{url('staff')}}">Staff</a>
        </li>

        <li class="{{ classActivePath('contact') }}">
            <a href="{{url('contact/')}}">Contact</a>
        </li>
    </ul>
</div>