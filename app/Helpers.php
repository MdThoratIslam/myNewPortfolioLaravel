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
    public static $genderArr = [
        1 => 'Male',
        2 => 'Female',
        3 => 'Other',
    ];
    public static $bloodGroupArr = [
        1 => 'A+',
        2 => 'A-',
        3 => 'B+',
        4 => 'B-',
        5 => 'O+',
        6 => 'O-',
        7 => 'AB+',
        8 => 'AB-',
    ];
    public static $maritalStatusArr = [
        1 => 'Single',
        2 => 'Married',
        3 => 'Divorced',
        4 => 'Widowed',
    ];
    public static $religionArr = [
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
    public static $nationalityArr = [
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
    public static $statusArr = [
        1 => 'Active',
        2 => 'Inactive',
    ];
    public static $isDeleteArr = [
        0 => 'No',
        1 => 'Yes',
    ];
    public static $userTypeArr = [
        1 => 'Admin',
        2 => 'User',
    ];


}
