<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

function get_division($id = null)
{
    //    $apiUrl = 'https://ekdak.com/thikana/pocode/divisions';
    //    $apiToken = '1c4dc27192141d9c2e674b52e3bf8ae0d0afc3bd';
    //    $response = Http::withHeaders(['Authorization' => 'Token ' . $apiToken,])->get($apiUrl);
    //    if ($response->successful())
    //    {
    //        $data = $response->json();
    $divisions = \App\Models\Divisions\Divisions::select('en_name')->where('id', $id)->first();

    if($id != null)
        {
    //            $divisions = collect($data['data'])->where('id', $id)->first();

            return $divisions[$id];
        }else
        {
            //return collect($data['data']); // Make sure this is returning a collection of objects
            return $divisions; // Make sure this is returning a collection of objects
        }
    //    } else
    //    {
    //        return 'Division not found';
    //    }
}
function get_district($id = null, $division_id = null)
{

    if($division_id != null)
    {
        $apiUrl = 'https://ekdak.com/thikana/pocode/districts?v=' . $division_id;
    }else {
        $apiUrl = 'https://ekdak.com/thikana/pocode/districts';
    }
    $apiToken ='1c4dc27192141d9c2e674b52e3bf8ae0d0afc3bd';
    $response = Http::withHeaders(['Authorization' => 'Token ' . $apiToken,])->get($apiUrl);
    if ($response->successful())
    {
        $data = $response->json();
        if($id != null)
        {
            $districts = collect($data['data'])->where('id', $id)->first();
            return $districts['en_name'];
        }else
        {
            return collect($data['data']); // Make sure this is returning a collection of objects
        }
    } else
    {
        return 'District not found';
    }
}
function get_police_station($id = null,$district_id = null)
{
    if($district_id != null)
    {
        $apiUrl = 'https://ekdak.com/thikana/pocode/police-stations?d=' . $district_id;
    }else {
        $apiUrl = 'https://ekdak.com/thikana/pocode/police-stations';
    }
    $apiToken = '1c4dc27192141d9c2e674b52e3bf8ae0d0afc3bd';
    $response = Http::withHeaders(['Authorization' => 'Token ' . $apiToken,])->get($apiUrl);
    if ($response->successful())
    {
        $data = $response->json();
        if($id != null)
        {
            $police_stations = collect($data['data'])->where('id', $id)->first();
            return $police_stations['en_name'];
        }else
        {
            return collect($data['data']); // Make sure this is returning a collection of objects
        }
    } else
    {
        return 'Police Station not found';
    }
}
function get_post_office($id = null,$police_station_id = null)
{
    if($police_station_id != null)
    {
        $apiUrl = 'https://ekdak.com/thikana/pocode/post-offices?t=' . $police_station_id;
    }else {
        $apiUrl = 'https://ekdak.com/thikana/pocode/post-offices';
    }
    $apiToken = '1c4dc27192141d9c2e674b52e3bf8ae0d0afc3bd';
    $response = Http::withHeaders(['Authorization' => 'Token ' . $apiToken,])->get($apiUrl);
    if ($response->successful())
    {
        $data = $response->json();
        if($id != null)
        {
            $post_offices = collect($data['data'])->where('id', $id)->orderBy('en_name')->first();
            return $post_offices['en_name'];
        }else
        {
            return collect($data['data']); // Make sure this is returning a collection of objects
        }
    } else
    {
        return 'Post Office not found';
    }
}
function get_identification_type($id = null)
{
    $identification_type = [
        1 => "NID",
        2 => "Passport",
        3 => "Driving License",
        4 => "Date of Birth",
    ];
    if($id != null)
    {
        return $identification_type[$id];
    }else
    {
        return $identification_type;
    }
}
function leave_type($id = null){
    $leave_type = [
        1 => "Annual",
        2 => "Casual",
        3 => "Casual",
    ];
    if($id != null)
    {
        return $leave_type[$id];
    }else
    {
        return $leave_type;
    }
}
function blood_group($id = null)
{
    $blood_group =
        [
            'A+' => 'A+',
            'A-' => 'A-',
            'B+' => 'B+',
            'B-' => 'B-',
            'AB+' => 'AB+',
            'AB-' => 'AB-',
            'O+' => 'O+',
            'O-' => 'O-',
        ];
    if($id != null)
    {
        return $blood_group[$id];
    }else
    {
        return $blood_group;
    }
}
function status_active ($id = null)
{
    $status_active =
        [
            1 => 'Active',
            0 => 'Inactive',
            2 => 'Pending',
        ];
    if($id != null)
    {
        return $status_active[$id];
    }else
    {
        return $status_active;
    }
}
function gender ($id = null)
{
    $gender = [
        1 => "Male",
        2 => "Female",
        3 => "Other",
    ];
    if($id != null)
    {
        return $gender[$id];
    }else
    {
        return $gender;
    }
}
function currentDateTime()
{
    return Carbon::now()->timezone('Asia/Dhaka')->format('Y-m-d H:i:s');
}
function isActiveSubMenu($subModules) {
    foreach ($subModules as $submenu) {
        if (request()->routeIs($submenu->route)) {
            return true;
        }
    }
    return false;
}
function departmentArr ($id = null)
{
    $departmentArr = [
        1 => "Software Development",
        2 => "IT (Application)",
        3 => "IT & ERP",
    ];
    if($id != null)
    {
        return $departmentArr[$id];
    }else
    {
        return $departmentArr;
    }
}
function designationArr($id = null)
{
    $designationArr = [
        1 => "Executive",
        2 => "Sr. Executive",
        3 => "Jr. Software Engineer",
        4 => "Software Engineer",
        5 => "Software Developer",
        6 => "Full Stack Developer",
        7 => "Web Developer",
        8 => "CEO",
        9 => "Project Consultant",
    ];
    if($id != null)
    {
        return $designationArr[$id];
    }else
    {
        return $designationArr;
    }
}
function relationArr ($id = null)
{
    $relationArr = [
        1 => "Academic",
    ];
    if($id != null)
    {
        return $relationArr[$id];
    }else
    {
        return $relationArr;
    }
}
function maritalStatusArr ($id = null)
{
    $maritalStatusArr = [
        1 => 'Single',
        2 => 'Married',
        3 => 'Divorced',
        4 => 'Widowed',
    ];
    if($id != null)
    {
        return $maritalStatusArr[$id];
    }else
    {
        return $maritalStatusArr;
    }
}
function religionArr ($id = null)
{
    $religionArr = [
        1 => 'Islam',
        2 => 'Hinduism',
        3 => 'Christianity',
        4 => 'Buddhism',
        5 => 'Sikhism',
        6 => 'Judaism',
        7 => 'Baháʼí Faith',
        8 => 'Jainism',
        9 => 'Shinto',
        10 => 'Cao Dai',
        11 => 'Zoroastrianism',
        12 => 'Tenrikyo',
        13 => 'Animism',
        14 => 'Neo-Paganism',
        15 => 'Unitarian Universalism',
        16 => 'Rastafari',
        17 => 'Humanism',
        18 => 'Taoism',
        19 => 'Satanism',
        20 => 'Atheism',
        21 => 'Agnosticism',
        22 => 'Deism',
        23 => 'Pantheism',
        24 => 'Panentheism',
        25 => 'Polytheism',
        26 => 'Henotheism',
        27 => 'Monolatrism',
        28 => 'Kathenotheism',
        29 => 'Ditheism',
        30 => 'Misotheism',
        31 => 'Maltheism',
        32 => 'Dystheism',
        33 => 'Euthyphro dilemma',
        34 => 'God of the gaps',
        35 => 'Nontheism',
        36 => 'Post-theism',
        37 => 'Apatheism',
        38 => 'Ignosticism',
        39 => 'Theological noncognitivism',
        40 => 'Antireligion',
        41 => 'Atheism',
        42 => 'Agnosticism',
        43 => 'Secular humanism',
        44 => 'Secularism',
        45 => 'Freethought',
        46 => 'Rationalism',
        47 => 'Skepticism',
        48 => 'Empiricism',
        49 => 'Scientism',
        50 => 'Objectivism',
        51 => 'Positivism',
    ];
    if($id != null)
    {
        return $religionArr[$id];
    }else
    {
        return $religionArr;
    }
}
function nationalityArr ($id = null)
{
    $nationalityArr = [
        1 => 'Bangladeshi',
        2 => 'Indian',
        3 => 'Pakistani',
        4 => 'Nepalese',
        5 => 'Bhutanese',
        6 => 'Sri Lankan',
        7 => 'Maldivian',
        8 => 'Afghan',
        9 => 'Iranian',
        10 => 'Armenian',
        11 => 'Azerbaijani',
        12 => 'Bahraini',
        13 => 'Cypriot',
    ];
    if($id != null)
    {
        return $nationalityArr[$id];
    }else
    {
        return $nationalityArr;
    }
}
function isDeleteArr($id = null)
{
    $isDeleteArr = [
        0 => 'No',
        1 => 'Yes',
    ];
    if($id != null)
    {
        return $isDeleteArr[$id];
    }else
    {
        return $isDeleteArr;
    }
}
function userTypeArr($id = null)
{
    $userTypeArr = [
        1 => "Admin",
        2 => "User",
    ];
    if($id != null)
    {
        return $userTypeArr[$id];
    }else
    {
        return $userTypeArr;
    }
}
function purpose($id = null)
{
    $purpose =[
        1  =>  'Salary',
        2  =>  'Loan',
    ];
    if ($id != null){
        return $purpose[$id];
    }else{
        return $purpose;
    }
}
function routeType($id = null)
{
    $routeType =
    [
        0       =>  'Section Title',
        1       =>  'Single Route',
        2       =>  'Root Route',
    ];
    if ($id !== null && array_key_exists($id, $routeType))
    {
        return $routeType[$id];
    } else {
        return $routeType; // Default value if ID is not found
    }
}
function priority($id = null)
{
    $priority = [
        0  => 'Tittle Priority',
        1  => 'Main Priority',
        2  => 'High Priority',
        3  => 'Neutral',
        4  => 'Low Priority',
        5  => 'Very Low Priority',
        6  => 'Non Urgent',
        7  => 'Informational',
        8  => 'Optional',
    ];
    if ($id !== null && array_key_exists($id, $priority))
    {
        return $priority[$id];
    } else {
        return $priority; // Default value if ID is not found
    }
}
if (! function_exists('convert_to_absolute_path')) {
    function convert_to_absolute_path($relativePath) {
        return public_path($relativePath);
    }
}
