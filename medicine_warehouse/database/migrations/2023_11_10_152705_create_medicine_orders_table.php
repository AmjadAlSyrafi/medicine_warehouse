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
        Schema::create('medicine_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pharmacist_id');
            $table->string('status')->default('in_preparation');
            $table->string('payment_status')->default('not_paid');
            $table->timestamps();
    
            $table->foreign('pharmacist_id')->references('id')->on('users')->onDelete('cascade');
            
                    
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine_orders');
    }
};
