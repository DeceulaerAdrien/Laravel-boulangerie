<nav class="navigation navbar navbar-expand-lg navbar-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="?page=Home">
            <img class="logo" src="{{ asset('image/Logo-sucresale.png') }}" alt="Logo sucresale">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('acceuil') }}">Acceuil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produits') }}"> Nos produits </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}"> Contactez-nous </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
