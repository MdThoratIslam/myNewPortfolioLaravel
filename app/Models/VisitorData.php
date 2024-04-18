<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorData extends Model
{
    use HasFactory;
    protected $table = 'visitor_data';
    protected $fillable = [
        'ip_address',
        'server_name',
        'server_software',
        'server_protocol',
        'server_port',
        'server_request_method',
        'server_request_time',
        'server_request_uri',
        'server_query_string',
        'server_http_accept',
        'server_http_accept_charset',
        'server_http_accept_encoding',
        'server_http_accept_language',
        'server_http_connection',
        'server_http_host',
        'server_http_referer',
        'server_http_user_agent',
        'server_https',
        'server_remote_addr',
        'server_remote_host',
        'server_remote_port',
        'server_script_filename',
        'server_server_admin',
        'server_server_name',
        'server_server_port',
        'server_server_protocol',
        'server_server_signature',
        'server_path_translated',
        'server_script_name',
    ];
}
