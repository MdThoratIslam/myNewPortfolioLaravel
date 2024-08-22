<?php

namespace App\Http\Controllers\Web;

use App\Events\StatusLiked;
use App\Http\Controllers\Controller;
use App\Models\About\AboutSummary;
use App\Models\AcademicQualification\AcademicQualification;
use App\Models\EmploymentHistory\EmploymentHistory;
use App\Models\FieldsOfSkill\FieldsOfSkill;
use App\Models\Portfolio\Portfolio;
use App\Models\Portfolio\Portfolio_describe;
use App\Models\pricing\Pricing;
use App\Models\Service\Service;
use App\Models\SkillSummary\SkillSummary;
use App\Models\SpecialQualification\SpecialQualification;
use App\Models\User;
use Carbon\Carbon;

class WebSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_info                      = $this->userInfo();
        $special_qualification_data     = $this->special_qualification();
        $skill_summary_data             = $this->skill_summary();
        $field_of_skill_data            = $this->field_of_skill();
        $academic_qualification_data    = $this->academic_qualification();
        $employment_history_data        = $this->employment_history();
        $portfolio_title                = $this->portfolio_title();
        $services                       = $this->service();
        $pricing_arr                    = $this->pricing();
        $aboutSummary_arr               = $this->aboutSummary();

//        $portfolio_describe_data        = $this->portfolio_describe();
//        dd($portfolio_title);
       return view('web_site.index',compact(
           [
               'user_info',
               'special_qualification_data',
               'skill_summary_data',
               'field_of_skill_data',
               'academic_qualification_data',
               'employment_history_data',
               'portfolio_title',
               'services',
                'pricing_arr',
               'aboutSummary_arr'
           ]));
    }

    public function userInfo()
    {
        $data=User::with('userPersonalDetail')->where('status_active','0',1)->where('is_delete','=',0)->first();
        return $data;
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
            $startDate  = Carbon::parse($record->joinin_date)->format('d-M-Y');
            $endDate    = Carbon::parse($record->leaving_date)->format('d-M-Y');
            $totalExperienceYears = Carbon::parse($record->joinin_date)->diffInYears($record->leaving_date);
            $totalExperienceMonths = Carbon::parse($record->joinin_date)->diffInMonths($record->leaving_date);
            $totalExperience = $totalExperienceYears.' Years '.$totalExperienceMonths.' Months';

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
                'total_experience'  => $totalExperience,
                ];
        }
        //dd($employmentHistory);
        // employmentHistory return a array not a json
        return $employmentHistory;
    }
    public function portfolio_title()
    {
        $data = Portfolio::with('portfolio_describe')
            ->where('status_active', 1)
            ->where('is_delete', 0)
            ->get();
        $portfolio_title = [];
        foreach ($data as $record)
        {
            $portfolio_title[] = [
                'id'                => $record->id,
                'name'              => $record->name,
            ];
        }
        return $data;
    }
    public function portfolio_describe($id)
    {
        //return $id;
        $data = Portfolio_describe::join('portfolios', 'portfolio_describes.portfolio_id', '=', 'portfolios.id')
            ->select('portfolio_describes.*', 'portfolios.name as portfolio_title_name')
            ->where('portfolio_describes.status_active', 1)
            ->where('portfolio_describes.is_delete', 0)
            ->when(!empty($id), function ($query) use ($id) {
                return $query->where('portfolio_describes.portfolio_id', $id);
            })
            ->with('portfolio')
            ->orderBy('portfolio_describes.id', 'desc')
            ->get();
        $portfolio_describe = [];
        foreach ($data as $record)
        {
            $images = json_decode($record->image); // Decode the JSON string
            $portfolio_describe[] = [
                'id'                        => $record->id,
                'portfolio_id'              => $record->portfolio_id,
                'portfolio_title_name'      => $record->portfolio_title_name,
                'portfolio_name'            => $record->portfolio_name,
                'image'                     => $images,
            ];
        }
//        return $portfolio_describe;

        return response()->json([
            'status' => 200,
            'data' => $portfolio_describe,
        ]);

    }
    public function service()
    {
        $data = Service::where('status_active', 1)
            ->where('is_delete', 0)
            ->get();
        $service_arr = [];
        foreach ($data as $record)
        {
            $service_arr[] = [
                'id'                => $record->id,
                'name'              => $record->name,
                'description'       => $record->description,
                'icon'              => $record->icon,
                'route'             => $record->route,
            ];
        }
        return $service_arr;
    }

    public function pusher()
    {
        // how to count the number of this event is fired
        //broadcast(new StatusLiked('tariq'))->toOthers();
        // now i want to StatusLiked event is fired how many times show count and email as a array
        // how to count the number of this event is fired
        $dateTime = Carbon::now('Asia/Dhaka')->format('Y-m-d H:i:s');
        broadcast(new StatusLiked([
            'email'         => 'tariq',
            'message'       => 'You have received a new Email!!',
            'imageUrl'      => '#',
            'title'         => 'New Email',
            'description'   => 'You have received a new Email!!',
            'timeAgo'       => $dateTime
        ]))->toOthers();

    }
    // need to pricing data and with pricing details data array return
    public function pricing()
    {
        // need to pricing data and with pricing details data array return
        $data = Pricing::with('pricingDetails')->where('status_active', 1)
            ->where('is_deleted', 0)
            ->orderBy('type', 'asc')
            ->get();
        $pricing_arr = [];
        foreach ($data as $record)
        {
            $pricing_arr[] = [
                'id'                => $record->id,
                'name'              => $record->name,
                'description'       => $record->description,
                'price'             => $record->price,
                'type'             => $record->type,
                'delivery_time'     => $record->delivery_time,
                'revision'          => $record->revision,
                'status_active'     => $record->status_active,
                'pricingDetails'    => $record->pricingDetails,
            ];
        }
        return $pricing_arr;
    }

    public function aboutSummary()
    {
       $data= AboutSummary::where('status_active', 1)
           ->where('is_deleted', 0)
           ->get();
       $aboutSmmary_arr= [];
       //dd(AboutSummary::get());
       foreach ($data as $val)
       {
           $aboutSmmary_arr=[
               'id'                         => $val->id,
               'happy_clients'              => $val->happy_clients,
               'happy_clients_disc'         => $val->happy_clients_disc,
               'happy_clients_icon'         => $val->happy_clients_icon,

               'projects_complete'          => $val->projects_complete,
               'projects_complete_disc'     => $val->projects_complete_disc,
               'projects_complete_icon'     => $val->projects_complete_icon,

               'years_of_experience'        => $val->years_of_experience,
               'years_of_experience_disc'   => $val->years_of_experience_disc,
               'years_of_experience_icon'   => $val->years_of_experience_icon,

               'awards'                     => $val->awards,
               'awards_disc'                => $val->years_of_experience_disc,
               'awards_icon'                => $val->years_of_experience_icon,
               ];
       }
       //dd($aboutSmmary_arr);
       return $aboutSmmary_arr;
    }


}
