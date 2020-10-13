<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientphysiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientphysiques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('statut');
            $table->string('salaire');
            $table->unsignedBigInteger('clientmoral_id');
            $table->timestamps();

            //foreign key
            $table  ->foreign('clientmoral_id')
                    ->references('id')
                    ->on('clientmorals')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientphysiques');
    }
}
