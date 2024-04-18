<?php

namespace App\Http\Middleware;

use App\Models\VisitorData;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CaptureVisitorData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $visitorData = [
            'ip_address'                    => $request->ip(),
            'server_name'                   => $request->server('SERVER_NAME'),
            'server_software'               => $request->server('SERVER_SOFTWARE'),
            'server_protocol'               => $request->server('SERVER_PROTOCOL'),
            'server_port'                   => $request->server('SERVER_PORT'),
            'server_request_method'         => $request->server('REQUEST_METHOD'),
            'server_request_time'           => $request->server('REQUEST_TIME'),
            'server_request_uri'            => $request->server('REQUEST_URI'),
            'server_query_string'           => $request->server('QUERY_STRING'),
            'server_http_accept'            => $request->server('HTTP_ACCEPT'),
            'server_http_accept_charset'    => $request->server('HTTP_ACCEPT_CHARSET'),
            'server_http_accept_encoding'   => $request->server('HTTP_ACCEPT_ENCODING'),
            'server_http_accept_language'   => $request->server('HTTP_ACCEPT_LANGUAGE'),
            'server_http_connection'        => $request->server('HTTP_CONNECTION'),
            'server_http_host'              => $request->server('HTTP_HOST'),
            'server_http_referer'           => $request->server('HTTP_REFERER'),
            'server_http_user_agent'        => $request->server('HTTP_USER_AGENT'),
            'server_https'                  => $request->server('HTTPS'),
            'server_remote_addr'            => $request->server('REMOTE_ADDR'),
            'server_remote_host'            => $request->server('REMOTE_HOST'),
            'server_remote_port'            => $request->server('REMOTE_PORT'),
            'server_script_filename'        => $request->server('SCRIPT_FILENAME'),
            'server_server_admin'           => $request->server('SERVER_ADMIN'),
            'server_server_name'            => $request->server('SERVER_NAME'),
            'server_server_port'            => $request->server('SERVER_PORT'),
            'server_server_protocol'        => $request->server('SERVER_PROTOCOL'),
            'server_server_signature'       => $request->server('SERVER_SIGNATURE'),
            'server_path_translated'        => $request->server('PATH_TRANSLATED'),
            'server_script_name'            => $request->server('SCRIPT_NAME'),
        ];
        // Store the visitor data in the database
        VisitorData::create($visitorData);
        // Continue processing the request
        return $next($request);
    }
}
