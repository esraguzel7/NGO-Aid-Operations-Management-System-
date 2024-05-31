@extends('site.extends.main')


{{-- Content Area --}}
@section('content')
    <div class="pager-header about-page">
        <div class="container">
            <div class="page-content">
                <h2>Couses</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{!! route('site.home.show') !!}">Home</a></li>
                    <li class="breadcrumb-item active">Couses</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="causes-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="causes-wrap row">
                @foreach (\App\Models\Operation::where('operation_type', 'cash')->where('is_complated', false)->get() as $operation)
                    <div class="col-md-4 padding-15">
                        <div class="causes-content">
                            <div class="causes-thumb">
                                <img src="{{ asset('assets/site/img/causes.jpg') }}" alt="causes">
                                <a href="{!! route('site.donatenow.show', ['id' => $operation->id]) !!}" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{ ($operation->balance_used / $operation->balance_required) * 100 }}%;" aria-valuenow="{{ ($operation->balance_used / $operation->balance_required) * 100 }}"
                                        aria-valuemin="0" aria-valuemax="100"><span
                                            class="wow cssanimation fadeInLeft">{{ ($operation->balance_used / $operation->balance_required) * 100 }}%</span></div>
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
@endsection
