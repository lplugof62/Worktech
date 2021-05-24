@extends('layouts.footer')
<x-guest-layout>

    <div class="flex items-center justify-center p-4 mt-10 ">
        <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">
            <h2 class="text-gray-800" style="text-align: center; font-size:x-large; font-weight:bold">Editar mi
                perfil</h2>
            <h3 class="text-gray-800" style="text-align: center;  font-weight:bold">Reclutador</h3><br>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class='flex items-center justify-center w-full'>
                    <label for="photo"
                        class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                        <div class='flex flex-col items-center justify-center pt-7'>
                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <p class='text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                Cargue una imagen o logo de la empresa en jpg o png, máximo 200KB</p>
                        </div>
                        <input type='file' id="photo" name="photo" class="hidden" />
                    </label>
                </div>
                <div class="flex flex-wrap m-4 border-b-2 border-green-100 ">
                    <div class=" p-4 w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4 mb-1">
                        <x-jet-label class="my-2 pt-4" for="nameCompany" value="{{ __('Nombre de la empresa:') }}" />
                        <x-jet-input id="nameCompany" class="block mt-1 w-full text-sm text-gray-500" type="text"
                            name="nameCompany" :value="old('nameCompany')" placeholder="Digite el nombre de la empresa"
                            required autofocus />

                        <x-jet-label class="my-2 pt-4" for="webSiteCompany" value="{{ __('Link del sitio web de la empresa:') }}" />
                        <x-jet-input id="webSiteCompany" class="block mt-1 w-full text-sm text-gray-500" type="text"
                            name="webSiteCompany" :value="old('webSiteCompany')"
                            placeholder="Ingrese la URL del sitio web de la empresa" required autofocus />
                    </div>


                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4 mb-6">
                        <x-jet-label class="my-2 pt-4" for="descriptionCompany" value="{{ __('Descripción de la empresa:') }}" />
                        <textarea
                            class="form-textarea block mt-1 w-full text-sm text-gray-500 resize-none border rounded-md"
                            name="descriptionCompany" id="descriptionCompany" rows="5"
                            placeholder="Ingrese información general de la empresa..."></textarea>
                    </div>

                </div>

                <br>
                <div class="flex items-center justify-center mt-4">
                    <x-jet-button type="submit" style="background-color: #fd6d16" class="ml-4">
                        {{ __('Guardar cambios') }}
                    </x-jet-button>
                </div>

                <br><br>
            </form>
        </div>
    </div>

</x-guest-layout>
@section('footer')
