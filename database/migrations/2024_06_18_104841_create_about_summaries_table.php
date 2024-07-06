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
        Schema::create('about_summaries', function (Blueprint $table) {
            $table->id();
            $table->integer('happy_clients');
            $table->string('happy_clients_disc');
            $table->string('happy_clients_icon');

            $table->integer('projects_complete');
            $table->string('projects_complete_disc');
            $table->string('projects_complete_icon');

            $table->integer('years_of_experience');
            $table->string('years_of_experience_disc');
            $table->string('years_of_experience_icon');

            $table->integer('awards');
            $table->string('awards_disc');
            $table->string('awards_icon');

            $table->tinyInteger('status_active')->default(1);
            $table->tinyInteger('is_deleted')->default(0);
            $table->integer('created_by')->nullable()->default(null);
            $table->integer('updated_by')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_summaries');
    }
};
