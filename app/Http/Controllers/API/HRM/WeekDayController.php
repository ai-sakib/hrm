<?php

namespace App\Http\Controllers\API\HRM;

use App\Models\HRM\WeekDay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WeekDayController extends Controller
{
    public function index(){
        return response()->json([
            'success' => true,
            'weekDays' => WeekDay::get()
        ]);
    }

    public function store(Request $request){

        $weekends = collect($request->weekDays)->where('is_weekend', true)->count();
        if($weekends > 3 || $weekends <= 0) return response()->json(['success' => false]);
        
        foreach($request->weekDays as $key => $weekDay){
            WeekDay::find($weekDay['id'])->update(['is_weekend' => $weekDay['is_weekend']]);
        }

        return response()->json(['success' => true]);
    }
}
