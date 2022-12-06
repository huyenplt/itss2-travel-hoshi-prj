<div class="sidebar" data-image="{{ asset('light-bootstrap/img/sidebar-5.jpg') }}">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{route('admin.dashboard')}}" class="simple-text">
                {{ __("Hoshi Travel") }}
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'dashboard') active @endif">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>{{ __("Dashboard") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'user') active @endif">
                <a class="nav-link" href="{{route('admin.user')}}">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>{{ __("User") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'blog') active @endif">
                <a class="nav-link" href="{{route('admin.blog')}}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __("Blog") }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
