<header class="navbar navbar-expand-lg navbar-light bg-white align-items-stretch border-bottom p-0" style="height: 60px">
    <nav class="container-fluid flex-wrap flex-md-nowrap justify-content-between px-md-5 align-items-md-stretch" role="navigation">
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#navBarMobile">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--Desktop device logo--->
        <a class="navbar-brand d-none d-md-flex align-items-center p-0 m-0" href="{{ route('home') }}">
          <x-logo/>
        </a>

        <!--Mobile device logo--->
        <a class="navbar-brand d-flex align-items-center p-0 m-0 d-md-none" href="{{ route('home') }}">
          <x-logo-alt height="40px" width="40px"/>
        </a>

        @if(Auth::check())
            <a href="{{ route('profile.edit') }}" class="me-2">
            <img src="https://i.pravatar.cc/32?u={{ Auth::user()->id }}" height="35px" width="35px"/ alt="{{ Auth::user()->name }}" class="rounded-circle"></a>
        @else
            <a class="d-md-none btn btn-outline-primary" href="{{ route('login') }}">Sign in</a>

        @endif

        <!--Menu for desktop devices-->
        <ul class="menu navbar-nav flex-row-md flex-wrap align-items-center flex-grow-1 ms-md-5 d-none d-md-flex">
            <li class="nav-item dropdown">
                <a class="link-dark nav-link p-2 fw-semibold my-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                    Browse <x-chevron-down/>
                </a>
                <div class="dropdown-menu dropdown-menu-start border-0 p-0 rounded-md shadow-lg" style="min-width: 20rem";>
                    <div class="d-md-flex flex-col d-none">                                
                        <div class="flex-grow-1 p-1" {{-- style="min-width: 60%;" --}}>
                            <h6 class="fw-bold p-3 mb-2">Subjects</h6>
                            <a class="dropdown-item rounded-left text-primary" href="#">
                                <div class="py-2 d-flex flex-row align-items-center">
                                   <img src="{{ asset('images/math.png') }}" class="img-fluid" style="width: 25px;">                                            
                                    <div class="ms-3">
                                        <h6 class="text-dark">Mathematics</h6>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item rounded-left text-primary" href="#">
                                <div class="py-2 d-flex flex-row align-items-center">
                                   <img src="{{ asset('images/biology.png') }}" class="img-fluid" style="width: 25px;">
                                    <div class="ms-3">
                                        <div class="site-nav-dropdown-item-title">
                                            <h6 class="text-dark">Biology</h6>
                                        </div>
                                    </div>
                                </div>        
                            </a>
                            <a class="dropdown-item rounded-left text-primary" href="#">
                                <div class="py-2 d-flex flex-row align-items-center">
                                    <img src="{{ asset('images/english.png') }}" class="img-fluid" style="width: 25px;">
                                    <div class="ms-3">
                                        <div class="site-nav-dropdown-item-title">
                                            <h6 class="text-dark">English</h6>
                                        </div>
                                    </div>
                                </div>        
                            </a>
                            <a class="dropdown-item rounded-left text-primary" href="#">
                                <div class="py-2 d-flex flex-row align-items-center">
                                    <img src="{{ asset('images/physics.png') }}" class="img-fluid" style="width: 25px;">                                               
                                    <div class="ms-3">
                                        <div class="site-nav-dropdown-item-title">
                                            <h6 class="text-dark">Physics</h6>
                                        </div>
                                    </div>
                                </div>        
                            </a>
                            <a class="dropdown-item rounded-left text-primary" href="#">
                                <div class="py-2 d-flex flex-row align-items-center">
                                    <img src="{{ asset('images/chemistry.png') }}" class="img-fluid" style="width: 25px;">                                               
                                    <div class="ms-3">
                                        <div class="site-nav-dropdown-item-title">
                                            <h6 class="text-dark">Chemistry</h6>
                                        </div>
                                    </div>
                                </div>        
                            </a>
                        </div>    
                        {{-- <div class="d-md-flex flex-col flex-wrap bg-light p-4">
                            <a class="w-100 text-decoration-none text-black fw-semibold small" href="/shots/popular/animation">Animation</a>
                            <a class="w-100 text-decoration-none text-black fw-semibold small" href="/shots/popular/branding">Branding</a>
                            <a class="w-100 text-decoration-none text-black fw-semibold small" href="/shots/popular/illustration">Illustration</a>
                            <a class="w-100 text-decoration-none text-black fw-semibold small" href="/shots/popular/mobile">Mobile</a>
                            <a class="w-100 text-decoration-none text-black fw-semibold small" href="/shots/popular/print">Print</a>
                            <a class="w-100 text-decoration-none text-black fw-semibold small" href="/shots/popular/product-design">Product Design</a>
                            <a class="w-100 text-decoration-none text-black fw-semibold small" href="/shots/popular/typography">Typography</a>
                            <a class="w-100 text-decoration-none text-black fw-semibold small" href="/shots/popular/web-design">Web Design</a>
                        </div> --}}
                    </div>        
                </div>    
            </li>
            <li class="d-none d-md-flex nav-item flex-grow-1 ms-md-3">
                <div class="search d-flex flex-row position-relative" style="max-width:300px;width:60%;">
                    <div class="search-icon d-inline-flex align-items-center pe-2 position-absolute text-muted"><x-search-icon/></div>
                    <input type="text" class="form-control ps-5 py-2 text-bg-light" placeholder="What do you want to learn?">
                </div>                         
            </li>
 
            @guest

                <li class="nav-item mx-3">
                    <a class="btn-login link-dark nav-link p-2 px-3 rounded " href="{{ route('login') }}">Sign in</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-primary text-white  px-3 py-2" href="{{ route('register') }}">Sign up</a>
                </li>

            @endguest

            @auth

                <li class="nav-item ms-3 dropdown">
                    <a id="userDropdown" class="nav-link dropdown-toggle my-1" href="#" role="button" data-bs-toggle="dropdown">
                        <img src="https://i.pravatar.cc/32?u={{ Auth::user()->id }}" height="32px" width="32px"/ alt="{{ Auth::user()->name }}" class="rounded-circle">
                        <span class="ms-2">{{ Auth::user()->name }}</span>
                     </a>

                    <ul class="dropdown-menu dropdown-menu-end py-4 text-start rounded shadow-lg border">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="/account/profile">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="#">Edit Work Preferences</a></li>
                        <li><a class="dropdown-item" href="#">My Boosted Shots</a></li>
                        <li><a class="dropdown-item" href="#">My Likes</a></li>
                        <li><a class="dropdown-item" href="#">Account Settings</a></li>
                        <li><form class="dropdown-item" id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link text-dark text-decoration-none p-0">Sign Out</button>
                            </form>
                        </li>                
                    </ul>
                </li>
             @endauth
        </ul>

        <!--Menu for mobile devices-->
        <div class="d-md-none offcanvas offcanvas-start flex-grow-1" data-bs-scroll="true" id="navBarMobile">
            <div class="offcanvas-header align-self-end">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#navBarMobile"></button>
            </div>
            <div class="offcanvas-body p-5 pt-0 p-md-0 align-items-center">
                <ul class="menu navbar-nav fs-3">
                    <li class="nav-item">
                        <a class="nav-link link-dark" href="{{ route('browse') }}">Browse</a>   
                    </li>
               
                    @guest
                        <li class="nav-item">
                            <a class="nav-link link-dark" href="{{ route('login') }}">Sign in</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link link-dark" href="{{ route('register') }}">Sign up</a>
                        </li>
                    @endguest

                    @auth
                        <li class="nav-item">
                            <a class="nav-link link-dark" href="#">{{ Auth::user()->name }}</a>
                        </li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-link fs-3 link-dark text-decoration-none p-0">Sign Out</button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>