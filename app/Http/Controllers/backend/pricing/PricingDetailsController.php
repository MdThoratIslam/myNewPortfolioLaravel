<?php

namespace App\Http\Controllers\backend\pricing;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePricing_detailsRequest;
use App\Http\Requests\UpdatePricing_detailsRequest;
use App\Models\pricing\Pricing_details;

class PricingDetailsController extends Controller
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
    public function store(StorePricing_detailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pricing_details $pricing_details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pricing_details $pricing_details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePricing_detailsRequest $request, Pricing_details $pricing_details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pricing_details $pricing_details)
    {
        //
    }
}
