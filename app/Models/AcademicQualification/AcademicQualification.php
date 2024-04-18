<?php

namespace App\Models\AcademicQualification;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicQualification extends Model
{
    use HasFactory;
    protected $fillable = [
        'examTitle' ,
        'concentrationMajor' ,
        'instituteName' ,
        'result' ,
        'outOf',
        'startingYear' ,
        'endingYear' ,
        'passingYear' ,
        'duration' ,
        'achievement',
        'user_id' ,
        'status_active' ,
        'is_delete' ,
        'created_by' ,
        'updated_by' ,
        'created_at' ,
        'updated_at' ,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
