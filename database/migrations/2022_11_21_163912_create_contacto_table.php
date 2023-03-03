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
Schema::defaultStringLength(100);

        Schema::create('contacto', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('asunto');
            $table->string('email');
            $table->string('mensaje',350);            
            $table->timestamps();
        });


        //Poner en la consola
        //  php artisan make:model Contacto
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacto');
    }
};
