@extends('layouts.layout')

@section('content')
    <div class="lien_btn_create">
        <a href="{{route('page.create')}}" class="button_create">AJOUTER MONNAIE</a>
    </div>
    <div class="cards">
        @foreach($monnaies as $monnaie)
            <div class="card">
                <div><img src="img/logos_monnaies/{{$monnaie->logo}}" alt="logo {{$monnaie->nom}}"></div>
                <div class="monnaie_info">
                    <div class="monnaie_nom">{{ $monnaie->nom}}</div>
                    <div><strong>Symbole : </strong> {{ $monnaie->symbole}}</div>
                    <div><strong>Description :</strong> {{ $monnaie->description}}</div>
                    <div><strong>Cours:</strong> {{ $monnaie->cours}}</div>
                </div>

            </div>

        @endforeach
    </div>

@endsection
