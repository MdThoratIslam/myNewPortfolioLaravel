<?php

namespace App;

use Carbon\Carbon;

class UseHelpers
{
    /**
     * Get the current date and time in the Asia/Dhaka timezone.
     *
     * @return string Formatted date and time
     */
    public static function currentDateTime()
    {
        return Carbon::now()->timezone('Asia/Dhaka')->format('Y-m-d H:i:s');
    }

    /**
     * Array mapping department IDs to department names.
     *
     * @var array
     */
    public static $departmentArr = [
        1 => "Software Development",
        2 => "IT (Application)",
        3 => "IT & ERP",
    ];
    public static $designationArr = [
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
    public static $relationArr = [
        1 => "Academic",
    ];

}
