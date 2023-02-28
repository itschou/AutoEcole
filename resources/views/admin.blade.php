@extends('welcome')

@section('content')


<div class="columns is-flex is-centered is-vcentered has-text-centered is-multiline m-auto">
    <div class="column">
        <x-userInformations />
    </div>
    <div class="column is-10">
        <h1 class="title is-1">OPERATIONS SUR CLIENT</h1>
        <span class="title is-6">Ici vous pourrez faire des operations sur le compte de vos clients</span><br><br>
        <form action="{{ route('users.post') }}" method="POST">
            @csrf

            <div class="field">
                <label class="label">CIN</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" type="text" placeholder="CIN" name="cin" id="cin">
                </div> <br>
                <div class="control">
                    <button type="submit" class="button is-success">Chercher</button>
                </div>
            </div>
        </form>


        @if(isset($user))
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            <div class="mt-4">
                <x-label for="id" value="{{ __('ID') }}" />
                <input type="hidden" class="input has-text-centered" id="id" name="id" value="{{ $user->id }}" disabled>
            </div>
            <div class="mt-4">
                <x-label for="montant" value="{{ __('Montant à payer (DH)') }}" />
                <input type="number" id="montant" name="montant" class="input has-text-centered" value="{{ $user->montant }}">
            </div>
            <div class="mt-4">
                <x-label for="montantpaye" value="{{ __('Montant payé (DH)') }}" />
                <input type="number" class="input has-text-centered" id="montantpaye" name="montantPaye" value="{{ $user->montantPaye }}">
            </div>
            <div class="mt-4">
                <select name="permis" class="input has-text-centered block mt-1 w-full" value="{{ $user->permis }}" required autocomplete="permis">
                    <option value="AM">AM</option>
                    <option value="A1">A1</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="EB">EB</option>
                    <option value="C">C</option>
                    <option value="EC">EC</option>
                    <option value="D">D</option>
                    <option value="ED">ED</option>
                </select>
            </div> <br>
            <button type="submit" class="button is-success is-outlined">ENREGISTRER</button>
        </form>
        @else
        <br>
        <h1 class="title is-3 has-text-danger">AUCUNE INFORMATION DISPONIBLE, VEILLEZ SAISIR UNE CIN !</h1>
        @endif


    </div>

</div>

@endsection