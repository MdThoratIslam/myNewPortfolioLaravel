<section id="services" class="services section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Toptal® Full-stack Development Services</h2>
        </div>
        <div class="row">
            @foreach($services as $index => $service)
{{--                @php--}}
{{--                   echo "<pre>";--}}
{{--                     print_r($service);--}}
{{--                     echo "</pre>";--}}
{{--                     die();--}}
{{--                @endphp--}}

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="{{ $service['icon'] }}"></i></div>
                        <h4 class="title">
                            @if(!empty($service['route']))
                                <a href="{{ route($service['route']) }}">
                                    @endif
                                    {{$service['name']}}</a>
                        </h4>
                        <p class="description" style="text-align: justify">{{$service['description']}}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
