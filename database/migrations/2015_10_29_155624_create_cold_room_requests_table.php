<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColdRoomRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cold_room_requests', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('client_id', false, true);
            $table->decimal('largo');
            $table->decimal('ancho');
            $table->decimal('alto');
            $table->integer('temperatura');
            $table->enum('producto',['pollo','mora']);
            $table->integer('masa');
            $table->boolean('leido')->default(0);
            $table->timestamps();
	        $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cold_room_requests');
    }
}
