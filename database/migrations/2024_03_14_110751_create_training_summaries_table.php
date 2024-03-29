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
        Schema::create('training_summaries', function (Blueprint $table) {
            $table->id();
            $table->longText('training_title');
            $table->string('topics_covered', 255);
            $table->string('institute', 255);
            $table->string('country', 255);
            $table->string('location', 255);
            $table->date('training_from')->nullable();
            $table->date('training_to')->nullable();
            $table->year('year')->nullable();
            $table->string('duration', 255);
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->after('id');
            $table->integer('status_active')->default(1);
            $table->integer('is_delete')->default(0);
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_summaries');
    }
};
