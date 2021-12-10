<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('publisher')->nullable();
            $table->unsignedBigInteger('storage_id')->nullable();
            $table->string('title', 200)->nullable();
            $table->string('avatar', 255)->nullable();
            $table->string('author', 100)->nullable();
            $table->integer('number')->nullable();
            $table->float('price', 8, 3)->nullable();
            $table->timestamps();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categorys')
                  ->onUpdate('NO ACTION')
                  ->onDelete('cascade');
            $table->foreign('storage_id')
                  ->references('id')
                  ->on('storages')
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
        Schema::dropIfExists('books');
    }
}
