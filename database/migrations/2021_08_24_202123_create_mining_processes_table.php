<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiningProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mining_processes', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('cover_image')->nullable();
            $table->timestamps();
        });

        Schema::create('mining_process_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mining_process_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->string('title');
            $table->text('description');
            $table->unique(['mining_process_id','locale']);
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
        Schema::dropIfExists('mining_processes');
        Schema::dropIfExists('mining_process_translations');
    }
}
