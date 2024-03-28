<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'title',
        'description',
        'start',
        'end',
        'status_active',
        'is_delete',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}
