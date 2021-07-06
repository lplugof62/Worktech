@extends('layouts.footer')
<x-app-layout>
    <div class="  mt-10 ">

        <h2 class="text-gray-800 text-center text-2xl font-bold">Editar mi perfil</h2><br><br>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')

                    <x-jet-section-border />
                @endif

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>

                    <x-jet-section-border />
                @endif

                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.two-factor-authentication-form')
                    </div>

                    <x-jet-section-border />
                @endif

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>

                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-jet-section-border />

                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.delete-user-form')
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
@section('footer')