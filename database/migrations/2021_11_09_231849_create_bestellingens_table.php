<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBestellingensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bestellingens', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('gereserveerd');
            $table->unsignedBigInteger('menuitems_id')->constrained();
            $table->foreign('menuitems_id')->references('menuitems_id')->on('menuitems')->onDelete('cascade');
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
        Schema::dropIfExists('bestellingens');
    }
}
