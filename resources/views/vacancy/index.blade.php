{{-- @extends('layouts.web')

@section('content') --}}
@extends('layouts.footer')

<x-app-layout>
    <div class="flex items-center justify-center p-2 mt-10 ">
        <div>

            <h2 class="text-gray-800 text-center text-2xl font-bold">Administración de vacantes</h2><br><br>

            {{-- mensaje de notificacion --}}
            @if (Session::has('msn'))

                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">{{ Session::get('msn') }}</strong>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div><br>
            @endif

            <div class="mr-10 flex justify-end">
                <a class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-4 rounded"
                    href="{{ route('vacancy.create') }}" role="button"><i class="fa fa-plus"></i> Agregar nueva
                    vacante</a>
            </div>

            <table class="table-fixed m-8 text-center">
                <thead>
                    <tr>
                        <th class="w-5/12 px-4 py-2">Nombre vacante</th>
                        <th class="w-1/12 px-4 py-2">Estado</th>
                        <th class="w-1/12 px-4 py-2">No. Candidatos</th>
                        <th class="w-1/6 px-4 py-2">Candidatos</th>
                        <th class="w-3/12 px-4 py-2">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vacancies as $vacancy)

                        <tr>
                            <td class="text-left border px-4 py-2">{{ $vacancy->title }}</td>
                            <td class="border px-4 py-2">{{ $vacancy->state }}</td>
                            <td class="border px-4 py-2">{{ $vacancy->title }}</td>
                            <td class="border px-4 py-2"><a href="#">Link candidatos</a></td>
                            <td class="border px-4 py-2 ">
                                <div class="flex">
                                    <a class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded m-1 cursor-pointer"
                                    href="{{ route('vacancyDetails', $vacancy)}}">
                                        <i class="fa fa-eye text-lg"></i>
                                    </a>
                                    <a href="{{ url('/vacancy/' . $vacancy->id . '/edit') }}"
                                        class="bg-green-500 hover:bg-green-700 text-white  py-2 px-2 rounded m-1 cursor-pointer"
                                        role="button"><i class="fa fa-pencil text-lg" style="font-size:20px"></i></a>
                                    <form action="{{ url('/vacancy/' . $vacancy->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        {{ @method_field('DELETE') }}
                                        <input type="submit"
                                            onclick="return confirm('Está seguro que desea eliminar el registro?')"
                                            class="fa fa-trash text-lg bg-red-500 hover:bg-red-700 text-white  py-2 px-3 rounded m-1 cursor-pointer"
                                            value="&#xf1f8;">

                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>

@section('content')

    {{-- @endsection --}}
