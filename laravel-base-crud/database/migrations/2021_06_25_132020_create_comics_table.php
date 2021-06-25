<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            // Genera Laravel automaticamente
            $table->id();
            $table->timestamps();

            //Campi creati da me
            $table->longText("description");
            $table->string("title",100);
            $table->text("thumb");
            $table->smallInteger("price");
            $table->text("series");
            $table->date("sale_date");
            $table->text("type");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
