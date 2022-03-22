@extends('pages_site/fond')
@section('entete')
@stop
@section('titre')
  Ceci est un exemple de page
@stop
@section('titre_contenu')
{{ $nom }} {{ $prenom }}
@stop
@section('contenu')
<div class='h1'> Ceci est un exemple de contenu </div>
  <p>
    blablabla...
  </p>
<div class='h2'> C'est tout pour l'instant </div>
@stop
@section('pied_page')
LicenceProServicetique 2022
@stop