<!DOCTYPE html>
<html>
	<head>
		<!-- Licence Pro Servicetique -->
		<link rel='stylesheet' href='/mon_style.css'>
		@yield('entete')
		<title>@yield('titre')</title>
	</head>
	<body>
    <div class="topnav">
      <a class="active" href="/">Accueil</a>
      <a href="/membres">Les Membres</a>
      <a href="/membre/1">Un Membre</a>
      <a href="/creer">Créer un Membre</a>
      <a href="/modifier/1">Modifier un Membre</a>
    </div> 
		<div class="container">
			<div class="titre_contenu">
				@yield('titre_contenu')
			</div>
			<div class="contenu">
				@yield('contenu')
			</div>
			<div class="pied_page">
				@yield('pied_page')
			</div>
		</div>
	</body>
</html>