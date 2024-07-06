<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\StoreAboutSummaryRequest;
use App\Http\Requests\About\UpdateAboutSummaryRequest;
use App\Models\About\AboutSummary;

class AboutSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreAboutSummaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutSummary $aboutSummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutSummary $aboutSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutSummaryRequest $request, AboutSummary $aboutSummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutSummary $aboutSummary)
    {
        //
    }
}
