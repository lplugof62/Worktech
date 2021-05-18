<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2 class="text-gray-800" style="text-align: center; font-size:x-large; font-weight:bold">Registro</h2><br>


            <div>
                <x-jet-input id="name" class="block mt-1 w-full text-sm text-green-600" type="text" name="name" :value="old('name')" placeholder="Nombre completo" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-input id="email" class="block mt-1 w-full text-sm text-green-600" type="email" name="email" :value="old('email')" placeholder="Correo electrónico" required />
            </div>

            <div class="mt-4">
                <x-jet-input id="password" class="block mt-1 w-full text-sm text-green-600" type="password" name="password" placeholder="Contraseña" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-input id="password_confirmation" class="block mt-1 w-full text-sm text-green-600" type="password" name="password_confirmation" placeholder="Confirmar contraseña" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
            @endif

            <div class="flex items-center justify-center mt-4">
                <x-jet-button style="background-color: #fd6d16" class="ml-4">
                    {{ __('Registrar') }}
                </x-jet-button>
            </div>

            <div class="flex items-center justify-center mt-4">
                <a class="text-xs text-gray-800">
                    {{ __('Ya estás registrado?') }}
                </a>
            </div>

            <div class="flex items-center justify-center mt-1">
                <a class="underline text-xs text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="color: #2196f3">
                    {{ __('Inicia sesión') }}
                </a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
<div class="pt-2">
    <div class="md:flex-auto flex pb-5 px-3 m-auto pt-5 border-t border-gray-500 text-gray-400 text-sm 
    flex-col md:flex-row max-w-6xl">
        <div class="mt-2">
            © 2021 | WorkTech - Todos los derechos reservados
        </div>

        <!-- Required Unicons (if you want) -->

    </div>
</div>