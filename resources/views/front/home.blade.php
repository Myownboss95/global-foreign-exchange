{{-- @include("header") --}}
@include('front.template.header')


<!-- slideshow content begin -->
<div class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
    <div id="particles-js" class="uk-light in-slideshow uk-background-contain" data-src="{{asset('front/img/in-equity-decor-1.svg')}}"
        data-uk-img data-uk-slideshow>
        <hr>
        <ul class="uk-slideshow-items">
            <li class="uk-flex uk-flex-middle">
                <div class="uk-container">
                    <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-2@s in-slide-text">
                            <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m"><span
                                    class="uk-label uk-label-success in-label-small">{{__('New')}}
                                </span>{{__('Trade the markets directly with leading trading platforms.')}}</p>
                            <h1 class="uk-heading-small">{{__("Buy, sell and invest  your ")}} <span class="in-highlight">{{__('coin')}}</span>
                                {{__('to get  over 30% ROI')}}</h1>
                            <p class="uk-text-lead uk-visible@m">
                                {{__('Get the most accurate market data, alerts, conversions,tools and more — all within the same app.')}}
                            </p>
                            <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s"
                                data-uk-grid data-market="TSLA,GOOGL,AAPL">
                                <div>
                                    <div
                                        class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{asset('front/img/in-lazy.gif')}}" data-src="{{asset('front/img/in-symbol-tesla.svg')}}" alt="ticker"
                                                width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">TSLA<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span
                                                    class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{asset('front/img/in-lazy.gif')}}" data-src="{{asset('front/img/in-symbol-google.svg')}}"
                                                alt="ticker" width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">GOOGL<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span
                                                    class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-visible@m">
                                    <div
                                        class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{asset('front/img/in-lazy.gif')}}" data-src="{{asset('front/img/in-symbol-apple.svg')}}" alt="ticker"
                                                width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">AAPL<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span
                                                    class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="in-slide-img">
                            <img src="{{ asset('front/img/in-lazy.gif') }}"
                                data-src="{{ asset('front/img/in-equity-slide-1.png') }}" alt="image-slide" style="height: 600px; width: auto" data-uk-img>
                        </div>
                    </div>
                </div>
            </li>
            
            <li class="uk-flex uk-flex-middle">
                <div class="uk-container">
                    <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-2@s in-slide-text">
                            <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m">
                                <span class="uk-label uk-label-success in-label-small">{{__('New')}}</span>
                                {{__('Trade the markets directly with leading trading platforms.')}}
                            </p>
                            <h1 class="uk-heading-small">{{__('The world most powerful crypto ')}} <span
                                    class="in-highlight">{{__('investment platform.')}}</span></h1>
                            <p class="uk-text-lead uk-visible@m">
                                {{__('Guarantees returns on investment')}}</p>
                            <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s"
                                data-uk-grid data-market="MCD,AMZN,MSFT">
                                <div>
                                    <div
                                        class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{ asset('front/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front/img/in-symbol-mcdonalds.svg') }}" alt="ticker"
                                                width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">MCD<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span
                                                    class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{ asset('front/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front/img/in-symbol-amazon.svg') }}" alt="ticker"
                                                width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">AMZN<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span
                                                    class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-visible@m">
                                    <div
                                        class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{ asset('front/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front/img/in-symbol-microsoft.svg') }}" alt="ticker"
                                                width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">MSFT<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span
                                                    class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="in-slide-img">
                            <img src="{{ asset('front/img/in-lazy.gif') }}"
                                data-src="{{ asset('front/img/in-equity-slide-2.png') }}" alt="image-slide"
                                data-uk-img style="height: 600px; width: auto">
                        </div>
                    </div>
                </div>
            </li>
            <li class="uk-flex uk-flex-middle">
                <div class="uk-container">
                    <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-2@s in-slide-text">
                            <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m"><span
                                    class="uk-label uk-label-success in-label-small">{{__('New')}}
                                </span>{{__('Invest the markets directly with our investment platforms')}}</p>
                            <h1 class="uk-heading-small">{{__("With our well structured plan you can invest with little money of")}} <span class="in-highlight">{{__('$100')}}</span></h1>
                            <p class="uk-text-lead uk-visible@m">
                                {{__('Get the most accurate market data, alerts, conversions,tools and more — all within the same app.')}}
                            </p>
                            <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s"
                                data-uk-grid data-market="TSLA,GOOGL,AAPL">
                                <div>
                                    <div
                                        class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{asset('front/img/in-lazy.gif')}}" data-src="{{asset('front/img/in-symbol-tesla.svg')}}" alt="ticker"
                                                width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">TSLA<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span
                                                    class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{asset('front/img/in-lazy.gif')}}" data-src="{{asset('front/img/in-symbol-google.svg')}}"
                                                alt="ticker" width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">GOOGL<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span
                                                    class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-visible@m">
                                    <div
                                        class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{asset('front/img/in-lazy.gif')}}" data-src="{{asset('front/img/in-symbol-apple.svg')}}" alt="ticker"
                                                width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">AAPL<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span
                                                    class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="in-slide-img">
                            <img src="{{ asset('front/img/in-lazy.gif') }}"
                                data-src="{{ asset('front/img/in-equity-slide-1.png') }}" alt="image-slide" style="height: 600px; width: auto" data-uk-img>
                        </div>
                    </div>
                </div>
            </li>
            <li class="uk-flex uk-flex-middle">
                <div class="uk-container">
                    <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-2@s in-slide-text">
                            <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m">
                                <span class="uk-label uk-label-success in-label-small">{{__('New')}}</span>
                                {{__('Invest in markets directly with our leading investment platform.')}}
                            </p>
                            <h1 class="uk-heading-small">{{__('Enjoy over ')}} <span
                                    class="in-highlight">{{__('30% bonus ')}}</span>{{__('on a single investment')}}</h1>
                            <p class="uk-text-lead uk-visible@m">
                                {{__('Bring your Investment way  beyond the space of your investment account.')}}</p>
                            <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s"
                                data-uk-grid data-market="MCD,AMZN,MSFT">
                                <div>
                                    <div
                                        class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{ asset('front/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front/img/in-symbol-mcdonalds.svg') }}" alt="ticker"
                                                width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">MCD<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span
                                                    class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{ asset('front/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front/img/in-symbol-amazon.svg') }}" alt="ticker"
                                                width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">AMZN<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span
                                                    class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-visible@m">
                                    <div
                                        class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{ asset('front/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front/img/in-symbol-microsoft.svg') }}" alt="ticker"
                                                width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">MSFT<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span
                                                    class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="in-slide-img">
                            <img src="{{ asset('front/img/in-lazy.gif') }}"
                                data-src="{{ asset('front/img/in-equity-slide-2.png') }}" alt="image-slide"
                                data-uk-img style="height: 600px; width: auto">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="uk-container">
            <div class="uk-position-relative" data-uk-grid>
                <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-right uk-flex uk-flex-middle"></ul>
            </div>
        </div>
    </div>
