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
        Schema::create('pricing_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pricing_id')->constrained('pricings')->onDelete('cascade');
            $table->string('name');
            $table->string('xmark')->nullable()->default(null);
            $table->string('icon');
            $table->tinyInteger('piority');
            $table->tinyInteger('status_active')->default(1);
            $table->tinyInteger('is_deleted')->default(0);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_details');
    }
};
