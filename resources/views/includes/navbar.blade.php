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
                        Add Post
                    </a>
                </li>
                <li class="nav-item text-center mx-2 mx-lg-1">
                    <a class="nav-link" href="#!">
                        <i class="fas fa-globe-americas fa-lg mb-1"></i>
                        Add User
                    </a>
                </li>
            </ul>

            <a class="btn btn-primary" type="button">
                Login
            </a>
        </div>
    </div>
</nav>
