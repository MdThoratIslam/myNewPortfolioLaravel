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
        Schema::create('earning_money', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('purpose')->comment('salary');
            $table->decimal('amount')->default('0.00');
            $table->string('form')->nullable();
            $table->date('date')->nullable();
            $table->tinyInteger('status_active')->default(0);
            $table->tinyInteger('is_delete')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('earning_money');
    }
};
