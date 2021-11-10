<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menuitems', function (Blueprint $table) {
            $table->bigIncrements('menuitems_id');
            $table->string('code');
            $table->string('naam');
            $table->unsignedBigInteger('gerechtcategorien_id')->constrained();
            $table->foreign('gerechtcategorien_id')->references('gerechtcategorien_id')->on('gerechtcategoriens')->onDelete('cascade');
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
        Schema::dropIfExists('menuitems');
    }
}
