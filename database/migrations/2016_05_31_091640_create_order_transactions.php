<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_order_transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('list');
            $table->string('amount');
            $table->string('price');
            $table->string('total');
            $table->enum('status', ['order', 'wait', 'complete', 'abort', 'fail'])->default('order');
                //'wait' = waiting for process, 'complete' = menucomplete, 'abort', menu abort, 'fail', other fail
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
        Schema::drop('tb_order_transaction');
    }
}
