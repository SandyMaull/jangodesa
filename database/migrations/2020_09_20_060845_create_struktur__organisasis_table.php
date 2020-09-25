<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrukturOrganisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('struktur__organisasis', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama');
            $table->string('jabatan');
            // $table->unsignedInteger('user_id');
            $table->string('images');
            $table->timestamps();
        });
        // Schema::table('struktur__organisasis', function(Blueprint $table){
        //     $table->foreign('user_id')
        //           ->references('id')
        //           ->on('users')
        //           ->onDelete('cascade')
        //           ->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('struktur__organisasis');
    }
}
