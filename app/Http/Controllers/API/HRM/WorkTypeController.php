<?php

namespace App\Http\Controllers\API\HRM;

use App\Models\HRM\WorkType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'workTypes' => WorkType::get()
        ]);
        // return WorkTypeResource::collection(WorkType::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
        ]);

        $store = WorkType::create($request->only(['name']));
        if($store){
            return response()->json(['success' => true]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'workType' => WorkType::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required'],
        ]);

        $update = WorkType::find($id)->update($request->only(['name']));
        if($update){
            return response()->json(['success' => true]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = WorkType::find($id)->delete();
        if($delete){
            return response()->json(['success' => true]);
        }
    }
}
