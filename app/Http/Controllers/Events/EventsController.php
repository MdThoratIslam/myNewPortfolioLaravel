<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Http\Requests\Events\StoreEventsRequest;
use App\Http\Requests\Events\UpdateEventsRequest;
use App\Models\Events\Events;
use App\UseHelpers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Illuminate\Contracts\Pagination;
class EventsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax())
        {
            // Get the current month and year
            $currentMonth = Carbon::now()->month;
            $currentYear = Carbon::now()->year;

            // Query to filter events that are within the current month and year
            $query = Events::where('status_active', 1)
                ->where('is_delete', 0)
                //->whereMonth('start', $currentMonth)
                ->whereYear('start', $currentYear)
                ->orderBy('start', 'asc');
            return DataTables::of($query)
                ->addIndexColumn()
                // start date value is formatted as 'd-m-Y H:i' (e.g. 01-01-2022 00:00)
                ->editColumn('start', function ($row) {
                    return Carbon::parse($row->start)->format('d-M-Y');
                })
                // end date value is formatted as 'd-m-Y H:i' (e.g. 01-01-2022 00:00)
                ->editColumn('end', function ($row) {
                    return Carbon::parse($row->end)->format('d-M-Y');
                })
                ->addColumn('action', function ($row) {
                    return view('backend.pages.events.partials.actions', ['event' => $row])->render();
                })
                ->rawColumns(['action']) // To allow HTML rendering in the action column
                ->make(true);

        }

        return view('backend.pages.events.index');
    }

    public function create()
    {
        return view('backend.pages.events.create');
    }
    public function store(StoreEventsRequest $request)
    {
        // return $request; // Remove or comment out this line after debugging
        try
        {
            Events::create([
                'title'         => $request->title,
                'start'         => $request->start,
                'end'           => $request->end,
                'description'   => $request->description,
                'status_active' => 1,
                'is_delete'     => 0,
                'created_by'    => auth()->user()->id,
                'updated_by'    => null,
                'created_at'    => UseHelpers::currentDateTime(),
                'updated_at'    => null
            ]);

            $notification = [
                'message' => 'Event Successfully added.',
                'alert-type' => 'success'
            ];
            return response()->json($notification);
        } catch (\Exception $exception) {
            $notification = [
                'message' => 'Something went wrong',
                'alert-type' => 'error'
            ];
            return response()->json($notification);
        }
    }
    public function edit(Request $request)
    {
        dd($request->id);
        $event = Events::where('id', $request->id)->first();
        if (!$event)
        {
            $notification = [
                'message' => 'Event not found',
                'alert-type' => 'error'
            ];
            return redirect()->route('events.index')->with($notification);
        }
        return view('backend.pages.events.edit', compact('event'));
    }
    public function update(UpdateEventsRequest $request)
    {
        try {
            $validatedData = $request->validated();
            $event = Events::where('id', $request->id)->first();
            if (!$event)
            {
                $notification = [
                    'message' => 'Event not found',
                    'alert-type' => 'error'
                ];
                return response()->json($notification);
            }
            // Update the event update_by and updated_at fields with the current user and time respectively
            $validatedData['updated_by'] = auth()->user()->id;
            $validatedData['updated_at'] = currentDateTime();
            $event->update($validatedData);

            $notification = [
                'message' => 'Event successfully updated.',
                'alert-type' => 'success'
            ];
            return response()->json($notification);
        } catch (\Exception $exception) {
            $notification = [
                'message' => 'Something went wrong',
                'alert-type' => 'error'
            ];
            return response()->json($notification);

        }
    }
    public function destroy(Request $request)
    {
        try {
            $events = Events::find($request->id);
            $events->update([
                'is_delete' => 1,
                'status_active' => 0,
                'updated_by' => auth()->user()->id,
                'updated_at' => UseHelpers::currentDateTime()
            ]);
            $notification = [
                'message' => 'Event Successfully deleted.',
                'alert-type' => 'success'
            ];
            return response()->json($notification);
        } catch (\Exception $exception) {
            $notification = [
                'message' => 'Something went wrong',
                'alert-type' => 'error'
            ];
            return response()->json($notification);
        }
    }
}
