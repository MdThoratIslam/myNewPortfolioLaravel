<?php
namespace App\Http\Controllers\Logs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Rap2hpoutre\LaravelLogViewer\LaravelLogViewer;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;
use Illuminate\Pagination\LengthAwarePaginator;
class LogController extends Controller
{
    public function index()
    {
        $this->log_viewer = new LaravelLogViewer();
        $logs = $this->log_viewer->all();
        usort($logs, function ($a, $b)
        {
            return strtotime($b['date']) - strtotime($a['date']); // Sort in descending order
        });

        $perPage = 10; // Number of logs per page
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = array_slice($logs, ($currentPage - 1) * $perPage, $perPage);
        $paginatedLogs = new LengthAwarePaginator(
            $currentItems,
            count($logs),
            $perPage,
            $currentPage,
            [
                'path' => LengthAwarePaginator::resolveCurrentPath()
            ]
        );

        return view('backend.logs.index', compact('paginatedLogs'));
    }

    public function showLogs()
    {
        $logViewer          = new LogViewerController();
        $logs               = collect($logViewer->index());
        $currentPage        = request()->get('page', 1);
        $perPage            = 10;
        $currentPageLogs    = $logs->slice(($currentPage - 1) * $perPage, $perPage)->values();
        $paginatedLogs      = new LengthAwarePaginator(
            $currentPageLogs,
            $logs->count(),
            $perPage,
            $currentPage,
            [
                'path'      => request()->url(),
                'query'     => request()->query()]
        );
        return view('backend.logs.index', compact('paginatedLogs'));
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
