<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class PostOffice extends Model
{
    use HasFactory;

    protected $fillable = [
        'police_stations_id',
        'en_name',
        'bn_name',
        'slug',
        'code',
        'lat',
        'long',
        'url',
        'status_active',
        'is_delete',
        'created_by',
        'updated_by',
    ];
}
