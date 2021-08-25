<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiningProcessImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mining_process_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mining_process_id')->unsigned();
            $table->string('image');
            $table->string('name')->nullable();
            $table->timestamps();
            $table->foreign('mining_process_id')->references('id')->on('mining_processes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mining_process_images');
    }
}
