<?php
namespace App\Http\Controllers\Logs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Rap2hpoutre\LaravelLogViewer\LaravelLogViewer;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;
use Illuminate\Pagination\LengthAwarePaginator;
use Yajra\DataTables\DataTables;
class LogController extends Controller
{
    public function index(Request $request)
    {
        $this->log_viewer = new LaravelLogViewer();
        $logs = $this->log_viewer->all();

        // Sort logs by date in descending order
        usort($logs, function ($a, $b) {
            return strtotime($b['date']) - strtotime($a['date']);
        });

        // Handle AJAX request for DataTables
        if ($request->ajax()) {
            return DataTables::of($logs)
                ->addColumn('date', function ($log) {
                    return $log['date'];
                })
                ->addColumn('level', function ($log) {
                    return '<span class="text-' . $log['level_class'] . '">' . $log['level'] . '</span>';
                })
                ->addColumn('message', function ($log) {
                    return $log['text'];
                })
                ->rawColumns(['level', 'message'])  // Ensure raw HTML is returned for level and message columns
                ->make(true);
        }
        //how to delete a log file

        return view('backend.logs.index');
    }
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
        dd($id);
        $logFile = storage_path('logs/laravel-' . $date . '.log');

        if (file_exists($logFile)) {
            unlink($logFile);  // Delete the log file
            return response()->json(['success' => 'Log file deleted successfully.']);
        } else {
            return response()->json(['error' => 'Log file not found.'], 404);
        }
    }
}
