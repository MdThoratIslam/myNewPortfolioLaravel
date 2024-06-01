<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reasoncv extends Model
{
    use HasFactory;
    protected $fillable = [
        'ip_address',
        'device_id',
        'device_type',
        'device_name',
        'device_model',
        'device_os',
        'device_os_version',
        'device_browser',
        'device_browser_version',
        'device_is_mobile',
        'device_is_tablet',
        'device_is_desktop',
        'reason',
        'status'
    ];
}
