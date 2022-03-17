<?php

namespace App\Http\Controllers\API\HRM;

use App\Models\HRM\OTLevel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OTLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'otLevels' => OTLevel::orderBy('name')->get()
        ]);
        // return OTLevelResource::collection(OTLevel::get());
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
            'hours' => ['required']
        ]);

        $store = OTLevel::create($request->only(['name', 'hours']));
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
            'otLevel' => OTLevel::find($id)
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
            'hours' => ['required']
        ]);

        $update = OTLevel::find($id)->update($request->only(['name', 'hours']));
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
        $delete = OTLevel::find($id)->delete();
        if($delete){
            return response()->json(['success' => true]);
        }
    }
}
