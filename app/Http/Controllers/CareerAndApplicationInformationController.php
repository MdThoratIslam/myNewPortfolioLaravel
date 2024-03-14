<?php

namespace App\Http\Controllers;

use App\Models\CareerAndApplicationInformation;
use App\Http\Requests\StoreCareerAndApplicationInformationRequest;
use App\Http\Requests\UpdateCareerAndApplicationInformationRequest;

class CareerAndApplicationInformationController extends Controller
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
    public function store(StoreCareerAndApplicationInformationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CareerAndApplicationInformation $careerAndApplicationInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CareerAndApplicationInformation $careerAndApplicationInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCareerAndApplicationInformationRequest $request, CareerAndApplicationInformation $careerAndApplicationInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CareerAndApplicationInformation $careerAndApplicationInformation)
    {
        //
    }
}
