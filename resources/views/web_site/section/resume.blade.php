<section id="resume" class="resume section-bg">
    <div class="container">
        <div class="section-title">
            <div class="row">
                <div class="col-lg-10">
                    <h2>Resume</h2>
                </div>
                <div class="col-lg-2">
                    <a class="btn btn-block btn-sm text-white" target="_blank"
                       style="background-color: #DB528C" id="downloadCV">
                        Download CV<i class="bx bxs-file-pdf"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h3 class="resume-title">Education</h3>
                @foreach($academic_qualification_data as $education)
                    <div class="resume-item">
                        <h4><span>Exam Title:&nbsp;</span>{{$education['examTitle'] }} </h4>
                        <h5><span>Passing Year:&nbsp;</span>
                            {{ $education['passingYear']}}
                        </h5>
                        <p><span>Institute Name:&nbsp;</span><em>{{$education['instituteName']}}</em></p>
                        <p><span>Major:&nbsp;</span>{{$education['concentrationMajor']}}</p>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-6">
                <h3 class="resume-title">Professional Experience</h3>
                @foreach($employment_history_data as $experience)
                    <div class="resume-item">
                        <h2>{{$experience['company_name']}}
                            @php
                                $joiningDate = \Carbon\Carbon::parse($experience['joinin_date']);
                                $leavingDate = \Carbon\Carbon::parse($experience['leaving_date']);
                                $totalMonths = $leavingDate->diffInMonths($joiningDate);
                                $totalYears = floor($totalMonths / 12); // Calculate total years
                                $remainingMonths = $totalMonths % 12; // Calculate remaining months after removing complete years
                            @endphp
                            ({{ $totalYears }}.{{ $remainingMonths }} )
                        </h2>
                        <h4>{{ designationArr($experience['designation_id'])}}</h4>
                        <h5>
                            {{\Carbon\Carbon::parse($experience['joinin_date'])->format('F Y')}} -
                            @if($experience['leaving_date'] == null)
                                <span class="text-success">Present</span>
                            @else
                                {{\Carbon\Carbon::parse($experience['leaving_date'])->format('F Y')}}
                            @endif
                        </h5>
                        <p><em>{{$experience['company_address']}}</em></p>
                        <h4>Responsibilities:</h4>
                        @php
                            $responsibilityCount = count($experience['responsibilities']);
                            $useList = true;
                        @endphp
                        <div class="row">
                        @foreach($experience['responsibilities'] as $index => $responsibility)
                            @if($index % 5 == 0)
                                <div class="col-lg-6" data-aos="fade-up">
                                    @endif
                                    <ul>
                                        <li>
                                            <strong style="color: #171a1d">
                                                {{$responsibility['label']}}
                                            </strong>:&nbsp;<br>
                                            {{$responsibility['description']}}
                                        </li>
                                    </ul>
                                    @if(($index + 1) % 5 == 0 || $index == count($experience['responsibilities']) - 1)
                                </div>
                            @endif
                        @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
