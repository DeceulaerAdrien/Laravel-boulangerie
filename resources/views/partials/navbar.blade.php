<nav class="navbar">
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('image/Logo-sucresale.svg') }}" alt="Logo sucresale">
        </a>
    </div>
    <ul>
        <input type="checkbox" id="checkbox_toggle">
        <label for="checkbox_toggle" class="hamburger">&#9776</label>
        <div class="menu">
            <li><a href="{{ route('home') }}">Acceuil</a></li>
            <li><a href="{{ route('products') }}">Nos produits</a></li>
            <li><a href="{{ route('contact') }}">Contactez-nous</a></li>
        </div>
    </ul>
</nav>
