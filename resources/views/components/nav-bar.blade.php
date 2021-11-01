<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- Site Logo Here -->
        <a class="navbar-brand" href="#">Bootstrap Navbar</a>
        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMobileToggle" aria-controls="navbarMobileToggle" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMobileToggle">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="Submenu-Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                    </a>
                    <ul class="dropdown-menu rounded-3" aria-labelledby="Submenu-Dropdown">
                        <li><a class="dropdown-item" href="#">Services One</a></li>
                        <li><a class="dropdown-item" href="#">Services Two</a></li>
                        <li><a class="dropdown-item" href="#">Services Three</a></li>
                        <li><a class="dropdown-item" href="#">Services Four</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>

            <!-- Right Side -->
            <div class="btn-group float-end">
                <a href="#" class="dropdown-toggle text-decoration-none text-light" data-bs-toggle="dropdown">
                <i class="bi bi-person-circle"></i>
                <span>Gurdeep Singh</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a href="#" class="dropdown-item"><i class="bi bi-lock-fill"></i> Change Password</a></li>
                    <li><a href="#" class="dropdown-item"><i class="bi bi-gear-fill"></i> Admin Setion</a></li>
                    <li><a href="#" class="dropdown-item"><i class="bi bi-gear-wide-connected"></i> IMAP Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a href="#" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<br>
