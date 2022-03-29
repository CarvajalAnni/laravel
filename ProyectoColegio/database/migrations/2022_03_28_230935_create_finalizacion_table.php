<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

   public function up()
   {
       //
  //
  Schema::create('_finalizacion', function (Blueprint $table) {
   $table->id();
   $table->string('Avances');
   $table->date('Fecha_avances');
   $table->double('Precio');
   $table->unsignedBigInteger('proyecto_id');
   $table->foreign('proyecto_id')->references('id')->on('proyecto');
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
//
}
};
