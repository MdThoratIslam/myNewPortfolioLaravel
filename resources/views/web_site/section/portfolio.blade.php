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


            @foreach($portfolio_title as $index => $val)

            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ strtolower($val->name) }}">
                <div class="portfolio-wrap">
                    @php
                        $images = json_decode($val->portfolio_describe[0]->image, true);
//                        echo "<pre>";
//                    print_r($images);
//                    echo "</pre>";

                    @endphp
                    <img src="web_site/assets/img/portfolio/{{$images[0]}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{ $val->name }}</h4>
                        <p>{{ $val->name }}</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="web_site/assets/img/portfolio/{{$images[0]}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1">
                            <i class="bx bx-plus"></i>
                        </a>
                        <a href="{{route('portfolio_details',$val->id)}}" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
                @endforeach


        </div>
    </div>
</section>

