<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            //$table->unsignedInteger('patient_id');
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('tlp');
            $table->string('adrress');
            $table->string('DNI/NIF')->unique();
            $table->integer('age')->default(18);
            $table->rememberToken();
            $table->timestamps();

            //$table->foreign('patient_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
