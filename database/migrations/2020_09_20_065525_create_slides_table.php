<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('home_id');
            $table->string('keterangan')->nullable();
            $table->string('img');
            $table->timestamps();
        });

        Schema::table('slides', function(Blueprint $table){
            $table->foreign('home_id')
                  ->references('id')
                  ->on('homes')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slides');
    }
}
