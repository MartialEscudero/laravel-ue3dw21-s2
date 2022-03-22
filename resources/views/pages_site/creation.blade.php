@extends('pages_site/fond')
@section('entete')
@stop
@section('titre')
Club des Usagers de l'Espace galactique
@stop
@section('titre_contenu')
Création d'un nouveau membre
@stop
@section('contenu')
<div class="formgroup">
  {!! Form::open(['url' => 'creation/membre']) !!}
  <div class="formgroup">
    {!! Form::label('nom', 'Nom') !!}
    {!! Form::text('nom', null, ['class' => 'formcontrol', 'required'])!!}
  </div>
  <div class="formgroup">
    {!! Form::label('prenom', 'Prenom') !!}
    {!! Form::text('prenom', null, ['class' => 'formcontrol', 'required'])!!}
  </div>
  <div class="formgroup">
    {!! Form::label('adresse', 'Adresse électronique') !!}
    {!! Form::text('adresse', null, ['class' => 'formcontrol', 'required|email'])!!}
  </div>
  <p>
  </p>
  {!! Form::submit("Creation membre") !!}
  {!! Form::close() !!}
</div>
@stop
@section('pied_page')
LicenceProServiceTic 2022
@stop