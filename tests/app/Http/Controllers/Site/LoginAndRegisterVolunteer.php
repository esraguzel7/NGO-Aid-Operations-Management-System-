<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginVolunteerRequest;
use App\Http\Requests\RegisterVolunteerRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAndRegisterVolunteer extends Controller
{
    public function show()
    {
        return view('site.loginandregistervolunteer');
    }

    public function post_login(LoginVolunteerRequest $request): \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
    {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials))
            return redirect()->route('site.loginandregistervolunteer.show')
                ->withErrors("Login failed", "login_error");

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);
        $request->session()->put('area', 'site');

        return $this->authenticated($request, $user);
    }

    public function post_register(RegisterVolunteerRequest $request): \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
    {
        $validated = $request->validated();

        $new_user = new \App\Models\User();
        $new_user->name = $request->get('name');
        $new_user->surname = $request->get('surname');
        $new_user->email = $request->get('email');
        $new_user->email_verified_at = now();
        $new_user->password = Hash::make($request->get('password'));
        $new_user->gender = $request->get('gender');
        $new_user->phone = $request->get('phone');
        $new_user->annual_income = $request->get('annual_income');
        $new_user->transportation = $request->get('transportation') ? $request->get('transportation') : false;

        $available_times = [];
        foreach ($request->get('available_times') as $key => $value)
            $available_times[$key] = [intval($value[0]), intval($value[1])];

        $new_user->available_times = $available_times;
        $new_user->region_tb_support = $request->get('region_tb_support');
        $new_user->account_status = 0;
        $new_user->save();

        return redirect()->route('site.loginandregistervolunteer.show')->withErrors("Your membership request has been received. You can log in after review.", "register_success");
    }

    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }
}
