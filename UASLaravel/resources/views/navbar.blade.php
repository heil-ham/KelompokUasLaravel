<nav class="navbar fixed-top navbar-expand-lg navbar-light shadow-sm" style="background-color: #cdf1d0;">
    <div class="container">
        <a class="navbar-brand" href="#">The Web</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : ''  }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('create') ? 'active' : ''  }}" aria-current="page" href="create">Buat</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

