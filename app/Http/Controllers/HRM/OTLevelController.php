<?php

namespace App\Http\Controllers\HRM;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OTLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('hrm.ot-levels.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hrm.ot-levels.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('hrm.ot-levels.edit', compact('id'));
    }
}
