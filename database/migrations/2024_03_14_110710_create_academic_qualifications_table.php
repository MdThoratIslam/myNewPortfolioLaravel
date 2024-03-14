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
        Schema::create('academic_qualifications', function (Blueprint $table) {
            $table->id();
            $table->string('examTitle', 255);
            $table->longText('concentrationMajor');
            $table->string('instituteName', 255);
            $table->float('result', 8, 2);
            $table->integer('outOf');
            $table->year('passingYear');
            $table->integer('duration')->nullable();
            $table->year('achievement')->nullable();
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
        Schema::dropIfExists('academic_qualifications');
    }
};
