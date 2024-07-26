<?php

namespace App\Http\Controllers\backend\EmploymentHistory;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmploymentHistory\StoreEmploymentHistoryRequest;
use App\Http\Requests\EmploymentHistory\UpdateEmploymentHistoryRequest;
use App\Models\EmploymentHistory\EmploymentHistory;

class EmploymentHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employeementHistory = EmploymentHistory::with(['user','responsibilities'])->where('status_active','=',1)->where
        ('is_delete','=',0)
            ->where('user_id','=', auth()->user()->id)
            ->orderBy('id','desc')
            ->get();
        return view('backend.pages.user.employmentHistory.component.index', compact('employeementHistory'));
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
    public function store(StoreEmploymentHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EmploymentHistory $employmentHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmploymentHistory $employmentHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmploymentHistoryRequest $request, EmploymentHistory $employmentHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmploymentHistory $employmentHistory)
    {
        //
    }
}
