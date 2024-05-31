@extends('site.extends.main')


{{-- Content Area --}}
@section('content')
    <div class="pager-header about-page">
        <div class="container">
            <div class="page-content">
                <h2>Donate Now</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{!! route('site.home.show') !!}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{!! route('site.couses.show') !!}">Couses</a></li>
                    <li class="breadcrumb-item active">Donate Now</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="blog-section bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 sm-padding">
                    <div class="blog-items single-post row">
                        <h2 class="pb-4">{{ $operation->description }}</h2>

                        <div class="causes-thumb w-100">
                            <iframe width="100%" height="450" frameborder="0" style="border:0"
                                src="https://www.google.com/maps/embed/v1/place?q={{ $operation->op_region->name }}, {{ $operation->op_region->country }}&amp;key=AIzaSyBqgxxR7tDjGvHqzlzqZjPMReLimOc5CY0">
                            </iframe>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ ($operation->balance_used / $operation->balance_required) * 100 }}%;" aria-valuenow="{{ ($operation->balance_used / $operation->balance_required) * 100 }}" aria-valuenow="{{ ($operation->balance_used / $operation->balance_required) * 100 }}"
                                    aria-valuemin="0" aria-valuemax="100"><span
                                        class="wow cssanimation fadeInLeft">{{ round(($operation->balance_used / $operation->balance_required) * 100) }}%</span></div>
                            </div>
                        </div>
                        <div class="meta-info pt-4">
                            <span>
                                <i class="ti-user"></i> Operation Manager <a
                                    href="#">{{ $operation->op_manager->name }}
                                    {{ $operation->op_manager->surname }}</a>
                            </span>
                            <span>
                                <i class="ti-bookmark"></i> Operation Type <a
                                    href="#">{{ str_replace('-', ' ', $operation->operation_type) }}</a>
                            </span>
                            <span>
                                <i class="ti-location-pin"></i> <a href="">{{ $operation->op_region->name }},
                                    {{ $operation->op_region->country }}</a>
                            </span>
                        </div><!-- Meta Info -->

                        <p>Life is a journey full of ups and downs. Sometimes we walk with joy on sunny days, sometimes we
                            seek shelter in stormy weather. It is precisely in these challenging moments that we extend a
                            helping hand to each other, not only providing financial support, but also hope, strength and
                            solidarity.</p>

                        <p>Donating means much more than just giving a sum of money. It means contributing to the education
                            of a child, meeting the basic needs of a family, supporting the treatment of a patient, in
                            short, changing a life. Every donation you give is a drop, but when it comes together, it
                            creates a sea full of hope. Remember, there is no need for large amounts to do good, it is the
                            smallest contribution made with sincerity and sincerity that matters.</p>

                        <p>If you lend a helping hand to someone today, perhaps someone will lend a hand to you tomorrow
                            when you are in need. In the cycle of life, doing good is the greatest investment we make in
                            others and in ourselves. Remember, kindness is contagious and every act of kindness that starts
                            with a smile helps make the world a better place.</p>

                        <hr>

                        @if ($operation->operation_type == 'cash')
                            <table class="table mw-100" style="width: auto;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Bank Name</th>
                                        <th scope="col">IBAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (\App\Models\BankAccount::all() as $bank)
                                        <tr>
                                            <td>{{ $bank->name }}</td>
                                            <td>{{ $bank->iban }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                        @endif


                        <div class="share-wrap">
                            <h4>Share This Article</h4>
                            <ul class="share-icon">
                                <li><a href="#"><i class="ti-facebook"></i> Facebook</a></li>
                                <li><a href="#"><i class="ti-twitter"></i> Twitter</a></li>
                                <li><a href="#"><i class="ti-instagram"></i> Instagram</a></li>
                                <li><a href="#"><i class="ti-linkedin"></i> Linkedin</a></li>
                            </ul>
                        </div>

                        <div class="comments-wrapper">
                            <div class="comment-form">
                                @if ($errors->hasBag('donate_error'))
                                    <div class="alert alert-danger" role="alert">
                                        <h4 class="mb-0">
                                            {{ $errors->donate_error->first() }}
                                        </h4>
                                    </div>
                                @endif

                                @if ($errors->hasBag('donate_success'))
                                    <div class="alert alert-success" role="alert">
                                        <h4 class="mb-0">
                                            {{ $errors->donate_success->first() }}
                                        </h4>
                                    </div>
                                @endif
                                <h4>Donate Now</h4>
                                <form action="{!! route('site.donatenow.post', ['id' => $operation->id]) !!}" method="post" class="form-horizontal">
                                    @csrf
                                    @if ($operation->operation_type == 'cash')
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-5">
                                                <label for="form_donate_amount">Amount of donation to be made (US
                                                    Dollar)</label>
                                                <input type="number" name="donate_amount" class="form-control"
                                                    id="form_donate_amount" placeholder="Amount of donation" step="5"
                                                    value="5" min="5">
                                            </div>
                                        </div>
                                    @elseif($operation->operation_type == 'furniture')
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-5">
                                                <label for="form_donate_amount">Number of pieces</label>
                                                <input type="number" name="donate_amount" class="form-control"
                                                    id="form_donate_amount" placeholder="Amount of donation" step="1"
                                                    value="1" min="1">
                                            </div>
                                        </div>
                                    @elseif($operation->operation_type == 'food')
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-5">
                                                <label for="form_donate_amount">Estimated weight</label>
                                                <input type="number" name="donate_amount" class="form-control"
                                                    id="form_donate_amount" placeholder="Amount of donation" step="1"
                                                    value="1" min="1">
                                            </div>
                                        </div>
                                    @elseif($operation->operation_type == 'clothing')
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-5">
                                                <label for="form_donate_amount">Number of clothes</label>
                                                <input type="number" name="donate_amount" class="form-control"
                                                    id="form_donate_amount" placeholder="Amount of donation"
                                                    step="1" value="1" min="1">
                                            </div>
                                        </div>
                                    @endif
                                    <button type="submit" class="default-btn">Donate</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Blog Posts -->
            </div>
        </div>
    </section><!-- /Blog Section -->
@endsection
