<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned()->index();

            $table->integer('foodid_one')->unsigned()->nullable()->index();
            $table->integer('foodid_two')->unsigned()->nullable()->index();
            $table->integer('foodid_three')->unsigned()->nullable()->index();
            $table->integer('foodid_four')->unsigned()->nullable()->index();
            $table->integer('foodid_five')->unsigned()->nullable()->index();

            $table->string('comment')->nullable();
            
            $table->foreign('foodid_one')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('foodid_two')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('foodid_three')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('foodid_four')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('foodid_five')->references('id')->on('categories')->onDelete('cascade');
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('foods');
    }
}
