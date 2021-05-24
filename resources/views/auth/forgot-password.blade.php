@extends('layouts.footer')
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">

            <h2 class="text-gray-800" style="text-align: center; font-size:x-large; font-weight:bold">Recuperar Contraseña</h2><br><br>

            {{ __('¿Olvidaste tu contraseña? No hay problema. Simplemente escribe tu dirección de correo electrónico y te enviaremos un enlace para restablecer la contraseña que te permitirá elegir una nueva.') }}
        </div>

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-input id="email" class="block mt-1 w-full text-sm text-green-600" type="email" name="email" :value="old('email')" placeholder="Correo electrónico" required autofocus />
            </div><br>

            <div class="flex items-center justify-center mt-4">
                <x-jet-button style="background-color: #fd6d16">
                    {{ __('Restablecer mi contraseña') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
@section('footer')