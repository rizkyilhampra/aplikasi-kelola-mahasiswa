<header>
    <nav class="navbar navbar-expand navbar-light navbar-top">
        <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">

                </ul>
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">{{ $name }}</h6>
                                <p class="mb-0 text-sm text-gray-600">{{ $role }}</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="{{ asset('assets/images/faces/1.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                        style="min-width: 11rem;">
                        <li>
                            <h6 class="dropdown-header">Hello, {{ $name }} </h6>
                        </li>
                        <hr class="dropdown-divider">
                        <li>
                            @auth
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit"><i
                                            class="icon-mid bi bi-box-arrow-left me-2"></i>
                                        Logout</button>
                                </form>
                            @else
                                <form action="{{ route('login') }}" method="GET">
                                    <button class="dropdown-item" type="submit"><i
                                            class="icon-mid bi bi-box-arrow-left me-2"></i>
                                        Login</button>
                                </form>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
