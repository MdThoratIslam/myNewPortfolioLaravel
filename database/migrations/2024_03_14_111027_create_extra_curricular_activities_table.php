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
        Schema::create('extra_curricular_activities', function (Blueprint $table) {
            $table->id();
            $table->string('activity_name', 255);
            $table->longText('activities_description');
            $table->string('organization', 255);
            $table->string('position', 255);
            $table->string('certificate_path', 2048)->default('public/assest/certificate/certificate.png');
            $table->string('duration', 255);
            $table->year('earned_on');
             $table->string('address', 255);
            $table->string('country', 255);
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
        Schema::dropIfExists('extra_curricular_activities');
    }
};
