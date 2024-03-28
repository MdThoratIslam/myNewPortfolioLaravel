<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Http\Requests\Events\StoreEventsRequest;
use App\Http\Requests\Events\UpdateEventsRequest;
use App\Models\Events\Events;
use App\UseHelpers;
use Illuminate\Http\Request;
class EventsController extends Controller
{
    public function index()
    {
        $events = Events::where('status_active', 1)->where('is_delete', 0)->get();
        return view('backend.pages.calender.index', compact('events'));
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
            $validatedData['updated_at'] = UseHelpers::currentDateTime();
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