</div>
<!-- slideshow content end -->

<!-- section content begin -->
<div class="uk-section uk-section-primary uk-preserve-color in-equity-1" style="padding-bottom: 40px;">
    <div class="uk-container">
        <div style="margin-bottom: 12px">
            <div style="display:flex; justify-content: space-between">
                <strong style="font-size: 18px">{{__('Popular products')}}</strong>
                <a href="{{route('register')}}" class="uk-button uk-button-secondary uk-border-rounded" style="z-index: 99">
                    {{__('Create an Account')}}
                </a>
            </div>
        </div>
        <div class="uk-grid-match uk-grid-medium uk-child-width-1-2@m uk-child-width-1-2@s uk-margin-bottom"
            data-uk-grid>
            @foreach ($popularplans as $popplan)
                
            
            <div>
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                    <div class="uk-flex uk-flex-middle">
                        <span class="in-product-name @if ($popplan->name == 'Premium')
                            red 
                            @else green
                        @endif
                        ">{{ Str::substr(Str::upper($popplan->name), 0, 2) }}</span>
                        <h5 class="uk-margin-remove">{{ $popplan->name }} Plan</h5>
                    </div>
                    <ul class="uk-list uk-list-bullet">
                        <li> {{ $popplan->tenure}} days trading tenure.</li>
                        <li>{{ $popplan->bonus}}% investment bonus</li>
                        @foreach ($popplan->features as $featuresP )
                        <li>{{ $featuresP->name }}</li>
                        @endforeach
                        
                    </ul>
                    <a href="/register"
                        class="uk-button uk-button-text uk-float-right uk-position-bottom-right">{{__('Get Started')}}<i
                            class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
{{-- <div class="uk-section in-equity-2 uk-background-contain uk-background-center" data-src="{{asset('front/img/in-equity-2-bg.png')}}" style="background-image:
                                    url('{{asset('front/img/in-equity-2-bg.png')}}');"
    data-uk-img>
    <div class="uk-container uk-margin-top">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-2xlarge@m uk-text-center">
                <span class="uk-label uk-label-warning">{{__('Fast execution, low latency')}}<i
                        class="fas fa-arrow-right fa-xs uk-margin-small-left"></i></span>
                <h1 class="uk-margin-top">{{__('Your premium choice for trading currencies & stocks online')}}</h1>
                <p class="uk-text-lead uk-margin-medium-top">
                    {{__('Harness the power of technology to make a quicker, smarter and more precise decision on CFD currency pairs, stocks, commodities and more')}}
                    </p>
            </div>
            <div class="uk-width-3-4@m uk-margin-medium-top">
                <img class="uk-align-center" src="{{asset('front/img/in-lazy.gif')}}" data-src="{{asset('front/img/in-equity-2-img.png')}}" alt="image"
                    width="758" height="334" data-uk-img>
            </div>
            <div class="uk-width-2xlarge@m uk-margin-medium-top">
                <div class="uk-grid uk-child-width-1-4@m uk-child-width-1-4@s uk-text-center in-feature-box"
                    data-uk-grid>
                    <a href="#">
                        <span class="in-icon-wrap">
                            <img src="{{asset('front/img/in-lazy.gif')}}" data-src="{{asset('front/img/in-equity-2-icon-1.svg')}}" alt="icon-1"
                                width="35" height="42" data-uk-img>
                        </span>
                        <p class="uk-margin-top">{{__('Trading calculators')}}</p>
                    </a>
                    <a href="#">
                        <span class="in-icon-wrap">
                            <img src="{{asset('front/img/in-lazy.gif')}}" data-src="{{asset('front/img/in-equity-2-icon-2.svg')}}" alt="icon-2"
                                width="38" height="42" data-uk-img>
                        </span>
                        <p class="uk-margin-top">{{__('Market analysis')}}</p>
                    </a>
                    <a href="#">
                        <span class="in-icon-wrap">
                            <img src="{{asset('front/img/in-lazy.gif')}}" data-src="{{asset('front/img/in-equity-2-icon-3.svg')}}" alt="icon-3"
                                width="42" height="42" data-uk-img>
                        </span>
                        <p class="uk-margin-top">{{__('Market reviews')}}</p>
                    </a>
                    <a href="#">
                        <span class="in-icon-wrap">
                            <img src="{{asset('front/img/in-lazy.gif')}}" data-src="{{asset('front/img/in-equity-2-icon-4.svg')}}" alt="icon-4"
                                width="42" height="42" data-uk-img>
                        </span>
                        <p class="uk-margin-top">Trading academy</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section in-equity-3 in-offset-top-20" >
    <div class="uk-container uk-margin-large-bottom p-5" style="padding-top:120px">
        <div class="uk-grid uk-flex uk-flex-middle">
            <div class="uk-width-expand@m">
                <h1 class="uk-margin-small-bottom">{{__('Investment ')}} <span class="in-highlight">{{__(' Calculator')}}</span></h1>
                <h3 class="uk-margin-top uk-text-warning">
                    {{__('Calculate your potential investment earnings here')}}
                </h3>
                <hr class="uk-margin-medium-top uk-margin-medium-bottom">
                <ul class="uk-list in-list-check">
                    <li>{{__('Negative balance protection')}}</li>
                    <li>{{__('Segregated and supervised client funds')}}</li>
                    <li>{{__('Instant deposit & fast withdrawal')}}</li>
                </ul>
            </div>
            <div class="uk-width-2xlarge uk-flex uk-flex-right uk-flex-center@s">
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded in-margin-top-60@s">
                    <div class="row">
                        <div class="col-12" >
                            <form
                                    id="contact-form"
                                    class="uk-form uk-grid-small"
                                    data-uk-grid
                                    style="padding:80px 20px 80px 20px;"
                                >
                                    <div class="uk-width-1-1@s uk-inline">
                                        <span class="uk-form-icon fas fa-pen fa-sm"></span>
                                        <input
                                            class="uk-input uk-border-rounded"
                                            id="amount"
                                            name="amount"
                                            type="number"
                                            required
                                            placeholder="{{ __('Amount to Invest') }}"
                                        >
                                        <small class="help-block"></small>
                                    </div>
                                <div class="uk-width-1-1@s uk-inline">
                                    <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                                    <select id="plan_id" class="uk-input uk-border-rounded" required>
                                        <option value="">Select Plan</option>
                                        @foreach ( $plans as $list )
                                        <option value="{{$list->id}}">{{$list->name}} Plan</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="uk-width-1-1">
                                    <button
                                        class="uk-button uk-button-primary uk-border-rounded uk-align-right"
                                        id="calculateRoi"
                                        type="submit"
                                        name="submit"
                                    >{{ __('Calculate ROI') }}</button>
                                </div>
                                <div id="displayResult"></div>
                            </form>
                            

                        </div>
                    </div>
                    {{-- <div id="tradingview-widget"></div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
{{-- testimonial --}}
<div class="container-fluid p-5">
    <div class="p-5">
        <div class="uk-container uk-margin-large-bottom p-5" style="padding-top:120px">
        <div class="uk-grid uk-flex uk-flex-middle">
            <div class="uk-width-expand@m">
    <h1 class="uk-margin-small-bottom">{{__('Clients ')}} <span class="in-highlight">{{__(' Testimonials')}}</span></h1>
                <h3 class="uk-margin-top uk-text-warning">
                    {{__('See what our clients are saying')}}
                </h3>
            </div>
        </div>
        </div>
    </div>





    @include('front.testimonials')
</div>
{{-- end testimonial --}}
<!-- section content begin -->
<div class="uk-section uk-padding-large">
    <div class="uk-container in-wave-4">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-1-1 uk-text-center">
                <h1 class="uk-margin-medium-bottom"><span class="in-highlight">Complete</span> package for every traders</h1>
            </div>
            <div class="uk-width-3-4@m">
                <div class="uk-grid-collapse  uk-child-width-1-2@m in-wave-pricing" data-uk-grid>
                    @foreach ($plans as $plan)
                    <div style="border:1px solid #fcb42d; margin:5px 0px">
                        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium">
                            <p class="uk-text-small uk-text-uppercase">funding<span class="uk-label uk-border-pill uk-text-small uk-margin-small-left">${{$plan->min_investment.'-$'.$plan->max_investment}} </span></p>
                            
                            <h2 class="uk-margin-top uk-margin-remove-bottom">{{ $plan->name }} Plan</h2>
                            <p class="uk-text-lead uk-text-muted uk-margin-remove-top">{{ $plan->tenure}} days</p>
                            <hr>
                            <ul class="uk-list uk-list-bullet">
                                <li> {{ $plan->tenure}} days trading tenure.</li>
                                <li>{{ $plan->bonus}}% investment bonus</li>
                                @foreach ($plan->features as $features )
                                <li>{{ $features->name }}</li>
                                @endforeach
                                
                            </ul>
                            <a href="{{ route('register')}}" class="uk-button uk-button-default uk-border-rounded uk-align-center">Open an account<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>
                        </div>
                    </div>
                    @endforeach
                    
                    {{-- <div>
                        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-large">
                            <p class="uk-text-small uk-text-uppercase">Minimum funding<span class="uk-label uk-border-pill uk-text-small uk-margin-small-left">USD 500</span></p>
                            <h2 class="uk-margin-top uk-margin-remove-bottom">Platinum account</h2>
                            <p class="uk-text-lead uk-text-muted uk-margin-remove-top">Receive even tighter spreads and commissions</p>
                            <hr>
                            <ul class="uk-list uk-list-bullet">
                                <li>Award-winning trading platform*</li>
                                <li>Wide range of charting tools</li>
                                <li>Fast, automated excecution</li>
                                <li>Expert news & analysis</li>
                                <li>Competitive spreads</li>
                                <li>Advanced trading tools</li>
                                <li>Tax-free spread betting profits</li>
                            </ul>
                            <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-align-center">Open an account<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="uk-width-1-1">
                <div class="uk-grid-medium uk-child-width-1-2@s uk-child-width-1-5@m uk-text-center uk-margin-large-top" data-uk-grid>
                    <div>
                        <img src="img/in-lazy.gif" data-src="img/in-wave-award.svg" alt="wave-award" width="71" height="58" data-uk-img>
                        <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best CFD Broker</h6>
                        <p class="uk-text-small uk-margin-remove-top">TradeON Summit 2020</p>
                    </div>
                    <div>
                        <img src="img/in-lazy.gif" data-src="img/in-wave-award.svg" alt="wave-award" width="71" height="58" data-uk-img>
                        <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Trading Experience</h6>
                        <p class="uk-text-small uk-margin-remove-top">Jordan Forex EXPO 2020</p>
                    </div>
                    <div>
                        <img src="img/in-lazy.gif" data-src="img/in-wave-award.svg" alt="wave-award" width="71" height="58" data-uk-img>
                        <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Execution Broker</h6>
                        <p class="uk-text-small uk-margin-remove-top">Forex EXPO Dubai 2020</p>
                    </div>
                    <div>
                        <img src="img/in-lazy.gif" data-src="img/in-wave-award.svg" alt="wave-award" width="71" height="58" data-uk-img>
                        <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Trading Platform</h6>
                        <p class="uk-text-small uk-margin-remove-top">London Summit 2020</p>
                    </div>
                    <div class="uk-visible@m">
                        <img src="img/in-lazy.gif" data-src="img/in-wave-award.svg" alt="wave-award" width="71" height="58" data-uk-img>
                        <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Broker Asia</h6>
                        <p class="uk-text-small uk-margin-remove-top">iFX EXPO 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section in-equity-5">
    <div class="uk-container uk-margin-remove-bottom">
        <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
            <div>
                <div class="uk-flex uk-flex-left in-award">
                    <div class="uk-margin-small-right">
                        <img src="{{asset('front/img/in-lazy.gif')}}" data-src="{{asset('front/img/in-equity-5-award-1.svg')}}" alt="award-1"
                            width="91" height="82" data-uk-img>
                    </div>
                    <div>
                        <h6>{{__('Best Mobile Trading App')}}</h6>
                        <p class="provider">{{__('European CEO Magazine')}}</p>
                        <p class="year">2019</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-flex uk-flex-left in-award">
                    <div class="uk-margin-small-right">
                        <img src="{{asset('front/img/in-lazy.gif')}}" data-src="{{asset('front/img/in-equity-5-award-2.svg')}}" alt="award-2"
                            width="91" height="82" data-uk-img>
                    </div>
                    <div>
                        <h6>{{_('Best Forex Ecn Broker')}}</h6>
                        <p class="provider">{{__('UK Forex awards')}}</p>
                        <p class="year">2020</p>
                    </div>
                </div>
            </div>
            <div class="uk-visible@m">
                <div class="uk-flex uk-flex-left in-award">
                    <div class="uk-margin-small-right">
                        <img src="{{asset('front/img/in-lazy.gif')}}" data-src="{{asset('front/img/in-equity-5-award-3.svg')}}" alt="award-3"
                            width="91" height="82" data-uk-img>
                    </div>
                    <div>
                        <h6>{{__('Best Trading Conditions')}}</h6>
                        <p class="provider">{{__('Forex report magazine')}}</p>
                        <p class="year">2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->

<!-- section content begin -->
<div class="uk-section uk-section-primary uk-preserve-color in-equity-6 uk-background-contain uk-background-center"
    data-src="{{asset('front/img/in-equity-decor-2.svg')}}" data-uk-img>
    <div class="uk-container uk-margin-small-bottom">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-2xlarge@m uk-text-center">
                <h1>{{__('Gain global access to financial stability')}}</h1>
                <p class="uk-text-lead">{{__('Glofex gives every investor opportunities to choose from our varieties of plans to make informed decisions')}}</p>
            </div>
            <div class="uk-width-3-4@m uk-margin-medium-top">
                <div class="uk-flex uk-flex-center uk-flex-middle button-app">
                    <div>
                        <a href="/register" class="uk-button uk-button-secondary uk-border-rounded m-2" style="margin-right: 10px">{{__('Open your account')}}<i
                                class="fas fa-arrow-circle-right uk-margin-small-left "></i></a>
                    </div>
                    <div>
                        <a href="/login" class="uk-button uk-button-secondary uk-border-rounded ml-2">
                            {{__('Log into your account')}}
                            <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- section content end -->
</main>
@include('front.template.footer')
