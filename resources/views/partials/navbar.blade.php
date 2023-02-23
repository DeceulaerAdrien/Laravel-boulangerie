<nav class="navbar">
    <div class="logo">
        <a href="{{ route('home') }}">
            <img class="logo" src="{{ asset('image/Logo-sucresale-2.png') }}" alt="Logo sucresale">
        </a>
    </div>
    <ul class="nav-links">
        <input type="checkbox" id="checkbox_toggle">
        <label for="checkbox_toggle" class="hamburger">&#9776</label>
        <div class="menu">
            <li><a href="/">Home</a></li>
            <li><a href="/">About</a></li>
            <li class="services"><a href="/"> Services </a>
                <ul class="dropdown">
                    <li><a href="/">Dropdown 1 </a></li>

                    <li><a href="/">Dropdown 2</a></li>

                    <li><a href="/">Dropdown 2</a></li>

                    <li><a href="/">Dropdown 3</a></li>

                    <li><a href="/">Dropdown 4</a></li>
                </ul>
            </li>
            <li><a href="/">Pricing</a></li>
            <li><a href="/">Contact</a></li>
        </div>
    </ul>
</nav>
