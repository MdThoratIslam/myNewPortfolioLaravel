<?php

namespace App\Http\Controllers\backend\Module;

use App\Http\Controllers\Controller;
use App\Http\Requests\Module\StoreModuleRequest;
use App\Http\Requests\Module\UpdateModuleRequest;
use App\Http\Resources\Module\ModuleResource;
use App\Models\Module\Module;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ModuleController extends Controller
{
    public function index()
    {
        return view('backend.pages.modules.index');
    }
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModuleRequest $request)
    {
        try {
            $module = Module::create([
                'name'          => $request->name,
                'description'   => $request->description,
                'icon'          => $request->icon,
                'route'         => $request->route,
                'route_type'    => $request->route_type,
                'priority'      => $request->priority,
                'created_by'    => auth()->id(),
                'updated_by'    => null,
                'status_active' => 1,
                'is_delete'     => 0,
                'created_at'    => now(),
                'updated_at'    => null,
            ]);
            $module->save();
            $module->refresh();
            $data = new ModuleResource($module);
            return response()->json([
                'success' => 'Module created successfully.',
            ]);
        } catch (\Exception $e) {
            return response()->json(
                [
                    'status' => 'error',
                    'message' => $e->getMessage(),
                    'line' => $e->getLine(),
                    'file' => $e->getFile(),
                ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {

        return response()->json($module);
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
        $module = Module::find($id);
        if ($module) {
            $module->delete();
            return response()->json(['success' => 'Module deleted successfully.']);
        }
        return response()->json(['error' => 'Module not found.'], 404);
    }
}
