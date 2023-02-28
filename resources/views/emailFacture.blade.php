<p class="has-text-centered has-text-weight-bold">Bonjour, {{ $user->prenom }} {{ $user->nom }}</p>

<p>Nous vous remercions pour votre paiement. Voici les détails de votre paiement du permis {{ $user->permis }} :</p>

<table class="table is-fullwidth">
  <thead>
    <tr class="has-background-primary has-text-white">
      <th>Montant payé</th>
      <th>Montant total</th>
      <th>Montant restant</th>
    </tr>
  </thead>
  <tbody>
    <tr class="{{ $user->montant - $user->montantPaye > 0 ? 'has-background-danger has-text-white' : 'has-background-success has-text-white' }}">
      <td>{{ $user->montantPaye }} DH</td>
      <td>{{ $user->montant }} DH</td>
      <td>{{ $user->montant - $user->montantPaye }} DH</td>
    </tr>
  </tbody>
</table>

<p>Merci de votre confiance, et à bientôt !</p>

