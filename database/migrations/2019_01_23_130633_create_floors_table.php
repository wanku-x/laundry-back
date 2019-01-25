<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFloorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('dorm_id')->nullable();
            $table->foreign('dorm_id')
                  ->references('id')
                  ->on('dorms')
                  ->onDelete('cascade');
            $table->unsignedTinyInteger('number');
            $table->unique(['dorm_id', 'number']);
            $table->unsignedTinyInteger('washers');
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
        Schema::dropIfExists('floors');
    }
}
