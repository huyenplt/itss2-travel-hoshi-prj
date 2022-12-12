<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top top-nav-collapse">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image d-flex align-items-center" href="{{ route('user.home') }}">
        <img class="w-100 mr-1" src="{{asset('web/images/favicon.png') }}" alt="alternative">
        <span>Travel Hoshi</span>
    </a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#intro">DESTINATION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#blog">BlOG REVIEW</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#voucher">VOUCHER</a>
            </li>

            <!-- Dropdown Menu -->
            <li class="nav-item dropdown ml-5">
                <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user() ? Auth::user()->name : 'Login' }}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">My Account</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">My Blog</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Logout</span></a>
                </div>
            </li>
            <!-- end of dropdown menu -->
        </ul>
    </div>
</nav>
