<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiseasesPatients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('diseases_patients', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->unsignedInteger('patient_id');
            $table->unsignedInteger('disease_id');
            $table->date('date');
            $table->string('symptom');

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('disease_id')->references('id')->on('diseases')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diseases_patients');
        //
    }
}
