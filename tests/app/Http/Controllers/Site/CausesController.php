<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CausesController extends Controller
{
    public function show()
    {
        return view('site.causes');
    }
}
