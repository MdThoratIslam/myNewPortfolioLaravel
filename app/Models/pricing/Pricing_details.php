<?php

namespace App\Models\pricing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing_details extends Model
{
    use HasFactory;

    public function price()
    {
        return $this->belongsTo(Pricing::class, 'pricing_id', 'id');
    }
}
