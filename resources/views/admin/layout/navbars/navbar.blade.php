<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <ul class="navbar-nav mr-auto">--}}
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Link</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        Dropdown--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <a class="dropdown-item" href="#">Action</a>--}}
{{--                        <a class="dropdown-item" href="#">Another action</a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <a class="navbar-brand" href="#"> {{ $navName }} </a>--}}
{{--        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-bar burger-lines">Tour</span>--}}
{{--            <span class="navbar-toggler-bar burger-lines">Blog-Review</span>--}}
{{--            <span class="navbar-toggler-bar burger-lines"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse justify-content-end" id="navigation">--}}
{{--            <ul class="nav navbar-nav mr-auto">--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link" data-toggle="dropdown">--}}
{{--                        <span class="d-lg-none">{{ __('Dashboard') }}</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <ul class="navbar-nav   d-flex align-items-center">--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        <span class="no-icon">{{ auth()->user()->name }}</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                        <a class="dropdown-item" href="#">{{ __('Profile') }}</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <form id="logout-form" action="{{route('admin.logout')}}" method="get">--}}
{{--                        @csrf--}}
{{--                        <a class="text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Log out') }} </a>--}}
{{--                    </form>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Tour <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog-Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Image</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Voucher</a>
                </li>

            </ul>
            <ul class="navbar-nav   d-flex align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="no-icon">{{ auth()->user()->name }}</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">{{ __('Profile') }}</a>
                    </div>
                </li>
                <li class="nav-item">
                    <form id="logout-form" action="{{route('admin.logout')}}" method="get">
                        @csrf
                        <a class="text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Log out') }} </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
