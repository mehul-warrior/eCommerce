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
            $table->string('product_name');
            $table->integer('product_code')->unique();
            $table->integer('price');
            $table->string('product_categorie');
            $table->integer('available_quantity')->default($value = 0)->nullable($value = true);
            $table->string('product_description')->nullable($value = true);
            $table->integer('percentage_discount')->default($value = 0)->nullable($value = true);
            $table->string('image')->nullable($value = true);
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
