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
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('classification_id');
            $table->unsignedBigInteger('order_id');
            $table->timestamps();

            $table->foreign('classification_id')->references('id')->on('classifications')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('medicine_orders')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouses');
    }
};
