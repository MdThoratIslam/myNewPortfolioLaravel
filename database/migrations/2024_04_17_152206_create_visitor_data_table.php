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
        Schema::create('visitor_data', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address', 255)->nullable();
            // server all unformation store this migration
            $table->string('server_name', 255)->nullable();
            $table->string('server_software', 255)->nullable();
            $table->string('server_protocol', 255)->nullable();
            $table->string('server_port', 255)->nullable();
            $table->string('server_request_method', 255)->nullable();
            $table->string('server_request_time', 255)->nullable();
            $table->string('server_request_uri', 255)->nullable();
            $table->string('server_query_string', 255)->nullable();
            $table->string('server_http_accept', 255)->nullable();
            $table->string('server_http_accept_charset', 255)->nullable();
            $table->string('server_http_accept_encoding', 255)->nullable();
            $table->string('server_http_accept_language', 255)->nullable();
            $table->string('server_http_connection', 255)->nullable();
            $table->string('server_http_host', 255)->nullable();
            $table->string('server_http_referer', 255)->nullable();
            $table->string('server_http_user_agent', 255)->nullable();
            $table->string('server_https', 255)->nullable();
            $table->string('server_remote_addr', 255)->nullable();
            $table->string('server_remote_host', 255)->nullable();
            $table->string('server_remote_port', 255)->nullable();
            $table->string('server_script_filename', 255)->nullable();
            $table->string('server_server_admin', 255)->nullable();
            $table->string('server_server_name', 255)->nullable();
            $table->string('server_server_port', 255)->nullable();
            $table->string('server_server_protocol', 255)->nullable();
            $table->string('server_server_signature', 255)->nullable();
            $table->string('server_path_translated', 255)->nullable();
            $table->string('server_script_name', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_data');
    }
};
