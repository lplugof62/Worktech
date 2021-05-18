<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif


        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="text-gray-800" style="text-align: center; font-size:x-large; font-weight:bold">Iniciar Sesión</h2><br>
            <div>
                <x-jet-input id="email" class="block mt-1 w-full text-sm text-green-600" type="email" name="email" :value="old('email')" placeholder="Usuario o correo electrónico" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-input id="password" class="block mt-1 w-full text-sm text-green-600" type="password" name="password" required autocomplete="current-password" placeholder="Contraseña"/>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span style="color: #2196f3" class="ml-2 text-sm text-gray-600">{{ __('Recordar contraseña') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-xs text-gray-600 hover:text-gray-900" style="color: #2196f3" href="{{ route('password.request') }}">
                    {{ __('Olvidaste tu contraseña?') }}
                </a>
                @endif
            </div>
            <div class="flex items-center justify-center mt-4">
                <x-jet-button style="background-color: #fd6d16" class="ml-4">
                    {{ __('Ingresar') }}
                </x-jet-button>
            </div>
            <br><br>

            <div class="flex items-center justify-center mt-4">
                <a class="text-xs text-gray-800">
                    {{ __('Aún no tienes cuenta?') }}
                </a>
            </div>

            <div class="flex items-center justify-center mt-1">
                <a class="underline text-xs text-gray-600 hover:text-gray-900" href="{{ route('register') }}" style="color: #2196f3">
                    {{ __('Crear una cuenta') }}
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