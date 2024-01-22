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
        Schema::create('purchase', function (Blueprint $table) {
            $table->id();
            $table->string('SupplierName');
            $table->string('Reference');
            $table->date('Date');
            $table->string('Status');
            $table->string('GrandTotal'); // Avoid using space in column names
            $table->string('Paid');
            $table->string('Due');
            $table->string('PaymentStatus'); // Avoid using space in column names
            $table->tinyInteger('Action')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase');
    }
};
