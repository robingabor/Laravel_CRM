@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold ">
                Cég létrehozása
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/cegek" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="block">
                {{-- név --}}
                <input type="text" name="nev" id="" class="block shadow-5px mb-10 p-2 w-80 italic placeholder-gray-400" placeholder="Név..." >
                {{-- email --}}
                <input type="email" name="email" id="" class="block shadow-5px mb-10 p-2 w-80 italic placeholder-gray-400" placeholder="Email...">
                {{-- logo --}}
                Logo
                <input type="file" name="logo" id="" class="block shadow-5px mb-10 p-2 w-80 italic placeholder-gray-400" placeholder="Logo...">
                {{-- website --}}
                <input type="text" name="website" id="" class="block shadow-5px mb-10 p-2 w-80 italic placeholder-gray-400" placeholder="Website...">

                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">Létrehozás</button>

                <a href="/cegek" class="bg-red-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold text-center">Mégsem</a>

            </div>

        </form>
    </div>
    
@endsection