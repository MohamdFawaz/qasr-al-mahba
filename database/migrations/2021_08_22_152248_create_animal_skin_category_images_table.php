<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalSkinCategoryImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_skin_category_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('animal_skin_category_id')->unsigned();
            $table->string('image');
            $table->timestamps();
            $table->foreign('animal_skin_category_id')->references('id')->on('animal_skin_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_skin_category_images');
    }
}
