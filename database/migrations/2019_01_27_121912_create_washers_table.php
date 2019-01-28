<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWashersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('washers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('floor_id')->nullable();
            $table->foreign('floor_id')
                  ->references('id')
                  ->on('floors')
                  ->onDelete('cascade');
            $table->unsignedTinyInteger('number');
            $table->unique(['floor_id', 'number']);
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
        Schema::dropIfExists('washers');
    }
}
