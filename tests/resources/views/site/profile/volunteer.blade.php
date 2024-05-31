@extends('site.extends.main')


{{-- Content Area --}}
@section('content')
    <div class="pager-header about-page">
        <div class="container">
            <div class="page-content">
                <h2>Profile</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{!! route('site.home.show') !!}">Home</a></li>
                    <li class="breadcrumb-item active">Profile - {{ Auth::user()->name }} {{ Auth::user()->surname }}</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="about-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="row about-wrap">
                <div class="col-md-12 xs-padding">
                    <div class="about-content">
                        <h2>{{ Auth::user()->name }} {{ Auth::user()->surname }}</h2>
                        <p>You can use the form below to update your profile information.</p>

                        @if ($errors->hasBag('update_error'))
                            <div class="alert alert-danger" role="alert">
                                <h4 class="mb-0">
                                    {{ $errors->update_error->first() }}
                                </h4>
                            </div>
                        @endif

                        @if ($errors->hasBag('update_success'))
                            <div class="alert alert-success" role="alert">
                                <h4 class="mb-0">
                                    {{ $errors->update_success->first() }}
                                </h4>
                            </div>
                        @endif

                        <form action="{!! route('site.profile.volunteer.post') !!}" method="post">
                            @csrf
                            <div class="row pb-4">
                                <div class="form-group px-4 col-sm-12 col-md-4">
                                    <input class="form-check-input" name="transportation" type="checkbox" value=""
                                        id="form_register_transportation"
                                        aria-describedby="form_register_transportation_help" @checked(Auth::user()->transportation)>
                                    <label class="form-check-label" for="form_register_transportation">
                                        Transportation
                                    </label>
                                    <small id="form_register_transportation_help" class="form-text text-muted">
                                        I can go to a planned event with my own means
                                    </small>
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="form_register_phone">Annual Income</label>
                                    <input type="number" name="annual_income" class="form-control"
                                        id="form_register_annual_income" placeholder="Annual Income" min="100000"
                                        value="{{ Auth::user()->annual_income }}"
                                        aria-describedby="form_register_annual_income_help">
                                    <small id="form_register_annual_income_help" class="form-text text-muted">
                                        Your annual income must be over $100,000
                                    </small>
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="form_register_region_tb_support">Region to be support</label>
                                    <select class="form-control form-select" name="region_tb_support"
                                        aria-label="Default select example" id="form_register_region_tb_support">
                                        @foreach (\App\Models\Region::all() as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($item->id == Auth::user()->region_tb_support) @selected(true) @endif>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row col-sm-12 pb-4">
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
                                                    <option value="0" @selected(Auth::user()->available_times['fri'][0] == 0)>0</option>
                                                    <option value="1" @selected(Auth::user()->available_times['fri'][0] == 1)>1</option>
                                                    <option value="2" @selected(Auth::user()->available_times['fri'][0] == 2)>2</option>
                                                    <option value="3" @selected(Auth::user()->available_times['fri'][0] == 3)>3</option>
                                                    <option value="4" @selected(Auth::user()->available_times['fri'][0] == 4)>4</option>
                                                    <option value="5" @selected(Auth::user()->available_times['fri'][0] == 5)>5</option>
                                                    <option value="6" @selected(Auth::user()->available_times['fri'][0] == 6)>6</option>
                                                    <option value="7" @selected(Auth::user()->available_times['fri'][0] == 7)>7</option>
                                                    <option value="8" @selected(Auth::user()->available_times['fri'][0] == 8)>8</option>
                                                    <option value="9" @selected(Auth::user()->available_times['fri'][0] == 9)>9</option>
                                                    <option value="10" @selected(Auth::user()->available_times['fri'][0] == 10)>10</option>
                                                    <option value="11" @selected(Auth::user()->available_times['fri'][0] == 11)>11</option>
                                                    <option value="12" @selected(Auth::user()->available_times['fri'][0] == 12)>12</option>
                                                    <option value="13" @selected(Auth::user()->available_times['fri'][0] == 13)>13</option>
                                                    <option value="14" @selected(Auth::user()->available_times['fri'][0] == 14)>14</option>
                                                    <option value="15" @selected(Auth::user()->available_times['fri'][0] == 15)>15</option>
                                                    <option value="16" @selected(Auth::user()->available_times['fri'][0] == 16)>16</option>
                                                    <option value="17" @selected(Auth::user()->available_times['fri'][0] == 17)>17</option>
                                                    <option value="18" @selected(Auth::user()->available_times['fri'][0] == 18)>18</option>
                                                    <option value="19" @selected(Auth::user()->available_times['fri'][0] == 19)>19</option>
                                                    <option value="20" @selected(Auth::user()->available_times['fri'][0] == 20)>20</option>
                                                    <option value="21" @selected(Auth::user()->available_times['fri'][0] == 21)>21</option>
                                                    <option value="22" @selected(Auth::user()->available_times['fri'][0] == 22)>22</option>
                                                    <option value="23" @selected(Auth::user()->available_times['fri'][0] == 23)>23</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <select class="form-control form-select" name="available_times[fri][]"
                                                    aria-label="Default select example">
                                                    <option value="0" @selected(Auth::user()->available_times['fri'][1] == 0)>0</option>
                                                    <option value="1" @selected(Auth::user()->available_times['fri'][1] == 1)>1</option>
                                                    <option value="2" @selected(Auth::user()->available_times['fri'][1] == 2)>2</option>
                                                    <option value="3" @selected(Auth::user()->available_times['fri'][1] == 3)>3</option>
                                                    <option value="4" @selected(Auth::user()->available_times['fri'][1] == 4)>4</option>
                                                    <option value="5" @selected(Auth::user()->available_times['fri'][1] == 5)>5</option>
                                                    <option value="6" @selected(Auth::user()->available_times['fri'][1] == 6)>6</option>
                                                    <option value="7" @selected(Auth::user()->available_times['fri'][1] == 7)>7</option>
                                                    <option value="8" @selected(Auth::user()->available_times['fri'][1] == 8)>8</option>
                                                    <option value="9" @selected(Auth::user()->available_times['fri'][1] == 9)>9</option>
                                                    <option value="10" @selected(Auth::user()->available_times['fri'][1] == 10)>10</option>
                                                    <option value="11" @selected(Auth::user()->available_times['fri'][1] == 11)>11</option>
                                                    <option value="12" @selected(Auth::user()->available_times['fri'][1] == 12)>12</option>
                                                    <option value="13" @selected(Auth::user()->available_times['fri'][1] == 13)>13</option>
                                                    <option value="14" @selected(Auth::user()->available_times['fri'][1] == 14)>14</option>
                                                    <option value="15" @selected(Auth::user()->available_times['fri'][1] == 15)>15</option>
                                                    <option value="16" @selected(Auth::user()->available_times['fri'][1] == 16)>16</option>
                                                    <option value="17" @selected(Auth::user()->available_times['fri'][1] == 17)>17</option>
                                                    <option value="18" @selected(Auth::user()->available_times['fri'][1] == 18)>18</option>
                                                    <option value="19" @selected(Auth::user()->available_times['fri'][1] == 19)>19</option>
                                                    <option value="20" @selected(Auth::user()->available_times['fri'][1] == 20)>20</option>
                                                    <option value="21" @selected(Auth::user()->available_times['fri'][1] == 21)>21</option>
                                                    <option value="22" @selected(Auth::user()->available_times['fri'][1] == 22)>22</option>
                                                    <option value="23" @selected(Auth::user()->available_times['fri'][1] == 23)>23</option>
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
                                                    <option value="0" @selected(Auth::user()->available_times['mon'][0] == 0)>0</option>
                                                    <option value="1" @selected(Auth::user()->available_times['mon'][0] == 1)>1</option>
                                                    <option value="2" @selected(Auth::user()->available_times['mon'][0] == 2)>2</option>
                                                    <option value="3" @selected(Auth::user()->available_times['mon'][0] == 3)>3</option>
                                                    <option value="4" @selected(Auth::user()->available_times['mon'][0] == 4)>4</option>
                                                    <option value="5" @selected(Auth::user()->available_times['mon'][0] == 5)>5</option>
                                                    <option value="6" @selected(Auth::user()->available_times['mon'][0] == 6)>6</option>
                                                    <option value="7" @selected(Auth::user()->available_times['mon'][0] == 7)>7</option>
                                                    <option value="8" @selected(Auth::user()->available_times['mon'][0] == 8)>8</option>
                                                    <option value="9" @selected(Auth::user()->available_times['mon'][0] == 9)>9</option>
                                                    <option value="10" @selected(Auth::user()->available_times['mon'][0] == 10)>10</option>
                                                    <option value="11" @selected(Auth::user()->available_times['mon'][0] == 11)>11</option>
                                                    <option value="12" @selected(Auth::user()->available_times['mon'][0] == 12)>12</option>
                                                    <option value="13" @selected(Auth::user()->available_times['mon'][0] == 13)>13</option>
                                                    <option value="14" @selected(Auth::user()->available_times['mon'][0] == 14)>14</option>
                                                    <option value="15" @selected(Auth::user()->available_times['mon'][0] == 15)>15</option>
                                                    <option value="16" @selected(Auth::user()->available_times['mon'][0] == 16)>16</option>
                                                    <option value="17" @selected(Auth::user()->available_times['mon'][0] == 17)>17</option>
                                                    <option value="18" @selected(Auth::user()->available_times['mon'][0] == 18)>18</option>
                                                    <option value="19" @selected(Auth::user()->available_times['mon'][0] == 19)>19</option>
                                                    <option value="20" @selected(Auth::user()->available_times['mon'][0] == 20)>20</option>
                                                    <option value="21" @selected(Auth::user()->available_times['mon'][0] == 21)>21</option>
                                                    <option value="22" @selected(Auth::user()->available_times['mon'][0] == 22)>22</option>
                                                    <option value="23" @selected(Auth::user()->available_times['mon'][0] == 23)>23</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <select class="form-control form-select" name="available_times[mon][]"
                                                    aria-label="Default select example">
                                                    <option value="0" @selected(Auth::user()->available_times['mon'][1] == 0)>0</option>
                                                    <option value="1" @selected(Auth::user()->available_times['mon'][1] == 1)>1</option>
                                                    <option value="2" @selected(Auth::user()->available_times['mon'][1] == 2)>2</option>
                                                    <option value="3" @selected(Auth::user()->available_times['mon'][1] == 3)>3</option>
                                                    <option value="4" @selected(Auth::user()->available_times['mon'][1] == 4)>4</option>
                                                    <option value="5" @selected(Auth::user()->available_times['mon'][1] == 5)>5</option>
                                                    <option value="6" @selected(Auth::user()->available_times['mon'][1] == 6)>6</option>
                                                    <option value="7" @selected(Auth::user()->available_times['mon'][1] == 7)>7</option>
                                                    <option value="8" @selected(Auth::user()->available_times['mon'][1] == 8)>8</option>
                                                    <option value="9" @selected(Auth::user()->available_times['mon'][1] == 9)>9</option>
                                                    <option value="10" @selected(Auth::user()->available_times['mon'][1] == 10)>10</option>
                                                    <option value="11" @selected(Auth::user()->available_times['mon'][1] == 11)>11</option>
                                                    <option value="12" @selected(Auth::user()->available_times['mon'][1] == 12)>12</option>
                                                    <option value="13" @selected(Auth::user()->available_times['mon'][1] == 13)>13</option>
                                                    <option value="14" @selected(Auth::user()->available_times['mon'][1] == 14)>14</option>
                                                    <option value="15" @selected(Auth::user()->available_times['mon'][1] == 15)>15</option>
                                                    <option value="16" @selected(Auth::user()->available_times['mon'][1] == 16)>16</option>
                                                    <option value="17" @selected(Auth::user()->available_times['mon'][1] == 17)>17</option>
                                                    <option value="18" @selected(Auth::user()->available_times['mon'][1] == 18)>18</option>
                                                    <option value="19" @selected(Auth::user()->available_times['mon'][1] == 19)>19</option>
                                                    <option value="20" @selected(Auth::user()->available_times['mon'][1] == 20)>20</option>
                                                    <option value="21" @selected(Auth::user()->available_times['mon'][1] == 21)>21</option>
                                                    <option value="22" @selected(Auth::user()->available_times['mon'][1] == 22)>22</option>
                                                    <option value="23" @selected(Auth::user()->available_times['mon'][1] == 23)>23</option>
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
                                                    <option value="0" @selected(Auth::user()->available_times['sat'][0] == 0)>0</option>
                                                    <option value="1" @selected(Auth::user()->available_times['sat'][0] == 1)>1</option>
                                                    <option value="2" @selected(Auth::user()->available_times['sat'][0] == 2)>2</option>
                                                    <option value="3" @selected(Auth::user()->available_times['sat'][0] == 3)>3</option>
                                                    <option value="4" @selected(Auth::user()->available_times['sat'][0] == 4)>4</option>
                                                    <option value="5" @selected(Auth::user()->available_times['sat'][0] == 5)>5</option>
                                                    <option value="6" @selected(Auth::user()->available_times['sat'][0] == 6)>6</option>
                                                    <option value="7" @selected(Auth::user()->available_times['sat'][0] == 7)>7</option>
                                                    <option value="8" @selected(Auth::user()->available_times['sat'][0] == 8)>8</option>
                                                    <option value="9" @selected(Auth::user()->available_times['sat'][0] == 9)>9</option>
                                                    <option value="10" @selected(Auth::user()->available_times['sat'][0] == 10)>10</option>
                                                    <option value="11" @selected(Auth::user()->available_times['sat'][0] == 11)>11</option>
                                                    <option value="12" @selected(Auth::user()->available_times['sat'][0] == 12)>12</option>
                                                    <option value="13" @selected(Auth::user()->available_times['sat'][0] == 13)>13</option>
                                                    <option value="14" @selected(Auth::user()->available_times['sat'][0] == 14)>14</option>
                                                    <option value="15" @selected(Auth::user()->available_times['sat'][0] == 15)>15</option>
                                                    <option value="16" @selected(Auth::user()->available_times['sat'][0] == 16)>16</option>
                                                    <option value="17" @selected(Auth::user()->available_times['sat'][0] == 17)>17</option>
                                                    <option value="18" @selected(Auth::user()->available_times['sat'][0] == 18)>18</option>
                                                    <option value="19" @selected(Auth::user()->available_times['sat'][0] == 19)>19</option>
                                                    <option value="20" @selected(Auth::user()->available_times['sat'][0] == 20)>20</option>
                                                    <option value="21" @selected(Auth::user()->available_times['sat'][0] == 21)>21</option>
                                                    <option value="22" @selected(Auth::user()->available_times['sat'][0] == 22)>22</option>
                                                    <option value="23" @selected(Auth::user()->available_times['sat'][0] == 23)>23</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <select class="form-control form-select" name="available_times[sat][]"
                                                    aria-label="Default select example">
                                                    <option value="0" @selected(Auth::user()->available_times['sat'][1] == 0)>0</option>
                                                    <option value="1" @selected(Auth::user()->available_times['sat'][1] == 1)>1</option>
                                                    <option value="2" @selected(Auth::user()->available_times['sat'][1] == 2)>2</option>
                                                    <option value="3" @selected(Auth::user()->available_times['sat'][1] == 3)>3</option>
                                                    <option value="4" @selected(Auth::user()->available_times['sat'][1] == 4)>4</option>
                                                    <option value="5" @selected(Auth::user()->available_times['sat'][1] == 5)>5</option>
                                                    <option value="6" @selected(Auth::user()->available_times['sat'][1] == 6)>6</option>
                                                    <option value="7" @selected(Auth::user()->available_times['sat'][1] == 7)>7</option>
                                                    <option value="8" @selected(Auth::user()->available_times['sat'][1] == 8)>8</option>
                                                    <option value="9" @selected(Auth::user()->available_times['sat'][1] == 9)>9</option>
                                                    <option value="10" @selected(Auth::user()->available_times['sat'][1] == 10)>10</option>
                                                    <option value="11" @selected(Auth::user()->available_times['sat'][1] == 11)>11</option>
                                                    <option value="12" @selected(Auth::user()->available_times['sat'][1] == 12)>12</option>
                                                    <option value="13" @selected(Auth::user()->available_times['sat'][1] == 13)>13</option>
                                                    <option value="14" @selected(Auth::user()->available_times['sat'][1] == 14)>14</option>
                                                    <option value="15" @selected(Auth::user()->available_times['sat'][1] == 15)>15</option>
                                                    <option value="16" @selected(Auth::user()->available_times['sat'][1] == 16)>16</option>
                                                    <option value="17" @selected(Auth::user()->available_times['sat'][1] == 17)>17</option>
                                                    <option value="18" @selected(Auth::user()->available_times['sat'][1] == 18)>18</option>
                                                    <option value="19" @selected(Auth::user()->available_times['sat'][1] == 19)>19</option>
                                                    <option value="20" @selected(Auth::user()->available_times['sat'][1] == 20)>20</option>
                                                    <option value="21" @selected(Auth::user()->available_times['sat'][1] == 21)>21</option>
                                                    <option value="22" @selected(Auth::user()->available_times['sat'][1] == 22)>22</option>
                                                    <option value="23" @selected(Auth::user()->available_times['sat'][1] == 23)>23</option>
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
                                                    <option value="0" @selected(Auth::user()->available_times['sun'][0] == 0)>0</option>
                                                    <option value="1" @selected(Auth::user()->available_times['sun'][0] == 1)>1</option>
                                                    <option value="2" @selected(Auth::user()->available_times['sun'][0] == 2)>2</option>
                                                    <option value="3" @selected(Auth::user()->available_times['sun'][0] == 3)>3</option>
                                                    <option value="4" @selected(Auth::user()->available_times['sun'][0] == 4)>4</option>
                                                    <option value="5" @selected(Auth::user()->available_times['sun'][0] == 5)>5</option>
                                                    <option value="6" @selected(Auth::user()->available_times['sun'][0] == 6)>6</option>
                                                    <option value="7" @selected(Auth::user()->available_times['sun'][0] == 7)>7</option>
                                                    <option value="8" @selected(Auth::user()->available_times['sun'][0] == 8)>8</option>
                                                    <option value="9" @selected(Auth::user()->available_times['sun'][0] == 9)>9</option>
                                                    <option value="10" @selected(Auth::user()->available_times['sun'][0] == 10)>10</option>
                                                    <option value="11" @selected(Auth::user()->available_times['sun'][0] == 11)>11</option>
                                                    <option value="12" @selected(Auth::user()->available_times['sun'][0] == 12)>12</option>
                                                    <option value="13" @selected(Auth::user()->available_times['sun'][0] == 13)>13</option>
                                                    <option value="14" @selected(Auth::user()->available_times['sun'][0] == 14)>14</option>
                                                    <option value="15" @selected(Auth::user()->available_times['sun'][0] == 15)>15</option>
                                                    <option value="16" @selected(Auth::user()->available_times['sun'][0] == 16)>16</option>
                                                    <option value="17" @selected(Auth::user()->available_times['sun'][0] == 17)>17</option>
                                                    <option value="18" @selected(Auth::user()->available_times['sun'][0] == 18)>18</option>
                                                    <option value="19" @selected(Auth::user()->available_times['sun'][0] == 19)>19</option>
                                                    <option value="20" @selected(Auth::user()->available_times['sun'][0] == 20)>20</option>
                                                    <option value="21" @selected(Auth::user()->available_times['sun'][0] == 21)>21</option>
                                                    <option value="22" @selected(Auth::user()->available_times['sun'][0] == 22)>22</option>
                                                    <option value="23" @selected(Auth::user()->available_times['sun'][0] == 23)>23</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <select class="form-control form-select" name="available_times[sun][]"
                                                    aria-label="Default select example">
                                                    <option value="0" @selected(Auth::user()->available_times['sun'][1] == 0)>0</option>
                                                    <option value="1" @selected(Auth::user()->available_times['sun'][1] == 1)>1</option>
                                                    <option value="2" @selected(Auth::user()->available_times['sun'][1] == 2)>2</option>
                                                    <option value="3" @selected(Auth::user()->available_times['sun'][1] == 3)>3</option>
                                                    <option value="4" @selected(Auth::user()->available_times['sun'][1] == 4)>4</option>
                                                    <option value="5" @selected(Auth::user()->available_times['sun'][1] == 5)>5</option>
                                                    <option value="6" @selected(Auth::user()->available_times['sun'][1] == 6)>6</option>
                                                    <option value="7" @selected(Auth::user()->available_times['sun'][1] == 7)>7</option>
                                                    <option value="8" @selected(Auth::user()->available_times['sun'][1] == 8)>8</option>
                                                    <option value="9" @selected(Auth::user()->available_times['sun'][1] == 9)>9</option>
                                                    <option value="10" @selected(Auth::user()->available_times['sun'][1] == 10)>10</option>
                                                    <option value="11" @selected(Auth::user()->available_times['sun'][1] == 11)>11</option>
                                                    <option value="12" @selected(Auth::user()->available_times['sun'][1] == 12)>12</option>
                                                    <option value="13" @selected(Auth::user()->available_times['sun'][1] == 13)>13</option>
                                                    <option value="14" @selected(Auth::user()->available_times['sun'][1] == 14)>14</option>
                                                    <option value="15" @selected(Auth::user()->available_times['sun'][1] == 15)>15</option>
                                                    <option value="16" @selected(Auth::user()->available_times['sun'][1] == 16)>16</option>
                                                    <option value="17" @selected(Auth::user()->available_times['sun'][1] == 17)>17</option>
                                                    <option value="18" @selected(Auth::user()->available_times['sun'][1] == 18)>18</option>
                                                    <option value="19" @selected(Auth::user()->available_times['sun'][1] == 19)>19</option>
                                                    <option value="20" @selected(Auth::user()->available_times['sun'][1] == 20)>20</option>
                                                    <option value="21" @selected(Auth::user()->available_times['sun'][1] == 21)>21</option>
                                                    <option value="22" @selected(Auth::user()->available_times['sun'][1] == 22)>22</option>
                                                    <option value="23" @selected(Auth::user()->available_times['sun'][1] == 23)>23</option>
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
                                                    <option value="0" @selected(Auth::user()->available_times['thu'][0] == 0)>0</option>
                                                    <option value="1" @selected(Auth::user()->available_times['thu'][0] == 1)>1</option>
                                                    <option value="2" @selected(Auth::user()->available_times['thu'][0] == 2)>2</option>
                                                    <option value="3" @selected(Auth::user()->available_times['thu'][0] == 3)>3</option>
                                                    <option value="4" @selected(Auth::user()->available_times['thu'][0] == 4)>4</option>
                                                    <option value="5" @selected(Auth::user()->available_times['thu'][0] == 5)>5</option>
                                                    <option value="6" @selected(Auth::user()->available_times['thu'][0] == 6)>6</option>
                                                    <option value="7" @selected(Auth::user()->available_times['thu'][0] == 7)>7</option>
                                                    <option value="8" @selected(Auth::user()->available_times['thu'][0] == 8)>8</option>
                                                    <option value="9" @selected(Auth::user()->available_times['thu'][0] == 9)>9</option>
                                                    <option value="10" @selected(Auth::user()->available_times['thu'][0] == 10)>10</option>
                                                    <option value="11" @selected(Auth::user()->available_times['thu'][0] == 11)>11</option>
                                                    <option value="12" @selected(Auth::user()->available_times['thu'][0] == 12)>12</option>
                                                    <option value="13" @selected(Auth::user()->available_times['thu'][0] == 13)>13</option>
                                                    <option value="14" @selected(Auth::user()->available_times['thu'][0] == 14)>14</option>
                                                    <option value="15" @selected(Auth::user()->available_times['thu'][0] == 15)>15</option>
                                                    <option value="16" @selected(Auth::user()->available_times['thu'][0] == 16)>16</option>
                                                    <option value="17" @selected(Auth::user()->available_times['thu'][0] == 17)>17</option>
                                                    <option value="18" @selected(Auth::user()->available_times['thu'][0] == 18)>18</option>
                                                    <option value="19" @selected(Auth::user()->available_times['thu'][0] == 19)>19</option>
                                                    <option value="20" @selected(Auth::user()->available_times['thu'][0] == 20)>20</option>
                                                    <option value="21" @selected(Auth::user()->available_times['thu'][0] == 21)>21</option>
                                                    <option value="22" @selected(Auth::user()->available_times['thu'][0] == 22)>22</option>
                                                    <option value="23" @selected(Auth::user()->available_times['thu'][0] == 23)>23</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <select class="form-control form-select" name="available_times[thu][]"
                                                    aria-label="Default select example">
                                                    <option value="0" @selected(Auth::user()->available_times['thu'][1] == 0)>0</option>
                                                    <option value="1" @selected(Auth::user()->available_times['thu'][1] == 1)>1</option>
                                                    <option value="2" @selected(Auth::user()->available_times['thu'][1] == 2)>2</option>
                                                    <option value="3" @selected(Auth::user()->available_times['thu'][1] == 3)>3</option>
                                                    <option value="4" @selected(Auth::user()->available_times['thu'][1] == 4)>4</option>
                                                    <option value="5" @selected(Auth::user()->available_times['thu'][1] == 5)>5</option>
                                                    <option value="6" @selected(Auth::user()->available_times['thu'][1] == 6)>6</option>
                                                    <option value="7" @selected(Auth::user()->available_times['thu'][1] == 7)>7</option>
                                                    <option value="8" @selected(Auth::user()->available_times['thu'][1] == 8)>8</option>
                                                    <option value="9" @selected(Auth::user()->available_times['thu'][1] == 9)>9</option>
                                                    <option value="10" @selected(Auth::user()->available_times['thu'][1] == 10)>10</option>
                                                    <option value="11" @selected(Auth::user()->available_times['thu'][1] == 11)>11</option>
                                                    <option value="12" @selected(Auth::user()->available_times['thu'][1] == 12)>12</option>
                                                    <option value="13" @selected(Auth::user()->available_times['thu'][1] == 13)>13</option>
                                                    <option value="14" @selected(Auth::user()->available_times['thu'][1] == 14)>14</option>
                                                    <option value="15" @selected(Auth::user()->available_times['thu'][1] == 15)>15</option>
                                                    <option value="16" @selected(Auth::user()->available_times['thu'][1] == 16)>16</option>
                                                    <option value="17" @selected(Auth::user()->available_times['thu'][1] == 17)>17</option>
                                                    <option value="18" @selected(Auth::user()->available_times['thu'][1] == 18)>18</option>
                                                    <option value="19" @selected(Auth::user()->available_times['thu'][1] == 19)>19</option>
                                                    <option value="20" @selected(Auth::user()->available_times['thu'][1] == 20)>20</option>
                                                    <option value="21" @selected(Auth::user()->available_times['thu'][1] == 21)>21</option>
                                                    <option value="22" @selected(Auth::user()->available_times['thu'][1] == 22)>22</option>
                                                    <option value="23" @selected(Auth::user()->available_times['thu'][1] == 23)>23</option>
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
                                                    <option value="0" @selected(Auth::user()->available_times['tue'][0] == 0)>0</option>
                                                    <option value="1" @selected(Auth::user()->available_times['tue'][0] == 1)>1</option>
                                                    <option value="2" @selected(Auth::user()->available_times['tue'][0] == 2)>2</option>
                                                    <option value="3" @selected(Auth::user()->available_times['tue'][0] == 3)>3</option>
                                                    <option value="4" @selected(Auth::user()->available_times['tue'][0] == 4)>4</option>
                                                    <option value="5" @selected(Auth::user()->available_times['tue'][0] == 5)>5</option>
                                                    <option value="6" @selected(Auth::user()->available_times['tue'][0] == 6)>6</option>
                                                    <option value="7" @selected(Auth::user()->available_times['tue'][0] == 7)>7</option>
                                                    <option value="8" @selected(Auth::user()->available_times['tue'][0] == 8)>8</option>
                                                    <option value="9" @selected(Auth::user()->available_times['tue'][0] == 9)>9</option>
                                                    <option value="10" @selected(Auth::user()->available_times['tue'][0] == 10)>10</option>
                                                    <option value="11" @selected(Auth::user()->available_times['tue'][0] == 11)>11</option>
                                                    <option value="12" @selected(Auth::user()->available_times['tue'][0] == 12)>12</option>
                                                    <option value="13" @selected(Auth::user()->available_times['tue'][0] == 13)>13</option>
                                                    <option value="14" @selected(Auth::user()->available_times['tue'][0] == 14)>14</option>
                                                    <option value="15" @selected(Auth::user()->available_times['tue'][0] == 15)>15</option>
                                                    <option value="16" @selected(Auth::user()->available_times['tue'][0] == 16)>16</option>
                                                    <option value="17" @selected(Auth::user()->available_times['tue'][0] == 17)>17</option>
                                                    <option value="18" @selected(Auth::user()->available_times['tue'][0] == 18)>18</option>
                                                    <option value="19" @selected(Auth::user()->available_times['tue'][0] == 19)>19</option>
                                                    <option value="20" @selected(Auth::user()->available_times['tue'][0] == 20)>20</option>
                                                    <option value="21" @selected(Auth::user()->available_times['tue'][0] == 21)>21</option>
                                                    <option value="22" @selected(Auth::user()->available_times['tue'][0] == 22)>22</option>
                                                    <option value="23" @selected(Auth::user()->available_times['tue'][0] == 23)>23</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <select class="form-control form-select" name="available_times[tue][]"
                                                    aria-label="Default select example">
                                                    <option value="0" @selected(Auth::user()->available_times['tue'][1] == 0)>0</option>
                                                    <option value="1" @selected(Auth::user()->available_times['tue'][1] == 1)>1</option>
                                                    <option value="2" @selected(Auth::user()->available_times['tue'][1] == 2)>2</option>
                                                    <option value="3" @selected(Auth::user()->available_times['tue'][1] == 3)>3</option>
                                                    <option value="4" @selected(Auth::user()->available_times['tue'][1] == 4)>4</option>
                                                    <option value="5" @selected(Auth::user()->available_times['tue'][1] == 5)>5</option>
                                                    <option value="6" @selected(Auth::user()->available_times['tue'][1] == 6)>6</option>
                                                    <option value="7" @selected(Auth::user()->available_times['tue'][1] == 7)>7</option>
                                                    <option value="8" @selected(Auth::user()->available_times['tue'][1] == 8)>8</option>
                                                    <option value="9" @selected(Auth::user()->available_times['tue'][1] == 9)>9</option>
                                                    <option value="10" @selected(Auth::user()->available_times['tue'][1] == 10)>10</option>
                                                    <option value="11" @selected(Auth::user()->available_times['tue'][1] == 11)>11</option>
                                                    <option value="12" @selected(Auth::user()->available_times['tue'][1] == 12)>12</option>
                                                    <option value="13" @selected(Auth::user()->available_times['tue'][1] == 13)>13</option>
                                                    <option value="14" @selected(Auth::user()->available_times['tue'][1] == 14)>14</option>
                                                    <option value="15" @selected(Auth::user()->available_times['tue'][1] == 15)>15</option>
                                                    <option value="16" @selected(Auth::user()->available_times['tue'][1] == 16)>16</option>
                                                    <option value="17" @selected(Auth::user()->available_times['tue'][1] == 17)>17</option>
                                                    <option value="18" @selected(Auth::user()->available_times['tue'][1] == 18)>18</option>
                                                    <option value="19" @selected(Auth::user()->available_times['tue'][1] == 19)>19</option>
                                                    <option value="20" @selected(Auth::user()->available_times['tue'][1] == 20)>20</option>
                                                    <option value="21" @selected(Auth::user()->available_times['tue'][1] == 21)>21</option>
                                                    <option value="22" @selected(Auth::user()->available_times['tue'][1] == 22)>22</option>
                                                    <option value="23" @selected(Auth::user()->available_times['tue'][1] == 23)>23</option>
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
                                                    <option value="0" @selected(Auth::user()->available_times['wed'][0] == 0)>0</option>
                                                    <option value="1" @selected(Auth::user()->available_times['wed'][0] == 1)>1</option>
                                                    <option value="2" @selected(Auth::user()->available_times['wed'][0] == 2)>2</option>
                                                    <option value="3" @selected(Auth::user()->available_times['wed'][0] == 3)>3</option>
                                                    <option value="4" @selected(Auth::user()->available_times['wed'][0] == 4)>4</option>
                                                    <option value="5" @selected(Auth::user()->available_times['wed'][0] == 5)>5</option>
                                                    <option value="6" @selected(Auth::user()->available_times['wed'][0] == 6)>6</option>
                                                    <option value="7" @selected(Auth::user()->available_times['wed'][0] == 7)>7</option>
                                                    <option value="8" @selected(Auth::user()->available_times['wed'][0] == 8)>8</option>
                                                    <option value="9" @selected(Auth::user()->available_times['wed'][0] == 9)>9</option>
                                                    <option value="10" @selected(Auth::user()->available_times['wed'][0] == 10)>10</option>
                                                    <option value="11" @selected(Auth::user()->available_times['wed'][0] == 11)>11</option>
                                                    <option value="12" @selected(Auth::user()->available_times['wed'][0] == 12)>12</option>
                                                    <option value="13" @selected(Auth::user()->available_times['wed'][0] == 13)>13</option>
                                                    <option value="14" @selected(Auth::user()->available_times['wed'][0] == 14)>14</option>
                                                    <option value="15" @selected(Auth::user()->available_times['wed'][0] == 15)>15</option>
                                                    <option value="16" @selected(Auth::user()->available_times['wed'][0] == 16)>16</option>
                                                    <option value="17" @selected(Auth::user()->available_times['wed'][0] == 17)>17</option>
                                                    <option value="18" @selected(Auth::user()->available_times['wed'][0] == 18)>18</option>
                                                    <option value="19" @selected(Auth::user()->available_times['wed'][0] == 19)>19</option>
                                                    <option value="20" @selected(Auth::user()->available_times['wed'][0] == 20)>20</option>
                                                    <option value="21" @selected(Auth::user()->available_times['wed'][0] == 21)>21</option>
                                                    <option value="22" @selected(Auth::user()->available_times['wed'][0] == 22)>22</option>
                                                    <option value="23" @selected(Auth::user()->available_times['wed'][0] == 23)>23</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <select class="form-control form-select" name="available_times[wed][]"
                                                    aria-label="Default select example">
                                                    <option value="0" @selected(Auth::user()->available_times['wed'][1] == 0)>0</option>
                                                    <option value="1" @selected(Auth::user()->available_times['wed'][1] == 1)>1</option>
                                                    <option value="2" @selected(Auth::user()->available_times['wed'][1] == 2)>2</option>
                                                    <option value="3" @selected(Auth::user()->available_times['wed'][1] == 3)>3</option>
                                                    <option value="4" @selected(Auth::user()->available_times['wed'][1] == 4)>4</option>
                                                    <option value="5" @selected(Auth::user()->available_times['wed'][1] == 5)>5</option>
                                                    <option value="6" @selected(Auth::user()->available_times['wed'][1] == 6)>6</option>
                                                    <option value="7" @selected(Auth::user()->available_times['wed'][1] == 7)>7</option>
                                                    <option value="8" @selected(Auth::user()->available_times['wed'][1] == 8)>8</option>
                                                    <option value="9" @selected(Auth::user()->available_times['wed'][1] == 9)>9</option>
                                                    <option value="10" @selected(Auth::user()->available_times['wed'][1] == 10)>10</option>
                                                    <option value="11" @selected(Auth::user()->available_times['wed'][1] == 11)>11</option>
                                                    <option value="12" @selected(Auth::user()->available_times['wed'][1] == 12)>12</option>
                                                    <option value="13" @selected(Auth::user()->available_times['wed'][1] == 13)>13</option>
                                                    <option value="14" @selected(Auth::user()->available_times['wed'][1] == 14)>14</option>
                                                    <option value="15" @selected(Auth::user()->available_times['wed'][1] == 15)>15</option>
                                                    <option value="16" @selected(Auth::user()->available_times['wed'][1] == 16)>16</option>
                                                    <option value="17" @selected(Auth::user()->available_times['wed'][1] == 17)>17</option>
                                                    <option value="18" @selected(Auth::user()->available_times['wed'][1] == 18)>18</option>
                                                    <option value="19" @selected(Auth::user()->available_times['wed'][1] == 19)>19</option>
                                                    <option value="20" @selected(Auth::user()->available_times['wed'][1] == 20)>20</option>
                                                    <option value="21" @selected(Auth::user()->available_times['wed'][1] == 21)>21</option>
                                                    <option value="22" @selected(Auth::user()->available_times['wed'][1] == 22)>22</option>
                                                    <option value="23" @selected(Auth::user()->available_times['wed'][1] == 23)>23</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="default-btn">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
@endsection
