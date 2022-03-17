<?php

namespace App\Http\Controllers\HRM;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('hrm.holidays.index');
    }

    public function create()
    {
        return view('hrm.holidays.create');
    }

    public function edit($id)
    {
        return view('hrm.holidays.edit', compact('id'));
    }
    
}
