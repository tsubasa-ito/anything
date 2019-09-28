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

            $table->integer('categoryid_one')->unsigned()->nullable()->index();
            $table->integer('categoryid_two')->unsigned()->nullable()->index();
            $table->integer('categoryid_three')->unsigned()->nullable()->index();
            $table->integer('categoryid_four')->unsigned()->nullable()->index();
            $table->integer('categoryid_five')->unsigned()->nullable()->index();

            $table->string('comment')->nullable();
            
            $table->foreign('categoryid_one')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('categoryid_two')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('categoryid_three')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('categoryid_four')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('categoryid_five')->references('id')->on('categories')->onDelete('cascade');
            
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
