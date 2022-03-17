<?php

namespace App\Http\Controllers\API\HRM;

use Carbon\Carbon;
use App\Models\HRM\Holiday;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $holidays =  Holiday::orderBy('date')->get()->groupBy(function($value) {
            return Carbon::parse($value->date)->format('F, Y');
        }); 

        return response()->json([
            'success' => true,
            'holidays' => $holidays
        ]);
    }

    public function monthWiseHolidays($month, $year)
    {
        // whereMonth('date',$month)->whereYear('date',$year)->
        $holidays =  Holiday::whereYear('date',$year)->get()->map(function ($holiday){
            $day['day'] = (int) date('d', strtotime($holiday->date));
            $day['month'] = (int) date('m', strtotime($holiday->date));
            $day['year'] = (int) date('Y', strtotime($holiday->date));
            $day['event'] = $holiday->description;

            return $day;
        });
        return response()->json([
            'success' => true,
            'holidays' => $holidays
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $isFound = Holiday::where('date',$request->date)->withTrashed()->first();
        if($isFound){
            $isFound->restore();
            $isFound->update($request->only(['date', 'description']));
            return response()->json(['success' => true]);
        }else{
            $holiday = Holiday::create($request->only(['date', 'description']));
            if($holiday){
                return response()->json(['success' => true]);
            }
        }
        return response()->json(['success' => false]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return response()->json([
            'success' => true,
            'holiday' => Holiday::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $holiday = Holiday::find($id);
        $dateFound = Holiday::where('id', '<>' , $id)->where('date', $request->date)->first();
        
        if(!$dateFound){
            $holiday->update($request->only(['date', 'description']));
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Holiday::find($id)->delete();
        if($delete){
            return response()->json(['success' => true]);
        }
    }
}
