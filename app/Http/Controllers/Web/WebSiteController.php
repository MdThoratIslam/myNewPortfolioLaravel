<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AcademicQualification;
use App\Models\EmploymentHistory;
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
        $special_qualification_data     = $this->special_qualification();
        $skill_summary_data             = $this->skill_summary();
        $field_of_skill_data            = $this->field_of_skill();
        $academic_qualification_data    = $this->academic_qualification();
        $employment_history_data        = $this->employment_history();
       return view('web_site.index',compact(
           [
               'special_qualification_data',
               'skill_summary_data',
               'field_of_skill_data',
               'academic_qualification_data',
               'employment_history_data',
           ]));
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
    public function academic_qualification()
    {
        $data = AcademicQualification::where('status_active', 1)
            ->where('is_delete', 0)
            ->orderBy('id', 'desc')
            ->get();
        $academicQualification = [];
        foreach ($data as $record)
        {
            $academicQualification[] = [
                'examTitle'             => $record->examTitle,
                'concentrationMajor'    => $record->concentrationMajor,
                'instituteName'         => $record->instituteName,
                'result'                => $record->result,
                'outOf'                 => $record->outOf,
                'passingYear'           => $record->passingYear,
                'duration'              => $record->duration,
                'achievement'           => $record->achievement,
                'startingYear'          => $record->startingYear,
                'endingYear'            => $record->endingYear,
            ];
        }
        return $academicQualification;
    }

    // now i want to EmploymentHistory data model join to Responsiblity model and return to the view
    public function employment_history()
    {
        // responsibilities() is a method of EmploymentHistory model
        $data = EmploymentHistory::where('status_active', 1)
            ->where('is_delete', 0)
            ->with('responsibilities')
//            ->with('user')
            ->orderBy('id', 'desc')
            ->get();
        $employmentHistory = [];
        foreach ($data as $record)
        {
            $employmentHistory[] = [
                'company_name'      => $record->company_name,
                'company_address'   => $record->company_address,
                'company_phone'     => $record->company_phone,
                'company_email'     => $record->company_email,
                'company_website'   => $record->company_website,
                'areaOfExpertise'   => $record->areaOfExpertise,
                'designation_id'    => $record->designation_id,
                'department_id'     => $record->department_id,
                'joinin_date'       => $record->joinin_date,
                'leaving_date'      => $record->leaving_date,
                'user_id'           => $record->user_id,
                'status_active'     => $record->status_active,
                'is_delete'         => $record->is_delete,
                'created_by'        => $record->created_by,
                'updated_by'        => $record->updated_by,
                'created_at'        => $record->created_at,
                'updated_at'        => $record->updated_at,
                'responsibilities'  => $record->responsibilities,
            ];
        }
        // employmentHistory return a array not a json
        return $employmentHistory;

    }
}
