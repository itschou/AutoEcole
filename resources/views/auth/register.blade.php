<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-logo/>
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="prenom" value="{{ __('Prenom') }}" />
                <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" />
            </div>

            <div class="mt-4">
                <x-label for="nom" value="{{ __('Nom') }}" />
                <x-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
            </div>

            <div class="mt-4">
                <x-label for="cin" value="{{ __('CIN') }}" />
                <x-input id="cin" class="block mt-1 w-full" type="text" name="cin" :value="old('cin')" required autocomplete="cin" />
            </div>

            <div class="mt-4">
                <x-label for="adresse" value="{{ __('Adresse') }}" />
                <x-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autocomplete="adresse" />
            </div>

            <div class="mt-4">
                <x-label for="dateNaissance" value="{{ __('Date De Naissance') }}" />
                <x-input id="dateNaissance" class="block mt-1 w-full" type="date" name="dateNaissance" :value="old('dateNaissance')" required autocomplete="dateNaissance" />
            </div>

            <div class="mt-4">
                <x-label for="permis" value="{{ __('Permis') }}" />
                <select id="permis" class="block mt-1 w-full" name="permis" :value="old('permis')" required autocomplete="permis">
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
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            </div>


            <div class="mt-4">
                <x-label for="password" value="{{ __('Mot de passe') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirmer votre mot de passe') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Vous avez déjà un compte ?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('S\'inscrire') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
