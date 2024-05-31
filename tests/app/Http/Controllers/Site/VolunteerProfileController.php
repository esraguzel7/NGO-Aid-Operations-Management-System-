<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\VolunteerUpdateProfileRequest;
use Illuminate\Http\Request;

class VolunteerProfileController extends Controller
{
    public function show()
    {
        return view('site.profile.volunteer');
    }

    public function post(VolunteerUpdateProfileRequest $request): \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
    {
        $validated = $request->validated();

        \Auth::user()->annual_income = $request->get('annual_income');
        \Auth::user()->transportation = $request->get('transportation') ? $request->get('transportation') : false;

        $available_times = [];
        foreach ($request->get('available_times') as $key => $value)
            $available_times[$key] = [intval($value[0]), intval($value[1])];

        \Auth::user()->available_times = $available_times;
        \Auth::user()->region_tb_support = $request->get('region_tb_support');
        \Auth::user()->save();

        return redirect()->route('site.profile.volunteer.show')->withErrors("Your profile information has been updated", "update_success");
    }
}
