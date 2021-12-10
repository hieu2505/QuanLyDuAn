<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('class_id')->nullable();
            $table->string('name', 50)->nullable();
            $table->string('gender', 200)->nullable();
            $table->date('dOB')->nullable();
            $table->string('address', 255)->nullable();
            $table->string('avatar', 255)->nullable();
            $table->string('phone', 10)->unique();
            $table->string('email', 50)->unique();
            $table->date('dead_card')->nullable();
            $table->timestamps();
            $table->foreign('class_id')
                  ->references('id')
                  ->on('class_students')
                  ->onUpdate('cascade')
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
        Schema::dropIfExists('readers');
    }
}
