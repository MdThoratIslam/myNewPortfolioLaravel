<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSummary extends Model
{
    use HasFactory;
    protected $fillable = [
        'happy_clients',
        'happy_clients_disc',
        'happy_clients_icon',
        'projects_complete',
        'projects_complete_disc',
        'projects_complete_icon',
        'years_of_experience',
        'years_of_experience_disc',
        'years_of_experience_icon',
        'awards',
        'awards_disc',
        'awards_icon',
        'status_active',
        'is_deleted',
        'created_by',
        'updated_by'
    ];
}
