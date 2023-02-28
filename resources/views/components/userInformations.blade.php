<div class="card is-flex is-justify-content-center is-fixed-top">
    <div class="card-content">
        <div class="media">
            <div class="media-left">
                <figure class="image is-64x64">
                    <img src="{{ asset('images/profile/men.png') }}" alt="Photo de profil">
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
        <div class="has-text-centered box has-shadow">
            <progress class="progress is-success" value="{{ auth()->user()->montantPaye }}" max="{{ auth()->user()->montant }}"></progress>
            <span class="progress-label is-left">{{ auth()->user()->montantPaye }}DH / {{ auth()->user()->montant }}DH</span>
        </div><br>
        <div class="content has-text-centered box">
            <p class="title is-4 has-text-centered">INFORMATIONS</p>
            <p><strong>Numéro client :</strong> <i>#{{ auth()->user()->id }}</i></p>
            <p><strong>Permis:</strong> {{ auth()->user()->permis }}</p>
            <p><strong>Age:</strong> {{\Carbon\Carbon::parse(auth()->user()->dateNaissance)->age}} ANS</p>
            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
            <p><strong>Montant payé:</strong> {{ auth()->user()->montantPaye }} DH</p>
            <p><strong>Montant restant:</strong> {{ auth()->user()->montant -  auth()->user()->montantPaye}} DH</p>
        </div>
        <div class="media has-text-centered box">
            <div class="media-content">
                <p class="title is-5">NOUS CONTACTER</p>
                <p class="subtitle is-6">Téléphone: 0123456789</p>
            </div>
        </div>

        <br>
    </div>
</div>