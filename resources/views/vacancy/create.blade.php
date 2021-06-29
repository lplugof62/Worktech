@extends('layouts.web')

@section('content')

    <x-guest-layout>
        <div class="flex items-center justify-center p-4 mt-10 ">
            <div class="max-w-4xl bg-white w-full rounded-lg shadow-xl">
                <h2 class="text-gray-800 text-center text-2xl font-bold">Registrar una vacante</h2>

                <form method="post" action="{{url('/vacancy') }}">
                    @csrf
                    @include('vacancy.form')
                    <br><br>
                </form>
            </div>
        </div>
    </x-guest-layout>

@endsection
