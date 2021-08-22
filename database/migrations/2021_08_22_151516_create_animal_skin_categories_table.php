<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalSkinCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_skin_categories', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('animal_skin_category_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('animal_skin_category_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->string('title');
            $table->text('description');
            $table->unique(['animal_skin_category_id','locale']);
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
        Schema::dropIfExists('animal_skin_categories');
    }
}
