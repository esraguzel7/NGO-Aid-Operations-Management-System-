@extends('site.extends.main')


{{-- Content Area --}}
@section('content')
    <section class="slider-section">
        <div class="slider-wrapper">
            <div id="main-slider" class="nivoSlider">
                <img src="{!! url('/assets/site/img/slider-1.jpg') !!}" alt="" title="#slider-caption-1" />
                <img src="{!! url('/assets/site/img/slider-2.jpg') !!}" alt="" title="#slider-caption-2" />
                <img src="{!! url('/assets/site/img/slider-3.jpg') !!}" alt="" title="#slider-caption-3" />
            </div><!-- /#main-slider -->

            <div id="slider-caption-1" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                                <h1 class="wow cssanimation leFadeInRight sequence">Better Life for People</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow
                                    you may be the one who needs helping! <br>Forget what you can get and see what you
                                    can give.</p>
                                <a href="{!! route('site.loginandregistervolunteer.show') !!}" class="default-btn wow cssanimation fadeInBottom"
                                    data-wow-delay="0.8s">Join
                                    With Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-1 -->
            <div id="slider-caption-2" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">
                                    Together we <br>can make a Difference</h1>
                                <p class="wow cssanimation fadeInBottom" data-wow-delay="1s">Help today because tomorrow
                                    you may be the one who needs helping! <br>Forget what you can get and see what you
                                    can give.</p>
                                <a href="{!! route('site.loginandregistervolunteer.show') !!}" class="default-btn wow cssanimation fadeInBottom"
                                    data-wow-delay="0.8s">Join
                                    With Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-2 -->
            <div id="slider-caption-3" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                                <h1 class="wow cssanimation lePushReleaseFrom sequence" data-wow-delay="1s">Give a
                                    little. Change a lot.</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow
                                    you may be the one who needs helping! <br>Forget what you can get and see what you
                                    can give.</p>
                                <a href="{!! route('site.loginandregistervolunteer.show') !!}" class="default-btn wow cssanimation fadeInBottom"
                                    data-wow-delay="0.8s">Join
                                    With Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-3 -->
        </div>
    </section><!-- /#slider-Section -->

    <section class="promo-section bd-bottom">
        <div class="promo-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="{!! url('/assets/site/img/icon-1.png') !!}" alt="prmo icon">
                            <h3>Make Donetion</h3>
                            <p>Help today because tomorrow you may be the one who needs helping!</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="{!! url('/assets/site/img/icon-2.png') !!}" alt="prmo icon">
                            <h3>Fundrising</h3>
                            <p>Help today because tomorrow you may be the one who needs helping! </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="{!! url('/assets/site/img/icon-3.png') !!}" alt="prmo icon">
                            <h3>Become A Volunteer</h3>
                            <p>Help today because tomorrow you may be the one who needs helping! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Promo Section -->

    <section class="causes-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Recent Causes</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div><!-- /Section Heading -->
            <div class="causes-wrap row">

                @foreach (\App\Models\Operation::where('operation_type', 'cash')->where('is_complated', false)->limit(3)->get() as $operation)
                    <div class="col-md-4 xs-padding">
                        <div class="causes-content">

                            <div class="causes-thumb">
                                <img src="{{ asset('assets/site/img/causes.jpg') }}" alt="causes">
                                <a href="{!! route('site.donatenow.show', ['id' => $operation->id]) !!}" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{ ($operation->balance_used / $operation->balance_required) * 100 }}%;" aria-valuenow="{{ ($operation->balance_used / $operation->balance_required) * 100 }}"
                                        aria-valuemin="0" aria-valuemax="100"><span
                                            class="wow cssanimation fadeInLeft">{{ round(($operation->balance_used / $operation->balance_required) * 100) }}%</span></div>
                                </div>
                            </div>
                            <div class="causes-details">
                                <h3>{{ $operation->description }}</h3>
                                <p>
                                    @switch(rand(1,6))
                                        @case(1)
                                            Help today because tomorrow you may be the one who needs more helping!
                                        @break

                                        @case(2)
                                            Give hope for tomorrow, help today.
                                        @break

                                        @case(3)
                                            Kindness is contagious, spread it around.
                                        @break

                                        @case(4)
                                            Lend a hand, save tomorrows.
                                        @break

                                        @case(5)
                                            Drop by drop, help becomes an ocean.
                                        @break

                                        @default
                                            What you share today will be enough for you tomorrow.
                                    @endswitch

                                </p>
                                <div class="donation-box">
                                    <p><i class="ti-bar-chart"></i>Goal: ${{ $operation->balance_required }}</p>
                                    <p><i class="ti-thumb-up"></i>Raised: ${{ $operation->balance_used }}</p>
                                </div>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div><!-- /Causes-1 -->
                @endforeach

            </div>
        </div>
    </section><!-- /Causes Section -->

    <section class="about-section bd-bottom shape circle padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 xs-padding">
                    <div class="profile-wrap">
                        <h3>Esra Güzel <span>CEO & Founder of Charitify.</span></h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can
                            make in the lives of the poor, the abused and the helpless.</p>
                    </div>
                </div>
                <div class="col-md-8 xs-padding">
                    <div class="about-wrap row">
                        <div class="col-md-6 xs-padding">
                            <h3>Our History</h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU
                                can make in the lives of the poor.</p>
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                        <div class="col-md-6 xs-padding">
                            <h3>Our Mission</h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU
                                can make in the lives of the poor.</p>
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Causes Section -->

    <section id="counter" class="counter-section">
        <div class="container">
            <ul class="row counters">
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-money"></i>
                        <h3 class="counter">{{ \App\Models\Operation::sum('balance_used') }}</h3>
                        <h4 class="text-white">Money Donated</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-face-smile"></i>
                        <h3 class="counter">{{ \App\Models\User::where('account_status', true)->count() }}</h3>
                        <h4 class="text-white">Volunteer Around The World</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-user"></i>
                        <h3 class="counter">{{ \App\Models\IndigentPeoples::count() }}</h3>
                        <h4 class="text-white">People Impacted</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-comments"></i>
                        <h3 class="counter">{{ \App\Models\Operation::where('is_complated', true)->count() }}</h3>
                        <h4 class="text-white">Successfuly Couses</h4>
                    </div>
                </li>
            </ul>
        </div>
    </section><!-- Counter Section -->

    {{-- <section class="events-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Upcoming Events</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div><!-- /Section Heading -->
            <div id="event-carousel" class="events-wrap owl-Carousel">
                <div class="events-item">
                    <div class="event-thumb">
                        <img src="img/events-1.jpg" alt="events">
                    </div>
                    <div class="event-details">
                        <h3>Let's talk about the poor children.</h3>
                        <div class="event-info">
                            <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                            <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                        </div>
                        <p>Help today because tomorrow you may be the one who needs more helping!</p>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                </div><!-- Event-1 -->
                <div class="events-item">
                    <div class="event-thumb">
                        <img src="img/events-2.jpg" alt="events">
                    </div>
                    <div class="event-details">
                        <h3>Insure clean water to everyone in Africa.</h3>
                        <div class="event-info">
                            <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                            <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                        </div>
                        <p>Help today because tomorrow you may be the one who needs more helping!</p>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                </div><!-- Event-2 -->
                <div class="events-item">
                    <div class="event-thumb">
                        <img src="img/events-3.jpg" alt="events">
                    </div>
                    <div class="event-details">
                        <h3>Nepal Earthquake Clean Water Initiative.</h3>
                        <div class="event-info">
                            <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                            <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                        </div>
                        <p>Help today because tomorrow you may be the one who needs more helping!</p>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                </div><!-- Event-3 -->
            </div>
        </div>
    </section> --}}

@endsection
