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
        Schema::create('kitchen_requests', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('client_id', false, true);

            $table->decimal('ancho');
            $table->decimal('largo');
            $table->decimal('alto');


            $table->integer('tipo_cocina');
            $table->integer('tipo_estufa',false,true);
            $table->integer('tipo_lavaplatos',false,true);

            $table->boolean('extractor');

            $table->integer('modulos_seccion_1');
            $table->integer('modulos_seccion_2');
            $table->integer('modulos_seccion_3');


            $table->integer('seccion_estufa')->nullable();
            $table->integer('seccion_lavaplatos')->nullable();

            $table->integer('modulo_estufa')->nullable();
            $table->integer('modulo_lavaplatos')->nullable();


            $table->integer('manija');
            $table->string('material');
            $table->integer('meson');
            $table->integer('color');

            $table->json('secciones')->nullable();

            $table->boolean('leido')->default(0);

            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kitchen_requests');
    }
}
