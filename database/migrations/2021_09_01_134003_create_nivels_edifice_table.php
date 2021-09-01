<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivelsEdificeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivels_edifice', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('edifice_id');

            $table->foreign('edifice_id')
                ->references('id')
                ->on('edifice');


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
        Schema::dropIfExists('nivels_edifice');
    }
}
