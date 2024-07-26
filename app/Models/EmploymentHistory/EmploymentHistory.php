<?php

namespace App\Models\EmploymentHistory;

use App\Models\Responsibilities\Responsibilities;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name'

    ];
    // this model colmun name is user_id but we want to use user() method instead of user_id() method
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function responsibilities()
    {
        return $this->hasMany(Responsibilities::class,'employment_history_id','id');
    }
}
