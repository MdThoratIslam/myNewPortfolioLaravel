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
        Schema::create('fields_of_skill_descriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('field_of_skill_id')->constrained('fields_of_skills')->cascadeOnDelete()->after('user_id');
            $table->longText('description');
            $table->integer('code')->nullable();
            $table->string('label', 255);
            $table->string('type', 255);
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
        Schema::dropIfExists('fields_of_skill_descriptions');
    }
};
