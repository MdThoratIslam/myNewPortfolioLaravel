<?php

namespace App\Http\Controllers\Calender;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCalenderRequest;
use App\Http\Requests\UpdateCalenderRequest;
use App\Models\Calender\Calender;
use App\Models\Events\Events;
use Illuminate\Http\Request; // Import the Request class from the correct namespace

class CalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Events::all();
        return view('backend.pages.calender.index', compact('events'));
    }
//    public function ajax(Request $request)
//    {
//        switch ($request->type)
//        {
//            case 'add':
//                $event = Events::create([
//                    'title'             => $request->title,
//                    'start'             => $request->start,
//                    'end'               => $request->end,
//                    'description'       => $request->description,
//                ]);
//                return response()->json($event);
//                break;
//            case 'update':
//                $event = Events::find($request->id)->update([
//                    'title' => $request->title,
//                    'start' => $request->start,
//                    'end' => $request->end,
//                ]);
//                return response()->json($event);
//                break;
//            case 'delete':
//                $event = Events::find($request->id)->delete();
//                return response()->json($event);
//                break;
//            default:
//                # code...
//                break;
//        }
//
//    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.calender.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCalenderRequest $request)
    {
        return 'test';
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Calender $calender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calender $calender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCalenderRequest $request, Calender $calender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calender $calender)
    {
        //
    }
}
