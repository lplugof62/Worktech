{{-- @extends('layouts.web')

@section('content') --}}
@extends('layouts.footer')

<x-app-layout>

    <div class="flex items-center justify-center p-4 mt-10 ">

        <div class="max-w-5xl  bg-white w-full rounded-lg shadow-xl"><br><br>
            <h2 class="text-gray-800 text-center text-2xl font-bold">Mi perfil</h2>
            <h3 class="text-gray-800 text-center font-bold">Reclutador</h3><br><br>
            <div class=" flex justify-end mx-5 text-green-500 hover:text-green-700 ">
                <a href="{{ url('/user/profile') }}" class=""><i class="fa fa-pencil fa-fw"></i> Editar</a>
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
                            <label class="my-2 pt-4 text-3xl" for="">Thales S.A.S </label>
                            <p class="mt-2 text-justify text-gray-500">Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit.
                                Ipsum modi alias sapiente corporis suscipit at, deleniti obcaecati explicabo rerum
                                dolores nihil in aut numquam, repellendus facilis. Accusamus nihil reprehenderit non!
                            </p>
                        </div>
                    </div>
                </div>


                {{-- ---------------------------WEBSITE COMPANY------------------------------- --}}
                <div class="flex flex-wrap m-4 border-b-2 border-green-100">
                    <div class="w-full p-4 mb-6 text-center">
                        <x-jet-label class="my-2 pt-4 text-center font-bold" for=""
                            value="{{ __('Link del sitio web de la empresa:') }}" />
                        <a href="#" class="my-2 pt-4 text-center text-sm text-gray-500 hover:underline"
                            for="">https://www.thalesgroup.com/es</a><br>
                    </div>
                </div>
                {{-- ---------------------------VACANCIES AVAILABLE------------------------------- --}}
                <div class="flex flex-wrap m-4 border-b-2 border-green-100">
                    <!--Job list card start-->
                    <div class="w-full p-4 mb-6 text-center">
                        <x-jet-label class="my-2 pt-4 text-center font-bold" for=""
                            value="{{ __('Vacantes disponibles de la empresa:') }}" />

                    </div>

                    <!-- Job List end -->
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
@section('content')
