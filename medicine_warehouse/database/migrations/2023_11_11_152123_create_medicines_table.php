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
            $table->string('classification_id');
            $table->foreign('Classification_id')->references('id')->on('Classification')->onDelete('cascade');
            $table->string('company_name_id');
            $table->foreign('company_name_id')->references('id')->on('CompanyOfMedicine')->onDelete('cascade');
            $table->integer('available_quantity');
            $table->date('expiry_date');
            $table->decimal('price', 8, 2);
            $table->timestamps();
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
