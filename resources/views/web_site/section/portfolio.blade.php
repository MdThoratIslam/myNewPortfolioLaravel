<section id="portfolio" class="portfolio section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Portfolio</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" data-value="0" class="filter-active">All</li>
                    @foreach($portfolio_title as $index => $val)
                        <li data-filter=".filter-{{ strtolower($val->name) }}" data-value="{{$val->id}}">{{ strtolower($val->name) }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            @foreach($portfolio_title as $portfolio_id => $discription)
                @foreach($discription->portfolio_describe as $key => $val)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{ strtolower($discription->name) }}">
                        <div class="portfolio-wrap">
                            @php
                                $images = json_decode($val->image, true);
                                $title          = $val->title;
                                $project_url    = $val->project_url;
                            @endphp
                            <img src="{{asset('public')}}/web_site/assets/img/portfolio/{{$images[0]}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $discription->name }}</h4>
                                <p>{{ $discription->name }}</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="{{asset('public')}}/web_site/assets/img/portfolio/{{$images[1]}}"
                                   data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$val->description}}">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="{{$project_url}}" title="More Details"><i class="bx bx-link "></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</section>

