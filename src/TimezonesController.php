<?php

namespace Hrtest1\Timezonestest;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{

    public function index($timezone = NULL)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-','/',$timezone))
            : Carbon::now();
        return view('timezones::test',compact('current_time'));
    }

}