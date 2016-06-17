<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableIngredients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ingredients', function(Blueprint $table){
            $table->increments('id');
            $table->string('description');
            $table->integer('price');
            $table->enum('traits', [
                'increment',
                'replacement',
                'additional'
            ]);
            $table->enum('type', [
                'noodle',
                'soup',
                'topping',
                'other'
            ]);
            $table->date('create_date');
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
        Schema::drop('tb_ingredients');
    }
}
