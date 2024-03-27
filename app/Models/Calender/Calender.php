<?php

namespace App\Models\Calender;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'status_active',
        'is_delete',
        'created_by',
        'updated_by',
    ];
}
