@extends('layouts.template')
@section('titre', 'Tous les jeux')
@section('contenu')

<h1>{{__('List of all games')}}</h1>
    @if (count($jeux) > 0)
        @foreach ($jeux as $jeu)
         <p><a href="{{route('jeux.show', $jeu->id)}}">{{$jeu->titre}}</a></p>
         @endforeach
    @else
    Je n'ai pas de jeux.
    @endif


