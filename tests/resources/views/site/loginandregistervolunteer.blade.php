@extends('site.extends.main')


{{-- Content Area --}}
@section('content')
    <div class="pager-header about-page">
        <div class="container">
            <div class="page-content">
                <h2>Login or Register</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{!! route('site.home.show') !!}">Home</a></li>
                    <li class="breadcrumb-item active">Login or Register</li>
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
                        <h2>Are you already a member?</h2>
                        <h3 class="pt-3">Sign in</h3>
                        <form action="{!! route('site.loginandregistervolunteer.login.post') !!}" method="post">
                            @if ($errors->hasBag('login_error'))
                                <div class="alert alert-danger" role="alert">
                                    <h4 class="mb-0">
                                        {{ $errors->login_error->first() }}
                                    </h4>
                                </div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="form_login_email">Email address</label>
                                <input type="email" class="form-control" name="email" id="form_login_email"
                                    aria-describedby="form_login_email_help" placeholder="Enter email">
                                <small id="form_login_email_help" class="form-text text-muted">We'll never share your email
                                    with anyone
                                    else.</small>
                            </div>
                            <div class="form-group">
                                <label for="form_login_password">Password</label>
                                <input type="password" name="password" class="form-control" id="form_login_password"
                                    placeholder="Password">
                            </div>
                            <button type="submit" class="default-btn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row about-wrap pt-5">
                <div class="col-md-6 xs-padding order-md-2">
                    <div class="about-image">
                        <img src="{!! url('/assets/site/img/picture1.jpg') !!}" alt="about image">
                    </div>
                </div>
                <div class="col-md-6 xs-padding order-md-1">
                    <div class="about-content">
                        <h2>Would you like to join us?</h2>
                        <h3 class="pt-3">Create Account</h3>
                        <form action="{!! route('site.loginandregistervolunteer.register.post') !!}" method="post">
                            @if ($errors->hasBag('register_error'))
                                <div class="alert alert-danger" role="alert">
                                    <h4 class="mb-0">
                                        {{ $errors->register_error->first() }}
                                    </h4>
                                </div>
                            @endif

                            @if ($errors->hasBag('register_success'))
                                <div class="alert alert-success" role="alert">
                                    <h4 class="mb-0">
                                        {{ $errors->register_success->first() }}
                                    </h4>
                                </div>
                            @endif

                            @csrf
                            <div class="form-group">
                                <label for="form_register_email">Email address</label>
                                <input type="email" class="form-control" name="email" id="form_register_email"
                                    aria-describedby="form_register_email_help" placeholder="Enter email">
                                <small id="form_register_email_help" class="form-text text-muted">We'll never share your
                                    email
                                    with anyone
                                    else.</small>
                            </div>
                            <div class="form-group">
                                <label for="form_register_password">Password</label>
                                <input type="password" name="password" class="form-control" id="form_register_password"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="form_register_name">Name</label>
                                <input type="text" name="name" class="form-control" id="form_register_name"
                                    placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="form_register_surname">Surname</label>
                                <input type="text" name="surname" class="form-control" id="form_register_surname"
                                    placeholder="Surname">
                            </div>
                            <div class="form-group">
                                <label for="form_register_phone">Phone Number</label>
                                <input type="text" name="phone" class="form-control" id="form_register_phone"
                                    placeholder="Phone Number">
                            </div>
                            <div class="form-group row px-4">
                                <div class="form-check col-sm-6">
                                    <input class="form-check-input" type="radio" name="gender"
                                        id="form_register_gender_male" value="male">
                                    <label class="form-check-label" for="form_register_gender_male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check col-sm-6">
                                    <input class="form-check-input" type="radio" name="gender"
                                        id="form_register_gender_female" value="female">
                                    <label class="form-check-label" for="form_register_gender_female">
                                        Female
                                    </label>
                                </div>
                            </div>
                            <div class="form-group px-4">
                                <input class="form-check-input" name="transportation" type="checkbox" value=""
                                    id="form_register_transportation"
                                    aria-describedby="form_register_transportation_help">
                                <label class="form-check-label" for="form_register_transportation">
                                    Transportation
                                </label>
                                <small id="form_register_transportation_help" class="form-text text-muted">
                                    I can go to a planned event with my own means
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="form_register_phone">Annual Income</label>
                                <input type="number" name="annual_income" class="form-control"
                                    id="form_register_annual_income" placeholder="Annual Income" min="100000"
                                    value="" aria-describedby="form_register_annual_income_help">
                                <small id="form_register_annual_income_help" class="form-text text-muted">
                                    Your annual income must be over $100,000
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="form_register_region_tb_support">Region to be support</label>
                                <select class="form-control form-select" name="region_tb_support"
                                    aria-label="Default select example" id="form_register_region_tb_support">
                                    @foreach (\App\Models\Region::all() as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row pb-4">
                                <div class="col-sm-12">
                                    <label>Available Times</label><br>
                                    <small>select 0 and 0 for not available</small>
                                </div>
                                <div class="col-md-6 sol-sm-12">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Fri: </label>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-control form-select" name="available_times[fri][]"
                                                aria-label="Default select example">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-control form-select" name="available_times[fri][]"
                                                aria-label="Default select example">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 sol-sm-12">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Mon: </label>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-control form-select" name="available_times[mon][]"
                                                aria-label="Default select example">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-control form-select" name="available_times[mon][]"
                                                aria-label="Default select example">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 sol-sm-12">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Sat: </label>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-control form-select" name="available_times[sat][]"
                                                aria-label="Default select example">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-control form-select" name="available_times[sat][]"
                                                aria-label="Default select example">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 sol-sm-12">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Sun: </label>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-control form-select" name="available_times[sun][]"
                                                aria-label="Default select example">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-control form-select" name="available_times[sun][]"
                                                aria-label="Default select example">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 sol-sm-12">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Thu: </label>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-control form-select" name="available_times[thu][]"
                                                aria-label="Default select example">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-control form-select" name="available_times[thu][]"
                                                aria-label="Default select example">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 sol-sm-12">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Tue: </label>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-control form-select" name="available_times[tue][]"
                                                aria-label="Default select example">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-control form-select" name="available_times[tue][]"
                                                aria-label="Default select example">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 sol-sm-12">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Wed: </label>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-control form-select" name="available_times[wed][]"
                                                aria-label="Default select example">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                        <div class="col-auto">
                                            <select class="form-control form-select" name="available_times[wed][]"
                                                aria-label="Default select example">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="default-btn">Join Us</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
@endsection
