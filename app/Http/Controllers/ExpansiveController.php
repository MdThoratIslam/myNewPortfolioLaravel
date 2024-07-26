<?php

namespace App\Http\Controllers;

use App\Models\Expansive;
use App\Http\Requests\StoreExpansiveRequest;
use App\Http\Requests\UpdateExpansiveRequest;

class ExpansiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.money.expensive.index');
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
    public function store(StoreExpansiveRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Expansive $expansive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expansive $expansive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpansiveRequest $request, Expansive $expansive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expansive $expansive)
    {
        //
    }
}
