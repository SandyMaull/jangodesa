<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('judul');
            $table->text('content');
            $table->string('images');
            $table->unsignedInteger('videos_id');
            $table->timestamps();
        });

        Schema::table('artikels', function(Blueprint $table){
            $table->foreign('videos_id')
                  ->references('id')
                  ->on('videos')
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
        Schema::dropIfExists('artikels');
    }
}
