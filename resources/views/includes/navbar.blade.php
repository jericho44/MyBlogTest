<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">My Blog Apps</a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-light"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
                <li class="nav-item text-center mx-2 mx-lg-1">
                    <a class="nav-link active" aria-current="page" href="/">
                        <div>
                            <i class="fa fa-home fa-lg mb-1"></i>
                        </div>
                        Home
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">
                <li class="nav-item text-center mx-2 mx-lg-1">
                    <a class="nav-link" href="{{ route('post.index') }}">
                        <i class="fas fa-bell fa-lg mb-1"></i>
                        Post
                    </a>
                </li>
                @if (Auth::user()->role === 1)
                    <li class="nav-item text-center mx-2 mx-lg-1">
                        <a class="nav-link" href="{{ route('users.index') }}">
                            <i class="fas fa-globe-americas fa-lg mb-1"></i>
                            Add User
                        </a>
                    </li>
                @endif
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="btn-group" role="group">
                        <a class="text-white" style="text-decoration: none" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                class="nav-icon fas fa-sign-out-alt"></i> &nbsp; Log
                            Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
