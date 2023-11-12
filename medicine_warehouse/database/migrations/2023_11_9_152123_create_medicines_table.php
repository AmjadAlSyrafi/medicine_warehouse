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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('scientific_name');
            $table->string('trade_name');
            $table->unsignedBigInteger('classification_id');
            $table->unsignedBigInteger('company_name_id');
            $table->integer('available_quantity');
            $table->date('expiry_date');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('classification_id')->references('id')->on('classifications')->onDelete('cascade');
            $table->foreign('company_name_id')->references('id')->on('company_of_medicines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
