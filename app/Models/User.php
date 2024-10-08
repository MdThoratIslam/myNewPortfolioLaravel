<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Districts\Districts;
use App\Models\EmploymentHistory\EmploymentHistory;
use App\Models\Upazilas\Upazilas;
use App\Models\UserPersonalDetail\UserPersonalDetail;
use App\Models\AcademicQualification\AcademicQualification;
use App\Models\CareerObjective\CareerObjective;
use App\Models\CareerSummary\CareerSummary;
use App\Models\SpecialQualification\SpecialQualification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'email_verified_at',
        'password',
        'user_type',
        'user_photo_path',
        'user_sign_path',
        'status_active',
        'is_delete',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function employmentHistory()
    {
        return $this->hasMany(EmploymentHistory::class,'user_id','id');
    }
    public function academicQualification()
    {
        return $this->hasMany(AcademicQualification::class,'user_id','id');
    }
    //need career objective
    public function careerObjective()
    {
        return $this->hasOne(CareerObjective::class,'user_id','id');
    }
    public function careerSummary()
    {
        return $this->hasOne(CareerSummary::class,'user_id','id');
    }
    public function specialQualification()
    {
        return $this->hasMany(SpecialQualification::class,'user_id','id');
    }
    public function userPersonalDetail()
    {
        return $this->hasOne(UserPersonalDetail::class,'user_id','id');
    }


}
