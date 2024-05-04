<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Resources\Module\ModuleResource;
use App\Models\Events\Events;
use App\Models\Module\Module;
use App\Models\VisitorData;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // i want to module data show here return view('backend.pages.dashboard.index');
//        $sql_event = Events::where('status_active', 1)->where('is_delete', 0)->count('');
        // i want to count start date and end date total day
        $sql_event = Events::where('status_active', 1)->where('is_delete', 0)->get();

        $totalDays = 0;
        foreach ($sql_event as $event)
        {
            //dd( $event);
            // Assuming 'start_date' and 'end_date' are fields in your Events table
            $startDate = new \DateTime($event->start);
            $endDate = new \DateTime($event->end);
            $interval = $startDate->diff($endDate);
            $totalDays += ($interval->days)+1;
        }
        return view('backend.pages.dashboard.index', compact('totalDays'));

    }
    public function visitor()
    {
        $visitors       = VisitorData::all();
        $totalVisitor   = VisitorData::count(); // Get total row count
        $visitorArray = []; // Declare an array variable

        foreach($visitors as $visitor)
        {
            // Set data in the array
            $visitorArray[] = [
                'ip_address' => $visitor->ip_address,
                'server_name' => $visitor->server_name,
                'server_software' => $visitor->server_software,
                'server_http_referer' => $visitor->server_http_referer,
                'server_port' => $visitor->server_port,
                'server_request_method' => $visitor->server_request_method,
                'server_request_time' => $visitor->server_request_time,
                'created_at' => $visitor->created_at,
            ];
        }

        return view('backend.pages.visitor.index',compact('visitorArray','totalVisitor'));

    }

}
