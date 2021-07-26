<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecializationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialization_user', function (Blueprint $table) {

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


            // creo la colonna per la FK di medical_fields
            $table->unsignedBigInteger('specialization_id');

            //creo la fk della colonna medical_fields
		    $table->foreign('specialization_id')->references('id')->on('specializations')->onDelete('cascade');
            //a cascata vanno a morire tutti i riferimenti

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialization_user');
    }
}
