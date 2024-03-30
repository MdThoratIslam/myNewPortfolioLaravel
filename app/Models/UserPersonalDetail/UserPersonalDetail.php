<?php

namespace App\Models\UserPersonalDetail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPersonalDetail extends Model
{
    use HasFactory;
    public $timestamps = true;
    /*
     * $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('father_name', 100);
            $table->string('mother_name', 100);
            $table->string('present_area', 255);
            $table->foreignId('present_upazila_id')->constrained('upazilas');
            $table->foreignId('present_district_id')->constrained('districts');
            $table->foreignId('present_division_id')->constrained('divisions');

            $table->string('parmament_area', 255);
            $table->foreignId('parmament_upazila_id')->constrained('upazilas');
            $table->foreignId('parmament_district_id')->constrained('districts');
            $table->foreignId('parmament_division_id')->constrained('divisions');

            $table->bigInteger('nid')->unique()->nullable();
            $table->bigInteger('passport')->unique()->nullable();

            $table->bigInteger('birth_certificate')->unique()->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth', 100)->nullable();

            $table->integer('nationality_id')->default(0);
            $table->integer('religion_id')->default(0);
            $table->integer('blood_group_id')->default(0);
            $table->integer('marital_status_id')->default(0);
            $table->integer('gender_id')->default(0);
            $table->string('height')->nullable();
            $table->string('weight')->nullable();

            $table->integer('status_active')->default(1);
            $table->integer('is_delete')->default(0);
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
    */
    protected $fillable = [
        'user_id',
        'father_name',
        'mother_name',
        'present_area',
        'present_upazila_id',
        'present_district_id',
        'present_division_id',
        'parmament_area',
        'parmament_upazila_id',
        'parmament_district_id',
        'parmament_division_id',
        'nid',
        'passport',
        'birth_certificate',
        'date_of_birth',
        'place_of_birth',
        'nationality_id',
        'religion_id',
        'blood_group_id',
        'marital_status_id',
        'gender_id',
        'height',
        'weight',
        'status_active',
        'is_delete',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
