<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero');
            $table->string('clerib');
            $table->integer('solde');
            $table->string('typefrais');
            $table->string('typecomte');
            $table->string('dateouverture');
            $table->unsignedBigInteger('clientmoral_id');
            $table->unsignedBigInteger('clientphysique_id');
            $table->timestamps();

            //foreign keys
            $table  ->foreign('clientmoral_id')
                    ->references('id')
                    ->on('clientmorals')
                    ->onDelete('cascade');
            
            $table  ->foreign('clientphysique_id')
                    ->references('id')
                    ->on('clientphysiques')
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
        Schema::dropIfExists('comptes');
    }
}
