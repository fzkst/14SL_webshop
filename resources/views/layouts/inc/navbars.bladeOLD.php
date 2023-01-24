<div class="container-fluid">
    <div class="row">
        <div class="col-2 vh-100" style="background-color: rgb(219, 219, 219)">
            <!-- Sidebar -->
            <aside>
                <nav class="navbar navbar-expand-lg navbar-dark bs-side-navbar">
                    <div class="w-100">
                        <div class="mt-3">
                            <a class="navbar-brand ms-3 " href="/dashboard"><img src="img/apple_nav_brand.png"
                                    alt="main_logo">
                                <span class="brand_text navbar-dark ms-3">iPhone Webshop</span></a>
                        </div>
                    </div>
                    <hr class="container">
                    <div class="collapse navbar-collapse ms-1 w-100 " id="navbarSupportedContent">
                        <ul class="navbar-nav top">
                            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }} ">
                                <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</span></a>
                            </li>
                            <li class="nav-item {{ Request::is('kategoriak') ? 'active' : '' }} ">
                                <a class="nav-link" href="{{ url('kategoriak') }}">Kategóriák</a>
                            </li>
                            <li class="nav-item {{ Request::is('termekek') ? 'active' : '' }} ">
                                <a class="nav-link" href="{{ url('termekek') }}">Termékek</a>
                            </li>


                            <li class="nav-item dropdown">
                                <ul class="dropdown-menu">

                                </ul>
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                    </ul>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1"
                                    aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <hr class="container">
                        <ul class="navbar-nav aside_logout">
                            <li class="nav-item dropdown" >
                                {{-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  {{ Auth::user()->name }}
                                </a> --}}
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu aside_drop">
                                        <li><a class="dropdown-item" href="#">Beállítások</a></li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                Kijelentkezés
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>

                                    </ul>
                                </li>
                        </ul>
                    </div>
                </nav>
            </aside>
        </div>
        <div class="col-10 vh-100" style="background-color: rgb(227, 227, 227)">
            <div class="row">
                <!-- Navbar -->
                <header>
                    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
                        id="navbarBlur" data-scroll="true">
                        <div class="container-fluid py-1 px-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                        href="{{ url('dashboard') }}">Főoldal</a></li>
                                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">index</li>
                                </ol>
                                <h6 class="font-weight-bolder mb-0">index</h6>
                            </nav>
                            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                    <div class="input-group input-group-outline">
                                        <label class="form-label">Type here...  </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <ul class="navbar-nav  justify-content-end">
                                    <li class="nav-item dropdown">
                                        {{-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          {{ Auth::user()->name }}
                                        </a> --}}
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Profilom</a></li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        Kijelentkezés
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>

                                            </ul>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                @endforeach
            @endif


            <div class="row content vh-100" id="content">

                {{--                 </div>
        </div>
    </div>
</div>
 --}}

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
