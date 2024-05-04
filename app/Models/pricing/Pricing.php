<?php

namespace App\Models\pricing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    public $timestamps = false;

    // need pricing_details table join with pricing table
    public function pricingDetails()
    {
        return $this->hasMany(Pricing_details::class, 'pricing_id', 'id');
    }
}
