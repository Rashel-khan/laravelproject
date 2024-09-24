{{-- navbar start --}}
<div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NavID">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="NavID">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="" class="dropdown-item">Action</a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">Support US</a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">
                            <a href="" class="dropdown-item">
                                Read More
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link disabled">Second</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 d-flex">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Serach Products">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
            </form>
            </div>
        </div>
    </nav>
</div>
{{-- navbar end --}}
