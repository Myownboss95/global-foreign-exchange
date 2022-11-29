@extends('front3.template.app')
@section('title', 'About Us')
@include('front3.template.page-title', [
    'title' => 'About Us',
    'crumbs' => [['url' => route('front.index'), 'name' => 'Home'], ['name' => 'About Us']],
])
@section('content')
    <section id="infoCards" class="info-cards">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="info-card">
                        <div class="info-card-step">01.</div>
                        <div class="info-card-content">
                            <h4 class="info-card-subtitle">We are helpers</h4>
                            <h3 class="info-card-title">Advice and guides</h3>
                            <p class="info-card-desc">Taking the time to manage your money better can really
                                pay off. It can help you stay on top of your bills and save £1,000s each year.
                            </p>
                            <a class="info-card-links" href="#"><i class="fa fa-plus"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="info-card">
                        <div class="info-card-step">02.</div>
                        <div class="info-card-content">
                            <h4 class="info-card-subtitle">Quick & smart</h4>
                            <h3 class="info-card-title">Tools and calculators</h3>
                            <p class="info-card-desc">Use our Budget planner to keep on top of your spending,
                                use our tool to work out what you have left after paying your most important
                                bills.</p>
                            <a class="info-card-links" href="#"><i class="fa fa-plus"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="info-card">
                        <div class="info-card-step">03.</div>
                        <div class="info-card-content">
                            <h4 class="info-card-subtitle">Friendly support</h4>
                            <h3 class="info-card-title">Support in person</h3>
                            <p class="info-card-desc">Support in person, over the phone and online. Web chat
                                is available from 8am to 8pm or you can give us a call for free and impartial
                                money advice.</p>
                            <a class="info-card-links" href="#"><i class="fa fa-plus"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <section id="featured1" class="featured featured-1 bg-overlay bg-overlay-dark2 bg-parallax pb-0">
        <div class="bg-section">
            <img src="{{ asset('front3/images/background/1.jpg') }}" alt="Background" />
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="featured-img">
                        <img src="{{ asset('front3/images/mockups/laptop-mockup.png') }}" alt="Laptop Mockup">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="heading heading-6 mb-50">
                        <h2 class="heading--title text-white">Take Your First Steps to Becoming a Bitcoiner
                            Today!</h2>
                        <p class="heading--desc text-gray mb-20">Now you can start trading Bitcoin, Ethereum
                            and many cryptocurrencies fast, easily and safely from where ever you are. With
                            great margin trading leverage and short sell options available with quick deposit
                            & withdrawal capability, you can start trading with us in seconds.</p>
                        <p class="heading--desc text-gray">Cryptocurrencies have become established
                            investment commodities among major financial institutions, and have even been
                            adopted by countries such as Australia and Japan.</p>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="feature-card">
                                <div class="feature-card-icon">
                                    <img src="{{ asset('front3/images/icons/BitcoinIcon1.png') }}" alt="Bitcoin Icon">
                                </div>
                                <div class="feature-card-content">
                                    <h3 class="feature-card-title text-white">Quick Deposits and Withdrawals</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="feature-card">
                                <div class="feature-card-icon">
                                    <img src="{{ asset('front3/images/icons/BitcoinIcon2.png') }}" alt="Bitcoin Icon">
                                </div>
                                <div class="feature-card-content">
                                    <h3 class="feature-card-title text-white">Reliable and Smart Platform</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="feature-card">
                                <div class="feature-card-icon">
                                    <img src="{{ asset('front3/images/icons/BitcoinIcon3.png') }}" alt="Bitcoin Icon">
                                </div>
                                <div class="feature-card-content">
                                    <h3 class="feature-card-title text-white">Long and Short Selling</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <section id="featured2" class="featured featured-2 pb-50">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="icon-lock"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Protection & Security</h3>
                            <p class="feature-card-desc">Stop loss and take profit orders will help secure
                                your investment. The system will automatically execute trades to realise gains.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="icon-search"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Licensed Exchange</h3>
                            <p class="feature-card-desc">Our customers perform transactions not only in
                                cryptocurrency, but the major world currencies supported by the system.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="icon-puzzle"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Recurring Buys</h3>
                            <p class="feature-card-desc">Invest in digital currency slowly over time by
                                scheduling buys weekly or monthly, allows a trader to profit from a market move.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="icon-recycle"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Unlimited Free Transfers</h3>
                            <p class="feature-card-desc">Send any currency to friends, family members or
                                business associates as many times as you want, 24 hours a day for free.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="icon-layers"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Multi Currency Accounts</h3>
                            <p class="feature-card-desc">Support major currencies: USD, EUR, GBP, and various
                                Cryptocurrencies. Funds exchanged between currencies at market rate.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="icon-documents"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Blockchain Smart Contracts</h3>
                            <p class="feature-card-desc">The first thing to know about blockchain smart
                                contracts is they're not contracts, smart, nor necessarily on a blockchain.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <section id="consultation" class="consultation consultation-1 pb-0">
        <div class="bg-section">
            <img src="{{ asset('front3/images/background/8.jpg') }}" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading heading-2 mb-50">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-7">
                                <h2 class="heading--title text-white"><span class="text-theme">Discover</span><span
                                        class="text-white"> Thousands of
                                        Trading & Investment Opportunities.</span></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <p class="heading--desc">Now you can start trading Bitcoin, Ethereum and many
                                    cryptocurrencies fast, easily and safely from where ever you are. With great
                                    margin trading leverage and short sell options available with quick deposit &
                                    withdrawal capability, you can start trading with us in seconds.</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <p class="heading--desc">Cryptocurrencies have become established investment
                                    commodities among major financial institutions, and have even been adopted by
                                    countries such as Australia and Japan. However, as with any investment there
                                    are risks linked to market movements!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="consultation-form mb-30 bg-white text-center">
                        <div class="consultation--desc">
                            Request a Consultation
                        </div>
                        <form class="mb-0">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <input type="text" class="form-control" name="consultater-name" id="yourname"
                                        placeholder="Your Name" required="">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <input type="email" class="form-control" name="consultater-email" id="youremail"
                                        placeholder="Email">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-select">
                                        <i class="fa fa-angle-down"></i>
                                        <select class="form-control" name="Cryptocurreny" id="Cryptocurreny">
                                            <option value="Cryptocurrencies">Cryptocurrencies</option>
                                            <option value="Bitcoin">Bitcoin</option>
                                            <option value="Litecoin">Litecoin</option>
                                            <option value="Namecoin">Namecoin</option>
                                            <option value="Dogecoin">Dogecoin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <textarea class="form-control" name="consultater-message" id="message" rows="2"
                                        placeholder="Request Details:"></textarea>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="submit" value="Submit Request" name="submit"
                                        class="btn btn--primary btn--block">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="contact-result"></div>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </section>


    <section id="clients1" class="clients clients-1 bg-gray">
        <div class="container">
            <div class="row row-clients">

                <div class="col-xs-12 col-sm-6 col-md-2 client">
                    <img class="center-block" src="{{ asset('front3/images/clients/1.png') }}" alt="client">
                </div>


                <div class="col-xs-12 col-sm-6 col-md-2 client">
                    <img class="center-block" src="{{ asset('front3/images/clients/2.png') }}" alt="client">
                </div>


                <div class="col-xs-12 col-sm-6 col-md-2 client">
                    <img class="center-block" src="{{ asset('front3/images/clients/3.png') }}" alt="client">
                </div>


                <div class="col-xs-12 col-sm-6 col-md-2 client">
                    <img class="center-block" src="{{ asset('front3/images/clients/4.png') }}" alt="client">
                </div>


                <div class="col-xs-12 col-sm-6 col-md-2 client">
                    <img class="center-block" src="{{ asset('front3/images/clients/5.png') }}" alt="client">
                </div>


                <div class="col-xs-12 col-sm-6 col-md-2 client">
                    <img class="center-block" src="{{ asset('front3/images/clients/6.png') }}" alt="client">
                </div>

            </div>

        </div>

    </section>


    <section id="blog" class="blog blog-grid pb-60">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-3 mb-50 text--center">
                        <p class="heading--subtitle">Don’t Miss Latest</p>
                        <h2 class="heading--title">News & Headlines</h2>
                        <p class="heading--desc mb-0">Follow our latest news and thoughts which focuses
                            exclusively on investment strategy guide, blockchain tech, crypto-trading and
                            mining.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
                                <img src="{{ asset('front3/images/blog/grid/1.jpg') }}" alt="entry image" />
                                <div class="entry--overlay"></div>
                            </a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--meta">
                                <a href="#">Crypto News</a><a href="#">Apps</a>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Blockchain-based Mobile Payments Service Developed by Gates</a>
                                </h4>
                            </div>
                            <div class="entry--bio">
                                The Bill and Melinda Gates Foundation are introducing an open-source software to
                                facilitate the creation of payment platforms for developing economies...
                            </div>
                            <div class="entry--footer">
                                <div class="entry--date">
                                    Apr 14, 2018
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
                                <img src="{{ asset('front3/images/blog/grid/2.jpg') }}" alt="entry image" />
                                <div class="entry--overlay"> </div>
                            </a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--meta">
                                <a href="#">Cryptocurrency</a><a href="#">Tech</a>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Governments Throwing Resources at Blockchain Technology!</a>
                                </h4>
                            </div>
                            <div class="entry--bio">
                                Despite the almost libertarian premise and a noble goal of complete
                                decentralization, realistically, blockchain technology will not be able to avoid
                                at least some level..
                            </div>
                            <div class="entry--footer">
                                <div class="entry--date">
                                    Apr 12, 2018
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
                                <img src="{{ asset('front3/images/blog/grid/3.jpg') }}" alt="entry image" />
                                <div class="entry--overlay"> </div>
                            </a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--meta">
                                <a href="#">Bitcoin</a><a href="#">Tech</a>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Southeast Asian Governments Embrace Blockchain Technology</a>
                                </h4>
                            </div>
                            <div class="entry--bio">
                                Hong Kong is embracing blockchain technology search for a new business identity
                                and opportunities. The city has a household name in shipping and finance...
                            </div>
                            <div class="entry--footer">
                                <div class="entry--date">
                                    Apr 11, 2018
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
