@extends('layouts.web')

@section('content')

    <x-guest-layout>
        <div class="flex items-center justify-center p-4 mt-10 ">
            <div class="max-w-4xl bg-white w-full rounded-lg shadow-xl">
                <h2 class="text-gray-800 text-center text-2xl font-bold">Registrar una vacante</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    {{-- <div class='flex items-center justify-center w-full'>
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
                </div> --}}
                    <div class="flex flex-wrap m-4 border-b-2 border-blue-100 ">
                        <div class=" p-4 w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4 mb-1">
                            <x-jet-label class="my-2 pt-4" for="title" value="{{ __('Título de la vacante:') }}" />
                            <x-jet-input id="title" class="block mt-1 w-full text-sm text-gray-500" type="text" name="title"
                                :value="old('title')" placeholder="Ingrese el título de la vacante" required autofocus />

                            <x-jet-label class="my-2 pt-4" for="descriptionVacancy"
                                value="{{ __('Descripción de la vacante:') }}" />
                            <textarea
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full text-sm text-gray-600"
                                name="descriptionVacancy" id="descriptionVacancy" rows="5"
                                placeholder="Ingrese información general de la vacante..." required autofocus></textarea>

                            <div>
                                <x-jet-label class="my-2 pt-4" for="currency" value="{{ __('Tipo de moneda:') }}" />
                                <select
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full text-sm text-gray-600"
                                    name="currency" id="currency">
                                    <option value="" disabled selected hidden>Seleccione el tipo de moneda</option>
                                    <option value="COP">Peso Colombiano</option>
                                    <option value="USD">Dolar Americano</option>
                                    <option value="CAD">Dolar Canadiense</option>
                                    <option value="EUR">Euro</option>
                                    <option value="BRL">Real Brasileño</option>
                                    <option value="ARS">Peso Argentino</option>
                                </select>
                            </div>

                            <div>
                                <x-jet-label class="my-2 pt-4" for="country" value="{{ __('País:') }}" />
                                <select
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full text-sm text-gray-600"
                                    name="country" id="country">
                                    <option value="" disabled selected hidden>Selecciona el país</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Estados Unidos">Estados Unidos</option>
                                    <option value="España">España</option>
                                </select>
                            </div>

                        </div>

                        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4 mb-6">
                            <div>
                                <x-jet-label class="my-2 pt-4" for="experienceRequired"
                                    value="{{ __('Experiencia requerida:') }}" />
                                <select
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full text-sm text-gray-600"
                                    name="experienceRequired" id="experienceRequired">
                                    <option value="" disabled selected hidden>Seleccione la experiencia requerida</option>
                                    <option value=0>No requiere</option>
                                    <option value=0.5>6 meses</option>
                                    <option value=1>1 año</option>
                                    <option value=2>2 años</option>
                                    <option value=3>3 años</option>
                                    <option value=4>4 años</option>
                                    <option value=5>5 años o más</option>
                                </select>
                            </div>

                            <div>
                                <x-jet-label class="my-2 pt-4" for="nameTech"
                                    value="{{ __('Tecnologías requeridas para el cargo:') }}" />
                                <select
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full text-sm text-gray-600"
                                    name="nameTech" id="nameTech">
                                    <option value="" disabled selected hidden>Selecciona las tecnologías</option>
                                    <option value="Illustrator">Illustrator</option>
                                    <option value="Java">Java</option>
                                    <option value="PHP">PHP</option>
                                </select>
                            </div>


                            <x-jet-label class="my-2 pt-4" for="endDate" value="{{ __('Feha límite de aplicación:') }}" />
                            <x-jet-input id="endDate" class="block mt-1 w-full text-sm text-gray-500" type="date"
                                name="endDate" :value="old('endDate')" min="0" placeholder="Seleccione la fecha límite"
                                required autofocus />

                            <x-jet-label class="my-2 pt-4" for="salary" value="{{ __('Salario:') }}" />
                            <x-jet-input id="salary" class="block mt-1 w-full text-sm text-gray-500" type="number"
                                name="salary" :value="old('salary')" min="0" placeholder="Digite el salario de la vacante"
                                required autofocus />

                            <div>
                                <x-jet-label class="my-2 pt-4" for="categoryName" value="{{ __('Categoría de la vacante:') }}" />
                                <select
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full text-sm text-gray-600"
                                    name="categoryName" id="categoryName">
                                    <option value="" disabled selected hidden>Selecciona la categoría</option>
                                    <option value="programacion">Programación</option>
                                    <option value="diseno y multimedia">Diseño y multimedia</option>
                                    <option value="marketing digital">Marketing digital</option>
                                    <option value="ingenieria y arquitectura">Ingeniería y arquitectura</option>
                                </select>
                            </div>

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

@endsection
