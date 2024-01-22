<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku');
            $table->double('price');
            $table->string('qty');
            $table->string('image')->nullable();
            $table->string('description');
            $table->tinyInteger('attribute_value_id')->nullable();
            $table->tinyInteger('brand_id')->nullable();
            $table->tinyInteger('category_id')->nullable();
            $table->tinyInteger('store_id')->nullable();
            $table->tinyInteger('availability')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
