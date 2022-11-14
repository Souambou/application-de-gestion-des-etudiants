<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_etudiant')->constrained('etudiants');
            $table->foreignId('id_matieres')->constrained('matieres');
            $table->integer('note');
            $table->timestamps();
        });
        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notes', function(Blueprint $table){
            $table->dropConstrainedForeignId('id_etudiant');
        });
        Schema::table('notes', function(Blueprint $table){
            $table->dropConstrainedForeignId('id_matiere');
        });
        Schema::dropIfExists('notes');
    }
};
