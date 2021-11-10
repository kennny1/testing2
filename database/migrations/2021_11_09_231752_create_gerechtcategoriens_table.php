<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGerechtcategoriensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerechtcategoriens', function (Blueprint $table) {
            $table->bigIncrements('gerechtcategorien_id');
            $table->string('code');
            $table->string('naam');
            $table->unsignedBigInteger('gerechtsoorten_id')->constrained();
            $table->foreign('gerechtsoorten_id')->references('gerechtsoorten_id')->on('gerechtsoorten')->onDelete('cascade');
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
        Schema::dropIfExists('gerechtcategorien');
    }
}
