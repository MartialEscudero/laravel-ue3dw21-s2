<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifierChampsTableMembres extends Migration
{
  /**
    * Run the migrations.
    *
    * @return void
    */
  public function up()
  {
    Schema::table('membres', function (Blueprint $table) {
      $table->string('nom')->default('valeur par défaut');
      $table->string('prenom')->default('valeur par défaut');
      $table->string('adresse')->default('valeur par défaut');
    });
  }
  /**
    * Reverse the migrations.
    *
    * @return void
    */
  public function down()
  {
    Schema::table('membres', function (Blueprint $table) {
      //
    });
  }
}