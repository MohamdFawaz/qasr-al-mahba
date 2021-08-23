<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->decimal('price');
            $table->string('brand_name')->nullable();
            $table->text('brand_link')->nullable();
            $table->string('delivery_fees')->nullable();
            $table->bigInteger('animal_skin_category_id')->unsigned();
            $table->timestamps();
            $table->foreign('animal_skin_category_id','animal_id')->references('id')->on('animal_skin_categories')->onDelete('cascade');
        });

        Schema::create('product_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->string('title');
            $table->text('description');
            $table->unique(['product_id','locale'], 'product_id_locale_unique');
            $table->foreign('product_id','product_id_foreign')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
