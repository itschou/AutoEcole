<div class="card is-flex is-justify-content-center is-fixed-top">
    <div class="card-content">
        <div class="media">
            <div class="media-left">
                <figure class="image is-64x64">
                    <img src="{{ asset('images/profile/admin.png') }}" alt="Photo de profil">
                </figure>
            </div>
            <div class="media-content">
                <p class="title is-4">Bienvenue, <span class="orangeColor">{{ auth()->user()->prenom }}</span></p>
            </div>
        </div>
        <div class="buttons">
            <a href="/user/profile" class="button is-primary">Modifier </a>
            <form action="{{ route('logout') }}" method="post"> @csrf <button class="button is-danger" role="submit">Déconnexion</button></form>
        </div>
        <progress class="progress is-primary" value="{{ auth()->user()->montantPaye }}" max="5000"></progress>
        <p class="title is-4 has-text-centered">INFORMATIONS</p>
        <div class="content has-text-centered">
            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
            <p><strong>Nombre d'inscrits :</strong> {{ count($usersAll) }}</p>
            <p><strong>Nombre de clients :</strong> {{ count($usersAll->where('IsClient', '=', true)) }}</p>
        </div>
    </div>
</div>