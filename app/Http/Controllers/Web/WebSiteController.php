<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\FieldsOfSkill;
use App\Models\SkillSummary;
use App\Models\SpecialQualification;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $special_qualification_data = $this->special_qualification();
        $skill_summary_data         = $this->skill_summary();
        $field_of_skill_data        = $this->field_of_skill();
       return view('web_site.index',compact('special_qualification_data','skill_summary_data','field_of_skill_data'));
    }
    public function special_qualification()
    {
        $data = SpecialQualification::where('status_active', 1)
            ->where('is_delete', 0)
            ->get();
        $paragraphs = '';
        foreach ($data as $record) {
            $paragraphs .= "{$record->title}";
            $paragraphs .= "{$record->description} ";
            $paragraphs .= "{$record->projectAuthority} ";
            $paragraphs .= "{$record->duration} ,";
            $paragraphs .= Carbon::parse($record->earned_on)->format('d-M-Y');
        }
        return $paragraphs;
    }
    public function skill_summary()
    {
        $data = SkillSummary::where('status_active', 1)
            ->where('is_delete', 0)
            ->get();
        $skillSummary = '';
        foreach ($data as $record) {
            $skillSummary .= "{$record->summary}";
        }
        return $skillSummary;
    }
    public function field_of_skill()
    {
       $data = FieldsOfSkill::where('status_active', 1)
            ->where('is_delete', 0)
           ->where('user_id', 1)
            ->get();
       // this data as a arra return to the view
        $data_arr = [];
        foreach ($data as $record)
        {
            $data_arr[] = [
                'skill_name' => $record->skill_name,
                'percentage' => $record->percentage,
            ];
        }
        return $data_arr;

    }
}
