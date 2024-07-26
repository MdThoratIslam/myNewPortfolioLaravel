<?php

namespace App\Models\EarningMoney;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EarningMoney extends Model
{
    use HasFactory;

    protected $fillable = [
        'purpose',
        'form',
        'date',
        'amount'
    ];
}
