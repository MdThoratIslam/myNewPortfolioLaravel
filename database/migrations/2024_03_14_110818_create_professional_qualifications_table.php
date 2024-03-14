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
        Schema::create('professional_qualifications', function (Blueprint $table) {
            $table->id();
            $table->string('certification', 255);
            $table->string('institute', 255);
            $table->string('location', 255);
            $table->date('from')->nullable();
            $table->date('to')->nullable();
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
        Schema::dropIfExists('professional_qualifications');
    }
};
