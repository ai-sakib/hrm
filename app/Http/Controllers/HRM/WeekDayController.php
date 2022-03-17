<?php

namespace App\Http\Controllers\HRM;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WeekDayController extends Controller
{
    public function index(){
        return view('hrm.week-days.index');
    }
}
