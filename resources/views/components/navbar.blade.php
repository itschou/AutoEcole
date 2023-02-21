<nav class="navbar is-orange" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <x-logo/>
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <!-- <div class="navbar-start">
            <a class="navbar-item" href="/">
                Accueil
            </a>

            <a class="navbar-item" href="/produits">
                Produits
            </a>
        </div> -->

        <div class="navbar-end">
            @auth
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    {{ Auth::user()->name }}
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="/profile">
                        Profil
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Se déconnecter
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            @else
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary" href="/login">
                        <strong>Se connecter</strong>
                    </a>
                    <a class="button is-light" href="/register">
                        S'enregistrer
                    </a>
                </div>
            </div>
            @endauth
        </div>
    </div>
</nav>