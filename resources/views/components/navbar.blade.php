<header class="site-header">
    <div class="shell header-inner"><a href="{{ url('/') }}" class="wordmark"
            aria-label="Wedora home">Wedora<span>.</span></a>
        <nav class="desktop-nav" aria-label="Navigasi utama">
            <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a><a
                href="{{ url('/templates') }}"
                class="nav-link {{ request()->is('templates*') ? 'active' : '' }}">Templates</a><a
                href="{{ url('/pricing') }}"
                class="nav-link {{ request()->is('pricing') ? 'active' : '' }}">Pricing</a><a
                href="{{ url('/how-it-works') }}"
                class="nav-link {{ request()->is('how-it-works') ? 'active' : '' }}">How It Works</a><a
                href="{{ url('/faq') }}" class="nav-link {{ request()->is('faq') ? 'active' : '' }}">FAQ</a>
        </nav>
        <div class="header-actions"><button class="btn btn-ghost" type="button">Login</button><a
                class="btn btn-primary" href="{{ url('/order') }}">Buat Website <x-icon name="arrow-right" /></a></div>
        <button class="btn btn-ghost btn-icon menu-button" type="button" aria-label="Buka menu" aria-expanded="false"
            data-menu-toggle><span class="menu-open"><x-icon name="menu" /></span><span class="menu-close"><x-icon
                    name="x" /></span></button>
    </div>
    <nav class="mobile-nav" aria-label="Navigasi seluler" data-mobile-nav hidden><a
            href="{{ url('/') }}">Home</a><a href="{{ url('/templates') }}">Templates</a><a
            href="{{ url('/pricing') }}">Pricing</a><a href="{{ url('/how-it-works') }}">How It Works</a><a
            href="{{ url('/faq') }}">FAQ</a><a href="{{ url('/order') }}">Buat Website Pernikahan</a></nav>
</header>
