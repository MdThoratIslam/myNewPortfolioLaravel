<?php

namespace App\Http\Controllers\backend\Module;

use App\Http\Controllers\Controller;
use App\Http\Requests\Module\StoreModuleRequest;
use App\Http\Requests\Module\UpdateModuleRequest;
use App\Models\Module\Module;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /*public function index()
    {
        $modules = Module::where('status_active', '=', 1)
            ->where('is_delete', '=', 0)
            ->get();

        $modules_arr = [];
        foreach ($modules as $module) {
            $modules_arr[] = [
                'id'            => $module->id,
                'name'          => $module->name,
                'description'   => $module->description,
                'icon'          => $module->icon,
                'route'         => $module->route,
                'route_type'    => $module->route_type,
                'priority'      => $module->priority
            ];
        }
        return view('backend.pages.settings.modules.index', compact('modules_arr'));
    }*/

    public function index()
    {
        return view('backend.pages.modules.index');
    }

//    public function getModules(Request $request)
//    {
//        if ($request->ajax()) {
//            $modules = Module::where('status_active', 1)
//                ->where('is_delete', 0)
//                ->select(['id', 'name', 'description', 'icon', 'route', 'route_type', 'priority']);
//
//            return DataTables::of($modules)
//                ->addColumn('action', function ($module) {
//                    return view('backend.pages.settings.modules.partials.actions', compact('module'))->render();
//                })
//                ->rawColumns(['action']) // Ensures action column HTML is rendered correctly
//                ->make(true);
//        }
//    }

    public function getModules(Request $request)
    {
        $i=0;
        if ($request->ajax()) {
            $query                  = Module::query();
            $query->where('status_active', 1)->where('is_delete', 0);
            if ($request->has('order'))
            {
                $order              = $request->get('order')[0];
                $columns            = $request->get('columns');
                $sortColumnName     = $columns[$order['column']]['name'];
                $sortDirection      = $order['dir'];
                $query->orderBy($sortColumnName, $sortDirection);
            } else
            {
                $query->orderBy('priority', 'asc');
            }

            if ($request->has('search') && $request->get('search')['value'] != '')
            {
                $searchValue        = $request->get('search')['value'];
                $query->where(function ($subQuery) use ($searchValue)
                {
                    $subQuery->where('name', 'like', "%$searchValue%")->orWhere('description', 'like', "%$searchValue%");
                });
            }
            return DataTables::of($query)
            ->addColumn('sl_no', function ($module) use (&$i) {return ++$i;})
            ->addColumn('route_type', function ($module){return routeType($module->route_type);})
            ->addColumn('priority', function($module){return priority($module->priority);})
            ->addColumn('action', function ($module){return view('backend.pages.modules.partials.actions', compact('module'))->render();})
            ->rawColumns(['action'])->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModuleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        dd($module);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModuleRequest $request, Module $module)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $module = Module::findOrFail($id);
        $module->delete();
        return response()->json(['success' => 'Module deleted successfully.']);
    }
}
