@extends('welcome')

@section('content')
<!-- Section 1 -->
<section class="hero is-fullheight-with-navbar is-medium section1Background">
    <div class="overlay"></div>
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title is-size-1-desktop is-size-2-mobile has-text-white has-text-shadow">Bienvenue chez Chouaib Auto-école</h1>
        <h2 class="subtitle is-size-3-desktop is-size-4-mobile has-text-white has-text-shadow">Obtenez votre permis de conduire facilement et rapidement avec nous</h2>
      </div>
    </div>
    <div class="hero-foot">
      <img src="{{ asset('images/dashboard/h2.png') }}" class="bounced" width="590" alt="Image 1">
    </div>
  </section>

  <!-- Section 2 -->
  <section class="hero is-fullheight-with-navbar is-medium is-info section2Background">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title is-size-1-desktop is-size-2-mobile has-text-white has-shadow">Apprenez à conduire avec des professionnels</h1>
        <h2 class="subtitle is-size-3-desktop is-size-4-mobile has-text-white tag is-dark">Nos instructeurs certifiés vous accompagneront tout au long de votre formation</h2>
      </div>
    </div>
  </section>

  @endsection
