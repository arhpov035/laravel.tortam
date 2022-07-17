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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("topText");
            $table->text("bottomText");
            $table->foreignId("product_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("parent_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('url');
            $table->tinyInteger('sort_order')->default(0);
            $table->boolean('live')->default(true);
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
        Schema::dropIfExists('categories');
    }
};
