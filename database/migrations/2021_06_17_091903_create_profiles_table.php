<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            //Relación uno a uno
            $table->string('title', 45);
            $table->text('biography');
            $table->string('website', 45);

            //Clave foranea
            $table->unsignedBigInteger('user_id')->unique();

            $table->foreign('user_id')
                ->references('id') //Referencia al campo id
                ->on('users') //De la tabla users
                ->onDelete('cascade') //Si se borra el usuario se borran sus perfiles
                ->onUpdate('cascade'); //Si se edita el id del usuario se edita tambien en perfiles


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
        Schema::dropIfExists('profiles');
    }
}
