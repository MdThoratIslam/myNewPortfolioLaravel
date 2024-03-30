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
        Schema::create('user_personal_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('father_name', 100);
            $table->string('mother_name', 100);
            $table->string('present_area', 255);
            $table->foreignId('present_upazila_id')->constrained('upazilas');
            $table->foreignId('present_district_id')->constrained('districts');
            $table->foreignId('present_division_id')->constrained('divisions');

            $table->string('parmament_area', 255);
            $table->foreignId('parmament_upazila_id')->constrained('upazilas');
            $table->foreignId('parmament_district_id')->constrained('districts');
            $table->foreignId('parmament_division_id')->constrained('divisions');

            $table->bigInteger('nid')->unique()->nullable();
            $table->string('passport')->unique()->nullable();

            $table->bigInteger('birth_certificate')->unique()->nullable();
            $table->date('date_of_birth')->nullable();
            $table->foreignId('place_of_birth')->constrained('districts');
//            $table->string('place_of_birth', 100)->nullable();

            $table->integer('nationality_id')->default(0);
            $table->integer('religion_id')->default(0);
            $table->integer('blood_group_id')->default(0);
            $table->integer('marital_status_id')->default(0);
            $table->integer('gender_id')->default(0);
            $table->string('height')->nullable();
            $table->string('weight')->nullable();

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
        // Drop the foreign key constraints before dropping the user_personal_details table
        Schema::table('user_personal_details', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['present_upazila_id']);
            $table->dropForeign(['present_district_id']);
            $table->dropForeign(['present_division_id']);
            $table->dropForeign(['parmament_upazila_id']);
            $table->dropForeign(['parmament_district_id']);
            $table->dropForeign(['parmament_division_id']);

        });

        Schema::dropIfExists('user_personal_details');
    }
};
