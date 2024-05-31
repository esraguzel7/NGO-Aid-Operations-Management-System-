@extends('site.extends.main')


{{-- Content Area --}}
@section('content')
<div class="pager-header about-page">
    <div class="container">
        <div class="page-content">
            <h2>About Us</h2>
            <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! route('site.home.show') !!}">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ol>
        </div>
    </div>
</div><!-- /Page Header -->

<section class="about-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="row about-wrap">
            <div class="col-md-6 xs-padding">
                <div class="about-image">
                    <img src="{!! url('/assets/site/img/about.jpg') !!}" alt="about image">
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="about-content">
                    <h2>You are definitely intrigued to <br> discover who we are.</h2>
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                        in the lives of the poor, the abused and the helpless.</p>

                    <h3 class="pt-3">Mission</h3>
                    <p>
                        <strong>Hand in Hand</strong> empowers communities across Europe to uplift one another through direct giving,
                        fostering a network of solidarity where everyone has the opportunity to thrive.
                    </p>
                    <h3>Vision</h3>
                    <p>
                        A Europe where every individual feels supported and empowered to reach their full potential,
                        regardless of their circumstances. </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- /About Section -->

@endsection