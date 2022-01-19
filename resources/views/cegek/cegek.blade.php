@extends('layouts.app');

@section('content')

      <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold"></h1>
        </div>

        {{-- CREATE NEW Cegek --}}
        <div class="pt-10">            
            <a href="{{URL('cegek/create')}}" class="border-b-2 pb-2 border-dotted italic text-gray-900" >Új cég hozzáadása &rarr; </a>
        </div>

        {{-- ceg details --}}
        <div class="w-5/6 py-10">
            @foreach ($cegek as $ceg)
                {{-- EDIT --}}
                <div class="float-right">
                    <a href="cegek/{{ $ceg->id }}/edit" class="border-b-2 pb-2 border-dotted italic text-green-900" > Szerkesztés &rarr;</a>

                    {{-- DELETE  --}}
                    <form action="/cegek/{{$ceg->id}}" method="POST" class="pt-3">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-b-2 pb-2 border-dotted italic text-red-900">Törlés &rarr;</button>
                    </form>
                    
                    {{-- Cég alkalmazottjai --}}
                    <a href="cegek/{{ $ceg->id }}" class="border-b-2 pb-2 border-dotted italic text-green-900" > Alkalmazottak listája &rarr;</a>
                    

                </div>
                

                <div class="m-auto">
                {{-- Email --}}
                <span class="uppercase text-blue-900 font-bold text-xs italic">Email : {{$ceg->email}} </span>
                {{-- Nev --}}
                <h2 class="text-grey-700 text-5xl">{{$ceg->nev}}</h2>
                {{-- Logo --}}
                <p class="text-lg text-grey-700">{{$ceg->logo}}</p>
                <img src="/images/{{ $ceg->logo  }} " alt="" class="w-16 md:w-32 lg:w-48">

                <hr class="mt-4 mb-8">   

            </div>
            @endforeach
        </div>

    </div>

@endsection