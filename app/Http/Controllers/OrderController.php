<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Carbon\Carbon;

class OrderController extends Controller
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
    public function store(StoreOrderRequest $request)
    {
        try {
            //if phone is exist then update the order
            $order = Order::where('phone', $request->phone)->first();
            if ($order)
            {
                $order->update([
                    'package_id'    => $request->package_id,
                    'name'          => $request->name,
                    'email'         => $request->email,
                    'phone'         => $request->phone,
                    'subject'       => $request->subject,
                    'message'       => $request->message,
                    'status_active' => $request->status_active,
                    'is_read'       => $request->is_read,
                    'ip_address'    => $request->ip_address,
                    'updated_at'    => Carbon::now()->toDateTimeString(),
                ]);
                return response()->json([
                    'message'       => 'Your order has been updated successfully',
                    'order'         => $order,
                ], 200);
            }else
            {
                $order = Order::create(
                    [
                        'package_id'    => $request->package_id,
                        'name'          => $request->name,
                        'email'         => $request->email,
                        'phone'         => $request->phone,
                        'subject'       => $request->subject,
                        'message'       => $request->message,
                        'status_active' => $request->status_active,
                        'is_read'       => $request->is_read,
                        'ip_address'    => $request->ip_address,
                        'created_at'    => Carbon::now()->toDateTimeString(),
                      ]
                );
            }
        } catch (\Exception $e)
        {
            return response()->json(['message' => 'Order creation failed'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
