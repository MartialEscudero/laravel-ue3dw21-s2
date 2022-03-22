<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
// Obligatoire pour avoir accès au modèle
use App\Models\Membre;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ControleurMembres extends Controller
{
  // des variables
  protected $les_membres;
  protected $soumissions;

  public function __construct(Membre $membres, Request $requetes) {
    $this->les_membres = $membres;
    $this->soumissions = $requetes;
  }

  public function index() {
    $les_membres = $this->les_membres->all();
    return view('pages_site/consultation_edition', compact('les_membres'));
  }

  public function afficher($numero) {
    try {
      $un_membre = membre::findOrFail($numero);
      return view('pages_site/membre', compact('un_membre'));
    } catch(ModelNotFoundException $e) {
      return view('pages_site/erreur');
    }
  }

  public function creer() {
    return view('pages_site/creation');
  }

  public function enregistrer(Request $request) {
    $membre = new membre();
    $membre->nom = $request->nom;
    $membre->adresse = $request->adresse;
    $membre->prenom = $request->prenom;
    $membre->save();
    return view('pages_site/retour_creation');
  }

  public function editer($numero) {
    $un_membre = $this->les_membres->find($numero);
    if (isset($un_membre)) {
      return view('pages_site/edition', compact('un_membre'));
    } else {
      return view('pages_site/erreur');
    }
  }

  public function miseAJour($numero) {
    $un_membre = $this->les_membres->find($numero);
    $la_soumission = $this->soumissions;
    $un_membre->nom =$la_soumission->nom;
    $un_membre->prenom =$la_soumission->prenom;
    $un_membre->adresse =$la_soumission->adresse;
    $un_membre->save();
    return view('pages_site/retour_edition');
  }
}