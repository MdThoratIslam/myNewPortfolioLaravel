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
        Schema::create('reasoncvs', function (Blueprint $table) {
            $table->id();
            // ip address and device id and device type and device name
            $table->longText('reason');
            //mobile
            $table->string('mobile')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('device_id')->nullable();
            $table->string('device_type')->nullable();
            $table->string('device_name')->nullable();
            $table->string('device_model')->nullable();
            $table->string('device_os')->nullable();
            $table->string('device_os_version')->nullable();
            $table->string('device_browser')->nullable();
            $table->string('device_browser_version')->nullable();
            $table->string('device_is_mobile')->nullable();
            $table->string('device_is_tablet')->nullable();
            $table->string('device_is_desktop')->nullable();
            $table->string('device_manufacturer')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reasoncvs');
    }
};
