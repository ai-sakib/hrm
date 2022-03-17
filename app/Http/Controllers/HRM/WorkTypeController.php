<?php

namespace App\Http\Controllers\HRM;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('hrm.work-types.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hrm.work-types.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('hrm.work-types.edit', compact('id'));
    }
}
