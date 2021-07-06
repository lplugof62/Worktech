{{-- @extends('layouts.web')

@section('content') --}}
@extends('layouts.footer')
<x-app-layout>

    <div class="flex items-center justify-center p-4 mt-10 ">

        <div class="max-w-5xl  bg-white w-full rounded-lg shadow-xl">
            <h2 class="text-gray-800 text-center text-2xl font-bold">Mi perfil</h2>
            <h3 class="text-gray-800 text-center font-bold">Desarrollador</h3><br><br>
            <div class=" flex justify-end mx-5 text-green-500 hover:text-green-700 ">
                <a href="#" class=""><i class="fa fa-pencil fa-fw"></i> Editar</a>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                {{-- ---------PROFILE------- --}}
                <div class="max-w-xl mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-3xl">
                    <div class="md:flex">
                        <div class="md:flex-shrink-0">
                            <img class="h-48 w-full object-cover md:h-full md:w-48" src="/img/store.jpg"
                                alt="Man looking at item at a store">
                        </div>
                        <div class="p-8">
                            <label class="my-2 pt-4 text-3xl" for="">Valeria Cruz</label>
                            <div>
                                <i class="fa fa-map-marker"></i> {{-- {{ $vacancy->country_vacancy_id }} --}} Ubicación
                            </div>
                            <p class="mt-2 text-justify text-gray-500">Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit.
                                Ipsum modi alias sapiente corporis suscipit at, deleniti obcaecati explicabo rerum
                                dolores nihil in aut numquam, repellendus facilis. Accusamus nihil reprehenderit non!
                            </p>
                        </div>
                    </div>
                </div>


                {{-- ---------------------------EXPERIENCE & EDUCATION------------------------------- --}}
                <div class="flex flex-wrap m-4 border-b-2 border-green-100">
                    <div class=" p-4 w-full sm:w-1/3 md:w-1/3 lg:w-1/3 xl:w-1/3 p-4 mb-1 text-center">
                        <x-jet-label class="my-2 pt-4 text-center font-bold" for=""
                            value="{{ __('Años de experiencia:') }}" />
                        <label class="my-2 pt-4 text-center font-bold text-4xl text-gray-500" for="">3</label>

                    </div>

                    <div class="w-full sm:w-1/3 md:w-1/3 lg:w-1/3 xl:w-1/3 p-4 mb-6 text-center">
                        <x-jet-label class="my-2 pt-4 text-center font-bold" for="" value="{{ __('Educación:') }}" />
                        <label class="my-2 pt-4 text-center  text-sm text-gray-500" for="">Ingeniera de
                            sistemas</label><br>
                        <label class="my-2 pt-4 text-center  text-sm text-gray-500" for="">Desarrolladora de
                            software</label>

                    </div>

                    <div class=" p-4 w-full sm:w-1/3 md:w-1/3 lg:w-1/3 xl:w-1/3 p-4 mb-1 text-center">
                        <x-jet-label class="my-2 pt-4 text-center font-bold" for="" value="{{ __('Nivel:') }}" />
                        <label class="my-2 pt-4 text-center text-sm text-gray-500" for="">Profesional</label><br>
                        <label class="my-2 pt-4 text-center  text-sm text-gray-500" for="">Tecnólogo</label>
                    </div>

                </div>
                {{-- ---------------------------SKILLS & TECHS------------------------------- --}}
                <div class="flex flex-wrap m-4 border-b-2 border-green-100">
                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4 mb-6 text-center">
                        <x-jet-label class="my-2 pt-4 text-center font-bold" for=""
                            value="{{ __('Habilidades:') }}" />
                        <div class="flex justify-center mt-3">
                            <div>
                                <button
                                    class="cursor-default bg-yellow-500 text-white my-3 text-sm rounded-3xl px-3 py-1">Liderazgo</button>
                                <button
                                    class="cursor-default bg-yellow-500 text-white my-3 text-sm rounded-3xl px-3 py-1">Trabajo
                                    en equipo</button>
                                <button
                                    class="cursor-default bg-yellow-500 text-white my-3 text-sm rounded-3xl px-3 py-1">Creatividad</button>
                                <button
                                    class="cursor-default bg-yellow-500 text-white my-3 text-sm rounded-3xl px-3 py-1">Comunicación
                                    efectiva</button>
                            </div>
                        </div>

                    </div>

                    <div class=" p-4 w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4 mb-1 text-center">
                        <x-jet-label class="my-2 pt-4 text-center font-bold" for=""
                            value="{{ __('Lenguajes de programación:') }}" />
                        <div class="flex justify-center mt-3">
                            <div>
                                <button
                                    class="cursor-default bg-green-500 text-white my-3 text-sm rounded-3xl px-3 py-1">MySQL</button>
                                <button
                                    class="cursor-default bg-green-500 text-white my-3 text-sm rounded-3xl px-3 py-1">PHP</button>
                                <button
                                    class="cursor-default bg-green-500 text-white my-3 text-sm rounded-3xl px-3 py-1">Java</button>
                                <button
                                    class="cursor-default bg-green-500 text-white my-3 text-sm rounded-3xl px-3 py-1">Python</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ---------------------------PORTFOLIO & PROJECTS------------------------------- --}}
                <div class="flex flex-wrap m-4 border-b-2 border-green-100">
                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4 mb-6 text-center">
                        <x-jet-label class="my-2 pt-4 text-center font-bold" for="" value="{{ __('Portafolio:') }}" />
                        <a href="#" class="my-2 pt-4 text-center text-sm text-gray-500 hover:underline"
                            for="">www.miportafolio.com</a><br>

                    </div>

                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4 mb-6 text-center">
                        <x-jet-label class="my-2 pt-4 text-center font-bold" for=""
                            value="{{ __('Proyectos destacados:') }}" />
                        <a href="#" class="my-2 pt-4 text-center text-sm text-gray-500 hover:underline"
                            for="">www.miproyectonumero1.com</a><br>
                        <a href="#" class="my-2 pt-4 text-center text-sm text-gray-500 hover:underline"
                            for="">www.miproyectonumero2.com</a><br>
                        <a href="#" class="my-2 pt-4 text-center text-sm text-gray-500 hover:underline"
                            for="">www.miproyectonumero3.com</a><br>
                    </div>
                </div>
                {{-- ---------------------------CERTIFICATIONS & LANGUAGES------------------------------- --}}
                <div class="flex flex-wrap m-4 border-b-2 border-green-100">
                    <div class=" p-4 w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4 mb-1 text-center">
                        <x-jet-label class="my-2 pt-4 text-center font-bold" for=""
                            value="{{ __('Certificaciones:') }}" />
                        <p class="my-2 pt-4 text-justify text-sm text-gray-500" for="">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Saepe dolorum facilis nam consequuntur aut numquam vitae quam
                            ullam officia cupiditate, placeat magnam, deserunt debitis ipsum? Aliquam et maiores eius
                            culpa!</p>

                    </div>

                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4 mb-6 text-center">
                        <x-jet-label class="my-2 pt-4 text-center font-bold" for=""
                            value="{{ __('Idioma - Nivel:') }}" />
                        <label class="my-2 pt-4 text-center  text-sm text-gray-500" for="">Español -
                            Avanzado</label><br>
                        <label class="my-2 pt-4 text-center  text-sm text-gray-500" for="">Inglés -
                            Intermedio</label><br>
                        <label class="my-2 pt-4 text-center  text-sm text-gray-500" for="">Portugués - Básico</label>
                    </div>


                </div>
                <br>
                <div class="flex items-center justify-center mt-4">
                    <x-jet-button type="submit" style="background-color: #fd6d16" class="ml-4">
                        {{ __('Descargar CV en PDF') }}
                    </x-jet-button>
                </div>

                <br><br>
            </form>
        </div>
    </div>

</x-app-layout>
{{-- @endsection --}}
@section('content')
