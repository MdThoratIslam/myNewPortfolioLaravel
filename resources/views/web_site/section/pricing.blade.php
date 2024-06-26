@if(count($pricing_arr) == 3)
<section class="pricing-plans" id="pricing">
    @foreach($pricing_arr as $pricing)
        <div class="pricing-card {{strtolower($pricing['name'])}}">
            <div class="heading">
                <h4>{{strtoupper($pricing['name'])}}</h4>
                <p>{{ $pricing['description']}}</p>
            </div>
            <p class="price">${{ $pricing['price'] }}</p>
            <h5><span>{{$pricing['delivery_time']}}</span>&nbsp;and&nbsp;{{$pricing['revision']}}</h5>
            <ul class="features" style="list-style-type: none;">
                @foreach($pricing['pricingDetails'] as $detail)
                    <li>
                        @if($detail->icon === 'check' && $detail->xmark !== 'xmark')
                            <i class="fa fa-solid fa-check "></i>
                            <strong>{{ $detail->name }}</strong>
                        @else
                            <i class="fa fa-solid fa-xmark"></i>
                            <strong class="xmark">{{ $detail->name }}</strong>
                        @endif
                    </li>
                @endforeach
            </ul>
            <button class="cta-btn" data-type="{{ $pricing['type'] }}" data-description="{{$pricing['description']}}" data-price="{{$pricing['price']}}">
                Get Started
            </button>
        </div>
    @endforeach
</section>
@endif
<div id="myModal" class="modal" data-backdrop="static" data-keyboard="false" data-focus="true">
    <div class="modal-content small">
        <span class="close float-left">&times;</span>
        <h4 class="modal-header text-success float-left" id="package_name"></h4>
        <p class="text-success text-center" id="description"></p>
        <form action="" method="post" role="form" class="php-email-form">
            @csrf
            <input type="hidden" name="type"  id="type">
            <div class="form-group">
                <label for="service">Service</label>
                <select name="service" id="service" class="form-control">
                </select>
            </div>

            <div class="form-group mt-3">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>

            <div class="form-group mt-3">
                <input type="number" name="phone" class="form-control" id="phone" placeholder="Your Phone" required>
            </div>
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>

            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>

            <div class="my-3">
{{--                <div class="loading">Loading</div>--}}
                <div class="error-message"></div>
                <div class="sent-message">
                    Your message has landed safely in my inbox, like a gentle breeze on a sunny day. Thank you!
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-success">Send Message</button>
            </div>
        </form>
    </div>
</div>
