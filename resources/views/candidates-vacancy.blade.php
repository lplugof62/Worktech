@extends('layouts.web')

@section('content')

    <x-guest-layout>
        <div class="flex items-center justify-center p-2 mt-10 ">
            <div class="max-w-4xl w-full">

                <h2 class="text-gray-800 text-center text-2xl font-bold">Candidatos de la vacante</h2>

                <table class="table-fixed max-w-4xl w-full my-8 text-center">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Nombre candidato</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Diana Gonzales</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border px-4 py-2">Laura Flórez</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Juan Benavidez</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </x-guest-layout>

@endsection
