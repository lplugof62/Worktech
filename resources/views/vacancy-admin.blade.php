@extends('layouts.web')

@section('content')

    <x-guest-layout>
        <div class="flex items-center justify-center p-2 mt-10 ">
            <div>

                <h2 class="text-gray-800 text-center text-2xl font-bold">Administración de vacantes</h2><br><br>

                <div class="mr-10 flex justify-end">
                    <a class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-4 rounded" href="{{route('createVac')}}" role="button"><i class="fa fa-plus"></i> Agregar nueva vacante</a>
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
                        <tr>
                            <td class="text-left border px-4 py-2">Intro to CSS</td>
                            <td class="border px-4 py-2">Adam</td>
                            <td class="border px-4 py-2">858</td>
                            <td class="border px-4 py-2">Link Candidatos</td>
                            <td class="border px-4 py-2">
                                <a class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded m-1 cursor-pointer">
                                    <i class="fa fa-eye text-lg" ></i>
                                </a>
                                <a class="bg-green-500 hover:bg-green-700 text-white  py-2 px-2 rounded m-1 cursor-pointer">
                                    <i class="fa fa-pencil text-lg" style="font-size:20px"></i>
                                </a>
                                <a class="bg-red-500 hover:bg-red-700 text-white  py-2 px-3 rounded m-1 cursor-pointer">
                                    <i class="fa fa-trash text-lg"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="text-left border px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools
                                and the Impact on Design</td>
                            <td class="border px-4 py-2">Adam</td>
                            <td class="border px-4 py-2">112</td>
                            <td class="border px-4 py-2">Link Candidatos</td>
                            <td class="border px-4 py-2">858</td>
                        </tr>
                        <tr>
                            <td class="text-left border px-4 py-2">Intro to JavaScript</td>
                            <td class="border px-4 py-2">Chris</td>
                            <td class="border px-4 py-2">1,280</td>
                            <td class="border px-4 py-2">Link Candidatos</td>
                            <td class="border px-4 py-2">858</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </x-guest-layout>

@endsection
