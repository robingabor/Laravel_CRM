@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold ">
                Cég szerkesztése
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/cegek/{{$ceg->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="block">
                {{-- név --}}
                <input type="text" name="nev" required id="" class="block shadow-5px mb-10 p-2 w-80 italic placeholder-gray-400" value="{{ $ceg->nev}}" >
                {{-- email --}}
                <input type="email" name="email" required id="" class="block shadow-5px mb-10 p-2 w-80 italic placeholder-gray-400" value="{{ $ceg->email}}">
                {{-- logo --}}
                Logo
                <input type="file" name="logo" required id="" class="block shadow-5px mb-10 p-2 w-80 italic placeholder-gray-400" value="{{ $ceg->logo}}">
                {{-- website --}}
                <input type="text" name="website" required id="" class="block shadow-5px mb-10 p-2 w-80 italic placeholder-gray-400" value="{{ $ceg->website}}">

                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">Módosítás</button>
                
                <a href="/cegek" class="bg-red-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold text-center">Mégsem</a>
                

            </div>

        </form>
    </div>
    
@endsection