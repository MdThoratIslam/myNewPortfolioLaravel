<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Resources\Module\ModuleResource;
use App\Models\Module\Module;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // i want to module data show here return view('backend.pages.dashboard.index');
        $sql = Module::where('status_active', 1)
            ->with('subModules')
            ->where('is_delete',0)
            ->select('id', 'name', 'route', 'route_type')
            ->orderBy('id', 'asc')
            ->get();
        $modules = $sql;
        //return $modules;
        return view('backend.pages.dashboard.index', compact('modules'));

    }
}
