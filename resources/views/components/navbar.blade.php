<nav class="navbar is-orange is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="p-1 m-auto image is-48x48  is-hidden-touch" href="/">
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

        </div> -->

        <div class="navbar-end">
            @auth
            <div class="navbar-item is-hoverable">
                <a href="/user" class="navbar-item orangeColor"><strong>🛡 - VOTRE COMPTE</strong></a>
                @if(auth()->user()->admin == true)<a href="/admin" class="has-text-danger navbar-item"><strong>ADMIN</strong></a>@endif

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

<script>
    document.addEventListener('DOMContentLoaded', () => {

        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Add a click event on each of them
        $navbarBurgers.forEach(el => {
            el.addEventListener('click', () => {

                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

            });
        });

    });

    
</script>