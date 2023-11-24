<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top border-bottom1">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="img/logo-80.png" alt="Logo" width="80" height="80"
                class="d-inline-block align-text-center" />
            GPIB SILOAM PONTIANAK
        </a>
        <button class="navbar-toggler mt-2 w-100" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/"
                        wire:navigate>Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('jadwal-ibadah') ? 'active' : '' }}" href="/jadwal-ibadah"
                        wire:navigate>Jadwal Gereja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="renungan.html">Renungan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Tentang Gereja
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/info" wire:navigate>Info</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Organisasi</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

