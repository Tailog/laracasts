<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // Lorsqu'on utilise la commande migrate la fonction up est lancé
    public function up()
    {   
        //Création de ma propre table
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('owner_id');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    // Lorsqu'on utilise la commande rollback la fonction down est lancé d'abord et puis la fonction up est lancé
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
