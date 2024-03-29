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
                    <img src="{{asset('public')}}/web_site/assets/img/portfolio/{{$images[0]}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{ $val->name }}</h4>
                        <p>{{ $val->name }}</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="{{asset('public')}}/web_site/assets/img/portfolio/{{$images[0]}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1">
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

<section id="pricing" class="section-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h2 class="main-head">Pricing Tables</h2>
            </div>
            <!-- Purple Table -->
            <div class="col-md-4">
                <div class="pricing-table purple">
                    <!-- Table Head -->
                    <div class="pricing-label">Fixed Price</div>
                    <h2>BasicPack 2020</h2>
                    <h5>Made for starters</h5>
                    <!-- Features -->
                    <div class="pricing-features">
                        <div class="feature">Bandwith<span>50 GB</span></div>
                        <div class="feature">Add-On Domains<span>10</span></div>
                        <div class="feature">SSD Storage<span>250 GB</span></div>
                        <div class="feature">Mail Adresses<span>25</span></div>
                        <div class="feature">Support<span>Only Mail</span></div>
                    </div>
                    <!-- Price -->
                    <div class="price-tag">
                        <span class="symbol">$</span>
                        <span class="amount">7.99</span>
                        <span class="after">/month</span>
                    </div>
                    <!-- Button -->
                    <a class="price-button" href="#">Get Started</a>
                </div>
            </div>
            <!-- Turquoise Table -->
            <div class="col-md-4">
                <div class="pricing-table turquoise">
                    <!-- Table Head -->
                    <div class="pricing-label">Fixed Price</div>
                    <h2>ExtendedPack 2020</h2>
                    <h5>Made for experienced users</h5>
                    <!-- Features -->
                    <div class="pricing-features">
                        <div class="feature">Bandwith<span>150 GB</span></div>
                        <div class="feature">Add-On Domains<span>25</span></div>
                        <div class="feature">SSD Storage<span>500 GB</span></div>
                        <div class="feature">Mail Adresses<span>50</span></div>
                        <div class="feature">Support<span>Mail/Phone</span></div>
                    </div>
                    <!-- Price -->
                    <div class="price-tag">
                        <span class="symbol">$</span>
                        <span class="amount">9.99</span>
                        <span class="after">/month</span>
                    </div>
                    <!-- Button -->
                    <a class="price-button" href="#">Get Started</a>
                </div>
            </div>
            <!-- Red Table -->
            <div class="col-md-4">
                <div class="pricing-table red">
                    <!-- Table Head -->
                    <div class="pricing-label">Fixed Price</div>
                    <h2>ProsPack 2020</h2>
                    <h5>Made for professionals/agencies</h5>
                    <!-- Features -->
                    <div class="pricing-features">
                        <div class="feature">Bandwith<span>250 GB</span></div>
                        <div class="feature">Add-On Domains<span>50</span></div>
                        <div class="feature">SSD Storage<span>1 TB</span></div>
                        <div class="feature">Mail Adresses<span>75</span></div>
                        <div class="feature">Support<span>7/24</span></div>
                    </div>
                    <!-- Price -->
                    <div class="price-tag">
                        <span class="symbol">$</span>
                        <span class="amount">12.99</span>
                        <span class="after">/month</span>
                    </div>
                    <!-- Button -->
                    <a class="price-button" href="#">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
