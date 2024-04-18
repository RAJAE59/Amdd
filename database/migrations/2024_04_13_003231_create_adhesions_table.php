<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdhesionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adhesions', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('nom');
            $table->string('prenom');
            $table->char('sexe', 1);
            $table->string('telephone');
            $table->string('email');
            $table->string('mot_de_passe');
            $table->string('region');
            $table->string('ville');
            $table->string('profession')->nullable();
            $table->string('specialite')->nullable();
            $table->integer('annee_experience');
            $table->string('niveau_etude');
            $table->string('niveau_compétence_matière_technologie');
            $table->integer('age');
            $table->string('niveau_diplome');
            $table->string('specialite1')->nullable();
            $table->string('type_diplome')->nullable();
            $table->string('type_stage')->nullable();
            $table->string('duree')->nullable();
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->string('cv')->nullable();
            $table->string('profiles')->nullable();
            $table->string('competence_options')->nullable();
            $table->string('cin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adhesions');
    }
}
