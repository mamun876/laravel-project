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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->date('Date');
            $table->string('CustomerName'); 
            $table->string('Reference');
            $table->string('Status');
            $table->string('Payment');
            $table->decimal('Total', 10, 2); 
            $table->decimal('Paid', 10, 2); 
            $table->decimal('Due', 10, 2);
            $table->string('Biller');
            $table->tinyInteger('Action')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
