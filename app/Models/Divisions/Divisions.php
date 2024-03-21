<?php

namespace App\Models\Divisions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisions extends Model
{
    use HasFactory;
    protected $table = 'divisions';
    protected $fillable = [
        'name','bn_name','url','code','lat','lon','status_active','is_delete', 'created_by',
    ];
}
