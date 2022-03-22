@extends('pages_site/fond')
@section('entete')
@stop
@section('titre')
Club des Usagers de l'Espace galactique
@stop
@section('titre_contenu')
Infos Membre
@stop
@section('contenu')
<h3>
  <a href="/modifier/{{ $un_membre->id }}"> {{ $un_membre->prenom }} {{ $un_membre->nom }}</a>
</h3>
<div class='h2'>
  {{ $un_membre->adresse }}
</div>
<p>
  {{ $membre_description->description }}
</p>
@stop
@section('pied_page')
LicenceProServiceTic 2022
@stop