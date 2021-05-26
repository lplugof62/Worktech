@extends('layouts.web')

@section('content')
<x-guest-layout>
    <div>
            <h2 class="text-gray-800 text-center text-2xl font-bold mt-6">Detalle de la vacante</h2>
    
        <div class="bg-gray-200 text-gray-800 mx-10 rounded-md items-center border-2 border-blue-300 my-6">
                            
                <div class="p-4">
                    <h2 class="text-2xl tracking-tight font-semibold">{{ $vacancy->title }}</h6>
                        <div class="flex justify-between items-center mt-2">
                            <div class="text-sm">Publicado el {{ $vacancy->updated_at->format('d M Y') }}</div>
                            <div class="text-xl text-green-600 font-semibold">{{ $vacancy->currency }}
                                {{ $vacancy->salary }}</div>
                        </div>
                        <div class="mt-2">
                            <p>
                                {{ $vacancy->descriptionVacancy}}
                                {{-- <span class="text-blue-600 font-semibold"> Ver más</span> --}}
                            </p>
                        </div>
                        <div class="flex justify-between mt-3">
                            <div>
                                <span class="bg-yellow-500 text-white rounded-3xl px-3 py-1">MySQL</span>
                                <span class="bg-yellow-500 text-white rounded-3xl px-3 py-1">PHP</span>
                            </div>
                            <div>
                                <i class="fa fa-map-marker"></i> {{ $vacancy->country_vacancy_id}}
                            </div>
                        </div>
                        <a class="grid" href="#">
                            <div class="bg-green-500 hover:bg-green-600 mt-5 text-white rounded-2xl py-1 w-36 place-self-center text-center  text-base">Aplicar</div>
                        </a>
                </div>
            </a>
        </div>

    </div>
</x-guest-layout>
@endsection
