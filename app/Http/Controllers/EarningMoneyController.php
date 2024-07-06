<?php

namespace App\Http\Controllers;

use App\Models\EarningMoney\EarningMoney;
use App\Http\Requests\StoreEarningMoneyRequest;
use App\Http\Requests\UpdateEarningMoneyRequest;

class EarningMoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd('test');
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
    public function store(StoreEarningMoneyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EarningMoney $earningMoney)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EarningMoney $earningMoney)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEarningMoneyRequest $request, EarningMoney $earningMoney)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EarningMoney $earningMoney)
    {
        //
    }
}
