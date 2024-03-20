{{--@php--}}
{{--   echo '<pre>';--}}
{{--    print_r($field_of_skill_data);--}}
{{--    echo '</pre>';--}}
{{--    die();--}}
{{--@endphp--}}
<section id="skills" class="skills section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Skills</h2>
            <p>{{$skill_summary_data}}</p>
        </div>

        <div class="row skills-content">
            @foreach($field_of_skill_data as $index => $field_of_skill)
                @if($index % 5 == 0)
                    <div class="col-lg-6" data-aos="fade-up">
                        @endif
                        <div class="progress">
                            <span class="skill">{{$field_of_skill['skill_name']}} <i class="val">{{$field_of_skill['percentage']}}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$field_of_skill['percentage']}}" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        @if(($index + 1) % 5 == 0 || $index == count($field_of_skill_data) - 1)
                    </div> <!-- Close col-lg-6 -->
                @endif
            @endforeach
        </div>
    </div>
</section>
