<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string("title");
            $table->text("preview")->nullable();
            $table->text("description")->nullable();
            $table->text("thumbnail")->nullable();
            $table->float('price');
            $table->foreignId("category_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer("number_views");
            $table->string("product_type");
            $table->string("weight_photo");
            $table->string("number_tiers");
            $table->string("number_tiers");
            $table->string("type_cake");
            $table->string("coverage");
            $table->string("decor_1");
            $table->string("decor_2");
            $table->boolean("show");
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
        Schema::dropIfExists('products');
    }
};
