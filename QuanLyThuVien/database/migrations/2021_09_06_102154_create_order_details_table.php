<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('book_id')->nullable();
            $table->unsignedBigInteger('member_borrow_id')->nullable();
            $table->unsignedBigInteger('member_return_id')->nullable();
            $table->string('status_borrow', 200)->nullable();
            $table->dateTime('date_borrow')->useCurrent();
            $table->dateTime('dead_return')->nullable();
            $table->dateTime('date_return')->nullable();
            $table->string('status_return', 200)->nullable();
            $table->string('note', 200)->nullable();
            $table->timestamps();
            $table->foreign('order_id')
                  ->references('id')
                  ->on('orders')
                  ->onUpdate('NO ACTION')
                  ->onDelete('cascade');
            $table->foreign('book_id')
                  ->references('id')
                  ->on('books')
                  ->onUpdate('NO ACTION')
                  ->onDelete('cascade');
            $table->foreign('member_borrow_id')
                  ->references('id')
                  ->on('members')
                  ->onUpdate('NO ACTION')
                  ->onDelete('cascade');
            $table->foreign('member_return_id')
                  ->references('id')
                  ->on('members')
                  ->onUpdate('NO ACTION')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
