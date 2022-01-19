@extends('layouts.app');

@section('content')
    <div class='m-auto w-4/5 py-24'>
        <div class='text-center'>
            
            <h1 class="text-4xl uppercase">Üdvözöljük a mini CRM-ben</h1>

            <div class="flex  justify-center">
                <div class="m-6">
                    <h1>Cégek</h1>
                    <a class="text-2xl  bold" href="{{ URL('/cegek') }}">Cégek-></a>
                </div>
                <div class="m-6">
                    <h1>Alkalmazottak</h1>
                    <a class="text-2xl  bold" href="{{ URL('/alkalmazottak') }}">Alkalmazottak-></a>
                </div>
            </div>
                   
                
                
        </div>
        
    </div>
@endsection
