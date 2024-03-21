<?php

namespace App\Models\Responsibilities;

use App\Models\EmploymentHistory\EmploymentHistory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsibilities extends Model
{
    use HasFactory;
    public function employmentHistory()
    {
        return $this->belongsTo(EmploymentHistory::class,'employment_history_id','id');
    }
}
