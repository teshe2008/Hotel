<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('location');
            $table->string('HotelClass');
            $table->string('image');
            $table->integer('restaurant')->yes(no);
            $table->integer('Indoor_ATM')->yes(no);
            $table->integer('Free_Wifi')->yes(no);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hotels');
    }
}
