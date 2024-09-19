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
        $sql_event              = Events::where('status_active', 1)->where('is_delete', 0)->get();
        $totalDays              = 0;
        $totalVisitor           = VisitorData::count();
        foreach ($sql_event as $event)
        {
            $startDate          = new \DateTime($event->start);
            $endDate            = new \DateTime($event->end);
            $interval           = $startDate->diff($endDate);
            $totalDays          += ($interval->days)+1;
        }
        $events = Events::where('status_active', 1)->where('is_delete', 0)->get();

        return view('backend.pages.dashboard.index', compact('totalDays','events','totalVisitor'));

    }
    public function visitor()
    {

    }




}
