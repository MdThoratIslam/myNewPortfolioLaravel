<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\VisitorData;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
