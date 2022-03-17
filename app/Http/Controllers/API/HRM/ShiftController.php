<?php

namespace App\Http\Controllers\API\HRM;

use App\Models\HRM\Shift;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HRM\ShiftRequest;

class ShiftController extends Controller
{

    private $data = [];

    public function __construct(Request $request)
    {
        $this->data = $request->only(['name', 'description']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'shifts' => Shift::get()
        ]);
        // return ShiftResource::collection(Shift::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShiftRequest $request)
    {
        $store = Shift::create($this->data);
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
            'shift' => Shift::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShiftRequest $request, $id)
    {
        $update = Shift::find($id)->update($this->data);
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
        $delete = Shift::find($id)->delete();
        if($delete){
            return response()->json(['success' => true]);
        }
    }
}
