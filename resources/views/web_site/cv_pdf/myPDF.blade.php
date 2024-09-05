{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <style>--}}
{{--        body {--}}
{{--            font-family: 'Times New Roman', sans-serif;--}}
{{--            font-size: 10px;--}}
{{--            margin: 0;--}}
{{--            padding: 0;--}}
{{--            line-height: 1.6;--}}
{{--        }--}}
{{--        .container {--}}
{{--            width: 80%;--}}
{{--            margin: auto;--}}
{{--            overflow: hidden;--}}
{{--        }--}}
{{--        --}}
{{--        .header, .section {--}}
{{--            margin-bottom: 20px;--}}
{{--        }--}}
{{--        .header img {--}}
{{--            float: right;--}}
{{--            width: 150px;--}}
{{--            height: auto;--}}
{{--            border-radius: 50%;--}}
{{--        }--}}
{{--        .header h1 {--}}
{{--            margin: 0;--}}
{{--        }--}}
{{--        .header p {--}}
{{--            margin: 5px 0;--}}
{{--        }--}}
{{--        .section h2 {--}}
{{--            margin: 0;--}}
{{--            padding: 0;--}}
{{--            border-bottom: 2px solid #000;--}}
{{--        }--}}
{{--        .section p {--}}
{{--            margin: 10px 0;--}}
{{--        }--}}
{{--        .list-unstyled {--}}
{{--            list-style: none;--}}
{{--            padding: 0;--}}
{{--        }--}}
{{--        .list-unstyled li {--}}
{{--            margin: 5px 0;--}}
{{--        }--}}
{{--        table {--}}
{{--            width: 100%;--}}
{{--            border-collapse: collapse;--}}
{{--            page-break-inside: auto;--}}
{{--        }--}}
{{--        table, th, td {--}}
{{--            border: 1px solid black;--}}
{{--            padding: 8px;--}}
{{--            text-align: left;--}}
{{--        }--}}
{{--        th {--}}
{{--            background-color: #f2f2f2;--}}
{{--        }--}}
{{--        .page-break {--}}
{{--            page-break-after: always;--}}
{{--        }--}}

{{--        .page-break-before {--}}
{{--            page-break-before: always;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
{{--    <div class="header">--}}
{{--        <img src="your-image-path-here.jpg" alt="Profile Picture">--}}
{{--        <h1>{{$users[0]['name']}}</h1>--}}
{{--        <p>{{ $users[0]->userPersonalDetail->present_area ?? 'No address provided' }}</p>--}}
{{--        <p>--}}
{{--            {{ get_police_station( $users[0]->userPersonalDetail->present_police_station_id,'' )?? 'No address provided' }},--}}
{{--            {{ get_district( $users[0]->userPersonalDetail->present_district_id,'' )?? 'No address provided' }}--}}
{{--        </p>--}}
{{--        <p>{{$users[0]['phone']}}</p>--}}
{{--        <p>mdthoratislam1993.oni@gmail.com</p>--}}
{{--        <p><a href="https://zasusoft.com">zasusoft.com</a></p>--}}
{{--    </div>--}}

{{--    <div class="section">--}}
{{--        <h2>Career Objective</h2>--}}
{{--        <p>To build a career in Information and Communication technology with the experience that I have gained from my education and professional background willing to take any challenge in the relevant field.</p>--}}
{{--    </div>--}}

{{--    <div class="section">--}}
{{--        <h2>Career Summary</h2>--}}
{{--        <p># Excellent knowledge of developing web applications and websites.</p>--}}
{{--        <p># Career oriented, hardworking and ability to handle multiple tasks.</p>--}}
{{--        <p># Developing and creating PHP MySQL application as per the specifications.</p>--}}
{{--        <p># Quick learner and ability to learn new concepts.</p>--}}
{{--        <p># Experience in coordinating with team members in database structure.</p>--}}
{{--        <p># Passionate about giving best design and coding practices.</p>--}}
{{--    </div>--}}

{{--    <div class="section">--}}
{{--        <h2>Special Qualification</h2>--}}
{{--        <p>Professional Web Application Development (PWAD): Islamic Development Bank-Bangladesh Islamic Solidarity Educational Wakf (IDB-BISEW) IT Scholarship Project Authority: IDB-BISEW Duration: 460 hrs Earned On: June, 2021</p>--}}
{{--    </div>--}}

{{--    <div class="section">--}}
{{--        <h2>Employment History</h2>--}}
{{--        <p><strong>Total Year of Experience:</strong> 5 yrs</p>--}}
{{--        <ol class="list-unstyled">--}}
{{--            <li>--}}
{{--                <p><strong>1. Full Stack Developer (0.4 yr)</strong></p>--}}
{{--                <p>(11 Nov 2023 - Continuing) Smart Think</p>--}}
{{--                <p><strong>Area of Expertise:</strong></p>--}}
{{--                <p>API Development (0.3 yr), Laravel Framework (0.3 yr), Vue JS (0.3 yr)</p>--}}
{{--                <p><strong>Duties/Responsibilities:</strong></p>--}}
{{--                <ul>--}}
{{--                    <li>Programming languages: PHP, JavaScript</li>--}}
{{--                    <li>Frameworks: Laravel, Vue.js</li>--}}
{{--                    <li>Database management: MySQL</li>--}}
{{--                    <li>Web technologies: HTML5, CSS3, RESTful APIs</li>--}}
{{--                    <li>Version control: Git</li>--}}
{{--                    <li>Development tools: Composer, npm, VSCode, PhpStorm</li>--}}
{{--                    <li>Server management: Laragon</li>--}}
{{--                    <li>Database management tools: MySQL, HeidiSQL</li>--}}
{{--                    <li>Command-line interface: Git Bash</li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <p><strong>2. Executive Software Developer (1.2 yrs)</strong></p>--}}
{{--                <p>(01 Sep 2021 - 31 Oct 2022) Beximco Computers</p>--}}
{{--                <p><strong>Area of Expertise:</strong></p>--}}
{{--                <p>Laravel (0.6 yr), Oracle Database (1.2 yrs), PHP (0.6 yr)</p>--}}
{{--                <p><strong>Duties/Responsibilities:</strong></p>--}}
{{--                <ul>--}}
{{--                    <li>Programming languages: C#, PHP, JavaScript</li>--}}
{{--                    <li>Frameworks: Laravel, Angular JS, React JS</li>--}}
{{--                    <li>Database management: Oracle, MySQL</li>--}}
{{--                    <li>Web technologies: HTML5, CSS3, Bootstrap, JQuery, Ajax</li>--}}
{{--                    <li>Version control: Git, Github</li>--}}
{{--                    <li>Development tools: Composer, npm, VSCode, PhpStorm</li>--}}
{{--                    <li>Server management: Laragon</li>--}}
{{--                    <li>Database management tools: MySQL, Oracle</li>--}}
{{--                    <li>Command-line interface: Git Bash, HeidiSQL</li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <p><strong>3. Junior Software Developer (2.0 yrs)</strong></p>--}}
{{--                <p>(01 Jul 2019 - 31 Aug 2021) ACI Limited</p>--}}
{{--                <p><strong>Area of Expertise:</strong></p>--}}
{{--                <p>API Development (0.3 yr), Oracle Database (0.5 yr), PHP (0.6 yr)</p>--}}
{{--                <p><strong>Duties/Responsibilities:</strong></p>--}}
{{--                <ul>--}}
{{--                 --}}
{{--                    <li>Programming languages: C#, PHP, JavaScript</li>--}}
{{--                    <li>Frameworks: Angular JS, React JS</li>--}}
{{--                    <li>Database management: Oracle, MySQL</li>--}}
{{--                    <li>Web technologies: HTML5, CSS3, Bootstrap, JQuery, Ajax</li>--}}
{{--                    <li>Version control: Git, Github</li>--}}
{{--                    <li>Development tools: Composer, npm, VSCode, PhpStorm</li>--}}
{{--                    <li>Server management: Laragon</li>--}}
{{--                    <li>Database management tools: MySQL, Oracle</li>--}}
{{--                    <li>Command-line interface: Git Bash, HeidiSQL</li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <p><strong>4. Executive IT (1.5 yrs)</strong></p>--}}
{{--                <p>(01 Jan 2017 - 30 Jun 2019) Eastern Bank PLC, Loan Monitoring Dept at Utsire Group</p>--}}
{{--                <p>IT Application (1.5 yrs)</p>--}}
{{--            </li>--}}
{{--        </ol>--}}
{{--    </div>--}}

{{--    <div class="section page-break">--}}
{{--        <h2>Academic Qualification</h2>--}}
{{--        <table>--}}
{{--            <tr>--}}
{{--                <th>Degree</th>--}}
{{--                <th>Field of Study</th>--}}
{{--                <th>Institution</th>--}}
{{--                <th>Board</th>--}}
{{--                <th>Year</th>--}}
{{--                <th>Duration</th>--}}
{{--                <th>Achievement</th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Bachelor of Science</td>--}}
{{--                <td>Computer Science & Engineering</td>--}}
{{--                <td>East West University</td>--}}
{{--                <td>Dhaka</td>--}}
{{--                <td>2018</td>--}}
{{--                <td>4</td>--}}
{{--                <td>CGPA: 3.4</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Diploma</td>--}}
{{--                <td>Computer Technology</td>--}}
{{--                <td>Dhaka Polytechnic Institute</td>--}}
{{--                <td>Dhaka</td>--}}
{{--                <td>2014</td>--}}
{{--                <td>4</td>--}}
{{--                <td>CGPA: 3.2</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>SSC</td>--}}
{{--                <td>Science</td>--}}
{{--                <td>Business Studies School</td>--}}
{{--                <td>Comilla</td>--}}
{{--                <td>2010</td>--}}
{{--                <td>2</td>--}}
{{--                <td>GPA: 4.5</td>--}}
{{--            </tr>--}}
{{--        </table>--}}
{{--    </div>--}}

{{--    <div class="section">--}}
{{--        <h2>Training Summary</h2>--}}
{{--        <table>--}}
{{--            <tr>--}}
{{--                <th>Training Title</th>--}}
{{--                <th>Country</th>--}}
{{--                <th>Location</th>--}}
{{--                <th>Year</th>--}}
{{--                <th>Duration</th>--}}
{{--                <th>Achievement</th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Web Development</td>--}}
{{--                <td>Bangladesh</td>--}}
{{--                <td>Dhaka</td>--}}
{{--                <td>2020</td>--}}
{{--                <td>6 months</td>--}}
{{--                <td>Completed</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Database Management</td>--}}
{{--                <td>Bangladesh</td>--}}
{{--                <td>Dhaka</td>--}}
{{--                <td>2019</td>--}}
{{--                <td>3 months</td>--}}
{{--                <td>Completed</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>API Development</td>--}}
{{--                <td>Bangladesh</td>--}}
{{--                <td>Dhaka</td>--}}
{{--                <td>2018</td>--}}
{{--                <td>3 months</td>--}}
{{--                <td>Completed</td>--}}
{{--            </tr>--}}
{{--        </table>--}}
{{--    </div>--}}

{{--    <div class="section page-break">--}}
{{--        <h2>Professional Qualification</h2>--}}
{{--        <table>--}}
{{--            <tr>--}}
{{--                <th>Certification</th>--}}
{{--                <th>Country</th>--}}
{{--                <th>Institution</th>--}}
{{--                <th>Year</th>--}}
{{--                <th>Duration</th>--}}
{{--                <th>Achievement</th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Certified PHP Developer</td>--}}
{{--                <td>Bangladesh</td>--}}
{{--                <td>BD IT Solutions</td>--}}
{{--                <td>2021</td>--}}
{{--                <td>6 months</td>--}}
{{--                <td>Completed</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Certified Laravel Developer</td>--}}
{{--                <td>Bangladesh</td>--}}
{{--                <td>BD IT Solutions</td>--}}
{{--                <td>2021</td>--}}
{{--                <td>6 months</td>--}}
{{--                <td>Completed</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Certified Vue.js Developer</td>--}}
{{--                <td>Bangladesh</td>--}}
{{--                <td>BD IT Solutions</td>--}}
{{--                <td>2021</td>--}}
{{--                <td>6 months</td>--}}
{{--                <td>Completed</td>--}}
{{--            </tr>--}}
{{--        </table>--}}
{{--    </div>--}}

{{--    <div class="section">--}}
{{--        <h2>Skills</h2>--}}
{{--        <ul class="list-unstyled">--}}
{{--            <li>Web Development</li>--}}
{{--            <li>API Development</li>--}}
{{--            <li>Database Management</li>--}}
{{--            <li>Version Control</li>--}}
{{--            <li>Server Management</li>--}}
{{--            <li>Problem Solving</li>--}}
{{--        </ul>--}}
{{--    </div>--}}

{{--    <div class="section">--}}
{{--        <h2>Languages</h2>--}}
{{--        <ul class="list-unstyled">--}}
{{--            <li>English - Fluent</li>--}}
{{--            <li>Bengali - Native</li>--}}
{{--            <li>Hindi - Intermediate</li>--}}
{{--        </ul>--}}
{{--    </div>--}}

{{--    <div class="section">--}}
{{--        <h2>Personal Information</h2>--}}
{{--        <table>--}}
{{--            <tr>--}}
{{--                <td>Father's Name</td>--}}
{{--                <td>:</td>--}}
{{--                <td>Mr. XYZ</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Mother's Name</td>--}}
{{--                <td>:</td>--}}
{{--                <td>Mrs. XYZ</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Date of Birth</td>--}}
{{--                <td>:</td>--}}
{{--                <td>01 Jan 1990</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Gender</td>--}}
{{--                <td>:</td>--}}
{{--                <td>Male</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Marital Status</td>--}}
{{--                <td>:</td>--}}
{{--                <td>Single</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Nationality</td>--}}
{{--                <td>:</td>--}}
{{--                <td>Bangladeshi</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Religion</td>--}}
{{--                <td>:</td>--}}
{{--                <td>Islam</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Permanent Address</td>--}}
{{--                <td>:</td>--}}
{{--                <td>34/A, Ahammadbag, Bashaboo, Shobujbag, Dhaka - 1214</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Current Address</td>--}}
{{--                <td>:</td>--}}
{{--                <td>34/A, Ahammadbag, Bashaboo, Shobujbag, Dhaka - 1214</td>--}}
{{--            </tr>--}}
{{--        </table>--}}
{{--    </div>--}}

{{--    <div class="section">--}}
{{--        <h2>References</h2>--}}
{{--        <ul class="list-unstyled">--}}
{{--            <li>Mr. XYZ, Senior Manager, ABC Company, Phone: 0123456789, Email: xyz@example.com</li>--}}
{{--            <li>Mr. XYZ, Director, DEF Company, Phone: 0123456789, Email: xyz@example.com</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Times New Roman', sans-serif;
            font-size: 10px;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        .container {
            width: 90%;
            margin: auto;
            overflow: hidden;
        }

        .header, .section {
            margin-bottom: 10px;
        }
        .header img {
            float: right;
            width: 120px;
            height: auto;
            border-radius: 50%;
        }
        .header h1 {
            margin: 0;
            font-size: 14px;
        }
        .header p {
            margin: 2px 0;
        }
        .section h2 {
            margin: 0;
            padding: 0;
            border-bottom: 1px solid #000;
            font-size: 12px;
        }
        .section p {
            margin: 5px 0;
            padding: 0;
        }
        .list-unstyled {
            list-style: none;
            padding: 0;
        }
        .list-unstyled li {
            margin: 3px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            page-break-inside: auto;
            font-size: 9px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 4px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .page-break {
            page-break-before: always;
            break-inside: avoid;
        }

        /* To avoid content being broken awkwardly between pages */
        .avoid-page-break {
            page-break-inside: avoid;
            break-inside: avoid;
        }

        /* Reduce padding and margin inside sections */
        .section p {
            margin-bottom: 3px;
            padding: 0;
        }

        /* Ensure image does not push content unnecessarily */
        img {
            max-width: 100%;
            height: auto;
            overflow: hidden;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        @php
            $path = $users[0]['user_photo_path'];
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        @endphp
        <img src="{{ $base64 }}" alt="Profile Picture" style="border-radius: 0;">
        <h1>{{$users[0]['name']}}</h1>
        <p>{{ $users[0]->userPersonalDetail->present_area ?? 'No address provided' }}</p>
        <p>
            {{ get_police_station( $users[0]->userPersonalDetail->present_police_station_id,'' )?? 'No address provided' }},
            {{ get_district( $users[0]->userPersonalDetail->present_district_id,'' )?? 'No address provided' }}
        </p>
        <p>{{$users[0]['phone']}}</p>
        <p>{{$users[0]['email']}}</p>
        <p><a href="https://zasusoft.com">zasusoft.com</a></p>
    </div>
    
    <div class="section avoid-page-break">
        <h2>Career Objective</h2>
        <p>{{$users[0]->careerObjective->career_objective}}</p>
    </div>
    
    <div class="section avoid-page-break">
        <h2>Career Summary</h2>
        @php
            $careerSummary = array_filter(array_map('trim', explode("#", $users[0]->careerSummary->career_summary)));
        @endphp
        @foreach($careerSummary as $summary)
            <p># {{ $summary }}</p>
        @endforeach
        
    </div>
    <div class="section avoid-page-break">
        <h2>Special Qualification</h2>
        <p> {{ $users[0]->specialQualification[0]->title }}: {{$users[0]->specialQualification[0]->description }}
            Authority: {{ $users[0]->specialQualification[0]->projectAuthority }}
            Duration: {{ $users[0]->specialQualification[0]->duration }}
            Earned On: {{ $users[0]->specialQualification[0]->earned_on }}
            
           : <br>
        
        </p>
    </div>
    <div class="section avoid-page-break">
        <h2>Employment History</h2>
        <p><strong>Total Years of Experience:</strong> {{$users[0]->totalExperience}}</p></p>
        <ol class="list-unstyled">
            @php
                $i = 1;
            @endphp
            @foreach($users[0]->employmentHistory->sortByDesc('id') as $key => $userEmploymentHistory)
                @php
                    $joinDate               = Carbon\Carbon::parse($userEmploymentHistory->joinin_date);
                    $leaveDate              = $userEmploymentHistory->leaving_date? Carbon\Carbon::parse($userEmploymentHistory->leaving_date): Carbon\Carbon::now();
                    $diff                   = $joinDate->diff($leaveDate);
                    $totalYears             = $diff->y;
                    $totalMonths            = $diff->m;
                    $responsibilities       = json_decode($userEmploymentHistory->responsibilities, true);
                    $splitResponsibilities  = array_chunk($responsibilities, 3); // Split into chunks of 3 items
                @endphp
                <span style="margin-bottom: 20px; padding: 10px; border-bottom: 1px solid #ccc;">
{{--                    <p><strong>{{ $key + 1 }}. {{ $userEmploymentHistory->designation }}--}}
{{--                            ({{ $totalYears }} yrs {{ $totalMonths }} months)</strong></p>--}}
{{--                    <p><strong>Company:</strong> {{ $userEmploymentHistory->company_name }}</p>--}}
{{--                    <p><strong>Dates:</strong> {{ $joinDate->format('d M Y') }} - {{ $userEmploymentHistory->leaving_date ? $leaveDate->format('d M Y') : 'Present' }}</p>--}}
{{--                    <p><strong>Area of Expertise:</strong> {{ $userEmploymentHistory->area_of_expertise }}</p>--}}
                    <table style="width: 100%; border-collapse: collapse; margin-bottom: 5px;">
                        <thead>
                        <tr>
                            <th style="border: 1px solid #ccc; padding: 8px;">#</th>
                            <th style="border: 1px solid #ccc; padding: 8px;">Company</th>
                            <th style="border: 1px solid #ccc; padding: 8px;">Designation</th>
                            <th style="border: 1px solid #ccc; padding: 8px;">Experience</th>
                            <th style="border: 1px solid #ccc; padding: 8px;">Dates</th>
                            <th style="border: 1px solid #ccc; padding: 8px;">Area of Expertise</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px;">{{ $i++}}</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">{{ $userEmploymentHistory->company_name }}</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">{{ designationArr
                                ($userEmploymentHistory->designation_id) }}</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">{{ $totalYears }} yrs {{ $totalMonths }} months</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">{{ $joinDate->format('d M Y') }} -
                                    {{ $userEmploymentHistory->leaving_date ? $leaveDate->format('d M Y') : 'Present' }}
                                </td>
                                <td style="border: 1px solid #ccc; padding: 8px;">{{ $userEmploymentHistory->areaOfExpertise }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" style="border: 1px solid #ccc; padding: 8px;">
                                    <strong>Duties/Responsibilities:</strong>
                                    <div style="display: flex; flex-wrap: wrap;">
                                        @foreach($splitResponsibilities as $index => $column)
{{--                                            <ul style="width: 50%; padding: 0 10px; list-style: none;">--}}
                                                @foreach($column as $responsibility)
                                                    <span>{{ $responsibility['label'] }}: {{
                                                    $responsibility['description'] }}</span>
                                                @endforeach
{{--                                            </ul>--}}
                                        @endforeach
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </li>
            
                @if(($key + 1) % 3 == 0)
        </ol>
        <div class="page-break"></div>
        <ol class="list-unstyled">
            @endif
            @endforeach
        </ol>
    </div>
    
    
    <div class="section ">
        <h2>Academic Qualification</h2>
        <table class="avoid-page-break">
            <tr>
                <th>Degree</th>
                <th>Field of Study</th>
                <th>Institution</th>
                <th>Result</th>
                <th>Passing Year</th>
                <th>Duration</th>
                <th>Achievement</th>
            </tr>
            @foreach($users[0]->academicQualification as $academicQualification)
                <tr>
                    <td>{{ $academicQualification->examTitle }}</td>
                    <td>{{ $academicQualification->concentrationMajor }}</td>
                    <td>{{ $academicQualification->instituteName }}</td>
                    <td>{{ $academicQualification->result }} out of {{ $academicQualification->outOf }}</td>
                    <td>{{ $academicQualification->passingYear }}</td>
                    <td>{{ $academicQualification->duration }}</td>
                    <td>{{ $academicQualification->achievement }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    
    <div class="section avoid-page-break">
        <h2>Training Summary</h2>
        <table>
            <tr>
                <th>Training Title</th>
                <th>Country</th>
                <th>Location</th>
                <th>Year</th>
                <th>Duration</th>
                <th>Achievement</th>
            </tr>
            <!-- Rows -->
        </table>
    </div>
    
    <div class="section avoid-page-break">
        <h2>Skills</h2>
        <ul class="list-unstyled">
            <li>Web Development</li>
            <li>API Development</li>
            <li>Database Management</li>
            <li>Version Control</li>
            <li>Server Management</li>
            <li>Problem Solving</li>
        </ul>
    </div>
    
    <div class="section avoid-page-break">
        <h2>Languages</h2>
        <ul class="list-unstyled">
            <li>English - Fluent</li>
            <li>Bengali - Native</li>
            <li>Hindi - Intermediate</li>
        </ul>
    </div>
    
    <div class="section avoid-page-break">
        <h2>Personal Information</h2>
        <table>
            <tr>
                <td>Father's Name</td>
                <td>:</td>
                <td>Mr. XYZ</td>
            </tr>
            <!-- More rows -->
        </table>
    </div>
    
    <div class="section avoid-page-break">
        <h2>References</h2>
        <ul class="list-unstyled">
            <li>Mr. XYZ, Senior Manager, ABC Company, Phone: 0123456789, Email: xyz@example.com</li>
            <li>Mr. XYZ, Director, DEF Company, Phone: 0123456789, Email: xyz@example.com</li>
        </ul>
    </div>
</div>
</body>
</html>
