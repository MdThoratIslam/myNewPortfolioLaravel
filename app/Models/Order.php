<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    /*'package_id'        => 'required|exists:pricings,id',
            'name'              => 'required|string',
            'email'             => 'nullable|email',
            'phone'             => 'required|string',
            'subject'           => 'required|string',
            'message'           => 'nullable|string',
            'status_active'     => 'nullable|integer',
            'is_read'           => 'nullable|integer',
            'ip_address'        => 'nullable|string',*/
    protected $fillable = [
        'package_id',
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'status_active',
        'is_read',
        'ip_address',
    ];
}
