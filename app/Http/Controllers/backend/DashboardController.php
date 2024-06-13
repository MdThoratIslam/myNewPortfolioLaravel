<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Resources\Module\ModuleResource;
use App\Models\Events\Events;
use App\Models\Module\Module;
use App\Models\VisitorData;
use App\Services\EmailService;

class DashboardController extends Controller
{
    public function dashboard()
    {
//        $emailService = new \App\Services\EmailService();
//        $messages = $emailService->getInboxMessages();
//        dd($messages);
        $sql_event = Events::where('status_active', 1)->where('is_delete', 0)->get();
        $totalDays = 0;
        foreach ($sql_event as $event)
        {
            //dd( $event);
            // Assuming 'start_date' and 'end_date' are fields in your Events table
            $startDate          = new \DateTime($event->start);
            $endDate            = new \DateTime($event->end);
            $interval           = $startDate->diff($endDate);
            $totalDays          += ($interval->days)+1;
        }
        return view('backend.pages.dashboard.index', compact('totalDays'));

    }
    public function visitor()
    {
        $visitors                       = VisitorData::all();
        $totalVisitor                   = VisitorData::count(); // Get total row count
        $visitorArray                   = []; // Declare an array variable

        foreach($visitors as $visitor)
        {
            // Set data in the array
            $visitorArray[] = [
                'ip_address'            => $visitor->ip_address,
                'server_name'           => $visitor->server_name,
                'server_software'       => $visitor->server_software,
                'server_request_uri'    => $visitor->server_request_uri,
                'server_port'           => $visitor->server_port,
                'server_request_method' => $visitor->server_request_method,
                'server_request_time'   => $visitor->server_request_time,
                'created_at'            => $visitor->created_at,
            ];
        }

        return view('backend.pages.visitor.index',compact('visitorArray','totalVisitor'));

    }



}
