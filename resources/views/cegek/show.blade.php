@extends('layouts.app');

@section('content')
    <div class='m-auto w-4/5 py-24'>
        <div class='text-center'>
            
            <h1 class="text-4xl uppercase">Alkalmazottak listája</h1>

            <div class="flex  justify-center">
                {{-- <div class="m-6">
                    <h1>Cégek</h1>
                    <a class="text-2xl  bold" href="{{ URL('/cegek') }}">Cégek-></a>
                </div> --}}
               <ul class="text-lg">
                    <p class="pt-10"> Alkalmazottak : </p>
                    @forelse ($ceg->alkalmazottak as $alkalmazott)
                        
                        <li class="block italic m-6 uppercase text-blue-900 font-bold text-m italic">
                            {{ $alkalmazott['vezeteknev'] }}
                        </li>
                        <hr class="mt-4 mb-8">   
                    @empty
                        <p>Jelenleg nincsenek alkalmazottak</p>
                    @endforelse                       

               </ul>            

            </div>
                   
            <div class="flex  justify-center"><a href="/cegek" class="bg-red-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold text-center">Vissza</a></div>
                
        </div>
        
    </div>
@endsection
