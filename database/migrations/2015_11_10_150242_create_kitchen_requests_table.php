<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKitchenRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            
            $table->increments('id');
            $table->decimal('ancho');
            $table->decimal('largo');
            $table->decimal('alto');


            $table->integer('tipo_cocina');
            $table->integer('tipo_estufa',false,true);
            $table->integer('tipo_lavaplatos',false,true);

            $table->boolean('extractor');
            $table->integer('modulos_seccion1');
            $table->integer('modulos_seccion2');
            $table->integer('modulos_seccion3');

            $table->integer('modulos_estufa')->nullable();
            $table->integer('modulos_lavaplatos')->nullable();


            $table->string('material');
            $table->integer('color');
            $table->integer('manija');
            $table->integer('meson');
                        
            $table->foreign('estatura')->references('id')->on('person_heights'); 
            $table->foreign('tipo_estufa')->references('id')->on('stoves'); 
            $table->foreign('tipo_lavaplatos')->references('id')->on('sinks');
            $table->foreign('material')->references('id')->on('materials');  
            $table->foreign('color')->references('id')->on('colors'); 
            $table->foreign('manija')->references('id')->on('knockers');
            $table->foreign('mesos')->references('id')->on('tables');        
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
}
