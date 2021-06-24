@extends('layouts.layout')

@section('content')
<div class="formulaire">
    <h2>Formulaire d'ajout d'une nouvelle monnaie</h2>

    <form action="{{route('page.index')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="logo_monnaie">Logo</label><br>
            <input type="file" id="logo_monnaie" name="logo_monnaie" required>
        </div>
        <div>
            <label for="nom_monnaie">Nom</label><br>
            <input type="text" id="nom_monnaie" name="nom_monnaie" placeholder="Nom de la monnaie" required>
        </div>
        <div>
            <label for="symbole_monnaie">Symbole</label><br>
            <input type="text" id="symbole_monnaie" name="symbole_monnaie" placeholder="Symbole de la monnaie" required>
        </div>
        <div>
            <label for="description_monnaie">Description</label><br>
            <textarea id="description_monnaie" name="description_monnaie" maxlength="185" placeholder="Description de la monnaie (185 caractères maximum)" required></textarea>
        </div>
        <div>
            <label for="cours_monnaie">Cours</label><br>
            <input type="number" id="cours_monnaie" name="cours_monnaie" placeholder="0.00" step="any" required>
        </div>
        <div class="form_btns">
            <a href="{{route('page.index')}}">ANNULER</a>
            <button type="submit">ENREGISTRER</button>
        </div>
    </form>
</div>
@endsection
