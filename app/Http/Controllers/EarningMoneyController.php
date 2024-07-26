<?php

namespace App\Http\Controllers;

use App\Models\EarningMoney\EarningMoney;
use App\Http\Requests\StoreEarningMoneyRequest;
use App\Http\Requests\UpdateEarningMoneyRequest;
use League\Config\Exception\ValidationException;

class EarningMoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.money.earning.index');
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
        try {
            EarningMoney::create([
                'purpose'       => $request->purpose,
                'amount'        => $request->amount,
                'form'          => $request->form,
                'date'          => $request->date,
                'status_active' =>  1,
                'created_at'    => now(),
                'updated_at'    => null,
            ]);


            return response()->json([
                'massage'       => 'Successfully Earn Money Add!!',
                'code'          => 200,
            ],200);

        }catch (\Exception $e)
        {
            return response()->json([
                'massage'   => $e->getMessage(),
                'code'      => 500
            ],500);
        }
        catch (\Illuminate\Validation\ValidationException $v){
            return response()->json([
                'massage'   => $v->getMessage(),
                'code'      => 500
            ],500);
        }
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
    public function get_data()
    {
        try {
            $data=EarningMoney::all();
            return response()->json([
                'data' => $data
            ]);
        }catch (\Exception $e){
            return response()->json([
               'error' => $e->getMessage()
            ]);
        }
    }
}
