@extends('layouts.template')
@section('titre', 'Un seul jeu')
@section('contenu')
<h1>Détails d'un jeu</h1>
<h2>Titre : {{$jeu->titre}}</h2>
@endsection

