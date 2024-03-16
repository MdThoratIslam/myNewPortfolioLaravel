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
        Schema::create('employment_histories', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 255);
            $table->string('company_address', 255)->nullable();
            $table->string('company_phone', 255)->nullable();
            $table->string('company_email', 255)->nullable();
            $table->string('company_website', 255)->nullable();
            $table->string('areaOfExpertise', 255)->nullable();
            $table->integer('designation_id');
            $table->integer('department_id');
            $table->date('joinin_date');
            $table->date('leaving_date')->nullable();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete()
                ->after('id');
            $table->integer('status_active')->default(1);
            $table->integer('is_delete')->default(0);
            $table->foreignId('created_by')->nullable()
                ->constrained('users');
            $table->foreignId('updated_by')->nullable()
                ->constrained('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employment_histories');
    }
};
