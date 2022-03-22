@extends('pages_site/fond')
@section('entete')
@stop
@section('titre')
Club des Usagers de l'Espace galactique
@stop
@section('titre_contenu')
Liste des membres
@stop
@section('contenu')
@foreach ($les_membres as $membre)
<h3>
  <a href="/modifier/{{ $membre->id }}"> {{ $membre->prenom }} {{ $membre->nom }}</a>
</h3>
<div class='h2'>
  {{ $membre->adresse }}
</div>
@endforeach
<a href="{{ url('/creer') }}"> Créer nouveau membre </a>
@stop
@section('pied_page')
LicenceProServiceTic 2022
@stop