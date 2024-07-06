<section id="about" class="about">
    <div class="container">
        <div class="row no-gutters">
            <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" style="background: url('{{asset('public/backend/images/user/about/about.jpg')}}') center no-repeat;background-size: contain"></div>
            <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                <div class="content d-flex flex-column justify-content-center">
                    <h3> Special Qualification</h3>
                    <p class="text-">
                        {{$special_qualification_data}}
                    </p>
                    <div class="row">
                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi {{$aboutSummary_arr['happy_clients_icon']}}"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{$aboutSummary_arr['happy_clients']}}" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>{{substr($aboutSummary_arr['happy_clients_disc'],0,13)}}</strong> {{substr($aboutSummary_arr['happy_clients_disc'],13)}}</p>
                            </div>
                        </div>
                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi {{$aboutSummary_arr['projects_complete_icon']}}"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{$aboutSummary_arr['projects_complete']}}" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>{{substr($aboutSummary_arr['projects_complete_disc'],0,8)}}</strong> {{substr($aboutSummary_arr['happy_clients_disc'],8)}}</p>
                            </div>
                        </div>
                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-clock"></i>
                                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                            </div>
                        </div>
                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-award"></i>
                                <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .content-->
            </div>
        </div>
    </div>
</section>
