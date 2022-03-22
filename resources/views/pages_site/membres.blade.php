@foreach ($les_membres as $membre)
<h3>
  {{ $membre->prenom }} {{ $membre->nom }}
</h3>
<div class='h2'>
  {{ $membre->adresse }}
</div>
@endforeach