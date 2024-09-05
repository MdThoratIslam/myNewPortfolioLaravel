<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Resources\Module\ModuleResource;
use App\Models\Events\Events;
use App\Models\Module\Module;
use App\Models\VisitorData;
use App\Services\EmailService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $sql_event = Events::where('status_active', 1)->where('is_delete', 0)->get();
        $totalDays = 0;
        foreach ($sql_event as $event)
        {
            $startDate          = new \DateTime($event->start);
            $endDate            = new \DateTime($event->end);
            $interval           = $startDate->diff($endDate);
            $totalDays          += ($interval->days)+1;
        }
        $events = Events::where('status_active', 1)->where('is_delete', 0)->get();

        return view('backend.pages.dashboard.index', compact('totalDays','events'));

    }
    public function visitor()
    {
        return view('backend.pages.visitor.index');
    }
    public function getVisitors(Request $request)
    {
        if ($request->ajax()) {
            $query = VisitorData::query();
            if ($request->has('order'))
            {
                $order              = $request->get('order')[0];
                $columns            = $request->get('columns');
                $sortColumnName     = $columns[$order['column']]['name'];
                $sortDirection      = $order['dir'];
                $query->orderBy($sortColumnName, $sortDirection);
            } else {
                $query->orderBy('created_at', 'desc');
            }

            if ($request->has('search') && $request->get('search')['value'] != '')
            {
                $searchValue        = $request->get('search')['value'];
                $query->where(function ($subQuery) use ($searchValue)
                {
                    $subQuery->where('ip_address', 'like', "%$searchValue%")
                        ->orWhere('server_name', 'like', "%$searchValue%")
                        ->orWhere('server_software', 'like', "%$searchValue%")
                        ->orWhere('server_request_uri', 'like', "%$searchValue%")
                        ->orWhere('server_request_time', 'like', "%$searchValue%");
                });
            }
            // Fetch and decorate data
            $visitors = $query->get()->map(function ($visitor) {
                return [
                    'ip_address'            => $visitor->ip_address,
                    'server_name'           => $visitor->server_name,
                    'server_software'       => $visitor->server_software,
                    'server_request_uri'    => $visitor->server_request_uri,
                    'server_port'           => $visitor->server_port,
                    'server_request_method' => $visitor->server_request_method,
                    'server_request_time'   => $visitor->server_request_time,
                    'created_at'            => Carbon::parse($visitor->created_at)->format('Y-m-d H:i:s'), // Example of formatting
                    'action'                => view('backend.pages.visitor.partials.actions', compact('visitor'))->render(), // Action buttons
                ];
            });
            return DataTables::of($visitors)->rawColumns(['action'])->make(true);
        }
    }



}
